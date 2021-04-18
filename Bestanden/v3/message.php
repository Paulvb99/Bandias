<?
$mededeling1 = mysql_query("SELECT * FROM `messages` WHERE `to`='$data->login' AND `inbox`='2' AND `read`='0'");
$mededeling = mysql_num_rows($mededeling1);
$inbox1 = mysql_query("SELECT * FROM `messages` WHERE `to`='$data->login' AND `inbox`='1' AND `read`='0'");
$inbox = mysql_num_rows($inbox1);
if(!isset($_GET['box'])){
$box = 1;
}
if($_GET['box'] == system){
$box = 2;
}
if($_GET['box'] == sent){
$box = 3;
}
?>
			<div class="title_bg">
			<div class="title">Privé berichten</div>
		</div>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
			<table width="97%">
		<tr>
			<td width="20%" align="center">
				<img src="images/icons_gif/email.gif" border="0px" align="absmiddle">
				<a href="index.php?a=message"><b>Inbox (<? echo $inbox; ?>)</b></a>
			</td>
			<td width="20%" align="center">
				<a href="index.php?a=message&box=system"><b>Mededeling (<? echo $mededeling; ?>)</b></a>
			</td>
			<td width="20%" align="center">
				<a href="index.php?a=message&box=sent"><b>Verstuurd</b></a>
			</td>
			<td width="20%" align="center">
				<img src="images/icons_gif/email_add.gif" border="0px" align="absmiddle">
				<a href="index.php?a=message&box=new"><b>Nieuw</b></a>
			</td>
			<td width="20%" align="center">
				<img src="images/icons_gif/delete.gif" border="0px" align="absmiddle">
				<a href="index.php?a=message&clear"><b>Alles verwijderen</b></a>
			</td>
		</tr>
		<tr>
			<td colspan="5">
				<hr>
				<!-- INBOX -->
<?
if(isset($_GET['sendmessage'])){
?>
								<table width="100%">
					<tr>
						<td>
<?
if(isset($_POST['verzenden'])){
$blacklist1				= mysql_query("SELECT * FROM `contacts` WHERE `level`='0' AND `owner`='{$_POST['to']}' AND `person`='$data->login'");
$blacklist = mysql_num_rows($blacklist1);
if($blacklist < 1){
$date2 = (date('m/d H:i'));
$to = $_POST['to'];
$subject = $_POST['subject'];
$content = $_POST['content'];
$_SESSION['mission'] = "Stuur iemand een Privé bericht";
        mysql_query("INSERT INTO `messages`(`date`,`to`,`from`,`ip`,`title`,`content`,`date2`,`read`,`inbox`,`reply`) values(NOW(),'$to','$data->login','$data->ip','$subject','$content','$date2','0','1','{$_GET['reply']}')");
        mysql_query("INSERT INTO `messages`(`date`,`to2`,`from`,`ip`,`title`,`content`,`date2`,`read`,`inbox`,`reply`) values(NOW(),'$to','$data->login','$data->ip','$subject','$content','$date2','0','3','{$_GET['reply']}')");
$contact1 = mysql_query("SELECT * FROM `contacts` WHERE `owner`='$data->login' AND `person`='{$_POST['to']}'");
$contact = mysql_num_rows($contact1);
if($contact < 1){
if(isset($_POST['add_friend'])){
        mysql_query("INSERT INTO `contacts`(`person`,`owner`) values( '{$_POST['to']}','$data->login')");
}
}
}
}
if($blacklist < 1){
?>

							Het bericht is verstuurd.
<?
}
else{
?>

       <? echo $_POST['to']; ?> heeft jou in zijn blacklist staan!
<?
}
if(!isset($_POST['verzenden'])){
?>
							Het bericht is<b> niet</b> verstuurd.
<?
}
?>
                   						</td>
					</tr>
				</table>

			</td>
<?
}
if(isset($_GET['del'])){
mysql_query("DELETE FROM `messages` WHERE `id`='{$_GET['del']}' AND `to`='$data->login'");
mysql_query("DELETE FROM `messages` WHERE `id`='{$_GET['del']}' AND `from`='$data->login' AND `inbox`='3'");
}
if(isset($_GET['clear'])){
mysql_query("DELETE FROM `messages` WHERE `to`='$data->login'");
mysql_query("DELETE FROM `messages` WHERE `from`='$data->login' AND `inbox`='3'");}
if($_GET['box'] != "new"){
if(!isset($_GET['sendmessage'])){
if(!isset($_GET['x']))
{
?>
								<table width='100%' border='0' class='mod_list' cellspacing='2' cellpadding='2' align='center'>
					<tr>
						<td width='5%' align='center'>#</td>
						<td width=5%></td>
						<td width='50%' align='left'><b>Onderwerp</b></td>
						<td width='20%' align='left'><b>Verzender</b></td>
						<td width='15%' align='left'><b>Datum</b></td>
						<td width=5%></td>
					</tr>
<?
$begin = ($_GET['p'] >= 0) ? $_GET['p']*15 : 0;
if($_GET['box'] == ""){
$message1 = mysql_query("SELECT * FROM `messages` WHERE `to`='$data->login'");
$msg1 = mysql_query("SELECT * FROM `messages` WHERE `to`='$data->login' AND `inbox`='1'");
    $dbres				= mysql_query("SELECT * FROM `messages` WHERE `to`='$data->login' AND `inbox`='1' ORDER BY `date` LIMIT $begin,15");
}
if($_GET['box'] == "system"){
$message1 = mysql_query("SELECT * FROM `messages` WHERE `to`='$data->login'");
$msg1 = mysql_query("SELECT * FROM `messages` WHERE `to`='$data->login' AND `inbox`='2'");
    $dbres				= mysql_query("SELECT * FROM `messages` WHERE `to`='$data->login' AND `inbox`='2' ORDER BY `date` LIMIT $begin,15");
}
if($_GET['box'] == "sent"){
$message1 = mysql_query("SELECT * FROM `messages` WHERE `from`='$data->login'");
$msg1 = mysql_query("SELECT * FROM `messages` WHERE `from`='$data->login' AND `inbox`='3'");
    $dbres				= mysql_query("SELECT * FROM `messages` WHERE `from`='$data->login' AND `inbox`='3' ORDER BY `date` LIMIT $begin,15");
}
  for($j=$begin+1; $info = mysql_fetch_object($dbres); $j++)
{
$message = mysql_fetch_object($message1);
$msgcount = mysql_num_rows($message1);
$mscountfix = $message1;
$msg = mysql_num_rows($msg1);
$pages = floor($msg/15+1);
$poster1 = mysql_query("SELECT * FROM `users` WHERE `login`='$info->from'");
$poster = mysql_fetch_object($poster1);
$schammel				= mysql_query("SELECT * FROM `users` WHERE UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(`online`) < 300 AND `login`='$poster->login'");
$online = mysql_fetch_object($schammel);
?>
										<tr>
						<td align="center"><? echo $j; ?></td>
						<td align="center">
<?if($info->read == 0){?>
															<img title="Niet gelezen" src="images/icons_gif/email_open.gif">
<?
}
if($info->read == 1){?>
															<img title="Gelezen" src="images/icons_gif/email.gif">
<?
}
?>

													</td>
						<td><a href="index.php?a=message&x=<? echo $info->id; ?>"><? echo $info->title; ?></a></td>
						<td>
<?if($online->login == $poster->login){?><img src="images/icons_gif/status_online.gif" title="Online"><?}?><?if($online->login != $poster->login){?><img src="images/icons_gif/status_offline.gif" title="Offline"><?}?> <a href="index.php?a=profile&x=<? echo $poster->id; ?>"><? echo $poster->login; ?></a>
													</td>
						<td><? echo $info->date2; ?></td>
						<td align="center">
							<a href="index.php?a=message&del=<? echo $info->id; ?>"><img src='images/icons_gif/cross.gif' border='0' alt='Verwijderen'></a>
						</td>
<?
}
?>
					</tr>
									</table>
<?
}else{
$openmessage3 = mysql_query("SELECT * FROM `messages` WHERE `from`='$data->login' AND `id`='{$_GET['x']}'");
$openmessage2 = mysql_fetch_object($openmessage3);
if($openmessage2->inbox != 3){
$openmessage1 = mysql_query("SELECT * FROM `messages` WHERE `to`='$data->login' AND `id`='{$_GET['x']}'");
}
else{
$openmessage1 = mysql_query("SELECT * FROM `messages` WHERE `from`='$data->login' AND `id`='{$_GET['x']}'");
}
$openmessage = mysql_fetch_object($openmessage1);
$sentuser1 = mysql_query("SELECT * FROM `users` WHERE `login`='$openmessage->from'");
$sentuser = mysql_fetch_object($sentuser1);
if($openmessage2->inbox != 3){
mysql_query("UPDATE `messages` SET `read`='1' WHERE `id`='{$_GET['x']}' AND `to`='$data->login'");
}
else{
mysql_query("UPDATE `messages` SET `read`='1' WHERE `id`='{$_GET['x']}' AND `from`='$data->login'");
}
?>

				<!-- MEDEDELINGEN -->

				<!-- VERZONDEN -->

				<!-- OPEN BERICHT -->
<br>
				<table width="100%">
					<tr>
						<td><b>Van</b>:</td>
						<td>
							<? echo $openmessage->from; ?>									[<a href="index.php?a=blacklist&x=<? echo $sentuser->id; ?>">Blacklist</a>]

					</tr>
					<tr>
						<td><b>Datum</b>:</td>
						<td><? echo $openmessage->date; ?></td>
					</tr>
					<tr>
						<td><b>Aan</b>:</td>
<td><?if($openmessage->inbox != 3){echo $openmessage->to;}else{echo $openmessage->to2;}?></td>
					</tr>
					<tr>
						<td><b>Onderwerp</b>:</td>
						<td>
							<? echo $openmessage->title; ?>						</td>
					</tr>
					<tr>
						<td colspan="2"><hr></td>
					</tr>
<?
        $openmessage->content 		= htmlspecialchars($openmessage->content);
       	$openmessage->content 		= nl2br($openmessage->content);
		$openmessage->content 		= str_replace("[b]", "<b>",$openmessage->content);
		$openmessage->content 		= str_replace("[/b]", "</b>",$openmessage->content);
		$openmessage->content 		= str_replace("[i]", "<i>",$openmessage->content);
		$openmessage->content 		= str_replace("[/i]", "</i>",$openmessage->content);
		$openmessage->content 		= str_replace("[u]", "<u>",$openmessage->content);
		$openmessage->content 		= str_replace("[/u]", "</u>",$openmessage->content);
		$openmessage->content 		= str_replace("[center]", "<center>",$openmessage->content);
		$openmessage->content 		= str_replace("[/center]", "</center>",$openmessage->content);
    $openmessage->content = str_replace(":)","<img src=$sitelink/v3/images/smiles/icon_smile.gif>", $openmessage->content);
    $openmessage->content = str_replace(":D","<img src=$sitelink/v3/images/smiles/icon_biggrin.gif>", $openmessage->content);
	$openmessage->content = str_replace(";)","<img src=$sitelink/v3/images/smiles/icon_wink.gif>", $openmessage->content);
    $openmessage->content = str_replace(":(","<img src=$sitelink/v3/images/smiles/icon_sad.gif>", $openmessage->content);
        $openmessage->content 		= eregi_replace("\\[quote]([^\\[]*)\\[/quote\\]","<table width=90% cellspacing=1 cellpadding=3 border=0 class=quote><tr><td><b>Quote:</b></td></tr><td class=quote>\\1</td></table>",$openmessage->content);
		$openmessage->content 		= str_replace("[quote]", "",$openmessage->content);
		$openmessage->content 		= str_replace("[/quote]", "",$openmessage->content);
    ?>
					<tr>
						<td colspan="2">
                        <? echo $openmessage->content; ?>
                        </td>
					</tr>
<?if($openmessage->reply != -1){?>
										<tr>
						<td colspan="2" align="right">
					<form method="POST" action="index.php?a=message&box=new&reply=<? echo $openmessage->id; ?>" onsubmit="return checkError(this);">
							<input type="submit" class="mod_submit" value="Antwoorden" name="answer">
                    </form>
                        </td>
					</tr>
<?}?>
									</table>

			</td>
		</tr>
<?}}}?>
				<!-- NIEUW BERICHT -->
<?
if($_GET['box'] == "new"){
if(isset($_POST['answer'])){
if(!isset($_GET['reply'])){
$isreply = 0;
}
if(isset($_GET['reply'])){
$isreply = 1;
$reply1 = mysql_query("SELECT * FROM `messages` WHERE `id`='{$_GET['reply']}'");
$reply = mysql_fetch_object($reply1);
}
}
else{
$isreply = 0;
}
?>

				<script language="javascript">
					var contact_book;

					function check_contact(){
						if(document.getElementById('contact').value != '') document.getElementById('to').value = document.getElementById('contact')[document.getElementById('contact').options.selectedIndex].text;
						document.getElementById('to').readOnly = (document.getElementById('contact').value != '');
					}

					function select_user_popup(pUser){
						document.getElementById('to').value = pUser;
						contact_book.close();
						document.getElementById('contact').options.selectedIndex = 0;
						document.getElementById('to').readOnly = false;
					}

				</script>
				<table width="100%">
					<form method="POST" action="index.php?a=message&sendmessage&reply=<? echo $isreply; ?>" onsubmit="return checkError(this);">
<?
$dbres = mysql_query("SELECT * FROM `contacts` WHERE `owner`='$data->login' AND `level`='1'");
?>
						<td>Naar:</td>
						<td>
<?
if($isreply == 1){?>
							<input type="text" id="to" name="to" size="25" value="<? echo $reply->from; ?>">
<?
}
else{?>
							<input type="text" id="to" name="to" size="25" value="<? echo $_GET['to']; ?>">
<?
}
?>
						</td>
						<td>
														<select name="contact" id="contact" onchange="check_contact()">
								<option value="">-- Kies een vriend --</option>
<?
  for($j=$begin+1; $info = mysql_fetch_object($dbres); $j++)
{
$friend1 = mysql_query("SELECT * FROM `users` WHERE `login`='$info->person'");
$friend = mysql_fetch_object($friend1);
?>
																	<option value="<? echo $friend->id; ?>"><? echo $info->person; ?></option>
<?
}
?>
															</select>
													</td>
					</tr>
					<tr>
						<td>Onderwerp:</td>
						<td>
<?
if($isreply == 1){?>
							<input type="text" name="subject" size="25" value="Re: <? echo $reply->title; ?>">
<?
}
else{?>
							<input type="text" name="subject" size="25" value="">
<?
}
?>
						</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3">
							<hr>
						</td>
					</tr>
					<tr>
						<td colspan="3">
<?
if($isreply == 1){
		$reply->content 		= str_replace("[quote]", "",$reply->content);
		$reply->content 		= str_replace("[/quote]", "",$reply->content);
?>
							<textarea name="content" style="width:100%" rows="7">[quote]<? echo $reply->content; ?>[/quote]</textarea>
<?
}
else{?>
							<textarea name="content" style="width:100%" rows="7"></textarea>
<?
}
?>

						</td>
					</tr>
					<tr>
						<td colspan="3">
							<input type="checkbox" name="add_friend" value="1"> Toevoegen als contactpersoon.						</td>
					</tr>
					<tr>
						<td colspan="3">
							<input type="submit" class="mod_submit" name="verzenden" value="Versturen">
						</td>
					</tr>
					</form>
				</table>
<?
}
?>

				<script language="javascript">
					function checkError(pForm){
						var errormsg = '';

						if(pForm.subject.value == '') errormsg += 'Er is geen onderwerp ingevuld!<br>';
						if(pForm.to.value == '') errormsg += 'Er is geen ontvanger ingevuld!<br>';
						if(pForm.content.value == '') errormsg += 'Er is geen inhoud ingevuld!<br>';

						if(errormsg != ''){
							showError(errormsg);
							return false;
						}
						return true;
					}
				</script>





				<!-- BERICHT COMMUNICATIE -->
			</td>
		</tr>





<?
if(!isset($_GET['x']))
{
if($_GET['box'] != "new"){
if($pages > 1){
$prev = $_GET['p']-1;
$next = $_GET['p']+1;
if($_GET['box'] == ""){
$dbres = mysql_query("SELECT * FROM `messages` WHERE `to`='$data->login' AND `inbox`='1'");
}
if($_GET['box'] == system){
$dbres = mysql_query("SELECT * FROM `messages` WHERE `to`='$data->login' AND `inbox`='2'");
}
if($_GET['box'] == sent){
$dbres = mysql_query("SELECT * FROM `messages` WHERE `from`='$data->login' AND `inbox`='3'");
}
  print "</table>\n\n<table width=100%>\n  <tr><td class=\"mainTxt\" align=\"center\">";
  if(mysql_num_rows($dbres) <= -1) {
    print "&#60; 1 &#62;</td></tr></table>\n";
	}
  else {
    if($begin/15 == 0) {
      print "&#60;&#60; Vorige | ";
	  }
    else {
      print "<a href=\"index.php?a=message&box={$_GET['box']}&p=". ($begin/15-1) ."\">&#60;&#60; Vorige</a> | ";
}
    for($i=0; $i<mysql_num_rows($dbres)/15; $i++) {
$j = $i+1;
      print "<a href=\"index.php?a=message&box={$_GET['box']}&p=$i\">$j</a> | ";
    }

    if($begin+15 >= mysql_num_rows($dbres)) {
      print "Volgende &#62;&#62; ";
	  }
    else {
      print "<a href=\"index.php?a=message&box={$_GET['box']}&p=". ($begin/15+1) ."\">Volgende &#62;&#62;</a>";
  }
  }
  }
  }
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
				</div>
	</td>
	</tr>

	</table>
	</td>
