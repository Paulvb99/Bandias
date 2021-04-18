<?
if($_GET['x'] != ""){
$type = $_GET['type'];
$soort = array("","station","vliegveld");
$soort = $soort[$type];
$verkoop1 = mysql_query("SELECT * FROM `$soort` WHERE `eigenaar`='' AND `stad`='{$_GET['x']}'");
$verkoop = mysql_fetch_object($verkoop1);
$verkoop->soort = $_GET['type'];
if(isset($_POST['bid'])){
if($_POST['bid'] > $data->bank){
$error = nietgevonden;
?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Je hebt niet genoeg geld om dit bod uit te brengen					</td>
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
else if($_POST['bid']-$verkoop->laatstebod < 50000){
$error = nietgevonden;
?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Je bod moet minstens &euro;50.000,- hoger zijn dan het laatste bod					</td>
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
$type = $_GET['type'];
$soort = array("","station","vliegveld");
$soort = $soort[$type];
$stad = $_GET['x'];
mysql_query("UPDATE `users` SET `bank`=`bank`-'{$_POST['bid']}' WHERE `id`='$data->id'");
mysql_query("UPDATE `users` SET `bank`=`bank`+'$verkoop->laatstebod' WHERE `login`='$verkoop->laatstebieder'");
$veilinglog = $_POST['bid'];
mysql_query("INSERT INTO `veilinglogs`(person,bod,stad,soort) values('$data->login','$veilinglog','{$_GET['x']}','$verkoop->soort')");
if($type == 1){
mysql_query("UPDATE `station` SET `laatstebod`='$veilinglog', `laatstebieder`='$data->login' WHERE `stad`='{$_GET['x']}'");
}
if($type == 2){
mysql_query("UPDATE `vliegveld` SET `laatstebod`='$veilinglog', `laatstebieder`='$data->login' WHERE `stad`='{$_GET['x']}'");
}
$error = nietgevonden;
$_SESSION['mission'] = "Doe een bod op een veiling";
?>
			<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup" align="center">
				<tr>
					<td>
						Het bod is geplaatst!					</td>
				</tr>
				<tr>
					<td>
						<br><br>
							<a href="index.php?a=veiling" class="msg_ok">Klik hier indien je niet automatisch verder gaat.</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
<script language="javascript">
	setTimeout("document.location.href='index.php?a=veiling'",(3000*2));
</script>
		</div>
	</td>
	</tr>

	</table>
	</td>
<?}}
if($verkoop->stad == ""){
$error = nietgevonden;
?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Kan de gekozen veiling niet vinden					</td>
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
if($error != nietgevonden){
$error = bodcheck;
?>
					<div class="title_bg">
			<div class="title">Veiling</div>
		</div>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
			<br>
	De volgende boden zijn al uitgebracht<br><br>
	<table width="100%" border="0" cellspacing="2" cellpadding="2" align="center" class="mod_list">
		<tr>
			<td width="5%"></td>
			<td width="30%"><strong>Bod</strong></td>
			<td width="5%"></td>
			<td><strong>Door</strong></td>
		</tr>
<?
mysql_query("DELETE FROM `veilinglogs` WHERE `stad`='{$_GET['x']}' AND `soort`='$verkoop->soort' AND `bod`>'$verkoop->laatstebod'");
$veiling1 = mysql_query("SELECT * FROM `veilinglogs` WHERE `stad`='{$_GET['x']}' AND `soort`='$verkoop->soort'");
$num = mysql_num_rows($veiling1);
if($num == 0){
$nummer = fout;
}
while($veiling = mysql_fetch_object($veiling1)){
$user1 = mysql_query("SELECT * FROM `users` WHERE `login`='$veiling->person'");
$user = mysql_fetch_object($user1);
$online1 = mysql_query("SELECT * FROM `users` WHERE UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(`online`) < 300 AND `login`='$user->login'");
$online = mysql_num_rows($online1);
if($online > 0){$letter = n;}else{$letter = ff;}
$bod = number_format($veiling->bod, 0, '.', '.');
?>
							<tr>
	  				 <td width="5%" align="center"><img src="images/icons_gif/money.gif" border="0px"></td>
	  				 <td>&euro; <?echo$bod;?></td>
	  				 <td width="5%"align="center"><img src="images/icons_gif/status_o<?echo$letter;?>line.gif" title="O<?echo$letter;?>line"></td>
	  				 <td>&nbsp;<a href="index.php?a=profile&x=<?echo$user->id;?>"><?echo$user->login;?></a></td>
	 				</tr>
<?}
if($nummer == fout){?>
							<tr>
			<td colspan="4">
				<i>Er zijn nog geen boden uitgebracht</i>
			</td>
		</tr>
<?}?>
							<tr>
			<td colspan="4">
				<i>Deze veiling loopt tot <?echo$verkoop->showtot;?></i>
			</td>
		</tr>
		</table>
		<br>
				<form method="POST" action="index.php?a=veiling&x=<?echo$_GET['x'];?>&type=<?echo$_GET['type'];?>">
			<table width="100%" class="mod_list">
				<tr>
					<td width="5%" align="center"><img src="images/icons_gif/money_euro.gif" border="0px"></td>
					<td width="20%" style="padding:5px;"><b>Plaats een bod:</b></td>
					<td style="padding:5px;"><input type="text" name="bid" maxlength="12" style="width: 200px" class="input"></td>
					<td style="padding:5px;" align="center"><input type="submit" name="Submit" value="Plaats bod" class="mod_submit"></tD>
				</tr>
				<tr>
					<td width="5%" align="center"><img src="images/icons_gif/information.gif" align="top"></td>
					<td width="20%" style="padding:5px;" colspan="3">Zodra je een bod plaatst, zal dit geld van je bankrekening worden afgeschreven.Als een andere banditi daarna een hoger bod plaatst, krijg je het geld terug gestort.</td>
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
				</div>
	</td>
	</tr>

	</table>
	</td>
<?
}}if($error == ""){?>
					<div class="title_bg">
			<div class="title">Veiling</div>
		</div>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
			Op de veiling kun je stations en vliegvelden kopen. Wanneer je een een van deze  in je bezit hebt moet je elk uur de kaartjes prijs betalen. Als tegenprestatie ontvang je de inkomsten als mensen van je station gebruik maken.<br>
	<br>
	<table width="100%" border="0" cellspacing="2" cellpadding="2" align="center" class="mod_list">
		<tr>
			<td width="30%"><strong>Soort</strong></td>
			<td width="30%"><strong>Bieden tot</strong></td>
			<td width="20%"><strong>Hoogste bod</strong></td>
			<td width="20%"><strong>Bieden</strong></td>
		</tr><?
$soort1 = mysql_query("SELECT * FROM `station` WHERE `eigenaar`='' ORDER BY `stad`");
while($soort = mysql_fetch_object($soort1)){
$stad = array("","Turijn","Palermo","Milaan","Rome","Catania","Corleone");
$stad = $stad[$soort->stad];
$laatstebod = number_format($soort->laatstebod, 0, '.', '.');
?>
							<tr>
						<td>
							<a href="index.php?a=veiling&x=<?echo$soort->stad;?>&type=1">
								Station <?echo$stad;?>							</a>
						</td>
						<td><?echo$soort->showtot;?></td>
						<td>&euro; <?echo$laatstebod;?></td>
						<td>
							<a href="index.php?a=veiling&x=<?echo$soort->stad;?>&type=1">
								Bied							</a>
						</td>
					</tr>
<?}
$soort1 = mysql_query("SELECT * FROM `vliegveld` WHERE `eigenaar`='' ORDER BY `stad`");
while($soort = mysql_fetch_object($soort1)){
$stad = array("","Turijn","Palermo","Milaan","Rome","Catania","Corleone");
$stad = $stad[$soort->stad];
$laatstebod = number_format($soort->laatstebod, 0, '.', '.');
?>
							<tr>
						<td>
							<a href="index.php?a=veiling&x=<?echo$soort->stad;?>&type=2">
								Vliegveld <?echo$stad;?>							</a>
						</td>
						<td><?echo$soort->showtot;?></td>
						<td>&euro; <?echo$laatstebod;?></td>
						<td>
							<a href="index.php?a=veiling&x=<?echo$soort->stad;?>&type=2">
								Bied							</a>
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
<?}?>
