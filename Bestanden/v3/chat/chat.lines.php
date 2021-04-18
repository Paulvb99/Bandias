<?
include("../config.php");
$chatlog1 = mysql_query("SELECT * FROM `users` WHERE `id`='$data->id'");
$chatlog = mysql_fetch_object($chatlog1);
if($_GET['start'] > 0){
?>
document.getElementById('chat_lines').innerHTML = document.getElementById('chat_lines').innerHTML + '<?echo$chatlog->chatlog;?>';
<?}?>
	start_id = '<?echo time() ;?>';
		document.getElementById('chat_status').innerHTML = 'loaded';
	document.getElementById('chat_load').innerHTML = '0.0292';
