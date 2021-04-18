<?
$train = $_POST['train'];
$dituur = date(H);
$extrauur = $dituur+1;
if($extrauur > 24){$extrauur = "00";}
$uur = $extrauur;
if($train > 0){
if($data->contant >= 1500){
$error = niks;
$select = mysql_query("SELECT * FROM `station` WHERE `stad`='$train'");
$select2 = mysql_fetch_object($select);
mysql_query("UPDATE `users` SET `aankomst`='$uur',`vliegen`='0000-00-00 00:00:00',`contant`=`contant`-'1500',`aankomststad`='$train' WHERE `id`='$data->id'");
mysql_query("UPDATE `users` SET `stationkaarten`=`stationkaarten`+'1',`bank`=`bank`+'1500' WHERE `login`='$select2->eigenaar'");
$_SESSION['mission'] = "Reis naar een andere stad";
}
else{$error = 1;}
}
if($_GET['f'] == cancel){
$error = annuleren;
mysql_query("UPDATE `users` SET `aankomst`='25' WHERE `id`='$data->id'");
?>
			<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup" align="center">
				<tr>
					<td>
						Je reis is geannuleerd					</td>
				</tr>
				<tr>
					<td>
						<br><br>
							<a href="index.php?a=station" class="msg_ok">Klik hier indien je niet automatisch verder gaat.</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<script language="javascript">
	setTimeout("document.location.href='index.php?a=station'",(2000*2));
</script>
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
						Het ticket is geboekt, je zal automatisch met de volgende trein meegaan					</td>
				</tr>
				<tr>
					<td>
						<br><br>
							<a href="index.php?a=station" class="msg_ok">Klik hier indien je niet automatisch verder gaat.</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<script language="javascript">
	setTimeout("document.location.href='index.php?a=station'",(4000*2));
</script>
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
						<b>FOUT!</b><br><br>Je hebt niet genoeg geld om deze reis te maken					</td>
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
$dit1 = mysql_query("SELECT * FROM `station` WHERE `stad`='$data->city'");
$dit = mysql_fetch_object($dit1);
if($dit->eigenaar == ""){
$error = eigenaar;
?>
					<div class="title_bg">
			<div class="title">Vliegveld</div>
		</div>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
		 	<br>
 	<img src='images/icons_gif/information.gif' align='top'>
 	<font color='#3673AF'>
 		<b>
 			Dit station heeft nog geen eigenaar!<br>
 			Ga naar de veiling om het station te kopen! 		</b>
 	</font>
 	<br>
 	<br>
 	<input type="button" name="cancel" value="Koop station!" class="mod_submit" onclick="document.location.href = 'index.php?a=veiling'"><br>

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
<?
}
if($error == ""){
if($data->aankomst != 25 && $data->aankomststad != 0){
$error = aanhetreizen;
$next = array("","Turijn","Palermo","Milaan","Rome","Catania","Corleone");
$next = $next[$data->aankomststad];
?>
					<div class="title_bg">
			<div class="title">Station</div>
		</div>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
		 	<br>
 	<img src='images/icons_gif/information.gif' align='top'>
 	<font color='#3673AF'>
 		<b>
 			Je zit te wachten op de trein naar <?echo$next;?>...<br>
 			Deze reis vertrekt om <?echo$data->aankomst;?> uur 		</b>
 	</font>
 	<br>
 	<br>
 	<input type="button" name="cancel" value="Annuleer de reis!" class="mod_submit" onclick="document.location.href = 'index.php?a=station&f=cancel'"><br>
 	<small>*Let op! Je krijg je geld niet meer terug bij annulering</small>

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
<?}}
if($error == ""){
$stations1 = mysql_query("SELECT * FROM `station` WHERE `stad`='$data->city'");
$stations = mysql_fetch_object($stations1);
$station11 = mysql_query("SELECT * FROM `station` WHERE `stad`='1'");
$station1 = mysql_fetch_object($station11);
$station22 = mysql_query("SELECT * FROM `station` WHERE `stad`='2'");
$station2 = mysql_fetch_object($station22);
$station33 = mysql_query("SELECT * FROM `station` WHERE `stad`='3'");
$station3 = mysql_fetch_object($station33);
$station44 = mysql_query("SELECT * FROM `station` WHERE `stad`='4'");
$station4 = mysql_fetch_object($station44);
$station55 = mysql_query("SELECT * FROM `station` WHERE `stad`='5'");
$station5 = mysql_fetch_object($station55);
$station66 = mysql_query("SELECT * FROM `station` WHERE `stad`='6'");
$station6 = mysql_fetch_object($station66);

$turijn1 = mysql_query("SELECT * FROM `users` WHERE `city`='1'");
$turijn = mysql_num_rows($turijn1);
$palermo1 = mysql_query("SELECT * FROM `users` WHERE `city`='2'");
$palermo = mysql_num_rows($palermo1);
$milaan1 = mysql_query("SELECT * FROM `users` WHERE `city`='3'");
$milaan = mysql_num_rows($milaan1);
$rome1 = mysql_query("SELECT * FROM `users` WHERE `city`='4'");
$rome = mysql_num_rows($rome1);
$catania1 = mysql_query("SELECT * FROM `users` WHERE `city`='5'");
$catania = mysql_num_rows($catania1);
$corleone1 = mysql_query("SELECT * FROM `users` WHERE `city`='6'");
$corleone = mysql_num_rows($corleone1);
$turijn = number_format($turijn, 0, '.', '.');
$palermo = number_format($palermo, 0, '.', '.');
$milaan = number_format($milaan, 0, '.', '.');
$rome = number_format($rome, 0, '.', '.');
$catania = number_format($catania, 0, '.', '.');
$corleone = number_format($corleone, 0, '.', '.');


$stationowner11 = mysql_query("SELECT * FROM `users` WHERE `login`='$station1->eigenaar'");
$user1 = mysql_fetch_object($stationowner11);
$stationowner22 = mysql_query("SELECT * FROM `users` WHERE `login`='$station2->eigenaar'");
$user2 = mysql_fetch_object($stationowner22);
$stationowner33 = mysql_query("SELECT * FROM `users` WHERE `login`='$station3->eigenaar'");
$user3 = mysql_fetch_object($stationowner33);
$stationowner44 = mysql_query("SELECT * FROM `users` WHERE `login`='$station4->eigenaar'");
$user4 = mysql_fetch_object($stationowner44);
$stationowner55 = mysql_query("SELECT * FROM `users` WHERE `login`='$station5->eigenaar'");
$user5 = mysql_fetch_object($stationowner55);
$stationowner66 = mysql_query("SELECT * FROM `users` WHERE `login`='$station6->eigenaar'");
$user6 = mysql_fetch_object($stationowner66);
$online11 = mysql_query("SELECT * FROM `users` WHERE UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(`online`) < 300 AND `login`='$user1->login'");
$online22 = mysql_query("SELECT * FROM `users` WHERE UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(`online`) < 300 AND `login`='$user2->login'");
$online33 = mysql_query("SELECT * FROM `users` WHERE UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(`online`) < 300 AND `login`='$user3->login'");
$online44 = mysql_query("SELECT * FROM `users` WHERE UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(`online`) < 300 AND `login`='$user4->login'");
$online55 = mysql_query("SELECT * FROM `users` WHERE UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(`online`) < 300 AND `login`='$user5->login'");
$online66 = mysql_query("SELECT * FROM `users` WHERE UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(`online`) < 300 AND `login`='$user6->login'");
$online1 = mysql_num_rows($online11);
$online2 = mysql_num_rows($online22);
$online3 = mysql_num_rows($online33);
$online4 = mysql_num_rows($online44);
$online5 = mysql_num_rows($online55);
$online6 = mysql_num_rows($online66);
if($stations->eigenaar == ""){
$stations->eigenaar = niemand;
}
?>

					<div class="title_bg">
			<div class="title">Station</div>
		</div>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>

<table width='100%'>
	<tr>
		<td valign='top'>
			Welkom in <b><?echo$city;?></b>!<br /><br />
			De eigenaar van dit station is <b><?echo$stations->eigenaar;?></b>.<br /><br />
			Je kan van dit station naar een ander station reizen.<br /><br />
			De volgende trein vertrekt om <?echo$uur;?> uur.<br /><br />
			Voordelen van het reizen naar verschillende steden zijn onder meer dat de persoon die je probeert aan te vallen in dezelfde stad moet zijn en dat de drugskoersen per stad verschillen.		</td>
		<td>
			<img src='images/kaart.gif' align='right' border='1'>
		</td>
	</tr>
</table>
<br>

<form method="POST" onsubmit="return checkError(this);">
	<input type="hidden" name="sel" id="sel" value="">
<table width='100%' class="mod_list" cellspacing='2' cellpadding='2'>
	<tr>
		<td></td>
		<td></td>
		<td align='center'><b>Stad</b></td>
		<td></td>
		<td align='center'><b>Kosten</b></td>
		<td></td>
		<td align='center'><b>Inwoners</b></td>
		<td></td>
		<td align='center'><b>Eigenaar</b></td>
	</tr>
			<tr class='top'>
			<td align='center' width='5%'>
			<?if($data->city == 1){?>&nbsp;<?}?>
									<?if($data->city != 1){?><input type="radio" name="train" value="1" onclick="document.getElementById('sel').value = 'true'"><?}?>
							</td>
			<td align='center' width='5%'><img src='images/icons_gif/world.gif'></td>
			<td>&nbsp;Turijn</td>
			<td align='center' width='5%'><img src='images/icons_gif/money.gif'></td>
			<td align='center'>&euro; 1.500</td>
			<td align='center' width='5%'><img src='images/icons_gif/chart_bar.gif'></td>
			<td align='center'><?echo$turijn;?></td>
<?if($online1 > 0){?>
			<td align='center' width='5%'><img src='images/icons_gif/status_online.gif'></td>
<?}else{?>
			<td align='center' width='5%'><img src='images/icons_gif/status_offline.gif'></td>
<?}?>
			<td align='center'>
<?if($user1->login == ""){?>
									<a href="index.php?a=veiling"><b>Kopen</b></a>
<?}else{?>
      								<a href="index.php?a=profile&x=<?echo$user1->id?>"><?echo$user1->login?></a>
<?}?>
							</td>
		</tr>
			<tr class='top'>
			<td align='center' width='5%'>
			<?if($data->city == 2){?>&nbsp;<?}?>
									<?if($data->city != 2){?><input type="radio" name="train" value="2" onclick="document.getElementById('sel').value = 'true'"><?}?>
							</td>
			<td align='center' width='5%'><img src='images/icons_gif/world.gif'></td>
			<td>&nbsp;Palermo</td>
			<td align='center' width='5%'><img src='images/icons_gif/money.gif'></td>
			<td align='center'>&euro; 1.500</td>
			<td align='center' width='5%'><img src='images/icons_gif/chart_bar.gif'></td>
			<td align='center'><?echo$palermo;?></td>
<?if($online2 > 0){?>
			<td align='center' width='5%'><img src='images/icons_gif/status_online.gif'></td>
<?}else{?>
			<td align='center' width='5%'><img src='images/icons_gif/status_offline.gif'></td>
<?}?>
			<td align='center'>
<?if($user2->login == ""){?>
									<a href="index.php?a=veiling"><b>Kopen</b></a>
<?}else{?>
      								<a href="index.php?a=profile&x=<?echo$user2->id?>"><?echo$user2->login?></a>
<?}?>
							</td>
		</tr>
			<tr class='top'>
			<td align='center' width='5%'>
			<?if($data->city == 3){?>&nbsp;<?}?>
									<?if($data->city != 3){?><input type="radio" name="train" value="3" onclick="document.getElementById('sel').value = 'true'"><?}?>
							</td>
			<td align='center' width='5%'><img src='images/icons_gif/world.gif'></td>
			<td>&nbsp;Milaan</td>
			<td align='center' width='5%'><img src='images/icons_gif/money.gif'></td>
			<td align='center'>&euro; 1.500</td>
			<td align='center' width='5%'><img src='images/icons_gif/chart_bar.gif'></td>
			<td align='center'><?echo$milaan;?></td>
<?if($online3 > 0){?>
			<td align='center' width='5%'><img src='images/icons_gif/status_online.gif'></td>
<?}else{?>
			<td align='center' width='5%'><img src='images/icons_gif/status_offline.gif'></td>
<?}?>
			<td align='center'>
<?if($user3->login == ""){?>
									<a href="index.php?a=veiling"><b>Kopen</b></a>
<?}else{?>
      								<a href="index.php?a=profile&x=<?echo$user3->id?>"><?echo$user3->login?></a>
<?}?>
							</td>
		</tr>
			<tr class='top'>
			<td align='center' width='5%'>
			<?if($data->city == 4){?>&nbsp;<?}?>
									<?if($data->city != 4){?><input type="radio" name="train" value="4" onclick="document.getElementById('sel').value = 'true'"><?}?>
							</td>
			<td align='center' width='5%'><img src='images/icons_gif/world.gif'></td>
			<td>&nbsp;Rome</td>
			<td align='center' width='5%'><img src='images/icons_gif/money.gif'></td>
			<td align='center'>&euro; 1.500</td>
			<td align='center' width='5%'><img src='images/icons_gif/chart_bar.gif'></td>
			<td align='center'><?echo$rome;?></td>
<?if($online4 > 0){?>
			<td align='center' width='5%'><img src='images/icons_gif/status_online.gif'></td>
<?}else{?>
			<td align='center' width='5%'><img src='images/icons_gif/status_offline.gif'></td>
<?}?>
			<td align='center'>
<?if($user4->login == ""){?>
									<a href="index.php?a=veiling"><b>Kopen</b></a>
<?}else{?>
      								<a href="index.php?a=profile&x=<?echo$user4->id?>"><?echo$user4->login?></a>
<?}?>
							</td>
		</tr>
			<tr class='top'>
			<td align='center' width='5%'>
			<?if($data->city == 5){?>&nbsp;<?}?>
         <?if($data->city != 5){?><input type="radio" name="train" value="5" onclick="document.getElementById('sel').value = 'true'"><?}?>
							</td>
			<td align='center' width='5%'><img src='images/icons_gif/world.gif'></td>
			<td>&nbsp;Catania</td>
			<td align='center' width='5%'><img src='images/icons_gif/money.gif'></td>
			<td align='center'>&euro; 1.500</td>
			<td align='center' width='5%'><img src='images/icons_gif/chart_bar.gif'></td>
			<td align='center'><?echo$catania;?></td>
<?if($online5 > 0){?>
			<td align='center' width='5%'><img src='images/icons_gif/status_online.gif'></td>
<?}else{?>
			<td align='center' width='5%'><img src='images/icons_gif/status_offline.gif'></td>
<?}?>
			<td align='center'>
<?if($user5->login == ""){?>
									<a href="veiling"><b>Kopen</b></a>
<?}else{?>
      								<a href="index.php?a=profile&x=<?echo$user5->id?>"><?echo$user5->login?></a>
<?}?>
							</td>
		</tr>
			<tr class='top'>
			<td align='center' width='5%'>
									<?if($data->city == 6){?>&nbsp;<?}?>
          <?if($data->city != 6){?><input type="radio" name="train" value="6" onclick="document.getElementById('sel').value = 'true'"><?}?>
                            </td>
			<td align='center' width='5%'><img src='images/icons_gif/world.gif'></td>
			<td>&nbsp;Corleone</td>
			<td align='center' width='5%'><img src='images/icons_gif/money.gif'></td>
			<td align='center'>&euro; 1.500</td>
			<td align='center' width='5%'><img src='images/icons_gif/chart_bar.gif'></td>
			<td align='center'><?echo$corleone;?></td>
<?if($online6 > 0){?>
			<td align='center' width='5%'><img src='images/icons_gif/status_online.gif'></td>
<?}else{?>
			<td align='center' width='5%'><img src='images/icons_gif/status_offline.gif'></td>
<?}?>
			<td align='center'>
<?if($user6->login == ""){?>
									<a href="index.php?a=veiling"><b>Kopen</b></a>
<?}else{?>
      								<a href="index.php?a=profile&x=<?echo$user6->id?>"><?echo$user6->login?></a>
<?}?>
							</td>
		</tr>
		<tr height='20px'>
		<td colspan='9'>
			<input type='submit' name='koop' value='Koop kaartje' class="mod_submit">
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


<script language="javascript">
	function checkError(pForm){
		var errormsg = '';

		if(pForm.sel.value != 'true') errormsg += 'Je hebt geen station gekozen!<br>';

		if(errormsg != ''){
			showError(errormsg);
			return false;
		}
		return true;
	}
</script>		</div>
	</td>
	</tr>

	</table>
	</td>
<?}?>
