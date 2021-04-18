							<div class="title_bg">
			<div class="title">Landgoed</div>
		</div>
<body style="margin: 0px;">
<?

$rank = Array("Geen","Caravan","Houten Huis","Luxe Berg Villa","Villa","Boshuis","Luxe Bunker","Luxe Strand Villa","Gangster Paradise","Japanse Villa","Mediteraanse Villa","Pool Paradise","Landgoed","Tropische Villa","Fantasy Home");
$rank = $rank[$data->woning];

?>
<center>
<form method="POST">
<table width=50% align="center">
<tr><td align=center class=subtitle colspan="4"><b>Woning</b></TD></tr>
<?
$referer = $_SERVER['HTTP_REFERER'];
$this_url = "http://".$_SERVER['HTTP_HOST'].$_SERVER["REQUEST_URI"];
if ($_POST & ($referer == $this_url)) {

if(isset($_POST['koop'])){
$woning = $_POST['woning'];
$rank = Array("Geen","Caravan","Houten Huis","Luxe Berg Villa","Villa","Boshuis","Luxe Bunker","Luxe Strand Villa","Gangster Paradise","Japanse Villa","Mediteraanse Villa","Pool Paradise","Landgoed","Tropische Villa","Fantasy Home");
$rank = $rank[$woning];
$ran = Array("0","10000","30000","50000","90000","100000","150000","200000","250000","300000","400000","500000","700000","900000","1100000");
$contant = $ran[$woning];
if($data->contant < $contant){
echo "<tr><td class=mainTxt colspan=\"4\"><center><font color=red><center>Je hebt niet genoeg contant voor dit huis!!</font></center></TD></tr>";
}
else{
mysql_query("UPDATE `users` SET `woning`='$woning' WHERE `login`='$data->login'");
mysql_query("UPDATE `users` SET `contant`=`contant`-'$contant' WHERE `login`='$data->login'");
echo "<tr><td class=mainTxt colspan=\"4\"><center>Je hebt een nieuw huis gekocht!<br><br><img src=\"images/items/$rank.jpg\"></center></TD></tr>";
}
}
}
if($_GET['verkoop'] == ja){
if($data->woning == 0){
echo "<tr><td class=mainTxt colspan=\"4\"><center>Je hebt nog geen huis in bezit!</center></TD></tr>";
}
else{
$ran = Array("0","10000","30000","50000","90000","100000","150000","200000","250000","300000","400000","500000","700000","900000","1100000");
$bank = $ran[$data->woning];
$contant = $bank/100*75;
$ba         = number_format($contant,0,",",".");
echo "<tr><td class=mainTxt colspan=\"4\"><center>Je hebt je huis verkocht voor $ba</center></TD></tr>";
mysql_query("UPDATE `users` SET `contant`=`contant`+'$contant',`woning`='0' WHERE `login`='$data->login'");
} }

if($data->woning >= 1){
echo "<tr><td class=mainTxt colspan=\"4\"><center>Je woont momenteel in een $rank<br><br><img src=\"images/items/$rank.jpg\"><br><br><a href=index.php?a=woningverkoop><b>Klik hier om hem te verkopen</b></a></center></TD></tr>";
}
elseif($data->woning == 0){

?>
<link rel="stylesheet" type="text/css" href="<? echo $sitelink;?>/layout/layout<?php echo $page->layout; ?>/css/css.css">
<tr><td class=mainTxt colspan="4">Als je een woning verkoopt krijg je  0% van de aankoopsprijs terug!</TD></tr>
<tr><td class=mainTxt colspan=2 width=50%><img src='images/items/Caravan.jpg'></td><td class=mainTxt colspan=2 width=50%><img src='images/items/Houten Huis.jpg'></td></tr>
<tr><td class=mainTxt width=25%><input name=woning type=radio value=1> Caravan</td><td class=mainTxt>&euro;<b>10.000</b></td><td class=mainTxt width=25%><input name=woning type=radio value=2> Houten Huis</td><td class=mainTxt>&euro;<b>30.000</b></td></tr>

<tr><td class=mainTxt colspan=2 width=50%><img src='images/items/Luxe Berg Villa.jpg'></td><td class=mainTxt colspan=2 width=50%><img src='images/items/Villa.jpg'></td></tr>
<tr><td class=mainTxt width=25%><input name=woning type=radio value=3> Luxe Berg Villa</td><td class=mainTxt>&euro;<b>50.000</b></td><td class=mainTxt width=25%><input name=woning type=radio value=4> Villa</td><td class=mainTxt>&euro;<b>90.000</b></td></tr>
<tr><td class=mainTxt colspan=2 width=50%><img src='images/items/Boshuis.jpg'></td><td class=mainTxt colspan=2 width=50%><img src='images/items/Luxe Bunker.jpg'></td></tr>
<tr><td class=mainTxt width=25%><input name=woning type=radio value=5> Boshuis</td><td class=mainTxt>&euro;<b>100.000</b></td><td class=mainTxt width=25%><input name=woning type=radio value=6> Luxe Bunker</td><td class=mainTxt>&euro;<b>150.000</b></td></tr>

<tr><td class=mainTxt colspan=2 width=50%><img src='images/items/Luxe Strand Villa.jpg'></td><td class=mainTxt colspan=2 width=50%><img src='images/items/Gangster Paradise.jpg'></td></tr>
<tr><td class=mainTxt width=25%><input name=woning type=radio value=7> Luxe Strand Villa</td><td class=mainTxt>&euro;<b>200.000</b></td><td class=mainTxt width=25%><input name=woning type=radio value=8> Gangster Paradise</td><td class=mainTxt>&euro;<b>250.000</b></td></tr>
<tr><td class=mainTxt colspan=2 width=50%><img src='images/items/Japanse Villa.jpg'></td><td class=mainTxt colspan=2 width=50%><img src='images/items/Mediteraanse Villa.jpg'></td></tr>
<tr><td class=mainTxt width=25%><input name=woning type=radio value=9> Japanse Villa</td><td class=mainTxt>&euro;<b>300.000</b></td><td class=mainTxt width=25%><input name=woning type=radio value=10> Mediteraanse Villa</td><td class=mainTxt>&euro;<b>400.000</b></td></tr>

<tr><td class=mainTxt colspan=2 width=50%><img src='images/items/Pool Paradise.jpg'></td><td class=mainTxt colspan=2 width=50%><img src='images/items/Landgoed.jpg'></td></tr>
<tr><td class=mainTxt width=25%><input name=woning type=radio value=11> Pool Paradise</td><td class=mainTxt>&euro;<b>500.000</b></td><td class=mainTxt width=25%><input name=woning type=radio value=12> Landgoed</td><td class=mainTxt>&euro;<b>700.000</b></td></tr>
<tr><td class=mainTxt colspan=2 width=50%><img src='images/items/Tropische Villa.jpg'></td><td class=mainTxt colspan=2 width=50%><img src='images/items/Fantasy Home.jpg'></td></tr>
<tr><td class=mainTxt width=25%><input name=woning type=radio value=13> Tropische Villa</td><td class=mainTxt>&euro;<b>900.000</b></td><td class=mainTxt width=25%><input name=woning type=radio value=14> Fantasy Home</td><td class=mainTxt>&euro;<b>1.100.000</b></td></tr>

    <tr>
      <td colspan="4" class="mainTxt"><div align="center"><input name="koop" type="submit" id="koop" value="Koop Woning" class="mod_submit"></div></td>
    </tr>
<? } ?> </table>
</form>
</center>
		
		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
		<table width="100%" class="mod_list" cellspacing="2" cellpadding="2">
	</table>
		</td></tr></table>
		</div>

		<table width='100%' cellspacing='2' cellpadding='2'>
			<tr>
		
				<td class='content_bottom'></td>
			</tr>
		</table>
		<br>		</div>
	</td>
	</tr>

	</table>
	</td>