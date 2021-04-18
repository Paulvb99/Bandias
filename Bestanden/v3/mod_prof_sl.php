<font face="Arial">
<div class="title_bg">
	<div style="font-size:17px; color:#1b1a17; margin-left:10px; padding-top:4px;">
		Secret Link
	</div>
</div>

<div style="width:100%; height:auto; background:#c3b79d; font-family:arial; font-size:12px; color:#2a190e;">
	<div style="padding:5px; padding-bottom:10px;">
		Hier vind je een overzicht van alle mensen die in de afgelopen 24 uur op je secret link hebben geklikt.
	</div>
</div>

		<script language="javascript"> 
			function openTab(pTabPage,pTab){
								document.getElementById('sl_1').style.display = 'none';
								document.getElementById('sl_2').style.display = 'none';
							
				document.getElementById(pTabPage).style.display = 'block';
				
								document.getElementById('tab1').style.background = '';
				document.getElementById('tab1').style.fontWeight = 'normal';
								document.getElementById('tab2').style.background = '';
				document.getElementById('tab2').style.fontWeight = 'normal';
												
				document.getElementById(pTab).style.background = 'url(\'images/tab_info_arrow.gif\') bottom no-repeat';
				document.getElementById(pTab).style.fontWeight = 'bold';
			}
		</script> 
		<div style="width:100%; height:25px; background:url('images/tab_info_bg.jpg') repeat-x; font-family:arial; font-size:12px; color:#2a190e;"> 
									<div id="tab1" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px; background:url('images/tab_info_arrow.gif') bottom no-repeat; font-weight:bold;"><a href="#" onclick="openTab('sl_1','tab1'); return false">Secret links</a></div> 
												<div id="tab1" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px;">|</div> 
												<div id="tab2" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px;"><a href="#" onclick="openTab('sl_2','tab2'); return false">Secret link log</a></div> 
								</div>

<div style="background-color:#dbd2b7; ">
	<br />
	
	<table cellpadding="4" cellspacing="0" width="100%" align="center">
		<tr>
			<td>
				<!-- Tab #1 -->
				<div id="sl_1">
					Klik link: <a href="<?php echo $sitelink; ?>/v3/index.php?a=click&x=<?php echo $data->id; ?>">Mijn secret link INGAME</a>
					<br />
					<br />
					
					<input type="text" value="<?php echo $sitelink; ?>/v3/index.php?a=click&x=<?php echo $data->id; ?>" style="width:100%; height:26px; padding-top:2px;" onclick="this.select()" />

					Klik link: <a href="<?php echo $sitelink; ?>/v3/click2.php?x=<?php echo $data->id; ?>"> Mijn secret link OUTGAME</a>
					<br />
					<br />

					<input type="text"value="http://wo2.host22.com/v3/click2.php?x=<?php echo $data->id; ?>" style="width:100%"; height: 26px; padding-top:2px;" onclick="this.select()" />				
					<br />
					<br />
					
					Je gebruikt je INGAME link voor spelers van dit spel, en je OUTGAME link, voor mensen die hier niet geregistreerd zijn, zoals je familieleden.
					</div>

				<!-- Tab #2 -->
				<div id="sl_2" style="display:none">
					<table width="100%" class="mod_list">
						<tr>
							<td>
							</td>
							
							<td>
								<b>Tijdstip</b>
							</td>
							
							<td>
							</td>
							
							<td>
								<b>Geklikt door</b>
							</td>
							
							<td>
								<b>SL</b>
							</td>
						</tr>
						
						<tr>
<?php 

$result_1 = mysql_query("SELECT * FROM clicks WHERE login = '" . $data->login . "' ORDER BY date");

for ($j = $result_1 + 1; $info = mysql_fetch_object($result_1); $j++)
{
    $user1 = mysql_query("SELECT * FROM users WHERE login = '" . $info->ip . "'");
    $user = mysql_fetch_object($user1);
    
    $online1 = mysql_query("SELECT * FROM users WHERE UNIX_TIMESTAMP(NOW()) - UNIX_TIMESTAMP(online) < 300 AND login = '" . $user->login . "'");
    $online = mysql_fetch_object($online1);
    
    $selfclicked1 = mysql_query("SELECT * FROM clicks WHERE ip = '" . $data->login . "' AND login = '" . $user->login . "' AND active = '1'");
    $selfclicked = mysql_num_rows($selfclicked1);

?>
							<td width="10">
								<img src="images/icons_gif/time.gif" border="0" />
							</td>
							
							<td>
								<?php echo $info->date; ?>
							</td>
<?php 

    if ($online->login == $user->login)
    {
    	echo '<td width="10">
			<img src="images/icons_gif/status_online.gif" title="Online">
		</td>';
    }
    
    if ($online->login != $user->login)
    {
    	echo '<td width="10">
			<img src="images/icons_gif/status_offline.gif" title="Offline">
		</td>';
    }

?>
							<td>
								<a href="index.php?a=profile&x=<?php echo $user->id; ?>"><?php echo $user->login; ?></a>
							</td>
							
							<td width="10">
								<a href="index.php?a=click&x=<?php echo $user->id; ?>">
<?php 

    if ($selfclicked < 1)
    {
    	echo '<img src="images/icons_gif/key.gif" border="0" /></a>';
    }
    
    if ($selfclicked > 0)
    {
    	echo '<img src="images/icons_gif/key_red.gif" border="0" /></a>';
    }

?>
																		
							</td>
						</tr>
<?php 

}

?>
					</table>
					
					<center>
						<br />
						
						<table class="mod_list" width="60%">
							<tr>
								<td colspan="4">
									<b>Legenda</b>
								</td>
							</tr>
							
							<tr>
								<td>
									<img src="images/icons_gif/key.gif" border="0" />
								</td>
								
								<td>
									Andere persoon geklikt.
								</td>
								
								<td>
									<img src="images/icons_gif/key_red.gif" border="0" />
								</td>
								
								<td>
									Zelf geklikt.
								</td>
							</tr>
						</table>
					</center>
				</div>
			</td>
		</tr>
	</table>
<br />
</div>

<table width='100%' cellspacing='2' cellpadding='2'>
	<tr>
		<td class='content_bottom'>
		</td>
	</tr>
</table>

</div>
</td>
</tr>

</table>
</td>
</font>