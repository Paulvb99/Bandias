<?
if($_GET['x'] > 0){
$scooter1 = mysql_query("SELECT * FROM `scooters` WHERE `id`='{$_GET['x']}'");
$scooter = mysql_fetch_object($scooter1);
if($scooter->schade > 59){$error = 4;}
if($scooter->owner != $data->login){$error = 3;}
if($error != 3 && $error != 4){
if($scooter->soort == 1){$level = 12;}
if($scooter->soort == 2){$level = 1;}
if($scooter->soort == 3){$level = 13;}
if($scooter->soort == 4){$level = 5;}
if($scooter->soort == 5){$level = 3;}
if($scooter->soort == 6){$level = 2;}
if($scooter->soort == 7){$level = 14;}
if($scooter->soort == 8){$level = 4;}
if($scooter->soort == 9){$level = 7;}
if($scooter->soort == 10){$level = 17;}
if($scooter->soort == 11){$level = 6;}
if($scooter->soort == 12){$level = 11;}
if($scooter->soort == 13){$level = 8;}
if($scooter->soort == 14){$level = 9;}
if($scooter->soort == 15){$level = 10;}
if($scooter->soort == 16){$level = 15;}
if($scooter->soort == 17){$level = 16;}
$otherlevel = rand(1,17);
$jatkans = rand(0,5);
if($level > $otherlevel){
$winst = rand(2000,6000);
$winst = $winst*$scooter->soort;
$schade = rand(5,35);
$error = niks;
mysql_query("UPDATE `users` SET `contant`=`contant`+'$winst' WHERE `login`='$data->login'");
mysql_query("UPDATE `scooters` SET `schade`=`schade`+'$schade' WHERE `id`='$scooter->id'");
}
else{
$schade = rand(5,20);
$error = 1;
mysql_query("UPDATE `scooters` SET `schade`=`schade`+'$schade' WHERE `id`='$scooter->id'");
}
if($jatkans == 5){
$error = 2;
mysql_query("DELETE FROM `scooters` WHERE `id`='$scooter->id'");
}
}
}
if($error == 1){
?>
		<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup" align="center">
				<tr>
					<td>
						Je hebt verloren! Je scooter heeft veel schade opgelopen. Ga naar de garage om hem te repareren!					</td>
				</tr>
				<tr>
					<td>
						<br><br>
							<a href="index.php?a=scootrace" class="msg_ok">Klik hier indien je niet automatisch verder gaat.</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<script language="javascript">
	setTimeout("document.location.href='index.php?a=scootrace'",(3000*2));
</script>
		</div>
	</td>
	</tr>

	</table>
	</td>
<?}
if($error == 3){
?>
			<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Kan de scooter niet vinden in je garage					</td>
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
			<table class="div_popup" align="center">
				<tr>
					<td>
						Je bent aangehouden en de politie heeft je scooter afgepakt!					</td>
				</tr>
				<tr>
					<td>
						<br><br>
							<a href="index.php?a=scootrace" class="msg_ok">Klik hier indien je niet automatisch verder gaat.</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<script language="javascript">
	setTimeout("document.location.href='index.php?a=scootrace'",(3000*2));
</script>
		</div>
	</td>
	</tr>

	</table>
	</td>
<?}
if($error == 4){
?>
		<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup" align="center">
				<tr>
					<td>
						Je scooter kwam niet vooruit toen je gas gaf. Je hebt <u>geen</u> schade opgelopen!					</td>
				</tr>
				<tr>
					<td>
						<br><br>
							<a href="index.php?a=scootrace" class="msg_ok">Klik hier indien je niet automatisch verder gaat.</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<script language="javascript">
	setTimeout("document.location.href='index.php?a=scootrace'",(3000*2));
</script>
		</div>
	</td>
	</tr>

	</table>
	</td>
<?}
if($error == niks){
?>
		<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup" align="center">
				<tr>
					<td>
						Je hebt gewonnen. Je prijs bedraagt: &euro; <?echo$winst;?>,- Veel plezier er mee!					</td>
				</tr>
				<tr>
					<td>
						<br><br>
							<a href="index.php?a=scootrace" class="msg_ok">Klik hier indien je niet automatisch verder gaat.</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<script language="javascript">
	setTimeout("document.location.href='index.php?a=scootrace'",(3000*2));
</script>
		</div>
	</td>
	</tr>

	</table>
	</td>
<?}if($error == ""){?>


					<div class="title_bg">
			<div class="title">Scooter Races</div>
		</div>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
		Je hebt de mogelijkheid om te racen met gestolen scooter's. De scooter mag niet meer dan 60% schade hebben, omdat hij dan niet meer vooruit komt.<br><br>
Als je een race wint ontvang je daarvoor geld, afhankelijk van hoe goed je tegenstander was. Het kan echter ook zijn dat de politie je scooter inneemt of dat je scooter schade oploopt!<br><br>
<table width="100%" border="0" cellspacing="2" cellpadding="2" align="center" class="mod_list">
	<tr>
		<td><strong>Afbeelding</strong></td>
		<td><strong>Naam</strong></td>
		<td><strong>Waarde</strong></td>
		<td><strong>Schade</strong></td>
		<td><strong>Race</strong></td>
	</tr>
<?
$dbres = mysql_query("SELECT * FROM `scooters` WHERE `owner`='$data->login' ORDER BY `id`");
      while($list = mysql_fetch_object($dbres))
{
$plaatje = array("","puch.jpg","citta.jpg","prima sf.jpg","sense sd.jpg","rusch.jpg","benelli.jpg","neos.jpg","piaggio.jpg","kymco.jpg","vespa.jpg","malaguti.jpg","speedfighter 3.jpg","aerox.jpg","aprilia sr.jpg","area.jpg","runner.jpg","45 car.jpg");
$naam = array("","Puch","Citta","Prima SF","Sense SD","Rusch","Benelli","Neos","Piaggio","Kymco","Vespa","Malaguti","Speedfighter 3","Aerox","Aprilia SR","Aprilia Area","Runner","Brommobiel");
$plaatje = $plaatje[$list->soort];
$naam = $naam[$list->soort];
$schade = $list->waarde/100;
$schadekosten = $list->schade*$schade;
$waarde = number_format($list->waarde-$schadekosten, 0, '.' , '.');
?>
					<tr>
					<td><img src="images/scooters/<?echo$plaatje;?>" width="100"></td>
					<td><?echo$naam;?></td>
					<td>&euro; <?echo$waarde;?></td>
					<td><?echo$list->schade;?> %</td>
					<td>
													<?if($list->schade < 60){?><a href="index.php?a=scootrace&x=<?echo$list->id;?>"><?}?><font class="mod_crim_race_<?if($list->schade > 59){?>not<?}?>available"><?if($list->schade > 59){?>Race<?}else{?>Racen!<?}?></font><?if($list->schade < 60){?></a><?}?>
											</td>
				</tr>
<?}?>
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
<?}
if($error == niks){
$_SESSION['mission'] = "Win een race met een gestolen scooter";
}
?>
