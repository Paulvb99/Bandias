<?
$land11 = mysql_query("SELECT * FROM `tabakkoers` WHERE `land`='1'");
$land1 = mysql_fetch_object($land11);
$land21 = mysql_query("SELECT * FROM `tabakkoers` WHERE `land`='2'");
$land2 = mysql_fetch_object($land21);
$land31 = mysql_query("SELECT * FROM `tabakkoers` WHERE `land`='3'");
$land3 = mysql_fetch_object($land31);
$land41 = mysql_query("SELECT * FROM `tabakkoers` WHERE `land`='4'");
$land4 = mysql_fetch_object($land41);
$land51 = mysql_query("SELECT * FROM `tabakkoers` WHERE `land`='5'");
$land5 = mysql_fetch_object($land51);
$land61 = mysql_query("SELECT * FROM `tabakkoers` WHERE `land`='6'");
$land6 = mysql_fetch_object($land61);
$ditland1 = mysql_query("SELECT * FROM `tabakkoers` WHERE `land`='" . $data->city . "'");
$ditland = mysql_fetch_object($ditland1);
if(ctype_digit($_POST['tabak_1'])){
if(ctype_digit($_POST['tabak_2'])){
if(ctype_digit($_POST['tabak_3'])){
if(ctype_digit($_POST['tabak_4'])){
if(ctype_digit($_POST['tabak_5'])){
if(ctype_digit($_POST['tabak_6'])){
if($_POST['tabak_1'] <= $data->pruimtabak && $_POST['tabak_2'] <= $data->vannelle && $_POST['tabak_3'] <= $data->drum && $_POST['tabak_4'] <= $data->lm && $_POST['tabak_5'] <= $data->kent && $_POST['tabak_6'] <= $data->panter){
if($_POST['tabak_1']+$_POST['tabak_2']+$_POST['tabak_3']+$_POST['tabak_4']+$_POST['tabak_5']+$_POST['tabak_6'] > 0){
$error = niks;
$gelderbij = $ditland->pruimtabak*$_POST['tabak_1']+$ditland->vannelle*$_POST['tabak_2']+$ditland->drum*$_POST['tabak_3']+$ditland->lm*$_POST['tabak_4']+$ditland->kent*$_POST['tabak_5']+$ditland->panter*$_POST['tabak_6'];
mysql_query("UPDATE `users` SET `contant`=`contant`+'" . $gelderbij . "',`pruimtabak`=`pruimtabak`-'" . $_POST['tabak_1'] . "',`vannelle`=`vannelle`-'" . $_POST['tabak_2'] . "',`drum`=`drum`-'" . $_POST['tabak_3'] . "',`lm`=`lm`-'" . $_POST['tabak_4'] . "',`kent`=`kent`-'" . $_POST['tabak_5'] . "',`panter`=`panter`-'" . $_POST['tabak_6'] . "' WHERE `id`='" . $data->id . "'");
}
}
$post = $_POST['tabak_1']+$_POST['tabak_2']+$_POST['tabak_3']+$_POST['tabak_4']+$_POST['tabak_5']+$_POST['tabak_6'];
if($post <= 0){
$error = 1;}
if($_POST['tabak_1'] > $data->pruimtabak || $_POST['tabak_2'] > $data->vannelle || $_POST['tabak_3'] > $data->drum || $_POST['tabak_4'] > $data->lm || $_POST['tabak_5'] > $data->kent || $_POST['tabak_6'] > $data->panter){
$error = 2;}
}
}
}
}
}
}
if($error == 2){?>
			<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Je probeert tabak te verkopen die je helemaal niet hebt					</td>
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
if($error == 1){?>
			<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Je hebt een ongeldig aantal ingevoerd					</td>
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
if($error == 'niks'){
$_SESSION['mission'] = "Verdien geld door je tabak te verkopen";
?>
			<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup" align="center">
				<tr>
					<td>
						Je tabak is verkocht, dit heeft je &euro; <?echo$gelderbij;?>,- opgeleverd.					</td>
				</tr>
				<tr>
					<td>
						<br><br>
							<a href="index.php?a=selltabak" class="msg_ok">Klik hier indien je niet automatisch verder gaat.</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<script language="javascript">
	setTimeout("document.location.href='index.php?a=selltabak'",(3000*2));
</script>
		</div>
	</td>
	</tr>

	</table>
	</td>
<?}
if($error == ""){
?>


		<div class="title_bg"><div style="font-size:17px; color:#1b1a17; margin-left:10px; padding-top:4px;">Tabak verkopen</div></div>
		<div style="width:100%; height:auto; background:#c3b79d; font-family:arial; font-size:12px; color:#2a190e;">
			<div style="padding:5px; padding-bottom:10px;">
			Verdien hier geld door je tabak te verkopen			</div>
		</div>

		<script language="javascript">
			function openTab(pTabPage,pTab){
								document.getElementById('tabak_sell').style.display = 'none';
								document.getElementById('tabak_index').style.display = 'none';

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
									<div id="tab1" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px; background:url('images/tab_info_arrow.gif') bottom no-repeat; font-weight:bold;"><a href="#" onclick="openTab('tabak_sell','tab1'); return false">Tabak verkopen</a></div>
												<div style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px;">|</div>
												<div id="tab2" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px;"><a href="#" onclick="openTab('tabak_index','tab2'); return false">Tabak koersen</a></div>
								</div>

		<div style="background-color:#dbd2b7; ">
		<br>
		<table cellpadding="4" cellspacing="0" width="100%" align="center"><tr><td>
			<div id="tabak_sell">
		Behalve je tabak te koop zetten heb je ook de mogelijkheid deze te verkopen in cafe's, discotheken, op parkeerplaatsen en dergelijke. Hoeveel geld je per zakje ontvangt hangt af van wat de zogenaamde tabakkoers is in de stad. Deze kun je vinden op onder het tabblad "Tabak koersen"		<br /><br />
		<table align="center" width="100%">
			<tr>
				<td>
					<form method="POST">
						<table width="100%" cellpadding="2" cellspacing="2" class="mod_list">
															<tr class="top">
									<td><b>Pruimtabak</b></td><td width="6%" align="center"><img src="images/icons_gif/pill.gif" alt="tabak"></td><td>Bezit: <?echo$data->pruimtabak;?> pakjes</td>
								</tr>
								<tr class="top">
									<td>Verkopen:</td><td width="6%" align="center"><img src="images/icons_gif/pill_go.gif" alt="tabak"></td><td><input type="text" name="tabak_1" size="5" value="0"> pakjes</td>
								</tr>

								<tr height="5">

								</tr>

															<tr class="top">
									<td><b>Van Nelle</b></td><td width="6%" align="center"><img src="images/icons_gif/pill.gif" alt="tabak"></td><td>Bezit: <?echo$data->vannelle;?> pakjes</td>
								</tr>
								<tr class="top">
									<td>Verkopen:</td><td width="6%" align="center"><img src="images/icons_gif/pill_go.gif" alt="tabak"></td><td><input type="text" name="tabak_2" size="5" value="0"> pakjes</td>
								</tr>

								<tr height="5">

								</tr>

															<tr class="top">
									<td><b>Drum</b></td><td width="6%" align="center"><img src="images/icons_gif/pill.gif" alt="tabak"></td><td>Bezit: <?echo$data->drum;?> pakjes</td>
								</tr>
								<tr class="top">
									<td>Verkopen:</td><td width="6%" align="center"><img src="images/icons_gif/pill_go.gif" alt="tabak"></td><td><input type="text" name="tabak_3" size="5" value="0"> pakjes</td>
								</tr>

								<tr height="5">

								</tr>

															<tr class="top">
									<td><b>L&M</b></td><td width="6%" align="center"><img src="images/icons_gif/pill.gif" alt="tabak"></td><td>Bezit: <?echo$data->lm;?> pakjes</td>
								</tr>
								<tr class="top">
									<td>Verkopen:</td><td width="6%" align="center"><img src="images/icons_gif/pill_go.gif" alt="tabak"></td><td><input type="text" name="tabak_4" size="5" value="0"> pakjes</td>
								</tr>

								<tr height="5">

								</tr>

															<tr class="top">
									<td><b>Kent</b></td><td width="6%" align="center"><img src="images/icons_gif/pill.gif" alt="tabak"></td><td>Bezit: <?echo$data->kent;?> pakjes</td>
								</tr>
								<tr class="top">
									<td>Verkopen:</td><td width="6%" align="center"><img src="images/icons_gif/pill_go.gif" alt="tabak"></td><td><input type="text" name="tabak_5" size="5" value="0"> pakjes</td>
								</tr>

								<tr height="5">

								</tr>

															<tr class="top">
									<td><b>Panter</b></td><td width="6%" align="center"><img src="images/icons_gif/pill.gif" alt="tabak"></td><td>Bezit: <?echo$data->panter;?> pakjes</td>
								</tr>
								<tr class="top">
									<td>Verkopen:</td><td width="6%" align="center"><img src="images/icons_gif/pill_go.gif" alt="tabak"></td><td><input type="text" name="tabak_6" size="5" value="0"> pakjes</td>
								</tr>

								<tr height="5">

								</tr>

													</table>
					<br />
					<div align="center"><input type="submit" name="go" value="Verkoop de tabak!" class="mod_submit"></div>
					</form>
				</td>
			</tr>
		</table>
	</div>


	<div id="tabak_index" style="display:none">
<?
//De cron update moet zijn:
/////////////////////////////////////////
//      pruimtabak: 650 tm 1300         //
//      vannelle:     1200 tm 2200        //
//      drum:       2000 tm 3100        //
//      lm:       3000 tm 4000        //
//      kent:     4000 tm 4600        //
//      panter:     4600 tm 5200        //
/////////////////////////////////////////
if($land1->panter > $land2->panter && $land1->panter > $land3->panter && $land1->panter > $land4->panter && $land1->panter > $land5->panter && $land1->panter > $land6->panter){$panterhoogst = 1;}
if($land2->panter > $land1->panter && $land2->panter > $land3->panter && $land2->panter > $land4->panter && $land2->panter > $land5->panter && $land2->panter > $land6->panter){$panterhoogst = 2;}
if($land3->panter > $land1->panter && $land3->panter > $land2->panter && $land3->panter > $land4->panter && $land3->panter > $land5->panter && $land3->panter > $land6->panter){$panterhoogst = 3;}
if($land4->panter > $land1->panter && $land4->panter > $land2->panter && $land4->panter > $land3->panter && $land4->panter > $land5->panter && $land4->panter > $land6->panter){$panterhoogst = 4;}
if($land5->panter > $land1->panter && $land5->panter > $land2->panter && $land5->panter > $land3->panter && $land5->panter > $land4->panter && $land5->panter > $land6->panter){$panterhoogst = 5;}
if($land6->panter > $land1->panter && $land6->panter > $land2->panter && $land6->panter > $land3->panter && $land6->panter > $land4->panter && $land6->panter > $land5->panter){$panterhoogst = 6;}
if($land1->pruimtabak > $land2->pruimtabak && $land1->pruimtabak > $land3->pruimtabak && $land1->pruimtabak > $land4->pruimtabak && $land1->pruimtabak > $land5->pruimtabak && $land1->pruimtabak > $land6->pruimtabak){$wiethoogst = 1;}
if($land2->pruimtabak > $land1->pruimtabak && $land2->pruimtabak > $land3->pruimtabak && $land2->pruimtabak > $land4->pruimtabak && $land2->pruimtabak > $land5->pruimtabak && $land2->pruimtabak > $land6->pruimtabak){$wiethoogst = 2;}
if($land3->pruimtabak > $land1->pruimtabak && $land3->pruimtabak > $land2->pruimtabak && $land3->pruimtabak > $land4->pruimtabak && $land3->pruimtabak > $land5->pruimtabak && $land3->pruimtabak > $land6->pruimtabak){$wiethoogst = 3;}
if($land4->pruimtabak > $land1->pruimtabak && $land4->pruimtabak > $land2->pruimtabak && $land4->pruimtabak > $land3->pruimtabak && $land4->pruimtabak > $land5->pruimtabak && $land4->pruimtabak > $land6->pruimtabak){$wiethoogst = 4;}
if($land5->pruimtabak > $land1->pruimtabak && $land5->pruimtabak > $land2->pruimtabak && $land5->pruimtabak > $land3->pruimtabak && $land5->pruimtabak > $land4->pruimtabak && $land5->pruimtabak > $land6->pruimtabak){$wiethoogst = 5;}
if($land6->pruimtabak > $land1->pruimtabak && $land6->pruimtabak > $land2->pruimtabak && $land6->pruimtabak > $land3->pruimtabak && $land6->pruimtabak > $land4->pruimtabak && $land6->pruimtabak > $land5->pruimtabak){$wiethoogst = 6;}
if($land1->vannelle > $land2->vannelle && $land1->vannelle > $land3->vannelle && $land1->vannelle > $land4->vannelle && $land1->vannelle > $land5->vannelle && $land1->vannelle > $land6->vannelle){$vannellehoogst = 1;}
if($land2->vannelle > $land1->vannelle && $land2->vannelle > $land3->vannelle && $land2->vannelle > $land4->vannelle && $land2->vannelle > $land5->vannelle && $land2->vannelle > $land6->vannelle){$vannellehoogst = 2;}
if($land3->vannelle > $land1->vannelle && $land3->vannelle > $land2->vannelle && $land3->vannelle > $land4->vannelle && $land3->vannelle > $land5->vannelle && $land3->vannelle > $land6->vannelle){$vannellehoogst = 3;}
if($land4->vannelle > $land1->vannelle && $land4->vannelle > $land2->vannelle && $land4->vannelle > $land3->vannelle && $land4->vannelle > $land5->vannelle && $land4->vannelle > $land6->vannelle){$vannellehoogst = 4;}
if($land5->vannelle > $land1->vannelle && $land5->vannelle > $land2->vannelle && $land5->vannelle > $land3->vannelle && $land5->vannelle > $land4->vannelle && $land5->vannelle > $land6->vannelle){$vannellehoogst = 5;}
if($land6->vannelle > $land1->vannelle && $land6->vannelle > $land2->vannelle && $land6->vannelle > $land3->vannelle && $land6->vannelle > $land4->vannelle && $land6->vannelle > $land5->vannelle){$vannellehoogst = 6;}
if($land1->drum > $land2->drum && $land1->drum > $land3->drum && $land1->drum > $land4->drum && $land1->drum > $land5->drum && $land1->drum > $land6->drum){$drumhoogst = 1;}
if($land2->drum > $land1->drum && $land2->drum > $land3->drum && $land2->drum > $land4->drum && $land2->drum > $land5->drum && $land2->drum > $land6->drum){$drumhoogst = 2;}
if($land3->drum > $land1->drum && $land3->drum > $land2->drum && $land3->drum > $land4->drum && $land3->drum > $land5->drum && $land3->drum > $land6->drum){$drumhoogst = 3;}
if($land4->drum > $land1->drum && $land4->drum > $land2->drum && $land4->drum > $land3->drum && $land4->drum > $land5->drum && $land4->drum > $land6->drum){$drumhoogst = 4;}
if($land5->drum > $land1->drum && $land5->drum > $land2->drum && $land5->drum > $land3->drum && $land5->drum > $land4->drum && $land5->drum > $land6->drum){$drumhoogst = 5;}
if($land6->drum > $land1->drum && $land6->drum > $land2->drum && $land6->drum > $land3->drum && $land6->drum > $land4->drum && $land6->drum > $land5->drum){$drumhoogst = 6;}
if($land1->lm > $land2->lm && $land1->lm > $land3->lm && $land1->lm > $land4->lm && $land1->lm > $land5->lm && $land1->lm > $land6->lm){$lmhoogst = 1;}
if($land2->lm > $land1->lm && $land2->lm > $land3->lm && $land2->lm > $land4->lm && $land2->lm > $land5->lm && $land2->lm > $land6->lm){$lmhoogst = 2;}
if($land3->lm > $land1->lm && $land3->lm > $land2->lm && $land3->lm > $land4->lm && $land3->lm > $land5->lm && $land3->lm > $land6->lm){$lmhoogst = 3;}
if($land4->lm > $land1->lm && $land4->lm > $land2->lm && $land4->lm > $land3->lm && $land4->lm > $land5->lm && $land4->lm > $land6->lm){$lmhoogst = 4;}
if($land5->lm > $land1->lm && $land5->lm > $land2->lm && $land5->lm > $land3->lm && $land5->lm > $land4->lm && $land5->lm > $land6->lm){$lmhoogst = 5;}
if($land6->lm > $land1->lm && $land6->lm > $land2->lm && $land6->lm > $land3->lm && $land6->lm > $land4->lm && $land6->lm > $land5->lm){$lmhoogst = 6;}
if($land1->kent > $land2->kent && $land1->kent > $land3->kent && $land1->kent > $land4->kent && $land1->kent > $land5->kent && $land1->kent > $land6->kent){$kenthoogst = 1;}
if($land2->kent > $land1->kent && $land2->kent > $land3->kent && $land2->kent > $land4->kent && $land2->kent > $land5->kent && $land2->kent > $land6->kent){$kenthoogst = 2;}
if($land3->kent > $land1->kent && $land3->kent > $land2->kent && $land3->kent > $land4->kent && $land3->kent > $land5->kent && $land3->kent > $land6->kent){$kenthoogst = 3;}
if($land4->kent > $land1->kent && $land4->kent > $land2->kent && $land4->kent > $land3->kent && $land4->kent > $land5->kent && $land4->kent > $land6->kent){$kenthoogst = 4;}
if($land5->kent > $land1->kent && $land5->kent > $land2->kent && $land5->kent > $land3->kent && $land5->kent > $land4->kent && $land5->kent > $land6->kent){$kenthoogst = 5;}
if($land6->kent > $land1->kent && $land6->kent > $land2->kent && $land6->kent > $land3->kent && $land6->kent > $land4->kent && $land6->kent > $land5->kent){$kenthoogst = 6;}
$pruimtabak1 = number_format($land1->pruimtabak, 0,'.','.');
$vannelle1 = number_format($land1->vannelle, 0,'.','.');
$drum1 = number_format($land1->drum, 0,'.','.');
$lm1 = number_format($land1->lm, 0,'.','.');
$kent1 = number_format($land1->kent, 0,'.','.');
$panter1 = number_format($land1->panter, 0,'.','.');
$pruimtabak2 = number_format($land2->pruimtabak, 0,'.','.');
$vannelle2 = number_format($land2->vannelle, 0,'.','.');
$drum2 = number_format($land2->drum, 0,'.','.');
$lm2 = number_format($land2->lm, 0,'.','.');
$kent2 = number_format($land2->kent, 0,'.','.');
$panter2 = number_format($land2->panter, 0,'.','.');
$pruimtabak3 = number_format($land3->pruimtabak, 0,'.','.');
$vannelle3 = number_format($land3->vannelle, 0,'.','.');
$drum3 = number_format($land3->drum, 0,'.','.');
$lm3 = number_format($land3->lm, 0,'.','.');
$kent3 = number_format($land3->kent, 0,'.','.');
$panter3 = number_format($land3->panter, 0,'.','.');
$pruimtabak4 = number_format($land4->pruimtabak, 0,'.','.');
$vannelle4 = number_format($land4->vannelle, 0,'.','.');
$drum4 = number_format($land4->drum, 0,'.','.');
$lm4 = number_format($land4->lm, 0,'.','.');
$kent4 = number_format($land4->kent, 0,'.','.');
$panter4 = number_format($land4->panter, 0,'.','.');
$pruimtabak5 = number_format($land5->pruimtabak, 0,'.','.');
$vannelle5 = number_format($land5->vannelle, 0,'.','.');
$drum5 = number_format($land5->drum, 0,'.','.');
$lm5 = number_format($land5->lm, 0,'.','.');
$kent5 = number_format($land5->kent, 0,'.','.');
$panter5 = number_format($land5->panter, 0,'.','.');
$pruimtabak6 = number_format($land6->pruimtabak, 0,'.','.');
$vannelle6 = number_format($land6->vannelle, 0,'.','.');
$drum6 = number_format($land6->drum, 0,'.','.');
$lm6 = number_format($land6->lm, 0,'.','.');
$kent6 = number_format($land6->kent, 0,'.','.');
$panter6 = number_format($land6->panter, 0,'.','.');
?>
		Hieronder vind je een overzicht van de tabakkoersen. De prijs per zakje / doosje zal in elke stad anders zijn.<br>De groene arcering geeft aan waar de tabak het duurst verkocht kan worden.<br>De bruine arcering geeft aan in welke stad je nu zit.		<br /><br />

		<table width="97%" cellspacing="2" cellpadding="2" class="mod_list">
			<tr>
					<td>&nbsp;</td>
					<td><b>Stad</b></td>
					<td>&nbsp;</td><td>Pruimtabak</td><td>Van Nelle</td><td>Drum</td><td>L&M</td><td>Kent</td><td>Panter</td></tr><tr>
						<td align="center" <?if($data->city == 1){?>style="background:#c8bfa3"<?}?>><img src="images/icons_gif/world.gif"></td>
						<td <?if($data->city == 1){?>style="background:#c8bfa3"<?}?>>Turijn</td>
						<td align="center" <?if($data->city == 1){?>style="background:#c8bfa3"<?}?>><img src="images/icons_gif/money.gif"></td><td <?if($wiethoogst == 1){?>style="background:#c9dfcc"<?}else if($data->city == 1){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$pruimtabak1;?>,-
                            </td><td <?if($vannellehoogst == 1){?>style="background:#c9dfcc"<?}else if($data->city == 1){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$vannelle1;?>,-
							</td><td <?if($drumhoogst == 1){?>style="background:#c9dfcc"<?}else if($data->city == 1){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$drum1;?>,-
							</td><td <?if($lmhoogst == 1){?>style="background:#c9dfcc"<?}else if($data->city == 1){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$lm1;?>,-
							</td><td <?if($kenthoogst == 1){?>style="background:#c9dfcc"<?}else if($data->city == 1){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$kent1;?>,-
							</td><td <?if($panterhoogst == 1){?>style="background:#c9dfcc"<?}else if($data->city == 1){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$panter1;?>,-
							</td></tr><tr>
						<td align="center" <?if($data->city == 2){?>style="background:#c8bfa3"<?}?>><img src="images/icons_gif/world.gif"></td>
						<td <?if($data->city == 2){?>style="background:#c8bfa3"<?}?>>Palermo</td>
						<td align="center" <?if($data->city == 2){?>style="background:#c8bfa3"<?}?>><img src="images/icons_gif/money.gif"></td><td <?if($wiethoogst == 2){?>style="background:#c9dfcc"<?}else if($data->city == 2){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$pruimtabak2;?>,-
                            </td><td <?if($vannellehoogst == 2){?>style="background:#c9dfcc"<?}else if($data->city == 2){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$vannelle2;?>,-
							</td><td <?if($drumhoogst == 2){?>style="background:#c9dfcc"<?}else if($data->city == 2){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$drum2;?>,-
							</td><td <?if($lmhoogst == 2){?>style="background:#c9dfcc"<?}else if($data->city == 2){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$lm2;?>,-
							</td><td <?if($kenthoogst == 2){?>style="background:#c9dfcc"<?}else if($data->city == 2){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$kent2;?>,-
							</td><td <?if($panterhoogst == 2){?>style="background:#c9dfcc"<?}else if($data->city == 2){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$panter2;?>,-
							</td></tr><tr>
						<td align="center" <?if($data->city == 3){?>style="background:#c8bfa3"<?}?>><img src="images/icons_gif/world.gif"></td>
						<td <?if($data->city == 3){?>style="background:#c8bfa3"<?}?>>Milaan</td>
						<td align="center" <?if($data->city == 3){?>style="background:#c8bfa3"<?}?>><img src="images/icons_gif/money.gif"></td><td <?if($wiethoogst == 3){?>style="background:#c9dfcc"<?}else if($data->city == 3){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$pruimtabak3;?>,-
                            </td><td <?if($vannellehoogst == 3){?>style="background:#c9dfcc"<?}else if($data->city == 3){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$vannelle3;?>,-
							</td><td <?if($drumhoogst == 3){?>style="background:#c9dfcc"<?}else if($data->city == 3){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$drum3;?>,-
							</td><td <?if($lmhoogst == 3){?>style="background:#c9dfcc"<?}else if($data->city == 3){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$lm3;?>,-
							</td><td <?if($kenthoogst == 3){?>style="background:#c9dfcc"<?}else if($data->city == 3){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$kent3;?>,-
							</td><td <?if($panterhoogst == 3){?>style="background:#c9dfcc"<?}else if($data->city == 3){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$panter3;?>,-
							</td></tr><tr>
						<td align="center" <?if($data->city == 4){?>style="background:#c8bfa3"<?}?>><img src="images/icons_gif/world.gif"></td>
						<td <?if($data->city == 4){?>style="background:#c8bfa3"<?}?>>Rome</td>
						<td align="center" <?if($data->city == 4){?>style="background:#c8bfa3"<?}?>><img src="images/icons_gif/money.gif"></td><td <?if($wiethoogst == 4){?>style="background:#c9dfcc"<?}else if($data->city == 4){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$pruimtabak4;?>,-
                            </td><td <?if($vannellehoogst == 4){?>style="background:#c9dfcc"<?}else if($data->city == 4){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$vannelle4;?>,-
							</td><td <?if($drumhoogst == 4){?>style="background:#c9dfcc"<?}else if($data->city == 4){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$drum4?>,-
							</td><td <?if($lmhoogst == 4){?>style="background:#c9dfcc"<?}else if($data->city == 4){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$lm4;?>,-
							</td><td <?if($kenthoogst == 4){?>style="background:#c9dfcc"<?}else if($data->city == 4){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$kent4;?>,-
							</td><td <?if($panterhoogst == 4){?>style="background:#c9dfcc"<?}else if($data->city == 4){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$panter4;?>,-
							</td></tr><tr>
						<td align="center" <?if($data->city == 5){?>style="background:#c8bfa3"<?}?>><img src="images/icons_gif/world.gif"></td>
						<td <?if($data->city == 5){?>style="background:#c8bfa3"<?}?>>Catania</td>
						<td align="center" <?if($data->city == 5){?>style="background:#c8bfa3"<?}?>><img src="images/icons_gif/money.gif"></td><td <?if($wiethoogst == 5){?>style="background:#c9dfcc"<?}else if($data->city == 5){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$pruimtabak5;?>,-
                            </td><td <?if($vannellehoogst == 5){?>style="background:#c9dfcc"<?}else if($data->city == 5){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$vannelle5;?>,-
							</td><td <?if($drumhoogst == 5){?>style="background:#c9dfcc"<?}else if($data->city == 5){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$drum5?>,-
							</td><td <?if($lmhoogst == 5){?>style="background:#c9dfcc"<?}else if($data->city == 5){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$lm5;?>,-
							</td><td <?if($kenthoogst == 5){?>style="background:#c9dfcc"<?}else if($data->city == 5){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$kent5;?>,-
							</td><td <?if($panterhoogst == 5){?>style="background:#c9dfcc"<?}else if($data->city == 5){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$panter5;?>,-
							</td></tr><tr>
						<td align="center" <?if($data->city == 6){?>style="background:#c8bfa3"<?}?>><img src="images/icons_gif/world.gif"></td>
						<td <?if($data->city == 6){?>style="background:#c8bfa3"<?}?>>Corleone</td>
						<td align="center" <?if($data->city == 6){?>style="background:#c8bfa3"<?}?>><img src="images/icons_gif/money.gif"></td><td <?if($wiethoogst == 6){?>style="background:#c9dfcc"<?}else if($data->city == 6){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$pruimtabak6;?>,-
                            </td><td <?if($vannellehoogst == 6){?>style="background:#c9dfcc"<?}else if($data->city == 6){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$vannelle6;?>,-
							</td><td <?if($drumhoogst == 6){?>style="background:#c9dfcc"<?}else if($data->city == 6){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$drum6?>,-
							</td><td <?if($lmhoogst == 6){?>style="background:#c9dfcc"<?}else if($data->city == 6){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$lm6;?>,-
							</td><td <?if($kenthoogst == 6){?>style="background:#c9dfcc"<?}else if($data->city == 6){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$kent6;?>,-
							</td><td <?if($panterhoogst == 6){?>style="background:#c9dfcc"<?}else if($data->city == 6){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$panter6;?>,-
							</td></tr>		</table>
		<br><br>
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