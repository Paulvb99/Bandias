<?
$id = $_GET['x'];
$user1 = mysql_query("SELECT * FROM `users` WHERE `id`='$id'");
$user = mysql_fetch_object($user1);
if(isset($_GET['delreaction'])){
$id = $_GET['delreaction'];
$query				= mysql_query("SELECT * FROM `gastenboek` WHERE `id`='$id'");
$post = mysql_fetch_object($query);
if($post->from == $data->login || $post->to == $data->login){
mysql_query("DELETE FROM `gastenboek` WHERE `id`='$id'");
}
}
if(isset($_POST['addreaction'])){
$content = $_POST['reaction'];
if($data->login != ""){
mysql_query("INSERT INTO `gastenboek` (`date`, `to`, `from`, `content`) values(NOW(), '$user->login', '$data->login', '$content')");
}
}
if($user->rankvord > 100){$user->rankvord = 100;}
if($user->vermoord > 0){?>
			<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup" align="center">
				<tr>
					<td>
						Helaas, door de criminele wereld van de maffia is <?echo$user->login;?> om het leven gekomen. Rest in peace!					</td>
				</tr>
				<tr>
					<td>
						<br><br>
							<a href="index.php?a=news" class="msg_ok">Klik hier indien je niet automatisch verder gaat.</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<script language="javascript">
	setTimeout("document.location.href='index.php?a=news'",(2000*2));
</script>
		</div>
	</td>
	</tr>

	</table>
	</td>
<?}
else{
?>

		
       		<div class="title_bg"><div style="font-size:17px; color:#1b1a17; margin-left:10px; padding-top:4px;">Profiel</div></div>
		<div style="width:100%; height:auto; background:#c3b79d; font-family:arial; font-size:12px; color:#2a190e;">
			<div style="padding:5px; padding-bottom:10px;">

	<center>
		<img src="images/icons_gif/bomb.gif"> <a href="index.php?a=attack&x=<?echo$user->id;?>"><b>Aanvallen</b></a>
		<img src="images/icons_gif/vcard.gif" style="margin-left:30px;"> <a href="index.php?a=message&box=new&to=<?echo$user->login;?>"><b>PB sturen</b></a>
		<img src="images/icons_gif/key.gif" style="margin-left:30px;"> <a href="index.php?a=click&x=<?echo$user->id;?>" target="_blank"><b>Secret link</b></a>
		<img src="images/icons_gif/ruby_add.gif" style="margin-left:30px;"> <a href="index.php?a=respect&x=<?echo$user->id;?>"><b>Respect</b></a>
		<img src="images/icons_gif/group_link.gif" style="margin-left:30px;"><a href="index.php?a=friends&add=<?echo$user->id;?>"><b>Vriend</b></a>
	</center>
	<hr>
			</div>
		</div>

		<script language="javascript">
			function openTab(pTabPage,pTab){
								document.getElementById('mem_profiel').style.display = 'none';
								document.getElementById('mem_garage').style.display = 'none';
								document.getElementById('mem_reacties').style.display = 'none';
								document.getElementById('mem_missions').style.display = 'none';

				document.getElementById(pTabPage).style.display = 'block';

								document.getElementById('tab1').style.background = '';
				document.getElementById('tab1').style.fontWeight = 'normal';
								document.getElementById('tab2').style.background = '';
				document.getElementById('tab2').style.fontWeight = 'normal';
								document.getElementById('tab3').style.background = '';
				document.getElementById('tab3').style.fontWeight = 'normal';
								document.getElementById('tab4').style.background = '';
				document.getElementById('tab4').style.fontWeight = 'normal';

				document.getElementById(pTab).style.background = 'url(\'images/tab_info_arrow.gif\') bottom no-repeat';
				document.getElementById(pTab).style.fontWeight = 'bold';
			}
		</script>
		<div style="width:100%; height:25px; background:url('images/tab_info_bg.jpg') repeat-x; font-family:arial; font-size:12px; color:#2a190e;">
									<div id="tab1" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px; background:url('images/tab_info_arrow.gif') bottom no-repeat; font-weight:bold;"><a href="#" onclick="openTab('mem_profiel','tab1'); return false">Profiel</a></div>
												<div id="tab1" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px;">|</div>
												<div id="tab2" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px;"><a href="#" onclick="openTab('mem_garage','tab2'); return false">Garage</a></div>
												<div id="tab2" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px;">|</div>
												<div id="tab3" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px;"><a href="#" onclick="openTab('mem_reacties','tab3'); return false">Persoonlijk prikbord</a></div>
												<div style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px;">|</div>
												<div id="tab4" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px;"><a href="#" onclick="openTab('mem_missions','tab4'); return false">Voltooide missies</a></div>
                                </div>

		<div style="background-color:#dbd2b7; ">
		<br>
		<table cellpadding="4" cellspacing="0" width="100%" align="center"><tr><td>

<div id="mem_profiel">
	<!-- PROFIEL INFO -->
<?
$hitlist1 = mysql_query("SELECT * FROM `hitlist` WHERE `to`='$user->login'");
$hitlist2 = mysql_num_rows($hitlist1);
$hitlist = mysql_fetch_object($hitlist1);
if($hitlist2 > 0){
$hitlist->to 		= str_replace("a", "A",$hitlist->to);
$hitlist->to 		= str_replace("b", "B",$hitlist->to);
$hitlist->to 		= str_replace("c", "C",$hitlist->to);
$hitlist->to 		= str_replace("d", "D",$hitlist->to);
$hitlist->to 		= str_replace("e", "E",$hitlist->to);
$hitlist->to 		= str_replace("f", "F",$hitlist->to);
$hitlist->to 		= str_replace("g", "G",$hitlist->to);
$hitlist->to 		= str_replace("h", "H",$hitlist->to);
$hitlist->to 		= str_replace("i", "I",$hitlist->to);
$hitlist->to 		= str_replace("j", "J",$hitlist->to);
$hitlist->to 		= str_replace("k", "K",$hitlist->to);
$hitlist->to 		= str_replace("l", "L",$hitlist->to);
$hitlist->to 		= str_replace("m", "M",$hitlist->to);
$hitlist->to 		= str_replace("n", "N",$hitlist->to);
$hitlist->to 		= str_replace("o", "O",$hitlist->to);
$hitlist->to 		= str_replace("p", "P",$hitlist->to);
$hitlist->to 		= str_replace("q", "Q",$hitlist->to);
$hitlist->to 		= str_replace("r", "R",$hitlist->to);
$hitlist->to 		= str_replace("s", "S",$hitlist->to);
$hitlist->to 		= str_replace("t", "T",$hitlist->to);
$hitlist->to 		= str_replace("u", "U",$hitlist->to);
$hitlist->to 		= str_replace("v", "V",$hitlist->to);
$hitlist->to 		= str_replace("w", "W",$hitlist->to);
$hitlist->to 		= str_replace("x", "X",$hitlist->to);
$hitlist->to 		= str_replace("y", "Y",$hitlist->to);
$hitlist->to 		= str_replace("z", "Z",$hitlist->to);
$waarde = number_format($hitlist->waarde, 0, '.' , '.');
?>
			<div style="width:99%; background-color:black; color:white; font-weight:bold; height:30px; cursor:pointer" onclick="openContract('<?echo$hitlist->to;?>','<?echo$waarde;?>','<?echo$hitlist->from;?>');return false">
			<div style="float:left;padding-top:7px;padding-left:7px">
				<img src="images/icons_gif/crosshair.gif">
			</div>
			<div style="padding-top:8px;padding-left:8px; float:left;">
				<a href="#" onclick="openContract('<?echo$hitlist->to;?>','<?echo$waarde;?>','<?echo$hitlist->from;?>');return false" style="color:white">
					WANTED: Deze persoon heeft een prijs op zijn hoofd staan.
				</a>
			</div>
		</div><br>

<?}?>
			<div class="title_bg">
			<div class="title">Profiel</div>
		</div>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
			<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
		<tr>
			<td width="35%">Gebruikersnaam:</td>
<?
    $dbres				= mysql_query("SELECT * FROM `users` WHERE UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(`online`) < 300 AND `login`='$user->login'");
  $online = mysql_fetch_object($dbres);
if($online->login == $user->login){
?>
			<td width="6%" align=center><img src="images/icons_gif/status_online.gif" title="Online"></td>
<?
}
if($online->login != $user->login){
?>
			<td width="6%" align=center><img src="images/icons_gif/status_offline.gif" title="Offline"></td>
<?
}
?>

			<td width="69%"><?echo $user->login; if($user->vipdays > 0){echo "<img src=images/star.gif title=Betaald account>";}?></td>
		</tr>
		<tr>
        <td width="35%">Admin:</td>
        <td width="6%" align=center><img src="images/icons_gif/status_crew.gif" border="0px"></td>
        <td width="69%"><? echo $user->admin; ?></td>
        </tr>
		<tr>
        <td width="35%">Moderator:</td>
        <td width="6%" align=center><img src="images/icons_gif/status_crew.gif" border="0px"></td>
        <td width="69%"><? echo $user->moderator; ?></td>
		</tr>
		<tr>
        <td width="35%">Banpunten:</td>
        <td width="6%" align=center><img src="images/icons_gif/warning.gif" border="0px"></td>
        <td width="69%"><? echo $user->banpunten; ?></td>
		</tr>
		<tr>
        <td width="35%">Forum banpunten:</td>
        <td width="6%" align=center><img src="images/icons_gif/warning.gif" border="0px"></td>
        <td width="69%"><? echo $user->forumbanpunten; ?></td>
		</tr>
		<tr>
        <td width="35%">Waarschuwingen:</td>
        <td width="6%" align=center><img src="images/icons_gif/warning_w.gif" border="0px"></td>
        <td width="69%"><? echo $user->waarschuwingen; ?></td>
		</tr>
		<tr>
			<td width="35%">Gezondheid:</td>
			<td width="6%" align=center><img src="images/icons_gif/heart.gif" border="0px"></td>
			<td width="69%"><? echo $user->health; ?>%</td>
		</tr>
		<tr>
			<td width="35%">Power:</td>
			<td width="6%" align=center><img src="images/icons_gif/star.gif" border="0px"></td>
			<td width="69%"><? echo $user->power; ?></td>
		</tr>
		<tr>
			<td width="35%">Respect:</td>
			<td width="6%" align=center><img src="images/icons_gif/ruby.gif" border="0px"></td>
			<td width="69%"><? echo $user->respect; ?></td>
		</tr>
		<tr>

<?

$rank = Array("Geen","Caravan","Houten Huis","Luxe Berg Villa","Villa","Boshuis","Luxe Bunker","Luxe Strand Villa","Gangster Paradise","Japanse Villa","Mediteraanse Villa","Pool Paradise","Landgoed","Tropische Villa","Fantasy Home");
$rank = $rank[$data->woning];

?>


<td width="35%">Woning:</td>
			<td width="6%" align=center><img src="images/woning-icon.gif" border="0px"></td>
			<td width="69%"><? echo $user->woning?>
</td>
		<tr>
			<td width="35%">Stad:</td>
			<td width="6%" align=center><img src="images/icons_gif/world.gif" border="0px"></td>
			<td width="69%"><?
$city	                  	= array("","Turijn","Palermo","Milaan","Rome","Catania","Corleone");
if($user->id != $data->id && $data->satteliet < 1 && $data->spacestation < 1){$stad = "Verborgen";}else{$stad = $city[$user->city];} echo $stad; ?></td>
		</tr>
		<tr>
			<td width="35%">Veilig:</td>
			<td width="6%" align=center><img src="images/icons_gif/shield.gif" border="0px"></td>
			<td width="69%"><? echo $user->safe; ?> uur</td>
		</tr>
		<tr>
			<td width="35%">Bescherming:</td>
			<td width="6%" align=center><img src="images/icons_gif/shield.gif" border="0px"></td>
			<td width="69%"><? echo $user->maffia; ?> uur</td>
		</tr>
		<tr>
        <td width="35%">Goud:</td>
			<td width="6%" align=center><img src="images/icons_gif/money.gif" border="0px"></td>
			<td width="69%"> <? echo $user->goud; ?> blokken</td>
		</tr>
		<tr>
			<td width="35%">Geld (contant):</td>
			<td width="6%" align=center><img src="images/icons_gif/money.gif" border="0px"></td>
			<td width="69%">&euro; <? echo $user->contant; ?></td>
		</tr>
		<tr>
			<td width="35%">Geld (bank):</td>
			<td width="6%" align=center><img src="images/icons_gif/coins.gif" border="0px"></td>
			<td width="69%">&euro; <? echo $user->bank; ?></td>
		</tr>
		<tr>
			<td width="35%">Familie:</td>
			<td width="6%" align=center><img src="images/icons_gif/group.gif" border="0px"></td>
			<td width="69%"><?
$fam1 = mysql_query("SELECT * FROM `families` WHERE `naam`='$user->familie'");
$fam = mysql_fetch_object($fam1);
if($user->familie == ""){
$familie = ("Geen familie");
}
if($user->famlevel < 0){
$familie = ("<a href=index.php?a=famprofile&x=$fam->id>Wachtlijst</a>");
}
if($user->famlevel > -1 && $user->familie != ""){
$familie = ("<a href=index.php?a=famprofile&x=$fam->id>$user->familie</a>");
} echo $familie; ?></td>
		</tr>
		<tr>
			<td width="35%">Rang:</td>
			<td width="6%" align=center><img src="images/icons_gif/lightning.gif" border="0px"></td>
			<td width="69%"><u><?
$rang	                  	= array("","Groentje","Loopjongen","Zakkenroller","Winkeldief","Dief","Mobster","Moordenaar","Lokale leider","Leider","Godfather");
$rang = $rang[$user->rank];
echo $rang; ?></u></td>
		</tr>
		<tr>
			<td width="35%">Rangvordering:</td>
			<td width="6%" align=center><img src="images/icons_gif/wand.gif" border="0px"></td>
			<td width="69%"><? echo $user->rankvord; ?>%</td>
		</tr>
		<tr>
			<td width="35%">Opgeleide killers:</td>
			<td width="6%" align=center><img src="images/icons_gif/bricks.gif" border="0px"></td>
			<td width="69%"><? echo $user->killers; ?></td>
		</tr>
		<tr>
			<td width="35%">Attack coins:</td>
			<td width="6%" align=center><img src="images/icons_gif/brick.gif" border="0px"></td>
			<td width="69%"><? echo $user->kogels; ?></td>
		</tr>
		<tr>
			<td width="35%">Aantal gewonnen:</td>
			<td width="6%" align=center><img src="images/icons_gif/brick_add.gif" border="0px"></td>
			<td width="69%"><? echo $user->attwins; ?></td>
		</tr>
		<tr>
			<td width="35%">Aantal verloren:</td>
			<td width="6%" align=center><img src="images/icons_gif/brick_delete.gif" border="0px"></td>
			<td width="69%"><? echo $user->attlost; ?></td>
		</tr>
	</table>
			</td></tr></table>
		</div>

		<table width='100%' cellspacing='2' cellpadding='2'>
			<tr>

				<td class='content_bottom'></td>
			</tr>
		</table>
<? if($user->info != ""){
        	$user->info 		= nl2br($user->info);?>
<div class="title_bg">
			<div class="title">Persoonlijke pagina</div>
		</div>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
<? echo $user->info; ?>
<?$fake?>
				</td></tr></table>
		</div>

		<table width='100%' cellspacing='2' cellpadding='2'>
			<tr>

				<td class='content_bottom'></td>
			</tr>
		</table>
<? } ?>
				<br>
			<br>
		<br>
			<div class="title_bg">
			<div class="title">Bezittingen</div>
		</div>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
<? if($user->bezitiets == 0){
?>
						<b><i>Deze persoon heeft nog geen bezittingen</i></b>
<?
}
else if($user->satteliet > 0){
?>
							<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
					<tr>
						<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Satteliet</td>
					</tr>
					<tr>

						<td rowspan=6 width="110px" height="110px" valign="middle" align="center"><img src="images/shop/satteliet.gif"></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
						<td>Aantal:<b><? echo $user->satteliet; ?></b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>

						<td>Power: <b>225</b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
						<td valign="middle">Power totaal: <b><? echo 225*$user->satteliet; ?></b></td>
					</tr>
					<tr>

						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
						<td>Marktwaarde: <b>&euro; <?; echo number_format(8000*$user->satteliet, 0, '.' , '.'); ?></b></td>
					</tr>
				</table>
<?
}
if($user->bezitiets > 0){
if($user->bankpas > 0){
?>
							<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
					<tr>
						<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Bankpas</td>
					</tr>
					<tr>

						<td rowspan=6 width="110px" height="110px" valign="middle" align="center"><img src="images/shop/bankpas.gif"></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
						<td>Aantal:<b><? echo $user->bankpas; ?></b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>

						<td>Power: <b>0</b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
						<td valign="middle">Power totaal: <b><? echo 0*$user->bankpas; ?></b></td>
					</tr>
					<tr>

						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
						<td>Marktwaarde: <b>&euro; <?; echo number_format(250*$user->bankpas, 0, '.' , '.'); ?></b></td>
					</tr>
				</table>
<?
}
if($user->kluis > 0){
?>
							<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
					<tr>
						<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Kluis</td>
					</tr>
					<tr>

						<td rowspan=6 width="110px" height="110px" valign="middle" align="center"><img src="images/shop/kluis.gif"></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
						<td>Aantal:<b><? echo $user->kluis; ?></b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>

						<td>Power: <b>0</b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
						<td valign="middle">Power totaal: <b><? echo 0*$user->kluis; ?></b></td>
					</tr>
					<tr>

						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
						<td>Marktwaarde: <b>&euro; <?; echo number_format(100000*$user->kluis, 0, '.' , '.'); ?></b></td>
					</tr>
				</table>
<?
}
if($user->zwitserse > 0){
?>
							<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
					<tr>
						<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Zwitserse rekening</td>
					</tr>
					<tr>

						<td rowspan=6 width="110px" height="110px" valign="middle" align="center"><img src="images/shop/zwitserserekening.gif"></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
						<td>Aantal:<b><? echo $user->zwitserse; ?></b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>

						<td>Power: <b>0</b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
						<td valign="middle">Power totaal: <b><? echo 0*$user->zwitserse; ?></b></td>
					</tr>
					<tr>

						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
						<td>Marktwaarde: <b>&euro; <?; echo number_format(100000*$user->zwitserse, 0, '.' , '.'); ?></b></td>
					</tr>
				</table>
<?
}
if($user->deagle > 0){
?>
							<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
					<tr>
						<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Desert Eagle</td>
					</tr>
					<tr>

						<td rowspan=6 width="110px" height="110px" valign="middle" align="center"><img src="images/shop/deserteagle.gif"></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
						<td>Aantal:<b><? echo $user->deagle; ?></b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>

						<td>Power: <b>25</b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
						<td valign="middle">Power totaal: <b><? echo 25*$user->deagle; ?></b></td>
					</tr>
					<tr>

						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
						<td>Marktwaarde: <b>&euro; <?; echo number_format(500*$user->deagle, 0, '.' , '.'); ?></b></td>
					</tr>
				</table>
<?
}
if($user->pepperspray > 0){
?>
							<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
					<tr>
						<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Pepperspray</td>
					</tr>
					<tr>

						<td rowspan=6 width="110px" height="110px" valign="middle" align="center"><img src="images/shop/pepperspray.gif"></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
						<td>Aantal:<b><? echo $user->pepperspray; ?></b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>

						<td>Power: <b>40</b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
						<td valign="middle">Power totaal: <b><? echo 40*$user->pepperspray; ?></b></td>
					</tr>
					<tr>

						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
						<td>Marktwaarde: <b>&euro; <?; echo number_format(950*$user->pepperspray, 0, '.' , '.'); ?></b></td>
					</tr>
				</table>
<?
}
if($user->sigp > 0){
?>
							<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
					<tr>
						<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Sig P228</td>
					</tr>
					<tr>

						<td rowspan=6 width="110px" height="110px" valign="middle" align="center"><img src="images/shop/sigp228.gif"></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
						<td>Aantal:<b><? echo $user->sigp; ?></b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>

						<td>Power: <b>55</b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
						<td valign="middle">Power totaal: <b><? echo 55*$user->sigp; ?></b></td>
					</tr>
					<tr>

						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
						<td>Marktwaarde: <b>&euro; <?; echo number_format(1400*$user->sigp, 0, '.' , '.'); ?></b></td>
					</tr>
				</table>
<?
}
if($user->c4 > 0){
?>
							<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
					<tr>
						<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">C4 Bom</td>
					</tr>
					<tr>

						<td rowspan=6 width="110px" height="110px" valign="middle" align="center"><img src="images/shop/c4.gif"></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
						<td>Aantal:<b><? echo $user->c4; ?></b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>

						<td>Power: <b>75</b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
						<td valign="middle">Power totaal: <b><? echo 75*$user->c4; ?></b></td>
					</tr>
					<tr>

						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
						<td>Marktwaarde: <b>&euro; <?; echo number_format(3000*$user->c4, 0, '.' , '.'); ?></b></td>
					</tr>
				</table>
<?
}
if($user->m16 > 0){
?>
							<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
					<tr>
						<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Machine Gun</td>
					</tr>
					<tr>

						<td rowspan=6 width="110px" height="110px" valign="middle" align="center"><img src="images/shop/m16.gif"></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
						<td>Aantal:<b><? echo $user->m16; ?></b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>

						<td>Power: <b>150</b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
						<td valign="middle">Power totaal: <b><? echo 150*$user->m16; ?></b></td>
					</tr>
					<tr>

						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
						<td>Marktwaarde: <b>&euro; <?; echo number_format(5000*$user->m16, 0, '.' , '.'); ?></b></td>
					</tr>
				</table>
<?
}
if($user->cornershot > 0){
?>
							<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
					<tr>
						<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Corner Shot</td>
					</tr>
					<tr>

						<td rowspan=6 width="110px" height="110px" valign="middle" align="center"><img src="images/shop/cornershot.gif"></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
						<td>Aantal:<b><? echo $user->cornershot; ?></b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>

						<td>Power: <b>150</b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
						<td valign="middle">Power totaal: <b><? echo 150*$user->cornershot; ?></b></td>
					</tr>
					<tr>

						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
						<td>Marktwaarde: <b>&euro; <?; echo number_format(5000*$user->cornershot, 0, '.' , '.'); ?></b></td>
					</tr>
				</table>
<?
}
if($user->knuppel > 0){
?>
							<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
					<tr>
						<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Knuppel</td>
					</tr>
					<tr>

						<td rowspan=6 width="110px" height="110px" valign="middle" align="center"><img src="images/shop/knuppel.gif"></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
						<td>Aantal:<b><? echo $user->knuppel; ?></b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>

						<td>Power: <b>45</b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
						<td valign="middle">Power totaal: <b><? echo 45*$user->knuppel; ?></b></td>
					</tr>
					<tr>

						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
						<td>Marktwaarde: <b>&euro; <?; echo number_format(1000*$user->knuppel, 0, '.' , '.'); ?></b></td>
					</tr>
				</table>
<?
}
if($user->switchblade > 0){
?>
							<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
					<tr>
						<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Switch blade</td>
					</tr>
					<tr>

						<td rowspan=6 width="110px" height="110px" valign="middle" align="center"><img src="images/shop/switchblade.gif"></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
						<td>Aantal:<b><? echo $user->switchblade; ?></b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>

						<td>Power: <b>180</b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
						<td valign="middle">Power totaal: <b><? echo 180*$user->switchblade; ?></b></td>
					</tr>
					<tr>

						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
						<td>Marktwaarde: <b>&euro; <?; echo number_format(9500*$user->switchblade, 0, '.' , '.'); ?></b></td>
					</tr>
				</table>
<?
}
if($user->pitbull > 0){
?>
							<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
					<tr>
						<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Pitbull</td>
					</tr>
					<tr>

						<td rowspan=6 width="110px" height="110px" valign="middle" align="center"><img src="images/shop/pitbull.gif"></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
						<td>Aantal:<b><? echo $user->pitbull; ?></b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>

						<td>Power: <b>250</b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
						<td valign="middle">Power totaal: <b><? echo 250*$user->pitbull; ?></b></td>
					</tr>
					<tr>

						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
						<td>Marktwaarde: <b>&euro; <?; echo number_format(12500*$user->pitbull, 0, '.' , '.'); ?></b></td>
					</tr>
				</table>
<?
}
if($user->sniper > 0){
?>
							<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
					<tr>
						<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Sniper</td>
					</tr>
					<tr>

						<td rowspan=6 width="110px" height="110px" valign="middle" align="center"><img src="images/shop/sniper.gif"></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
						<td>Aantal:<b><? echo $user->sniper; ?></b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>

						<td>Power: <b>450</b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
						<td valign="middle">Power totaal: <b><? echo 450*$user->sniper; ?></b></td>
					</tr>
					<tr>

						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
						<td>Marktwaarde: <b>&euro; <?; echo number_format(20000*$user->sniper, 0, '.' , '.'); ?></b></td>
					</tr>
				</table>
<?
}
if($user->bazooka > 0){
?>
							<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
					<tr>
						<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Bazooka</td>
					</tr>
					<tr>

						<td rowspan=6 width="110px" height="110px" valign="middle" align="center"><img src="images/shop/bazooka.gif"></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
						<td>Aantal:<b><? echo $user->bazooka; ?></b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>

						<td>Power: <b>950</b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
						<td valign="middle">Power totaal: <b><? echo 950*$user->bazooka; ?></b></td>
					</tr>
					<tr>

						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
						<td>Marktwaarde: <b>&euro; <?; echo number_format(50000*$user->bazooka, 0, '.' , '.'); ?></b></td>
					</tr>
				</table>
<?
}
if($user->swatgun > 0){
?>
							<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
					<tr>
						<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">S.W.A.T. Gun</td>
					</tr>
					<tr>

						<td rowspan=6 width="110px" height="110px" valign="middle" align="center"><img src="images/shop/swatgun.gif"></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
						<td>Aantal:<b><? echo $user->swatgun; ?></b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>

						<td>Power: <b>625</b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
						<td valign="middle">Power totaal: <b><? echo 625*$user->swatgun; ?></b></td>
					</tr>
					<tr>

						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
						<td>Marktwaarde: <b>&euro; <?; echo number_format(37500*$user->swatgun, 0, '.' , '.'); ?></b></td>
					</tr>
				</table>
<?
}
if($user->bodyguards > 0){
?>
							<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
					<tr>
						<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Bodyguards</td>
					</tr>
					<tr>

						<td rowspan=6 width="110px" height="110px" valign="middle" align="center"><img src="images/shop/bodyguards.gif"></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
						<td>Aantal:<b><? echo $user->bodyguards; ?></b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>

						<td>Power: <b>950</b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
						<td valign="middle">Power totaal: <b><? echo 950*$user->bodyguards; ?></b></td>
					</tr>
					<tr>

						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
						<td>Marktwaarde: <b>&euro; <?; echo number_format(50000*$user->bodyguards, 0, '.' , '.'); ?></b></td>
					</tr>
				</table>
<?
}
if($user->warboot > 0){
?>
							<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
					<tr>
						<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">War Boot</td>
					</tr>
					<tr>

						<td rowspan=6 width="110px" height="110px" valign="middle" align="center"><img src="images/shop/warboot.gif"></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
						<td>Aantal:<b><? echo $user->warboot; ?></b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>

						<td>Power: <b>10.000</b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
						<td valign="middle">Power totaal: <b><? echo 10000*$user->warboot; ?></b></td>
					</tr>
					<tr>

						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
						<td>Marktwaarde: <b>&euro; <?; echo number_format(150000*$user->warboot, 0, '.' , '.'); ?></b></td>
					</tr>
				</table>
<?
}
if($user->atoombom > 0){
?>
							<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
					<tr>
						<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Atoombom</td>
					</tr>
					<tr>

						<td rowspan=6 width="110px" height="110px" valign="middle" align="center"><img src="images/shop/atoombom.gif"></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
						<td>Aantal:<b><? echo $user->atoombom; ?></b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>

						<td>Power: <b>15.000</b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
						<td valign="middle">Power totaal: <b><? echo 15000*$user->atoombom; ?></b></td>
					</tr>
					<tr>

						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
						<td>Marktwaarde: <b>&euro; <?; echo number_format(200000*$user->atoombom, 0, '.' , '.'); ?></b></td>
					</tr>
				</table>
<?
}
if($user->spacestation > 0){
?>
							<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
					<tr>
						<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Space Station</td>
					</tr>
					<tr>

						<td rowspan=6 width="110px" height="110px" valign="middle" align="center"><img src="images/shop/spacestation.gif"></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
						<td>Aantal:<b><? echo $user->spacestation; ?></b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>

						<td>Power: <b>30.000</b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
						<td valign="middle">Power totaal: <b><? echo 30000*$user->spacestation; ?></b></td>
					</tr>
					<tr>

						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
						<td>Marktwaarde: <b>&euro; <?; echo number_format(500000*$user->spacestation, 0, '.' , '.'); ?></b></td>
					</tr>
				</table>
<?
}
if($user->tank > 0){
?>
							<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
					<tr>
						<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Tank</td>
					</tr>
					<tr>

						<td rowspan=6 width="110px" height="110px" valign="middle" align="center"><img src="images/shop/tank.gif"></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
						<td>Aantal:<b><? echo $user->tank; ?></b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>

						<td>Power: <b>15.500</b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
						<td valign="middle">Power totaal: <b><? echo 15500*$user->tank; ?></b></td>
					</tr>
					<tr>

						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
						<td>Marktwaarde: <b>&euro; <?; echo number_format(240000*$user->tank, 0, '.' , '.'); ?></b></td>
					</tr>
				</table>
<?
}
if($user->scud > 0){
?>
							<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
					<tr>
						<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Scud Raket</td>
					</tr>
					<tr>

						<td rowspan=6 width="110px" height="110px" valign="middle" align="center"><img src="images/shop/scudraket.gif"></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
						<td>Aantal:<b><? echo $user->scud; ?></b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>

						<td>Power: <b>25.000</b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
						<td valign="middle">Power totaal: <b><? echo 25000*$user->scud; ?></b></td>
					</tr>
					<tr>

						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
						<td>Marktwaarde: <b>&euro; <?; echo number_format(450000*$user->scud, 0, '.' , '.'); ?></b></td>
					</tr>
				</table>
<?
}
if($user->hoerenhuis > 0){
?>
							<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
					<tr>
						<td colspan=3 style="font-size:14px; font-weight:bold; color:#402810; padding-left:8px;">Hoerenhuis</td>
					</tr>
					<tr>

						<td rowspan=6 width="110px" height="110px" valign="middle" align="center"><img src="images/shop/hoerenhuis.gif"></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
						<td>Aantal:<b><? echo $user->hoerenhuis; ?></b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>

						<td>Power: <b>0</b></td>
					</tr>
					<tr>
						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/lightning.gif"></td>
						<td valign="middle">Power totaal: <b><? echo 0*$user->hoerenhuis; ?></b></td>
					</tr>
					<tr>

						<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
						<td>Marktwaarde: <b>&euro; <?; echo number_format(250000*$user->hoerenhuis, 0, '.' , '.'); ?></b></td>
					</tr>
				</table>
<?
}
}
?>
						</td></tr></table>
		</div>

		<table width='100%' cellspacing='2' cellpadding='2'>
			<tr>

				<td class='content_bottom'></td>
			</tr>
		</table>
		</div>

<div style="display:none;" id="mem_garage">
<?$dbres = mysql_query("SELECT * FROM `autos` WHERE `owner`='$user->login' ORDER BY `soort`");
if(mysql_num_rows($dbres) > 0){
?>
			<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
<?}
      while($list = mysql_fetch_object($dbres))
{
$plaatje = array("","2mercedes.jpg","golf.jpg","2rollsphantom.jpg","seat.jpg","2rover.jpg","delorean.jpg","2CadillacV16.jpg","cadillac.jpg","pontiac.jpg","2chrysler.jpg","audir8.jpg","mustang.jpg","gmc.jpg","hummer.jpg","2rolls.jpg","viper.jpg","ferarri.jpg");
$naam = array("","Mercedes","Golfkar","Rolls Phantom","Seat Cordoba","Rover","DeLorean DMC","Cadillac V16","Cadillac","Pontiac Firebird","Chrysler","Audi R8","Mustang","GMC","Hummer","Rolls Royce","Dodge Viper","Ferrari Spyder");
$topspeed = array("","240","100","240","220","185","88","250","190","240","250","230","220","210","180","220","240","250");
$paardenkracht = array("","197","50","200","120","116","140","197","130","150","215","130","200","190","210","190","180","210");
$plaatje = $plaatje[$list->soort];
$naam = $naam[$list->soort];
$topspeed = $topspeed[$list->soort];
$paardenkracht = $paardenkracht[$list->soort];
$autos1 = mysql_query("SELECT * FROM `autos` WHERE `owner`='$user->login' AND `soort`='$list->soort'");
$autos = mysql_num_rows($autos1);
while($wrd = mysql_fetch_object($autos1)){
$schade = $wrd->waarde/100;
$schadekosten = $wrd->schade*$schade;
$waarde1 = $waarde1+$wrd->waarde-$schadekosten;
}
if($stop != $list->soort){
$waarde = number_format($waarde1, 0, '.' , '.');
?>
				<tr>
					<td colspan="3"><font size="4" style="padding-left:7px;"><?echo$naam;?></font></td>
				</tr>
				<tr>
 					<td rowspan="5" width="120px" align="center"><img src="images/autos/<?echo$plaatje;?>" width="100" height="80"></td>
				</tr>
				<tr>
					<td width="18px" align="center" valign="middle"><img src="images/icons_gif/wand.gif"></td>
					<td>Aantal:<b><?echo$autos;?></b></td>
				</tr>
				<tr>

					<td width="18px" align="center" valign="middle"><img src="images/icons_gif/money.gif"></td>
					<td>Marktwaarde: <b>&euro; <?echo$waarde;?></b></td>
				</tr>
				<tr>
			   		<td width="18px" align="center"><img src='images/icons_gif/chart_curve.gif'></td>
			    	<td>Topsnelheid: <b><?echo$topspeed;?></b></td>
			  	</tr>
			  	<tr>
			    	<td width="18px" align="center"><img src='images/icons_gif/lightning.gif'></td>
			    	<td>Paardenkracht: <b><?echo$paardenkracht;?></b></td>
			  	</tr><?$stop = $list->soort;}
                  $waarde1 = 0;
                  }
if(mysql_num_rows($dbres) > 0){?>    </table><?}else{?>
		<b><i>Deze persoon heeft niets in zijn garage</i></b><?}?>
		</div>

<div style="display:none; overflow:hidden; width:600px" id="mem_personal">
<!-- LEEG GEMAAKT 2008-06-25 -->
</div>

<div style="display:none;" id="mem_posses">
<!-- LEEG GEMAAKT 2008-06-25 -->
</div>
<?

print <<<ENDHTML
<div style="display:none" id="mem_reacties">

<table>
ENDHTML;
$message1 = mysql_query("SELECT * FROM `gastenboek` WHERE `to`='$user->login'");
$message = mysql_fetch_object($message1);
         	$message->content 		= htmlspecialchars($message->content);
        	$message->content		= nl2br($message->content);

	$message->content = str_replace(":l:","<img src=$sitelink/v3/images/smiles/icon_neutral.gif>", $message->content);
	$message->content = str_replace(":mrgreen:","<img src=$sitelink/v3/images/smiles/icon_mrgreen.gif>", $message->content);
	$message->content = str_replace(":D","<img src=$sitelink/v3/images/smiles/icon_biggrin.gif>", $message->content);
	$message->content = str_replace(":arrow:","<img src=$sitelink/v3/images/smiles/icon_arrow.gif>", $message->content);
	$message->content = str_replace(":wink:","<img src=$sitelink/v3/images/smiles/icon_wink.gif>", $message->content);
	$message->content = str_replace(":roll:","<img src=$sitelink/v3/images/smiles/icon_rolleyes.gif>", $message->content);
	$message->content = str_replace(":twisted:","<img src=$sitelink/v3/images/smiles/icon_twisted.gif>", $message->content);
	$message->content = str_replace(":evil:","<img src=$sitelink/v3/images/smiles/icon_evil.gif>", $message->content);
    $message->content = str_replace(":lol:","<img src=$sitelink/v3/images/smiles/icon_lol.gif>", $message->content);
    $message->content = str_replace("8)","<img src=$sitelink/v3/images/smiles/icon_cool.gif>", $message->content);
    $message->content = str_replace(":?","<img src=$sitelink/v3/images/smiles/icon_confused.gif>", $message->content);
    $message->content = str_replace(":S","<img src=$sitelink/v3/images/smiles/icon_confused.gif>", $message->content);
    $message->content = str_replace(":idea:","<img src=$sitelink/v3/images/smiles/icon_idea.gif>", $message->content);
    $message->content = str_replace(":shock:","<img src=$sitelink/v3/images/smiles/icon_eek.gif>", $message->content);
    $message->content = str_replace(":!:","<img src=$sitelink/v3/images/smiles/icon_exclaim.gif>", $message->content);
    $message->content = str_replace(":cry:","<img src=$sitelink/v3/images/smiles/icon_cry.gif>", $message->content);
    $message->content = str_replace(":oops:","<img src=$sitelink/v3/images/smiles/icon_redface.gif>", $message->content);
    $message->content = str_replace(":P","<img src=$sitelink/v3/images/smiles/icon_razz.gif>", $message->content);
    $message->content = str_replace(":x","<img src=$sitelink/v3/images/smiles/icon_mad.gif>", $message->content);
    $message->content = str_replace(":o","<img src=$sitelink/v3/images/smiles/icon_suprised.gif>", $message->content);
    $message->content = str_replace(":(","<img src=$sitelink/v3/images/smiles/icon_sad.gif>", $message->content);
    $message->content = str_replace(":)","<img src=$sitelink/v3/images/smiles/icon_smile.gif>", $message->content);

	$message->content = str_replace("cw","**", $message->content);
	$message->content = str_replace("CW","**", $message->content);
	$message->content = str_replace("gangsterwar","************", $message->content);
	$message->content = str_replace("bulletstar","************", $message->content);
	$message->content = str_replace("crimeage","************", $message->content);
	$message->content = str_replace("gang-war","**************************", $message->content);
	$message->content = str_replace("gangwars","***************************", $message->content);
	$message->content = str_replace("kutzooi","*******************", $message->content);
	$message->content = str_replace("barafranca.com","***************", $message->content);
	$message->content = str_replace("KANKER","*****", $message->content);
	$message->content = str_replace("kanker","*****", $message->content);
	$message->content = str_replace("Kanker","*****", $message->content);
	$message->content = str_replace("gay","***", $message->content);
$msgcount = mysql_num_rows($message1);
$mscountfix = $msgcount;
$pages = floor($mscountfix/10+1);
if($msgcount == 0){
print <<<ENDHTML
		<tr>
		<td colspan="2">
			<i>Nog geen reacties ontvangen</i>
		</td>
	</tr>
ENDHTML;
}
$begin = ($_GET['gbpage'] >= 0) ? $_GET['gbpage']*10 : 0;
    $dbres				= mysql_query("SELECT * FROM `gastenboek` WHERE `to`='$user->login' ORDER BY `date` DESC LIMIT $begin,10");
  for($j=$begin+1; $info = mysql_fetch_object($dbres); $j++)
{
$poster1 = mysql_query("SELECT * FROM `users` WHERE `login`='$info->from'");
$poster = mysql_fetch_object($poster1);
?>
		</td>
		<tr  bgcolor="#EAE6D9">
		<td width="100%">
		<b>	<a href="index.php?a=profile&x=<? echo $poster->id; ?>"><? echo $info->from; ?></a> - <? echo $info->date; ?></b>
		</td>
		<td align="right" nowrap>
<? if($info->from == $data->login || $info->to == $data->login){
?>
							<a href="index.php?a=profile&x=<? echo $user->id; ?>&delreaction=<? echo $info->id; ?>">Verwijderen</a>
<?
}
?>
					</td>
	</tr>
	<tr>
		<td colspan="2"  bgcolor="#EAE6D9">
			 <?
   	$info->content 		= htmlspecialchars($info->content);
   	$info->content		= nl2br($info->content);
	$info->content = str_replace(":|:","<img src=$sitelink/v3/images/smiles/icon_neutral.gif>", $info->content);
	$info->content = str_replace(":mrgreen:","<img src=$sitelink/v3/images/smiles/icon_mrgreen.gif>", $info->content);
	$info->content = str_replace(":D","<img src=$sitelink/v3/images/smiles/icon_biggrin.gif>", $info->content);
	$info->content = str_replace(":arrow:","<img src=$sitelink/v3/images/smiles/icon_arrow.gif>", $info->content);
	$info->content = str_replace(":wink:","<img src=$sitelink/v3/images/smiles/icon_wink.gif>", $info->content);
	$info->content = str_replace(":roll:","<img src=$sitelink/v3/images/smiles/icon_rolleyes.gif>", $info->content);
	$info->content = str_replace(":twisted:","<img src=$sitelink/v3/images/smiles/icon_twisted.gif>", $info->content);
	$info->content = str_replace(":evil:","<img src=$sitelink/v3/images/smiles/icon_evil.gif>", $info->content);
    $info->content = str_replace(":lol:","<img src=$sitelink/v3/images/smiles/icon_lol.gif>", $info->content);
    $info->content = str_replace("8)","<img src=$sitelink/v3/images/smiles/icon_cool.gif>", $info->content);
    $info->content = str_replace(":?","<img src=$sitelink/v3/images/smiles/icon_confused.gif>", $info->content);
    $info->content = str_replace(":S","<img src=$sitelink/v3/images/smiles/icon_confused.gif>", $info->content);
    $info->content = str_replace(":idea:","<img src=$sitelink/v3/images/smiles/icon_idea.gif>", $info->content);
    $info->content = str_replace(":shock:","<img src=$sitelink/v3/images/smiles/icon_eek.gif>", $info->content);
    $info->content = str_replace(":!:","<img src=$sitelink/v3/images/smiles/icon_exclaim.gif>", $info->content);
    $info->content = str_replace(":cry:","<img src=$sitelink/v3/images/smiles/icon_cry.gif>", $info->content);
    $info->content = str_replace(":oops:","<img src=$sitelink/v3/images/smiles/icon_redface.gif>", $info->content);
    $info->content = str_replace(":P","<img src=$sitelink/v3/images/smiles/icon_razz.gif>", $info->content);
    $info->content = str_replace(":x","<img src=$sitelink/v3/images/smiles/icon_mad.gif>", $info->content);
    $info->content = str_replace(":o","<img src=$sitelink/v3/images/smiles/icon_surprised.gif>", $info->content);
    $info->content = str_replace(":(","<img src=$sitelink/v3/images/smiles/icon_sad.gif>", $info->content);
    $info->content = str_replace(":)","<img src=$sitelink/v3/images/smiles/icon_smile.gif>", $info->content);
             echo $info->content; ?>		</td>
	</tr>
	<tr>
		<td colspan="2">&nbsp;</td>
	</tr>
			<tr>
			<td colspan="2" align="center">
							</td>
		</tr>
<?
}
if($pages > 1){
$prev = $_GET['gbpage']-1;
$next = $_GET['gbpage']+1;
?>
<tr>
			<td colspan="2" align="center">
											<?
   if($_GET['gbpage'] > 0){
?><a href="index.php?a=profile&x=<? echo $user->id; ?>&gbpage=<? echo $prev; ?>"><< Vorige</a>
<?
}
else{ echo"<< Vorige"; }?>
<?
$thispage = $_GET['gbpage']+1;
    $dbres				= mysql_query("SELECT * FROM `gastenboek` WHERE `to`='$user->login' ORDER BY `date` LIMIT 0,$pages");
  for($j=$begin+1; $page = mysql_fetch_object($dbres); $j++){
if($counting == ""){ $counting = 0; }
$showcount = $counting+1;
if($counting != $_GET['gbpage']){
echo " | <a href=index.php?a=profile&x=$user->id&gbpage=$counting>$showcount</a>"; $counting = $counting+1; }
else{
echo " | $showcount"; $counting = $counting+1; }
}  ?>
<?if($thispage < $pages){
?> | <a href="index.php?a=profile&x=<? echo $user->id; ?>&gbpage=<? echo $next; ?>">Volgende >></a>
<?
}
else{ echo"Volgende >>"; }
}?>
										</td>
		</tr>
		<form method="POST" onsubmit="return checkError(this)" action="index.php?a=profile&x=<? echo $user->id; ?>">
	<tr>
		<td colspan="2">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="2">Laat een berichtje achter:</td>
	</tr>
	<tr>
		<td colspan="2">
			<textarea name="reaction" id="reaction" rows="5" cols="50"></textarea>
		</td>
	</tr>
	<tr>
		<td colspan="2">
					<table>
			<tr>
								<td>
					<a href="#" title=":|:" onclick="document.getElementById('reaction').value += ':|:'; document.getElementById('reaction').focus(); return false;"><img src="images/smiles/icon_neutral.gif" border="0"></a>
				</td>
								<td>
					<a href="#" title=":mrgreen:" onclick="document.getElementById('reaction').value += ':mrgreen:'; document.getElementById('reaction').focus(); return false;"><img src="images/smiles/icon_mrgreen.gif" border="0"></a>
				</td>
								<td>
					<a href="#" title=":D" onclick="document.getElementById('reaction').value += ':D'; document.getElementById('reaction').focus(); return false;"><img src="images/smiles/icon_biggrin.gif" border="0"></a>
				</td>
								<td>
					<a href="#" title=":arrow:" onclick="document.getElementById('reaction').value += ':arrow:'; document.getElementById('reaction').focus(); return false;"><img src="images/smiles/icon_arrow.gif" border="0"></a>
				</td>
								<td>
					<a href="#" title=":wink:" onclick="document.getElementById('reaction').value += ':wink:'; document.getElementById('reaction').focus(); return false;"><img src="images/smiles/icon_wink.gif" border="0"></a>
				</td>
								<td>
					<a href="#" title=":roll:" onclick="document.getElementById('reaction').value += ':roll:'; document.getElementById('reaction').focus(); return false;"><img src="images/smiles/icon_rolleyes.gif" border="0"></a>
				</td>
								<td>
					<a href="#" title=":twisted:" onclick="document.getElementById('reaction').value += ':twisted:'; document.getElementById('reaction').focus(); return false;"><img src="images/smiles/icon_twisted.gif" border="0"></a>
				</td>
								<td>
					<a href="#" title=":evil:" onclick="document.getElementById('reaction').value += ':evil:'; document.getElementById('reaction').focus(); return false;"><img src="images/smiles/icon_evil.gif" border="0"></a>
				</td>
								<td>
					<a href="#" title=":lol:" onclick="document.getElementById('reaction').value += ':lol:'; document.getElementById('reaction').focus(); return false;"><img src="images/smiles/icon_lol.gif" border="0"></a>
				</td>
								<td>
					<a href="#" title="8)" onclick="document.getElementById('reaction').value += '8)'; document.getElementById('reaction').focus(); return false;"><img src="images/smiles/icon_cool.gif" border="0"></a>
				</td>
								<td>
					<a href="#" title=":?" onclick="document.getElementById('reaction').value += ':?'; document.getElementById('reaction').focus(); return false;"><img src="images/smiles/icon_confused.gif" border="0"></a>
				</td>
								<td>
					<a href="#" title=":S" onclick="document.getElementById('reaction').value += ':S'; document.getElementById('reaction').focus(); return false;"><img src="images/smiles/icon_confused.gif" border="0"></a>
				</td>
								<td>
					<a href="#" title=":idea:" onclick="document.getElementById('reaction').value += ':idea:'; document.getElementById('reaction').focus(); return false;"><img src="images/smiles/icon_idea.gif" border="0"></a>
				</td>
								<td>
					<a href="#" title=":shock:" onclick="document.getElementById('reaction').value += ':shock:'; document.getElementById('reaction').focus(); return false;"><img src="images/smiles/icon_eek.gif" border="0"></a>
				</td>
								<td>
					<a href="#" title=":!:" onclick="document.getElementById('reaction').value += ':!:'; document.getElementById('reaction').focus(); return false;"><img src="images/smiles/icon_exclaim.gif" border="0"></a>
				</td>
								<td>
					<a href="#" title=":cry:" onclick="document.getElementById('reaction').value += ':cry:'; document.getElementById('reaction').focus(); return false;"><img src="images/smiles/icon_cry.gif" border="0"></a>
				</td>
								<td>
					<a href="#" title=":oops:" onclick="document.getElementById('reaction').value += ':oops:'; document.getElementById('reaction').focus(); return false;"><img src="images/smiles/icon_redface.gif" border="0"></a>
				</td>
								<td>
					<a href="#" title=":P" onclick="document.getElementById('reaction').value += ':P'; document.getElementById('reaction').focus(); return false;"><img src="images/smiles/icon_razz.gif" border="0"></a>
				</td>
								<td>
					<a href="#" title=":x" onclick="document.getElementById('reaction').value += ':x'; document.getElementById('reaction').focus(); return false;"><img src="images/smiles/icon_mad.gif" border="0"></a>
				</td>
								<td>
					<a href="#" title=":o" onclick="document.getElementById('reaction').value += ':o'; document.getElementById('reaction').focus(); return false;"><img src="images/smiles/icon_surprised.gif" border="0"></a>
				</td>
								<td>
					<a href="#" title=":(" onclick="document.getElementById('reaction').value += ':('; document.getElementById('reaction').focus(); return false;"><img src="images/smiles/icon_sad.gif" border="0"></a>
				</td>
								<td>
					<a href="#" title=":)" onclick="document.getElementById('reaction').value += ':)'; document.getElementById('reaction').focus(); return false;"><img src="images/smiles/icon_smile.gif" border="0"></a>
				</td>
							</tr>
		</table>
				</td>
	</tr>
	<tr>
		<td colspan="2" align="right">
			<input type="submit" class="mod_submit" name="addreaction" value="Plaatsen">
		</td>
	</tr>
	</form>
</table>
</div>
<div style="display:none" id="mem_missions">
			<div class="title_bg">
			<div class="title">Tutorial</div>
		</div>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
						<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
<?$missions = mysql_query("SELECT * FROM `missions` WHERE `moeilijkheid`='1'");
while($mission = mysql_fetch_object($missions)){
if(preg_match("/\b$mission->id\b/i", "$user->missionsfixed")){
$fixed = "yes";
?>
										<tr>
						<td width="16"><img src="images/icons_gif/award_star_bronze_1.gif"></td>
						<td><?echo$mission->title;?></td>
					</tr><?}}?>
									<?if($fixed == ""){?><i>Geen missies voltooid van dit onderdeel</i><?}?></table>
						</td></tr></table>
		</div>

		<table width='100%' cellspacing='0' cellpadding='0'>
			<tr>

				<td class='content_bottom'></td>
			</tr>
		</table>
		<br>		<div class="title_bg">
			<div class="title">Gevorderde tutorial</div>
		</div>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
						<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
<?
$fixed = "";
$missions = mysql_query("SELECT * FROM `missions` WHERE `moeilijkheid`='2'");
while($mission = mysql_fetch_object($missions)){
if(preg_match("/\b$mission->id\b/i", "$user->missionsfixed")){
$fixed = "yes";
?>
										<tr>
						<td width="16"><img src="images/icons_gif/award_star_silver_1.gif"></td>
						<td><?echo$mission->title;?></td>
					</tr><?}}?>
									</table>
						<?if($fixed == ""){?><i>Geen missies voltooid van dit onderdeel</i><?}?></td></tr></table>
		</div>

		<table width='100%' cellspacing='0' cellpadding='0'>
			<tr>

				<td class='content_bottom'></td>
			</tr>
		</table>
		<br>		<div class="title_bg">
			<div class="title">Expert Missies</div>
		</div>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
						<table width=100% cellspacing="2px" cellpadding="2px" class="mod_list">
<?
$fixed = "";
$missions = mysql_query("SELECT * FROM `missions` WHERE `moeilijkheid`='3'");
while($mission = mysql_fetch_object($missions)){
if(preg_match("/\b$mission->id\b/i", "$user->missionsfixed")){
$fixed = "yes";
?>
										<tr>
						<td width="16"><img src="images/icons_gif/award_star_gold_1.gif"></td>
						<td><?echo$mission->title;?></td>
					</tr><?}}?>
									</table>
						<?if($fixed == ""){?><i>Geen missies voltooid van dit onderdeel</i><?}?></td></tr></table>
		</div>

		<table width='100%' cellspacing='0' cellpadding='0'>
			<tr>

				<td class='content_bottom'></td>
			</tr>
		</table>
		<br></div>

		</td></tr></table>
		</div>
<?
ENDHTML;
?>

		<table width='100%' cellspacing='2' cellpadding='2'>
			<tr>

				<td class='content_bottom'></td>
			</tr>
		</table>


<script language="javascript">
	function checkError(pForm){
		var errormsg = '';

		if(pForm.reaction.value == '') errormsg += 'Er is geen reactie ingevuld!<br>';

		if(errormsg != ''){
			showError(errormsg);
			return false;
		}
		return true;
	}
<?
if(isset($_GET['delreaction']) || isset($_POST['addreaction']) || isset($_GET['gbpage'])){
?>
			openTab('mem_reacties','tab3');
<?
}
?>

</script>

<!-- POPUP MESSAGE -->
	<table id="popup_msg" style="position:absolute; left:0px; top:0px;  visibility:hidden; border:1px solid black;" cellspacing="0" cellpadding="0">
		<tr>
			<td style="width:40px; height:100%; background:url('images/message_tut/background_message_left.jpg') repeat-y; cursor:move;">
				&nbsp;
			</td>
			<td width="100%" style="width:445px;  background:#bfbfbf; text-align:center;">
			 	<div style="float:left; width:445px;  background:#bfbfbf; text-align:center;">
				<font style="text-align:left; display:block; border-bottom:2px solid #5a0000; margin-top:5px; margin-bottom:1px; color:#5a0000; font-family:Times new roman; font-weight:bold; font-size: 24px; cursor:move;" id="tutorial_title">WANTED!</font>
				<table width="100%">
					<tr>
						<td valign="top" height="100%">
							<table height="100%" width="100%">
								<tr>
									<td id="tutorial_mission" valign="top">
										<br>
										Mede Criminelen,<br>
										<br>
										Ik wil jullie hierbij mededelen dat ik een prijs uitloof aan de crimineel die de volgende persoon om het leven brengt:<br>
										<br>
										<center><span style="font-size:20px; font-weight:bold;" id="contract_naam">&nbsp;</span></center>
										<br>
										Hierop staat een beloning van:<br>
										<br>
										<center><span style="font-size:20px; font-weight:bold;" id="contract_price">&nbsp;</span></center>
										<br><br>
										Hoogachtend,<br>
										<br>
										<i>
										<span id="contract_signed">&nbsp;</span>
										</i>
										<br>
									</td>
								</tr>
								<tr>
									<td valign="bottom" id="tutorial_links">

									</td>
								</tr>
							</table>
						</td>
						<td align="right" valign="top">
							<img src="images/message_tut/gangster.jpg">
						</td>
					</tr>
				</table>
			</td>
			<td style="width:40px; height:100%; background:url('images/message_tut/background_message_right.jpg') repeat-y; cursor:move;" valign="top">
				<a href="#" onclick="document.getElementById('popup_msg').style.visibility = 'hidden';return false" class="error_ok"><img src="images/message_tut/cross.gif" border="0px" style="margin-left: 13; margin-top:5px; cursor:pointer;"></a>
			</td>
		</tr>
	</table>
	<!-- /POPUP MESSAGE -->

	<script language="javascript">
		function openContract(pNaam,pPrice,pSigned){
			document.getElementById('contract_naam').innerHTML = pNaam;
			document.getElementById('contract_price').innerHTML = '&euro; ' + pPrice;
			document.getElementById('contract_signed').innerHTML = pSigned;
			document.getElementById('popup_msg').style.visibility = 'visible';

		}


		SET_DHTML("popup_msg", "popup_content"+NO_DRAG);
	</script>		</div>
	</td>
	</tr>

	</table>
	</td>
<?}?>
