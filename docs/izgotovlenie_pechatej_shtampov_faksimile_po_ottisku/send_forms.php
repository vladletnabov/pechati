<?

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


//if($_POST[city]=="on"){$msg=$msg."����� - ������\n\n";}else{$msg=$msg."����� - $_POST[city_other]\n\n";}

//$msg=$msg."���������� - $_POST[cols]\n\n";

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
require "../mailer.php";
$mail = new PHPMailer();
$mail->From = $_POST[eml];      // �� ����
$mail->FromName = $from;   // �� ����
//$mail->AddAddress('$to_adress', ''); // ���� - �����, ���
/*po filialam*/
/*if($_POST[adress]){
	//if ($_POST[adress]=="�. ������������"){$mail->AddAddress('zakaz@kwikkopy.ru', '');}
	//elseif ($_POST[adress]=="�. ������ �������"){$mail->AddAddress('mail@ecohost.ru', '');}
	if ($_POST[adress]=="�. ���������"){$mail->AddAddress('5454842@mail.ru', '');}
	elseif ($_POST[adress]=="�. ������������"){$mail->AddAddress('perovo@pechati.ru', '');}
	elseif ($_POST[adress]=="�. ���������"){$mail->AddAddress('t6652256@yandex.ru', '');}
	elseif ($_POST[adress]=="�. ��������"){$mail->AddAddress('aeroport@pechati.ru', '');}
	elseif ($_POST[adress]=="�. ������������"){$mail->AddAddress('mdv@pechati.ru', '');}
	elseif ($_POST[adress]=="�. �������"){$mail->AddAddress('bgv@pechati.ru', '');}
	//elseif ($_POST[adress]=="�. ��������"){$mail->AddAddress('zakaz@kwikkopy.ru', '');}
	//elseif ($_POST[adress]=="�. ������� ������� ��������"){$mail->AddAddress('9724453@mail.ru', '');}
	elseif ($_POST[adress]=="�. ����"){$mail->AddAddress('mdv@pechati.ru', '');}
	elseif ($_POST[adress]=="�. ������ �������"){$mail->AddAddress('vs@pechati.ru', '');}
	elseif ($_POST[adress]=="�. ������"){$mail->AddAddress('bgv@pechati.ru', '');}
	elseif ($_POST[adress]=="�. �������������"){$mail->AddAddress('marino@pechati.ru', '');}
	elseif ($_POST[adress]=="�. ���������"){$mail->AddAddress('chertanovo@pechati.ru', '');}
	elseif ($_POST[adress]=="�. �������������"){$mail->AddAddress('5176723@mail.ru', '');}
	//elseif ($_POST[adress]=="�. ���������"){$mail->AddAddress('kuzminki@pechati.ru', '');}
	//elseif ($_POST[adress]=="�. ����������"){$mail->AddAddress('adv@kwikkopy.ru', '');}
	elseif ($_POST[adress]=="�. ��������� ��-�"){$mail->AddAddress('l1@pechati.ru', '');}
	//elseif ($_POST[adress]=="�. �������"){$mail->AddAddress('pechati-v-lublino@mail.ru', '');}
	elseif ($_POST[adress]=="�. �������"){$mail->AddAddress('pechati-v-marino@mail.ru', '');}
	//elseif ($_POST[adress]=="�. ����������"){$mail->AddAddress('5422661@mail.ru', '');}
	elseif ($_POST[adress]=="�. ������"){$mail->AddAddress('mitino@pechati.ru', '');}
	elseif ($_POST[adress]=="�. ���������"){$mail->AddAddress('SLK@pechati.ru', '');}
	elseif ($_POST[adress]=="�. ��������������"){$mail->AddAddress('5454842@mail.ru', '');}
	//elseif ($_POST[adress]=="�. ����� ���������"){$mail->AddAddress('5002@pechati.ru', '');}
	elseif ($_POST[adress]=="�. �����������"){$mail->AddAddress('perovo@pechati.ru', '');}
	elseif ($_POST[adress]=="�. ����� ���������"){$mail->AddAddress('l1@pechati.ru', '');}
	//elseif ($_POST[adress]=="�. �����������"){$mail->AddAddress('5060354@mail.ru', '');}
	elseif ($_POST[adress]=="�. �����������"){$mail->AddAddress('l1@pechati.ru', '');}
	elseif ($_POST[adress]=="�. ����������� ����"){$mail->AddAddress('bgv@pechati.ru', '');}	
	elseif ($_POST[adress]=="�. ����������"){$mail->AddAddress('t5007583@yandex.ru', '');}
	elseif ($_POST[adress]=="�. ���������-�����������"){$mail->AddAddress('pr@pechati.ru', '');}
	//elseif ($_POST[adress]=="�. ���������"){$mail->AddAddress('t3641924@yandex.ru', '');}
	elseif ($_POST[adress]=="�. ��������"){$mail->AddAddress('et12@bk.ru', '');}
	elseif ($_POST[adress]=="�. �������� ����"){$mail->AddAddress('mdv@pechati.ru', '');}
	//elseif ($_POST[adress]=="�. �������������� �������"){$mail->AddAddress('a1617446@yandex.ru', '');}
	//elseif ($_POST[adress]=="�. ��������"){$mail->AddAddress('strogino@pechati.ru', '');}
	elseif ($_POST[adress]=="�. ���������, �. �����������"){$mail->AddAddress('taganka@pechati.ru', '');}
	//elseif ($_POST[adress]=="�. ���������"){$mail->AddAddress('zakaz@pechati-optima.ru', '');}
	elseif ($_POST[adress]=="�. ��������"){$mail->AddAddress('pr@pechati.ru', '');}
	elseif ($_POST[adress]=="�. ��. 1905 ����"){$mail->AddAddress('bgv@pechati.ru', '');}
	//elseif ($_POST[adress]=="�. ��������"){$mail->AddAddress('pechati555@mail.ru', '');}
	elseif ($_POST[adress]=="�. ������� �������"){$mail->AddAddress('5454842@mail.ru', '');}
	elseif ($_POST[adress]=="�. ����������"){$mail->AddAddress('SLK@pechati.ru', '');}
	elseif ($_POST[adress]=="�. ���������"){$mail->AddAddress('bgv@pechati.ru', '');}
	elseif ($_POST[adress]=="�. ����������������"){$mail->AddAddress('pechaty60@yandex.ru', '');}
	elseif ($_POST[adress]=="�. ���-��������"){$mail->AddAddress('518-70-71@mail.ru', '');}
	elseif ($_POST[adress]=="�. �����"){$mail->AddAddress('chertanovo@pechati.ru', '');}
	//elseif ($_POST[adress]=="�. �������"){$mail->AddAddress('pechati17@yandex.ru', '');}
	elseif ($_POST[adress]=="�.�., �. �����������"){$mail->AddAddress('krasnogorsk@pechati.ru', '');}
	//elseif ($_POST[adress]=="�.�., �. ��������"){$mail->AddAddress('5008@pechati.ru', '');}
	elseif ($_POST[adress]=="�.�., �. ����������"){$mail->AddAddress('6643718@mail.ru', '');}
	//elseif ($_POST[adress]=="�.�., �. ��������"){$mail->AddAddress('taganka@pechati.ru', '');}
	//elseif ($_POST[adress]=="�.�., �. ��������"){$mail->AddAddress('9723371@mail.ru', '');}
	//elseif ($_POST[adress]=="�.�., ����-��������� �-�"){$mail->AddAddress('9430393@mail.ru', '');}
	//elseif ($_POST[adress]=="�.�., �. ����-�������"){$mail->AddAddress('9430393@mail.ru', '');}
	//elseif ($_POST[adress]=="�.�., �. ��������"){$mail->AddAddress('9430393@mail.ru', '');}
	//elseif ($_POST[adress]=="�.�., �. ���������"){$mail->AddAddress('9724453@mail.ru', '');}
	//elseif ($_POST[adress]=="�.�., �. �����"){$mail->AddAddress('6643718@mail.ru', '');}
	elseif ($_POST[adress]=="���� 54 ��"){$mail->AddAddress('adv@kwikkopy.ru', '');}
	elseif ($_POST[adress]=="����������"){$mail->AddAddress('6643718@mail.ru', '');}
	elseif ($_POST[adress]=="�-� �������"){$mail->AddAddress('9258531642@mail.ru', '');}
	//if ($_POST[adress]==""){$mail->AddAddress('', '');}
} else {
	$mail->AddAddress('zakaz@pechati.ru', ''); // ���� - �����, ���
}*/
/*\po filialam*/
//$mail->AddAddress('info@pechati.ru', ''); // ���� - �����, ���
//$mail->AddAddress('zloykak@bk.ru', ''); // ���� - �����, ���
//$mail->AddBCC('pechati@russia.ru', ''); // ���� - �����, ���
$mail->AddAddress('info@pechati.ru', ''); // ���� - �����, ���
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
require "../mailer.php";
$mail = new PHPMailer();
$mail->From = $_POST[eml];      // �� ����
//$mail->AddAddress('zakaz@pechati.ru', ''); // ���� - �����, ���
/*po filialam*/
/*if($_POST[adress]){
	//if ($_POST[adress]=="�. ������������"){$mail->AddAddress('zakaz@kwikkopy.ru', '');}
	//elseif ($_POST[adress]=="�. ������ �������"){$mail->AddAddress('mail@ecohost.ru', '');}
	if ($_POST[adress]=="�. ���������"){$mail->AddAddress('5454842@mail.ru', '');}
	elseif ($_POST[adress]=="�. ������������"){$mail->AddAddress('perovo@pechati.ru', '');}
	elseif ($_POST[adress]=="�. ���������"){$mail->AddAddress('t6652256@yandex.ru', '');}
	elseif ($_POST[adress]=="�. ��������"){$mail->AddAddress('aeroport@pechati.ru', '');}
	elseif ($_POST[adress]=="�. ������������"){$mail->AddAddress('mdv@pechati.ru', '');}
	elseif ($_POST[adress]=="�. �������"){$mail->AddAddress('bgv@pechati.ru', '');}
	//elseif ($_POST[adress]=="�. ��������"){$mail->AddAddress('zakaz@kwikkopy.ru', '');}
	//elseif ($_POST[adress]=="�. ������� ������� ��������"){$mail->AddAddress('9724453@mail.ru', '');}
	elseif ($_POST[adress]=="�. ����"){$mail->AddAddress('mdv@pechati.ru', '');}
	elseif ($_POST[adress]=="�. ������ �������"){$mail->AddAddress('vs@pechati.ru', '');}
	elseif ($_POST[adress]=="�. ������"){$mail->AddAddress('bgv@pechati.ru', '');}
	elseif ($_POST[adress]=="�. �������������"){$mail->AddAddress('marino@pechati.ru', '');}
	elseif ($_POST[adress]=="�. ���������"){$mail->AddAddress('chertanovo@pechati.ru', '');}
	elseif ($_POST[adress]=="�. �������������"){$mail->AddAddress('5176723@mail.ru', '');}
	//elseif ($_POST[adress]=="�. ���������"){$mail->AddAddress('kuzminki@pechati.ru', '');}
	//elseif ($_POST[adress]=="�. ����������"){$mail->AddAddress('adv@kwikkopy.ru', '');}
	elseif ($_POST[adress]=="�. ��������� ��-�"){$mail->AddAddress('l1@pechati.ru', '');}
	//elseif ($_POST[adress]=="�. �������"){$mail->AddAddress('pechati-v-lublino@mail.ru', '');}
	elseif ($_POST[adress]=="�. �������"){$mail->AddAddress('pechati-v-marino@mail.ru', '');}
	//elseif ($_POST[adress]=="�. ����������"){$mail->AddAddress('5422661@mail.ru', '');}
	elseif ($_POST[adress]=="�. ������"){$mail->AddAddress('mitino@pechati.ru', '');}
	elseif ($_POST[adress]=="�. ���������"){$mail->AddAddress('SLK@pechati.ru', '');}
	elseif ($_POST[adress]=="�. ��������������"){$mail->AddAddress('5454842@mail.ru', '');}
	//elseif ($_POST[adress]=="�. ����� ���������"){$mail->AddAddress('5002@pechati.ru', '');}
	elseif ($_POST[adress]=="�. �����������"){$mail->AddAddress('perovo@pechati.ru', '');}
	elseif ($_POST[adress]=="�. ����� ���������"){$mail->AddAddress('l1@pechati.ru', '');}
	//elseif ($_POST[adress]=="�. �����������"){$mail->AddAddress('5060354@mail.ru', '');}
	elseif ($_POST[adress]=="�. �����������"){$mail->AddAddress('l1@pechati.ru', '');}
	elseif ($_POST[adress]=="�. ����������� ����"){$mail->AddAddress('bgv@pechati.ru', '');}		
	elseif ($_POST[adress]=="�. ����������"){$mail->AddAddress('t5007583@yandex.ru', '');}
	elseif ($_POST[adress]=="�. ���������-�����������"){$mail->AddAddress('pr@pechati.ru', '');}
	//elseif ($_POST[adress]=="�. ���������"){$mail->AddAddress('t3641924@yandex.ru', '');}
	elseif ($_POST[adress]=="�. ��������"){$mail->AddAddress('et12@bk.ru', '');}
	elseif ($_POST[adress]=="�. �������� ����"){$mail->AddAddress('mdv@pechati.ru', '');}
	//elseif ($_POST[adress]=="�. �������������� �������"){$mail->AddAddress('a1617446@yandex.ru', '');}
	//elseif ($_POST[adress]=="�. ��������"){$mail->AddAddress('strogino@pechati.ru', '');}
	elseif ($_POST[adress]=="�. ���������, �. �����������"){$mail->AddAddress('taganka@pechati.ru', '');}
	//elseif ($_POST[adress]=="�. ���������"){$mail->AddAddress('zakaz@pechati-optima.ru', '');}
	elseif ($_POST[adress]=="�. ��������"){$mail->AddAddress('pr@pechati.ru', '');}
	elseif ($_POST[adress]=="�. ��. 1905 ����"){$mail->AddAddress('bgv@pechati.ru', '');}
	//elseif ($_POST[adress]=="�. ��������"){$mail->AddAddress('pechati555@mail.ru', '');}
	elseif ($_POST[adress]=="�. ������� �������"){$mail->AddAddress('5454842@mail.ru', '');}
	elseif ($_POST[adress]=="�. ����������"){$mail->AddAddress('SLK@pechati.ru', '');}
	elseif ($_POST[adress]=="�. ���������"){$mail->AddAddress('bgv@pechati.ru', '');}
	elseif ($_POST[adress]=="�. ����������������"){$mail->AddAddress('pechaty60@yandex.ru', '');}
	elseif ($_POST[adress]=="�. ���-��������"){$mail->AddAddress('518-70-71@mail.ru', '');}
	elseif ($_POST[adress]=="�. �����"){$mail->AddAddress('chertanovo@pechati.ru', '');}
	//elseif ($_POST[adress]=="�. �������"){$mail->AddAddress('pechati17@yandex.ru', '');}
	elseif ($_POST[adress]=="�.�., �. �����������"){$mail->AddAddress('krasnogorsk@pechati.ru', '');}
	//elseif ($_POST[adress]=="�.�., �. ��������"){$mail->AddAddress('5008@pechati.ru', '');}
	elseif ($_POST[adress]=="�.�., �. ����������"){$mail->AddAddress('6643718@mail.ru', '');}
	//elseif ($_POST[adress]=="�.�., �. ��������"){$mail->AddAddress('taganka@pechati.ru', '');}
	//elseif ($_POST[adress]=="�.�., �. ��������"){$mail->AddAddress('9723371@mail.ru', '');}
	//elseif ($_POST[adress]=="�.�., ����-��������� �-�"){$mail->AddAddress('9430393@mail.ru', '');}
	//elseif ($_POST[adress]=="�.�., �. ����-�������"){$mail->AddAddress('9430393@mail.ru', '');}
	//elseif ($_POST[adress]=="�.�., �. ��������"){$mail->AddAddress('9430393@mail.ru', '');}
	//elseif ($_POST[adress]=="�.�., �. ���������"){$mail->AddAddress('9724453@mail.ru', '');}
	//elseif ($_POST[adress]=="�.�., �. �����"){$mail->AddAddress('6643718@mail.ru', '');}
	elseif ($_POST[adress]=="���� 54 ��"){$mail->AddAddress('adv@kwikkopy.ru', '');}
	elseif ($_POST[adress]=="����������"){$mail->AddAddress('6643718@mail.ru', '');}
	elseif ($_POST[adress]=="�-� �������"){$mail->AddAddress('9258531642@mail.ru', '');}
	//if ($_POST[adress]==""){$mail->AddAddress('', '');}
} else {
	$mail->AddAddress('zakaz@pechati.ru', ''); // ���� - �����, ���
}*/
/*\po filialam*/
//$mail->AddAddress('info@pechati.ru', ''); // ���� - �����, ���
//$mail->AddAddress('zloykak@bk.ru', ''); // ���� - �����, ���
$mail->AddAddress('info@pechati.ru', ''); // ���� - �����, ���
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
	Header("Location: /forms_send.html");
exit;
} else {
	Header("Location: /forms_send.html");
exit;
}

?>
