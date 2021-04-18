<?
include("config.php");
if($data->admin != "1") {
echo "U bent geen administrator!";
exit;
}
?>

<link media="screen" href="css-v1.css" type="text/css" rel="stylesheet">


<br><br><fieldset style="border: 1px solid #D3DDE4;">
<legend style="font: bold 13px Verdana, Arial, Helvetica, sans-serif;color:#0052A4">Spel Beheer</legend>

<table border="0" cellspacing="0" cellpadding="0" align="center" width="100%">
    <tr><td width="20%" align="center"><a href="aopties.php" class="user_item"><img src="IMG_IC_DOMAIN_SETUP.gif" width="32" height="32" border="0"><br>Algemene Opties</a></td>
<td width="20%" align="center"><a href="loging.php" class="user_item"><img src="IMG_IC_LOGHIST.gif" width="32" height="32" border="0"><br>Login Geschiedenis</a></td>
<td width="20%" align="center"><a href="logs.php" class="user_item"><img src="IMG_IC_STATS.gif" width="32" height="32" border="0"><br>Logs</a></td>
<td width="20%" align="center"><a href="cronjobs.php" class="user_item"><img src="IMG_IC_CRON.gif" width="32" height="32" border="0"><br>Cronjobs</a></td></tr>
<tr></tr></table></fieldset>

<br><br>

<br><br>
</td></tr>
</table>
