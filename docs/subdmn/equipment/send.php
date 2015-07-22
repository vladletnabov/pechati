<?
if ($_POST['widget_7']) {
	//echo "bla-bla";
$mes=
sprintf('



<html>
<head></head>
<body>
<br>
<p align="left">
<font face="Verdana" size="2">
<b>Новая заявка на отправку прайс-листа: </b><br><br>
<b>Имя:</b> %s<br>
<b>Телефон:</b> %s<br>
<b>E-mail:</b> %s<br><br><br>
<a href="http://equipment.pechati.ru/">equipment.pechati.ru</a>
</font>
</p>
</body>
</html>
',
$_POST['widget_0'],
$_POST['widget_6'],
$_POST['widget_7']
);
$from = 'robot@pechati.ru';
$email_to='equipment@pechati.ru';
$subj='Заявка на отправку прайс-листа "equipment.pechati.ru"';
$header="From: $from \r\nContent-Type: text/html;charset=\"koi8-r\"";
$mes=convert_cyr_string($mes,'w','k');
$subj=convert_cyr_string($subj,'w','k');
$header=convert_cyr_string($header,'w','k');
@mail($email_to,$subj,$mes,$header);
/*header("Location:send.html");
echo'<script type="text/javascript">
  location.replace("/thanks.html");
</script>';
echo '<html><head><script type="text/javascript">location.replace("/thanks.html");</script></head></html>';*/
}
?>