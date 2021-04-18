<?
include("../../config.php");
if($_GET['money'] < 100 || $_GET['money'] > 1000000 || $_GET['choose'] != rock && $_GET['choose'] != paper && $_GET['choose'] != scissors){$error = "Je hebt geen geldige speelkeuze gemaakt";}else{
$data->contant = number_format($data->contant, 0, '.' , '.');
if($_GET['money'] > $contant){$error = "Je mag niet meer inzetten dan je hebt: %E2%82%AC $data->contant,-";}else{
$win = "false";
$hand = $_GET['choose'];
$random = rand(0,2);
$names = array("rock","paper","scissors");
$handpc = $names[$random];
$reward = $_GET['money'];
if($hand == rock && $handpc == scissors){$win = "true";}
if($hand == paper && $handpc == rock){$win = "true";}
if($hand == scissors && $handpc == paper){$win = "true";}
if($hand == rock && $handpc == rock){$win = "draw";}
if($hand == paper && $handpc == paper){$win = "draw";}
if($hand == scissors && $handpc == scissors){$win = "draw";}
if($win == "true"){$_SESSION['mission'] = "Win met Steen, papier, schaar";mysql_query("UPDATE `users` SET `contant`=`contant`+'$reward' WHERE `id`='$data->id'");}
if($win == "false"){mysql_query("UPDATE `users` SET `contant`=`contant`-'$reward' WHERE `id`='$data->id'");}
}}
?>hand_pc=<?echo$handpc;?>&hand_user=<?echo$hand;?>&win=<?echo$win;?>&reward=<?echo$reward;?>&errormsg=<?echo$error;?>
