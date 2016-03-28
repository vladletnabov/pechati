
<style>

input[type="radio"] {
    display:none;            
}
input[type="radio"] + label {
  font: 18px bold;
  color: #444;
  cursor: pointer;
}
input[type="radio"] + label::before {
    content: "";
    display: inline-block;
	border-radius:100%;
    height: 18px;
    width: 18px;
    margin: 0 5px 0 0;
    background-color: white;
    background-repeat: no-repeat;
}
input[type="radio"] + .red::before {
    content: "";
    display: inline-block;
	border-radius:100%;
    height: 18px;
    width: 18px;
    margin: 0 5px 0 0;
    background-color: white;/*red;*/
    background-repeat: no-repeat;
	border:1px solid navy;
}

input[type="radio"] + .green::before {
    content: "";
    display: inline-block;
	border-radius:100%;
    height: 18px;
    width: 18px;
    margin: 0 5px 0 0;
    background-color: white;/*green;*/
    background-repeat: no-repeat;
	border:1px solid navy;
}

input[type="radio"] + .blue::before {
    content: "";
    display: inline-block;
	border-radius:100%;
    height: 18px;
    width: 18px;
    margin: 0 5px 0 0;
    background-color: white;/*blue;*/
    background-repeat: no-repeat;
	border:1px solid navy;
}

input[type="radio"] + .aqua::before {
    content: "";
    display: inline-block;
	border-radius:100%;
    height: 18px;
    width: 18px;
    margin: 0 5px 0 0;
    background-color: white;/*aqua;*/
    background-repeat: no-repeat;
	border:1px solid navy;
}

input[type="radio"] + .brawn::before {
    content: "";
    display: inline-block;
	border-radius:100%;
    height: 18px;
    width: 18px;
    margin: 0 5px 0 0;
    background-color: white;/*brawn;*/
    background-repeat: no-repeat;
	border:1px solid navy;
}

input[type="radio"] + .orange::before {
    content: "";
    display: inline-block;
	border-radius:100%;
    height: 18px;
    width: 18px;
    margin: 0 5px 0 0;
    background-color: white;/*orange;*/
    background-repeat: no-repeat;
	border:1px solid navy;
}

input[type="radio"] + .violet::before {
    content: "";
    display: inline-block;
	border-radius:100%;
    height: 18px;
    width: 18px;
    margin: 0 5px 0 0;
    background-color: white;/*violet;*/
    background-repeat: no-repeat;
	border:1px solid navy;
}

input[type="radio"] + .yellow::before {
    content: "";
    display: inline-block;
	border-radius:100%;
    height: 18px;
    width: 18px;
    margin: 0 5px 0 0;
    background-color: white;/*yellow;*/
    background-repeat: no-repeat;
	border:1px solid navy;	
	z-index:5;
}

input[type="radio"] + .grey::before {
    content: "";
    display: inline-block;
	border-radius:100%;
    height: 18px;
    width: 18px;
    margin: 0 5px 0 0;
    background-color: white;/*grey;*/
    background-repeat: no-repeat;
	border:1px solid navy;
}

input[type="radio"] + .lightgreen::before {
    content: "";
    display: inline-block;
	border-radius:100%;
    height: 18px;
    width: 18px;
    margin: 0 5px 0 0;
    background-color: white;/*lightgreen;*/
    background-repeat: no-repeat;
	border:1px solid navy;
}

input[type="radio"] + .lightblue::before {
    content: "";
    display: inline-block;
	border-radius:100%;
    height: 18px;
    width: 18px;
    margin: 0 5px 0 0;
    background-color: white;/*lightblue;*/
    background-repeat: no-repeat;
	border:1px solid navy;
}

input[type="radio"] + .cadetblue::before {
    content: "";
    display: inline-block;
	border-radius:100%;
    height: 18px;
    width: 18px;
    margin: 0 5px 0 0;
    background-color: white;/*cadetblue;*/
    background-repeat: no-repeat;
	border:1px solid navy;
}

input[type="radio"]:checked + .red::before {
    background-color:darkred;
	border: 2px dotted white;
}

input[type="radio"]:checked + .red a{
    display:inline;
	color:white;
	text-shadow: 1px 1px 2px black, 0 0 2em white;
	z-index:5;
}

input[type="radio"]:checked + .green::before {
    background-color:darkgreen;
	border: 2px dotted white;
}

input[type="radio"]:checked + .green a{
    display:inline;
	color:white;
	text-shadow: 1px 1px 2px black, 0 0 2em white;
	z-index:5;
}

input[type="radio"]:checked + .blue::before {
    background-color:navy;
	color:white;
	text-shadow: 1px 1px 2px black, 0 0 2em white;
}

input[type="radio"]:checked + .blue a{
    display:inline;
	color:white;
	text-shadow: 1px 1px 2px black, 0 0 2em white;
	z-index:5;
}

input[type="radio"]:checked + .aqua::before {
    background-color:aqua;
	border: 2px dotted white;
}

input[type="radio"]:checked + .aqua a{
    display:inline;
	color:white;
	text-shadow: 1px 1px 2px black, 0 0 2em white;
	z-index:5;
}

input[type="radio"]:checked + .brawn::before {
    background-color:maroon;
	border: 2px dotted white;
}

input[type="radio"]:checked + .brawn a{
    display:inline;
	color:white;
	text-shadow: 1px 1px 2px black, 0 0 2em white;
	z-index:5;
}

input[type="radio"]:checked + .orange::before {
    background-color:orangered;
	border: 2px dotted white;	
	z-index:2;
}

input[type="radio"]:checked + .orange a{
    display:inline;
	color:white;
	text-shadow: 1px 1px 2px black, 0 0 2em white;
	z-index:15;
}

input[type="radio"]:checked + .violet::before {
    background-color:darkviolet;
	border: 2px dotted white;
}

input[type="radio"]:checked + .violet a{
    display:inline;
	color:white;
	text-shadow: 1px 1px 2px black, 0 0 2em white;
	z-index:5;
}

input[type="radio"]:checked + .yellow::before {
    background-color:gold;
	border: 2px dotted red;
}

input[type="radio"]:checked + .yellow a{
    display:inline;
	color:white;
	text-shadow: 1px 1px 2px black, 0 0 2em white;
	z-index:5;
}

input[type="radio"]:checked + .grey::before {
    background-color:darkslategrey;
	border: 2px dotted white;
}

input[type="radio"]:checked + .grey a{
    display:inline;
	color:white;
	text-shadow: 1px 1px 2px black, 0 0 2em white;
	z-index:5;
}

input[type="radio"]:checked + .lightgreen::before {
    background-color:lime;
	color:white;
	text-shadow: 1px 1px 2px black, 0 0 2em white;
	z-index:5;
}

input[type="radio"]:checked + .lightgreen a{
    display:inline;
	color:white;
	text-shadow: 1px 1px 2px black, 0 0 2em white;
	z-index:5;
}

input[type="radio"]:checked + .lightblue::before {
    background-color:deepskyblue;
	border: 2px dotted white;
	z-index:5;
}

input[type="radio"]:checked + .lightblue a{
    display:inline;
	color:white;
	text-shadow: 1px 1px 2px black, 0 0 2em white;
	z-index:5;
}

input[type="radio"]:checked + .cadetblue::before {
    background-color:cadetblue;
	border: 2px dotted white;
	z-index:5;
}

input[type="radio"]:checked + .cadetblue a{
    display:inline;
	color:white;
	text-shadow: 1px 1px 2px black, 0 0 2em white;
	z-index:5;
}

label:hover a {
	   display:inline;
}

label a{
	text-shadow: 1px 1px 2px #efefef, 0 0 1em #000;
}


</style>



<div style="position:relative;">
	<img src="/extdata/images/map-800.png" />
	
	
	<!-- красная ветка -->
	<!--<div style="position:absolute; left:430px; top:450px; ">
		<input id="filial1" type="radio" name="filialy" value="м. Комсомольская" hidden>
			<label for="filial1"  class="red" ><a hidden>м. Комсомольская</a></label>
	</div>-->	
	<div style="position:absolute; left:190px; top:160px;">
		<input id="filial2a" type="radio" name="filialy" value="м. Преображенская площадь" hidden>
			<label for="filial2a"  class="red" ><a hidden>м. Преображенская площадь</a></label>
	</div>	
	<div style="position:absolute; left:105px; top:230px; ">
		<input id="filial2b" type="radio" name="filialy" value="м. Спортивная" hidden>
			<label for="filial2b"  class="red" ><a hidden>м. Спортивная</a></label>
	</div>
	<div style="position:absolute;  left:70px; top:275px; ">
		<input id="filial2" type="radio" name="filialy" value="м. Юго-Западная" hidden>
			<label for="filial2"  class="red" ><a hidden>м. Юго-Западная</a></label>
	</div>
	<!-- жёлтая ветка-->
	<!--<div style="position:absolute; left:500px; top:500px; z-index:15;">
		<input id="filial3" type="radio" name="filialy" value="м. Авиамоторная" hidden>
			<label for="filial3"  class="yellow" ><a hidden>м. Авиамоторная</a></label>
	</div>-->
	<div style="position:absolute; left:245px; top:200px; ">
		<input id="filial4" type="radio" name="filialy" value="м. Новогиреево" hidden>
			<label for="filial4"  class="yellow" ><a hidden>м. Новогиреево</a></label>
	</div>
	<!-- оранжевая ветка-->
	<!--<div style="position:absolute; left:390px; top:380px; ">
		<input id="filial5" type="radio" name="filialy" value="м. Алексеевская" hidden>
			<label for="filial5"  class="orange" ><a hidden>м. Алексеевская</a></label>
	</div>-->
	<div style="position:absolute; left:170px; top:100px;">
		<input id="filial6" type="radio" name="filialy" value="м. Бабушкинская" hidden>
			<label for="filial6"  class="orange" ><a hidden>м. Бабушкинская</a></label>
	</div>
	<div style="position:absolute; left:105px; top:270px; ">
		<input id="filial6a" type="radio" name="filialy" value="male" hidden>
			<label for="filial6a"  class="orange" ><a hidden>м. Новые черёмушки</a></label>
	</div>
	<div style="position:absolute; left:125px; top:220px; ">
		<input id="filial7" type="radio" name="filialy" value="male" hidden>
			<label for="filial7"  class="orange" ><a hidden>м. Октябрьская</a></label>
	</div>
	<!-- серая ветка-->
	<div style="position:absolute; left:120px; top:60px;">
		<input id="filial8" type="radio" name="filialy" value="male" hidden>
			<label for="filial8"  class="grey" ><a hidden>м. Алтуфьево</a></label>
	</div>
	<div style="position:absolute; left:130px; top:270px; ">
		<input id="filial8a" type="radio" name="filialy" value="male" hidden>
			<label for="filial8a"  class="grey" ><a hidden>м. Нахимовский проспект</a></label>
	</div>
	<div style="position:absolute; left:130px; top:160px;">
		<input id="filial8b" type="radio" name="filialy" value="male" hidden>
			<label for="filial8b"  class="grey" ><a hidden>м. Савеловская</a></label>
	</div>
	<!--<div style="position:absolute; left:350px; top:830px;  ">
		<input id="filial" type="radio" name="filialy" value="male" hidden>
			<label for="filial"  class="grey" ><a hidden>м. Пражская</a></label>
	</div>
	<div style="position:absolute; left:370px; top:600px;">
		<input id="filial9" type="radio" name="filialy" value="male" hidden>
			<label for="filial9"  class="grey" ><a hidden>м. Тульская</a></label>
	</div>
	<div style="position:absolute;  left:380px; top:450px;">
		<input id="filial10" type="radio" name="filialy" value="male" hidden>
			<label for="filial10"  class="grey" ><a hidden>м. Цветной бульвар</a></label>
	</div>
	<div style="position:absolute; left:360px; top:780px;">
		<input id="filial11" type="radio" name="filialy" value="male" hidden>
			<label for="filial11"  class="grey" ><a hidden>м. Южная</a></label>
	</div>-->
	<!-- синяя ветка-->
	<!--<div style="position:absolute; left:370px; top:500px; ">
		<input id="filial12" type="radio" name="filialy" value="male" hidden>
			<label for="filial12"  class="blue" ><a hidden>м. Арбатская</a></label>
	</div>
	<div style="position:absolute; left:160px; top:550px; ">
		<input id="filial13" type="radio" name="filialy" value="male" hidden>
			<label for="filial13"  class="aqua" ><a hidden>м. Кунцевская</a></label>
	</div>
	<div style="position:absolute;  left:40px; top:290px;">
		<input id="filial14" type="radio" name="filialy" value="male" hidden>
			<label for="filial14"  class="cadetblue" ><a hidden>м. Митино</a></label>
	</div>-->
	<div style="position:absolute; left:30px; top:195px;">
		<input id="filial15" type="radio" name="filialy" value="male" hidden>
			<label for="filial15"  class="aqua" ><a hidden>м. Молодёжная</a></label>
	</div>
	<!--<div style="position:absolute; left:190px; top:530px; ">
		<input id="filial16" type="radio" name="filialy" value="male" hidden>
			<label for="filial16"  class="aqua" ><a hidden>м. Пионерская</a></label>
	</div>
	<div style="position:absolute; left:620px; top:370px; ">
		<input id="filial17" type="radio" name="filialy" value="male" hidden>
			<label for="filial17"  class="blue" ><a hidden>м. Щёлковская</a></label>
	</div>-->
	<div style="position:absolute; left:180px; top:180px;">
		<input id="filial17a" type="radio" name="filialy" value="male" hidden>
			<label for="filial17a"  class="blue" ><a hidden>м. Электрозаводская</a></label>
	</div>
	<!-- фиолетовая ветка-->
	<div style="position:absolute; left:105px; top:170px;">
		<input id="filial18" type="radio" name="filialy" value="male" hidden>
			<label for="filial18"  class="violet" ><a hidden>м. Беговая</a></label>
	</div>
	<!--<div style="position:absolute; left:560px; top:590px;">
		<input id="filial19" type="radio" name="filialy" value="male" hidden>
			<label for="filial19"  class="violet" ><a hidden>м. Кузьминки</a></label>
	</div>-->
	<div style="position:absolute;  left:75px; top:165px;">
		<input id="filial20" type="radio" name="filialy" value="male" hidden>
			<label for="filial20"  class="violet" ><a hidden>м. Октябрьское поле</a></label>
	</div>
	<div style="position:absolute; left:160px; top:210px;">
		<input id="filial21" type="radio" name="filialy" value="male" hidden>
			<label for="filial21"  class="violet" ><a hidden>м. Таганская</a></label>
	</div>
	<!--<div style="position:absolute; left:160px; top:370px;">
		<input id="filial22" type="radio" name="filialy" value="male" hidden>
			<label for="filial22"  class="violet" ><a hidden>м. Щукинская</a></label>
	</div>-->
	<!-- светло-зелёная ветка-->
	<!--<div style="position:absolute; left:540px; top:700px;">
		<input id="filial23" type="radio" name="filialy" value="male" hidden>
			<label for="filial23"  class="lightgreen" ><a hidden>м. Братиславская</a></label>
	</div>
	<div style="position:absolute; left:335px; top:410px; ">
		<input id="filial24" type="radio" name="filialy" value="male" hidden>
			<label for="filial24"  class="grey" ><a hidden>м. Марьина роща</a></label>
	</div>-->
	<!-- зелёная ветка-->
	<div style="position:absolute; left:85px; top:140px;">
		<input id="filial25" type="radio" name="filialy" value="male" hidden>
			<label for="filial25"  class="green" ><a hidden>м. Водный стадион</a></label>
	</div>
	<div style="position:absolute;  left:115px; top:150px;">
		<input id="filial26" type="radio" name="filialy" value="male" hidden>
			<label for="filial26"  class="green" ><a hidden>м. Динамо</a></label>
	</div>
	<!--<div style="position:absolute; left:410px; top:730px;">
		<input id="filial27" type="radio" name="filialy" value="male" hidden>
			<label for="filial27"  class="green" ><a hidden>м. Каширская</a></label>
	</div>-->
	
	
</div>


















