<?
include("../config.php");
$startid = 0;
if($_GET['start'] != test){
$startid = $_GET['start'];
$online1 = mysql_query("SELECT * FROM `chat_online` WHERE `id`='$data->id'");
$online = mysql_fetch_object($online1);
if($online->id != $data->id){
mysql_query("INSERT INTO `chat_online`(person,id) values('$data->login','$data->id')");
}
$chatlog1 = mysql_query("SELECT * FROM `chatlog` ORDER BY `id`");
while($chatlog = mysql_fetch_object($chatlog1)){
$text = "{$chatlog->message}";
if(isset($message)){$oldtext = "{$message}<br>";}
$newtext = wordwrap($text, 60, "<br><font color=\"#FFFFFF\">&lt;{$chatlog->afzender}&gt;</font> ", true);
$newtext = "<font color=\"blue\">&lt;{$chatlog->afzender}&gt;</font> {$newtext}";
$message = "{$oldtext}$newtext";
	$message = str_replace(":|:","<img src=images/smiles/icon_neutral.gif>", $message);
	$message = str_replace(":mrgreen:","<img src=images/smiles/icon_mrgreen.gif>", $message);
	$message = str_replace(":D","<img src=images/smiles/icon_biggrin.gif>", $message);
	$message = str_replace(":arrow:","<img src=images/smiles/icon_arrow.gif>", $message);
	$message = str_replace(":wink:","<img src=images/smiles/icon_wink.gif>", $message);
	$message = str_replace(":roll:","<img src=images/smiles/icon_rolleyes.gif>", $message);
	$message = str_replace(":twisted:","<img src=images/smiles/icon_twisted.gif>", $message);
	$message = str_replace(":evil:","<img src=images/smiles/icon_evil.gif>", $message);
    $message = str_replace(":lol:","<img src=images/smiles/icon_lol.gif>", $message);
    $message = str_replace("8)","<img src=images/smiles/icon_cool.gif>", $message);
    $message = str_replace(":?","<img src=images/smiles/icon_confused.gif>", $message);
    $message = str_replace(":S","<img src=images/smiles/icon_confused.gif>", $message);
    $message = str_replace(":idea:","<img src=images/smiles/icon_idea.gif>", $message);
    $message = str_replace(":shock:","<img src=images/smiles/icon_eek.gif>", $message);
    $message = str_replace(":!:","<img src=images/smiles/icon_exclaim.gif>", $message);
    $message = str_replace(":cry:","<img src=images/smiles/icon_cry.gif>", $message);
    $message = str_replace(":oops:","<img src=images/smiles/icon_redface.gif>", $message);
    $message = str_replace(":P","<img src=images/smiles/icon_razz.gif>", $message);
    $message = str_replace(":x","<img src=images/smiles/icon_mad.gif>", $message);
    $message = str_replace(":o","<img src=images/smiles/icon_surprised.gif>", $message);
    $message = str_replace(":(","<img src=images/smiles/icon_sad.gif>", $message);
    $message = str_replace(":)","<img src=images/smiles/icon_smile.gif>", $message);
}?>
document.getElementById('chat_lines').innerHTML = '<?echo$message;?>';<?}?>
 	//Stel de start id in
	start_id = '<?echo$startid;?>';

	//Zet de online leden goed
	document.getElementById('chat_online').innerHTML = '<?
$online1 = mysql_query("SELECT * FROM `chat_online`");
while($online = mysql_fetch_object($online1)){
$user1 = mysql_query("SELECT * FROM `users` WHERE `login`='$online->person'");
$user = mysql_fetch_object($user1);
if($user->admin > 0){$login = "<b style=\"color:red\">$user->login</b>";}
if($user->moderator > 0){$login = "<b style=\"color:#FF6600\">$user->login</b>";}
if($user->moderator < 1 && $user->admin < 1){$login = "<b style=\"color:black\">$user->login</b>";}
if($user->vipdays > 0){$login = "{$login}<img src=\"images/star.gif\" border=\"0\" width=\"10\" height=\"10\">";}
?><a href="#" onclick="chat_openProfile(\'<?echo$user->id;?>\'); return false"><?echo$login;?></a><?if($data->moderator > 0 || $data->admin > 0){?><a href="#" onclick="chat_handleKick(\'<?echo$user->id;?>\'); return false"><img src="images/chat/kick.gif" border=\"0\"></a><?}?><br><?}?>';

<?
if($data->kicked > 0){?>
document.location.href = 'login.php?x=logout';
alert('Je bent gekickt uit de chat.\nAls dit vaker gebeurt kan er een chatban worden opgelegt!!');
<?
mysql_query("DELETE FROM `chat_online` WHERE `id`='$user->id'");
mysql_query("UPDATE `users` SET `kicked`='0' WHERE `id`='$data->id'");
}?>

//Verander de statusteksten (niet zichtbaar)
document.getElementById('chat_status').innerHTML = 'loaded';
document.getElementById('chat_load').innerHTML = '0.0319';
