<?php
/*  ----------------------------------------------------------------
    agent_refresh.php
	$Id: agent_refresh.php,v 1.11 2003/08/18 19:15:10 cvs_iezzi Exp $
	
    This refreshes your agent browser/version/OS-extraction.
	WARNING: Running this script may take quite a while and it may 
	break due to your max_execution_time settings!
    ----------------------------------------------------------------
*/

@set_time_limit(0);
define('PPHL_DB_LOCK', FALSE);
define('NO_SESS', 1);
define('PPHL_SCRIPT_PATH', '../');
include PPHL_SCRIPT_PATH."main_location.inc";

$sql = "SELECT id,agent FROM ".PPHL_TBL_AGENTS;
$res = mysqli_query($connected,$sql);
while ($row = mysqli_fetch_array($res)) {
	$new_agt = extract_agent($row['agent']);
	if (is_array($new_agt)) {
		$sql = "UPDATE ".PPHL_TBL_AGENTS." "
		     . "SET browser = '".$new_agt[0]."', version = ".$new_agt[1].", "
			 . "version_st = '".$new_agt[2]."', system = '".$new_agt[3]."' "
		     . "WHERE id = ".$row['id'];
		mysqli_query($connected,$sql, false);
	}
}

echo "<br /><b>Your agent-information has been successfully refreshed!</b>";
?>
