tee<?php
$dbres2				= mysql_query("SELECT * FROM `config` WHERE `ding`='1'");
$data2				= mysql_fetch_object($dbres2);
$contantpunt = number_format($data->contant, 0, '.' , '.');
$bankpunt = number_format($data->bank, 0, '.' , '.');
$inboxnew = mysql_num_rows(mysql_query("SELECT id FROM `messages` WHERE `read`=0 AND `inbox`=1 AND `to`='$data->login'"));
$datum = (date("M d, Y H:i:s"));
$tijd = (date("H:i:s"));?>
<script language="javascript">
	currenttime = '<?=$datum?>'
var serverdate = new Date(currenttime)

function padlength(what){
	var output=(what.toString().length==1)? "0"+what : what
	return output
}

function displaytime(){
	serverdate.setSeconds(serverdate.getSeconds()+1)
	var timestring=padlength(serverdate.getHours())+":"+padlength(serverdate.getMinutes())+":"+padlength(serverdate.getSeconds())
	document.getElementById("servertime").innerHTML=timestring
}

window.onload = function(){
	setInterval("displaytime()", 1000);
}
	</script>

<div align="center">
<table border=0px border-color=yellow cellspacing=0px cellpadding=0px width=1000px>

<tr>
<!--LEFT COLUMN-->
<td width=824px rowspan=2 valign="top">

	<table border=0px cellspacing=0px cellpadding=0px width=824px>
	<tr>
	<td colspan=2 valign=middle align=left>
		<table cellpadding="0" cellspacing="0">
			<tr>
				<td style="padding-left:10px">
					<a href=index.php><img border=0 src=images/logo.jpg /></a>
				</td>
<?
include("incl_mission.php");
if($missionfixed != ""){?>
				<td width="100%" align="right" valign="bottom">
										<div style="width:550px; background-image:url('images/message_tut/background_mission_accomplished.jpg'); height:30px; text-align:left; color:white; font-weight:bold;">
						<div style="float:left;padding-top:8px; padding-left: 10px; padding-right: 6px;"><img src="images/icons/award_star_add.png"></div>
						<div style="padding-top:8px; padding-left: 6px;">
							<a href="index.php?a=mod_other_missions" style="color:white; text-decoration:none">Missie voltooid: <?echo$missionfixed;?></a>
						</div>
					</div>

									</td>
<?}?>
			</tr>
		</table>

	</td>
	</tr>

	<tr>
	<td width=178 valign=top align=left style="background-color:#4a3021;">
		<div style="height:89px; width=178px; background:url(images/h2_profiel.jpg) top left; background-color:#4a3029; display:block">&nbsp;</div>

		<div id="content_menu_1">
			<div id="menulist_profiel">
<div class="menu-item-left"><img src="images/arrow.jpg"><a href="index.php?a=news">Home</a><img src="images/seperator.jpg" class="sep"></div>
<div class="menu-item"><img src="images/arrow.jpg"><a href="index.php?a=mijnlogs">Mijn Logs</a> <font color="red" size="1">(new)</font></a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item-left"><img src="images/arrow.jpg"><a href="index.php?a=profile&x=<?=$data->id?>">Mijn profiel</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item-left"><img src="images/arrow.jpg"><a href="index.php?a=mod_prof_sl">Secret link <font color="red">NEW!</font></a><img src="images/seperator.jpg" class="sep"></div>
				<?php if($data2->zelfmoord == "Ja"){ ?><div class="menu-item"><img src="images/arrow.jpg"><a href="index.php?a=zelfmoord">Zelfmoord <font color="red">NEW!</font></a><img src="images/seperator.jpg" class="sep"></div><?php } ?>

				<div class="menu-item-left"><img src="images/arrow.jpg"><a href="index.php?a=edit">Profiel beheren</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item-left"><img src="images/arrow.jpg"><a href="index.php?a=message">Prive berichten (<?=$inboxnew?>)</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item-left"><img src="images/arrow.jpg"><a href="index.php?a=blacklist">Blacklist</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item-left"><img src="images/arrow.jpg"><a href="index.php?a=notes">Kladblok</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item-left"><img src="images/arrow.jpg"><a href="index.php?a=vacation">Vakantie</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item-left"><img src="images/arrow.jpg"><a href="index.php?a=friends">Vrienden</a><img src="images/seperator.jpg" class="sep"></div>

				<div class="menu-item-left"><img src="images/arrow.jpg"><a href="index.php?a=respect">Respect</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item-left"><img src="images/arrow.jpg"><a href="index.php?a=click&x=<?=$data->id?>">Aanmeldlink</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item-left"><img src="images/arrow.jpg"><a href="login.php?x=logout">Uitloggen</a></div>
			</div>

			<div id="title_callcredits"></div>
			<div id="menulist_callcredits">
				<div class="menu-item-left"><img src="images/arrow.jpg"><a href="index.php?a=buycredits">Callcredits (<? echo $data->callcredits; ?>)</a></font><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item-left"><img src="images/arrow.jpg"><a href="index.php?a=buycredits&p=shop">Shop</a></div>
			</div>

			<div id="title_fam"></div>
			<div id="menulist_familie">
				<div class="menu-item-left"><img src="images/arrow.jpg"><a href="index.php?a=clanlist">Families</a><img src="images/seperator.jpg" class="sep"></div>
<?if($data->familie == ""){?>
								                 	<div class="menu-item-left"><img src="images/arrow.jpg"><a href="index.php?a=createfamily">Nieuwe familie</a><img src="images/seperator.jpg" class="sep"></div>
											      	<div class="menu-item-left"><img src="images/arrow.jpg"><a href="index.php?a=joinfamily">Familie: Geen</a><img src="images/seperator.jpg" class="sep"></div>
													<div class="menu-item-left"><img src="images/arrow.jpg"><a href="index.php?a=joinfamily">Aanmelden bij familie</a><img src="images/seperator.jpg" class="sep"></div>
													<div class="menu-item-left"><img src="images/arrow.jpg"><a href="index.php?a=famstats">Familie statistieken</a><img src="images/seperator.jpg" class="sep"></div>
<?}
else{
$ownfam1 = mysql_query("SELECT * FROM `families` WHERE `naam`='$data->familie'");
$ownfam = mysql_fetch_object($ownfam1);
?>
										      		<div class="menu-item-left"><img src="images/arrow.jpg"><a href="index.php?a=famprofile&x=<?echo$ownfam->id;?>">Familie: <?echo$data->familie;?></a><img src="images/seperator.jpg" class="sep"></div>

<div class="menu-item-left"><img src="images/arrow.jpg"><a href="index.php?a=famcrimes">Familiemisdaden <font color="red">NEW!</font></a><img src="images/seperator.jpg" class="sep"></div>
<?}if($data->famlevel > 0){?>
											    	<div class="menu-item-left"><img src="images/arrow.jpg"><a href="index.php?a=familiebeheer">Familiebeheer</a><img src="images/seperator.jpg" class="sep"></div>
<?}?>
							</div>

			<div id="title_overige"></div>
			<div id="menulist_overige">
	<div class="menu-item-left"><img src="images/arrow.jpg"><a href="index.php?a=list">Leden lijst</a><img src="images/seperator.jpg" class="sep"></div>
					<div class="menu-item-left"><img src="images/arrow.jpg"><a href="index.php?a=story">Verhaal</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item-left"><img src="images/arrow.jpg"><a href="index.php?a=top100">Top 100</a><img src="images/seperator.jpg" class="sep"></div>

	<div class="menu-item-left"><img src="images/arrow.jpg"><a href="index.php?a=dodenlijst">Dodenlijst</a><img src="images/seperator.jpg" class="sep"></div>
					<div class="menu-item-left"><img src="images/arrow.jpg"><a href="index.php?a=faq">Vragen &amp; hulp</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item-left"><img src="images/arrow.jpg"><a href="index.php?a=rules">Regels</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item-left"><img src="images/arrow.jpg"><a href="index.php?a=chat"><b>Chat</b></a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item-left"><img src="images/arrow.jpg"><a href="index.php?a=contact">Contact</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item-left"><img src="images/arrow.jpg"><a href="index.php?a=crew">Crew</a><img src="images/seperator.jpg" class="sep"></div>
                <div class="menu-item-left"><img src="images/arrow.jpg"><a href="index.php?a=banlist">Verbannen accounts</a><img src="images/seperator.jpg" class="sep"></div>
                <div class="menu-item-left"><img src="images/arrow.jpg"><a href="index.php?a=game_info">Spel informatie</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item-left"><img src="images/arrow.jpg"><a href="index.php?a=search">Zoeken</a><img src="images/seperator.jpg" class="sep"></div>
<?php if($data->admin != "1"){
}else {
				echo '<div class="menu-item"><img src="images/arrow.jpg"><a href="admin">Admin paneel</a><img src="images/seperator.jpg" class="sep"></div>'; } ?>
				<div class="menu-item-left">&nbsp;</div>
				<div class="menu-item-left">&nbsp;</div>
				<div class="menu-item-left">&nbsp;</div>
				<div class="menu-item-left">&nbsp;</div>
				<div class="menu-item-left">&nbsp;</div>
			</div>
		</div>

	</td>

	<td width=646 valign=top align=left bgcolor=#e4dcc5 valign="top">
		<div style="width:646px; height:39px; background:url(images/top_content.jpg) top; background-color:#e0d8cb;">&nbsp;</div>
		<div id="content">
			<!-- UPDATE: SAFE -->
<?
if($data->safe > 0){
if($_GET['x'] != delsafemode){
?>
                                    <div id="safe_msg"  style="width:600px; background:url(images/js_msg/bg.gif) repeat-y; margin-top:10px; margin-left:2px;margin-right:2px;">
						<table cellpadding="0" cellspacing="0" border="0" align="center" width="596">
							<tr>
								<td colspan="4" height="4px"><img src="images/js_msg/top.gif"></td>
							</tr>
							<tr>
								<td width="2px"></td>
								<td width="40px" align="center" valign="top" style="padding-top:5px"  bgcolor="#FFFFFF">
									<img src="images/js_msg/exl.gif">
								</td>
								<td width="556px" bgcolor="#FFFFFF">
									<div id="text_shop" style="display:block; line-height:135%; font-size:12px; font-weight:bold">
								    	<font color='black' id="safe_msg_msg">
								    		<a href="index.php?a=news&x=delsafemode">Je bent veilig, zolang dit het geval is kan je niet aanvallen of aangevallen worden.<br>Klik hier om je schuilplaats te verlaten.</a>
								    	</font>
									</div>
								</td>
								<td width="2px"></td>
							</tr>
							<tr>
								<td colspan="4" height="13px"><img src="images/js_msg/bottom.gif"></td>
							</tr>
						</table>

					</div>

							<!-- /UPDATE: SAFE -->
<?
}
}
?>
					<div id="js_error"  style="width:600px; background:url(images/js_error/bg.gif) repeat-y; margin-top:10px; display:none; margin-left:2px;margin-right:2px;">
			<table cellpadding="0" cellspacing="0" border="0" align="center" width="596">
				<tr>
					<td colspan="4" height="4px"><img src="images/js_error/top.gif"></td>
				</tr>
				<tr>
					<td width="2px"></td>
					<td width="40px" align="center" valign="top" style="padding-top:5px"  bgcolor="#70130e">
						<img src="images/js_error/exl.gif">
					</td>
					<td width="556px" bgcolor="#70130e">
						<div id="text_shop" style="display:block; line-height:135%; font-size:12px; font-weight:bold">
					    	<font color='white' id="js_error_msg">

					    	</font>
						</div>
					</td>
					<td width="2px"></td>
				</tr>
				<tr>
					<td colspan="4" height="13px"><img src="images/js_error/bottom.gif"></td>
				</tr>
			</table>

		</div>

		<script language="javascript">
			function showError(pMessage){
				document.getElementById('js_error_msg').innerHTML = pMessage;
				document.getElementById('js_error').style.display = 'block';
				document.getElementById('js_error').focus();

				setTimeout("opacity('js_error',100,0,1000)",2500);
				setTimeout("document.getElementById('js_error').style.display = 'none'; opacity('js_error',0,100,1)",3500);
			}
		</script>


							<div id="js_msg"  style="width:600px; background:url(images/js_msg/bg.gif) repeat-y; margin-top:10px; display:none; margin-left:2px;margin-right:2px;">
			<table cellpadding="0" cellspacing="0" border="0" align="center" width="596">
				<tr>
					<td colspan="4" height="4px"><img src="images/js_msg/top.gif"></td>
				</tr>
				<tr>
					<td width="2px"></td>
					<td width="40px" align="center" valign="top" style="padding-top:5px"  bgcolor="#FFFFFF">
						<img src="images/js_msg/exl.gif">
					</td>
					<td width="556px" bgcolor="#FFFFFF">
						<div id="text_shop" style="display:block; line-height:135%; font-size:12px; font-weight:bold">
					    	<font color='black' id="js_msg_msg">

					    	</font>
						</div>
					</td>
					<td width="2px"></td>
				</tr>
				<tr>
					<td colspan="4" height="13px"><img src="images/js_msg/bottom.gif"></td>
				</tr>
			</table>

		</div>

		<script language="javascript">
			function showMessage(pMessage){
				document.getElementById('js_msg_msg').innerHTML = pMessage;
				document.getElementById('js_msg').style.display = 'block';

				setTimeout("opacity('js_msg',100,0,1000)",5000);
				setTimeout("document.getElementById('js_msg').style.display = 'none'; opacity('js_msg',0,100,1)",6000);

			}
		</script>
