<script src="/extdata/js/skif-carousel.js"></script>



			
			
<!-- Yandex.Metrika informer -->
<!--<a href="https://metrika.yandex.ru/stat/?id=36382940&amp;from=informer"
target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/36382940/3_1_FFFFFFFF_EFEFEFFF_0_pageviews"
style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" onclick="try{Ya.Metrika.informer({i:this,id:36382940,lang:'ru'});return false}catch(e){}" /></a>-->
<!-- /Yandex.Metrika informer -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter36382940 = new Ya.Metrika({
                    id:36382940,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    trackHash:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/36382940" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

			
			
			

<script>
var filial = 'other';
var counter = 'zakaz-';
var quick = 'quick-'
var filialVal = new Object();



function checkFilial(){
	

	return true;
}

function removeHTTP(url){	
						url = url.replace("http://192.168.1.51/","");
						url = url.replace("http://pechati.ru/","");
						url = url.replace("http://zakaz.pechati.ru/","");
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