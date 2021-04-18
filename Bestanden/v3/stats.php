					<div class="title_bg">
			<div class="title">Meer statistieken</div>
		</div>
<?$user1 = mysql_query("SELECT * FROM `users`");
$users = mysql_num_rows($user1);
$totalgeld = 0;
$totalpower = 0;
while($user = mysql_fetch_object($user1)){
$totalgeld = $totalgeld+$user->contant+$user->bank;
$totalpower = $totalpower+$user->power;
}
$gemiddeldgeld = round($totalgeld/$users);
$gemiddeldpower = round($totalpower/$users);
$gemiddeldgeld = number_format($gemiddeldgeld, 0, '.', '.');
$gemiddeldpower = number_format($gemiddeldpower, 0, '.', '.');
$totalgeld = number_format($totalgeld, 0, '.', '.');
$totalpower = number_format($totalpower, 0, '.', '.');
$dooien1 = mysql_query("SELECT * FROM `users` WHERE `vermoord`>'0'");
$dooien = mysql_num_rows($dooien1);
$verbannenen1 = mysql_query("SELECT * FROM `users` WHERE `banpunten`>'0'");
$verbannenen = mysql_num_rows($verbannenen1);
$turijn1 = mysql_query("SELECT * FROM `users` WHERE `city`='1'");
$palermo1 = mysql_query("SELECT * FROM `users` WHERE `city`='2'");
$milaan1 = mysql_query("SELECT * FROM `users` WHERE `city`='3'");
$rome1 = mysql_query("SELECT * FROM `users` WHERE `city`='4'");
$catania1 = mysql_query("SELECT * FROM `users` WHERE `city`='5'");
$corleone1 = mysql_query("SELECT * FROM `users` WHERE `city`='6'");
$turijn = mysql_num_rows($turijn1);
$palermo = mysql_num_rows($palermo1);
$milaan = mysql_num_rows($milaan1);
$rome = mysql_num_rows($rome1);
$catania = mysql_num_rows($catania1);
$corleone = mysql_num_rows($corleone1);
?>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
			<table width="100%">
		<tr>
			<td width="50%">

		<table width="100%" class="mod_list">
			<tr>
				<td width="40%">Totaal geld:</td>
				<td width="5%" align="center"><img src="images/icons_gif/money.gif" border="0px"></td>
				<td><b>&euro; <?echo$totalgeld;?>,-</b></td>
			</tr>
			<tr>
				<td width="40%">Totaal power:</td>
				<td width="5%" align="center"><img src="images/icons_gif/lightning.gif" border="0px"></td>
				<td><b> <?echo$totalpower;?></b></td>
			</tr>
		</table>
				</td>

			<td width="50%">

		<table width="100%" class="mod_list">
			<tr>
				<td width="40%">Gemiddeld geld:</td>
				<td width="5%" align="center"><img src="images/icons_gif/money.gif" border="0px"></td>
				<td><b>&euro; <?echo$gemiddeldgeld;?>,-</b></td>
			</tr>
			<tr>
				<td width="40%">Gemiddeld power:</td>
				<td width="5%" align="center"><img src="images/icons_gif/lightning.gif" border="0px"></td>
				<td><b><?echo$gemiddeldpower;?></b></td>
			</tr>
		</table>
				</td>
		</tr>
		<tr>
			<td width="50%" valign="top">

		<table width="100%" class="mod_list">
			<tr>
				<td width="40%">Vermoorde leden:</td>
				<td width="5%" align="center"><img src="images/icons_gif/status_busy.gif" border="0px"></td>
				<td><b><?echo$dooien;?></b></td>
			</tr>
			<tr>
				<td width="40%">Actieve leden:</td>
				<td width="5%" align="center"><img src="images/icons_gif/status_online.gif" border="0px"></td>
				<td><b><?echo$users;?></b></td>
            </tr>
			<tr>
				<td width="40%">Verbannen leden:</td>
				<td width="5%" align="center"><img src="images/icons_gif/status_online.gif" border="0px"></td>
				<td><b><?echo$verbannenen;?></b></td>
			</tr>
		</table>
				</td>
			<td width="50%" valign="top">
				<table width="100%" class="mod_list"><tr>
						<td width="40%">Turijn:</td>
						<td width="5%" align="center"><img src="images/icons_gif/status_online.gif" border="0px"></td>
						<td><b><?echo$turijn;?></b></td>
					</tr><tr>
						<td width="40%">Palermo:</td>
						<td width="5%" align="center"><img src="images/icons_gif/status_online.gif" border="0px"></td>
						<td><b><?echo$palermo;?></b></td>
					</tr><tr>
						<td width="40%">Milaan:</td>
						<td width="5%" align="center"><img src="images/icons_gif/status_online.gif" border="0px"></td>
						<td><b><?echo$milaan;?></b></td>
					</tr><tr>
						<td width="40%">Rome:</td>
						<td width="5%" align="center"><img src="images/icons_gif/status_online.gif" border="0px"></td>
						<td><b><?echo$rome;?></b></td>
					</tr><tr>
						<td width="40%">Catania:</td>
						<td width="5%" align="center"><img src="images/icons_gif/status_online.gif" border="0px"></td>
						<td><b><?echo$catania;?></b></td>
					</tr><tr>
						<td width="40%">Corleone:</td>
						<td width="5%" align="center"><img src="images/icons_gif/status_online.gif" border="0px"></td>
						<td><b><?echo$corleone;?></b></td>
					</tr></table>			</td>
		</tr>
	</table>
	<span class="small"><i>*  Dit overzicht is realtime en wordt om de seconde geupdate!</i></span>
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
