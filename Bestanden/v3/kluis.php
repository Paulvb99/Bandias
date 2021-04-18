<?
$max = $data->kluis*50000000;
$max2 = number_format($max, 0, '.', '.');
mysql_query("UPDATE `users` SET `online`=NOW() WHERE `login`='{$data->login}'");
if($_GET['x'] == delsafemode){
mysql_query("UPDATE `users` SET `safe`='0' WHERE `login`='$data->login'");
}
if($data->kluis < 1){
$error = 5;
}
if($_POST['money']+$data->kluisgeld > 50000000*$data->kluis){
$error = 6;
}
if($error != 6){
if(isset($_POST['submit'])){
if($_POST['money'] > 0){
if($_POST['submit'] == Storten){
if($data->contant >= $_POST['money']){
$error = stortniks;
mysql_query("UPDATE `users` SET `contant`=`contant`-'{$_POST['money']}',`kluisgeld`=`kluisgeld`+'{$_POST['money']}' WHERE `login`='$data->login'");
}
else{$error = 1;}
}
if($_POST['submit'] == Halen){
$error = haalniks;
if($data->kluisgeld >= $_POST['money']){
mysql_query("UPDATE `users` SET `kluisgeld`=`kluisgeld`-'{$_POST['money']}',`contant`=`contant`+'{$_POST['money']}' WHERE `login`='$data->login'");
}
else{$error = 2;}
}
}
else{$error = 3;}
}
}
$bedrag = number_format($_POST['money'], 0, '.', '.');
if($error == 5){
?>
			<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup" align="center">
				<tr>
					<td>
						Je hebt nog geen kluis gekocht en kan dus nog geen geld storten of opnemen. Een kluis kun je kopen in de shop! De kluis heeft als voordeel dat je geld hier altijd veilig staat, ook al wordt je aangevallen en vermoord. Tevens kan niemand zien hoeveel geld je in je kluis hebt liggen. Een kluis kan maximaal € 50.000.000,- bevatten. Je krijgt echter geen rente over het geld dat in je kluis ligt.					</td>
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
	setTimeout("document.location.href='index.php?a=news'",(15000*2));
</script>
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
						<b>FOUT!</b><br><br>Je hebt niet genoeg geld contant staan om zoveel geld te storten!					</td>
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
						<b>FOUT!</b><br><br>Dit is geen geldig getal!					</td>
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
						<b>FOUT!</b><br><br>Je hebt niet genoeg geld in de kluis zitten om zoveel geld te halen!					</td>
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
if($error == 6){
?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Je mag maar &euro;50.000.000,- per kluis hebben!					</td>
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
if($error == 4){
?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Je mag vandaag niet meer storten					</td>
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
if($error == stortniks){
?>
			<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup" align="center">
				<tr>
					<td>
						Je hebt &euro;<?echo$bedrag;?>,- op de bank gestort 					</td>
				</tr>
				<tr>
					<td>
						<br><br>
							<a href="index.php?a=kluis" class="msg_ok">Klik hier indien je niet automatisch verder gaat.</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<script language="javascript">
	setTimeout("document.location.href='index.php?a=kluis'",(4000*2));
</script>
		</div>
	</td>
	</tr>

	</table>
	</td>
<?}
if($error == haalniks){
?>
			<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup" align="center">
				<tr>
					<td>
						Je hebt &euro;<?echo$bedrag;?>,- uit je kluis gehaald 					</td>
				</tr>
				<tr>
					<td>
						<br><br>
							<a href="index.php?a=kluis" class="msg_ok">Klik hier indien je niet automatisch verder gaat.</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<script language="javascript">
	setTimeout("document.location.href='index.php?a=kluis'",(4000*2));
</script>
		</div>
	</td>
	</tr>

	</table>
	</td>
<?}if($error == ""){
$contant 		= str_replace(".", "",$data->contant);
$kluis 		= str_replace(".", "",$data->kluisgeld);
?>



<div class="title_bg">
			<div class="title">Kluis</div>
		</div>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
			Welkom in je persoonlijke kluis. De kluis heeft als voordeel dat je geld hier altijd veilig staat, ook al wordt je aangevallen en vermoord. Tevens kan niemand zien hoeveel geld je in je kluis hebt liggen. Een kluis kan maximaal &euro; 50.000.000,- bevatten. Je krijgt echter geen rente over het geld dat in je kluis ligt.<br>
	<br>
	<table border="0px" cellspacing="2px" cellpadding="2px" class="mod_list" width="97%">
		<tr>
			<td align="center" width="5%"><img src="images/icons_gif/coins.gif" border="0px"></td>
			<td width="25%">Geld (contant)</td>
			<td><b title="Klik hier om dit bedrag in te vullen" style="cursor:pointer" onclick="document.getElementById('money').value = '<?echo$contant;?>'">&euro; <?echo$data->contant;?></td>
		</tr>

		<tr>
			<td align="center"><img src="images/icons_gif/money.gif" border="0px"></td>
			<td>Geld (kluis)</td>
			<td><b title="Klik hier om dit bedrag in te vullen" style="cursor:pointer" onclick="document.getElementById('money').value = '<?echo$kluis;?>'">&euro; <?echo$data->kluisgeld;?></td>
		</tr>

		<tr>
			<td align="center"><img src="images/icons_gif/information.gif" align="top"></td>
			<td colspan=2> <font color="black">Het geld moet je <b>contant op zak</b> hebben om de kluis te vullen en je mag er maximaal <b><?echo$max2;?></b> in stoppen.</font></td>
		</tr>

		<tr>
			<td align="center"><img src="images/icons_gif/money_euro.gif" border="0px"></td>
			<td colspan=2>
			<form name="form1" method="post">
			<input type="text" name="money" id="money" maxlength="10" style="width: 200px" class="input">
			<input type="submit" name="submit" value="Storten" class="mod_submit">
			<input type="submit" name="submit" value="Halen" class="mod_submit">

			</td>
		</tr></form>
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
