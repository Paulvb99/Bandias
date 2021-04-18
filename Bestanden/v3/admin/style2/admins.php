<?
include("config.php");
?>

<link media="screen" href="css-v1.css" type="text/css" rel="stylesheet">

<table class=list cellpadding=3 cellspacing=1>
<tr><td class=listtitle><a class=listtitle href=#>#</td>
<td class=listtitle><a class=listtitle href=#>Naam</a></td>
<td class=listtitle><a class=listtitle href=#>Soort</a></td>
<td class=listtitle><a class=listtitle href=#>Status</a></td></tr>

<?
$select = mysql_query("SELECT id FROM `users` WHERE `admin`='1'");
$aantal = mysql_num_rows($select);

$query = mysql_query("SELECT id,login,admin,online,moderator FROM `users` WHERE `admin`='1' ORDER BY 'admin'")or die(mysql_error());
WHILE($gegeven = mysql_fetch_object($query)){

$e++;
$i++;
$kleur = $i % 2 == 0 ? "list" : "list2";

if($gegeven->moderator == "1") {
$soort = "Moderator";
} else if($gegeven->admin == "1") {
$soort = "Administrator";
}

$dbres = mysql_query("SELECT `id` FROM `users` WHERE UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(`online`) < 900 AND `login`='$gegeven->login'");
$online = mysql_num_rows($dbres);

if($online == "1") {
$status = "<img src=online.png border=0 alt=Online> Online";
} else {
$status = "<img src=offline.png border=0 alt=Offline> Offline";
}

print <<<ENDHTML
<tr><td class=$kleur width=1>$e</td>
<td class=$kleur width=33%>$gegeven->login</td>
<td class=$kleur width=33%>$soort</td>
<td class=$kleur width=33%>$status</td></tr>
ENDHTML;
}
?>