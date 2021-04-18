<?php /* ------------------------- */
$familie1 = mysql_query("SELECT * FROM `families` WHERE `naam`='$data->familie'");
$familie = mysql_fetch_object($familie1);
if($familie->owner == $data->login){
mysql_query("UPDATE `users` SET `familie`='',`famlevel`='0' WHERE `familie`='$familie->naam'");
mysql_query("DELETE FROM `families` WHERE `id`='$familie->id'");
}
mysql_query("UPDATE `families` SET `power`=`power`-'$data->power' WHERE `naam`='$data->familie'");
mysql_query("UPDATE `users` SET `familie`='',`famlevel`='0' WHERE `login`='$data->login'");
header("Location: $sitelink/v3/index.php");
/* ------------------------- */ ?>
			<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup" align="center">
				<tr>
					<td>
						Je hebt je familie verlaten!					</td>
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
	setTimeout("document.location.href='index.php?a=news'",(3000*2));
</script>
		</div>
	</td>
	</tr>

	</table>
	</td>
