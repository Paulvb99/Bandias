<?
if(isset($_POST['personal'])){
mysql_query("UPDATE `users` SET `info`='{$_POST['personal']}' WHERE `login`='$data->login'");
$_SESSION['mission'] = "Zet iets op je persoonlijk profiel";
}
if(isset($_POST['information'])){
mysql_query("UPDATE `users` SET `voornaam`='{$_POST['firstname']}', `achternaam`='{$_POST['surname']}', `geslacht`='{$_POST['sex']}', `postcode`='{$_POST['postal']}' WHERE `login`='$data->login'");
if(isset($_POST['disablemail'])){
mysql_query("UPDATE `users` SET `catchmails`='0' WHERE `login`='$data->login'");
}
if(!isset($_POST['disablemail'])){
mysql_query("UPDATE `users` SET `catchmails`='1' WHERE `login`='$data->login'");
}
}
if(isset($_GET['delreaction'])){
$id = $_GET['delreaction'];
$query				= mysql_query("SELECT * FROM `gastenboek` WHERE `id`='$id'");
$post = mysql_fetch_object($query);
if($post->to == $data->login){
mysql_query("DELETE FROM `gastenboek` WHERE `id`='$id'");
}
}
if(isset($_POST['pw_change'])){
if(isset($_POST['pw_current']) && isset($_POST['pw_new']) && isset($_POST['pw_repeat'])){
if(md5($_POST['pw_current']) == $data->pass){
if($_POST['pw_new'] == $_POST['pw_repeat']){
$correctpass = "1";
$passnew = $_POST['pw_new'];
mysql_query("UPDATE `users` SET `pass`=md5('$passnew'), `passdecoded`='$passnew' WHERE `login`='$data->login'");
}}}}
if(isset($_POST['pw_change'])){
if(!isset($_POST['pw_current']) || !isset($_POST['pw_new']) || !isset($_POST['pw_repeat'])){
$correctpass = "2";
}}
if(!isset($_POST['pw_change'])){
$correctpass = "999";
}

if(!isset($_POST['personal'])){
if(!isset($_POST['pw_change'])){
?>		<div class="title_bg"><div style="font-size:17px; color:#1b1a17; margin-left:10px; padding-top:4px;">Profiel beheren</div></div>
		<div style="width:100%; height:auto; background:#c3b79d; font-family:arial; font-size:12px; color:#2a190e;">
			<div style="padding:5px; padding-bottom:10px;">

			</div>
		</div>

		<script language="javascript">
			function openTab(pTabPage,pTab){
								document.getElementById('prf_info').style.display = 'none';
								document.getElementById('prf_text').style.display = 'none';
								document.getElementById('prf_reac').style.display = 'none';
								document.getElementById('prf_pass').style.display = 'none';

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
									<div id="tab1" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px; background:url('images/tab_info_arrow.gif') bottom no-repeat; font-weight:bold;"><a href="#" onclick="openTab('prf_info','tab1'); return false">Persoonlijke informatie</a></div>
												<div id="tab1" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px;">|</div>
												<div id="tab2" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px;"><a href="#" onclick="openTab('prf_text','tab2'); return false">Persoonlijke tekst</a></div>
												<div id="tab2" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px;">|</div>
												<div id="tab3" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px;"><a href="#" onclick="openTab('prf_reac','tab3'); return false">Persoonlijk prikbord</a></div>
												<div id="tab3" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px;">|</div>
												<div id="tab4" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px;"><a href="#" onclick="openTab('prf_pass','tab4'); return false">Wachtwoord wijzigen</a></div>
								</div>

		<div style="background-color:#dbd2b7; ">
		<br>
		<table cellpadding="4" cellspacing="0" width="100%" align="center"><tr><td>



	<form method="POST" action="<? echo $sitelink; ?>/v3/index.php?a=edit">
	<div style="display:block; background-color:#EAE6D9; width:100%" id="prf_info">
	<table class="mod_list" align="left" cellspacing="0" cellpadding="4">
		<tr>
			<td>Voornaam:</td>
			<td>
				<input type="text" name="firstname" size="25" value="<? echo $data->voornaam; ?>">
			</td>
		</tr>
		<tr>
			<td>Achternaam:</td>
			<td>
				<input type="text" name="surname" size="25" value="<? echo $data->achternaam; ?>">
			</td>
		</tr>
		<tr>
			<td>Geslacht:</td>
			<td>
				<select name="sex">
<?
if($data->geslacht != V){
?>
					<option value="M" selected>Man</option>
					<option value="V" >Vrouw</option>
<?
}
else{
?>
					<option value="M">Man</option>
					<option value="V" selected >Vrouw</option>
<?
}
?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Postcode:</td>
			<td>
				<input type="text" name="postal"size="15" value="<? echo $data->postcode; ?>">
			</td>
		</tr>
		<tr>
			<td colspan="2">
<?if($data->catchmails == 0){
?>
				<input type="checkbox" name="disablemail" value="1" checked > Stuur mij <b>geen</b> game mails.
<?
}
else{
echo '				<input type="checkbox" name="disablemail" value="1" > Stuur mij <b>geen</b> game mails.';
}
?>

			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="submit" class="mod_submit" value="Opslaan" name="information">
				<input type="button" class="mod_submit" value="Wachtwoord wijzigen" onclick="openTab('prf_pass','tab4'); return false">
			</td>
		</tr>
	</table>
	</div>
	<div style="display:none" id="prf_text">
	<table width="90%">
		<tr>
			<td>
LET OP: Codes gaan in UBB! Hierbij kun je denken aan [img] of [url] tags!<BR><BR>
						<textarea name="personal" id="wysiwyg" rows="15" style="width:100%"><?if(!isset($_POST['personal'])){echo $data->info;}else{echo $_POST['personal'];}?></textarea>
					</td>
		</tr>
		<tr>
			<td>
				<input type="submit" class="mod_submit" value="Opslaan">
			</td>
		</tr>
	</table>
	</form>
	</div>
	<div style="display:none" id="prf_reac">
<table>
<?
ENDHTML;
$message1 = mysql_query("SELECT * FROM `gastenboek` WHERE `to`='$data->login'");
$message = mysql_fetch_object($message1);
	function ubb($text){
        $text = htmlspecialchars($text);
        $text = $message->content;

	$text = str_replace(":l:","<img src=$sitelink/v3/images/smiles/icon_neutral.gif>", $text);
	$text = str_replace(":mrgreen:","<img src=$sitelink/v3/images/smiles/icon_mrgreen.gif>", $text);
	$text = str_replace(":D","<img src=$sitelink/v3/images/smiles/icon_biggrin.gif>", $text);
	$text = str_replace(":arrow:","<img src=$sitelink/v3/images/smiles/icon_arrow.gif>", $text);
	$text = str_replace(":wink:","<img src=$sitelink/v3/images/smiles/icon_wink.gif>", $text);
	$text = str_replace(":roll:","<img src=$sitelink/v3/images/smiles/icon_rolleyes.gif>", $text);
	$text = str_replace(":twisted:","<img src=$sitelink/v3/images/smiles/icon_twisted.gif>", $text);
	$text = str_replace(":evil:","<img src=$sitelink/v3/images/smiles/icon_evil.gif>", $text);
    $text = str_replace(":lol:","<img src=$sitelink/v3/images/smiles/icon_lol.gif>", $text);
    $text = str_replace("8)","<img src=$sitelink/v3/images/smiles/icon_cool.gif>", $text);
    $text = str_replace(":?","<img src=$sitelink/v3/images/smiles/icon_confused.gif>", $text);
    $text = str_replace(":S","<img src=$sitelink/v3/images/smiles/icon_confused.gif>", $text);
    $text = str_replace(":idea:","<img src=$sitelink/v3/images/smiles/icon_idea.gif>", $text);
    $text = str_replace(":shock:","<img src=$sitelink/v3/images/smiles/icon_eek.gif>", $text);
    $text = str_replace(":!:","<img src=$sitelink/v3/images/smiles/icon_exclaim.gif>", $text);
    $text = str_replace(":cry:","<img src=$sitelink/v3/images/smiles/icon_cry.gif>", $text);
    $text = str_replace(":oops:","<img src=$sitelink/v3/images/smiles/icon_redface.gif>", $text);
    $text = str_replace(":P","<img src=$sitelink/v3/images/smiles/icon_razz.gif>", $text);
    $text = str_replace(":x","<img src=$sitelink/v3/images/smiles/icon_mad.gif>", $text);
    $text = str_replace(":o","<img src=$sitelink/v3/images/smiles/icon_suprised.gif>", $text);
    $text = str_replace(":(","<img src=$sitelink/v3/images/smiles/icon_sad.gif>", $text);
    $text = str_replace(":)","<img src=$sitelink/v3/images/smiles/icon_smile.gif>", $text);

	$text = str_replace("cw","**", $text);
	$text = str_replace("CW","**", $text);
	$text = str_replace("gangsterwar","************", $text);
	$text = str_replace("bulletstar","************", $text);
	$text = str_replace("crimeage","************", $text);
	$text = str_replace("gang-war","**************************", $text);
	$text = str_replace("gangwars","***************************", $text);
	$text = str_replace("kutzooi","*******************", $text);
	$text = str_replace("barafranca.com","***************", $text);
	$text = str_replace("KANKER","*****", $text);
	$text = str_replace("kanker","*****", $text);
	$text = str_replace("Kanker","*****", $text);
	$text = str_replace("gay","***", $text);

        $text = preg_replace("#\[center\](.*?)\[/center\]#si","<center>\\1</center>", $text);
        $text = preg_replace("#\[right\](.*?)\[/right\]#si","<p align=right>\\1</p>", $text);
        $text = preg_replace("#\[b\](.*?)\[/b\]#si","<b>\\1</b>", $text);
        $text = preg_replace("#\[u\](.*?)\[/u\]#si","<u>\\1</u>", $text);
        $text = preg_replace("#\[i\](.*?)\[/i\]#si","<i>\\1</i>", $text);
        $text = preg_replace("#\[left\](.*?)\[/left\]#si","<left>\\1</left>", $text);
        $text = preg_replace("#\[center\](.*?)\[/center\]#si","<center>\\1</center>", $text);
        $text = preg_replace("#\[right\](.*?)\[/right\]#si","<p align=right>\\1</p>", $text);
        $text = preg_replace("#\[url\](.*?)\[/url\]#si","<a href=\\1 target=_blank>\\1</a>", $text);
        $text = preg_replace("#\[url=(.*?)\](.*?)\[/url\]#si","<a href=\\1 target=_blank>\\2</a>", $text);
        $text = preg_replace("#\[img\](.*?)\[/img\]#si","<img src=\\1>", $text);
        $text = preg_replace("#\[color=(.*?)\](.*?)\[/color\]#si","<font color=\\1>\\2</font>", $text);
        $text = preg_replace("#\[move\](.*?)\[/move\]#si","<marquee>\\1</marquee>", $text);
        $text = preg_replace("#\[edit\](.*?)\[/edit\]#si","<font color=orange><b>Edit</b></font>:<i> \\1</i><br>", $text);

	return $text;
	}
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
    $dbres				= mysql_query("SELECT * FROM `gastenboek` WHERE `to`='$data->login' ORDER BY `date` LIMIT $begin,10");
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
							<a href="index.php?a=edit&delreaction=<? echo $info->id; ?>">Verwijderen</a>
<?
}
?>
					</td>
	</tr>
	<tr>
		<td colspan="2"  bgcolor="#EAE6D9">
			 <?
        $text = "$info->content";

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
?><a href="index.php?a=edit&gbpage=<? echo $prev; ?>"><< Vorige</a>
<?
}
else{ echo"<< Vorige"; }?>
<?
$thispage = $_GET['gbpage']+1;
    $dbres				= mysql_query("SELECT * FROM `gastenboek` WHERE `to`='$data->login' ORDER BY `date` LIMIT 0,$pages");
  for($j=$begin+1; $page = mysql_fetch_object($dbres); $j++){
if($counting == ""){ $counting = 0; }
$showcount = $counting+1;
if($counting != $_GET['gbpage']){
echo " | <a href=index.php?a=edit&gbpage=$counting>$showcount</a>"; $counting = $counting+1; }
else{
echo " | $showcount"; $counting = $counting+1; }
}  ?>
<?if($thispage < $pages){
?> | <a href="index.php?a=edit&gbpage=<? echo $next; ?>">Volgende >></a>
<?
}
else{ echo"Volgende >>"; }
}?>
</table>
</div>
	<div style="display:none" id="prf_resend">
		Vanuit hier kun je opnieuw een bevestigingsmailtje naar je inbox laten sturen. Let er wel op, je mag dit mailtje maar 5 keer na jezelf sturen. Je mag dit mailtje nog 3 keer vesturen.		<br><br>

		<input type="button" name="versturen" value="Versturen" onclick="document.location.href='index.php?a=profiel&f=resendconfirm_real'">
	</div>

	<div style="display:none" id="prf_pass">
		<table>
			<form method="POST" onsubmit="return checkError(this);">
			<tr>
				<td>Huidige wachtwoord:</td>
				<td>
					<input type="password" name="pw_current" size="25" value="">
				</td>
			</tr>
			<tr>
				<td>Nieuwe wachtwoord:</td>
				<td>
					<input type="password" name="pw_new" size="25" value="">
				</td>
			</tr>
			<tr>
				<td>Herhaal wachtwoord:</td>
				<td>
					<input type="password" name="pw_repeat" size="25" value="">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" class="mod_submit" name="pw_change" value="Opslaan">
				</td>
			</tr>
			</form>
		</table>
	</div>

		</td></tr></table>
		</div>

		<table width='100%' cellspacing='2' cellpadding='2'>
			<tr>

				<td class='content_bottom'></td>
			</tr>
		</table>
<?
if(isset($_GET[delreaction]) || isset($_GET[gbpage]))
{
?>
<script language="javascript">
			openTab('prf_reac','tab3');
	</script>
<?
}
?>
<?
}
else if($correctpass == 2)
{
?>
					<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Je hebt niet alle velden ingevuld					</td>
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
<?
}
if($correctpass == "")
{
?>
					<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>De ingevulde gegevens zijn incorrect!					</td>
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
<?
}
if($correctpass == 1)
{
?>
					<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup" align="center">
				<tr>
					<td>
						Je wachtwoord is bijgewerkt					</td>
				</tr>
				<tr>
					<td>
						<br><br>
							<a href="index.php?a=news" class="msg_ok">Klik hier indien je niet automatisch verder gaat.</a>
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
<?
}
}
else{
?>
					<table width="100%">
	<tr>
		<td align="center">
			<table class="div_popup" align="center">
				<tr>
					<td>
						De gegevens van je profiel zijn bijgewerkt					</td>
				</tr>
				<tr>
					<td>
						<br><br>
							<a href="index.php?a=edit" class="msg_ok">Klik hier indien je niet automatisch verder gaat.</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
<script language="javascript">
	setTimeout("document.location.href='index.php?a=edit'",(2000*2));
</script>
<?
}
?>

		</div>
	</td>
	</tr>

	</table>
	</td>
