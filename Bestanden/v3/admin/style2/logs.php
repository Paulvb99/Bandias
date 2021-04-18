<?
include("config.php");

?>

<link media="screen" href="css-v1.css" type="text/css" rel="stylesheet">
<table width=100%>
<? include("logmenu.html") ?>
<?
if($_GET['x'] == "2") {
?>
<table width=100%>
<tr><td class=listtitle colspan=5><a class=listtitle href=logs.php>Logs</a> » <a class=listtitle href=#>Straffen logs</a></td></tr>

<tr><td class=listtitle width=20%>Datum/Tijd</td>
<td class=listtitle width=20%>Door</td>
<td class=listtitle width=20%>Login</td>
<td class=listtitle width=20%>Action</td>
</tr>
<?

if($data->level == 255) {
$where = "";
$where1 = "";
} else {
$where = "WHERE `door`='$data->login'";
$where1 = "&& `door`='$data->login'";
}

$select = mysql_query("SELECT time FROM `admin9` $where");
$aantal = mysql_num_rows($select);

$query = mysql_query("SELECT `id`,`time`,`login`,`login2`,`straf` FROM `admin9` WHERE `time`!='' $where1 ORDER BY `time` DESC LIMIT 0,250")or die(mysql_error());
WHILE($gegeven = mysql_fetch_object($query)){

$i++;
$kleur = $i % 2 == 0 ? "list" : "list2";

print <<<ENDHTML
<tr><td class=$kleur>$gegeven->time</td>
<td class=$kleur>$gegeven->login</td>
<td class=$kleur>$gegeven->login2</td>
<td class=$kleur>$gegeven->straf</td>
</tr>
ENDHTML;
}
if($aantal == "0") {
echo "<tr><td class=list colspan=4>Er zijn nog geen logs</td></tr>";
}
}else {
print <<<ENDHTML


ENDHTML;
}
if($_GET['x'] == "3") {
?>
<table width=100%>
<tr><td class=listtitle colspan=5><a class=listtitle href=logs.php>Logs</a> » <a class=listtitle href=#>Clan Verwijder Logs</a></td></tr>
<tr><td class=listtitle width=100%>Laatste 250 clan verwijder</td></tr>

<tr><td class=listtitle width=20%>Datum/Tijd</td>
<td class=listtitle width=20%>Door</td>
<td class=listtitle width=20%>IP</td>
<td class=listtitle width=20%>Clan</td>
</tr>
<?
if($data->level == 255) {
$where = "";
$where1 = "";
} else {
$where = "WHERE `door`='$data->login'";
$where1 = "&& `door`='$data->login'";
}

$select = mysql_query("SELECT time FROM `shoplogs` $where");
$aantal = mysql_num_rows($select);

$query = mysql_query("SELECT `time`,`ip`,`login`,`clan` FROM `admin7` WHERE `time`!='' ORDER BY `time` DESC LIMIT 0,250")or die(mysql_error());

WHILE($gegeven = mysql_fetch_object($query)){

$i++;
$kleur = $i % 2 == 0 ? "list" : "list2";

print <<<ENDHTML
<tr><td class=$kleur>$gegeven->time</td>
<td class=$kleur>$gegeven->ip</td>
<td class=$kleur>$gegeven->login</td>
<td class=$kleur>$gegeven->clan</td>

</tr>
ENDHTML;
}
if($aantal == "0") {
echo "<tr><td class=list colspan=4>Er zijn nog geen logs</td></tr>";
}
}
?>