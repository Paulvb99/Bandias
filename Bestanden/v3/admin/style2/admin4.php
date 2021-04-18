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
Wanneer je hier een waarschuwing geeft wordt dit opgehoogt in de database.<br />
Dit houdt in dat je de waarschuwing op zijn profiel kan zien etc.<br />

<form method=post>
<tr><td class=listtitle colspan=2>&nbsp;</td></tr>

<?
if(isset($_POST['submit'])) {
mysql_query("UPDATE `users` SET `waarschuwingen`=`waarschuwingen`+'1' WHERE `login`='$_POST[wie]'");
mysql_query("INSERT INTO `admin1` (`time`,`ip`,`login`,`to`,`wat`,`hoeveel`) VALUES (NOW(),'$_SERVER[REMOTE_ADDR]','$data->login','$_POST[wie]','waarschuwingen','1')");
$query  = "SELECT waarschuwingen FROM `users` WHERE `login`='$_POST[wie]'";
$result = mysql_query($query);

while($row = mysql_fetch_array($result, MYSQL_ASSOC))
echo "<tr><td class=list2 colspan=2>De waarschuwing is gegeven, dit lid heeft nu {$row['waarschuwingen']} waarschuwingen.</td></tr>";
}
if(isset($_POST['submit2'])) {
if($_POST['wie'] == "") {
echo "<tr><td class=list2 colspan=2>Je moet wel een IP-Adres invullen</td></tr>";
} else {
mysql_query("UPDATE `users` SET `waarschuwingen`=`waarschuwingen`-'1' WHERE `login`='$_POST[wie]'");
echo "<tr><td class=list2 colspan=2>$_POST[wie] heeft 1 waarschuwing aftrek gekregen</td></tr>";
}
}
?>
<tr><td class=list>Aan wie:</td>
<td class=list><input type=text name=wie></td></tr>
</select></td></tr>
<tr><td class=listtitle align=right colspan=2><input type=submit name=submit value=Uitdelen class=boton><input type=submit name=submit2 value=Aftrekken class=boton></td></tr></form>
</table>