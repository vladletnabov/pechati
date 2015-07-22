<?
include("functions.php");

$title = "Пластмассовая оснастка ОПТОМ";
$description = "";
$keywords = "";
$price_url = "";

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
<? page_head($title, $description, $keywords); ?>
<body id="layout_body">
<div class="container">
	<a href="/"><img src="/osnastka/data/img/logo.png" id="logo" /></a>

	<div id="header">
		<? page_header($title, $price_url); ?>
	</div>
	
	<div id="center">
		<div id="right">
			<? page_specials() ?>
		</div>
		<div id="list">
			<? list_full( array(
				array("Пластмассовая с гербом", "9", "/osnastka/data/img/items/osn_plastm_40.gif"),
				array("Пластмассовая большая", "16", "/osnastka/data/img/items/osn_plastm_9060.gif"),
				array("Пластмассовая треугольная", "16", "/osnastka/data/img/items/osn_plast_treug.gif"),
				array("Карманная", "15", "/osnastka/data/img/items/osn_karm_40.gif"),
				array("Пластмассовая малая", "9", "/osnastka/data/img/items/osn_plast_mal_1530.gif"),
				array("С гербом овал", "16", "/osnastka/data/img/items/gerb_pech_3560.gif"),
			) ); ?>
		</div>
	</div>
	
	<div id="footer">
		<? page_footer2(); ?>
	</div>
	
</div>
</body>
</html>