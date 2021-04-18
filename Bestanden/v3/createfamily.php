<?
if($data->familie != ""){$error = 1;?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Je bent al lid van een familie, of je staat in een wachtlijst.					</td>
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
<?}
if($data->contant >= 100000){
if(isset($_POST['Submit'])){
$fam1 = mysql_query("SELECT * FROM `families` WHERE `naam`='{$_POST['family']}'");
$fam = mysql_num_rows($fam1);
if($fam < 1){
$_SESSION['mission'] = "Word lid van een familie";
        mysql_query("INSERT INTO `families`(`naam`,`owner`,`power`) values('{$_POST['family']}','$data->login','$data->power')");
        mysql_query("UPDATE `users` SET `famlevel`='3',`familie`='{$_POST['family']}',`contant`=`contant`-'100000' WHERE `login`='$data->login'");
?>
					<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup" align="center">
				<tr>
					<td>
						De familie <b><?echo$_POST['family'];?></b> is succesvol aangemaakt!					</td>
				</tr>
				<tr>
					<td>
						<br><br>
							<a href="index.php?a=news" class="msg_ok">Klik hier indien je niet automatisch verder gaat.</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<script language="javascript">
	setTimeout("document.location.href='index.php?a=news'",(4000*2));
</script>
		</div>
	</td>
	</tr>

	</table>
	</td>
<?}
else{
$error = 1;
?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Er is al een familie met deze naam!					</td>
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
<?}
}}
if(isset($_POST['Submit'])){
if($data->contant < 100000){
$error = 1;
?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Je hebt niet genoeg geld!					</td>
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
<?}}
if($data->vipdays < 1){
$error = 1;
?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Je moet een betaald account hebben om een familie op te richten! 					</td>
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
<?}
if($error == ""){
if(!isset($_POST['Submit'])){?>
							<div class="title_bg">
			<div class="title">Familie aanmaken</div>
		</div>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
<form name="form1" method="POST">
 <div align="center">
  <br>
  <table width="400" border="0" cellspacing="0" cellpadding="8" class="mod_list" style="border: 1px solid black">
   <tr>
     <td align="center">
     	<div align="center">
     		<strong>Een familie aanmaken kost €100.000 en je moet er betaald account voor hebben.<br>Met een familie kun je o.a. andere leden helpen, en nog wat extra power in het spel brengen!</strong>
     	</div>
     	<input type="text" name="family" maxlength="30" size="40" value="" class="cinput">
     	<br><br>
     	<input type="submit" name="Submit" value="Aanmaken" class="mod_submit">
     </td>
   </tr></form>
  </table>
 </div>


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
<?}}?>
