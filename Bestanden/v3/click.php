<?
$query = mysql_query("SELECT * FROM `users` WHERE `id`='{$_GET['x']}'");
$user = mysql_fetch_object($query);
$query = mysql_query("SELECT * FROM `clicks` WHERE `ip`='$data->login' AND `login`='$user->login' AND `active`='1'");
$checkclick = mysql_num_rows($query);
if($checkclick < 1){
if($data->login != ""){
?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup" align="center">
				<tr>
					<td>
						<?
mysql_query("UPDATE `users` SET `killers`=`killers`+'1',`bank`=`bank`+'1000',`contant`=`contant`+'500',`power`=`power`+'50' WHERE `login`='$user->login'");
mysql_query("UPDATE `families` SET `power`=`power`+'50' WHERE `naam`='$user->familie'");
mysql_query("INSERT INTO `clicks`(login,ip,date) values('{$user->login}','$data->login',NOW())");
 echo $user->login; ?> heeft nu <b><? echo $user->killers+1; ?></b> killers opgeleid!					</td>
				</tr>
				<tr>
					<td>
						<br><br>
							<a href="index.php?a=profile&x=<?echo $_GET['x'];?>" class="msg_ok">Klik hier indien je niet automatisch verder gaat.</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<script language="javascript">
	setTimeout("document.location.href='index.php?a=profile&x=<?echo $_GET['x'];?>'",(3000*2));
</script>
		</div>
	</td>
	</tr>

	</table>
	</td>
<?
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
						<b>FOUT!</b><br><br>Je hebt deze persoon al opgeleid vandaag					</td>
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
<?}?>
