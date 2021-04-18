<?php include ("../../connection.php"); ?>
<div class="title_bg">
	<div class="title">
		Crew
	</div>
</div>

<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
	<table cellpadding="0" cellspacing="0" width="100%">
		<tr>
			<td>
				De crew van <?php echo $sitename; ?> heeft de mogelijkheid alles te zien, te veranderen en beslissingen te maken zonder daar een reden voor te geven. Problemen kunnen ook gemeld worden bij een crewlid.
				<br />
				<br />
		
				<table width="100%" cellspacing="2" cellpadding="2" class="mod_list">
<?php
$admins_query = mysql_query("SELECT id, login, admin FROM users WHERE admin > '0' OR moderator > '0'");

while ($admins = mysql_fetch_assoc($admins_query))
{
	if ($admins['admin'] > 0)
	{
		$rank = "Administrator";
	}
	else
	{
		$rank = "Moderator";
	}

?>
					<tr class="top">
						<td width="120">
							<img src="images/icons_gif/status_online.gif" /> <a href="index.php?a=profile&x=<?php echo $admins['id']; ?>"><?php echo $admins['login']; ?></a>
						</td>
						
						<td>
							<img src="images/icons_gif/star.gif" /> <?php echo $rank; ?>
						</td>
					</tr>
					
<?php

}

?>
				</table>
				<br />
		
				Het is niet aangeraden om verzoeken tot het versterken van de crew naar ons te sturen. Wij zullen, mochten wij versterkingen in het team nodig hebben, zelf mensen contacteren.
			</td>
		</tr>
	</table>
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