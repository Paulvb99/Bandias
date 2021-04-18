<?
	$data2            = mysql_query("SELECT *,UNIX_TIMESTAMP(`hltijd`) AS `hltijd`,0 FROM `users` WHERE `login`='$data->login'");
	  $data1            = mysql_fetch_object($data2);
$datijd = $data->hl;
	$tijdverschil1        = $data1->hltijd-3600+$datijd-time();
	if($data1->hltijd + $datijd > time()){
   list($uur,$min,$sec)=explode(":",date("H:i:s",$tijdverschil1));
$error = autostelen;
$countdown = $data1->hltijd+$datijd-time();
?>
			<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						Je mag dit spel nog niet spelen. Over <font id="count_timer"></font>&nbsp; kun je weer spelen!					</td>
				</tr>
				<tr>
					<td style="color:red">
						<br><br>
						<a href="#" onclick="history.go(-1); return false" class="error_ok">OK</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<script language="javascript">
	countdown('<?=$countdown?>','count_timer','index.php?a=higherlower');
</script>		</div>
	</td>
	</tr>

	</table>
	</td>
<?}else{?>

					<div class="title_bg">
			<div class="title">Hoger Lager</div>
		</div>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
		<div id="flashcontent">

</div>
		</td></tr></table>
		</div>

		<table width='100%' cellspacing='2' cellpadding='2'>
			<tr>

				<td class='content_bottom'></td>
			</tr>
		</table>
		<script type="text/javascript">
	var flashvars = {
		xml_url: "<?echo$sitelink;?>/v3/flash/nl/xml_higherlower.php?a=start",
		done_url: "index.php?a=higherlower"

	};
	var params = {wmode:"transparent"};
	var attributes = {};
	swfobject.embedSWF("flash/nl/higher.lower.swf", "flashcontent", "570", "345", "8.0.0","flash/expressInstall.swf", flashvars, params, attributes);
</script>		</div>
	</td>
	</tr>

	</table>
	</td>
<?}?>
