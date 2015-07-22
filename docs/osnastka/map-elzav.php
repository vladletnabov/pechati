<?
include("functions.php");

$title = "Схема проезда: Электрозаводская";
$description = "";
$keywords = "";

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
<? page_head($title, $description, $keywords); ?>
<body id="layout_body">
<div class="container">
	<a href="/"><img src="/osnastka/data/img/logo.png" id="logo" /></a>

	<div id="header">
		<? page_header($title); ?>
	</div>
	
	<div id="center">
		<div id="right">
			<? page_specials() ?>
		</div>
		<div id="map">
			<p>м. Электрозаводская. Розница<br />
				Тел.: +7 (495) 645-99-00<br />
				Медовый пер-к 5 стр. 2. ком-та 110.<br />
				Почта: <a href="mailto:pechaty60@yandex.ru">pechaty60@yandex.ru</a></p>
			<!-- Этот блок кода нужно вставить в ту часть страницы, где вы хотите разместить карту  (начало) -->
			<script src="http://api-maps.yandex.ru/1.1/?key=AOW1gU0BAAAAKnLDCwIANinc8VScs6pozsmz1R1ZkaAe_UcAAAAAAAAAAADqON43JGEDW6a-tK4w9nV4B7PSiQ==&modules=pmap&wizard=constructor" type="text/javascript"></script>
			<script type="text/javascript">
				YMaps.jQuery(window).load(function () {
					var map = new YMaps.Map(YMaps.jQuery("#YMapsID-1143")[0]);
					map.setCenter(new YMaps.GeoPoint(37.707758,55.783117), 16, YMaps.MapType.MAP);
					map.addControl(new YMaps.Zoom());
					map.addControl(new YMaps.ToolBar());
					YMaps.MapType.PMAP.getName = function () { return "Народная"; };
					map.addControl(new YMaps.TypeControl([
						YMaps.MapType.MAP,
						YMaps.MapType.SATELLITE,
						YMaps.MapType.HYBRID,
						YMaps.MapType.PMAP
					], [0, 1, 2, 3]));
			
					YMaps.Styles.add("constructor#pmdbmPlacemark", {
						iconStyle : {
							href : "http://api-maps.yandex.ru/i/0.3/placemarks/pmdbm.png",
							size : new YMaps.Point(28,29),
							offset: new YMaps.Point(-8,-27)
						}
					});
			
				   map.addOverlay(createObject("Placemark", new YMaps.GeoPoint(37.709335,55.784278), "constructor#pmdbmPlacemark", "м. Электрозаводская. Розница<br/>Тел.: +7 (495) 645-99-00<br/>Медовый пер-к 5 стр. 2. ком-та 110"));
					
					function createObject (type, point, style, description) {
						var allowObjects = ["Placemark", "Polyline", "Polygon"],
							index = YMaps.jQuery.inArray( type, allowObjects),
							constructor = allowObjects[(index == -1) ? 0 : index];
							description = description || "";
						
						var object = new YMaps[constructor](point, {style: style, hasBalloon : !!description});
						object.description = description;
						
						return object;
					}
				});
			</script>
			
			<div id="YMapsID-1143" style="width:600px;height:450px"></div>
			<div style="width:600px;text-align:right;font-family:Arial"><a href="http://api.yandex.ru/maps/tools/constructor/" style="color:#1A3DC1">Создано с помощью инструментов Яндекс.Карт</a></div>
			<!-- Этот блок кода нужно вставить в ту часть страницы, где вы хотите разместить карту (конец) -->
		</div>
	</div>
	
	<div id="footer">
		<? page_footer(); ?>
	</div>
	
</div>
</body>
</html>