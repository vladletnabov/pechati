<p style="margin-bottom:-10px;"><a name="zakaz" title="�������� ������"> </a></p>
<a name="pechati"></a><P align="center" style="font-size: 22pt;margin-bottom:-10px;color:#0f0f47"><B>�������� ������ � ���� ����� ��� �����!!!</B><br></P>
<p align="center" style="color:#92000a; margin-top:10px; margin-bottom:20px;font-size: 18pt;;text-align:center;">�������� 3 (���) ������� ���� � ������ ��� ����!!!</p>
<p align="center" style="margin-top:-10px;; margin-bottom:10px;font-size: 18pt;text-align:center;">������������ �������, ������� � ��������� <br /><?php 
	if (isset($filialDataListCP1251[$curFilial]['dopMetro'])){
				echo $filialDataListCP1251[$curFilial]['predlog'] . ' '. $filialDataListCP1251[$curFilial]['padej'] . ', ' . $filialDataListCP1251[$curFilial]['dopMetroPredlog'] . ' ' . $filialDataListCP1251[$curFilial]['dopMetroPadej'];
			}
			else {echo $filialDataListCP1251[$curFilial]['predlog'] . ' ' . $filialDataListCP1251[$curFilial]['padej'];}
	
	//echo $filialDataListCP1251[$curFilial]['padej'];
	?></p>

<!--<span align="center" style="color:#92000a;margin-top:-20px;; margin-bottom:0px;font-size: 18pt;">������������ ������� � ������� � ��������� �� �������</span>-->
<script>
var price1 = 1050;
</script>
<p><a style="font-size: 20px; color: navy;">��� 1: �������� �����</a><br></p>
<TABLE border=0 cellSpacing=1 cellPadding=5 width="100%">
	<TR bgcolor="#ebeaef">
		<TD>
			<a name="klishe"></a><!--<P align=center><B>����� �� ������. </B></P>--></TD>
		<TD>
		<P align=center><B>��<br />���������<br />���� </B></P>	
		</TD>
		<TD>
			<P align=center><B>�������<br />(�� 4 �����)</B></P>
		</TD>
		<TD>
		<P align=center><B>������<br />(�� 2 �����)</B></P>
		</TD>
	</TR>
	<TR bgcolor="#ebeaef">
		<TD><strong>����� ������ </strong> (��� �������� ����� � ����� ���������)</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="����� ������, ������ �� ������� ������ �� ���" onClick="price1 = 0; count_price();" id="clishe1a"> <label for="clishe1a">���������</label></P>
		</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="����� ������, ������ �� ������� ������ � ������� ���" onClick="price1 = 0; count_price();" id="clishe1b"> <label for="clishe1b">���������</label></P>
		</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="����� ������, ������ �� ������� �� ����" checked onClick="price1 = 0; count_price();" id="clishe1c"> <label for="clishe1c">���������</label></P>
		</TD>
	</TR>
	<TR bgcolor="#ebeaef">
		<TD><strong>����� ������ </strong> (�����������)</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="����� ������, ������ �� ������� �� ����" onClick="price1 = 400; count_price();" id="clishe3a"> <label for="clishe3a">400 �</label></P>
		</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="����� ������, ������ �� ������� ������ � ������� ���" onClick="price1 = 550; count_price();" id="clishe3b"> <label for="clishe3b">550 �</label></P>
		</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="����� ������, ������ �� ������� ������ �� ���" onClick="price1 = 750; count_price();" id="clishe3c"> <label for="clishe3c">750 �</label></P>
		</TD>
	</TR>
		<TR bgcolor="#ebeaef">
		<TD><strong>����� ������ </strong> (������)</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="����� ������, ������ �� ������� �� ����" onClick="price1 = 600; count_price();" id="clishe2a"> <label for="clishe2a">600 �</label></P>
		</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="����� ������, ������ �� ������� ������ � ������� ���" onClick="price1 = 750; count_price();" id="clishe2b"> <label for="clishe2b">750 �</label></P>
		</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="����� ������, ������ �� ������� ������ �� ���" onClick="price1 = 950; count_price();" id="clishe2c"> <label for="clishe2c">950 �</label></P>
		</TD>
	</TR>
	<TR bgcolor="#ebeaef">
		<TD><strong>������ �� �������</strong> (�����������)</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="������ �� ������� (�����������) �� ����" onClick="price1 = 700; count_price();" id="clishe5a"> <label for="clishe5a">700 �</label></P>
		</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="������ �� ������� (�����������) ������ � ������� ���" onClick="price1 = 900; count_price();" id="clishe5b"> <label for="clishe5b">900 �</label></P>
		</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="������ �� ������� (�����������) ������ �� ���" onClick="price1 = 1150; count_price();" id="clishe5c"> <label for="clishe5c">1150 �</label></P>
		</TD>
	</TR>
	<TR bgcolor="#ebeaef">
		<TD><strong>������ �� �������</strong> (������)</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="������ �� ������� (������) �� ����" onClick="price1 = 900; count_price();" id="clishe4a"> <label for="clishe4a">900 �</label></P>
		</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="������ �� ������� (������) ������ � ������� ���" onClick="price1 = 1100; count_price();" id="clishe4b"> <label for="clishe4b">1100 �</label></P>
		</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="������ �� ������� (������) ������ �� ���" onClick="price1 = 1350; count_price();" id="clishe4c"> <label for="clishe4c">1350 �</label></P>
		</TD>
	</TR>
	<TR bgcolor="#ebeaef">
		<TD><strong>���������</strong> (�����������)</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="��������� �� ����" onClick="price1 = 550; count_price();" id="clishe7a"> 
			<label for="clishe7a">550 �</label></P>
		</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="��������� ������ � ������� ���" onClick="price1 = 650; count_price();" id="clishe7b"> 
			<label for="clishe7b">650 �</label></P>
		</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="��������� ������ �� ���" onClick="price1 = 800; count_price();" id="clishe7c"> 
			<label for="clishe7c">800 �</label></P>
		</TD>
	</TR>
	<TR bgcolor="#ebeaef">
		<TD><strong>���������</strong> (������)</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="��������� �� ����" onClick="price1 = 750; count_price();" id="clishe6a"> 
			<label for="clishe6a">750 �</label></P>
		</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="��������� ������ � ������� ���" onClick="price1 = 850; count_price();" id="clishe6b"> 
			<label for="clishe6b">850 �</label></P>
		</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="��������� ������ �� ���" onClick="price1 = 1000; count_price();" id="clishe6c"> 
			<label for="clishe6c">1000 �</label></P>
		</TD>
	</TR>
	<TR bgcolor="#ebeaef">
		<TD><strong>������� ������</strong> (������)</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="������� ������ (������) �� ����" onClick="price1 = 600; count_price();" id="clishe8a"> 
			<label for="clishe8a">600 �</label></P>
		</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="������� ������ (������) ������ � ������� ���" onClick="price1 = 750; count_price();" id="clishe8b"> 
			<label for="clishe8b">750 �</label></P>
		</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="������� ������ (������) ������ �� ���" onClick="price1 = 950; count_price();" id="clishe8c"> 
			<label for="clishe8c">950 �</label></P>
		</TD>
	</TR>
	<TR bgcolor="#ebeaef">
		<TD><strong>���� ������</strong> (�����)</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="���� ������ (�����) �� ����" onClick="price1 = 900; count_price();" id="clishe9a"> 
			<label for="clishe9a">900 �</label></P>
		</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="���� ������ (�����) ������ � ������� ���" onClick="price1 = 1050; count_price();" id="clishe9b"> 
			<label for="clishe9b">1050 �</label></P>
		</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="���� ������ (�����) ������ �� ���" onClick="price1 = 1200; count_price();" id="clishe9c"> 
			<label for="clishe9c">1200 �</label></P>
		</TD>
	</TR>
	<TR bgcolor="#ebeaef">
		<TD><strong>���� ������</strong> (�� �������)</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="���� ������ (�� �������) �� ����" onClick="price1 = 1200; count_price();" id="clishe10a"> 
			<label for="clishe10a">1200 �</label></P>
		</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="���� ������ (�� �������) ������ � ������� ���" onClick="price1 = 1350; count_price();" id="clishe10b"> 
			<label for="clishe10b">1350 �</label></P>
		</TD>
		<TD>
			<P align=center><input type="Radio" name="srok" value="���� ������ (�� �������) ������ �� ���" onClick="price1 = 1500; count_price();" id="clishe10c"> 
			<label for="clishe10c">1500 �</label></P>
		</TD>
	</TR>
	<TR bgcolor="#ebeaef">
		<TD><strong>������, ������������ � ������</strong> (�����������)</TD>
		<TD>
			<P align=center>
				<input type="Radio" name="srok" value="������, ������������ � ������ (�����������) �� ����" onClick="price1 = 300; count_price();" id="clishe12a"> 
				<label for="clishe12a">300 �</label>
			</P>
		</TD>
		<TD>
			<P align=center>
				<input type="Radio" name="srok" value="������, ������������ � ������ (�����������) � ������� ���" onClick="price1 = 300; count_price();" id="clishe12b"> 
				<label for="clishe12b">300 �</label>
			</P>
		</TD>
		<TD>
			<P align=center>
				<input type="Radio" name="srok" value="������, ������������ � ������ (�����������) ������ �� ���" onClick="price1 = 300; count_price();" id="clishe12c"> 
				<label for="clishe12c">300 �</label>
			</P>
		</TD>
	</TR>
	<TR bgcolor="#ebeaef">
		<TD><strong>������, ������������ � ������</strong> (������)</TD>
		<TD>
			<P align=center>
				<input type="Radio" name="srok" value="������, ������������ � ������ (������) �� ����" onClick="price1 = 500; count_price();" id="clishe11a"> 
				<label for="clishe11a">500 �</label>
			</P>
		</TD>
		<TD>
			<P align=center>
				<input type="Radio" name="srok" value="������, ������������ � ������ (������) ������ � ������� ���" onClick="price1 = 500; count_price();" id="clishe11b"> 
				<label for="clishe11b">500 �</label>
			</P>
		</TD>
		<TD>
			<P align=center>
				<input type="Radio" name="srok" value="������, ������������ � ������ (������) ������ �� ���" onClick="price1 = 500; count_price();" id="clishe11c"> 
				<label for="clishe11c">500 �</label>
			</P>
		</TD>
	</TR>
	<TR bgcolor="#ebeaef">
		<TD><strong>������ �� ����</strong></TD>
		<TD colspan="3">
			<P align=center>
				<input type="Radio" name="srok" value="������ �� ���� ������ �� ���" onClick="price1 = 2000; count_price();" id="clishe13a"> 
				<label for="clishe13a">2 000 �</label>
			</P>
		</TD>
	</TR>
	<TR bgcolor="#ebeaef">
		<TD><strong>�������� ������</strong></TD>
		<TD colspan="3">
			<P align=center>
				<input type="Radio" name="srok" value="�������� ������ ������ " onClick="price1 = 3000; count_price();" id="clishe14a"> 
				<label for="clishe14a">3 000 �</label>
			</P>
		</TD>
	</TR>
	<TR bgcolor="#ebeaef">
		<TD><strong>������ ����� ������ �������</strong> *</TD>
		<TD colspan="3">
			<P align=center>
				<input type="Radio" name="srok" value="������ ������ ������� ������" onClick="price1 = 200; count_price();" id="clishe15a"> 
				<label for="clishe15a">�� 200 �</label>
			</P>
		</TD>
	</TR>
	<TR bgcolor="#ebeaef">
		<TD><strong>������ ����� �������� �������</strong> *</TD>
		<TD colspan="3">
			<P align=center>
				<input type="Radio" name="srok" value="������ �������� ������� ������" onClick="price1 = 400; count_price();" id="clishe16a"> 
				<label for="clishe16a">�� 400 �</label>
			</P>
		</TD>
	</TR>
	<TR bgcolor="#ebeaef">
		<TD><strong>������ ����� �������� �������</strong> *</TD>
		<TD colspan="3">
			<P align=center>
				<input type="Radio" name="srok" value="������ �������� ������� ������" onClick="price1 = 650; count_price();" id="clishe17a"> 
				<label for="clishe17a">�� 650 �</label>
			</P>
		</TD>
	</TR>
	<TR bgcolor="#ebeaef">
		<TD><strong>������ �� �������</strong> *</TD>
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
		<td align="left">��������� ��������, ������������ ����������� � Corel Draw</td>
		<td colspan="3">
			<script>
			var otrisovka=200;
			var priceotrisovka=0;
			</script>
			<P align=center><input type="checkbox" name="otrisov" value="��������� ��������, ������������ �����������"  onClick="countotrisovka(); count_price();" id="otrisovka1"> <label for="otrisovka1">200</label></P>
		</td>
	</tr>
	<tr bgcolor="#ebeaef" align="center">
		<td align="left">������� �������� ������: ���������, ������������</td>
		<td colspan="3">
		<script>
			var zaschita=100;
			var pricezaschit=0;
			</script>
			<P align=center><input type="checkbox" name="zaschit" value="��������� ��������, ������������ �����������"  onClick="countzaschita()" id="zaschita1"> <label for="zaschit1">100</label></P>
		
		</td>
	</tr>
	<tr bgcolor="#ebeaef" align="center">
		<td align="left">�������� � ������� ����������� �� �����</td>
		<td colspan="3">
		<script>
			var dostavka=150;
			var pricedostav=0;
			</script>
			<P align=center><input type="checkbox" name="dostav" value="��������� ��������, ������������ �����������"  onClick="countdostavka(); count_price();" id="dostavka1"> <label for="dostav1">150</label></P>
		
		</td>
	</tr>
	<tr bgcolor="#ebeaef" align="center">
		<td align="left">�������� �� �����</td>
		<td colspan="3">
		<script>
			var dostavka=���������;
			var pricedostav=0;
			</script>
			<P align=center><input type="checkbox" name="dostav" value="��������� ��������, ������������ �����������"  onClick="countdostavka(); count_price();" id="dostavka1"> <label for="dostav1">���������</label></P>
		
		</td>
	</tr>
</TABLE></P>
<a name="ceny"></a><P align=justify>��� ���� ������� � ������ (�� ������������ ����� ������) ��� ����� ��������� ��������.
</P>
<UL>
<LI>
<P align=justify>��� �������������� ������ 3-4 ������� �������� �������������� �� ������ ��������� � ������������ �������;</P></li>
<LI>
<P align=justify>��� �������������� ������ 5 ������� � ����� ��������� �������������� ������ �� 15 ��������� (�� ����� ������ ��������) � ���� � ���������� ��������� �� ������ � ������������ �������;</li>
<LI>
<P align=justify>���������� ������������ ������ ��� ������� �������� ����� � ����� "��������". ����������� ��������� � ����� ����������.</P></li>
<!--<LI>
<P align=justify>�� ������� ��������� �� ����� ���������� �� ������ ������� �������� ������: ������������ ������, ������������� �������� � ������, ������������ ��� ���������, �������� ������� ������, ������, �������� ������� �����.</P></LI>-->
</UL>
<p style="font-size: 18px; margin-bottom: 30px;"><a name="snoska" style="font-size: 18px;">����������:</a></p>
<p>��� ��� ���������� � ������������ ������� �� ����������, � ��� ��������������� "�������������", ��, ����������, ����� ������� ������ ��������� � ����� ������������, ����� �������� ������ ������</p>