<?
include("config.php");

?>

<link media="screen" href="css-v1.css" type="text/css" rel="stylesheet">

<table width=100%>
<tr><td class=listtitle colspan=5><a class=listtitle href=logs.php>Logs</a></td></tr>
<? include("logmenu.html");
if($_GET['x'] == '1'){
?>
<tr><td class=listtitle colspan=5>100 laatst gekochte dingen in de CallCredit shop</td></tr>
<tr><td class=list colspan=5><a href="?x=1p">Klik hier om op login te zoeken</a></td></tr>
<tr><td class=listtitle width=20%>Datum/Tijd</td>
<td class=listtitle width=15%>IP-Adres</td>
<td class=listtitle width=20%>Login</td>
<td class=listtitle width=20%>Wat</td>
<td class=listtitle width=20%>Prijs</td></tr>

<?

$query = mysql_query("SELECT * FROM `ccshoplogs` WHERE `date`!='' ORDER BY `date` DESC LIMIT 0,100")or die(mysql_error());
WHILE($gegeven = mysql_fetch_object($query)){

$i++;
$kleur = $i % 2 == 0 ? "list" : "list2";

print <<<ENDHTML
<tr><td class=$kleur>$gegeven->date</td>
<td class=$kleur>$gegeven->ip</td>
<td class=$kleur>$gegeven->login</td>
<td class=$kleur>$gegeven->wat</td>
<td class=$kleur>$gegeven->credits</td></tr>
ENDHTML;
}
}
if($_GET['x'] == '1p'){
?><table width=100%>

<tr><td class=list colspan=5>100 laatst gekochte dingen in de CallCredit shop</td></tr>
<tr><td width=100%>Naam: <form method="post"><input type="hidden" name="wapen" value="2" /><input type="text" name="submit123" size="25" maxlength="25" /> <input type="submit" name="submit" value="Zoek" class="submit2" /></form></td></tr>
<tr><td class=list width="100%">Logs van: <? echo $_POST['submit123'] ?></a></td></tr>
<tr><td class=listtitle width=20%>Datum/Tijd</td>
<td class=listtitle width=20%>IP-Adres</td>
<td class=listtitle width=20%>Login</td>
<td class=listtitle width=20%>Wat</td>
<td class=listtitle width=20%>Prijs</td></tr>

<?
if($_POST['submit123']){

$query = mysql_query("SELECT * FROM `ccshoplogs` WHERE `login`='" . $_POST['submit123'] . "' AND `date`!='' ORDER BY `date` DESC LIMIT 0,100")or die(mysql_error());
WHILE($gegeven = mysql_fetch_object($query)){

$i++;
$kleur = $i % 2 == 0 ? "list" : "list2";

print <<<ENDHTML
<tr><td class=$kleur>$gegeven->date</td>
<td class=$kleur>$gegeven->ip</td>
<td class=$kleur>$gegeven->login</td>
<td class=$kleur>$gegeven->wat</td>
<td class=$kleur>$gegeven->credits</td></tr>
ENDHTML;
}
}
}
?>