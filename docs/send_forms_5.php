<?
/*session_start();
	if (!empty($_POST['validator']) && $_POST['validator'] == $_SESSION['rand_code']) {
		//return false;*/
/////////////////////////////////////////

function complete_mail() {

$from    = "$_POST[fio] ";	
$headers = "From: $from";
$subject = "Заказ на изготовление печатей $_POST[fio]";

$msg="Бланк заказа печатей для корпоративных клиентов\n\n";

$msg=$msg."Тип печати и срок изготовления - $_POST[srok]\n\n";

$msg=$msg."Оснастка - $_POST[osnast]\n\n";

$msg=$msg."Филиал доставки - $_POST[adress]\n\n";

if($_POST[org_forms]){$msg=$msg."Организационная форма - $_POST[org_forms]\n\n";}

if($_POST[org]){$msg=$msg."Название организации - $_POST[org]\n\n";}

if($_POST[ogrn]){$msg=$msg."№ ОГРН - $_POST[ogrn]\n\n";}

if($_POST[inn]){$msg=$msg."ИНН - $_POST[inn]\n\n";}

if($_POST[city]=="on"){$msg=$msg."Город - Москва\n\n";}else{$msg=$msg."Город - $_POST[city_other]\n\n";}

$msg=$msg."Количество - $_POST[cols]\n\n";

if($_POST[diametr]){$msg=$msg."Диаметр - $_POST[diametr]\n\n";}

if($_POST[dm]){$msg=$msg."Диаметр - $_POST[dm]\n\n";}

$msg=$msg."\n\n\n\nИнформация о заказчике\n\n";

if($_POST[fio]){$msg=$msg."Контактное лицо - $_POST[fio]\n\n";}

if($_POST[tel]){$msg=$msg."Контактный телефон - $_POST[tel]\n\n";}

if($_POST[eml]){$msg=$msg."E-mail - $_POST[eml]\n\n";}

if($_POST[adr_1]){$msg=$msg."Самовывоз\n\n";}

if($_POST[adres]){$msg=$msg."Подробный адрес доставки - $_POST[adres]\n\n";}

if($_POST[text]){$msg=$msg."Дополнительная информация - $_POST[text]\n\n";}

require "mailer.php";
$mail = new PHPMailer();
$mail->From = $_POST[eml];      // от кого
$mail->FromName = $from;   // от кого
$mail->AddAddress('zakaz@pechati.ru', ''); // кому - адрес, Имя
$mail->IsHTML(false);        // выставляем формат письма HTML
$mail->Subject = $subject;
if ($_FILES[pict]['error']==0) {
	$mail->AddAttachment($_FILES['pict']['tmp_name'], $_FILES['pict']['name']);
}
$mail->Body = $msg;
$mail->Send();
}


if($_POST[srok] or $_POST[osnast] or $_POST[adress] or $_POST[org_forms] or $_POST[org] or $_POST[ogrn] or $_POST[inn] or $_POST[city] or $_POST[city_other] or $_POST[cols] or $_POST[diametr] or $_POST[dm] or $_POST[fio] or $_POST[tel] or $_POST[eml] or $_POST[adres] or $_POST[text])
{
	complete_mail();
	Header("Location: forms_send.html");
exit;
} else {
	Header("Location: forms_send.html");
exit;
}

/*		unset($_SESSION['rand_code']);

/////////////////////////////////////////
	} elseif($_POST) {
//		return true;
		unset($_SESSION['rand_code']);
		Header("Location: forms_send.html");
		exit;
	}*/

?>