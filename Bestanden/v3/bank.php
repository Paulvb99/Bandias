<?
if(isset($_POST['submit'])){
if($_POST['money'] > 0){
if($_POST['submit'] == Storten){
if($data->contant >= $_POST['money']){
if($data->bankleft > 0){
$error = stortniks;
mysql_query("UPDATE `users` SET `bankleft`=`bankleft`-'1',`contant`=`contant`-'{$_POST['money']}',`bank`=`bank`+'{$_POST['money']}' WHERE `login`='$data->login'");
$_SESSION['mission'] = "Stort geld op je bankrekening";
}
else{$error = 4;}
}
else{$error = 1;}
}
if($_POST['submit'] == Halen){
$error = haalniks;
if($data->bank >= $_POST['money']){
mysql_query("UPDATE `users` SET `bank`=`bank`-'{$_POST['money']}',`contant`=`contant`+'{$_POST['money']}' WHERE `login`='$data->login'");
}
else{$error = 2;}
}
}
else{$error = 3;}
}
$bedrag = number_format($_POST['money'], 0, '.', '.');
if($data->bankpas == 0){
?>
			<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup" align="center">
				<tr>
					<td>
						Je hebt nog geen bankpas! Een bankpas kun je kopen in de shop.					</td>
				</tr>
				<tr>
					<td>
						<br><br>
							<a href="index.php?a=shop" class="msg_ok">Klik hier indien je niet automatisch verder gaat.</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<script language="javascript">
	setTimeout("document.location.href='index.php?a=shop'",(4000*2));
</script>
		</div>
	</td>
	</tr>

	</table>
	</td>
<?
$error = geenbankpas;
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
						<b>FOUT!</b><br><br>Je hebt niet genoeg geld op de bank staan om zoveel geld te halen!					</td>
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
							<a href="index.php?a=bank" class="msg_ok">Klik hier indien je niet automatisch verder gaat.</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<script language="javascript">
	setTimeout("document.location.href='index.php?a=bank'",(4000*2));
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
						Je hebt &euro;<?echo$bedrag;?>,- van de bank gehaald 					</td>
				</tr>
				<tr>
					<td>
						<br><br>
							<a href="index.php?a=bank" class="msg_ok">Klik hier indien je niet automatisch verder gaat.</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<script language="javascript">
	setTimeout("document.location.href='index.php?a=bank'",(4000*2));
</script>
		</div>
	</td>
	</tr>

	</table>
	</td>
<?}if($error == ""){?>


					<div class="title_bg">
			<div class="title">Bank</div>
		</div>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
<?
if($data->vipdays > 0){
$rente = 5;
}
else{
$rente = 3;
}
if($data->dagenrente > 0){
$rente = 10;
}
?>
			Welkom in de bank!<br />
	<br />
	Je hebt de mogelijkheid contant geld op de bank te zetten. Je kan het op dat moment niet uitgeven, tenzij je het weer van je bank haalt. Je ontvangt ook rente over het geld dat op je bank staat!<br />
	<br />
	Je ontvangt op dit moment <b><?echo$rente;?>% rente</b>. De standaard rente is 3%, met een betaald account is het 5% en als je in de callcredits shop de extra rente mogelijkheid koopt ontvang je maarliefst 10% rente!<br />
	<br />


	<table cellspacing="2" cellpadding="2" class="mod_list">
	<tr>
		<td width="6%" style="text-align:center;"><img src="images/icons_gif/coins.gif" alt="Geld (contant)" border="0"></td>
		<td width="20%">Geld (contant)</td>
		<td><b title="Klik hier om dit bedrag in te vullen" style="cursor:pointer" onclick="document.getElementById('money').value = '<?echo$data->contant;?>'">&euro; <?echo$data->contant;?></td>
	</tr>
	<tr>
		<td width="6%" style="text-align:center;"><img src="images/icons_gif/money.gif" alt="Geld (bank)" border="0"></td>
		<td width="20%">Geld (bank)</td>
		<td><b title="Klik hier om dit bedrag in te vullen" style="cursor:pointer" onclick="document.getElementById('money').value = '<?echo$data->bank;?>'">&euro; <?echo$data->bank;?></td>
	</tr>
		<tr>
		<td width="6%" style="text-align:center;"><img src="images/icons_gif/information.gif" alt="Aantal keer opnemen" border="0"></td>
		<td colspan="2">Je kunt vandaag nog <b><?echo$data->bankleft;?></b> keer geld storten.</td>

	</tr>
	<tr>
		<td width="6%" style="text-align:center;"><img src="images/icons_gif/money_euro.gif" alt="Geld opnemen of storten" border="0"></td>
		<td colspan="2">
			<form method="POST">
			<input type="text" id="money" name="money" maxlength="25" style="width: 200px" class="input">
			<input type="submit" name="submit" value="Storten" class="mod_submit">
			<input type="submit" name="submit" value="Halen" class="mod_submit">
		</td>
		</form>
	</tr>
		</table>
		</td></tr></table>
		</div>

		<table width='100%' cellspacing='2' cellpadding='2'>
			<tr>

				<td class='content_bottom'></td>
			</tr>
		</table>
	</td>
	</tr>

	</table>
	</td>
<?}?>
