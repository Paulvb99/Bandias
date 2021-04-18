<div class="title_bg">
			<div class="title">Winkel overval</div>
		</div>
<?php 
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

  
$kansfiat       = rand(1, 5);
$kansford       = rand(1, 10);
$kanscitroen    = rand(1, 20);

$profiat			= rand(20, 40);
$proford			= rand(15, 30);
$procitroen		    = rand(10, 20);



  $data2            = mysql_query("SELECT *,UNIX_TIMESTAMP(`winkel`) AS `winkel`,0 FROM `users` WHERE `login`='$data->login'");
      $data1            = mysql_fetch_object($data2);

	$datijd = $data->winkeltijd;
	$tijdverschil1        = $data1->winkel-3600+$datijd-time();
	if($data1->winkel + $datijd > time()){
   list($uur,$min,$sec)=explode(":",date("H:i:s",$tijdverschil1));
	$countdown = $data1->winkel+$datijd-time();
?>De politie zit nog achter je aan, over <font id="count_timer"></font>&nbsp; is de kust weer veilig			
						<br><br>
						<a href="#" onclick="history.go(-1); return false" class="error_ok">Klik hier om terug te keren.</a>
                        <script language="javascript">
	countdown('<?=$countdown?>','count_timer','index.php?a=winkeloverval');
</script>	
                        <?

    }else{
	


	
	
	
	
	
	
	
	if (isset($_POST['submitfiat'])) {
	if($kansfiat != 5){
	
 $pro = $data->health/5;
$leven = rand(0,$pro);
$tijd = "2";
$time = $tijd*60;
mysql_query("UPDATE `users` SET `gevangenis`='$time',`baktijd`=NOW() WHERE `id`='$data->id'");
print "Het is niet gelukt de Mac Donalds te overvallen. Je bent gepakt door de politie. En je kreeg een gevangenis straf van <b>$tijd</b> minuten.";

    }}
	
	
	
	
	
	if (isset($_POST['submitford'])) {
	if($kansford != 5){
 $pro = $data->health/5;
$leven = rand(0,$pro);
$tijd = "5";
$time = $tijd*60;
mysql_query("UPDATE `users` SET `gevangenis`='$time',`baktijd`=NOW() WHERE `id`='$data->id'");
print "Het is niet gelukt de Konmar te overvallen. Je bent gepakt door de politie. En je kreeg een gevangenis straf van <b>$tijd</b> minuten.";
    }}
	
	
	
	
	
	
	
	
	if (isset($_POST['submitcitroen'])) {
	if($kanscitroen != 5){
     $pro = $data->health/5;
$leven = rand(0,$pro);
$tijd = "10";
$time = $tijd*60;
mysql_query("UPDATE `users` SET `gevangenis`='$time',`baktijd`=NOW() WHERE `id`='$data->id'");
print "Het is niet gelukt de Mediamarkt te overvallen. Je bent gepakt door de politie. En je kreeg een gevangenis straf van <b>$tijd</b> minuten.";
    }}




/* ------------------------- */ ?>

 <FORM METHOD=post ACTION="">

<table width="500px">
	<tr>
    	<td>
<p>
<img src="images/macdonalds.jpg"><br />
<b>Mac Donalds overvallen</b><br />
Als het lukt om de Mac Donalds te overvallen krijg je <span class="Geel">&euro; 50,000,-</span> op je bank erbij!
<br /><br /> Als het mislukt, dan zit je voor 2 minuten in de gevangenis.
</p>
</td>
</tr>
<tr>
<td>

<INPUT name="submitfiat" type="submit" VALUE="Overval de Mac Donalds" class="mod_submit">
</td>
</tr>
<tr>
<td>
<p>
<img src="images/konmar.jpg"><br />
<b>Konmar overvallen</b><br />
Als het lukt om de Konmar te overvallen krijg je <span class="Geel">&euro; 100,000,-</span> op je bank erbij!
<br /><br /> Als het mislukt, dan zit je voor 5 minuten in de gevangenis.</p>
</td>
</tr>
<tr>
<td>
<INPUT name="submitford" type="submit" VALUE="Overval de Konmar" class="mod_submit"><br>
</td>
</tr>
<tr>

<tr>
<td>
<p>
<img src="images/mediamarkt.jpg"><br />
<b>Mediamarkt overvallen</b><br />
Als het lukt om de Konmar te overvallen krijg je <span class="Geel">&euro; 150,000,-</span> op je bank erbij!
<br /><br /> Als het mislukt, dan zit je voor 10 minuten in de gevangenis.</p>
</td>
</tr>
<tr>
<td>
<INPUT name="submitcitroen" type="submit" VALUE="Overval de Mediamarkt" class="mod_submit">
</td>
  </tr>
  </table>

<?PHP


if (isset($_POST['submitfiat']) && $kansfiat == 5) {
  mysql_query("UPDATE `users` SET `winkel`=NOW(), `winkeltijd`='60', `rankvord`=`rankvord`+3 WHERE `login`='$data->login'");
mysql_query("UPDATE `users` SET `bank`=`bank`+'50000' WHERE `login`='$data->login'"); 
?>
  <p>Je ziet politie bewaker aankomen, maar je vlucht optijd weg.<br>
	Je hebt de Mac Donalds overvallen, je krijgt &euro; 50.000,- op je bank gestort.>
   </p>
   <?
}

if (isset($_POST['submitford']) && $kansford == 5) {
  mysql_query("UPDATE `users` SET `winkel`=NOW(), `winkeltijd`='180', `rankvord`=`rankvord`+5 WHERE `login`='$data->login'");
mysql_query("UPDATE `users` SET `bank`=`bank`+'100000' WHERE `login`='$data->login'"); 
?><p>Je ziet politie bewaker aankomen, maar je vlucht optijd weg.<br>
	Je hebt de Konmar overvallen, je krijgt &euro; 100.000,- op je bank gestort </p>
    <?
}

if (isset($_POST['submitcitroen']) && $kanscitroen == 5) {
  mysql_query("UPDATE `users` SET `winkel`=NOW(), `winkeltijd`='320', `rankvord`=`rankvord`+10 WHERE `login`='$data->login'");
mysql_query("UPDATE `users` SET `bank`=`bank`+'150000' WHERE `login`='$data->login'"); 
?><p>Je ziet politie bewaker aankomen, maar je vlucht optijd weg.<br>
	Je hebt de Mediamarkt overvallen, je krijgt &euro; 150.000,- op je bank gestort </p>
    <?
}
}
?>

</div>

  <div id="contentBoxfooter">&nbsp;</div>
  </div>
</table>