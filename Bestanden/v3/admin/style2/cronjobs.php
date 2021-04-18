<?
include("config.php");

$gegevens2            = mysql_query("SELECT * FROM crons WHERE id='1'") or die(mysql_error()); 
      $cron            = mysql_fetch_assoc($gegevens2); 

?>

<link media="screen" href="css-v1.css" type="text/css" rel="stylesheet">

<table class=list cellpadding=4 cellspacing=1>
<tr><td class=listtitle><a class=listtitle href=#>#</a></td>
<td class=listtitle><a class=listtitle href=#>Name</td>
<td class=listtitle><a class=listtitle href=#>Status</td>
<td class=listtitle><a class=listtitle href=#>Laatste uitvoer</td></tr>

<tr><td class=list width=1>1</td>
<td class=list>Cron uur</td>
<td class=list><img src=online.png border=0 alt="Active"> Active</td>
<td class=list><? echo $cron['uurtijd'] ?></td></tr>

<tr><td class=list2 width=1>2</td>
<td class=list2>Cron dag</td>
<td class=list2><img src=online.png border=0 alt="Active"> Active</td>
<td class=list><? echo $cron['dagtijd'] ?></td></tr>
<tr><td class=list2 width=1>3</td>
<td class=list2>Cron Week</td>
<td class=list2><img src=online.png border=0 alt="Active"> Active</td>
<td class=list><? echo $cron['weektijd'] ?></td></tr>
