<?
if($data->power <= 1000){
$maxuren = 48;
$kosten = 5000;}
if($data->power > 1000){
$maxuren = 36;
$kosten = 10000;}
if($data->power > 10000){
$maxuren = 24;
$kosten = 20000;}
if($data->power > 50000){
$maxuren = 12;
$kosten = 40000;}
if($data->power > 200000){
$maxuren = 6;
$kosten = 60000;}
if($data->power > 500000){
$maxuren = 0;
$kosten = 0;}
if($data->city == 3){
$kosten = $kosten/2;
}
$uren = $maxuren-$data->maffia;
if($uren < 0){
$uren = 0;
}
$number = $_POST['number'];
$cost = number_format($kosten, 0, '.', '.');
if($_POST['item'] == -1){
if($data->contant >= $kosten){
if($_POST['number'] > 0){
if($data->maffia+$_POST['number'] <= $maxuren){
mysql_query("UPDATE `users` SET `maffia`=`maffia`+'$number',`contant`=`contant`-'$kosten' WHERE `login`='$data->login'");
}else{$error = 10;}
}else{$error = 2;}
}else{$error = 1;}
}
if($_POST['item'] == 2){
if($data->contant >= 250*$number){
if($_POST['number'] > 0){
if($number+$data->bankpas < 2){
$betaald = 250*$number;
mysql_query("UPDATE `users` SET `bankpas`=`bankpas`+'$number' WHERE `login`='$data->login'");
$_SESSION['mission'] = "Koop een bankpas";
}else{$error = 9;}
}else{$error = 2;}
}else{$error = 1;}
}
if($_POST['item'] == 1){
if($data->contant >= 8000*$number){
if($_POST['number'] > 0){
if($number+$data->satteliet < 2){
$power = $number*225;
$betaald = 8000*$number;
mysql_query("UPDATE `users` SET `satteliet`=`satteliet`+'$number',`power`=`power`+'$power' WHERE `login`='$data->login'");
}else{$error = 9;}
}else{$error = 2;}
}else{$error = 1;}
}
if($_POST['item'] == 23){
if($data->contant >= 500000*$number){
if($_POST['number'] > 0){
if($number+$data->spacestation < 2){
$power = $number*30000;
$betaald = 500000*$number;
mysql_query("UPDATE `users` SET `spacestation`=`spacestation`+'$number',`power`=`power`+'$power' WHERE `login`='$data->login'");
}else{$error = 9;}
}else{$error = 2;}
}else{$error = 1;}
}
if($_POST['item'] == 24){
if($data->contant >= 250000*$number){
if($_POST['number'] > 0){
if($number+$data->hoerenhuis < 6){
$betaald = 250000*$number;
mysql_query("UPDATE `users` SET `hoerenhuis`=`hoerenhuis`+'$number' WHERE `login`='$data->login'");
}else{$error = 9;}
}else{$error = 2;}
}else{$error = 1;}
}
if($_POST['item'] == 3){
if($data->contant >= 100000*$number){
if($_POST['number'] > 0){
$betaald = 100000*$number;
mysql_query("UPDATE `users` SET `kluis`=`kluis`+'$number' WHERE `login`='$data->login'");
$_SESSION['mission'] = "Koop een kluis";
}else{$error = 2;}
}else{$error = 1;}
}
if($_POST['item'] == 4){
if($data->contant >= 100000*$number){
if($_POST['number'] > 0){
if($number+$data->zwitserse < 2){
$betaald = 100000*$number;
mysql_query("UPDATE `users` SET `zwitserse`=`zwitserse`+'$number' WHERE `login`='$data->login'");
$_SESSION['mission'] = "Open een Zwitserse rekening";
}else{$error = 9;}
}else{$error = 2;}
}else{$error = 1;}
}
if($_POST['item'] == -2){
if($data->contant >= 250000*$number){
if($_POST['number'] > 0){
$betaald = 250000*$number;
mysql_query("DELETE FROM `clicks` WHERE `login`='$data->login'");
}else{$error = 2;}
}else{$error = 1;}
}
if($_POST['item'] == 5){
if($data->contant >= 500*$number){
if($_POST['number'] > 0){
$power = $number*25;
$betaald = 500*$number;
mysql_query("UPDATE `users` SET `deagle`=`deagle`+'$number',`power`=`power`+'$power' WHERE `login`='$data->login'");
}else{$error = 2;}
}else{$error = 1;}
}
if($_POST['item'] == 6){
if($data->contant >= 950*$number){
if($_POST['number'] > 0){
$power = $number*40;
$betaald = 950*$number;
mysql_query("UPDATE `users` SET `pepperspray`=`pepperspray`+'$number',`power`=`power`+'$power' WHERE `login`='$data->login'");
}else{$error = 2;}
}else{$error = 1;}
}
if($_POST['item'] == 12){
if($data->contant >= 1000*$number){
if($_POST['number'] > 0){
$power = $number*45;
$betaald = 1000*$number;
mysql_query("UPDATE `users` SET `knuppel`=`knuppel`+'$number',`power`=`power`+'$power' WHERE `login`='$data->login'");
}else{$error = 2;}
}else{$error = 1;}
}
if($_POST['item'] == 7){
if($data->contant >= 1400*$number){
if($_POST['number'] > 0){
$power = $number*55;
$betaald = 1400*$number;
mysql_query("UPDATE `users` SET `sigp`=`sigp`+'$number',`power`=`power`+'$power' WHERE `login`='$data->login'");
}else{$error = 2;}
}else{$error = 1;}
}
if($_POST['item'] == 8){
if($data->contant >= 1500*$number){
if($_POST['number'] > 0){
$aantal = $number*5;
$betaald = 1500*$number;
mysql_query("UPDATE `users` SET `kogels`=`kogels`+'$aantal' WHERE `login`='$data->login'");
}else{$error = 2;}
}else{$error = 1;}
}
if($_POST['item'] == 9){
if($data->contant >= 3000*$number){
if($_POST['number'] > 0){
$power = $number*75;
$betaald = 3000*$number;
mysql_query("UPDATE `users` SET `c4`=`c4`+'$number',`power`=`power`+'$power' WHERE `login`='$data->login'");
}else{$error = 2;}
}else{$error = 1;}
}
if($_POST['item'] == 10){
if($data->contant >= 5000*$number){
if($_POST['number'] > 0){
$power = $number*150;
$betaald = 5000*$number;
mysql_query("UPDATE `users` SET `m16`=`m16`+'$number',`power`=`power`+'$power' WHERE `login`='$data->login'");
}else{$error = 2;}
}else{$error = 1;}
}
if($_POST['item'] == 11){
if($data->contant >= 5000*$number){
if($_POST['number'] > 0){
$power = $number*150;
$betaald = 5000*$number;
mysql_query("UPDATE `users` SET `cornershot`=`cornershot`+'$number',`power`=`power`+'$power' WHERE `login`='$data->login'");
}else{$error = 2;}
}else{$error = 1;}
}
if($_POST['item'] == 13){
if($data->contant >= 9500*$number){
if($_POST['number'] > 0){
$power = $number*180*$number;
$betaald = 9500*$number;
mysql_query("UPDATE `users` SET `switchblade`=`switchblade`+'$number',`power`=`power`+'$power' WHERE `login`='$data->login'");
}else{$error = 2;}
}else{$error = 1;}
}
if($_POST['item'] == 14){
if($data->contant >= 12500*$number){
if($_POST['number'] > 0){
$power = $number*250;
$betaald = 12500*$number;
mysql_query("UPDATE `users` SET `pitbull`=`pitbull`+'$number',`power`=`power`+'$power' WHERE `login`='$data->login'");
}else{$error = 2;}
}else{$error = 1;}
}
if($_POST['item'] == 15){
if($data->contant >= 20000*$number){
if($_POST['number'] > 0){
$power = $number*450*$number;
$betaald = 20000*$number;
mysql_query("UPDATE `users` SET `sniper`=`sniper`+'$number',`power`=`power`+'$power' WHERE `login`='$data->login'");
}else{$error = 2;}
}else{$error = 1;}
}
if($_POST['item'] == 17){
if($data->contant >= 37500*$number){
if($_POST['number'] > 0){
$power = $number*625;
$betaald = 37500*$number;
mysql_query("UPDATE `users` SET `swatgun`=`swatgun`+'$number',`power`=`power`+'$power' WHERE `login`='$data->login'");
}else{$error = 2;}
}else{$error = 1;}
}
if($_POST['item'] == 16){
if($data->contant >= 50000*$number){
if($_POST['number'] > 0){
$power = $number*950;
$betaald = 50000*$number;
mysql_query("UPDATE `users` SET `bazooka`=`bazooka`+'$number',`power`=`power`+'$power' WHERE `login`='$data->login'");
}else{$error = 2;}
}else{$error = 1;}
}
if($_POST['item'] == 18){
if($data->contant >= 50000*$number){
if($_POST['number'] > 0){
$power = $number*950;
$betaald = 50000*$number;
mysql_query("UPDATE `users` SET `bodyguards`=`bodyguards`+'$number',`power`=`power`+'$power' WHERE `login`='$data->login'");
}else{$error = 2;}
}else{$error = 1;}
}
if($_POST['item'] == 19){
if($data->contant >= 150000*$number){
if($_POST['number'] > 0){
$power = $number*10000;
$betaald = 150000*$number;
mysql_query("UPDATE `users` SET `warboot`=`warboot`+'$number',`power`=`power`+'$power' WHERE `login`='$data->login'");
}else{$error = 2;}
}else{$error = 1;}
}
if($_POST['item'] == 20){
if($data->contant >= 200000*$number){
if($_POST['number'] > 0){
$power = $number*15000;
$betaald = 200000*$number;
mysql_query("UPDATE `users` SET `atoombom`=`atoombom`+'$number',`power`=`power`+'$power' WHERE `login`='$data->login'");
}else{$error = 2;}
}else{$error = 1;}
}
if($_POST['item'] == 21){
if($data->contant >= 240000*$number){
if($_POST['number'] > 0){
$power = $number*15500;
$betaald = 240000*$number;
mysql_query("UPDATE `users` SET `tank`=`tank`+'$number',`power`=`power`+'$power' WHERE `login`='$data->login'");
}else{$error = 2;}
}else{$error = 1;}
}
if($_POST['item'] == 22){
if($data->contant >= 450000*$number){
if($_POST['number'] > 0){
$power = $number*25000;
$betaald = 450000*$number;
mysql_query("UPDATE `users` SET `scud`=`scud`+'$number',`power`=`power`+'$power' WHERE `login`='$data->login'");
}else{$error = 2;}
}else{$error = 1;}
}
$shop = array("","Wapenshop","Wapenshop","Secretshop","Spyshop","Huizenmarkt","Bankshop");
$shop = $shop[$data->city];
if($_POST['item'] != "" && $error == ""){
$error = niks;
}
if($_POST['item'] > 0 && $error == niks){
mysql_query("UPDATE `users` SET `bezitiets`='1',`contant`=`contant`-'$betaald' WHERE `login`='$data->login'");
}
mysql_query("UPDATE `families` SET `power`=`power`+'$power' WHERE `naam`='$data->familie'");
if($error == niks){
?>
			<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup" align="center">
				<tr>
					<td>
						Het voorwerp is gekocht en in je voorraad geplaatst.					</td>
				</tr>
				<tr>
					<td>
						<br><br>
							<a href="index.php?a=shop" class="msg_ok">Klik hier indien je niet automatisch verder gaat.</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<script language="javascript">
	setTimeout("document.location.href='index.php?a=shop'",(4000*2));
</script>
		</div>
	</td>
	</tr>

	</table>
	</td>
<?}
if($error == 10){
?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Je wilt meer uren bescherming kopen dan je mag!					</td>
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
<?}
if($error == 9){
?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Door zoveel te kopen, overschrijd je het maximum					</td>
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
<?}
if($error == 2){
?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Dit is geen geldig aantal					</td>
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
<?}
if($error == 1){
?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Je hebt onvoldoende geld contant staan!					</td>
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
<?}
if($error == ""){?>


					<div class="title_bg">
			<div class="title">Shop</div>
		</div>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>

	<img src="images/shop.jpg" align="right" border="0px" style="margin-left:10px;">
	Welkom in de <b><?echo$shop;?>!</b><br /><br />

	Elke stad heeft zijn eigen winkels, namelijk:<br>
	De <b>Wapenshop</b> vind je in Turijn and Palermo<br>
	De <b>Secretshop</b> vind je in Milaan<br>
	De <b>Spyshop</b> vind je in Rome<br>
	De <b>Huizenmarkt</b> vind je in Catania<br>
	De <b>Bankshop</b> vind je in Corleone<br>
	<small>(De bankpas is overal verkrijgbaar)</small>
	<br><br>

	Maak een keuze uit de mogelijkheden.<br>
	Vul in het vakje het aantal in dat je wil kopen.<br>
	Sommige artikelen zijn maar eenmalig te koop!
	<br /><br />

	Het geld moet je contant op zak hebben om uit te geven in de shop.
	<br /><br />
<?if($data->city != 3){?>
	<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
		<form method="POST">
				<input type="hidden" name="item" value="-1">
		<tr>
			<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Maffiabescherming</td>
		</tr>
		<tr>
			<td rowspan=6 width="110px" height="110px" valign="middle" align="center"><img src="images/shop/maffiabescherming.gif"></td>
		</tr>
		<tr>
			<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
			<td>Prijs: <b>&euro; <?echo$cost;?></b> (Per uur)</td>
		</tr>
		<tr>
			<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
			<td>Power: <b>0</b></td>
		</tr>
		<tr>
			<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
			<td valign="middle"><form method="post" style="display: inline;">Aantal: <input type="text" name="number" class="input" size="5" /> <input type="hidden" name="type" value="14"><input type="submit" value="Kopen!" class="mod_submit"></form></td>
		</tr>
		<tr>
			<td width="18px" align="center" valign="middle"><img src="images/icons_gif/information.gif"></td>
			<td>

				Je mag nog <?echo$uren;?> uur bescherming kopen!<br>
				<b>Koop deze bescherming voor de helf van de prijs in Milaan!</b><br><br>

				<div id="vid_description_short" style="display: block;"><a class="small_black" href="javascript:SwitchDiv_real('vid_description_short', 'vid_description_long')">Dit wordt te veel uitleg, klik hier als je meer wil weten!</a></div>

				<div id="vid_description_long" style="display: none;">
				De uren bescherming die je mag kopen is afhankelijk van je power. Ook de kosten van de bescherming zijn hier afhankelijk van;<br>
				<i><ul>
				<li>0-1.000 power = maximaal 48 uur ($5.000)<br></li>
				<li>1.000-10.000 power = maximaal 36 uur ($10.000)<br></li>
				<li>10.000-50.000 power = maximaal 24 uur ($20.000)<br></li>
				<li>50.000-200.000 power = maximaal 12 uur ($40.000)<br></li>
				<li>200.000-500.000 power = maximaal 6 uur ($60.000)<br></li>
				<li>500.000 of meer power = maximaal 0 uur<br><small><a href="index.php?a=buycredits&p=shop">(Hier kan je altijd bescherming kopen!</a></small><br></li>
				</ul>
				</i>
				Neem bescherming van de maffia waardoor je 1 uur lang niet aangevallen kan worden. <br><br>
				LET OP: bij elke klokslag (dus bij de uurwisseling) gaat er een uur af. Koop je bescherming dus niet om bijvoorbeeld 10 voor 3, omdat er dan om 3 uur een uur vanaf wordt getrokken en je dan al geen bescherming meer hebt!
				<br><br><a class="small_black" href="javascript:SwitchDiv_real('vid_description_short', 'vid_description_long')">Klik hier voor minder uitleg.</a>
				</div>
			</td>
		</tr>
		</form>
	</table>

	<script language="javascript" type="text/javascript">

		function SwitchDiv_real(pId,pId2){
			if(document.getElementById(pId).style.display == 'none'){
				document.getElementById(pId).style.display = 'block';
				document.getElementById(pId2).style.display = 'none';
			}else{
				document.getElementById(pId).style.display = 'none';
				document.getElementById(pId2).style.display = 'block';
			}
		}

	</script>
	<br><?}?>

			<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
			<form method="POST">
				<input type="hidden" name="item" value="2">
			<tr>
				<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Bankpas</td>
			</tr>
			<tr>
				<td rowspan=6 width="110px" height="110px" valign="middle" align="center">
											<img src="images/shop/bankpas.gif">
									</td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
				<td>Prijs: <b>&euro; 250</b></td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
				<td>Power: <b>0</b></td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
				<td valign="middle"><form method="post" style="display: inline;">Aantal: <input type="text" name="number" class="input" size="5">&nbsp;<input type="submit" value="Kopen!" class="mod_submit"></form></td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/information.gif"></td>
				<td>Hiermee kun je geld storten en afhalen bij de bank</td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/asterisk_orange.gif"></td>
				<td valign="middle" >
											Maximaal <b>1</b> toegestaan,
										je hebt <b><?echo$data->bankpas;?></b> 				</td>
			</tr>
			</form>
					</table>

		<br>
<?if($data->city == 3){?>
	<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
		<form method="POST">
				<input type="hidden" name="item" value="-1">
		<tr>
			<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Maffiabescherming</td>
		</tr>
		<tr>
			<td rowspan=6 width="110px" height="110px" valign="middle" align="center"><img src="images/shop/maffiabescherming.gif"></td>
		</tr>
		<tr>
			<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
			<td>Prijs: <b>&euro; <?echo$cost;?></b> (Per uur)</td>
		</tr>
		<tr>
			<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
			<td>Power: <b>0</b></td>
		</tr>
		<tr>
			<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
			<td valign="middle"><form method="post" style="display: inline;">Aantal: <input type="text" name="number" class="input" size="5" /> <input type="hidden" name="type" value="14"><input type="submit" value="Kopen!" class="mod_submit"></form></td>
		</tr>
		<tr>
			<td width="18px" align="center" valign="middle"><img src="images/icons_gif/information.gif"></td>
			<td>

				Je mag nog 24 uur bescherming kopen!<br>
				<b>Koop deze bescherming voor de helf van de prijs in Milaan!</b><br><br>

				<div id="vid_description_short" style="display: block;"><a class="small_black" href="javascript:SwitchDiv_real('vid_description_short', 'vid_description_long')">Dit wordt te veel uitleg, klik hier als je meer wil weten!</a></div>

				<div id="vid_description_long" style="display: none;">
				De uren bescherming die je mag kopen is afhankelijk van je power. Ook de kosten van de bescherming zijn hier afhankelijk van;<br>
				<i><ul>
				<li>0-1.000 power = maximaal 48 uur ($2.500)<br></li>
				<li>1.000-10.000 power = maximaal 36 uur ($5.000)<br></li>
				<li>10.000-50.000 power = maximaal 24 uur ($10.000)<br></li>
				<li>50.000-200.000 power = maximaal 12 uur ($20.000)<br></li>
				<li>200.000-500.000 power = maximaal 6 uur ($30.000)<br></li>
				<li>500.000 of meer power = maximaal 0 uur<br><small><a href="index.php?a=buycredits&p=shop">(Hier kan je altijd bescherming kopen!</a></small><br></li>
				</ul>
				</i>
				Neem bescherming van de maffia waardoor je 1 uur lang niet aangevallen kan worden. <br><br>
				LET OP: bij elke klokslag (dus bij de uurwisseling) gaat er een uur af. Koop je bescherming dus niet om bijvoorbeeld 10 voor 3, omdat er dan om 3 uur een uur vanaf wordt getrokken en je dan al geen bescherming meer hebt!
				<br><br><a class="small_black" href="javascript:SwitchDiv_real('vid_description_short', 'vid_description_long')">Klik hier voor minder uitleg.</a>
				</div>
			</td>
		</tr>
		</form>
	</table>

	<script language="javascript" type="text/javascript">

		function SwitchDiv_real(pId,pId2){
			if(document.getElementById(pId).style.display == 'none'){
				document.getElementById(pId).style.display = 'block';
				document.getElementById(pId2).style.display = 'none';
			}else{
				document.getElementById(pId).style.display = 'none';
				document.getElementById(pId2).style.display = 'block';
			}
		}

	</script>
	<br><?}
if($data->city == 4){
?>
			<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
			<form method="POST">
				<input type="hidden" name="item" value="1">
			<tr>
				<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Satteliet</td>
			</tr>
			<tr>
				<td rowspan=6 width="110px" height="110px" valign="middle" align="center">
											<img src="images/shop/satteliet.gif">
									</td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
				<td>Prijs: <b>&euro; 8000</b></td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
				<td>Power: <b>225</b></td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
				<td valign="middle"><form method="post" style="display: inline;">Aantal: <input type="text" name="number" class="input" size="5">&nbsp;<input type="submit" value="Kopen!" class="mod_submit"></form></td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/information.gif"></td>
				<td>Net als bij een Space Station krijg je de mogelijkheid te zien waar iedereen is!</td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/asterisk_orange.gif"></td>
				<td valign="middle" >
											Maximaal <b>1</b> toegestaan,
										Je hebt <b><?echo$data->satteliet;?></b> 				</td>
			</tr>
			</form>
					</table>

		<br>
			<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
			<form method="POST">
				<input type="hidden" name="item" value="23">
			<tr>
				<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Space Station</td>
			</tr>
			<tr>
				<td rowspan=6 width="110px" height="110px" valign="middle" align="center">
											<img src="images/shop/spacestation.gif">
									</td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
				<td>Prijs: <b>&euro; 500000</b></td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
				<td>Power: <b>30000</b></td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
				<td valign="middle"><form method="post" style="display: inline;">Aantal: <input type="text" name="number" class="input" size="5">&nbsp;<input type="submit" value="Kopen!" class="mod_submit"></form></td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/information.gif"></td>
				<td>Met een Space Station kun je altijd zien waar iemand is!</td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/asterisk_orange.gif"></td>
				<td valign="middle" >
											Maximaal <b>1</b> toegestaan,
										Je hebt <b><?echo$data->spacestation;?></b> 				</td>
			</tr>
			</form>
					</table>
<?}
if($data->city == 5){?>
			<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
			<form method="POST">
				<input type="hidden" name="item" value="24">
			<tr>
				<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Hoerenhuis</td>
			</tr>
			<tr>
				<td rowspan=6 width="110px" height="110px" valign="middle" align="center">
											<img src="images/shop/hoerenhuis.gif">
									</td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
				<td>Prijs: <b>&euro; 250000</b></td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
				<td>Power: <b>0</b></td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
				<td valign="middle"><form method="post" style="display: inline;">Aantal: <input type="text" name="number" class="input" size="5">&nbsp;<input type="submit" value="Kopen!" class="mod_submit"></form></td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/information.gif"></td>
				<td>Ontvang &euro; 500 euro per uur terwijl je anderen het werk laat doen! Maximaal 5 huizen per gangster.</td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/asterisk_orange.gif"></td>
				<td valign="middle" >
											Maximaal <b>5</b> toegestaan,
										Je hebt <b><?echo$data->hoerenhuis;?></b> 				</td>
			</tr>
			</form>
					</table>
<?}
if($data->city == 6){
?>
			<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
			<form method="POST">
				<input type="hidden" name="item" value="3">
			<tr>
				<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Kluis</td>
			</tr>
			<tr>
				<td rowspan=6 width="110px" height="110px" valign="middle" align="center">
											<img src="images/shop/kluis.gif">
									</td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
				<td>Prijs: <b>&euro; 100000</b></td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
				<td>Power: <b>0</b></td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
				<td valign="middle"><form method="post" style="display: inline;">Aantal: <input type="text" name="number" class="input" size="5">&nbsp;<input type="submit" value="Kopen!" class="mod_submit"></form></td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/information.gif"></td>
				<td>Opmerkingen: de kluis heeft als voordeel dat je geld hier altijd veilig staat, ookal wordt je aangevallen en vermoord. Tevens kan niemand zien hoeveel geld je in je kluis hebt liggen. Een kluis kan maximaal &euro; 50.000.000,- bevatten. Je krijgt echter geen rente over het geld dat in je kluis ligt.</td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/asterisk_orange.gif"></td>
				<td valign="middle" >
											Onbeperkt aantal toegestaan,
										Je hebt <b><?echo$data->kluis;?></b> 				</td>
			</tr>
			</form>
					</table>

		<br>
			<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
			<form method="POST">
				<input type="hidden" name="item" value="4">
			<tr>
				<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Zwitserse rekening</td>
			</tr>
			<tr>
				<td rowspan=6 width="110px" height="110px" valign="middle" align="center">
											<img src="images/shop/zwitserserekening.gif">
									</td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
				<td>Prijs: <b>&euro; 100000</b></td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
				<td>Power: <b>0</b></td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
				<td valign="middle"><form method="post" style="display: inline;">Aantal: <input type="text" name="number" class="input" size="5">&nbsp;<input type="submit" value="Kopen!" class="mod_submit"></form></td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/information.gif"></td>
				<td>Opmerkingen: Via de je Zwitserse bankrekening kun je geld wegsluizen. Niemand kan namelijk het geld zien dat op deze rekening staat! Je kunt elke dag maximaal &euro; 5 miljoen storten en &euro; 50 miljoen opnemen. Op je Zwitserse rekening krijg je elke dag 2% rente.</td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/asterisk_orange.gif"></td>
				<td valign="middle" >
											Maximaal <b>1</b> toegestaan,
										Je hebt <b><?echo$data->zwitserse;?></b> 				</td>
			</tr>
			</form>
					</table>
<?}
if($data->city == 3){
?>
	<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
		<form method="POST">
				<input type="hidden" name="item" value="-2">
		<tr>
			<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Secret Link Cleaner</td>
		</tr>
		<tr>
			<td rowspan=6 width="110px" height="110px" valign="middle" align="center"><font size="5"><b>?</b></font></td>
		</tr>
		<tr>
			<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
			<td>Prijs: <b>&euro; 250.000</b></td>
		</tr>
		<tr>
			<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
			<td>Power: <b>0</b></td>
		</tr>
		<tr>
			<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
			<td valign="middle"><form method="post" style="display: inline;">Aantal: <input type="text" name="number" class="input" size="5" /> <input type="hidden" name="type" value="21"><input type="submit" value="Kopen!" class="mod_submit"></form></td>
		</tr>
		<tr>
			<td width="18px" align="center" valign="middle"><img src="images/icons_gif/information.gif"></td>
			<td>Laat iedereen weer op je geheime link kunnen klikken!</td>
		</tr>
		</form>
	</table>
<?}?>

<?if($data->city <= 2){?>
			<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
			<form method="POST">
				<input type="hidden" name="item" value="5">
			<tr>
				<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Desert Eagle</td>
			</tr>
			<tr>
				<td rowspan=6 width="110px" height="110px" valign="middle" align="center">
											<img src="images/shop/deserteagle.gif">
									</td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
				<td>Prijs: <b>&euro; 500</b></td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
				<td>Power: <b>25</b></td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
				<td valign="middle"><form method="post" style="display: inline;">Aantal: <input type="text" name="number" class="input" size="5">&nbsp;<input type="submit" value="Kopen!" class="mod_submit"></form></td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/information.gif"></td>
				<td>Geen</td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/asterisk_orange.gif"></td>
				<td valign="middle" >
											Onbeperkt aantal toegestaan,
										je hebt <b><?echo$data->deagle;?></b> 				</td>
			</tr>
			</form>
					</table>

		<br>
			<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
			<form method="POST">
				<input type="hidden" name="item" value="6">
			<tr>
				<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Pepperspray</td>
			</tr>
			<tr>
				<td rowspan=6 width="110px" height="110px" valign="middle" align="center">
											<img src="images/shop/pepperspray.gif">
									</td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
				<td>Prijs: <b>&euro; 950</b></td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
				<td>Power: <b>40</b></td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
				<td valign="middle"><form method="post" style="display: inline;">Aantal: <input type="text" name="number" class="input" size="5">&nbsp;<input type="submit" value="Kopen!" class="mod_submit"></form></td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/information.gif"></td>
				<td>Geen</td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/asterisk_orange.gif"></td>
				<td valign="middle" >
											Onbeperkt aantal toegestaan,
										je hebt <b><?echo$data->pepperspray;?></b> 				</td>
			</tr>
			</form>
					</table>

		<br>
			<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
			<form method="POST">
				<input type="hidden" name="item" value="12">
			<tr>
				<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Knuppel</td>
			</tr>
			<tr>
				<td rowspan=6 width="110px" height="110px" valign="middle" align="center">
											<img src="images/shop/knuppel.gif">
									</td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
				<td>Prijs: <b>&euro; 1000</b></td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
				<td>Power: <b>45</b></td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
				<td valign="middle"><form method="post" style="display: inline;">Aantal: <input type="text" name="number" class="input" size="5">&nbsp;<input type="submit" value="Kopen!" class="mod_submit"></form></td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/information.gif"></td>
				<td>Geen</td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/asterisk_orange.gif"></td>
				<td valign="middle" >
											Onbeperkt aantal toegestaan,
										je hebt <b><?echo$data->knuppel;?></b> 				</td>
			</tr>
			</form>
					</table>

		<br>
			<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
			<form method="POST">
				<input type="hidden" name="item" value="7">
			<tr>
				<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Sig P228</td>
			</tr>
			<tr>
				<td rowspan=6 width="110px" height="110px" valign="middle" align="center">
											<img src="images/shop/sigp228.gif">
									</td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
				<td>Prijs: <b>&euro; 1400</b></td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
				<td>Power: <b>55</b></td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
				<td valign="middle"><form method="post" style="display: inline;">Aantal: <input type="text" name="number" class="input" size="5">&nbsp;<input type="submit" value="Kopen!" class="mod_submit"></form></td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/information.gif"></td>
				<td>Geen</td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/asterisk_orange.gif"></td>
				<td valign="middle" >
											Onbeperkt aantal toegestaan,
										je hebt <b><?echo$data->sigp;?></b> 				</td>
			</tr>
			</form>
					</table>

		<br>
			<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
			<form method="POST">
				<input type="hidden" name="item" value="8">
			<tr>
				<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Attack Coins</td>
			</tr>
			<tr>
				<td rowspan=6 width="110px" height="110px" valign="middle" align="center">
											<img src="images/shop/attackcoins.gif">
									</td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
				<td>Prijs: <b>&euro; 1500</b></td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
				<td>Power: <b>0</b></td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
				<td valign="middle"><form method="post" style="display: inline;">Aantal: <input type="text" name="number" class="input" size="5">&nbsp;<input type="submit" value="Kopen!" class="mod_submit"></form></td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/information.gif"></td>
				<td>Ontvang 5 attack coins om mensen aan te vallen.</td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/asterisk_orange.gif"></td>
				<td valign="middle" >
											Onbeperkt aantal toegestaan,
										je hebt <b><?echo$data->kogels;?></b> 				</td>
			</tr>
			</form>
					</table>

		<br>
			<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
			<form method="POST">
				<input type="hidden" name="item" value="9">
			<tr>
				<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">C4 Bom</td>
			</tr>
			<tr>
				<td rowspan=6 width="110px" height="110px" valign="middle" align="center">
											<img src="images/shop/c4.gif">
									</td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
				<td>Prijs: <b>&euro; 3000</b></td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
				<td>Power: <b>75</b></td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
				<td valign="middle"><form method="post" style="display: inline;">Aantal: <input type="text" name="number" class="input" size="5">&nbsp;<input type="submit" value="Kopen!" class="mod_submit"></form></td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/information.gif"></td>
				<td>Geen</td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/asterisk_orange.gif"></td>
				<td valign="middle" >
											Onbeperkt aantal toegestaan,
										je hebt <b><?echo$data->c4;?></b> 				</td>
			</tr>
			</form>
					</table>

		<br>
			<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
			<form method="POST">
				<input type="hidden" name="item" value="10">
			<tr>
				<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Machine Gun</td>
			</tr>
			<tr>
				<td rowspan=6 width="110px" height="110px" valign="middle" align="center">
											<img src="images/shop/m16.gif">
									</td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
				<td>Prijs: <b>&euro; 5000</b></td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
				<td>Power: <b>150</b></td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
				<td valign="middle"><form method="post" style="display: inline;">Aantal: <input type="text" name="number" class="input" size="5">&nbsp;<input type="submit" value="Kopen!" class="mod_submit"></form></td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/information.gif"></td>
				<td>Geen</td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/asterisk_orange.gif"></td>
				<td valign="middle" >
											Onbeperkt aantal toegestaan,
										je hebt <b><?echo$data->m16;?></b> 				</td>
			</tr>
			</form>
					</table>

		<br>
			<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
			<form method="POST">
				<input type="hidden" name="item" value="11">
			<tr>
				<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Corner Shot</td>
			</tr>
			<tr>
				<td rowspan=6 width="110px" height="110px" valign="middle" align="center">
											<img src="images/shop/cornershot.gif">
									</td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
				<td>Prijs: <b>&euro; 5000</b></td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
				<td>Power: <b>150</b></td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
				<td valign="middle"><form method="post" style="display: inline;">Aantal: <input type="text" name="number" class="input" size="5">&nbsp;<input type="submit" value="Kopen!" class="mod_submit"></form></td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/information.gif"></td>
				<td>Geen</td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/asterisk_orange.gif"></td>
				<td valign="middle" >
											Onbeperkt aantal toegestaan,
										je hebt <b><?echo$data->cornershot;?></b> 				</td>
			</tr>
			</form>
					</table>

		<br>
			<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
			<form method="POST">
				<input type="hidden" name="item" value="13">
			<tr>
				<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Switch Blade</td>
			</tr>
			<tr>
				<td rowspan=6 width="110px" height="110px" valign="middle" align="center">
											<img src="images/shop/switchblade.gif">
									</td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
				<td>Prijs: <b>&euro; 9500</b></td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
				<td>Power: <b>180</b></td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
				<td valign="middle"><form method="post" style="display: inline;">Aantal: <input type="text" name="number" class="input" size="5">&nbsp;<input type="submit" value="Kopen!" class="mod_submit"></form></td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/information.gif"></td>
				<td>Geen</td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/asterisk_orange.gif"></td>
				<td valign="middle" >
											Onbeperkt aantal toegestaan,
										je hebt <b><?echo$data->switchblade;?></b> 				</td>
			</tr>
			</form>
					</table>

		<br>
			<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
			<form method="POST">
				<input type="hidden" name="item" value="14">
			<tr>
				<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Pitbull</td>
			</tr>
			<tr>
				<td rowspan=6 width="110px" height="110px" valign="middle" align="center">
											<img src="images/shop/pitbull.gif">
									</td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
				<td>Prijs: <b>&euro; 12500</b></td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
				<td>Power: <b>250</b></td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
				<td valign="middle"><form method="post" style="display: inline;">Aantal: <input type="text" name="number" class="input" size="5">&nbsp;<input type="submit" value="Kopen!" class="mod_submit"></form></td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/information.gif"></td>
				<td>Geen</td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/asterisk_orange.gif"></td>
				<td valign="middle" >
											Onbeperkt aantal toegestaan,
										je hebt <b><?echo$data->pitbull;?></b> 				</td>
			</tr>
			</form>
					</table>

		<br>
			<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
			<form method="POST">
				<input type="hidden" name="item" value="15">
			<tr>
				<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Sniper</td>
			</tr>
			<tr>
				<td rowspan=6 width="110px" height="110px" valign="middle" align="center">
											<img src="images/shop/sniper.gif">
									</td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
				<td>Prijs: <b>&euro; 20000</b></td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
				<td>Power: <b>450</b></td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
				<td valign="middle"><form method="post" style="display: inline;">Aantal: <input type="text" name="number" class="input" size="5">&nbsp;<input type="submit" value="Kopen!" class="mod_submit"></form></td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/information.gif"></td>
				<td>Geen</td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/asterisk_orange.gif"></td>
				<td valign="middle" >
											Onbeperkt aantal toegestaan,
										je hebt <b><?echo$data->sniper;?></b> 				</td>
			</tr>
			</form>
					</table>

		<br>
			<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
			<form method="POST">
				<input type="hidden" name="item" value="17">
			<tr>
				<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">S.W.A.T. Gun</td>
			</tr>
			<tr>
				<td rowspan=6 width="110px" height="110px" valign="middle" align="center">
											<img src="images/shop/swatgun.gif">
									</td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
				<td>Prijs: <b>&euro; 37500</b></td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
				<td>Power: <b>625</b></td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
				<td valign="middle"><form method="post" style="display: inline;">Aantal: <input type="text" name="number" class="input" size="5">&nbsp;<input type="submit" value="Kopen!" class="mod_submit"></form></td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/information.gif"></td>
				<td>Geen</td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/asterisk_orange.gif"></td>
				<td valign="middle" >
											Onbeperkt aantal toegestaan,
										je hebt <b><?echo$data->swatgun;?></b> 				</td>
			</tr>
			</form>
					</table>

		<br>
			<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
			<form method="POST">
				<input type="hidden" name="item" value="16">
			<tr>
				<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Bazooka</td>
			</tr>
			<tr>
				<td rowspan=6 width="110px" height="110px" valign="middle" align="center">
											<img src="images/shop/bazooka.gif">
									</td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
				<td>Prijs: <b>&euro; 50000</b></td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
				<td>Power: <b>950</b></td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
				<td valign="middle"><form method="post" style="display: inline;">Aantal: <input type="text" name="number" class="input" size="5">&nbsp;<input type="submit" value="Kopen!" class="mod_submit"></form></td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/information.gif"></td>
				<td>Geen</td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/asterisk_orange.gif"></td>
				<td valign="middle" >
											Onbeperkt aantal toegestaan,
										je hebt <b><?echo$data->bazooka;?></b> 				</td>
			</tr>
			</form>
					</table>

		<br>
			<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
			<form method="POST">
				<input type="hidden" name="item" value="18">
			<tr>
				<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Bodyguards</td>
			</tr>
			<tr>
				<td rowspan=6 width="110px" height="110px" valign="middle" align="center">
											<img src="images/shop/bodyguards.gif">
									</td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
				<td>Prijs: <b>&euro; 50000</b></td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
				<td>Power: <b>950</b></td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
				<td valign="middle"><form method="post" style="display: inline;">Aantal: <input type="text" name="number" class="input" size="5">&nbsp;<input type="submit" value="Kopen!" class="mod_submit"></form></td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/information.gif"></td>
				<td>Geen</td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/asterisk_orange.gif"></td>
				<td valign="middle" >
											Onbeperkt aantal toegestaan,
										je hebt <b><?echo$data->bodyguards;?></b> 				</td>
			</tr>
			</form>
					</table>

		<br>
			<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
			<form method="POST">
				<input type="hidden" name="item" value="19">
			<tr>
				<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">War Boot</td>
			</tr>
			<tr>
				<td rowspan=6 width="110px" height="110px" valign="middle" align="center">
											<img src="images/shop/warboot.gif">
									</td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
				<td>Prijs: <b>&euro; 150000</b></td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
				<td>Power: <b>10000</b></td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
				<td valign="middle"><form method="post" style="display: inline;">Aantal: <input type="text" name="number" class="input" size="5">&nbsp;<input type="submit" value="Kopen!" class="mod_submit"></form></td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/information.gif"></td>
				<td>Geen</td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/asterisk_orange.gif"></td>
				<td valign="middle" >
											Onbeperkt aantal toegestaan,
										je hebt <b><?echo$data->warboot;?></b> 				</td>
			</tr>
			</form>
					</table>

		<br>
			<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
			<form method="POST">
				<input type="hidden" name="item" value="20">
			<tr>
				<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Atoombom</td>
			</tr>
			<tr>
				<td rowspan=6 width="110px" height="110px" valign="middle" align="center">
											<img src="images/shop/atoombom.gif">
									</td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
				<td>Prijs: <b>&euro; 200000</b></td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
				<td>Power: <b>15000</b></td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
				<td valign="middle"><form method="post" style="display: inline;">Aantal: <input type="text" name="number" class="input" size="5">&nbsp;<input type="submit" value="Kopen!" class="mod_submit"></form></td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/information.gif"></td>
				<td>Geen</td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/asterisk_orange.gif"></td>
				<td valign="middle" >
											Onbeperkt aantal toegestaan,
										je hebt <b><?echo$data->atoombom;?></b> 				</td>
			</tr>
			</form>
					</table>

		<br>
			<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
			<form method="POST">
				<input type="hidden" name="item" value="21">
			<tr>
				<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Tank</td>
			</tr>
			<tr>
				<td rowspan=6 width="110px" height="110px" valign="middle" align="center">
											<img src="images/shop/tank.gif">
									</td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
				<td>Prijs: <b>&euro; 240000</b></td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
				<td>Power: <b>15500</b></td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
				<td valign="middle"><form method="post" style="display: inline;">Aantal: <input type="text" name="number" class="input" size="5">&nbsp;<input type="submit" value="Kopen!" class="mod_submit"></form></td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/information.gif"></td>
				<td>Geen</td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/asterisk_orange.gif"></td>
				<td valign="middle" >
											Onbeperkt aantal toegestaan,
										je hebt <b><?echo$data->tank;?></b> 				</td>
			</tr>
			</form>
					</table>

		<br>
			<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
			<form method="POST">
				<input type="hidden" name="item" value="22">
			<tr>
				<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Scud Raket</td>
			</tr>
			<tr>
				<td rowspan=6 width="110px" height="110px" valign="middle" align="center">
											<img src="images/shop/scudraket.gif">
									</td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
				<td>Prijs: <b>&euro; 450000</b></td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
				<td>Power: <b>25000</b></td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
				<td valign="middle"><form method="post" style="display: inline;">Aantal: <input type="text" name="number" class="input" size="5">&nbsp;<input type="submit" value="Kopen!" class="mod_submit"></form></td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/information.gif"></td>
				<td>Geen</td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/asterisk_orange.gif"></td>
				<td valign="middle" >
											Onbeperkt aantal toegestaan,
										je hebt <b><?echo$data->scud;?></b> 				</td>
			</tr>
			</form>
					</table>

		<br>
<?}?>



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
<?}?>
