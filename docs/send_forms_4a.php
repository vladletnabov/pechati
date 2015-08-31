<?
/*session_start();
	if (!empty($_POST['validator']) && $_POST['validator'] == $_SESSION['rand_code']) {
		//return false;*/
/////////////////////////////////////////


function complete_mail() {

$from    = $_SESSION['emailclient'];	
	$str="emailclient - ".$_SESSION['emailclient'];
	error_log($str,0);


$msg=$msg."\n\n\n\nИнформация о заказчике\n\n";
$msg=$msg."------------------------------------------\n\n";
$msg=$msg."Юридическое лицо: ". $_POST['companytype']."\n";
$msg=$msg."Название компании: ". $_POST['name']."\n";
$msg=$msg."ИНН: ". $_POST['inn']."\n";
$msg=$msg."ОГРН:". $_POST['ogrn']."\n";
$msg=$msg."Город: ". $_POST['city']."\n";
$msg=$msg."Контактное лицо: ". $_POST['fio']."\n";
$msg=$msg."Получать рассылку: ". $_POST['checkbox']."\n";
$subject="Детальная информация по контакту:".$_SESSION['fio']."(".$from.")";

require "mailer.php";
$mail = new PHPMailer();
$mail->From = $from;      // от кого
$mail->FromName = '';   // от кого
//$mail->AddAddress('$to_adress', ''); // кому - адрес, Имя
/*po filialam*/
$mail->AddAddress($_SESSION['emailfilial']);

	$str="emailclient - ".$_SESSION['emailfilial'];
	error_log($str,0);
/*\po filialam*/
//$mail->AddBCC('pechati@russia.ru', ''); // кому - адрес, Имя
$mail->IsHTML(false);        // выставляем формат письма HTML
$mail->Subject = $subject;

$mail->Body = $msg;
	error_log('send mail...',0);
$mail->Send();

#######
}



	error_log('Start session for extended form',0);
	session_start(); //otkrili sessiju
	
	error_log('Start send mail',0);
	complete_mail();
	
	error_log('Mail sended. Redirect to....',0);
	Header("Location: index.html");
exit;


/*		unset($_SESSION['rand_code']);

/////////////////////////////////////////
	} elseif($_POST) {
//		return true;
		unset($_SESSION['rand_code']);
		Header("Location: forms_send.html");
		exit;
	}*/

?>
