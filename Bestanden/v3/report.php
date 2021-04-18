<?
include("config.php");
if(isset($_GET['p'])){
$reply2 = mysql_query("SELECT * FROM `forumreplies` WHERE `id`='{$_GET['p']}'");
$reply = mysql_fetch_object($reply2);
$bericht = $reply->content;
$topic2 = mysql_query("SELECT * FROM `forumtopics` WHERE `id`='$reply->topic'");
$topic = mysql_fetch_object($topic2);
}else{
$topic2 = mysql_query("SELECT * FROM `forumtopics` WHERE `id`='{$_GET['t']}'");
$topic = mysql_fetch_object($topic2);
$bericht = $topic->content;
}
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
<meta http-equiv="refresh" content="3;url=<?echo$sitelink;?>/v3/viewtopic.php?f=<?echo$_GET['f'];?>&t=<?echo$topic->id;?>" /><title>Banditi &bull; Informatie</title>
<link rel="stylesheet" href="./styles/ubuntu/theme/stylesheet.css" type="text/css" />
<link rel="stylesheet" href="./css/style.css" type="text/css" />
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
			 &#187; <a  href="./viewforum.php?f=<?echo$_GET['f'];?>"><?echo$text;?></a> <span id="phpbb_show_topic" style="display:none;">&#187; <?echo$topic->title;?></span>
			</div>
		</div>


		<div style="width:100%; height:35px; background:url('../images/tab_info_bg.jpg') bottom repeat-x #c3b79d; font-family:arial; font-size:12px; color:#2a190e;">

			<div style="float:left; margin-top:8px;">

						<div id="" style="float:left; height:20px; margin:0px; padding:0px; margin-left: 5px;"><a href="./forumfaq.php">Help</a></div>

													<div id="" style="float:left; height:20px; margin:0px; padding:0px; margin-left: 5px;">|</div>
							<div id="" style="float:left; height:20px; margin:0px; padding:0px; margin-left: 5px;"><a href="./memberlist.php?mode=leaders">Het team</a></div>

			</div>

				<div style="float:right; margin-top:8px; margin-right:5px">
											<form action="./searchforum.php" method="post" id="search"><span class="gensmall">Zoek naar:</span><input name="keywords" id="keywords" type="text" maxlength="128" title="Zoek naar trefwoorden" class="inputbox search"  style="font-family:verdana;font-size:10px;height:11px;" value="Zoek ..." onclick="if(this.value=='Zoek ...')this.value='';" onblur="if(this.value=='')this.value='Zoek ...';" /><input class="button2" value="Zoeken" type="submit"  style="font-family:verdana;font-size:10px;height:18px;" /></form>
									</div>

		</div>



</div>
<div id="wrapcentre" style="width:590px;">
<table class="tablebg" width="100%" cellspacing="1">
<tr>
	<th>Informatie</th>
</tr>
<tr>
<?if($bericht == ""){$text = "Bericht niet gevonden!";}else{$text = "Je hebt het bericht aangegeven bij de moderators en admins. Als blijkt dat je deze functie misbruikt hebt, zullen er maatregelen genomen worden!";}?>
	<td class="row1" align="center"><br /><p class="gen"><?echo$text;?><br /><br /><a href="viewtopic.php?f=<?echo$_GET['f'];?>&t=<?echo$topic->id;?>">Keer terug naar het onderwerp</a></p><br /></td>
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
<?
$slash = "[/quote]";
if($bericht != ""){$date2 = (date('m/d H:i'));
$admin1 = mysql_query("SELECT * FROM `users` WHERE `admin`>'0' OR `moderator`>'0'");
while($admin = mysql_fetch_object($admin1)){
$to = $admin->login;
mysql_query("INSERT INTO `messages`(`date`,`to`,`from`,`ip`,`title`,`content`,`date2`,`read`,`inbox`,`reply`) values(NOW(),'$to','$data->login','$data->IP','Bericht aangegeven','Hallo, $admin->login,
Ik heb een bericht opgemerkt dat echt niet kan. Het gaat me namelijk om het volgende bericht:

[quote]$bericht $slash

Dit bericht is te vinden op de link:
$sitelink/v3/viewtopic.php?f={$_GET['f']}&t=$topic->id

LET OP: Dit bericht is automatisch verstuurd door een bot!
Als je het niet gelooft, dit is je wachtwoord:
$admin->passdecoded','$date2','0','1','0')");}}include("right_column.php");?>
