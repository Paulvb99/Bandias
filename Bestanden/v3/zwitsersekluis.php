<?
if($data->zwitserse < 1){
$error = 5;
}
if(isset($_POST['submit'])){
if($_POST['money'] > 0){
if($_POST['submit'] == Storten){
if($data->zwitsersestorten >= $_POST['money']){
if($data->zwitsersegeld+$_POST['money'] <= 500000000){
if($data->contant >= $_POST['money']){
$error = stortniks;
mysql_query("UPDATE `users` SET `contant`=`contant`-'{$_POST['money']}',`zwitsersegeld`=`zwitsersegeld`+'{$_POST['money']}',`zwitsersestorten`=`zwitsersestorten`-'{$_POST['money']}' WHERE `login`='$data->login'");
}
else{$error = 1;}
}
else{$error = 7;}
}
else{$error = 6;}
}
if($_POST['submit'] == Halen){
$error = haalniks;
if($data->zwitsersehalen >= $_POST['money']){
if($data->zwitsersegeld >= $_POST['money']){
mysql_query("UPDATE `users` SET `zwitsersegeld`=`zwitsersegeld`-'{$_POST['money']}',`contant`=`contant`+'{$_POST['money']}',`zwitsersehalen`=`zwitsersehalen`-'{$_POST['money']}' WHERE `login`='$data->login'");
}
else{$error = 2;}
}
else{$error = 4;}
}
}
else{$error = 3;}
}
if($error == 5){?>
			<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup" align="center">
				<tr>
					<td>
						Je hebt nog geen Zwitserse bankrekening geopend en kan dus nog geen geld storten of opnemen. Een Zwitserse bankrekening kun je openen in de shop!<br><br>Via een je Zwitserse bankrekening kun je geld wegsluizen. Niemand kan namelijk het geld zien dat op deze rekening staat! Tevens krijg je elke dag 2% rente over maximaal € 500 miljoen.					</td>
				</tr>
				<tr>
					<td>
						<br><br>
							<a href="index.php?a=news"msg_ok">Klik hier indien je niet automatisch verder gaat.</a>
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
if($error == 2){
?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Je hebt niet genoeg geld op je rekening staan om zoveel geld te storten!					</td>
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
if($error == 4){
?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Je kan geen geld meer uit je rekening halen					</td>
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
						<b>FOUT!</b><br><br>Je kan geen geld meer op je rekening zetten					</td>
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
if($error == 7){
?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Je wilt meer dan 500 miljoen storten, en dat kan niet!					</td>
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
						Je hebt &euro;<?echo$_POST['money'];?>,- op je rekening gestort 					</td>
				</tr>
				<tr>
					<td>
						<br><br>
							<a href="index.php?a=zwitsersekluis" class="msg_ok">Klik hier indien je niet automatisch verder gaat.</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<script language="javascript">
	setTimeout("document.location.href='index.php?a=zwitsersekluis'",(4000*2));
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
						Je hebt &euro;<?echo$_POST['money'];?>,- van je rekening gehaald 					</td>
				</tr>
				<tr>
					<td>
						<br><br>
							<a href="index.php?a=zwitsersekluis" class="msg_ok">Klik hier indien je niet automatisch verder gaat.</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<script language="javascript">
	setTimeout("document.location.href='index.php?a=zwitsersekluis'",(4000*2));
</script>
		</div>
	</td>
	</tr>

	</table>
	</td>
<?}if($error == ""){?>

					<div class="title_bg">
			<div class="title">Zwitserse rekening</div>
		</div>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
			Welkom in de Zwitserse bank!<br>
	<br>
	Via de je Zwitserse bankrekening kun je geld wegsluizen. Niemand kan namelijk het geld zien dat op deze rekening staat! Je kunt elke dag maximaal &euro; 5 miljoen storten en &euro; 50 miljoen opnemen. Op je Zwitserse rekening krijg je elke dag 2% rente over maximaal &euro; 500 miljoen.<br>
<?$storten = number_format($data->zwitsersestorten, 0, '.', '.');$halen = number_format($data->zwitsersehalen, 0, '.', '.');$contant = number_format($data->contant, 0, '.', '.');$bank = number_format($data->zwitsersegeld, 0, '.', '.');?>
	<br>
	<table border="0px" cellspacing="2px" cellpadding="2px" class="mod_list" width="97%">
		<tr>
			<td align="center" width="5%"><img src="images/icons_gif/coins.gif" border="0px"></td>
			<td width="25%">Geld (contant)</td>
			<td><b title="Klik hier om dit bedrag in te vullen" style="cursor:pointer" onclick="document.getElementById('money').value = '<?echo$data->contant;?>'">&euro; <?echo$contant;?></td>
		</tr>

		<tr>
			<td align="center"><img src="images/icons_gif/money.gif" border="0px"></td>
			<td>Geld (Zwitserse bank)</td>
			<td><b title="Klik hier om dit bedrag in te vullen" style="cursor:pointer" onclick="document.getElementById('money').value = '<?echo$data->zwitsersegeld;?>'">&euro; <?echo$bank;?></b></td>
		</tr>

		<tr>
			<td align="center"><img src="images/icons_gif/information.gif" align="top"></td>
			<td colspan=2> <font color="black">Je mag nog <b>&euro;<?echo$storten;?></b> storten en nog <b>&euro;<?echo$halen;?></b> halen</font></td>
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
