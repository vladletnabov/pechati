<?php
error_reporting(0);
set_time_limit(0);

$mail_to      = 'partnership@pechati.ru';
$mail_subject = 'Заявка с сайта - Печати';

$input = file_get_contents('php://input');
$data  = (preg_match('/^\{.+\}$/si', $input)) ? json_decode($input) : false;

if ($data) {
	
	$text = '<html><body>';
	foreach ($data->fields as $item) {
		$text .= '<b>'.$item->name.': </b>'.trim($item->value).'<br />';
		if(strval($item->type)=='email')$email=trim(strval($item->value));
	}
	$text .= '</body></html>';
	
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	mail($mail_to, $mail_subject, $text, $headers);
	error_log( "mail sended!" );
	if (isset($email)){
		error_log( "email is set" );
		if($email){
			error_log( "try to send mail for clent...." );
			include('mail/post.php');
			$x=file_get_contents('mail/html/_1_.html');  //получаем содержимое html файла
			$x=str_replace('SRC="','SRC="http://partnership.pechati.ru/mail/html/',$x); //заменяем относительные ссылки на картинки на абсолютные
			Send_Mail($email,'Заявка с сайта - Печати',$x); //отправляем письмо
		}
		else {
			error_log( "email is:" . $email );
		}
	}
	else {
		error_log( "email not setted" );
	}
		
	echo json_encode(array(
		'result' => 1,
		'time'   => time(),
		'msg'    => ''
	));
}
?>
