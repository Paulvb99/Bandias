<?
if($_SESSION['mission'] == ""){
if($_GET['a'] == profile && $_GET['x'] != $data->id){
$missionfixed = "Bezoek een profiel van een andere speler";
}
if($_GET['a'] == click && $_GET['x'] != $data->id){
$missionfixed = "Klik op iemand zijn secret link";
}
if($_GET['a'] == rules){
$missionfixed = "Lees de regels van het spel";
}
if($_GET['a'] == buycredits){
$missionfixed = "Bezoek de callcredit shop";
}
if($data->fbibom == 10){
$missionfixed = "Blaas 10 keer het FBI hoofdkantoor op";
mysql_query("UPDATE `users` SET `fbibom`='999' WHERE `id`='$data->id'");
}
if($data->stationkaarten > 1000){
$missionfixed = "Verkoop minstens 1000 kaartjes via je eigen station";
}
if($data->stationkaarten > 10000){
$missionfixed = "Verkoop minstens 10.000 kaartjes via je vliegveld";
}
}
if(isset($_SESSION['mission'])){
$missionfixed = $_SESSION['mission'];
unset($_SESSION['mission']);
}
$missions = mysql_query("SELECT * FROM `missions` WHERE `title`='$missionfixed'");
$mission = mysql_fetch_object($missions);
if(preg_match("/\b$mission->id\b/i", "$data->missionsfixed")){$missionfixed = "";}else{$erbij = "$data->missionsfixed $mission->id";mysql_query("UPDATE `users` SET `contant`=`contant`+'$mission->geld', `power`=`power`+'$mission->power', `missionsfixed`='$erbij' WHERE `id`='$data->id'");mysql_query("UPDATE `families` SET `power`=`power`+'$mission->power' WHERE `naam`='$data->familie'");}
?>
