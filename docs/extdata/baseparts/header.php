<link rel="STYLESHEET" type="text/css" href="/css/pechati.css">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	
	
	<style>
	.my-hint {
            display: inline-block;
            padding: 5px;
            height: 35px;
            position: relative;
            left: -10px;
            width: 195px;
            font-size: 11px;
            line-height: 17px;
            color: #333333;
            text-align: center;
            vertical-align: middle;
            background-color: #faefb6;
            border: 1px solid #CDB7B5;
            border-radius: 20px;
            font-family: Arial;
        }
		#map {
		clear:both;
		width: 945px;
		height: 500px;
		margin-left: -35px;
		margin-right: -100px;
		}
		#map2 {
		clear:both;
		width: 945px;
		height: 500px;
		margin-left: -75px;
		margin-right: -100px;
		}
		#map3 {
		clear:both;
		width: 945px;
		height: 500px;
		margin-left: -75px;
		margin-right: -100px;
		}
		#map4 {
		clear:both;
		width: 945px;
		height: 500px;
		margin-left: -75px;
		margin-right: -100px;
		}
	</style>
	<style>
	#quickzakaz {
		margin-top:10px;
		border: 1px solid #940000;
		border-radius:4px;
		background-color: #92000a;
		color: #fff;
		height:30px;
		width:100%;
		font-size:1.2em;
	}
	#quickzakaz:hover {
		margin-top:10px;
		border: 1px solid #92000a;
		border-radius:4px;
		background-color: #4e1609;
		height:30px;
		width:100%;
		font-size:1.2em;
	}

	</style>
	
	<link rel="STYLESHEET" type="text/css" href="/css/pechati-asgat.css">
	<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
	<!--	  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
		  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>		  -->
	<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>-->
	<script src="/feedback/js/feedback.js"></script>
	<script src="/feedback/js/jquery.arcticmodal.js"></script>
	<script src="/feedback/js/jquery.jgrowl.js"></script>
	<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
	<script src="/extdata/js/skif-carousel.js"></script>

		  
		  
	<script type="text/javascript">
	$(document).ready(function(){
		
  
		
		    
		$("#quickzakaz").click(function(){
			//alert('asdasdasd');
			$('#zakaz-modal').arcticmodal();
			//return false;
		});
	
		$("#thumbnail li a").click(function(){
			$("#large img").hide().attr({"src": $(this).attr("href"), "title": $("> img", this).attr("title")});
			$("#large h2").html($("> img", this).attr("title"));
			return false;
		});
		$("#large>img").load(function(){$("#large>img:hidden").fadeIn("slow")});
		
		
		$("#thumbnail2 li a").click(function(){
		
			$("#large img").hide().attr({"src": $(this).attr("href"), "title": $("> img", this).attr("title")});
			$("#large h2").html($("> img", this).attr("title"));
			return false;
		});
	});
	</script>	  