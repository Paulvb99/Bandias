<?
include("config.php");

?>

<link media="screen" href="css-v1.css" type="text/css" rel="stylesheet">

<table width=100%>
<tr><td class=listtitle width=33%>Datum/Tijd</td>
<td class=listtitle width=33%>IP-Adres</td>
<td class=listtitle width=33%>Login</td></tr>

<?
$select = mysql_query("SELECT time FROM `adminpanel`");
$aantal = mysql_num_rows($select);

$query = mysql_query("SELECT `time`,`ip`,`login` FROM `adminpanel` WHERE `time`!='' ORDER BY `time` DESC LIMIT 0,250")or die(mysql_error());
WHILE($gegeven = mysql_fetch_object($query)){

$i++;
$kleur = $i % 2 == 0 ? "list" : "list2";

print <<<ENDHTML
<tr><td class=$kleur>$gegeven->time</td>
<td class=$kleur>$gegeven->ip</td>
<td class=$kleur>$gegeven->login</td></tr>
ENDHTML;
}
?>