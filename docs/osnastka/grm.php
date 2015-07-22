<?
include("functions.php");

$title = "GRM";
$description = "";
$keywords = "";
$price_url = "/osnastka/data/home/GRM_2010.xls";

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
			) ); ?>
		</div>
	</div>
	
	<div id="footer">
		<? page_footer2(); ?>
	</div>
	
</div>
</body>
</html>