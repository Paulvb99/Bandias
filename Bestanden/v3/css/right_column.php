	<!--RIGHT COLUMN-->
	<td width=176 valign=top align=left style="background-color:#4E3228;">
	<table width=176px height=100% border=0px cellspacing=0px cellpadding=0px style="background-color:#160904;">
		<tr>
		<td align=right width=176 height=21px><a href="index.php?a=mod_other_missions"><img src="images/btn_missies_stop.gif" border="0"></a> <a href="forum.php"><img src="images/btn_forum.jpg" border="0"></a></td>
		</tr>
		<tr>

		<td align=center width=176 height=34 ><div id="welkom">Welkom <a href="index.php?a=profile&x=<? echo $data->id; ?>"><?=$data->login?></a>!</div></td>
		</tr>

		<tr>
		<td align=left width=176 height=128 style="background: url(images/homefinal_sliced_07.jpg) bottom no-repeat;">
		<center>
							<table width="150" border="0" cellspacing="1" cellpadding="0" class="lijst" id="nohelp" style="display:block">

				<tr class="top">
					<td align=left width="20"><img src="images/icons_gif/money.gif"></td>
					<td align=left width="130"><a href="index.php?a=bank">Cash: &euro; <? echo $contantpunt; ?></a></td>
				</tr>
				<tr class="top">
					<td align=left width="20"><img src="images/icons_gif/coins.gif"></td>
					<td align=left width="130"><a href="index.php?a=bank">Bank: &euro; <? echo $bankpunt; ?></a></td>

				</tr>

				<tr class="top">
					<td align=left width="20"><a href="index.php?a=message"><img src="images/icons_gif/email_open.gif" border="0"></a></td>
					<td align=left width="130"><a href="index.php?a=message"><? echo $inboxnew; ?> nieuwe berichten</a></td>
				</tr>
					<tr class="top">
					<td align=left width="20"><img src="images/icons_gif/heart.gif"></td>
					<td align=left width="130">

					<div id="rang"><FONT color='#FFFFFF'><a href="index.php?a=hospital"><FONT color='FFFFFF'><? echo $data->health; ?>% Leven</FONT></a></div><div id="div_progress"><img src="images/power.jpg" height="15px" width="<?=$data->health?>" style="max-width:100px;"></img></div>
					</td>
				</tr>
				<tr class="top">
					<td align=left width="20"><img src="images/icons_gif/star.gif"></td>
					<td align=left width="130"><div id="rang"><a href="index.php?a=list"><FONT color='FFFFFF'><? echo $data->power; ?> Power</FONT></a></div><div id="div_progress"><img src="images/power.jpg" height="15px" width="100"></img></div></td>
				</tr>
					<tr class="top">
						<td align=left width="20"><img src="images/icons_gif/lightning.gif"></td>
<td align=left width="190">
<?
$rank	                  	= array("","Groentje","Loopjongen","Zakkenroller","Winkeldief","Dief","Mobster","Moordenaar","Lokale leider","Leider","Godfather");
$rank = $rank[$data->rank];
?>
					<div id="rang"><?echo$data->rankvord;?>% <?echo$rank;?></div><div id="div_progress"><img src="images/power.jpg" height="15px" width="<?=$data->rankvord?>"></img></div>
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
                <div class="menu-item"><img src="images/arrow.jpg"><a href="index.php?a=crimes">Misdaden</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item"><img src="images/arrow.jpg"><a href="index.php?a=drugsupgrades">Drugs upgrades</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item"><img src="images/arrow.jpg"><a href="index.php?a=selldrugs">Drugs verkopen</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item"><img src="images/arrow.jpg"><a href="index.php?a=stealcars">Auto stelen</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item"><img src="images/arrow.jpg"><a href="index.php?a=race">Auto races</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item"><img src="images/arrow.jpg"><a href="index.php?a=work">Werken</a></div><br>
				</div>
			<div id="title_loc"></div>
			<div id="menulist_loc">
				<div class="menu-item"><img src="images/arrow.jpg"><a href="index.php?a=jail">Gevangenis</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item"><img src="images/arrow.jpg"><a href="index.php?a=hospital">Ziekenhuis</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item"><img src="images/arrow.jpg"><a href="index.php?a=bank">Bank</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item"><img src="images/arrow.jpg"><a href="index.php?a=kluis">Kluis</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item"><img src="images/arrow.jpg"><a href="index.php?a=zwitsersekluis">Zwitserse rekening</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item"><img src="images/arrow.jpg"><a href="index.php?a=shop">Shop</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item"><img src="images/arrow.jpg"><a href="index.php?a=station">Station</a><img src="images/seperator.jpg" class="sep"></div>

				<div class="menu-item"><img src="images/arrow.jpg"><a href="index.php?a=airport">Vliegveld</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item"><img src="images/arrow.jpg"><a href="index.php?a=veiling">Veiling</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item"><img src="images/arrow.jpg"><a href="index.php?a=garage">Garage</a></div>
			</div>
			<div id="title_casino"></div>
			<div id="menulist_casino">
				<div class="menu-item"><img src="images/arrow.jpg"><a href="index.php?a=blackjack">Blackjack</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item"><img src="images/arrow.jpg"><a href="index.php?a=fortune">Geluksrad</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item"><img src="images/arrow.jpg"><a href="index.php?a=lotery">Loterij</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item"><img src="images/arrow.jpg"><a href="index.php?a=higherlower">Hoger lager</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item"><img src="images/arrow.jpg"><a href="index.php?a=roulette">Roulette</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item"><img src="images/arrow.jpg"><a href="index.php?a=rockpaper">Steen, papier, schaar</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item"><img src="images/arrow.jpg"><a href="index.php?a=cracksafe">Kraak de kluis</a><img src="images/seperator.jpg" class="sep"></div>
				<div class="menu-item"><img src="images/arrow.jpg"><a href="index.php?a=guess">Raad het getal</a></div><br>
			</div>

			<div id="title_stats"></div>
			<div id="menulist_stats">
			<div class="menu-item"><img src="images/arrow.jpg"> Server tijd: <b><span id="servertime"><?=$tijd?></span></b><img src="images/seperator.jpg" class="sep"></div>
<?
  $dbres				= mysql_query("SELECT `id` FROM `users` WHERE UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(`online`) < 300");
  $online				= mysql_num_rows($dbres);
?>
			<div class="menu-item"><img src="images/arrow.jpg"><a href="index.php?a=list">Banditi: <?=$page->registered?></a><img src="images/seperator.jpg" class="sep"></div>
			<div class="menu-item"><img src="images/arrow.jpg"><a href="index.php?a=onlineleden">Online banditi: <?=$online?></a><img src="images/seperator.jpg" class="sep"></div>
			<div class="menu-item"><img src="images/arrow.jpg"><a href="index.php?a=stats">Meer statistieken</a><img src="images/seperator.jpg" class="sep"></div>
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
