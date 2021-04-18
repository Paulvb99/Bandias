<?
if($data->rank == 1){
$pr1=100;$pr2=92;$pr3=64;$pr4=56;$pr5=48;$pr6=41;$pr7=30;$pr8=20;$pr9=15;$pr10=3;
}
if($data->rank == 2){
$pr1=100;$pr2=94;$pr3=68;$pr4=59;$pr5=51;$pr6=45;$pr7=32;$pr8=21;$pr9=15;$pr10=4;
}
if($data->rank == 3){
$pr1=100;$pr2=95;$pr3=70;$pr4=60;$pr5=54;$pr6=47;$pr7=33;$pr8=25;$pr9=20;$pr10=5;
}
if($data->rank == 4){
$pr1=100;$pr2=95;$pr3=73;$pr4=63;$pr5=57;$pr6=49;$pr7=39;$pr8=28;$pr9=24;$pr10=6;
}
if($data->rank == 5){
$pr1=100;$pr2=96;$pr3=76;$pr4=68;$pr5=60;$pr6=50;$pr7=40;$pr8=30;$pr9=29;$pr10=7;
}
if($data->rank == 6){
$pr1=100;$pr2=97;$pr3=78;$pr4=69;$pr5=62;$pr6=52;$pr7=44;$pr8=32;$pr9=29;$pr10=8;
}
if($data->rank == 7){
$pr1=100;$pr2=97;$pr3=80;$pr4=71;$pr5=64;$pr6=54;$pr7=46;$pr8=36;$pr9=31;$pr10=9;
}
if($data->rank == 8){
$pr1=100;$pr2=98;$pr3=81;$pr4=73;$pr5=66;$pr6=56;$pr7=47;$pr8=39;$pr9=33;$pr10=9;
}
if($data->rank == 9){
$pr1=100;$pr2=99;$pr3=84;$pr4=75;$pr5=67;$pr6=57;$pr7=48;$pr8=41;$pr9=35;$pr10=10;
}
if($data->rank == 10){
$pr1=100;$pr2=100;$pr3=86;$pr4=77;$pr5=68;$pr6=57;$pr7=50;$pr8=42;$pr9=36;$pr10=11;
}
$code         = str_replace(" ", "",$code); 
if($_POST['captcha'] != "" && $_POST['captcha'] != $_SESSION['captcha']){
$error = 3;
}
	$data2            = mysql_query("SELECT *,UNIX_TIMESTAMP(`werken`) AS `werken`,0 FROM `users` WHERE `login`='$data->login'");
	  $data1            = mysql_fetch_object($data2);
$datijd = $data->werktijd;
	$tijdverschil1        = $data1->werken-3600+$datijd-time();
	if($data1->werken + $datijd < time()){
if($error != 3){
$vord = rand(1,10);
$rang = rand(0,2);
if($_POST['work'] == 1){
$kans = rand(0,100);
$winst = 100;
if($kans <= $pr1){
mysql_query("UPDATE `users` SET `contant`=`contant`+'100',`vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang' WHERE `login`='$data->login'");
$error = niks;
}
else{
$error = 1;
mysql_query("UPDATE `users` SET `vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang' WHERE `login`='$data->login'");
}
}
if($_POST['work'] == 2){
$kans = rand(0,100);
if($kans <= $pr2){
$winst = 110;
mysql_query("UPDATE `users` SET `contant`=`contant`+'110',`vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang' WHERE `login`='$data->login'");
$error = niks;
}
else{
$error = 1;
mysql_query("UPDATE `users` SET `vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang' WHERE `login`='$data->login'");
}
}
if($_POST['work'] == 3){
$kans = rand(0,100);
if($kans <= $pr3){
$winst = 160;
mysql_query("UPDATE `users` SET `contant`=`contant`+'160',`vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang' WHERE `login`='$data->login'");
$error = niks;
}
else{
$error = 1;
mysql_query("UPDATE `users` SET `vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang' WHERE `login`='$data->login'");
}
}
if($_POST['work'] == 4){
$kans = rand(0,100);
if($kans <= $pr4){
$winst = 200;
mysql_query("UPDATE `users` SET `contant`=`contant`+'200',`vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang' WHERE `login`='$data->login'");
$error = niks;
}
else{
$error = 1;
mysql_query("UPDATE `users` SET `vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang' WHERE `login`='$data->login'");
}
}
if($_POST['work'] == 5){
$kans = rand(0,100);
if($kans <= $pr5){
$winst = 250;
mysql_query("UPDATE `users` SET `contant`=`contant`+'250',`vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang' WHERE `login`='$data->login'");
$error = niks;
}
else{
$error = 1;
mysql_query("UPDATE `users` SET `vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang' WHERE `login`='$data->login'");
}
}
if($_POST['work'] == 6){
$kans = rand(0,100);
if($kans <= $pr6){
$winst = 300;
mysql_query("UPDATE `users` SET `contant`=`contant`+'300',`vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang' WHERE `login`='$data->login'");
$error = niks;
}
else{
$error = 1;
mysql_query("UPDATE `users` SET `vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang' WHERE `login`='$data->login'");
}
}
if($_POST['work'] == 7){
$kans = rand(0,100);
if($kans <= $pr7){
$winst = 500;
mysql_query("UPDATE `users` SET `contant`=`contant`+'500',`vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang' WHERE `login`='$data->login'");
$error = niks;
}
else{
$error = 1;
mysql_query("UPDATE `users` SET `vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang' WHERE `login`='$data->login'");
}
}
if($_POST['work'] == 8){
$kans = rand(0,100);
if($kans <= $pr8){
$winst = "1.000";
mysql_query("UPDATE `users` SET `contant`=`contant`+'1000',`vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang' WHERE `login`='$data->login'");
$error = niks;
}
else{
$error = 1;
mysql_query("UPDATE `users` SET `vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang' WHERE `login`='$data->login'");
}
}
if($_POST['work'] == 9){
$kans = rand(0,100);
if($kans <= $pr9){
$winst = "2.000";
mysql_query("UPDATE `users` SET `contant`=`contant`+'2000',`vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang' WHERE `login`='$data->login'");
$error = niks;
}
else{
$error = 1;
mysql_query("UPDATE `users` SET `vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang' WHERE `login`='$data->login'");
}
}
if($_POST['work'] == 10){
$kans = rand(0,100);
if($kans <= $pr10){
$winst = "10.000";
mysql_query("UPDATE `users` SET `contant`=`contant`+'10000',`vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang' WHERE `login`='$data->login'");
$error = niks;
}
else{
$error = 1;
mysql_query("UPDATE `users` SET `vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang' WHERE `login`='$data->login'");
}
}
if($_POST['work'] > 0){
	$data2            = mysql_query("SELECT *,UNIX_TIMESTAMP(`werken`) AS `werken`,0 FROM `users` WHERE `login`='$data->login'");
	  $data1            = mysql_fetch_object($data2);
$datijd = $data->werktijd;
	$tijdverschil1        = $data1->werken-3600+$datijd-time();
	if($data1->werken + $datijd < time() && $error != 3){
mysql_query("UPDATE `users` SET `werken`=NOW() WHERE `login`='$data->login'");
}
else{$error = werken;}
}
}
}
if($_SERVER['REQUEST_METHOD'] != "POST") {
	$data2            = mysql_query("SELECT *,UNIX_TIMESTAMP(`werken`) AS `werken`,0 FROM `users` WHERE `login`='$data->login'");
	  $data1            = mysql_fetch_object($data2);
$datijd = $data->werktijd;
	$tijdverschil1        = $data1->werken-3600+$datijd-time();
	if($data1->werken + $datijd > time()){
   list($uur,$min,$sec)=explode(":",date("H:i:s",$tijdverschil1));
$error = werken;
?>
			<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						Je bent nog te moe om te werken, over <font id="count_timer"></font>&nbsp; heb je weer genoeg energie					</td>
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
	countdown('<?=$data1->werken+$datijd-time()?>','count_timer','index.php?a=work');
</script>		</div>
	</td>
	</tr>

	</table>
	</td>
<?
}
}
if($error == niks){
?>
			<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup" align="center">
				<tr>
					<td>
						Je hebt je werk goed gedaan, je hebt &euro; <?echo$winst;?>,- ontvangen!					</td>
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
	setTimeout("document.location.href='index.php?a=news'",(4000*2));
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
			<table class="div_popup" align="center">
				<tr>
					<td>
						Helaas, je hebt het werk niet goed gedaan! Misschien eerst wat meer ervaring op doen? 					</td>
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
	setTimeout("document.location.href='index.php?a=news'",(4000*2));
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
<?}
if($error == ""){
?>


					<div class="title_bg">
			<div class="title">Werken</div>
		</div>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
			Om bij te verdienen kun je af en toe gaan werken. Hoe meer werkervaring, hoe meer kans dat je je werk goed uitoefent.<br \>
	<br \>
	<form method="POST" onsubmit="return checkError(this)">
                <input type="hidden" name="sel" id="sel" value="">
    		<input type="hidden" name="captcha">
	<table width="97%" border="0" cellspacing="2" cellpadding="2" align="center" class="mod_list">
		<tr>

			<td>&nbsp;</td>
			<td><b>Beroep</b></td>
			<td>&nbsp;</td>
			<td><b>Inkomsten</b></td>
			<td>&nbsp;</td>
			<td><b>Kans</b></td>
		</tr>
				<tr>
			<td>
				<input type="radio" name="work" value="1" onclick="document.getElementById('sel').value = 'true'"><img src="images/werken/bouwvakker.jpg" alt="Snoep stelen van een kind" title="Snoep stelen van een kind"> 

			</td>
			<td>
				Bouwvakker			</td>
			<td width="5%" align="center"><img src="images/icons_gif/money.gif" alt="Winst"></td>
			<td>
				&euro; 100			</td>
			<td width="5%" align="center"><img src="images/icons_gif/chart_bar.gif" alt="Kans"></td>
			<td>
				<?echo$pr1;?>%
			</td>
		</tr>
				<tr>
			<td>
				<input type="radio" name="work" value="2" onclick="document.getElementById('sel').value = 'true'"><img src="images/werken/loopjongen.jpg" alt="Snoep stelen van een kind" title="Snoep stelen van een kind"> 

			</td>
			<td>
				Loopjongen			</td>
			<td width="5%" align="center"><img src="images/icons_gif/money.gif" alt="Winst"></td>
			<td>
				&euro; 110			</td>
			<td width="5%" align="center"><img src="images/icons_gif/chart_bar.gif" alt="Kans"></td>
			<td>
				<?echo$pr2;?>%
			</td>
		</tr>
				<tr>
			<td>
				<input type="radio" name="work" value="3" onclick="document.getElementById('sel').value = 'true'"><img src="images/werken/zakenman.jpg" alt="Snoep stelen van een kind" title="Snoep stelen van een kind"> 

			</td>
			<td>
				Zakenman			</td>
			<td width="5%" align="center"><img src="images/icons_gif/money.gif" alt="Winst"></td>
			<td>
				&euro; 160			</td>
			<td width="5%" align="center"><img src="images/icons_gif/chart_bar.gif" alt="Kans"></td>
			<td>
				<?echo$pr3;?>%
			</td>
		</tr>
				<tr>
			<td>
				<input type="radio" name="work" value="4" onclick="document.getElementById('sel').value = 'true'"><img src="images/werken/dief.jpg" alt="Snoep stelen van een kind" title="Snoep stelen van een kind"> 

			</td>
			<td>
				Dief			</td>
			<td width="5%" align="center"><img src="images/icons_gif/money.gif" alt="Winst"></td>
			<td>
				&euro; 200			</td>
			<td width="5%" align="center"><img src="images/icons_gif/chart_bar.gif" alt="Kans"></td>
			<td>
				<?echo$pr4;?>%
			</td>
		</tr>
				<tr>
			<td>
				<input type="radio" name="work" value="5" onclick="document.getElementById('sel').value = 'true'"><img src="images/werken/pooier.jpg" alt="Snoep stelen van een kind" title="Snoep stelen van een kind"> 

			</td>
			<td>
				Pooier			</td>
			<td width="5%" align="center"><img src="images/icons_gif/money.gif" alt="Winst"></td>
			<td>
				&euro; 250			</td>
			<td width="5%" align="center"><img src="images/icons_gif/chart_bar.gif" alt="Kans"></td>
			<td>
				<?echo$pr5;?>%
			</td>
		</tr>
				<tr>
			<td>
				<input type="radio" name="work" value="6" onclick="document.getElementById('sel').value = 'true'"><img src="images/werken/zakkenroller.jpg" alt="Snoep stelen van een kind" title="Snoep stelen van een kind"> 

			</td>
			<td>
				Zakkenroller			</td>
			<td width="5%" align="center"><img src="images/icons_gif/money.gif" alt="Winst"></td>
			<td>
				&euro; 300			</td>
			<td width="5%" align="center"><img src="images/icons_gif/chart_bar.gif" alt="Kans"></td>
			<td>
				<?echo$pr6;?>%
			</td>
		</tr>
				<tr>
			<td>
				<input type="radio" name="work" value="7" onclick="document.getElementById('sel').value = 'true'"><img src="images/werken/drugsdealer.jpg" alt="Snoep stelen van een kind" title="Snoep stelen van een kind"> 

			</td>
			<td>
				Drugsdealer			</td>
			<td width="5%" align="center"><img src="images/icons_gif/money.gif" alt="Winst"></td>
			<td>
				&euro; 500			</td>
			<td width="5%" align="center"><img src="images/icons_gif/chart_bar.gif" alt="Kans"></td>
			<td>
				<?echo$pr7;?>%
			</td>
		</tr>
				<tr>
			<td>
				<input type="radio" name="work" value="8" onclick="document.getElementById('sel').value = 'true'"><img src="images/werken/directeur.jpg" alt="Snoep stelen van een kind" title="Snoep stelen van een kind"> 

			</td>
			<td>
				Directeur			</td>
			<td width="5%" align="center"><img src="images/icons_gif/money.gif" alt="Winst"></td>
			<td>
				&euro; 1.000			</td>
			<td width="5%" align="center"><img src="images/icons_gif/chart_bar.gif" alt="Kans"></td>
			<td>
				<?echo$pr8;?>%
			</td>
		</tr>
				<tr>
			<td>
				<input type="radio" name="work" value="9" onclick="document.getElementById('sel').value = 'true'"><img src="images/werken/huurmoordenaar.jpg" alt="Snoep stelen van een kind" title="Snoep stelen van een kind"> 

			</td>
			<td>
				Huurmoordenaar			</td>
			<td width="5%" align="center"><img src="images/icons_gif/money.gif" alt="Winst"></td>
			<td>
				&euro; 2.000			</td>
			<td width="5%" align="center"><img src="images/icons_gif/chart_bar.gif" alt="Kans"></td>
			<td>
				<?echo$pr9;?>%
			</td>
		</tr>
				<tr>
			<td>
				<input type="radio" name="work" value="10" onclick="document.getElementById('sel').value = 'true'"><img src="images/werken/hacker.jpg" alt="Snoep stelen van een kind" title="Snoep stelen van een kind"> 

			</td>
			<td>
				Hacker			</td>
			<td width="5%" align="center"><img src="images/icons_gif/money.gif" alt="Winst"></td>
			<td>
				&euro; 10.000			</td>
			<td width="5%" align="center"><img src="images/icons_gif/chart_bar.gif" alt="Kans"></td>
			<td>
				<?echo$pr10;?>%
			</td>
		</tr>
			</table>

	<table width="97%" border="0" cellspacing="2" cellpadding="2" align="center" class="mod_list">
		<tr>
			<td>
				<table width="100%" border="0" cellspacing="2" cellpadding="2" align="center" class="mod_list">
					<tr>
						<td style='text-align:left; padding:5px; width:200px;'>
                        <?
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
?>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		</form>
	</table>
	<br \>
	Vul in het vakje de vierletterige code in. Deze code is ter beveiliging.		</td></tr></table>
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
		if(pForm.sel.value != 'true') errormsg += 'Je hebt geen beroep gekozen!<br>';

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
$_SESSION['mission'] = "Verdien geld door te werken";
}
?>
