<?
if($_GET['f'] == "chose_crime" && !isset($_POST['car'])){
$error = 2;
}
if($_GET['f'] == take_chance && !isset($_POST['submit'])){
$error = 2;
}
if($_GET['f'] == chose_crime && isset($_POST['submit'])){
$mat = $_POST['material'];
$hulp = $_POST['help']*1000;
$materiaal = array("","1000","100","5000","10000","15000");
$material = $materiaal[$mat];
$matkost = $_POST['help']*$material;
$kost = $hulp+$matkost+$material;
if($data->contant < $kost){
$error = 1;
}}
if(isset($_POST['submit'])){
$auto1 = mysql_query("SELECT * FROM `autos` WHERE `owner`='$data->login' AND `id`='{$_SESSION['car']}'");
$auto = mysql_fetch_object($auto1);
if(mysql_num_rows($auto1) > 0){
if($auto->schade < 60){
$getal = rand(0,100);
if($_POST['crime'] == 1){
$beloning = rand(10000,25000);
if($_SESSION['kans1'] > $getal){
$error = niks;}
else{$error = faal;}}

if($_POST['crime'] == 2){
$beloning = rand(25000,50000);
if($_SESSION['kans2'] > $getal){
$error = niks;}
else{$error = faal;}}

if($_POST['crime'] == 3){
$beloning = rand(100000,500000);
if($_SESSION['kans3'] > $getal){
$error = niks;}
else{$error = faal;}}

if($_POST['crime'] == 4){
$beloning = rand(500000,1000000);
if($_SESSION['kans4'] > $getal){
$error = niks;}
else{$error = faal;}}

if($_POST['crime'] == 5){
$beloning = rand(1000000,2500000);
if($_SESSION['kans5'] > $getal){
$error = niks;}
else{$error = faal;}}
if($error == niks){
$vord = rand(5,10);
$rank = rand(0,2);
mysql_query("UPDATE `users` SET `vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rank' WHERE `id`='$data->id'");
$extra = $beloning;
}
}else{
mysql_query("DELETE FROM `autos` WHERE `id`='{$_SESSION['car']}'");
$error = destroy;
}
}else{
$error = cars;
}
$schade = rand(10,30);
if($error != niks){
mysql_query("UPDATE `users` SET `contant`=`contant`-'{$_SESSION['bedrag']}',`contant`=`contant`+'$extra' WHERE `id`='$data->id'");
}
mysql_query("UPDATE `users` SET `contant`=`contant`+'$extra' WHERE `id`='$data->id'");
mysql_query("UPDATE `autos` SET `schade`=`schade`+'$schade' WHERE `id`='{$_SESSION['car']}'");
unset($_SESSION['kans1']);
unset($_SESSION['kans2']);
unset($_SESSION['kans3']);
unset($_SESSION['kans4']);
unset($_SESSION['kans5']);
unset($_SESSION['bedrag']);
unset($_SESSION['car']);
}
if($error == faal){
$bakkans = rand(0,3);
if($bakkans == 3){
$error = bak;
$tijd = rand(2,5);
$time = $tijd*60;
mysql_query("UPDATE `users` SET `gevangenis`='$time',`baktijd`=NOW() WHERE `id`='$data->id'");
}}
if($error == niks){
$prijs = number_format($beloning, 0, '.', '.');
?>
		<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup" align="center">
				<tr>
					<td>
						Het is je gelukt! Je hebt &euro; <?echo$prijs;?> gekregen! 					</td>
				</tr>
				<tr>
					<td>
						<br><br>
							<a href="index.php?a=mod_crim_route66" class="msg_ok">Klik hier indien je niet automatisch verder gaat.</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<script language="javascript">
	setTimeout("document.location.href='index.php?a=mod_crim_route66'",(3000*2));
</script>
		</div>
	</td>
	</tr>

	</table>
	</td>
<?}
if($error == destroy){
?>
		<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup" align="center">
				<tr>
					<td>
						Toen je het gaspedaal intrapte, ontplofte de motor en vloog je auto in brand.<br>Je bent net op tijd weg gerend. De auto explodeerde! 					</td>
				</tr>
				<tr>
					<td>
						<br><br>
							<a href="index.php?a=mod_crim_route66" class="msg_ok">Klik hier indien je niet automatisch verder gaat.</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<script language="javascript">
	setTimeout("document.location.href='index.php?a=mod_crim_route66'",(3000*2));
</script>
		</div>
	</td>
	</tr>

	</table>
	</td>
<?}
if($error == faal){
?>
		<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup" align="center">
				<tr>
					<td>
						Helaas, de misdaad is mislukt. Maar je hebt wel kunnen ontsnappen van de politie 					</td>
				</tr>
				<tr>
					<td>
						<br><br>
							<a href="index.php?a=mod_crim_route66" class="msg_ok">Klik hier indien je niet automatisch verder gaat.</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<script language="javascript">
	setTimeout("document.location.href='index.php?a=mod_crim_route66'",(3000*2));
</script>
		</div>
	</td>
	</tr>

	</table>
	</td>
<?}if($error == bak){
?>
		<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup" align="center">
				<tr>
					<td>
						Helaas, je bent gearresteerd! 					</td>
				</tr>
				<tr>
					<td>
						<br><br>
							<a href="index.php?a=mod_crim_route66" class="msg_ok">Klik hier indien je niet automatisch verder gaat.</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<script language="javascript">
	setTimeout("document.location.href='index.php?a=mod_crim_route66'",(3000*2));
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
						<b>FOUT!</b><br><br>Je hebt niet genoeg geld voor deze misdaad					</td>
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
<?}if($error == cars){
?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Je bent deze auto inmiddels kwijt					</td>
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
<?}if($error == 2){
?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Je hebt onvoldoende geselecteerd					</td>
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
<?}if($error == ""){?>
					<div class="title_bg">
			<div class="title">Route 66</div>
		</div>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
<?if($_GET['f'] == ""){?>
<table style="width:100%">
	<form method="POST" action="index.php?a=mod_crim_route66&f=chose_crime">
	<tr>
		<td>
			<table class="mod_list" style="width:100%">
				<tr>
					<td width="34%" align="center">
						<select name="car" onchange="showCar(this.value)">
							<option value="0">-- Kies een auto --</option>
<?$auto1 = mysql_query("SELECT * FROM `autos` WHERE `owner`='$data->login' AND `schade`<'60' ORDER BY `id`");
while($auto = mysql_fetch_object($auto1)){
$naam = array("","Mercedes","Golfkar","Rolls Phantom","Seat Cordoba","Rover","DeLorean DMC","Cadillac V16","Cadillac","Pontiac Firebird","Chrysler","Audi R8","Mustang","GMC","Hummer","Rolls Royce","Dodge Viper","Ferrari Spyder");
$naam = $naam[$auto->soort];
?>
																		<option value="<?echo$auto->id;?>"> <?echo$naam;?> [<?echo$auto->schade;?> %]</option>
                                                                        <?}?>
                                                                        </select>
					</td>
					<td width="33%" align="center">
						<select name="help" onchange="showHelp(this.value)" id="show_help" disabled>
							<option value="">-- Kies de hulp --</option>
							<option value="0">Ik werk alleen</option>
															<option value="1">1 Helpers</option>
															<option value="2">2 Helpers</option>
															<option value="3">3 Helpers</option>
															<option value="4">4 Helpers</option>
															<option value="5">5 Helpers</option>
													</select>
					</td>
					<td width="33%" align="center">
						<select name="material" onchange="showMaterial(this.value)" id="show_material" disabled>
							<option value="">-- Kies het materiaal --</option>
																		<option value="2">Zakmes en speelgoed geweer</option>
																					<option value="1">Handgun en bivakmuts</option>
																					<option value="3">Machinegeweer met vermomming</option>
																					<option value="4">Shotgun met las apparaat</option>
																					<option value="5">Bazooka met granaten</option>

						</select>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td>
<?$auto1 = mysql_query("SELECT * FROM `autos` WHERE `owner`='$data->login' AND `schade`<'60'");
while($auto = mysql_fetch_object($auto1)){
$naam = array("","Mercedes","Golfkar","Rolls Phantom","Seat Cordoba","Rover","DeLorean DMC","Cadillac V16","Cadillac","Pontiac Firebird","Chrysler","Audi R8","Mustang","GMC","Hummer","Rolls Royce","Dodge Viper","Ferrari Spyder");
$plaatje = array("","2mercedes.jpg","golf.jpg","2rollsphantom.jpg","seat.jpg","2rover.jpg","delorean.jpg","2CadillacV16.jpg","cadillac.jpg","pontiac.jpg","2chrysler.jpg","audir8.jpg","mustang.jpg","gmc.jpg","hummer.jpg","2rolls.jpg","viper.jpg","ferarri.jpg");
$topspeed = array("","240","100","240","220","185","88","250","190","240","250","230","220","210","180","220","240","250");
$paardenkracht = array("","197","50","200","120","116","140","197","130","150","215","130","200","190","210","190","180","210");
$zitplaatsen = array("","4","2","2","4","4","2","4","4","2","4","2","2","6","6","4","2","2");
$plaatje = $plaatje[$auto->soort];
$naam = $naam[$auto->soort];
$zitplaatsen = $zitplaatsen[$auto->soort];
$topspeed = $topspeed[$auto->soort];
$paardenkracht = $paardenkracht[$auto->soort];
$schade = $auto->waarde/100;
$schadekosten = $auto->schade*$schade;
$waarde = number_format($auto->waarde-$schadekosten, 0, '.' , '.');
?>
									<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list" id="car_<?echo$auto->id;?>" style="display:none">
							<tr>
								<td colspan="5">
									<div style="float:left">
										<font size="4" style="padding-left:7px;"><?echo$naam;?></font>
									</div>
								</td>
							</tr>
							<tr>
								<td rowspan="4" width="120px" align="center"><img src="images/autos/<?echo$plaatje;?>" width="100"></td>
								<td width="18px" align="center"><img src='images/icons_gif/money.gif'></td>
								<td>Waarde: <b>&euro; <?echo$waarde;?></b></td>
								<td width="18px" align="center"><img src='images/icons_gif/error.gif'></td>
								<td>Schade: <b><?echo$auto->schade;?> %</b></td>
						  	</tr>
						   	<tr>
						   		<td width="18px" align="center"><img src='images/icons_gif/chart_curve.gif'></td>
						    	<td>Topsnelheid: <b><?echo$topspeed;?></b></td>
						    	<td width="18px" align="center"><img src='images/icons_gif/lightning.gif'></td>
						    	<td>Paardenkracht: <b><?echo$paardenkracht;?></b></td>
						  	</tr>
						  	<tr>
<?$zit = $zitplaatsen-1;?>						  		<td width="18px" align="center"><img src='images/icons_gif/group.gif'></td>
						    	<td colspan="3">Aantal inzittende: <b><?echo$zitplaatsen;?> personen</b></td>

							</tr>
						</table>
<?}?>


							<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list" id="help_0" style="display:none">
									  		<!--<tr>
							<td colspan="3">
								<div style="float:left">
									<font size="3" style="padding-left:7px;">0 Helpers</font>
								</div>
							</td>
						</tr>
						<tr>
							<td rowspan="2" width="120px" align="center"><img src="images/route66/gangster.jpg" width="100"></td>
					  		<td width="18px" align="center"><img src='images/icons_gif/group.gif'></td>
					    	<td<b>Geen hulp</b></td>
						</tr>
						<tr>
					  		<td width="18px" align="center"><img src='images/icons_gif/money.gif'></td>
					    	<td>Kosten: <b>&euro; 0</b></td>
						</tr>-->
				  					</table>
							<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list" id="help_1" style="display:none">
											<tr>
							<td colspan="3">
								<div style="float:left">
									<font size="4" style="padding-left:7px;">1 Helpers</font>
								</div>
							</td>
						</tr>
						<tr>
							<td rowspan="2" width="120px" align="center"><img src="images/route66/gangster.jpg" width="100"></td>
					  		<td width="18px" align="center"><img src='images/icons_gif/group.gif'></td>
					    	<td>Aantal helpers: 1 Helpers</td>
						</tr>
						<tr>
					  		<td width="18px" align="center"><img src='images/icons_gif/money.gif'></td>
					    	<td>Kosten: <b>&euro; 1.000</b></td>
						</tr>
				  					</table>
							<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list" id="help_2" style="display:none">
											<tr>
							<td colspan="3">
								<div style="float:left">
									<font size="4" style="padding-left:7px;">2 Helpers</font>
								</div>
							</td>
						</tr>
						<tr>
							<td rowspan="2" width="120px" align="center"><img src="images/route66/gangster.jpg" width="100"></td>
					  		<td width="18px" align="center"><img src='images/icons_gif/group.gif'></td>
					    	<td>Aantal helpers: 2 Helpers</td>
						</tr>
						<tr>
					  		<td width="18px" align="center"><img src='images/icons_gif/money.gif'></td>
					    	<td>Kosten: <b>&euro; 2.000</b></td>
						</tr>
				  					</table>
							<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list" id="help_3" style="display:none">
											<tr>
							<td colspan="3">
								<div style="float:left">
									<font size="4" style="padding-left:7px;">3 Helpers</font>
								</div>
							</td>
						</tr>
						<tr>
							<td rowspan="2" width="120px" align="center"><img src="images/route66/gangster.jpg" width="100"></td>
					  		<td width="18px" align="center"><img src='images/icons_gif/group.gif'></td>
					    	<td>Aantal helpers: 3 Helpers</td>
						</tr>
						<tr>
					  		<td width="18px" align="center"><img src='images/icons_gif/money.gif'></td>
					    	<td>Kosten: <b>&euro; 3.000</b></td>
						</tr>
				  					</table>
							<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list" id="help_4" style="display:none">
											<tr>
							<td colspan="3">
								<div style="float:left">
									<font size="4" style="padding-left:7px;">4 Helpers</font>
								</div>
							</td>
						</tr>
						<tr>
							<td rowspan="2" width="120px" align="center"><img src="images/route66/gangster.jpg" width="100"></td>
					  		<td width="18px" align="center"><img src='images/icons_gif/group.gif'></td>
					    	<td>Aantal helpers: 4 Helpers</td>
						</tr>
						<tr>
					  		<td width="18px" align="center"><img src='images/icons_gif/money.gif'></td>
					    	<td>Kosten: <b>&euro; 4.000</b></td>
						</tr>
				  					</table>
							<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list" id="help_5" style="display:none">
											<tr>
							<td colspan="3">
								<div style="float:left">
									<font size="4" style="padding-left:7px;">5 Helpers</font>
								</div>
							</td>
						</tr>
						<tr>
							<td rowspan="2" width="120px" align="center"><img src="images/route66/gangster.jpg" width="100"></td>
					  		<td width="18px" align="center"><img src='images/icons_gif/group.gif'></td>
					    	<td>Aantal helpers: 5 Helpers</td>
						</tr>
						<tr>
					  		<td width="18px" align="center"><img src='images/icons_gif/money.gif'></td>
					    	<td>Kosten: <b>&euro; 5.000</b></td>
						</tr>
				  					</table>


									<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list" id="material_2" style="display:none">
							<tr>
								<td colspan="5">
									<div style="float:left">
										<font size="4" style="padding-left:7px;">Zakmes en speelgoed geweer</font>
									</div>
								</td>
							</tr>
							<tr>
								<td rowspan="3" width="120px" align="center"><img src="images/route66/material/zakmes_speelgoed.jpg" width="100"></td>
						  		<td width="18px" align="center"><img src='images/icons_gif/information.gif'></td>
						    	<td colspan="3">Probeer je slachtoffer te overvallen met een simpel zakmes en een speelgoed geweer, zou hij hier intrappen?</td>

							</tr>
							<tr>

								<td width="18px" align="center"><img src='images/icons_gif/money.gif'></td>
								<td colspan="3">Kosten: <b>&euro; 100 per persoon</b></td>
						  	</tr>
						  	<tr>
								<td width="18px" align="center"><img src='images/icons_gif/lightning.gif'></td>
								<td>Power: <b> 5</b></td>
								<td width="18px" align="center"><img src='images/icons_gif/error.gif'></td>
								<td>Explosief: <b>0</b></td>
						  	</tr>

						</table>
												<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list" id="material_1" style="display:none">
							<tr>
								<td colspan="5">
									<div style="float:left">
										<font size="4" style="padding-left:7px;">Handgun en bivakmuts</font>
									</div>
								</td>
							</tr>
							<tr>
								<td rowspan="3" width="120px" align="center"><img src="images/route66/material/bivak_handgun.jpg" width="100"></td>
						  		<td width="18px" align="center"><img src='images/icons_gif/information.gif'></td>
						    	<td colspan="3">Bescherm je identiteit met een bivakmuts en gebruik een handgun om je overval te plegen.</td>

							</tr>
							<tr>

								<td width="18px" align="center"><img src='images/icons_gif/money.gif'></td>
								<td colspan="3">Kosten: <b>&euro; 1.000 per persoon</b></td>
						  	</tr>
						  	<tr>
								<td width="18px" align="center"><img src='images/icons_gif/lightning.gif'></td>
								<td>Power: <b> 25</b></td>
								<td width="18px" align="center"><img src='images/icons_gif/error.gif'></td>
								<td>Explosief: <b>5</b></td>
						  	</tr>

						</table>
												<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list" id="material_3" style="display:none">
							<tr>
								<td colspan="5">
									<div style="float:left">
										<font size="4" style="padding-left:7px;">Machinegeweer met vermomming</font>
									</div>
								</td>
							</tr>
							<tr>
								<td rowspan="3" width="120px" align="center"><img src="images/route66/material/clown_machinegeweer.jpg" width="100"></td>
						  		<td width="18px" align="center"><img src='images/icons_gif/information.gif'></td>
						    	<td colspan="3">Bescherm je identiteit met een clowns masker en overval je slachtoffers met een echt machinegeweer. Zou dit overtuigend genoeg zijn om het geld te stelen?</td>

							</tr>
							<tr>

								<td width="18px" align="center"><img src='images/icons_gif/money.gif'></td>
								<td colspan="3">Kosten: <b>&euro; 5.000 per persoon</b></td>
						  	</tr>
						  	<tr>
								<td width="18px" align="center"><img src='images/icons_gif/lightning.gif'></td>
								<td>Power: <b> 50</b></td>
								<td width="18px" align="center"><img src='images/icons_gif/error.gif'></td>
								<td>Explosief: <b>40</b></td>
						  	</tr>

						</table>
												<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list" id="material_4" style="display:none">
							<tr>
								<td colspan="5">
									<div style="float:left">
										<font size="4" style="padding-left:7px;">Shotgun met las apparaat</font>
									</div>
								</td>
							</tr>
							<tr>
								<td rowspan="3" width="120px" align="center"><img src="images/route66/material/las_shotgun.jpg" width="100"></td>
						  		<td width="18px" align="center"><img src='images/icons_gif/information.gif'></td>
						    	<td colspan="3">Maak gebruik van een zware shotgun in combinatie met een echt las apparaat. Pas wel op dat je niet de buit in de hens zet tijdens het lassen!</td>

							</tr>
							<tr>

								<td width="18px" align="center"><img src='images/icons_gif/money.gif'></td>
								<td colspan="3">Kosten: <b>&euro; 10.000 per persoon</b></td>
						  	</tr>
						  	<tr>
								<td width="18px" align="center"><img src='images/icons_gif/lightning.gif'></td>
								<td>Power: <b> 70</b></td>
								<td width="18px" align="center"><img src='images/icons_gif/error.gif'></td>
								<td>Explosief: <b>60</b></td>
						  	</tr>

						</table>
												<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list" id="material_5" style="display:none">
							<tr>
								<td colspan="5">
									<div style="float:left">
										<font size="4" style="padding-left:7px;">Bazooka met granaten</font>
									</div>
								</td>
							</tr>
							<tr>
								<td rowspan="3" width="120px" align="center"><img src="images/route66/material/granaat_bazooka.jpg" width="100"></td>
						  		<td width="18px" align="center"><img src='images/icons_gif/information.gif'></td>
						    	<td colspan="3">Gebruik je liever het zware materiaal? Zwaarder dan dit tref je het niet aan, niemand zal zich verzetten als ze in de loop van een bazooka kijken. Pas wel op dat je de buit niet mee opblaast!</td>

							</tr>
							<tr>

								<td width="18px" align="center"><img src='images/icons_gif/money.gif'></td>
								<td colspan="3">Kosten: <b>&euro; 15.000 per persoon</b></td>
						  	</tr>
						  	<tr>
								<td width="18px" align="center"><img src='images/icons_gif/lightning.gif'></td>
								<td>Power: <b> 100</b></td>
								<td width="18px" align="center"><img src='images/icons_gif/error.gif'></td>
								<td>Explosief: <b>90</b></td>
						  	</tr>

						</table>


			<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list" id="table_total" style="display:none">
				<tr>
					<td>
						<div style="float:left">
							<font size="4" style="padding-left:7px;">Totaal prijs: &euro;<span id="price_total"></span></font>
						</div>
					</td>
					<td align="right">
						<input type="submit" class="submit" value="Verder">
					</td>
				</tr>
			</table>

		</td>
	</tr>
	</form>
</table>



<script language="javascript">
	var active_car = 0;
	var active_help = 0;
	var active_material = 0;

	var cars = new Array(1);
<?$auto1 = mysql_query("SELECT * FROM `autos` WHERE `owner`='$data->login' AND `schade`<'60'");
while($auto = mysql_fetch_object($auto1)){
$zitplaatsen = array("","4","2","2","4","4","2","4","4","2","4","2","2","6","6","4","2","2");
$zitplaatsen = $zitplaatsen[$auto->soort];?>
						cars["<?echo$auto->id;?>"] = <?echo$zitplaatsen;?>;
                        <?}?>

	var price_cars = new Array(1);
						price_cars["623878"] = 3750;

	var price_helpers = new Array(6);
			price_helpers["0"] = 0;
			price_helpers["1"] = 1000;
			price_helpers["2"] = 2000;
			price_helpers["3"] = 3000;
			price_helpers["4"] = 4000;
			price_helpers["5"] = 5000;

	var price_materials = new Array(5);
						price_materials["2"] = 100;
									price_materials["1"] = 1000;
									price_materials["3"] = 5000;
									price_materials["4"] = 10000;
									price_materials["5"] = 15000;


	function showCar(pCar){
		if(active_car > 0) document.getElementById('car_'+active_car).style.display = 'none';
		if(pCar > 0){
			document.getElementById('car_'+pCar).style.display = '';
			active_car = pCar;

			pDropDown = document.getElementById('show_help');
			pDropDown.options.length=2;
			for(i=1;i<cars[pCar];i++){
				if((cars[pCar] < active_help) && (i == cars[pCar]-1)){
					pDropDown.options[i+1]=new Option(i+" Helpers", i, true, true);
				}else{
					if(i == active_help){
						pDropDown.options[i+1]=new Option(i+" Helpers", i, true, true);
					}else{
						pDropDown.options[i+1]=new Option(i+" Helpers", i, false, false);
					}
				}
			}

			document.getElementById('show_help').disabled = false;
			showHelp(document.getElementById('show_help').value);

		}else{
			document.getElementById('show_help').value = '';
			document.getElementById('show_help').disabled = true;

			document.getElementById('show_material').value = '';
			document.getElementById('show_material').disabled = true;

			showHelp(document.getElementById('show_help').value);
		}
	}

	function showHelp(pHelp){
		if(pHelp != ''){
			if(active_help >= 0) document.getElementById('help_'+active_help).style.display = 'none';
			if(pHelp >= 0){
				document.getElementById('help_'+pHelp).style.display = '';
				active_help = pHelp;
			}
		}

		if(pHelp == ''){
			document.getElementById('help_'+active_help).style.display = 'none';
			document.getElementById('show_material').value = '';
			document.getElementById('show_material').disabled = true;
		}else{
			document.getElementById('show_material').disabled = false;
		}

		showMaterial(document.getElementById('show_material').value);
	}

	function showMaterial(pMaterial){
		if(active_material > 0) document.getElementById('material_'+active_material).style.display = 'none';
		if(pMaterial > 0){
			document.getElementById('material_'+pMaterial).style.display = '';
			active_material = pMaterial;

			process_price();
		}else{
			document.getElementById('table_total').style.display = 'none';
		}


	}

	function process_price(){
		var price = price_helpers[active_help] + (price_materials[active_material] * (parseInt(active_help)+1));
		document.getElementById('price_total').innerHTML = price;
		document.getElementById('table_total').style.display = '';
	}
</script>


		</td></tr></table>
		</div>
<?}if($_GET['f'] == chose_crime){?>
<table style="width:100%">
	<form method="POST" action="index.php?a=mod_crim_route66&f=take_chance">
		<input type="hidden" name="car" value="623878">
		<input type="hidden" name="help" value="0">
		<input type="hidden" name="material" value="2">
	<tr>
		<td>
			<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list" id="table_total">
				<tr>
					<td>
						<div style="float:left">
<?
$mat = $_POST['material'];
$hulp = $_POST['help']*1000;
$materiaal = array("","1000","100","5000","10000","15000");
$material = $materiaal[$mat];
$matkost = $_POST['help']*$material;
$kost = $hulp+$matkost+$material;
$mat1 = array("0","13","10","30","40","50");
$hulp1 = array("0","20","30","40","50","60");
$mat1 = $mat1[$mat];
$hulp1 = $hulp1[$_POST['help']];
$hulpdeling = floor($hulp1/4);
$kans1 = round($mat1+$hulpdeling);
$matdeling = floor($mat1/1.2);
$hulpdeling = floor($hulp1/3);
$kans2 = round($matdeling+$hulpdeling);
$matdeling = ceil($mat1/5);
$hulpdeling = floor($hulp1/6);
$kans3 = round($matdeling+$hulpdeling);
$matdeling = round($mat1/8);
$kans4 = round($matdeling+$hulpdeling);
$matdeling = round($mat1/10);
$kans5 = round($matdeling+$hulpdeling);
$_SESSION['kans1'] = $kans1;
$_SESSION['kans2'] = $kans2;
$_SESSION['kans3'] = $kans3;
$_SESSION['kans4'] = $kans4;
$_SESSION['kans5'] = $kans5;
$_SESSION['bedrag'] = $kost;
$_SESSION['car'] = $_POST['car'];
?>
							<font size="4" style="padding-left:7px;">Totaal prijs: &euro;<?echo$kost;?></font>
						</div>
						<div style="float:right;display:none" id="continue_div">
							<input type="submit" class="submit" name="submit" value="Verder">
						</div>
					</td>
				</tr>
			</table><br>

									<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list" id="crime_1">
							<tr>
								<td colspan="6">
									<div style="float:left">
										<font size="3" style="padding-left:7px;">Overval een auto</font>
									</div>
								</td>
							</tr>
							<tr>
								<td rowspan="4" width="10px">
									<input type="radio" name="crime" value="1" onclick="document.getElementById('continue_div').style.display = '';document.getElementById('continue_div2').style.display = '';">
								</td>
								<td rowspan="4" width="120px" align="center"><img src="images/route66/crimes/misdaad_auto.jpg" width="100"></td>
						  		<td width="18px" align="center"><img src='images/icons_gif/information.gif'></td>
						    	<td>Overval een nietsvermoedende automobilist, steel niet alleen al zijn bezettingen uit de auto, maar neem de auto zelf ook mee!</td>

							</tr>
							<tr>

								<td width="18px" align="center"><img src='images/icons_gif/money.gif'></td>
								<td>Beloning: <b>&euro; 10.000 - &euro; 25.000</b></td>
						  	</tr>
						  	<tr>
								<td width="18px" align="center"><img src='images/icons_gif/bomb.gif'></td>
								<td>Moeilijkheid: <b> 10</b></td>
						  	</tr>
						  	<tr>
								<td width="18px" align="center"><img src='images/icons_gif/chart_bar.gif'></td>
								<td>Slagingskans: <b> <?echo$kans1;?>%</b></td>
						  	</tr>
						</table>
						<br>
												<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list" id="crime_2">
							<tr>
								<td colspan="6">
									<div style="float:left">
										<font size="3" style="padding-left:7px;">Overval een tankstation</font>
									</div>
								</td>
							</tr>
							<tr>
								<td rowspan="4" width="10px">
									<input type="radio" name="crime" value="2" onclick="document.getElementById('continue_div').style.display = '';document.getElementById('continue_div2').style.display = '';">
								</td>
								<td rowspan="4" width="120px" align="center"><img src="images/route66/crimes/misdaad_tank.jpg" width="100"></td>
						  		<td width="18px" align="center"><img src='images/icons_gif/information.gif'></td>
						    	<td>Overval een tankstation en roof de hele inhoud van de kassa leeg!</td>

							</tr>
							<tr>

								<td width="18px" align="center"><img src='images/icons_gif/money.gif'></td>
								<td>Beloning: <b>&euro; 25.000 - &euro; 50.000</b></td>
						  	</tr>
						  	<tr>
								<td width="18px" align="center"><img src='images/icons_gif/bomb.gif'></td>
								<td>Moeilijkheid: <b> 25</b></td>
						  	</tr>
						  	<tr>
								<td width="18px" align="center"><img src='images/icons_gif/chart_bar.gif'></td>
								<td>Slagingskans: <b> <?echo$kans2;?>%</b></td>
						  	</tr>
						</table>
						<br>
												<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list" id="crime_3">
							<tr>
								<td colspan="6">
									<div style="float:left">
										<font size="3" style="padding-left:7px;">Overval een truck</font>
									</div>
								</td>
							</tr>
							<tr>
								<td rowspan="4" width="10px">
									<input type="radio" name="crime" value="3" onclick="document.getElementById('continue_div').style.display = '';document.getElementById('continue_div2').style.display = '';">
								</td>
								<td rowspan="4" width="120px" align="center"><img src="images/route66/crimes/misdaad_truck.jpg" width="100"></td>
						  		<td width="18px" align="center"><img src='images/icons_gif/information.gif'></td>
						    	<td>Drijf een nietsvermoedende truckchauffeur in het nauw en steel de lading in zijn neus vandaan!</td>

							</tr>
							<tr>

								<td width="18px" align="center"><img src='images/icons_gif/money.gif'></td>
								<td>Beloning: <b>&euro; 100.000 - &euro; 500.000</b></td>
						  	</tr>
						  	<tr>
								<td width="18px" align="center"><img src='images/icons_gif/bomb.gif'></td>
								<td>Moeilijkheid: <b> 50</b></td>
						  	</tr>
						  	<tr>
								<td width="18px" align="center"><img src='images/icons_gif/chart_bar.gif'></td>
								<td>Slagingskans: <b> <?echo$kans3;?>%</b></td>
						  	</tr>
						</table>
						<br>
												<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list" id="crime_4">
							<tr>
								<td colspan="6">
									<div style="float:left">
										<font size="3" style="padding-left:7px;">Overval een trein</font>
									</div>
								</td>
							</tr>
							<tr>
								<td rowspan="4" width="10px">
									<input type="radio" name="crime" value="4" onclick="document.getElementById('continue_div').style.display = '';document.getElementById('continue_div2').style.display = '';">
								</td>
								<td rowspan="4" width="120px" align="center"><img src="images/route66/crimes/misdaad_trein.jpg" width="100"></td>
						  		<td width="18px" align="center"><img src='images/icons_gif/information.gif'></td>
						    	<td>Ga aan boord van een volle trein en overval hem in het midden van de woestijn!</td>

							</tr>
							<tr>

								<td width="18px" align="center"><img src='images/icons_gif/money.gif'></td>
								<td>Beloning: <b>&euro; 500.000 - &euro; 1.000.000</b></td>
						  	</tr>
						  	<tr>
								<td width="18px" align="center"><img src='images/icons_gif/bomb.gif'></td>
								<td>Moeilijkheid: <b> 75</b></td>
						  	</tr>
						  	<tr>
								<td width="18px" align="center"><img src='images/icons_gif/chart_bar.gif'></td>
								<td>Slagingskans: <b> <?echo$kans4;?>%</b></td>
						  	</tr>
						</table>
						<br>
												<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list" id="crime_5">
							<tr>
								<td colspan="6">
									<div style="float:left">
										<font size="3" style="padding-left:7px;">Overval een waardetransport</font>
									</div>
								</td>
							</tr>
							<tr>
								<td rowspan="4" width="10px">
									<input type="radio" name="crime" value="5" onclick="document.getElementById('continue_div').style.display = '';document.getElementById('continue_div2').style.display = '';">
								</td>
								<td rowspan="4" width="120px" align="center"><img src="images/route66/crimes/misdaad_waarde.jpg" width="100"></td>
						  		<td width="18px" align="center"><img src='images/icons_gif/information.gif'></td>
						    	<td>Ze zijn heel goed beschermd, maar als het lukt is het zeker de moeite waard!</td>

							</tr>
							<tr>

								<td width="18px" align="center"><img src='images/icons_gif/money.gif'></td>
								<td>Beloning: <b>&euro; 1.000.000 - &euro; 2.500.000</b></td>
						  	</tr>
						  	<tr>
								<td width="18px" align="center"><img src='images/icons_gif/bomb.gif'></td>
								<td>Moeilijkheid: <b> 90</b></td>
						  	</tr>
						  	<tr>
								<td width="18px" align="center"><img src='images/icons_gif/chart_bar.gif'></td>
								<td>Slagingskans: <b> <?echo$kans5;?>%</b></td>
						  	</tr>
						</table>
						<br>
									<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list" id="table_total">
				<tr>
					<td>
						<div style="float:left">
							<font size="4" style="padding-left:7px;">Totaal prijs: &euro;<?echo$kost;?></font>
						</div>
						<div style="float:right;display:none" id="continue_div2">
							<input type="submit" class="submit" name="submit" value="Verder">
						</div>
					</td>
				</tr>
			</table><br>
		</td>
	</tr>
	</form>
</table>
		</td></tr></table>
		</div>
<?}?>
		<table width='100%' cellspacing='0' cellpadding='0'>
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
