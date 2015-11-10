<script src="/extdata/js/skif-carousel.js"></script>


<script>
$(document).ready(function(){
  $('.osn1').skifCarousel({
					//btnNext: '.next',
					//btnPrev: '.prev',
					auto: 5000,
					visible: 3,
					rotateBy: 1,
					speed: 500, // скорость перемотки (в миллисекундах)
				});
  	
  $('.osn2').skifCarousel({
					//btnNext: '.next',
					//btnPrev: '.prev',
					auto: 5000,
					visible: 3,
					rotateBy: 1,
					speed: 500, // скорость перемотки (в миллисекундах)
				});
  	
  $('.osn3').skifCarousel({
					//btnNext: '.next',
					//btnPrev: '.prev',
					auto: 5000,
					visible: 3,
					rotateBy: 1,
					speed: 500, // скорость перемотки (в миллисекундах)
				});
  	
  $('.osn4').skifCarousel({
					//btnNext: '.next',
					//btnPrev: '.prev',
					auto: 5000,
					visible: 3,
					rotateBy: 1,
					speed: 500, // скорость перемотки (в миллисекундах)
				});
  
  $('.osn5').skifCarousel({
					//btnNext: '.next',
					//btnPrev: '.prev',
					auto: 5000,
					visible: 3,
					rotateBy: 1,
					speed: 500, // скорость перемотки (в миллисекундах)
				});
  	
  $('.osn6').skifCarousel({
					//btnNext: '.next',
					//btnPrev: '.prev',
					auto: 5000,
					visible: 3,
					rotateBy: 1,
					speed: 500, // скорость перемотки (в миллисекундах)
				});
  
  $('.osn7').skifCarousel({
					//btnNext: '.next',
					//btnPrev: '.prev',
					auto: 5000,
					visible: 3,
					rotateBy: 1,
					speed: 500, // скорость перемотки (в миллисекундах)
				});
  
  $('.osn8').skifCarousel({
					//btnNext: '.next',
					//btnPrev: '.prev',
					auto: 5000,
					visible: 3,
					rotateBy: 1,
					speed: 500, // скорость перемотки (в миллисекундах)
				});
  
});		
</script>
			



<!-- Yandex.Metrika counter -->
<script src="//mc.yandex.ru/metrika/watch.js" type="text/javascript"></script>
<script type="text/javascript">
try { var yaCounter114010 = new Ya.Metrika({id:114010,
          clickmap:true,
          accurateTrackBounce:true, webvisor:true});}
catch(e) { }
</script>
<noscript><div><img src="//mc.yandex.ru/watch/114010" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<script>
var filial = 'other';
var counter = 'zakaz-';
var quick = 'quick-'
var filialVal = new Object();
filialVal['м. Ѕегова€'] = 'begovaya';
filialVal['м. Ёлектрозаводска€'] = 'electrozavodskaya';
filialVal['м. ћолодЄжна€'] = 'molodejnaya';
filialVal['м. “аганска€'] = 'taganskaya';
filialVal['м. ¬одный стадион'] = 'vodniystadion';
filialVal['м. ќдинцово'] = 'odintsovo';
filialVal['м. „ерЄмушки'] = 'cheremushki';
filialVal['м.  аширска€'] = 'kashirskaya';



function checkFilial(){
	
	filial = 'other';
	counter = 'zakaz-';
	quick = 'quick-';
	
	
						var url = document.location.href;
						url = url.toLowerCase();
						
						url=removeHTTP(url);
						
	
	for (var i=0;i<100;i++){
		var idElement= "adr" + i;
		if (document.getElementById(idElement) != null){
					//alert(idElement);
					if(document.getElementById(idElement).checked) {
						filial = document.getElementById(idElement).value;
						//alert(filial);
						if (filial in filialVal){
							counter = counter + url + filialVal[filial];
						}
						else {
							counter = counter + url + 'other';
						}
						break;
					}
		}
		/*
		}*/
		
	}
	
	if (counter==='zakaz-'){
		counter='zakaz-uslugi-'+filialVal['м. Ёлектрозаводска€'];
	}
	
	//alert(counter);
	yaCounter114010.reachGoal(counter);
	return true;
}

function removeHTTP(url){	
						url = url.replace("http://192.168.1.51/","");
						url = url.replace("http://pechati.ru/","");
						url = url.replace("http://www.pechati.ru/","-");
						
						if (/uslugi/.exec(url)){
							//
							if ((url==='uslugi')||(url==='uslugi/') || (url==='uslugi/index.html')) {
									url='uslugi-';
							} else if((/uslugi/.exec(url))&&(/_/.exec(url))) {
								url = url.replace('uslugi/',"");
								url = url.replace('.html',"");
							}
						}
						else if(/contacts/.exec(url)){
							//							
								url='contact-';
						}else {
							url = url.replace('.html',"");
							url = url.replace('.php',"");
							url = url.replace('/',"-");
						}
						
						return url;
}

function checkContactButton(button){
	yaCounter114010.reachGoal(button);
	return true;
}

</script>