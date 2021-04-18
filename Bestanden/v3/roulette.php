					<div class="title_bg">
			<div class="title">Roulette</div>
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
<?$x = rand(0,999999);?>
		xml_url: "<?echo$sitelink;?>/v3/flash/nl/xml_roulette.php?x=<?echo$x;?>",
		done_url: "index.php?a=roulette",
		remain: "15"

	};
	var params = {wmode:"transparent"};
	var attributes = {};
	swfobject.embedSWF("flash/nl/roulette.swf", "flashcontent", "570", "500", "6.0.0","flash/expressInstall.swf", flashvars, params, attributes);
</script>		</div>
	</td>
	</tr>

	</table>
	</td>
