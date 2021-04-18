<?
  include("config.php");
  session_start();
if($_GET['mode'] != delete && $_GET['mode'] != post && $_GET['mode'] != edit && $_GET['mode'] != reply && $_GET['mode'] != quote){header("Location: $sitelink/index.php");}
if($_GET['mode'] == delete){
if(isset($_GET['p'])){
$deletep1 = mysql_query("SELECT * FROM `forumreplies` WHERE `id`='{$_GET['p']}'");
$deletep = mysql_fetch_object($deletep1);
if($deletep->auteur != $data->login && $data->admin == 0 && $data->moderator == 0){
$error = deletefout;
$del3 = mysql_query("SELECT * FROM `forumreplies` WHERE `id`='{$_GET['p']}'");
$del2 = mysql_fetch_object($reply3);
$del1 = mysql_query("SELECT * FROM `forumtopics` WHERE `id`='$reply2->topic'");
}else{
mysql_query("DELETE FROM `forumreplies` WHERE `id`='{$_GET['p']}'");
$error = delete;
}
}
if(isset($_GET['t'])){
$deletet1 = mysql_query("SELECT * FROM `forumtopics` WHERE `id`='{$_GET['t']}'");
$deletet = mysql_fetch_object($deletet1);
if($deletet->auteur != $data->login && $data->admin == 0 && $data->moderator == 0){
$error = deletefout;
$del1 = mysql_query("SELECT * FROM `forumtopics` WHERE `id`='{$_GET['t']}'");
}else{
$error = delete;
mysql_query("DELETE FROM `forumtopics` WHERE `id`='{$_GET['t']}'");
mysql_query("DELETE FROM `forumreplies` WHERE `topic`='{$_GET['t']}'");
mysql_query("DELETE FROM `forumpolls` WHERE `topic`='{$_GET['t']}'");
}}$del = mysql_fetch_object($reply1);}
if($_GET['mode'] == reply || $_GET['mode'] == quote || $_GET['mode'] == delete || $_GET['mode'] == edit){
if(isset($_GET['t'])){
$reply1 = mysql_query("SELECT * FROM `forumtopics` WHERE `id`='{$_GET['t']}'");
}
if(isset($_GET['p'])){
if($_GET['mode'] != edit){
$reply3 = mysql_query("SELECT * FROM `forumreplies` WHERE `id`='{$_GET['p']}'");
$reply2 = mysql_fetch_object($reply3);
$reply1 = mysql_query("SELECT * FROM `forumtopics` WHERE `id`='$reply2->topic'");
}else{
$reply1 = mysql_query("SELECT * FROM `forumreplies` WHERE `id`='{$_GET['p']}'");}}
$reply = mysql_fetch_object($reply1);
if($reply->auteur != $data->login && $data->admin < 1 && $data->moderator < 1 && $_GET['mode'] == edit){
$error = deletefout;
}
}


if($reply->locked == 1){header("Location: $sitelink/v3/viewtopic.php?f={$_GET['f']}&t=$reply->id");}


if(isset($_POST['post'])){
if($_POST['message'] == ""){
$error = 3;
}
if($_POST['subject'] == ""){
$error = 4;
}
if($_POST['poll_title'] != "" && $_POST['poll_option_text1'] == ""){$error = 1;}
if($_POST['poll_option_text1'] != "" && $_POST['poll_option_text2'] == ""){$error = 1;}
if($_POST['poll_max_options'] > 10){$_POST['poll_max_options'] = 10;}
if($_POST['poll_max_options'] < 1){$_POST['poll_max_options'] = 1;}
if($error == ""){
if(!isset($_POST['disable_smilies'])){
$smilies = 1;
}else{$smilies = 0;}
if(!isset($_POST['disable_bbcode'])){
$bbcode = 1;
}else{$bbcode = 0;}
$geplaatst = (date("d-m-Y H:i"));
$gereplied = (date("d-m-Y"));
if($_GET['mode'] == post){
mysql_query("INSERT INTO `forumtopics`(title,content,auteur,smiles,ubb,subforum,date,lastreplydate,lastreply,lastreplydate2) values('{$_POST['subject']}','{$_POST['message']}','$data->login','$smilies','$bbcode','{$_GET['f']}','$geplaatst','$gereplied','$data->login',NOW())");
$select = mysql_query("SELECT * FROM `forumtopics` WHERE `title`='{$_POST['subject']}' AND `content`='{$_POST['message']}' ORDER BY `id` DESC");
while($sel = mysql_fetch_object($select)){
if($stop == ""){
$stop = 1;
$topicid = $sel->id;
}}
$error = niks;
if($_GET['f'] == 8 && $data->admin == 1){
$news11 = mysql_query("SELECT * FROM `news` WHERE `place`='1'");
$news22 = mysql_query("SELECT * FROM `news` WHERE `place`='2'");
$news33 = mysql_query("SELECT * FROM `news` WHERE `place`='3'");
$news44 = mysql_query("SELECT * FROM `news` WHERE `place`='4'");
$news55 = mysql_query("SELECT * FROM `news` WHERE `place`='5'");
$news1 = mysql_fetch_object($news11);
$news2 = mysql_fetch_object($news22);
$news3 = mysql_fetch_object($news33);
$news4 = mysql_fetch_object($news44);
$news5 = mysql_fetch_object($news55);
$nieuws = (date("d-m"));
mysql_query("UPDATE `news` SET `author`='$news4->author',`title`='$news4->title',`date`='$news4->date',`id`='$news4->id' WHERE `place`='5'");
mysql_query("UPDATE `news` SET `author`='$news3->author',`title`='$news3->title',`date`='$news3->date',`id`='$news3->id' WHERE `place`='4'");
mysql_query("UPDATE `news` SET `author`='$news2->author',`title`='$news2->title',`date`='$news2->date',`id`='$news2->id' WHERE `place`='3'");
mysql_query("UPDATE `news` SET `author`='$news1->author',`title`='$news1->title',`date`='$news1->date',`id`='$news1->id' WHERE `place`='2'");
mysql_query("UPDATE `news` SET `author`='$data->login',`title`='{$_POST['subject']}',`date`='$nieuws',`id`='$topicid' WHERE `place`='1'");
}
if($_POST['poll_title'] != ""){
mysql_query("INSERT INTO `forumpolls`(vraag,opties,geldig,optie1,optie2,optie3,optie4,optie5,optie6,optie7,optie8,optie9,optie10,topic) values('{$_POST['poll_title']}','{$_POST['poll_max_options']}','{$_POST['poll_length']}','{$_POST['poll_option_text1']}','{$_POST['poll_option_text2']}','{$_POST['poll_option_text3']}','{$_POST['poll_option_text4']}','{$_POST['poll_option_text5']}','{$_POST['poll_option_text6']}','{$_POST['poll_option_text7']}','{$_POST['poll_option_text8']}','{$_POST['poll_option_text9']}','{$_POST['poll_option_text10']}','$topicid')");
}
}
if($_GET['mode'] == edit){
if(isset($_GET['p'])){
mysql_query("UPDATE `forumreplies` SET `content`='{$_POST['message']}',`title`='{$_POST['subject']}',`smiles`='$smilies',`ubb`='$bbcode' WHERE `id`='$reply->id'");
$error = niks;
}else if(isset($_GET['t'])){
mysql_query("UPDATE `forumtopics` SET `content`='{$_POST['message']}',`title`='{$_POST['subject']}',`smiles`='$smilies',`ubb`='$bbcode' WHERE `id`='$reply->id'");
$error = niks;
}}
if($_GET['mode'] == reply || $_GET['mode'] == quote){
mysql_query("INSERT INTO `forumreplies`(title,content,auteur,smiles,ubb,subforum,date,topic) values('{$_POST['subject']}','{$_POST['message']}','$data->login','$smilies','$bbcode','{$_GET['f']}','$geplaatst','$reply->id')");
mysql_query("UPDATE `forumtopics` SET `read`='0',`lastreplydate`='$gereplied',`lastreplydate2`=NOW(),`lastreply`='$data->login' WHERE `id`='$reply->id'");
$error = niks;
}}}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="nl-nl" xml:lang="nl-nl">
<head>

<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta http-equiv="content-language" content="nl-nl" />
<meta http-equiv="content-style-type" content="text/css" />
<meta http-equiv="imagetoolbar" content="no" />
<meta name="resource-type" content="document" />
<meta name="distribution" content="global" />
<meta name="copyright" content="2002-2006 phpBB Group" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<?
if($_GET['f'] == 6){
$text = "Vragen rondom het spel";
$categorietext = "Spel en ondersteuning";
$categorie = 10;
}
if($_GET['f'] == 12){
$text = "Plaats hier je secret links";
$categorietext = "Spel en ondersteuning";
$categorie = 10;
}
if($_GET['f'] == 5){
$text = "Fouten &amp; Bugs";
$categorietext = "Spel en ondersteuning";
$categorie = 10;
}
if($_GET['f'] == 4){
$text = "Tips &amp; Idee&euml;n";
$categorietext = "Spel en ondersteuning";
$categorie = 10;
}
if($_GET['f'] == 8){
$text = "Nieuws en Updates";
$categorietext = "Spel en ondersteuning";
$categorie = 10;
}
if($_GET['f'] == 3){
$text = "Algemeen Forum";
$categorietext = "Forums";
$categorie = 9;
}
if($_GET['f'] == 7){
$text = "Het caf&eacute;";
$categorietext = "Forums";
$categorie = 9;
}
if($error != niks && $error != delete && $error != deletefout){
?>
<title>Banditi &bull; Plaats <?if($_GET['mode'] == post){?>een nieuw bericht<?}if($_GET['mode'] == reply || $_GET['mode'] == quote){?>reactie<?}?></title>
<?}else{?>
<meta http-equiv="refresh" content="3;url=<?echo$sitelink;?>/v3/viewtopic.php?f=<?echo$_GET['f'];?>&amp;t=<?if($_GET['mode'] == post){echo$topicid;}if($_GET['mode'] == reply || $_GET['mode'] == quote || $_GET['mode'] == delete){echo$reply->id;}?>" /><title>Banditi &bull; Informatie</title>
<?}?>

<link rel="stylesheet" href="./styles/ubuntu/theme/stylesheet.css" type="text/css" />
<link rel="stylesheet" href="./css/style.css" type="text/css" />

<script type="text/javascript" src="./js/prototype-1.6.0.2.js"></script>

	</head>



<?
mysql_query("UPDATE `users` SET `online`=NOW() WHERE `login`='{$data->login}'");
if($_GET['x'] == delsafemode){
mysql_query("UPDATE `users` SET `safe`='0' WHERE `login`='$data->login'");
}
?>
<script language="javascript">
// <![CDATA[

function popup(url, width, height, name)
      {
       if (!name)
       {
          name = '_popup';
       }

       window.open(url.replace(/&amp;/g, '&'), name, 'height=' + height + ',resizable=yes,scrollbars=yes,width=' + width);
         return false;
      }


function jumpto()
{
<?
$dbres = mysql_query("SELECT * FROM `forumtopics`");
$num = mysql_num_rows($dbres);
$pages = floor($num/25)+1;
?>
	var page = prompt('Geef het paginanummer van de pagina waarnaar je wilt gaan:', '');
	var perpage = '25';
	var maxpages = '<?echo$pages;?>';
	var base_url = '<?=$sitelink?>/v3/';

	if (page !== null && !isNaN(page) && page > 0 && page <= maxpages)
	{
		document.location.href = base_url.replace(/&amp;/g, '&') + '<?echo"viewforum.php?f={$_GET['f']}&amp;st={$_GET['st']}&amp;sk=$sk&amp;sd=$sd&amp;"?>&start=' + ((page - 1) * perpage);
	}
}

/**
* Find a member
*/
function find_username()
      {
       popup(url, 760, 570, '_usersearch');
         return false;
      }

/**
* Mark/unmark checklist
* id = ID of parent container, name = name prefix, state = state [true/false]
*/
function marklist(id, name, state)
{
	var parent = document.getElementById(id);
	if (!parent)
	{
		eval('parent = document.' + id);
	}

	if (!parent)
	{
		return;
	}

	var rb = parent.getElementsByTagName('input');

	for (var r = 0; r < rb.length; r++)
	{
		if (rb[r].name.substr(0, name.length) == name)
		{
			rb[r].checked = state;
		}
	}
}
// ]]>
</script>
<body class="ltr">



<div align="center">

<table border=0px border-color=yellow cellspacing=0px cellpadding=0px width=1000px>

<tr>
<?include("left_column.php")?>
<a name="top"></a>
<div id="wrapheader" style="width:620px">
		<div class="title_bg" style="width:100%;">
			<div class="title_medium" style="width:100%" nowrap>
			<a href="./forum.php">Forumoverzicht</a>
<?if($error != niks && $error != delete && $error != deletefout){?>			 &#187; <a  href="./viewforum.php?f=<?echo$_GET['f'];?>"><?echo$text;?></a> <?}?><span id="phpbb_show_topic" style="display:none;">&#187; </span>
			</div>
		</div>


		<div style="width:100%; height:35px; background:url('../images/tab_info_bg.jpg') bottom repeat-x #c3b79d; font-family:arial; font-size:12px; color:#2a190e;">

			<div style="float:left; margin-top:8px;">

						<div id="" style="float:left; height:20px; margin:0px; padding:0px; margin-left: 5px;"><a href="./forumfaq.php">Help</a></div>

													<div id="" style="float:left; height:20px; margin:0px; padding:0px; margin-left: 5px;">|</div>
							<div id="" style="float:left; height:20px; margin:0px; padding:0px; margin-left: 5px;"><a href="./memberlist.php?mode=leaders">Het team</a></div>

			</div>

		</div>



</div>

<div id="wrapcentre" style="width:590px;">
<?if($error == niks){
?>
<table class="tablebg" width="100%" cellspacing="1">
<tr>
	<th>Informatie</th>
</tr>
<tr>
	<td class="row1" align="center"><br /><p class="gen">Je bericht is succesvol geplaatst.<br /><br /><a href="./viewtopic.php?f=<?echo$_GET['f'];?>&amp;t=<?if($_GET['mode'] == post){echo$topicid;}if($_GET['mode'] == reply || $_GET['mode'] == quote || $_GET['mode'] == edit){echo$reply->id;}?>">Toon het geplaatste bericht</a><br /><br /><a href="./viewforum.php?f=<?echo$_GET['f'];?>">Keer terug naar het laatst geopende forum</a></p><br /></td>
</tr>
</table>

<br clear="all" />

</div>
	<table width='100%' cellspacing='2' cellpadding='2'>
		<tr>
			<td class='content_bottom'></td>
		</tr>
	</table>
<br/>

		</div>
	</td>
	</tr>

	</table>
	</td>
<?}
if($error == delete){
?>
<table class="tablebg" width="100%" cellspacing="1">
<tr>
	<th>Informatie</th>
</tr>
<tr>
	<td class="row1" align="center"><br /><p class="gen">Je bericht is succesvol verwijderd.<br /><br /><a href="./viewforum.php?f=<?echo$_GET['f'];?>">Terug</a><br /><br /><a href="./viewforum.php?f=<?echo$_GET['f'];?>">Keer terug naar het laatst geopende forum</a></p><br /></td>
</tr>
</table>

<br clear="all" />

</div>
	<table width='100%' cellspacing='2' cellpadding='2'>
		<tr>
			<td class='content_bottom'></td>
		</tr>
	</table>
<br/>

		</div>
	</td>
	</tr>

	</table>
	</td>
<?}
if($error == deletefout){
?>
<table class="tablebg" width="100%" cellspacing="1">
<tr>
	<th>Informatie</th>
</tr>
<tr>
	<td class="row1" align="center"><br /><p class="gen">Dit bericht is niet van jou!<br /><br /><a href="./viewtopic.php?f=<?echo$_GET['f'];?>&amp;t=<?echo$reply->id;?>">Terug</a><br /><br /><a href="./viewforum.php?f=<?echo$_GET['f'];?>">Keer terug naar het laatst geopende forum</a></p><br /></td>
</tr>
</table>

<br clear="all" />

</div>
	<table width='100%' cellspacing='2' cellpadding='2'>
		<tr>
			<td class='content_bottom'></td>
		</tr>
	</table>
<br/>

		</div>
	</td>
	</tr>

	</table>
	</td>
<?}
if($error != niks && $error != delete && $error != deletefout){?>	<div id="pageheader">
		<h2><a class="titles" href="./view<?if($_GET['mode'] == reply || $_GET['mode'] == quote){?>topic<?}if($_GET['mode'] == post){?>forum<?}?>.php?f=<?echo$_GET['f']; if($_GET['mode'] == reply || $_GET['mode'] == quote){?>&t=<?echo"$reply->id";}?>"><?if($_GET['mode'] == post){echo"$text"; }if($_GET['mode'] == reply || $_GET['mode'] == quote){echo"$reply->title"; }?></a></h2>

			</div>

	<br clear="all" /><br />
	<form action="./posting.php?mode=<?echo$_GET['mode'];?>&amp;f=<?echo$_GET['f']; if($_GET['mode'] == edit || $_GET['mode'] == reply || $_GET['mode'] == quote && $_GET['t'] != ""){?>&t=<?}else if($_GET['mode'] == edit || $_GET['mode'] == reply || $_GET['mode'] == quote && $_GET['p'] != ""){?>&amp;p=<?}if($_GET['mode'] == edit || $_GET['mode'] == reply || $_GET['mode'] == quote && $_GET['t'] != ""){echo"$reply->id";}else if($_GET['mode'] == reply || $_GET['mode'] == quote && $_GET['p'] != ""){echo"$reply2->id";}?>" method="post" name="postform">
<?
if(isset($_POST['preview'])){
if($_POST['poll_title'] != "" && $_POST['poll_option_text1'] == ""){$error = 1;}
if($_POST['poll_option_text1'] != "" && $_POST['poll_option_text2'] == ""){$error = 1;}
if($_POST['poll_max_options'] > 10){$_POST['poll_max_options'] = 10;}
if($error != 1){
$replace = $_POST['message'];
$replace 		 = htmlspecialchars($replace);
$replace 		 = nl2br($replace);
if(!isset($_POST['disable_bbcode'])){
include("incl_ubb.php");
}
if(!isset($_POST['disable_smilies'])){
include("incl_smilies.php");
}
$geplaatst = (date("d-m-Y H:i"));
?>
<table class="tablebg" width="100%" cellspacing="1">
	<th>Voorbeeld</th>
</tr>
<tr>
	<td class="row1"><img src="./styles/N.Design/imageset/icon_post_target.gif" width="12" height="9" alt="Bericht" title="Bericht" /><span class="postdetails">Geplaatst: <?echo$geplaatst;?> &nbsp;&nbsp;&nbsp; Berichttitel: <?echo$_POST['subject'];?></span></td>
</tr>
<?
if($_POST['poll_title'] != ""){
?>
	<tr>
		<td class="row2" colspan="2" align="center"><br clear="all" />
			<table cellspacing="0" cellpadding="4" border="0" align="center">
			<tr>
				<td align="center"><span class="gen"><b><?echo$_POST['poll_title'];?></b></span><br /><span class="gensmall"></span></td>
			</tr>
			<tr>
				<td align="center">
					<table cellspacing="0" cellpadding="2" border="0">
<?if($_POST['poll_option_text1'] != ""){?>
											<tr>
							<td>
															<input type="<?if($_POST['poll_max_options'] > 1){?>checkbox<?}else{?>radio<?}?>" class="radio" name="vote_id" value="" />
														</td>
							<td><span class="gen"><?=$_POST['poll_option_text1']?></span></td>
						</tr>
<?}if($_POST['poll_option_text2'] != "" && $_POST['poll_option_text1'] != ""){?>
											<tr>
							<td>
															<input type="<?if($_POST['poll_max_options'] > 1){?>checkbox<?}else{?>radio<?}?>" class="radio" name="vote_id" value="" />
														</td>
							<td><span class="gen"><?=$_POST['poll_option_text2']?></span></td>
						</tr>
<?}if($_POST['poll_option_text3'] != "" && $_POST['poll_option_text2'] != ""){?>
											<tr>
							<td>
															<input type="<?if($_POST['poll_max_options'] > 1){?>checkbox<?}else{?>radio<?}?>" class="radio" name="vote_id" value="" />
														</td>
							<td><span class="gen"><?=$_POST['poll_option_text3']?></span></td>
						</tr>
<?}if($_POST['poll_option_text4'] != "" && $_POST['poll_option_text3'] != ""){?>
											<tr>
							<td>
															<input type="<?if($_POST['poll_max_options'] > 1){?>checkbox<?}else{?>radio<?}?>" class="radio" name="vote_id" value="" />
														</td>
							<td><span class="gen"><?=$_POST['poll_option_text4']?></span></td>
						</tr>
<?}if($_POST['poll_option_text5'] != "" && $_POST['poll_option_text4'] != ""){?>
											<tr>
							<td>
															<input type="<?if($_POST['poll_max_options'] > 1){?>checkbox<?}else{?>radio<?}?>" class="radio" name="vote_id" value="" />
														</td>
							<td><span class="gen"><?=$_POST['poll_option_text5']?></span></td>
						</tr>
<?}if($_POST['poll_option_text6'] != "" && $_POST['poll_option_text5'] != ""){?>
											<tr>
							<td>
															<input type="<?if($_POST['poll_max_options'] > 1){?>checkbox<?}else{?>radio<?}?>" class="radio" name="vote_id" value="" />
														</td>
							<td><span class="gen"><?=$_POST['poll_option_text6']?></span></td>
						</tr>
<?}if($_POST['poll_option_text7'] != "" && $_POST['poll_option_text6'] != ""){?>
											<tr>
							<td>
															<input type="<?if($_POST['poll_max_options'] > 1){?>checkbox<?}else{?>radio<?}?>" class="radio" name="vote_id" value="" />
														</td>
							<td><span class="gen"><?=$_POST['poll_option_text7']?></span></td>
						</tr>
<?}if($_POST['poll_option_text8'] != "" && $_POST['poll_option_text7'] != ""){?>
											<tr>
							<td>
															<input type="<?if($_POST['poll_max_options'] > 1){?>checkbox<?}else{?>radio<?}?>" class="radio" name="vote_id" value="" />
														</td>
							<td><span class="gen"><?=$_POST['poll_option_text8']?></span></td>
						</tr>
<?}if($_POST['poll_option_text9'] != "" && $_POST['poll_option_text8'] != ""){?>
											<tr>
							<td>
															<input type="<?if($_POST['poll_max_options'] > 1){?>checkbox<?}else{?>radio<?}?>" class="radio" name="vote_id" value="" />
														</td>
							<td><span class="gen"><?=$_POST['poll_option_text9']?></span></td>
						</tr>
<?}if($_POST['poll_option_text10'] != "" && $_POST['poll_option_text9'] != ""){?>
											<tr>
							<td>
															<input type="<?if($_POST['poll_max_options'] > 1){?>checkbox<?}else{?>radio<?}?>" class="radio" name="vote_id" value="" />
														</td>
							<td><span class="gen"><?=$_POST['poll_option_text10']?></span></td>
						</tr>
<?}?>
										</table>
				</td>
			</tr>
			<tr>
				<td align="center"><span class="gensmall">Je mag <strong><?echo$_POST['poll_max_options'];?></strong> optie<?if($_POST['poll_max_options'] > 1){?>s<?}?> selecteren</span></td>
			</tr>
			</table>
		</td>
	</tr>
<?}?>
<tr>
	<td class="row1">
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td><div class="postbody"><?echo$replace;?></div>
			</td>
		</tr>
		</table>
	</td>
</tr>
<tr>
	<td class="spacer"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
</tr>
</table>
<?}}?>

<br clear="all" />
<table class="tablebg" width="100%" cellspacing="1">
<tr>
	<th colspan="2"><b><?if($_GET['mode'] != edit){?>Plaats een nieuw bericht<?}else{echo"Bewerk bericht";}?></b></th>
</tr>
<?if($error != ""){?><tr><td class=\"row1\" width=\"22%\"></td><td class=\"row2\" width=\"22%\"><center><FONT color=red><?if($error == 1){?>Je moet minimaal twee poll opties hebben ingegeven.<?}if($error == 3){?>Je moet een bericht invullen.<?}if($error == 4){?>Je moet een onderwerp opgeven.<?}?></FONT></center></td></tr><?}?>

<tr>
	<td class="row1" width="22%"><b class="genmed">Onderwerp:</b></td>
	<td class="row2" width="78%"><input class="post" style="width:450px" type="text" name="subject" size="45" maxlength="60" tabindex="2" value="<?if(isset($_POST['subject'])){echo$_POST['subject'];}else if($_GET['mode'] == reply || $_GET['mode'] == quote && $_GET['t'] != ""){echo"Re: $reply->title";}else if($_GET['mode'] == reply || $_GET['mode'] == quote && $_GET['p'] != ""){echo"Re: $reply2->title";}if($_GET['mode'] == edit && !isset($_POST['preview'])){echo$reply->title;}?>" /></td>
</tr>
<tr>
	<td class="row1" valign="top"><b class="genmed">Bericht inhoud:</b><br /><span class="gensmall">Geef je bericht hier.&nbsp;</span><br /><br />
			<table width="100%" cellspacing="5" cellpadding="0" border="0" align="center">
		<tr>
			<td class="gensmall" align="center"><b>Smilies</b></td>
		</tr>
		<tr>
			<td align="center">
									<a href="#" onclick="insert_text(':D', true); return false;" style="line-height: 20px;"><img src="./images/smilesphpbb/icon_e_biggrin.gif" width="15" height="17" alt=":D" title="Zeer gelukkig" hspace="2" vspace="2" /></a>
									<a href="#" onclick="insert_text(':)', true); return false;" style="line-height: 20px;"><img src="./images/smilesphpbb/icon_e_smile.gif" width="15" height="17" alt=":)" title="Lach" hspace="2" vspace="2" /></a>
									<a href="#" onclick="insert_text(';)', true); return false;" style="line-height: 20px;"><img src="./images/smilesphpbb/icon_e_wink.gif" width="15" height="17" alt=";)" title="Knipoog" hspace="2" vspace="2" /></a>
									<a href="#" onclick="insert_text(':(', true); return false;" style="line-height: 20px;"><img src="./images/smilesphpbb/icon_e_sad.gif" width="15" height="17" alt=":(" title="Droevig" hspace="2" vspace="2" /></a>
									<a href="#" onclick="insert_text(':o', true); return false;" style="line-height: 20px;"><img src="./images/smilesphpbb/icon_e_surprised.gif" width="15" height="17" alt=":o" title="Verbaasd" hspace="2" vspace="2" /></a>
									<a href="#" onclick="insert_text(':shock:', true); return false;" style="line-height: 20px;"><img src="./images/smilesphpbb/icon_eek.gif" width="15" height="17" alt=":shock:" title="Gechoqueerd" hspace="2" vspace="2" /></a>
									<a href="#" onclick="insert_text(':?', true); return false;" style="line-height: 20px;"><img src="./images/smilesphpbb/icon_e_confused.gif" width="15" height="17" alt=":?" title="Verstrooid" hspace="2" vspace="2" /></a>
									<a href="#" onclick="insert_text('8-)', true); return false;" style="line-height: 20px;"><img src="./images/smilesphpbb/icon_cool.gif" width="15" height="17" alt="8-)" title="Cool" hspace="2" vspace="2" /></a>
									<a href="#" onclick="insert_text(':lol:', true); return false;" style="line-height: 20px;"><img src="./images/smilesphpbb/icon_lol.gif" width="15" height="17" alt=":lol:" title="Lachend" hspace="2" vspace="2" /></a>
									<a href="#" onclick="insert_text(':x', true); return false;" style="line-height: 20px;"><img src="./images/smilesphpbb/icon_mad.gif" width="15" height="17" alt=":x" title="Kwaad" hspace="2" vspace="2" /></a>
									<a href="#" onclick="insert_text(':P', true); return false;" style="line-height: 20px;"><img src="./images/smilesphpbb/icon_razz.gif" width="15" height="17" alt=":P" title="Razz" hspace="2" vspace="2" /></a>
									<a href="#" onclick="insert_text(':oops:', true); return false;" style="line-height: 20px;"><img src="./images/smilesphpbb/icon_redface.gif" width="15" height="17" alt=":oops:" title="Beschaamd" hspace="2" vspace="2" /></a>
									<a href="#" onclick="insert_text(':cry:', true); return false;" style="line-height: 20px;"><img src="./images/smilesphpbb/icon_cry.gif" width="15" height="17" alt=":cry:" title="Huilend of zeer droevig" hspace="2" vspace="2" /></a>
									<a href="#" onclick="insert_text(':evil:', true); return false;" style="line-height: 20px;"><img src="./images/smilesphpbb/icon_evil.gif" width="15" height="17" alt=":evil:" title="Slecht of heel kwaad" hspace="2" vspace="2" /></a>
									<a href="#" onclick="insert_text(':twisted:', true); return false;" style="line-height: 20px;"><img src="./images/smilesphpbb/icon_twisted.gif" width="15" height="17" alt=":twisted:" title="Geniepig slecht" hspace="2" vspace="2" /></a>
									<a href="#" onclick="insert_text(':roll:', true); return false;" style="line-height: 20px;"><img src="./images/smilesphpbb/icon_rolleyes.gif" width="15" height="17" alt=":roll:" title="Rollende ogen" hspace="2" vspace="2" /></a>
									<a href="#" onclick="insert_text(':!:', true); return false;" style="line-height: 20px;"><img src="./images/smilesphpbb/icon_exclaim.gif" width="15" height="17" alt=":!:" title="Uitroepingsteken" hspace="2" vspace="2" /></a>
									<a href="#" onclick="insert_text(':?:', true); return false;" style="line-height: 20px;"><img src="./images/smilesphpbb/icon_question.gif" width="15" height="17" alt=":?:" title="Vraag" hspace="2" vspace="2" /></a>
									<a href="#" onclick="insert_text(':idea:', true); return false;" style="line-height: 20px;"><img src="./images/smilesphpbb/icon_idea.gif" width="15" height="17" alt=":idea:" title="Idee" hspace="2" vspace="2" /></a>
									<a href="#" onclick="insert_text(':arrow:', true); return false;" style="line-height: 20px;"><img src="./images/smilesphpbb/icon_arrow.gif" width="15" height="17" alt=":arrow:" title="Pijl" hspace="2" vspace="2" /></a>
									<a href="#" onclick="insert_text(':|', true); return false;" style="line-height: 20px;"><img src="./images/smilesphpbb/icon_neutral.gif" width="15" height="17" alt=":|" title="Neutraal" hspace="2" vspace="2" /></a>
									<a href="#" onclick="insert_text(':mrgreen:', true); return false;" style="line-height: 20px;"><img src="./images/smilesphpbb/icon_mrgreen.gif" width="15" height="17" alt=":mrgreen:" title="Mr. Green" hspace="2" vspace="2" /></a>
									<a href="#" onclick="insert_text(':geek:', true); return false;" style="line-height: 20px;"><img src="./images/smilesphpbb/icon_e_geek.gif" width="17" height="17" alt=":geek:" title="Sul" hspace="2" vspace="2" /></a>
									<a href="#" onclick="insert_text(':ugeek:', true); return false;" style="line-height: 20px;"><img src="./images/smilesphpbb/icon_e_ugeek.gif" width="17" height="18" alt=":ugeek:" title="&Uuml;ber nerd" hspace="2" vspace="2" /></a>
							</td>
		</tr>


		</table>
		</td>
	<td class="row2" valign="top">
		<script type="text/javascript">
		// <![CDATA[
			var form_name = 'postform';
			var text_name = 'message';
		// ]]>
		</script>

		<table width="100%" cellspacing="0" cellpadding="0" border="0">
		<tr valign="middle" align="left">
	<td colspan="2">
		<script type="text/javascript">
		// <![CDATA[

		// Define the bbCode tags
		var bbcode = new Array();
		var bbtags = new Array('[b]','[/b]','[i]','[/i]','[u]','[/u]','[quote]','[/quote]','[code]','[/code]','[list]','[/list]','[list=]','[/list]','[img]','[/img]','[url]','[/url]','[flash=]', '[/flash]','[size=]','[/size]');
		var imageTag = false;

		// Helpline messages
		var help_line = {
			b: 'Vette tekst: [b]tekst[/b]',
			i: 'Cursieve tekst: [i]tekst[/i]',
			u: 'Onderstreepte tekst: [u]tekst[/u]',
			q: 'Citeer tekst: [quote]tekst[/quote]',
			c: 'Code weergave: [code]code[/code]',
			l: 'Lijst: [list]tekst[/list]',
			o: 'Geordende lijst: [list=]tekst[/list]',
			p: 'Afbeelding: [img]http://www.phpbb.nl/fotos/foto.jpg[/img]',
			w: 'URL: [url]http://url[/url] of [url=http://url]URL tekst[/url]',
			s: 'Tekstkleur: [color=red]tekst[/color] Tip: je kan ook dit gebruiken: #FF0000',
			f: 'Letter grootte: [size=85]kleine tekst[/size]',
			e: 'Lijst: voeg lijstelement toe',
			d: 'Flash: [flash=height,width]http://url[/flash]',
			t: '{ BBCODE_T_HELP }',
			tip: 'Tip: opmaak kan je snel toepassen op de geselecteerde tekst.'
					}

		// ]]>
		</script>
		<script type="text/javascript" src="./styles/ubuntu/template/editor.js"></script>

		<input type="button" class="btnbbcode" accesskey="b" name="addbbcode0" value=" B " style="font-weight:bold; width: 30px;" onclick="bbstyle(0)" onmouseover="helpline('b')" onmouseout="helpline('tip')" />
		<input type="button" class="btnbbcode" accesskey="i" name="addbbcode2" value=" i " style="font-style:italic; width: 30px;" onclick="bbstyle(2)" onmouseover="helpline('i')" onmouseout="helpline('tip')" />
		<input type="button" class="btnbbcode" accesskey="u" name="addbbcode4" value=" u " style="text-decoration: underline; width: 30px;" onclick="bbstyle(4)" onmouseover="helpline('u')" onmouseout="helpline('tip')" />
					<input type="button" class="btnbbcode" accesskey="q" name="addbbcode6" value="Quote" style="width: 50px" onclick="bbstyle(6)" onmouseover="helpline('q')" onmouseout="helpline('tip')" />
				<input type="button" class="btnbbcode" accesskey="c" name="addbbcode8" value="Code" style="width: 40px" onclick="bbstyle(8)" onmouseover="helpline('c')" onmouseout="helpline('tip')" />
		<input type="button" class="btnbbcode" accesskey="l" name="addbbcode10" value="List" style="width: 40px" onclick="bbstyle(10)" onmouseover="helpline('l')" onmouseout="helpline('tip')" />
		<input type="button" class="btnbbcode" accesskey="o" name="addbbcode12" value="List=" style="width: 40px" onclick="bbstyle(12)" onmouseover="helpline('o')" onmouseout="helpline('tip')" />
		<input type="button" class="btnbbcode" accesskey="t" name="addlitsitem" value="[*]" style="width: 40px" onclick="bbstyle(-1)" onmouseover="helpline('e')" onmouseout="helpline('tip')" />
					<input type="button" class="btnbbcode" accesskey="p" name="addbbcode14" value="Img" style="width: 40px" onclick="bbstyle(14)" onmouseover="helpline('p')" onmouseout="helpline('tip')" />
					<input type="button" class="btnbbcode" accesskey="w" name="addbbcode16" value="URL" style="text-decoration: underline; width: 40px" onclick="bbstyle(16)" onmouseover="helpline('w')" onmouseout="helpline('tip')" />
				<span class="genmed nowrap">Lettergrootte: <select class="gensmall" name="addbbcode20" onchange="bbfontstyle('[size=' + this.form.addbbcode20.options[this.form.addbbcode20.selectedIndex].value + ']', '[/size]');this.form.addbbcode20.selectedIndex = 2;" onmouseover="helpline('f')" onmouseout="helpline('tip')">
			<option value="50">Extra klein</option>
			<option value="85">Klein</option>
			<option value="100" selected="selected">Normaal</option>
			<option value="150">Groot</option>
			<option value="200">Extra groot</option>
		</select></span>
	</td>
</tr>
<tr>
	<td><input type="text" readonly="readonly" name="helpbox" style="width:100%" class="helpline" value="Tip: opmaak kan je snel toepassen op de geselecteerde tekst." /></td>
			<td class="genmed" align="center">Tekstkleur</td>
	</tr>
		<tr>
			<td valign="top" style="width: 100%;"><textarea name="message" rows="15" cols="76" tabindex="3" onselect="storeCaret(this);" onclick="storeCaret(this);" onkeyup="storeCaret(this);" style="width: 98%;"><?if(isset($_POST['message'])){echo$_POST['message'];}else if($_GET['mode'] == quote && isset($_GET['t'])){?>[quote=<?echo$reply->auteur;?>]<?echo$reply->content;?>[/quote]<?}if($_GET['mode'] == quote && isset($_GET['p']) && !isset($_POST['message'])){?>[quote=<?echo$reply2->auteur;?>]<?echo$reply2->content;?>[/quote]<?}if($_GET['mode'] == edit && !isset($_POST['preview'])){echo$reply->content;}?></textarea></td>
						<td width="80" align="center" valign="top">
				<script type="text/javascript">
				// <![CDATA[
					colorPalette('v', 7, 6)
				// ]]>
				</script>
			</td>
				 	</tr>
		</table>
	</td>
</tr>


<tr>
	<td class="row1" valign="top"><b class="genmed">Opties:</b><br />
		<table cellspacing="2" cellpadding="0" border="0">
		<tr>
			<td class="gensmall"><a href="./forumfaq.php?mode=bbcode">BBCode</a> staat <em>AAN</em></td>
		</tr>
				<tr>
			<td class="gensmall">[img] staat <em>AAN</em></td>
		</tr>
		<tr>
			<td class="gensmall">[flash] staat <em>UIT</em></td>
		</tr>
		<tr>
			<td class="gensmall">Smilies staan <em>AAN</em></td>
		</tr>
				</table>
	</td>
	<td class="row2">
		<table cellpadding="1">
					<tr>
				<td><input type="checkbox" class="radio" name="disable_bbcode" <?if(isset($_POST['disable_bbcode'])){?>checked="checked"<?}?>/></td>
				<td class="gen">Schakel BBCode uit</td>
			</tr>
					<tr>
				<td><input type="checkbox" class="radio" name="disable_smilies" <?if(isset($_POST['disable_smilies'])){?>checked="checked"<?}?>/></td>
				<td class="gen">Schakel smilies uit</td>
			</tr>
				</table>
	</td>
</tr>

	<tr>
		<td class="cat" colspan="2" align="center">
			<input class="btnlite" type="submit" tabindex="5" name="preview" value="Voorbeeld" />
			&nbsp; <input class="btnmain" type="submit" accesskey="s" tabindex="6" name="post" value="Bevestig" />
						&nbsp; <input class="btnlite" type="submit" accesskey="c" tabindex="9" name="cancel" value="Annuleren" />
		</td>
	</tr>
<?if($_GET['mode'] != reply && $_GET['mode'] != quote && $_GET['mode'] != edit){?>
	<tr>
	<th colspan="2">Voeg poll toe</th>
</tr>
<tr>
	<td class="row3" colspan="2"><span class="gensmall">Als je geen poll wilt toevoegen aan je onderwerp, laat deze velden dan leeg.</span></td>
</tr>
<tr>
	<td class="row1"><b class="genmed">Poll vraag:</b></td>
	<td class="row2"><input class="post" type="text" name="poll_title" size="50" maxlength="255" value="<?=$_POST['poll_title']?>" /></td>
</tr>
<tr>
	<td class="row1"><b class="genmed">Poll opties:</b><br /><span class="gensmall">Laat een optie open als je die niet wilt laten zien. Je mag <strong>10</strong> opties ingeven.</span></td>
	<td class="row2"><BR><BR><input class="post" type="text" name="poll_option_text1" size="50" maxlength="255" value="<?=$_POST['poll_option_text1']?>" /><BR><input class="post" type="text" name="poll_option_text2" size="50" maxlength="255" value="<?=$_POST['poll_option_text2']?>" /><BR><input class="post" type="text" name="poll_option_text3" size="50" maxlength="255" value="<?=$_POST['poll_option_text3']?>" /><BR><input class="post" type="text" name="poll_option_text4" size="50" maxlength="255" value="<?=$_POST['poll_option_text4']?>" /><BR><input class="post" type="text" name="poll_option_text5" size="50" maxlength="255" value="<?=$_POST['poll_option_text5']?>" /><BR><input class="post" type="text" name="poll_option_text6" size="50" maxlength="255" value="<?=$_POST['poll_option_text6']?>" /><BR><input class="post" type="text" name="poll_option_text7" size="50" maxlength="255" value="<?=$_POST['poll_option_text7']?>" /><BR><input class="post" type="text" name="poll_option_text8" size="50" maxlength="255" value="<?=$_POST['poll_option_text8']?>" /><BR><input class="post" type="text" name="poll_option_text9" size="50" maxlength="255" value="<?=$_POST['poll_option_text9']?>" /><BR><input class="post" type="text" name="poll_option_text10" size="50" maxlength="255" value="<?=$_POST['poll_option_text10']?>" /><BR></td>
</tr>
<tr>
	<td class="row1"><b class="genmed">Opties per gebruiker:</b><br /><span class="gensmall">Het aantal opties dat een gebruiker mag aanvinken als hij/zij een stem uitbrengt.</span></td>
	<td class="row2"><input class="post" type="text" name="poll_max_options" size="3" maxlength="3" value="<?if($_POST['poll_max_options'] == ""){?>1<?}else{echo$_POST['poll_max_options'];}?>" /></td>
</tr>

<tr>
	<td class="cat" colspan="2" align="center"><input type="hidden" name="lastclick" value="1220094930" />		<input class="btnlite" type="submit" tabindex="10" name="preview" value="Voorbeeld" />
		&nbsp; <input class="btnmain" type="submit" accesskey="s" tabindex="11" name="post" value="Bevestig" />
				&nbsp; <input class="btnlite" type="submit" accesskey="c" tabindex="14" name="cancel" value="Annuleren" />
	</td>
</tr>
<?}else{
$auteur3 = mysql_query("SELECT * FROM `users` WHERE `login`='$reply->auteur'");
$auteur2 = mysql_fetch_object($auteur3);
$replace = $reply->content;
$replace 		= htmlspecialchars($replace);
$reply->content 		= nl2br($reply->content);
$reply->content 		= htmlspecialchars($reply->content);
$replace 		= nl2br($replace);
if($reply->ubb == 1){
include("incl_ubb.php");
}
if($reply->smiles == 1){
include("incl_smilies.php");
}
?>
<table class="tablebg" width="100%" cellspacing="1">
<tr>
	<th align="center">Voorafgaande berichten - <?echo$reply->title;?></th>
</tr>
<tr>
	<td class="row1"><div style="overflow: auto; width: 100%; height: 300px;">

		<table class="tablebg" width="100%" cellspacing="1">
		<tr>
			<th width="22%">Auteur</th>
			<th>Bericht</th>
		</tr>
<?
$info2 = mysql_query("SELECT * FROM `forumreplies` WHERE `topic`='$reply->id'");
while($info = mysql_fetch_object($info2)){
$replace = $info->content;
$replace 		= htmlspecialchars($replace);
$replace 		= nl2br($replace);
if($info->ubb == 1){
include("incl_ubb.php");
}
if($info->smiles == 1){
include("incl_smilies.php");
}
?>
		<tr class="row1">
				<td rowspan="2" align="left" valign="top"><a id="pr<?echo$info->id;?>"></a>
					<table width="150" cellspacing="0">
					<tr>
						<td align="center"><b class="postauthor"><?echo$info->auteur;?></b></td>
					</tr>
					</table>
				</td>
				<td width="100%">
					<table width="100%" cellspacing="0">
					<tr>
						<td>&nbsp;</td>
						<td class="gensmall" valign="middle" nowrap="nowrap"><b>Berichttitel:</b>&nbsp;</td>
						<td class="gensmall" width="100%" valign="middle"><?echo$info->title;?></td>
					</tr>
					</table>
				</td>
			</tr>
			<tr class="row1">
				<td valign="top">
					<table width="100%" cellspacing="0">
					<tr>
						<td valign="top">
							<table width="100%" cellspacing="0" cellpadding="2">
							<tr>
								<td>
									<div class="postbody"><?echo$replace;?></div>

																			<div id="<?echo$info->id;?>" style="display: none;"><?echo$replace;?></div>
																	</td>
							</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td>
							<table width="100%" cellspacing="0">
							<tr valign="middle">
								<td width="100%" align="left"><span class="gensmall"></span></td>
								<td width="10" nowrap="nowrap"><img src="./styles/N.Design/imageset/icon_post_target.gif" width="12" height="9" alt="Bericht" title="Bericht" /></td>
								<td class="gensmall" nowrap="nowrap"><b>Geplaatst:</b> <?echo$info->date;?></td>
							</tr>
							</table>
						</td>
					</tr>
					</table>
				</td>
			</tr>
<?}
$replace = $reply->content;
$replace 		= htmlspecialchars($replace);
$replace 		= nl2br($replace);
if($reply->ubb == 1){
include("incl_ubb.php");
}
if($reply->smiles == 1){
include("incl_smilies.php");
}
?>
		<tr class="row1">
				<td rowspan="2" align="left" valign="top"><a id="pr<?echo$reply->id;?>"></a>
					<table width="150" cellspacing="0">
					<tr>
						<td align="center"><b class="postauthor"><?echo$reply->auteur;?></b></td>
					</tr>
					</table>
				</td>
				<td width="100%">
					<table width="100%" cellspacing="0">
					<tr>
						<td>&nbsp;</td>
						<td class="gensmall" valign="middle" nowrap="nowrap"><b>Berichttitel:</b>&nbsp;</td>
						<td class="gensmall" width="100%" valign="middle"><?echo$reply->title;?></td>
					</tr>
					</table>
				</td>
			</tr>

			<tr class="row1">
				<td valign="top">
					<table width="100%" cellspacing="0">
					<tr>
						<td valign="top">
							<table width="100%" cellspacing="0" cellpadding="2">
							<tr>
								<td>
									<div class="postbody"><?echo$replace;?></div>

																			<div id="<?echo$reply->id;?>" style="display: none;"><?echo$replace;?></div>
																	</td>
							</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td>
							<table width="100%" cellspacing="0">
							<tr valign="middle">
								<td width="100%" align="left"><span class="gensmall"></span></td>
								<td width="10" nowrap="nowrap"><img src="./styles/N.Design/imageset/icon_post_target.gif" width="12" height="9" alt="Bericht" title="Bericht" /></td>
								<td class="gensmall" nowrap="nowrap"><b>Geplaatst:</b> <?echo$reply->date;?></td>
							</tr>
							</table>
						</td>
					</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td class="spacer" colspan="2"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
			</tr>
				</table>
	</div></td>
</tr>
<?}?>
</table>

<br clear="all" />

	<input type="hidden" name="creation_time" value="1220094930" />
<input type="hidden" name="form_token" value="9dce3513b02cd6c1d21a5bc4922c1292463f2799" />
	</form>


	<br clear="all" />

	<table width="100%" cellspacing="1">
	<tr>
		<td align="right"></td>
	</tr>
	</table>

	</div>
	<table width='100%' cellspacing='2' cellpadding='2'>
		<tr>
			<td class='content_bottom'></td>
		</tr>
	</table>
<br/>

		</div>
	</td>
	</tr>

	</table>
	</td>
	<?}include("right_column.php");?>
