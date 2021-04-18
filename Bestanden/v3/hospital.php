<?
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
if(isset($_POST['ziekenhuis'])){
if($error != 3){
$verschil = 100-$data->health;
$bedrag = $verschil*500;
$prijs = number_format($bedrag, 0, '.', '.');
if($data->bank >= $bedrag){
$error = niks;
mysql_query("UPDATE `users` SET `bank`=`bank`-'$bedrag',`health`='100' WHERE `id`='$data->id'");
mysql_query("UPDATE `hitlist` SET `health`='100' WHERE `to`='$data->login'");
}else{$error = 1;}
}
}
if($error == niks){
$_SESSION['mission'] = "Genees jezelf in het ziekenhuis";
?>

			<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup" align="center">
				<tr>
					<td>
						De doktoren hebben je wonden behandeld en je bent weer helemaal in orde, voor de behandeling is &euro;<?echo$prijs;?> van je rekening gehaald				</td>
				</tr>
				<tr>
					<td>
						<br><br>
							<a href="index.php?a=hospital" class="msg_ok">Klik hier indien je niet automatisch verder gaat.</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
<script language="javascript">
	setTimeout("document.location.href='index.php?a=hospital'",(3000*2));
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
if($error == 1){
?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Je hebt niet genoeg geld op de bank om je te laten behandelen.					</td>
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
			<div class="title">Ziekenhuis</div>
		</div>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
			<table>
		<tr>
<?
$verschil = 100-$data->health;
$bedrag = $verschil*500;
$prijs = number_format($bedrag, 0, '.', '.');
?>
			<td valign="top">
				Welkom in het ziekenhuis!<br /><br />
				In het ziekenhuis kun je je gezondheid weer boven peil krijgen. De kosten zijn &euro;500,- per procent.<br /><br />
				Je hebt op dit moment een gezondheid van <b><?echo$data->health;?>%</b>.<br /><br />

<?if($data->health < 100){?>								Er is op dit moment ruimte voor je in het ziekenhuis. Klik op de knop om je op te laten nemen. De kosten zullen dan &euro;<?echo$prijs;?> bedragen!<br /><br />

				<table align="center">
				<form method='post' onsubmit="return checkError(this)">
					<tr>
						<td style='text-align:center; padding:5px; width:200px;'>
<?
$first = rand(1, 26);
$second = rand(1, 26);
$third = rand(1, 26);
$fourth = rand(1, 26);
$captcha = ("$first  $second  $third  $fourth");
include("lib/captcha/captcha.php?code=$captcha");
                        ?><img src="lib/captcha/captcha.php?code=<?echo$captcha;?>" border="1" align="left"><?
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
?>
				  		</td>
					</tr>
					<tr>
						<td style='text-align:center; padding:5px; width:200px;'>
							<input type="text" name="captcha" class="dinput">
						</td>
					</tr>
					<tr>
						<td align="center">
							<input type='submit' class="submit" name='ziekenhuis' value='Ga naar het ziekenhuis!'>
						</td>
					</tr>
				</form>
				</table>
							</td>
<?}
else{
?>
								De dokters kunnen je niet helpen in je huidige situatie...							</td>
<?}?>
			<td>
				<img src='images/ziekenhuis.jpg' width='250px' height='180px' align='right'>
			</td>
		</tr>
	</table>
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
<?}?>
