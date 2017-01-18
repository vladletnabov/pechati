<!--<p><a name="zakaz" title="Заказать"> </a></p><p><a style="font-size: 26px;">Заказать:</a><br /></p>
<p><a style="font-size: 20px; color: navy;">Шаг 1: выберите печать, штамп или факсимиле</a><br /></p>
<!-- Дефолтная цена печати-->
<!--
<script>
	var price1 = 500;
</script>-->
<!-- Конец дефолта-->

	<?php  require_once "../zakaz/tovar1.php" ?>
	<?php  require_once "../zakaz/tovar2.php" ?>
	<?php  //require_once "../extdata/table-price-div.php" ?>
<br />
<a name="ceny"></a><P align=justify>Все цены указаны в рублях РФ без стоимости оснастки. </P>

<!-- Доставка -->
<!--<UL>
	<LI>
<P align=justify>Доставка по Москве ОДНОЙ-ДВУХ печатей - 300р, от трёх единиц - <B>бесплатно!</B> </P>
	<LI>
<P align=justify>По желанию заказчика мы можем разместить на печати ПРОСТЫЕ элементы защиты: оригинальные шрифты, отсутствующие элементы в буквах, изображениях или звёздочках, имитация заплыва краски, кляксы, имитация дефекта клише.</P>
	</LI>
</UL>-->
<!-- Конец блока доставки-->
<!-- Стоимость осснастки по дефолту -->
<script>
	var price2 = 450;
</script>
<!-- конец дефолта -->

<!-- Оснастки-->

<!--<p><a style="font-size: 20px; color: navy;">Шаг 2: выберите оснастку</a><br /></p>
<table cellpadding="10" cellspacing="0" border="0" align="center">
	<tr valign="top" align="center">
<td width="25%">
	<A href="javascript:void(window.open('/uslugi/osn_automat.html','','resizable=no,location=no,menubar=no,scrollbars=yes,status=no,toolbar=no,fullscreen=no,dependent=no,width=690,height=750,left=1,top=1'))"><IMG border=0 src="../pics/uslugi/colop_printer_r40_100x133.jpg" width=100 height=133></A>
	<p>Автоматическая оснастка<BR>Диам. 40 мм.<BR><input type="Radio" name="osnast" checked value="Автоматическая оснастка Диам. 40 мм." onClick="price2 = 450; count_price();" id="osnast1"> <label for="osnast1">450 руб.</label></p>
</td>
<td width="25%">
	<A href="javascript:void(window.open('/uslugi/osn_automat_mal.html','','resizable=no,location=no,menubar=no,scrollbars=yes,status=no,toolbar=no,fullscreen=no,dependent=no,width=690,height=800,left=1,top=1'))"><IMG border=0 src="../pics/uslugi/shiny-s-843.jpg" width=100 height=133></A>
	<p>Автоматическая оснастка<BR>для мал. штампов<BR><input type="Radio" name="osnast" value="Автоматическая оснастка для мал. штампов" onClick="price2 = 200; count_price();" id="osnast2"> <label for="osnast2">200 руб.</label></p>
</td>
<td width="25%">
	<A href="javascript:void(window.open('/uslugi/osn_automat_bolsh.html','','resizable=no,location=no,menubar=no,scrollbars=yes,status=no,toolbar=no,fullscreen=no,dependent=no,width=690,height=750,left=1,top=1'))"><IMG border=0 src="../pics/uslugi/grm-4927.jpg" width=100 height=133></A>
	<p>Автоматическая оснастка<BR>для больших штампов<BR><input type="Radio" name="osnast" value="Автоматическая оснастка для больших штампов" onClick="price2 = 400; count_price();" id="osnast3"> <label for="osnast3">400 руб.</label></p>
</td>
<td width="25%">
	<A href="javascript:void(window.open('/uslugi/osn_profline.html','','resizable=no,location=no,menubar=no,scrollbars=yes,status=no,toolbar=no,fullscreen=no,dependent=no,width=690,height=750,left=1,top=1'))"><IMG border=0 src="../pics/uslugi/colop-r3040.jpg" width=100 height=133></A>
	<p>Colop R 3040<BR>Диам. 45 мм.<BR><input type="Radio" name="osnast" value="Professional Line 5215 Диам. 45 мм." onClick="price2 = 1000; count_price();" id="osnast4"> <label for="osnast4">от 1000 руб.</label></p>
	</td>
	</tr>
	<tr valign="top" align="center">
<td>
	<A href="javascript:void(window.open('/uslugi/metal_osn_pech_stamp.html','','resizable=no,location=no,menubar=no,scrollbars=yes,status=no,toolbar=no,fullscreen=no,dependent=no,width=690,height=800,left=1,top=1'))"><IMG border=0 src="../pics/uslugi/met_classic_100x133.jpg" width=100 height=133></A>
	<p>Металлические оснастки<BR>для печатей и штампов<BR><input type="Radio" name="osnast" value="Металлические оснастки для печатей и штампов" onClick="price2 = 500; count_price();" id="osnast5"> <label for="osnast5">от 500 р.</label></p>
</td>
<td>
	<A href="javascript:void(window.open('/uslugi/metal_osn_original.html','','resizable=no,location=no,menubar=no,scrollbars=yes,status=no,toolbar=no,fullscreen=no,dependent=no,width=690,height=1000,left=1,top=1'))"><IMG border=0 src="../pics/uslugi/met_techno_100x133.jpg" width=100 height=133></A>
	<p>Эксклюзивные оснастки<BR><input type="Radio" name="osnast" value="Оригинальные оснастки" onClick="price2 = 1200; count_price();" id="osnast6"> <label for="osnast6">1200 р.</label></p>
</td>
<td>
	<A href="javascript:void(window.open('/uslugi/plastm_osn_gerb.html','','resizable=no,location=no,menubar=no,scrollbars=yes,status=no,toolbar=no,fullscreen=no,dependent=no,width=690,height=1000,left=1,top=1'))"><IMG border=0 src="../pics/uslugi/plasm_gerb40_100x133.jpg" width=100 height=133></A>
	<p>Оснастка с гербом<BR>Диам. 40 мм.<BR><input type="Radio" name="osnast" value="Оснастка с гербом Диам. 40 мм." onClick="price2 = 0; count_price();" id="osnast7"> <label for="osnast7">Бесплатно.</label></p>
</td>
<td>
	<A href="javascript:void(window.open('/uslugi/elit_osn.html','','resizable=no,location=no,menubar=no,scrollbars=yes,status=no,toolbar=no,fullscreen=no,dependent=no,width=690,height=1000,left=1,top=1'))"><IMG border=0 src="../pics/uslugi/elit_osn.jpg" width=100 height=133></A>
	<p>Элитные оснастки<BR>от 1500 р.</p>
	</td>
	</tr>
</table>-->
<!-- Конец оснасток-->

<!-- Форма отправки-->

<!--p><a style="font-size: 20px; color: navy;">Шаг 3: свяжитесь с нами</a><br /></p>
<script>
	var price3 = 0;
</script>
<p><img src="../pics/str.gif" width="5" height="9" alt=""> <strong>Информация о заказе</strong></p>
<table border="0" cellspacing="1" cellpadding="3" width="100%">
	<tr bgcolor="#e0e0e0">
<td>
	<b>Телефон, Имя</b>
</td>
<td>
	<input type="text" class="text_forms" style="width: 226px; font-size: 14pt;" name="tel">
</td>
	</tr>
	<tr bgcolor="#efefef">
<td>
	<b>E-mail</b>
</td>
<td>
	<input type="text" class="text_forms" style="width: 226px; font-size: 14pt;" name="eml" id="eml">
</td>
	</tr>
	<tr bgcolor="#e0e0e0">
<td width="300">
	<b>Файл-Вложение</b><br><font size=-2>файл во вложении должен быть не более 2Мб</font>
</td>
<td width="650">
	<input type="file" class="text_forms" style="width: 226px;" name="pict">
</td>
	</tr>
	<tr bgcolor="#efefef">
<td valign="top">
	<b>Дополнительная информация</b>
</td>
<td>
	<textarea type="text" class="text_forms" style="width:300px; height:70px; border-color:#cccccc;" name="text"></textarea>
</td>
	</tr>
</table>
<p style="font-size: 14pt;"><strong>Стоимость Вашего заказа: <span style="color: #f00;" id="price"></span>&nbsp;руб</strong></p>
<p align="center"><input type="Hidden" name="form" value="1"><input type="button" onclick="checkRequired()" value="Заказать печать сейчас" style="width: 278px; height: 80px; background: #f90 url('/i/button.jpg') left top no-repeat; border: 0; color: #fff; font-size: 14pt;"></p>
<script language="JavaScript">
	function count_price()
	{
document.getElementById('price').innerHTML = price1 + price2 + price3;
return;
	}
	count_price();
</script>
-->
<!-- конец формы отправки -->
