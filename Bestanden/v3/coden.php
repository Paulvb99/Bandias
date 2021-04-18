<?
$security = $_GET['security'];
$codee = ereg_replace("gsqwq", "0", $security);
$codee = ereg_replace("ssBjyq", "1", $codee);
$codee = ereg_replace("gHiq", "2", $codee);
$codee = ereg_replace("hWqDfA", "3", $codee);
$codee = ereg_replace("hsqerf", "4", $codee);
$codee = ereg_replace("Hwsawq", "5", $codee);
$codee = ereg_replace("hSXaq", "6", $codee);
$codee = ereg_replace("hgqYt", "7", $codee);
$codee = ereg_replace("hAsqF", "8", $codee);
$codee = ereg_replace("hxqSAw", "9", $codee);

$image = imagecreatefrompng("images/coden.PNG");
$bgColor = imagecolorallocate ($image, 255, 255, 255);
$textColor = imagecolorallocate ($image, 255, 255, 255);
imagestring ($image, 9, 2, 1,  $codee, $textColor);
header('Content-type: images/png');
imagepng($image);
?>
