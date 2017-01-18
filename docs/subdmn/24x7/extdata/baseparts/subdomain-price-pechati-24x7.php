
<p><a style="font-size: 20px; color: navy;">Шаг 1: Выберите клише</a><br></p>
<script>
var price1 = 550;

			function uncheckCheckbox(idElement){
				document.getElementById(idElement).checked = false;
			}
</script>
<TABLE border=0 cellSpacing=1 cellPadding=5 width="100%">
<TR bgcolor="#ebeaef">
<TD>
<a name="klishe"></a>
</TD>
<TD>
<P align=center><B>1 день</B></P></TD>
<TD>
<P align=center><B>Срочно</B></P></TD></TR>
<TR bgcolor="#ebeaef">
<TD><strong>НОВЫЕ</strong> печати или штампы</TD>
<TD>
<P align=center><input type="Radio" name="srok" value="Новые печати, штампы по шаблону за 1 день" checked onClick="price1 = 400; count_price();" id="srok3"> <label for="srok3">400</label></P></TD>
<TD>
<P align=center><input type="Radio" name="srok" value="Новые печати, штампы по шаблону срочно" onClick="price1 = 750; count_price();" id="srok4"> <label for="srok4">750</label></P></TD></TR>
<TR bgcolor="#ebeaef">
<TD>Печати, штампы, факсимиле <strong>по ОТТИСКУ</strong></TD>
<TD>
<P align=center><input type="Radio" name="srok" value="Печать, штамп по оттиску за 1 день" onClick="price1 = 700; count_price();" id="srok1"> <label for="srok1">700</label></P></TD>
<TD>
<P align=center><input type="Radio" name="srok" value="Печать, штамп по оттиску срочно" onClick="price1 = 1150; count_price();" id="srok2"> <label for="srok2">1150</label></P></TD></TR>
</TR>
<TR bgcolor="#ebeaef">
<TD>Печать, отрисованная в Corel Draw заказчиком или дубликат. До 20 кв. см</TD>
<TD>
<P align=center><input type="Radio" name="srok" value="Печать, отрисованная в Corel Draw заказчиком или дубликат за 1 день" onClick="price1 = 300; count_price();" id="srok7"> <label for="srok7">300</label></P></TD>
<TD>
<P align=center><input type="Radio" name="srok" value="Печать, отрисованная в Corel Draw заказчиком или дубликат срочно" onClick="price1 = 400; count_price();" id="srok8"> <label for="srok8">400</label></P></TD></TR>
<TR bgcolor="#ebeaef">
		<TD>Штампы новые <strong>малого</strong> размера *</TD>
		<TD colspan="3">
			<P align=center>
				<input type="Radio" name="srok" value="Штампы малого размера срочно" onClick="price1 = 200; count_price();" id="clishe15a"> 
				<label for="clishe15a">от 200 р</label>
			</P>
		</TD>
	</TR>
	<TR bgcolor="#ebeaef">
		<TD>Штампы новые <strong>среднего</strong> размера *</TD>
		<TD colspan="3">
			<P align=center>
				<input type="Radio" name="srok" value="Штампы среднего размера срочно" onClick="price1 = 400; count_price();" id="clishe16a"> 
				<label for="clishe16a">от 400 р</label>
			</P>
		</TD>
	</TR>
	<TR bgcolor="#ebeaef">
		<TD>Штампы новые <strong>большого</strong> размера *</TD>
		<TD colspan="3">
			<P align=center>
				<input type="Radio" name="srok" value="Штампы большого размера срочно" onClick="price1 = 650; count_price();" id="clishe17a"> 
				<label for="clishe17a">от 650 р</label>
			</P>
		</TD>
	</TR>
	<TR bgcolor="#ebeaef">
		<TD>Штампы <strong>по оттиску</strong> *</TD>
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
		<td align="left">Изготовление клише из резины, дополнительно к общей стоимости клише
		
			<script>
			var clisherez=250;
			var clisherezsrochno=450;
			var priceclisherez=0;
			function countclisherez() {
				if (document.getElementById("clisherez1").checked) {
					priceclisherez = clisherez;
				}
				if(document.getElementById("clisherez2").checked){					
					priceclisherez = clisherezsrochno;
				}
				if((!document.getElementById("clisherez1").checked)&&(!document.getElementById("clisherez2").checked)){
					priceclisherez = 0;
					//alert("Клише будет изготовлено на базе фотополимера");
					
				}
				/*if ((document.getElementById("clisherez1").checked)&&(!document.getElementById("clisherez2").checked)){
					priceclisherez = 0;
					alert("Клише будет изготовлено на базе фотополимера");
				}*/
			}
			</script>
		</td>
		<td>
			<P align=center><input type="checkbox" name="clisherez" value="Изготовление клише из резины"  onClick="uncheckCheckbox('clisherez2'); countclisherez(); count_price();" id="clisherez1"> <label for="clisherez1">250</label></P>
		</td>
		<td >
			<P align=center><input type="checkbox" name="clisherezsrochno" value="Изготовление клише из резины срочно"  onClick="uncheckCheckbox('clisherez1'); countclisherez(); count_price();" id="clisherez2"> <label for="clisherez2">450</label></P>
		</td>
	</tr>
	<tr bgcolor="#ebeaef" align="center">
		<td align="left">Отрисовка логотипа, графического изображения в Corel Draw
		
			<script>
			var otrisovka=350;
			var otrisovkasrochno=700;
			var priceotrisovka=0;
			function countotrisovka() {
				if (document.getElementById("otrisovka1").checked) {
					priceotrisovka = otrisovka;
				}
				if(document.getElementById("otrisovka2").checked){					
					priceotrisovka = otrisovkasrochno;
				}
				if((!document.getElementById("otrisovka1").checked)&&(!document.getElementById("otrisovka2").checked)){
					priceotrisovka = 0;
					alert("Без отрисовки");
				}
			}
			</script>
		
		</td>
		<td>
			<P align=center><input type="checkbox" name="otrisov" value="Отрисовка логотипа, графического изображения"  onClick="uncheckCheckbox('otrisovka2'); countotrisovka(); count_price();" id="otrisovka1"> <label for="otrisovka1">от 350</label></P>
		</td>
		<td>
			<P align=center><input type="checkbox" name="otrisov" value="Отрисовка логотипа, графического изображения срочно" onClick="uncheckCheckbox('otrisovka1'); countotrisovka(); count_price();" id="otrisovka2"><label for="otrisovka2">от 700</label></P>
		</td>
	</tr>
	<!--<tr bgcolor="#ebeaef" align="center">
		<td align="left">Доставка</td>
		<td colspan="3">
		<script>
			var dostavka=300;
			var pricedostav=0;
			</script>
			<P align=center><input type="checkbox" name="dostav" value="Отрисовка логотипа, графического изображения"  onClick="countdostavka(); count_price();" id="dostavka1"> <label for="dostav1">300</label></P>
		
		</td>
	</tr>-->
</TABLE></P>
<!--<UL>
<LI>
<P align=justify>БЕСПЛАТНОЕ изготовление печати при условии открытия счёта в Банке "Открытие". Подробности узнавайте у наших менеджеров.</P></li>
</UL>-->