<?
if(isset($_POST['jailer'])){
$data2 = mysql_query("SELECT *,UNIX_TIMESTAMP(`baktijd`) AS `baktijd`,0 FROM `users` WHERE `id`='{$_POST['jailer']}'");
$data1 = mysql_fetch_object($data2);
$datijd = $data1->gevangenis;
if($data1->baktijd + $datijd > time()){
$countdown = $data1->baktijd+$datijd-time();
$borg = $countdown*180;
if($data->contant > $borg){
mysql_query("UPDATE `users` SET `contant`=`contant`-'$borg' WHERE `id`='$data->id'");
mysql_query("UPDATE `users` SET `gevangenis`='0' WHERE `id`='$data1->id'");
$bedrag = number_format($borg, 0, '.' , '.');
$date2 = (date('m/d H:i'));
mysql_query("INSERT INTO `messages`(`date`,`to`,`from`,`ip`,`title`,`content`,`date2`,`read`,`inbox`,`reply`) values(NOW(),'$data1->login','Anoniem','$data->IP','Vrijgekocht!','$data->login heeft je vrijgekocht voor €$bedrag,- Je bent nu weer op vrije voeten!','$date2','0','1','0')");
$error = niks;
}else{$error = 1;}
}else{$error = niks;}
}
if($error == niks){
$borg = number_format($borg, 0, '.' , '.');
$_SESSION['mission'] = "Betaal borg om jezelf of iemand anders uit de gevagenis te halen";
?>
			<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup" align="center">
				<tr>
					<td>
						De borg voor <b><?echo$data1->login;?></b> is betaald, dit heeft je &euro;<?echo$borg;?>,- gekost.					</td>
				</tr>
				<tr>
					<td>
						<br><br>
							<a href="index.php?a=jail" class="msg_ok">Klik hier indien je niet automatisch verder gaat.</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<script language="javascript">
	setTimeout("document.location.href='index.php?a=jail'",(4000*2));
</script>
		</div>
	</td>
	</tr>

	</table>
	</td>
<?}
if($error == 1){
?>
			<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Je hebt onvoldoende geld om de borg te betalen					</td>
				</tr>
				<tr>
					<td>
						<br><br>
													<a href="#" onclick="history.go(-1); return false" class="error_ok">OK</a>
											</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
		</div>
	</td>
	</tr>

	</table>
	</td>
<?}if($error == ""){?>


					<div class="title_bg">
			<div class="title">Gevangenis</div>
		</div>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
			<form method="POST">
	Op deze pagina bevinden zich de gangsters die op dit moment in de gevangenis zitten. Deze kun je uitkopen voor de borg die wordt weergeven.<br \>
	<br \>
	<table width="100%" cellspacing="2" cellpadding="2" class="mod_list">
		<tr>
			<td width="6%">&nbsp;</td>
			<td width="6%">&nbsp;</td>
			<td><b>Gebruiker</b></td>
			<td width="6%">&nbsp;</td>
			<td><b>Rang</b></td>
			<td width="6%">&nbsp;</td>
			<td><b>Tijd</b></td>
			<td width="6%">&nbsp;</td>
			<td><b>Borg</b></td>
		</tr>
<?
$user1            = mysql_query("SELECT * FROM `users`");
while($user = mysql_fetch_object($user1)){
	$data2            = mysql_query("SELECT *,UNIX_TIMESTAMP(`baktijd`) AS `baktijd`,0 FROM `users` WHERE `login`='$user->login'");
	  $data1            = mysql_fetch_object($data2);
$datijd = $user->gevangenis;
	$tijdverschil1        = $data1->baktijd-3600+$datijd-time();
	if($data1->baktijd + $datijd > time()){
   list($uur,$min,$sec)=explode(":",date("H:i:s",$tijdverschil1));
$bak1            = mysql_query("SELECT *,UNIX_TIMESTAMP(`baktijd`) AS `baktijd`,0 FROM `users`");
$countdown = $data1->baktijd+$datijd-time();
$borg = number_format($countdown*180, 0, '.' , '.');
$rang = array("","Groentje","Loopjongen","Zakkenroller","Winkeldief","Dief","Mobster","Moordenaar","Lokale leider","Leider","Godfather");
$rang = $rang[$user->rank];
?>
							<tr class="top">
						<td><input type="radio" name="jailer" value="<?echo$user->id;?>"></td>
						<td align="center" width="6%"><img src="images/icons_gif/status_online.gif"></td>
						<td><a href="index.php?a=profile&x=<?echo$user->id;?>"><?if($user->admin == 1){?><FONT color='red'><?}if($user->moderator > 0){?><FONT color='#FF6600'><?}echo$user->login; if($user->admin > 0 || $user->moderator > 0){?></FONT><?}?><?if($user->vipdays > 0){?><img src="images/star.gif" border="0" width="10" height="10" alt="Betaald account"><?}?></a></td>
						<td align="center" width="6%"><img src="images/icons_gif/time.gif"></td>
						<td><?echo$rang;?></td>
						<td align="center" width="6%"><img src="images/icons_gif/coins.gif"></td>
						<td id="jail_<?echo$user->id;?>">
						<SCRIPT language="JavaScript">
						countdown(<?echo$countdown;?>,'jail_<?echo$user->id;?>','');
						</SCRIPT>

						</td>
						<td align="center" width="6%"><img src="images/icons_gif/money.gif"></td>
						<td>&euro; <?echo$borg;?></td>
					</tr>
<?}}?>
						</table>
	<br>
	<input type="submit" name="submit" value="Koop vrij" class="mod_submit">
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
<?}?>
