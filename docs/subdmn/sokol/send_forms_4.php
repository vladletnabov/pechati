<?
session_start();
	if (!empty($_POST['validator']) && $_POST['validator'] == $_SESSION['rand_code']) {
		//return false;
/////////////////////////////////////////

function complete_mail() {


$from    = "$_POST[fio] ";	
if ($_POST[form]!=7 or $_POST[form]!=8) {
	$subject = "����� �� ������������ ������� $_POST[fio]";
} else {
	if ($_POST[form]==7) {
		$subject = "����� �� ������������� ������ Soligor";
	}
	if ($_POST[form]==8) {
		$subject = "����� �� �������������� �����";
	}
}

if ($_POST[form]==1) {
$msg="����� ������ ������� � �������\n\n";
}
if ($_POST[form]==2) {
$msg="����� ������ ������� ��� ������������� ��������\n\n";
}
if ($_POST[form]==3) {
$msg="����� ������ ����������������� �������\n\n";
}
if ($_POST[form]==4) {
$msg="����� ������ �������� �������\n\n";
}
if ($_POST[form]==5) {
$msg="����� ������ ���������, �������������, ��������� �������, ������� �����\n\n";
}
if ($_POST[form]==6) {
$msg="����� ������ ������� � ��������������� ���������� ������ �� ��������\n\n";
}
if ($_POST[form]==7) {
$msg="����� ������ ������������� ����� Soligor\n\n";
}
if ($_POST[form]==8) {
$msg="����� ������ �������������� ����\n\n";
}

#######
if ($_POST[form]!=5 AND $_POST[form]!=6 AND $_POST[form]!=7 AND $_POST[form]!=8) {
$msg=$msg."��� ������ � ���� ������������ - $_POST[srok]\n\n";

if($_POST[osnast]){$msg=$msg."�������� - $_POST[osnast]\n\n";}

if($_POST[adress]){$msg.="������ �������� - $_POST[adress]\n\n";}

if($_POST[org_forms]){$msg=$msg."��������������� ����� - $_POST[org_forms]\n\n";}

//if ($_POST[form]==1) {
	if($_POST[org]){$msg=$msg."�������� �����������, � ���� ��� �.�., ��� - $_POST[org]\n\n";}
/*} else {
	if($_POST[org]){$msg=$msg."�������� ����������� - $_POST[org]\n\n";}
	if($_POST[ogrn]){$msg=$msg."� ���� - $_POST[ogrn]\n\n";}
	if($_POST[inn]){$msg=$msg."��� - $_POST[inn]\n\n";}
}*/


if($_POST[city]=="on"){$msg=$msg."����� - ������\n\n";}else{$msg=$msg."����� - $_POST[city_other]\n\n";}

$msg=$msg."���������� - $_POST[cols]\n\n";

if($_POST[diametr]){$msg=$msg."������� - $_POST[diametr]\n\n";}

if($_POST[dm]){$msg=$msg."������� - $_POST[dm]\n\n";}

$msg=$msg."\n\n\n\n���������� � ���������\n\n";

if($_POST[mat]){$msg=$msg."$_POST[mat]\n\n";}

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
//$mail->AddAddress('$to_adress', ''); // ���� - �����, ���
/*po filialam*/
$mail->AddAddress('9781814@mail.ru', '');
/*\po filialam*/
$mail->AddBCC('pechati@russia.ru', ''); // ���� - �����, ���
$mail->IsHTML(false);        // ���������� ������ ������ HTML
$mail->Subject = $subject;
if ($_FILES[pict]['error']==0) {
	$mail->AddAttachment($_FILES['pict']['tmp_name'], $_FILES['pict']['name']);
}
$mail->Body = $msg;
$mail->Send();
#######
} else {
	if($_POST[soligor]){$msg=$msg."������������� ������ - $_POST[soligor]\n\n";}
	if($_POST[mojki]){$msg=$msg."�������������� ����� - $_POST[mojki]\n\n";}
	if($_POST[tel]){$msg=$msg."���������� ������� - $_POST[tel]\n\n";}
	if($_POST[eml]){$msg=$msg."E-mail - $_POST[eml]\n\n";}
	if($_POST[adress]){$msg=$msg."������ �������� - $_POST[adress]\n\n";}
	if ($_POST[form]==7) {
		if ($_POST[photopolimer] or $_POST[kimoto] or $_POST[lomond] or $_POST[negative] or $_POST[border]) {
			$msg=$msg."�������� ��������� ����������:\n";
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
	$msg=$msg."���������� � ������:\n $_POST[text]";
require "mailer.php";
$mail = new PHPMailer();
$mail->From = $_POST[eml];      // �� ����
//$mail->AddAddress('zakaz@pechati.ru', ''); // ���� - �����, ���
/*po filialam*/
$mail->AddAddress('9781814@mail.ru', '');
/*\po filialam*/
$mail->IsHTML(false);        // ���������� ������ ������ HTML
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