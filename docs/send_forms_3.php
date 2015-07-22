<?
/*session_start();
	if (!empty($_POST['validator']) && $_POST['validator'] == $_SESSION['rand_code']) {
		//return false;*/
/////////////////////////////////////////

function complete_mail() {

$from    = "$_POST[fio] ";	
$headers = "From: $from";
$subject = "Заказ штампа по эскизу или оттиску от $_POST[fio]";

$msg="Бланк заказа штампа по эскизу или оттиску\n\n";

if($_POST[rzmr]){$msg=$msg."Размер - $_POST[rzmr]\n\n";}

if($_POST[txt_stmp]){$msg=$msg."Текст штампа - $_POST[txt_stmp]\n\n";}

switch ($_POST[ramka])
{
case "1":
$msg=$msg."Наличие рамки - C рамкой\n\n";

break;
case "0":
$msg=$msg."Наличие рамки - Без рамки\n\n";

break;
}
$msg=$msg."Количество - $_POST[cols]\n\n";

switch ($_POST[ostn])
{
case "1":
$msg=$msg."Оснастка - Автоматическая\n\n";

break;
case "2":
$msg=$msg."Оснастка - Ручная\n\n";

break;
case "3":
$msg=$msg."Оснастка - Другое\n\n";

break;
}

switch ($_POST[srok])
{
case "1":
$msg=$msg."Сроки изготовления - Срочно\n\n";

break;
case "2":
$msg=$msg."Сроки изготовления - Один день\n\n";

break;
case "3":
$msg=$msg."Сроки изготовления - Два Дня\n\n";

break;
}

$msg=$msg."\n\n\n\nИнформация о заказчике\n\n";

if($_POST[fio]){$msg=$msg."Контактное лицо - $_POST[fio]\n\n";}

if($_POST[tel]){$msg=$msg."Контактный телефон - $_POST[tel]\n\n";}

if($_POST[fax]){$msg=$msg."Факс для согласования - $_POST[fax]\n\n";}

if($_POST[eml]){$msg=$msg."E-mail - $_POST[eml]\n\n";}

if($_POST[adr_1]){$msg=$msg."Самовывоз\n\n";}

if($_POST[adres]){$msg=$msg."Подробный адрес доставки - $_POST[adres]\n\n";}

if($_POST[text]){$msg=$msg."Дополнительная информация - $_POST[text]\n\n";}
require "mailer.php";
$mail = new PHPMailer();
$mail->From = $_POST[eml];      // от кого
$mail->FromName = $from;   // от кого
$mail->AddAddress('zakaz@pechati.ru', ''); // кому - адрес, Имя
//$mail->AddAddress('lauramohr@yandex.ru', ''); // кому - адрес, Имя
$mail->IsHTML(false);        // выставляем формат письма HTML
$mail->Subject = $subject;
if ($_FILES[pict]['error']==0) {
	$mail->AddAttachment($_FILES['pict']['tmp_name'], $_FILES['pict']['name']);
}
$mail->Body = $msg;
$mail->Send();
}


if($_POST[rzmr] or $_POST[txt_stmp] or $_POST[ramka] or $_POST[ostn] or $_POST[srok] or $_POST[fio] or $_POST[tel] or $_POST[fax] or $_POST[eml] or $_POST[adr_1] or $_POST[adres] or $_POST[text]) {
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