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
	$subject = "Заказ на изготовление печатей 24x7.pechati.ru $_POST[adress] ($tmarker)";
} else {
	if ($_POST[form]==7) {
		$subject = "Заказ на экспонирующие камеры Soligor";
	}
	if ($_POST[form]==8) {
		$subject = "Заказ на автоматические мойки";
	}
}

if($_POST['myurl']){
	$subject = $subject." Заказ со страницы(".$_POST['myurl'].")";
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
if($_POST[otrisov]){$msg=$msg."Отрисовка - $_POST[otrisov]\n\n";}
if($_POST[zaschit]){$msg=$msg."Защита - $_POST[zaschit]\n\n";}
if($_POST[dostav]){$msg=$msg."Доставка - $_POST[dostav]\n\n";}

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

if($_POST[fio]){$msg=$msg."Контактное лицо - $_POST[fio]\n\n"; }

if ($_POST[form]==1) {
	if($_POST[tel]){$msg=$msg."Телефон, Имя - $_POST[tel]\n\n";}
} else {
	if($_POST[tel]){$msg=$msg."Контактный телефон - $_POST[tel]\n\n";}
}

if($_POST[eml]){$msg=$msg."E-mail - $_POST[eml]\n\n";$mailcfg['emailclient']=$_POST[eml];}

if($_POST[adr_1]){$msg=$msg."Самовывоз\n\n";}

if($_POST[adres]){$msg=$msg."Подробный адрес доставки - $_POST[adres]\n\n";}

if($_POST[text]){$msg=$msg."Дополнительная информация - $_POST[text]\n\n";}
require "mailer.php";
$mail = new PHPMailer();
#$mail->From = $_POST[eml];      // от кого
$mail->AddReplyTo = $_POST[eml]; 
//$mail->From = $_POST['postmaster@pechatiru.nichost.ru']; 
$mail->From = 'postmaster@pechatiru.nichost.ru'; 
error_log('From: ' . $mail->From);
$mailcfg['client']=$_POST[eml];
error_log('client: ' . $mailcfg['client']);
error_log($mailcfg['client']);
$mailcfg['fio']=$from;
error_log('fio: ' . $mailcfg['fio']);
$mail->FromName = $from;   // от кого
error_log('FromName: ' . $mail->FromName);

//$mail->AddAddress('$to_adress', ''); // кому - адрес, Имя
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
//$mail->AddBCC('pechati@russia.ru', ''); // кому - адрес, Имя
$mail->AddBCC('center-zakaz@pechati.ru', ''); // кому - адрес, Имя
error_log('AddBCC: ' . $mail->AddBCC);
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
	$msg=$msg."Информация о заказе:\n $_POST[text] \n\n\n-------------------------------------------------- \n\n\n ВСЕ ЦЕНЫ С НОЧНОЙ СКИДКОЙ!!!!";
require "mailer.php";
$mail = new PHPMailer();
#$mail->AddReplyTo = $_POST[eml]; 
$mail->From = $_POST['postmaster@pechatiru.nichost.ru'];      // от кого
//$mail->AddAddress('zakaz@pechati.ru', ''); // кому - адрес, Имя
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
$mail->IsHTML(false);        // выставляем формат письма HTML
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
		//$mail->AddAddress($mailfilial["default"],'По умолчанию');
		$mailcfg['filial']=$mailfilial["default"];
		$arr[0] = $mailfilial["default"];
		$arr[1] = 'По умолчанию';
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
	$subject2 = "Регистрация заказа $tmarker на Печати.РУ";
	$msg2 = "
	Ваш заказ успешно зарегистрирован!
	
	Для Вашей печати Вы можете выбрать один из имеющихся у нас шаблонов:
	- для одноцветных печатей: http://pechati.ru/photogallery/
	- для цветных печатей: http://pechati.ru/photogallery/
	- для гербовых печатей:  http://pechati.ru/photogallery/
	- для штампов:  http://pechati.ru/photogallery/
	- для цветных штампов:  http://pechati.ru/photogallery/
	Выберите наиболее подходящий для Вас шаблон и закажите его у нас.
	Заказ сделанный в теченнии 1 часа после получения данного сообщения имеет скидку 10%.
	Для того, чтобы сделать заказ позвоните нам по телефону: +8(495) 111-22-33 или ответьте на это письмо
	
	--
	С уважением, Печати.РУ
	http://pechati.ru
	";
	
	
	
	
	$mail2 = new PHPMailer();
	$mail2->From = $cfg['filial'];      // от кого
	
	error_log("($cfg[filial])",0);
	//$mail->AddAddress('zakaz@pechati.ru', ''); // кому - адрес, Имя
	/*po filialam*/
	$mail2->AddAddress($cfg['client'],$cfg['fio']);
	error_log("($cfg[client])",0);
	$mail2->IsHTML(false);        // выставляем формат письма HTML
	$mail2->Subject = $subject2;
	$mail2->Body = $msg2;
	$mail2->Send();
	
	error_log("(sended)",0);
}



?>
