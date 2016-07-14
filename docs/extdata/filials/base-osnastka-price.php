
<script>
var price2 = 450;
</script>


<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <!--<script src="//code.jquery.com/jquery-1.10.2.js"></script>-->
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <!--<link rel="stylesheet" href="/resources/demos/style.css">-->
  <style>
  .toggler { width: 500px; height: 200px; }
  #button { padding: .5em 1em; text-decoration: none; }
  #effect { width: 240px; height: 135px; padding: 0.4em; position: relative; }
  #effect h3 { margin: 0; padding: 0.4em; text-align: center; }
  </style>
  <script>
  //$(function() {
    // run the currently selected effect
    function runEffect(id) {
      // get effect type from
	  //alert(id);
	  var idElement = "#osnastka"+id;
	  var idElementVisible = idElement+":visible";
      var selectedEffect = $( "#effectTypes" ).val();
 
      // most effect types need no options passed by default
      var options = {};
      // some effects have required parameters
      if ( selectedEffect === "scale" ) {
        options = { percent: 100 };
      } else if ( selectedEffect === "size" ) {
        options = { to: { width: 280, height: 185 } };
      }
		for (var i = 0; i < 9; i++) {
		   //$( idElementVisible ).removeAttr( "style" ).fadeOut();
		   var el = "#osnastka"+i;
		   $( el ).hide();
		}

      // run the effect
      $( idElement ).show( selectedEffect, options, 500, callback(idElementVisible) );
    };
 
    //callback function to bring a hidden box back
    function callback(idElementVisible) {
      //setTimeout(function() {
      //  $( idElementVisible ).removeAttr( "style" ).fadeOut();
      //}, 1000 );
    };
	function closeOsnastka(){
		for (var i = 0; i < 9; i++) {
		   //$( idElementVisible ).removeAttr( "style" ).fadeOut();
		   var el = "#osnastka"+i;
		   $( el ).hide();
		}
	}
  </script>



<style>
.oshastka-akkord{
	clear:both; width 100%; 
	display:none; 
	border:1px solid #efefef;
	box-shadow: 0 0 5px 2px #7f7f7f;
}
.osnatka-icon{
	/*width:24%; 
	margin:0;
	padding:0;
	display:inline;
	float:left;*/
	cursor: pointer;
}
.osnatka-icon:hover{
	box-shadow: 0 0 5px 2px #e0ccff;
}
</style>
<p><a style="font-size: 20px; color: navy;">Шаг 2: Выберите оснастку для вашей новой печати<br></p>
<table cellpadding="10" cellspacing="0" border="0" align="center">
	<tr valign="top" align="center">
		<td width="100%">
			<div style="clear:both; width:100%; margin:0;padding:0">
				<div class="osnatka-icon" style="width:24%; margin:0;padding:0;display:inline;float:left;">
					<IMG border=0 src="../pics/uslugi/colop_printer_r40_100x133.jpg" width=100 height=133 onclick="runEffect(1);">
					<p>Автоматическая оснастка<BR>Диам. 40 мм.<BR><input type="Radio" name="osnast" checked value="Автоматическая оснастка Диам. 40 мм." onClick="price2 = 450; count_price();" id="osnast1"> <label for="osnast1">450 руб.</label></p>
				</div>
				<div class="osnatka-icon" style="width:24%; margin:0;padding:0;display:inline;float:left;">
					<IMG border=0 src="../pics/uslugi/shiny-s-843.jpg" width=100 height=133 onclick="runEffect(2);">
					<p>Автоматическая оснастка<BR>для мал. штампов<BR><input type="Radio" name="osnast" value="Автоматическая оснастка для мал. штампов" onClick="price2 = 300; count_price();" id="osnast2"> <label for="osnast2">300 руб.</label></p>
				</div>
				<div class="osnatka-icon" style="width:24%; margin:0;padding:0;display:inline;float:left;">
					<IMG border=0 src="../pics/uslugi/grm-4927.jpg" width=100 height=133 onclick="runEffect(3);">
					<p>Автоматическая оснастка<BR>для больших штампов<BR><input type="Radio" name="osnast" value="Автоматическая оснастка для больших штампов" onClick="price2 = 500; count_price();" id="osnast3"> <label for="osnast3">500 руб.</label></p>
				</div>
				<div class="osnatka-icon" style="width:24%; margin:0;padding:0;display:inline;float:left;">
					<IMG border=0 src="../pics/uslugi/colop-r3040.jpg" width=100 height=133  onclick="runEffect(4);">
					<p>Colop R 3040<BR>Диам. 45 мм.<BR><input type="Radio" name="osnast" value="Professional Line 5215 Диам. 45 мм." onClick="price2 = 1000; count_price();" id="osnast4"> <label for="osnast4">от 1500 руб.</label></p>
				</div>
				<div id="osnastka1" class="oshastka-akkord">
					<div>
						<img src="/extdata/images/close-icon.png" style="float:right; cursor:pointer;" onClick="closeOsnastka();" alt="Закрыть"/>
					</div>
					<div style="clear:both; ">
					<?php require_once "../extdata/baseparts/osn_automat.php" ?>
					</div>
				
				</div>
				<div id="osnastka2" class="oshastka-akkord">
					<div>
						<img src="/extdata/images/close-icon.png" style="float:right; cursor:pointer;" onClick="closeOsnastka();" alt="Закрыть"/>
					</div>
					<div style="clear:both; ">
					<?php require_once "../extdata/baseparts/osn_automat_mal.php" ?>
					</div>
				</div>
				<div id="osnastka3" class="oshastka-akkord">
					<div>
						<img src="/extdata/images/close-icon.png" style="float:right; cursor:pointer;" onClick="closeOsnastka();" alt="Закрыть"/>
					</div>
					<div style="clear:both; ">
					<?php require_once "../extdata/baseparts/osn_automat_bolsh.php" ?>
					</div>
				</div>
				<div id="osnastka4" class="oshastka-akkord">
					<div>
						<img src="/extdata/images/close-icon.png" style="float:right; cursor:pointer;" onClick="closeOsnastka();" alt="Закрыть"/>
					</div>
					<div style="clear:both; ">
					<?php require_once "../extdata/baseparts/osn_automat_profline.php" ?>
					</div>
				</div>
			</div>
		</td>
	</tr>
	<tr valign="top" align="center">
		<td>
			<div style="clear:both; width:100%; margin:0;padding:0">
				<div class="osnatka-icon" style="width:24%; margin:0;padding:0;display:inline;float:left;">
					<IMG border=0 src="../pics/uslugi/met_classic_100x133.jpg" width=100 height=133 onclick="runEffect(5);">
					<p>Металлические оснастки<BR>для печатей и штампов<BR><input type="Radio" name="osnast" value="Металлические оснастки для печатей и штампов" onClick="price2 = 800; count_price();" id="osnast5"> <label for="osnast5">от 800 р.</label></p>
				</div>
				<div class="osnatka-icon" style="width:24%; margin:0;padding:0;display:inline;float:left;">
					<IMG border=0 src="../pics/uslugi/met_techno_100x133.jpg" width=100 height=133 onclick="runEffect(6);">
					<p>Эксклюзивные оснастки<BR><input type="Radio" name="osnast" value="Оригинальные оснастки" onClick="price2 = 1500; count_price();" id="osnast6"> <label for="osnast6">1500 р.</label></p>
				</div>
				<div class="osnatka-icon" style="width:24%; margin:0;padding:0;display:inline;float:left;">
					<IMG border=0 src="../pics/uslugi/plasm_gerb40_100x133.jpg" width=100 height=133 onclick="runEffect(7);">
					<p>Оснастка с гербом<BR>Диам. 40 мм.<BR><input type="Radio" name="osnast" value="Оснастка с гербом Диам. 40 мм." onClick="price2 = 0; count_price();" id="osnast7"> <label for="osnast7">Бесплатно.</label></p>
				</div>
				<div class="osnatka-icon" style="width:24%; margin:0;padding:0;display:inline;float:left;">
					<IMG border=0 src="../pics/uslugi/elit_osn.jpg" width=100 height=133  onclick="runEffect(8);">
					<p>Элитные оснастки<BR>от 5500 р.</p>
				</div>
				<div id="osnastka5" class="oshastka-akkord">				
					<div>
						<img src="/extdata/images/close-icon.png" style="float:right; cursor:pointer;" onClick="closeOsnastka();" alt="Закрыть"/>
					</div>
					<div style="clear:both; ">
					<?php require_once "../extdata/baseparts/osn_metal_pech_stamp.php" ?>
					</div>
				</div>
				<div id="osnastka6" class="oshastka-akkord">
					<div>
						<img src="/extdata/images/close-icon.png" style="float:right; cursor:pointer;" onClick="closeOsnastka();" alt="Закрыть"/>
					</div>
					<div style="clear:both; ">
					<?php require_once "../extdata/baseparts/osn_metal_origin.php" ?>
					</div>
				</div>
				<div id="osnastka7" class="oshastka-akkord">
					<div>
						<img src="/extdata/images/close-icon.png" style="float:right; cursor:pointer;" onClick="closeOsnastka();" alt="Закрыть"/>
					</div>
					<div style="clear:both; ">
					<?php require_once "../extdata/baseparts/osn_gerb.php" ?>
					</div>
				</div>
				<div id="osnastka8" class="oshastka-akkord">
					<div>
						<img src="/extdata/images/close-icon.png" style="float:right; cursor:pointer;" onClick="closeOsnastka();" alt="Закрыть"/>
					</div>
					<div style="clear:both; ">
					<?php require_once "../extdata/baseparts/osn_elit.php" ?>
					</div>
				</div>
			</div>
		</td>
	</tr>
</table>