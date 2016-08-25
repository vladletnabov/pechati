<div><div style="display:none;"><!--550080641835--></div><noindex>
<div>
<?
$url=$_SERVER['REQUEST_URI'];
$li = "<div style=\"float:left; display:inline;\"><!--LiveInternet counter--><script type=\"text/javascript\"><!--
document.write(\"<a href='http://www.liveinternet.ru/click' \"+
\"target=_blank><img src='http://counter.yadro.ru/hit?t45.1;r\"+
escape(document.referrer)+((typeof(screen)==\"undefined\")?\"\":
\";s\"+screen.width+\"*\"+screen.height+\"*\"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+\";u\"+escape(document.URL)+
\";\"+Math.random()+
\"' alt='' title='LiveInternet' \"+
\"border=0 width=31 height=31><\/a>\")//--></script><!--/LiveInternet--></div>
";


$openstat = "<div style=\"float:left; display:inline;\"><!--Openstat-->
<script type=\"text/javascript\">
var openstat = { counter: 1, image: 89, color: \"828282\", next: openstat, track_links: \"all\" };
(function(d, t, p) {
var j = d.createElement(t); j.async = true; j.type = \"text/javascript\";
j.src = (\"https:\" == p ? \"https:\" : \"http:\") + \"//openstat.net/cnt.js\";
var s = d.getElementsByTagName(t)[0]; s.parentNode.insertBefore(j, s);
})(document, \"script\", document.location.protocol);
</script>
<!--/Openstat--></div>";

$smartlog = "<!--- SmartLog ---><script language=\"javascript\">
i=Math.random();w=screen.width;h=screen.height;
bps=screen.colorDepth;ln=navigator.systemLanguage;
if(navigator.cookieEnabled) cook = \"Y\"; else cook = \"N\";
 document.write('<a href=\"http://www.smartlog.ru/\" target=\"_top\"><img width=1 height=1 src=\"http://www.smartlog.ru/counter/?i='+i+'&cid=999&r='+escape(document.referrer)+'&sid=1193&cook='+cook+'&s='+w+'x'+h+'&pg='+escape(window.location.href)+'\" alt=\"SmartLog.ru - интернет статистика\" border=0></a>')
</script><!--- SmartLog --->";

if (preg_match('/\/uslugi\//',$url)) {
	if (preg_match('/\/uslugi\/index.html/',$url)) { echo $openstat;}
	else {
		if (preg_match('/html/',$url)) {	echo $li;}
		else { echo $openstat; }
	}
}
else {
	if (preg_match('/zakaz.pechati\.ru/', $_SERVER['HTTP_HOST'] )){ echo $openstat;   }
	else { echo $li; }
}
echo $smartlog;
if (preg_match('/\/forms_send.html/',$url)) {
	
	require_once "extdata/baseparts/counters-google-kms.php";
}

?>
	<div id="ramCounterBlock" style="float:left; display:inline;">
	<!-- begin of Top100 code -->

		<img src="http://counter.rambler.ru/top100.cnt?146655" alt="" width="1" height="1" border="0" />

		<!-- end of Top100 code -->
		<!-- begin of Top100 logo -->

		<a href="http://top100.rambler.ru/navi/146655/">
		<img src="http://top100-images.rambler.ru/top100/banner-88x31-rambler-gray2.gif" alt="Rambler's Top100"
		width="88" height="31" border="0" /></a>

		<!-- end of Top100 logo -->
	</div>

	<div style="float:right; display:inline;padding: 10px;">
	<a href="http://stampmaker.pechati.ru/" style="font-size: 10pt; "> Сотрудничество для штемпелеизготовителей</a>
	</div>
</div>
<!-- Yandex.Metrika counter -->
<!--<script src="//mc.yandex.ru/metrika/watch.js" type="text/javascript"></script>
<script type="text/javascript">
try { var yaCounter114010 = new Ya.Metrika({id:114010,
          clickmap:true,
          accurateTrackBounce:true, webvisor:true});}
catch(e) { }
</script>
<noscript><div><img src="//mc.yandex.ru/watch/114010" style="position:absolute; left:-9999px;" alt="" /></div></noscript>-->
	<?php require_once "counter-yandex.php" ?>
<!-- /Yandex.Metrika counter -->
</noindex>
</div>


<?php 
$db = mysql_connect('pechatiru.mysql','pechatiru_sql','pn8vr_jY');
mysql_select_db('pechatiru_pechati', $db);
$ip = $_SERVER['REMOTE_ADDR'];
//echo "$ip $url";
$result = mysql_query ("INSERT INTO ipcounter (ip, url) VALUES ('$ip', '$url')");
/*if ($result == 'true'){
	echo "+";
}
else{
	echo "-";
}*/

?>
