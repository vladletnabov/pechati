<?
if ($_POST) {
$mes=
sprintf('



<html>
<head></head>
<body>
<br>
<p align="left">
<font face="Verdana" size="2">
<b>������ �� Printer R-40</b><br><br>
<b>���:</b> %s<br>
<b>�������:</b> %s<br>
<b>E-mail:</b> %s<br>
%s</font>
</p>
</body>
</html>
',
$_POST['name'],
$_POST['tel'],
$_POST['eml'],
$_POST['text']
);
$from = 'robot@pechati.ru';
$email_to='info@pechati.ru';
//$email_to='laura@ecohost.ru';
$subj='������ � ����� "pechati.ru"';
/*if ($_FILES['file']['name']) {
	$uploadfile="./files/".$_FILES['file']['name'];
	move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);
	//echo $file_name;
	//$file_name=$temp;
	$file_name=$uploadfile;
	$file=fopen($file_name, "rb");
	// ��������� ��� � ������ $str_file
	$str_file=fread($file,filesize($file_name));
	// ����������� ��� ������ � base64-������
	//$str_file=base64_encode($str_file);
	$bound=md5(time());
	$header1="Mime-Version: 1.0\r\n";
	$header1.="Content-Type: multipart/mixed; boundary=\"--".$bound."\"";
	$body="\r\n----".$bound."\r\n";
	$body.="Content-type: text/html; charset=\"koi8-r\"\n";
	$body.="Content-Transfer-Encoding: quoted-printable\n\n";
	$mes=convert_cyr_string($mes,'w','k');
	$body.=$mes;
	$body.="\r\n----".$bound."\n";
	$body.="Content-Type: application/octet-stream; ";
	$body.="name=\"".basename($file_name)."\"\r\n";
	$body.="Content-Transfer-Encoding: base64\r\n";
	$body.="Content-Disposition:attachment; filename=\"".basename($file_name)."\"\r\n\r\n";
	//$body.="filename=\"".basename($file_name)."\"\n";
	$body.=chunk_split(base64_encode($str_file))."\r\n";
	$body.="----".$bound."--\r\n";
	$header="From: $from \r\n";
	$header2=$header.$header1;
	$mes2=$body;
	$subj=convert_cyr_string($subj,'w','k');
	$header=convert_cyr_string($header2,'w','k');
	@unlink ($uploadfile);
//fclose($temp); // ���������� �������� �����
} else {*/
	$header="From: $from \r\nContent-Type: text/html;charset=\"koi8-r\"";
	$mes2=convert_cyr_string($mes,'w','k');
	$subj=convert_cyr_string($subj,'w','k');
	$header=convert_cyr_string($header,'w','k');
//}
@mail($email_to,$subj,$mes2,$header);
/*exit;
die();*/
//echo '<html><body><script>document.location.href="thanks.html"</script></body></html>';
/*echo'<script type="text/javascript">
  location.replace("/thanks.html");
</script>';*/
}
header("Location:/forms_send.html");
?>