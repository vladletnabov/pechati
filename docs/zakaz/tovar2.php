
<style type="text/css">
#tabs
{
font-size:0.7em;
height:500px;
}
#tabs-1 p,#tabs-2 p,#tabs-3 p,#tabs-4 p,#tabs-5 p
{font-size:1.2em;}
#radio12 {margin-left:-3px;}
.ui-buttonset .ui-button {
margin-left: 0;
margin-right: -.6em;
}

.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default color-img {
background-color: red;
}

#filter2 ul.TSVYET {
max-height: 100px;
padding-top: 10px;
}
#filter2 ul.TSVYET {
list-style:none;
	max-height: 100px;
	padding-top: 10px;
}
#filter2 ul {
list-style:none;
	font-size: 11px;
	padding: 5px 0;
	max-height: 150px;
	overflow-x: hidden;
	overflow-y: auto;
}
#filter2 ul li {
	cursor: pointer;
	padding: 2px 0 2px 10px;
}
TSVYET li {
	width: 17px;
	height: 17px;
	overflow: hidden;
	display: block;
	float: left;
}
.TSVYET li span{display:none}
.TSVYET chosen{
	border:2px solid #558dbd;
	padding:4px !important;
	margin:0 0 3px 4px !important
}
.TSVYET li{
	border:2px solid #e1e1e1;
	border-radius: 6px;
	padding:4px !important;
	margin:0 0 3px 4px !important
}
.TSVYET{
	max-height:100px;
	padding-top:10px
}
#filter2 ul.TSVYET li{
	width:17px;
	height:17px;
	overflow:hidden;
	display:block;
	float:left
}
#filter2 ul.TSVYET span.col_sample{
	border:1px solid #ccc;
	height:15px;
	width:15px;
	margin-bottom:0 !important;
	margin-left:0 !important;
	display:inline-block
}
.TSVYET span.col_sample {
	border: 1px solid #ccc;
	height: 15px;
	width: 15px;
	margin-bottom: 0 !important;
	margin-left: 0 !important;
	display: inline-block;
}


			  #color-sel2 .ui-selecting { border:1px dotted #FECA40; padding:2px; }
			  #color-sel2 .ui-state-default {background:none;}
			  #color-sel2 .ui-selected { border: 1px solid #F39814; color: white; }
			  #color-sel2 { list-style-type: none; margin: 0; padding: 0; width: 150px; }
			  #color-sel2 li { margin: 3px; padding: 1px; float: left; width: 20px; height: 20px; font-size: 4em; text-align: center; }

</style>

<script>
var base_price2=1200;
var color2= "red";
var pic2=0;
var pic_pres2=0;
var pic_new2=200;
var pic_scan2=500;

var dostav2 =0;
var dostav_kur2 =300;
var dostav_sam2 = 0;

var time2=0;
var time_day2=0;
var time_hour2=300;
var stamp_count2 =1;

pic2 = pic_new2;
time2= time_day2;
dostav2 = dostav_kur2;

	function count_price2(){
		document.getElementById('base_price2').innerHTML = base_price;
		stamp_count2 = $('#number2').val();
		document.getElementById('price2').innerHTML = stamp_count2*base_price2 + pic2 + dostav2 + time2;
		return;
	}
	function showfileload2(){
						$("#load-file2").show();
					}
					function hidefileload2(){
						$("#load-file2").hide();
					}
					function picpresent2(){
						showfileload2();
						pic2 = pic_pres2;
						count_price2();
					}
					function picfromscan2(){
						showfileload2();
						pic2 = pic_scan2;
						count_price2();
					}
					function picpnew2(){
						hidefileload2();
						pic2 = pic_new2;
						count_price2();
					}
					function adddostavka2(){
						dostav2 = dostav_kur2;
						count_price2();
					}
					function nondostavka2(){
						dostav2 = dostav_sam2;
						count_price2();
					}
	$(window).load(function() {count_price();});
	
		$(document).ready(function(){
			$(".TSVYET li a").click(function(){
				$("#img img").hide().attr({"src": $(this).attr("href"), "title": $("> img", this).attr("title")});
				$("#img h2").html($("> img", this).attr("title"));
				return false;
			});
			
			
				$("#open-dialog2").click(function(){ $("#dial2").dialog("open");});
				//Код первой вкладки (стандартное использование)
				   $("#dial2").dialog({
				   width:880,
				   height:450,
				   autoOpen:false});
			
			
			
			
		});
		
		$(function() {
		$( "#logist2" ).buttonset();
		$( "#time2" ).buttonset();
		$( "#clishe2" ).buttonset();
		$( "#color2" ).buttonset();
		
		
		$( "#color-sel2" ).selectable();
				
			
				$(".color-click li a").click(function(){
					$("#img2 img").hide().attr({"src": $(this).attr("href"), "title": $("> img", this).attr("title")});
					$("#img2 h2").html($("> img", this).attr("title"));
					color= $this.attr();
					return false;
				});
				$("#img2>img").load(function(){$("#img>img:hidden").fadeIn("slow")});
				
				
				$( "#speed2" ).selectmenu();
			 
				$( "#files2" ).selectmenu();
			 
				$( "#number2" )
				  .selectmenu()
				  .selectmenu( "menuWidget" )
					.addClass( "overflow" );
	  });
</script>


<div id="dial2" title="Заказать печать на автоматической оснастке Colop R40">
	<script>
	  
	</script>
	<div  style="float:left; display:inline; width: 250px;max-width: 250px;">
		<div id="img2" style="height:200px;">
		<img src="img/osnast/colop/colop-r-r.jpg" width="200px" height="200px" border="1px" />	
		</div>
	
	
		<div id="filter2">
		
		
			<a style="margin-bottom:0;">Цвет оснастки:</a>
			
			<!--<ol id="color-sel" class="color-click" >
			  <li class="ui-state-default" style="background-color:red;"> <a href="img/osnast/colop/colop-r-r.jpg" title="red"> </a> </li>
			  <li class="ui-state-default" style="background-color:blue;"><a href="img/osnast/colop/colop-r-w.jpg" title="blue"> </a></li>
			  <li class="ui-state-default" style="background-color:black;"><a href="img/osnast/colop/colop-r-b.jpg" title="black"> </a></li>
			</ol>-->
			
				<ul class="TSVYET" style="margin-top:-5px;"> 
					<li> <a href="../zakaz/img/osnast/colop/colop-r-r.jpg" title="red"> <span class="col_sample" style="background-color:red; border:1px red dashed;"></span> </a> </li> 
					<li> <a href="../zakaz/img/osnast/colop/colop-r-w.jpg" title="blue" > <span class="col_sample" style="background-color:blue"></span> </a> </li> 
					<li> <a href="../zakaz/img/osnast/colop/colop-r-b.jpg" title="black"> <span class="col_sample" style="background-color:black"></span> </a> </li> 
				</ul>
			Стоимость: <a id="base_price2">1 200</a>р.
			<div style="background-color:#dc143c; max-width: 250px; text-align:center; line-height 50px;padding:25px 0 25px 0; border-radius:6px;">
				<a style="color:white; font-size:2em;">Итого: </a><a id="price2" style="color:white; font-size:2em;">999999</a><a style="color:white;">p.</a>
			</div>
			
		</div>
	
	
	</div>
	  
	<div id="img-data2" style="float:left; display:inline; max-width:600px; margin-left:10px; position: relative;">
	<div>
	  <div id="clishe2" style="display:inline; float:left; max-width:300px; width:300px; ">
		Рисунок печати: <br />
			  <form>
				<input type="radio" id="clishe12" name="radio" onclick="picpresent()"><label for="clishe12" style="font-size:12px;">Есть</label>
				<input type="radio" id="clishe22" name="radio" onclick="picpnew()" checked="checked"><label for="clishe22" style="font-size:12px;">Новая</label>		
				<input type="radio" id="clishe32" name="radio" onclick="picfromscan()"><label for="clishe32" style="font-size:12px;">По оттиску</label>
				
				  <div id="load-file2" style="margin-top:10px; display:none;">
					<input id="load-file2" type="file" style="font-size:0.9em; padding:0; width:300px;">
				  </div>
				</form>
		</div>

		<div style="margin-left:15px; display:inline; float:left; max-width:250px;">
			Количество печатей:<br />
			<select name="number" id="number2" style=" max-width:250px;" onchange=" count_price2();">
			  <option selected="selected" onclick="stamp_count2=1;count_price2():">1</option>
			  <option onclick="stamp_count2=2;count_price2():">2</option>
			  <option onclick="stamp_count2=3;count_price2():">3</option>
			  <option onclick="stamp_count2=4;count_price2():">4</option>
			  <option onclick="stamp_count2=5;count_price2():">5</option>
			  <option onclick="stamp_count2=6;count_price2():">6</option>
			  <option onclick="stamp_count2=7;count_price2():">7</option>
			  <option onclick="stamp_count2=8;count_price2():">8</option>
			  <option onclick="stamp_count2=9;count_price2():">9</option>
			  <option onclick="stamp_count2=10;count_price2():">10</option>
			  <option onclick="stamp_count2=11;count_price2():">11</option>
			  <option onclick="stamp_count2=12;count_price2():">12</option>
			  <option onclick="stamp_count2=13;count_price2():">13</option>
			  <option onclick="stamp_count2=14;count_price2():">14</option>
			  <option onclick="stamp_count2=15;count_price2():">15</option>
			  <option onclick="stamp_count2=16;count_price2():">16</option>
			  <option onclick="stamp_count2=17;count_price2():">17</option>
			  <option onclick="stamp_count2=18;count_price2():">18</option>
			  <option onclick="stamp_count2=19;count_price2():">19</option>
			</select>
		</div>
	</div>
	<div style="clear:both;">
		<div style="position:relative; float:left; display:inline; width: 300px;">
		Доставка: <br />
		<form>
		  <div id="logist2">
			<input type="radio" id="logist12" name="radio" checked="checked"  onclick="adddostavka2()"><label for="logist12" style="font-size:12px;">Курьером</label>
			<input type="radio" id="logist22" name="radio" onclick="nondostavka2()"><label for="logist22" style="font-size:12px;">Самовывоз</label>
		  </div>
		</form>
		</div>
		<div style="position:relative; float:left; display:inline;margin-left: 25px;">
		Срочность: <br />
		<form>
		  <div id="time">
			<input type="radio" id="time12" name="radio" checked="checked" onclick="time2=time_day2; count_price2();"><label for="time12" style="font-size:12px;">1 день</label>
			<input type="radio" id="time22" name="radio"><label for="time2" style="font-size:12px;" onclick="time2=time_hour2; count_price2();">за 1 час</label>
		  </div>
		</form>
		</div>
		<div id="message-form2" style="clear:both; width:250px;">
			<div class="input-prepend" style="margin-left:0px; ">
							<span class="add-on"><i class="icon-user"></i></span>
							<input class="input-large focused" name="name" type="text" placeholder="Имя и телефон" style="width:200px;">
						</div>
			<div class="input-prepend" style="margin-left:0px; ">
								<span class="add-on"><i class="icon-envelope"></i></span>
								<input class="input-large focused" name="e-mail" type="text" placeholder="Ваш E-mail" style="width:200px;">
							</div>
			<div class="input-prepend" style="margin-left:0px; ">
								<textarea style="width:550px; height:100px; max-height:110px;max-width:550px;"></textarea>
							</div>
	
		</div>
	
	</div>

	
	</div>
	
	
</div>



<div id="liststamp2" style="max-width:947px;width:947px;; background-color:#203052; color:#fff; position: relative; z-index:99; position: relative; margin-left: -22px; margin-right: -250px;">
	<div id="tovar12" style="width:100%; height:250px; margin: 0 0 20px 0; color:#333; background-color:#fff;">
		<div id="tovarpic-2" style="height:200px;float:left; display:block-inline;">
			<img src="../zakaz/img/osnast/colop/colop-r-b.jpg" width="200px" height="200px" border="0" />	
		</div>
		<div id="tovarpic2-2" style="height:200px;float:left; display:block-inline;padding: 50px 0 0 0;position: relative; margin-left: -50px;">
			<img src="../zakaz/img/osnast/pechat-mono.jpg" width="100px" height="100px" border="0" />	
		</div>
		
		<div id="tovarhead2" style="height:200px;float:left; display:block-inline;padding: 10; margin-left: 20px; max-width:350px;">
			<a name="colopr40"><h1 style="color: #0088cc; font-style:italic; font-size:1.5em;">Печать на автоматической оснастке Royal R40</h1></a>
			Материал клише — резина<br />
			Оснастка — автоматическая<br />
			Производитель: Colop, Германия<br />
			Штемпельная подушка - встроенная<br />
		</div>
		<div id="tovarprice2" style="height:200px;float:left; display:block-inline;padding: 10; margin-left: 20px; max-width:350px; color: #333;">
			<h1 style="color: #0088cc; font-style:italic; font-size:1.5em;">Хочу заказать печать</h1>
			<table cellspacing="0" cellpadding="0">
			<tr style="height:40px;"><td>
			<a style="color:#203052; text-decoration:none;">новая печать:</a></td><td><a style="margin:20px; border:1px solid #203052; background-color:#203052; border-radius: 4px; color:#fff;"> от 1200 р.</a><br />
			</td></tr>
			<tr><td>
			<a style="color:#203052; text-decoration:none;">печать по оттиску:</a></td><td><a style="margin:20px; border:1px solid #203052; background-color:#203052; border-radius: 4px; color:#fff;"> от 1500 р.</a>
			</td></tr>
			</table>
			<input type="button" id="open-dialog" value="Заказать сейчас" style="width:100%; margin-top:40px; background-color:#203052;border:1px solid #203052; border-radius: 4px; color: #fff; font-size: 2em; height: 2.5em;"/>
		</div>
	
	
	
			
	</div>
	<div style="height: 200px;">
	<b>Внимание!</b><br /> Цены указы для одной печати. При заказе от трёх печатей действует скидка. Подробности уточняйте у менеджера.
	</div>

</div>