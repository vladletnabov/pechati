<script>
var price3 = 0;
</script>
			<!--<p><img src="../pics/str.gif" width="5" height="9" alt=""> <strong>���������� � ������</strong></p>-->
			<p><a style="font-size: 20px; color: navy;">��� 3: ��������� ����� � ��������� ���</a><br /> (� ���� ����� �������� ��� ��������� � ������� ������ ������)</p>
<table border="0" cellspacing="0" cellpadding="3" width="100%">
<tr bgcolor="#e0e0e0"><td><b>�������, ���</b></td><td><input type="text" class="text_forms" style="width: 300px; font-size: 14pt;" name="tel"></td></tr>
<tr bgcolor="#efefef"><td><b>E-mail</b></td><td><input type="text" class="text_forms" style="width: 300px; font-size: 14pt;" name="eml" id="eml"></td></tr>
<tr bgcolor="#e0e0e0"><td width="300"><b>����-��������</b><br><font size=-2>���� �� �������� ������ ���� �� ����� 2��</font></td><td width="650"><input type="file" class="text_forms" style="width: 300px;" name="pict"></td></tr>
<tr bgcolor="#efefef"><td valign="top"><b>�������������� ����������</b></td><td><textarea type="text" class="text_forms" style="width:300px; height:70px" name="text"></textarea></td></tr>
</table>
<p style="font-size: 14pt;"><strong>��������� ������ ������: <span style="color: #f00;" id="price"></span>&nbsp;���</strong></p>
<p align="center"><input type="Hidden" name="form" value="1"><input type="reset" value="�������� �����" style="width:30%" class="button" hidden>&nbsp;<input type="button" onclick="checkRequired()" value="�������� ������" style="width: 278px; height: 80px; background: #f90 url('/i/button.jpg') left top no-repeat; border: 0; color: #fff; font-size: 14pt;"></p>
<script language="JavaScript">
	function countotrisovka() {
		if(priceotrisovka==0){
			priceotrisovka=otrisovka;
		} else{
			priceotrisovka=0;
		}
	}
	function countzaschita() {
		if(pricezaschit==0){
			pricezaschit=zaschita;
		}
		else {
			pricezaschit=0;
		}
		count_price();
	}
	function countdostavka() {
		if(pricedostav==0){
			pricedostav=dostavka;
		} 
		else{
			pricedostav=0;
		}
	}
	function count_price()
	{
		if (!self.priceotrisovka) 
		{ 
			 priceotrisovka=0;
		} 
		if (!self.pricezaschit) 
		{ 
			 pricezaschit=0;
		} 
		if (!self.pricedostav) 
		{ 
			 pricedostav=0;
		} 
		document.getElementById('price').innerHTML = price1 + price2 + price3 + pricedostav + priceotrisovka + pricezaschit;
		return;
	}
	count_price();
</script>