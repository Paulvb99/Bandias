<?
include("config.php");

if($data->admin != "1") {
echo "Je bent geen Admin!";
exit;
}
?>

<link media="screen" href="css-v1.css" type="text/css" rel="stylesheet">
<table width=100%>
<? include("logmenu.html");
?>

<table width=100%>
<tr><td class=listtitle colspan=5>&nbsp;</td></tr>
<tr><td class=list colspan=5>Afgelopen 250 kliks</td></tr>

<tr><td class=listtitle width=33%>Datum/Tijd</td>
<td class=listtitle width=33%>IP-Adres</td>
<td class=listtitle width=33%>Login</td></tr>

<?

$query = mysql_query("SELECT `date`,`ip`,`login`,active FROM `clicks` WHERE `date`!='' ORDER BY `date` DESC LIMIT 0,250")or die(mysql_error());
WHILE($gegeven = mysql_fetch_object($query)){

$i++;
$kleur = $i % 2 == 0 ? "list" : "list2";

print <<<ENDHTML
<tr><td class=$kleur>$gegeven->date</td>
<td class=$kleur>$gegeven->ip</td>
<td class=$kleur>$gegeven->login</td></tr>
ENDHTML;
}
?>