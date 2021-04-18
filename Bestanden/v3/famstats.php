<div class="title_bg">
	<div class="title" align=center>
		Top 10 Statistieken Families
	</div>
</div>
<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
	<table cellpadding="0" cellspacing="0" width="100%">
		<tr>
			<td>
				
<table width="100%" cellspacing="2" cellpadding="2" class="mod_list">
<tr class="top">Hier bij de familie statistieken vind je verschillende info over de top 10 families waar onder het totale geld de killers de gewonnen aanvallen en de totale familie power
						

					</tr>
</table></table>
</div>

<table width='100%' cellspacing='2' cellpadding='2'>
	<tr>
		<td class='content_bottom'></td>
	</tr>
</table>

<div class="title_bg">
<div class="title">Top 10 Statistieken Families</div>
		</div>
		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
		<table width="100%">
		<tr class="top">
		<td valign=top width=50%>
			<div class=small_title>Top 10 Power</div>
			<table border=0 cellspacing=2 cellpadding=2 width=100% class=mod_list><tr class=top>
<?
      $select = mysql_query("SELECT * FROM `families` ORDER BY  (`power`) DESC LIMIT 0,10");
      while($list = mysql_fetch_assoc($select))

    {

    $power                = round($list[power]);
    $power2 = number_format($power, 0, '.' , '.');
?>
      <td width=60%><a href=index.php?a=famprofile&x=<?echo$list[id];?>"><?echo$list[naam];?> <? if($list[admin] > 0){?><font color='red'><?} if($list[moderator] > 0){?><font color='green'><?} if($list[vermoord] == 1){?><s><?} echo$list[login]; if($list[vermoord] == 1){?></s><?} if($list[admin] > 0 || $list[moderator] > 0){echo "</font>";} if($list[vipdays] > 0){echo "<img src=images/star.gif border=0 width=10 height=10 alt=Betaald account></a></td>";}
echo"						<td width=6%><img src=images/icons_gif/star.gif alt=Power></td>
						<td>$power2</td>
                        </tr>";
                        }
                        ?></table>		</td>
		<td valign="top" width="50%">
			<div class="small_title">Top 10 Geld</div>
			<table border="0" cellspacing="2" cellpadding="2" width="100%" class="mod_list"><tr class="top">
			<table border=0 cellspacing=2 cellpadding=2 width=100% class=mod_list><tr class=top>
<?
      $select = mysql_query("SELECT * FROM `families` ORDER BY  (`contant`+`bank`) DESC LIMIT 0,10");
      while($list = mysql_fetch_assoc($select))

    {

    $geld                = round($list[contant]+$list[bank]);
    $geld2 = number_format($geld, 0, '.' , '.');
 if($list[admin] > 0){echo "<font color='red'>";}if($list[moderator] > 0){?><font color='green'><?}
?>
      <td width=60%><a href=index.php?a=famprofile&x=<?echo$list[id];?>"><?echo$list[naam];?> <? if($list[admin] > 0){?><font color='red'><?}if($list[moderator] > 0){?><font color='green'><?} if($list[vermoord] == 1){?><s><?} echo$list[login]; if($list[vermoord] == 1){?></s><?} if($list[admin] > 0 || $list[moderator] > 0){echo "</font>";} if($list[vipdays] > 0){echo "<img src=images/star.gif border=0 width=10 height=10 alt=Betaald account></a></td>";}
echo"						<td width=6%><img src=images/icons_gif/money.gif alt=Geld></td>
						<td>$geld2</td>
                        </tr>";
                        }
?>
					</tr></table>		</td><tr>
<tr>
		<td valign=top width=50%>
			<div class=small_title>Top 10 killers</div>
			<table border=0 cellspacing=2 cellpadding=2 width=100% class=mod_list><tr class=top>
<?
      $select = mysql_query("SELECT * FROM `families` ORDER BY  (`killers`) DESC LIMIT 0,10");
      while($list = mysql_fetch_assoc($select))

    {

    $killers                = round($list[killers]);
    $killers2 = number_format($killers, 0, '.' , '.');
?>
      <td width=60%><a href=index.php?a=famprofile&x=<?echo$list[id];?>"><?echo$list[naam];?> <? if($list[admin] > 0){?><font color='red'><?} if($list[moderator] > 0){?><font color='green'><?} if($list[vermoord] == 1){?><s><?} echo$list[login]; if($list[vermoord] == 1){?></s><?} if($list[admin] > 0 || $list[moderator] > 0){echo "</font>";} if($list[vipdays] > 0){echo "<img src=images/star.gif border=0 width=10 height=10 alt=Betaald account></a></td>";}
echo"						<td width=6%><img src=images/icons_gif/bricks.gif alt=Power></td>
						<td>$killers2</td>
                        </tr>";
                        }
                        ?></table>		</td>
		<td valign="top" width="50%">
			<div class="small_title">Top 10 gewonnen  famillie aanvallen</div>
			<table border="0" cellspacing="2" cellpadding="2" width="100%" class="mod_list"><tr class="top">
			<table border=0 cellspacing=2 cellpadding=2 width=100% class=mod_list><tr class=top>
<?
      $select = mysql_query("SELECT * FROM `families` ORDER BY  (`attwins`) DESC LIMIT 0,10");
      while($list = mysql_fetch_assoc($select))

    {

    $attwins                = round($list[attwins]);
    $attwins2 = number_format($attwins, 0, '.' , '.');
 if($list[admin] > 0){echo "<font color='red'>";}if($list[moderator] > 0){?><font color='green'><?}
?>
      <td width=60%><a href=index.php?a=famprofile&x=<?echo$list[id];?>"><?echo$list[naam];?> <? if($list[admin] > 0){?><font color='red'><?}if($list[moderator] > 0){?><font color='green'><?} if($list[vermoord] == 1){?><s><?} echo$list[login]; if($list[vermoord] == 1){?></s><?} if($list[admin] > 0 || $list[moderator] > 0){echo "</font>";} if($list[vipdays] > 0){echo "<img src=images/star.gif border=0 width=10 height=10 alt=Betaald account></a></td>";}
echo"						<td width=6%><img src=images/icons_gif/brick_add alt=Geld></td>
						<td>$attwins2</td>
                        </tr>";
                        }
?>
					</tr></table>		</td>
	</tr>
	
	</tr>
</table>
		</td></tr></table>
		</div>

		<table width='100%' cellspacing='2' cellpadding='2'>
			<tr>
		
				<td class='content_bottom'></td>
			</tr>
		</table>
		<br>		</div>
</td>
	</tr>

	</table>
	</td>