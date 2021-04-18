<?
$familie1 = mysql_query("SELECT * FROM `families` WHERE `naam`='$data->familie'");
$familie = mysql_fetch_object($familie1);
$leden1 = mysql_query("SELECT * FROM `users` WHERE `familie`='$familie->naam'");
$leden = mysql_num_rows($leden1);
$familie1 = mysql_query("SELECT * FROM `families` WHERE `naam`='$data->familie'");
$familie = mysql_fetch_object($familie1);
$bank = number_format($familie->bank, 0, '.', '.');
$contant = number_format($familie->contant, 0, '.', '.');
if(isset($_POST['halen'])){
$haal = $_POST['haal'];
if($familie->bank >= $haal){
mysql_query("UPDATE `families` SET `bank`=`bank`-'$haal',`contant`=`contant`+'$haal' WHERE `naam`='$data->familie'");
}
}
if(isset($_POST['doneren'])){
$doneer = $_POST['doneer'];
if($data->contant >= $doneer){
mysql_query("UPDATE `families` SET `bank`=`bank`+'$doneer' WHERE `naam`='$data->familie'");
mysql_query("UPDATE `users` SET `contant`=`contant`-'$doneer' WHERE `id`='$data->id'");
}
}
if(isset($_POST['submitrang'])){
if($_POST['rang'] == 4){
$user1 = mysql_query("SELECT * FROM `users` WHERE `login`='{$_POST['login']}'");
$user = mysql_fetch_object($user1);
mysql_query("UPDATE `families` SET `power`=`power`-'$user->power' WHERE `naam`='$user->familie'");
mysql_query("UPDATE `users` SET `famlevel`='0',`familie`='' WHERE `login`='{$_POST['login']}'");
}
else{
mysql_query("UPDATE `users` SET `famlevel`='{$_POST['rang']}' WHERE `login`='{$_POST['login']}'");
}}
if(isset($_POST['storten'])){
$stort = $_POST['stort'];
if($familie->contant >= $stort){
mysql_query("UPDATE `families` SET `bank`=`bank`+'$stort',`contant`=`contant`-'$stort',`storten`=`storten`-'1' WHERE `naam`='$data->familie'");
}
}
if($_POST['item'] > 0){
if($_POST['number'] == "" || $_POST['number'] == 0){
$error = 1;
}}
if($_POST['item'] == 1){
if($familie->contant >= 10000*$_POST['number']){
$ledenerbij = 5*$_POST['number'];
$gelderaf = 10000*$_POST['number'];
mysql_query("UPDATE `families` SET `maxleden`=`maxleden`+'$ledenerbij',`contant`=`contant`-'$gelderaf' WHERE `naam`='$familie->naam'");
}
else{
$error = 2;
}
}
if($_POST['item'] == 3){
if($familie->contant >= 60000*$_POST['number']){
$powererbij = 720*$_POST['number'];
$gelderaf = 60000*$_POST['number'];
if($leden > 1){
mysql_query("UPDATE `families` SET `dcb`=`dcb`+'{$_POST['number']}', `power`=`power`+'$powererbij',`contant`=`contant`-'$gelderaf' WHERE `naam`='$familie->naam'");
}
else{
$error = 3;
}
}
else{
$error = 2;
}
}
if($_POST['item'] == 2){
if($familie->contant >= 100000*$_POST['number']){
$powererbij = 7500*$_POST['number'];
$leden1 = mysql_query("SELECT * FROM `users` WHERE `familie`='$familie->naam'");
$leden = mysql_num_rows($leden1);
$fampowererbij = $powererbij*$leden;
$gelderaf = 100000*$_POST['number'];
mysql_query("UPDATE `families` SET `fampower`=`fampower`+'{$_POST['number']}', `contant`=`contant`-'$gelderaf',`power`=`power`+'$fampowererbij' WHERE `naam`='$familie->naam'");
mysql_query("UPDATE `users` SET `power`=`power`+'$powererbij' WHERE `familie`='$familie->naam'");
}
else{
$error = 2;
}
}
if($_POST['item'] == 4){
if($familie->contant >= 150000*$_POST['number']){
$powererbij = 1800*$_POST['number'];
$gelderaf = 150000*$_POST['number'];
if($leden > 2){
mysql_query("UPDATE `families` SET `rocketlauncher`=`rocketlauncher`+'{$_POST['number']}', `power`=`power`+'$powererbij',`contant`=`contant`-'$gelderaf' WHERE `naam`='$familie->naam'");
}
else{
$error = 3;
}
}
else{
$error = 2;
}
}
if($_POST['item'] == 5){
if($familie->contant >= 180000*$_POST['number']){
$powererbij = 2160*$_POST['number'];
$gelderaf = 180000*$_POST['number'];
if($leden > 4){
mysql_query("UPDATE `families` SET `tank`=`tank`+'{$_POST['number']}', `power`=`power`+'$powererbij',`contant`=`contant`-'$gelderaf' WHERE `naam`='$familie->naam'");
}
else{
$error = 3;
}
}
else{
$error = 2;
}
}
if($_POST['item'] == 6){
if($familie->contant >= 320000*$_POST['number']){
$powererbij = 4160*$_POST['number'];
$gelderaf = 320000*$_POST['number'];
if($leden > 5){
mysql_query("UPDATE `families` SET `helicopter`=`helicopter`+'{$_POST['number']}', `power`=`power`+'$powererbij',`contant`=`contant`-'$gelderaf' WHERE `naam`='$familie->naam'");
}
else{
$error = 3;
}
}
else{
$error = 2;
}
}
if($_POST['item'] == 7){
if($familie->contant >= 550000*$_POST['number']){
$powererbij = 8250*$_POST['number'];
$gelderaf = 550000*$_POST['number'];
if($leden > 7){
mysql_query("UPDATE `families` SET `gevechtsvliegtuig`=`gevechtsvliegtuig`+'{$_POST['number']}', `power`=`power`+'$powererbij',`contant`=`contant`-'$gelderaf' WHERE `naam`='$familie->naam'");
}
else{
$error = 3;
}
}
else{
$error = 2;
}
}
if($_POST['item'] == 8){
if($familie->contant >= 1000000*$_POST['number']){
$powererbij = 18000*$_POST['number'];
$gelderaf = 1000000*$_POST['number'];
if($leden > 29){
mysql_query("UPDATE `families` SET `battleship`=`battleship`+'{$_POST['number']}', `power`=`power`+'$powererbij',`contant`=`contant`-'$gelderaf' WHERE `naam`='$familie->naam'");
}
else{
$error = 3;
}
}
else{
$error = 2;
}
}
if($_POST['item'] == 9){
if($familie->contant >= 5000000*$_POST['number']){
$powererbij = 100000*$_POST['number'];
$gelderaf = 5000000*$_POST['number'];
if($leden > 49){
mysql_query("UPDATE `families` SET `vliegdekschip`=`vliegdekschip`+'{$_POST['number']}', `power`=`power`+'$powererbij',`contant`=`contant`-'$gelderaf' WHERE `naam`='$familie->naam'");
}
else{
$error = 3;
}
}
else{
$error = 2;
}
}
if(isset($_POST['personal'])){
mysql_query("UPDATE `families` SET `info`='{$_POST['personal']}' WHERE `naam`='$familie->naam'");
}
?>
							<div class="title_bg">
			<div class="title"><?if($_GET['x'] != ""){echo$_GET['x'];}else{echo"Familiebeheer";}?></div>
		</div>
		
		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
		<table width="100%" class="mod_list" cellspacing="2" cellpadding="2">
		<div style="background-color:#dbd2b7; ">
		<br>
		<table cellpadding="4" cellspacing="0" width="100%" align="center"><tr><td>


<?

if($_GET['x'] == ""){
if($data->famlevel > 0){
?>
Opties:<BR><BR><BR>
>> <a href="index.php?a=familiebeheer&x=Bank">Bank</a><BR>
>> <a href="index.php?a=familiebeheer&x=Doneer">Doneren</a><BR>
>> <a href="index.php?a=familiebeheer&x=Aannemen">Leden aannemen</a><BR>
>> <a href="index.php?a=familiebeheer&x=Verwijderen">Leden verwijderen/rang veranderen</a><BR>
>> <a href="index.php?a=familiebeheer&x=Shop">Shop</a><BR>
>> <a href="index.php?a=familiebeheer&x=Profiel">Profiel aanpassen</a>

<?}}
if($_GET['x'] == Profiel){
if($data->famlevel > 0){
if(isset($_POST['personal'])){
echo "<FONT color=green><b><BR>Profiel aangepast!</b></FONT><BR>";
}
?>
	<form method="POST">
	<table width="90%">
		<tr>
			<td>
LET OP: Codes gaan in UBB! Hierbij kun je denken aan [img] of [url] tags!<BR><BR>
						<textarea name="personal" id="profile" rows="15" style="width:100%"><?if(!isset($_POST['personal'])){echo $familie->info;}else{echo $_POST['personal'];}?></textarea>
					</td>
		</tr>
		<tr>
			<td>
				<input type="submit" class="mod_submit" value="Opslaan">
			</td>
		</tr>
	</table>
	</form>
<?}}
if($_GET['x'] == Shop){
if($data->famlevel > 0){
if($error == 1){
echo "<b><FONT color=red>Je moet een geldig aantal invoeren! </FONT></b><BR>";
}
if($error == 2){
echo "<b><FONT color=red>Je hebt niet genoeg geld! </FONT></b><BR>";
}
if($error == 3){
echo "<b><FONT color=red>Je hebt niet genoeg leden! </FONT></b><BR>";
}
if($_POST['item'] > 0){
if($error == ""){
echo "<b><FONT color=green>Aankoop geslaagd. </FONT></b><BR>";
}
}
?>

			<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
			<form method="POST">
				<input type="hidden" name="item" value="1">
			<tr>
				<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Clubhuis</td>
			</tr>
			<tr>
				<td rowspan=6 width="110px" height="110px" valign="middle" align="center">
											<img src="images/shop/family/familie_villa.gif">
									</td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
				<td>Prijs: <b>&euro;10.000</b></td>
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
				<td>Koop ruimte voor 5 extra leden in je familie.</td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/asterisk_orange.gif"></td>
				<td valign="middle" >
					De familie heeft er <b><?
                    $clubhuis = $familie->maxleden/5-1;
                    echo$clubhuis;?></b> in zijn bezit.				</td>
			</tr>
			</form>
					</table>

		<br>
			<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
			<form method="POST">
				<input type="hidden" name="item" value="3">
			<tr>
				<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Daisy cutter bom</td>
			</tr>
			<tr>
				<td rowspan=6 width="110px" height="110px" valign="middle" align="center">
											<img src="images/shop/family/familie_daisycutter.gif">
									</td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
				<td>Prijs: <b>&euro;60.000</b></td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
				<td>Power: <b>720</b></td>
			</tr>
<?if($leden >= 2){?>
        				<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
				<td valign="middle"><form method="post" style="display: inline;">Aantal: <input type="text" name="number" class="input" size="5">&nbsp;<input type="submit" value="Kopen!" class="mod_submit"></form></td>
			</tr><?}?>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/information.gif"></td>
				<td>Opmerkingen: om dit wapen te kopen heb je minimaal 2 leden in je familie nodig!</td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/asterisk_orange.gif"></td>
				<td valign="middle" >
					De familie heeft er <b><?echo$familie->dcb;?></b> in zijn bezit.				</td>
			</tr>
			</form>
					</table>

		<br>
			<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
			<form method="POST">
				<input type="hidden" name="item" value="2">
			<tr>
				<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Familie power</td>
			</tr>
			<tr>
				<td rowspan=6 width="110px" height="110px" valign="middle" align="center">
											<img src="images/shop/family/familie_power.gif">
									</td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
				<td>Prijs: <b>&euro;100.000</b></td>
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
				<td>Koop voor elk familielid 7500 extra power!</td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/asterisk_orange.gif"></td>
				<td valign="middle" >
					De familie heeft er <b><?echo$familie->fampower;?></b> in zijn bezit.				</td>
			</tr>
			</form>
					</table>

		<br>
			<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
			<form method="POST">
				<input type="hidden" name="item" value="4">
			<tr>
				<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Rocket launcher</td>
			</tr>
			<tr>
				<td rowspan=6 width="110px" height="110px" valign="middle" align="center">
											<img src="images/shop/family/familie_rocketlauncher.gif">
									</td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
				<td>Prijs: <b>&euro;150.000</b></td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
				<td>Power: <b>1.800</b></td>
			</tr>
<?if($leden >= 3){?>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
				<td valign="middle"><form method="post" style="display: inline;">Aantal: <input type="text" name="number" class="input" size="5">&nbsp;<input type="submit" value="Kopen!" class="mod_submit"></form></td>
			</tr><?}?>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/information.gif"></td>
				<td>Opmerkingen: om dit wapen te kopen heb je minimaal 3 leden in je familie nodig!</td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/asterisk_orange.gif"></td>
				<td valign="middle" >
					De familie heeft er <b><?echo$familie->rocketlauncher;?></b> in zijn bezit.				</td>
			</tr>
			</form>
					</table>

		<br>
			<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
			<form method="POST">
				<input type="hidden" name="item" value="5">
			<tr>
				<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Tank</td>
			</tr>
			<tr>
				<td rowspan=6 width="110px" height="110px" valign="middle" align="center">
											<img src="images/shop/family/familie_tank.gif">
									</td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
				<td>Prijs: <b>&euro;180.000</b></td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
				<td>Power: <b>2.160</b></td>
			</tr>
<?if($leden >= 5){?>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
				<td valign="middle"><form method="post" style="display: inline;">Aantal: <input type="text" name="number" class="input" size="5">&nbsp;<input type="submit" value="Kopen!" class="mod_submit"></form></td>
			</tr><?}?>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/information.gif"></td>
				<td>Opmerkingen: om dit wapen te kopen heb je minimaal 5 leden in je familie nodig!</td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/asterisk_orange.gif"></td>
				<td valign="middle" >
					De familie heeft er <b><?echo$familie->tank;?></b> in zijn bezit.				</td>
			</tr>
			</form>
					</table>

		<br>
			<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
			<form method="POST">
				<input type="hidden" name="item" value="6">
			<tr>
				<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Helicopter</td>
			</tr>
			<tr>
				<td rowspan=6 width="110px" height="110px" valign="middle" align="center">
											<img src="images/shop/family/familie_helicopter.gif">
									</td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
				<td>Prijs: <b>&euro;320.000</b></td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
				<td>Power: <b>4.160</b></td>
			</tr>
<?if($leden >= 6){?>
						<tr>
			<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
				<td valign="middle"><form method="post" style="display: inline;">Aantal: <input type="text" name="number" class="input" size="5">&nbsp;<input type="submit" value="Kopen!" class="mod_submit"></form></td>
			</tr><?}?>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/information.gif"></td>
				<td>Opmerkingen: om dit wapen te kopen heb je minimaal 6 leden in je familie nodig!</td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/asterisk_orange.gif"></td>
				<td valign="middle" >
					De familie heeft er <b><?echo$familie->helicopter;?></b> in zijn bezit.				</td>
			</tr>
			</form>
					</table>

		<br>
			<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
			<form method="POST">
				<input type="hidden" name="item" value="7">
			<tr>
				<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Gevechtsvliegtuig</td>
			</tr>
			<tr>
				<td rowspan=6 width="110px" height="110px" valign="middle" align="center">
											<img src="images/shop/family/familie_vliegtuig.gif">
									</td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
				<td>Prijs: <b>&euro;550.000</b></td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
				<td>Power: <b>8.250</b></td>
			</tr>
<?if($leden >= 8){?>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
				<td valign="middle"><form method="post" style="display: inline;">Aantal: <input type="text" name="number" class="input" size="5">&nbsp;<input type="submit" value="Kopen!" class="mod_submit"></form></td>
			</tr><?}?>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/information.gif"></td>
				<td>Opmerkingen: om dit wapen te kopen heb je minimaal 8 leden in je familie nodig!</td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/asterisk_orange.gif"></td>
				<td valign="middle" >
					De familie heeft er <b><?echo$familie->gevechtsvliegtuig;?></b> in zijn bezit.				</td>
			</tr>
			</form>
					</table>

		<br>
			<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
			<form method="POST">
				<input type="hidden" name="item" value="8">
			<tr>
				<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Battleship</td>
			</tr>
			<tr>
				<td rowspan=6 width="110px" height="110px" valign="middle" align="center">
											<img src="images/shop/family/familie_battleship.gif">
									</td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
				<td>Prijs: <b>&euro;1.000.000</b></td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
				<td>Power: <b>18.000</b></td>
			</tr>
<?if($leden >= 30){?>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
				<td valign="middle"><form method="post" style="display: inline;">Aantal: <input type="text" name="number" class="input" size="5">&nbsp;<input type="submit" value="Kopen!" class="mod_submit"></form></td>
			</tr><?}?>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/information.gif"></td>
				<td>Opmerkingen: om dit wapen te kopen heb je minimaal 30 leden in je familie nodig!</td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/asterisk_orange.gif"></td>
				<td valign="middle" >
					De familie heeft er <b><?echo$familie->battleship;?></b> in zijn bezit.				</td>
			</tr>
			</form>
					</table>

		<br>
			<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
			<form method="POST">
				<input type="hidden" name="item" value="9">
			<tr>
				<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Vliegdekschip</td>
			</tr>
			<tr>
				<td rowspan=6 width="110px" height="110px" valign="middle" align="center">
											<img src="images/shop/family/familie_vliegdekschip.gif">
									</td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
				<td>Prijs: <b>&euro;5.000.000</b></td>
			</tr>
			<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
				<td>Power: <b>100.000</b></td>
			</tr>
<?if($leden >= 50){?>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
				<td valign="middle"><form method="post" style="display: inline;">Aantal: <input type="text" name="number" class="input" size="5">&nbsp;<input type="submit" value="Kopen!" class="mod_submit"></form></td>
			</tr><?}?>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/information.gif"></td>
				<td>Opmerkingen: om dit wapen te kopen heb je minimaal 50 leden in je familie nodig!</td>
			</tr>
						<tr>
				<td width="18px" align="center" valign="middle"><img src="images/icons_gif/asterisk_orange.gif"></td>
				<td valign="middle" >
					De familie heeft er <b><?echo$familie->vliegdekschip;?></b> in zijn bezit.				</td>
			</tr>
			</form>
		
					</table><br>
<?
}}
if($_GET['x'] == Verwijderen){
if($data->famlevel > 0){
?>
<BR>
<?
    $dbres				= mysql_query("SELECT * FROM `users` WHERE `familie`='$familie->naam' AND `famlevel`>'-1'");
  for($j=0+1; $info = mysql_fetch_object($dbres); $j++){
if($info->login != $familie->owner){
?>
<form method="POST">
<a href="index.php?a=profile&x=<?echo$info->id?>"><?echo$info->login?></a> -
<input type="radio" name="login" value="<?echo$info->login;?>">
<select name="rang">
<option value="0"<?if($info->famlevel == 0){?> selected<?}?>>Familie lid</option>
<option value="1"<?if($info->famlevel == 1){?> selected<?}?>>Sottocapo</option>
<option value="2"<?if($info->famlevel == 2){?> selected<?}?>>Consligliere</option>
<option value="3"<?if($info->famlevel == 3){?> selected<?}?>>Don</option>
<option value="4" >Verwijderen</option>
</select>
<BR><BR>
<?}}}?>
				<input type="submit" class="mod_submit" value="Uitvoeren" name="submitrang">
</form>
<?}
if($familie->maxleden-$leden > 0){
if($_GET['x'] == Aannemen){
if($data->famlevel > 0){
if(isset($_GET['refuse'])){
$user1 = mysql_query("SELECT * FROM `users` WHERE `id`='{$_GET['refuse']}'");
$user = mysql_fetch_object($user1);
if($user->familie == $familie->naam && $user->famlevel < 0){
echo "Je hebt $user->login afgewezen!<BR>";
}
else{
echo "$user->login wil geen lid worden van $familie->naam!<BR>";
}}
if(isset($_GET['accept'])){
$user1 = mysql_query("SELECT * FROM `users` WHERE `id`='{$_GET['accept']}'");
$user = mysql_fetch_object($user1);
if($user->familie == $familie->naam && $user->famlevel < 0){
echo "Je hebt $user->login aangenomen!<BR>";
}
else{
echo "$user->login wil geen lid worden van $familie->naam!<BR>";
}}
if(isset($_GET['refuse'])){
$user1 = mysql_query("SELECT * FROM `users` WHERE `id`='{$_GET['refuse']}'");
$user = mysql_fetch_object($user1);
if($user->familie == $familie->naam && $user->famlevel < 0){
mysql_query("UPDATE `users` SET `famlevel`='0',`familie`='' WHERE `id`='$user->id'");
}}
if(isset($_GET['accept'])){
$user1 = mysql_query("SELECT * FROM `users` WHERE `id`='{$_GET['accept']}'");
$user = mysql_fetch_object($user1);
if($user->familie == $familie->naam && $user->famlevel < 0){
mysql_query("UPDATE `users` SET `famlevel`='0' WHERE `id`='$user->id'");
mysql_query("UPDATE `families` SET `power`=`power`+'$user->power' WHERE `naam`='$familie->naam'");
}}
    $dbres				= mysql_query("SELECT * FROM `users` WHERE `familie`='$familie->naam' AND `famlevel`='-1' ORDER BY `login`");
$count = mysql_num_rows($dbres);
if($count == 0){
echo "<i>Er zijn geen leden die lid willen worden van $familie->naam.</i>";
}
  for($j=0+1; $info = mysql_fetch_object($dbres); $j++){
?>
<a href="index.php?a=profile&x=<?echo$info->id?>"><?echo$info->login?></a> - <a href="index.php?a=familiebeheer&x=Aannemen&accept=<?echo$info->id?>">Aannemen</a>/<a href="index.php?a=familiebeheer&x=Aannemen&refuse=<?echo$info->id?>">Weigeren</a><BR><BR>
<?}}}}
else{
echo "<i>Maximaal aantal leden berijkt!</i>";
}
if($_GET['x'] == Doneer){
?>
	<form method="POST">
		<tr>
			<td>
				€ <input type="text" name="doneer" size="25" value="">
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="submit" class="mod_submit" value="Doneer!" name="doneren">
</form>
 <?
if(isset($_POST['doneren'])){
if($_POST['doneer'] == ""){
echo "<BR><BR><td>Wil je wel een geldig getal invoeren?</td>";
}
}
if($data->contant < $doneer){
echo "<BR><BR><td>Zoveel geld heb je niet contant!</td>";
}
}
if($_GET['x'] == Bank){
if($data->famlevel > 0){
?>
<center><?echo$familie->naam;?> heeft €<?echo$bank;?>,- op de bank staan.<BR><BR><?echo$familie->naam;?> heeft €<?echo$contant;?>,- contant staan.</center>
	<form method="POST">
		<tr>
			<td>Storten:</td>
			<td>
				€ <input type="text" name="stort" size="25" value="" maxlength="6">
			</td>
		</tr>
		<tr>
			<td>Halen:</td>
			<td>
				€ <input type="text" name="haal" size="25" value="">
			</td>
		</tr>
		
		<tr>
			<td>

Je kan nog <?echo$familie->storten;?> keer storten.
<?if(isset($_POST['halen'])){
if($_POST['haal'] == ""){
echo "<BR><BR><td>Wil je wel een geldig getal invoeren?</td>";
}
}
if(isset($_POST['storten'])){
if($_POST['stort'] == ""){
echo "<BR><BR><td>Wil je wel een geldig getal invoeren?</td>";
}
}
if($familie->contant < $stort){
echo "<BR><BR><td>Zoveel geld staat er niet contant!</td>";
}
if($familie->bank < $haal){
echo "<BR><BR><td>Zoveel geld staat er niet op de bank!</td>";
}
?>
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="submit" class="mod_submit" value="Storten" name="storten">
				<input type="submit" class="mod_submit" value="Halen" name="halen">
</form>
			</td>
		</tr>
<?}}?>
	</table>
	</div>

		</td></tr></table>
		</div>

		<table width='100%' cellspacing='2' cellpadding='2'>
			<tr>
		
				<td class='content_bottom'></td>
			</tr>
		</table>
		<br>		</div>
	</td>
	</tr>

	</table>
	</td>
