<?php
 /* ---------------------------------------------------------
    Power Phlogger  (c)2000-2003 Philip Iezzi
    $Id: mlistSend.php,v 1.11 2003/08/18 19:15:45 cvs_iezzi Exp $
    
    mlistSend.php mailing list
    ---------------------------------------------------------
    idea ported from 
    Newsletter-Script 5.2.1 by php-abc.com Development Team
    --------------------------------------------------------- */


/* avoid the maximum execution time limit
   This has no effect when PHP is running in safe mode ! */
@set_time_limit(0);

header ("Cache-Control: no-cache, must-revalidate"); 
header ("Pragma: no-cache"); 

if(!defined('NO_SESS')) define('NO_SESS', 1);
define('PPHL_SCRIPT_PATH' , '../');
include PPHL_SCRIPT_PATH."main_location.inc";

if(@$action == 'send') {
	
	$sql = "DELETE FROM ".PPHL_TBL_CACHE." WHERE id=0 AND (type = 'mlist_from' OR type = 'mlist_subj' OR type = 'mlist_body')";
	$res = mysqli_query($connected,$sql);
	
	$sql = "INSERT INTO ".PPHL_TBL_CACHE." (type,cache,time) VALUES ('mlist_from','".addslashes($mlist_from)."',$curr_gmt_time)";
	$res = mysqli_query($connected,$sql);
	$sql = "INSERT INTO ".PPHL_TBL_CACHE." (type,cache,time) VALUES ('mlist_subj','".addslashes($mlist_subj)."',$curr_gmt_time)";
	$res = mysqli_query($connected,$sql);
	$sql = "INSERT INTO ".PPHL_TBL_CACHE." (type,cache,time) VALUES ('mlist_body','".addslashes($mlist_body)."',$curr_gmt_time)";
	$res = mysqli_query($connected,$sql);
}

if(!isset($last_sent)) $last_sent = 0;

/* recall the same SQL statement and select all users who are beeing mailed */
$sql = "SELECT cache FROM ".PPHL_TBL_CACHE." WHERE id=0 AND type='mlist_sql'";
$res = mysqli_query($connected,$sql);
$mlist_sql  = stripslashes(mysqli_result($res,0,0));
$mlist_sql .= " LIMIT $last_sent,$mail_pack";
$mlist_res = mysqli_query($connected,$mlist_sql);

	while ($row = mysqli_fetch_array($mlist_res)) {
		
		$mlist_to = emailAdressString($row['email'],$row['username'],',');
		
		//get all email information
		$email_data = mysqli_query($connected,"SELECT type,cache FROM ".PPHL_TBL_CACHE." WHERE id=0 AND type LIKE 'mlist%'");
		while ($email_row = @mysqli_fetch_array($email_data)) {
			${$email_row['type']} = stripslashes($email_row['cache']);
		}
		
		$headers = getMailheader($mlist_from);
		
		/* this replaces all %strings% with its variables */
		while(preg_match('/(%.+%)/U',$mlist_body, $matches) == TRUE) {
			$matchvar = str_replace('%','',$matches[1]);
			if (isset($row[$matchvar])) $mlist_body = str_replace($matches[1], $row[$matchvar], $mlist_body);
		}
		while(preg_match('/(%.+%)/U',$mlist_subj, $matches) == TRUE) {
			$matchvar = str_replace('%','',$matches[1]);
			if (isset($row[$matchvar])) $mlist_subj = str_replace($matches[1], $row[$matchvar], $mlist_subj);
		}
		
		/* send the mail ! */
		@mail($mlist_to,$mlist_subj,$mlist_body,$headers);
		
		$last_sent++;
	}


if($last_sent < $num_mails) {
?>
<html>
<head>
<title>PowerPhlogger newsletter</title>
<meta http-equiv="refresh" content="2; URL=<?php echo $PHP_SELF; ?>?last_sent=<?php echo $last_sent; ?>&num_mails=<?php echo $num_mails; ?>&mail_pack=<?php echo $mail_pack; ?>">
</head>
<body bgcolor="#eeeeee" text="#000000">
<font face="Verdana" size="2">
<b>state:</b> <?php echo $last_sent; ?> / <?php echo $num_mails; ?> emails sent<br /><br /><br />
<b>sending:</b> <a href="<?php echo $PHP_SELF; ?>?last_sent=<?php echo $last_sent; ?>&num_mails=<?php echo $num_mails; ?>&mail_pack=<?php echo $mail_pack; ?>">click here</a> or wait 3 seconds
</font>
</body>
</html>
<?php
} else {
?>
<html>
<head>
<title>PowerPhlogger newsletter</title>
</head>
<body bgcolor="#eeeeee" text="#000000">
<font face="Verdana" size="2">
All emails (<?php echo $num_mails; ?>) have been sent!<br />
You can now close this window.
</font>
</body>
</html>

<?php
}
?>
