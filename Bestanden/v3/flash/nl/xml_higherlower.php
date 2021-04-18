<?
include("../../config.php");
	$data2            = mysql_query("SELECT *,UNIX_TIMESTAMP(`hltijd`) AS `hltijd`,0 FROM `users` WHERE `login`='$data->login'");
	  $data1            = mysql_fetch_object($data2);
$datijd = $data->hl;
	if($data1->hltijd + $datijd < time()){
$newnumber = rand(1,100);
$money = 0;
$gameover = "false";
$gamewin = "false";
$gelderbij = array("0","0","250","500","850","1300","1850","2500","3250","4100","5050","6100","7250","8500","9850","12500");
if($data->hlgetal < 1){
$getal = rand(1,100);
mysql_query("UPDATE `users` SET `hlgetal`='$getal' WHERE `id`='$data->id'");
$data->hlgetal = $getal;
}
if($_GET['c'] == higher){
if($data->hlgetal < $newnumber){
$getal = $newnumber;
mysql_query("UPDATE `users` SET `hlgetal`='$getal',`hlronde`=`hlronde`+'1' WHERE `id`='$data->id'");
$data->hlgetal = $getal;
$data->hlronde = $data->hlronde+1;
}
else{
$getal = rand(1,100);
mysql_query("UPDATE `users` SET `hlgetal`='$getal',`hlronde`='1' WHERE `id`='$data->id'");
$gameover = "true";
$_SESSION['mission'] = "Speel een potje Hoger of Lager";
$money = $gelderbij[$data->hlronde];
mysql_query("UPDATE `users` SET `contant`=`contant`+'$money', `hltijd`=NOW() WHERE `id`='$data->id'");
mysql_query("UPDATE `users` SET `hlronde`='1' WHERE `id`='$data->id'");
$data->hlronde = 1;
}}
if($_GET['c'] == lower){
if($data->hlgetal > $newnumber){
$getal = $newnumber;
mysql_query("UPDATE `users` SET `hlgetal`='$getal',`hlronde`=`hlronde`+'1' WHERE `id`='$data->id'");
$data->hlgetal = $getal;
$data->hlronde = $data->hlronde+1;
}
else{
$getal = rand(1,100);
mysql_query("UPDATE `users` SET `hlgetal`='$getal',`hlronde`='1' WHERE `id`='$data->id'");
$gameover = "true";
$_SESSION['mission'] = "Speel een potje Hoger of Lager";
$money = $gelderbij[$data->hlronde];
mysql_query("UPDATE `users` SET `contant`=`contant`+'$money', `hltijd`=NOW() WHERE `id`='$data->id'");
mysql_query("UPDATE `users` SET `hlronde`='1' WHERE `id`='$data->id'");
$data->hlronde = 1;
}}
if($data->hlronde > 14){
$getal = rand(1,100);
mysql_query("UPDATE `users` SET `hlronde`='1', `hltijd`=NOW() WHERE `id`='$data->id'");
$data->hlgetal = $getal;
$data->hlronde = 1;
$gamewin = "true";
}
mysql_query("UPDATE `users` SET `hlronde`='$data->hlronde' WHERE `id`='$data->id'");
}?>
ronde=<?echo$data->hlronde;?>&getal=<?echo$data->hlgetal;?>&price=<?echo$money;?>&gameover=<?echo$gameover;?>&gamewin=<?echo$gamewin;?>&error=<?echo$error;?>&newnumber=<?echo$newnumber;?>
