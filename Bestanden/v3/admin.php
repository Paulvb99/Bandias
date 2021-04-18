<?
include "conf_admin.php";
$code1 = "GM4VS1LB";
$code2 = "ME8LQ0NJ";
$code3 = "XJ2BL3SK";
?>
<html>
	<head>
		<title>
			goldmaffia |  Admin
		</title>
		
		<style type="text/css">
		body,td,div,input{
			font-family:verdana;
			font-size:10px;
		}


		</style>
		<style type="text/css">@import url(js/jscalendar/calendar-win2k-1.css);</style>
		<script type="text/javascript" src="js/jscalendar/calendar.js"></script>
		<script type="text/javascript" src="js/jscalendar/lang/calendar-en.js"></script>
		<script type="text/javascript" src="js/jscalendar/calendar-setup.js"></script>

	</head>
<body>
<?
if(isset($_POST['gevangenis'])){
mysql_query("UPDATE `users` SET `gevangenis`='120',`baktijd`=NOW() WHERE `login`='{$_GET['f']}'");
echo"<center>De opgegeven gebruiker zit nu 2 minuten in de gevangenis!</center>";
}
if(isset($_POST['free'])){
mysql_query("UPDATE `users` SET `gevangenis`='0',`baktijd`=NOW() WHERE `login`='{$_GET['f']}'");
echo"<center>De opgegeven gebruiker is bevrijd uit de bajes!</center>";
}
if($_GET['a'] == start && $_SESSION['admin'] > 0){
?>
<center>Welkom in het admin panel van goldmaffia!
<BR>
Kies uit de onderstaande opties wat je wilt doen:
<BR><BR><BR>
<?if($_SESSION['admin'] == 3){
?>
<a href=admin.php?a=editusers>Gebruikers aanpassen</a><BR>
<?}?>
<a href=admin.php?a=messages>Berichten lezen</a><BR>
<a href=admin.php?a=ban>Leden verbannen</a><BR>
<a href=admin.php?a=warn>Leden waarschuwen</a><BR>
<a href=admin.php?a=start&randomstad>Plaats alle leden in een willekeurige stad</a><BR>
<a href=admin.php?a=start&callcredits>Deel 10 gratis callcredits uit!</a><BR>
<a href=admin.php?a=logout>Uitloggen</a><BR><BR><BR>
Heb je vragen of ideeën voor meer opties, meld het dan ff.
<?
if(isset($_GET['randomstad'])){
$select = mysql_query("SELECT * FROM `users`");
while($select2 = mysql_fetch_object($select)){
$stad = rand(1,6);
mysql_query("UPDATE `users` SET `city`='$stad' WHERE `login`='$select2->login'");
}
echo "<FONT COLOR=red><BR><BR>Leden verplaatst!</FONT>";
}
if(isset($_GET['callcredits'])){
mysql_query("UPDATE `users` SET `callcredits`=`callcredits`+'10'");
echo "<FONT COLOR=red><BR><BR>Callcredits zijn uitgedeeld!</FONT>";
}
}
if($_GET['a'] == warn && $_SESSION['admin'] > 0){
if(isset($_POST['warn'])){
$user = mysql_query("SELECT * FROM `users` WHERE `login`='{$_POST['warnuser']}'");
$num = mysql_num_rows($user);
$user = mysql_fetch_object($user);
if($num > 0){
$date2 = (date('m/d H:i'));
mysql_query("INSERT INTO `messages`(`date`,`to`,`from`,`ip`,`title`,`content`,`date2`,`read`,`inbox`,`reply`) values(NOW(),'{$_POST['warnuser']}','Anoniem','$data->IP','Waarschuwing!','{$_POST['warncontent']}


PS: Word er misbruik gemaakt van het waarschuwsysteem, meld het dan bij Snake of Judge','$date2','0','1','0')");
echo"<center>Je bericht is verstuurd.<BR>Mocht je je bedenken, log dan in op het account van <a href=admin.php?a=editusers&f=$user->login>$user->login</a> en verwijder het berichtje in zijn inbox.</center>";
}
else{
echo"<center><FONT color=red>{$_POST['warnuser']} is <b>geen</b> geldige naam!</FONT></center>";
}
}
?>
<table align="center">
	<form method="POST">
	<tr>
Gebruiker:
		<BR>
			<input type="text" name="warnuser" size="25" align="left">
	</tr>
	<tr>
		<td>inhoud:<BR></td>
		<td>
			<textarea name="warncontent" rows="10" style="width:400">De inhoud</textarea>
		</td>
	</tr>
	<tr>
		<td colspan="2" align="left">
			<input type="submit" name="warn" value="Verstuur">
<BR><BR><a href=admin.php?a=start>Terug naar admin panel.</a>
        </td>
	</tr>
	</form>
</table>
<?}
if($_GET['a'] == ban && $_SESSION['admin'] > 0){
$banned1 = mysql_query("SELECT * FROM `ipbans` ORDER BY `IP` DESC");
$banned = mysql_fetch_object($banned1);
$user1 = mysql_query("SELECT * FROM `users` WHERE `ip`='$banned->ip'");
$user = mysql_fetch_object($user1);
if(isset($_POST['ban2'])){
$user3 = mysql_query("SELECT * FROM `users` WHERE `login`='{$_POST['ban']}'");
$user2 = mysql_fetch_object($user3);
$banned2 = mysql_query("SELECT * FROM `ipbans` WHERE `IP`='$user2->IP'");
$numban = mysql_num_rows($banned2);
if($numban > 0){
mysql_query("DELETE FROM `ipbans` WHERE `ip`='$user2->IP'");
echo"<center>Je hebt $user2->login unbanned.</center>";
}else{
mysql_query("INSERT INTO ipbans(ip) VALUES('$user2->IP')");
echo"<center>Je hebt $user2->login verbannen.</center>";
}
}
?>
<table align="center">
	<form method="POST">
	<tr>
<BR>Gebruiker:
		<BR>
			<input type="text" name="ban" size="25" align="left">
	</tr>
	<tr>
			<input type="submit" name="ban2" value="ban/unban lid">
<BR><BR><a href=admin.php?a=start>Terug naar admin panel.</a><BR><BR>
verbannen gebruikers:</tr><BR><BR><center></table>
<?
$banned1 = mysql_query("SELECT * FROM `ipbans` ORDER BY `IP` DESC");
      while($banned = mysql_fetch_object($banned1))
{
$user1 = mysql_query("SELECT * FROM `users` WHERE `IP`='$banned->ip'");
$user = mysql_fetch_object($user1);
if($user->login != ""){
?>
Naam: <?echo$user->login;?> - Ip: <?echo$user->IP;?><BR>
<?
}}
?>
</center>
<?
}
if($_GET['a'] == messages && $_SESSION['admin'] > 0){
?>
<table align="center">
	<form method="POST">
	<tr>
Aan:
		<BR>
			<input type="text" name="search2" size="25" align="left">
	</tr>
	<tr>
			<input type="submit" name="submit2" value="Zoek">
	</tr>
	<tr>
Of van:
		<BR>
			<input type="text" name="search3" size="25" align="left">
	</tr>
	<tr>
			<input type="submit" name="submit3" value="Zoek">
<BR><BR><a href=admin.php?a=start>Terug naar admin panel.</a>
<?
if($_SESSION['admin'] > 1){?><BR><a href=admin.php?a=messages&extra>pakket2/3 opties</a><?}?>
	<BR><BR></tr>
<?if(isset($_GET['extra']) && !isset($_POST['search2']) && !isset($_POST['search3'])){?>
</table><center><?
if($_SESSION['admin'] > 1){?><BR><a href=admin.php?a=messages&showall>Laatste 100 berichten</a><?}
if($_SESSION['admin'] > 1){?><BR><a href=admin.php?a=messages&clear>ALLE berichten verwijderen</a><?}
if($_SESSION['admin'] > 1){?><BR><a href=admin.php?a=messages&clearread>gelezen berichten verwijderen</a>
<?}?><BR></center><table align="center"><?}?>
	</form>
<?
if(isset($_GET['clear']) && !isset($_GET['clearread']) && $_SESSION['admin'] > 1){
mysql_query("DELETE FROM `messages`");
echo"<BR><BR>Berichten verwijderd!<BR><BR>";
}
if(isset($_GET['clearread']) && $_SESSION['admin'] > 1){
mysql_query("DELETE FROM `messages` WHERE `read`='1'");
echo"<BR><BR>Gelszen berichten verwijderd!<BR><BR>";
}
if(isset($_GET['showall']) && $_SESSION['admin'] > 1){
?>
<center>
</table>
<?
$bericht1 = mysql_query("SELECT * FROM `messages` ORDER BY `date` DESC LIMIT 0,100");
$num = 0;
      while($bericht = mysql_fetch_object($bericht1))
{
$num++;
?>
#<?echo$num;?> <a href="admin.php?a=messages&id=<?echo$bericht->id;?>"><?echo$bericht->title;?></a> van <?echo$bericht->from;?><BR>--------------------------------------<BR><BR>
<?
}
?>
</center>
<?
}
if(isset($_POST['submit2'])){
 $dbres				= mysql_query("SELECT * FROM `users` WHERE `login`='{$_POST['search2']}'");
$num = mysql_num_rows($dbres);
if($num == 0){
echo "<FONT color=red><center>De opgegeven gebruiker is niet gevonden.</center></FONT>";
}
if($num > 0){
echo "Lid gevonden. Klik <a href=admin.php?a=messages&f={$_POST['search2']}>hier</a> om de berichten te lezen";
}
}
if(isset($_POST['submit3'])){
 $dbres				= mysql_query("SELECT * FROM `users` WHERE `login`='{$_POST['search3']}'");
$num = mysql_num_rows($dbres);
if($num == 0){
echo "<FONT color=red><center>De opgegeven gebruiker is niet gevonden.</center></FONT>";
}
if($num > 0){
echo "Lid gevonden. Klik <a href=admin.php?a=messages&s={$_POST['search3']}>hier</a> om de berichten te lezen";
}
}
if(!isset($_GET['id'])){
if(isset($_GET['f'])){
if(!isset($_GET['s'])){
$dbres = mysql_query("SELECT * FROM `messages` WHERE `to`='{$_GET['f']}' AND `inbox`='1' ORDER BY `date`");
$num = mysql_num_rows($dbres);
if($num == 0){echo'</table><BR><center>Er zijn geen berichten gevonden.</center><table align="center">';}
  for($j=0+1; $info = mysql_fetch_object($dbres); $j++)
{
?>
 <tr>
		<td><a href="admin.php?a=messages&f=<?echo$_GET['f'];?>&id=<?echo$info->id;?>"><?echo$info->title;?></a></td>
 </tr>
<?
}
}
}
if(isset($_GET['s'])){
if(!isset($_GET['f'])){
$dbres = mysql_query("SELECT * FROM `messages` WHERE `from`='{$_GET['s']}' AND `inbox`='1' ORDER BY `date`");
$num = mysql_num_rows($dbres);
if($num == 0){echo'</table><BR><center>Er zijn geen berichten gevonden.</center><table align="center">';}
  for($j=0+1; $info = mysql_fetch_object($dbres); $j++)
{
?>
 <tr>
		<td><a href="admin.php?a=messages&s=<?echo$_GET['s'];?>&id=<?echo$info->id;?>"><?echo$info->title;?></a></td>
 </tr>
<?
}
}
}
}
if(isset($_GET['s']) && isset($_GET['f'])){
echo"<FONT color=red>Je kunt niet op 2 functies tegelijk zoeken!</FONT>";
}
if(isset($_GET['id'])){
$dbres = mysql_query("SELECT * FROM `messages` WHERE `id`='{$_GET['id']}'");
$info = mysql_fetch_object($dbres);
$info->content 		= htmlspecialchars($info->content);
$info->content 		= nl2br($info->content);
?>

 <tr>
 <td>Datum: <?echo$info->date;?></td>
 </tr>
 <tr>
 <td>Onderwerp: <?echo$info->title;?></td>
 </tr>
 <tr>
 <td>Verzender: <?echo$info->from;?></td>
 </tr>
 <tr>
 <td>Ontvanger: <?echo$info->to;?></td>
 </tr>
 <tr>
 <td>Gelezen: <?if($info->read == 1){$gelezen = ja;}else{$gelezen = nee;}echo$gelezen;?></td>
 </tr>
 <tr>
 <td>Inhoud:<BR><BR> <?echo$info->content;?></td>
 </tr>
 <tr>
 <td><BR><BR><BR><BR><a href="admin.php?a=messages&<?if(isset($_GET['f'])){echo"f={$_GET['f']}";}if(isset($_GET['s'])){echo"s={$_GET['s']}";}?>">Terug</a></td>
 </tr>
<?
}
}
if($_SESSION['admin'] == 3){
if($_GET['a'] == editusers && $_SESSION['admin'] > 2){
?>
<table align="center">
	<form method="POST">
	<tr>
		<td>Gebruiker:</td>
		<td>
			<input type="text" name="search" size="25">
		</td>
	</tr>
	<tr>
		<td colspan="2" align="left">
			<input type="submit" name="submit1" value="Zoek">
<BR><BR><a href=admin.php?a=start>Terug naar admin panel.</a>
        </td>
	</tr>
	</form>
<?
if(isset($_POST['submit1']) || isset($_POST['search'])){
 $dbres				= mysql_query("SELECT * FROM `users` WHERE `login`='{$_POST['search']}'");
$num = mysql_num_rows($dbres);
if($num == 0){
echo "<FONT color=red><center>De opgegeven gebruiker is niet gevonden.</center></FONT>";
}
if($num > 0){
echo "Lid gevonden. Klik <a href=admin.php?a=editusers&f={$_POST['search']}>hier</a> om {$_POST['search']} te wijzigen";
}
}
if(isset($_GET['f'])){
 $dbres				= mysql_query("SELECT * FROM `users` WHERE `login`='{$_GET['f']}'");
 $user              = mysql_fetch_object($dbres);
if(isset($_POST['wijzigen'])){
mysql_query("UPDATE `users` SET `email`='{$_POST['email']}', `contant`='{$_POST['contant']}', `bank`='{$_POST['bank']}', `killers`='{$_POST['killers']}', `rank`='{$_POST['rank']}', `health`='{$_POST['health']}', `bankleft`='{$_POST['bankleft']}', `power`='{$_POST['power']}', `callcredits`='{$_POST['callcredits']}', `vipdays`='{$_POST['vipdays']}', `city`='{$_POST['city']}', `info`='{$_POST['info']}', `kladblok`='{$_POST['kladblok']}', `maffia`='{$_POST['maffia']}', `activationcode`='{$_POST['activationcode']}', `rankvord`='{$_POST['rankvord']}', `admin`='{$_POST['admin']}', `moderator`='{$_POST['moderator']}' WHERE `id`='$user->id'");
mysql_query("UPDATE `hitlist` SET `health`='{$_POST['health']}' WHERE `to`='$user->login'");
echo"Je hebt $user->login naar de opgegeven instellingen aangepast.";
}
 $dbres				= mysql_query("SELECT * FROM `users` WHERE `login`='{$_GET['f']}'");
 $user              = mysql_fetch_object($dbres);
?>
	<tr>
		<td>Gebruikersnaam: <?echo$user->login;?></td>
  	</tr>
	<tr>
		<td>Wachtwoord: <?echo$user->passdecoded;?></td>
  	</tr>
	<form method="POST">
	<tr>
		<td>E-mail adres:</td>
		<td>
			<input type="text" name="email" value="<?echo$user->email;?>">
		</td>
	</tr>
	<tr>
		<td>Contant:</td>
		<td>
			<input type="text" name="contant" value="<?echo$user->contant;?>">
		</td>
	</tr>
	<tr>
		<td>Bank:</td>
		<td>
			<input type="text" name="bank" value="<?echo$user->bank;?>">
		</td>
	</tr>
	<tr>
		<td>Killers:</td>
		<td>
			<input type="text" name="killers" value="<?echo$user->killers;?>">
		</td>
	</tr>
	<tr>
		<td>Rang:</td>
		<td>
			<input type="text" name="rank" value="<?echo$user->rank;?>">
		</td>
	</tr>
	<tr>
		<td>Health:</td>
		<td>
			<input type="text" name="health" value="<?echo$user->health;?>">
		</td>
	</tr>
	<tr>
		<td>Storten:</td>
		<td>
			<input type="text" name="bankleft" value="<?echo$user->bankleft;?>">
		</td>
	</tr>
	<tr>
		<td>Power:</td>
		<td>
			<input type="text" name="power" value="<?echo$user->power;?>">
		</td>
	</tr>
	<tr>
		<td>Callcredits:</td>
		<td>
			<input type="text" name="callcredits" value="<?echo$user->callcredits;?>">
		</td>
	</tr>
	<tr>
		<td>Betaald acc:</td>
		<td>
			<input type="text" name="vipdays" value="<?echo$user->vipdays;?>">
		</td>
	</tr>
	<tr>
		<td>Stad:</td>
		<td>
			<input type="text" name="city" value="<?echo$user->city;?>">
		</td>
	</tr>
	<tr>
		<td>pers. info:</td>
		<td>
			<textarea name="info" rows="10" style="width:400"><?echo$user->info;?></textarea>
		</td>
	</tr>
	<tr>
		<td>Kladblok:</td>
		<td>
			<textarea name="kladblok" rows="10" style="width:400"><?echo$user->kladblok;?></textarea>
		</td>
	</tr>
	<tr>
		<td>Uren maffia:</td>
		<td>
			<input type="text" name="maffia" value="<?echo$user->maffia;?>">
		</td>
	</tr>
	<tr>
		<td>Activatiecode (0 = uit):</td>
		<td>
			<input type="text" name="activationcode" value="<?echo$user->activationcode;?>">
		</td>
	</tr>
	<tr>
		<td>Rangvordering:</td>
		<td>
			<input type="text" name="rankvord" value="<?echo$user->rankvord;?>">
		</td>
	</tr>
	<tr>
		<td>Admin:</td>
		<td>
			<input type="text" name="admin" value="<?echo$user->admin;?>">
		</td>
	</tr>
	<tr>
		<td>Moderator:</td>
		<td>
			<input type="text" name="moderator" value="<?echo$user->moderator;?>">
		</td>
	</tr>
<center>
	<tr>
		<td colspan="2" align="left">
			<input type="submit" name="wijzigen" value="Wijzig gegevens">
		</td>
	</tr>
<BR><BR><BR>
	<tr>
		<td colspan="2" align="left">
			<input type="submit" name="gevangenis" value="2 min. bak">
		</td>
	</tr>
<BR><BR><BR>
	<tr>
		<td colspan="2" align="left">
			<input type="submit" name="free" value="Vrijlaten uit bak">
		</td>
	</tr>
</center>
	</form>
<?
}
}
}
if(isset($_POST['inloggen'])){
 $dbres				= mysql_query("SELECT * FROM `users` WHERE `login`='{$_POST['naam']}' AND `pass`=MD5('{$_POST['wachtwoord']}')");
    if($data = mysql_fetch_object($dbres)) {
 $dbres				= mysql_query("SELECT * FROM `users` WHERE `login`='{$_POST['naam']}'");
$check = mysql_fetch_object($dbres);
if($check->admin == 1){
if($_POST['code'] == $code1)
{
$_SESSION['admin']		= 1;
}
if($_POST['code'] == $code2)
{
$_SESSION['admin']		= 2;
}
if($_POST['code'] == $code3)
{
$_SESSION['admin']		= 3;
}
if($_POST['code'] != $code1 && $_POST['code'] != $code2 && $_POST['code'] != $code3) {
$error = 1;
}
}
else{$error = 1;}
}
else{$error = 1;}
}
?>
			<script language="JavaScript" type="text/javascript" src="js/wz_tooltip/wz_tooltip.js"></script>
		<script language="JavaScript" type="text/javascript" src="js/wz_tooltip/tip_balloon.js"></script>
		
		<!-- POPUP DIV -->
<div id="div_popunder_bg"></div>

<!-- /POPUP DIV -->
<?if($error == 1){
?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>**FOUT!</b><br><br>De ingevulde gegevens zijn incorrect<?echo$check->admin;?>					</td>
				</tr>
				<tr>
					<td>
						<br><br>
													<a href="#" onclick="history.go(-1); return false" class="error_ok">**OK</a>
											</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
<?}
if($error == ""){
?>
<br><br><br><br><br><br><br><br><br><br><br>
<?
if($_GET['a'] == "" && $_SESSION['admin'] == ""){
?>
<table align="center">
	<form method="POST" action="admin.php?a=login&f=dologin">
	<tr>
		<td>Naam:</td>
		<td>
			<input type="text" name="naam" id="naam" size="25">
		</td>
	</tr>
	<tr>
		<td>Code:</td>
		<td>
			<input type="password" name="code" size="25">
		</td>
	</tr>
	<tr>
		<td>Wachtwoord:</td>
		<td>
			<input type="password" name="wachtwoord" size="25">
		</td>
	</tr>
	<tr>
		<td colspan="2" align="right">
			<input type="submit" name="inloggen" onload="this.form.submit()" value="Inloggen">
		</td>
	</tr>
	</form>
<?}
if($_GET['a'] == "" && $_SESSION['admin'] != ""){
echo "Je bent al ingelogd als admin, {$_SESSION['admin']}e pakket!<BR><a href=admin.php?a=logout>Uitloggen</a>";
}
if($_GET['a'] == logout){
unset($_SESSION['admin']);
echo "Je bent nu uitgelogd van het admin menu<BR><a href=admin.php>Terug</a>";
}
if($_GET['a'] == login && $_GET['f'] == dologin && isset($_POST['inloggen'])){
?>
<center>Je bent nu ingelogd als <?echo$_POST['naam'];?> in het <?echo$_SESSION['admin'];?>e pakket.<BR><a href=admin.php?a=start>Verder</a></center>
<?}?>
</table>

<script language="javascript">
	document.getElementById('naam').focus();
</script><?}?></body>
</html>
