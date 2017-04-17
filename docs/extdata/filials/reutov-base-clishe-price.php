<a name="pechati"></a>
<P align="center" style="font-size: 16pt;"><br>
	<B>Изготовление печатей, штампов, факсимиле <br /><?php 
	if (isset($filialDataListCP1251[$curFilial]['dopMetro'])){
				echo $filialDataListCP1251[$curFilial]['predlog'] . ' '. $filialDataListCP1251[$curFilial]['padej'] . ', ' . $filialDataListCP1251[$curFilial]['dopMetroPredlog'] . ' ' . $filialDataListCP1251[$curFilial]['dopMetroPadej'];
			}
			else {echo $filialDataListCP1251[$curFilial]['predlog'] . ' ' . $filialDataListCP1251[$curFilial]['padej'];}
	
	//echo $filialDataListCP1251[$curFilial]['padej'];
	?>.<br>Восстановление печатей по оттиску.</B>
	<br>
	<span style="color:#db073e; font-weight: bold;">Закажите печать в три шага</span><br/>
	<span style="color:#db073e;">(Пункт выдачи заказов)</span>
</P>
<script>
var price1 = 650;
</script>
<?php 
$defPrice= 650;
$priceList = array(
	"Новая печать"=> array(
		'sroch'=>950,
		'normal'=>650,
	),
/*	"Новая печать на автоматической оснастке"=> array(
		'sroch'=>1350,
		'normal'=>1050,
	),*/
	"Печать по оттиску"=> array(
		'sroch'=>1500,
		'normal'=>950,
	),
/*	"Печать по оттиску на автоматической оснастке"=> array(
		'sroch'=>1900,
		'normal'=>1350,
	),*/
	"Факсимиле"=> array(
		'sroch'=>950,
		'normal'=>750,
	),
/*	"Факсимиле на автоматической оснастке"=> array(
		'sroch'=>1250,
		'normal'=>1050,
		'from'=> 'от ',
	),*/
	"Штамп по оттиску"	=> array(
		'sroch'=>500,
		'normal'=>250,
		'from'=> 'от ',
	),
/*	"Штамп по оттиску на автоматической оснастке??"=> array(
		'sroch'=>800,
		'normal'=>400,
		'from'=> 'от ',
	),*/
	"Флеш печать (новая)"=> array(
		'sroch'=>1300,
		'normal'=>1000,
	),
	"Флеш печать (по оттиску)"	=> array(
		'sroch'=>1600,
		'normal'=>1300,
	),
	"Печать, отрисованая в кривых"	=> array(
		'sroch'=>600,
		'normal'=>500,
	),
	"Печать по ГОСТ (Гербовая)"=> array(
		'sroch'=>6000,
		'normal'=>3000,
	),
	"Печать с защитой"=> array(
		'sroch'=>1980,
		'normal'=>1980,
		'from'=> 'от ',
	),
);

$dopServices = array(
	"Отрисовка логотипа, графического изображения в Corel Draw"=> array(
		'price' => 300,
		'from'=> 'от ',
	),
	"Доставка расходных материалов по Москве или до ТК"=> array(
		'price' => 500,
	),
	"Доставка"=> array(
		'price' => 300,
	),

);

?>

<!--<p><a style="font-size: 20px; color: navy;">Шаг 1: Выберите клише</a></p>-->
<p><a style="font-size: 20px; color: navy;" name="zakaz">Шаг 1: Выберите какая печать или её клише Вам необходимы</a><br></p>
<TABLE border=0 cellSpacing=1 cellPadding=5 width="100%">
<TR bgcolor="#ebeaef">
	<TD>
	<a name="klishe"></a><!--<P align=center><B>Клише из резины. </B></P>--></TD>
	<TD>
	<P align=center><B>Срочно<br />(в течении часа)</B></P></TD>
	<TD>
	<P align=center><B>На следующий день</B></P></TD>
</TR>

<?php
$id =0;
foreach ($priceList as $key => $value) {
	$id++;
	
	?>
	<TR bgcolor="#ebeaef">
		<TD><?php echo $key?></TD>
		<?php 
		if ($priceList[$key]['sroch']!=$priceList[$key]['normal']){
		?>
		<TD>
			<P align=center><input type="Radio" name="srok" value="<?php echo $key?> срочно" <?php
				if ($id<2) {
					echo " checked ";
					$defPrice = $priceList[$key]['sroch'];
				}
			?> onClick="price1 = <?php echo $priceList[$key]['sroch']?>; count_price();" id="srok<?php echo $id?>"> <label for="srok<?php echo $id?>"><?php 
			if (isset($priceList[$key]['from'])){
				echo $priceList[$key]['from'];
			}
			echo $priceList[$key]['sroch'];
			?>
			</label></P>
		</TD>
		<?php $id++;?>
		<TD>
			<P align=center><input type="Radio" name="srok" value="<?php echo $key?> за 1 день" onClick="price1 = <?php echo $priceList[$key]['normal']?>; count_price();" id="srok<?php echo $id?>"> <label for="srok<?php echo $id?>"><?php 
			if (isset($priceList[$key]['from'])){
				echo $priceList[$key]['from'];
			}
			echo $priceList[$key]['normal'];
			?>
			</label></P>
		</TD>
	<?php
		}
		else {
			?>
			<TD colspan="2">
				<P align=center><input type="Radio" name="srok" value="<?php echo $key?> за 1 день" onClick="price1 = <?php echo $priceList[$key]['normal']?>; count_price();" id="srok<?php echo $id?>"> <label for="srok<?php echo $id?>"><?php 
				if (isset($priceList[$key]['from'])){
					echo $priceList[$key]['from'];
				}
				echo $priceList[$key]['sroch'];
				?>
				</label></P>
			</TD>
			<?php
		}
	?>
	</TR>
<?php	
}
?>

<tr bgcolor="#ebeaef">
	<td colspan="3">Все  печати и штампы делаются только из резины	
	</td>
</tr>
<tr>
	<td colspan="3">* - точную стоимость уточняйте у сотрудника, принимающего заказ на изготовление штампа
	</td>
</tr>

<tr>
	<td colspan="3" align="center"><strong>Дополнительные сервисы</strong>
	</td>
</tr>

<?php
foreach ($dopServices as $key => $value) {
	


?>
<tr bgcolor="#ebeaef">
	<td><?php echo $key;?></td>
	<td colspan="2" align="center"><?php
		if(isset($dopServices[$key]['from'])){
			echo $dopServices[$key]['from'];
		}
		echo $dopServices[$key]['price'];
	?>
	</td>
</tr>
	
<?php
}
?>



</TABLE></P>
<script>
price1 = <?php echo $defPrice;?>;
</script>
<!--<UL>
<LI>
<P align=justify>БЕСПЛАТНОЕ изготовление печати при условии открытия счёта в Банке "Открытие". Подробности узнавайте у наших менеджеров.</P></li>
</UL>-->

<a name="ceny"></a><P align=justify>Все цены указаны в рублях РФ без стоимости оснастки. </P>
<UL>
<LI>
<P align=justify>Доставка по Москве при заказе печатей от 2000 руб. - <b>бесплатно</b>!<!--, от трёх единиц - <B>бесплатно!</B> --></P></li>
<LI>
<P align=justify><a style="font-size:18px;"><b>Примечания:</b></a><br/>

Так как стандартов к изготовлению штампов не существует, и они изготавливаются "индивидуально", то, желательно, перед заказом штампа связаться с нашим сотрудниками, чтобы обсудить детали заказа</P></LI></UL>