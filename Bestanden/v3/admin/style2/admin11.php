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
<tr><td class=list colspan=5>Laatste 100 berichten</td></tr>

<tr><td class=listtitle width=1>#</td>
<td class=listtitle width=125>Van</td>
<td class=listtitle width=125>Naar</td>
<td class=listtitle>Onderwerp</td>
<td class=listtitle>Bericht</td></tr>

<?

$query = mysql_query("SELECT `from`,`to`,`title`,`content` FROM `messages` WHERE `id`!='' ORDER BY `date` DESC LIMIT 0,100")or die(mysql_error());
WHILE($gegeven = mysql_fetch_object($query)){

$e++;
$i++;
$kleur = $i % 2 == 0 ? "list" : "list2";

print <<<ENDHTML
<tr><td class=$kleur>$e</td>
<td class=$kleur>$gegeven->from</td>
<td class=$kleur>$gegeven->to</td>
<td class=$kleur>$gegeven->title</td>
<td class=$kleur>$gegeven->content</td></tr>
ENDHTML;
}
?>

</table>