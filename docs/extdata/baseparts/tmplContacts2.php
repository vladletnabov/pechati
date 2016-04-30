
<body marginheight="0" marginwidth="0" alink="#ff0000" link="#6600cc" text="#333333" vlink="#333333">
<!-- Верхнее закреплённое меню-->
<?php require_once "../extdata/headmenu.php" ?>
<div style="height:40px;"><a name="contacts"></a></div>

<?php require_once "../extdata/baseparts/counters-google-all.php" ?>

<table cellpadding="0" cellspacing="0" border="0" width="990" height="100%" align="center">
	<tr>
		<td bgcolor="#ffffff"  background="/i/bg1-c.jpg" style="background-repeat: repeat-y; height:155px">
			<div style="height:150px; width:945px; margin-top:-5px; margin-left: 39px; margin-right: -100px; background-color:#0f0f47; box-shadow: 5px 2px 5px 2px #7f7f7f;">
				
				<div style="background-image:url(/extdata/images/paper2.png); width:250px; max-height:194px; height:194px; align:center;float: left;position: relative; margin-left:-60px; ">
					<a href="/" style="text-decoration:none;">
						<img src="/extdata/images/pechati-ru.png" style="margin: 10px 0 0 60px;" /><br />
						<div style="font-size: 20px; margin:0; text-align: center; text-decoration: none;margin-left:15px; -webkit-transform: rotate(-12deg);
	-moz-transform: rotate(-12deg);
	-o-transform: rotate(-12deg);
	transform: rotate(-12deg);"> <i style="display:none">Печати.РУ </i><?php echo $filialDataListCP1251[$curFilial]['predlog']?> <?php echo  str_replace(" ","<br />",$filialDataListCP1251[$curFilial]['padej'])?></div>
						
						
					</a>
				</div>
				<div id="head-center" style="position:relative; color:#fff;">
					<div id="contacts" style="width:600px; float: left;">
						<div style="margin:5px;text-align:center;">
							<a style="text-align:center; font-size: 2em; color:#fff;font-weight:bold;  text-decoration: none;"><?php echo $filialDataListCP1251[$curFilial]['phone']?></a>
						</div>
						<div style="padding:5px 0 0 35px;">
							<div style="margin:5px; width:250px;float:left;display: inline;">
								<i class="icon2-home" style="float:left;margin-right: 10px;"></i> <div> <a style="color: #efefef; font-size: 1em; text-decoration: none;"><?php echo $filialDataListCP1251[$curFilial]['addrCity']?>, <?php echo $curFilial ?> <br /><?php  echo $filialDataListCP1251[$curFilial]['addrStreet'] ?> <?php  echo $filialDataListCP1251[$curFilial]['addrHouse'] ?></a></div>
								<input type="hidden" name="adress" value="<?php $curFilial ?>" form="form1">
							</div>
							<div style="margin:5px; width:250px; float:left;">
								<i class="icon2-phone" style="float:left;margin-right: 10px;"></i> <div> <a style="color: #efefef; font-size: 1em; text-decoration: none;"><?php echo $filialDataListCP1251[$curFilial]['phone']?></a></div>
							</div>
							
							<div style="margin:5px;width:250px;clear:both;float: left; display:inline;">
								<i class="icon2-time" style="float:left;margin-right: 10px;"></i> <div> <a style="color: #efefef; font-size: 1em; text-decoration: none;"><?php echo str_replace(",","<br />",$filialDataListCP1251[$curFilial]['rejim']) ?></a></div>
							</div>
							<div style="margin:5px; width:250px;float:left;">
								<i class="icon2-email" style="float:left;margin-right: 10px;"></i> <div> <a href="<?php echo $filialDataListCP1251[$curFilial]['phone']?>" style="color: #efefef; line-height:2.5em; font-size: 1em; text-decoration: none;"><?php echo $filialDataListCP1251[$curFilial]['email']?></a></div>
							</div>
						</div>
					</div>
					<div id="form-quick-zakaz; position:relative;">					
							<?php require_once "../extdata/baseparts/quick-zakaz-form.php" ?>
					</div>
				</div>
			</div>
		
		</td>
	</tr>
	<tr valign="top">
		<td height="100%" bgcolor="#ffffff" background="/i/bg1-c.jpg" style="background-repeat: repeat-y;">
			<table cellpadding="0" cellspacing="0" border="0" width="100%" height="100%" background="/i/bg2-c.jpg" style="background-position: top right; background-repeat: repeat-y;">
				<tr valign="top">
					<td width="990">

<!-- Content -->


<table cellpadding="0" cellspacing="0" border="0" width="100%">
	<tr>
		<td valign="top" height="22" >

<!-- Top text -->

<table cellpadding="0" cellspacing="0" border="0">
	<tr valign="top" class="top1">
		<td width="360">&nbsp;</td>
		<td height="22" width="105"><a href="#"></a></td>
		<td><a href="#"></a></td>
	</tr>
</table>

<!-- /Top text -->

		</td>
	</tr>
	<tr>
		<td class="txt3">

<!-- Text -->

<script language="javascript">
function checkRequired() {
	s = "Пожалуйста, заполните следующие обязательные поля:\n\n";
	flgSub = true;
	if (document.forms['form1'].eml.value == "") {
		s = s + "E-mail\n";
		flgSub = false;
	}
	if (flgSub == false) {
		alert(unescape(s));	
	} else {	
		document.forms["form1"].action="/send_forms_4.php";
		document.forms["form1"].target="";
		document.forms["form1"].submit();
	}
}
</script>
<table cellpadding="10" cellspacing="0" border="0" width="100%">
<form name="form1" id="form1" method="post" action="/send_forms_4.php" enctype="multipart/form-data">

	<tr>
		<td style="border: 1px solid #eeeafb;">
		<!-- базовая стоимость клише и доставки остальные делать на основе этого файла и подключать отдельно-->
		<?php //require_once "../extdata/filials/base-clishe-price.php"; ?>
		<?php //require_once "../extdata/filials/begovaya-clishe-price2.php"; 
		
		$reqClishePrice = "../extdata/filials/base-clishe-price.php";
		if (isset($filialDataListCP1251[$curFilial]['reqClishePrice'])
			&&(strcasecmp($filialDataListCP1251[$curFilial]['reqClishePrice'],'')!=0)) {
			$reqClishePrice = ".." . $filialDataListCP1251[$curFilial]['reqClishePrice'];
		}
		require_once $reqClishePrice;
		?>
		</td>
	</tr>
	<tr>
		<td><img src="../i/0.gif" width="1" height="1" alt=""></td>
	</tr>
	<tr>
		<td style="border: 1px solid #eeeafb;">
		
		<!-- базовая стоимость оснасток остальные делать на основе этого файла и подключать отдельно-->
		<?php //require_once "../extdata/filials/begovaya-osnastka-price.php" 
		$reqOsnastkaPrice = "../extdata/filials/base-osnastka-price.php";
		if (isset($filialDataListCP1251[$curFilial]['reqOsnastkaPrice'])
			&&(strcasecmp($filialDataListCP1251[$curFilial]['reqOsnastkaPrice'],'')!=0)) {
			$reqOsnastkaPrice = ".." . $filialDataListCP1251[$curFilial]['reqOsnastkaPrice'];
		}
		require_once $reqOsnastkaPrice;
		?>
		</td>
	</tr>
	<tr>
		<td><img src="../i/0.gif" width="1" height="1" alt=""></td>
	</tr>
	<tr>
		<td style="border: 1px solid #eeeafb;">
		<!-- базовая форма отправки контактов и калькуляции стоимости-->
		<?php //require_once "../extdata/baseparts/begovaya-sendform-price.php" ?>
		<?php require_once "../extdata/filials/begovaya-sendform-price.php" ?>
		</td>
	</tr>
</form>
	<tr>
		<td><img src="../i/0.gif" width="1" height="1" alt="">
		
		<!-- О филиале -->
		<div id="contacts1">
			<p>	<?php echo $curFilial ?><br />
			 <?php echo '<img src="../i/0.gif" class="poi2" width="13" height="13" alt="" align="absmiddle">', " ", $filialDataListCP1251[$curFilial]['addrCity'], ", ", $filialDataListCP1251[$curFilial]['addrStreet'], " ", $filialDataListCP1251[$curFilial]['addrHouse'], ", ", $filialDataListCP1251[$curFilial]['addrOffice']; ?></p>
				<p>Тел.: <b><?php echo $filialDataListCP1251[$curFilial]['phone'] ?></b></p>
				<p>Почта: <a href="<?php echo $filialDataListCP1251[$curFilial]['email'] ?>"><?php echo $filialDataListCP1251[$curFilial]['email'] ?></a></p>
				<p>Часы работы: <br/>
				<? echo str_replace(",","<br />",$filialDataListCP1251[$curFilial]['rejim'])?>
				
				</p>
		
		<?php 
		$reqFilialData =".." . $filialDataListCP1251[$curFilial]['reqFilialData'];
		//echo $reqFilialData;
		require_once $reqFilialData ;
		?>
		<br><br>
			<div id="map" style="height:500px; width:945px;margin-left:-35px;"></div>
		</div>
		</td>
	</tr>
	<tr>
		<td style="border: 1px solid #eeeafb;">
		
		
			<!-- печати ру это -->
			<?php require_once "../extdata/baseparts/pechatiru-is.php" ?>

		</td>
	</tr>
	<tr>
		<td><img src="../i/0.gif" width="1" height="1" alt=""></td>
	</tr>
	<tr>
		<td style="border: 1px solid #eeeafb;">
			<!-- Сколько стоит печать в сравнении -->
			<?php require_once "../extdata/baseparts/howmuch.php" ?>
		</td>
	</tr>
	<tr>
		<td><img src="../i/0.gif" width="1" height="1" alt=""></td>
	</tr>
    <tr>
    	<td style="border: 1px solid #eeeafb;">
		
			<!-- список клиентов -->
			<?php require_once "../extdata/baseparts/our-clients.php" ?>
		</td>
    </tr>
	<tr>
		<td><img src="../i/0.gif" width="1" height="1" alt=""></td>
	</tr>
</table>
				<!-- дополнительные товары -->
				<?php require_once "../extdata/dop-tovary.php" ?>
				<!-- карта филиалов -->
				
				<?php require_once "../extdata/baseparts/map-filials.php" ?>
<br /><br />

<!-- Text -->

		</td>
	</tr>
</table>

<!-- Content -->

					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td><img src="/i/btm1-c.jpg" width="990" height="30" alt=""></td>
	</tr>
	<tr>
		<td class="btm1-c">
			<table cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr valign="top">
					<td width="100%" class="btm2">
						<p>Срочное изготовление печатей и штампов в Москве "Печати.ru" R Москва 2002г.<br><a href="http://www.pechati.ru/">Срочное изготовление печатей и штампов</a></p>
					</td>
					<td width="80" nowrap><a href="http://www.pechati.ru/"><strong>главная</strong></a></td>
					<td width="110" nowrap><a href="http://www.pechati.ru/contacts/"><strong>контакты</strong></a></td>
				</tr>
			</table>
		</td>
	</tr>
</table>
<?php require_once "../extdata/baseparts/counters-all.php" ?>
</body>