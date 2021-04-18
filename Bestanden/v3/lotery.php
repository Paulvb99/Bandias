<?
$loterij1 = mysql_query("SELECT * FROM `loterij`");
$loterij = mysql_fetch_object($loterij1);
$kans1 = $data->loten/$loterij->lotenverkoop;
$kans = $kans1*100;
$maglotenkopen = 1000-$data->loten;
if($_POST['number'] != ""){
if($_POST['number'] > 0){
if($_POST['number'] <= $maglotenkopen){
$kosten = $_POST['number']*1000;
if($contant >= $kosten){
mysql_query("UPDATE `users` SET `loten`=`loten`+'{$_POST['number']}',`contant`=`contant`-'$kosten' WHERE `id`='$data->id'");
mysql_query("UPDATE `loterij` SET `lotenverkoop`=`lotenverkoop`+'{$_POST['number']}'");
$error = niks;
}else{$error = 1;}
}else{$error = 2;}
}else{$error = 3;}
}
if($error == 1){
?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Je hebt niet genoeg geld om zoveel loten te kopen					</td>
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
<?
}if($error == 2){
?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Je probeert meer loten te kopen dan is toegestaan					</td>
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
<?
}if($error == 3){
?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Je hebt geen geldig aantal loten ingevuld					</td>
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
<?
}if($error == niks){
$_SESSION['mission'] = "Koop een lot voor de loterij";
?>

			<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup" align="center">
				<tr>
					<td>
						De loten zijn gekocht, we wensen je veel geluk bij de trekking				</td>
				</tr>
				<tr>
					<td>
						<br><br>
							<a href="index.php?a=lotery" class="msg_ok">Klik hier indien je niet automatisch verder gaat.</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
<script language="javascript">
	setTimeout("document.location.href='index.php?a=lotery'",(3000*2));
</script>
		</div>
	</td>
	</tr>

	</table>
	</td>
<?}
if($error == ""){
?>


					<div class="title_bg">
			<div class="title">Loterij</div>
		</div>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
			<img src="images/loterij.jpg" align="right" style="margin-left:10px;">
<?
$prijs1 = number_format($loterij->lotenverkoop*750, 0, '.', '.');
$prijs2 = number_format($loterij->lotenverkoop*200, 0, '.', '.');
$prijs3 = number_format($loterij->lotenverkoop*50, 0, '.', '.');
?>
	<b>Welkom bij de loterij!</b><br>
	Elke vrijdag avond om precies 18:00u vind de trekking plaatst. <br>
	De prijswinnaars zullen hun gewonnen bedrag automatisch op hun bankrekening ontvangen (je hoeft hiervoor ook niet online te zijn). <br><br>
	Op dit moment zijn er <?echo$loterij->lotenverkoop;?> loten verkocht.
		<br><br>

		<center>
		<table width="300" cellspacing="2" cellpadding="2" class="mod_list">
		<tr>

			<td colspan="4"><strong>Daarmee staan de prijzen op:</strong></td>
		</tr>

			<tr style="text-align:center;">
				<td class="icon"><img src="images/icons_gif/award_star_gold_3.gif" alt="Plaats"></td>
				<td style="text-align:left;">1e prijs</td>
				<td class="icon"><img src="images/icons_gif/money.gif" alt="Prijs"></td>
				<td>&euro; <?echo$prijs1;?>,-</td>

			</tr>

			<tr style="text-align:center;">
				<td class="icon"><img src="images/icons_gif/award_star_silver_3.gif" alt="Plaats"></td>
				<td style="text-align:left;">2e prijs</td>
				<td class="icon"><img src="images/icons_gif/money.gif" alt="Prijs"></td>
				<td>&euro; <?echo$prijs2;?>,-</td>
			</tr>


			<tr style="text-align:center;">
				<td class="icon"><img src="images/icons_gif/award_star_bronze_3.gif" alt="Plaats"></td>
				<td style="text-align:left;">3e prijs</td>
				<td class="icon"><img src="images/icons_gif/money.gif" alt="Prijs"></td>
				<td>&euro; <?echo$prijs3;?>,-</td>
			</tr>
		</table>
		</center>

		<br><br>
		Op dit moment heb je <b><?echo$data->loten;?></b> in bezit, je mag er dus nog <b><?echo$maglotenkopen;?></b> kopen!		<br><br>

		<form method=POST>
		<table width="100%" class="mod_list">
		<tr>
			<td width="5%" align="center"><img src="images/icons_gif/money_euro.gif" border="0px"></td>
			<td width="25%" style="padding:5px;"><b>Aantal loten</b></td>
			<td style="padding:5px;"><input type=text name="number" style="width: 400px" class="input"></td>
			<td style="padding:5px;" align="center"><input type=submit name=submit value=Koop class="mod_submit"></tD>
		</tr>
		<tr>
			<td width="5%" align="center"><img src="images/icons_gif/information.gif" align="top"></td>
			<td width="20%" style="padding:5px;" colspan="3">…Èn lot kost Ä1.000,- en je mag er maximaal 1000 kopen.</td>
		</tr>
		</table>
		</form>
		</td></tr></table>
		</div>

		<table width='100%' cellspacing='2' cellpadding='2'>
			<tr>

				<td class='content_bottom'></td>
			</tr>
		</table>
		<br>
		<div class="title_bg">
			<div class="title">De prijswinnaars</div>
		</div>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>

<table width="100%" cellspacing="2" cellpadding="2" class="mod_list">
<?if($loterij->winnaar1 != ""){
$winnaar11 = mysql_query("SELECT * FROM `users` WHERE `login`='$loterij->winnaar1'");
$winnaar22 = mysql_query("SELECT * FROM `users` WHERE `login`='$loterij->winnaar2'");
$winnaar33 = mysql_query("SELECT * FROM `users` WHERE `login`='$loterij->winnaar3'");
$winnaar1 = mysql_fetch_object($winnaar11);
$winnaar2 = mysql_fetch_object($winnaar22);
$winnaar3 = mysql_fetch_object($winnaar33);
$schammel1				= mysql_query("SELECT * FROM `users` WHERE UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(`online`) < 300 AND `login`='$winnaar1->login'");
$online1 = mysql_fetch_object($schammel1);
$schammel2				= mysql_query("SELECT * FROM `users` WHERE UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(`online`) < 300 AND `login`='$winnaar2->login'");
$online2 = mysql_fetch_object($schammel2);
$schammel3				= mysql_query("SELECT * FROM `users` WHERE UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(`online`) < 300 AND `login`='$winnaar3->login'");
$online3 = mysql_fetch_object($schammel3);
if($winnaar1->login == $online1->login){$letter1 = n;}else{$letter1 = ff;}
if($winnaar2->login == $online2->login){$letter2 = n;}else{$letter2 = ff;}
if($winnaar3->login == $online3->login){$letter3 = n;}else{$letter3 = ff;}
?>
	<tr>
		<td align="center" width="5%">&nbsp;</td>
		<td><b>Plaats</b></td>
		<td width="5%"></td>
		<td><b>Gebruiker</b></td>
	</tr>
	<tr>
						<td align="center"><img src="images/icons_gif/award_star_gold_3.gif" alt="Plaats"></td>
						<td>1</td>
						<td align="center"><img src="images/icons_gif/status_o<?echo$letter1;?>line.gif" title="O<?echo$letter1;?>line"></td>
						<td><a href="index.php?a=profile&x=<?echo$winnaar1->id;?>"><?if($winnaar1->admin > 0){echo "<font color='red'>";} if($winnaar1->moderator > 0){echo "<font color='#FF6600'>";}if($winnaar1->vermoord > 0){?><s><?}  echo $winnaar1->login; if($winnaar1->vermoord == 1){?></s><?} if($winnaar1->admin > 0 || $winnaar1->moderator > 0){echo "</font>";}if($winnaar1->vipdays > 0){echo '<img src="images/star.gif" border="0" width="10" height="10" alt="Betaald account">';}?></a></td>
					</tr><tr>
						<td align="center"><img src="images/icons_gif/award_star_silver_3.gif" alt="Plaats"></td>
						<td>2</td>
						<td align="center"><img src="images/icons_gif/status_o<?echo$letter2;?>line.gif" title="O<?echo$letter2;?>line"></td>
						<td><a href="index.php?a=profile&x=<?echo$winnaar2->id;?>"><?if($winnaar2->admin > 0){echo "<font color='red'>";} if($winnaar2->moderator > 0){echo "<font color='#FF6600'>";}if($winnaar2->vermoord > 0){?><s><?}  echo $winnaar2->login; if($winnaar2->vermoord == 1){?></s><?} if($winnaar2->admin > 0 || $winnaar2->moderator > 0){echo "</font>";}if($winnaar2->vipdays > 0){echo '<img src="images/star.gif" border="0" width="10" height="10" alt="Betaald account">';}?></a></td>
					</tr><tr>
						<td align="center"><img src="images/icons_gif/award_star_bronze_3.gif" alt="Plaats"></td>
						<td>3</td>
						<td align="center"><img src="images/icons_gif/status_o<?echo$letter3;?>line.gif" title="O<?echo$letter3;?>line"></td>
						<td><a href="index.php?a=profile&x=<?echo$winnaar3->id;?>"><?if($winnaar3->admin > 0){echo "<font color='red'>";} if($winnaar3->moderator > 0){echo "<font color='#FF6600'>";}if($winnaar3->vermoord > 0){?><s><?}  echo $winnaar3->login; if($winnaar3->vermoord == 1){?></s><?} if($winnaar3->admin > 0 || $winnaar3->moderator > 0){echo "</font>";}if($winnaar3->vipdays > 0){echo '<img src="images/star.gif" border="0" width="10" height="10" alt="Betaald account">';}?></a></td>
					</tr><?}else{echo"<b><center>Er zijn nog geen prijswinnaars bekend.</center></b>";}?></table>
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
