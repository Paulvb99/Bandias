<?
if(isset($_GET['x'])){
if($data->geefeer > 0){
$user1 = mysql_query("SELECT * FROM `users` WHERE `id`='{$_GET['x']}'");
$user  = mysql_fetch_object($user1);
if($user->login != $data->login){
if($user->login != ""){
mysql_query("UPDATE `users` SET `geefeer`=`geefeer`-'1' WHERE `login`='$data->login'");
mysql_query("UPDATE `users` SET `respect`=`respect`+'1' WHERE `login`='$user->login'");
$date2 = (date('m/d H:i'));
        mysql_query("INSERT INTO `messages`(`date`,`to`,`from`,`ip`,`title`,`content`,`date2`,`read`,`inbox`,`reply`) values(NOW(),'$user->login','$data->login','$data->ip','Respect voor je!','Bandito,

        Het lid $data->login heeft respect voor je en een respectpunt gegeven!

        Groeten,
        Anoniem','$date2','0','1','0')");
        mysql_query("INSERT INTO `messages`(`date`,`to2`,`from`,`ip`,`title`,`content`,`date2`,`read`,`inbox`,`reply`) values(NOW(),'$user->login','$data->login','$data->ip','Respect voor je!','Bandito,

        Het lid $data->login heeft respect voor je en een respectpunt gegeven!

        Groeten,
        Anoniem','$date2','0','3','0')");
}
}
}
else{
?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Je hebt geen respectpunten meer om uit te geven					</td>
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
<?
}
if($user->login == $data->login){
?>
					<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Je kan jezelf geen respectpunten geven!					</td>
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
<?
}
else if($data->geefeer > 0){
$_SESSION['mission'] = "Geef iemand respect";
?>
					<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup" align="center">
				<tr>
					<td>
						Je hebt het lid 1 respectpunt gegeven					</td>
				</tr>
				<tr>
					<td>
						<br><br>
							<a href="index.php?a=profile&x=<?echo$_GET['x'];?>" class="msg_ok">Klik hier indien je niet automatisch verder gaat.</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<script language="javascript">
	setTimeout("document.location.href='index.php?a=profile&x=<?echo$_GET['x'];?>'",(3000*2));
</script>
		</div>
	</td>
	</tr>

	</table>
	</td>
<?
}
}
if(!isset($_GET['x'])){
?>
<div class="title_bg">
			<div class="title">Respect</div>
		</div>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>

Je hebt de mogelijkheid om mensen respect te geven. Je ontvangt af en toe respectpunten en deze kun je aan andere leden geven. Bij het profiel van een lid is dan te zien hoeveel respect hij of zij heeft ontvangen.<br />
<br />
Op dit moment heb je <b><?echo $data->geefeer;?></b> respectpunt<?if($data->geefeer > 1 || $data->geefeer == 0){?>en<?}?> beschikbaar om uit te geven. Ga naar een profiel om iemand deze punten te geven. Deze ontvangt dan een privébericht met daarin de mededeling dat jij respect voor hem hebt!<br />
<br />
Je hebt op dit moment <b><?echo $data->respect;?></b> respectpunt<?if($data->respect > 1 || $data->respect == 0){?>en<?}?> ontvangen van anderen.

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
<?
}
?>
