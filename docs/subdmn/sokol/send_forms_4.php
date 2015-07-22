<?
session_start();
	if (!empty($_POST['validator']) && $_POST['validator'] == $_SESSION['rand_code']) {
		//return false;
/////////////////////////////////////////

function complete_mail() {


$from    = "$_POST[fio] ";	
if ($_POST[form]!=7 or $_POST[form]!=8) {
	$subject = "Заказ на изготовление печатей $_POST[fio]";
} else {
	if ($_POST[form]==7) {
		$subject = "Заказ на экспонирующие камеры Soligor";
	}
	if ($_POST[form]==8) {
		$subject = "Заказ на автоматические мойки";
	}
}

if ($_POST[form]==1) {
$msg="Бланк заказа печатей в розницу\n\n";
}
if ($_POST[form]==2) {
$msg="Бланк заказа печатей для корпоративных клиентов\n\n";
}
if ($_POST[form]==3) {
$msg="Бланк заказа красконаполненных печатей\n\n";
}
if ($_POST[form]==4) {
$msg="Бланк заказа гербовых печатей\n\n";
}
if ($_POST[form]==5) {
$msg="Бланк заказа пломбиров, пломбираторов, рельефных печатей, ударных клейм\n\n";
}
if ($_POST[form]==6) {
$msg="Бланк заказа печатей с дополнительными элементами защиты от подделки\n\n";
}
if ($_POST[form]==7) {
$msg="Бланк заказа экспонирующих камер Soligor\n\n";
}
if ($_POST[form]==8) {
$msg="Бланк заказа автоматических моек\n\n";
}

#######
if ($_POST[form]!=5 AND $_POST[form]!=6 AND $_POST[form]!=7 AND $_POST[form]!=8) {
$msg=$msg."Тип печати и срок изготовления - $_POST[srok]\n\n";

if($_POST[osnast]){$msg=$msg."Оснастка - $_POST[osnast]\n\n";}

if($_POST[adress]){$msg.="Филиал доставки - $_POST[adress]\n\n";}

if($_POST[org_forms]){$msg=$msg."Организационная форма - $_POST[org_forms]\n\n";}

//if ($_POST[form]==1) {
	if($_POST[org]){$msg=$msg."Название организации, № ОГРН или Г.Р., ИНН - $_POST[org]\n\n";}
/*} else {
	if($_POST[org]){$msg=$msg."Название организации - $_POST[org]\n\n";}
	if($_POST[ogrn]){$msg=$msg."№ ОГРН - $_POST[ogrn]\n\n";}
	if($_POST[inn]){$msg=$msg."ИНН - $_POST[inn]\n\n";}
}*/


if($_POST[city]=="on"){$msg=$msg."Город - Москва\n\n";}else{$msg=$msg."Город - $_POST[city_other]\n\n";}

$msg=$msg."Количество - $_POST[cols]\n\n";

if($_POST[diametr]){$msg=$msg."Диаметр - $_POST[diametr]\n\n";}

if($_POST[dm]){$msg=$msg."Диаметр - $_POST[dm]\n\n";}

$msg=$msg."\n\n\n\nИнформация о заказчике\n\n";

if($_POST[mat]){$msg=$msg."$_POST[mat]\n\n";}

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
//$mail->AddAddress('$to_adress', ''); // кому - адрес, Имя
/*po filialam*/
$mail->AddAddress('9781814@mail.ru', '');
/*\po filialam*/
$mail->AddBCC('pechati@russia.ru', ''); // кому - адрес, Имя
$mail->IsHTML(false);        // выставляем формат письма HTML
$mail->Subject = $subject;
if ($_FILES[pict]['error']==0) {
	$mail->AddAttachment($_FILES['pict']['tmp_name'], $_FILES['pict']['name']);
}
$mail->Body = $msg;
$mail->Send();
#######
} else {
	if($_POST[soligor]){$msg=$msg."Экспонирующая камера - $_POST[soligor]\n\n";}
	if($_POST[mojki]){$msg=$msg."Автоматические мойки - $_POST[mojki]\n\n";}
	if($_POST[tel]){$msg=$msg."Контактный телефон - $_POST[tel]\n\n";}
	if($_POST[eml]){$msg=$msg."E-mail - $_POST[eml]\n\n";}
	if($_POST[adress]){$msg=$msg."Филиал доставки - $_POST[adress]\n\n";}
	if ($_POST[form]==7) {
		if ($_POST[photopolimer] or $_POST[kimoto] or $_POST[lomond] or $_POST[negative] or $_POST[border]) {
			$msg=$msg."Комплект расходных материалов:\n";
			if ($_POST[photopolimer]) {
				$msg=$msg."$_POST[photopolimer]\n";
			}
			if ($_POST[kimoto]) {
				$msg=$msg."$_POST[kimoto]\n";
			}
			if ($_POST[lomond]) {
				$msg=$msg."$_POST[lomond]\n";
			}
			if ($_POST[negative]) {
				$msg=$msg."$_POST[negative]\n";
			}
			if ($_POST[border]) {
				$msg=$msg."$_POST[border]\n";
			}
			$msg=$msg."\n";
		}
	}
	$msg=$msg."Информация о заказе:\n $_POST[text]";
require "mailer.php";
$mail = new PHPMailer();
$mail->From = $_POST[eml];      // от кого
//$mail->AddAddress('zakaz@pechati.ru', ''); // кому - адрес, Имя
/*po filialam*/
$mail->AddAddress('9781814@mail.ru', '');
/*\po filialam*/
$mail->IsHTML(false);        // выставляем формат письма HTML
$mail->Subject = $subject;
$mail->Body = $msg;
$mail->Send();
}
#######
}


if($_POST[form])
{
	complete_mail();
	Header("Location: forms_send.html");
exit;
} else {
	Header("Location: forms_send.html");
exit;
}

		unset($_SESSION['rand_code']);

/////////////////////////////////////////
	} elseif($_POST) {
//		return true;
		unset($_SESSION['rand_code']);
		Header("Location: forms_send.html");
		exit;
	}

?>