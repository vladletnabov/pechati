<?
function list_item($item, $needs_td = true) {
	$name = $item[0];
	$price = $item[1];
	/*$link = isset($item[2]) ? $item[2] : "";*/
	$image = isset($item[2]) ? $item[2] : "/osnastka/data/img/blank.gif";
	$currency = $price != "" ? (isset($item[3]) ? $item[3] : "���.") : "";
	?>
	<td class="list_cell">
		<div class="list_item">
			<div class="list_image">
				<span></span>
				<img src="<? echo $image; ?>" />
				<img class="plus_image" src="/osnastka/data/img/plus.png" />
			</div>
			<div class="list_name">
				<? echo $name; ?>
			</div>
			<div class="list_price">
				<strong><? echo $price; ?></strong> <? echo $currency; ?>
			</div>
		</div>
	</td><? if($needs_td){ ?><td><span></span></td><? } ?>
	<?
}; /* -- function list_item -- */

function list_full($items) {
	$columns = 3;
	$i = 0;
	?><table><tr>
	<td><span></span></td><?
	foreach($items as $item) {
		if($i == $columns) {
			$i = 0;
			?>
			</tr><tr>
			<td><span></span></td>
			<?
		}
		list_item($item, $i+1 <= $columns);
		$i++;
	}
	?></tr></table><?
}; /* -- function list_full -- */

function page_head($title = "", $description = "", $keywords = "") {
?>
<head>
	<title>
	����������� ���������<? echo $title ? " - " . $title : ""; ?>
	</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
	<meta http-equiv="Content-Language" content="ru">
	<meta http-equiv="keywords" content="">
	<meta http-equiv="description" content="">

	<meta name="keywords" content="<? echo $keywords; ?>">
	<meta name="description" content="<? echo $description; ?>">
	<meta name="Classification" content="">
	<meta name="robots" content="all">
	<meta name="Revizit-after" content="15 days">
	<meta name="RATING" content="General">
	<meta name="DISTRIBUTION" content="GLOBAL">
	<meta name="RESOURCE-TYPE" content="DOCUMENT">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="/osnastka/templates/print.css" type="text/css" media="print"> 
	<!--[if lt IE 8]>
	<link rel="stylesheet" href="/osnastka/templates/ie.css" type="text/css" media="screen, projection">
	<![endif]-->
	<link rel="stylesheet" href="/osnastka/templates/styles.css" type="text/css" media="screen">
	<link rel="stylesheet" href="/osnastka/templates/page.css" type="text/css" media="screen">
	<script type="text/javascript" src="/osnastka/templates/jquery.js"></script>
	<script type="text/javascript" src="/osnastka/templates/cornerz.js"></script>
	<script type="text/javascript" src="/osnastka/templates/js.js"></script>
	<!--[if lt IE 7]>
	<![if gte IE 5.5]>
	<script type="text/javascript" src="/osnastka/templates/iepngfix_tilebg.js"></script>
	<style type="text/css"> 
		img, div { behavior: url(/templates/iepngfix.htc) }
		#list table {
			width: 0px;
		}
	</style>
	<![endif]>
	<![endif]-->
</head>
<?
}; /* -- function page_head -- */

function page_header($title = "", $price_url = "") {
?>
<!--LiveInternet counter--><script type="text/javascript"><!--
new Image().src = "//counter.yadro.ru/hit?r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";h"+escape(document.title.substring(0,80))+
";"+Math.random();//--></script><!--/LiveInternet-->
	<div id="top_logos">
		<table><tr><td class="top_logo">
			<span></span>
			<a href="/osnastka/grm.php"><img src="/osnastka/data/img/brand_grm.png" /></a>
		</td><td><span></span></td><td class="top_logo">
			<span></span>
			<a href="/osnastka/shiny.php"><img src="/osnastka/data/img/brand_shiny.png" /></a>
<?/*		</td><td><span></span></td><td class="top_logo">
			<span></span>
			<a href="/osnastka/trodat.php"><img src="/osnastka/data/img/brand_trodat.png" /></a>*/?>
		</td><td><span></span></td><td class="top_logo">
			<span></span>
			<a href="/osnastka/colop.php"><img src="/osnastka/data/img/brand_colop.png" /></a>
		</td><td><span></span></td><td class="top_cat">
			<span></span>
			<a href="/osnastka/mater.php"><img src="/osnastka/data/img/cat_mater_small.png" /></a>
		</td><td><span></span></td><td class="top_cat">
			<span></span>
			<a href="/osnastka/hand.php"><img src="/osnastka/data/img/cat_hand_small.png" /></a>
		</td><td><span></span></td><td class="top_cat">
			<span></span>
			<a href="/osnastka/metal.php"><img src="/osnastka/data/img/cat_metal_small.png" /></a>
		</td><td><span></span></td><td class="top_cat">
			<span></span>
			<a href="/osnastka/paint.php"><img src="/osnastka/data/img/cat_paint_small.png" /></a>
		</td></tr></table>
	</div>
	<a href="/osnastka/order_terms.php"><img src="/osnastka/data/img/order_terms.png" id="order_terms"></a>
	<h1 id="cat_name"><?
		echo $title;
		if ($price_url != "") {
			echo " (<a href=\"{$price_url}\">������� �����-���� �� ���������</a>)";
		}
	?></h1>
<?
}; /* -- function page_header -- */

function page_specials() {
?>
	<div id="right_top">
	</div>
	<div id="right_mid">
		<div class="right_item_top">
		</div>
		<div class="right_item_mid">
			<div class="right_image">
				<span></span>
				<a href="/osnastka/hand.php"><img src="/osnastka/data/img/spec_1.png" /></a>
			</div>
			<div class="right_name">
				<a href="/osnastka/hand.php">��� ������� �������������� ��������</a><br />
				<strong>�� 8</strong> ���.
			</div>
		</div>
		<div class="right_item_bot">
		</div>
		<div class="right_item_top">
		</div>
		<div class="right_item_mid">
			<div class="right_image">
				<span></span>
				<a href="/osnastka/grm.php"><img src="/osnastka/data/img/spec_4.png" /></a>
			</div>
			<div class="right_name">
				<a href="/osnastka/grm.php">GRM Hummer R40</a><br />
				<strong>�� 95</strong> ���.
			</div>
		</div>
		<div class="right_item_bot">
		</div>
		<div class="right_item_top">
		</div>
		<div class="right_item_mid">
			<div class="right_image">
				<span></span>
				<a href="/osnastka/shiny.php"><img src="/osnastka/data/img/spec_2.png" /></a>
			</div>
			<div class="right_name">
				<a href="/osnastka/shiny.php">SHINY Printer R-542</a><br />
				<strong>�� 100</strong> ���.
			</div>
		</div>
		<div class="right_item_bot">
		</div>
		<div class="right_item_top">
		</div>
		<div class="right_item_mid">
			<div class="right_image">
				<span></span>
				<a href="/osnastka/colop.php"><img src="/osnastka/data/img/spec_3.png" /></a>
			</div>
			<div class="right_name">
				<a href="/osnastka/colop.php">�olop R40 Cover</a><br />
				<strong>�� 150</strong> ���.
			</div>
		</div>
		<div class="right_item_bot">
		</div>
	</div>
	<div id="right_bot">
	</div>
<?
}; /* -- function page_specials -- */

function page_footer2() {
?>
		<table><tr>
		<td class="address">
			�. ������ �������<br>
			���.: +7 (495) 979-88-73<br />
			��. ��������, �. 2<br />
			�����: <a href="mailto:vs@pechati.ru">vs@pechati.ru</a><br />
			<a href="/osnastka/map-vodniy.php">����� �������</a>
		</td>
<? /*		<td><span></span></td>
		<td class="address">
			�. ���������<br />
			���.: (495) 545-48-42<br />
			��. �����, �. 4 ��� 1-1�, ���� 48.<br />
			�����: <a href="mailto:5454842@mail.ru">5454842@mail.ru</a><br />
			<a href="/map-arbat.php">����� �������</a>
		</td> */ ?>
		<td><span></span></td>
		<td class="address">
			�.  ������������<br />
			���.: +7(926) 845-61-71<br />
			��. ������������ �.14<br />
			�����: <a href="mailto:perovo@pechati.ru">perovo@pechati.ru</a><br />
			<a href="/osnastka/map-taganka.php">����� �������</a>
		</td>
		<td><span></span></td>
		<td class="address">
			�.  ���������<br />
			���.: +7(495) 506-22-77<br />
			��. ������� ��������� �.1<br />
			�����: <a href="mailto:taganka@pechati.ru">taganka@pechati.ru</a><br />
			<a href="/osnastka/map-taganka.php">����� �������</a>
		</td>
		<td><span></span></td>
		<td class="address">
			�. ����������������<br />
			���.: +7 (495) 645-99-00<br />
			������� ���-� 5 ���. 2. ���-�� 110.<br />
			�����: <a href="mailto:pechaty60@yandex.ru">pechaty60@yandex.ru</a><br />
			<a href="/osnastka/map-elzav.php">����� �������</a>
		</td>
		<td><span></span></td>
		<td class="address">
			�. ����� ���������<br />
			���.: +7 (499) 724-50-02<br />
			��.���������� �21, ���.6<br>
			(���� � ����� ������).<br />
			�����: <a href="mailto:5002@pechati.ru">5002@pechati.ru</a>
		</td>
		<td><span></span></td>
		<td id="buttons">
			<!--LiveInternet logo--><a href="http://www.liveinternet.ru/click"
target="_blank"><img src="//counter.yadro.ru/logo?44.1"
title="LiveInternet"
alt="" border="0" width="31" height="31"/></a><!--/LiveInternet-->
			<img src="/osnastka/data/img/rambler.gif" />
		</td>
		</tr></table>
<?
}; /* -- function page_footer -- */

function page_footer() {
?>
		<table><tr>
		<td class="address">
			�. ���������<br>
			���.: +7 (495) 728-45-98<br />
			��������� �����, �.26, ���.3<br>���� �� �����<br />
			�����: <a href="mailto:chertanovo@pechati.ru">chertanovo@pechati.ru</a>
		</td>
		<td><span></span></td>
		<td class="address">
			�.  ���������<br />
			���.: +7(495) 506-22-77<br />
			��. ������� ��������� �.1<br />
			�����: <a href="mailto:taganka@pechati.ru">taganka@pechati.ru</a><br />
			<a href="/osnastka/map-taganka.php">����� �������</a>
		</td>
		<td><span></span></td>
		<td class="address">
			�. ����������������<br />
			���.: +7 (495) 645-99-00<br />
			������� ���-� 5 ���. 2. ���-�� 110.<br />
			�����: <a href="mailto:pechaty60@yandex.ru">pechaty60@yandex.ru</a><br />
			<a href="/osnastka/map-elzav.php">����� �������</a>
		</td>
		<td class="address">
			�. ����������<br />
			���.: +7 (916) 500-75-83<br />
			��. �������������, �. 54, ������ 3 "�� ���������".<br />
			�����: <a href="mailto:t5007583@yandex.ru">t5007583@yandex.ru</a><br />
			<a href="/osnastka/map-elzav.php">����� �������</a>
		</td>
		<td><span></span></td>
		<td class="address">
			�. ����� ���������<br />
			���.: +7 (499) 724-50-02<br />
			��.���������� �21, ���.6<br>
			(���� � ����� ������).<br />
			�����: <a href="mailto:5002@pechati.ru">5002@pechati.ru</a>
		</td>
		<td><span></span></td>
		<td id="buttons">
			<!--LiveInternet logo--><a href="http://www.liveinternet.ru/click"
target="_blank"><img src="//counter.yadro.ru/logo?44.1"
title="LiveInternet"
alt="" border="0" width="31" height="31"/></a><!--/LiveInternet-->
			<img src="/osnastka/data/img/rambler.gif" />
		</td>
		</tr></table>
<?
}; /* -- function page_footer2 -- */
?>
