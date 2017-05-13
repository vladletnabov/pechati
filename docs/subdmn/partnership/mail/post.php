<?php
function Send_Mail($to,$title,$text){
	$user='partnership@pechati.ru'; //почта на яндексе
	$pass='pass9045590455'; //пароль к почте на яндексе
	$from=$user;
	$from_name='Партнёрская программа Печати.РУ'; // имя отправителя

	include( 'swift/swift_required.php');
	
	error_log( "create transport for swift..." );
	$transport = Swift_SmtpTransport::newInstance('ssl://smtp.mail.ru', 465)
	  ->setUsername($user)
	  ->setPassword($pass)
	  ->setEncryption('ssl');

	error_log( "create mailer for swift..." );
	$mailer = Swift_Mailer::newInstance($transport);

	error_log( "create message for swift..." );
	$message = Swift_Message::newInstance($title)
	  ->setFrom(array($from => $from_name))
	  ->setTo(array($to))
	  ->setBody($text,'text/html');
	  
	$result = $mailer->send($message);
	
	error_log( "result: " . result );
	return $result;
}
?>