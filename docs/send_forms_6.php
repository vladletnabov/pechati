<?
/*session_start();
	if (!empty($_POST['validator']) && $_POST['validator'] == $_SESSION['rand_code']) {
		//return false;*/
/////////////////////////////////////////

include("libs_mail.php");

$from    = "$_POST[fio]";	
$headers = "From: $from";
$subject = "Информация о производителе от $_POST[fio]";

$msg="Контактные данные\n\n";

$msg=$msg."Имя - $_POST[fio]\n";
$msg=$msg."Телефон - $_POST[phone]\n";
$msg=$msg."E-mail - $_POST[eml_user]\n\n";

$msg=$msg."Информация - $_POST[text]";

if ($_POST[fio] or $_POST[text] or $_POST[eml_user] or $_POST[phone]) {
my_mail($headers, $subject, $msg, "zakaz@pechati.ru");
//my_mail($headers, $subject, $msg, "zakaz@pechati.ru");
//my_mail($headers, $subject, $msg, "zaicev_cpi@mail.ru");
Header("Location: catalog_send.html");
exit;
} else {
Header("Location: catalog_send.html");
exit;
}
/*		unset($_SESSION['rand_code']);

/////////////////////////////////////////
	} elseif($_POST) {
//		return true;
		unset($_SESSION['rand_code']);
		Header("Location: catalog_send.html");
		exit;
	}*/

?>