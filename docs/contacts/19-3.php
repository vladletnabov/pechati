<html>
<head>
<?php require_once "../extdata/head.php"?>

</head>

<body>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49244128-1', 'auto');
  ga('send', 'pageview');

</script>

<!-- ������� ����������� ����-->
<?php require_once "../extdata/headmenu.php" ?>

<div style="height:45px;"><a name="contacts" title="��������"> ></a>
</div>


<div class="up-center">

	<div class="center-block">
		
		<!-- ���� �������� -->
		<?php require_once "../extdata/logo-begovaya.php" ?>
		<!-- ����� ����� -->
		
		<div id="middle">
		
			<?php require_once "../extdata/head-center-begovaya.php" ?>
			
			<?php require_once "../extdata/zakaz.php" ?>
			
			<!-- ��� � ��� ��������� -->
				<script>
			  $(function() {
				$( "#kak-dobratsya" ).accordion();
			  });
			  </script>
			<p style="margin-bottom:60px;"><a name="scheme" title="����� �������"> </a></p><p><a style="font-size: 26px;">��� � ��� ���������:</a><br /></p>
			<?php require_once "../extdata/pic-scheme-molodejnaya.php" ?>
			
			<div id="map" style="clear:both; margin-bottom:20px;"></div>
			
			<?php require_once "../extdata/text-scheme-begovaya.php" ?>
			
			
			<?php require_once "../extdata/ext-service-begovaya.php" ?>
			<!-- -->

			<!-- ����� �������� �����-->
			<?php require_once "../extdata/feedback-form.php" ?>
			<!-- ����� �����-->

		
		</div>
		
	<div id="right-col">
		<?php require_once "../extdata/filial-contacts-begovaya.php" ?>
		<br />
		<?php require_once "../extdata/quick-zakaz.php" ?>
	</div>
		
	</div>
</div>	
<div style="height: 30px;width:990px;margin:0 auto; background-color: white; background: url(/i/btm1-c-1.jpg) no-repeat; clear:both;">
</div>
<div style="width:990px;margin:0 auto; background: url(/i/btm2-c-1.jpg) no-repeat; padding-top: 40px; clear:both;">
	<div class="btm2 footer-premenu" style="">
						<p>������� ������������ ������� � ������� � ������ "������.ru" R ������ 2002�.<br><a href="http://pechati.ru/">������� ������������ ������� � �������</a></p>
	</div>
	<div class="footer-menu">
		<UL>
			<li><a href="/"><strong>�������</strong></a> </li>
			<li><a href="/contacts/"><strong>��������</strong></a></li>
		</UL>
	</div>
</div>

<?php require_once "../extdata/counter.php" ?>

</body>
</html>
