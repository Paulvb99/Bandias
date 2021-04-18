<?
$prijs = rand(1,16);
$text = array("","Helaas%21+Je+hebt+geen+prijs+gewonnen%21","Gefeliciteerd%21+Je+hebt+2+dagen+betaald+account+gewonnen","Gefeliciteerd%21+Je+hebt+3+dagen+betaald+account+gewonnen","Je+hebt+20%25+extra+leven+gewonnen","Je+hebt+50%25+extra+leven+gewonnen","Je+hebt+%E2%82%AC2.000+gewonnen%21","Je+hebt+%E2%82%AC5.000+gewonnen%21","Je+hebt+%E2%82%AC10.000+gewonnen%21","Je+hebt+%E2%82%AC50.000+gewonnen%21","Gefeliciteerd%21+Je+hebt+250+power+gewonnen","Gefeliciteerd%21+Je+hebt+500+power+gewonnen","Gefeliciteerd%21+Je+hebt+25+attack+coins+gewonnen","Gefeliciteerd%21+Je+hebt+50+attack+coins+gewonnen","Gefeliciteerd%21+Je+hebt+15+killers+gewonnen","Gefeliciteerd%21+Je+hebt+10+killers+gewonnen","Je+hebt+een+secret+link+cleaner+gewonnen%21");
$text = $text[$prijs];
$updateprice = array("","`id`=`id`","`vipdays`=`vipdays`+'2'","`vipdays`=`vipdays`+'3'","`health`=`health`+'20'","`health`=`health`+'50'","`contant`=`contant`+'2000'","`contant`=`contant`+'5000'","`contant`=`contant`+'10000'","`contant`=`contant`+'50000'","`power`=`power`+'250'","Gefeliciteerd%21+Je+hebt+500+power+gewonnen","Gefeliciteerd%21+Je+hebt+25+attack+coins+gewonnen","Gefeliciteerd%21+Je+hebt+50+attack+coins+gewonnen","Gefeliciteerd%21+Je+hebt+15+killers+gewonnen","Gefeliciteerd%21+Je+hebt+10+killers+gewonnen","Je+hebt+een+secret+link+cleaner+gewonnen%21");
?>
price=<?echo$prijs;?>&winmsg=<?echo$text;?>
<?
include("../../config.php");
	$data2            = mysql_query("SELECT *,UNIX_TIMESTAMP(`draaitijd`) AS `draaitijd`,0 FROM `users` WHERE `login`='$data->login'");
	  $data1            = mysql_fetch_object($data2);
$datijd = $data->draaien;
	if($data1->draaitijd + $datijd < time()){
if($prijs == 2){
mysql_query("UPDATE `users` SET `vipdays`=`vipdays`+'2' WHERE `id`='$data->id'");
}
if($prijs == 3){
mysql_query("UPDATE `users` SET `vipdays`=`vipdays`+'3' WHERE `id`='$data->id'");
}
if($prijs == 4){
$data->health = $data->health+20;
if($data->health > 100){$data->health = 100;}
mysql_query("UPDATE `users` SET `health`='$data->health' WHERE `id`='$data->id'");
}
if($prijs == 5){
$data->health = $data->health+50;
if($data->health > 100){$data->health = 100;}
mysql_query("UPDATE `users` SET `health`='$data->health' WHERE `id`='$data->id'");
}
if($prijs == 6){
mysql_query("UPDATE `users` SET `contant`=`contant`+'2000' WHERE `id`='$data->id'");
}
if($prijs == 7){
mysql_query("UPDATE `users` SET `contant`=`contant`+'5000' WHERE `id`='$data->id'");
}
if($prijs == 8){
mysql_query("UPDATE `users` SET `contant`=`contant`+'10000' WHERE `id`='$data->id'");
}
if($prijs == 9){
mysql_query("UPDATE `users` SET `contant`=`contant`+'50000' WHERE `id`='$data->id'");
}
if($prijs == 10){
mysql_query("UPDATE `users` SET `power`=`power`+'250' WHERE `id`='$data->id'");
mysql_query("UPDATE `families` SET `power`=`power`+'250' WHERE `naam`='$data->familie'");
}
if($prijs == 11){
mysql_query("UPDATE `users` SET `power`=`power`+'500' WHERE `id`='$data->id'");
mysql_query("UPDATE `families` SET `power`=`power`+'500' WHERE `naam`='$data->familie'");
}
if($prijs == 12){
mysql_query("UPDATE `users` SET `kogels`=`kogels`+'25' WHERE `id`='$data->id'");
}
if($prijs == 13){
mysql_query("UPDATE `users` SET `kogels`=`kogels`+'50' WHERE `id`='$data->id'");
}
if($prijs == 14){
mysql_query("UPDATE `users` SET `killers`=`killers`+'15' WHERE `id`='$data->id'");
}
if($prijs == 15){
mysql_query("UPDATE `users` SET `killers`=`killers`+'10' WHERE `id`='$data->id'");
}
if($prijs == 16){
mysql_query("DELETE FROM `clicks` WHERE `login`='$data->login'");
}
mysql_query("UPDATE `users` SET `draaitijd`=NOW() WHERE `id`='$data->id'");
$_SESSION['mission'] = "Draai een keer aan het geluksrad";
}
?>
