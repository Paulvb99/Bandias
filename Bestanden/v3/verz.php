<?
if($data->vipdays < 1){$error = 1;?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Je moet een <b>betaald account</b> hebben om toegang te krijgen tot het kladblok					</td>
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
<?}else{
if(isset($_POST['submit'])){
mysql_query("UPDATE `users` SET `kladblok`='{$_POST['notes']}' WHERE `id`='$data->id'");
}?>
<div class="title_bg">
	<div style="font-size:17px; color:#1b1a17; margin-left:10px; padding-top:4px;">
		Vip Shop</div>
</div>

<div style="width:100%; height:auto; background:#c3b79d; font-family:arial; font-size:12px; color:#2a190e;">
	<div style="padding:5px; padding-bottom:10px;">
		Je moet perse een betaald account hebben om toegang te krijgen tot de vip shop, heb je geen betaald account kan je ook niets kopen!</div>
</div>

		<font face="Arial">
<script language="javascript"> 
			function openTab(pTabPage,pTab){
								document.getElementById('shop_1').style.display = 'none';
								document.getElementById('shop_2').style.display = 'none';
								document.getElementById('shop_3').style.display = 'none';
							
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
<div id="tab1" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px; background:url('images/tab_info_arrow.gif') bottom no-repeat; font-weight:bold;"><font face="Arial"><a href="#" onClick="openTab('shop_1','tab1'); return false">Goedkope Artikelen</a></font></div> 
                                    
<div id="tab1" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px;"><font face="Arial">|</font></div> 

<div id="tab2" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px;"><font face="Arial"><a href="#" onClick="openTab('shop_2','tab2'); return false">Gemidelde Artikelen</a></font></div> 

<div id="tab1" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px;"><font face="Arial">|</font></div> 

<div id="tab3" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px;"><font face="Arial"><a href="#" onClick="openTab('shop_3','tab3'); return false">Dure Artikelen</a></font></div> 

		</div>

<font face="Arial"><div style="background-color:#dbd2b7; ">
	<br />
	
	<table cellpadding="4" cellspacing="0" width="100%" align="center">
		<tr>
			<td>
				<!-- Tab #1 -->
				<div id="shop_1">
<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
		<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
<div class="title_bg">
			<div class="title">Verzilver Code</div>
		</div>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">In een email krijg je een verzilver code. Zet dan hier je code neer.
		  <form method="post" action="index.php?a=mod_credit_code_2">
Code: <input type="text" size="50" maxlength="4" name="code"> 
<br />
<input type="submit" name="bevestig" value="Verstuur">
</form>
</div>

		<table width='100%' cellspacing='2' cellpadding='2'>
			<tr>
		
				<td class='content_bottom'></td>
			</tr>
		</table>
		<br>		</div>
	</td>
</tr>

</table>
</td>
    </table></td></tr></table>
				</div>

				<!-- Tab #2 -->
				<div id="shop_2" style="display:none">
<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
		<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
<div class="title_bg">
			<div class="title">Verzilver Code</div>
		</div>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">In een email krijg je een verzilvertje code. Zet dan hier je code neer.
		  <form method="post" action="index.php?a=mod_credit_code_2">
Code: <input type="text" size="50" maxlength="4" name="code"> 
<br />
<input type="submit" name="bevestig" value="Verstuur">
</form>
</div>

		<table width='100%' cellspacing='2' cellpadding='2'>
			<tr>
		
				<td class='content_bottom'></td>
			</tr>
		</table>
		<br>		</div>
	</td>
</tr>

</table>
</td>
    </table></td></tr></table>
					</center>
				</div>
                <!-- Tab #3 -->
				<div id="shop_3" style="display:none">
<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
		<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
<div class="title_bg">
			<div class="title">Verzilver Code</div>
		</div>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">In een email krijg je een verzilvertjes code. Zet dan hier je code neer.
		  <form method="post" action="index.php?a=mod_credit_code_2">
Code: <input type="text" size="50" maxlength="4" name="code"> 
<br />
<input type="submit" name="bevestig" value="Verstuur">
</form>
</div>

		<table width='100%' cellspacing='2' cellpadding='2'>
			<tr>
		
				<td class='content_bottom'></td>
			</tr>
		</table>
		<br>		</div>
	</td>
</tr>

</table>
</td>
    </table></td></tr></table>
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
<?
}
?>