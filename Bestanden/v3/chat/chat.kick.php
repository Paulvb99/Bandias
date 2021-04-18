<?
include("../config.php");
if($data->admin < 1 && $data->moderator < 1){?>
		alert('Je hebt niet de rechten om iemand te kicken');
<?}else{
$user1 = mysql_query("SELECT * FROM `users` WHERE `id`='{$_GET['id']}'");
$user = mysql_fetch_object($user1);
if($user->login != ""){?>
alert('Je hebt <?echo$user->login;?> gekickt uit de chat.\nBlijft hij vervelend doen geef je hem een chat ban!');
<?
mysql_query("UPDATE `users` SET `kicked`='1' WHERE `id`='$user->id'");
}else{?>
alert('Deze gebruiker bestaat niet.\nJe kunt in plaats van deze URL te gebruiken, gewoon op het voetje klikken.');
<?}}?>
