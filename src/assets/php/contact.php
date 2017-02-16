<?php

include('easymail.php');

$name = $_POST['name'];
$mail = $_POST['mail'];
$message = $_POST['message'];

if (empty($name) || empty($mail) || empty($message)) {
	return 0;
}

if (isset($_POST['meta'])) {
	$message = $_POST['meta'] . "\n" . $message;
}

$localmail = 'noreply@' . $_SERVER['HTTP_HOST'];
$subject = 'Nachricht von $name ($mail) auf ' . $_SERVER['HTTP_HOST'];
echo sendMail('niklasravnsborg@gmail.com', $message, $subject, $localmail, 'Fahrschule Deeken', $name, $mail);
