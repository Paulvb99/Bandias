<?
include("connection.php");
if(!(@mysql_connect("$host","$user","$pass") && @mysql_select_db("$tablename"))) {echo"Geen verbinding gevonden";}
session_start();
$dbres                = mysql_query("SELECT *,UNIX_TIMESTAMP(`signup`) AS `signup`,UNIX_TIMESTAMP(`online`) AS `online` FROM `users` WHERE `login`='{$_SESSION['user']}'");
$data                = mysql_fetch_object($dbres);
if(isset($data->login) || isset($_SESSION['login'])){
  include("config.php");
  session_start();
if($_GET['a'] != jail){
$bajes2            = mysql_query("SELECT *,UNIX_TIMESTAMP(`baktijd`) AS `baktijd`,0 FROM `users` WHERE `login`='$data->login'");
$bajes1            = mysql_fetch_object($bajes2);
$datijd = $data->gevangenis;
$tijdverschil1        = $bajes1->baktijd-3600+$datijd-time();
if($bajes1->baktijd + $datijd > time()){
header("Location: $sitelink/v3/index.php?a=jail");
}
if($data->vermoord == 1 && $_GET['a'] != buycredits && $_GET['a'] != message){
header("Location: $sitelink/v3/index.php?a=buycredits");
}
if($data->banpunten >0 && $_GET['a'] != verbannen && $_GET['a'] != message){
header("Location: $sitelink/v3/index.php?a=verbannen");
}
}
if($data->forumbanpunten>0 && $_GET['a'] != verbannen && $_GET['a'] != message){
header("Location: $sitelink/v3/index.php?a=forumban");
}
}
$_SESSION['mission'] = "Bezoek het forum";
if($_GET['mark'] == forums){
$error = mark;
mysql_query("UPDATE `forumtopics` SET `read`='1'");
}
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
<?if($error == mark){?><meta http-equiv="refresh" content="3;url=<?echo$sitelink;?>/v3/forum.php" /><title><?php echo $sitename ?>&bull; Informatie</title><?}else{?><title><?php echo $sitename ?> &bull; Forumoverzicht</title><?}?>

<link rel="stylesheet" href="./styles/ubuntu/theme/stylesheet.css" type="text/css" />
<link rel="stylesheet" href="./css/style.css" type="text/css" />

<script type="text/javascript" src="./js/prototype-1.6.0.2.js"></script>

	</head>
<?include("left_column.php");?>
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
	var page = prompt('Geef het paginanummer van de pagina waarnaar je wilt gaan:', '');
	var perpage = '';
	var base_url = '';

	if (page !== null && !isNaN(page) && page > 0)
	{
		document.location.href = base_url.replace(/&amp;/g, '&') + '&start=' + ((page - 1) * perpage);
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
</script
<a name="top"></a>
<div id="wrapheader" style="width:620px">
		<div class="title_bg" style="width:100%;">
			<div class="title_medium" style="width:100%" nowrap>
			<a href="./forum.php">Forumoverzicht</a>
			<span id="phpbb_show_topic" style="display:none;">&#187; </span>
			</div>
		</div>


		<div style="width:100%; height:35px; background:url('images/tab_info_bg.jpg') bottom repeat-x #c3b79d; font-family:arial; font-size:12px; color:#2a190e;">

			<div style="float:left; margin-top:8px;">

						<div id="" style="float:left; height:20px; margin:0px; padding:0px; margin-left: 5px;"><a href="./forumfaq.php">Help</a></div>

													<div id="" style="float:left; height:20px; margin:0px; padding:0px; margin-left: 5px;">|</div>
							<div id="" style="float:left; height:20px; margin:0px; padding:0px; margin-left: 5px;"><a href="./index.php?a=crew">Het team</a></div>

			</div>

		</div>



</div>

<div id="wrapcentre" style="width:590px;"><?if($error == mark){?>
<table class="tablebg" width="100%" cellspacing="1">
<tr>
	<th>Informatie</th>
</tr>
<tr>
	<td class="row1" align="center"><br /><p class="gen">Alle forums zijn als 'gelezen' gemarkeerd<br /><br /><a href="./forum.php">Keer terug naar het forumoverzicht</a></p><br /></td>
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
<?}else{?><table class="tablebg" cellspacing="1" width="100%">
<tr>
	<td class="cat" colspan="5" align="right"><a class="nav" href="./forum.php?mark=forums">Markeer alle forums als gelezen</a>&nbsp;</td>
</tr>
<tr>
	<th colspan="2">&nbsp;Forum&nbsp;</th>
	<th width="50">&nbsp;Onderwerpen&nbsp;</th>
	<th width="50">&nbsp;Berichten&nbsp;</th>
	<th>&nbsp;Laatste bericht&nbsp;</th>
<?
$topic1 = mysql_query("SELECT * FROM `forumtopics`");
$reply6 = mysql_query("SELECT * FROM `forumreplies` WHERE `subforum`='6'");
$reply12 = mysql_query("SELECT * FROM `forumreplies` WHERE `subforum`='12'");
$reply5 = mysql_query("SELECT * FROM `forumreplies` WHERE `subforum`='5'");
$reply4 = mysql_query("SELECT * FROM `forumreplies` WHERE `subforum`='4'");
$reply8 = mysql_query("SELECT * FROM `forumreplies` WHERE `subforum`='8'");
$reply3 = mysql_query("SELECT * FROM `forumreplies` WHERE `subforum`='3'");
$reply7 = mysql_query("SELECT * FROM `forumreplies` WHERE `subforum`='7'");
$reply6 = mysql_num_rows($reply6);
$reply12 = mysql_num_rows($reply12);
$reply5 = mysql_num_rows($reply5);
$reply4 = mysql_num_rows($reply4);
$reply8 = mysql_num_rows($reply8);
$reply3 = mysql_num_rows($reply3);
$reply7 = mysql_num_rows($reply7);
$onderwerpen = 0;
$cat16 = mysql_query("SELECT * FROM `forumtopics` WHERE `subforum`='6' AND `read`='0'");
$cat112 = mysql_query("SELECT * FROM `forumtopics` WHERE `subforum`='12' AND `read`='0'");
$cat15 = mysql_query("SELECT * FROM `forumtopics` WHERE `subforum`='5' AND `read`='0'");
$cat14 = mysql_query("SELECT * FROM `forumtopics` WHERE `subforum`='4' AND `read`='0'");
$cat18 = mysql_query("SELECT * FROM `forumtopics` WHERE `subforum`='8' AND `read`='0'");
$cat13 = mysql_query("SELECT * FROM `forumtopics` WHERE `subforum`='3' AND `read`='0'");
$cat17 = mysql_query("SELECT * FROM `forumtopics` WHERE `subforum`='7' AND `read`='0'");
$cat6 = mysql_num_rows($cat16);
$cat12 = mysql_num_rows($cat112);
$cat5 = mysql_num_rows($cat15);
$cat4 = mysql_num_rows($cat14);
$cat8 = mysql_num_rows($cat18);
$cat3 = mysql_num_rows($cat13);
$cat7 = mysql_num_rows($cat17);
$cat169 = mysql_query("SELECT * FROM `forumtopics` WHERE `subforum`='6' ORDER BY `id` DESC");
$cat1129 = mysql_query("SELECT * FROM `forumtopics` WHERE `subforum`='12' ORDER BY `id` DESC");
$cat159 = mysql_query("SELECT * FROM `forumtopics` WHERE `subforum`='5' ORDER BY `id` DESC");
$cat149 = mysql_query("SELECT * FROM `forumtopics` WHERE `subforum`='4' ORDER BY `id` DESC");
$cat189 = mysql_query("SELECT * FROM `forumtopics` WHERE `subforum`='8' ORDER BY `id` DESC");
$cat139 = mysql_query("SELECT * FROM `forumtopics` WHERE `subforum`='3' ORDER BY `id` DESC");
$cat179 = mysql_query("SELECT * FROM `forumtopics` WHERE `subforum`='7' ORDER BY `id` DESC");

$cat60 = mysql_num_rows($cat169);
$cat120 = mysql_num_rows($cat1129);
$cat50 = mysql_num_rows($cat159);
$cat40 = mysql_num_rows($cat149);
$cat80 = mysql_num_rows($cat189);
$cat30 = mysql_num_rows($cat139);
$cat70 = mysql_num_rows($cat179);
while($topic6 = mysql_fetch_object($cat169)){
if($replydate6 == ""){
$num++;
$lastreply6 = $topic6->lastreply;
$replydate6 = $topic6->lastreplydate;
}}
$num = "";
while($topic12 = mysql_fetch_object($cat1129)){
if($replydate12 == ""){
$num = 1;
$lastreply12 = $topic12->lastreply;
$replydate12 = $topic12->lastreplydate;
}}
$num = "";
while($topic5 = mysql_fetch_object($cat159)){
if($replydate5 == ""){
$num = 1;
$lastreply5 = $topic5->lastreply;
$replydate5 = $topic5->lastreplydate;
}}
$num = "";
while($topic4 = mysql_fetch_object($cat149)){
if($replydate4 == ""){
$num = 1;
$lastreply4 = $topic4->lastreply;
$replydate4 = $topic4->lastreplydate;
}}
$num = "";
while($topic8 = mysql_fetch_object($cat189)){
if($replydate8 == ""){
$num = 1;
$lastreply8 = $topic8->lastreply;
$replydate8 = $topic8->lastreplydate;
}}
$num = "";
while($topic3 = mysql_fetch_object($cat139)){
if($replydate3 == ""){
$num = 1;
$lastreply3 = $topic3->lastreply;
$replydate3 = $topic3->lastreplydate;
}}
$num = "";
while($topic7 = mysql_fetch_object($cat179)){
if($replydate7 == ""){
$num = 1;
$lastreply7 = $topic7->lastreply;
$replydate7 = $topic7->lastreplydate;
}}
$user16 = mysql_query("SELECT * FROM `users` WHERE `login`='$lastreply6'");
$user6 = mysql_fetch_object($user16);
$user15 = mysql_query("SELECT * FROM `users` WHERE `login`='$lastreply5'");
$user5 = mysql_fetch_object($user15);
$user112 = mysql_query("SELECT * FROM `users` WHERE `login`='$lastreply12'");
$user12 = mysql_fetch_object($user112);
$user14 = mysql_query("SELECT * FROM `users` WHERE `login`='$lastreply4'");
$user4 = mysql_fetch_object($user14);
$user18 = mysql_query("SELECT * FROM `users` WHERE `login`='$lastreply8'");
$user8 = mysql_fetch_object($user18);
$user13 = mysql_query("SELECT * FROM `users` WHERE `login`='$lastreply3'");
$user3 = mysql_fetch_object($user13);
$user17 = mysql_query("SELECT * FROM `users` WHERE `login`='$lastreply7'");
$user7 = mysql_fetch_object($user17);
?>
</tr>
		<tr>
			<td class="cat" colspan="2"><h4>Spel en ondersteuning</h4></td>
			<td class="catdiv" colspan="3">&nbsp;</td>
		</tr>
			<tr>
			<td class="row1" width="50" align="center"><img src="./styles/N.Design/imageset/forum_<?if($cat6 > 0){?>un<?}?>read.gif" width="38" height="25" alt="Nieuwe berichten" title="Nieuwe berichten" /></td>
			<td class="row1" width="100%">
								<a class="forumlink" href="./viewforum.php?f=6">Vragen rondom het spel</a>
				<p class="forumdesc"></p>
							</td>
			<td class="row2" align="center"><p class="topicdetails"><?echo$cat60;?></p></td>
			<td class="row2" align="center"><p class="topicdetails"><?echo$reply6;?></p></td>
			<td class="row2" align="center" nowrap="nowrap">
									<p class="topicdetails"><?echo$replydate6;?></p>
					<p class="topicdetails"><a href="index.php?a=profile&x=<?echo$user6->id;?>"><?echo$lastreply6;?></a>						<a href="./LAATSTE TOPIC HIER!"><img src="./styles/N.Design/imageset/icon_topic_latest.gif" width="18" height="9" alt="Bekijkt laatste berichten" title="Bekijkt laatste berichten" /></a>
					</p>
							</td>
		</tr>
			<tr>
			<td class="row1" width="50" align="center"><img src="./styles/N.Design/imageset/forum_<?if($cat12 > 0){?>un<?}?>read.gif" width="38" height="25" alt="Nieuwe berichten" title="Nieuwe berichten" /></td>
			<td class="row1" width="100%">
								<a class="forumlink" href="./viewforum.php?f=12">Plaats hier je secret links</a>
				<p class="forumdesc"></p>
							</td>
			<td class="row2" align="center"><p class="topicdetails"><?echo$cat120;?></p></td>
			<td class="row2" align="center"><p class="topicdetails"><?echo$reply12;?></p></td>
			<td class="row2" align="center" nowrap="nowrap">
									<p class="topicdetails"><?echo$replydate12;?></p>
					<p class="topicdetails"><a href="index.php?a=profile&x=<?echo$user12->id;?>"><?echo$lastreply12;?></a>						<a href="./LAATSTE TOPIC HIER"><img src="./styles/N.Design/imageset/icon_topic_latest.gif" width="18" height="9" alt="Bekijkt laatste berichten" title="Bekijkt laatste berichten" /></a>
					</p>
							</td>
		</tr>
			<tr>
			<td class="row1" width="50" align="center"><img src="./styles/N.Design/imageset/forum_<?if($cat5 > 0){?>un<?}?>read.gif" width="38" height="25" alt="Nieuwe berichten" title="Nieuwe berichten" /></td>
			<td class="row1" width="100%">
								<a class="forumlink" href="./viewforum.php?f=5">Fouten &amp; Bugs</a>
				<p class="forumdesc"></p>
							</td>
			<td class="row2" align="center"><p class="topicdetails"><?echo$cat50;?></p></td>
			<td class="row2" align="center"><p class="topicdetails"><?echo$reply5;?></p></td>
			<td class="row2" align="center" nowrap="nowrap">
									<p class="topicdetails"><?echo$replydate5;?></p>
					<p class="topicdetails"><a href="index.php?a=profile&x=<?echo$user5->id;?>"><?echo$lastreply5;?></a>						<a href="./LAATSTE TOPIC HIER"><img src="./styles/N.Design/imageset/icon_topic_latest.gif" width="18" height="9" alt="Bekijkt laatste berichten" title="Bekijkt laatste berichten" /></a>
					</p>
							</td>
		</tr>
			<tr>
			<td class="row1" width="50" align="center"><img src="./styles/N.Design/imageset/forum_<?if($cat4 > 0){?>un<?}?>read.gif" width="38" height="25" alt="Nieuwe berichten" title="Nieuwe berichten" /></td>
			<td class="row1" width="100%">
								<a class="forumlink" href="./viewforum.php?f=4">Tips &amp; Idee&euml;n</a>
				<p class="forumdesc"></p>
							</td>
			<td class="row2" align="center"><p class="topicdetails"><?echo$cat40;?></p></td>
			<td class="row2" align="center"><p class="topicdetails"><?echo$reply4;?></p></td>
			<td class="row2" align="center" nowrap="nowrap">
									<p class="topicdetails"><?echo$replydate4;?></p>
					<p class="topicdetails"><a href="index.php?a=profile&x=<?echo$user4->id;?>"><?echo$lastreply4;?></a>						<a href="./LAATSTE TOPIC HIER"><img src="./styles/N.Design/imageset/icon_topic_latest.gif" width="18" height="9" alt="Bekijkt laatste berichten" title="Bekijkt laatste berichten" /></a>
					</p>
							</td>
		</tr>
			<tr>
			<td class="row1" width="50" align="center"><img src="./styles/N.Design/imageset/forum_<?if($cat8 > 0){?>un<?}?>read.gif" width="38" height="25" alt="Nieuwe berichten" title="Nieuwe berichten" /></td>
			<td class="row1" width="100%">
								<a class="forumlink" href="./viewforum.php?f=8">Nieuws en Updates</a>
				<p class="forumdesc"></p>
							</td>
			<td class="row2" align="center"><p class="topicdetails"><?echo$cat80;?></p></td>
			<td class="row2" align="center"><p class="topicdetails"><?echo$reply8;?></p></td>
			<td class="row2" align="center" nowrap="nowrap">
									<p class="topicdetails"><?echo$replydate8;?></p>
					<p class="topicdetails"><a href="index.php?a=profile&x=<?echo$user8->id;?>"><?echo$lastreply8;?></a>						<a href="./LAATSTE TOPIC HIER"><img src="./styles/N.Design/imageset/icon_topic_latest.gif" width="18" height="9" alt="Bekijkt laatste berichten" title="Bekijkt laatste berichten" /></a>
					</p>
							</td>
		</tr>
			<tr>
			<td class="cat" colspan="2"><h4>Forums</h4></td>
			<td class="catdiv" colspan="3">&nbsp;</td>
		</tr>
			<tr>
			<td class="row1" width="50" align="center"><img src="./styles/N.Design/imageset/forum_<?if($cat3 > 0){?>un<?}?>read.gif" width="38" height="25" alt="Nieuwe berichten" title="Nieuwe berichten" /></td>
			<td class="row1" width="100%">
								<a class="forumlink" href="./viewforum.php?f=3">Algemeen Forum</a>
				<p class="forumdesc"></p>
							</td>
			<td class="row2" align="center"><p class="topicdetails"><?echo$cat30;?></p></td>
			<td class="row2" align="center"><p class="topicdetails"><?echo$reply3;?></p></td>
			<td class="row2" align="center" nowrap="nowrap">
									<p class="topicdetails"><?echo$replydate3;?></p>
					<p class="topicdetails"><a href="index.php?a=profile&x=<?echo$user3->id;?>"><?echo$lastreply3;?></a>						<a href="./LAATSTE TOPIC HIER"><img src="./styles/N.Design/imageset/icon_topic_latest.gif" width="18" height="9" alt="Bekijkt laatste berichten" title="Bekijkt laatste berichten" /></a>
					</p>
							</td>
		</tr>
			<tr>
			<td class="row1" width="50" align="center"><img src="./styles/N.Design/imageset/forum_<?if($cat7 > 0){?>un<?}?>read.gif" width="38" height="25" alt="Nieuwe berichten" title="Nieuwe berichten" /></td>
			<td class="row1" width="100%">
								<a class="forumlink" href="./viewforum.php?f=7">Offtopic ruimte</a>
				<p class="forumdesc"></p>
							</td>
			<td class="row2" align="center"><p class="topicdetails"><?echo$cat70;?></p></td>
			<td class="row2" align="center"><p class="topicdetails"><?echo$reply7;?></p></td>
			<td class="row2" align="center" nowrap="nowrap">
									<p class="topicdetails"><?echo$replydate7;?></p>
					<p class="topicdetails"><a href="index.php?a=profile&x=<?echo$user7->id;?>"><?echo$lastreply7;?></a>						<a href="./LAATSTE TOPIC HIER"><img src="./styles/N.Design/imageset/icon_topic_latest.gif" width="18" height="9" alt="Bekijkt laatste berichten" title="Bekijkt laatste berichten" /></a>
					</p>
							</td>
		</tr>
	</table>
<br clear="all" />

<table class="legend">
<tr>
	<td width="20" align="center"><img src="./styles/N.Design/imageset/forum_unread.gif" width="38" height="25" alt="Nieuwe berichten" title="Nieuwe berichten" /></td>
	<td><span class="gensmall">Nieuwe berichten</span></td>
	<td>&nbsp;&nbsp;</td>
	<td width="20" align="center"><img src="./styles/N.Design/imageset/forum_read.gif" width="38" height="25" alt="Geen nieuwe berichten" title="Geen nieuwe berichten" /></td>
	<td><span class="gensmall">Geen nieuwe berichten</span></td>
	<td>&nbsp;&nbsp;</td>
	<td width="20" align="center"><img src="./styles/N.Design/imageset/forum_read_locked.gif" width="38" height="25" alt="Geen nieuwe berichten [ gesloten ]" title="Geen nieuwe berichten [ gesloten ]" /></td>
	<td><span class="gensmall">Forum gesloten</span></td>
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
<?}
include("right_column.php");
if(isset($_GET['not_installed'])){?>
		<script type="text/javascript" language="javascript">
alert("De functie die je probeerde te berijken is (nog) niet beschikbaar!")
</script>


<?}
 ?>