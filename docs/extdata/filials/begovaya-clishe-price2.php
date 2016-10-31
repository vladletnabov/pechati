<p style="margin-bottom:-10px;"><a name="zakaz" title="Заказать печать"> </a></p>
<a name="pechati"></a><P align="center" style="font-size: 22pt;margin-bottom:-10px;color:#0f0f47"><B>Заказать печать в СЗАО стало ещё проще!!!</B><br></P>
<p align="center" style="color:#92000a; margin-top:10px; margin-bottom:20px;font-size: 18pt;;text-align:center;">Сделайте 3 (три) простых шага и печати уже Ваши!!!</p>
<p align="center" style="margin-top:-10px;; margin-bottom:10px;font-size: 18pt;text-align:center;">Изготовление печатей, штампов и факсимиле <br /><?php 
	if (isset($filialDataListCP1251[$curFilial]['dopMetro'])){
				echo $filialDataListCP1251[$curFilial]['predlog'] . ' '. $filialDataListCP1251[$curFilial]['padej'] . ', ' . $filialDataListCP1251[$curFilial]['dopMetroPredlog'] . ' ' . $filialDataListCP1251[$curFilial]['dopMetroPadej'];
			}
			else {echo $filialDataListCP1251[$curFilial]['predlog'] . ' ' . $filialDataListCP1251[$curFilial]['padej'];}
	
	//echo $filialDataListCP1251[$curFilial]['padej'];
	?></p>

<!--<span align="center" style="color:#92000a;margin-top:-20px;; margin-bottom:0px;font-size: 18pt;">Изготовление печатей и штампов и факсимиле по оттиску</span>-->
<script>
var price1 = 1050;
</script>
<p><a style="font-size: 20px; color: navy;">Шаг 1: выберите клише</a><br></p>
<TABLE border=0 cellSpacing=1 cellPadding=5 width="100%">
	<TR bgcolor="#ebeaef">
		<TD>
			<a name="klishe"></a><!--<P align=center><B>Клише из резины. </B></P>--></TD>
		<TD>
		<P align=center><B>На<br />следующий<br />день </B></P>	
		</TD>
		<TD>
			<P align=center><B>Сегодня<br />(от 4 часов)</B></P>
		</TD>
		<TD>
		<P align=center><B>Срочно<br />(до 2 часов)</B></P>
		</TD>
	</TR>
	<TR bgcolor="#ebeaef">
		<TD><strong>Новая печать </strong> (при открытии счета в банке «Открытие»)</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="Новые печати, штампы по шаблону срочно за час" onClick="price1 = 0; count_price();" id="clishe1a"> <label for="clishe1a">Бесплатно</label></P>
		</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="Новые печати, штампы по шаблону срочно в течении дня" onClick="price1 = 0; count_price();" id="clishe1b"> <label for="clishe1b">Бесплатно</label></P>
		</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="Новые печати, штампы по шаблону за день" checked onClick="price1 = 0; count_price();" id="clishe1c"> <label for="clishe1c">Бесплатно</label></P>
		</TD>
	</TR>
	<TR bgcolor="#ebeaef">
		<TD><strong>Новая печать </strong> (фотополимер)</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="Новые печати, штампы по шаблону за день" onClick="price1 = 400; count_price();" id="clishe3a"> <label for="clishe3a">400 р</label></P>
		</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="Новые печати, штампы по шаблону срочно в течении дня" onClick="price1 = 550; count_price();" id="clishe3b"> <label for="clishe3b">550 р</label></P>
		</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="Новые печати, штампы по шаблону срочно за час" onClick="price1 = 750; count_price();" id="clishe3c"> <label for="clishe3c">750 р</label></P>
		</TD>
	</TR>
		<TR bgcolor="#ebeaef">
		<TD><strong>Новая печать </strong> (резина)</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="Новые печати, штампы по шаблону за день" onClick="price1 = 600; count_price();" id="clishe2a"> <label for="clishe2a">600 р</label></P>
		</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="Новые печати, штампы по шаблону срочно в течении дня" onClick="price1 = 750; count_price();" id="clishe2b"> <label for="clishe2b">750 р</label></P>
		</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="Новые печати, штампы по шаблону срочно за час" onClick="price1 = 950; count_price();" id="clishe2c"> <label for="clishe2c">950 р</label></P>
		</TD>
	</TR>
	<TR bgcolor="#ebeaef">
		<TD><strong>Печать по оттиску</strong> (фотополимер)</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="Печать по оттиску (фотополимер) за день" onClick="price1 = 700; count_price();" id="clishe5a"> <label for="clishe5a">700 р</label></P>
		</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="Печать по оттиску (фотополимер) срочно в течении дня" onClick="price1 = 900; count_price();" id="clishe5b"> <label for="clishe5b">900 р</label></P>
		</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="Печать по оттиску (фотополимер) срочно за час" onClick="price1 = 1150; count_price();" id="clishe5c"> <label for="clishe5c">1150 р</label></P>
		</TD>
	</TR>
	<TR bgcolor="#ebeaef">
		<TD><strong>Печать по оттиску</strong> (резина)</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="Печать по оттиску (резина) за день" onClick="price1 = 900; count_price();" id="clishe4a"> <label for="clishe4a">900 р</label></P>
		</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="Печать по оттиску (резина) срочно в течении дня" onClick="price1 = 1100; count_price();" id="clishe4b"> <label for="clishe4b">1100 р</label></P>
		</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="Печать по оттиску (резина) срочно за час" onClick="price1 = 1350; count_price();" id="clishe4c"> <label for="clishe4c">1350 р</label></P>
		</TD>
	</TR>
	<TR bgcolor="#ebeaef">
		<TD><strong>Факсимиле</strong> (фотополимер)</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="Факсимиле за день" onClick="price1 = 550; count_price();" id="clishe7a"> 
			<label for="clishe7a">550 р</label></P>
		</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="Факсимиле срочно в течении дня" onClick="price1 = 650; count_price();" id="clishe7b"> 
			<label for="clishe7b">650 р</label></P>
		</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="Факсимиле срочно за час" onClick="price1 = 800; count_price();" id="clishe7c"> 
			<label for="clishe7c">800 р</label></P>
		</TD>
	</TR>
	<TR bgcolor="#ebeaef">
		<TD><strong>Факсимиле</strong> (резина)</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="Факсимиле за день" onClick="price1 = 750; count_price();" id="clishe6a"> 
			<label for="clishe6a">750 р</label></P>
		</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="Факсимиле срочно в течении дня" onClick="price1 = 850; count_price();" id="clishe6b"> 
			<label for="clishe6b">850 р</label></P>
		</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="Факсимиле срочно за час" onClick="price1 = 1000; count_price();" id="clishe6c"> 
			<label for="clishe6c">1000 р</label></P>
		</TD>
	</TR>
	<TR bgcolor="#ebeaef">
		<TD><strong>Детская печать</strong> (резина)</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="Детская печать (резина) за день" onClick="price1 = 600; count_price();" id="clishe8a"> 
			<label for="clishe8a">600 р</label></P>
		</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="Детская печать (резина) срочно в течении дня" onClick="price1 = 750; count_price();" id="clishe8b"> 
			<label for="clishe8b">750 р</label></P>
		</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="Детская печать (резина) срочно за час" onClick="price1 = 950; count_price();" id="clishe8c"> 
			<label for="clishe8c">950 р</label></P>
		</TD>
	</TR>
	<TR bgcolor="#ebeaef">
		<TD><strong>Флеш печать</strong> (новая)</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="Флеш печать (новая) за день" onClick="price1 = 900; count_price();" id="clishe9a"> 
			<label for="clishe9a">900 р</label></P>
		</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="Флеш печать (новая) срочно в течении дня" onClick="price1 = 1050; count_price();" id="clishe9b"> 
			<label for="clishe9b">1050 р</label></P>
		</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="Флеш печать (новая) срочно за час" onClick="price1 = 1200; count_price();" id="clishe9c"> 
			<label for="clishe9c">1200 р</label></P>
		</TD>
	</TR>
	<TR bgcolor="#ebeaef">
		<TD><strong>Флеш печать</strong> (по оттиску)</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="Флеш печать (по оттиску) за день" onClick="price1 = 1200; count_price();" id="clishe10a"> 
			<label for="clishe10a">1200 р</label></P>
		</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="Флеш печать (по оттиску) срочно в течении дня" onClick="price1 = 1350; count_price();" id="clishe10b"> 
			<label for="clishe10b">1350 р</label></P>
		</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="Флеш печать (по оттиску) срочно за час" onClick="price1 = 1500; count_price();" id="clishe10c"> 
			<label for="clishe10c">1500 р</label></P>
		</TD>
	</TR>
	<TR bgcolor="#ebeaef">
		<TD><strong>Печать, отрисованная в кривых</strong> (фотополимер)</TD>
		<TD>
			<P align=center>
				<input type="Radio" name="srok" value="Печать, отрисованная в кривых (фотополимер) за день" onClick="price1 = 300; count_price();" id="clishe12a"> 
				<label for="clishe12a">300 р</label>
			</P>
		</TD>
		<TD>
			<P align=center>
				<input type="Radio" name="srok" value="Печать, отрисованная в кривых (фотополимер) в течении дня" onClick="price1 = 300; count_price();" id="clishe12b"> 
				<label for="clishe12b">300 р</label>
			</P>
		</TD>
		<TD>
			<P align=center>
				<input type="Radio" name="srok" value="Печать, отрисованная в кривых (фотополимер) срочно за час" onClick="price1 = 300; count_price();" id="clishe12c"> 
				<label for="clishe12c">300 р</label>
			</P>
		</TD>
	</TR>
	<TR bgcolor="#ebeaef">
		<TD><strong>Печать, отрисованная в кривых</strong> (резина)</TD>
		<TD>
			<P align=center>
				<input type="Radio" name="srok" value="Печать, отрисованная в кривых (резина) за день" onClick="price1 = 500; count_price();" id="clishe11a"> 
				<label for="clishe11a">500 р</label>
			</P>
		</TD>
		<TD>
			<P align=center>
				<input type="Radio" name="srok" value="Печать, отрисованная в кривых (резина) срочно в течении дня" onClick="price1 = 500; count_price();" id="clishe11b"> 
				<label for="clishe11b">500 р</label>
			</P>
		</TD>
		<TD>
			<P align=center>
				<input type="Radio" name="srok" value="Печать, отрисованная в кривых (резина) срочно за час" onClick="price1 = 500; count_price();" id="clishe11c"> 
				<label for="clishe11c">500 р</label>
			</P>
		</TD>
	</TR>
	<TR bgcolor="#ebeaef">
		<TD><strong>Печать по ГОСТ</strong></TD>
		<TD colspan="3">
			<P align=center>
				<input type="Radio" name="srok" value="Печать по ГОСТ срочно за час" onClick="price1 = 2000; count_price();" id="clishe13a"> 
				<label for="clishe13a">2 000 р</label>
			</P>
		</TD>
	</TR>
	<TR bgcolor="#ebeaef">
		<TD><strong>Гербовая печать</strong></TD>
		<TD colspan="3">
			<P align=center>
				<input type="Radio" name="srok" value="Гербовая печать срочно " onClick="price1 = 3000; count_price();" id="clishe14a"> 
				<label for="clishe14a">3 000 р</label>
			</P>
		</TD>
	</TR>
	<TR bgcolor="#ebeaef">
		<TD><strong>Штампы новые малого размера</strong> *</TD>
		<TD colspan="3">
			<P align=center>
				<input type="Radio" name="srok" value="Штампы малого размера срочно" onClick="price1 = 200; count_price();" id="clishe15a"> 
				<label for="clishe15a">от 200 р</label>
			</P>
		</TD>
	</TR>
	<TR bgcolor="#ebeaef">
		<TD><strong>Штампы новые среднего размера</strong> *</TD>
		<TD colspan="3">
			<P align=center>
				<input type="Radio" name="srok" value="Штампы среднего размера срочно" onClick="price1 = 400; count_price();" id="clishe16a"> 
				<label for="clishe16a">от 400 р</label>
			</P>
		</TD>
	</TR>
	<TR bgcolor="#ebeaef">
		<TD><strong>Штампы новые большого размера</strong> *</TD>
		<TD colspan="3">
			<P align=center>
				<input type="Radio" name="srok" value="Штампы большого размера срочно" onClick="price1 = 650; count_price();" id="clishe17a"> 
				<label for="clishe17a">от 650 р</label>
			</P>
		</TD>
	</TR>
	<TR bgcolor="#ebeaef">
		<TD><strong>Штампы по оттиску</strong> *</TD>
		<TD colspan="3">
			<P align=center>
				<input type="Radio" name="srok" value="Штампы большого размера срочно" onClick="price1 = 450; count_price();" id="clishe17a"> 
				<label for="clishe17a">от 450 р</label>
			</P>
		</TD>
	</TR>
	<tr>
			<td colspan="3">
	<a name="uslugi"></a><p align="left">* - точную стоимость уточняйте у сотрудника, принимающего заказ на изготовление штампа</p>
			</td>
	</tr>
	
	<tr>
			<td colspan="3">
	<a name="uslugi"></a><p align="center"><strong>Дополнительные услуги</strong></p>
			</td>
	</tr>
	<tr bgcolor="#ebeaef" align="center">
		<td align="left">Отрисовка логотипа, графического изображения в Corel Draw</td>
		<td colspan="3">
			<script>
			var otrisovka=200;
			var priceotrisovka=0;
			</script>
			<P align=center><input type="checkbox" name="otrisov" value="Отрисовка логотипа, графического изображения"  onClick="countotrisovka(); count_price();" id="otrisovka1"> <label for="otrisovka1">200</label></P>
		</td>
	</tr>
	<tr bgcolor="#ebeaef" align="center">
		<td align="left">Простые элементы защиты: окантовка, микродефекты</td>
		<td colspan="3">
		<script>
			var zaschita=100;
			var pricezaschit=0;
			</script>
			<P align=center><input type="checkbox" name="zaschit" value="Отрисовка логотипа, графического изображения"  onClick="countzaschita()" id="zaschita1"> <label for="zaschit1">100</label></P>
		
		</td>
	</tr>
	<tr bgcolor="#ebeaef" align="center">
		<td align="left">Доставка в шаговой доступности от метро</td>
		<td colspan="3">
		<script>
			var dostavka=150;
			var pricedostav=0;
			</script>
			<P align=center><input type="checkbox" name="dostav" value="Отрисовка логотипа, графического изображения"  onClick="countdostavka(); count_price();" id="dostavka1"> <label for="dostav1">150</label></P>
		
		</td>
	</tr>
	<tr bgcolor="#ebeaef" align="center">
		<td align="left">Доставка до метро</td>
		<td colspan="3">
		<script>
			var dostavka=бесплатно;
			var pricedostav=0;
			</script>
			<P align=center><input type="checkbox" name="dostav" value="Отрисовка логотипа, графического изображения"  onClick="countdostavka(); count_price();" id="dostavka1"> <label for="dostav1">БЕСПЛАТНО</label></P>
		
		</td>
	</tr>
</TABLE></P>
<a name="ceny"></a><P align=justify>Все цены указаны в рублях (за изготовление клише печати) без учёта стоимости оснастки.
</P>
<UL>
<LI>
<P align=justify>При единовременном заказе 3-4 печатей доставка осуществляется по Москве бесплатно в приоритетном порядке;</P></li>
<LI>
<P align=justify>При единовременном заказе 5 печатей и более действуют дополнительные скидки от 15 процентов (не нашёл кнопки проценты) и выше с бесплатной доставкой по Москве в приоритетном порядке;</li>
<LI>
<P align=justify>БЕСПЛАТНОЕ изготовление печати при условии открытия счёта в Банке "Открытие". Подробности узнавайте у наших менеджеров.</P></li>
<!--<LI>
<P align=justify>По желанию заказчика мы можем разместить на печати ПРОСТЫЕ элементы защиты: оригинальные шрифты, отсутствующие элементы в буквах, изображениях или звёздочках, имитация заплыва краски, кляксы, имитация дефекта клише.</P></LI>-->
</UL>
<p style="font-size: 18px; margin-bottom: 30px;"><a name="snoska" style="font-size: 18px;">Примечания:</a></p>
<p>Так как стандартов к изготовлению штампов не существует, и они изготавливаются "индивидуально", то, желательно, перед заказом штампа связаться с нашим сотрудниками, чтобы обсудить детали заказа</p>