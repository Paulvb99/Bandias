<?
if($_GET['x'] == go){
mysql_query("UPDATE `users` SET `vakantie`='7' WHERE `login`='$data->login'");
?>
					<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup" align="center">
				<tr>
					<td>
						Je account is nu op vakantie ingesteld en je zal uitloggen. Over een week kan je pas weer inloggen.					</td>
				</tr>
				<tr>
					<td>
						<br><br>
							<a href="login.php?x=logout" class="msg_ok">Klik hier indien je niet automatisch verder gaat.</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<script language="javascript">
	setTimeout("document.location.href='login.php?x=logout'",(4000*2));
</script>
		</div>
	</td>
	</tr>

	</table>
	</td>
<?}
if($_GET['x'] != go){
?>
	<div class="title_bg">
			<div class="title">Vakantie</div>
		</div>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
			Mocht je in het echte leven op vakantie gaan of om een andere reden (tijdelijk) niet kunnen spelen, dan is het wel zo makkelijk om tijdelijk je account 'uit te schakelen'. Je kan dan niet aangevallen worden en op je profiel zal te zien zijn dat je op vakantie bent.<br /><br />
	Hier zijn echter nog wel een aantal andere voorwaarden aan verbonden. Zo zul je, als je jezelf het vakantiestatus hebt gegeven, niets op de site kunnen doen en is er een <b>minimum van één week vakantie</b>! Als je dus aangeeft dat je een week weg bent, dan zul je dus niet op je account kunnen inloggen!<br /><br />
	Wil je op vakantie gaan? Klik dan op de knop hier onder om je account voor een week uit te schakelen. Na een week zul je automatisch weer kunnen inloggen en kun je er desnoods nog een week bij aanplakken.	<br /><br />
    <input type="button" name="submit" value="Klik hier om voor een week op vakantie te gaan!" class="mod_submit" onclick="askAgain('Weet je zeker dat je je account op vakantie wil instellen?','vacation.php?x=go')">

		</td></tr></table>
		</div>

		<table width='100%' cellspacing='2' cellpadding='2'>
			<tr>

				<td class='content_bottom'></td>
			</tr>
		</table>

<script language="javascript" type="text/javascript">

	function askAgain(pQuestion,pURL)	{
		if(confirm(pQuestion)){
			document.location.href = pURL;
		}
	}

</script>		</div>
	</td>
	</tr>

	</table>
	</td>
<?
}
?>
