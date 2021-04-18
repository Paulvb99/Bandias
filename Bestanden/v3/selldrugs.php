<?
$land11 = mysql_query("SELECT * FROM `drugskoers` WHERE `land`='1'");
$land1 = mysql_fetch_object($land11);
$land21 = mysql_query("SELECT * FROM `drugskoers` WHERE `land`='2'");
$land2 = mysql_fetch_object($land21);
$land31 = mysql_query("SELECT * FROM `drugskoers` WHERE `land`='3'");
$land3 = mysql_fetch_object($land31);
$land41 = mysql_query("SELECT * FROM `drugskoers` WHERE `land`='4'");
$land4 = mysql_fetch_object($land41);
$land51 = mysql_query("SELECT * FROM `drugskoers` WHERE `land`='5'");
$land5 = mysql_fetch_object($land51);
$land61 = mysql_query("SELECT * FROM `drugskoers` WHERE `land`='6'");
$land6 = mysql_fetch_object($land61);
$ditland1 = mysql_query("SELECT * FROM `drugskoers` WHERE `land`='$data->city'");
$ditland = mysql_fetch_object($ditland1);
if(isset($_POST['go'])){
if($_POST['drug_1'] <= $data->nederwiet && $_POST['drug_2'] <= $data->paddo && $_POST['drug_3'] <= $data->xtc && $_POST['drug_4'] <= $data->lsd && $_POST['drug_5'] <= $data->speed && $_POST['drug_6'] <= $data->opium){
if($_POST['drug_1']+$_POST['drug_2']+$_POST['drug_3']+$_POST['drug_4']+$_POST['drug_5']+$_POST['drug_6'] > 0){
$error = niks;
$gelderbij = $ditland->nederwiet*$_POST['drug_1']+$ditland->paddo*$_POST['drug_2']+$ditland->xtc*$_POST['drug_3']+$ditland->lsd*$_POST['drug_4']+$ditland->speed*$_POST['drug_5']+$ditland->opium*$_POST['drug_6'];
mysql_query("UPDATE `users` SET `contant`=`contant`+'$gelderbij',`nederwiet`=`nederwiet`-'{$_POST['drug_1']}',`paddo`=`paddo`-'{$_POST['drug_2']}',`xtc`=`xtc`-'{$_POST['drug_3']}',`lsd`=`lsd`-'{$_POST['drug_4']}',`speed`=`speed`-'{$_POST['drug_5']}',`opium`=`opium`-'{$_POST['drug_6']}' WHERE `id`='$data->id'");
}
}
$post = $_POST['drug_1']+$_POST['drug_2']+$_POST['drug_3']+$_POST['drug_4']+$_POST['drug_5']+$_POST['drug_6'];
if($post <= 0){
$error = 1;}
if($_POST['drug_1'] > $data->nederwiet || $_POST['drug_2'] > $data->paddo || $_POST['drug_3'] > $data->xtc || $_POST['drug_4'] > $data->lsd || $_POST['drug_5'] > $data->speed || $_POST['drug_6'] > $data->opium){
$error = 2;}
}
if($error == 2){?>
			<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Je probeert drugs te verkopen die je helemaal niet hebt					</td>
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
if($error == niks){
$_SESSION['mission'] = "Verdien geld door je drugs te verkopen";
?>
			<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup" align="center">
				<tr>
					<td>
						Je drugs zijn verkocht, dit heeft je &euro; <?echo$gelderbij;?>,- opgeleverd.					</td>
				</tr>
				<tr>
					<td>
						<br><br>
							<a href="index.php?a=selldrugs" class="msg_ok">Klik hier indien je niet automatisch verder gaat.</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<script language="javascript">
	setTimeout("document.location.href='index.php?a=selldrugs'",(3000*2));
</script>
		</div>
	</td>
	</tr>

	</table>
	</td>
<?}
if($error == ""){
?>


		<div class="title_bg"><div style="font-size:17px; color:#1b1a17; margin-left:10px; padding-top:4px;">Drugs verkopen</div></div>
		<div style="width:100%; height:auto; background:#c3b79d; font-family:arial; font-size:12px; color:#2a190e;">
			<div style="padding:5px; padding-bottom:10px;">
			Verdien hier geld door je drugs te verkopen			</div>
		</div>

		<script language="javascript">
			function openTab(pTabPage,pTab){
								document.getElementById('drug_sell').style.display = 'none';
								document.getElementById('drug_index').style.display = 'none';

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
									<div id="tab1" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px; background:url('images/tab_info_arrow.gif') bottom no-repeat; font-weight:bold;"><a href="#" onclick="openTab('drug_sell','tab1'); return false">Drugs verkopen</a></div>
												<div style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px;">|</div>
												<div id="tab2" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px;"><a href="#" onclick="openTab('drug_index','tab2'); return false">Drugs koersen</a></div>
								</div>

		<div style="background-color:#dbd2b7; ">
		<br>
		<table cellpadding="4" cellspacing="0" width="100%" align="center"><tr><td>
			<div id="drug_sell">
		Behalve je drugs te koop zetten heb je ook de mogelijkheid deze te verkopen in cafe's, discotheken, op parkeerplaatsen en dergelijke. Hoeveel geld je per zakje ontvangt hangt af van wat de zogenaamde drugskoers is in de stad. Deze kun je vinden op onder het tabblad "Drugs koersen"		<br /><br />
		<table align="center" width="100%">
			<tr>
				<td>
					<form method="POST">
						<table width="100%" cellpadding="2" cellspacing="2" class="mod_list">
															<tr class="top">
									<td><b>Nederwiet Upgrade</b></td><td width="6%" align="center"><img src="images/icons_gif/pill.gif" alt="Drugs"></td><td>Bezit: <?echo$data->nederwiet;?> zakjes</td>
								</tr>
								<tr class="top">
									<td>Verkopen:</td><td width="6%" align="center"><img src="images/icons_gif/pill_go.gif" alt="Drugs"></td><td><input type="text" name="drug_1" size="5" value="0"> zakjes</td>
								</tr>

								<tr height="5">

								</tr>

															<tr class="top">
									<td><b>Paddo Upgrade</b></td><td width="6%" align="center"><img src="images/icons_gif/pill.gif" alt="Drugs"></td><td>Bezit: <?echo$data->paddo;?> zakjes</td>
								</tr>
								<tr class="top">
									<td>Verkopen:</td><td width="6%" align="center"><img src="images/icons_gif/pill_go.gif" alt="Drugs"></td><td><input type="text" name="drug_2" size="5" value="0"> zakjes</td>
								</tr>

								<tr height="5">

								</tr>

															<tr class="top">
									<td><b>XTC Upgrade</b></td><td width="6%" align="center"><img src="images/icons_gif/pill.gif" alt="Drugs"></td><td>Bezit: <?echo$data->xtc;?> zakjes</td>
								</tr>
								<tr class="top">
									<td>Verkopen:</td><td width="6%" align="center"><img src="images/icons_gif/pill_go.gif" alt="Drugs"></td><td><input type="text" name="drug_3" size="5" value="0"> zakjes</td>
								</tr>

								<tr height="5">

								</tr>

															<tr class="top">
									<td><b>LSD Upgrade</b></td><td width="6%" align="center"><img src="images/icons_gif/pill.gif" alt="Drugs"></td><td>Bezit: <?echo$data->lsd;?> zakjes</td>
								</tr>
								<tr class="top">
									<td>Verkopen:</td><td width="6%" align="center"><img src="images/icons_gif/pill_go.gif" alt="Drugs"></td><td><input type="text" name="drug_4" size="5" value="0"> zakjes</td>
								</tr>

								<tr height="5">

								</tr>

															<tr class="top">
									<td><b>Speed Upgrade</b></td><td width="6%" align="center"><img src="images/icons_gif/pill.gif" alt="Drugs"></td><td>Bezit: <?echo$data->speed;?> zakjes</td>
								</tr>
								<tr class="top">
									<td>Verkopen:</td><td width="6%" align="center"><img src="images/icons_gif/pill_go.gif" alt="Drugs"></td><td><input type="text" name="drug_5" size="5" value="0"> zakjes</td>
								</tr>

								<tr height="5">

								</tr>

															<tr class="top">
									<td><b>Opium Upgrade</b></td><td width="6%" align="center"><img src="images/icons_gif/pill.gif" alt="Drugs"></td><td>Bezit: <?echo$data->opium;?> zakjes</td>
								</tr>
								<tr class="top">
									<td>Verkopen:</td><td width="6%" align="center"><img src="images/icons_gif/pill_go.gif" alt="Drugs"></td><td><input type="text" name="drug_6" size="5" value="0"> zakjes</td>
								</tr>

								<tr height="5">

								</tr>

													</table>
					<br />
					<div align="center"><input type="submit" name="go" value="Verkoop de drugs!" class="mod_submit"></div>
					</form>
				</td>
			</tr>
		</table>
	</div>


	<div id="drug_index" style="display:none">
<?
//De cron update moet zijn:
/////////////////////////////////////////
//      nederwiet: 650 tm 1300         //
//      paddo:     1200 tm 2200        //
//      xtc:       2000 tm 3100        //
//      lsd:       3000 tm 4000        //
//      speed:     4000 tm 4600        //
//      opium:     4600 tm 5200        //
/////////////////////////////////////////
if($land1->opium > $land2->opium && $land1->opium > $land3->opium && $land1->opium > $land4->opium && $land1->opium > $land5->opium && $land1->opium > $land6->opium){$opiumhoogst = 1;}
if($land2->opium > $land1->opium && $land2->opium > $land3->opium && $land2->opium > $land4->opium && $land2->opium > $land5->opium && $land2->opium > $land6->opium){$opiumhoogst = 2;}
if($land3->opium > $land1->opium && $land3->opium > $land2->opium && $land3->opium > $land4->opium && $land3->opium > $land5->opium && $land3->opium > $land6->opium){$opiumhoogst = 3;}
if($land4->opium > $land1->opium && $land4->opium > $land2->opium && $land4->opium > $land3->opium && $land4->opium > $land5->opium && $land4->opium > $land6->opium){$opiumhoogst = 4;}
if($land5->opium > $land1->opium && $land5->opium > $land2->opium && $land5->opium > $land3->opium && $land5->opium > $land4->opium && $land5->opium > $land6->opium){$opiumhoogst = 5;}
if($land6->opium > $land1->opium && $land6->opium > $land2->opium && $land6->opium > $land3->opium && $land6->opium > $land4->opium && $land6->opium > $land5->opium){$opiumhoogst = 6;}
if($land1->nederwiet > $land2->nederwiet && $land1->nederwiet > $land3->nederwiet && $land1->nederwiet > $land4->nederwiet && $land1->nederwiet > $land5->nederwiet && $land1->nederwiet > $land6->nederwiet){$wiethoogst = 1;}
if($land2->nederwiet > $land1->nederwiet && $land2->nederwiet > $land3->nederwiet && $land2->nederwiet > $land4->nederwiet && $land2->nederwiet > $land5->nederwiet && $land2->nederwiet > $land6->nederwiet){$wiethoogst = 2;}
if($land3->nederwiet > $land1->nederwiet && $land3->nederwiet > $land2->nederwiet && $land3->nederwiet > $land4->nederwiet && $land3->nederwiet > $land5->nederwiet && $land3->nederwiet > $land6->nederwiet){$wiethoogst = 3;}
if($land4->nederwiet > $land1->nederwiet && $land4->nederwiet > $land2->nederwiet && $land4->nederwiet > $land3->nederwiet && $land4->nederwiet > $land5->nederwiet && $land4->nederwiet > $land6->nederwiet){$wiethoogst = 4;}
if($land5->nederwiet > $land1->nederwiet && $land5->nederwiet > $land2->nederwiet && $land5->nederwiet > $land3->nederwiet && $land5->nederwiet > $land4->nederwiet && $land5->nederwiet > $land6->nederwiet){$wiethoogst = 5;}
if($land6->nederwiet > $land1->nederwiet && $land6->nederwiet > $land2->nederwiet && $land6->nederwiet > $land3->nederwiet && $land6->nederwiet > $land4->nederwiet && $land6->nederwiet > $land5->nederwiet){$wiethoogst = 6;}
if($land1->paddo > $land2->paddo && $land1->paddo > $land3->paddo && $land1->paddo > $land4->paddo && $land1->paddo > $land5->paddo && $land1->paddo > $land6->paddo){$paddohoogst = 1;}
if($land2->paddo > $land1->paddo && $land2->paddo > $land3->paddo && $land2->paddo > $land4->paddo && $land2->paddo > $land5->paddo && $land2->paddo > $land6->paddo){$paddohoogst = 2;}
if($land3->paddo > $land1->paddo && $land3->paddo > $land2->paddo && $land3->paddo > $land4->paddo && $land3->paddo > $land5->paddo && $land3->paddo > $land6->paddo){$paddohoogst = 3;}
if($land4->paddo > $land1->paddo && $land4->paddo > $land2->paddo && $land4->paddo > $land3->paddo && $land4->paddo > $land5->paddo && $land4->paddo > $land6->paddo){$paddohoogst = 4;}
if($land5->paddo > $land1->paddo && $land5->paddo > $land2->paddo && $land5->paddo > $land3->paddo && $land5->paddo > $land4->paddo && $land5->paddo > $land6->paddo){$paddohoogst = 5;}
if($land6->paddo > $land1->paddo && $land6->paddo > $land2->paddo && $land6->paddo > $land3->paddo && $land6->paddo > $land4->paddo && $land6->paddo > $land5->paddo){$paddohoogst = 6;}
if($land1->xtc > $land2->xtc && $land1->xtc > $land3->xtc && $land1->xtc > $land4->xtc && $land1->xtc > $land5->xtc && $land1->xtc > $land6->xtc){$xtchoogst = 1;}
if($land2->xtc > $land1->xtc && $land2->xtc > $land3->xtc && $land2->xtc > $land4->xtc && $land2->xtc > $land5->xtc && $land2->xtc > $land6->xtc){$xtchoogst = 2;}
if($land3->xtc > $land1->xtc && $land3->xtc > $land2->xtc && $land3->xtc > $land4->xtc && $land3->xtc > $land5->xtc && $land3->xtc > $land6->xtc){$xtchoogst = 3;}
if($land4->xtc > $land1->xtc && $land4->xtc > $land2->xtc && $land4->xtc > $land3->xtc && $land4->xtc > $land5->xtc && $land4->xtc > $land6->xtc){$xtchoogst = 4;}
if($land5->xtc > $land1->xtc && $land5->xtc > $land2->xtc && $land5->xtc > $land3->xtc && $land5->xtc > $land4->xtc && $land5->xtc > $land6->xtc){$xtchoogst = 5;}
if($land6->xtc > $land1->xtc && $land6->xtc > $land2->xtc && $land6->xtc > $land3->xtc && $land6->xtc > $land4->xtc && $land6->xtc > $land5->xtc){$xtchoogst = 6;}
if($land1->lsd > $land2->lsd && $land1->lsd > $land3->lsd && $land1->lsd > $land4->lsd && $land1->lsd > $land5->lsd && $land1->lsd > $land6->lsd){$lsdhoogst = 1;}
if($land2->lsd > $land1->lsd && $land2->lsd > $land3->lsd && $land2->lsd > $land4->lsd && $land2->lsd > $land5->lsd && $land2->lsd > $land6->lsd){$lsdhoogst = 2;}
if($land3->lsd > $land1->lsd && $land3->lsd > $land2->lsd && $land3->lsd > $land4->lsd && $land3->lsd > $land5->lsd && $land3->lsd > $land6->lsd){$lsdhoogst = 3;}
if($land4->lsd > $land1->lsd && $land4->lsd > $land2->lsd && $land4->lsd > $land3->lsd && $land4->lsd > $land5->lsd && $land4->lsd > $land6->lsd){$lsdhoogst = 4;}
if($land5->lsd > $land1->lsd && $land5->lsd > $land2->lsd && $land5->lsd > $land3->lsd && $land5->lsd > $land4->lsd && $land5->lsd > $land6->lsd){$lsdhoogst = 5;}
if($land6->lsd > $land1->lsd && $land6->lsd > $land2->lsd && $land6->lsd > $land3->lsd && $land6->lsd > $land4->lsd && $land6->lsd > $land5->lsd){$lsdhoogst = 6;}
if($land1->speed > $land2->speed && $land1->speed > $land3->speed && $land1->speed > $land4->speed && $land1->speed > $land5->speed && $land1->speed > $land6->speed){$speedhoogst = 1;}
if($land2->speed > $land1->speed && $land2->speed > $land3->speed && $land2->speed > $land4->speed && $land2->speed > $land5->speed && $land2->speed > $land6->speed){$speedhoogst = 2;}
if($land3->speed > $land1->speed && $land3->speed > $land2->speed && $land3->speed > $land4->speed && $land3->speed > $land5->speed && $land3->speed > $land6->speed){$speedhoogst = 3;}
if($land4->speed > $land1->speed && $land4->speed > $land2->speed && $land4->speed > $land3->speed && $land4->speed > $land5->speed && $land4->speed > $land6->speed){$speedhoogst = 4;}
if($land5->speed > $land1->speed && $land5->speed > $land2->speed && $land5->speed > $land3->speed && $land5->speed > $land4->speed && $land5->speed > $land6->speed){$speedhoogst = 5;}
if($land6->speed > $land1->speed && $land6->speed > $land2->speed && $land6->speed > $land3->speed && $land6->speed > $land4->speed && $land6->speed > $land5->speed){$speedhoogst = 6;}
$wiet1 = number_format($land1->nederwiet, 0,'.','.');
$paddo1 = number_format($land1->paddo, 0,'.','.');
$xtc1 = number_format($land1->xtc, 0,'.','.');
$lsd1 = number_format($land1->lsd, 0,'.','.');
$speed1 = number_format($land1->speed, 0,'.','.');
$opium1 = number_format($land1->opium, 0,'.','.');
$wiet2 = number_format($land2->nederwiet, 0,'.','.');
$paddo2 = number_format($land2->paddo, 0,'.','.');
$xtc2 = number_format($land2->xtc, 0,'.','.');
$lsd2 = number_format($land2->lsd, 0,'.','.');
$speed2 = number_format($land2->speed, 0,'.','.');
$opium2 = number_format($land2->opium, 0,'.','.');
$wiet3 = number_format($land3->nederwiet, 0,'.','.');
$paddo3 = number_format($land3->paddo, 0,'.','.');
$xtc3 = number_format($land3->xtc, 0,'.','.');
$lsd3 = number_format($land3->lsd, 0,'.','.');
$speed3 = number_format($land3->speed, 0,'.','.');
$opium3 = number_format($land3->opium, 0,'.','.');
$wiet4 = number_format($land4->nederwiet, 0,'.','.');
$paddo4 = number_format($land4->paddo, 0,'.','.');
$xtc4 = number_format($land4->xtc, 0,'.','.');
$lsd4 = number_format($land4->lsd, 0,'.','.');
$speed4 = number_format($land4->speed, 0,'.','.');
$opium4 = number_format($land4->opium, 0,'.','.');
$wiet5 = number_format($land5->nederwiet, 0,'.','.');
$paddo5 = number_format($land5->paddo, 0,'.','.');
$xtc5 = number_format($land5->xtc, 0,'.','.');
$lsd5 = number_format($land5->lsd, 0,'.','.');
$speed5 = number_format($land5->speed, 0,'.','.');
$opium5 = number_format($land5->opium, 0,'.','.');
$wiet6 = number_format($land6->nederwiet, 0,'.','.');
$paddo6 = number_format($land6->paddo, 0,'.','.');
$xtc6 = number_format($land6->xtc, 0,'.','.');
$lsd6 = number_format($land6->lsd, 0,'.','.');
$speed6 = number_format($land6->speed, 0,'.','.');
$opium6 = number_format($land6->opium, 0,'.','.');
?>
		Hieronder vind je een overzicht van de drugskoersen. De prijs per zakje zal in elke stad anders zijn.<br>De groene arcering geeft aan waar de drug het duurst verkocht kan worden.<br>De bruine arcering geeft aan in welke stad je nu zit.		<br /><br />

		<table width="97%" cellspacing="2" cellpadding="2" class="mod_list">
			<tr>
					<td>&nbsp;</td>
					<td><b>Stad</b></td>
					<td>&nbsp;</td><td>nederwiet</td><td>paddo</td><td>xtc</td><td>lsd</td><td>speed</td><td>opium</td></tr><tr>
						<td align="center" <?if($data->city == 1){?>style="background:#c8bfa3"<?}?>><img src="images/icons_gif/world.gif"></td>
						<td <?if($data->city == 1){?>style="background:#c8bfa3"<?}?>>Turijn</td>
						<td align="center" <?if($data->city == 1){?>style="background:#c8bfa3"<?}?>><img src="images/icons_gif/money.gif"></td><td <?if($wiethoogst == 1){?>style="background:#c9dfcc"<?}else if($data->city == 1){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$wiet1;?>,-
                            </td><td <?if($paddohoogst == 1){?>style="background:#c9dfcc"<?}else if($data->city == 1){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$paddo1;?>,-
							</td><td <?if($xtchoogst == 1){?>style="background:#c9dfcc"<?}else if($data->city == 1){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$xtc1;?>,-
							</td><td <?if($lsdhoogst == 1){?>style="background:#c9dfcc"<?}else if($data->city == 1){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$lsd1;?>,-
							</td><td <?if($speedhoogst == 1){?>style="background:#c9dfcc"<?}else if($data->city == 1){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$speed1;?>,-
							</td><td <?if($opiumhoogst == 1){?>style="background:#c9dfcc"<?}else if($data->city == 1){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$opium1;?>,-
							</td></tr><tr>
						<td align="center" <?if($data->city == 2){?>style="background:#c8bfa3"<?}?>><img src="images/icons_gif/world.gif"></td>
						<td <?if($data->city == 2){?>style="background:#c8bfa3"<?}?>>Palermo</td>
						<td align="center" <?if($data->city == 2){?>style="background:#c8bfa3"<?}?>><img src="images/icons_gif/money.gif"></td><td <?if($wiethoogst == 2){?>style="background:#c9dfcc"<?}else if($data->city == 2){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$wiet2;?>,-
                            </td><td <?if($paddohoogst == 2){?>style="background:#c9dfcc"<?}else if($data->city == 2){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$paddo2;?>,-
							</td><td <?if($xtchoogst == 2){?>style="background:#c9dfcc"<?}else if($data->city == 2){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$xtc2;?>,-
							</td><td <?if($lsdhoogst == 2){?>style="background:#c9dfcc"<?}else if($data->city == 2){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$lsd2;?>,-
							</td><td <?if($speedhoogst == 2){?>style="background:#c9dfcc"<?}else if($data->city == 2){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$speed2;?>,-
							</td><td <?if($opiumhoogst == 2){?>style="background:#c9dfcc"<?}else if($data->city == 2){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$opium2;?>,-
							</td></tr><tr>
						<td align="center" <?if($data->city == 3){?>style="background:#c8bfa3"<?}?>><img src="images/icons_gif/world.gif"></td>
						<td <?if($data->city == 3){?>style="background:#c8bfa3"<?}?>>Milaan</td>
						<td align="center" <?if($data->city == 3){?>style="background:#c8bfa3"<?}?>><img src="images/icons_gif/money.gif"></td><td <?if($wiethoogst == 3){?>style="background:#c9dfcc"<?}else if($data->city == 3){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$wiet3;?>,-
                            </td><td <?if($paddohoogst == 3){?>style="background:#c9dfcc"<?}else if($data->city == 3){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$paddo3;?>,-
							</td><td <?if($xtchoogst == 3){?>style="background:#c9dfcc"<?}else if($data->city == 3){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$xtc3;?>,-
							</td><td <?if($lsdhoogst == 3){?>style="background:#c9dfcc"<?}else if($data->city == 3){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$lsd3;?>,-
							</td><td <?if($speedhoogst == 3){?>style="background:#c9dfcc"<?}else if($data->city == 3){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$speed3;?>,-
							</td><td <?if($opiumhoogst == 3){?>style="background:#c9dfcc"<?}else if($data->city == 3){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$opium3;?>,-
							</td></tr><tr>
						<td align="center" <?if($data->city == 4){?>style="background:#c8bfa3"<?}?>><img src="images/icons_gif/world.gif"></td>
						<td <?if($data->city == 4){?>style="background:#c8bfa3"<?}?>>Rome</td>
						<td align="center" <?if($data->city == 4){?>style="background:#c8bfa3"<?}?>><img src="images/icons_gif/money.gif"></td><td <?if($wiethoogst == 4){?>style="background:#c9dfcc"<?}else if($data->city == 4){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$wiet4;?>,-
                            </td><td <?if($paddohoogst == 4){?>style="background:#c9dfcc"<?}else if($data->city == 4){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$paddo4;?>,-
							</td><td <?if($xtchoogst == 4){?>style="background:#c9dfcc"<?}else if($data->city == 4){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$xtc4?>,-
							</td><td <?if($lsdhoogst == 4){?>style="background:#c9dfcc"<?}else if($data->city == 4){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$lsd4;?>,-
							</td><td <?if($speedhoogst == 4){?>style="background:#c9dfcc"<?}else if($data->city == 4){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$speed4;?>,-
							</td><td <?if($opiumhoogst == 4){?>style="background:#c9dfcc"<?}else if($data->city == 4){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$opium4;?>,-
							</td></tr><tr>
						<td align="center" <?if($data->city == 5){?>style="background:#c8bfa3"<?}?>><img src="images/icons_gif/world.gif"></td>
						<td <?if($data->city == 5){?>style="background:#c8bfa3"<?}?>>Catania</td>
						<td align="center" <?if($data->city == 5){?>style="background:#c8bfa3"<?}?>><img src="images/icons_gif/money.gif"></td><td <?if($wiethoogst == 5){?>style="background:#c9dfcc"<?}else if($data->city == 5){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$wiet5;?>,-
                            </td><td <?if($paddohoogst == 5){?>style="background:#c9dfcc"<?}else if($data->city == 5){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$paddo5;?>,-
							</td><td <?if($xtchoogst == 5){?>style="background:#c9dfcc"<?}else if($data->city == 5){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$xtc5?>,-
							</td><td <?if($lsdhoogst == 5){?>style="background:#c9dfcc"<?}else if($data->city == 5){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$lsd5;?>,-
							</td><td <?if($speedhoogst == 5){?>style="background:#c9dfcc"<?}else if($data->city == 5){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$speed5;?>,-
							</td><td <?if($opiumhoogst == 5){?>style="background:#c9dfcc"<?}else if($data->city == 5){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$opium5;?>,-
							</td></tr><tr>
						<td align="center" <?if($data->city == 6){?>style="background:#c8bfa3"<?}?>><img src="images/icons_gif/world.gif"></td>
						<td <?if($data->city == 6){?>style="background:#c8bfa3"<?}?>>Corleone</td>
						<td align="center" <?if($data->city == 6){?>style="background:#c8bfa3"<?}?>><img src="images/icons_gif/money.gif"></td><td <?if($wiethoogst == 6){?>style="background:#c9dfcc"<?}else if($data->city == 6){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$wiet6;?>,-
                            </td><td <?if($paddohoogst == 6){?>style="background:#c9dfcc"<?}else if($data->city == 6){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$paddo6;?>,-
							</td><td <?if($xtchoogst == 6){?>style="background:#c9dfcc"<?}else if($data->city == 6){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$xtc6?>,-
							</td><td <?if($lsdhoogst == 6){?>style="background:#c9dfcc"<?}else if($data->city == 6){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$lsd6;?>,-
							</td><td <?if($speedhoogst == 6){?>style="background:#c9dfcc"<?}else if($data->city == 6){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$speed6;?>,-
							</td><td <?if($opiumhoogst == 6){?>style="background:#c9dfcc"<?}else if($data->city == 6){?>style="background:#c8bfa3"<?}?>>
								&euro; <?echo$opium6;?>,-
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
