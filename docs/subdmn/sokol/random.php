<?
session_start();
//error_reporting(2047);

    $str = "";
    $length = 0;
    for ($i = 0; $i < 3; $i++) {
        // this numbers refer to numbers of the ascii table (small-caps)
        $str .= chr(rand(48, 57));
    }
    $_SESSION['rand_code'] = $str;


$imgX = 60;
$imgY = 20;
$image = imagecreatetruecolor(60, 20);

$backgr_col = imagecolorallocate($image, 238,239,239);
$border_col = imagecolorallocate($image, 208,208,208);
$text_col = imagecolorallocate($image, 46,60,31);

imagefilledrectangle($image, 0, 0, 60, 20, $backgr_col);
imagerectangle($image, 0, 0, 59, 19, $border_col);


//$font = "VeraSe.ttf"; // it's a Bitstream font check www.gnome.org for more
//$font_size = 10;
//$angle = 0;
//$box = imagettfbbox($font_size, $angle, $font, $_SESSION['rand_code']);
//$x = (int)($imgX - $box[4]) / 2;
//$y = (int)($imgY - $box[5]) / 2;
//imagettftext($image, $font_size, $angle, $x, $y, $text_col, $font, $_SESSION['rand_code']);

imagestring($image, 5, 3, 0, $_SESSION['rand_code'], $text_col);

header("Content-type: image/png");
imagepng($image);
imagedestroy ($image);
?>