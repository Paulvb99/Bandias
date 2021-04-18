<?
$code         = str_replace(" ", "",$code); 
if($_POST['captcha'] != ""){
if($_POST['captcha'] != $_SESSION['captcha']){
$error = 3;
}
}
if($data->rank == 1){
$pr1=60;$pr2=50;$pr3=10;$pr4=20;$pr5=0;$pr6=0;$pr7=0;$pr8=0;$pr9=0;$pr10=0;$pr11=0;$pr12=0;$pr13=0;$pr14=0;$pr15=0;$pr16=0;$pr17=0;
}
if($data->rank == 2){
$pr1=66;$pr2=55;$pr3=14;$pr4=26;$pr5=10;$pr6=0;$pr7=0;$pr8=0;$pr9=0;$pr10=0;$pr11=0;$pr12=0;$pr13=0;$pr14=0;$pr15=0;$pr16=0;$pr17=0;
}
if($data->rank == 3){
$pr1=70;$pr2=59;$pr3=20;$pr4=30;$pr5=19;$pr6=14;$pr7=10;$pr8=6;$pr9=2;$pr10=0;$pr11=0;$pr12=0;$pr13=0;$pr14=0;$pr15=0;$pr16=0;$pr17=0;
}
if($data->rank == 4){
$pr1=73;$pr2=64;$pr3=30;$pr4=30;$pr5=21;$pr6=17;$pr7=14;$pr8=9;$pr9=5;$pr10=3;$pr11=0;$pr12=0;$pr13=0;$pr14=0;$pr15=0;$pr16=0;$pr17=0;
}
if($data->rank == 5){
$pr1=79;$pr2=68;$pr3=35;$pr4=33;$pr5=27;$pr6=24;$pr7=19;$pr8=14;$pr9=10;$pr10=7;$pr11=6;$pr12=0;$pr13=0;$pr14=0;$pr15=0;$pr16=0;$pr17=0;
}
if($data->rank == 6){
$pr1=83;$pr2=73;$pr3=45;$pr4=42;$pr5=31;$pr6=29;$pr7=21;$pr8=18;$pr9=15;$pr10=10;$pr11=7;$pr12=5;$pr13=3;$pr14=0;$pr15=0;$pr16=0;$pr17=0;
}
if($data->rank == 7){
$pr1=89;$pr2=77;$pr3=62;$pr4=57;$pr5=53;$pr6=47;$pr7=40;$pr8=36;$pr9=31;$pr10=26;$pr11=20;$pr12=15;$pr13=13;$pr14=10;$pr15=5;$pr16=2;$pr17=1;
}
if($data->rank == 8){
$pr1=92;$pr2=83;$pr3=70;$pr4=65;$pr5=64;$pr6=55;$pr7=51;$pr8=47;$pr9=45;$pr10=39;$pr11=33;$pr12=27;$pr13=21;$pr14=16;$pr15=13;$pr16=10;$pr17=7;
}
if($data->rank == 9){
$pr1=96;$pr2=90;$pr3=87;$pr4=80;$pr5=78;$pr6=77;$pr7=73;$pr8=70;$pr9=65;$pr10=63;$pr11=60;$pr12=56;$pr13=42;$pr14=27;$pr15=25;$pr16=21;$pr17=12;
}
if($data->rank == 10){
$pr1=98;$pr2=94;$pr3=90;$pr4=87;$pr5=89;$pr6=82;$pr7=80;$pr8=75;$pr9=75;$pr10=71;$pr11=67;$pr12=63;$pr13=51;$pr14=42;$pr15=31;$pr16=23;$pr17=14;
}
	$data2            = mysql_query("SELECT *,UNIX_TIMESTAMP(`autojattijd`) AS `autojattijd`,0 FROM `users` WHERE `login`='$data->login'");
	  $data1            = mysql_fetch_object($data2);
$datijd = $data->autojatten;
	$tijdverschil1        = $data1->autojattijd-3600+$datijd-time();
	if($data1->autojattijd + $datijd < time()){
if($_POST['car'] > 0){
$rang = rand(0,2);
$vord = rand(1,5);
$kans = rand(0,100);
$bakkans = rand(0,3);
if($error != 3){
mysql_query("UPDATE `users` SET `autojatten`='600'");
mysql_query("UPDATE `users` SET `vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang',`autojattijd`=NOW() WHERE `login`='$data->login'");
}
}
if($error != 3){
if($_POST['car'] == 1){
if($kans <= $pr1){
$error = niks;
$waarde = 7500;
$schade = rand(0,50);
mysql_query("INSERT INTO `autos`(`owner`,`waarde`,`schade`,`soort`) values('$data->login','$waarde','$schade','1')");
}
if($kans > $pr1){
if($bakkans == 3){
$error = 2;
$tijd = rand(2,5);
}
else{
$error = 1;
}
}
}
if($_POST['car'] == 2){
if($kans <= $pr2){
$error = niks;
$waarde = 10000;
$schade = rand(0,50);
mysql_query("INSERT INTO `autos`(`owner`,`waarde`,`schade`,`soort`) values('$data->login','$waarde','$schade','2')");
}
if($kans > $pr2){
if($bakkans == 3){
$error = 2;
$tijd = rand(2,5);
}
else{
$error = 1;
}
}
}
if($_POST['car'] == 3){
if($kans <= $pr3){
$error = niks;
$waarde = 15000;
$schade = rand(0,50);
mysql_query("INSERT INTO `autos`(`owner`,`waarde`,`schade`,`soort`) values('$data->login','$waarde','$schade','3')");
}
if($kans > $pr3){
if($bakkans == 3){
$error = 2;
$tijd = rand(2,5);
}
else{
$error = 1;
}
}
}
if($_POST['car'] == 4){
if($kans <= $pr4){
$error = niks;
$waarde = 20000;
$schade = rand(0,50);
mysql_query("INSERT INTO `autos`(`owner`,`waarde`,`schade`,`soort`) values('$data->login','$waarde','$schade','4')");
}
if($kans > $pr4){
if($bakkans == 3){
$error = 2;
$tijd = rand(2,5);
}
else{
$error = 1;
}
}
}
if($_POST['car'] == 5){
if($kans <= $pr5){
$error = niks;
$waarde = 22500;
$schade = rand(0,50);
mysql_query("INSERT INTO `autos`(`owner`,`waarde`,`schade`,`soort`) values('$data->login','$waarde','$schade','5')");
}
if($kans > $pr5){
if($bakkans == 3){
$error = 2;
$tijd = rand(2,5);
}
else{
$error = 1;
}
}
}
if($_POST['car'] == 6){
if($kans <= $pr6){
$error = niks;
$waarde = 25000;
$schade = rand(0,50);
mysql_query("INSERT INTO `autos`(`owner`,`waarde`,`schade`,`soort`) values('$data->login','$waarde','$schade','6')");
}
if($kans > $pr6){
if($bakkans == 3){
$error = 2;
$tijd = rand(2,5);
}
else{
$error = 1;
}
}
}
if($_POST['car'] == 7){
if($kans <= $pr7){
$error = niks;
$waarde = 37500;
$schade = rand(0,50);
mysql_query("INSERT INTO `autos`(`owner`,`waarde`,`schade`,`soort`) values('$data->login','$waarde','$schade','7')");
}
if($kans > $pr7){
if($bakkans == 3){
$error = 2;
$tijd = rand(2,5);
}
else{
$error = 1;
}
}
}
if($_POST['car'] == 8){
if($kans <= $pr8){
$error = niks;
$waarde = 50000;
$schade = rand(0,50);
mysql_query("INSERT INTO `autos`(`owner`,`waarde`,`schade`,`soort`) values('$data->login','$waarde','$schade','8')");
}
if($kans > $pr8){
if($bakkans == 3){
$error = 2;
$tijd = rand(2,5);
}
else{
$error = 1;
}
}
}
if($_POST['car'] == 9){
if($kans <= $pr9){
$error = niks;
$waarde = 60000;
$schade = rand(0,50);
mysql_query("INSERT INTO `autos`(`owner`,`waarde`,`schade`,`soort`) values('$data->login','$waarde','$schade','9')");
}
if($kans > $pr9){
if($bakkans == 3){
$error = 2;
$tijd = rand(2,5);
}
else{
$error = 1;
}
}
}
if($_POST['car'] == 10){
if($kans <= $pr10){
$error = niks;
$waarde = 75000;
$schade = rand(0,50);
mysql_query("INSERT INTO `autos`(`owner`,`waarde`,`schade`,`soort`) values('$data->login','$waarde','$schade','10')");
}
if($kans > $pr10){
if($bakkans == 3){
$error = 2;
$tijd = rand(2,5);
}
else{
$error = 1;
}
}
}
if($_POST['car'] == 11){
if($kans <= $pr11){
$error = niks;
$waarde = 80000;
$schade = rand(0,50);
mysql_query("INSERT INTO `autos`(`owner`,`waarde`,`schade`,`soort`) values('$data->login','$waarde','$schade','11')");
}
if($kans > $pr11){
if($bakkans == 3){
$error = 2;
$tijd = rand(2,5);
}
else{
$error = 1;
}
}
}
if($_POST['car'] == 12){
if($kans <= $pr12){
$error = niks;
$waarde = 90000;
$schade = rand(0,50);
mysql_query("INSERT INTO `autos`(`owner`,`waarde`,`schade`,`soort`) values('$data->login','$waarde','$schade','12')");
}
if($kans > $pr12){
if($bakkans == 3){
$error = 2;
$tijd = rand(2,5);
}
else{
$error = 1;
}
}
}
if($_POST['car'] == 13){
if($kans <= $pr13){
$error = niks;
$waarde = 100000;
$schade = rand(0,50);
mysql_query("INSERT INTO `autos`(`owner`,`waarde`,`schade`,`soort`) values('$data->login','$waarde','$schade','13')");
}
if($kans > $pr13){
if($bakkans == 3){
$error = 2;
$tijd = rand(2,5);
}
else{
$error = 1;
}
}
}
if($_POST['car'] == 14){
if($kans <= $pr14){
$error = niks;
$waarde = 100000;
$schade = rand(0,50);
mysql_query("INSERT INTO `autos`(`owner`,`waarde`,`schade`,`soort`) values('$data->login','$waarde','$schade','14')");
}
if($kans > $pr14){
if($bakkans == 3){
$error = 2;
$tijd = rand(2,5);
}
else{
$error = 1;
}
}
}
if($_POST['car'] == 15){
if($kans <= $pr15){
$error = niks;
$waarde = 150000;
$schade = rand(0,50);
mysql_query("INSERT INTO `autos`(`owner`,`waarde`,`schade`,`soort`) values('$data->login','$waarde','$schade','15')");
}
if($kans > $pr15){
if($bakkans == 3){
$error = 2;
$tijd = rand(2,5);
}
else{
$error = 1;
}
}
}
if($_POST['car'] == 16){
if($kans <= $pr16){
$error = niks;
$waarde = 250000;
$schade = rand(0,50);
mysql_query("INSERT INTO `autos`(`owner`,`waarde`,`schade`,`soort`) values('$data->login','$waarde','$schade','16')");
}
if($kans > $pr16){
if($bakkans == 3){
$error = 2;
$tijd = rand(2,5);
}
else{
$error = 1;
}
}
}
if($_POST['car'] == 17){
if($kans <= $pr17){
$error = niks;
$waarde = 500000;
$schade = rand(0,50);
mysql_query("INSERT INTO `autos`(`owner`,`waarde`,`schade`,`soort`) values('$data->login','$waarde','$schade','17')");
}
if($kans > $pr17){
if($bakkans == 3){
$error = 2;
$tijd = rand(2,5);
}
else{
$error = 1;
}
}
}
}
}else{$error = autostelen;}
if($bakkans == 3 && $error == 2){
$time = $tijd*60;
mysql_query("UPDATE `users` SET `gevangenis`='$time',`baktijd`=NOW() WHERE `id`='$data->id'");
}
if($_SERVER['REQUEST_METHOD'] != "POST") {
	$data2            = mysql_query("SELECT *,UNIX_TIMESTAMP(`autojattijd`) AS `autojattijd`,0 FROM `users` WHERE `login`='$data->login'");
	  $data1            = mysql_fetch_object($data2);
$datijd = $data->autojatten;
	$tijdverschil1        = $data1->autojattijd-3600+$datijd-time();
	if($data1->autojattijd + $datijd > time()){
   list($uur,$min,$sec)=explode(":",date("H:i:s",$tijdverschil1));
$error = autostelen;
$countdown = $data1->autojattijd+$datijd-time();
?>
			<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						De politie zit nog achter je aan, over <font id="count_timer"></font>&nbsp; is de kust weer veilig					</td>
				</tr>
				<tr>
					<td style="color:red">
						<br><br>
						<a href="#" onclick="history.go(-1); return false" class="error_ok">OK</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<script language="javascript">
	countdown('<?=$countdown?>','count_timer','index.php?a=stealcars');
</script>		</div>
	</td>
	</tr>

	</table>
	</td>

<?}}
if($error == 1){
?>
			<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup" align="center">
				<tr>
					<td>
						Helaas, het is je niet gelukt om de auto te stelen!					</td>
				</tr>
				<tr>
					<td>
						<br><br>
							<a href="index.php?a=news" class="msg_ok">Klik hier indien je niet automatisch verder gaat.</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
<script language="javascript">
	setTimeout("document.location.href='index.php?a=news'",(3000*2));
</script>
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
						Het is mislukt, en je bent gepakt door de politie!				</td>
				</tr>
				<tr>
					<td>
						<br><br>
							<a href="index.php?a=news" class="msg_ok">Klik hier indien je niet automatisch verder gaat.</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
<script language="javascript">
	setTimeout("document.location.href='index.php?a=news'",(3000*2));
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
						Je hebt de auto gestolen! Hij staat nu in je garage!					</td>
				</tr>
				<tr>
					<td>
						<br><br>
							<a href="index.php?a=garage" class="msg_ok">Klik hier indien je niet automatisch verder gaat.</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<script language="javascript">
	setTimeout("document.location.href='index.php?a=garage'",(3000*2));
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
}
if($error == ""){
?>


					<div class="title_bg">
			<div class="title">Auto's stelen</div>
		</div>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
		Je hebt de mogelijkheid om auto's te stelen. Hoe hoger je rang, hoe meer slagingskans dat je de auto kan binnenhalen.<br>
<br>
	        <form method="POST" onsubmit="return checkError(this)">
                <input type="hidden" name="sel" id="sel" value="">
    		<input type="hidden" name="captcha">
<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
 	<tr>
    	<td rowspan="5" width="20px" align=center><input type="radio" name="car" value="1" class="radio" onclick="document.getElementById('sel').value = 'true'"></td>
    	<td colspan="5"><font size="4" style="padding-left:7px;">Mercedes</font></td>
  	</tr>
  	<tr>
    	<td rowspan="4" width="120px" align="center"><img src="images/autos/2mercedes.jpg" width="100" height="80"></td>
    	<td width="18px" align="center"><img src='images/icons_gif/money.gif'></td>
    	<td colspan="3">Waarde: <b>&euro; 7.500</b></td>
  	</tr>
  	<tr>
	    <td width="18px" align="center"><img src='images/icons_gif/tag.gif'></td>
    	<td colspan="3">Kans: <b><?echo$pr1;?> %</b></td>
  	</tr>
  	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/chart_curve.gif'></td>
    	<td>Topsnelheid: <b>240</b></td>
    	<td width="18px" align="center"><img src='images/icons_gif/lightning.gif'></td>
    	<td>Paardenkracht: <b>197</b></td>
  	</tr>
   	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/group.gif'></td>
    	<td colspan="3">Aantal inzittende: <b>4 personen</b></td>
  	</tr>
</table>

<br>
<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
 	<tr>
    	<td rowspan="5" width="20px" align=center><input type="radio" name="car" value="2" class="radio" onclick="document.getElementById('sel').value = 'true'"></td>
    	<td colspan="5"><font size="4" style="padding-left:7px;">Golfkar</font></td>
  	</tr>
  	<tr>
    	<td rowspan="4" width="120px" align="center"><img src="images/autos/golf.jpg" width="100" height="80"></td>
    	<td width="18px" align="center"><img src='images/icons_gif/money.gif'></td>
    	<td colspan="3">Waarde: <b>&euro; 10.000</b></td>
  	</tr>
  	<tr>
	    <td width="18px" align="center"><img src='images/icons_gif/tag.gif'></td>
    	<td colspan="3">Kans: <b><?echo$pr2;?> %</b></td>
  	</tr>
  	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/chart_curve.gif'></td>
    	<td>Topsnelheid: <b>100</b></td>
    	<td width="18px" align="center"><img src='images/icons_gif/lightning.gif'></td>
    	<td>Paardenkracht: <b>50</b></td>
  	</tr>
   	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/group.gif'></td>
    	<td colspan="3">Aantal inzittende: <b>2 personen</b></td>
  	</tr>
</table>

<br>
<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
 	<tr>
    	<td rowspan="5" width="20px" align=center><input type="radio" name="car" value="3" class="radio" onclick="document.getElementById('sel').value = 'true'"></td>
    	<td colspan="5"><font size="4" style="padding-left:7px;">Rolls Phantom</font></td>
  	</tr>
  	<tr>
    	<td rowspan="4" width="120px" align="center"><img src="images/autos/2rollsphantom.jpg" width="100" height="80"></td>
    	<td width="18px" align="center"><img src='images/icons_gif/money.gif'></td>
    	<td colspan="3">Waarde: <b>&euro; 15.000</b></td>
  	</tr>
  	<tr>
	    <td width="18px" align="center"><img src='images/icons_gif/tag.gif'></td>
    	<td colspan="3">Kans: <b><?echo$pr3;?> %</b></td>
  	</tr>
  	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/chart_curve.gif'></td>
    	<td>Topsnelheid: <b>240</b></td>
    	<td width="18px" align="center"><img src='images/icons_gif/lightning.gif'></td>
    	<td>Paardenkracht: <b>200</b></td>
  	</tr>
   	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/group.gif'></td>
    	<td colspan="3">Aantal inzittende: <b>2 personen</b></td>
  	</tr>
</table>

<br>
<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
 	<tr>
    	<td rowspan="5" width="20px" align=center><input type="radio" name="car" value="4" class="radio" onclick="document.getElementById('sel').value = 'true'"></td>
    	<td colspan="5"><font size="4" style="padding-left:7px;">Seat Cordoba</font></td>
  	</tr>
  	<tr>
    	<td rowspan="4" width="120px" align="center"><img src="images/autos/seat.jpg" width="100" height="80"></td>
    	<td width="18px" align="center"><img src='images/icons_gif/money.gif'></td>
    	<td colspan="3">Waarde: <b>&euro; 20.000</b></td>
  	</tr>
  	<tr>
	    <td width="18px" align="center"><img src='images/icons_gif/tag.gif'></td>
    	<td colspan="3">Kans: <b><?echo$pr4;?> %</b></td>
  	</tr>
  	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/chart_curve.gif'></td>
    	<td>Topsnelheid: <b>220</b></td>
    	<td width="18px" align="center"><img src='images/icons_gif/lightning.gif'></td>
    	<td>Paardenkracht: <b>120</b></td>
  	</tr>
   	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/group.gif'></td>
    	<td colspan="3">Aantal inzittende: <b>4 personen</b></td>
  	</tr>
</table>

<br>
<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
 	<tr>
    	<td rowspan="5" width="20px" align=center><input type="radio" name="car" value="5" class="radio" onclick="document.getElementById('sel').value = 'true'"></td>
    	<td colspan="5"><font size="4" style="padding-left:7px;">Rover</font></td>
  	</tr>
  	<tr>
    	<td rowspan="4" width="120px" align="center"><img src="images/autos/2rover.jpg" width="100" height="80"></td>
    	<td width="18px" align="center"><img src='images/icons_gif/money.gif'></td>
    	<td colspan="3">Waarde: <b>&euro; 22.500</b></td>
  	</tr>
  	<tr>
	    <td width="18px" align="center"><img src='images/icons_gif/tag.gif'></td>
    	<td colspan="3">Kans: <b><?echo$pr5;?> %</b></td>
  	</tr>
  	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/chart_curve.gif'></td>
    	<td>Topsnelheid: <b>185</b></td>
    	<td width="18px" align="center"><img src='images/icons_gif/lightning.gif'></td>
    	<td>Paardenkracht: <b>116</b></td>
  	</tr>
   	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/group.gif'></td>
    	<td colspan="3">Aantal inzittende: <b>4 personen</b></td>
  	</tr>
</table>

<br>
<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
 	<tr>
    	<td rowspan="5" width="20px" align=center><input type="radio" name="car" value="6" class="radio" onclick="document.getElementById('sel').value = 'true'"></td>
    	<td colspan="5"><font size="4" style="padding-left:7px;">DeLorean DMC</font></td>
  	</tr>
  	<tr>
    	<td rowspan="4" width="120px" align="center"><img src="images/autos/delorean.jpg" width="100" height="80"></td>
    	<td width="18px" align="center"><img src='images/icons_gif/money.gif'></td>
    	<td colspan="3">Waarde: <b>&euro; 25.000</b></td>
  	</tr>
  	<tr>
	    <td width="18px" align="center"><img src='images/icons_gif/tag.gif'></td>
    	<td colspan="3">Kans: <b><?echo$pr6;?> %</b></td>
  	</tr>
  	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/chart_curve.gif'></td>
    	<td>Topsnelheid: <b>88</b></td>
    	<td width="18px" align="center"><img src='images/icons_gif/lightning.gif'></td>
    	<td>Paardenkracht: <b>140</b></td>
  	</tr>
   	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/group.gif'></td>
    	<td colspan="3">Aantal inzittende: <b>2 personen</b></td>
  	</tr>
</table>

<br>
<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
 	<tr>
    	<td rowspan="5" width="20px" align=center><input type="radio" name="car" value="7" class="radio" onclick="document.getElementById('sel').value = 'true'"></td>
    	<td colspan="5"><font size="4" style="padding-left:7px;">Cadillac V16</font></td>
  	</tr>
  	<tr>
    	<td rowspan="4" width="120px" align="center"><img src="images/autos/2CadillacV16.jpg" width="100" height="80"></td>
    	<td width="18px" align="center"><img src='images/icons_gif/money.gif'></td>
    	<td colspan="3">Waarde: <b>&euro; 37.500</b></td>
  	</tr>
  	<tr>
	    <td width="18px" align="center"><img src='images/icons_gif/tag.gif'></td>
    	<td colspan="3">Kans: <b><?echo$pr7;?> %</b></td>
  	</tr>
  	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/chart_curve.gif'></td>
    	<td>Topsnelheid: <b>250</b></td>
    	<td width="18px" align="center"><img src='images/icons_gif/lightning.gif'></td>
    	<td>Paardenkracht: <b>197</b></td>
  	</tr>
   	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/group.gif'></td>
    	<td colspan="3">Aantal inzittende: <b>4 personen</b></td>
  	</tr>
</table>

<br>
<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
 	<tr>
    	<td rowspan="5" width="20px" align=center><input type="radio" name="car" value="8" class="radio" onclick="document.getElementById('sel').value = 'true'"></td>
    	<td colspan="5"><font size="4" style="padding-left:7px;">Cadillac</font></td>
  	</tr>
  	<tr>
    	<td rowspan="4" width="120px" align="center"><img src="images/autos/cadillac.jpg" width="100" height="80"></td>
    	<td width="18px" align="center"><img src='images/icons_gif/money.gif'></td>
    	<td colspan="3">Waarde: <b>&euro; 50.000</b></td>
  	</tr>
  	<tr>
	    <td width="18px" align="center"><img src='images/icons_gif/tag.gif'></td>
    	<td colspan="3">Kans: <b><?echo$pr8;?> %</b></td>
  	</tr>
  	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/chart_curve.gif'></td>
    	<td>Topsnelheid: <b>190</b></td>
    	<td width="18px" align="center"><img src='images/icons_gif/lightning.gif'></td>
    	<td>Paardenkracht: <b>130</b></td>
  	</tr>
   	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/group.gif'></td>
    	<td colspan="3">Aantal inzittende: <b>4 personen</b></td>
  	</tr>
</table>

<br>
<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
 	<tr>
    	<td rowspan="5" width="20px" align=center><input type="radio" name="car" value="9" class="radio" onclick="document.getElementById('sel').value = 'true'"></td>
    	<td colspan="5"><font size="4" style="padding-left:7px;">Pontiac Firebird</font></td>
  	</tr>
  	<tr>
    	<td rowspan="4" width="120px" align="center"><img src="images/autos/pontiac.jpg" width="100" height="80"></td>
    	<td width="18px" align="center"><img src='images/icons_gif/money.gif'></td>
    	<td colspan="3">Waarde: <b>&euro; 60.000</b></td>
  	</tr>
  	<tr>
	    <td width="18px" align="center"><img src='images/icons_gif/tag.gif'></td>
    	<td colspan="3">Kans: <b><?echo$pr9;?> %</b></td>
  	</tr>
  	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/chart_curve.gif'></td>
    	<td>Topsnelheid: <b>240</b></td>
    	<td width="18px" align="center"><img src='images/icons_gif/lightning.gif'></td>
    	<td>Paardenkracht: <b>150</b></td>
  	</tr>
   	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/group.gif'></td>
    	<td colspan="3">Aantal inzittende: <b>2 personen</b></td>
  	</tr>
</table>

<br>
<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
 	<tr>
    	<td rowspan="5" width="20px" align=center><input type="radio" name="car" value="10" class="radio" onclick="document.getElementById('sel').value = 'true'"></td>
    	<td colspan="5"><font size="4" style="padding-left:7px;">Chrysler</font></td>
  	</tr>
  	<tr>
    	<td rowspan="4" width="120px" align="center"><img src="images/autos/2chrysler.jpg" width="100" height="80"></td>
    	<td width="18px" align="center"><img src='images/icons_gif/money.gif'></td>
    	<td colspan="3">Waarde: <b>&euro; 75.000</b></td>
  	</tr>
  	<tr>
	    <td width="18px" align="center"><img src='images/icons_gif/tag.gif'></td>
    	<td colspan="3">Kans: <b><?echo$pr10;?> %</b></td>
  	</tr>
  	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/chart_curve.gif'></td>
    	<td>Topsnelheid: <b>250</b></td>
    	<td width="18px" align="center"><img src='images/icons_gif/lightning.gif'></td>
    	<td>Paardenkracht: <b>215</b></td>
  	</tr>
   	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/group.gif'></td>
    	<td colspan="3">Aantal inzittende: <b>4 personen</b></td>
  	</tr>
</table>

<br>
<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
 	<tr>
    	<td rowspan="5" width="20px" align=center><input type="radio" name="car" value="11" class="radio" onclick="document.getElementById('sel').value = 'true'"></td>
    	<td colspan="5"><font size="4" style="padding-left:7px;">Audi R8</font></td>
  	</tr>
  	<tr>
    	<td rowspan="4" width="120px" align="center"><img src="images/autos/audir8.jpg" width="100" height="80"></td>
    	<td width="18px" align="center"><img src='images/icons_gif/money.gif'></td>
    	<td colspan="3">Waarde: <b>&euro; 80.000</b></td>
  	</tr>
  	<tr>
	    <td width="18px" align="center"><img src='images/icons_gif/tag.gif'></td>
    	<td colspan="3">Kans: <b><?echo$pr11;?> %</b></td>
  	</tr>
  	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/chart_curve.gif'></td>
    	<td>Topsnelheid: <b>230</b></td>
    	<td width="18px" align="center"><img src='images/icons_gif/lightning.gif'></td>
    	<td>Paardenkracht: <b>130</b></td>
  	</tr>
   	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/group.gif'></td>
    	<td colspan="3">Aantal inzittende: <b>2 personen</b></td>
  	</tr>
</table>

<br>
<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
 	<tr>
    	<td rowspan="5" width="20px" align=center><input type="radio" name="car" value="12" class="radio" onclick="document.getElementById('sel').value = 'true'"></td>
    	<td colspan="5"><font size="4" style="padding-left:7px;">Mustang</font></td>
  	</tr>
  	<tr>
    	<td rowspan="4" width="120px" align="center"><img src="images/autos/mustang.jpg" width="100" height="80"></td>
    	<td width="18px" align="center"><img src='images/icons_gif/money.gif'></td>
    	<td colspan="3">Waarde: <b>&euro; 90.000</b></td>
  	</tr>
  	<tr>
	    <td width="18px" align="center"><img src='images/icons_gif/tag.gif'></td>
    	<td colspan="3">Kans: <b><?echo$pr12;?> %</b></td>
  	</tr>
  	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/chart_curve.gif'></td>
    	<td>Topsnelheid: <b>220</b></td>
    	<td width="18px" align="center"><img src='images/icons_gif/lightning.gif'></td>
    	<td>Paardenkracht: <b>200</b></td>
  	</tr>
   	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/group.gif'></td>
    	<td colspan="3">Aantal inzittende: <b>2 personen</b></td>
  	</tr>
</table>

<br>
<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
 	<tr>
    	<td rowspan="5" width="20px" align=center><input type="radio" name="car" value="13" class="radio" onclick="document.getElementById('sel').value = 'true'"></td>
    	<td colspan="5"><font size="4" style="padding-left:7px;">GMC</font></td>
  	</tr>
  	<tr>
    	<td rowspan="4" width="120px" align="center"><img src="images/autos/gmc.jpg" width="100" height="80"></td>
    	<td width="18px" align="center"><img src='images/icons_gif/money.gif'></td>
    	<td colspan="3">Waarde: <b>&euro; 100.000</b></td>
  	</tr>
  	<tr>
	    <td width="18px" align="center"><img src='images/icons_gif/tag.gif'></td>
    	<td colspan="3">Kans: <b><?echo$pr13;?> %</b></td>
  	</tr>
  	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/chart_curve.gif'></td>
    	<td>Topsnelheid: <b>210</b></td>
    	<td width="18px" align="center"><img src='images/icons_gif/lightning.gif'></td>
    	<td>Paardenkracht: <b>190</b></td>
  	</tr>
   	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/group.gif'></td>
    	<td colspan="3">Aantal inzittende: <b>6 personen</b></td>
  	</tr>
</table>

<br>
<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
 	<tr>
    	<td rowspan="5" width="20px" align=center><input type="radio" name="car" value="14" class="radio" onclick="document.getElementById('sel').value = 'true'"></td>
    	<td colspan="5"><font size="4" style="padding-left:7px;">Hummer</font></td>
  	</tr>
  	<tr>
    	<td rowspan="4" width="120px" align="center"><img src="images/autos/hummer.jpg" width="100" height="80"></td>
    	<td width="18px" align="center"><img src='images/icons_gif/money.gif'></td>
    	<td colspan="3">Waarde: <b>&euro; 100.000</b></td>
  	</tr>
  	<tr>
	    <td width="18px" align="center"><img src='images/icons_gif/tag.gif'></td>
    	<td colspan="3">Kans: <b><?echo$pr14;?> %</b></td>
  	</tr>
  	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/chart_curve.gif'></td>
    	<td>Topsnelheid: <b>180</b></td>
    	<td width="18px" align="center"><img src='images/icons_gif/lightning.gif'></td>
    	<td>Paardenkracht: <b>210</b></td>
  	</tr>
   	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/group.gif'></td>
    	<td colspan="3">Aantal inzittende: <b>6 personen</b></td>
  	</tr>
</table>

<br>
<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
 	<tr>
    	<td rowspan="5" width="20px" align=center><input type="radio" name="car" value="15" class="radio" onclick="document.getElementById('sel').value = 'true'"></td>
    	<td colspan="5"><font size="4" style="padding-left:7px;">Rolls Royce</font></td>
  	</tr>
  	<tr>
    	<td rowspan="4" width="120px" align="center"><img src="images/autos/2rolls.jpg" width="100" height="80"></td>
    	<td width="18px" align="center"><img src='images/icons_gif/money.gif'></td>
    	<td colspan="3">Waarde: <b>&euro; 150.000</b></td>
  	</tr>
  	<tr>
	    <td width="18px" align="center"><img src='images/icons_gif/tag.gif'></td>
    	<td colspan="3">Kans: <b><?echo$pr15;?> %</b></td>
  	</tr>
  	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/chart_curve.gif'></td>
    	<td>Topsnelheid: <b>220</b></td>
    	<td width="18px" align="center"><img src='images/icons_gif/lightning.gif'></td>
    	<td>Paardenkracht: <b>190</b></td>
  	</tr>
   	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/group.gif'></td>
    	<td colspan="3">Aantal inzittende: <b>4 personen</b></td>
  	</tr>
</table>

<br>
<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
 	<tr>
    	<td rowspan="5" width="20px" align=center><input type="radio" name="car" value="16" class="radio" onclick="document.getElementById('sel').value = 'true'"></td>
    	<td colspan="5"><font size="4" style="padding-left:7px;">Dodge Viper</font></td>
  	</tr>
  	<tr>
    	<td rowspan="4" width="120px" align="center"><img src="images/autos/viper.jpg" width="100" height="80"></td>
    	<td width="18px" align="center"><img src='images/icons_gif/money.gif'></td>
    	<td colspan="3">Waarde: <b>&euro; 250.000</b></td>
  	</tr>
  	<tr>
	    <td width="18px" align="center"><img src='images/icons_gif/tag.gif'></td>
    	<td colspan="3">Kans: <b><?echo$pr16;?> %</b></td>
  	</tr>
  	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/chart_curve.gif'></td>
    	<td>Topsnelheid: <b>240</b></td>
    	<td width="18px" align="center"><img src='images/icons_gif/lightning.gif'></td>
    	<td>Paardenkracht: <b>180</b></td>
  	</tr>
   	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/group.gif'></td>
    	<td colspan="3">Aantal inzittende: <b>2 personen</b></td>
  	</tr>
</table>

<br>
<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
 	<tr>
    	<td rowspan="5" width="20px" align=center><input type="radio" name="car" value="17" class="radio" onclick="document.getElementById('sel').value = 'true'"></td>
    	<td colspan="5"><font size="4" style="padding-left:7px;">Ferrari Spyder</font></td>
  	</tr>
  	<tr>
    	<td rowspan="4" width="120px" align="center"><img src="images/autos/ferarri.jpg" width="100" height="80"></td>
    	<td width="18px" align="center"><img src='images/icons_gif/money.gif'></td>
    	<td colspan="3">Waarde: <b>&euro; 500.000</b></td>
  	</tr>
  	<tr>
	    <td width="18px" align="center"><img src='images/icons_gif/tag.gif'></td>
    	<td colspan="3">Kans: <b><?echo$pr17;?> %</b></td>
  	</tr>
  	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/chart_curve.gif'></td>
    	<td>Topsnelheid: <b>250</b></td>
    	<td width="18px" align="center"><img src='images/icons_gif/lightning.gif'></td>
    	<td>Paardenkracht: <b>210</b></td>
  	</tr>
   	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/group.gif'></td>
    	<td colspan="3">Aantal inzittende: <b>2 personen</b></td>
  	</tr>
</table>
<br>
<table align="center" width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
		<tr>
			<td >
				<table width="100%">
					<tr>
						<td>                        <?
function rand_str($length = 32, $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890')
{
    // Length of character list
    $chars_length = (strlen($chars) - 1);

    // Start our string
    $string = $chars{rand(0, $chars_length)};
   
    // Generate random string
    for ($i = 1; $i < $length; $i = strlen($string))
    {
        // Grab a random character from our list
        $r = $chars{rand(0, $chars_length)};
       
        // Make sure the same two characters don't appear next to each other
        if ($r != $string{$i - 1}) $string .=  $r;
    }
   
    // Return the string
    return $string;
}
$aantal_codes = 5;
$codes = array();
for($x = 0;$x < $aantal_codes;$x++)
{
    $codes[$x] = md5(rand_str(60));        
}
$code_id = rand(0, 4);
$juiste_code = $codes[ $code_id ];
$_SESSION['captcha'] = $juiste_code;

echo "<tr><td><b>Klik op dit plaatje:</b> <img src='images/$code_id.gif'></td></tr>";
echo"<tr><td>";
for($x = 0;$x < $aantal_codes;$x++)
{   
    ?> 
|<img src="images/<?=$x;?>.gif" border="0" style="cursor: pointer" onclick="forms[0].captcha.value='<?=$codes[$x];?>';forms[0].submit();" value="<?=$x?>">
    
    <?php    

}
?></td></td>
					</tr>
				</table>
			</td>
		</tr>
	</form>
</table>
<br />
Vul in het vakje de vierletterige code in. Deze code is ter beveiliging.<br><br>
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

		if(pForm.captcha.value.length != 4) errormsg += 'Je hebt geen geldige code ingevuld!<br>';
		if(pForm.sel.value != 'true') errormsg += 'Je hebt geen auto gekozen!<br>';

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
<?}
if($error == niks){
$_SESSION['mission'] = "Steel een auto";
}
?>
