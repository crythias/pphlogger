<?php
// $Id: pphlogger_send.inc.php,v 1.15 2002/10/07 17:25:28 cvs_iezzi Exp $

/*
 * Choose the mailing-module you wish to use to send the confirmation mails 
 * including pphlogger.js-attachment.
 * To change this setting, go to /admin/setup.php and edit the 'mail_mod' 
 * setting in step3 to one of the following: [libmail|htmlmime|plain].
 */



/*
 * Read the file pphlogger.js into $attachment.
 */
$file_attachment = INC_PPHLOGGERJS;
$attachment = fread($fp = fopen($file_attachment, 'r'), filesize($file_attachment));
fclose($fp);
$attachment = str_replace('{CFG_PHPEXT}',CFG_PHPEXT,$attachment); // ugly work-around
while(preg_match('/(%.+%)/U',$attachment, $matches) == TRUE){
	$matchvar = str_replace('%','',$matches[1]);
	$attachment = str_replace($matches[1], $$matchvar, $attachment);
}

/*
 * read email_newuser_*.txt into $body_txt
 */
$file_body_txt = PPHL_SCRIPT_PATH.'messages/email_newuser_'.$N_lang.'.txt';
$body_txt = fread($fp = fopen($file_body_txt, 'r'), filesize($file_body_txt));
fclose($fp);
$body_txt = str_replace('{CFG_PHPEXT}',CFG_PHPEXT,$body_txt); // ugly work-around
while(preg_match('/(%.+%)/U',$body_txt, $matches) == TRUE){
	$matchvar = str_replace('%','',$matches[1]);
	$body_txt = str_replace($matches[1], $$matchvar, $body_txt);
}

/*
 * If this is running on win32, only send mails without the from-name
 * On other systems, use the following syntax:
 * "Name" <name@abc.de>
 */
$to		= (!IS_WINDOWS) ? '"'.$username.'" <'.$email.'>' : $email;
$from	= '"PPhlogger support" <'.$admin_mail.'>';
$subj   = "$strAccActivation - $username";


switch ($mail_mod) {
	case 'htmlmime':
        include MOD_HTMLMIMEMAIL;
		/**
		* Create the mail object.
		*/
			$mail = new htmlMimeMail();
		/**
		* To set the text body of the email, we
		* are using the setText() function. This
		* is an alternative to the setHtml() function
		* which would obviously be inappropriate here.
		*/	
			$mail->setText($body_txt);
		/**
		* This is used to add an attachment to
		* the email.
		*/
			$mail->addAttachment($attachment, 'pphlogger.js', 'text/js');
		/**
		* Sends the message.
		*/
			$mail->setSubject($subj);
			$mail->setFrom($from);
			$result = $mail->send(array($to));
	break;
	
	/*
	 * libmail 1.3
	 * http://lwest.free.fr/doc/php/lib/index.php3?page=mail&lang=en
	 * @author	Leo West - lwest@free.fr
	 */
	case 'libmail':
		include MOD_LIBMAIL;
		
		$m= new Mail; // create the mail
		$m->From($from);
		$m->To($to);
		$m->Subject($subj);
		$m->Body($body_txt);	// set the body
		//$m->Cc( "someone@somewhere.fr");
		//$m->Bcc( "someoneelse@somewhere.fr");
		//$m->Priority(4) ;	// set the priority to Low
		$m->Attach($attachment, "text/js", "attachment", "pphlogger.js");
		$m->Send();	// send the mail
	break;
	
	/*
	 * plain email
	 * Use this option, if you don't like to attach pphlogger.js to the confirmation email.
	 * In this case you should adjust the /messages/email_newuser_xx.txt files.
	 */
	case 'plain':
		mail($to, $subj, $body_txt, 'From: '.$from);
	break;
	
	default:
		echo 'please set $mail_mod !';
	break;
}
?>