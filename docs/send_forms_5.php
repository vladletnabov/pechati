<?
/*session_start();
	if (!empty($_POST['validator']) && $_POST['validator'] == $_SESSION['rand_code']) {
		//return false;*/
/////////////////////////////////////////

function complete_mail() {

$from    = "$_POST[fio] ";	
$headers = "From: $from";
$subject = "����� �� ������������ ������� $_POST[fio]";

$msg="����� ������ ������� ��� ������������� ��������\n\n";

$msg=$msg."��� ������ � ���� ������������ - $_POST[srok]\n\n";

$msg=$msg."�������� - $_POST[osnast]\n\n";

$msg=$msg."������ �������� - $_POST[adress]\n\n";

if($_POST[org_forms]){$msg=$msg."��������������� ����� - $_POST[org_forms]\n\n";}

if($_POST[org]){$msg=$msg."�������� ����������� - $_POST[org]\n\n";}

if($_POST[ogrn]){$msg=$msg."� ���� - $_POST[ogrn]\n\n";}

if($_POST[inn]){$msg=$msg."��� - $_POST[inn]\n\n";}

if($_POST[city]=="on"){$msg=$msg."����� - ������\n\n";}else{$msg=$msg."����� - $_POST[city_other]\n\n";}

$msg=$msg."���������� - $_POST[cols]\n\n";

if($_POST[diametr]){$msg=$msg."������� - $_POST[diametr]\n\n";}

if($_POST[dm]){$msg=$msg."������� - $_POST[dm]\n\n";}

$msg=$msg."\n\n\n\n���������� � ���������\n\n";

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
$mail->IsHTML(false);        // ���������� ������ ������ HTML
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