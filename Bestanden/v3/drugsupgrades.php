<?
if($data->killers/$data->drugsmax > 249 && $data->attwins/$data->drugsmax > 406 && $data->killcount/$data->drugsmax > 7){
mysql_query("UPDATE `users` SET `drugsmax`=`drugsmax`+'1' WHERE `id`='$data->id'");
$data->drugsmax += 1;
}
$wietmax = $data->drugsmax*500;
$paddomax = $data->drugsmax*600;
$xtcmax = $data->drugsmax*700;
$lsdmax = $data->drugsmax*800;
$speedmax = $data->drugsmax*900;
$opiummax = $data->drugsmax*1000;
if($_POST['drug'] == 1){
if($data->contant >= 7500*$_POST['number']){
if(ctype_digit($_POST['number'])){
if($_POST['number']+$data->nederwietupgr <= $wietmax){
$error = niks;
mysql_query("UPDATE `users` SET `contant`=`contant`-'7500'*'{$_POST['number']}',`nederwietupgr`=`nederwietupgr`+'{$_POST['number']}' WHERE `login`='$data->login'");
}
else{$error = 3;}
}
else{$error = 1;}
}
else{$error = 2;}
}
if($_POST['drug'] == 2){
if($data->contant >= 10000*$_POST['number']){
if($_POST['number'] > 0){
if($_POST['number']+$data->paddoupgr <= $paddomax){
$error = niks;
mysql_query("UPDATE `users` SET `contant`=`contant`-'10000'*'{$_POST['number']}',`paddoupgr`=`paddoupgr`+'{$_POST['number']}' WHERE `login`='$data->login'");
}
else{$error = 3;}
}
else{$error = 1;}
}
else{$error = 2;}
}
if($_POST['drug'] == 3){
if($data->contant >= 15000*$_POST['number']){
if($_POST['number'] > 0){
if($_POST['number']+$data->xtcupgr <= $xtcmax){
$error = niks;
mysql_query("UPDATE `users` SET `contant`=`contant`-'15000'*'{$_POST['number']}',`xtcupgr`=`xtcupgr`+'{$_POST['number']}' WHERE `login`='$data->login'");
}
else{$error = 3;}
}
else{$error = 1;}
}
else{$error = 2;}
}
if($_POST['drug'] == 4){
if($data->contant >= 20000*$_POST['number']){
if($_POST['number'] > 0){
if($_POST['number']+$data->lsdupgr <= $lsdmax){
$error = niks;
mysql_query("UPDATE `users` SET `contant`=`contant`-'20000'*'{$_POST['number']}',`lsdupgr`=`lsdupgr`+'{$_POST['number']}' WHERE `login`='$data->login'");
}
else{$error = 3;}
}
else{$error = 1;}
}
else{$error = 2;}
}
if($_POST['drug'] == 5){
if($data->contant >= 25000*$_POST['number']){
if($_POST['number'] > 0){
if($_POST['number']+$data->speedupgr <= $speedmax){
$error = niks;
mysql_query("UPDATE `users` SET `contant`=`contant`-'25000'*'{$_POST['number']}',`speedupgr`=`speedupgr`+'{$_POST['number']}' WHERE `login`='$data->login'");
}
else{$error = 3;}
}
else{$error = 1;}
}
else{$error = 2;}
}
if($_POST['drug'] == 6){
if($data->contant >= 30000*$_POST['number']){
if($_POST['number'] > 0){
if($_POST['number']+$data->opiumupgr <= $opiummax){
$error = niks;
mysql_query("UPDATE `users` SET `contant`=`contant`-'30000'*'{$_POST['number']}',`opiumupgr`=`opiumupgr`+'{$_POST['number']}' WHERE `login`='$data->login'");
}
else{$error = 3;}
}
else{$error = 1;}
}
else{$error = 2;}
}
$wietmax = number_format($data->drugsmax*500, 0, '.' , '.');
$paddomax = number_format($data->drugsmax*600, 0, '.' , '.');
$xtcmax = number_format($data->drugsmax*700, 0, '.' , '.');
$lsdmax = number_format($data->drugsmax*800, 0, '.' , '.');
$speedmax = number_format($data->drugsmax*900, 0, '.' , '.');
$opiummax = number_format($data->drugsmax*1000, 0, '.' , '.');
if($error == niks){
$_SESSION['mission'] = "Koop een drug upgrade";
?>
			<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup" align="center">
				<tr>
					<td>
						De drugsplantages zijn aangemaakt voor je					</td>
				</tr>
				<tr>
					<td>
						<br><br>
							<a href="index.php?a=drugsupgrades" class="msg_ok">Klik hier indien je niet automatisch verder gaat.</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<script language="javascript">
	setTimeout("document.location.href='index.php?a=drugsupgrades'",(3000*2));
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
						<b>FOUT!</b><br><br>Er is geen aantal ingevuld					</td>
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
						<b>FOUT!</b><br><br>Je hebt niet genoeg geld om deze drugs te kopen					</td>
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
if($error == 3){
?>
			<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Je wil meer kopen dan waar je capaciteit voor hebt					</td>
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
if($error == ""){
?>

		<div class="title_bg"><div style="font-size:17px; color:#1b1a17; margin-left:10px; padding-top:4px;">Drugs upgrades</div></div>
		<div style="width:100%; height:auto; background:#c3b79d; font-family:arial; font-size:12px; color:#2a190e;">
			<div style="padding:5px; padding-bottom:10px;">
			Koop hier drugsupgradres om je eigen drugs te kweken.			</div>
		</div>

		<script language="javascript">
			function openTab(pTabPage,pTab){
								document.getElementById('drug_main').style.display = 'none';
								document.getElementById('drug_explain').style.display = 'none';

				document.getElementById(pTabPage).style.display = 'block';

								document.getElementById('tab1').style.background = '';
				document.getElementById('tab1').style.fontWeight = 'normal';
								document.getElementById('tab2').style.background = '';
				document.getElementById('tab2').style.fontWeight = 'normal';

				document.getElementById(pTab).style.background = 'url(\'images/tab_info_arrow.gif\') bottom no-repeat';
				document.getElementById(pTab).style.fontWeight = 'bold';
			}
		</script>
		<div style="width:100%; height:25px; background:url('images/tab_info_bg.jpg') repeat-x; font-family:arial; font-size:12px; color:#2a190e;">
									<div id="tab1" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px; background:url('images/tab_info_arrow.gif') bottom no-repeat; font-weight:bold;"><a href="#" onclick="openTab('drug_main','tab1'); return false">Koop drugsupgrades</a></div>
												<div style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px;">|</div>
												<div id="tab2" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px;"><a href="#" onclick="openTab('drug_explain','tab2'); return false">Hoe werkt dit?</a></div>
								</div>

		<div style="background-color:#dbd2b7; ">
		<br>
		<table cellpadding="4" cellspacing="0" width="100%" align="center"><tr><td>
			<div id="drug_main">
			<table width="100%" cellspacing="2" cellpadding="2" class="mod_list">
			<tr>
				<td colspan="3"><big><b>Nederwiet Upgrade</b></big></td>
			</tr>
			<tr>
				<td rowspan="4" style="text-align:center;" width="165"><img src="images/drugs/nederwiet.jpg" style="width:120px;" alt="Nederwiet Upgrade" /></td>
				<td class="icon"><img src="images/icons_gif/money.gif"></td>
				<td>Prijs: <strong>&euro; 7.500,-</strong> per upgrade</td>

			</tr>
			<tr>
				<td class="icon"><img src="images/icons_gif/pill.gif" alt="Drugs" /></td>
				<td>Huidige productie: <strong><?echo$data->nederwietupgr;?></strong> zakje(s) per dag</td>
			</tr>
			<tr>
				<td class="icon"><img src="images/icons_gif/pill_go.gif" alt="Drugs" /></td>

				<td>

				<form method="post">
				<input type="hidden" name="drug" value="1">
									<input type="text" name="number" class="input" size="5">
					<input type="submit" value="Kopen!" class="mod_submit">

				</td>	</form>
			</tr>
			<tr>
				<td class="icon" style="vertical-align:top;"><img src="images/icons_gif/information.gif" alt="Informatie" /></td>
				<td>Deze drugsupgrade is beschikbaar vanaf de rang <b>Groentje</b>. Je maximale haalbare productie capaciteit is momenteel <b><?echo$wietmax;?></b> upgrade zakjes per dag.</td>
			</tr>
		</table>
	<br>
			<table width="100%" cellspacing="2" cellpadding="2" class="mod_list">
			<tr>
				<td colspan="3"><big><b>Paddo Upgrade</b></big></td>
			</tr>
			<tr>
				<td rowspan="4" style="text-align:center;" width="165"><img src="images/drugs/paddo.jpg" style="width:120px;" alt="Paddo Upgrade" /></td>
				<td class="icon"><img src="images/icons_gif/money.gif"></td>
				<td>Prijs: <strong>&euro; 10.000,-</strong> per upgrade</td>

			</tr>
			<tr>
				<td class="icon"><img src="images/icons_gif/pill.gif" alt="Drugs" /></td>
				<td>Huidige productie: <strong><?echo$data->paddoupgr;?></strong> zakje(s) per dag</td>
			</tr>
			<tr>
				<td class="icon"><img src="images/icons_gif/pill_go.gif" alt="Drugs" /></td>

				<td>

				<form method="post">
				<input type="hidden" name="drug" value="2">
									<input type="text" name="number" class="input<?if($data->rank < 2){?>_disabled<?}?>" size="5"<?if($data->rank < 2){?> disabled="true"<?}?>>
					<input type="submit" value="Kopen!" class="<?if($data->rank < 2){?>submit_disabled"  disabled="true"<?}else{?>mod_submit"<?}?>>

				</td>	</form>
			</tr>
			<tr>
				<td class="icon" style="vertical-align:top;"><img src="images/icons_gif/information.gif" alt="Informatie" /></td>
				<td>Deze drugsupgrade is beschikbaar vanaf de rang <b>Loopjongen</b>. Je maximale haalbare productie capaciteit is momenteel <b><?echo$paddomax;?></b> upgrade zakjes per dag.</td>
			</tr>
		</table>
	<br>
			<table width="100%" cellspacing="2" cellpadding="2" class="mod_list">
			<tr>
				<td colspan="3"><big><b>XTC Upgrade</b></big></td>
			</tr>
			<tr>
				<td rowspan="4" style="text-align:center;" width="165"><img src="images/drugs/xtc.jpg" style="width:120px;" alt="XTC Upgrade" /></td>
				<td class="icon"><img src="images/icons_gif/money.gif"></td>
				<td>Prijs: <strong>&euro; 15.000,-</strong> per upgrade</td>

			</tr>
			<tr>
				<td class="icon"><img src="images/icons_gif/pill.gif" alt="Drugs" /></td>
				<td>Huidige productie: <strong><?echo$data->xtcupgr;?></strong> zakje(s) per dag</td>
			</tr>
			<tr>
				<td class="icon"><img src="images/icons_gif/pill_go.gif" alt="Drugs" /></td>

				<td>

				<form method="post">
				<input type="hidden" name="drug" value="3">
									<input type="text" name="number" class="input<?if($data->rank < 4){?>_disabled<?}?>" size="5"<?if($data->rank < 4){?> disabled="true"<?}?>>
					<input type="submit" value="Kopen!" class="<?if($data->rank < 4){?>submit_disabled"  disabled="true"<?}else{?>mod_submit"<?}?>>

				</td>	</form>
			</tr>
			<tr>
				<td class="icon" style="vertical-align:top;"><img src="images/icons_gif/information.gif" alt="Informatie" /></td>
				<td>Deze drugsupgrade is beschikbaar vanaf de rang <b>Winkeldief</b>. Je maximale haalbare productie capaciteit is momenteel <b><?echo$xtcmax;?></b> upgrade zakjes per dag.</td>
			</tr>
		</table>
	<br>
			<table width="100%" cellspacing="2" cellpadding="2" class="mod_list">
			<tr>
				<td colspan="3"><big><b>LSD Upgrade</b></big></td>
			</tr>
			<tr>
				<td rowspan="4" style="text-align:center;" width="165"><img src="images/drugs/lsd.jpg" style="width:120px;" alt="LSD Upgrade" /></td>
				<td class="icon"><img src="images/icons_gif/money.gif"></td>
				<td>Prijs: <strong>&euro; 20.000,-</strong> per upgrade</td>

			</tr>
			<tr>
				<td class="icon"><img src="images/icons_gif/pill.gif" alt="Drugs" /></td>
				<td>Huidige productie: <strong><?echo$data->lsdupgr;?></strong> zakje(s) per dag</td>
			</tr>
			<tr>
				<td class="icon"><img src="images/icons_gif/pill_go.gif" alt="Drugs" /></td>

				<td>

				<form method="post">
				<input type="hidden" name="drug" value="4">
									<input type="text" name="number" class="input<?if($data->rank < 6){?>_disabled<?}?>" size="5"<?if($data->rank < 6){?> disabled="true"<?}?>>
					<input type="submit" value="Kopen!" class="<?if($data->rank < 6){?>submit_disabled"  disabled="true"<?}else{?>mod_submit"<?}?>>

				</td>	</form>
			</tr>
			<tr>
				<td class="icon" style="vertical-align:top;"><img src="images/icons_gif/information.gif" alt="Informatie" /></td>
				<td>Deze drugsupgrade is beschikbaar vanaf de rang <b>Mobster</b>. Je maximale haalbare productie capaciteit is momenteel <b><?echo$lsdmax;?></b> upgrade zakjes per dag.</td>
			</tr>
		</table>
	<br>
			<table width="100%" cellspacing="2" cellpadding="2" class="mod_list">
			<tr>
				<td colspan="3"><big><b>Speed Upgrade</b></big></td>
			</tr>
			<tr>
				<td rowspan="4" style="text-align:center;" width="165"><img src="images/drugs/speed.jpg" style="width:120px;" alt="Speed Upgrade" /></td>
				<td class="icon"><img src="images/icons_gif/money.gif"></td>
				<td>Prijs: <strong>&euro; 25.000,-</strong> per upgrade</td>

			</tr>
			<tr>
				<td class="icon"><img src="images/icons_gif/pill.gif" alt="Drugs" /></td>
				<td>Huidige productie: <strong><?echo$data->speedupgr;?></strong> zakje(s) per dag</td>
			</tr>
			<tr>
				<td class="icon"><img src="images/icons_gif/pill_go.gif" alt="Drugs" /></td>

				<td>

				<form method="post">
				<input type="hidden" name="drug" value="5">
									<input type="text" name="number" class="input<?if($data->rank < 8){?>_disabled<?}?>" size="5"<?if($data->rank < 8){?> disabled="true"<?}?>>
					<input type="submit" value="Kopen!" class="<?if($data->rank < 8){?>submit_disabled"  disabled="true"<?}else{?>mod_submit"<?}?>>

				</td>	</form>
			</tr>
			<tr>
				<td class="icon" style="vertical-align:top;"><img src="images/icons_gif/information.gif" alt="Informatie" /></td>
				<td>Deze drugsupgrade is beschikbaar vanaf de rang <b>Locale leider</b>. Je maximale haalbare productie capaciteit is momenteel <b><?echo$speedmax;?></b> upgrade zakjes per dag.</td>
			</tr>
		</table>
	<br>
			<table width="100%" cellspacing="2" cellpadding="2" class="mod_list">
			<tr>
				<td colspan="3"><big><b>Opium Upgrade</b></big></td>
			</tr>
			<tr>
				<td rowspan="4" style="text-align:center;" width="165"><img src="images/drugs/opium.jpg" style="width:120px;" alt="Opium Upgrade" /></td>
				<td class="icon"><img src="images/icons_gif/money.gif"></td>
				<td>Prijs: <strong>&euro; 30.000,-</strong> per upgrade</td>

			</tr>
			<tr>
				<td class="icon"><img src="images/icons_gif/pill.gif" alt="Drugs" /></td>
				<td>Huidige productie: <strong><?echo$data->opiumupgr;?></strong> zakje(s) per dag</td>
			</tr>
			<tr>
				<td class="icon"><img src="images/icons_gif/pill_go.gif" alt="Drugs" /></td>

				<td>

				<form method="post">
				<input type="hidden" name="drug" value="6">
									<input type="text" name="number" class="input<?if($data->rank < 10){?>_disabled<?}?>" size="5"<?if($data->rank < 10){?> disabled="true"<?}?>>
					<input type="submit" value="Kopen!" class="<?if($data->rank < 10){?>submit_disabled"  disabled="true"<?}else{?>mod_submit"<?}?>>

				</td>	</form>
			</tr>
			<tr>
				<td class="icon" style="vertical-align:top;"><img src="images/icons_gif/information.gif" alt="Informatie" /></td>
				<td>Deze drugsupgrade is beschikbaar vanaf de rang <b>Godfather</b>. Je maximale haalbare productie capaciteit is momenteel <b><?echo$opiummax;?></b> upgrade zakjes per dag.</td>
			</tr>
		</table>
	<br>
		</div>

	<div id="drug_explain" style="display:none">
		Met drugs upgrades produceer je elke nacht het aantal zakjes drugs wat je geupgrade hebt.<br>Deze drugs kan je dan weer verkopen om geld te verdienen.<br><br>
		Je hebt nu <b><?echo$data->drugsmax;?> keer</b> de drugscapaciteit!<br><br>
		Om de maximale drugscapaciteit te vergroten moet je genoeg killers, gewonnen gevechten en vermoorde banditi hebben. Hieronder zie je hoeveel je overal voor nodig hebt;<br><br>
		<center>
		<table width="65%" class="mod_list">
			<tr>
				<td><b>Type</b></td>
				<td width="5%"></td>
				<td align="center"><b>Huidig</b></td>
				<td width="5%"></td>
				<td align="center"><b>Nodig</b></td>
			</tr>

			<tr>
<?
$killersnodig = $data->drugsmax*250;
$attwinsnodig = $data->drugsmax*407;
$killsnodig = $data->drugsmax*8;
?>
				<td style="background:#c8ada3">Killers</td>
				<td align="center" style="background:#c8ada3"><img src="images/icons_gif/bricks.gif" alt="Killers"></td>
				<td align="center" style="background:#c8ada3"><?echo$data->killers;?></td>
				<td align="center" style="background:#c8ada3"><img src="images/icons_gif/bricks.gif" alt="Killers"></td>
				<td align="center" style="background:#c8ada3"><?echo$killersnodig;?></td>
			</tr>

			<tr>
				<td style="background:#c8ada3">Gewonnen gevechten</td>
				<td align="center" style="background:#c8ada3"><img src="images/icons_gif/brick_add.gif" alt="Gewonnen gevechten"></td>
				<td align="center" style="background:#c8ada3"><?echo$data->attwins;?></td>
				<td align="center" style="background:#c8ada3"><img src="images/icons_gif/brick_add.gif" alt="Gewonnen gevechten"></td>
				<td align="center" style="background:#c8ada3"><?echo$attwinsnodig;?></td>
			</tr>

			<tr>
				<td style="background:#c8ada3">Vermoorde banditi</td>
				<td align="center" style="background:#c8ada3"><img src="images/icons_gif/user_gray.gif" alt="Vermoorde banditi"></td>
				<td align="center" style="background:#c8ada3"><?echo$data->killcount;?></td>
				<td align="center" style="background:#c8ada3"><img src="images/icons_gif/user_gray.gif" alt="Vermoorde banditi"></td>
				<td align="center" style="background:#c8ada3"><?echo$killsnodig;?></td>
			</tr>
		</table>
		</center>
		<BR><BR>
	</div>

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
