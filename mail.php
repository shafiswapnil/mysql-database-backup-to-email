<?php

// No caching
header('Expires: Sun, 01 Jan 2014 00:00:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', FALSE);
header('Pragma: no-cache');

require 'config.php';
require 'get_the_file.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer(TRUE);

try {
	/* Set the mail sender. */
	$mail->setFrom(SENDER,SENDER_TITLE);

	/* Add a recipient. */
	$mail->addAddress(RECIPIENT,RECIPIENT_TITLE);

	// Set email format to HTML
	$mail->isHTML(true);
    $mail->Subject = 'Auto Database Backup';
    $mail->Body    = '<p>Auto Backup initiated on <strong>'.date("F j, Y, g:i")."</strong></p>";
	$mail->AltBody = 'Auto Backup initiated on '.date('d-m-Y')." on ".date('H-i-s a');

	// Attachments
    $mail->addAttachment($file);

	$mail->send();
	echo "Message has been sent with attachment: {$file}";

	// delete the file from server
	unlink($file);
}
catch (Exception $e)
{
	/* PHPMailer exception. */
	echo $e->errorMessage();
}
catch (\Exception $e)
{
	/* PHP exception (note the backslash to select the global namespace Exception class). */
	echo $e->getMessage();
}

?>