							<div class="title_bg">
			<div class="title">Top 100</div>
		</div>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
			<table>
		<tr>
			<td>
				Op deze pagina staat de all-time top 100 met de leden die de meeste power hebben verzameld.				<br>
				<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td><b>Gebruikersnaam</b></td>
						<td align="center">&nbsp;</td>
						<td><b>Power</b></td>
					</tr>
					<?
$dbres				= mysql_query("SELECT * FROM `users` ORDER BY `power` DESC LIMIT 0,99");
      while($list = mysql_fetch_assoc($dbres))
{
$j++;
$user1 = mysql_query("SELECT * FROM `users` WHERE `login`='$list[login]'");
$user = mysql_fetch_object($user1);
$online1				= mysql_query("SELECT * FROM `users` WHERE UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(`online`) < 300 AND `login`='$user->login'");
$online = mysql_fetch_object($online1);
?>
					<tr>
						<td><?echo$j;?></td>
						<td align="center">
<?
if($online->login != $user->login){
?>
<img src="images/icons_gif/status_offline.gif" title="Offline">
<?}
if($online->login == $user->login){
?>
<img src="images/icons_gif/status_online.gif" title="Online">
<?}?></td>
						<td><a href="index.php?a=profile&x=<?echo$list[id];?>"><?if($user->admin > 0){?><FONT color=red><?}?><?if($user->moderator > 0){?><FONT color='#FF6600'><?}?><?echo$list[login];?><?if($user->admin > 0 || $user->moderator > 0){?></FONT><?}?><?if($user->vipdays > 0){?><img src="images/star.gif" border="0" width="10" height="10" alt="Betaald account"><?}?></a></td>
						<td align="center"><img src="images/icons_gif/star.gif" alt="Power"></td>
						<td><?echo number_format($list[power], 0, '.' , '.');?></td>
					</tr><?}?>				</table>
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
