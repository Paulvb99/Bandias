<?
	$data2            = mysql_query("SELECT *,UNIX_TIMESTAMP(`octijd`) AS `octijd`,0 FROM `users` WHERE `login`='$data->login'");
	  $data1            = mysql_fetch_object($data2);
$datijd = $data->oc;
	$tijdverschil1        = $data1->octijd-3600+$datijd-time();
	if($data1->octijd + $datijd > time()){
   list($uur,$min,$sec)=explode(":",date("H:i:s",$tijdverschil1));
$error = autostelen;
$countdown = $data1->octijd+$datijd-time();
?>
			<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						De politie zit nog achter je aan. Over <font id="count_timer"></font>&nbsp; is de kust weer veilig!					</td>
				</tr>
				<tr>
					<td style="color:red">
						<br><br>
						<a href="index.php?a=crimes" onclick="document.location.href='index.php?a=crimes" class="error_ok">OK</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<script language="javascript">
	countdown('<?=$countdown?>','count_timer','index.php?a=mod_crim_organized.php');
</script>		</div>
	</td>
	</tr>

	</table>
	</td>
<?}else{
$page = niks;
$code 		= str_replace(" ", "",$code);
$vordering1 = floor($data->vordering/9);
$vordering2 = floor($data->vordering/15);
$vordering3 = floor($data->vordering/30);
$vordering4 = floor($data->vordering/50);
$vordering5 = floor($data->vordering/70);
$vordering6 = floor($data->vordering/100);
$vordering7 = floor($data->vordering/110);
$vordering8 = floor($data->vordering/130);
$vordering9 = floor($data->vordering/160);
$vordering10 = floor($data->vordering/200);
$vordering11 = floor($data->vordering/210);
$vordering12 = floor($data->vordering/220);
$vordering13 = floor($data->vordering/230);
$vordering14 = floor($data->vordering/240);
$vordering15 = floor($data->vordering/250);
$_POST['captcha'] = ereg_replace("j", "J", $_POST['captcha']);
$_POST['captcha'] = ereg_replace("k", "K", $_POST['captcha']);
$_POST['captcha'] = ereg_replace("l", "L", $_POST['captcha']);
$_POST['captcha'] = ereg_replace("m", "M", $_POST['captcha']);
$_POST['captcha'] = ereg_replace("n", "N", $_POST['captcha']);
$_POST['captcha'] = ereg_replace("o", "O", $_POST['captcha']);
$_POST['captcha'] = ereg_replace("p", "P", $_POST['captcha']);
$_POST['captcha'] = ereg_replace("q", "Q", $_POST['captcha']);
$_POST['captcha'] = ereg_replace("r", "R", $_POST['captcha']);
$_POST['captcha'] = ereg_replace("s", "S", $_POST['captcha']);
$_POST['captcha'] = ereg_replace("t", "T", $_POST['captcha']);
$_POST['captcha'] = ereg_replace("u", "U", $_POST['captcha']);
$_POST['captcha'] = ereg_replace("v", "V", $_POST['captcha']);
$_POST['captcha'] = ereg_replace("w", "W", $_POST['captcha']);
$_POST['captcha'] = ereg_replace("x", "X", $_POST['captcha']);
$_POST['captcha'] = ereg_replace("y", "Y", $_POST['captcha']);
$_POST['captcha'] = ereg_replace("z", "Z", $_POST['captcha']);
$_POST['captcha'] = ereg_replace("a", "A", $_POST['captcha']);
$_POST['captcha'] = ereg_replace("b", "B", $_POST['captcha']);
$_POST['captcha'] = ereg_replace("c", "C", $_POST['captcha']);
$_POST['captcha'] = ereg_replace("d", "D", $_POST['captcha']);
$_POST['captcha'] = ereg_replace("e", "E", $_POST['captcha']);
$_POST['captcha'] = ereg_replace("f", "F", $_POST['captcha']);
$_POST['captcha'] = ereg_replace("g", "G", $_POST['captcha']);
$_POST['captcha'] = ereg_replace("h", "H", $_POST['captcha']);
$_POST['captcha'] = ereg_replace("i", "I", $_POST['captcha']);
if($_POST['captcha'] != ""){
if($_POST['captcha'] != $_SESSION['captcha']){
$error = 3;
}
}
if(isset($_POST['start']) && $error != 3 && $_GET['f'] != start_crime){
$expert1 = mysql_query("SELECT * FROM `users` WHERE `login`='{$_POST['name_weapon']}'");
$chauf1 = mysql_query("SELECT * FROM `users` WHERE `login`='{$_POST['name_driver']}'");
$gebruiker = mysql_query("SELECT * FROM `users` WHERE `login`='$data->login' AND `login`='{$_POST['name_driver']}' OR `login`='$data->login' AND `login`='{$_POST['name_weapon']}' ");
$expert = mysql_num_rows($expert1);
$chauf = mysql_num_rows($chauf1);
$gebr = mysql_num_rows($gebruiker);
$xp = mysql_fetch_object($expert1);
$chaufeur = mysql_fetch_object($chauf1);
if($xp->login != $chaufeur->login){
if($_POST['money'] <= 500000){
if($_POST['money'] >= 5000){
if($_POST['money'] <= $data->contant){
if($chauf > 0){
if($expert > 0){
if($gebr < 1){
$error = niks;
$date2 = (date('m/d H:i'));
mysql_query("INSERT INTO `messages`(`date`,`to`,`from`,`ip`,`title`,`content`,`date2`,`read`,`inbox`,`reply`) values(NOW(),'$xp->login','$data->login','$data->IP','Georganiseerde misdaad','Hallo $xp->login,
Ik wil een georganiseerde misdaad starten.
Wil jij mijn wapenexpert zijn?

Mvg, $data->login

PS: Dit bericht is afkomstig van Georganiseerde misdaden','$date2','0','1','0')");
mysql_query("INSERT INTO `messages`(`date`,`to`,`from`,`ip`,`title`,`content`,`date2`,`read`,`inbox`,`reply`) values(NOW(),'$chaufeur->login','$data->login','$data->IP','Georganiseerde misdaad','Hallo $chaufeur->login,
Ik wil een georganiseerde misdaad starten.
Wil jij mijn chauffeur zijn?

Mvg, $data->login

PS: Dit bericht is afkomstig van Georganiseerde misdaden','$date2','0','1','0')");
mysql_query("INSERT INTO `messages`(`date`,`to2`,`from`,`ip`,`title`,`content`,`date2`,`read`,`inbox`,`reply`) values(NOW(),'$xp->login','$data->login','$data->IP','Georganiseerde misdaad','Hallo $xp->login,
Ik wil een georganiseerde misdaad starten.
Wil jij mijn wapenexpert zijn?

Mvg, $data->login

PS: Dit bericht is afkomstig van Georganiseerde misdaden','$date2','0','3','0')");
mysql_query("INSERT INTO `messages`(`date`,`to2`,`from`,`ip`,`title`,`content`,`date2`,`read`,`inbox`,`reply`) values(NOW(),'$chaufeur->login','$data->login','$data->IP','Georganiseerde misdaad','Hallo $chaufeur->login,
Ik wil een georganiseerde misdaad starten.
Wil jij mijn chauffeur zijn?

Mvg, $data->login

PS: Dit bericht is afkomstig van Georganiseerde misdaden','$date2','0','3','0')");
mysql_query("UPDATE `users` SET `contant`=`contant`-'{$_POST['money']}' WHERE `id`='$data->id'");
mysql_query("INSERT INTO `crimes` (owner,wapenexpert,chaufeur,inzet) values('$data->login','{$_POST['name_weapon']}','{$_POST['name_driver']}','{$_POST['money']}')");
}else{$error = 7;}
}else{$error = 1;}
}else{$error = 2;}
}else{$error = 6;}
}else{$error = 4;}
}else{$error = 5;}
}else{$error = 8;}
}if($error == 1){?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>De gebruiker '<?echo$_POST['name_weapon'];?>' bestaat niet				</td>
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
<?}if($error == 8){?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Je mag geen twee de zelfde namen gebruiken!				</td>
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
						<b>FOUT!</b><br><br>De gebruiker '<?echo$_POST['name_driver'];?>' bestaat niet					</td>
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
<?}if($error == 6){?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Zo veel geld heb je niet!					</td>
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
<?}if($error == 4){?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Je moet minimaal &euro;5.000 opgeven					</td>
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
<?}if($error == 5){?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Je mag niet meer dan &euro;500.000 investeren					</td>
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
<?}if($error == 3){?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>De code was onjuist!					</td>
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
}if($error == 7){?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Wil je samen werken met jezelf?					</td>
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
?>

			<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup" align="center">
				<tr>
					<td>
						De georganiseerde misdaad is gestart, het is nu wachten tot je crew members hun opdracht hebben geaccepteerd.				</td>
				</tr>
				<tr>
					<td>
						<br><br>
							<a href="index.php?a=mod_crim_organized" class="msg_ok">Klik hier indien je niet automatisch verder gaat.</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
<script language="javascript">
	setTimeout("document.location.href='index.php?a=mod_crim_organized'",(3000*2));
</script>
		</div>
	</td>
	</tr>

	</table>
	</td>
<?}
if($_GET['f'] == "refuse"){
$crime1 = mysql_query("SELECT * FROM `crimes` WHERE `id`='{$_GET['id']}'");
$crime = mysql_fetch_object($crime1);
if($crime->chaufeur == $data->login || $crime->wapenexpert == $data->login){
$error = refuse;
mysql_query("DELETE FROM `crimes` WHERE `id`='$crime->id'");
}else{$error = 10;}
if($error == 10){?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Jij bent niet uitgenodigd voor deze georganiseerde misdaad!					</td>
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
}else if($error == refuse){?>
			<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup" align="center">
				<tr>
					<td>
						Je hebt de uitnodiging geweigerd. De misdaad is verwijderd uit ieders lijstje!				</td>
				</tr>
				<tr>
					<td>
						<br><br>
							<a href="index.php?a=mod_crim_organized" class="msg_ok">Klik hier indien je niet automatisch verder gaat.</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
<script language="javascript">
	setTimeout("document.location.href='index.php?a=mod_crim_organized'",(3000*2));
</script>
		</div>
	</td>
	</tr>

	</table>
	</td>
<?}}
if($_GET['f'] == "start_crime"){
$crime1 = mysql_query("SELECT * FROM `crimes` WHERE `id`='{$_GET['id']}'");
$crime = mysql_fetch_object($crime1);
if($crime->owner != $data->login || $crime->chaufeurklaar < 1 || $crime->wapenklaar < 1){
$error = "true";
?><table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Je bent geen leider van de geselecteerde misdaad					</td>
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
}else{$page = "start_crime";}
}
if($_GET['f'] == "stop_crime"){
$crime1 = mysql_query("SELECT * FROM `crimes` WHERE `id`='{$_GET['id']}'");
$crime = mysql_fetch_object($crime1);
if($crime->owner != $data->login){
$error = "true";
?><table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Je bent geen leider van de geselecteerde misdaad					</td>
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
}else{$page = "stop";
$date2 = (date('m/d H:i'));
mysql_query("INSERT INTO `messages`(`date`,`to`,`from`,`ip`,`title`,`content`,`date2`,`read`,`inbox`,`reply`) values(NOW(),'$crime->wapenexpert','$data->login','$data->IP','Misdaad afgeblazen','Beste crew leden,

Ik heb het idee dat de politie mij in de gaten aan het houden is, we zullen de opdracht helaas moeten afblazen.


PS: Dit bericht is afkomstig van Georganiseerde misdaden','$date2','0','1','0')");
mysql_query("INSERT INTO `messages`(`date`,`to`,`from`,`ip`,`title`,`content`,`date2`,`read`,`inbox`,`reply`) values(NOW(),'$crime->chaufeur','$data->login','$data->IP','Misdaad afgeblazen','Beste crew leden,

Ik heb het idee dat de politie mij in de gaten aan het houden is, we zullen de opdracht helaas moeten afblazen.


PS: Dit bericht is afkomstig van Georganiseerde misdaden','$date2','0','1','0')");
mysql_query("INSERT INTO `messages`(`date`,`to2`,`from`,`ip`,`title`,`content`,`date2`,`read`,`inbox`,`reply`) values(NOW(),'$crime->wapenexpert','$data->login','$data->IP','Misdaad afgeblazen','Beste crew leden,

Ik heb het idee dat de politie mij in de gaten aan het houden is, we zullen de opdracht helaas moeten afblazen.


PS: Dit bericht is afkomstig van Georganiseerde misdaden','$date2','0','3','0')");
mysql_query("INSERT INTO `messages`(`date`,`to2`,`from`,`ip`,`title`,`content`,`date2`,`read`,`inbox`,`reply`) values(NOW(),'$crime->chaufeur','$data->login','$data->IP','Beste crew leden,

Ik heb het idee dat de politie mij in de gaten aan het houden is, we zullen de opdracht helaas moeten afblazen.


PS: Dit bericht is afkomstig van Georganiseerde misdaden','$date2','0','3','0')");
mysql_query("DELETE FROM `crimes` WHERE `id`='$crime->id'");
?>			<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup" align="center">
				<tr>
					<td>
						De misdaad is afgeblazen!				</td>
				</tr>
				<tr>
					<td>
						<br><br>
							<a href="index.php?a=mod_crim_organized" class="msg_ok">Klik hier indien je niet automatisch verder gaat.</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
<script language="javascript">
	setTimeout("document.location.href='index.php?a=mod_crim_organized'",(3000*2));
</script>
		</div>
	</td>
	</tr>

	</table>
	</td><?}
}
if($_GET['f'] == "accept"){
$crime1 = mysql_query("SELECT * FROM `crimes` WHERE `id`='{$_GET['id']}'");
$crime = mysql_fetch_object($crime1);
if($crime->chaufeur == $data->login && $crime->chaufeurklaar < 1){
$page = "driver_buy";
}else{$niet = 1;}
if($crime->wapenexpert == $data->login && $crime->wapenklaar < 1){
$page = "expert_buy";
}else{$niet++;}
if($niet > 1){
$error = "true";
?><table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Jij bent niet uitgenodigd voor deze georganiseerde misdaad!					</td>
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
}}
if($page == niks && $_GET['f'] == ""){
if($error == ""){
?>
		<div class="title_bg"><div style="font-size:17px; color:#1b1a17; margin-left:10px; padding-top:4px;">Georganiseerde misdaad</div></div>
		<div style="width:100%; height:auto; background:#c3b79d; font-family:arial; font-size:12px; color:#2a190e;">
			<div style="padding:5px; padding-bottom:10px;">
						</div>
		</div>

		<script language="javascript">
			function openTab(pTabPage,pTab){
								document.getElementById('orgcrim_start').style.display = 'none';
								document.getElementById('orgcrim_own').style.display = 'none';
								document.getElementById('orgcrim_new').style.display = 'none';

				document.getElementById(pTabPage).style.display = 'block';

								document.getElementById('tab1').style.background = '';
				document.getElementById('tab1').style.fontWeight = 'normal';
								document.getElementById('tab2').style.background = '';
				document.getElementById('tab2').style.fontWeight = 'normal';
								document.getElementById('tab3').style.background = '';
				document.getElementById('tab3').style.fontWeight = 'normal';

				document.getElementById(pTab).style.background = 'url(\'images/tab_info_arrow.gif\') bottom no-repeat';
				document.getElementById(pTab).style.fontWeight = 'bold';
			}
		</script>
		<div style="width:100%; height:25px; background:url('images/tab_info_bg.jpg') repeat-x; font-family:arial; font-size:12px; color:#2a190e;">
									<div id="tab1" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px; background:url('images/tab_info_arrow.gif') bottom no-repeat; font-weight:bold;"><a href="#" onclick="openTab('orgcrim_start','tab1'); return false">Gestarte misdaden</a></div>
												<div style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px;">|</div>
												<div id="tab2" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px;"><a href="#" onclick="openTab('orgcrim_own','tab2'); return false">Eigen misdaden</a></div>
												<div style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px;">|</div>
												<div id="tab3" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px;"><a href="#" onclick="openTab('orgcrim_new','tab3'); return false">Nieuwe misdaad</a></div>
								</div>

		<div style="background-color:#dbd2b7; ">
		<br>
<?$crime1 = mysql_query("SELECT * FROM `crimes` WHERE `owner`='$data->login'");?>
		<table cellpadding="4" cellspacing="0" width="100%" align="center"><tr><td>

	<div id="orgcrim_start">
		<table width="100%" class="mod_list">
			<tr>
				<td width="5%">
				</td>
				<td>
					<b>Leider</b>
				</td>
				<td width="5%">
				</td>
				<td>
					<b>Chauffeur</b>
				</td>
				<td width="5%">
				</td>
				<td>
					<b>Wapenexpert</b>
				</td>
				<td width="5%">
				</td>
				<td>
					<b>Geld</b>
				</td>
				<td width="5%">
				</td>
				<td>
					<b>Start</b>
				</td>
			</tr>
<?if(mysql_num_rows($crime1) > 0){
while($crime = mysql_fetch_object($crime1)){
$rd = 0;
if($crime->chaufeurklaar < 1){$color = "red";$ready = "Niet gereed";}else{$color = "green";$ready = "Gereed";$rd = 1;}
$inzet = number_format($crime->inzet, 0, '.', '.');
?>
									<tr>
							<td width="5%" align="center">
								<img src="images/icons_gif/group_link.gif"/>
							</td>
							<td>
								<?echo$data->login;?>							</td>
							<td width="5%" align="center">
								<img src="images/icons_gif/car.gif"/>
							</td>
							<td>
								<?echo$crime->chaufeur;?>										(<small style="color:<?echo$color;?>"><?echo$ready;?></small>)
																	</td>
							<td width="5%" align="center">
								<img src="images/icons_gif/wrench.gif"/>
							</td>
							<td>
								<?if($crime->wapenklaar < 1){$color = "red";$ready = "Niet gereed";}else{$color = "green";$ready = "Gereed"; $rd = $rd+1;}echo$crime->wapenexpert;?>                           (<small style="color:<?echo$color;?>"><?echo$ready;?></small>)
																	</td>
							<td width="5%" align="center">
								<img src="images/icons_gif/money.gif"/>
							</td>
							<td>
								&euro;<?echo$inzet;?>							</td>
							<td width="5%" align="center">
								<img src="images/icons_gif/time_go.gif"/>
							</td>
							<td>
																	<?if($rd > 1){?><a href="index.php?a=mod_crim_organized&f=start_crime&id=<?echo$crime->id;?>"><?$a = "</a>";}?>Start<?echo$a;?>
																/
								<a href="index.php?a=mod_crim_organized&f=stop_crime&id=<?echo$crime->id;?>">Stop</a>
							</td>
						</tr>
<?}}else{?><td colspan="10">Je bent geen leider van een georganiseerde misdaad</td><?}?>								</table>
	</div>

<?$crime1 = mysql_query("SELECT * FROM `crimes` WHERE `wapenexpert`='$data->login' OR `chaufeur`='$data->login'");?>

	<div id="orgcrim_own" style="display:none">
		<table width="100%" class="mod_list">
			<tr>
				<td width="5%">
				</td>
				<td>
					<b>Leider</b>
				</td>
				<td width="5%">
				</td>
				<td>
					<b>Chauffeur</b>
				</td>
				<td width="5%">
				</td>
				<td>
					<b>Wapenexpert</b>
				</td>
				<td width="5%">
				</td>
				<td>
					<b>Geld</b>
				</td>
				<td width="5%">
				</td>
				<td>
					<b>Start</b>
				</td>
			</tr>
<?if(mysql_num_rows($crime1) > 0){
while($crime = mysql_fetch_object($crime1)){
$rd = 0;
if($crime->chaufeurklaar < 1){$color = "red";$ready = "Niet gereed";}else{$color = "green";$ready = "Gereed";$rd = 1;}
$inzet = number_format($crime->inzet, 0, '.', '.');
?>
									<tr>
							<td width="5%" align="center">
								<img src="images/icons_gif/group_link.gif"/>
							</td>
							<td>
								<?echo$crime->owner;?>							</td>
							<td width="5%" align="center">
								<img src="images/icons_gif/car.gif"/>
							</td>
							<td>
								<?echo$crime->chaufeur;?>										(<small style="color:<?echo$color;?>"><?echo$ready;?></small>)
																	</td>
							<td width="5%" align="center">
								<img src="images/icons_gif/wrench.gif"/>
							</td>
							<td>
								<?if($crime->wapenklaar < 1){$color = "red";$ready = "Niet gereed";}else{$color = "green";$ready = "Gereed"; $rd = $rd+1;}echo$crime->wapenexpert;?>                           (<small style="color:<?echo$color;?>"><?echo$ready;?></small>)
																	</td>
							<td width="5%" align="center">
								<img src="images/icons_gif/money.gif"/>
							</td>
							<td>
								&euro;<?echo$inzet;?>							</td>
							<td width="5%" align="center">
								<img src="images/icons_gif/time_go.gif"/>
							</td>
							<td>
<?if($crime->chaufeur == $data->login && $crime->chaufeurklaar > 0 || $crime->wapenexpert == $data->login && $crime->wapenklaar > 0){$a = 1;}?> 																	<?if($a == ""){?><a href="index.php?a=mod_crim_organized&f=accept&id=<?echo$crime->id;?>"><?}?>accepteer<?if($a == ""){?></a><?}?>
																/
								<?if($a == ""){?><a href="index.php?a=mod_crim_organized&f=refuse&id=<?echo$crime->id;?>"><?}?>Weiger<?if($a == ""){?></a><?}?>
							</td>
						</tr>
<?}}else{?><td colspan="10">Je bent momenteel geen crewmember van een misdaad</td><?}?>                            </table>
	</div>

	<div id="orgcrim_new" style="display:none">

		<table width="80%" align="center" class="mod_list" cellpadding="5">
			<form method="POST" action="index.php?a=mod_crim_organized&f=save_crime"  onsubmit="return checkError(this)">
			<input type="hidden" name="sel" id="sel" value="">
			<tr>
				<td align="center">
					<img src="images/icons_gif/car.gif"/>
				</td>
				<td>
					Chauffeur				</td>
				<td>
					<input type="text" name="name_driver" id="name_driver" size="25" onclick="document.getElementById('sel').value = 'true';">
				</td>
			</tr>
			<tr>
				<td align="center">
					<img src="images/icons_gif/wrench.gif"/>
				</td>
				<td>
					Wapenexpert				</td>
				<td>
					<input type="text" name="name_weapon" id="name_weapon" size="25" onclick="document.getElementById('sel').value = 'true';">
				</td>
			</tr>
			<tr>
				<td align="center">
					<img src="images/icons_gif/money.gif"/>
				</td>
				<td>
					Geld (via contant)				</td>
				<td>
					<input type="text" name="money" size="15" onclick="document.getElementById('sel').value = 'true';"> <small>(Min. &euro;5.000,- , Max &euro;500.000,-)</small>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<br>
					<table width="100%">
						<tr>
							<td><?
$first = rand(1, 26);
$second = rand(1, 26);
$third = rand(1, 26);
$fourth = rand(1, 26);
$captcha = ("$first  $second  $third  $fourth");
include("lib/captcha/captcha.php?code=$captcha");
                        ?><img src="lib/captcha/captcha.php?code=<?echo$captcha;
$captcha = ereg_replace("10", "J", $captcha);
$captcha = ereg_replace("11", "K", $captcha);
$captcha = ereg_replace("12", "L", $captcha);
$captcha = ereg_replace("13", "M", $captcha);
$captcha = ereg_replace("14", "N", $captcha);
$captcha = ereg_replace("15", "O", $captcha);
$captcha = ereg_replace("16", "P", $captcha);
$captcha = ereg_replace("17", "Q", $captcha);
$captcha = ereg_replace("18", "R", $captcha);
$captcha = ereg_replace("19", "S", $captcha);
$captcha = ereg_replace("20", "T", $captcha);
$captcha = ereg_replace("21", "U", $captcha);
$captcha = ereg_replace("22", "V", $captcha);
$captcha = ereg_replace("23", "W", $captcha);
$captcha = ereg_replace("24", "X", $captcha);
$captcha = ereg_replace("25", "Y", $captcha);
$captcha = ereg_replace("26", "Z", $captcha);
$captcha = ereg_replace("0", "", $captcha);
$captcha = ereg_replace("1", "A", $captcha);
$captcha = ereg_replace("2", "B", $captcha);
$captcha = ereg_replace("3", "C", $captcha);
$captcha = ereg_replace("4", "D", $captcha);
$captcha = ereg_replace("5", "E", $captcha);
$captcha = ereg_replace("6", "F", $captcha);
$captcha = ereg_replace("7", "G", $captcha);
$captcha = ereg_replace("8", "H", $captcha);
$captcha = ereg_replace("9", "I", $captcha);
                                                  $captcha 		= str_replace(" ", "",$captcha);
                                                  $_SESSION['captcha'] = $captcha;
                                                  ?>" border="1"></td></td>
							<td align="center">
								<input type="text" name="captcha"><br />
								<input type="submit" name="start" value="Plaats crime" class="submit">
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<b>Uitleg:</b> De Wapenexpert en de Chauffeur moeten eerst de Crime goedkeuren en geld investeren voordat je de crime echt kunt starten. De leader van de crime krijgt 50%, de beide helpers 25%.				</td>
			</tr>
			</form>
		</table>
		<br>
	</div>

	<script type="text/javascript" language="javascript">
		var contact_popup_field;
		var contact_book;

		function showPopup(pName){
			contact_popup_field = pName;
			contact_book = window.open('index.php?a=contacts&popup=1&server=1','contact_book','width=400,height=500');
		}

		function select_user_popup(pUser){
			if(contact_popup_field == ''){
				document.getElementById('name_driver').value = pUser;
			}else{
				document.getElementById(contact_popup_field).value = pUser;
			}
			contact_book.close();
		}

		function checkError(pForm){
			var errormsg = '';

			if(pForm.name_driver.value.length < 1) errormsg += 'Je hebt geen chauffeur ingevuld!<br>';
			if(pForm.name_weapon.value.length < 1) errormsg += 'Je hebt geen wapenexpert ingevuld!<br>';
			if(pForm.money.value.length < 1) errormsg += 'Je hebt geen geld bedrag ingevuld!<br>';

			if(errormsg != ''){
				showError(errormsg);
				return false;
			}
			return true;
		}

	</script>


			</td></tr></table>
		</div>

		<table width='100%' cellspacing='0' cellpadding='0'>
			<tr>

				<td class='content_bottom'></td>
			</tr>
		</table>





<script language="javascript">
	function checkError(pForm){
		var errormsg = '';

		if(pForm.captcha.value.length != 4) errormsg += 'Je hebt geen geldige code ingevuld!<br>';
		if(pForm.sel.value != 'true') errormsg += 'Je hebt geen activiteit gekozen!<br>';

		if(errormsg != ''){
			showError(errormsg);
			return false;
		}
		return true;
	}
</script>
		</div>
	</td>
	</tr>

	</table>
	</td>
<?}}
if($page == driver_buy && $error == ""){
if(isset($_POST['buy'])){
$gelderaf = array("","7500","10000","15000","20000","22500","25000","37500","50000","60000","75000","80000","90000","100000","100000","100000","150000","250000","500000");
$kanserbij = array("","50","100","130","160","200","250","260","300","370","450","460","500","520","520","520","550","700","790");
$gelderaf = $gelderaf[$_POST['car']];
$kanserbij = $kanserbij[$_POST['car']];
if($data->contant >= $gelderaf){
mysql_query("UPDATE `crimes` SET `kans`=`kans`+'$kanserbij', `inzet`=`inzet`+'0', `chaufeurklaar`='1' WHERE `id`='{$_GET['id']}'");
mysql_query("UPDATE `users` SET `oc`='900', `octijd`=NOW() WHERE `login`='$data->login'");
$error = "true";?>

			<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup" align="center">
				<tr>
					<td>
						Je hebt je rol als chauffeur geaccepteerd				</td>
				</tr>
				<tr>
					<td>
						<br><br>
							<a href="index.php?a=mod_crim_organized" class="msg_ok">Klik hier indien je niet automatisch verder gaat.</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
<script language="javascript">
	setTimeout("document.location.href='index.php?a=mod_crim_organized'",(3000*2));
</script>
		</div>
	</td>
	</tr>

	</table>
	</td>
<?
}else{$error = "true";?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Zo veel geld heb je niet!					</td>
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
}
}
if($error == ""){
?>
			<div class="title_bg">
			<div class="title">Georganiseerde misdaad</div>
		</div>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
				<table width="100%" class="mod_list">
			<form method="POST">
				<input type="hidden" name="id" value="<?echo$_GET['id'];?>">
			<tr>
				<td>
					Selecteer een auto die je wilt kopen:
				</td>
			</tr>
			<tr>
				<td>
					<select name="car">
												<option value="1">Mercedes (&euro; 7.500,-)</option>
												<option value="2">Golfkar (&euro; 10.000,-)</option>
												<option value="3">Rolls Phantom (&euro; 15.000,-)</option>
												<option value="4">Seat Cordoba (&euro; 20.000,-)</option>
												<option value="5">Rover (&euro; 22.500,-)</option>
												<option value="6">DeLorean DMC (&euro; 25.000,-)</option>
												<option value="7">Cadillac V16 (&euro; 37.500,-)</option>
												<option value="8">Cadillac (&euro; 50.000,-)</option>
												<option value="9">Pontiac Firebird (&euro; 60.000,-)</option>
												<option value="10">Chrysler (&euro; 75.000,-)</option>
												<option value="11">Audi R8 (&euro; 80.000,-)</option>
												<option value="12">Mustang (&euro; 90.000,-)</option>
												<option value="13">GMC (&euro; 100.000,-)</option>
												<option value="14">Hummer (&euro; 100.000,-)</option>
												<option value="15">Lowrider (&euro; 100.000,-)</option>
												<option value="16">Rolls Royce (&euro; 150.000,-)</option>
												<option value="17">Dodge Viper (&euro; 250.000,-)</option>
												<option value="18">Ferrari Spyder (&euro; 500.000,-)</option>
											</select>
					<input type="submit" name="buy" value="Kopen" class="submit">
				</td>
			</tr>
			</form>
		</table>
			</td></tr></table>
		</div>

		<table width='100%' cellspacing='0' cellpadding='0'>
			<tr>

				<td class='content_bottom'></td>
			</tr>
		</table>



<script language="javascript">
	function checkError(pForm){
		var errormsg = '';

		if(pForm.captcha.value.length != 4) errormsg += 'Je hebt geen geldige code ingevuld!<br>';
		if(pForm.sel.value != 'true') errormsg += 'Je hebt geen activiteit gekozen!<br>';

		if(errormsg != ''){
			showError(errormsg);
			return false;
		}
		return true;
	}
</script>
		</div>
	</td>
	</tr>

	</table>
	</td>
<?}}if($page == expert_buy && $error == ""){
if(isset($_POST['buy'])){
$gelderaf = array("","5000","10000","25000","50000","75000","100000","200000","300000","400000","500000");
$kanserbij = array("","100","150","210","270","330","390","490","590","690","790");
$gelderaf = $gelderaf[$_POST['weapon']];
$kanserbij = $kanserbij[$_POST['weapon']];
if($data->contant >= $gelderaf){
mysql_query("UPDATE `crimes` SET `kans`=`kans`+'$kanserbij', `inzet`=`inzet`+'0', `wapenklaar`='1' WHERE `id`='{$_GET['id']}'");
mysql_query("UPDATE `users` SET `oc`='900', `octijd`=NOW() WHERE `login`='$data->login'");
$error = "true";?>

			<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup" align="center">
				<tr>
					<td>
						Je hebt je rol als wapenexpert geaccepteerd				</td>
				</tr>
				<tr>
					<td>
						<br><br>
							<a href="index.php?a=mod_crim_organized" class="msg_ok">Klik hier indien je niet automatisch verder gaat.</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
<script language="javascript">
	setTimeout("document.location.href='index.php?a=mod_crim_organized'",(3000*2));
</script>
		</div>
	</td>
	</tr>

	</table>
	</td>
<?
}else{$error = "true";?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Zo veel geld heb je niet!					</td>
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
}
}if($error == ""){
?>
			<div class="title_bg">
			<div class="title">Georganiseerde misdaad</div>
		</div>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
				<table width="100%" class="mod_list">
			<form method="POST">
				<input type="hidden" name="id" value="<?echo$_GET['id'];?>">
				<tr>
					<td>
						Selecteer wapens die je wilt kopen:
					</td>
				</tr>
				<tr>
					<td>
						<select name="weapon">
														<option value="1">3 Knuppels (&euro; 5.000,-)</option>
														<option value="2">3 Desert Eagles (&euro; 10.000,-)</option>
														<option value="3">3 Uzi's (&euro; 25.000,-)</option>
														<option value="4">3 Shotguns (&euro; 50.000,-)</option>
														<option value="5">3 Machine geweren (&euro; 75.000,-)</option>
														<option value="6">3 Sniper Rifles (&euro; 100.000,-)</option>
														<option value="7">3 Kilo C4 (&euro; 200.000,-)</option>
														<option value="8">3 Granaat Werpers (&euro; 300.000,-)</option>
														<option value="9">3 Bazooka's (&euro; 400.000,-)</option>
														<option value="10">3 Atoombommen (&euro; 500.000,-)</option>
													</select>
						<input type="submit" name="buy" value="Kopen" class="submit">
					</td>
				</tr>
			</form>
		</table>
			</td></tr></table>
		</div>

		<table width='100%' cellspacing='0' cellpadding='0'>
			<tr>

				<td class='content_bottom'></td>
			</tr>
		</table>


<script language="javascript">
	function checkError(pForm){
		var errormsg = '';

		if(pForm.captcha.value.length != 4) errormsg += 'Je hebt geen geldige code ingevuld!<br>';
		if(pForm.sel.value != 'true') errormsg += 'Je hebt geen activiteit gekozen!<br>';

		if(errormsg != ''){
			showError(errormsg);
			return false;
		}
		return true;
	}
</script>
		</div>
	</td>
	</tr>

	</table>
	</td>
<?}}
if($page == "start_crime"){
$procent = array("","3","4","5","6","7","8","9","10","11");
$pr1 = round($crime->kans/$procent[1]);if($pr1 > 100){$pr1 = 100;}
$pr2 = round($crime->kans/$procent[2]);if($pr2 > 100){$pr2 = 100;}
$pr3 = round($crime->kans/$procent[3]);if($pr3 > 100){$pr3 = 100;}
$pr4 = round($crime->kans/$procent[4]);if($pr4 > 100){$pr4 = 100;}
$pr5 = round($crime->kans/$procent[5]);if($pr5 > 100){$pr5 = 100;}
$pr6 = round($crime->kans/$procent[6]);if($pr6 > 100){$pr6 = 100;}
$pr7 = round($crime->kans/$procent[7]);if($pr7 > 100){$pr7 = 100;}
$pr8 = round($crime->kans/$procent[8]);if($pr8 > 100){$pr8 = 100;}
$pr9 = round($crime->kans/$procent[9]);if($pr9 > 100){$pr9 = 100;}
if(isset($_POST['start'])){
$getal = rand(0,100);
$dl1 = rand(9,10);
$dl2 = rand(8,10);
$dl3 = rand(7,9);
$dl4 = rand(6,8);
$dl5 = rand(5,7);
$dl6 = rand(4,6);
$dl7 = rand(3,5);
$dl8 = rand(2,4);
$dl9 = rand(1,2);
$procent = $procent[$_POST['crime']];
$delen = array("","$dl1","$dl2","$dl3","$dl4","$dl5","$dl6","$dl7","$dl8","$dl9");
$deel = $delen[$_POST['crime']];
$delen = round($crime->inzet/$deel);
$dl25 = round($delen*0.25);
$dl50 = round($delen*0.50);
$deel25 = $crime->inzet+$dl25;
$deel50 = $crime->inzet+$dl50;
if($getal <= round($crime->kans/$procent)){
$bedrag = number_format($deel50, 0, '.', '.');
$min = array("","2","3","4","5","6","7","8","9","10");
$min = $min[$_POST['crime']];
$sec = $min*60;
$vord = rand(5,10);
$rank = rand(0,2);
$_SESSION['mission'] = "Leid een georganiseerde misdaad";
mysql_query("UPDATE `users` SET `rankvord =`rankvord`+'$rank', `vordering`=`vordering`+'$vord', `oc`='$sec', `octijd`=NOW() WHERE `login`='$data->login'");
mysql_query("UPDATE `users` SET `rankvord =`rankvord`+'$rank', `vordering`=`vordering`+'$vord', `oc`='$sec', `octijd`=NOW() WHERE `login`='$crime->chaufeur'");
mysql_query("UPDATE `users` SET `rankvord =`rankvord`+'$rank', `vordering`=`vordering`+'$vord', `oc`='$sec', `octijd`=NOW() WHERE `login`='$data->wapenexpert'");
mysql_query("UPDATE `users` SET `bank`=`bank`+'$deel25' WHERE `login`='$crime->chaufeur'");
mysql_query("UPDATE `users` SET `bank`=`bank`+'$deel25' WHERE `login`='$crime->wapenexpert'");
mysql_query("UPDATE `users` SET `contant`=`contant`+'$deel50' WHERE `login`='$crime->owner'");
mysql_query("DELETE FROM `crimes` WHERE `id`='$crime->id'");
?>

			<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup" align="center">
				<tr>
					<td>
						Het is je gelukt. Je hebt &euro; <?echo$bedrag;?> gekregen voor deze misdaad!				</td>
				</tr>
				<tr>
					<td>
						<br><br>
							<a href="index.php?a=mod_crim_organized" class="msg_ok">Klik hier indien je niet automatisch verder gaat.</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
<script language="javascript">
	setTimeout("document.location.href='index.php?a=mod_crim_organized'",(3000*2));
</script>
		</div>
	</td>
	</tr>

	</table>
	</td>
<?$error = "false";
}else{$error = "true";
mysql_query("DELETE FROM `crimes` WHERE `id`='$crime->id'");?>
			<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup" align="center">
				<tr>
					<td>
						De misdaad is mislukt!				</td>
				</tr>
				<tr>
					<td>
						<br><br>
							<a href="index.php?a=mod_crim_organized" class="msg_ok">Klik hier indien je niet automatisch verder gaat.</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
<script language="javascript">
	setTimeout("document.location.href='index.php?a=mod_crim_organized'",(3000*2));
</script>
		</div>
	</td>
	</tr>

	</table>
	</td>
<?}
}
if($error == ""){
?>
			<div class="title_bg">
			<div class="title">Georganiseerde misdaad</div>
		</div>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
				<table width="100%">

				<tr>
					<td>
						<b>Kies welke misdaad je wil plegen:</b>
					</td>
				</tr>
				<tr>
					<td align="center">
						<table border="0"  class="mod_list" style="padding-bottom:0px" width="90%">
							<form method="POST" style="display:inline">
								<input type="hidden" name="id" value="<?echo$_GET['id']?>">
							<tr>
								<td>&nbsp;</td>
								<td>
									<b>Misdaad</b>
								</td>
								<td width="5%"></td>
								<td>
									<b>Kans</b>
								</td>
								<td width="5%"></td>
								<td>
									<b>Consequenties</b>
								</td>
							</tr>
														<tr>
								<td>
									<input type="radio" name="crime" value="1" id="1" onclick="document.getElementById('sel').value = 'true'">
								</td>
								<td>
									<label for="1">
										<font style="display:block; width:100%; height:100%;">Hacken van een computersysteem</font>
									</label>
								</td>
								<td width="5%" align="center"><img src="images/icons_gif/chart_bar.gif"/></td>
								<td align="center">
									<label for="1">
										<font style="display:block; width:100%; height:100%;"><?echo$pr1;?>%</font>
									</label>
								</td>
								<td width="5%" align="center"><img src="images/icons_gif/time.gif"/></td>
								<td>
									<label for="1">
										<font style="display:block; width:100%; height:100%;">2 min.</font>
									</label>
								</td>
							</tr>
														<tr>
								<td>
									<input type="radio" name="crime" value="2" id="2" onclick="document.getElementById('sel').value = 'true'">
								</td>
								<td>
									<label for="2">
										<font style="display:block; width:100%; height:100%;">Tankstation overvallen</font>
									</label>
								</td>
								<td width="5%" align="center"><img src="images/icons_gif/chart_bar.gif"/></td>
								<td align="center">
									<label for="2">
										<font style="display:block; width:100%; height:100%;"><?echo$pr2;?>%</font>
									</label>
								</td>
								<td width="5%" align="center"><img src="images/icons_gif/time.gif"/></td>
								<td>
									<label for="2">
										<font style="display:block; width:100%; height:100%;">3 min.</font>
									</label>
								</td>
							</tr>
														<tr>
								<td>
									<input type="radio" name="crime" value="3" id="3" onclick="document.getElementById('sel').value = 'true'">
								</td>
								<td>
									<label for="3">
										<font style="display:block; width:100%; height:100%;">Ramkraak op een bank</font>
									</label>
								</td>
								<td width="5%" align="center"><img src="images/icons_gif/chart_bar.gif"/></td>
								<td align="center">
									<label for="3">
										<font style="display:block; width:100%; height:100%;"><?echo$pr3;?>%</font>
									</label>
								</td>
								<td width="5%" align="center"><img src="images/icons_gif/time.gif"/></td>
								<td>
									<label for="3">
										<font style="display:block; width:100%; height:100%;">4 min.</font>
									</label>
								</td>
							</tr>
														<tr>
								<td>
									<input type="radio" name="crime" value="4" id="4" onclick="document.getElementById('sel').value = 'true'">
								</td>
								<td>
									<label for="4">
										<font style="display:block; width:100%; height:100%;">Een hertog gijzelen</font>
									</label>
								</td>
								<td width="5%" align="center"><img src="images/icons_gif/chart_bar.gif"/></td>
								<td align="center">
									<label for="4">
										<font style="display:block; width:100%; height:100%;"><?echo$pr4;?>%</font>
									</label>
								</td>
								<td width="5%" align="center"><img src="images/icons_gif/time.gif"/></td>
								<td>
									<label for="4">
										<font style="display:block; width:100%; height:100%;">5 min.</font>
									</label>
								</td>
							</tr>
														<tr>
								<td>
									<input type="radio" name="crime" value="5" id="5" onclick="document.getElementById('sel').value = 'true'">
								</td>
								<td>
									<label for="5">
										<font style="display:block; width:100%; height:100%;">Waardetransport overvallen</font>
									</label>
								</td>
								<td width="5%" align="center"><img src="images/icons_gif/chart_bar.gif"/></td>
								<td align="center">
									<label for="5">
										<font style="display:block; width:100%; height:100%;"><?echo$pr5;?>%</font>
									</label>
								</td>
								<td width="5%" align="center"><img src="images/icons_gif/time.gif"/></td>
								<td>
									<label for="5">
										<font style="display:block; width:100%; height:100%;">6 min.</font>
									</label>
								</td>
							</tr>
														<tr>
								<td>
									<input type="radio" name="crime" value="6" id="6" onclick="document.getElementById('sel').value = 'true'">
								</td>
								<td>
									<label for="6">
										<font style="display:block; width:100%; height:100%;">Bank overvallen</font>
									</label>
								</td>
								<td width="5%" align="center"><img src="images/icons_gif/chart_bar.gif"/></td>
								<td align="center">
									<label for="6">
										<font style="display:block; width:100%; height:100%;"><?echo$pr6;?>%</font>
									</label>
								</td>
								<td width="5%" align="center"><img src="images/icons_gif/time.gif"/></td>
								<td>
									<label for="6">
										<font style="display:block; width:100%; height:100%;">7 min.</font>
									</label>
								</td>
							</tr>
														<tr>
								<td>
									<input type="radio" name="crime" value="7" id="7" onclick="document.getElementById('sel').value = 'true'">
								</td>
								<td>
									<label for="7">
										<font style="display:block; width:100%; height:100%;">Vliegtuig kapen</font>
									</label>
								</td>
								<td width="5%" align="center"><img src="images/icons_gif/chart_bar.gif"/></td>
								<td align="center">
									<label for="7">
										<font style="display:block; width:100%; height:100%;"><?echo$pr7;?>%</font>
									</label>
								</td>
								<td width="5%" align="center"><img src="images/icons_gif/time.gif"/></td>
								<td>
									<label for="7">
										<font style="display:block; width:100%; height:100%;">8 min.</font>
									</label>
								</td>
							</tr>
														<tr>
								<td>
									<input type="radio" name="crime" value="8" id="8" onclick="document.getElementById('sel').value = 'true'">
								</td>
								<td>
									<label for="8">
										<font style="display:block; width:100%; height:100%;">Casino overvallen</font>
									</label>
								</td>
								<td width="5%" align="center"><img src="images/icons_gif/chart_bar.gif"/></td>
								<td align="center">
									<label for="8">
										<font style="display:block; width:100%; height:100%;"><?echo$pr8;?>%</font>
									</label>
								</td>
								<td width="5%" align="center"><img src="images/icons_gif/time.gif"/></td>
								<td>
									<label for="8">
										<font style="display:block; width:100%; height:100%;">9 min.</font>
									</label>
								</td>
							</tr>
														<tr>
								<td>
									<input type="radio" name="crime" value="9" id="9" onclick="document.getElementById('sel').value = 'true'">
								</td>
								<td>
									<label for="9">
										<font style="display:block; width:100%; height:100%;">President van de verenigde staten gijzelen</font>
									</label>
								</td>
								<td width="5%" align="center"><img src="images/icons_gif/chart_bar.gif"/></td>
								<td align="center">
									<label for="9">
										<font style="display:block; width:100%; height:100%;"><?echo$pr9;?>%</font>
									</label>
								</td>
								<td width="5%" align="center"><img src="images/icons_gif/time.gif"/></td>
								<td>
									<label for="9">
										<font style="display:block; width:100%; height:100%;">10 min.</font>
									</label>
								</td>
							</tr>
														<tr>
								<td colspan="6">
									<table align="center" width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
											<tr>
												<td >
													<input type="submit" name="start" value="Starten" class="submit">
												</td>
											</tr>
									</table>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</form>
		</table>
			</td></tr></table>
		</div>

		<table width='100%' cellspacing='0' cellpadding='0'>
			<tr>

				<td class='content_bottom'></td>
			</tr>
		</table>

<script language="javascript">
	function checkError(pForm){
		var errormsg = '';

		if(pForm.captcha.value.length != 4) errormsg += 'Je hebt geen geldige code ingevuld!<br>';
		if(pForm.sel.value != 'true') errormsg += 'Je hebt geen activiteit gekozen!<br>';

		if(errormsg != ''){
			showError(errormsg);
			return false;
		}
		return true;
	}
</script>
		</div>
	</td>
	</tr>

	</table>
	</td>
<?}}}?>
