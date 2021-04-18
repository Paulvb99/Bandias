<?
$user1 = mysql_query("SELECT * FROM `users` WHERE `id`='{$_GET['x']}'");
$user = mysql_fetch_object($user1);
if($data->city != $user->city){$error = "true";?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Je bent in de verkeerde stad om deze persoon aan te vallen 					</td>
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
<?$error = "true";}	$data2            = mysql_query("SELECT *,UNIX_TIMESTAMP(`aanvaltijd`) AS `aanvaltijd`,0 FROM `users` WHERE `login`='$data->login'");
	  $data1            = mysql_fetch_object($data2);
$datijd = $data->aanval;
	$tijdverschil1        = $data1->aanvaltijd-3600+$datijd-time();
	if($data1->aanvaltijd + $datijd > time() && $error == ""){
   list($uur,$min,$sec)=explode(":",date("H:i:s",$tijdverschil1));
$error = "true";
$countdown = $data1->aanvaltijd+$datijd-time();
?>
			<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Je moet 15 seconden wachten voordat je weer iemand aanvalt					</td>
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

		</div>
	</td>
	</tr>

	</table>
	</td>
<?}else if($error != "true" && $data->killers < 10){$error = "true";?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Je hebt minstens 10 killers nodig om iemand aan te vallen 					</td>
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
<?}else if($error != "true" && $data->familie == $user->familie && $data->familie != ""){$error = "true";?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Je mag geen leden aanvallen die in jouw familie zitten 					</td>
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
<?}else if($error != "true" && $data->kogels < 1){$error = "true";?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Je hebt geen attack coins meer 					</td>
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
<?}else if($error != "true" && $user->admin > 0){$error = "true";?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Je mag geen admins aanvallen 					</td>
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
<?}else if($error != "true" && $user->id == $data->id){$error = "true";?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Wil je jezelf nou aanvallen? 					</td>
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
<?}else if($error != "true" && $user->aangevallen >= 10){$error = "true";?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br><?echo$user->login;?> is al 10 keer aangevallen dit uur. Zoek iemand anders! 					</td>
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
<?}else if($error != "true" && $user->vakantie > 0){$error = "true";?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br><?echo$user->login;?> is op vakantie! 					</td>
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
<?}else if($error != "true" && $data->safe > 0){$error = "true";?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Je mag niet aanvallen als je nog onder bescherming staat! 					</td>
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
<?}else if($user->safe > 0 || $user->maffia > 0){
if($error != "true"){
$error = "true";?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br><?echo$user->login;?> staat nog onder bescherming! 					</td>
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
<?}}else if($error != "true" && $user->login == "Anoniem"){$error = "true";?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Je mag het anonieme account niet aanvallen! 					</td>
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
$_SESSION['mission'] = "Val iemand aan";
mysql_query("UPDATE `users` SET `aanvaltijd`=NOW(), `kogels`=`kogels`-'1' WHERE `id`='$data->id'");
$contract1 = mysql_query("SELECT * FROM `contracten` WHERE `to`='$data->login'");
$contract = mysql_fetch_object($contract1);
$verdien1 = mysql_query("SELECT * FROM `contracten` WHERE `to`='$user->login'");
$verdien = mysql_fetch_object($verdien1);
$schadekillers = $data->killers*100;
$schade = $data->power+$schadekillers;
$schadekillersen = $user->killers*100;
$schadeen = $user->power+$schadekillersen;
$healthverlies = rand(1,3);
$dmy = (date('d-m-Y'));
if($schade > $schadeen){$win = "true"; $winner = $data->login; $loser = $user->login;}else{$win = "false"; $winner = $user->login; $loser = $data->login;}
if($win == "true"){$wintext = "gewonnen";$gestolen1 = $user->contant*rand(20,30)/100;$gestolen = round($gestolen1);
if($user->health > $healthverlies){
mysql_query("UPDATE `users` SET `contant`=`contant`-'$gestolen', `health`=`health`-'$healthverlies', `attlost`=`attlost`+'1' WHERE `id`='$user->id'");
mysql_query("UPDATE `users` SET `contant`=`contant`+'$gestolen', `attwins`=`attwins`+'1' WHERE `id`='$data->id'");
}else{
mysql_query("UPDATE `users` SET `moordpremie`=`contant`+`bank`, `contant`='0', `bank`='0', `vermoord`='1', `moordenaar`='$data->login', `moorddatum`='$dmy', `attlost`=`attlost`+'1' WHERE `id`='$user->id'");
mysql_query("UPDATE `users` SET `contant`=`contant`+'$user->contant'+'$user->bank', `killcount`=`killcount`+'1', `attwins`=`attwins`+'1' WHERE `id`='$data->id'");
$hitlist1 = mysql_query("SELECT * FROM `hitlist` WHERE `to`='$user->login'");
$hitlist = mysql_fetch_object($hitlist1);
$gestolen = $user->bank+$user->contant;
mysql_query("UPDATE `users` SET `bank`=`bank`+'$hitlist->waarde' WHERE `login`='$data->login'");
mysql_query("DELETE FROM `hitlist` WHERE `to`='$user->login'");
mysql_query("DELETE FROM `contracten` WHERE `to`='$user->login'");
}}
if($win == "false"){$wintext = "verloren";$gestolen1 = $data->contant*rand(20,30)/100;$gestolen = round($gestolen1);
if($data->health > $healthverlies){
mysql_query("UPDATE `users` SET `contant`=`contant`-'$gestolen', `health`=`health`-'$healthverlies', `attlost`=`attlost`+'1' WHERE `id`='$data->id'");
mysql_query("UPDATE `users` SET `contant`=`contant`+'$gestolen', `attwins`=`attwins`+'1' WHERE `id`='$user->id'");
}else{
mysql_query("UPDATE `users` SET `moordpremie`=`contant`+`bank`, `contant`='0', `bank`='0', `vermoord`='1', `moordenaar`='$user->login', `moorddatum`='$dmy', `attlost`=`attlost`+'1' WHERE `id`='$data->id'");
mysql_query("UPDATE `users` SET `contant`=`contant`+'$data->contant'+'$bank', `killcount`=`killcount`+'1', `attwins`=`attwins`+'1' WHERE `id`='$user->id'");
$hitlist1 = mysql_query("SELECT * FROM `hitlist` WHERE `to`='$data->login'");
$hitlist = mysql_fetch_object($hitlist1);
$gestolen = $bank+$contant;
mysql_query("UPDATE `users` SET `bank`=`bank`+'$hitlist->waarde' WHERE `login`='$user->login'");
mysql_query("DELETE FROM `hitlist` WHERE `to`='$data->login'");
mysql_query("DELETE FROM `contracten` WHERE `to`='$data->login'");
}}
mysql_query("UPDATE `users` SET `aangevallen`=`aangevallen`+'1' WHERE `id`='$user->id'");
$date2 = (date('m/d H:i'));
if($win == "true"){
mysql_query("INSERT INTO `messages`(`date`,`to`,`from`,`ip`,`title`,`content`,`date2`,`read`,`inbox`,`reply`) values(NOW(),'$user->login','$data->login','$data->IP','Je bent aangevallen','Hallo gangster!

Je bent aangevallen door $data->login. Hij heeft gewonnen en heeft € $gestolen van je weten te stelen.

Groeten,
Een anonieme getuige','$date2','0','1','0')");
}
if($win == "false"){
mysql_query("INSERT INTO `messages`(`date`,`to`,`from`,`ip`,`title`,`content`,`date2`,`read`,`inbox`,`reply`) values(NOW(),'$user->login','$data->login','$data->IP','Je bent aangevallen','Hallo gangster!

Je bent aangevallen door $data->login. Hij heeft verloren en je hebt € $gestolen van hem weten te stelen.

Groeten,
Een anonieme getuige','$date2','0','1','0')");
}
?>

					<div class="title_bg">
			<div class="title">Aanvallen</div>
		</div>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>

	<b><p align='center'><u><?echo$data->login;?></u> VERSUS <u><?echo$user->login;?></u></b><br>

  	<p align='center' id='go2' style='visibility:hidden'>
  		<b><?echo$data->login;?></b> heeft <b><?echo$data->killers;?></b> killers die zorgen voor <b><?echo$schade;?></b> schade!<br><br>
  	</p>

  	<p align="center" id="go3" style="visibility:hidden">
  		<b><?echo$user->login;?></b> heeft <b><?echo$user->killers;?></b> killers die zorgen voor <b><?echo$schadeen;?></b> schade!<br><br>
  	</p>

  	  	<p align="center" id="go4" style="visibility:hidden">
  		<b>Je hebt <?echo$wintext;?>!</b><br>
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
