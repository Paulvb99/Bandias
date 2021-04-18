<?
	$data2            = mysql_query("SELECT *,UNIX_TIMESTAMP(`draaitijd`) AS `draaitijd`,0 FROM `users` WHERE `login`='$data->login'");
	  $data1            = mysql_fetch_object($data2);
$datijd = $data->draaien;
	$tijdverschil1        = $data1->draaitijd-3600+$datijd-time();
	if($data1->draaitijd + $datijd > time()){
   list($uur,$min,$sec)=explode(":",date("H:i:s",$tijdverschil1));
$error = autostelen;
$countdown = $data1->draaitijd+$datijd-time();
?>
			<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						Je hebt de laatste tijd al aan het rad gedraaid. Over <font id="count_timer"></font>&nbsp; kun je weer draaien!					</td>
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
	countdown('<?=$countdown?>','count_timer','index.php?a=fortune');
</script>		</div>
	</td>
	</tr>

	</table>
	</td>
<?}else{
$x = rand(0,9999);?>
					<div class="title_bg">
			<div class="title">Geluksrad</div>
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
		xml_url: "<?echo$sitelink;?>/v3/flash/nl/xml_fortune.php?x=<?echo$x;?>",
		done_url: "<?echo$sitelink;?>/v3/index.php?a=fortune"

	};
	var params = {wmode:"transparent"};
	var attributes = {};
	swfobject.embedSWF("flash/nl/wheel.of.fortune.swf", "flashcontent", "570", "450", "6.0.0","flash/expressInstall.swf", flashvars, params, attributes);
</script>		</div>
	</td>
	</tr>

	</table>
	</td>
<?}?>
