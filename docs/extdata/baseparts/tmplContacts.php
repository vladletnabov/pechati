<body marginheight="0" marginwidth="0" alink="#ff0000" link="#6600cc" text="#333333" vlink="#333333">
<?php //var_dump($filialDataListCP1251)?>
<?php require_once "../extdata/baseparts/counters-google-all.php" ?>


<table cellpadding="0" cellspacing="0" border="0" width="990" height="100%" align="center">
	<tr>
		<td><a href="/"><img src="../i/top-uslugi2.jpg" width="990" height="85" border="0" alt=""></a></td>
	</tr>
	<tr valign="top">
		<td height="100%" bgcolor="#ffffff" background="/i/bg1-c.jpg" style="background-repeat: repeat-y;">
			<table cellpadding="0" cellspacing="0" border="0" width="100%" height="100%" background="/i/bg2-c.jpg" style="background-position: top right; background-repeat: repeat-y;">
				<tr valign="top">
					<td width="990" background="/i/bg6-c-u.jpg" style="background-repeat: no-repeat; background-position: left top;">

<!-- Content -->

<div style="position: absolute; top: -60px; left: 770px; height: 36px; width: 220px;z-index:99;"><span style="font-size: 25px;" class="<?php  echo $filialDataListCP1251[$curFilial]["ya-phone"]?>"><?php echo $filialDataListCP1251[$curFilial]["phone"]?> </span><br />
	<span style="color:#92000a; font-size: 16px;"><input type="hidden"  name="adress" value="<?php echo $curFilial ?>" form="form1" /><?php echo $curFilial ?></span>
	 <div style="border:1px solid #eeeafb; margin: 20px 12px 0 0;padding: 10px 3px 5px 5px; background-color:#fff;">
	<b>Работаем:</b> <?php echo str_replace(",","<br />",$filialDataListCP1251[$curFilial]['rejim']) ?><br />
	<b>Адрес:</b> <?php echo $filialDataListCP1251[$curFilial]['addrStreet'], " ", $filialDataListCP1251[$curFilial]['addrHouse'], " ", $filialDataListCP1251[$curFilial]['addrOffice']; ?><br />
	<?php
	if( isset($filialDataListCP1251[$curFilial]['subFilials']) && (is_array($filialDataListCP1251[$curFilial]['subFilials']))) {
			foreach ($filialDataListCP1251[$curFilial]['subFilials'] as $key=>$value) {
				$addrSubFilial = $filialDataListCP1251[$curFilial]['subFilials'][$key]['addrStreet'] . ' ' . $addrFilial = $filialDataListCP1251[$curFilial]['subFilials'][$key]['addrHouse'] . ', ';
				if ((isset($filialDataListCP1251[$curFilial]['subFilials'][$key]['addrOffice']))&&(strcasecmp($filialDataListCP1251[$curFilial]['subFilials'][$key]['addrOffice'], '')!=0)){
					$addrSubFilial = $addrSubFilial . $filialDataListCP1251[$curFilial]['subFilials'][$key]['addrOffice'];
				}
				echo $addrSubFilial, "<br />";
			}
		} 
	?>
	<!--<input type="button" value="Быстрый заказ" id="quickzakaz">-->
	 </div>
</div>
<table cellpadding="0" cellspacing="0" border="0" width="100%">
	<tr>
		<td valign="top" height="52" class="txt2">

<!-- Top text -->

<table cellpadding="0" cellspacing="0" border="0">
	<tr valign="top" class="top1">
		<td width="360">&nbsp;</td>
		<td height="52" width="105"><a href="#"></a></td>
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
		<?php 
		//require_once "../extdata/filials/base-clishe-price.php" 
		if( isset($filialDataListCP1251[$curFilial]['clishePrice']) || (strcasecmp($filialDataListCP1251[$curFilial]['clishePrice'], '')!=0)) {
			$reqClishePrice = ".." . $filialDataListCP1251[$curFilial]['clishePrice'];
			require_once $reqClishePrice ;
		} 
		else{
			require_once "../extdata/filials/base-clishe-price.php";
		}
		?>
		</td>
	</tr>
	<tr>
		<td><img src="../i/0.gif" width="1" height="1" alt=""></td>
	</tr>
	<tr>
		<td style="border: 1px solid #eeeafb;">
		<P><img src="../pics/str.gif" width="5" height="9" alt=""> <B>Наиболее популярные модели оснастки</B><BR>(Нажмите на изображение для просмотра расширенного ассортимента)</P>
		<!-- базовая стоимость оснасток остальные делать на основе этого файла и подключать отдельно-->
		<?php 
		//require_once "../extdata/filials/base-osnastka-price.php";
		if( isset($filialDataListCP1251[$curFilial]['osnastkaPrice']) || (strcasecmp($filialDataListCP1251[$curFilial]['osnastkaPrice'], '')!=0)) {
			$reqOsnastkaPrice = ".." . $filialDataListCP1251[$curFilial]['osnastkaPrice'];
			require_once $reqOsnastkaPrice;
		} 
		else{
			require_once "../extdata/filials/base-osnastka-price.php";
		}
		?>
		</td>
	</tr>
	<tr>
		<td><img src="../i/0.gif" width="1" height="1" alt=""></td>
	</tr>
	<tr>
		<td style="border: 1px solid #eeeafb;">
		<!-- базовая форма отправки контактов и калькуляции стоимости-->
		<?php require_once "../extdata/baseparts/sendform-price.php" ?>
		</td>
	</tr>
</form>
	<tr>
		<td><img src="../i/0.gif" width="1" height="1" alt="">
		<!-- О филиале -->
		<div id="contacts1">
			<p>	<?php echo $curFilial ?><br />
			 <?php echo '<img src="../i/0.gif" class="poi2" width="13" height="13" alt="" align="absmiddle">', " ", $filialDataListCP1251[$curFilial]['addrCity'], ", ", $filialDataListCP1251[$curFilial]['addrStreet'], " ", $filialDataListCP1251[$curFilial]['addrHouse'], ", ", $filialDataListCP1251[$curFilial]['addrOffice']; ?></p>
				<p>Тел.: <b><span class="<?php  echo $filialDataListCP1251[$curFilial]["ya-phone"]?>"><?php echo $filialDataListCP1251[$curFilial]['phone'] ?></span></b></p>
				<p>Почта: <a href="<?php echo $filialDataListCP1251[$curFilial]['email'] ?>"><?php echo $filialDataListCP1251[$curFilial]['email'] ?></a></p>
				<p>Часы работы: <br/>
				<? echo str_replace(",","<br />",$filialDataListCP1251[$curFilial]['rejim'])?>				
				</p>
			<?php
				if( isset($filialDataListCP1251[$curFilial]['subFilials']) && (is_array($filialDataListCP1251[$curFilial]['subFilials']))) {
					foreach ($filialDataListCP1251[$curFilial]['subFilials'] as $key=>$value) {
						//
						echo '<img src="../i/0.gif" class="poi2" width="13" height="13" alt="" align="absmiddle">', " ", "<b>Филиал №", ($key+1), "</b><br />";
						echo $filialDataListCP1251[$curFilial]['subFilials'][$key]['addrCity'], ", ", $filialDataListCP1251[$curFilial]['subFilials'][$key]['addrStreet'], $filialDataListCP1251[$curFilial]['subFilials'][$key]['addrHouse'], ", ", $filialDataListCP1251[$curFilial]['subFilials'][$key]['addrOffice'], "<br />";
						echo "<p>Часы работы: <br/>";
						echo str_replace(",","<br />",$filialDataListCP1251[$curFilial]['subFilials'][$key]['rejim']);
						echo "<br /><br />";
					}
				}
			
			?>
			
		
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
