<?php include ("../../connection.php"); ?>
<?$user1 = mysql_query("SELECT * FROM `users`");
$users = mysql_num_rows($user1);
$verbannenen1 = mysql_query("SELECT * FROM `users` WHERE `banpunten`>'0'");
$verbannenen = mysql_num_rows($verbannenen1);
?>
<div class="title_bg">
	<div class="title">
		Verbannen accounts
	</div>
</div>

<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
	<table cellpadding="0" cellspacing="0" width="100%">
		<tr>
			<td>
				Hieronder vind je een lijst met mensen die zich niet aan de regels hebben gehouden, zij zijn verbannen.<br>
                Er zijn momenteel: <b><?php echo $verbannenen; ?></b> verbannen accounts in het spel! <b> 
				<br />
				<br />
		
				<table width="100%" cellspacing="1" cellpadding="1" class="mod_list">
<?php
$banned_query = mysql_query("SELECT id, login, banpunten FROM users WHERE banpunten > '0' OR banpunten > '0'");

while ($banned= mysql_fetch_assoc($banned_query))
{
	if ($banned['banpunten'] > 0)
	{
		$rank = "";
	}
	else
	{
		$rank = "";
	}

?>
					<tr class="top">
						<td width="0">
							<a href="index.php?a=profile&x=<?php echo $banned['id']; ?>"><?php echo $banned['login']; ?></a>
						</td>
						
						<td>
						</td>
					</tr>
					
<?php

}

?>
				</table>
				<br />
		
				Heb jij een misbruikende speler of crew lid gevonden? Meld het aan een admin, let op er moet bewijs zijn!
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