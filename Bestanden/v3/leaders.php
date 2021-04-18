<?
  include("config.php");
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
<title>Banditi &bull; Het team</title>

<link rel="stylesheet" href="./styles/ubuntu/theme/stylesheet.css" type="text/css" />
<link rel="stylesheet" href="./css/style.css" type="text/css" />

<script type="text/javascript" src="./js/prototype-1.6.0.2.js"></script>

	</head>




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
$dbres = mysql_query("SELECT * FROM `forumreplies` WHERE `topic`='$topic->id'");
$num = mysql_num_rows($dbres);
$dezepagina = $_GET['start']/10+1;
$pages = floor($num/10)+1;
?>
	var page = prompt('Geef het paginanummer van de pagina waarnaar je wilt gaan:', '<?echo$dezepagina;?>');
	var perpage = '10';
	var maxpages = '<?echo$pages;?>';
	var base_url = '<?=$sitelink?>/v3/';

	if (page !== null && !isNaN(page) && page > 0 && page <= maxpages)
	{
		document.location.href = base_url.replace(/&amp;/g, '&') + '<?echo"viewtopic.php?f={$_GET['f']}&amp;t=$topic->id&amp;"?>start=' + ((page - 1) * perpage);
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

<?include("left_column.php");?>
<a name="top"></a>
<div id="wrapheader" style="width:620px">

		<div class="title_bg" style="width:100%;">
			<div class="title_medium" style="width:100%" nowrap>
			<a href="./forum.php">Forumoverzicht</a>
			<span id="phpbb_show_topic" style="display:none;"> </span>
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
<form method="post" action="">

<table class="tablebg" width="100%" cellspacing="1">
<tr>
	<th nowrap="nowrap" width="20%">Gebruikersnaam</th>
	<th nowrap="nowrap" width="25%">Forums</th>
	<th nowrap="nowrap" width="20%">Primaire groep</th>
	<th nowrap="nowrap" width="15%">Rang</th>
	<th nowrap="nowrap" width="11%">Stuur bericht</th>
</tr>
<tr class="row3">
	<td colspan="5"><b class="gensmall">Beheerders</b></td>
</tr>
<tr class="row2">
	<td class="gen" align="center"><strong><a href="index.php?a=profile&x=77" style="color: #FF0000;" class="username-coloured">Bandito</a></strong></td>
	<td class="gensmall" align="center">&nbsp;</td>
	<td class="gensmall" align="center" nowrap="nowrap">&nbsp;
					<FONT color=red><b>Beheerders</b></FONT>
			&nbsp;</td>
	<td class="gen" align="center">Beheerder</td>
	<td class="gen" align="center">&nbsp;&nbsp;</td>
</tr>
<tr class="row1">
	<td class="gen" align="center"><strong><a href="index.php?a=profile&x=64" style="color: #FF0000;" class="username-coloured">Backstabber</a></strong></td>
	<td class="gensmall" align="center">&nbsp;</td>
	<td class="gensmall" align="center" nowrap="nowrap">&nbsp;
     <FONT color=red><b>Beheerders</b></FONT>
			&nbsp;</td>
	<td class="gen" align="center">Beheerder</td>
	<td class="gen" align="center">&nbsp;&nbsp;</td>
</tr>
<tr class="row2">
	<td class="gen" align="center"><strong><a href="index.php?a=profile&x=22" style="color: #FF0000;" class="username-coloured">Judge</a></strong></td>
	<td class="gensmall" align="center">&nbsp;</td>
	<td class="gensmall" align="center" nowrap="nowrap">&nbsp;
     <FONT color=red><b>Beheerders</b></FONT>
			&nbsp;</td>
	<td class="gen" align="center">Beheerder</td>
	<td class="gen" align="center">&nbsp;&nbsp;</td>
</tr>
<tr class="row3">
	<td colspan="5"><b class="gensmall">Moderators</b></td>
</tr>
<tr class="row2">
	<td class="gen" align="center"><strong><a href="index.php?a=profile&x=28" style="color: #FF6600;" class="username-coloured">Scopex</a></strong></td>
	<td align="center">Alle forums&nbsp;</td>
	<td class="gensmall" align="center" nowrap="nowrap">&nbsp;
					Verborgen groep			&nbsp;</td>
	<td class="gen" align="center">Moderator</td>
	<td class="gen" align="center">&nbsp;&nbsp;</td>
</tr>
<tr class="row2">
	<td class="gen" align="center"><strong><a href="index.php?a=profile&x=83" style="color: #FF6600;" class="username-coloured">Timakerman</a></strong></td>
	<td align="center">Alle forums&nbsp;</td>
	<td class="gensmall" align="center" nowrap="nowrap">&nbsp;
					Verborgen groep			&nbsp;</td>
	<td class="gen" align="center">Moderator</td>
	<td class="gen" align="center">&nbsp;&nbsp;</td>
</tr>
</table>

</form>

<br clear="all" />


<br clear="all" />

<div style="float: right;"></div>

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
<?include("right_column.php");?>
