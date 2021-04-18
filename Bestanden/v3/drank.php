<div class="title_bg">
			<div class="title">Drank shop</div>
		</div>
  <?
  $query = mysql_query("SELECT * FROM stad WHERE `stad`='$data->city'") or die (mysql_error());
  $code 		= str_replace(" ", "",$code);
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
$drank = mysql_fetch_object($query);
$time = time();
$dranktijd = (time() + 3600);
$aantal = $_POST['aantal'];
if ($data->xp < 10) { $units = 0; $kan = 1; }
elseif ($data->xp < 20) { $units = 1; $kan = 2; }
elseif ($data->xp < 50) { $units = 2; $kan = 2; }
elseif ($data->xp < 150) { $units = 5; $kan = 2; }
elseif ($data->xp < 500) { $units = 7; $kan = 3;  }
elseif ($data->xp < 1000) { $units = 10; $kan = 3; }
elseif ($data->xp < 2000) { $units = 15;  $kan = 3;}
elseif ($data->xp < 3000) { $units = 20; $kan = 4; }
elseif ($data->xp < 4500) { $units = 25; $kan = 4; }
elseif ($data->xp < 6000) { $units = 30; $kan = 4; }
elseif ($data->xp < 8000) { $units = 35; $kan = 5; }
elseif ($data->xp < 11000) { $units = 45; $kan = 5; }
elseif ($data->xp < 15000) { $units = 50; $kan = 5; }
elseif ($data->xp < 20000) { $units = 60; $kan = 6; }
elseif ($data->xp >= 20000) { $units = 70; $kan = 6; }
$kans = rand(1, $kan);
$prijs = $drank->drankp;
$totaal = $data->drank+$aantal;
$dragen = $units-$data->drank;
$winst = $aantal*$prijs;
$xp = $aantal;
if(isset($_POST['koop'])) {
if ($aantal < 1) { 
	    echo "Er zijn niet zoveel units."; 
}
elseif ($drank->drank < $aantal) {
	    echo "Er zijn niet zoveel units."; 
}
elseif ($winst > $data->contant) {
	    echo "Je hebt niet genoeg geld op zak.";
}
elseif ($totaal > $units) {
	    echo "Je mag maar $units units dragen.";
}
elseif ($kans == 1) { 
echo "Je bent gearresteerd.";
$tijd = rand(2,5);
$time = $tijd*60;
mysql_query("UPDATE `users` SET `gevangenis`='$time',`baktijd`=NOW() WHERE `id`='$data->id'");
}
	elseif (!Empty($aantal)) {
		mysql_connect($mysql_host,$mysql_user,$mysql_pass); 
		mysql_select_db($mysql_database); 
	    echo "Je hebt $aantal units gekocht voor &euro; $winst."; 
		if ($data->drankt - time() > 0) {
mysql_query("UPDATE `users` SET `xp`=`xp`+20 WHERE `login`='{$data->login}'") or die (mysql_error());
mysql_query("UPDATE `users` SET `drank`=`drank`+$aantal WHERE `login`='{$data->login}'") or die (mysql_error());
mysql_query("UPDATE `users` SET `contant`=`contant`-$winst WHERE `login`='{$data->login}'") or die (mysql_error());
mysql_query("UPDATE `stad` SET `drank`=`drank`-$aantal WHERE `stad`='{$data->city}'") or die (mysql_error());
}
else{
mysql_query("UPDATE `users` SET `xp`=`xp`+20 WHERE `login`='{$data->login}'") or die (mysql_error());
mysql_query("UPDATE `users` SET `drank`=`drank`+$aantal,`drankt`=FROM_UNIXTIME($dranktijd) WHERE `login`='{$data->login}'") or die (mysql_error());
mysql_query("UPDATE `users` SET `contant`=`contant`-$winst WHERE `login`='{$data->login}'") or die (mysql_error());
mysql_query("UPDATE `stad` SET `drank`=`drank`-$aantal WHERE `stad`='{$data->city}'") or die (mysql_error());
}
}
	}
elseif(isset($_POST['verkoop'])) {
if ($aantal < 1) {
	    echo "Zoveel units heb je niet."; 
}
elseif ($data->drank < $aantal) {
	    echo "Zoveel units heb je niet."; 
}
elseif ($kans == 1) { 
echo "Je bent gearresteerd.";
$tijd = rand(2,5);
$time = $tijd*60;
mysql_query("UPDATE `users` SET `gevangenis`='$time',`baktijd`=NOW() WHERE `id`='$data->id'");

}
	elseif (!Empty($aantal)) {
		mysql_connect($mysql_host,$mysql_user,$mysql_pass); 
		mysql_select_db($mysql_database); 
			mysql_query("UPDATE `stad` SET `drank`=`drank`+$aantal WHERE `stad`='{$data->stad}'") or die (mysql_error());
			mysql_query("UPDATE `users` SET `drank`=`drank`-$aantal WHERE `login`='{$data->login}'") or die (mysql_error());
			mysql_query("UPDATE `users` SET `contant`=`contant`+$winst WHERE `login`='{$data->login}'") or die (mysql_error());
	    echo "Je hebt $aantal units verkocht voor &euro; $winst.";
		$_SESSION['mission'] = "Verkoop een unit drank";
			} 
	}
?>
<form method='post'>
In de drank shop kan je drank kopen en verkopen. Hierdoor kan je een hoop geld vangen, als je niet eindigd in de gevangenis natuurlijk..
<br />De prijs op dit moment in deze stad is <span class="Geel">&euro; <? echo $prijs; ?> </span> per unit. Dit is tevens de verkoopprijs op dit moment.
<br /><br />
<div id="contentHeader2"><h2>Statistieken</h2></div>
<?
$bank12		= mysql_query("SELECT * FROM `stad` WHERE `stad`='1'");
	$bank1		= mysql_fetch_object($bank12);
	$bank22		= mysql_query("SELECT * FROM `stad` WHERE `stad`='2'");
	$bank2		= mysql_fetch_object($bank22);
	$bank32		= mysql_query("SELECT * FROM `stad` WHERE `stad`='3'");
	$bank3		= mysql_fetch_object($bank32);
	$bank42		= mysql_query("SELECT * FROM `stad` WHERE `stad`='4'");
	$bank4		= mysql_fetch_object($bank42);
	$bank52		= mysql_query("SELECT * FROM `stad` WHERE `stad`='5'");
	$bank5		= mysql_fetch_object($bank52);
	$bank62		= mysql_query("SELECT * FROM `stad` WHERE `stad`='6'");
	$bank6		= mysql_fetch_object($bank62);
	?>
<table width="500px">
<tr><td bgcolor="green" class="subTitle"><b>Stad</b></td><td bgcolor="green"><b>Prijs per unit</b></td></tr>
<tr><td class="mainTxt" width=50%>Turijn</td><td>&euro; <?=$bank1->drankp?></td></tr>
<tr><td class="mainTxt" width=50%>Palermo</td><td>&euro; <?=$bank2->drankp?></td></tr>
<tr><td class="mainTxt" width=50%>Milaan</td><td>&euro; <?=$bank3->drankp?></td></tr>
<tr><td class="mainTxt" width=50%>Rome</td><td>&euro; <?=$bank4->drankp?></td></tr>
<tr><td class="mainTxt" width=50%>Catania</td><td>&euro; <?=$bank5->drankp?></td></tr>
<tr><td class="mainTxt" width=50%>Corleone</td><td>&euro; <?=$bank6->drankp?></td></tr>
</table>
<div id="contentHeader2"><h2>Kopen / Verkopen</h2></div>
<p>
Je hebt<span class="Geel"> <? echo $data->drank; ?></span> units bij je. En je kan nog <span class="Geel"><? echo $dragen; ?></span> units dragen. In deze stad zijn nog <span class="Geel"><? echo $drank->drank; ?></span> units beschikbaar.<br>
<br /><br />
Elk uur veranderen te koersen, dit kan goed uitvallen maar ook slecht.
  <table width="500px">
	<tr><td width=100 align=left><b>Aantal</b></td><td><input type='text' name='aantal' value='' size='20' maxlength=2></td></tr>
  <tr><td>
		<?
$first = rand(1, 26);
$second = rand(1, 26);
$third = rand(1, 26);
$fourth = rand(1, 26);
$captcha = ("$first  $second  $third  $fourth");
include("lib/captcha/captcha.php?code=$captcha");
                        ?><img src="lib/captcha/captcha.php?code=<?echo$captcha;
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
                                                  ?>" border="1"></td>
                                                  <td><input type="text" name="captcha"></td></tr>
	<tr><td></td><td align="left">

						<td><input type='submit' name='koop' value=' Koop '  class='mod_submit'></td><td><input type='submit' name='verkoop' value=' Verkoop ' class='mod_submit'></td></tr>
</table>
</form>

<script language="javascript">
	function checkError(pForm){
		var errormsg = '';

		if(pForm.captcha.value.length != 4) errormsg += 'Je hebt geen geldige code ingevuld!<br>';
		if(pForm.sel.value != 'true') errormsg += 'Je hebt geen activiteit gekozen!<br>';

		if(errormsg != ''){
			showError(errormsg);
			return false;
		}
		return true;
	}
</script>
</table>
