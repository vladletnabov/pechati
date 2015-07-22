<?
/*session_start();
	if (!empty($_POST['validator']) && $_POST['validator'] == $_SESSION['rand_code']) {
		//return false;*/
/////////////////////////////////////////

include("libs_mail.php");

$from    = "$_POST[fio]";	
$headers = "From: $from";
$subject = "Заказ печати по эскизу от $_POST[fio]";

$msg="Бланк заказа печати по эскизу\n\n";

if($_POST[org_forms]){$msg=$msg."Организационная форма - $_POST[org_forms]\n\n";}

if($_POST[org]){$msg=$msg."Название организации - $_POST[org]\n\n";}

if($_POST[ogrn]){$msg=$msg."№ ОГРН - $_POST[ogrn]\n\n";}

if($_POST[inn]){$msg=$msg."ИНН - $_POST[inn]\n\n";}

if($_POST[city]=="on"){$msg=$msg."Город - Москва\n\n";}else{$msg=$msg."Город - $_POST[city_other]\n\n";}

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
if($_POST[diametr]){$msg=$msg."Диаметр - $_POST[diametr]\n\n";}

if($_POST[dm]){$msg=$msg."Диаметр - $_POST[dm]\n\n";}

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

if($_POST[org_forms] or$_POST[org] or $_POST[ogrn] or $_POST[inn] or $_POST[city] or $_POST[city_other] or $_POST[cols] or $_POST[ostn] or $_POST[diametr] or $_POST[dm] or $_POST[srok] or $_POST[fio] or $_POST[tel] or $_POST[fax] or $_POST[eml] or $_POST[adr_1] or $_POST[adres] or $_POST[text]) {
//my_mail($headers, $subject, $msg, "lauramohr@yandex.ru");
//my_mail($headers, $subject, $msg, "taganca@pechati.ru");
my_mail($headers, $subject, $msg, "zakaz@pechati.ru");
//my_mail($headers, $subject, $msg, "zaicev_cpi@mail.ru");
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