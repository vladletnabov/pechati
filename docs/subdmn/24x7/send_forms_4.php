<?
$tmarker = time();

require_once "../../extdata/baseparts/filialsData.php";
$mailfilial = array("default"=>'zakaz@pechati.ru');
foreach ($filialDataListCP1251 as $key => $value) {
	$mailfilial[$key] = $filialDataListCP1251[$key]['email'];
	
}

$targetfilial= array("default"=>'ya-target-default');
foreach ($filialDataListCP1251 as $key => $value) {
	$targetfilial[$key] = $filialDataListCP1251[$key]['ya-target'];
	
}

$newURL = "Location: forms_send.html";


	//error_log($mailfilial,0);
	$mailcfg =  array();
	error_log('mailcfg created');

	
error_log('====> zakaz address: ' . $_POST[adress]);
function complete_mail() {
	global $mailcfg, $mailfilial, $tmarker;


$from    = $_POST['fio'];	
if ($_POST[form]!=7 or $_POST[form]!=8) {
	$subject = "����� �� ������������ ������� 24x7.pechati.ru $_POST[adress] ($tmarker)";
} else {
	if ($_POST[form]==7) {
		$subject = "����� �� ������������� ������ Soligor";
	}
	if ($_POST[form]==8) {
		$subject = "����� �� �������������� �����";
	}
}

if($_POST['myurl']){
	$subject = $subject." ����� �� ��������(".$_POST['myurl'].")";
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
if($_POST[otrisov]){$msg=$msg."��������� - $_POST[otrisov]\n\n";}
if($_POST[zaschit]){$msg=$msg."������ - $_POST[zaschit]\n\n";}
if($_POST[dostav]){$msg=$msg."�������� - $_POST[dostav]\n\n";}

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

if($_POST[fio]){$msg=$msg."���������� ���� - $_POST[fio]\n\n"; }

if ($_POST[form]==1) {
	if($_POST[tel]){$msg=$msg."�������, ��� - $_POST[tel]\n\n";}
} else {
	if($_POST[tel]){$msg=$msg."���������� ������� - $_POST[tel]\n\n";}
}

if($_POST[eml]){$msg=$msg."E-mail - $_POST[eml]\n\n";$mailcfg['emailclient']=$_POST[eml];}

if($_POST[adr_1]){$msg=$msg."���������\n\n";}

if($_POST[adres]){$msg=$msg."��������� ����� �������� - $_POST[adres]\n\n";}

if($_POST[text]){$msg=$msg."�������������� ���������� - $_POST[text]\n\n";}
require "mailer.php";
$mail = new PHPMailer();
#$mail->From = $_POST[eml];      // �� ����
$mail->AddReplyTo = $_POST[eml]; 
//$mail->From = $_POST['postmaster@pechatiru.nichost.ru']; 
$mail->From = 'postmaster@pechatiru.nichost.ru'; 
error_log('From: ' . $mail->From);
$mailcfg['client']=$_POST[eml];
error_log('client: ' . $mailcfg['client']);
error_log($mailcfg['client']);
$mailcfg['fio']=$from;
error_log('fio: ' . $mailcfg['fio']);
$mail->FromName = $from;   // �� ����
error_log('FromName: ' . $mail->FromName);

//$mail->AddAddress('$to_adress', ''); // ���� - �����, ���
/*po filialam*/
error_log('check address: ' . $_POST[adress]);
if($_POST[adress]){
	$arr  = getfilialaddress($_POST[adress]);
	$str = $arr[0]." - ".$arr[1];
	$mail->AddAddress($arr[0],$arr[1]);
	error_log($str,0);
} else {
	$arr = getfilialaddress("default");; 
	$str = $arr[0]." - ".$arr[1];
	$mail->AddAddress($arr[0],$arr[1]);
	error_log($str,0);
}
/*\po filialam*/
//$mail->AddBCC('pechati@russia.ru', ''); // ���� - �����, ���
$mail->AddBCC('center-zakaz@pechati.ru', ''); // ���� - �����, ���
error_log('AddBCC: ' . $mail->AddBCC);
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
	$msg=$msg."���������� � ������:\n $_POST[text] \n\n\n-------------------------------------------------- \n\n\n ��� ���� � ������ �������!!!!";
require "mailer.php";
$mail = new PHPMailer();
#$mail->AddReplyTo = $_POST[eml]; 
$mail->From = $_POST['postmaster@pechatiru.nichost.ru'];      // �� ����
//$mail->AddAddress('zakaz@pechati.ru', ''); // ���� - �����, ���
/*po filialam*/
error_log('check address',0);
error_log($_POST[adress],0);
if($_POST[adress]){
	$arr  = getfilialaddress($_POST[adress]);
	$str = $arr[0]." - ".$arr[1];
	$mail->AddAddress($arr[0],$arr[1]);
	error_log('mail->AddAddress: ' . $str);
} else {
	$arr = getfilialaddress("default");; 
	$str = $arr[0]." - ".$arr[1];
	$mail->AddAddress($arr[0],$arr[1]);
	error_log('mail->AddAddress: ' . $str);
}
/*\po filialam*/
$mail->IsHTML(false);        // ���������� ������ ������ HTML
$mail->Subject = $subject;
$mail->Body = $msg;
$mail->Send();
error_log('mail sended!', 0);

}
#######
}


function getfilialaddress($addr){
	global $mailfilial, $mailcfg;
	$str = "addr - ";
	$str = $str.$addr." --|";
	error_log($str,0);
	$arr = array();
	if (array_key_exists($addr,$mailfilial)){
	//if(in_array())
		error_log('email of filial is set',0);
		//$mail->AddAddress($mailfilial[$addr],$addr);
		$arr[0] = $mailfilial[$addr];
		$arr[1] = $addr;
		$str = "filial - ";
		$str = $str.$arr[0].$arr[1];
		error_log($str,0);
		$mailcfg['filial']=$mailfilial[$addr];
	}
	else{
		
		error_log('email of filial is NOT set',0);
		//$mail->AddAddress($mailfilial["default"],'�� ���������');
		$mailcfg['filial']=$mailfilial["default"];
		$arr[0] = $mailfilial["default"];
		$arr[1] = '�� ���������';
		$str = "filial - ";
		$str = $str.$arr[0].$arr[1];
		error_log($str,0);
	}
	return $arr;
}

if($_POST[form])
{
	
	session_start(); //otkrili sessiju
	error_log('session start',0);
	complete_mail();
	error_log('completed complete_mail()',0);
	$filial = $_POST[adress];
	if (!isset($filial)||(strcasecmp($filial,'')==0)){
		unset($filial);
	}
	
	//sendmessagetoclient($mailcfg);
	
	$_SESSION['fio'] = $mailcfg['fio'];;
	$_SESSION['emailclient'] = $mailcfg['client'];
	$str="emailclient - ".$_SESSION['emailclient'];
	error_log($str,0);
	$_SESSION['emailfilial'] = $mailcfg['filial'];
	$str="emailfilial - ".$_SESSION['emailfilial'];
	$_SESSION['tmarker'] = $tmarker;
	error_log($str,0);
	error_log('set sessions',0);
	
	if (isset($filial)){
		$newURL = $newURL . "?send-form-target=" . $targetfilial[$filial];
	}
	else {
		$newURL = $newURL . "?send-form-target=" . $targetfilial['default'];
	}
	Header($newURL);
exit;
} else {
	Header("Location: forms_send.html");
exit;
}
function sendmessagetoclient($cfg){
	
	error_log("(return message to client)",0);
	global $tmarker;
	$subject2 = "����������� ������ $tmarker �� ������.��";
	$msg2 = "
	��� ����� ������� ���������������!
	
	��� ����� ������ �� ������ ������� ���� �� ��������� � ��� ��������:
	- ��� ����������� �������: http://pechati.ru/photogallery/
	- ��� ������� �������: http://pechati.ru/photogallery/
	- ��� �������� �������:  http://pechati.ru/photogallery/
	- ��� �������:  http://pechati.ru/photogallery/
	- ��� ������� �������:  http://pechati.ru/photogallery/
	�������� �������� ���������� ��� ��� ������ � �������� ��� � ���.
	����� ��������� � �������� 1 ���� ����� ��������� ������� ��������� ����� ������ 10%.
	��� ����, ����� ������� ����� ��������� ��� �� ��������: +8(495) 111-22-33 ��� �������� �� ��� ������
	
	--
	� ���������, ������.��
	http://pechati.ru
	";
	
	
	
	
	$mail2 = new PHPMailer();
	$mail2->From = $cfg['filial'];      // �� ����
	
	error_log("($cfg[filial])",0);
	//$mail->AddAddress('zakaz@pechati.ru', ''); // ���� - �����, ���
	/*po filialam*/
	$mail2->AddAddress($cfg['client'],$cfg['fio']);
	error_log("($cfg[client])",0);
	$mail2->IsHTML(false);        // ���������� ������ ������ HTML
	$mail2->Subject = $subject2;
	$mail2->Body = $msg2;
	$mail2->Send();
	
	error_log("(sended)",0);
}



?>
