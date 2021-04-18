<div class="title_bg">
	<div style="font-size:17px; color:#1b1a17; margin-left:10px; padding-top:4px;">
		Hoofdkwartier opties</div>
</div>

<div style="width:100%; height:auto; background:#c3b79d; font-family:arial; font-size:12px; color:#2a190e;">
	<div style="padding:5px; padding-bottom:10px;">
		Wil je nog meer informatie, Bij het 2 tabblad staat je wachtwoord dus let wel op dat niemand mee zit te lezen als je op het 2e tab knopje drukt</div>
</div>

		<font face="Arial">
<script language="javascript"> 
			function openTab(pTabPage,pTab){
								document.getElementById('hq_1').style.display = 'none';
								document.getElementById('hq_2').style.display = 'none';
								document.getElementById('hq_3').style.display = 'none';
							
				document.getElementById(pTabPage).style.display = 'block';
				
								document.getElementById('tab1').style.background = '';
				document.getElementById('tab1').style.fontWeight = 'normal';
								document.getElementById('tab2').style.background = '';
				document.getElementById('tab2').style.fontWeight = 'normal';
								document.getElementById('tab3').style.background = '';
				document.getElementById('tab2').style.fontWeight = 'normal';
												
				document.getElementById(pTab).style.background = 'url(\'images/tab_info_arrow.gif\') bottom no-repeat';
				document.getElementById(pTab).style.fontWeight = 'bold';
			}
</script> 
		</font>
        <div style="width:100%; height:25px; background:url('images/tab_info_bg.jpg') repeat-x; font-family:arial; font-size:12px; color:#2a190e;"> 
<div id="tab1" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px; background:url('images/tab_info_arrow.gif') bottom no-repeat; font-weight:bold;"><font face="Arial"><a href="#" onClick="openTab('hq_1','tab1'); return false">Hoofdkwartier</a></font></div> 
                                    
<div id="tab1" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px;"><font face="Arial">|</font></div> 

<div id="tab2" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px;"><font face="Arial"><a href="#" onClick="openTab('hq_2','tab2'); return false">Geheime Gegevens</a></font></div> 

<div id="tab1" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px;"><font face="Arial">|</font></div> 

<div id="tab3" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px;"><font face="Arial"><a href="#" onClick="openTab('hq_3','tab3'); return false">Nieuws</a></font></div> 

		</div>

<font face="Arial"><div style="background-color:#dbd2b7; ">
	<br />
	
	<table cellpadding="4" cellspacing="0" width="100%" align="center">
		<tr>
			<td>
				<!-- Tab #1 -->
				<div id="hq_1">
<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
		<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
	<tr>
		<td width="35%">Gebruikersnaam:</td>

		<td width="69%"><?=$data->login?></td>
	</tr>
	<tr>
		<td width="35%">Email:</td>

		<td width="69%"><?=$data->email?></td>
	</tr>
	<tr>
		<td width="35%">Power:</td>

		<td width="69%"><?=$data->power?></td>
	</tr>
    	<tr>
		<td width="35%">Contant:</td>

		<td width="69%"><?=$data->contant?></td>
	</tr>
    	<tr>
		<td width="35%">Bank:</td>

		<td width="69%"><?=$data->bank?></td>
	</tr>
    	<tr>
		<td width="35%">Familie:</td>

		<td width="69%"><?=$data->familie?></td>
	</tr>
    	<tr>
		<td width="35%">Gebruikersnaam:</td>

		<td width="69%"><?=$data->login?></td>
	</tr>
    </table></td></tr></table><br />
<br />

    		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
		<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">

  	<tr>
		<td width="35%">Dag rente:</td>

		<td width="69%"><?=$data->dagenrente?></td>
	</tr>
	<tr>
		<td width="35%">Familie Level:</td>

		<td width="69%"><?=$data->famlevel?><br />
1 = Familie lid<br />
2 = Sottocapo & Consilierge<br />
3 = Don</td>
	</tr>
	<tr>
		<td width="35%">IP:</td>

		<td width="69%"><?=$data->IP?></td>
	</tr>
    	<tr>
		<td width="35%">Vip dagen:</td>

		<td width="69%"><?=$data->vipdays?></td>
	</tr>
    	<tr>
		<td width="35%">Rank :</td>

		<td width="69%"><?=$data->rank?></td>
	</tr>
    	<tr>
		<td width="35%">Killers:</td>

		<td width="69%"><?=$data->killers?></td>
	</tr>
    	<tr>
		<td width="35%">Respect:</td>

		<td width="69%"><?=$data->respect?></td>
	</tr>  
    </table></td></tr></table>
				</div>

				<!-- Tab #2 -->
				<div id="hq_2" style="display:none">
					<table width="100%" class="mod_list">
							</tr>
    	<tr>
		<td width="35%">Wachtwoord :</td>

		<td width="69%"><?=$data->passdecoded?></td>
	</tr>
						</table>
					</center>
				</div>
                <!-- Tab #3 -->
				<div id="hq_3" style="display:none">
					<table width="100%" class="mod_list">
							</tr>
                                	<tr>
		<td width="100%"><b>UPDATE : Outgame</b></td>
        </tr>
        
		<tr>
		<td width="100%">Sinds vandaag is onze outgame klaar, zodat we een van de enige zijn met deze layout. Wij hopen dat jullie deze bevalt!</td>
        </tr>
    	<tr>
		<td width="100%"><b>UPDATE : Hoofdkwartier!</b></td>
        </tr><br />
        
		<tr>
		<td width="100%">OSBanditi presenteerd het nieuwe Hoofdkwartier. Dit is een nieuwe versie geheel door OSBanditi gemaakt, dit is de nieuwste versie. We hopen deze nog beter te kunnen maken naar jullie ideeën.</td>
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