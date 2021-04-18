<?php
  // Donated to the 6PP project by Sjoerd Cranen <outis - frietopia.nl>

  // Define lat/long of this Dutch map
  $minb = 50.76;
  $maxb = 53.516666;
  $minl = 3.30;
  $maxl = 7.21; 

  function sqr($x) { return $x*$x; }
 
  // Show the big map by default. Append &size=small for the small map.
  $size=$_REQUEST['size'];
  if ($size == 'small') {
    $image = imagecreatefromgif("kaart-nl-small.gif");
  } else {
    $image = imagecreatefromgif("kaart-nl.gif");
  }
  $w = imagesx($image);
  $h = imagesy($image);
  for ($i = 0; $i < 256; $i++) 
  {
    $red[$i] = imagecolorallocate($image, $i, 0, 0);
  }

  $lat=$_REQUEST['lat'];
  $lon=$_REQUEST['long'];

  $t=1;
  $y = $h-($lat-$minb)/($maxb-$minb)*$h;
  $x = ($lon-$minl)/($maxl-$minl)*$w;
  $d = floor(log($t, 1.8)) + 2;
  $c = ($t - pow(1.8, $d-2))/pow(1.8, $d-2) * 255;
  imagefilledellipse($image, $x, $y, $d, $d, $red[$c]);
  header('Content-type: image/png');
  imagepng($image);
?>