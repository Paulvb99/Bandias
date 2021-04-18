<?
$query = mysql_query("SELECT * FROM `families` WHERE `id`='{$_GET['x']}'");
$user = mysql_fetch_object($query);
if(!preg_match("/\b$data->id\b/i", "$user->clicks")){
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
$erbij = "$family->clicks $data->id";
mysql_query("UPDATE `families` SET `clicks`='$erbij', `killers`=`killers`+'1' WHERE `id`='$user->id'");
 echo $user->naam; ?> hebben nu <b><? echo $user->killers+1; ?></b> killers opgeleid!					</td>
				</tr>
				<tr>
					<td>
						<br><br>
							<a href="index.php?a=famprofile&x=<?echo $_GET['x'];?>" class="msg_ok">Klik hier indien je niet automatisch verder gaat.</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<script language="javascript">
	setTimeout("document.location.href='index.php?a=famprofile&x=<?echo $_GET['x'];?>'",(3000*2));
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
						<b>FOUT!</b><br><br>Je bent vandaag al opgeleid door deze familie					</td>
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
