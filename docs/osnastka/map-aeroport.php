<?
include("functions.php");

$title = "����� �������: ��������";
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
			<p>�. ��������. ������ ������� ������ <br>
				���.: +7 (495) 961-4-961<br />
				������������� ��������, �. 37 �.6<br />
				�����: <a href="mailto:zakaz@pechati.ru">zakaz@pechati.ru</a></p>
			<!-- ���� ���� ���� ����� �������� � �� ����� ��������, ��� �� ������ ���������� �����  (������) -->
			<script src="http://api-maps.yandex.ru/1.1/?key=AOW1gU0BAAAAKnLDCwIANinc8VScs6pozsmz1R1ZkaAe_UcAAAAAAAAAAADqON43JGEDW6a-tK4w9nV4B7PSiQ==&modules=pmap&wizard=constructor" type="text/javascript"></script>
			<script type="text/javascript">
				YMaps.jQuery(window).load(function () {
					var map = new YMaps.Map(YMaps.jQuery("#YMapsID-191")[0]);
					map.setCenter(new YMaps.GeoPoint(37.545365,55.794835), 14, YMaps.MapType.MAP);
					map.addControl(new YMaps.Zoom());
					map.addControl(new YMaps.ToolBar());
					YMaps.MapType.PMAP.getName = function () { return "��������"; };
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
			
				   map.addOverlay(createObject("Placemark", new YMaps.GeoPoint(37.543048,55.793397), "constructor#pmdbmPlacemark", "�. ��������. ������ ������� ������ <br/>���.: +7 (495) 961-4-961<br/>������������� ��������, �. 37 �.6"));
					
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
			
			<div id="YMapsID-191" style="width:600px;height:450px"></div>
			<div style="width:600px;text-align:right;font-family:Arial"><a href="http://api.yandex.ru/maps/tools/constructor/" style="color:#1A3DC1">������� � ������� ������������ ������.����</a></div>
			<!-- ���� ���� ���� ����� �������� � �� ����� ��������, ��� �� ������ ���������� ����� (�����) -->
		</div>
	</div>
	
	<div id="footer">
		<? page_footer(); ?>
	</div>
	
</div>
</body>
</html>