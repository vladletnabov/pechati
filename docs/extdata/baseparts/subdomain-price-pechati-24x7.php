
<p><a style="font-size: 20px; color: navy;">��� 1: �������� �����</a><br></p>
<script>
var price1 = 550;

			function uncheckCheckbox(idElement){
				document.getElementById(idElement).checked = false;
			}
</script>
<style>
.old-price{
	text-decoration:line-through;
	font-size: 11px;
	color:red;
}
.new-price{
	text-decoration:none;
	font-size: 14px;
	color:#333;
	font-weight: bold;
}
</style>
<TABLE border=0 cellSpacing=1 cellPadding=5 width="100%">
<TR bgcolor="#ebeaef">
<TD>
<a name="klishe"></a><!--<P align=center><B>����� �� ������. </B></P>-->
</TD>
<TD>
<P align=center><B>1 ����</B></P></TD>
<TD>
<P align=center><B>������</B></P></TD></TR>
<TR bgcolor="#ebeaef">
<TD><strong>�����</strong> ������ ��� ������</TD>
<TD>
<P align=center><input type="Radio" name="srok" value="����� ������, ������ �� ������� �� 1 ����" checked onClick="price1 = 380; count_price();" id="srok3"> <label for="srok3"><span class="old-price">400</span> <span class="new-price">320</span></label></P></TD>
<TD>
<P align=center><input type="Radio" name="srok" value="����� ������, ������ �� ������� ������" onClick="price1 = 600; count_price();" id="srok4"> <label for="srok4"><span class="old-price">750</span> <span class="new-price">600</span></label></P></TD></TR>
<TR bgcolor="#ebeaef">
<TD>������, ������, ��������� <strong>�� �������</strong></TD>
<TD>
<P align=center><input type="Radio" name="srok" value="������, ����� �� ������� �� 1 ����" onClick="price1 = 560; count_price();" id="srok1"> <label for="srok1"><span class="old-price">700</span> <span class="new-price">560</span></label></P></TD>
<TD>
<P align=center><input type="Radio" name="srok" value="������, ����� �� ������� ������" onClick="price1 = 920; count_price();" id="srok2"> <label for="srok2"><span class="old-price">1150</span> <span class="new-price">920</span></label></P></TD></TR>
</TR>
<TR bgcolor="#ebeaef">
<TD>������, ������������ � Corel Draw ���������� ��� ��������. �� 20 ��. ��</TD>
<TD>
<P align=center><input type="Radio" name="srok" value="������, ������������ � Corel Draw ���������� ��� �������� �� 1 ����" onClick="price1 = 240; count_price();" id="srok7"> <label for="srok7"><span class="old-price">300</span> <span class="new-price">240</span></label></P></TD>
<TD>
<P align=center><input type="Radio" name="srok" value="������, ������������ � Corel Draw ���������� ��� �������� ������" onClick="price1 = 320; count_price();" id="srok8"> <label for="srok8"><span class="old-price">400</span> <span class="new-price">320</span></label></P></TD></TR>
<TR bgcolor="#ebeaef">
		<TD>������ ����� <strong>������</strong> ������� *</TD>
		<TD colspan="3">
			<P align=center>
				<input type="Radio" name="srok" value="������ ������ ������� ������" onClick="price1 = 200; count_price();" id="clishe15a"> 
				<label for="clishe15a">�� 200 �</label>
			</P>
		</TD>
	</TR>
	<TR bgcolor="#ebeaef">
		<TD>������ ����� <strong>��������</strong> ������� *</TD>
		<TD colspan="3">
			<P align=center>
				<input type="Radio" name="srok" value="������ �������� ������� ������" onClick="price1 = 400; count_price();" id="clishe16a"> 
				<label for="clishe16a">�� 400 �</label>
			</P>
		</TD>
	</TR>
	<TR bgcolor="#ebeaef">
		<TD>������ ����� <strong>��������</strong> ������� *</TD>
		<TD colspan="3">
			<P align=center>
				<input type="Radio" name="srok" value="������ �������� ������� ������" onClick="price1 = 650; count_price();" id="clishe17a"> 
				<label for="clishe17a">�� 650 �</label>
			</P>
		</TD>
	</TR>
	<TR bgcolor="#ebeaef">
		<TD>������ <strong>�� �������</strong> *</TD>
		<TD colspan="3">
			<P align=center>
				<input type="Radio" name="srok" value="������ �������� ������� ������" onClick="price1 = 450; count_price();" id="clishe17a"> 
				<label for="clishe17a">�� 450 �</label>
			</P>
		</TD>
	</TR>
	<tr>
			<td colspan="3">
	<a name="uslugi"></a><p align="left">* - ������ ��������� ��������� � ����������, ������������ ����� �� ������������ ������</p>
			</td>
	</tr>
<tr>
			<td colspan="3">
	<a name="uslugi"></a><p align="center"><strong>�������������� ������</strong></p>
			</td>
	</tr>
	<tr bgcolor="#ebeaef" align="center">
		<td align="left">������������ ����� �� ������, ������������� � ����� ��������� �����
		
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
					//alert("����� ����� ����������� �� ���� ������������");
					
				}
				/*if ((document.getElementById("clisherez1").checked)&&(!document.getElementById("clisherez2").checked)){
					priceclisherez = 0;
					alert("����� ����� ����������� �� ���� ������������");
				}*/
			}
			</script>
		</td>
		<td>
			<P align=center><input type="checkbox" name="clisherez" value="������������ ����� �� ������"  onClick="uncheckCheckbox('clisherez2'); countclisherez(); count_price();" id="clisherez1"> <label for="clisherez1">250</label></P>
		</td>
		<td >
			<P align=center><input type="checkbox" name="clisherezsrochno" value="������������ ����� �� ������ ������"  onClick="uncheckCheckbox('clisherez1'); countclisherez(); count_price();" id="clisherez2"> <label for="clisherez2">450</label></P>
		</td>
	</tr>
	<tr bgcolor="#ebeaef" align="center">
		<td align="left">��������� ��������, ������������ ����������� � Corel Draw
		
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
					alert("��� ���������");
				}
			}
			</script>
		
		</td>
		<td>
			<P align=center><input type="checkbox" name="otrisov" value="��������� ��������, ������������ �����������"  onClick="uncheckCheckbox('otrisovka2'); countotrisovka(); count_price();" id="otrisovka1"> <label for="otrisovka1">�� 350</label></P>
		</td>
		<td>
			<P align=center><input type="checkbox" name="otrisov" value="��������� ��������, ������������ ����������� ������" onClick="uncheckCheckbox('otrisovka1'); countotrisovka(); count_price();" id="otrisovka2"><label for="otrisovka2">�� 700</label></P>
		</td>
	</tr>
	<!--<tr bgcolor="#ebeaef" align="center">
		<td align="left">��������</td>
		<td colspan="3">
		<script>
			var dostavka=300;
			var pricedostav=0;
			</script>
			<P align=center><input type="checkbox" name="dostav" value="��������� ��������, ������������ �����������"  onClick="countdostavka(); count_price();" id="dostavka1"> <label for="dostav1">300</label></P>
		
		</td>
	</tr>-->
</TABLE></P>
<!--<UL>
<LI>
<P align=justify>���������� ������������ ������ ��� ������� �������� ����� � ����� "��������". ����������� ��������� � ����� ����������.</P></li>
</UL>-->