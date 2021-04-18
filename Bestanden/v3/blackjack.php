					<div class="title_bg">
			<div class="title">Blackjack</div>
		</div>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
		<div id="flashcontent">

</div>
		</td></tr></table>
<?if($_GET['f'] == ""){
if($data->inzet > 0){?><center><FONT color='red'><b>Je hebt nog een blackjack sessie!<BR>Door op begin te klikken, zul je geen geld verliezen en je sessie vernieuwen.<BR><span style="font-size: 70%; line-height: normal">Let op: Er zullen slechts twee kaarten zichtbaar zijn!</span></b></FONT></center><?}
$x = rand(0,999999);
?>
		<script type="text/javascript">
	var flashvars = {
		xml_url: "flash/nl/xml_blackjack.php?x=<?echo$x;?>",
		done_url: "index.php?a=blackjack"

	};
	var params = {wmode:"transparent"};
	var attributes = {};
	swfobject.embedSWF("flash/nl/blackjack.swf", "flashcontent", "570", "500", "6.0.0","flash/expressInstall.swf", flashvars, params, attributes);
</script><?}?>

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
