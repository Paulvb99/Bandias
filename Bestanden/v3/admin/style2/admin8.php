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
if($_POST['doen'] == "1") {
mysql_query("UPDATE `users` SET `moderator`='1' WHERE `login`='$_POST[login]'");
echo "<tr><td class=list colspan=2>Dit account is nu Moderator</td></tr>";
}
else if($_POST['doen'] == "2") {
mysql_query("UPDATE `users` SET `moderator`='0' WHERE `login`='$_POST[login]'");
echo "<tr><td class=list colspan=2>Dit account is nu geen Moderator meer</td></tr>";
}
else if($_POST['doen'] == "3") {
mysql_query("UPDATE `users` SET `admin`='1' WHERE `login`='$_POST[login]'");
echo "<tr><td class=list colspan=2>Dit account is nu Admin</td></tr>";
}
else if($_POST['doen'] == "4") {
mysql_query("UPDATE `users` SET `admin`='0' WHERE `login`='$_POST[login]'");
echo "<tr><td class=list colspan=2>Dit account is nu geen Admin meer</td></tr>";
} else {
echo "<tr><td class=list colspan=2>undefined</td></tr>";
}
}
}
?>

<tr><td class=list width=125>Gebruikersnaam:</td>
<td class=list><input type=text name=login></td></tr>
<tr><td class=list>Wat doen?:</td>
<td class=list><select name=doen>
<option value=1>Moderator maken</option>
<option value=2>Geen Moderator</option>
<option value=3>Administrator maken</option>
<option value=4>Geen Administrator</option>
</select></td></tr>
<tr><td class=listtitle align=right colspan=2><input type=submit name=submit value=Uitvoeren class=boton></td></tr></form>
</table>