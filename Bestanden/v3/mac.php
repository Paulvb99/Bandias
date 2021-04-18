<?php
$dbres2				= mysql_query("SELECT * FROM `config` WHERE `ding`='1'");
$data2				= mysql_fetch_object($dbres2);
  if($data2->mac == "Ja"){
?>
<div class="title_bg">
			<div class="title">Kantine</div>
		</div>
<?  if($data->vipdays < 1){$error = 1;?>
<p><b>FOUT!</b><br><br>Je moet een <span class="Geel"><b>betaald account</b></span> hebben om toegang te krijgen tot het Mac Donalds	
						<br><br>
													<a href="#" onclick="history.go(-1); return false" class="error_ok">Klik hier om terug te keren.</a>
											</p>
<? }else{

print "
<table widt=\"650px\">
<tr bgcolor=\"green\" height=\"20\">
<td width=200><b>Artikel</td>
<td width=75><b>Leven %</td>
<td width=125><b>Credits</td>
<td width=75><b>Voorraad</td>
<td><b></td>
</tr>";
$rsel = mysql_query("SELECT * FROM `mac` ORDER BY `prijs`");
while($res = mysql_fetch_object($rsel)) {
print "<tr><td>$res->naam</td><td>$res->energie %</td><td>$res->prijs</td><td>";
  if($res->voorraad < 250) {
print "<font color=\"red\">$res->voorraad</font>";
} else 
  if($res->voorraad > 500) {
print "<font color=\"lightgreen\">$res->voorraad</font>";
}
	print "</td><td><A href=index.php?a=mac&buy=$res->id><img border=\"0\" class=\"ico\" src=\"images/icons_gif/money_add.gif\" alt=\"\"></a></td></tr>";	}	print "</table>";    

if(isset($_GET['buy'])) {
$buy = $_GET['buy'];
$arm1 = mysql_query("SELECT * FROM `mac` WHERE `id`='$buy'");
while($arm = mysql_fetch_object($arm1)) {	
if (empty ($arm->id)) {
print "<p>Dit is geen eten. Ga terug naar <a href=index.php?a=mac>Mac Donalds</a>.</p>";
}
else if ($arm->prijs > $data->callcredits) {
print "<p>Je hebt niet genoeg call credits.</p>";
}
else if ($data->health >= 100) {
print "<p>Je kan niet meer als 100% leven hebben.</p>";
}
else if ($arm->voorraad <= 0) {
print "<p>De voorraad van dit product is op.</p>";
}
else if ($data->health+$arm->energie > 100) {
print "<p>Je hebt een $arm->naam gekocht, deze koste <b>$arm->prijs</b> credits. Hierdoor heb je  <b>$arm->energie</b>% leven erbij!</p>";
mysql_query("UPDATE `users` SET `callcredits`=`callcredits`-$arm->prijs,`health`='100' WHERE `login`='$data->login'");
mysql_query("UPDATE `mac` SET `voorraad`=`voorraad`-1 WHERE `id`='$buy'");
} else {
print "<p>Je hebt een $arm->naam gekocht, deze koste <b>$arm->prijs</b> credits. Hierdoor heb je  <b>$arm->energie</b>% leven erbij!</p>";
mysql_query("UPDATE `users` SET `callcredits`=`callcredits`-$arm->prijs,`health`=`health`+$arm->energie WHERE `login`='$data->login'");
mysql_query("UPDATE `mac` SET `voorraad`=`voorraad`-1 WHERE `id`='$buy'");}
}
}
}
}
?>
</table>