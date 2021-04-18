<?
include("config.php");

?>

<link media="screen" href="css-v1.css" type="text/css" rel="stylesheet">
<table width=100%>
<? include("logmenu.html");
if($_GET['x'] == "10"){
?>
<table width=100%>
<tr><td class=listtitle colspan=5><a class=listtitle href=logs.php>Logs</a> » <a class=listtitle href=#>Aanval Logs</a></td></tr>
<tr><td width=100% colspan=5>Laatste 250 Aanval logs</td></tr>
<tr><td width=100% colspan=5><a href="?x=10p">Klik hier om op Door-persoon te zoeken</td></tr>
<tr><td width=100% colspan=5><a href="?x=10p1">Klik hier om op Wie-persoon te zoeken</td></tr>

<tr><td class=listtitle width=20%>Datum/Tijd</td>
<td class=listtitle width=20%>Door</td>
<td class=listtitle width=20%>Wie</td>
<td class=listtitle width=20%>Wat</td>
<td class=listtitle width=20%>Geld</td>
<td class=listtitle width=20%>Leven</td>
<td class=listtitle width=20%>ip</td>
</tr>
<?

$query = mysql_query("SELECT `date`,`ip`,`door`,`wie`,wat,hoeveel,levenverloren FROM `aanvalslog` WHERE `date`!='' ORDER BY `date` DESC LIMIT 0,250")or die(mysql_error());

WHILE($gegeven = mysql_fetch_object($query)){

$i++;
$kleur = $i % 2 == 0 ? "list" : "list2";

?><tr><td class=<? echo $kleur?>><? echo $gegeven->date?></td>
<td class=<? echo $kleur?>><? echo $gegeven->door?></td>
<td class=<? echo $kleur?>><? echo $gegeven->wie?></td>
<td class=<? echo $kleur?>><? echo $gegeven->wat?></td>
<td class=<? echo $kleur?>><? echo number_format($gegeven->hoeveel);?></td>
<td class=<? echo $kleur?>><? echo number_format($gegeven->levenverloren);?></td>
<td class=<? echo $kleur?>><? echo $gegeven->ip?></td>

</tr>
<?}
if($aantal == "0") {
echo "<tr><td class=list colspan=4>Er zijn nog geen logs</td></tr>";
}
}
if($_GET['x'] == "10p") {
?><table width=100%>
<tr><td class=listtitle colspan=5><a class=listtitle href=logs.php>Logs</a> » <a class=listtitle href=#>Aanval Logs</a></td></tr>
<tr><td width=100% colspan=5>Laatste 250 Aanval logs van <? echo $_POST['submit123'] ?></td></tr>
<tr><td width=100% colspan=5><a href="?x=10p">Klik hier om op Door-persoon te zoeken</td></tr>
<tr><td width=100% colspan=5><a href="?x=10p1">Klik hier om op Wie-persoon te zoeken</td></tr>
<tr><td width=100%>Naam: <form method="post"><input type="hidden" name="wapen" value="2" /><input type="text" name="submit123" size="25" maxlength="25" /> <input type="submit" name="submit" value="Zoek" class="submit2" /></form></td></tr>

<tr><td class=listtitle width=20%>Datum/Tijd</td>
<td class=listtitle width=20%>Door</td>
<td class=listtitle width=20%>Wie</td>
<td class=listtitle width=20%>Wat</td>
<td class=listtitle width=20%>Geld</td>
<td class=listtitle width=20%>Leven</td>
<td class=listtitle width=20%>ip</td>
</tr>
<?

$query = mysql_query("SELECT `date`,`ip`,`door`,`wie`,wat,hoeveel,levenverloren FROM `aanvalslog` WHERE `door`='" . $_POST['submit123'] . "' AND `date`!='' ORDER BY `date` DESC LIMIT 0,250")or die(mysql_error());

WHILE($gegeven = mysql_fetch_object($query)){

$i++;
$kleur = $i % 2 == 0 ? "list" : "list2";

?><tr><td class=<? echo $kleur?>><? echo $gegeven->date?></td>
<td class=<? echo $kleur?>><? echo $gegeven->door?></td>
<td class=<? echo $kleur?>><? echo $gegeven->wie?></td>
<td class=<? echo $kleur?>><? echo $gegeven->wat?></td>
<td class=<? echo $kleur?>><? echo number_format($gegeven->hoeveel);?></td>
<td class=<? echo $kleur?>><? echo number_format($gegeven->levenverloren);?></td>
<td class=<? echo $kleur?>><? echo $gegeven->ip?></td>

</tr>
<?}
if($aantal == "0") {
echo "<tr><td class=list colspan=4>Er zijn nog geen logs</td></tr>";
}
}
if($_GET['x'] == "10p1") {
?><table width=100%>
<tr><td class=listtitle colspan=5><a class=listtitle href=logs.php>Logs</a> » <a class=listtitle href=#>Aanval Logs</a></td></tr>
<tr><td width=100% colspan=5>Laatste 250 Aanval logs aan <? echo $_POST['submit123'] ?></td></tr>
<tr><td width=100% colspan=5><a href="?x=10p">Klik hier om op Door-persoon te zoeken</td></tr>
<tr><td width=100% colspan=5><a href="?x=10p1">Klik hier om op Wie-persoon te zoeken</td></tr>
<tr><td width=100%>Naam: <form method="post"><input type="hidden" name="wapen" value="2" /><input type="text" name="submit123" size="25" maxlength="25" /> <input type="submit" name="submit" value="Zoek" class="submit2" /></form></td></tr>

<tr><td class=listtitle width=20%>Datum/Tijd</td>
<td class=listtitle width=20%>Door</td>
<td class=listtitle width=20%>Wie</td>
<td class=listtitle width=20%>Wat</td>
<td class=listtitle width=20%>Geld</td>
<td class=listtitle width=20%>Leven</td>
<td class=listtitle width=20%>ip</td>
</tr>
<?

$query = mysql_query("SELECT `date`,`ip`,`door`,`wie`,wat,hoeveel,levenverloren FROM `aanvalslog` WHERE `wie`='" . $_POST['submit123'] . "' AND `date`!='' ORDER BY `date` DESC LIMIT 0,250")or die(mysql_error());

WHILE($gegeven = mysql_fetch_object($query)){

$i++;
$kleur = $i % 2 == 0 ? "list" : "list2";

?><tr><td class=<? echo $kleur?>><? echo $gegeven->date?></td>
<td class=<? echo $kleur?>><? echo $gegeven->door?></td>
<td class=<? echo $kleur?>><? echo $gegeven->wie?></td>
<td class=<? echo $kleur?>><? echo $gegeven->wat?></td>
<td class=<? echo $kleur?>><? echo number_format($gegeven->hoeveel);?></td>
<td class=<? echo $kleur?>><? echo number_format($gegeven->levenverloren);?></td>
<td class=<? echo $kleur?>><? echo $gegeven->ip?></td>

</tr>
<?}
if($aantal == "0") {
echo "<tr><td class=list colspan=4>Er zijn nog geen logs</td></tr>";
}
}

?>