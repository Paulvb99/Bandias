<?
include("config.php");

if($data->admin != "1") {
echo "Je bent geen Admin!";
exit;
}
?>

<link media="screen" href="css-v1.css" type="text/css" rel="stylesheet">

<table width=100%>
<tr><td class=listtitle colspan=2>&nbsp;</td></tr><form method=post>

<?
if(isset($_POST['submit'])) {
if($_POST['subject'] == "") {
echo "<tr><td class=list2 colspan=2>Je bent vergeten een onderwerp in te vullen</td></tr>";
} else if($_POST['message'] == "") {
echo "<tr><td class=list2 colspan=2>Je bent vergeten een bericht in te vullen</td></tr>";
} else {
if($_POST[to] == "1") {
$query = "SELECT login,email FROM `users`";
$info = mysql_query($query) or die(mysql_error());
while ($gegeven = mysql_fetch_array($info)) {
if($_POST['where'] == "1") {
mail("$gegeven[email]","$_POST[subject]","$_POST[message]","From: OSBanditi<osbanditi@twfhosting.nl>");
}
}
echo "<tr><td class=list2 colspan=2>De berichten zijn verstuurd naar <b>Alle Leden</b>!</td></tr>";
}
}
}
?>

<tr><td class=list width=100>Naar:</td>
<td class=list><select name=to>
<option value=1>Alle leden</option>
</select></td></tr>
<tr><td class=list>Waar:</td>
<td class=list><select name=where>
<option value=1>Postvak IN (e-mail)</option>
</select></td></tr>
<tr><td class=list>Onderwerp:</td>
<td class=list><input type=text name=subject size=35></td></tr>
<tr><td class=list valign=top>Bericht:</td>
<td class=list><textarea name=message rows=10 cols=50></textarea></td></tr>
<tr><td class=listtitle colspan=2 align=right><input type=submit name=submit value=Submit class=boton></td></tr></form>
</table>