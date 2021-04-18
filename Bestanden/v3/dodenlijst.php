<?
if(ctype_digit($_POST['price'])) {
if(isset($_POST['save'])){
$hitlist1 = mysql_query("SELECT * FROM `hitlist` WHERE `to`='{$_POST['name']}'");
$hitlist = mysql_fetch_object($hitlist1);
if(!isset($_POST['anonymous'])){
$from = "<a href=index.php?a=profile&x=$data->id>$data->login</a>";
}
if($_POST['price'] > $data->contant){
$error = 2;
}
if($_POST['price'] < 1000000){
$error = 3;
}
if($error == ""){
if(isset($_POST['anonymous'])){
if($data->callcredits < 2){
$error = 1;
}
else{
$from = "Anoniem";
mysql_query("UPDATE `users` SET `callcredits`=`callcredits`-'2' WHERE `id`='$data->id'");
}
}
if($error == ""){
$show = "$hitlist->from, $from";
mysql_query("UPDATE `users` SET `contant`=`contant`-'{$_POST['price']}' WHERE `id`='$data->id'");
$contract1 = mysql_query("SELECT * FROM `hitlist` WHERE `to`='{$_POST['name']}' AND `from`='$data->login'");
$contract = mysql_num_rows($hitlist1);
if($contract > 0){
if(!isset($_POST['anonymous'])){
mysql_query("UPDATE `hitlist` SET `waarde`=`waarde`+'{$_POST['price']}' WHERE `to`='{$_POST['name']}'");
}
if(isset($_POST['anonymous'])){
$hitlist->from 		= str_replace("<a href=index.php?a=profile&x=$data->id>$data->login</a>", "Anoniem",$hitlist->from);
mysql_query("UPDATE `hitlist` SET `from`='$hitlist->from' WHERE `to`='{$_POST['name']}'");
mysql_query("UPDATE `contracten` SET `anoniem`='1' WHERE `to`='{$_POST['name']}' AND `from`='$data->login'");
}
}
else{
mysql_query("UPDATE `hitlist` SET `from`='$show', `waarde`=`waarde`+'{$_POST['price']}' WHERE `to`='{$_POST['name']}'");
if(!isset($_POST['anonymous'])){
mysql_query("INSERT INTO `contracten` (`from`,`to`)values('$data->login','{$_POST['name']}')");
}
if(isset($_POST['anonymous'])){
mysql_query("INSERT INTO `contracten` (`from`,`to`,`anoniem`)values('$data->login','{$_POST['name']}','1')");
}
}
mysql_query("UPDATE `users` SET `hoofdwaarde`=`hoofdwaarde`+'{$_POST['price']}' WHERE `login`='{$_POST['name']}'");
$error = niks;
}
}
}
}

if(ctype_digit($_POST['price'])){
if(isset($_POST['create'])){
if(!isset($_POST['anonymous'])){
$from = "<a href=index.php?a=profile&x=$data->id>$data->login</a>";
}
if($_POST['price'] > $data->contant){
$error = 2;
}
if($error == ""){
$hitlist = mysql_query("SELECT * FROM `hitlist` WHERE `to`='{$_POST['name']}'");
$num = mysql_num_rows($hitlist);
if($num > 0){
$error = 4;
}
if($error == ""){
if($_POST['price'] < 1000000){
$error = 3;
}
if($error == ""){
if(isset($_POST['anonymous'])){
if($data->callcredits < 2){
$error = 1;
}
else{
$from = "Anoniem";
mysql_query("UPDATE `users` SET `callcredits`=`callcredits`-'2' WHERE `id`='$data->id'");
mysql_query("INSERT INTO `contracten` (`from`,`to`,`anoniem`)values('$data->login','{$_POST['name']}','1')");
}
}
$user1 = mysql_query("SELECT * FROM `users` WHERE `login`='{$_POST['name']}'");
$user = mysql_fetch_object($user1);
if($user->health < 1){
$error = 5;
}
if($error == ""){
$price = $_POST['price'];
mysql_query("UPDATE `users` SET `contant`=`contant`-'$price' WHERE `id`='$data->id'");
mysql_query("INSERT INTO `hitlist` (`waarde`,`health`,`from`,`to`)values('$price','$user->health','$from','{$_POST['name']}')");
$error = niks;
if(!isset($_POST['anonymous'])){
mysql_query("INSERT INTO `contracten` (`from`,`to`)values('$data->login','{$_POST['name']}')");
}
}
}
}
}
}
}
if($error == "niks"){
?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup" align="center">
				<tr>
					<td>
						De prijs is neergezet.					</td>
				</tr>
				<tr>
					<td>
						<br><br>
							<a href="index.php?a=dodenlijst" class="msg_ok">Klik hier indien je niet automatisch verder gaat.</a>
											</td>
<script language="javascript">
	setTimeout("document.location.href='index.php?a=dodenlijst'",(2000*2));
</script
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
if($error == 4){
?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Het lid die je wilt toevoegen staat al op de dodenlijst!<BR>Ga naar de dodenlijst en verhoog zijn beloning.					</td>
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
if($error == 1){
?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Je wil een anonieme hit organiseren, maar je hebt onvoldoende callcredits!					</td>
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
if($error == 2){
?>

					<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Je hebt onvoldoende geld op je rekening om deze hit te organiseren!					</td>
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
if($error == 3){
?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Je dient minstens &euro; 1.000.000 op iemand zijn hoofd te zetten! Of je hebt een ongeldig getal ingevoerd.					</td>
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
if(isset($_GET['raise'])){
$user1 = mysql_query("SELECT * FROM `users` WHERE `id`='{$_GET['raise']}'");
$user = mysql_fetch_object($user1);
$hitlist1 = mysql_query("SELECT * FROM `hitlist` WHERE `to`='$user->login'");
$hitlist = mysql_fetch_object($hitlist1);
$numhitlist = mysql_num_rows($hitlist1);
if($error == ""){
if($numhitlist == 0 || $error == 5){?>
					<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Kan de opgegeven gebruiker niet vinden, of hij is dood					</td>
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
else{
?>
			<div class="title_bg">
			<div class="title">Dodenlijst - Hit verhogen</div>
		</div>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
				Hier kan je een prijs op het hoofd van een mede crimineel verhogen. De prijs dient minstens &euro; 1.000.000 te bedragen, anders zal hij voor andere criminelen niet de moeite waard zijn. Het geld zal meteen van je rekening worden gehaald, waarna andere banditi een week de tijd hebben om de moord te voltooien, onafhankelijk ervan of het lukt binnen deze tijd of niet zal je je geld niet terug ontvangen.<br>
		<br>
		<table class="mod_list">
			<form method="POST">
			<tr>
				<td>
					<b>Naam lid:</b>
				</td>
				<td>
					<input type="text" name="name" id="name" size="25" value="<?echo$user->login;?>" readonly>
				</td>
			</tr>
			<tr>
				<td>
					<b>Prijs:</b>
				</td>
				<td>
					<input type="text" name="price" size="15" value="1000000">
				</td>
			</tr>
			<tr>
				<td>
					<b>Anoniem</b>
				</td>
				<td>
					<input type="checkbox" name="anonymous" value="1"> Let op! Dit kost je 2 callcredits!
				</td>
			</tr>
		</table>
		<br><input type="submit" name="save" value="Verhoog bedrag" class="submit">
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
<?}}}
if(!isset($_GET['raise'])){
?>
		<div class="title_bg"><div style="font-size:17px; color:#1b1a17; margin-left:10px; padding-top:4px;">Dodenlijst</div></div>
		<div style="width:100%; height:auto; background:#c3b79d; font-family:arial; font-size:12px; color:#2a190e;">
			<div style="padding:5px; padding-bottom:10px;">
				Hier kan je zien welke prijzen er op de hoofden van <?php echo $sitename; ?> leden staan. Om alle gegevens van een contract te bekijken kan je op de gebruikersnaam klikken. Ook is het mogelijk om de prijs te verhogen, zodat het nog aantrekkelijker wordt om deze persoon te vermoorde, dit doe je met de credit cards.<br>
		<br>
		Wil je een contract maken voor iemand die er nog geen heeft, klik dan <a href="#" onclick="openTab('contract_add','tab3'); return false">hier</a>.<br>
		<br>
					</div>
		</div>

		<script language="javascript">
			function openTab(pTabPage,pTab){
								document.getElementById('contract_all').style.display = 'none';
								document.getElementById('contract_my').style.display = 'none';
								document.getElementById('contract_add').style.display = 'none';

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
									<div id="tab1" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px; background:url('images/tab_info_arrow.gif') bottom no-repeat; font-weight:bold;"><a href="#" onclick="openTab('contract_all','tab1'); return false">Dodenlijst</a></div>
												<div id="tab1" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px;">|</div>
												<div id="tab2" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px;"><a href="#" onclick="openTab('contract_my','tab2'); return false">Mijn contracten</a></div>
												<div id="tab2" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px;">|</div>
												<div id="tab3" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px;"><a href="#" onclick="openTab('contract_add','tab3'); return false">Contract opstellen</a></div>
								</div>

		<div style="background-color:#dbd2b7; ">
		<br>
		<table cellpadding="4" cellspacing="0" width="100%" align="center"><tr><td>
				<div id="contract_all">
			<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>
						<b>
							<a href="index.php?a=dodenlijst&order=login">
								Gebruikersnaam							</a>
						</b>
					</td>
					<td align="center">&nbsp;</td>
					<td>
						<b>
							<a href="index.php?a=dodenlijst&order=price">
								Prijs							</a>
						</b>
					</td>
					<td align="center">&nbsp;</td>
					<td>
						<b>
							<a href="index.php?a=dodenlijst">
								Aanvallen							</a>
						</b>
					</td>
					<td align="center">&nbsp;</td>
					<td>
						<b>
							<a href="index.php?a=dodenlijst&order=health">
								Leven							</a>
						</b>
					</td>
					<td align="center">&nbsp;</td>
					<td align="center">&nbsp;</td>
				</tr>
<?
    $dbres				= mysql_query("SELECT * FROM `hitlist` ORDER BY `waarde` DESC");
if($_GET['order'] == health){
    $dbres				= mysql_query("SELECT * FROM `hitlist` ORDER BY `health` DESC");
}
if($_GET['order'] == login){
    $dbres				= mysql_query("SELECT * FROM `hitlist` ORDER BY `to` DESC");
}
  for($j=0+1; $info = mysql_fetch_object($dbres); $j++)
{
$user1 = mysql_query("SELECT * FROM `users` WHERE `login`='$info->to'");
$user = mysql_fetch_object($user1);
$info->to 		= str_replace("a", "A",$info->to);
$info->to 		= str_replace("b", "B",$info->to);
$info->to 		= str_replace("c", "C",$info->to);
$info->to 		= str_replace("d", "D",$info->to);
$info->to 		= str_replace("e", "E",$info->to);
$info->to 		= str_replace("f", "F",$info->to);
$info->to 		= str_replace("g", "G",$info->to);
$info->to 		= str_replace("h", "H",$info->to);
$info->to 		= str_replace("i", "I",$info->to);
$info->to 		= str_replace("j", "J",$info->to);
$info->to 		= str_replace("k", "K",$info->to);
$info->to 		= str_replace("l", "L",$info->to);
$info->to 		= str_replace("m", "M",$info->to);
$info->to 		= str_replace("n", "N",$info->to);
$info->to 		= str_replace("o", "O",$info->to);
$info->to 		= str_replace("p", "P",$info->to);
$info->to 		= str_replace("q", "Q",$info->to);
$info->to 		= str_replace("r", "R",$info->to);
$info->to 		= str_replace("s", "S",$info->to);
$info->to 		= str_replace("t", "T",$info->to);
$info->to 		= str_replace("u", "U",$info->to);
$info->to 		= str_replace("v", "V",$info->to);
$info->to 		= str_replace("w", "W",$info->to);
$info->to 		= str_replace("x", "X",$info->to);
$info->to 		= str_replace("y", "Y",$info->to);
$info->to 		= str_replace("z", "Z",$info->to);
$waarde = number_format($info->waarde, 0, '.' , '.');
$schammel				= mysql_query("SELECT * FROM `users` WHERE UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(`online`) < 300 AND `login`='$info->to'");
$online = mysql_fetch_object($schammel);
?>
										<tr>
							<td><img style="cursor:pointer" src="images/icons_gif/page_white_text.gif" onclick="openContract('<?echo$info->to;?>','<?echo$waarde?>','<?echo$info->from;?>');return false"></td>
							<td align="center"><?if($online->login == $user->login){?><img src="images/icons_gif/status_online.gif" title="Online"><?}?><?if($online->login != $user->login){?><img src="images/icons_gif/status_offline.gif" title="Offline"><?}?></td>
							<td><a href="index.php?a=profile&x=<?echo$user->id;?>"><?echo$user->login;?></a></td>
							<td align="center"><img src="images/icons_gif/money.gif" alt="Prijs"></td>
							<td>&euro; <?echo$waarde;?></td>
							<td align="center"><img src="images/icons_gif/bomb.gif" alt="Gled"></td>
							<td><a href="index.php?a=attack&x=<?echo$user->id;?>">Aanvallen</a></td>
							<td align="center"><img src="images/icons_gif/heart.gif" alt="Gled"></td>
							<td><?echo$info->health;?>%</td>
							<td align="center">
								<a href="index.php?a=dodenlijst&raise=<?echo$user->id;?>">
									<img src="images/icons_gif/creditcards.gif" border="0" alt="Prijs verhogen" title="Prijs verhogen">
								</a>
							</td>
							<td align="center">
								<a href="index.php?a=dodenlijst&raise=<?echo$user->id;?>">
									Verhoog de prijs
								</a>
							</td>

						</tr>
<?}?>

									</table>
		</div>

		<div id="contract_my" style="display:none">
			<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td><b>Gebruikersnaam</b></td>
				<td align="center">&nbsp;</td>
				<td><b>Prijs</b></td>
				<td align="center">&nbsp;</td>
				<td><b>Leven</b></td>
				<td align="center">&nbsp;</td>
				<td><b>Anoniem</b></td>
			</tr>
<?
    $dbres				= mysql_query("SELECT * FROM `contracten` WHERE `from`='$data->login'");
  for($j=0+1; $info = mysql_fetch_object($dbres); $j++)
{
    $vic1 = mysql_query("SELECT * FROM `hitlist` WHERE `to`='$info->to'");
    $vic = mysql_fetch_object($vic1);
$user1 = mysql_query("SELECT * FROM `users` WHERE `login`='$info->to'");
$user = mysql_fetch_object($user1);
$info->to 		= str_replace("a", "A",$info->to);
$info->to 		= str_replace("b", "B",$info->to);
$info->to 		= str_replace("c", "C",$info->to);
$info->to 		= str_replace("d", "D",$info->to);
$info->to 		= str_replace("e", "E",$info->to);
$info->to 		= str_replace("f", "F",$info->to);
$info->to 		= str_replace("g", "G",$info->to);
$info->to 		= str_replace("h", "H",$info->to);
$info->to 		= str_replace("i", "I",$info->to);
$info->to 		= str_replace("j", "J",$info->to);
$info->to 		= str_replace("k", "K",$info->to);
$info->to 		= str_replace("l", "L",$info->to);
$info->to 		= str_replace("m", "M",$info->to);
$info->to 		= str_replace("n", "N",$info->to);
$info->to 		= str_replace("o", "O",$info->to);
$info->to 		= str_replace("p", "P",$info->to);
$info->to 		= str_replace("q", "Q",$info->to);
$info->to 		= str_replace("r", "R",$info->to);
$info->to 		= str_replace("s", "S",$info->to);
$info->to 		= str_replace("t", "T",$info->to);
$info->to 		= str_replace("u", "U",$info->to);
$info->to 		= str_replace("v", "V",$info->to);
$info->to 		= str_replace("w", "W",$info->to);
$info->to 		= str_replace("x", "X",$info->to);
$info->to 		= str_replace("y", "Y",$info->to);
$info->to 		= str_replace("z", "Z",$info->to);
$waarde = number_format($vic->waarde, 0, '.' , '.');
$schammel				= mysql_query("SELECT * FROM `users` WHERE UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(`online`) < 300 AND `login`='$info->to'");
$online = mysql_fetch_object($schammel);
?>
										<tr>
							<td><img style="cursor:pointer" src="images/icons_gif/page_white_text.gif" onclick="openContract('<?echo$info->to;?>','<?echo$waarde?>','<?echo$vic->from;?>');return false"></td>
							<td align="center"><?if($online->login == $user->login){?><img src="images/icons_gif/status_online.gif" title="Online"><?}?><?if($online->login != $user->login){?><img src="images/icons_gif/status_offline.gif" title="Offline"><?}?></td>
							<td><a href="index.php?a=profile&x=<?echo$user->id;?>"><?echo$user->login;?></a></td>
							<td align="center"><img src="images/icons_gif/money.gif" alt="Prijs"></td>
							<td>&euro; <?echo$waarde;?></td>
							<td align="center"><img src="images/icons_gif/heart.gif" alt="Gled"></td>
							<td><?echo$vic->health;?>%</td>
							<td align="center">
									<img src="images/icons_gif/asterisk_orange.gif" border="0" alt="Anoniem" title="Anoniem">
							</td>
							<td align="center">
<?if($info->anoniem == 1){?>
Ja
<?}
if($info->anoniem == 0){?>
Nee
<?}
?>

							</td>

						</tr>
<?}
$contracten = mysql_num_rows($dbres);
if($contracten == 0){
?>

								<tr>
						<td colspan="10">
							<i>Geen leden gevonden</i>
						</td>
					</tr>
<?}?>
							</table>
		</div>

		<div id="contract_add" style="display:none">
			Hier kan je een prijs op het hoofd van een mede crimineel zetten. De prijs dient minstens &euro; 1.000.000 te bedragen, anders zal hij voor andere criminelen niet de moeite waard zijn. Het geld zal meteen van je rekening worden gehaald, waarna andere banditi een week de tijd hebben om de moord te voltooien, onafhankelijk ervan of het lukt binnen deze tijd of niet zal je je geld niet terug ontvangen.<br>
			<br>
			<table class="mod_list">
				<form method="POST"">
				<tr>
					<td>
						<b>Naam lid:</b>
					</td>
					<td>
						<input type="text" name="name" id="name" size="25">&nbsp;
					</td>
				</tr>
				<tr>
					<td>
						<b>Prijs:</b>
					</td>
					<td>
						<input type="text" name="price" size="15" value="1000000">
					</td>
				</tr>
				<tr>
					<td>
						<b>Anoniem</b>
					</td>
					<td>
						<input type="checkbox" name="anonymous" value="1"> Let op! Dit kost je 2 callcredits!
					</td>
				</tr>
			</table>
			<br><input type="submit" name="create" value="Organiseer moord" class="submit">
			</form>

			<script type="text/javascript" language="javascript">
				function select_user_popup(pUser){
					document.getElementById('name').value = pUser;
					contact_book.close();
				}
			</script>
		</div>

			</td></tr></table>
		</div>

		<table width='100%' cellspacing='2' cellpadding='2'>
			<tr>

				<td class='content_bottom'></td>
			</tr>
		</table>



	<!-- POPUP MESSAGE -->
		<table id="popup_msg" style="position:absolute; left:210px; top:72px;  visibility:hidden; border:1px solid black;" cellspacing="0" cellpadding="0">
			<tr>
				<td style="width:40px; height:100%; background:url('images/message_tut/background_message_left.jpg') repeat-y; cursor:move;">
					&nbsp;
				</td>
				<td width="100%" style="width:445px;  background:#bfbfbf; text-align:center;">
				 	<div style="float:left; width:445px;  background:#bfbfbf; text-align:center;">
					<font style="text-align:left; display:block; border-bottom:2px solid #5a0000; margin-top:5px; margin-bottom:1px; color:#5a0000; font-family:Times new roman; font-weight:bold; font-size: 24px; cursor:move;" id="tutorial_title">WANTED!</font>
					<table width="100%">
						<tr>
							<td valign="top" height="100%">
								<table height="100%" width="100%">
									<tr>
										<td id="tutorial_mission" valign="top">
											<br>
											Mede Criminelen,<br>
											<br>
											Ik wil jullie hierbij mededelen dat ik een prijs uitloof aan de crimineel die de volgende persoon om het leven brengt:<br>
											<br>
											<center><span style="font-size:20px; font-weight:bold;" id="contract_naam">&nbsp;</span></center>
											<br>
											Hierop staat een beloning van:<br>
											<br>
											<center><span style="font-size:20px; font-weight:bold;" id="contract_price">&nbsp;</span></center>
											<br><br>
											Hoogachtend,<br>
											<br>
											<i>
											<span id="contract_signed">&nbsp;</span>
											</i>
											<br>
										</td>
									</tr>
									<tr>
										<td valign="bottom" id="tutorial_links">

										</td>
									</tr>
								</table>
							</td>
							<td align="right" valign="top">
								<img src="images/message_tut/gangster.jpg">
							</td>
						</tr>
					</table>
				</td>
				<td style="width:40px; height:100%; background:url('images/message_tut/background_message_right.jpg') repeat-y; cursor:move;" valign="top">
					<a href="#" onclick="document.getElementById('popup_msg').style.visibility = 'hidden';return false" class="error_ok"><img src="images/message_tut/cross.gif" border="0px" style="margin-left: 13; margin-top:5px; cursor:pointer;"></a>
				</td>
			</tr>
		</table>
  	<!-- /POPUP MESSAGE -->

  	<script language="javascript">
  		function openContract(pNaam,pPrice,pSigned){
  			document.getElementById('contract_naam').innerHTML = pNaam;
  			document.getElementById('contract_price').innerHTML = '&euro; ' + pPrice;
  			document.getElementById('contract_signed').innerHTML = pSigned;
  			document.getElementById('popup_msg').style.visibility = 'visible';

  		}


  		SET_DHTML("popup_msg", "popup_content"+NO_DRAG);
  	</script>





		</div>
	</td>
	</tr>

	</table>
	</td>
<?}}?>
