<?
include("config.php");

if($data->admin != "1") {
echo "Je bent geen Admin!";
exit;
}
?>

<link media="screen" href="css-v1.css" type="text/css" rel="stylesheet">

<table width=100%><form method=post>
<tr><td class=listtitle colspan=2>&nbsp;</td></tr>

<?
if(isset($_POST['submit'])) {
$select = mysql_query("SELECT id FROM `users` WHERE `login`='$_POST[login]'");
$aantal = mysql_num_rows($select);
if($_POST['login'] == "") {
echo "<tr><td class=list2 colspan=2>Je moet een gebruikersnaam opgeven</td></tr>";
} else if($aantal == "0") {
echo "<tr><td class=list2 colspan=2>Deze gebruikersnaam bestaat niet</td></tr>";
} else {
if($_POST['Type'] == "2") {
mysql_query("UPDATE `users` SET  `banreden`='$_POST[reden]', `banpunten`='$_POST[vrij]' WHERE `login`='$_POST[login]'");
echo "<tr><td class=list colspan=2>Dit account is nu verbannen</td></tr>";
}
if($_POST['Type'] == "3") {
mysql_query("UPDATE `users` SET  `forumbanreden`='$_POST[reden]', `forumbanpunten`='$_POST[vrij]' WHERE `login`='$_POST[login]'");
echo "<tr><td class=list colspan=2>Dit account is nu verbannen</td></tr>";
} else {
echo "<tr><td class=list colspan=2>undefined</td></tr>";
}
}
}
?>
<tr><td class=list width=125>Slachtoffer:</td>
<td class=list><input type=text name=login></td></tr>
<tr><td class=list>Straf:</td>
<td class=list><select name=Type>
<option value=2>Normale ban</option>
<option value=3>Forum ban</option>
</select></td></tr>
<tr><td class=list width=125>Aantal banuren:</td>
<td class=list><input type=text name=vrij value=0></td></tr>
<tr><td class=list width=125>Reden:</td>
<td class=list><input type=text name=reden></td></tr>
<tr><td class=listtitle align=right colspan=2><input type=submit name=submit value=Uitvoeren class=boton></td></tr></form>
</table>