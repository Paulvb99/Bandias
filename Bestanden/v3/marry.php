<html>
	<head>
		<title>
			CrimeAndDrug.Com |  The place where crime is everything 
		</title>
		<base href="<?=$sitelink?>/v3/" />
		<meta name="description" content="Stap in de wereld van de maffia!" />
		<meta name="keywords" content="maffia, mafia, criminals, gangsters, gangster, game" />
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<link rel="stylesheet" type="text/css" href="css/style.css"/>

		<script language="JavaScript" src="js/display.js"></script>
		<script language="JavaScript" src="js/functions.js"></script>
		<script language="JavaScript" src="ajax/prototype-1.6.0.2.js"></script>
		<script language="JavaScript" src="ajax/chat.js"></script>
		<script language="JavaScript" src="ajax/config.js"></script>
		<script language="JavaScript" src="ajax/shoutbox.js"></script>
		<script language="JavaScript" src="ajax/custom.js"></script>
		<script language="JavaScript" src="ajax/logs.js"></script>
		<script language="JavaScript" src="js/swfobject.js"></script>
		<script language="JavaScript" src="js/duration_progress.js"></script>
        <script language="javascript" src="lib/tinymce/tiny_mce.js"></script>

	</head>
	<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
			<script language="JavaScript" type="text/javascript" src="js/wz_tooltip/wz_tooltip.js"></script>
			<script language="JavaScript" type="text/javascript" src="js/wz_dragdrop/wz_dragdrop.js"></script>
		<script language="JavaScript" type="text/javascript" src="js/wz_tooltip/tip_balloon.js"></script>
 
<?php /* ------------------------- */
include ("config.php");  
include("left_column.php");
if ($data->partner_trow == ""){  
if (isset($_GET['x'])){  
$dbres = mysql_query("SELECT * FROM `users` WHERE `login`='{$_GET['p']}'");  
$p = mysql_fetch_object($dbres);  
if ($_GET['x'] == "accept"){  
 if ($data->contant < 250000){
print "
						<div class=title_bg>
			<div class=title>Church - Civil Status</div>
		</div>

		<div style=background-color:#dbd2b7; padding:10px; padding-top:4px;>
		<table cellpadding=0 cellspacing=0 width=100%><tr><td>
		
		 
 	<table align=center border=0 cellspacing=2 cellpadding=2 class=mod_list>
    <tbody><tr> 
      
  <tr> 
            <td width=42%><font color=red><big><center>You don't have enough money ! You have <b>{$data->contant} &euro</b> and you need <b>250000 &euro;</b> ! </font></big></center> </td>
            
          </tr>
<center><img src=http://adevar.files.wordpress.com/2007/05/casatoriesaunu.jpg width=150 height=100 border=2><BR> <font size=2>Marriage has an important role in the game ...
<BR>Persons that want to marry will pay <BR> <b>250,000 &euro; both</b>!<BR><HR>Remember: You are <b>not</b> allowed to marry someone from the <b>STAFF</b><HR></font>
     
        </table>
      
    

</div>
		</td></tr></table>
		</div>

		<table width=100% cellspacing=2 cellpadding=2>
			<tr>

				<td class=content_bottom></td>
			</tr>
		</table>
	</div>
	</td>
	</tr>

	</table>
	</td>
	
	
	
";
 echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"3; URL=index.php?a=casatorie\">";
exit;
 }else
mysql_query("UPDATE `users` SET `grup`=`grup`=1 , `contant`=`contant`-250000 WHERE `login`='{$data->login}'");  
mysql_query("UPDATE `users` SET `grup`=`grup`=1 , `contant`=`contant`-250000 WHERE `login`='{$_GET['p']}'");  
mysql_query("UPDATE `users` SET `partner_trow`='{$_GET['p']}' WHERE `login`='{$data->login}'");  
mysql_query("UPDATE `users` SET `partner_trow`='{$data->login}' WHERE `login`='{$_GET['p']}'");  
print<<<ENDHTML
						<div class="title_bg">
			<div class="title">Church - Civil Status</div>
		</div>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
		
		 
 	<table align=center border="0" cellspacing="2" cellpadding="2" class="mod_list">
    <tbody><tr> 
      
  <tr> 
            <td width="42%"><font color=green><big><center>You successfully married <b>{$_GET['p']}</b> ! You accepted the Request !</font></big></center> </td>
            
          </tr>
<center><img src="http://adevar.files.wordpress.com/2007/05/casatoriesaunu.jpg" width="150" height="100" border=2><BR> <font size=2>Marriage has an important role in the game ...
<BR>Persons that want to marry will pay <BR> <b>250,000 &euro; both</b>!<BR><HR>Remember: You are <b>not</b> allowed to marry someone from the <b>STAFF</b><HR></font>
     
        </table>
      
    

</div>
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
	
	
	
ENDHTML;
 echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"3; URL=index.php?a=casatorie\">";

}elseif($_GET['x'] == "no"){  
mysql_query("UPDATE `users` SET `contant`=`contant`-100000 WHERE `login`='{$_GET['p']}'");  
print "
						<div class=title_bg>
			<div class=title>Church - Civil Status</div>
		</div>

		<div style=background-color:#dbd2b7; padding:10px; padding-top:4px;>
		<table cellpadding=0 cellspacing=0 width=100%><tr><td>
		
		 
 	<table align=center border=0 cellspacing=2 cellpadding=2 class=mod_list>
    <tbody><tr> 
      
  <tr> 
            <td width=42%><font color=red><big><center>You refused to marry <b>{$_GET['p']}</b> ! </font></big></center> </td>
            
          </tr>
<center><img src=http://adevar.files.wordpress.com/2007/05/casatoriesaunu.jpg width=150 height=100 border=2><BR> <font size=2>Marriage has an important role in the game ...
<BR>Persons that want to marry will pay <BR> <b>250,000 &euro; both</b>!<BR><HR>Remember: You are <b>not</b> allowed to marry someone from the <b>STAFF</b><HR></font>
    
        </table>
      
    

</div>
		</td></tr></table>
		</div>

		<table width=100% cellspacing=2 cellpadding=2>
			<tr>

				<td class=content_bottom></td>
			</tr>
		</table>
	</div>
	</td>
	</tr>

	</table>
	</td>
	
	
	
";
 echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"3; URL=index.php?a=casatorie\">";
}  
}  
}else{  
print "
						<div class=title_bg>
			<div class=title>Church - Civil Status</div>
		</div>

		<div style=background-color:#dbd2b7; padding:10px; padding-top:4px;>
		<table cellpadding=0 cellspacing=0 width=100%><tr><td>
		
		 
 	<table align=center border=0 cellspacing=2 cellpadding=2 class=mod_list>
    <tbody><tr> 
      
  <tr> 
            <td width=42%><font color=orange><big><center>You are already married with <b>{$data->partner_trow}</b> !</font></big></center> </td>
            
          </tr>
<center><img src=http://adevar.files.wordpress.com/2007/05/casatoriesaunu.jpg width=150 height=100 border=2><BR> <font size=2>Marriage has an important role in the game ...
<BR>Persons that want to marry will pay <BR> <b>250,000 &euro; both</b>!<BR><HR>Remember: You are <b>not</b> allowed to marry someone from the <b>STAFF</b><HR></font>
  
        </table>
      
    

</div>
		</td></tr></table>
		</div>

		<table width=100% cellspacing=2 cellpadding=2>
			<tr>

				<td class=content_bottom></td>
			</tr>
		</table>
	</div>
	</td>
	</tr>

	</table>
	</td>
	
	
	
";
 echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"3; URL=index.php?a=casatorie\">";
}  
include("right_column.php");
/* ------------------------- */ ?> 