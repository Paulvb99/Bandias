							<div class="title_bg">
			<div class="title">Families</div>
		</div>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
			<table width='100%' border='0' cellspacing='2' cellpadding='2' align='center' class="mod_list">
		<tr>
			<td><div align='left'>&nbsp;</div></td>
			<td><div align='left'><b>Familie</b></div></td>
			<td><div align='left'><b>Oprichter</b></div></td>
			<td><div align='left'>&nbsp;</div></td>
			<td><div align='left'><b>Geld</b></div></td>
			<td><div align='left'>&nbsp;</div></td>
			<td><div align='left'><b>Familie Power</b></div></td>
		</tr>
<?
$message1 = mysql_query("SELECT * FROM `messages` WHERE `to`='$data->login'");
$message = mysql_fetch_object($message1);
$msgcount = mysql_num_rows($message1);
$power = 0;
$begin = ($_GET['p'] >= 0) ? $_GET['p']*30 : 0;
$j=$begin;
$families1			= mysql_query("SELECT * FROM `families`");
$families = mysql_num_rows($families1);
$pages = floor($families/30+1);
$dbres				= mysql_query("SELECT * FROM `families` ORDER BY `power` DESC LIMIT $begin,30");
      while($list = mysql_fetch_assoc($dbres))
{
$j++;
$leden1 = mysql_query("SELECT * FROM `users` WHERE `familie`='$list[naam]'");
$user1 = mysql_query("SELECT * FROM `users` WHERE `login`='$list[owner]'");
$user = mysql_fetch_object($user1);
$geld1 = $list[contant]+$list[bank];
$geld = number_format($geld1, 0, '.' , '.');
$power = number_format($list[power], 0, '.' , '.');
?>
	                   	<tr class="top">
							<td><div align="center"><b><?echo$j;?></b></div></td>
					        <td><div align="left"><a href="index.php?a=famprofile&x=<?echo$list[id];?>"><?echo$list[naam];?></div></td>
					        <td><div align="left"><a href="index.php?a=profile&x=<?echo$user->id;?>"><?echo$user->login; if($user->vipdays > 0){?><img src="images/star.gif" border="0" width="10" height="10" alt="Betaald account"><?}?></a></div></td>
							<td><div align="center"><img src="images/icons_gif/money.gif"></div></td>
					        <td><div align="left">&euro; <?echo$geld;?></div></td>
							<td><div align="center"><img src="images/icons_gif/star.gif"></div></td>
					        <td><div align="left"><?echo$power;?></div></td>
						</tr>
<?}?>
<tr>
			<td colspan="7">
<?
if($pages > 1){
$prev = $_GET['p']-1;
$next = $_GET['p']+1;
    $dbres				= mysql_query("SELECT id FROM `families`");
  print "</table>\n\n<table width=100%>\n  <tr><td class=\"mainTxt\" align=\"center\">";
  if(mysql_num_rows($dbres) <= -1) {
    print "&#60; 1 &#62;</td></tr></table>\n";
	}
  else {
    if($begin/30 == 0) {
      print "&#60;&#60; Vorige | ";
	  }
    else {
      print "<a href=\"index.php?a=clanlist&p=". ($begin/30-1) ."\">&#60;&#60; Vorige</a> | ";
}
    for($i=0; $i<mysql_num_rows($dbres)/30; $i++) {
$j = $i+1;
      print "<a href=\"index.php?a=clanlist&p=$i\">$j</a> | ";
    }

    if($begin+30 >= mysql_num_rows($dbres)) {
      print "Volgende &#62;&#62; ";
	  }
    else {
      print "<a href=\"index.php?a=clanlist&p=". ($begin/30+1) ."\">Volgende &#62;&#62;</a>";
  }
  }
  }
?>
										</td>
		</tr>
	</table>
De lijst wordt gesorteerd op familie power, dus de extra power van de leden komen niet op volgorde!
		</td></tr></table>
		</div>

		<table width='100%' cellspacing='2' cellpadding='2'>
			<tr>

				<td class='content_bottom'></td>
			</tr>
		</table>
				</div>
	</td>
	</tr>

	</table>
	</td>
