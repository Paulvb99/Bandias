<?
include("../../config.php");
$win = "false";
if($_GET['money'] < 100){$error = "Je hebt te weinig geld ingezet";}else{
if($_GET['money'] > $contant){$error = "Je hebt niet voldoende geld om dit in te zetten";}else{
if($_GET['number'] == ""){$error = "Je hebt geen getal gekozen";}else{
$number = rand(1,10);
if($number == $_GET['number']){$win = "true";}
$money = $_GET['money']*9;
if($win == "false"){
mysql_query("UPDATE `users` SET `contant`=`contant`-'{$_GET['money']}' WHERE `id`='$data->id'");
}if($win == "true"){
$_SESSION['mission'] = "Probeer een keer het getal te raden";
mysql_query("UPDATE `users` SET `contant`=`contant`+'$money' WHERE `id`='$data->id'");
}
}}}?>number=<?echo$number;?>&money=<?echo$money;?>&win=<?echo$win;?>&errormsg=<?echo$error;?>
