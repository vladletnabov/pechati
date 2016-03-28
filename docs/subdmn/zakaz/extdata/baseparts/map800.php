
<style>

input[type="radio"] {
    display:none;            
}
input[type="radio"] + label {
  font-size: 12px;
  color: #000;
  cursor: pointer;
}
input[type="radio"]:checked  label {
  font-size: 14px;
}

label a{
	background: white;
}
input[type="radio"] + label::before {
    content: "";
    display: inline-block;
	border-radius:100%;
    height: 14px;
    width: 14px;
    margin: 0;
    background-color: white;
    background-repeat: no-repeat;
	border:1px solid navy;
}

/* RED BLOCK*/

input[type="radio"] + .red::before {
    background-color: white;/*red;*/
}
input[type="radio"]:checked + .red::before {
    background-color:darkred;
	border: 2px dotted white;
}

input[type="radio"] + .red div{
	color: red;
}
input[type="radio"]:checked + .red div{
	color: darkred;
	font-size: 14px;
}

/* YELLOW BLOCK*/

input[type="radio"] + .yellow::before {
    background-color: white;/*red;*/
}
input[type="radio"]:checked + .yellow::before {
    background-color:gold;
	border: 2px dotted white;
}

input[type="radio"] + .yellow div{
	color: Orange;
}
input[type="radio"]:checked + .yellow div{
	/*background-color: gold;*/
	color: Orange;
	font-size: 14px;
}
/* ORANGE BLOCK*/

input[type="radio"] + .orange::before {
    background-color: white;/*red;*/
}
input[type="radio"]:checked + .orange::before {
    background-color:coral;
	border: 2px dotted white;
}

input[type="radio"] + .orange div{
	color: Orange;
}
input[type="radio"]:checked + .orange div{
	/*background-color: gold;*/
	color: coral;
	font-size: 14px;
}
/* GREY BLOCK*/

input[type="radio"] + .grey::before {
    background-color: white;/*red;*/
}
input[type="radio"]:checked + .grey::before {
    background-color:gray;
	border: 2px dotted white;
}

input[type="radio"] + .grey div{
	color: DimGray;
}
input[type="radio"]:checked + .grey div{
	/*background-color: gold;*/
	color: DimGray;
	font-size: 14px;
}
/* BLUE BLOCK*/

input[type="radio"] + .blue::before {
    background-color: white;/*red;*/
}
input[type="radio"]:checked + .blue::before {
    background-color:blue;
	border: 2px dotted white;
}

input[type="radio"] + .blue div{
	color: blue;
}
input[type="radio"]:checked + .blue div{
	/*background-color: gold;*/
	color: blue;
	font-size: 14px;
}
/* AQUA BLOCK*/

input[type="radio"] + .aqua::before {
    background-color: white;/*red;*/
}
input[type="radio"]:checked + .aqua::before {
    background-color:aqua;
	border: 2px dotted white;
}

input[type="radio"] + .aqua div{
	color: DeepSkyBlue;
}
input[type="radio"]:checked + .aqua div{
	/*background-color: gold;*/
	color: DeepSkyBlue;
	font-size: 14px;
}
/* VIOLET BLOCK*/

input[type="radio"] + .violet::before {
    background-color: white;/*red;*/
}
input[type="radio"]:checked + .violet::before {
    background-color:DarkViolet;
	border: 2px dotted white;
}

input[type="radio"] + .violet div{
	color: DarkViolet;
}
input[type="radio"]:checked + .violet div{
	/*background-color: gold;*/
	color: DarkViolet;
	font-size: 14px;
}
/* LIGHTGREEN BLOCK*/

input[type="radio"] + .lightgreen::before {
    background-color: white;/*red;*/
}
input[type="radio"]:checked + .lightgreen::before {
    background-color:YellowGreen;
	border: 2px dotted white;
}

input[type="radio"] + .lightgreen div{
	color: OliveDrab;
}
input[type="radio"]:checked + .lightgreen div{
	/*background-color: gold;*/
	color: OliveDrab;
	font-size: 14px;
}
/* GREEN BLOCK*/

input[type="radio"] + .green::before {
    background-color: white;/*red;*/
}
input[type="radio"]:checked + .green::before {
    background-color:LimeGreen;
	border: 2px dotted white;
}

input[type="radio"] + .green div{
	color: green;
}
input[type="radio"]:checked + .green div{
	/*background-color: gold;*/
	color: green;
	font-size: 14px;
}


 .right-center-top {
	position:relative;
	text-align: center;
	margin-top: -22px;
	margin-left: 16px;
	background-color: #fff;
	 
 }
 .right {
	position:relative;
	margin-left: 17px;
	margin-top: -15px;
	background-color: #fff;
	 
 }
  .right-bottom {
	position:relative;
	margin-left: 17px;
	margin-top: -5px;
	background-color: #fff;
	 
 }
 .left {
	width:68px;
	margin-left: -68px;
	margin-top: -15px;
	text-align:right;
	background-color: #fff;
	 
 }
 .up-center {
	min-width:44px;
	height: 16px;
	margin-top:-30px;
	margin-left:-13px;
	text-align:center;
	background-color: #fff;	 
 }
 .width-65{
	 width:68px;
 }
</style>



<div style="position:relative;">
	<img src="/extdata/images/map-800.png" />
	
	<div>
	
	
	<!-- красная ветка -->
	<div style="position:absolute; left:570px; top:270px; ">
		<input id="filial-red-1" type="radio" name="filialy" value="м. Комсомольская" hidden>
			<label for="filial-red-1"  class="red" ><div class="right">Комсомольская</div></label>
	</div>
	<div style="position:absolute; left:593px; top:180px;">
		<input id="filial-red-2" type="radio" name="filialy" value="м. Преображенская площадь" hidden>
			<label for="filial-red-2"  class="red" ><div class="right-center-top red">Преображенская<br /> площадь</div></label>
	</div>	
	<div style="position:absolute; left:211px; top:566px; ">
		<input id="filial-red-3" type="radio" name="filialy" value="м. Спортивная" hidden>
			<label for="filial-red-3"  class="red" ><div  class="right-bottom">Спортивная</div></label>
	</div>
	<div style="position:absolute;  left:182px; top:683px; ">
		<input id="filial-red-4" type="radio" name="filialy" value="м. Юго-Западная" hidden>
			<label for="filial-red-4"  class="red" ><div class="right">Юго-Западная</div></label>
	</div>
	
	<!-- жёлтая ветка-->
	<div style="position:absolute; left:676px; top:436px; z-index:15;">
		<input id="filial-yel-1" type="radio" name="filialy" value="м. Авиамоторная" hidden>
			<label for="filial-yel-1"  class="yellow" ><div  class="right-bottom">Авиамоторная</div></label>
	</div>
	<div style="position:absolute; left:688px; top:376px; ">
		<input id="filial-yel-2" type="radio" name="filialy" value="м. Новогиреево" hidden>
			<label for="filial-yel-2"  class="yellow" ><div class="right">Новогиреево</div></label>
	</div>
	<!-- оранжевая ветка-->
	<div style="position:absolute; left:498px; top:158; ">
		<input id="filial-orange-1" type="radio" name="filialy" value="м. Алексеевская" hidden>
			<label for="filial-orange-1"  class="orange" ><div class="right">Алексеевская</div></label>
	</div>
	<div style="position:absolute; left:498px; top:60px;">
		<input id="filial-orange-2" type="radio" name="filialy" value="м. Бабушкинская" hidden>
			<label for="filial-orange-2"  class="orange" ><div  class="right">Бабушкинская</div></label>
	</div>
	<div style="position:absolute; left:286px; top:700px; ">
		<input id="filial-orange-3" type="radio" name="filialy" value="м. Новые черёмушки" hidden>
			<label for="filial-orange-3"  class="orange" ><div  class="right">Новые черёмушки</div></label>
	</div>
	<div style="position:absolute; left:325px; top:555px; ">
		<input id="filial-orange-4" type="radio" name="filialy" value="м. Октябрьская" hidden>
			<label for="filial-orange-4"  class="orange" ><div  class="right-bottom">Октябрьская</div></label>
	</div>
	<!-- серая ветка-->
	<div style="position:absolute; left:302px; top:30px;">
		<input id="filial-grey-1" type="radio" name="filialy" value="м. Алтуфьево" hidden>
			<label for="filial-grey-1"  class="grey" ><div  class="right">Алтуфьево</div></label>
	</div>
	<div style="position:absolute; left:397px; top:680px; ">
		<input id="filial-grey-2" type="radio" name="filialy" value="м. Нахимовский проспект" hidden>
			<label for="filial-grey-2"  class="grey" ><div  class="right">Нахимовский<br />проспект</div></label>
	</div>
	<div style="position:absolute; left:302px; top:183px;">
		<input id="filial-grey-3" type="radio" name="filialy" value="м. Савеловская" hidden>
			<label for="filial-grey-3"  class="grey" ><div  class="right">Савеловская</div></label>
	</div>
	<div style="position:absolute; left:397px; top:793px; ">
		<input id="filial-grey-4" type="radio" name="filialy" value="м. Пражская" hidden>
			<label for="filial-grey-4"  class="grey" ><div  class="right">Пражская</div></label>
	</div>
	<div style="position:absolute; left:397px; top:628px;">
		<input id="filial-grey-5" type="radio" name="filialy" value="м. Тульская" hidden>
			<label for="filial-grey-5"  class="grey" ><div  class="right">Тульская</div></label>
	</div>
	<div style="position:absolute;  left:375px; top:280px;">
		<input id="filial-grey-6" type="radio" name="filialy" value="м. Цветной бульвар" hidden>
			<label for="filial-grey-6"  class="grey" ><div  class="left">Цветной бульвар</div></label>
	</div>
	<div style="position:absolute; left:397px; top:773px;">
		<input id="filial-grey-7" type="radio" name="filialy" value="м. Южная" hidden>
			<label for="filial-grey-7"  class="grey" ><div  class="right">Южная</div></label>
	</div>
	
	<!-- синяя ветка-->
	<div style="position:absolute; left:350px; top:430px; ">
		<input id="filial-blue-1" type="radio" name="filialy" value="м. Арбатская" hidden>
			<label for="filial-blue-1"  class="blue" ><div class="up-center">Арбатская</div></label>
	</div>
	<div style="position:absolute; left:17px; top:307px; ">
		<input id="filial-blue-2" type="radio" name="filialy" value="м. Кунцевская" hidden>
			<label for="filial-blue-2"  class="blue" ><div class="right-center-top">Кунцевская</div></label>
	</div>
	<div style="position:absolute;  left:17px; top:170px;">
		<input id="filial-blue-3" type="radio" name="filialy" value="м. Митино" hidden>
			<label for="filial-blue-3"  class="blue" ><div class="right">Митино</div></label>
	</div>
	<div style="position:absolute; left:17px; top:274px;">
		<input id="filial-blue-4" type="radio" name="filialy" value="м. Молодёжная" hidden>
			<label for="filial-blue-4"  class="blue" ><div class="right">Молодёжная</div></label>
	</div>
	<div style="position:absolute; left:688px; top:140px; ">
		<input id="filial-blue-5" type="radio" name="filialy" value="м. Щёлковская" hidden>
			<label for="filial-blue-5"  class="blue" ><div class="right">Щёлковская</div></label>
	</div>
	<div style="position:absolute; left:662px; top:295px;">
		<input id="filial-blue-6" type="radio" name="filialy" value="м. Электрозаводская" hidden>
			<label for="filial-blue-6"  class="blue" ><div class="right-bottom">Электрозаводская</div></label>
	</div>
	
	<!-- голубая ветка-->
	<div style="position:absolute; left:28px; top:334px; ">
		<input id="filial-aqua-1" type="radio" name="filialy" value="м. Пионерская" hidden>
			<label for="filial-aqua-1"  class="aqua" ><div class="right">Пионерская</div></label>
	</div>
	
	<!-- фиолетовая ветка-->
	<div style="position:absolute; left:159px; top:305px;">
		<input id="filial-viol-1" type="radio" name="filialy" value="м. Беговая" hidden>
			<label for="filial-viol-1"  class="violet" ><div class="left">Беговая</div></label>
	</div>
	<div style="position:absolute; left:688px; top:609px;">
		<input id="filial-viol-2" type="radio" name="filialy" value="м. Кузьминки" hidden>
			<label for="filial-viol-2"  class="violet" ><div class="right">Кузьминки</div></label>
	</div>
	<div style="position:absolute;  left:112px; top:231px;">
		<input id="filial-viol-3" type="radio" name="filialy" value="м. Октябрьское поле" hidden>
			<label for="filial-viol-3"  class="violet" ><div class="right">Октябрьское<br />поле</div></label>
	</div>
	<div style="position:absolute; left:601px; top:482px;">
		<input id="filial-viol-4" type="radio" name="filialy" value="м. Таганская" hidden>
			<label for="filial-viol-4"  class="violet" ><div class="left">Таганская</div></label>
	</div>
	<div style="position:absolute; left:112px; top:207px;">
		<input id="filial-viol-5" type="radio" name="filialy" value="м. Щукинская" hidden>
			<label for="filial-viol-5"  class="violet" ><div class="right">Щукинская</div></label>
	</div>
	
	<!-- светло-зелёная ветка-->
	<div style="position:absolute; left:592px; top:711px;">
		<input id="filial-lg-1" type="radio" name="filialy" value="м. Братиславская" hidden>
			<label for="filial-lg-1"  class="lightgreen" ><div class="right">Братиславская</div></label>
	</div>
	<div style="position:absolute; left:397px; top:178px; ">
		<input id="filial-lg-2" type="radio" name="filialy" value="м. Марьина роща" hidden>
			<label for="filial-lg-2"  class="lightgreen" ><div class="right">Марьина роща</div></label>
	</div>
	<!-- зелёная ветка-->
	<div style="position:absolute; left:207px; top:139px;">
		<input id="filial25" type="radio" name="filialy" value="м. Водный стадион" hidden>
			<label for="filial25"  class="green" ><div class="right-center-top width-65">Водный<br />стадион</div></label>
	</div>
	<div style="position:absolute;  left:223px; top:249px;">
		<input id="filial26" type="radio" name="filialy" value="м. Динамо" hidden>
			<label for="filial26"  class="green" ><div class="right-center-top">Динамо</div></label>
	</div>
	<div style="position:absolute; left:498px; top:697px;">
		<input id="filial27" type="radio" name="filialy" value="м. Каширская" hidden>
			<label for="filial27"  class="green" ><div class="right">Каширская</div></label>
	</div>
	
	
</div>


















