<?
include("config.php");

if($data->admin != "1") {
echo "Je bent geen Admin!";
exit;
}
?>

<link media="screen" href="css-v1.css" type="text/css" rel="stylesheet">
<table width=100%>
<?
include("logmenu.html");


if($_GET['x'] == "7") {
?>
<table width=100%>
<tr><td class=listtitle colspan=5><a class=listtitle href=logs.php>Logs</a> » <a class=listtitle href=#>Bank opnames</a></td></tr>
<tr><td width=100% colspan=5><a href="?x=7p">Klik hier om op persoon te zoeken</td></tr>
<tr><td class=listtitle width=20%>Datum/Tijd</td>
<td class=listtitle width=20%>Door</td>
<td class=listtitle width=20%>Hoeveel</td>
<td class=listtitle width=20%>IP</td>

</tr>
<?



$query = mysql_query("SELECT `date`,`van`,`hoeveel`,ip,wat FROM `banklogs` WHERE `wat`='Halen' AND `date`!='' ORDER BY `date` DESC LIMIT 0,250")or die(mysql_error());
WHILE($gegeven = mysql_fetch_object($query)){

$i++;
$kleur = $i % 2 == 0 ? "list" : "list2";

?><tr><td class=<? echo $kleur ?>><? echo $gegeven->date ?></td>
<td class=<? echo $kleur ?>><? echo $gegeven->van ?></td>
<td class=<? echo $kleur ?>><? echo number_format($gegeven->hoeveel); ?></td>
<td class=<? echo $kleur ?>><? echo $gegeven->ip ?></td>
</tr>
<?
}
if($aantal == "0") {
echo "<tr><td class=list colspan=4>Er zijn nog geen logs</td></tr>";
}
}else {
print <<<ENDHTML


ENDHTML;
}
if($_GET['x'] == "7p") {
?><table width=100%>
<tr><td class=listtitle colspan=5><a class=listtitle href=logs.php>Logs</a> » <a class=listtitle href=#>Pin Opnames - Zoeken op persoon</a></td></tr>
<tr><td width=100%>Laatste 250 pin opnames van <? echo $_POST['submit123'] ?></td></tr>
<tr><td width=100%>Naam: <form method="post"><input type="hidden" name="wapen" value="2" /><input type="text" name="submit123" size="25" maxlength="25" /> <input type="submit" name="submit" value="Zoek" class="submit2" /></form></td></tr>

<tr><td class=listtitle width=20%>Datum/Tijd</td>
<td class=listtitle width=20%>Door</td>
<td class=listtitle width=20%>Hoeveel</td>
<td class=listtitle width=20%>IP</td>
</tr>

<?
if($_POST['submit123']){

$query = mysql_query("SELECT `date`,`van`,`hoeveel`,ip,wat FROM `banklogs` WHERE van='" . $_POST['submit123'] . "' AND `wat`='Halen' AND `date`!='' ORDER BY `date` DESC LIMIT 0,250")or die(mysql_error());

WHILE($gegeven = mysql_fetch_object($query)){

$i++;
$kleur = $i % 2 == 0 ? "list" : "list2";
?><tr><td class=<? echo $kleur ?>><? echo $gegeven->date ?></td>
<td class=<? echo $kleur ?>><? echo $gegeven->van ?></td>
<td class=<? echo $kleur ?>><? echo number_format($gegeven->hoeveel); ?></td>
<td class=<? echo $kleur ?>><? echo $gegeven->ip ?></td>

</tr>
<?}
if($aantal == "0") {
echo "<tr><td class=list colspan=4>Er zijn nog geen logs</td></tr>";
}
}
}

if($_GET['x'] == "8") {
?><table width=100%>
<tr><td class=listtitle colspan=5><a class=listtitle href=logs.php>Logs</a> » <a class=listtitle href=#>Pin Stortingen</a></td></tr>
<tr><td width=100% colspan=5><a href="?x=8p">Klik hier om op persoon te zoeken</td></tr>
<tr><td class=listtitle width=20%>Datum/Tijd</td>
<td class=listtitle width=20%>Door</td>
<td class=listtitle width=20%>Hoeveel</td>
<td class=listtitle width=20%>IP</td>

</tr>
<?



$query = mysql_query("SELECT `date`,`van`,`hoeveel`,ip,wat FROM `banklogs` WHERE `wat`='Storten' AND `date`!='' ORDER BY `date` DESC LIMIT 0,250")or die(mysql_error());
WHILE($gegeven = mysql_fetch_object($query)){

$i++;
$kleur = $i % 2 == 0 ? "list" : "list2";

?><tr><td class=<? echo $kleur ?>><? echo $gegeven->date ?></td>
<td class=<? echo $kleur ?>><? echo $gegeven->van ?></td>
<td class=<? echo $kleur ?>><? echo number_format($gegeven->hoeveel); ?></td>
<td class=<? echo $kleur ?>><? echo $gegeven->ip ?></td>
</tr>
<?
}
if($aantal == "0") {
echo "<tr><td class=list colspan=4>Er zijn nog geen logs</td></tr>";
}
}
if($_GET['x'] == "8p") {
?><table width=100%>
<tr><td class=listtitle colspan=5><a class=listtitle href=logs.php>Logs</a> » <a class=listtitle href=#>Pin Stortingen - Zoeken op persoon</a></td></tr>
<tr><td width=100%>Laatste 250 pin stortingen van <? echo $_POST['submit123'] ?></td></tr>
<tr><td width=100%>Naam: <form method="post"><input type="hidden" name="wapen" value="2" /><input type="text" name="submit123" size="25" maxlength="25" /> <input type="submit" name="submit" value="Zoek" class="submit2" /></form></td></tr>

<tr><td class=listtitle width=20%>Datum/Tijd</td>
<td class=listtitle width=20%>Door</td>
<td class=listtitle width=20%>Hoeveel</td>
<td class=listtitle width=20%>IP</td>

</tr>
<?

if($_POST['submit123']){

$query = mysql_query("SELECT `date`,`van`,`hoeveel`,ip,wat FROM `banklogs` WHERE van='" . $_POST['submit123'] . "' AND `wat`='Storten' AND `date`!='' ORDER BY `date` DESC LIMIT 0,250")or die(mysql_error());
WHILE($gegeven = mysql_fetch_object($query)){

$i++;
$kleur = $i % 2 == 0 ? "list" : "list2";

?><tr><td class=<? echo $kleur ?>><? echo $gegeven->date ?></td>
<td class=<? echo $kleur ?>><? echo $gegeven->van ?></td>
<td class=<? echo $kleur ?>><? echo number_format($gegeven->hoeveel); ?></td>
<td class=<? echo $kleur ?>><? echo $gegeven->ip ?></td>
</tr>
<?
}
if($aantal == "0") {
echo "<tr><td class=list colspan=4>Er zijn nog geen logs</td></tr>";
}
}
}


?>