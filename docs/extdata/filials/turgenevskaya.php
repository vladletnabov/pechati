<div id="contacts1">
<p>	<?php echo $curFilial ?><br />
 <?php echo $filialDataListCP1251[$curFilial]['addrCity'], ", ", $filialDataListCP1251[$curFilial]['addrStreet'], " ", $filialDataListCP1251[$curFilial]['addrHouse'], ", ", $filialDataListCP1251[$curFilial]['addrOffice']; ?></p>
	<p>���.: <b><?php echo $filialDataListCP1251[$curFilial]['phone'] ?></b></p>
	<p>�����: <a href="<?php echo $filialDataListCP1251[$curFilial]['email'] ?>"><?php echo $filialDataListCP1251[$curFilial]['email'] ?></a></p>
	<p>���� ������: <br/>
	<? echo str_replace(",","<br />",$filialDataListCP1251[$curFilial]['rejim'])?>
	
	</p>
	<p>
	��������� ���������� ������� (� �������� ����� � ��������) ������� ������������� �� ��������.
	</p>
	
	
	<!-- Insert to your webpage where you want to display the slider -->
	
    <script src="/extdata/slider/js/jquery.js"></script>
    <script src="/extdata/slider/js/amazingslider.js"></script>
    <link rel="stylesheet" type="text/css" href="/extdata/slider/js/amazingslider-63.css">
    <script src="/extdata/slider/js/initslider-63.js"></script>
	
	
    <div id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:600px;padding-left:0px; padding-right:244px;margin:0px auto 0px;">
        <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
            <ul class="amazingslider-slides" style="display:none;">			
                <li><img src="/pics/contacts/turgenevskaya/1.jpg" alt="1. ������.��  <?php echo $filialDataListCP1251[$curFilial]['predlog']?> <?php echo $filialDataListCP1251[$curFilial]['padej']?>"  title="1. ������.��  <?php echo $filialDataListCP1251[$curFilial]['predlog']?> <?php echo $filialDataListCP1251[$curFilial]['padej']?>" data-description="��� ����" />
                </li>
                <li><img src="/pics/contacts/turgenevskaya/2.jpg" alt="2. ������.��  <?php echo $filialDataListCP1251[$curFilial]['predlog']?> <?php echo $filialDataListCP1251[$curFilial]['padej']?>"  title="2. ������.��  <?php echo $filialDataListCP1251[$curFilial]['predlog']?> <?php echo $filialDataListCP1251[$curFilial]['padej']?>" data-description="��� ����" />
                </li>
                <li><img src="/pics/contacts/turgenevskaya/3.jpg" width="600" alt="3. ������.��  <?php echo $filialDataListCP1251[$curFilial]['predlog']?> <?php echo $filialDataListCP1251[$curFilial]['padej']?>"  title="3. ������.��  <?php echo $filialDataListCP1251[$curFilial]['predlog']?> <?php echo $filialDataListCP1251[$curFilial]['padej']?>" data-description="������� ������ �����" />
                </li>
            </ul>
            <ul class="amazingslider-thumbnails" style="display:none;">
                <li><img src="/pics/contacts/turgenevskaya/1-tn.jpg" alt="1. ������.��  <?php echo $filialDataListCP1251[$curFilial]['predlog']?> <?php echo $filialDataListCP1251[$curFilial]['padej']?>" title="1. ������.��  <?php echo $filialDataListCP1251[$curFilial]['predlog']?> <?php echo $filialDataListCP1251[$curFilial]['padej']?>" /></li>
                <li><img src="/pics/contacts/turgenevskaya/2-tn.jpg" alt="2. ������.��  <?php echo $filialDataListCP1251[$curFilial]['predlog']?> <?php echo $filialDataListCP1251[$curFilial]['padej']?>" title="2. ������.��  <?php echo $filialDataListCP1251[$curFilial]['predlog']?> <?php echo $filialDataListCP1251[$curFilial]['padej']?>" /></li>
                <li><img src="/pics/contacts/turgenevskaya/3-tn.jpg" alt="3. ������.��  <?php echo $filialDataListCP1251[$curFilial]['predlog']?> <?php echo $filialDataListCP1251[$curFilial]['padej']?>" title="3. ������.��  <?php echo $filialDataListCP1251[$curFilial]['predlog']?> <?php echo $filialDataListCP1251[$curFilial]['padej']?>" /></li>
            </ul>
        <div class="amazingslider-engine"><a href="http://amazingslider.com" title="Responsive jQuery Image Slideshow">Responsive jQuery Image Slideshow</a></div>
        </div>
    </div>
<br><br>

<!--<style>
	.my-hint {
		width:244px;
		height:244px ;
		margin:0;
		padding:2px;
		background-color: #fff;
		border-radius:0;
		
	}
</style>-->


<div id="map" style="height:500px; width:945px;margin-left:-35px;"></div>
</div>