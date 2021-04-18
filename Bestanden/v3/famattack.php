<?
$family1 = mysql_query("SELECT * FROM `families` WHERE `id`='{$_GET['x']}'");
$family = mysql_fetch_object($family1);
$familie1 = mysql_query("SELECT * FROM `families` WHERE `naam`='$data->familie'");
$familie = mysql_fetch_object($familie1);
if($family->naam == $data->familie){$error = "true";?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br><BR>Je mag je eigen familie niet aanvallen! 					</td>
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
<?}else if($data->famlevel < 3){$error = "true";?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Alleen de don's mogen andere families aanvallen 					</td>
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
<?}else if($family->id == ""){$error = "true";?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Deze familie is niet gevonden! 					</td>
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
<?}else if(preg_match("/\b$familie->id\b/i", "$family->attacked")){$error = "true";?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Deze familie hebben jullie laatste 24 uur al aangevallen. Zo gemakkelijk is het dus niet! 					</td>
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
<?}if($error == ""){
$erbij = "$family->attacked $familie->id";
mysql_query("UPDATE `families` SET `attacked`='$erbij' WHERE `id`='$family->id'");
$schadekillers = $familie->killers*100;
$schade = $familie->power+$schadekillers;
$schadekillersen = $family->killers*100;
$schadeen = $family->power+$schadekillersen;
if($schade > $schadeen){$win = "true"; $winner = $familie->naam; $loser = $family->naam;}else{$win = "false"; $winner = $family->naam; $loser = $familie->naam;}
if($win == "true"){$wintext = "gewonnen";$gestolen1 = $family->contant*rand(20,30)/100;$gestolen = round($gestolen1);
mysql_query("UPDATE `families` SET `contant`=`contant`-'$gestolen', `attlost`=`attlost`+'1' WHERE `id`='$family->id'");
mysql_query("UPDATE `families` SET `contant`=`contant`+'$gestolen', `attwins`=`attwins`+'1' WHERE `id`='$familie->id'");}
if($win == "false"){$wintext = "verloren";$gestolen1 = $familie->contant*rand(20,30)/100;$gestolen = round($gestolen1);
mysql_query("UPDATE `families` SET `contant`=`contant`-'$gestolen', `attlost`=`attlost`+'1' WHERE `id`='$familie->id'");
mysql_query("UPDATE `families` SET `contant`=`contant`+'$gestolen', `attwins`=`attwins`+'1' WHERE `id`='$family->id'");}
$ledenfam1 = mysql_query("SELECT * FROM `users` WHERE `familie`='$familie->naam'");
$ledenfam = mysql_num_rows($ledenfam1);
$ledenen1 = mysql_query("SELECT * FROM `users` WHERE `familie`='$family->naam'");
$ledenen = mysql_num_rows($ledenen1);
?>

					<div class="title_bg">
			<div class="title">Aanvallen</div>
		</div>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>

	<b><p align='center'><u><?echo$familie->naam;?></u> VERSUS <u><?echo$family->naam;?></u></b><br>

  	<p align='center' id='go2' style='visibility:hidden'>
  		<b><?echo$familie->naam;?></b> heeft <b><?echo$ledenfam;?></b> leden die zorgen voor <b><?echo$schade;?></b> schade!<br><br>
  	</p>

  	<p align="center" id="go3" style="visibility:hidden">
  		<b><?echo$family->naam;?></b> heeft <b><?echo$ledenen;?></b> leden die zorgen voor <b><?echo$schadeen;?></b> schade!<br><br>
  	</p>

  	  	<p align="center" id="go4" style="visibility:hidden">
  		<b><?echo$familie->naam;?> heeft <?echo$wintext;?>!</b><br>
  		<font color='#006600'><b><?echo$winner;?></b></font>  heeft <font color='#990000'><b><?echo$loser;?></b></font> verslagen!<br>
  	</p>

 	<p align="center" id="go5" style="visibility:hidden">
 		<font color='#006600'><b><?echo$winner;?></b></font> heeft <b>&euro; <?echo$gestolen;?></b> gestolen  	</p>


	<script language="javascript" type="text/javascript">
		var go2 = document.getElementById("go2");
		var go3 = document.getElementById("go3");
		var go4 = document.getElementById("go4");
		var go5 = document.getElementById("go5");

		window.setTimeout("go2.style.visibility='visible'", 2000);
		window.setTimeout("go3.style.visibility='visible'", 5000);
		window.setTimeout("go4.style.visibility='visible'", 7000);
		window.setTimeout("go5.style.visibility='visible'", 10000);
	</script>

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
<?}?>
