<?
/*session_start();
	if (!empty($_POST['validator']) && $_POST['validator'] == $_SESSION['rand_code']) {
		//return false;*/
/////////////////////////////////////////

$data_crt=date("Y-m-d H:i:s");

function complete_mail() {

$from    = "$_POST[fio] ";	
//$headers = "From: $from";
$subject = "����� ������ �� ������� �� $_POST[fio]";

$msg="����� ������ ������ �� �������\n\n";


if($_POST[org_forms]){$msg=$msg."��������������� ����� - $_POST[org_forms]\n\n";}

if($_POST[org]){$msg=$msg."�������� ����������� - $_POST[org]\n\n";}

if($_POST[ogrn]){$msg=$msg."� ���� - $_POST[ogrn]\n\n";}

if($_POST[inn]){$msg=$msg."��� - $_POST[inn]\n\n";}

if($_POST[reestr]){$msg=$msg."� ������� - $_POST[reestr]\n\n";}

$msg=$msg."���������� - $_POST[cols]\n\n";

switch ($_POST[ostn])
{
case "1":
$msg=$msg."�������� - ��������������\n\n";

break;
case "2":
$msg=$msg."�������� - ������\n\n";

break;
case "3":
$msg=$msg."�������� - ������\n\n";

break;
}
if($_POST[diametr]){$msg=$msg."������� - $_POST[diametr]\n\n";}

if($_POST[dm]){$msg=$msg."������� - $_POST[dm]\n\n";}


switch ($_POST[srok])
{
case "1":
$msg=$msg."����� ������������ - ������\n\n";

break;
case "2":
$msg=$msg."����� ������������ - ���� ����\n\n";

break;
case "3":
$msg=$msg."����� ������������ - ��� ���\n\n";

break;
}

$msg=$msg."\n\n���������� � ���������\n\n";

if($_POST[fio]){$msg=$msg."���������� ���� - $_POST[fio]\n\n";}

if($_POST[tel]){$msg=$msg."���������� ������� - $_POST[tel]\n\n";}

if($_POST[eml]){$msg=$msg."E-mail - $_POST[eml]\n\n";}

if($_POST[adr_1]){$msg=$msg."���������\n\n";}

if($_POST[adres]){$msg=$msg."��������� ����� �������� - $_POST[adres]\n\n";}

if($_POST[text]){$msg=$msg."�������������� ���������� - $_POST[text]\n\n";}

require "mailer.php";
$mail = new PHPMailer();
$mail->From = $_POST[eml];      // �� ����
$mail->FromName = $from;   // �� ����
$mail->AddAddress('zakaz@pechati.ru', ''); // ���� - �����, ���
//$mail->AddAddress('lauramohr@yandex.ru', ''); // ���� - �����, ���
$mail->IsHTML(false);        // ���������� ������ ������ HTML
$mail->Subject = $subject;
$mail->AddAttachment($_FILES['pict']['tmp_name'], $_FILES['pict']['name']);
$mail->Body = $msg;
$mail->Send();
}

if($_POST[org_forms] or $_POST[org] or $_POST[ogrn] or $_POST[inn] or $_POST[reestr] or $_POST[cols] or $_POST[ostn] or $_POST[diametr] or $_POST[dm] or $_POST[srok] or $_POST[fio] or $_POST[tel] or $_POST[eml] or $_POST[adr_1] or $_POST[adres] or $_POST[text]) {
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