<?
$id = $_GET['x'];
$familie1 = mysql_query("SELECT * FROM `families` WHERE `id`='$id'");
$familie = mysql_fetch_object($familie1);
if($familie->owner == ""){
exit;
}
$id = $_GET['x'];
$familie1 = mysql_query("SELECT * FROM `families` WHERE `id`='$id'");
$familie = mysql_fetch_object($familie1);
$owner1 = mysql_query("SELECT * FROM `users` WHERE `login`='$familie->owner'");
$owner = mysql_fetch_object($owner1);
$dbres				= mysql_query("SELECT * FROM `users` WHERE UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(`online`) < 300 AND `login`='$owner->login'");
$online = mysql_fetch_object($dbres);
$leden1 = mysql_query("SELECT * FROM `users` WHERE `familie`='$familie->naam'");
$leden = mysql_num_rows($leden1);
$power = 0;
$contant = number_format($familie->contant, 0, '.' , '.');
$bank = number_format($familie->bank, 0, '.' , '.');
?>
	<div class="title_bg">
			<div class="title">Familie profiel "<?echo$familie->naam;?>"</div>
		</div>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
			<center>
<?if($data->familie == $familie->naam){?>
		<img src="images/icons_gif/disconnect.gif" style="margin-left:30px;"> <a href="index.php?a=leavefamily" target="_blank"><b>Familie verlaten</b></a>
		<img src="images/icons_gif/coins.gif" style="margin-left:30px;"> <a href="index.php?a=familiebeheer&x=Doneer" target="_blank"><b>Doneren</b></a>
<?}?>
		<img src="images/icons_gif/bomb.gif" style="margin-left:30px;"> <a href="index.php?a=famattack&x=<?echo$familie->id;?>" target="_blank"><b>Aanvallen</b></a>
		<img src="images/icons_gif/key.gif" style="margin-left:30px;"> <a href="index.php?a=famclick&x=<?echo$familie->id;?>" target="_blank"><b>Secret link</b></a>
	</center>
	<hr>
	<table border="0" cellspacing="2" cellpadding="2" width="100%" class="mod_list">
		<tr class="top">
			<td width="28%"><strong>Eigenaar:</strong></td>
<?
if($online->login == $owner->login){
?>
			<td width="4%"><img src="images/icons_gif/status_online.gif" title="Online"></td>
<?
}
if($online->login != $owner->login){
?>
			<td width="4%"><img src="images/icons_gif/status_offline.gif" title="Offline"></td>
<?
}
?>

			<td width="68%"><?echo$owner->login;?></td>
		</tr>
		<tr class="top">
			<td><strong>Attack coins:</strong></td>
			<td align="center"><img src="images/icons_gif/brick.gif"></td>
			<td><?echo$familie->kogels;?></td>
		</tr>
		<tr class="top">
			<td><strong>Leden:</strong></td>
			<td align="center"><img src="images/icons_gif/group.gif"></td>
			<td><?echo$leden;?> (maximaal <?echo$familie->maxleden;?>)</td>
		</tr>
		<tr class="top">
			<td><strong>Power:</strong></td>
			<td align="center"><img src="images/icons_gif/lightning.gif"></td>
			<td><?
$power = number_format($familie->power, 0, '.' , '.');
            echo$power;?></td>
		</tr>
		<tr class="top">
			<td><strong>Geld (contant):</strong></td>
			<td align="center"><img src="images/icons_gif/money.gif"></td>
			<td>&euro; <?echo$contant;?></td>
		</tr>
		<tr class="top">
			<td><strong>Geld (bank):</strong></td>
			<td align="center"><img src="images/icons_gif/money.gif"></td>
			<td>&euro; <?echo$bank;?></td>
		</tr>
		<tr class="top">
			<td><strong>Opgeleide killers:</strong></td>
			<td align="center"><img src="images/icons_gif/bricks.gif"></td>
			<td><?echo$familie->killers;?></td>
		</tr>
		<tr class="top">
			<td><strong>Aantal gewonnen:</strong></td>
			<td align="center"><img src="images/icons_gif/brick_add.gif"></td>
			<td><?echo$familie->attwins;?></td>
		</tr>
		<tr class="top">
			<td><strong>Aantal verloren:</strong></td>
			<td align="center"><img src="images/icons_gif/brick_delete.gif"></td>
			<td><?echo$familie->attlost;?></td>
		</tr>
	</table>
		</td></tr></table>
		</div>

		<table width='100%' cellspacing='2' cellpadding='2'>
			<tr>

				<td class='content_bottom'></td>
			</tr>
		</table>
		<br>
		<div class="title_bg">
			<div class="title">Familie bericht</div>
		</div>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
     </td></tr></table>
    <?
          		$familie->info 		= htmlspecialchars($familie->info);
        	$familie->info 		= nl2br($familie->info);
		$familie->info 		= str_replace("[b]", "<b>",$familie->info);
		$familie->info 		= str_replace("[/b]", "</b>",$familie->info);
		$familie->info 		= str_replace("[i]", "<i>",$familie->info);
		$familie->info 		= str_replace("[/i]", "</i>",$familie->info);
		$familie->info 		= str_replace("[u]", "<u>",$familie->info);
		$familie->info 		= str_replace("[/u]", "</u>",$familie->info);
		$familie->info 		= str_replace("[center]", "<center>",$familie->info);
		$familie->info 		= str_replace("[/center]", "</center>",$familie->info);
       		$familie->info	 	= eregi_replace("\\[color=([^\\[]*)\\]([^\\[]*)\\[/color\\]","<font color=\"\\1\">\\2</font>",$familie->info);
       		$familie->info 		= eregi_replace("\\[email=([^\\[]*)\\]([^\\[]*)\\[/email\\]", "<a href=\"mailto:\\1\">\\2</a>",$familie->info);
       		$familie->info 		= eregi_replace("\\[url=([^\\[]*)\\]([^\\[]*)\\[/url\\]","<a href=\"\\1\" target=_blank>\\2</a>",$familie->info);
       		$familie->info 		= eregi_replace("\\[img]([^\\[]*)\\[/img\\]","<img src=\"\\1\">",$familie->info);
    echo$familie->info;?>
    	</div>

		<table width='100%' cellspacing='2' cellpadding='2'>
			<tr>

				<td class='content_bottom'></td>
			</tr>
		</table>
		<br>
		<div class="title_bg">
			<div class="title">Famile Leden</div>
		</div>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
			<table border="0" cellspacing="2" cellpadding="2" width="100%" class="mod_list">
		<tr>
			<td align='center'>&nbsp;</td>
			<td><strong>Naam</strong></td>
			<td align='center'>&nbsp;</td>
			<td><strong>Power</strong></td>
			<td align='center'>&nbsp;</td>
			<td><strong>Fam. rang</strong></td>
			<td align='center'>&nbsp;</td>
			<td><strong>Rang</strong></td>
		</tr>
						<tr>
<?
$leden1 = mysql_query("SELECT * FROM `users` WHERE `familie`='$familie->naam' ORDER BY `power` DESC");
  for($j=0+1; $info = mysql_fetch_object($leden1); $j++)
{
if($info->famlevel >= 0){
$dbres				= mysql_query("SELECT * FROM `users` WHERE UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(`online`) < 300 AND `login`='$info->login'");
$online = mysql_fetch_object($dbres);
?>
<tr>
<?
if($online->login == $owner->login){
?>
					<td><img src="images/icons_gif/status_online.gif" title="Online"></td>
<?
}
if($online->login != $owner->login){
?>
					<td><img src="images/icons_gif/status_offline.gif" title="Offline"></td>
<?
}
?>
					<td><a href="index.php?a=profile&x=<?echo$info->id;?>"><?if($info->vermoord > 0){?><s><?}if($info->admin > 0){echo "<font color='red'>";} if($info->moderator > 0){echo "<font color='#FF6600'>";} echo$info->login;if($info->vermoord > 0){?></s><?} if($info->admin > 0 || $info->moderator > 0){echo "</font>";}if($info->vipdays > 0){echo '<img src="images/star.gif" border="0" width="10" height="10" alt="Betaald account">';}?></td>
					<td align='center'><img src='images/icons_gif/star.gif' alt='Power'></td>
					<td><?echo$info->power;?></td>
					<td align='center'><img src='images/icons_gif/group.gif' alt='Fam. rang'></td>
<?
$famrang = array("Familie lid","Sottocapo","Conssigliere","Don");
$famrang = $famrang[$info->famlevel];?>				<td><?echo$famrang;?></td>
<?
$rang	                  	= array("","Groentje","Loopjongen","Zakkenroller","Winkeldief","Dief","Mobster","Moordenaar","Lokale leider","Leider","Godfather");
$rang = $rang[$info->rank];
?>
					<td align='center'><img src='images/icons_gif/lightning.gif' alt='Rang'></td>
					<td><?echo$rang;?></td>
					</tr>
<?}}?>
				</tr>
				</table>
		</td></tr></table>
		</div>

		<table width='100%' cellspacing='2' cellpadding='2'>
			<tr>

				<td class='content_bottom'></td>
			</tr>
		</table>
		<br>
		<div class="title_bg">
			<div class="title">Famile Bezittingen</div>
		</div>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
<?
if($familie->fampower+$familie->dcb+$familie->helicopter+$familie->gevechtsvliegtuig+$familie->battleship+$familie->vliegdekschip+$familie->rocketlauncher+$familie->maxleden+$familie->tank < 6){
?>                      <b><i>Deze famile heeft nog geen bezittingen</i></b>
                        					<?}
if($familie->maxleden > 5){
$clubhuis = $familie->maxleden/5-1;
$waarde = number_format($clubhuis*10000, 0, '.' , '.');
?>
							<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
					<tr>
						<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Clubhuis</td>
					</tr>
					<tr>

						<td rowspan=6 width="110px" height="110px" valign="middle" align="center"><img src="images/shop/family/familie_villa.gif"></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
						<td>Aantal:<b><?echo$clubhuis?></b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>

						<td>Power: <b>0</b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
						<td valign="middle">Power totaal: <b>0</b></td>
					</tr>
					<tr>

						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
						<td>Marktwaarde: <b>&euro; <?echo$waarde?></b></td>
					</tr>
				</table>
				<?}?>
<?
if($familie->fampower > 0){
$waarde = number_format($familie->fampower*100000, 0, '.' , '.');
?>
							<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
					<tr>
						<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Familie Power</td>
					</tr>
					<tr>

						<td rowspan=6 width="110px" height="110px" valign="middle" align="center"><img src="images/shop/family/familie_power.gif"></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
						<td>Aantal:<b><?echo$familie->fampower?></b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>

						<td>Power: <b>0</b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
						<td valign="middle">Power totaal: <b>0</b></td>
					</tr>
					<tr>

						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
						<td>Marktwaarde: <b>&euro; <?echo$waarde?></b></td>
					</tr>
				</table>
				<?}?>
<?
if($familie->battleship > 0){
$waarde = number_format($familie->battleship*1000000, 0, '.' , '.');
$power = number_format($familie->battleship*18000, 0, '.' , '.');
?>
							<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
					<tr>
						<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Battleship</td>
					</tr>
					<tr>

						<td rowspan=6 width="110px" height="110px" valign="middle" align="center"><img src="images/shop/family/familie_battleship.gif"></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
						<td>Aantal:<b><?echo$familie->battleship?></b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>

						<td>Power: <b>18.000</b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
						<td valign="middle">Power totaal: <b><?echo$power?></b></td>
					</tr>
					<tr>

						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
						<td>Marktwaarde: <b>&euro; <?echo$waarde?></b></td>
					</tr>
				</table>
				<?}?>
<?
if($familie->vliegdekschip > 0){
$waarde = number_format($familie->vliegdekschip*5000000, 0, '.' , '.');
$power = number_format($familie->vliegdekschip*100000, 0, '.' , '.');
?>
							<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
					<tr>
						<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Vliegdekschip</td>
					</tr>
					<tr>

						<td rowspan=6 width="110px" height="110px" valign="middle" align="center"><img src="images/shop/family/familie_vliegdekschip.gif"></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
						<td>Aantal:<b><?echo$familie->vliegdekschip?></b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>

						<td>Power: <b>100.000</b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
						<td valign="middle">Power totaal: <b><?echo$power?></b></td>
					</tr>
					<tr>

						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
						<td>Marktwaarde: <b>&euro; <?echo$waarde?></b></td>
					</tr>
				</table>
				<?}?>
<?
if($familie->dcb > 0){
$waarde = number_format($familie->dcb*60000, 0, '.' , '.');
$power = number_format($familie->dcb*720, 0, '.' , '.');
?>
							<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
					<tr>
						<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Daisy Cutter Bom</td>
					</tr>
					<tr>

						<td rowspan=6 width="110px" height="110px" valign="middle" align="center"><img src="images/shop/family/familie_daisycutter.gif"></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
						<td>Aantal:<b><?echo$familie->dcb?></b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>

						<td>Power: <b>720</b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
						<td valign="middle">Power totaal: <b><?echo$power?></b></td>
					</tr>
					<tr>

						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
						<td>Marktwaarde: <b>&euro; <?echo$waarde?></b></td>
					</tr>
				</table>
				<?}?>
<?
if($familie->rocketlauncher > 0){
$waarde = number_format($familie->rocketlauncher*150000, 0, '.' , '.');
$power = number_format($familie->rocketlauncher*1800, 0, '.' , '.');
?>
							<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
					<tr>
						<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Rocket Launcher</td>
					</tr>
					<tr>

						<td rowspan=6 width="110px" height="110px" valign="middle" align="center"><img src="images/shop/family/familie_rocketlauncher.gif"></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
						<td>Aantal:<b><?echo$familie->rocketlauncher?></b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>

						<td>Power: <b>1.800</b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
						<td valign="middle">Power totaal: <b><?echo$power?></b></td>
					</tr>
					<tr>

						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
						<td>Marktwaarde: <b>&euro; <?echo$waarde?></b></td>
					</tr>
				</table>
				<?}?>
<?
if($familie->tank > 0){
$waarde = number_format($familie->tank*180000, 0, '.' , '.');
$power = number_format($familie->tank*2160, 0, '.' , '.');
?>
							<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
					<tr>
						<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Tank</td>
					</tr>
					<tr>

						<td rowspan=6 width="110px" height="110px" valign="middle" align="center"><img src="images/shop/family/familie_tank.gif"></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
						<td>Aantal:<b><?echo$familie->tank?></b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>

						<td>Power: <b>2.160</b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
						<td valign="middle">Power totaal: <b><?echo$power?></b></td>
					</tr>
					<tr>

						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
						<td>Marktwaarde: <b>&euro; <?echo$waarde?></b></td>
					</tr>
				</table>

<?}?>
<?
if($familie->helicopter > 0){
$waarde = number_format($familie->helicopter*320000, 0, '.' , '.');
$power = number_format($familie->helicopter*4160, 0, '.' , '.');
?>
							<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
					<tr>
						<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Helicopter</td>
					</tr>
					<tr>

						<td rowspan=6 width="110px" height="110px" valign="middle" align="center"><img src="images/shop/family/familie_helicopter.gif"></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
						<td>Aantal:<b><?echo$familie->helicopter?></b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>

						<td>Power: <b>4.160</b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
						<td valign="middle">Power totaal: <b><?echo$power?></b></td>
					</tr>
					<tr>

						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
						<td>Marktwaarde: <b>&euro; <?echo$waarde?></b></td>
					</tr>
				</table>
<?}?>
<?
if($familie->gevechtsvliegtuig > 0){
$waarde = number_format($familie->gevechtsvliegtuig*550000, 0, '.' , '.');
$power = number_format($familie->gevechtsvliegtuig*8250, 0, '.' , '.');
?>
							<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
					<tr>
						<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Gevechtsvliegtuig</td>
					</tr>
					<tr>

						<td rowspan=6 width="110px" height="110px" valign="middle" align="center"><img src="images/shop/family/familie_vliegtuig.gif"></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
						<td>Aantal:<b><?echo$familie->gevechtsvliegtuig?></b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>

					<td>Power: <b>8.250</b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
						<td valign="middle">Power totaal: <b><?echo$power?></b></td>
					</tr>
					<tr>

						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
						<td>Marktwaarde: <b>&euro; <?echo$waarde?></b></td>
					</tr>
				</table>
<?}?>
					</td></tr></table>
		</div>

		<table width='100%' cellspacing='2' cellpadding='2'>
			<tr>

				<td class='content_bottom'></td>
			</tr>
		</table>
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
