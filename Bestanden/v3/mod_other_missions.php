		<div class="title_bg"><div style="font-size:17px; color:#1b1a17; margin-left:10px; padding-top:4px;">Missies</div></div>
		<div style="width:100%; height:auto; background:#c3b79d; font-family:arial; font-size:12px; color:#2a190e;">
			<div style="padding:5px; padding-bottom:10px;">
			Speel de missies, leer het spel en verdien veel geld!<br><br>
	<br />
			</div>
		</div>

		<script language="javascript">
			function openTab(pTabPage,pTab){
								document.getElementById('mission_1').style.display = 'none';
								document.getElementById('mission_2').style.display = 'none';
								document.getElementById('mission_3').style.display = 'none';

				document.getElementById(pTabPage).style.display = 'block';

								document.getElementById('tab1').style.background = '';
				document.getElementById('tab1').style.fontWeight = 'normal';
								document.getElementById('tab2').style.background = '';
				document.getElementById('tab2').style.fontWeight = 'normal';
								document.getElementById('tab3').style.background = '';
				document.getElementById('tab3').style.fontWeight = 'normal';

				document.getElementById(pTab).style.background = 'url(\'images/tab_info_arrow.gif\') bottom no-repeat';
				document.getElementById(pTab).style.fontWeight = 'bold';
			}
		</script>
		<div style="width:100%; height:25px; background:url('images/tab_info_bg.jpg') repeat-x; font-family:arial; font-size:12px; color:#2a190e;">
									<div id="tab1" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px; background:url('images/tab_info_arrow.gif') bottom no-repeat; font-weight:bold;"><a href="#" onclick="openTab('mission_1','tab1'); return false">Tutorial</a></div>
												<div style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px;">|</div>
												<div id="tab2" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px;"><a href="#" onclick="openTab('mission_2','tab2'); return false">Gevorderde tutorial</a></div>
												<div style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px;">|</div>
												<div id="tab3" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px;"><a href="#" onclick="openTab('mission_3','tab3'); return false">Expert missies</a></div>
								</div>

		<div style="background-color:#dbd2b7; ">
		<br>
		<table cellpadding="4" cellspacing="0" width="100%" align="center"><tr><td>

<form method="POST" action="index.php?a=mod_other_missions&f=domission" onsubmit="return checkError(this)">
	<input type="hidden" name="sel" id="sel" value="">

	<div id="mission_1" style="display:none">

		<table align="center" width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
			<tr>
				<td width="5%"></td>
				<td width="60%"><strong>Missie</strong></td>
				<td>&nbsp;</td>
				<td><strong>Geld</strong></td>
				<td>&nbsp;</td>
				<td><strong>Power</strong></td>
				<td width="5%"><strong>Voltooid</strong></td>
			</tr>

<?$missions = mysql_query("SELECT * FROM `missions` WHERE `moeilijkheid`='1'");
while($mission = mysql_fetch_object($missions)){
$power = number_format($mission->power, 0, '.', '.');
$geld = number_format($mission->geld, 0, '.', '.');
if(preg_match("/\b$mission->id\b/i", "$data->missionsfixed")){$letter = "done";}else{$letter = "not_done";}?>
							<tr>
					<td width="5%" align="center">
						<a href="#" onclick="document.getElementById('desc_<?echo$mission->id;?>').style.display = ''; return false">
							<img src="images/icons/information.png" 		onMouseOver="Tip('Klik hier voor meer informatie',FADEIN, 500, FADEOUT, 500, FOLLOWMOUSE, false, BALLOON, true,OFFSETX,-20)" onmouseout="UnTip()"
		 border="0">
						</a>
					</td>
					<td width="60%">
						<b><?echo$mission->title;?></b><br>
						<a href="#" onclick="switchElementNoBlock('desc_<?echo$mission->id;?>'); return false"><i>Klik hier voor meer informatie</i></a>
					</td>
					<td><img src="images/icons_gif/money.gif"></td>
					<td align="right">&euro;<?echo$geld;?>&nbsp;</td>
					<td><img src="images/icons_gif/star.gif"></td>
					<td align="right"><?echo$power;?>&nbsp;</td>
					<td width="5%" align="center"><img src="images/icons_custom/<?echo$letter;?>.gif"></td>
				</tr>
				<tr id="desc_<?echo$mission->id;?>" style="display:none">
					<td align="center" valign="top">
						<a href="#" onclick="document.getElementById('desc_<?echo$mission->id;?>').style.display = 'none'; return false">
							<img src="images/icons_gif/cancel.gif" border="0">
						</a>
					</td>
					<td colspan="6" style="background-color:#FFFBEF">
<?echo"$mission->content";?><br>
						<br>
					</td>
				</tr><?}?>
					</table>
	</div>
	<div id="mission_2" style="display:none">

		<table align="center" width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
			<tr>
				<td width="5%"></td>
				<td width="60%"><strong>Missie</strong></td>
				<td>&nbsp;</td>
				<td><strong>Geld</strong></td>
				<td>&nbsp;</td>
				<td><strong>Power</strong></td>
				<td width="5%"><strong>Voltooid</strong></td>
			</tr>

<?$missions = mysql_query("SELECT * FROM `missions` WHERE `moeilijkheid`='2'");
while($mission = mysql_fetch_object($missions)){
$power = number_format($mission->power, 0, '.', '.');
$geld = number_format($mission->geld, 0, '.', '.');
if(preg_match("/\b$mission->id\b/i", "$data->missionsfixed")){$letter = "done";}else{$letter = "not_done";}?>
							<tr>
					<td width="5%" align="center">
						<a href="#" onclick="document.getElementById('desc_<?echo$mission->id;?>').style.display = ''; return false">
							<img src="images/icons/information.png" 		onMouseOver="Tip('Klik hier voor meer informatie',FADEIN, 500, FADEOUT, 500, FOLLOWMOUSE, false, BALLOON, true,OFFSETX,-20)" onmouseout="UnTip()"
		 border="0">
						</a>
					</td>
					<td width="60%">
						<b><?echo$mission->title;?></b><br>
						<a href="#" onclick="switchElementNoBlock('desc_<?echo$mission->id;?>'); return false"><i>Klik hier voor meer informatie</i></a>
					</td>
					<td><img src="images/icons_gif/money.gif"></td>
					<td align="right">&euro;<?echo$geld;?>&nbsp;</td>
					<td><img src="images/icons_gif/star.gif"></td>
					<td align="right"><?echo$power;?>&nbsp;</td>
					<td width="5%" align="center"><img src="images/icons_custom/<?echo$letter;?>.gif"></td>
				</tr>
				<tr id="desc_<?echo$mission->id;?>" style="display:none">
					<td align="center" valign="top">
						<a href="#" onclick="document.getElementById('desc_<?echo$mission->id;?>').style.display = 'none'; return false">
							<img src="images/icons_gif/cancel.gif" border="0">
						</a>
					</td>
					<td colspan="6" style="background-color:#FFFBEF">
<?echo"$mission->content";?><br>
						<br>
					</td>
				</tr><?}?>
					</table>
	</div>
	<div id="mission_3" style="display:none">

		<table align="center" width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
			<tr>
				<td width="5%"></td>
				<td width="60%"><strong>Missie</strong></td>
				<td>&nbsp;</td>
				<td><strong>Geld</strong></td>
				<td>&nbsp;</td>
				<td><strong>Power</strong></td>
				<td width="5%"><strong>Voltooid</strong></td>
			</tr>

<?$missions = mysql_query("SELECT * FROM `missions` WHERE `moeilijkheid`='3'");
while($mission = mysql_fetch_object($missions)){
$power = number_format($mission->power, 0, '.', '.');
$geld = number_format($mission->geld, 0, '.', '.');
if(preg_match("/\b$mission->id\b/i", "$data->missionsfixed")){$letter = "done";}else{$letter = "not_done";}?>
							<tr>
					<td width="5%" align="center">
						<a href="#" onclick="document.getElementById('desc_<?echo$mission->id;?>').style.display = ''; return false">
							<img src="images/icons/information.png" 		onMouseOver="Tip('Klik hier voor meer informatie',FADEIN, 500, FADEOUT, 500, FOLLOWMOUSE, false, BALLOON, true,OFFSETX,-20)" onmouseout="UnTip()"
		 border="0">
						</a>
					</td>
					<td width="60%">
						<b><?echo$mission->title;?></b><br>
						<a href="#" onclick="switchElementNoBlock('desc_<?echo$mission->id;?>'); return false"><i>Klik hier voor meer informatie</i></a>
					</td>
					<td><img src="images/icons_gif/money.gif"></td>
					<td align="right">&euro;<?echo$geld;?>&nbsp;</td>
					<td><img src="images/icons_gif/star.gif"></td>
					<td align="right"><?echo$power;?>&nbsp;</td>
					<td width="5%" align="center"><img src="images/icons_custom/<?echo$letter;?>.gif"></td>
				</tr>
				<tr id="desc_<?echo$mission->id;?>" style="display:none">
					<td align="center" valign="top">
						<a href="#" onclick="document.getElementById('desc_<?echo$mission->id;?>').style.display = 'none'; return false">
							<img src="images/icons_gif/cancel.gif" border="0">
						</a>
					</td>
					<td colspan="6" style="background-color:#FFFBEF">
<?echo"$mission->content";?><br>
						<br>
					</td>
				</tr><?}?>
					</table>
	</div>

<script language="javascript">
	openTab('mission_1','tab1');
</script>

</form>

<br />
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
