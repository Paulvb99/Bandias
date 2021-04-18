<?
error_reporting(E_ALL);
include("config.php");

if($data->admin != "1") {
echo "Je bent geen Admin!";
exit;
}
?>

<link media="screen" href="css-v1.css" type="text/css" rel="stylesheet">

<table width=100%>
Hieronder kan je opties aan of uitzetten.<br />
Als je dit doet, zal de menulink niet meer zichtbaar zijn, en het bestand zelf ook niet.<br />

<form method=post>
<tr><td class=listtitle colspan=2>&nbsp;</td></tr>

<?
if(isset($_POST['submit'])) {
if(isset($_POST['killershop'])) {
mysql_query("UPDATE `config` SET `killershop`='$_POST[killershop]' WHERE `ding`='1'");
}
if(isset($_POST['extraatje'])) {
mysql_query("UPDATE `config` SET `extraatje`='$_POST[extraatje]' WHERE `ding`='1'");
}
if(isset($_POST['zelfmoord'])) {
mysql_query("UPDATE `config` SET `zelfmoord`='$_POST[zelfmoord]' WHERE `ding`='1'");
}
if(isset($_POST['mac'])) {
mysql_query("UPDATE `config` SET `mac`='$_POST[mac]' WHERE `ding`='1'");
}
$query  = "SELECT strafpunten FROM `users` WHERE `login`='$_POST[wie]'";
$result = mysql_query($query);

while($row = mysql_fetch_array($result, MYSQL_ASSOC))
echo '<tr><td class=list2 colspan=2>De functies zijn aangepast.</td></tr>';
}
?>
<tr><td class=list>Functie Killershop:</td>
<td class=list><input type=radio name=killershop value=Ja>Ja
<input type=radio name=killershop value=Nee>Nee</td></tr>
</select></td></tr>
<tr><td class=list>Functie Extraatje:</td>
<td class=list><input type=radio name=extraatje value=Ja>Ja
<input type=radio name=extraatje value=Nee>Nee</td></tr>
</select></td></tr>
<tr><td class=list>Functie Zelfmoord:</td>
<td class=list><input type=radio name=zelfmoord value=Ja>Ja
<input type=radio name=zelfmoord value=Nee>Nee</td></tr>
</select></td></tr>
<tr><td class=list>Functie Mac:</td>
<td class=list><input type=radio name=mac value=Ja>Ja
<input type=radio name=mac value=Nee>Nee</td></tr>
</select></td></tr>
<tr><td class=listtitle align=right colspan=2><input type=submit name=submit value=Bewerken class=boton></td></tr></form>
</table>