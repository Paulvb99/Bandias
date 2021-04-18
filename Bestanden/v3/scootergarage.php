<?
if($_GET['mode'] == sell){
$scooter1 = mysql_query("SELECT * FROM `scooters` WHERE `owner`='$data->login' AND `id`='{$_GET['x']}'");
$scooter = mysql_fetch_object($scooter1);
if($scooter->owner != $data->login){
$error = 1;
}
if($error == ""){
$schade = $scooter->waarde/100;
$schadekosten = $scooter->schade*$schade;
$waarde = $scooter->waarde-$schadekosten;
$showwaarde = number_format($waarde, 0, '.', '.');
mysql_query("UPDATE `users` SET `contant`=`contant`+'$waarde' WHERE `id`='$data->id'");
mysql_query("DELETE FROM `scooters` WHERE `id`='$scooter->id'");
$error = verkocht;
}}
if($_GET['mode'] == repair){
$scooter1 = mysql_query("SELECT * FROM `scooters` WHERE `owner`='$data->login' AND `id`='{$_GET['x']}'");
$scooter = mysql_fetch_object($scooter1);
if($scooter->owner != $data->login){
$error = 1;
}
if($error == ""){
$schade = $scooter->waarde/100;
$schadekosten = $scooter->schade*$schade;
if($data->contant < $schadekosten){
$error = 2;
}else{
mysql_query("UPDATE `users` SET `contant`=`contant`-'$schadekosten' WHERE `id`='$data->id'");
mysql_query("UPDATE `scooters` SET `schade`='0' WHERE `id`='$scooter->id'");
$error = niks;
}}}
if($error == 1){
?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Deze scooter is helemaal niet van jou!					</td>
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
<?}if($error == 2){?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Je hebt niet genoeg geld om je scooter te kunnen repareren					</td>
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
if($error == niks){?>
			<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup" align="center">
				<tr>
					<td>
						Je hebt je scooter gerepareerd, hij heeft weer 0% schade!					</td>
				</tr>
				<tr>
					<td>
						<br><br>
							<a href="index.php?a=scootergarage" class="msg_ok">Klik hier indien je niet automatisch verder gaat.</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
<script language="javascript">
	setTimeout("document.location.href='index.php?a=scootergarage'",(3000*2));
</script>
		</div>
	</td>
	</tr>

	</table>
	</td>
<?}if($error == verkocht){?>
			<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup" align="center">
				<tr>
					<td>
						Je hebt je scooter verkocht voor &euro;<?echo$showwaarde;?>,-					</td>
				</tr>
				<tr>
					<td>
						<br><br>
							<a href="index.php?a=scootergarage" class="msg_ok">Klik hier indien je niet automatisch verder gaat.</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
<script language="javascript">
	setTimeout("document.location.href='index.php?a=scootergarage'",(3000*2));
</script>
		</div>
	</td>
	</tr>

	</table>
	</td>
<?}if($error == ""){?>
					<div class="title_bg">
			<div class="title">Scooter Garage</div>
		</div>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
					<table width="97%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
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
					<td colspan="3"><font size="4" style="padding-left:7px;"><font size="4"><?echo$naam;?></font></td>
				</tr>
				<tr>
					<td rowspan="4" width="120px" align="center"><img src="images/scooters/<?echo$plaatje;?>" width="100"></td>
					<td width="18px" align="center"><img src='images/icons_gif/money.gif'></td>
					<td>Waarde: <b>&euro; <?echo$waarde;?></b></td>
				</tr>
				<tr>
					<td width="18px" align="center"><img src='images/icons_gif/error.gif'></td>
					<td>Schade: <b><?echo$list->schade;?> %</b></td>
				</tr>
				<tr>
					<td width="18px" align="center"><a href="index.php?a=scootergarage&mode=repair&x=<?echo$list->id;?>"><img src="images/icons_gif/wrench.gif" border="0" alt="Repareer!"></a></td>
					<td><b><a href="index.php?a=scootergarage&mode=repair&x=<?echo$list->id;?>">Repareer</a></b></td>
				</tr>
				<tr>
					<td width="18px" align="center"><a href="index.php?a=scootergarage&mode=sell&x=<?echo$list->id;?>"><img src="images/icons_gif/money_add.gif" border="0" alt="Verkoop!"></a></td>
					<td><b><a href="index.php?a=scootergarage&mode=sell&x=<?echo$list->id;?>">Verkoop</a></b></td>
				</tr>
<?}if(mysql_num_rows($dbres) == 0){?><i>Je hebt geen scooter's</i><?}?>
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
<?}?>
