<?
error_reporting(E_ALL);
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
if($_POST['hoeveel'] <= "0") {
echo "<tr><td class=list2 colspan=2>Ongeldige invoer</td></tr>";
} else {
mysql_query("UPDATE `users` SET `$_POST[wat]`=`$_POST[wat]`+'$_POST[hoeveel]' WHERE `login`='$_POST[wie]'");
mysql_query("INSERT INTO `admin1` (`time`,`ip`,`login`,`to`,`wat`,`hoeveel`) VALUES (NOW(),'$_SERVER[REMOTE_ADDR]','$data->login','$_POST[wie]','$_POST[wat]','$_POST[hoeveel]')");
echo "<tr><td class=list2 colspan=2>Het bedrag is gedoneerd</td></tr>";
}
}
?>

<tr><td class=list width=125>Naar wie:</td>
<td class=list><input type=text name=wie></td></tr>
<tr><td class=list>Hoeveel:</td>
<td class=list><input type=text name=hoeveel></td></tr>
<tr><td class=list>Wat:</td>
<td class=list><select name=wat>
<option value=contant>Contant geld</option>
<option value=bank>Bank geld</option>
<option value=power>Power</option>
<option value=killers>Killers</option>
<option value=callcredits>Callcredits</option>
<option value=vipdays>Betaald account dagen</option>


</select></td></tr>
<tr><td class=listtitle align=right colspan=2><input type=submit name=submit value=Doneer class=boton></td></tr></form>
</table>