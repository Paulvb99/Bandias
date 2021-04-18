<?
  include("config.php");
  if(isset($data->login) || isset($_SESSION['login'])){
  session_start();
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
if($_GET['st'] == ""){$_GET['st'] = 0;}
$sk = $_POST['sk'];
$sd = $_POST['sd'];
if($_POST['sk'] == ""){$sk = t;}
if($_POST['sd'] == ""){$sd = d;}
if($_GET['sk'] != ""){$sk = $_GET['sk'];}
if($_GET['sd'] != ""){$sd = $_GET['sd'];}
if($_GET['start'] == ""){$_GET['start'] = 0;}
if($_GET['mark'] == topics){
$error = mark;
mysql_query("UPDATE `forumtopics` SET `read`='1' WHERE `subforum`='{$_GET['f']}'");
}
if($error == mark){?><meta http-equiv="refresh" content="3;url=<?echo$sitelink;?>/v3/viewforum.php?f=<?echo$_GET['f'];?>" /><?}?><title><?php echo $sitename ?> &bull; Toon forum - <?echo$text;?></title>

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
		document.location.href = base_url.replace(/&amp;/g, '&') + '<?echo"viewforum.php?f={$_GET['f']}&amp;st={$_GET['st']}&amp;sk=$sk&amp;sd=$sd&amp;"?>start=' + ((page - 1) * perpage);
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
<?include("left_column.php");?>
<a name="top"></a>
<div id="wrapheader" style="width:620px">
		<div class="title_bg" style="width:100%;">
			<div class="title_medium" style="width:100%" nowrap>
			<a href="./forum.php">Forumoverzicht</a>
			 &#187; <a  href="./viewforum.php?f=<?echo$_GET['f'];?>"><?echo$text;?></a> <span id="phpbb_show_topic" style="display:none;">&#187; </span>
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
<?if($error == mark){?>
<table class="tablebg" width="100%" cellspacing="1">
<tr>
	<th>Informatie</th>
</tr>
<tr>
	<td class="row1" align="center"><br /><p class="gen">De onderwerpen in dit forum zijn als gelezen gemarkeerd.<br /><br /><a href="./viewforum.php?f=<?echo$_GET['f'];?>">Keer terug naar het laatst geopende forum</a></p><br /></td>
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
<?}else{?>
<div id="pagecontent">

		<table width="100%" cellspacing="1">
		<tr>
							<td align="left" valign="middle"><a href="./posting.php?mode=post&amp;f=<?echo$_GET['f'];?>"><img src="./styles/N.Design/imageset/nl/button_topic_new.gif" alt="Plaats een nieuw onderwerp" title="Plaats een nieuw onderwerp" /></a></td>
							<td class="gensmall" width="100%" align="right" nowrap="nowrap"><b><?
$next = $_GET['start']+25;
$begin = $_GET['start'];
$dbres = mysql_query("SELECT * FROM `forumtopics` WHERE `subforum`='{$_GET['f']}'");
$num = mysql_num_rows($dbres);
$stop = 0;
$pages = floor($num/25);
if($pages > 0){?><a href="#" onclick="jumpto(); return false;" title="Klik om naar de pagina te gaan ...">Ga naar pagina</a> <?
  if(mysql_num_rows($dbres) > -1) {
$j=0;
    for($i=0; $i<mysql_num_rows($dbres)/25;) {
$i = $j*25;
$j++;
$pagina2 = $begin/25;
$pagina = $pagina2+1;
if($pagina == $j){?><strong><?echo$j;?></strong><?}
else if($j < 6 && $j-1*25 <= $num && $num > $i){?><a href="./viewforum.php?f=<?=$_GET['f']?>&amp;st=<?=$_GET['st']?>&amp;sk=<?=$sk?>&amp;sd=<?=$sd?>&amp;start=<?=$i?>"><?=$j?></a><?}if($j*25 <= $num){echo'<span class="page-sep">, </span>';}
    }
if($j == 6){$start = $pages*25;echo" ... <a href=\"./viewforum.php?f={$_GET['f']}&amp;st={$_GET['st']}&amp;sk={$sk}&amp;sd={$sd}&amp;start=$start\">$pages</a>";}

    if($begin+25 > mysql_num_rows($dbres)) {
      print " Volgende";
	  }
    else {
      ?><a href="./viewforum.php?f=<?=$_GET['f']?>&amp;st=<?=$_GET['st']?>&amp;sk=<?=$sk?>&amp;sd=<?=$sd?>&amp;start=<?=$next?>"> Volgende</a><?
  }
  }
  }
  ?></b></td>
					</tr>
		</table>
			<table class="tablebg" width="100%" cellspacing="1">
		<tr>
			<td class="cat" colspan="6">
				<table width="100%" cellspacing="0">
				<tr class="nav">
					<td valign="middle">&nbsp;</td>
					<td align="right" valign="middle"><a href="./viewforum.php?f=<?=$_GET['f']?>&amp;mark=topics">Markeer onderwerpen als gelezen</a>&nbsp;</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr>
							<th colspan="2">&nbsp;Onderwerpen&nbsp;</th>
						<th>&nbsp;Auteur&nbsp;</th>
			<th>&nbsp;Reacties&nbsp;</th>
			<th>&nbsp;Laatste bericht&nbsp;</th>
		</tr>

<?
if($_POST['sd'] == a){
$order = "ASC";
}
else{
$order = "DESC";
}
if($_POST['sk'] == a){
$kolom = "`auteur`";
}
if($_POST['sk'] == t){
$kolom = "`id`";
}
if($_POST['sk'] == r){
$kolom = "`reacties`";
}
if($_POST['sk'] == s){
$kolom = "`title`";
}
if($_POST['sk'] == v){
$kolom = "`read`";
}
if($_GET['sd'] == a){
$order = "ASC";
}
if($_GET['sd'] == d){
$order = "DESC";
}
if($_GET['sk'] == a){
$kolom = "`auteur`";
}
if($_GET['sk'] == t){
$kolom = "`id`";
}
if($_GET['sk'] == r){
$kolom = "`reacties`";
}
if($_GET['sk'] == s){
$kolom = "`title`";
}
if($_GET['sk'] == v){
$kolom = "`read`";
}
if($_GET['start'] == ""){
$start = 0;
}
else{$start = $_GET['start'];}
if($_POST['sk'] == "" && $_GET['sk'] == ""){$kolom = "`id`";}
$extra = $start*25;
$announce1 = mysql_query("SELECT * FROM `forumtopics` WHERE `subforum`='{$_GET['f']}' AND `categorie`='announce' ORDER BY $kolom $order LIMIT $start,25");
while($announce = mysql_fetch_object($announce1)){
$poll = mysql_query("SELECT * FROM `forumpolls` WHERE `topic`='$announce->id'");
$poll2 = mysql_num_rows($poll);
$user = mysql_query("SELECT * FROM `users` WHERE `login`='$announce->auteur'");
$user = mysql_fetch_object($user);
$num2 = mysql_query("SELECT * FROM `forumreplies` WHERE `topic`='$announce->id'");
$num = mysql_num_rows($num2);
$user2 = mysql_query("SELECT * FROM `users` WHERE `login`='$announce->lastreply'");
$user2 = mysql_fetch_object($user2);
?>
			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/N.Design/imageset/<?echo$announce->categorie;?>_<?if($announce->read == 0){?>un<?}?>read<?if($announce->locked == 1){?>_locked<?}?>.gif" width="19" height="18" alt="<?if($topic2->read != 0){?>Geen n<?}?><?if($topic2->read == 0){?>N<?}?>ieuwe berichten" title="<?if($topic2->read != 0){?>Geen n<?}?><?if($topic2->read == 0){?>N<?}?>ieuwe berichten" /></td>
								<td class="row1">
					<img src="./styles/N.Design/imageset/icon_topic_newest.gif" width="18" height="9"/>					 <?if($poll2 > 0){?><b>Poll: </b><?}?><a title="Geplaatst: <?echo$announce->date;?>" href="./viewtopic.php?f=<?=$_GET['f']?>&amp;t=<?=$announce->id?>" class="topictitle"><?echo$announce->title;?></a><b> - Mededeling</b>
									</td>
				<td class="row2" width="100" align="center"><p class="topicauthor"><a href="profile.php?x=<?=$user->id?>"><?=$user->login?></a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails"><?echo$num;?></p></td>
				<td class="row1" width="110" align="center">
					<p class="gensmall" style="white-space: nowrap;"><?=$announce->lastreplydate?></p>
					<p class="topicdetails"><?if($user2->id != ""){?><a href="profile.php?x=<?=$user2->id?>"><?echo$announce->lastreply;}else{echo"<b>Geen</b>";}?></a>						<?if($user2->id != ""){?><img src="./styles/N.Design/imageset/icon_topic_latest.gif" width="18" height="9"/><?}?>
					</p>
				</td>
			</tr>
<?}
$sticky1 = mysql_query("SELECT * FROM `forumtopics` WHERE `subforum`='{$_GET['f']}' AND `categorie`='sticky' ORDER BY $kolom $order LIMIT $start,25");
while($sticky = mysql_fetch_object($sticky1)){
$poll = mysql_query("SELECT * FROM `forumpolls` WHERE `topic`='$sticky->id'");
$poll2 = mysql_num_rows($poll);
$user = mysql_query("SELECT * FROM `users` WHERE `login`='$sticky->auteur'");
$user = mysql_fetch_object($user);
$num2 = mysql_query("SELECT * FROM `forumreplies` WHERE `topic`='$sticky->id'");
$num = mysql_num_rows($num2);
$user2 = mysql_query("SELECT * FROM `users` WHERE `login`='$sticky->lastreply'");
$user2 = mysql_fetch_object($user2);
?>
			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/N.Design/imageset/<?echo$sticky->categorie;?>_<?if($sticky->read == 0){?>un<?}?>read<?if($sticky->locked == 1){?>_locked<?}?>.gif" width="19" height="18" alt="<?if($topic2->read != 0){?>Geen n<?}?><?if($topic2->read == 0){?>N<?}?>ieuwe berichten" title="<?if($topic2->read != 0){?>Geen n<?}?><?if($topic2->read == 0){?>N<?}?>ieuwe berichten" /></td>
								<td class="row1">
					<img src="./styles/N.Design/imageset/icon_topic_newest.gif" width="18" height="9"/>					 <?if($poll2 > 0){?><b>Poll: </b><?}?><a title="Geplaatst: <?echo$sticky->date;?>" href="./viewtopic.php?f=<?=$_GET['f']?>&amp;t=<?=$sticky->id?>" class="topictitle"><?echo$sticky->title;?></a>
									</td>
				<td class="row2" width="100" align="center"><p class="topicauthor"><a href="profile.php?x=<?=$user->id?>"><?=$user->login?></a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails"><?echo$num;?></p></td>
				<td class="row1" width="110" align="center">
					<p class="gensmall" style="white-space: nowrap;"><?=$sticky->lastreplydate?></p>
					<p class="topicdetails"><?if($user2->id != ""){?><a href="profile.php?x=<?=$user2->id?>"><?echo$sticky->lastreply;}else{echo"<b>Geen</b>";}?></a>						<?if($user2->id != ""){?><img src="./styles/N.Design/imageset/icon_topic_latest.gif" width="18" height="9"/><?}?>
					</p>
				</td>
			</tr>
<?}
$topic = mysql_query("SELECT * FROM `forumtopics` WHERE `subforum`='{$_GET['f']}' AND `categorie`='topic' ORDER BY $kolom $order LIMIT $start,25");
while($topic2 = mysql_fetch_object($topic)){
$poll = mysql_query("SELECT * FROM `forumpolls` WHERE `topic`='$topic2->id'");
$poll2 = mysql_num_rows($poll);
$user = mysql_query("SELECT * FROM `users` WHERE `login`='$topic2->auteur'");
$user = mysql_fetch_object($user);
$num2 = mysql_query("SELECT * FROM `forumreplies` WHERE `topic`='$topic2->id'");
$num = mysql_num_rows($num2);
$user2 = mysql_query("SELECT * FROM `users` WHERE `login`='$topic2->lastreply'");
$user2 = mysql_fetch_object($user2);
?>
			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/N.Design/imageset/<?echo$topic2->categorie;?>_<?if($topic2->moved != 1){if($topic2->read == 0){?>un<?}?>read<?if($topic2->locked == 1){?>_locked<?}if($topic2->auteur == $data->login){?>_mine<?}}else{?>moved<?}?>.gif" width="19" height="18" alt="<?if($topic2->read != 0){?>Geen n<?}?><?if($topic2->read == 0){?>N<?}?>ieuwe berichten" title="<?if($topic2->read != 0){?>Geen n<?}?><?if($topic2->read == 0){?>N<?}?>ieuwe berichten" /></td>
								<td class="row1">
					<img src="./styles/N.Design/imageset/icon_topic_newest.gif" width="18" height="9"/>					 <?if($poll2 > 0){?><b>Poll: </b><?}?><a title="Geplaatst: <?echo$topic2->date;?>" href="./viewtopic.php?f=<?=$_GET['f']?>&amp;t=<?=$topic2->id?>" class="topictitle"><?echo$topic2->title;?></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									</td>
				<td class="row2" width="100" align="center"><p class="topicauthor"><a href="profile.php?x=<?=$user->id?>"><?=$user->login?></a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails"><?echo$num;?></p></td>
				<td class="row1" width="110" align="center">
					<p class="gensmall" style="white-space: nowrap;"><?=$topic2->lastreplydate?></p>
					<p class="topicdetails"><?if($user2->id != ""){?><a href="profile.php?x=<?=$user2->id?>"><?echo$topic2->lastreply;}else{echo"<b>Geen</b>";}?></a>						<?if($user2->id != ""){?><img src="./styles/N.Design/imageset/icon_topic_latest.gif" width="18" height="9"/><?}?>
					</p>
				</td>
			</tr>
<?}?>



		<tr align="center">
							<td class="cat" colspan="6">
								<form method="post" action="./viewforum.php?f=<?echo$_GET['f'];?>&amp;start=<?echo$_GET['start'];?>"><span class="gensmall">Sorteer op</span> <select name="sk" id="sk"><option value="a">Auteur</option><option value="t" selected="selected">Berichtdatum</option><option value="r">Reacties</option><option value="s">Onderwerp</option><option value="v">Bekeken</option></select> <select name="sd" id="sd"><option value="a">Oplopend</option><option value="d" selected="selected">Aflopend</option></select>&nbsp;<input class="btnlite" type="submit" name="sort" value="Ga" /></form>
				</td>
		</tr>
		</table>
			<table width="100%" cellspacing="1">
		<tr>
							<td align="left" valign="middle"><a href="./posting.php?mode=post&amp;f=<?echo$_GET['f'];?>"><img src="./styles/N.Design/imageset/nl/button_topic_new.gif" alt="Plaats een nieuw onderwerp" title="Plaats een nieuw onderwerp" /></a></td>
							<td class="gensmall" width="100%" align="right" nowrap="nowrap"><b><?
$next = $_GET['start']+25;
$begin = $_GET['start'];
$dbres = mysql_query("SELECT * FROM `forumtopics` WHERE `subforum`='{$_GET['f']}'");
$num = mysql_num_rows($dbres);
$stop = 0;
$pages = floor($num/25);
if($pages > 0){?><a href="#" onclick="jumpto(); return false;" title="Klik om naar de pagina te gaan ...">Ga naar pagina</a> <?
  if(mysql_num_rows($dbres) > -1) {
$j=0;
    for($i=0; $i<mysql_num_rows($dbres)/25;) {
$i = $j*25;
$j++;
$pagina2 = $begin/25;
$pagina = $pagina2+1;
if($pagina == $j){?><strong><?echo$j;?></strong><?}
else if($j < 6 && $j-1*25 <= $num && $num > $i){?><a href="./viewforum.php?f=<?=$_GET['f']?>&amp;st=<?=$_GET['st']?>&amp;sk=<?=$sk?>&amp;sd=<?=$sd?>&amp;start=<?=$i?>"><?=$j?></a><?}if($j*25 <= $num){echo'<span class="page-sep">, </span>';}
    }
if($j == 6){$start = $pages*25;echo" ... <a href=\"./viewforum.php?f={$_GET['f']}&amp;st={$_GET['st']}&amp;sk={$sk}&amp;sd={$sd}&amp;start=$start\">$pages</a>";}

    if($begin+25 > mysql_num_rows($dbres)) {
      print " Volgende";
	  }
    else {
      ?><a href="./viewforum.php?f=<?=$_GET['f']?>&amp;st=<?=$_GET['st']?>&amp;sk=<?=$sk?>&amp;sd=<?=$sd?>&amp;start=<?=$next?>"> Volgende</a><?
  }
  }
  }
  ?></b></td>
					</tr>
		</table>

		<br clear="all" />
</div>

	<br clear="all" />

	<table width="100%" cellspacing="0">
	<tr>
		<td align="left" valign="top">
			<table cellspacing="3" cellpadding="0" border="0">
			<tr>
				<td width="20" style="text-align: center;"><img src="./styles/N.Design/imageset/topic_unread.gif" width="19" height="18" alt="Nieuwe berichten" title="Nieuwe berichten" /></td>
				<td class="gensmall" nowrap>Nieuwe berichten</td>
				<td>&nbsp;&nbsp;</td>
				<td width="20" style="text-align: center;"><img src="./styles/N.Design/imageset/topic_read.gif" width="19" height="18" alt="Geen nieuwe berichten" title="Geen nieuwe berichten" /></td>
				<td class="gensmall" nowrap>Geen nieuwe berichten</td>
				<td>&nbsp;&nbsp;</td>
				<td width="20" style="text-align: center;"><img src="./styles/N.Design/imageset/announce_read.gif" width="19" height="18" alt="Mededeling" title="Mededeling" /></td>
				<td class="gensmall nowrap">Mededeling</td>
			</tr>
			<tr>
				<td style="text-align: center;"><img src="./styles/N.Design/imageset/topic_unread_hot.gif" width="19" height="18" alt="Nieuwe berichten [ populair ]" title="Nieuwe berichten [ populair ]" /></td>
				<td class="gensmall" nowrap>Nieuwe berichten [ populair ]</td>
				<td>&nbsp;&nbsp;</td>
				<td style="text-align: center;"><img src="./styles/N.Design/imageset/topic_read_hot.gif" width="19" height="18" alt="Geen nieuwe berichten [ populair ]" title="Geen nieuwe berichten [ populair ]" /></td>
				<td class="gensmall" nowrap>Geen nieuwe berichten [ populair ]</td>
				<td>&nbsp;&nbsp;</td>
				<td style="text-align: center;"><img src="./styles/N.Design/imageset/sticky_read.gif" width="19" height="18" alt="Sticky" title="Sticky" /></td>
				<td class="gensmall" nowrap>Sticky</td>
			</tr>
			<tr>
				<td style="text-align: center;"><img src="./styles/N.Design/imageset/topic_unread_locked.gif" width="19" height="18" alt="Nieuwe berichten [ gesloten ]" title="Nieuwe berichten [ gesloten ]" /></td>
				<td class="gensmall" nowrap>Nieuwe berichten [ gesloten ]</td>
				<td>&nbsp;&nbsp;</td>
				<td style="text-align: center;"><img src="./styles/N.Design/imageset/topic_read_locked.gif" width="19" height="18" alt="Geen nieuwe berichten [ gesloten ]" title="Geen nieuwe berichten [ gesloten ]" /></td>
				<td class="gensmall" nowrap>Geen nieuwe berichten [ gesloten ]</td>
				<td>&nbsp;&nbsp;</td>
				<td style="text-align: center;"><img src="./styles/N.Design/imageset/topic_moved.gif" width="19" height="18" alt="Verplaatst onderwerp" title="Verplaatst onderwerp" /></td>
				<td class="gensmall" nowrap>Verplaatst onderwerp</td>
			</tr>
			</table>
		</td>
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
<?} else { echo "Je bent niet ingelogd"; }  ?>
