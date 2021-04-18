<?
  include("config.php");
?>
<html>
	<head>
		<title>
			Banditi |  Stap in de wereld van de maffia!
		</title>
		<base href="<?=$sitelink?>/v3/" />
		<meta name="description" content="Stap in de wereld van de maffia!" />
		<meta name="keywords" content="maffia, mafia, criminals, gangsters, gangster, game" />
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />	
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		
		<script language="JavaScript" src="js/display.js"></script>
		<script language="JavaScript" src="js/functions.js"></script>
		<script language="JavaScript" src="ajax/prototype-1.6.0.2.js"></script>
		<script language="JavaScript" src="js/duration_progress.js"></script>
		<script language="javascript" type="text/javascript" src="http://www.banditi.nl/v3/lib/tinymce/tiny_mce.js"></script>
		
	</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
			<script language="JavaScript" type="text/javascript" src="js/wz_tooltip/wz_tooltip.js"></script>
		<script language="JavaScript" type="text/javascript" src="js/wz_tooltip/tip_balloon.js"></script>
		
		
<?
if($_GET['x'] == delsafemode){
mysql_query("UPDATE `users` SET `safe`='0' WHERE `login`='$data->login'");
}
$data->contant = number_format($data->contant, 0, '.' , '.');
$data->bank = number_format($data->bank, 0, '.' , '.');
  $inboxnew = mysql_num_rows(mysql_query("SELECT id FROM `messages` WHERE `read`=0 AND `inbox`=1 AND `to`='$data->login'"));
$datum = (date("M d, Y H:i:s"));
$tijd = (date("H:i:s"));
?>
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
		<div style="width:205px height:97px; margin-left:10px;"><a href=index.php><img border=0 src=images/logo.jpg /></a></div>
	</td>
	</tr>

	<tr>
	<td width=178 valign=top align=left style="background-color:#4E3228;">
		<div style="height:89px; width=178px; background:url(images/h2_profiel.jpg) top left; background-color:#4a3029; display:block">&nbsp;</div>
		
		<div id="content_menu_1">
			<div id="menulist_profiel">
<div class="menu-item-left"><img src="images/arrow.jpg"><a href="index2.php">Index</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item-left"><img src="images/arrow.jpg"><a href="profile.php?x=<?=$data->id?>">Mijn profiel</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item-left"><img src="images/arrow.jpg"><a href="slog.php">Secret Link Log</a><img src="images/seperator.jpg" class="sep"></div>

				<div class="menu-item-left"><img src="images/arrow.jpg"><a href="edit.php">Profiel beheren</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item-left"><img src="images/arrow.jpg"><a href="message.php">Prive berichten (<?=$inboxnew?>)</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item-left"><img src="images/arrow.jpg"><a href="blacklist.php">Blacklist</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item-left"><img src="images/arrow.jpg"><a href="notes.php">Kladblok</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item-left"><img src="images/arrow.jpg"><a href="vacation.php">Vakantie</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item-left"><img src="images/arrow.jpg"><a href="friends.php">Vrienden</a><img src="images/seperator.jpg" class="sep"></div>

				<div class="menu-item-left"><img src="images/arrow.jpg"><a href="respect.php">Respect</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item-left"><img src="images/arrow.jpg"><a href="click.php?x=<?=$data->id?>">Aanmeldlink</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item-left"><img src="images/arrow.jpg"><a href="login.php?x=logout">Uitloggen</a></div>
			</div>

			<div id="title_callcredits"></div>
			<div id="menulist_callcredits">
				<div class="menu-item-left"><img src="images/arrow.jpg"><a href="buycredits.php">Callcredits ()</a></font><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item-left"><img src="images/arrow.jpg"><a href="spendcredits.php">Shop</a></div>
			</div>

			<div id="title_fam"></div>
			<div id="menulist_familie">
				<div class="menu-item-left"><img src="images/arrow.jpg"><a href="clanlist.php">Families</a><img src="images/seperator.jpg" class="sep"></div>
									<div class="menu-item-left"><img src="images/arrow.jpg"><a href="createfamily.php">Nieuwe familie</a><img src="images/seperator.jpg" class="sep"></div>
												<div class="menu-item-left"><img src="images/arrow.jpg"><a href="joinfamily.php">Familie: Geen</a><img src="images/seperator.jpg" class="sep"></div>
													<div class="menu-item-left"><img src="images/arrow.jpg"><a href="joinfamily.php">Aanmelden bij familie</a><img src="images/seperator.jpg" class="sep"></div>

							</div>

			<div id="title_overige"></div>
			<div id="menulist_overige">
				<div class="menu-item-left"><img src="images/arrow.jpg"><a href="news.php">Nieuws</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item-left"><img src="images/arrow.jpg"><a href="story.php">Verhaal</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item-left"><img src="images/arrow.jpg"><a href="top100.php">Top 100</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item-left"><img src="images/arrow.jpg"><a href="forum.php">Forum</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item-left"><img src="images/arrow.jpg"><a href="onlineleden.php">Leden online</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item-left"><img src="images/arrow.jpg"><a href="killedmembers.php">Vermoorde Banditi</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item-left"><img src="images/arrow.jpg"><a href="list.php">Leden lijst</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item-left"><img src="images/arrow.jpg"><a href="faq.php">Vragen &amp; hulp</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item-left"><img src="images/arrow.jpg"><a href="rules.php">Regels</a><img src="images/seperator.jpg" class="sep"></div>

				<div class="menu-item-left"><img src="images/arrow.jpg"><a href="contact.php">Contact</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item-left"><img src="images/arrow.jpg"><a href="crew.php">Crew</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item-left"><img src="images/arrow.jpg"><a href="search.php">Zoeken</a></div>
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
								    		<a href="index2.php?x=delsafemode">Je bent veilig, zolang dit het geval is kan je niet aanvallen of aangevallen worden.<br>Klik hier om je schuilplaats te verlaten.</a>
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

		
							<div class="title_bg">
			<div class="title">Laatste nieuws</div>
		</div>
		
		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
		<table width="100%" class="mod_list" cellspacing="2" cellpadding="2">
	<tr>
		<td width="6%" align="center">&nbsp;</td>
		<td align="left"><b>Onderwerp</b></td>
		<td align="left"><b>Auteur</b></a>
		<td></td>
		<td align="center"><b>Datum</b></td>
	</tr>
	<tr>
<?
$first1 = mysql_query("SELECT * FROM `news` WHERE `place`='1'");
$second1 = mysql_query("SELECT * FROM `news` WHERE `place`='2'");
$third1 = mysql_query("SELECT * FROM `news` WHERE `place`='3'");
$fourth1 = mysql_query("SELECT * FROM `news` WHERE `place`='4'");
$fifth1 = mysql_query("SELECT * FROM `news` WHERE `place`='5'");
$first = mysql_fetch_object($first1);
$second = mysql_fetch_object($second1);
$third = mysql_fetch_object($third1);
$fourth = mysql_fetch_object($fourth1);
$fifth = mysql_fetch_object($fifth1);
$firstauth1 = mysql_query("SELECT * FROM `users` WHERE `login`='$first->author'");
$secondauth1 = mysql_query("SELECT * FROM `users` WHERE `login`='$second->author'");
$thirdauth1 = mysql_query("SELECT * FROM `users` WHERE `login`='$third->author'");
$fourthauth1 = mysql_query("SELECT * FROM `users` WHERE `login`='$fourth->author'");
$fifthauth1 = mysql_query("SELECT * FROM `users` WHERE `login`='$fifth->author'");
$firstauth = mysql_fetch_object($firstauth1);
$secondauth = mysql_fetch_object($secondauth1);
$thirdauth = mysql_fetch_object($thirdauth1);
$fourthauth = mysql_fetch_object($fourthauth1);
$fifthauth = mysql_fetch_object($fifthauth1);
?>

						<td width="6%" align="center"><img src="images/icons_gif/folder.gif" alt="Nieuwsbericht"></td>
						<td align="left"><a href="index.php?a=forum&f=8&t=1316"><? echo $first->title; ?></td>
						<td align="left"><a href="profile.php?x=<? echo $firstauth->id; ?>"><font color='red'><? echo $first->author; ?><img src="images/star.gif" border="0" width="10" height="10" alt="Betaald account"></font></a></td>
						<td align="center"><img src="images/icons_gif/time.gif" border="0px"></td>
						<td align="center"><? echo $first->date; ?></td>
					</tr><tr>
						<td width="6%" align="center"><img src="images/icons_gif/folder.gif" alt="Nieuwsbericht"></td>
						<td align="left"><a href="index.php?a=forum&f=8&t=805"><? echo $second->title; ?></td>
						<td align="left"><a href="profile.php?x=<? echo $secondauth->id; ?>"><font color='red'><? echo $second->author; ?><img src="images/star.gif" border="0" width="10" height="10" alt="Betaald account"></font></a></td>
						<td align="center"><img src="images/icons_gif/time.gif" border="0px"></td>
						<td align="center"><? echo $second->date; ?></td>
					</tr><tr>
						<td width="6%" align="center"><img src="images/icons_gif/folder.gif" alt="Nieuwsbericht"></td>
						<td align="left"><a href="index.php?a=forum&f=8&t=787"><? echo $third->title; ?></td>
						<td align="left"><a href="profile.php?x=<? echo $thirdauth->id; ?>"><font color='red'><? echo $third->author; ?><img src="images/star.gif" border="0" width="10" height="10" alt="Betaald account"></font></a></td>
						<td align="center"><img src="images/icons_gif/time.gif" border="0px"></td>
						<td align="center"><? echo $third->date; ?></td>
					</tr><tr>
						<td width="6%" align="center"><img src="images/icons_gif/folder.gif" alt="Nieuwsbericht"></td>
						<td align="left"><a href="index.php?a=forum&f=8&t=232"><? echo $fourth->title; ?></td>
						<td align="left"><a href="profile.php?x=<? echo $fourthauth->id; ?>"><font color='red'><? echo $fourth->author; ?><img src="images/star.gif" border="0" width="10" height="10" alt="Betaald account"></font></a></td>
						<td align="center"><img src="images/icons_gif/time.gif" border="0px"></td>
						<td align="center"><? echo $fourth->date; ?></td>
					</tr><tr>
						<td width="6%" align="center"><img src="images/icons_gif/folder.gif" alt="Nieuwsbericht"></td>
						<td align="left"><a href="index.php?a=forum&f=8&t=1"><? echo $fifth->title; ?></td>
						<td align="left"><a href="profile.php?x=<? echo $fifthauth->id; ?>"><font color='red'><? echo $fifth->author; ?><img src="images/star.gif" border="0" width="10" height="10" alt="Betaald account"></font></a></td>
						<td align="center"><img src="images/icons_gif/time.gif" border="0px"></td>
						<td align="center"><? echo $fifth->date; ?></td>
					</tr></table>
		</td></tr></table>
		</div>

		<table width='100%' cellspacing='2' cellpadding='2'>
			<tr>
		
				<td class='content_bottom'></td>
			</tr>
		</table>
		
<br>
		<div class="title_bg">
			<div class="title">Privé berichten</div>
		</div>
		
		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
		<table width='100%' border='0' class='mod_list' cellspacing='2' cellpadding='2' align='center'>
	<tr> 
		<td width='6%' align='center'>#</td>
		<td width='45%' align='left'><b>Onderwerp</b></td>
		<td></td>
		<td width='25%' align='left'><b>Verzender</b></td>
		<td></td>
		<td width='20%' align='left'><b>Datum</b></td>
		<td></td>
	</tr>
				<tr>
				<td colspan="7">
					Er zijn geen prive berichten				</td>
			</tr>
				<tr>
		<td colspan=7 align="right">
			<a href="index.php?a=messages">...Meer berichten</a>
		</td>
	</tr>
</table>
		</td></tr></table>
		</div>

		<table width='100%' cellspacing='2' cellpadding='2'>
			<tr>
		
				<td class='content_bottom'></td>
			</tr>
		</table>
		<br>

		<div class="title_bg">
			<div class="title">Actieve forum topics</div>
		</div>
		
		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
		<table width="100%" cellspacing="2" cellpadding="2" class="mod_list">
	<tr>
		<td align="center" width="6%">&nbsp;</td>
		<td><b>Titel</b></td>
		<td></td>
		<td><b>Laatste Poster</b></td>
		<td></td>
		<td align="center"><b>Laatste reactie</b></td>
	</tr>
	<tr>
								<td width="6%" align="center"><img src="images/icons_gif/folder.gif" alt="Nieuwsbericht"></td>
								<td><a href="index.php?a=forum&f=7&t=582">Moppentrommel</td>
								<td><img src="images/icons_gif/status_offline.gif" title="Offline"></td>
								<td><a href="index.php?a=members&f=details&id=14058">DonVitoThe1<img src="images/star.gif" border="0" width="10" height="10" alt="Betaald account"></a></td>
								<td align="center"><img src="images/icons_gif/time.gif" border="0px"></td>
								<td>2008-07-18</td>
							</tr><tr>
								<td width="6%" align="center"><img src="images/icons_gif/folder.gif" alt="Nieuwsbericht"></td>
								<td><a href="index.php?a=forum&f=3&t=1418">Professionele PHOTOSHOP Plaatjes.</td>
								<td><img src="images/icons_gif/status_online.gif" title="Online"></td>
								<td><a href="index.php?a=members&f=details&id=9987">wulf<img src="images/star.gif" border="0" width="10" height="10" alt="Betaald account"></a></td>
								<td align="center"><img src="images/icons_gif/time.gif" border="0px"></td>
								<td>2008-07-18</td>
							</tr><tr>
								<td width="6%" align="center"><img src="images/icons_gif/folder.gif" alt="Nieuwsbericht"></td>
								<td><a href="index.php?a=forum&f=5&t=1483">geluksrad</td>
								<td><img src="images/icons_gif/status_online.gif" title="Online"></td>
								<td><a href="index.php?a=members&f=details&id=7594">sieger19<img src="images/star.gif" border="0" width="10" height="10" alt="Betaald account"></a></td>
								<td align="center"><img src="images/icons_gif/time.gif" border="0px"></td>
								<td>2008-07-18</td>
							</tr><tr>
								<td width="6%" align="center"><img src="images/icons_gif/folder.gif" alt="Nieuwsbericht"></td>
								<td><a href="index.php?a=forum&f=6&t=1486">secret link cleaner</td>
								<td><img src="images/icons_gif/status_online.gif" title="Online"></td>
								<td><a href="index.php?a=members&f=details&id=14559">wiepietsie</a></td>
								<td align="center"><img src="images/icons_gif/time.gif" border="0px"></td>
								<td>2008-07-18</td>
							</tr><tr>
								<td width="6%" align="center"><img src="images/icons_gif/folder.gif" alt="Nieuwsbericht"></td>
								<td><a href="index.php?a=forum&f=4&t=1458">Groentjes beschermen</td>
								<td><img src="images/icons_gif/status_offline.gif" title="Offline"></td>
								<td><a href="index.php?a=members&f=details&id=9515">flipsaus<img src="images/star.gif" border="0" width="10" height="10" alt="Betaald account"></a></td>
								<td align="center"><img src="images/icons_gif/time.gif" border="0px"></td>
								<td>2008-07-18</td>
							</tr>	<tr>
		<td colspan=7 align="right">
			<a href="index.php?a=forum">...Meer forum topics</a>
		</td>
	</tr>
</table>
		</td></tr></table>
		</div>

		<table width='100%' cellspacing='2' cellpadding='2'>
			<tr>
		
				<td class='content_bottom'></td>
			</tr>
		</table>
				
<br>
		<div class="title_bg">
			<div class="title">Persoonlijke informatie</div>
		</div>
		
		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
		<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
	<tr>
		<td width="35%">Gebruikersnaam:</td>
		<td width="6%" align=center><img src="images/icons_gif/status_online.gif" border="0px"></td>
		<td width="69%"><a href="profile.php?x=<? echo $data->id; ?>"><?=$data->login?></a></td>
	</tr>
	<tr>
		<td width="35%">Gezondheid:</td>
		<td width="6%" align=center><img src="images/icons_gif/heart.gif" border="0px"></td>
		<td width="69%"><a href="hospital.php"><? echo $data->health; ?>%</a></td>
	</tr>
	<tr>
		<td width="35%">Power:</td>
		<td width="6%" align=center><img src="images/icons_gif/star.gif" border="0px"></td>
		<td width="69%"><a href="shop.php"><? echo $data->power; ?></a></td>
	</tr>
	<tr>
		<td width="35%">Geld (contant):</td>
		<td width="6%" align=center><img src="images/icons_gif/money.gif" border="0px"></td>
		<td width="69%"><a href="bank.php">&euro; <? echo $data->contant; ?></a></td>
	</tr>
	<tr>
		<td width="35%">Geld (bank):</td>
		<td width="6%" align=center><img src="images/icons_gif/coins.gif" border="0px"></td>
		<td width="69%"><a href="bank.php">&euro; <? echo $data->bank; ?></a></td>
	</tr>
	<tr>
		<td width="35%">Rang:</td>
		<td width="6%" align=center><img src="images/icons_gif/lightning.gif" border="0px"></td>
		<td width="69%"><? echo $rank; ?></td>
	</tr>
	<tr>
		<td width="35%">Credits:</td>
		<td width="6%" align=center><img src="images/icons_gif/telephone.gif" border="0px"></td>
		<td width="69%"><a href="buycredits.php"><? echo $data->callcredits; ?></a></td>
	</tr>
	<tr>
		<td width="35%">Betaald account:</td>
		<td width="6%" align=center><img src="images/icons_gif/user_green.gif" border="0px"></td>
		<td width="69%"><a href="buycredits.php"><? echo $data->vipdays; ?></a></td>
	</tr>
	<tr>
		<td width="35%">Rangvordering:</td>
		<td width="6%" align=center><img src="images/icons_gif/wand.gif" border="0px"></td>
		<td width="69%"><? echo $data->rankvord; ?>%</td>
	</tr>

	<tr>
		<td width="35%">Stad:</td>
		<td width="6%" align=center><img src="images/icons_gif/world.gif" border="0px"></td>
		<td width="69%"><a href="station.php"><? echo $city; ?></a></td>
	</tr>
	<tr>
		<td width="35%">Familie:</td>
		<td width="6%" align=center><img src="images/icons_gif/group.gif" border="0px"></td>
		<td width="69%">
							<? echo $familie; ?>					</td>
	</tr>
	<tr>
		<td width="35%">Veilig:</td>
		<td width="6%" align=center><img src="images/icons_gif/shield.gif" border="0px"></td>
		<td width="69%"><? echo $data->safe; ?> uur</td>
	</tr>
	<tr>
		<td width="35%">Bescherming:</td>
		<td width="6%" align=center><img src="images/icons_gif/shield.gif" border="0px"></td>
		<td width="69%"><? echo $data->maffia; ?> uur</td>
	</tr>
	<tr>
		<td width="35%">Mijn secret link:</td>
		<td width="6%" align=center><img src="images/icons_gif/disconnect.gif" border="0px"></td>
		<td width="69%"><a href="<? echo $sitelink?>/v3/click.php?x=<? echo $data->id; ?>"><? echo $sitelink?>/v3/click.php?x=<? echo $data->id; ?></a></td>
	</tr>
	<tr>
		<td width="35%">Secret link info:</td>
		<td width="6%" align=center><img src="images/icons_gif/information.gif" border="0px"></td>
		<td width="69%">Als iemand op jouw secret link klikt, krijg jij 500 euro contant, en 1000 euro op je bank. Je krijgt er ook een killer van bij!</td>
	</tr>

</table>
		</td></tr></table>
		</div>

		<table width='100%' cellspacing='2' cellpadding='2'>
			<tr>
		
				<td class='content_bottom'></td>
			</tr>
		</table>
		
<br>
<?
$begin = 0;
  $dbres				= mysql_query("SELECT `id` FROM `users` WHERE UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(`online`) < 300");
  $numonline				= mysql_num_rows($dbres);
    $dbres				= mysql_query("SELECT `login`,UNIX_TIMESTAMP(`signup`) AS `signup`, `vipdays`, `power`,`killers`, `contant`, `bank`, `id`, `familie`, `rank`, `vipdays`, `login` FROM `users` WHERE UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(`online`) < 300  ORDER BY `login` LIMIT $begin,9999999");
?>
		<div class="title_bg">
			<div class="title">Online leden</div>
		</div>
		
		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
		<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
	<tr>
		<td>
<?  for($j=$begin+1; $online = mysql_fetch_object($dbres); $j++)
{
?>
<a href=banditi/v3/profile.php?x=<? echo $online->id; ?> width=\"200\"><? echo $online->login; ?></a> -
<?
}
?>
		</td>
	</tr>
</table>
		</td></tr></table>
		</div>

		<table width='100%' cellspacing='2' cellpadding='2'>
			<tr>
		
				<td class='content_bottom'></td>
			</tr>
		</table>
		
<br>
		<div class="title_bg">
<div class="title">Top 5</div>
		</div>
		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
		<table width="100%">
		<tr class="top">
		<td valign=top width=50%>
			<div class=small_title>Top 5 Power</div>
			<table border=0 cellspacing=2 cellpadding=2 width=100% class=mod_list><tr class=top>
<?
      $select = mysql_query("SELECT * FROM `users` ORDER BY  (`power`) DESC LIMIT 0,5");
      while($list = mysql_fetch_assoc($select))

    {

    $power                = round($list[power]);
    $power = number_format($power, 0, ",", ".");
echo "
      <td width=60%><a href=profile.php?x=$list[id] style=text-decoration: none;>$list[login]"; if($list[vipdays] > 0){echo "<img src=images/star.gif border=0 width=10 height=10 alt=Betaald account></a></td>";}
echo"						<td width=6%><img src=images/icons_gif/star.gif alt=Power></td>
						<td>$power</td>
                        </tr>";
                        }
                        ?></table>		</td>
		<td valign="top" width="50%">
			<div class="small_title">Top 5 Geld</div>
			<table border="0" cellspacing="2" cellpadding="2" width="100%" class="mod_list"><tr class="top">
			<table border=0 cellspacing=2 cellpadding=2 width=100% class=mod_list><tr class=top>
<?
      $select = mysql_query("SELECT * FROM `users` ORDER BY  (`bank`+`contant`) DESC LIMIT 0,5");
      while($list = mysql_fetch_assoc($select))

    {

    $geld                = round($list[contant]+$list[bank]);
    $geld = number_format($geld, 0, ",", ".");
echo "
      <td width=60%><a href=profile.php?x=$list[id] style=text-decoration: none;>$list[login]"; if($list[vipdays] > 0){echo "<img src=images/star.gif border=0 width=10 height=10 alt=Betaald account></a></td>";}
echo"						<td width=6%><img src=images/icons_gif/money.gif alt=Geld></td>
						<td>$geld</td>
                        </tr>";
                        }
?>
					</tr></table>		</td>
	</tr>
	<tr>
		<td valign="top" width="50%">
			<div class="small_title">Top 5 Respect</div>
			<table border="0" cellspacing="2" cellpadding="2" width="100%" class="mod_list"><tr class="top">
<?
      $select = mysql_query("SELECT * FROM `users` ORDER BY  (`respect`) DESC LIMIT 0,5");
      while($list = mysql_fetch_assoc($select))

    {

    $respect                = round($list[respect]);
    $respect = number_format($respect, 0, ",", ".");
echo "
      <td width=60%><a href=profile.php?x=$list[id] style=text-decoration: none;>$list[login]"; if($list[vipdays] > 0){echo "<img src=images/star.gif border=0 width=10 height=10 alt=Betaald account></a></td>";}
echo"						<td width=6%><img src=images/icons_gif/ruby.gif alt=Respect></td>
						<td>$respect</td>
                        </tr>";
                        }
?>
					</tr></table>		</td>
		<td valign="top" width="50%">
			<div class="small_title">Top 5 Killers</div>
			<table border="0" cellspacing="2" cellpadding="2" width="100%" class="mod_list"><tr class="top">
<?
      $select = mysql_query("SELECT * FROM `users` ORDER BY  (`killers`) DESC LIMIT 0,5");
      while($list = mysql_fetch_assoc($select))

    {

    $killers                = round($list[killers]);
    $killers = number_format($killers, 0, ",", ".");
echo "
      <td width=60%><a href=profile.php?x=$list[id] style=text-decoration: none;>$list[login]"; if($list[vipdays] > 0){echo "<img src=images/star.gif border=0 width=10 height=10 alt=Betaald account></a></td>";}
echo"						<td width=6%><img src=images/icons_gif/bricks.gif alt=Killers></td>
						<td>$killers</td>
                        </tr>";
                        }
?>
					</tr></table>		</td>
	</tr>
</table>
		</td></tr></table>
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
	<!--RIGHT COLUMN-->
	<td width=176 valign=top align=left style="background-color:#4E3228;">
	<table width=176px height=100% border=0px cellspacing=0px cellpadding=0px style="background-color:#160904;">
		<tr>
		<td align=right width=176 height=21px><a href="forum.php"><img src="images/btn_forum.jpg" border="0"></a></td>
		</tr>
		<tr>

		<td align=center width=176 height=34 ><div id="welkom">Welkom <a href="index.php?a=members&f=details&id=19893"><?=$data->login?></a>!</div></td>
		</tr>

		<tr>
		<td align=left width=176 height=128 style="background: url(images/homefinal_sliced_07.jpg) bottom no-repeat;">
		<center>
							<table width="150" border="0" cellspacing="1" cellpadding="0" class="lijst" id="nohelp" style="display:block">

				<tr class="top">
					<td align=left width="20"><img src="images/icons_gif/money.gif"></td>
					<td align=left width="130"><a href="index.php?a=mod_loc_bank">Cash: &euro; <? echo $data->contant; ?></a></td>
				</tr>
				<tr class="top">
					<td align=left width="20"><img src="images/icons_gif/coins.gif"></td>
					<td align=left width="130"><a href="index.php?a=mod_loc_bank">Bank: &euro; <? echo $data->bank; ?></a></td>

				</tr>

				<tr class="top">
					<td align=left width="20"><a href="index.php?a=messages"><img src="images/icons_gif/email_open.gif" border="0"></a></td>
					<td align=left width="130"><a href="index.php?a=messages"><? echo $inboxnew; ?> nieuwe berichten</a></td>
				</tr>
					<tr class="top">
					<td align=left width="20"><img src="images/icons_gif/heart.gif"></td>
					<td align=left width="130">

					<div id="rang"><? echo $data->health; ?>% Leven</div><div id="div_progress"><img src="images/power.jpg" height="15px" width="<?=$data->health?>" style="max-width:100px;"></img></div>
					</td>
				</tr>
				<tr class="top">
					<td align=left width="20"><img src="images/icons_gif/star.gif"></td>
					<td align=left width="130"><div id="rang"><? echo $data->power; ?> Power</div><div id="div_progress"><img src="images/power.jpg" height="15px" width="100"></img></div></td>
				</tr>
					<tr class="top">

					<td align=left width="20"><img src="images/icons_gif/lightning.gif"></td>
					<td align=left width="130">
<?
$rank	                  	= array("","Groentje","Loopjongen","Zakkenroller","Winkeldief","Dief","Mobster","Moordenaar","Lokale leider","Leider","Moordenaar");
$rank = $rank[$data->rank];
?>
					<div id="rang"><? echo $data->rankvord; ?>% <? echo $rank; ?></div><div id="div_progress"><img src="images/power.jpg" height="15px" width="<?=$data->rankvord?>"></img></div>
					</td>
				</tr>
			</table>
					</center>

		<center>

		<div style="display:none; background-color:#FFFFFF; padding:5px; width:130px; text-align:left; border:0px;" id="help"></div>
		</center>
		</td>
		</tr>

		<tr>
		<td width=178 height=100% valign=top align=left style="background-color:#4a3021; display: inline-table;">

		<div id="content_menu_2">
			<div id="title_crime"></div>

			<div id="menulist_crimi">
                <div class="menu-item"><img src="images/arrow.jpg"><a href="crimes.php">Misdaden</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item"><img src="images/arrow.jpg"><a href="drugsupgrades.php">Drugs upgrades</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item"><img src="images/arrow.jpg"><a href="selldrugs.php">Drugs verkopen</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item"><img src="images/arrow.jpg"><a href="stealcars.php">Auto stelen</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item"><img src="images/arrow.jpg"><a href="race.php">Auto races</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item"><img src="images/arrow.jpg"><a href="work.php">Werken</a></div><br>
				</div>
			<div id="title_loc"></div>
			<div id="menulist_loc">
				<div class="menu-item"><img src="images/arrow.jpg"><a href="jail.php">Gevangenis</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item"><img src="images/arrow.jpg"><a href="hospital.php">Ziekenhuis</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item"><img src="images/arrow.jpg"><a href="bank.php">Bank</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item"><img src="images/arrow.jpg"><a href="kluis.php">Kluis</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item"><img src="images/arrow.jpg"><a href="zwitsersekluis.php">Zwitserse rekening</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item"><img src="images/arrow.jpg"><a href="shop.php">Shop</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item"><img src="images/arrow.jpg"><a href="station.php">Station</a><img src="images/seperator.jpg" class="sep"></div>

				<div class="menu-item"><img src="images/arrow.jpg"><a href="airport.php">Vliegveld</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item"><img src="images/arrow.jpg"><a href="veiling.php">Veiling</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item"><img src="images/arrow.jpg"><a href="garage.php">Garage</a></div>
			</div>
			<div id="title_casino"></div>
			<div id="menulist_casino">
				<div class="menu-item"><img src="images/arrow.jpg"><a href="blackjack.php">Blackjack</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item"><img src="images/arrow.jpg"><a href="fortune.php">Geluksrad</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item"><img src="images/arrow.jpg"><a href="lotery.php">Loterij</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item"><img src="images/arrow.jpg"><a href="higherlower.php">Hoger lager</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item"><img src="images/arrow.jpg"><a href="roulette.php">Roulette</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item"><img src="images/arrow.jpg"><a href="rockpaper.php">Steen, papier, schaar</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item"><img src="images/arrow.jpg"><a href="cracksafe.php">Kraak de kluis</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item"><img src="images/arrow.jpg"><a href="guess.php">Raad het getal</a></div><br>
			</div>

			<div id="title_stats"></div>
			<div id="menulist_stats">
			<div class="menu-item"><img src="images/arrow.jpg"> Server tijd: <b><span id="servertime"><?=$tijd?></span></b><img src="images/seperator.jpg" class="sep"></div>
<?
  $dbres				= mysql_query("SELECT `id` FROM `users` WHERE UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(`online`) < 300");
  $online				= mysql_num_rows($dbres);
?>
			<div class="menu-item"><img src="images/arrow.jpg"><a href="members.php">Banditi: <?=$page->registered?></a><img src="images/seperator.jpg" class="sep"></div>
			<div class="menu-item"><img src="images/arrow.jpg"><a href="onlineleden.php">Online banditi: <?=$online?></a><img src="images/seperator.jpg" class="sep"></div>
			<div class="menu-item"><img src="images/arrow.jpg"><a href="stats.php">Meer statistieken</a><img src="images/seperator.jpg" class="sep"></div>
			</div>
		</div>

		</td>

		</tr>
	</table>



</div>
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-1235395-15";
urchinTracker();
</script>		<!-- TinyMCE -->
		
		<script type="text/javascript" language="javascript">

			tinyMCE.init({
				// General options
				mode : "exact",
				theme : "advanced",
				elements : "wysiwyg",
				width: "100%",
				height: "250",
				//plugins : "safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups,imagemanager,filemanager",
				plugins : "emotions,fullscreen",
		
				// Theme options

				
				theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,fontsizeselect,|,forecolor,backcolor,|,emotions,fullscreen,image",
				theme_advanced_buttons2 : "",
				theme_advanced_buttons3 : "",
				theme_advanced_buttons4 : ""

			});
		</script>
		<!-- /TinyMCE -->
</body>
</html>
