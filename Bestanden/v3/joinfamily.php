<?
if($data->familie != ""){?>
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
if(isset($_POST['Submit'])){
$_SESSION['mission'] = "Word lid van een familie";
$joinedfam1 = mysql_query("SELECT * FROM `families` WHERE `naam`='{$_POST['family']}'");
$joinedfam = mysql_fetch_object($joinedfam1);
if($joinedfam->naam != ""){
mysql_query("UPDATE `users` SET `familie`='$joinedfam->naam',`famlevel`='-1' WHERE `id`='$data->id'");
?>
					<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup" align="center">
				<tr>
					<td>
						Je bent toegevoegd als lid aan <b><?echo$joinedfam->naam;?></b>, maar zij zullen je wel nog eerst moeten accepteren					</td>
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
else{?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Kan de opgegeven familie niet vinden					</td>
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
if($data->familie == ""){
if(!isset($_POST['Submit'])){?>
							<div class="title_bg">
			<div class="title">Lid worden van familie</div>
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
     		<strong>Kies een familie waar je lid van wil worden!</strong>
     	</div>
     	<input type="text" name="family" maxlength="13" size="40" value="" class="cinput">
     	<br><br>
     	<input type="submit" name="Submit" value="Aanmelden!" class="mod_submit">
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
