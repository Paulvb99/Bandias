<?
include("config.php");
?>

<link media="screen" href="css-v1.css" type="text/css" rel="stylesheet">

<?
if(isset($_GET['x']) && $_GET['x'] == '1'){
print <<<ENDHTML

<table class=list cellpadding=3 cellspacing=1>
<tr><td class=listtitle><a class=listtitle href=messages.php>Berichten</a> » <a class=listtitle href=#>Geblokkeerde E-Mail Adressen</a></td></tr>
<tr><td class=list>Leeg</td></tr>

ENDHTML;
} else {
?>

<table class=list cellpadding=3 cellspacing=1>
<tr><td class=listtitle><a class=listtitle href=messages.php>Berichten</a></td></tr>
<tr><td class=list>Je hebt nog geen berichten</td></tr>

<?
}
?>