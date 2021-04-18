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
<tr><td class=listtitle colspan=5><a class=listtitle href=logs.php>Logs</a> » <a class=listtitle href=#>Shop Logs</a></td></tr>
<tr><td width=100% colspan=5>Laatste 250 shop logs</td></tr>
<tr><td width=100% colspan=5><a href="?x=10p">Klik hier om op persoon te zoeken</td></tr>

<tr><td class=listtitle width=20%>Datum/Tijd</td>
<td class=listtitle width=20%>Door</td>
<td class=listtitle width=20%>IP</td>
<td class=listtitle width=20%>Wat</td>
<td class=listtitle width=20%>Hoeveel</td>
<td class=listtitle width=20%>Power</td>
<td class=listtitle width=20%>Geld</td>
</tr>
ENDHTML;


$query = mysql_query("SELECT `date`,`ip`,`login`,`wat`,`hoeveel`,`power`,`geld` FROM `shoplogs` WHERE `date`!='' ORDER BY `date` DESC LIMIT 0,250")or die(mysql_error());

WHILE($gegeven = mysql_fetch_object($query)){

$i++;
$kleur = $i % 2 == 0 ? "list" : "list2";

?><tr><td class=<? echo $kleur?>><? echo $gegeven->date?></td>
<td class=<? echo $kleur?>><? echo $gegeven->login?></td>
<td class=<? echo $kleur?>><? echo $gegeven->ip?></td>
<td class=<? echo $kleur?>><? echo $gegeven->wat?></td>
<td class=<? echo $kleur?>><? echo $gegeven->hoeveel?></td>
<td class=<? echo $kleur?>><? echo number_format($gegeven->power);?></td>
<td class=<? echo $kleur ?>><? echo $gegeven->geld?></td>

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
<tr><td class=listtitle colspan=5><a class=listtitle href=logs.php>Logs</a> » <a class=listtitle href=#>Shop Logs - Zoeken op persoon</a></td></tr>
<tr><td width=100%>Laatste 250 shop logs van <? echo $_POST['submit123'] ?></td></tr>
<tr><td width=100%>Naam: <form method="post"><input type="hidden" name="wapen" value="2" /><input type="text" name="submit123" size="25" maxlength="25" /> <input type="submit" name="submit" value="Zoek" class="submit2" /></form></td></tr>

<tr><td class=listtitle width=20%>Datum/Tijd</td>
<td class=listtitle width=20%>Door</td>
<td class=listtitle width=20%>IP</td>
<td class=listtitle width=20%>Wat</td>
<td class=listtitle width=20%>Hoeveel</td>
<td class=listtitle width=20%>Power</td>
<td class=listtitle width=20%>Geld</td>
</tr>

<?
if($_POST['submit123']){
if($data->level == 255) {
$where = "";
$where1 = "";
} else {
}

$select = mysql_query("SELECT date FROM `shoplogs` $where");
$aantal = mysql_num_rows($select);

$query = mysql_query("SELECT `date`,`ip`,`login`,`wat`,`hoeveel`,`power`,`geld` FROM `shoplogs` WHERE `login`='" . $_POST['submit123'] . "' AND `date`!='' ORDER BY `date` DESC LIMIT 0,250")or die(mysql_error());

WHILE($gegeven = mysql_fetch_object($query)){

$i++;
$kleur = $i % 2 == 0 ? "list" : "list2";

?><tr><td class=<? echo $kleur?>><? echo $gegeven->date?></td>
<td class=<? echo $kleur?>><? echo $gegeven->login?></td>
<td class=<? echo $kleur?>><? echo $gegeven->ip?></td>
<td class=<? echo $kleur?>><? echo $gegeven->wat?></td>
<td class=<? echo $kleur?>><? echo $gegeven->hoeveel?></td>
<td class=<? echo $kleur?>><? echo number_format($gegeven->power);?></td>
<td class=<? echo $kleur ?>><? echo $gegeven->geld?></td>

</tr>
<?}
if($aantal == "0") {
echo "<tr><td class=list colspan=4>Er zijn nog geen logs</td></tr>";
}
}
}


?>