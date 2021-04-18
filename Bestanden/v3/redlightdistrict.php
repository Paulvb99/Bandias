<?php
$dbres				= mysql_query("SELECT * FROM `[redlight]` WHERE `id`='{$clan->id}'");
$clan = mysql_fetch_object($dbres);
$kost2	                  	= array("","7.50","9.50","15.50","4.59","25.75","3.99");
$kost                		= $kost2[$data->city];
$land1	                  	= array("","Turijn","Palermo","Milaan","Rome","Catania","Corleone");
$land                 		= $land1[$data->city];
$geld                		= $data->hoeren;
$geld2                                      = $geld*5;
$geld3               		= $data->hoerenwerkend;
$geld4                                      = $geld3*15;
$geld5                                      = $geld4+$geld2;
$inkomen                                   = $geld5;

?>
<table class=table cellspacing=0 cellpadding=2 colspan="2" width="60%" align=center>
	<tr>
<div class="title_bg">
			<div class="title">Redlight district</div>
		</div>

 <tr><td colspan="1" class=maintxt><br />Hier kun je Hoeren Pimpen.<br>
Wat zijn Hoeren?<br>
Dit zijn als het ware prostituee die voor jou werkt, je kunt ramen huren en hierdoor zulen ze ook meer verdienen!
<br>
<?= $data->hoeren; ?> Hoeren in jouw bezit. <br>
Jou inkomen: €<?= $inkomen; ?>.

<table class=table cellspacing=0 cellpadding=2 colspan="2" width="60%" align=center>
<tr>
 	 <td colspan="2" class=subtitle>Optie's</td>
<?
if($data->pimpdiploma == 0){
print <<<ENDHTML
<tr><td colspan="2" class=maintxt>
</strong><center><img src="images/icons/light_pass.gif" width="16" height="16"><strong><a href="index.php?a=redlightdistrict&show=pimpdiploma" name="30">Haal pimp Diploma</a></strong></td></tr>
ENDHTML;
}
elseif($data->pimpdiploma == 1){
print <<<ENDHTML
<table class=table cellspacing=0 cellpadding=2 colspan="2" width="60%" align=center>
<tr><td colspan="1" class=maintxt>
<img src="images/icons/light_raam.gif" width="16" height="16"><a href="index.php?a=redlightdistrict&show=raam"><strong>Ramen Huren</strong></a></left>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;
<td colspan="1" class=maintxt><img src="images/icons/light_werk.gif" width="16" height="16"><strong><a href="index.php?a=redlightdistrict&show=zetachter">Laten Werken</a></strong>
<tr><td colspan="1" class=maintxt>
<img src="images/icons/light_smack.gif" width="16" height="16"><strong><a href="index.php?a=redlightdistrict&show=pimp">Hoeren pimpen</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;
</strong><td colspan="1" class=maintxt><img src="images/icons/light_bussines.gif" width="16" height="16"><strong><a href="index.php?a=redlightdistrict&show=info" name="30">Hoeren Bussines</a></strong></td></tr>
ENDHTML;
}
?>
<?
if($_GET['show'] == "raam")
{
if($_POST['junk']) {
$bieden = $_POST['bieden'];
$bieden = htmlspecialchars($_POST['bieden']);
$bieden = substr($_POST['bieden'],0,11);
$kost1 = $kost*$_POST['bieden'];
if($data->contant < $kost1) {
print "  <tr><td class=\"mainTxt\" colspan=\"2\"><font color=\"red\"><center>Je hebt niet genoeg geld!</font></td></tr>\n";
}
elseif($bieden < 0 OR !preg_match('/^[0-9]{1,15}$/',$_POST['bieden'])) {
print "  <tr><td class=\"mainTxt\" colspan=\"2\"><center>Hé, Abuse werkt hier helaas niet voor jou.</td></tr>\n";
}
elseif($bieden < 1) {
print "  <tr><td class=\"mainTxt\" colspan=\"2\"><font color=\"red\"><center>Hé, Koop wel meer dan 1 Raam! </font></td></tr>\n";
}
else {
$landz = $bieden*1;
mysql_query("UPDATE `[redlight]` SET `ramen`=`ramen`-'$bieden' WHERE `land`='{$data->land}'")or die(mysql_error());
mysql_query("UPDATE `users` SET `contant`=`contant`-'$kost1',`ramen`=`ramen`+'$landz' WHERE `login`='{$data->login}'") or die(mysql_error());
print "  <tr><td class=\"mainTxt\" colspan=\"2\"><font color=\"red\"><center>Je hebt $bieden Ramen Gekocht voor €{$kost1},-</font></td></tr>\n";
}
}
print <<<ENDHTML
<table class=table cellspacing="0" cellpadding="0"  colspan="2" width="60%" align=center>
<tr><td class="subtitle" colspan="2" >De Stad</tr></td>
<tr><td class="mainTxt" colspan="2">
<left>
Hoi  $data->login,
U bent momenteel in $land,
in de stad $land zijn er nog $redlicht->ramen ramen vrij!
Huur hier je ramen, zet daarna je hoeren aan het werk!
Waarmee je geld kunt verdienen!

<tr><td class="mainTxt" colspan="1" >Bitches zonder raam: <td class="mainTxt" colspan="1">$data->hoeren
<tr><td class="mainTxt"  colspan="1" >Bitches achter raam: <td class="mainTxt" colspan="1">$data->hoerenwerkend
<tr><td class="subtitle"  colspan="2" >Huur ramen</tr></td>
<tr><td class="mainTxt"  colspan="2" >
<left>
De ramen die hier verhuurd worden, kosten €<b>$kost</b>,- per raam.<br>
<FORM METHOD=post ACTION="">
<center>
<b>Aantal Ramen:<br><input name="bieden" value=""><br>
<INPUT type=submit  name="junk" type="submit" VALUE="Huur" class="mod_submit"><br><br>
</FORM>
  </table></td></tr>
ENDHTML;
}
?>
<?
if($_GET['show'] == "zetachter")
{
  $dbres                                = mysql_query("SELECT * FROM `[redlight]` WHERE `land`='{$data->land}'");
    $redlicht                               = mysql_fetch_object($dbres);
if($_POST['zetachter']) {
$raam = $_POST['raam'];
$raam = htmlspecialchars($_POST['raam']);
$raam = substr($_POST['raam'],0,11);
$kost1 = $kost*$_POST['raam'];
if($data->hoeren < $raam) {
print "  <tr><td class=\"mainTxt\" colspan=\"2\"><font color=\"red\"><center>He, pimp ff wat hoeren a.u.b!</font></td></tr>\n";
}
elseif($raam < 0 OR !preg_match('/^[0-9]{1,15}$/',$_POST['raam'])) {
print "  <tr><td class=\"mainTxt\" colspan=\"2\"><center>Hé, Abuse werkt hier helaas niet voor jou.</td></tr>\n";
}
elseif($raam < 1) {
print "  <tr><td class=\"mainTxt\" colspan=\"2\"><font color=\"red\"><center>Hé, plaats wel meer dan een hoer achter de ramen!</font></td></tr>\n";
}
else {
$landz = $raam*1;
mysql_query("UPDATE `[redlight]` SET `ramen`=`ramen`-'$bieden'")or die(mysql_error());
mysql_query("UPDATE `users` SET `hoeren`=`hoeren`-'$landz' WHERE `login`='{$data->login}'") or die(mysql_error());
mysql_query("UPDATE `users` SET `contant`=`contant`-'$kost1',`hoerenwerkend`=`hoerenwerkend`+'$landz' WHERE `login`='{$data->login}'") or die(mysql_error());
print "  <tr><td class=\"mainTxt\" colspan=\"2\"><font color=\"red\"><center>Je hebt {$raam} hoeren achter {$data->ramen} ramen gezet!</font></td></tr>\n";
}
}
print <<<ENDHTML
<table class=table cellspacing="0" cellpadding="0"  colspan="2" width="60%" align=center>
<tr><td class="subtitle" colspan="2" >De Wallen</tr></td>
<tr><td class="mainTxt" colspan="2">
<left>
Hoi  $data->login,
U bent momenteel in $land,
in de stad $land zijn er nog $redlicht->ramen ramen vrij!
Achter deze ramen kun je hoeren zetten! Waarmee je geld kunt verdienen!

<tr><td class="mainTxt" colspan="1" >Bitches zonder raam: <td class="mainTxt" colspan="1">$data->hoeren
<tr><td class="mainTxt"  colspan="1" >Bitches achter raam: <td class="mainTxt" colspan="1">$data->hoerenwerkend
<tr><td class="subtitle"  colspan="2" >Hoeren Laten Werken</tr></td>
<tr><td class="mainTxt"  colspan="2" >
<center>
Zet hier je hoeren achter een raam, <br>laat ze lekker geld voor jou verdienen!
<FORM METHOD=post ACTION="">
<center>
<b>Hoeren:<br><input name="raam" value=""><br>
<INPUT type=submit  name="zetachter" type="submit" VALUE="UitVoeren" class="mod_submit"><br><br>
</FORM>
  </table></td></tr>
ENDHTML;
}
?>
<?
if($_GET['show'] == "pimp")
{
if(!empty($_POST['zoek'])) {
$rand=rand(1,69);
$gevonden=rand(1,65);
$tijd=rand(1,70);
if($data->hoerpimped > 0){
print "<tr><td colspan=3 class=\"mainTxt\"><center><font color=red>Je spieren doen pijn, je hebt dit uur al bitches gezocht.</font></b></font></td></tr>\n";
}
elseif($rand > 60) {
 mysql_query("UPDATE `users` SET `hoeren`=hoeren+'$gevonden' WHERE `login`='$data->login'");
 mysql_query("UPDATE `users` SET `hoerpimped`='1' WHERE `login`='$data->login'");
print " <tr><td colspan=3 class=\"mainTxt\" colspan=\"2\"><center><b><font color=green><b>Je plukte $gevonden hoeren van de straat!</b></font></td></tr>\n";
}
elseif($rand > 50){
 mysql_query("UPDATE `users` SET `hoeren`=hoeren+'$gevonden' WHERE `login`='$data->login'");
 mysql_query("UPDATE `users` SET `hoerpimped`='1' WHERE `login`='$data->login'");
print "<tr><td colspan=3 class=\"mainTxt\" colspan=\"2\"><center>Woo, je was bijna geklaard door de politie, je hebt $gevonden hoeren van de straat geplukt.</b></font></td></tr>\n";
}
elseif($rand > 40){
 mysql_query("UPDATE `users` SET `hoerpimped`='1' WHERE `login`='$data->login'");
print "<tr><td colspan=3 class=\"mainTxt\" colspan=\"2\"><center>Het was niet slim, om de politie te slaan, je overleeft het maar je hebt wel een gebroken knie opgelopen.</b></font></td></tr>\n";
}
elseif($rand > 30){
 mysql_query("UPDATE `users` SET `hoerpimped`='1' WHERE `login`='$data->login'");
print "<tr><td colspan=3 class=\"mainTxt\" colspan=\"2\"><center>Run motherfucker, zodra je de politie zag, smeerde je hem als een haas.</b></font></td></tr>\n";
}
elseif($rand > 20){
mysql_query("UPDATE `users` SET `hoerpimped`='1' WHERE `login`='$data->login'");
mysql_query("UPDATE `users` SET `steel`=NOW(),`steeltijd`='$tijd'  WHERE `login`='{$data->login}'");
print "<tr><td colspan=3 class=\"mainTxt\" colspan=\"2\"><center>Aangehouden, je zit in het gevangenis voor $tijd sec.</b></font></td></tr>\n";
}
}
print <<<ENDHTML
<form method=post>
<table class=table cellspacing=0 cellpadding=2 colspan="2" width="60%" align=center>
   <tr><td class=subtitle colspan="2" align=center> Pimp Hoeren</tr></td>
 <tr><td class=maintxt colspan="2" align=center>
Hier kun je Hoeren pimpen!
hoeren pimpen kan 1x per uur, de hoeren die je gepimpt hebt, kun je achter ramen zetten, deze ramen kosten echter wel geld!
Succes met Pimpen
 <tr><td class=maintxt colspan="2" align=center>
<br>
<input type=submit name=zoek value="Hoeren pimpen" size=200 class=mod_submit></form>
  </table></td></tr>
ENDHTML;
}
?>
 <?
if($_GET['show'] == "info")
$gegevens = mysql_query("SELECT * FROM `[redlight]`") or die(mysql_error());
while($rij = mysql_fetch_object($gegevens)) {
$prijs = number_format($rij->maximum,0,",",".");

if ($rij->land == 1){
$land = "Turijn";
$landprijs =  "7.50";
}
if ($rij->land == 2){
$land = "Palermo";
$landprijs =  "9.50";
}
if ($rij->land == 3){
$land = "Milaan";
$landprijs =  "15.50";
}
if ($rij->land == 4){
$land = "Rome";
$landprijs =  "4.59";
}
if ($rij->land == 5){
$land =  "Catania";
$landprijs =  "25.75";
}
if ($rij->land == 6){
$land =  "Corleone";
$landprijs =  "3.99";
}

  $dbres                = mysql_query("SELECT * FROM `[redlight]`");
    $aantal                = mysql_fetch_object($dbres);

echo("
<tr><td  class=\"tabel\" witdh=\"60%\" align=\"center\">
<tr><td width=\"2%\" class=\"mainTxt\">Stad: $land</td>
<td width=\"2%\" class=\"mainTxt\">Prijs: €$landprijs</td> ");
}
?>
</table>
<?
if($_GET['show'] == "pimpdiploma")
{
echo"<table class=table cellspacing=0 cellpadding=2 colspan=2 width=60% align=center>";
if($data->hoermissie == 0){
echo"  <TR>
    <TD align=middle class=mainTxt colSpan=3><img src='images/pimp/1.jpg' height=200 width=300></TD></TR>
  <TR>
    <TD class=mainTxt colspan=3 align=center><B>Vraag:</B>  Waar staat P.I.M.P voor?</TD></TR>
  <TR>
    <TD vAlign=top class=mainTxt><a href=index.php?a=redlightdistrict&x=pimp1a>Player in main Plaza</a></TD>
   <TD vAlign=top class=mainTxt><a href=index.php?a=redlightdistrict&x=pimp1b>Police in my Panty's</a></TD>
   <TD vAlign=top class=mainTxt><a href=index.php?a=redlightdistrict&x=pimp1c>Peering in my pant's</a></TD>
    ";
     }
    if($data->hoermissie == 1){
echo"  <TR>
    <TD align=middle class=mainTxt colSpan=3><img src='images/pimp/2.jpg' height=200 width=300></TD></TR>
  <TR>
    <TD class=mainTxt colspan=3 align=center><B>Vraag:</B>  Wie wordt afgebeeld op de afbeelding?</TD></TR>
  <TR>
    <TD vAlign=top class=mainTxt><a href=index.php?a=redlightdistrict&x=pimp2a>Een Pimp</a></TD>
   <TD vAlign=top class=mainTxt><a href=index.php?a=redlightdistrict&x=pimp2b>Een Homo</a></TD>
   <TD vAlign=top class=mainTxt><a href=index.php?a=redlightdistrict&x=pimp2c>Een Politieman</a></TD>
    ";
     }
if($data->hoermissie == 2){
echo"  <TR>
    <TD align=middle class=mainTxt colSpan=3><img src='images/pimp/3.jpg' height=200 width=300></TD></TR>
  <TR>
    <TD class=mainTxt colspan=3 align=center><B>Vraag:</B>  Wie is een P.I.M.P?</TD></TR>
  <TR>
    <TD vAlign=top class=mainTxt><a href=index.php?a=redlightdistrict&x=pimp3a>Pooier</a></TD>
   <TD vAlign=top class=mainTxt><a href=index.php?a=redlightdistrict&x=pimp3b>MetroSeksuel</a></TD>
   <TD vAlign=top class=mainTxt><a href=index.php?a=redlightdistrict&x=pimp3c>TraveStiet</a></TD>
    ";
     }
if($data->hoermissie == 3){
echo"  <TR>
    <TD align=middle class=mainTxt colSpan=3><img src='images/pimp/4.jpg' height=200 width=300></TD></TR>
  <TR>
    <TD class=mainTxt colspan=3 align=center><B>Vraag:</B>  Is een P.I.M.P zijn een beroep?</TD></TR>
  <TR>
    <TD vAlign=top class=mainTxt><a href=index.php?a=redlightdistrict&x=pimp4a>Ja</a></TD>
   <TD vAlign=top class=mainTxt><a href=index.php?a=redlightdistrict&x=pimp4b>Nee</a></TD>
    ";
     }
     }
echo"<table width=60% align=center>";

if($_GET['x'] == "pimp1a")
{
if($data->hoermissie != 0){
echo "<tr><td class=mainTxt colspan=2 align=center>Wat doe je hier ??";
}else{
echo "<tr><td class=mainTxt colspan=2 align=center>Vraag <b>1</b> is <font color=green><b>goed</b></font>. Nog <b>3</b> te gaan.";
echo "<script language=\"javascript\">setTimeout('window.location=\"index.php?a=redlightdistrict&show=pimpdiploma\"',1300)</script>";
mysql_query("UPDATE `users` SET `hoermissie`=`hoermissie`+'1' WHERE `login`='{$data->login}'");
}
}
if($_GET['x'] == "pimp1b")
{
if($data->hoermissie!= 0){
echo "<tr><td class=mainTxt colspan=2 align=center>Wat doe je hier ??";
}else{
echo "<tr><td class=mainTxt colspan=2 align=center>Vraag <b>1</b> is <font color=red><b>fout</b></font>. Het koste je €<b>50</b>, Je kan het altijd nog een keer proberen.";
echo "<script language=\"javascript\">setTimeout('window.location=\"index.php?a=redlightdistrict&show=pimpdiploma\"',1300)</script>";
mysql_query("UPDATE `users` SET `contant`=`contant`-'50' WHERE `login`='{$data['login']}'");
}
}
if($_GET['x'] == "pimp1c")
{
if($data->hoermissie != 0){
echo "<tr><td class=mainTxt colspan=2 align=center>Wat doe je hier ??";
}else{
echo "<tr><td class=mainTxt colspan=2 align=center>Vraag <b>1</b> is <font color=red><b>fout</b></font>. Het koste je €<b>50</b>, Je kan het altijd nog een keer proberen.";
echo "<script language=\"javascript\">setTimeout('window.location=\"index.php?a=redlightdistrict&show=pimpdiploma\"',1300)</script>";
mysql_query("UPDATE `users` SET `contant`=`contant`-'50' WHERE `login`='{$data['login']}'");
}
}


if($_GET['x'] == "pimp2b")
{
if($data->hoermissie != 1){
echo "<tr><td class=mainTxt colspan=2 align=center>Wat doe je hier ??";
}else{
echo "<tr><td class=mainTxt colspan=2 align=center>Vraag <b>2</b> is <font color=red><b>fout</b></font>. Het koste je €<b>50</b>, Je kan het altijd nog een keer proberen.";
echo "<script language=\"javascript\">setTimeout('window.location=\"index.php?a=redlightdistrict&show=pimpdiploma\"',1300)</script>";
mysql_query("UPDATE `users` SET `contant`=`contant`-'50' WHERE `login`='{$data['login']}'");
}
}
if($_GET['x'] == "pimp2a")
{
if($data->hoermissie != 1){
echo "<tr><td class=mainTxt colspan=2 align=center>Wat doe je hier ??";
}else{
echo "<tr><td class=mainTxt colspan=2 align=center>Vraag <b>2</b> is <font color=green><b>goed</b></font>. Nog <b>2</b> te gaan.";
echo "<script language=\"javascript\">setTimeout('window.location=\"index.php?a=redlightdistrict&show=pimpdiploma\"',1300)</script>";
mysql_query("UPDATE `users` SET `hoermissie`=`hoermissie`+'1' WHERE `login`='{$data->login}'");
}
}
if($_GET['x'] == "pimp2c")
{
if($data->hoermissie != 1){
echo "<tr><td class=mainTxt colspan=2 align=center>Wat doe je hier ??";
}else{
echo "<tr><td class=mainTxt colspan=2 align=center>Vraag <b>2</b> is <font color=red><b>fout</b></font>. Het koste je €<b>50</b>, Je kan het altijd nog een keer proberen.";
echo "<script language=\"javascript\">setTimeout('window.location=\"index.php?a=redlightdistrict&show=pimpdiploma\"',1300)</script>";
mysql_query("UPDATE `users` SET `contant`=`contant`-'50' WHERE `login`='{$data['login']}'");
}
}
if($_GET['x'] == "pimp3c")
{
if($data->hoermissie != 2){
echo "<tr><td class=mainTxt colspan=2 align=center>Wat doe je hier ??";
}else{
echo "<tr><td class=mainTxt colspan=2 align=center>Vraag <b>3</b> is <font color=red><b>fout</b></font>. Het koste je €<b>50</b>, Je kan het altijd nog een keer proberen.";
echo "<script language=\"javascript\">setTimeout('window.location=\"index.php?a=redlightdistrict&show=pimpdiploma\"',1300)</script>";
mysql_query("UPDATE `users` SET `contant`=`contant`-'50' WHERE `login`='{$data['login']}'");
}
}
if($_GET['x'] == "pimp3b")
{
if($data->hoermissie != 2){
echo "<tr><td class=mainTxt colspan=2 align=center>Wat doe je hier ??";
}else{
echo "<tr><td class=mainTxt colspan=2 align=center>Vraag <b>3</b> is <font color=red><b>fout</b></font>. Het koste je €<b>50</b>, Je kan het altijd nog een keer proberen.";
echo "<script language=\"javascript\">setTimeout('window.location=\"index.php?a=redlightdistrict&show=pimpdiploma\"',1300)</script>";
mysql_query("UPDATE `users` SET `contant`=`contant`-'50' WHERE `login`='{$data['login']}'");
}
}
if($_GET['x'] == "pimp3a")
{
if($data->hoermissie != 2){
echo "<tr><td class=mainTxt colspan=2 align=center>Wat doe je hier ??";
}else{
echo "<tr><td class=mainTxt colspan=2 align=center>Vraag <b>3</b> is <font color=green><b>goed</b></font>. Nog <b>1</b> te gaan.";
echo "<script language=\"javascript\">setTimeout('window.location=\"index.php?a=redlightdistrict&show=pimpdiploma\"',1300)</script>";
mysql_query("UPDATE `users` SET `hoermissie`=`hoermissie`+'1' WHERE `login`='{$data->login}'");
}
}

if($_GET['x'] == "pimp4b")
{
if($data->hoermissie != 3){
echo "<tr><td class=mainTxt colspan=2 align=center>Wat doe je hier ??";
}else{
echo "<tr><td class=mainTxt colspan=2 align=center>Vraag <b>4</b> is <font color=red><b>fout</b></font>. Het koste je €<b>50</b>, Je kan het altijd nog een keer proberen.";
echo "<script language=\"javascript\">setTimeout('window.location=\"index.php?a=redlightdistrict&show=pimpdiploma\"',1300)</script>";
mysql_query("UPDATE `users` SET `contant`=`contant`-'50' WHERE `login`='{$data['login']}'");
}
}
if($_GET['x'] == "pimp4a")
{
if($data->hoermissie != 3){
echo "<tr><td class=mainTxt colspan=2 align=center>Wat doe je hier ??";
}else{
echo "<tr><td class=mainTxt colspan=2 align=center>Vraag <b>4</b> is <font color=green><b>goed</b></font> SuccosVol Een Pimp Diploma ontvangen!";
echo "<tr><td class=mainTxt colspan=2 align=center><img src='images/pimp/diploma.jpg'>";
echo "<script language=\"javascript\">setTimeout('window.location=\"index.php?a=redlightdistrict&show=diploma\"',1300)</script>";
mysql_query("UPDATE `users` SET `hoermissie`=`hoermissie`+'1' WHERE `login`='{$data->login}'");
mysql_query("UPDATE `users` SET `pimpdiploma`='1' WHERE `login`='{$data->login}'");
}
}
?>
</table></table>
<?php if(!$_GET['show'] == "pimp" || $_GET['show'] == "info"){ ?>
</table>
<?php } ?>