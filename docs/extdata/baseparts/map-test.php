<!--<div id="mapparent" style="position:relative; background:#fff; width: 800px;;">
<style>
#payt3 {display: none;}
[for="payt3"] {
  position: relative;
  display: block;
  width: 20px;
  height: 20px;
  border-radius: 100%;
  background: #ddd linear-gradient(red, yellow);
  box-shadow:
        inset 0 2px 1px rgba(0,0,0,.15),
        0 2px 5px rgba(100,100,200,.1);
  cursor: pointer;
}
[for="payt3"]:after {
  content: "";
  position: absolute;
  left: 40%; top: 40%;
  width: 20%;
  height: 20%;
  border-radius: 100%;
  background: #969696 radial-gradient(40% 35%, magenta, purple 60%);
  box-shadow:
        inset 0 2px 4px 1px rgba(0,0,0,.3),
        0 1px 0 rgba(100,255,100,1),
        inset 0 1px 0 white;
}
[for="payt3"]:before {
  content: "";
  position: absolute;
  top: 8%; right: 8%; bottom: 8%; left: 8%;
  border-radius: 100%;
  background: #eaeaea;
  box-shadow:
        0 3px 5px rgba(0,0,0,.25),
        inset 0 1px 0 rgba(255,255,255,.3),
        inset 0 -5px 5px rgba(100,100,100,.1),
        inset 0 5px 5px rgba(255,255,255,.3);
}
#payt3:checked ~ [for="payt3"]:before {
  background: #e5e5e5 linear-gradient(#90c, #fdfdfd);
}
#payt3:checked ~ [for=".payt4"]:after {
  background: #25d025 radial-gradient(40% 35%, #5aef5a, #25d025 60%);
  box-shadow:
        inset 0 3px 5px 1px rgba(0,0,0,.1),
        0 1px 0 rgba(255,255,255,.4),
        0 0 10px 2px rgba(0, 210, 0, .5);
}



.red-metro {
	height: 20px;
	width:20px;
	border-radius: 100%;
	background: navy linear-gradient(green, yellow);
	cursor: pointer;
	
}


#payt4 {display: none;}
[for="payt4"] {
  position: relative;
  display: block;
  width: 20px;
  height: 20px;
  border-radius: 100%;
  background: #ddd linear-gradient(red, yellow);
  box-shadow:
        inset 0 2px 1px rgba(0,0,0,.15),
        0 2px 5px rgba(100,100,200,.1);
  cursor: pointer;
}
[for="payt4"]:after {
  content: "";
  position: absolute;
  left: 40%; top: 40%;
  width: 20%;
  height: 20%;
  border-radius: 100%;
  background: #969696 radial-gradient(40% 35%, magenta, purple 60%);
  box-shadow:
        inset 0 2px 4px 1px rgba(0,0,0,.3),
        0 1px 0 rgba(100,255,100,1),
        inset 0 1px 0 white;
}
[for="payt4"]:before {
  content: "";
  position: absolute;
  top: 8%; right: 8%; bottom: 8%; left: 8%;
  border-radius: 100%;
  background: #eaeaea;
  box-shadow:
        0 3px 5px rgba(0,0,0,.25),
        inset 0 1px 0 rgba(255,255,255,.3),
        inset 0 -5px 5px rgba(100,100,100,.1),
        inset 0 5px 5px rgba(255,255,255,.3);
}
#payt4:checked ~ [for="payt4"]:before {
  background: #e5e5e5 linear-gradient(#90c, #fdfdfd);
}
#payt4:checked ~ [for=".payt4"]:after {
  background: #25d025 radial-gradient(40% 35%, #5aef5a, #25d025 60%);
  box-shadow:
        inset 0 3px 5px 1px rgba(0,0,0,.1),
        0 1px 0 rgba(255,255,255,.4),
        0 0 10px 2px rgba(0, 210, 0, .5);
}
label>a{
	display:none;
	margin-left: 20px;
	color:navy;
}

label:hover a {
	display:block;
	color: red;
	font-size: 16px;
}

#payt4:checked label a {
	
	display:block;
	color: navy;
	font-size: 16px;
}

.red-metro {
	height: 20px;
	width:20px;
	border-radius: 100%;
	background: navy linear-gradient(green, yellow);
	cursor: pointer;
	
}


</style>


<img src="/extdata/images/map.png" />
<div style="position:absolute; top:190px; left:122px;z-index:2px;"><input type="radio" name="filial" id="payt3"/><label for="payt3"><a><br />123</a></label></div>

<div style="position:absolute; top:290px; left:322px;z-index:2px;"><input type="radio" name="filial" id="payt4"/><label for="payt4"><a><br />234</a></label></div>



</div> -->


<style>

input[type="checkbox"],
input[type="radio"] {
    display:none;            
}
input[type="checkbox"] + label, 
input[type="radio"] + label {
  font: 18px bold;
  color: #444;
  cursor: pointer;
}
input[type="checkbox"] + label::before,
input[type="radio"] + label::before {
    content: "";
    display: inline-block;
	border-radius:100%;
    height: 18px;
    width: 18px;
    margin: 0 5px 0 0;
    background-color: red;
    background-repeat: no-repeat;
}
input[type="radio"] + .blue::before {
    content: "";
    display: inline-block;
	border-radius:100%;
    height: 18px;
    width: 18px;
    margin: 0 5px 0 0;
    background-color: blue;
    background-repeat: no-repeat;
}
input[type="checkbox"] + label::before {
    background-position: -38px -260px;    
}
input[type="radio"] + label::before {
    background-color: red;
}
input[type="checkbox"]:checked + label::before {
    background-position: -114px -260px;
}
input[type="checkbox"]:checked + label::before {
    background-color: blue;
}

input[type="radio"]:checked + .blue::before {
    background-color:navy;
	border: 2px dotted yellow;
}

input[type="radio"]:checked + .red::before {
    background-color:magenta;
}
input[type="checkbox"]:disabled + label::before {
    background-position: -152px -260px;
}
input[type="checkbox"]:checked:disabled + label::before {
    background-position: -171px -260px;
}
input[type="radio"]:disabled + label::before {
    background-position: -144px -279px;
}
input[type="radio"]:checked:disabled + label::before {
    background-position: -162px -279px;
}
label:hover a {
	display:inline;
	color: red;
	font-size: 16px;
}

input[type="radio"]:checked + .blue a{
    display:inline;
	color:blue;
}
input[type="radio"]:checked + .red a{
    display:inline;
	color:magenta;
}
</style>




<div class="radio">
	<input id="male" type="radio" name="gender" value="male" hidden>
	<label for="male"><a hidden>Male</a></label>
	<input id="female" type="radio" name="gender" value="female" hidden>
	<label for="female" class="blue" ><a hidden>Female</a></label>
	<input id="female2" type="radio" name="gender" value="female" hidden>
	<label for="female2" class="red" ><a hidden>Gay</a></label>
	<input id="female3" type="radio" name="gender" value="female" hidden>
	<label for="female3" class="red" ><a hidden>Lesbos</a></label>
</div>










