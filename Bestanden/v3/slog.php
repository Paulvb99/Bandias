							<div class="title_bg">
			<div class="title">Secret Link Log</div>
		</div>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
			<table width="100%">
		<tr>
			<td>
				Hier vind je een overzicht van alle mensen die in de afgelopen 24 uur op je secret link hebben geklikt<br>
				<br>
				<table width="100%" class="mod_list">
					<tr>
						<td></td>
						<td><b>Tijdstip</b></td>
						<td></td>
						<td><b>Geklikt door</b></td>
						<td><b>SL</b></td>
					</tr>
												<tr>
<?
$dbres				= mysql_query("SELECT * FROM `clicks` WHERE `login`='$data->login' ORDER BY `date`");
for($j=$begin+1; $info = mysql_fetch_object($dbres); $j++)
{
$user1 = mysql_query("SELECT * FROM `users` WHERE `login`='$info->ip'");
$user  = mysql_fetch_object($user1);
$online1				= mysql_query("SELECT * FROM `users` WHERE UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(`online`) < 300 AND `login`='$user->login'");
$online = mysql_fetch_object($online1);
$selfclicked1				= mysql_query("SELECT * FROM `clicks` WHERE `ip`='$data->login' AND `login`='$user->login' AND `active`='1'");
$selfclicked = mysql_num_rows($selfclicked1);
?>
								<td width="10"><img src="images/icons_gif/time.gif" border="0"></td>
								<td><?echo$info->date;?></td>
<?
if($online->login == $user->login){
?>
			<td width="10"><img src="images/icons_gif/status_online.gif" title="Online"></td>
<?
}
if($online->login != $user->login){
?>
			<td width="10"><img src="images/icons_gif/status_offline.gif" title="Offline"></td>
<?
}
?>
								<td><a href="index.php?a=profile&x=<?echo$user->id;?>"><?echo$user->login;?></a></td>
								<td width="10">
									<a href="index.php?a=click&x=<?echo$user->id;?>">
<?if($selfclicked < 1){?>
																			<img src="images/icons_gif/key.gif" border="0">
<?
}
if($selfclicked > 0){?>
																			<img src="images/icons_gif/key_red.gif" border="0">
<?}?>
																		</a>
								</td>
							</tr>
<?}?>
											</table>
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
