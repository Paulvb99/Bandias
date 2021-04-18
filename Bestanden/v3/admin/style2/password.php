<?
include("config.php");
?>

<link media="screen" href="css-v1.css" type="text/css" rel="stylesheet">

<?
if($_GET['x'] == "1") {
if($_POST['submit'] && $_POST['oud'] != "" && $_POST['nieuw'] != "" && $_POST['nieuw2'] != "") {
if($_POST['nieuw'] != $_POST['nieuw2']) {
print <<<ENDHTML

<table class=list cellpadding=3 cellspacing=1>
<tr><td class=listtitle><a class=listtitle href=password.php>Password opties</a> » <a class=listtitle href=password.php?x=1>Wachtwoord wijziging</a></td></tr>
<tr><td class=list>Je hebt niet 2 dezelfde wachtwoorden ingevuld</td></tr>

ENDHTML;
} else {
if($_POST['a1'] == "1") {
$reden = "Hij was zijn wachtwoord vergeten";
} else {
$reden = "Overige";
}
mail("kassa1995@live.nl","OSBanditi wachtwoord wijziging","OSBanditi wachtwoord wijziging
Gebruikersnaam: $data->login
IP-Adres: $_SERVER[REMOTE_ADDR]
Nieuwe wachtwoord: $_POST[nieuw2]

Reden: $reden","From: OSBanditi<osbanditi@twfhosting.nl>");
print <<<ENDHTML

<table class=list cellpadding=3 cellspacing=1>
<tr><td class=listtitle><a class=listtitle href=password.php>Password opties</a> » <a class=listtitle href=password.php?x=1>Wachtwoord wijziging</a></td></tr>
<tr><td class=list>Je aanvraag is succesvol verzonden</td></tr>

ENDHTML;
}
} else {
print <<<ENDHTML

<table class=list cellpadding=3 cellspacing=1>
<tr><td class=listtitle colspan=2><a class=listtitle href=password.php>Password opties</a> » <a class=listtitle href=password.php?x=1>Wachtwoord wijziging</a></td></tr><form method=post>

<tr><td class=list width=125>Oude wachtwoord:</td>
<td class=list><input type=password name=oud></td></tr>
<tr><td class=list>Nieuwe wachtwoord:</td>
<td class=list><input type=password name=nieuw></td></tr>
<tr><td class=list>Herhaal wachtwoord:</td>
<td class=list><input type=password name=nieuw2></td></tr>
<tr><td class=list>Reden wijziging:</td>
<td class=list><input type=checkbox name=a1 value=1 id=a1><label for=a1> Ik was mijn wachtwoord vergeten</label></td></tr>

<tr><td class=listtitle align=right colspan=2><input type=submit name=submit value=Submit class=boton></td></tr></form>

ENDHTML;
}
} else if($_GET['x'] == "2") {
print <<<ENDHTML

<table class=list cellpadding=3 cellspacing=1>
<tr><td class=listtitle><a class=listtitle href=password.php>Password opties</a> » <a class=listtitle href=password.php?x=2>Wachtwoord vergeten</a></td></tr>
<tr><td class=list>Als je je wachtwoord vergeten bent kun je een nieuw aanvragen door gebruik te maken van<BR>
<a href=?x=1>Wijzig je wachtwoord</a>. Je hoeft dan geen "Oude wachtwoord" in te vullen. Er word een mail gestuurd naar de webmaster, en die <br />kan je wachtwoord indien nodig aanpassen.</td></tr>

ENDHTML;
} else {
?>

<table class=list cellpadding=3 cellspacing=1>
<tr><td class=listtitle colspan=2><a class=listtitle href=password.php>Password opties</a></td></tr>
<tr><td class=list width=50%><a href=?x=1>Wijzig je wachtwoord</a></td>
<td class=list width=50%><a href=?x=2>Wachtwoord vergeten</a></td></tr>

<?
}
?>

</table>