<?php
$dbres2				= mysql_query("SELECT * FROM `config` WHERE `ding`='1'");
$data2				= mysql_fetch_object($dbres2);
?>
<? if($data->vipdays != 0 && $data2->extraatje == "Ja"){ ?>
<div class="title_bg">
			<div class="title">Extra</div>
</div>
		
		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
		<table width="100%" class="mod_list" cellspacing="2" cellpadding="2">
	<tr>
		<td width="6%" align="center">Wil je graag extra Call Credits ?<br />
		  Klik dan <a href="index.php?a=extraatje">hier</a> </td>
		</tr></table>
		</td></tr></table>
		</div>

		<table width='100%' cellspacing='2' cellpadding='2'>
			<tr>
		
		
				<td class='content_bottom'></td>
			</tr>
		</table>
			<? } ?>
		<div class="title_bg">
			<div class="title">Prive berichten</div>
		</div>
		
		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
		<table width='100%' border='0' class='mod_list' cellspacing='2' cellpadding='2' align='center'>
	<tr> 
		<td width='6%' align='center'>#</td>
		<td width='45%' align='left'><b>Onderwerp</b></td>
		<td></td>
		<td width='25%' align='left'><b>Verzender</b></td>
		<td></td>
		<td width='20%' align='left'><b>Datum</b></td>
		<td></td>
	</tr>
<?
    $dbres				= mysql_query("SELECT * FROM `messages` WHERE `to`='$data->login' AND `inbox`='1' ORDER BY `date` LIMIT 0,5");
$msgcount = mysql_num_rows($dbres);
if($msgcount > 0){
?>
					<tr>
					<td align='center'>
<?
      for($j=0+1; $info = mysql_fetch_object($dbres); $j++)
{
$poster1 = mysql_query("SELECT * FROM `users` WHERE `login`='$info->from'");
$poster = mysql_fetch_object($poster1);
$schammel				= mysql_query("SELECT * FROM `users` WHERE UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(`online`) < 300 AND `login`='$poster->login'");
$online = mysql_fetch_object($schammel);
?>					<tr>
					<td align='center'><?
if($info->read == 0){
?>
											<img title="Niet gelezen" src="images/icons_gif/email_open.gif" border="0px">
<?
}
if($info->read == 1){
?>
											<img title="Gelezen" src="images/icons_gif/email.gif" border="0px">
<?
}
?>
										</td>
					<td><a href="index.php?a=message&x=<? echo $info->id; ?>" target="_blank"><? echo $info->title; ?></td>
					<td align="center"><?if($online->login == $poster->login){?><img src="images/icons_gif/status_online.gif" title="Online"><?}?><?if($online->login != $poster->login){?><img src="images/icons_gif/status_offline.gif" title="Offline"><?}?></td>
					<td>							<a href="index.php?a=profile&x=<? echo $poster->id; ?>"><? echo $poster->login; ?></a>
						</td>
					<td align="center"><img src="images/icons_gif/time.gif" border="0px"></td>
					<td><? echo $info->date2; ?></td>
					<td><a href="index.php?a=message&del=<? echo $info->id; ?>"><img src="images/icons_gif/email_delete.gif" border="0" alt="Verwijderen"></a></td>
				</tr>
<?
}
}
if($msgcount == 0){
?>
				<tr>
				<td colspan="7">
					Er zijn geen prive berichten				</td>
			</tr>
<?}?>
				<tr>
		<td colspan=7 align="right">
			<a href="index.php?a=message">...Meer berichten</a>
		</td>
	</tr>
</table>
		</td></tr></table>
		</div>

		<table width='100%' cellspacing='2' cellpadding='2'>
			<tr>
		
				<td class='content_bottom'></td>
			</tr>
		</table>
		<br>

		<div class="title_bg">
			<div class="title">Actieve forum topics</div>
		</div>
		
		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
		<table width="100%" cellspacing="2" cellpadding="2" class="mod_list">
	<tr>
		<td align="center" width="6%">&nbsp;</td>
		<td><b>Titel</b></td>
		<td></td>
		<td><b>Laatste Poster</b></td>
		<td></td>
		<td align="center"><b>Laatste reactie</b></td>
	</tr>
<?
$topic2 = mysql_query("SELECT * FROM `forumtopics` ORDER BY `lastreplydate2` DESC LIMIT 0,5");
while($topic = mysql_fetch_object($topic2)){
$user2 = mysql_query("SELECT * FROM `users` WHERE `login`='$topic->lastreply'");
$user = mysql_fetch_object($user2);
$schammel = mysql_query("SELECT * FROM `users` WHERE UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(`online`) < 300 AND `login`='$user->login'");
$online = mysql_fetch_object($schammel);
if($user->login == $online->login){$letter = n;}else{$letter = ff;}
?>
	<tr>
								<td width="6%" align="center"><img src="images/icons_gif/folder.gif" alt="Nieuwsbericht"></td>
								<td><a href="viewtopic.php?f=<?echo$topic->subforum;?>&t=<?echo$topic->id;?>"><?echo$topic->title;?></td>
								<td><img src="images/icons_gif/status_o<?echo$letter;?>line.gif" title="O<?echo$letter;?>line"></td>
								<td><a href="index.php?a=profile&x=<?echo$user->id;?>"><?if($user->admin > 0){echo "<font color='red'>";} if($user->moderator > 0){echo "<font color='#FF6600'>";}if($user->vermoord > 0){?><s><?}  echo $user->login; if($user->vermoord == 1){?></s><?} if($user->admin > 0 || $user->moderator > 0){echo "</font>";}if($user->vipdays > 0){echo '<img src="images/star.gif" border="0" width="10" height="10" alt="Betaald account">';}?></a></td>
								<td align="center"><img src="images/icons_gif/time.gif" border="0px"></td>
								<td><?echo$topic->lastreplydate;?></td>
							</tr><?}?>	<tr>
		<td colspan=7 align="right">
			<a href="forum.php">...Meer forum topics</a>
		</td>
	</tr>
</table>
		</td></tr></table>
		</div>

		<table width='100%' cellspacing='2' cellpadding='2'>
			<tr>
		
				<td class='content_bottom'></td>
			</tr>
		</table>
				
<br>
		<div class="title_bg">
			<div class="title">Persoonlijke informatie</div>
		</div>
		
		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
		<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
	<tr>
		<td width="35%">Gebruikersnaam:</td>
		<td width="6%" align=center><img src="images/icons_gif/status_online.gif" border="0px"></td>
		<td width="69%"><a href="index.php?a=profile&x=<? echo $data->id; ?>"><?=$data->login?></a></td>
	</tr>
	<tr>
        <td width="35%">Banpunten:</td>
        <td width="6%" align=center><img src="images/icons_gif/warning.gif" border="0px"></td>
        <td width="69%"><? echo $user->banpunten; ?></td>
		</tr>
		<tr>
        <td width="35%">Forum banpunten:</td>
        <td width="6%" align=center><img src="images/icons_gif/warning.gif" border="0px"></td>
        <td width="69%"><? echo $user->forumbanpunten; ?></td>
		</tr>
		<tr>
		<td width="35%">Gezondheid:</td>
		<td width="6%" align=center><img src="images/icons_gif/heart.gif" border="0px"></td>
		<td width="69%"><a href="index.php?a=hospital"><? echo $data->health; ?>%</a></td>
	</tr>
	<tr>
		<td width="35%">Power:</td>
		<td width="6%" align=center><img src="images/icons_gif/star.gif" border="0px"></td>
		<td width="69%"><a href="index.php?a=shop"><? echo $data->power; ?></a></td>
	</tr>
	<tr><td width="35%">Goud:</td>
		<td width="6%" align=center><img src="images/icons_gif/money.gif" border="0px"></td>
		<td width="69%"><a href="index.php?a=goud_smit"><? echo $data->goud; ?> blokken</a></td>
	</tr>
	<tr>
		<td width="35%">Geld (contant):</td>
		<td width="6%" align=center><img src="images/icons_gif/money.gif" border="0px"></td>
		<td width="69%"><a href="index.php?a=bank">&euro; <? echo $data->contant; ?></a></td>
	</tr>
	<tr>
		<td width="35%">Geld (bank):</td>
		<td width="6%" align=center><img src="images/icons_gif/coins.gif" border="0px"></td>
		<td width="69%"><a href="index.php?a=bank">&euro; <? echo $data->bank; ?></a></td>
	</tr>
	<tr>
		<td width="35%">Rang:</td>
		<td width="6%" align=center><img src="images/icons_gif/lightning.gif" border="0px"></td>
		<td width="69%"><? echo $rank; ?></td>
	</tr>
	<tr>
		<td width="35%">Credits:</td>
		<td width="6%" align=center><img src="images/icons_gif/telephone.gif" border="0px"></td>
		<td width="69%"><a href="index.php?a=buycredits"><? echo $data->callcredits; ?></a></td>
	</tr>
	<tr>
		<td width="35%">Betaald account:</td>
		<td width="6%" align=center><img src="images/icons_gif/user_green.gif" border="0px"></td>
		<td width="69%"><a href="index.php?a=buycredits"><? echo $data->vipdays; ?></a></td>
	</tr>
	<tr>
		<td width="35%">Rangvordering:</td>
		<td width="6%" align=center><img src="images/icons_gif/wand.gif" border="0px"></td>
		<td width="69%"><? echo $data->rankvord; ?>%</td>
	</tr>

	<tr>
		<td width="35%">Stad:</td>
		<td width="6%" align=center><img src="images/icons_gif/world.gif" border="0px"></td>
		<td width="69%"><a href="index.php?a=station"><? echo $city; ?></a></td>
	</tr>
	<tr>
		<td width="35%">Familie:</td>
		<td width="6%" align=center><img src="images/icons_gif/group.gif" border="0px"></td>
		<td width="69%">
							<? echo $familie; ?>					</td>
	</tr>
	<tr>
		<td width="35%">Veilig:</td>
		<td width="6%" align=center><img src="images/icons_gif/shield.gif" border="0px"></td>
		<td width="69%"><? echo $data->safe; ?> uur</td>
	</tr>
	<tr>
		<td width="35%">Bescherming:</td>
		<td width="6%" align=center><img src="images/icons_gif/shield.gif" border="0px"></td>
		<td width="69%"><? echo $data->maffia; ?> uur</td>
	</tr>
	<tr>
		<td width="35%">Mijn secret link:</td>
		<td width="6%" align=center><img src="images/icons_gif/disconnect.gif" border="0px"></td>
		<td width="69%"><a href="index.php?a=click&x=<? echo $data->id; ?>"><?echo$sitelink;?>/v3/index.php?a=click&x=<? echo $data->id; ?></a></td>
	</tr>
	<tr>
		<td width="35%">Secret link info:</td>
		<td width="6%" align=center><img src="images/icons_gif/information.gif" border="0px"></td>
		<td width="69%">Als iemand op jouw secret link klikt, krijg jij 500 euro contant, en 1000 euro op je bank. Je krijgt er ook een killer van bij!</td>
	</tr>

</table>
		</td></tr></table>
		</div>

		<table width='100%' cellspacing='2' cellpadding='2'>
			<tr>
		
				<td class='content_bottom'></td>
			</tr>
		</table>
		
<br>
<?
$begin = 0;
$num = 0;
  $dbres				= mysql_query("SELECT `id` FROM `users` WHERE UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(`online`) < 300");
  $numonline				= mysql_num_rows($dbres);
    $dbres				= mysql_query("SELECT `login`,UNIX_TIMESTAMP(`signup`) AS `signup`, `vipdays`, `admin`, `power` `contant`, `moderator`, `bank`, `id`, `familie`, `rank`, `vipdays`, `login`, `vermoord` FROM `users` WHERE UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(`online`) < 300  ORDER BY `login` LIMIT $begin,9999999");
?>
		<div class="title_bg">
			<div class="title">Online leden</div>
		</div>
		
		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
		<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
	<tr>
		<td>
<?  for($j=$begin+1; $online = mysql_fetch_object($dbres); $j++)
{
?>
<a href=index.php?a=profile&x=<? echo $online->id; ?> width=\"200\"><? if($online->admin > 0){echo "<font color='red'>";} if($online->moderator > 0){echo "<font color='#FF6600'>";}if($online->vermoord > 0){?><s><?}  echo $online->login; if($online->vermoord == 1){?></s><?} if($online->admin > 0 || $online->moderator > 0){echo "</font>";}if($online->vipdays > 0){echo '<img src="images/star.gif" border="0" width="10" height="10" alt="Betaald account">';} $num = $num+1; ?></a><? if($num < $numonline){?> - <?}?>
<?
}
?>
		</td>
	</tr>
</table>
		</td></tr></table>
		</div>

		<table width='100%' cellspacing='2' cellpadding='2'>
			<tr>
		
				<td class='content_bottom'></td>
			</tr>
		</table>
		
<br>
		<div class="title_bg">
<div class="title">Top 5</div>
		</div>
		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
		<table width="100%">
		<tr class="top">
		<td valign=top width=50%>
			<div class=small_title>Top 5 Power</div>
			<table border=0 cellspacing=2 cellpadding=2 width=100% class=mod_list><tr class=top>
<?
      $select = mysql_query("SELECT * FROM `users` ORDER BY  (`power`) DESC LIMIT 0,5");
      while($list = mysql_fetch_assoc($select))

    {

    $power                = round($list[power]);
    $power2 = number_format($power, 0, '.' , '.');
?>
      <td width=60%><a href=index.php?a=profile&x=<?echo$list[id];?> style=text-decoration: none;><? if($list[admin] > 0){?><font color='red'><?} if($list[moderator] > 0){?><font color='#FF6600'><?} if($list[vermoord] == 1){?><s><?} echo$list[login]; if($list[vermoord] == 1){?></s><?} if($list[admin] > 0 || $list[moderator] > 0){echo "</font>";} if($list[vipdays] > 0){echo "<img src=images/star.gif border=0 width=10 height=10 alt=Betaald account></a></td>";}
echo"						<td width=6%><img src=images/icons_gif/star.gif alt=Power></td>
						<td>$power2</td>
                        </tr>";
                        }
                        ?></table>		</td>
		<td valign="top" width="50%">
			<div class="small_title">Top 5 Geld</div>
			<table border="0" cellspacing="2" cellpadding="2" width="100%" class="mod_list"><tr class="top">
			<table border=0 cellspacing=2 cellpadding=2 width=100% class=mod_list><tr class=top>
<?
      $select = mysql_query("SELECT * FROM `users` ORDER BY  (`contant`+`bank`) DESC LIMIT 0,5");
      while($list = mysql_fetch_assoc($select))

    {

    $geld                = round($list[contant]+$list[bank]);
    $geld2 = number_format($geld, 0, '.' , '.');
 if($list[admin] > 0){echo "<font color='red'>";}if($list[moderator] > 0){?><font color='#FF6600'><?}
?>
      <td width=60%><a href=index.php?a=profile&x=<?echo$list[id];?> style=text-decoration: none;><? if($list[admin] > 0){?><font color='red'><?}if($list[moderator] > 0){?><font color='#FF6600'><?} if($list[vermoord] == 1){?><s><?} echo$list[login]; if($list[vermoord] == 1){?></s><?} if($list[admin] > 0 || $list[moderator] > 0){echo "</font>";} if($list[vipdays] > 0){echo "<img src=images/star.gif border=0 width=10 height=10 alt=Betaald account></a></td>";}
echo"						<td width=6%><img src=images/icons_gif/money.gif alt=Geld></td>
						<td>$geld2</td>
                        </tr>";
                        }
?>
					</tr></table>		</td>
	</tr>
	<tr>
		<td valign="top" width="50%">
			<div class="small_title">Top 5 Respect</div>
			<table border="0" cellspacing="2" cellpadding="2" width="100%" class="mod_list"><tr class="top">
<?
      $select = mysql_query("SELECT * FROM `users` ORDER BY  (`respect`) DESC LIMIT 0,5");
      while($list = mysql_fetch_assoc($select))

    {

    $respect                = round($list[respect]);
    $respect2 = number_format($respect, 0, '.' , '.');
 if($list[admin] > 0){echo "<font color='red'>";}if($list[moderator] > 0){?><font color='#FF6600'><?}
?>
      <td width=60%><a href=index.php?a=profile&x=<?echo$list[id];?> style=text-decoration: none;><? if($list[admin] > 0){?><font color='red'><?} if($list[moderator] > 0){?><font color='#FF6600'><?} if($list[vermoord] == 1){?><s><?} echo$list[login]; if($list[vermoord] == 1){?></s><?} if($list[admin] > 0 || $list[moderator] > 0){echo "</font>";} if($list[vipdays] > 0){echo "<img src=images/star.gif border=0 width=10 height=10 alt=Betaald account></a></td>";}
echo"						<td width=6%><img src=images/icons_gif/ruby.gif alt=Respect></td>
						<td>$respect2</td>
                        </tr>";
                        }
?>
					</tr></table>		</td>
		<td valign="top" width="50%">
			<div class="small_title">Top 5 Killers</div>
			<table border="0" cellspacing="2" cellpadding="2" width="100%" class="mod_list"><tr class="top">
<?
      $select = mysql_query("SELECT * FROM `users` ORDER BY `killers` DESC LIMIT 0,5");
      while($list = mysql_fetch_assoc($select))

    {

    $killers2 = number_format($list[killers], 0, '.' , '.');
 if($list[admin] > 0){echo "<font color='red'>";}if($list[moderator] > 0){?><font color='#FF6600'><?}
?>
      <td width=60%><a href=index.php?a=profile&x=<?echo$list[id];?> style=text-decoration: none;><? if($list[admin] > 0){?><font color='red'><?}if($list[moderator] > 0){?><font color='#FF6600'><?} if($list[vermoord] == 1){?><s><?} echo$list[login]; if($list[vermoord] == 1){?></s><?} if($list[admin] > 0 || $list[moderator] > 0){echo "</font>";} if($list[vipdays] > 0){echo "<img src=images/star.gif border=0 width=10 height=10 alt=Betaald account></a></td>";}
echo"						<td width=6%><img src=images/icons_gif/bricks.gif alt=Killers></td>
						<td>$killers2</td>
                        </tr>";
                        }
?>
					</tr></table>		</td>
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
