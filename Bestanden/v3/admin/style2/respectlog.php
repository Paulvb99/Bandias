<?
include("config.php");

?>

<link media="screen" href="css-v1.css" type="text/css" rel="stylesheet">
<table width=100%>
<? include("logmenu.html");
?>

<?

if($_GET['x'] == "10") {
print <<<ENDHTML
<table width=100%>
<tr><td class=listtitle colspan=5><a class=listtitle href=logs.php>Logs</a> » <a class=listtitle href=#>Respect Logs</a></td></tr>
<tr><td width=100% colspan=5>Laatste 250 Respect logs</td></tr>
<tr><td width=100% colspan=5><a href="?x=10p">Klik hier om op Naar-persoon te zoeken</td></tr>
<tr><td width=100% colspan=5><a href="?x=10p1">Klik hier om op Van-persoon te zoeken</td></tr>

<tr><td class=listtitle width=20%>Datum/Tijd</td>
<td class=listtitle width=20%>Door</td>
<td class=listtitle width=20%>Naar</td>
<td class=listtitle width=20%>ip</td>
</tr>
ENDHTML;


$query = mysql_query("SELECT `date`,`ip`,`van`,`naar` FROM `respectlog` WHERE `date`!='' ORDER BY `date` DESC LIMIT 0,250")or die(mysql_error());

WHILE($gegeven = mysql_fetch_object($query)){

$i++;
$kleur = $i % 2 == 0 ? "list" : "list2";

?><tr><td class=<? echo $kleur?>><? echo $gegeven->date?></td>
<td class=<? echo $kleur?>><? echo $gegeven->van?></td>
<td class=<? echo $kleur?>><? echo $gegeven->naar?></td>
<td class=<? echo $kleur?>><? echo $gegeven->ip?></td>

</tr>
<?}
if($aantal == "0") {
echo "<tr><td class=list colspan=4>Er zijn nog geen logs</td></tr>";
}
}

else {
print <<<ENDHTML


ENDHTML;
}
if($_GET['x'] == "10p") {
?><table width=100%>
<tr><td class=listtitle colspan=5><a class=listtitle href=logs.php>Logs</a> » <a class=listtitle href=#>Respect Logs - Zoeken op persoon</a></td></tr>
<tr><td width=100%>Laatste 250 respect logs van <? echo $_POST['submit123'] ?></td></tr>
<tr><td width=100%>Naam: <form method="post"><input type="hidden" name="wapen" value="2" /><input type="text" name="submit123" size="25" maxlength="25" /> <input type="submit" name="submit" value="Zoek" class="submit2" /></form></td></tr>

<tr><td class=listtitle width=20%>Datum/Tijd</td>
<td class=listtitle width=20%>Door</td>
<td class=listtitle width=20%>Naar</td>
<td class=listtitle width=20%>IP</td>
</tr>

<?
if($_POST['submit123']){

$select = mysql_query("SELECT date FROM `respectlog` $where");
$aantal = mysql_num_rows($select);

$query = mysql_query("SELECT `date`,`ip`,`van`,`naar` FROM `respectlog` WHERE `naar`='" . $_POST['submit123'] . "' AND `date`!='' ORDER BY `date` DESC LIMIT 0,250")or die(mysql_error());

WHILE($gegeven = mysql_fetch_object($query)){

$i++;
$kleur = $i % 2 == 0 ? "list" : "list2";

?><tr><td class=<? echo $kleur?>><? echo $gegeven->date?></td>
<td class=<? echo $kleur?>><? echo $gegeven->van?></td>
<td class=<? echo $kleur?>><? echo $gegeven->naar?></td>
<td class=<? echo $kleur?>><? echo $gegeven->IP?></td>

</tr>
<?}
if($aantal == "0") {
echo "<tr><td class=list colspan=4>Er zijn nog geen logs</td></tr>";
}
}
}
if($_GET['x'] == "10p1") {
?><table width=100%>
<tr><td class=listtitle colspan=5><a class=listtitle href=logs.php>Logs</a> » <a class=listtitle href=#>Respect Logs - Zoeken op persoon</a></td></tr>
<tr><td width=100%>Laatste 250 respect logs van <? echo $_POST['submit123'] ?></td></tr>
<tr><td width=100%>Naam: <form method="post"><input type="hidden" name="wapen" value="2" /><input type="text" name="submit123" size="25" maxlength="25" /> <input type="submit" name="submit" value="Zoek" class="submit2" /></form></td></tr>

<tr><td class=listtitle width=20%>Datum/Tijd</td>
<td class=listtitle width=20%>Door</td>
<td class=listtitle width=20%>Naar</td>
<td class=listtitle width=20%>IP</td>
</tr>

<?
if($_POST['submit123']){

$select = mysql_query("SELECT date FROM `respectlog` $where");
$aantal = mysql_num_rows($select);

$query = mysql_query("SELECT `date`,`ip`,`van`,`naar` FROM `respectlog` WHERE `van`='" . $_POST['submit123'] . "' AND `date`!='' ORDER BY `date` DESC LIMIT 0,250")or die(mysql_error());

WHILE($gegeven = mysql_fetch_object($query)){

$i++;
$kleur = $i % 2 == 0 ? "list" : "list2";

?><tr><td class=<? echo $kleur?>><? echo $gegeven->date?></td>
<td class=<? echo $kleur?>><? echo $gegeven->van?></td>
<td class=<? echo $kleur?>><? echo $gegeven->naar?></td>
<td class=<? echo $kleur?>><? echo $gegeven->IP?></td>

</tr>
<?}
if($aantal == "0") {
echo "<tr><td class=list colspan=4>Er zijn nog geen logs</td></tr>";
}
}
}

?>