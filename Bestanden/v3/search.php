							<div class="title_bg">
			<div class="title">Zoeken</div>
		</div>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>

	Je hebt de mogelijkheid om te zoeken naar andere gangsters door de gebruikersnaam in te vullen. Om te zoeken vul je hieronder een gebruikersnaam in.<br /><br />
	<form method="POST">
	<table width='75%'>
		<tr>
			<td>Zoekwoord:</td>
			<td><input type='text' name='search' value=""></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type='submit' name='zoek' value='Zoeken!' class='mod_submit'></td>
		</tr></form>
	</table>
		</td></tr></table>
		</div>

		<table width='100%' cellspacing='2' cellpadding='2'>
			<tr>

				<td class='content_bottom'></td>
			</tr>
		</table>
<?if(isset($_POST['zoek'])){?>
<br \>
		<div class="title_bg">
			<div class="title">Resultaten</div>
		</div>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
			<table width='100%' cellspacing='2' cellpadding='2' class='mod_list'>
		<tr>
			<td>ID</td>
			<td align='center'>Status</td>
			<td>Gebruikersnaam</td>
			<td align='center'>&nbsp;</td>
			<td>Power</td>
		</tr>
<?
  $dbres				= mysql_query("SELECT * FROM `users`");
  $dbres = mysql_fetch_object($dbres);
$result2 = (preg_match("/$dbres->login/", $_POST['search']));
$result = preg_match('/^[a-zA-Z0-9_\-]+$/',$_POST['search']);
  $dbres				= mysql_query("SELECT * FROM `users` ORDER BY `power` DESC LIMIT 0,100");
  for($j=0+1; $info = mysql_fetch_object($dbres);)
{
$schammel				= mysql_query("SELECT * FROM `users` WHERE UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(`online`) < 300 AND `login`='$info->login'");
$online = mysql_fetch_object($schammel);
$power = number_format($info->power, 0, '.' , '.');
    if (preg_match("/^{$_POST['search']}/i", "$info->login")) {
$_SESSION['mission'] = "Zoek een andere speler op";
?>
						<tr>
					<td><?echo$j; $j++?></td>
					<td align="center"><?if($online->login == $info->login){?><img src="images/icons_gif/status_online.gif" title="Online"><?}if($online->login != $info->login){?><img src="images/icons_gif/status_offline.gif" title="Offline"><?}?></td>
					<td width="100%"><a href="index.php?a=profile&x=<?echo$info->id;?>"><?if($info->admin == 1){?><FONT color='red'><?}if($info->moderator > 0){?><FONT color='#FF6600'><?} if($info->vermoord > 0){?><s><?}echo$info->login; if($info->vermoord > 0){?></s><?} if($info->admin > 0 || $info->moderator > 0){?></FONT><?}?><?if($info->vipdays > 0){?><img src="images/star.gif" border="0" width="10" height="10" alt="Betaald account"><?}?></a></td>
					<td align='center'><img src='images/icons_gif/star.gif'></td>
					<td><?echo$power;?></td>
				</tr><?}}?>
					</table>
		</td></tr></table>
		</div>

		<table width='100%' cellspacing='2' cellpadding='2'>
			<tr>

				<td class='content_bottom'></td>
			</tr>
		</table>

		</div>
<?}?>



		</div>
	</td>
	</tr>

	</table>
	</td>
