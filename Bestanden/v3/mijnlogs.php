<? 
if($data->vermoord == 1){ 
echo " 
			<table width=\"100%\">
	<tr>
		<td align=\"center\">
			<br><br><br><br>
			<table class=\"div_popup_error\" align=\"center\">
				<tr>
					<td style=\"color:red\">
						Je bent vermoord!!<font id=\"count_timer\"></font>&nbsp; 2 topies, <BR>1.<BR> je start opnieuw en je maakt een nieuw account aan.<BR> 2.<BR> Via je credits kan je je genezen.</td>
				</tr>
				<tr>
					<td style=\"color:red\">
						<br><br>
						<a href=index.php?a=buycredits>Bekijk opties</a>
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



"; 
include("right_column.php");
exit; 
} 
?><font face="Arial"> 
<div class="title_bg"> 
<div style="font-size:17px; color:#1b1a17; margin-left:10px; padding-top:4px;"> 
<?php echo $sitename; ?> logs
</div> 
</div> 
<div style="width:100%; height:auto; color:#2a190e; font-family:arial; font-size:12px; color:#2a190e;"> 
<div style="padding:5px; padding-bottom:10px;"> 
Hier vind je een overzicht van alle acties die je hebt uitgevoerd op <?php echo $sitename; ?>
</div> 
</div> 
<script language="javascript"> 
function openTab(pTabPage,pTab){ 
document.getElementById('sl_1').style.display = 'none'; 
document.getElementById('sl_2').style.display = 'none'; 
document.getElementById(pTabPage).style.display = 'block'; 
document.getElementById('tab1').style.background = ''; 
document.getElementById('tab1').style.fontWeight = 'normal'; 
document.getElementById('tab2').style.background = ''; 
document.getElementById('tab2').style.fontWeight = 'normal'; 
document.getElementById(pTab).style.background = 'url(\'images/tab_info_arrow.gif\') bottom no-repeat'; 
document.getElementById(pTab).style.fontWeight = 'bold'; 
} 
</script> 
<div style="width:100%; height:25px; background:url('images/tab_info_bg.jpg') repeat-x; font-family:arial; font-size:12px; color:#2a190e;"> 
<div id="tab1" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px; background:url('images/tab_info_arrow.gif') bottom no-repeat; font-weight:bold;"><a href="index.php?a=mijnlogs">Algemeen</a></div> 
<div id="tab1" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px;">|</div> 
<div id="tab1" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px; background:url('images/tab_info_arrow.gif') bottom no-repeat; font-weight:bold;"><a href="index.php?a=mijnlogs-c">Credits</a></div> 
<div id="tab1" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px;">|</div> 
</div> 
<br /> 
<table cellpadding="4" cellspacing="0" width="100%" align="center"> 
<tr> 
<td> 
<!-- Tab #1 --> 
<div id="sl_1"> 
<table width="100%" class="mod_list"> 
<tr> 
<td> 
</td> 
<td> 
<b>Tijdstip</b> 
</td> 
<td> 
</td> 
<td> 
<b>Wat</b> 
</td> 
<td> 
</td>
<td> 
<b>Gekost/Gewonnen</b> 
</td> 
</tr> 
<tr> 
<?php 
if($_GET['x'] == ""){
$begin = ($_GET['p'] >= 0) ? $_GET['p']*30 : 0;
}else{$begin = 0;}
  $dbres				= mysql_query("SELECT * FROM `shoplogs` ORDER BY `shopid` DESC LIMIT $begin,30");
  $num1				= mysql_query("SELECT * FROM `shoplog`");
  $num				= mysql_num_rows($num1);
$pages = floor($num/30+1);

$result_1 = mysql_query("SELECT * FROM shoplogs WHERE login = '" . $data->login . "' AND `wat` != 'Callcredits' ORDER BY shopid DESC"); 
for ($j = $result_1 + 1; $info = mysql_fetch_object($result_1); $j++) 
{ 
$user1 = mysql_query("SELECT * FROM users WHERE login = '" . $info->ip . "'"); 
$user = mysql_fetch_object($user1); 
$online1 = mysql_query("SELECT * FROM users WHERE UNIX_TIMESTAMP(NOW()) - UNIX_TIMESTAMP(online) < 300 AND login = '" . $user->login . "'"); 
$online = mysql_fetch_object($online1); 
$selfclicked1 = mysql_query("SELECT * FROM clicks WHERE ip = '" . $data->login . "' AND login = '" . $user->login . "' AND active = '1'"); 
$selfclicked = mysql_num_rows($selfclicked1); 
$geldinfo = number_format($info->geld, 0, '.' , '.');

?> 
<td width="10"> 
<img src="images/icons_gif/time.gif" border="0" /> 
</td> 
<td> 
<?php echo $info->date; ?> 
</td> 
<td width="10"> 
<?=$info->hoeveel; ?>x
</td> 
<td> 
<?=$info->wat; ?>
</td>
<td width="10"> 
</td>
<td> 
 <?=$geldinfo; ?>
</a> 
</td>
</tr> 
<?php 
} 
?> 
</table> 
<center> 
<br /> 
</center> 
</div> 
</td> 
</tr> 
</table> 
<br /> 
</div> 
<?
if($pages > 1){
$prev = $_GET['p']-1;
$next = $_GET['p']+1;
  $dbres				= mysql_query("SELECT * FROM `users` WHERE `vermoord`='0'");
  print "</table>\n\n<table width=100%>\n  <tr><td class=\"mainTxt\" align=\"center\">";
  if(mysql_num_rows($dbres) <= 0) {
    print "&#60; 1 &#62;</td></tr></table>\n";
	}
  else {
    if($begin/30 == 0) {
      print "&#60;&#60; Vorige | ";
	  }
    else {
      print "<a href=\"index.php?a=mijnlogs&p=". ($begin/30-1) ."\">&#60;&#60; Vorige</a> | ";
}
    for($i=0; $i<mysql_num_rows($dbres)/30; $i++) {
$j = $i+1;
      print "<a href=\"index.php?a=mijnlogs&p=$i\">$j</a> | ";
    }

    if($begin+30 >= mysql_num_rows($dbres)) {
      print "Volgende &#62;&#62; ";
	  }
    else {
      print "<a href=\"index.php?a=mijnlogs&p=". ($begin/30+1) ."\">Volgende &#62;&#62;</a>";
  }
  }
  }
?>

<table width='100%' cellspacing='2' cellpadding='2'> 
<tr> 
<td class='content_bottom'> 
</td> 
</tr> 
</table> 
</div> 
</td> 
</tr> 
</table> 
</td> 
</font>


