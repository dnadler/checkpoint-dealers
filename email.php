<?php
	echo phpinfo();
	
	$to      = 'dnadler@nadlerassociates.com';
$subject = 'Purina CheckPoint email';
$message = 'This is an example of an email sent from the website';
$headers = 'From: dnadler@purinacheckpoint.com' . "\r\n" .
       'Reply-To: dnadler@purinacheckpoint.com';

mail($to, $subject, $message, $headers);
?>