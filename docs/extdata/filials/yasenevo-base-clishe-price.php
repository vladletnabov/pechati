<a name="pechati"></a>
<P align="center" style="font-size: 16pt;"><br>
	<B>������������ �������, �������, ��������� <br /><?php 
	if (isset($filialDataListCP1251[$curFilial]['dopMetro'])){
				echo $filialDataListCP1251[$curFilial]['predlog'] . ' '. $filialDataListCP1251[$curFilial]['padej'] . ', ' . $filialDataListCP1251[$curFilial]['dopMetroPredlog'] . ' ' . $filialDataListCP1251[$curFilial]['dopMetroPadej'];
			}
			else {echo $filialDataListCP1251[$curFilial]['predlog'] . ' ' . $filialDataListCP1251[$curFilial]['padej'];}
	
	//echo $filialDataListCP1251[$curFilial]['padej'];
	?>.<br>�������������� ������� �� �������.</B>
	<br>
	<span style="color:#db073e; font-weight: bold;">�������� ������ � ��� ����</span><br/>
	<span style="color:#db073e;">(����� ������ �������)</span>
</P>
<script>
var price1 = 650;
</script>
<?php 
$defPrice= 650;
$priceList = array(
	"����� ������"=> array(
		'sroch'=>950,
		'normal'=>650,
	),
/*	"����� ������ �� �������������� ��������"=> array(
		'sroch'=>1350,
		'normal'=>1050,
	),*/
	"������ �� �������"=> array(
		'sroch'=>1500,
		'normal'=>950,
	),
/*	"������ �� ������� �� �������������� ��������"=> array(
		'sroch'=>1900,
		'normal'=>1350,
	),*/
	"���������"=> array(
		'sroch'=>950,
		'normal'=>750,
	),
/*	"��������� �� �������������� ��������"=> array(
		'sroch'=>1250,
		'normal'=>1050,
		'from'=> '�� ',
	),*/
	"����� �� �������"	=> array(
		'sroch'=>500,
		'normal'=>250,
		'from'=> '�� ',
	),
/*	"����� �� ������� �� �������������� ��������??"=> array(
		'sroch'=>800,
		'normal'=>400,
		'from'=> '�� ',
	),*/
	"���� ������ (�����)"=> array(
		'sroch'=>1300,
		'normal'=>1000,
	),
	"���� ������ (�� �������)"	=> array(
		'sroch'=>1600,
		'normal'=>1300,
	),
	"������, ����������� � ������"	=> array(
		'sroch'=>600,
		'normal'=>500,
	),
	"������ �� ���� (��������)"=> array(
		'sroch'=>6000,
		'normal'=>3000,
	),
	"������ � �������"=> array(
		'sroch'=>1980,
		'normal'=>1980,
		'from'=> '�� ',
	),
);

$dopServices = array(
	"��������� ��������, ������������ ����������� � Corel Draw"=> array(
		'price' => 300,
		'from'=> '�� ',
	),
	"�������� ��������� ���������� �� ������ ��� �� ��"=> array(
		'price' => 500,
	),
	"��������"=> array(
		'price' => 300,
	),

);

?>

<!--<p><a style="font-size: 20px; color: navy;">��� 1: �������� �����</a></p>-->
<p><a style="font-size: 20px; color: navy;" name="zakaz">��� 1: �������� ����� ������ ��� � ����� ��� ����������</a><br></p>
<TABLE border=0 cellSpacing=1 cellPadding=5 width="100%">
<TR bgcolor="#ebeaef">
	<TD>
	<a name="klishe"></a><!--<P align=center><B>����� �� ������. </B></P>--></TD>
	<TD>
	<P align=center><B>������<br />(� ������� ����)</B></P></TD>
	<TD>
	<P align=center><B>�� ��������� ����</B></P></TD>
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
			<P align=center><input type="Radio" name="srok" value="<?php echo $key?> ������" <?php
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
			<P align=center><input type="Radio" name="srok" value="<?php echo $key?> �� 1 ����" onClick="price1 = <?php echo $priceList[$key]['normal']?>; count_price();" id="srok<?php echo $id?>"> <label for="srok<?php echo $id?>"><?php 
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
				<P align=center><input type="Radio" name="srok" value="<?php echo $key?> �� 1 ����" onClick="price1 = <?php echo $priceList[$key]['normal']?>; count_price();" id="srok<?php echo $id?>"> <label for="srok<?php echo $id?>"><?php 
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
	<td colspan="3">���  ������ � ������ �������� ������ �� ������	
	</td>
</tr>
<tr>
	<td colspan="3">* - ������ ��������� ��������� � ����������, ������������ ����� �� ������������ ������
	</td>
</tr>

<tr>
	<td colspan="3" align="center"><strong>�������������� �������</strong>
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
<P align=justify>���������� ������������ ������ ��� ������� �������� ����� � ����� "��������". ����������� ��������� � ����� ����������.</P></li>
</UL>-->

<a name="ceny"></a><P align=justify>��� ���� ������� � ������ �� ��� ��������� ��������. </P>
<UL>
<LI>
<P align=justify>�������� �� ������ ��� ������ ������� �� 2000 ���. - <b>���������</b>!<!--, �� ��� ������ - <B>���������!</B> --></P></li>
<LI>
<P align=justify><a style="font-size:18px;"><b>����������:</b></a><br/>

��� ��� ���������� � ������������ ������� �� ����������, � ��� ��������������� "�������������", ��, ����������, ����� ������� ������ ��������� � ����� ������������, ����� �������� ������ ������</P></LI></UL>