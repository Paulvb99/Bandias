<?
include("config.php");

if($data->level != "255") {
echo "Je bent geen Admin!";
exit;
}
?>

<link media="screen" href="css-v1.css" type="text/css" rel="stylesheet">
<table width=100%>
<tr><td class=listtitle colspan=3><a class=listtitle href=logs.php>Logs</a></td></tr>
<tr><td class=list2 width=33%><a href=logs.php?x=2>Straffen</a></td>
<td class=list2 width=33%><a href=logs.php?x=3>Clan verwijderen</a></td>
<td class=list><a href=logs.php?x=5>IP-Ban</a></td></tr>
<tr><td class="list"><a href="admindonatielog.php?x=6">Admin Donaties</a></td>
<td class=list><a href="banklogs.php?x=7">Pin Opnames</a></td>
<td class=list><a href="banklogs.php?x=8">Pin Stortingen</a></td></tr>
<td class="list"><a href="ledendonatielog.php?x=9">Leden Donaties</a></td>
<td class="list2"><a href="admin5.php?x=1">Belcredits Shop</a></td>
<td class="list"><a href="admin6.php">Persoonlijke Kliks</a></td></tr>
<tr><td class="list2" width="33%"><a href="shoplog?x=10">Shop Logs</a></td>
<td class=list2 width=33%><a href=?x=11>Leeg</a></td>
<td class=list><a href=?x=12>Leeg</a></td></tr>


<?

if($_GET['x'] == "9") {
?>
<table width=100%>
<tr><td class=listtitle colspan=5><a class=listtitle href=logs.php>Logs</a> » <a class=listtitle href=#>Leden Donaties</a></td></tr>
<tr><td width=100% colspan=5><a href="?x=9p">Klik hier om op <B>Naar</b> te zoeken</td></tr>
<tr><td width=100% colspan=5><a href="?x=9p1">Klik hier om op <B>Door</b> te zoeken</td></tr>
<tr><td class=listtitle width=20%>Datum/Tijd</td>
<td class=listtitle width=20%>Door</td>
<td class=listtitle width=20%>IP Storter</td>
<td class=listtitle width=20%>Naar</td>
<td class=listtitle width=20%>Hoeveel</td>
</tr>
<?

if($data->level == 255) {
$where = "";
$where1 = "";
} else {
$where = "WHERE `door`='$data->login'";
$where1 = "&& `door`='$data->login'";
}

$select = mysql_query("SELECT time FROM `[logs]` $where");
$aantal = mysql_num_rows($select);

$query = mysql_query("SELECT `time`,`person`,`code`,`login`,`IP` FROM `[logs]` WHERE `area`='donate' AND `time`!='' $where1 ORDER BY `time` DESC LIMIT 0,250")or die(mysql_error());
WHILE($gegeven = mysql_fetch_object($query)){

$i++;
$kleur = $i % 2 == 0 ? "list" : "list2";

print <<<ENDHTML
<tr><td class=$kleur>$gegeven->time</td>
<td class=$kleur>$gegeven->login</td>
<td class=$kleur>$gegeven->IP</td>
<td class=$kleur>$gegeven->person</td>
<td class=$kleur>$gegeven->code</td>
</tr>
ENDHTML;
}
if($aantal == "0") {
echo "<tr><td class=list colspan=4>Er zijn nog geen logs</td></tr>";
}
}
if($_GET['x'] == "9p") {
?><table width=100%>
<tr><td class=listtitle colspan=5><a class=listtitle href=logs.php>Logs</a> » <a class=listtitle href=#>Leden Donaties - Zoeken op persoon</a></td></tr>
<tr><td width=100%>Laatste 250 Donaties <B>naar</B> <? echo $_POST['submit123'] ?></td></tr>
<tr><td width=100%>Naam: <form method="post"><input type="hidden" name="wapen" value="2" /><input type="text" name="submit123" size="25" maxlength="25" /> <input type="submit" name="submit" value="Zoek" class="submit2" /></form></td></tr>

<tr><td class=listtitle width=20%>Datum/Tijd</td>
<td class=listtitle width=20%>Door</td>
<td class=listtitle width=20%>IP Storter</td>
<td class=listtitle width=20%>Naar</td>
<td class=listtitle width=20%>Hoeveel</td>
</tr>
<?
if($_POST['submit123']){
if($data->level == 255) {
$where = "";
$where1 = "";
} else {
$where = "WHERE `door`='$data->login'";
$where1 = "&& `door`='$data->login'";
}

$select = mysql_query("SELECT time FROM `shoplogs` $where");
$aantal = mysql_num_rows($select);
$query = mysql_query("SELECT `time`,`login`,`IP`,`person`,`code` FROM `[logs]` WHERE `person`='" . $_POST['submit123'] . "' AND `area`='donate' AND `time`!='' $where1 ORDER BY `time` DESC LIMIT 0,250")or die(mysql_error());

WHILE($gegeven = mysql_fetch_object($query)){

$i++;
$kleur = $i % 2 == 0 ? "list" : "list2";

?><tr><td class=<? echo $kleur ?>><? echo $gegeven->time ?></td>
<td class=<? echo $kleur ?>><? echo $gegeven->login ?></td>
<td class=<? echo $kleur ?>><? echo $gegeven->IP ?></td>
<td class=<? echo $kleur ?>><? echo $gegeven->person ?></td>
<td class=<? echo $kleur ?>><? echo number_format($gegeven->code); ?></td>
</tr>

<?}
}}
if($_GET['x'] == "9p1") {
?><table width=100%>
<tr><td class=listtitle colspan=5><a class=listtitle href=logs.php>Logs</a> » <a class=listtitle href=#>Leden Donaties - Zoeken op persoon</a></td></tr>
<tr><td width=100%>Laatste 250 Donaties <B>Door</b> <? echo $_POST['submit123'] ?></td></tr>
<tr><td width=100%>Naam: <form method="post"><input type="hidden" name="wapen" value="2" /><input type="text" name="submit123" size="25" maxlength="25" /> <input type="submit" name="submit" value="Zoek" class="submit2" /></form></td></tr>

<tr><td class=listtitle width=20%>Datum/Tijd</td>
<td class=listtitle width=20%>Door</td>
<td class=listtitle width=20%>IP Storter</td>
<td class=listtitle width=20%>Naar</td>
<td class=listtitle width=20%>Hoeveel</td>
</tr>
<?
if($_POST['submit123']){
if($data->level == 255) {
$where = "";
$where1 = "";
} else {
$where = "WHERE `door`='$data->login'";
$where1 = "&& `door`='$data->login'";
}

$select = mysql_query("SELECT time FROM `shoplogs` $where");
$aantal = mysql_num_rows($select);
$query = mysql_query("SELECT `time`,`login`,`IP`,`person`,`code` FROM `[logs]` WHERE `login`='" . $_POST['submit123'] . "' AND `area`='donate' AND `time`!='' $where1 ORDER BY `time` DESC LIMIT 0,250")or die(mysql_error());

WHILE($gegeven = mysql_fetch_object($query)){

$i++;
$kleur = $i % 2 == 0 ? "list" : "list2";

?><tr><td class=<? echo $kleur ?>><? echo $gegeven->time ?></td>
<td class=<? echo $kleur ?>><? echo $gegeven->login ?></td>
<td class=<? echo $kleur ?>><? echo $gegeven->IP ?></td>
<td class=<? echo $kleur ?>><? echo $gegeven->person ?></td>
<td class=<? echo $kleur ?>><? echo number_format($gegeven->code); ?></td>
</tr>

<?}

if($aantal == "0") {
echo "<tr><td class=list colspan=4>Er zijn nog geen logs</td></tr>";
}
}
}


?>