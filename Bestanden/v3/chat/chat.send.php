<?
include("../config.php");
if(strlen($_GET['text']) > 2000){?>
alert("Je invoer mag maximaal 60 tekens bevatten.");
<?}else{

		$_GET['text'] = htmlspecialchars($_GET['text']);
		$_GET['text'] = addslashes($_GET['text']);
        	$_GET['text']		= nl2br($_GET['text']);

?>
document.getElementById('chat_status').innerHTML = 'saved';
<?
$chatlog = "{$data->chatlog}<font color=\"blue\">&lt;$data->login&gt;</font> {$_GET['text']}<br>";
$online1 = mysql_query("SELECT * FROM `chat_online`");
if($_GET['text'] != "[#status#]enter_channel" && $_GET['text'] != "[#status#]left_channel" && $_GET['text'] != ""){
$user1 = mysql_query("SELECT * FROM `users` WHERE `login`='$online->person'");
$user = mysql_fetch_object($user1);
mysql_query("INSERT INTO `chatlog` (afzender,message) values('$data->login','{$_GET['text']}')");
}
$chatlog1 = mysql_query("SELECT * FROM `chatlog` ORDER BY `id`");
}
?>
