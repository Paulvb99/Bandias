<div class="title_bg">
			<div class="title">Ripdeal</div>
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



  $data2            = mysql_query("SELECT *,UNIX_TIMESTAMP(`ripdeal`) AS `ripdeal`,0 FROM `users` WHERE `login`='$data->login'");
      $data1            = mysql_fetch_object($data2);

	$datijd = $data->riptijd;
	$tijdverschil1        = $data1->ripdeal-3600+$datijd-time();
	if($data1->ripdeal + $datijd > time()){
   list($uur,$min,$sec)=explode(":",date("H:i:s",$tijdverschil1));
	$countdown = $data1->ripdeal+$datijd-time();
?>De politie zit nog achter je aan, over <font id="count_timer"></font>&nbsp; is de kust weer veilig			
						<br><br>
						<a href="#" onclick="history.go(-1); return false" class="error_ok">Klik hier om terug te keren.</a>
                        <script language="javascript">
	countdown('<?=$countdown?>','count_timer','index.php?a=ripdeal');
</script>	
                        <?

    }else{
	


	
	
	
	
	
	
	
	if (isset($_POST['submitfiat'])) {
	if($kansfiat != 5){
	
 $pro = $data->health/5;
$leven = rand(0,$pro);
$tijd = "5";
$time = $tijd*60;
mysql_query("UPDATE `users` SET `gevangenis`='$time',`baktijd`=NOW() WHERE `id`='$data->id'");
print "Het is niet gelukt 50kg wiet te stelen. Je bent gepakt door de politie. En je kreeg een gevangenis straf van <b>$tijd</b> minuten.";

    }}
	
	
	
	
	
	if (isset($_POST['submitford'])) {
	if($kansford != 5){
 $pro = $data->health/5;
$leven = rand(0,$pro);
$tijd = "10";
$time = $tijd*60;
mysql_query("UPDATE `users` SET `gevangenis`='$time',`baktijd`=NOW() WHERE `id`='$data->id'");
print "Het is niet gelukt 100kg wiet te stelen. Je bent gepakt door de politie. En je kreeg een gevangenis straf van <b>$tijd</b> minuten.";
    }}
	
	
	
	
	
	
	
	
	if (isset($_POST['submitcitroen'])) {
	if($kanscitroen != 5){
     $pro = $data->health/5;
$leven = rand(0,$pro);
$tijd = "20";
$time = $tijd*60;
mysql_query("UPDATE `users` SET `gevangenis`='$time',`baktijd`=NOW() WHERE `id`='$data->id'");
print "Het is niet gelukt 250kg wiet te stelen. Je bent gepakt door de politie. En je kreeg een gevangenis straf van <b>$tijd</b> minuten.";
    }}




/* ------------------------- */ ?>

 <FORM METHOD=post ACTION="">

<table width="500px">
	<tr>
    	<td>
<p>
<img src="images/crimes/wietplant.jpg"><br>
<b>50Kg wiet rippen</b><br />
Als de ripdeal lukt krijg je  <span class="Geel">20000 geld</span> erbij, en 25 wiet!!
<br /><br /> Als het mislukt, dan zit je voor 5 minuten in de gevangenis.
</p>
</td>
</tr>
<tr>
<td>

<INPUT name="submitfiat" type="submit" VALUE="Rip 50Kg Wiet" class="mod_submit">
</td>
</tr>
<tr>
<td>
<p>
<img src="images/crimes/wietplant.jpg"><br>
<b>100Kg wiet rippen</b><br />
Als de ripdeal lukt krijg je <span class="Geel">50000 geld</span> erbij, en 50 wiet!!
<br /><br /> Als het mislukt, dan zit je voor 10 minuten in de gevangenis.</p>
</td>
</tr>
<tr>
<td>
<INPUT name="submitford" type="submit" VALUE="Rip 100Kg Wiet" class="mod_submit"><br>
</td>
</tr>
<tr>

<tr>
<td>
<p>
<img src="images/crimes/wietplant.jpg"><br>
<b>250Kg wiet rippen</b><br />
Als de ripdeal lukt krijg je <span class="Geel">85000 geld</span> erbij, en 125 wiet!!
<br /><br /> Als het mislukt, dan zit je voor 20 minuten in de gevangenis.</p>
</td>
</tr>
<tr>
<td>
<INPUT name="submitcitroen" type="submit" VALUE="Rip 250Kg Wiet" class="mod_submit">
</td>
  </tr>
  </table>

<?PHP


if (isset($_POST['submitfiat']) && $kansfiat == 5) {
  mysql_query("UPDATE `users` SET `ripdeal`=NOW(), `riptijd`='60', `rankvord`=`rankvord`+3 WHERE `login`='$data->login'");
mysql_query("UPDATE `users` SET `contant`=`contant`+'20000', `nederwiet`=`nederwiet`+'25' WHERE `login`='$data->login'"); 
?>
  <p>Je ziet politie bewaker aankomen, maar je vlucht optijd weg.<br>
	de ripdeal is geslaagt, je krijgt 20000 erbij + 25 wiet>
   </p>
   <?
}

if (isset($_POST['submitford']) && $kansford == 5) {
  mysql_query("UPDATE `users` SET `ripdeal`=NOW(), `riptijd`='180', `rankvord`=`rankvord`+5 WHERE `login`='$data->login'");
mysql_query("UPDATE `users` SET `contant`=`contant`+'50000', `nederwiet`=`nederwiet`+'50' WHERE `login`='$data->login'"); 
?><p>Je ziet politie bewaker aankomen, maar je vlucht optijd weg.<br>
	de ripodeal is geslaagt, je krijgt 50000 erbij + 50 wiet</p>
    <?
}

if (isset($_POST['submitcitroen']) && $kanscitroen == 5) {
  mysql_query("UPDATE `users` SET `ripdeal`=NOW(), `riptijd`='320', `rankvord`=`rankvord`+10 WHERE `login`='$data->login'");
mysql_query("UPDATE `users` SET `contant`=`contant`+'150000', `nederwiet`=`nederwiet`+'125' WHERE `login`='$data->login'"); 
?><p>Je ziet politie bewaker aankomen, maar je vlucht optijd weg.<br>
	de ripdeal is geslaagt, je krijgt 85000 erbij + 125 wiet</p>
    <?
}
}
?>

</div>

  <div id="contentBoxfooter">&nbsp;</div>
  </div>
</table>