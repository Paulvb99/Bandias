<?
$begin = 0;
$num = 0;
  $dbres				= mysql_query("SELECT `id` FROM `users` WHERE UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(`online`) < 300");
  $numonline				= mysql_num_rows($dbres);
$online				= mysql_num_rows($dbres);   
 $dbres				= mysql_query("SELECT `login`,UNIX_TIMESTAMP(`signup`) AS `signup`, `vipdays`, `admin`, `power` `contant`, `moderator`, `bank`, `id`, `familie`, `rank`, `vipdays`, `login`, `vermoord` FROM `users` WHERE UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(`online`) < 300  ORDER BY `login` LIMIT $begin,9999999");
?>

		<div class="title_bg">
			<div class="title">Online leden </div>
		</div>
		
		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
		<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
	<tr><td> Er zijn <?=$online?> Online bij online-hooligans</td></tr><tr>
		<td>
<?  for($j=$begin+1; $online = mysql_fetch_object($dbres); $j++)
{
?>
<a href=index.php?a=profile&x=<? echo $online->id; ?> width=\"200\"><? if($online->admin > 0){echo "<b><font color='red'></b>";} if($online->moderator > 0){echo "<b><font color='green'></b>";}if($online->vermoord > 0){?><s><?}  echo $online->login; if($online->vermoord == 1){?></s><?} if($online->admin > 0 || $online->moderator > 0){echo "</font>";}if($online->vipdays > 0){echo '<img src="images/star.gif" border="0" width="10" height="10" alt="Betaald account">';} $num = $num+1; ?></a><? if($num < $numonline){?> - <?}?>
<?
}
?>
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

<div class="title_bg">
	<div class="title" align=center>
		Legenda
	</div>
</div>
<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
	<table cellpadding="0" cellspacing="0" width="100%">
		<tr>
			<td>
				
<table width="100%" cellspacing="2" cellpadding="2" class="mod_list">
<tr class="top">
						<td width="10">
							<img src="images/icons_gif/status_online.gif" /></td><td width=120><font color=red>Admin</a>
						</td>
						
						<td width=10>
							<img src="images/icons_gif/star.gif" /></td><td>Die zorgen voor heel online-hooligans dat alles goed loopt zonder bugs
						</td></tr>
<tr class="top"><td width="10">
							<img src="images/icons_gif/status_online.gif" /></td><td width=120><font color=green>Moderators</a>
						</td>
						
						<td width=10>
							<img src="images/icons_gif/star.gif" /></td><td>Die ondersteunen de admins met de leden in de gaten te houden, misbruik kan hier worden gemeld.
						</td>

					</tr>
<tr class="top"><td width="10">
							<img src="images/icons_gif/status_online.gif" /></td><td width=120><img src="images/star.gif" border="0" width="10" height="10" alt="Betaald account">
						</td>
						
						<td width=10>
							<img src="images/icons_gif/star.gif" /></td><td>Een sterretje achter je naam laat zien dat je een vip speler bent
						</td>

					</tr>
</table></table>
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