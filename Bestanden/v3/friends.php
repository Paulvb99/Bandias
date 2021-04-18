<?
if($_GET['del'] > 0){
$user1 = mysql_query("SELECT * FROM `users` WHERE `id`='{$_GET['del']}'");
$user  = mysql_fetch_object($user1);
$person1 = mysql_query("SELECT * FROM `contacts` WHERE `person`='$user->login'");
$person  = mysql_fetch_object($person1);
mysql_query("DELETE FROM `contacts` WHERE `person`='$user->login' AND `owner`='$data->login'");
}
if($_GET['add'] > 0){
$user1 = mysql_query("SELECT * FROM `users` WHERE `id`='{$_GET['add']}'");
$user  = mysql_fetch_object($user1);
$person = mysql_query("SELECT * FROM `contacts` WHERE `person`='$user->login' AND `owner`='$data->login'");
$numfriends = mysql_num_rows($person);
if($user->login != ""){
if($numfriends < 1){
        mysql_query("INSERT INTO `contacts`(`owner`,`person`) values( '$data->login','$user->login')");
}
}
}
if(isset($_GET['add'])){
if($_GET['add'] != ""){
?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup" align="center">
				<tr>
					<td>
						De persoon is toegevoegd aan je vriendenlijst					</td>
				</tr>
				<tr>
					<td>
						<br><br>
							<a href="index.php?a=profile&x=<?echo$_GET['add'];?>" class="msg_ok">Klik hier indien je niet automatisch verder gaat.</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<script language="javascript">
	setTimeout("document.location.href='index.php?a=profile&x=<?echo$_GET['add'];?>'",(3000*2));
</script>
		</div>
	</td>
	</tr>

	</table>
	</td>
<?
}
else{
?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Er is geen vriend meegegeven					</td>
				</tr>
				<tr>
					<td>
						<br><br>
													<a href="#" onclick="history.go(-1); return false" class="error_ok">OK</a>
											</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
		</div>
	</td>
	</tr>

	</table>
	</td>
<?
}
}
if(!isset($_GET['add'])){
?>


							<div class="title_bg">
			<div class="title">Vrienden</div>
		</div>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
			<table width="97%">
		<tr>
			<td>
				Je kan op de vriendenlijst maximaal 25 personen plaatsen om zo een overzicht te krijgen van de gangsters waarmee je bevriend bent en ook gemakkelijk te zien wie van je vrienden online op dit moment online zijn.<br \>
				<br \>
				<table width="100%" cellspacing="2" cellpadding="2" class="mod_list">
					<tr>
						<td align="center">&nbsp;</td>
						<td><b>Gebruikersnaam</b></td>
						<td align="center">&nbsp;</td>
						<td><b>Power</b></td>
						<td align="center">&nbsp;</td>
						<td><b>Rang</b></td>
						<td align="center">&nbsp;</td>
					</tr>
<?
$begin = 0;
if(!isset($_GET['reverse'])){
    $dbres				= mysql_query("SELECT * FROM `contacts` WHERE `level`='1' AND `owner`='$data->login' ORDER BY `person`");
}
if(isset($_GET['reverse'])){
    $dbres				= mysql_query("SELECT * FROM `contacts` WHERE `level`='1' AND `person`='$data->login' ORDER BY `person`");
}
  for($j=$begin+1; $info = mysql_fetch_object($dbres); $j++)
{
if(!isset($_GET['reverse'])){
$user1 = mysql_query("SELECT * FROM `users` WHERE `login`='$info->person'");
$user  = mysql_fetch_object($user1);
}
else{
$user1 = mysql_query("SELECT * FROM `users` WHERE `login`='$info->owner'");
$user  = mysql_fetch_object($user1);
}
$online1				= mysql_query("SELECT * FROM `users` WHERE UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(`online`) < 300 AND `login`='$user->login'");
$online = mysql_fetch_object($online1);
$rang	                  	= array("","Groentje","Loopjongen","Zakkenroller","Winkeldief","Dief","Mobster","Moordenaar","Lokale leider","Leider","Godfather");
$rang = $rang[$user->rank];
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
?></td>
<?if($user->vermoord == 1){?>
                     							<td><a href="index.php?a=profile&x=<?echo$user->id;?>"><s><?if($user->admin > 0){echo "<font color='red'>";} echo $user->login; if($user->admin > 0){echo "</font>";}if($user->vipdays > 0){echo '<img src="images/star.gif" border="0" width="10" height="10" alt="Betaald account">';}?></s></a></td>
<?
}
if($user->vermoord == 0){
?>
								<td><a href="index.php?a=profile&x=<?echo$user->id;?>"><?if($user->admin > 0){echo "<font color='red'>";} echo $user->login; if($user->admin > 0){echo "</font>";} if($user->vipdays > 0){echo '<img src="images/star.gif" border="0" width="10" height="10" alt="Betaald account">';}?></a></td>
<?}?>

								<td align="center"><img src="images/icons_gif/star.gif" alt="Power"></td>
								<td><?echo$user->power;?></td>
								<td align="center"><img src="images/icons_gif/lightning.gif" alt="Rang"></td>
								<td><?echo$rang;?></td>
								<td align="center"><a href="index.php?a=friends&del=<?echo$user->id;?>"><img title="Verwijderen" src="images/icons_gif/cross.gif" border="0"></a></td>
							</tr>
<?
}
?>
											</table>
				<br \>
<?if(!isset($_GET['reverse'])){?>
								Om een overzicht te krijgen van mensen die jou op hun vriendenlijst hebben kun je <a href="index.php?a=friends&reverse">hier</a> klikken.
<?
}
else{?>
                                Om een overzicht te krijgen van mensen op jou vriendenlijst kun je <a href="index.php?a=friends">hier</a> klikken.
<?}?>
							</td>
		</tr>
	</table>
		</td></tr></table>
		</div>

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
<?
}
?>
