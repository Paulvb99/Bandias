<?
if(isset($_GET['x'])){
$user1 = mysql_query("SELECT * FROM `users` WHERE `id`='{$_GET['x']}'");
$user = mysql_fetch_object($user1);
$contact1 = mysql_query("SELECT * FROM `contacts` WHERE `owner`='$data->login' AND `person`='$user->login'");
$contact = mysql_num_rows($contact1);
if($contact < 1){
        mysql_query("INSERT INTO `contacts`(`owner`,`person`,`level`) values( '$user->login','$data->login','0')");
}
}
if(isset($_GET['del'])){
$user1 = mysql_query("SELECT * FROM `users` WHERE `id`='{$_GET['del']}'");
$user = mysql_fetch_object($user1);
mysql_query("DELETE FROM `contacts` WHERE `person`='$user->login' AND `owner`='$data->login'");
$delmessage = "<FONT color='red'>Je hebt $user->login van je blacklist verwijderd!</FONT>";
}
if($contact < 1){
if($_GET['x'] > 0){
$error = niks;
?>
					<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup" align="center">
				<tr>
					<td>
						De persoon is op de blacklist geplaatst					</td>
				</tr>
				<tr>
					<td>
						<br><br>
							<a href="index.php?a=message" class="msg_ok">Klik hier indien je niet automatisch verder gaat.</a>
					</td>
				</tr>

<script language="javascript">
	setTimeout("document.location.href='index.php?a=message'",(1000*2));
</script>
		</div>
	</td>
	</tr>

	</table>
	</td>
    </table>
<?
}
}if($error == ""){?>
							<div class="title_bg">
			<div class="title">Blacklist</div>
		</div>
<?
if($contact > 0){
?>
	<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
					<table>
			<tr>
				<td>
					Deze gebruiker staat al in een van jouw lijsten!				</td>
			</tr>
		</table>
			</td></tr></table>
		</div>
<?
}
if($contact < 1){
if($_GET['x'] < 1){
$blacklists1				= mysql_query("SELECT * FROM `contacts` WHERE `level`='0' AND `owner`='$data->login'");
$blacklists = mysql_num_rows($blacklists1);
if($blacklists == 0){
echo '	<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
					<table>
			<tr>
				<td>
					Er staan geen mensen op je blacklist				</td>
			</tr>
		</table>
			</td></tr></table>
		</div>';
}
if($blacklists > 0){
?>
		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td><BR><?echo$delmessage;?>
					<br>Deze gangsters heb jij in je blacklist staan:<br><br>
		<table width="97%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
			<tr>
				<td align="center">&nbsp;</td>
				<td><b>Gebruikersnaam</b></td>
				<td align="right" ><b>Verwijderen</b></td>
			</tr>
<?
$begin = 0;
    $dbres				= mysql_query("SELECT * FROM `contacts` WHERE `level`='0' ORDER BY `person`");
  for($j=$begin+1; $info = mysql_fetch_object($dbres); $j++)
{
$user1 = mysql_query("SELECT * FROM `users` WHERE `login`='$info->person'");
$user  = mysql_fetch_object($user1);
$online1				= mysql_query("SELECT * FROM `users` WHERE UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(`online`) < 300 AND `login`='$user->login'");
$online = mysql_fetch_object($online1);
?>
						<tr>
<?
if($online->login == $user->login){
?>
			<td><img src="images/icons_gif/status_online.gif" title="Online"></td>
<?
}
if($online->login != $user->login){
?>
			<td><img src="images/icons_gif/status_offline.gif" title="Offline"></td>
<?
}
?>
				<td><a href="profile.php?x=<? echo $user->id; ?>"><? echo $user->login; ?><? if($user->vipdays > 0){?><img src="images/star.gif" border="0" width="10" height="10" alt="Betaald account"></a><?}?></td>
				<td align="right">
					<a href="index.php?a=blacklist&del=<? echo $user->id; ?>">X</a>
				</td>
			</tr>
<?
}
?>
					</table>
			</td></tr></table>
		</div>
<?
}
}
}
?>
		<table width='100%' cellspacing='2' cellpadding='2'>
			<tr>

				<td class='content_bottom'></td>
			</tr>
		</table>
				</div>
	</td>
	</tr>

	</table>
	</td>
<?}?>
