<?php
mysql_query("UPDATE `users` SET `online`=NOW() WHERE `login`='{$data->login}'");
/* ------------------------- */ ?>

<?php /* ------------------------- */

$partner         = $_POST['partner'];
$tegenstander1   = mysql_query("SELECT * FROM `users` WHERE `login`='$partner' AND `partner_trow`=''");
$tegenstander1   = mysql_num_rows($tegenstander1);


if(isset($_POST['ja'])) {
mysql_query("UPDATE `users` SET `grup`=`grup`=0 , `partner_trow`='' WHERE `login`='{$data->login}'");
mysql_query("UPDATE `users` SET `grup`=`grup`=0 , `partner_trow`='' WHERE `partner_trow`='{$data->login}'");
print"<table align=center border=0 cellspacing=2 cellpadding=2 class=mod_list>
       <tr> 
       <td width=42%>
         <font color=green><big><center>Felicitaties! U bent succesvol gescheiden! Vertel hem / haar ook door het sturen van hem / haar een Privebericht</center></b></td>
           </center></big</font> </tr>
      </table>";
      echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"3; URL=\">";
}

if (isset($_POST['Submit'])){

if ($data->contant < 250000){
print "
						<div class=title_bg>
			<div class=title>Kerk - Burgerlijke Stand</div>
		</div>

		<div style=background-color:#dbd2b7; padding:10px; padding-top:4px;>
		<table cellpadding=0 cellspacing=0 width=100%><tr><td>
		
		 
 	<table align=center border=0 cellspacing=2 cellpadding=2 class=mod_list>
    <tbody><tr> 
      
  <tr> 
            <td width=42%><font color=red><big><center><img src=http://www.world-of-maffia.nl/v3/images/icons_gif/information.gif>&nbsp;U hebt niet genoeg geld! U hebt <b>&euro {$data->contant} </b> en u moet <b>&euro; 250000 </b> ! </font></big></center> </td>
            
          </tr>
<center><img src=http://adevar.files.wordpress.com/2007/05/casatoriesaunu.jpg width=150 height=100 border=2><BR> <font size=2>Het huwelijk is een belangrijke rol in het spel ...
<BR>Personen die willen trouwen zullen beide <BR> <b>&euro; 250,000  betalen</b>!<BR>Zij hebben een inkomen van:<br><b>7,500 &euro</b> , <b>5 Attack Coins</b> , <b>5 Opgeleide Killers</b><br><HR>Vergeet niet: U bent <b>niet</b> toegestaan om te trouwen met iemand van de <b>crew</b><HR></font>
      
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
include ("right_column.php");
exit;
 echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"3; URL=\">";
}else
if ($partner ==""){
print <<<ENDHTML
<div class="title_bg">
			<div class="title">Kerk - Burgerlijke Stand</div>
		</div>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
		
		 
 	<table align=center border="0" cellspacing="2" cellpadding="2" class="mod_list">
    <tbody><tr> 
      
  <tr> 
            <td width="42%"><center><big><img src=http://www.world-of-maffia.nl/v3/images/icons_gif/information.gif>&nbsp;<font color=red>Uw toekomstige vrouw / man moet een naam hebben !</big></font><br>Verfrissend...</center>
           </td>
                  </tr>
<center><img src="http://adevar.files.wordpress.com/2007/05/casatoriesaunu.jpg" width="150" height="100" border=2><BR> <font size=2>Het huwelijk is een belangrijke rol in het spel ...
<BR>Personen die willen trouwen zullen beide <BR> <b>&euro; 250,000  </b> betalen!<BR><HR>zowel Vergeet niet: U bent niet <b>not</b> toegestaan om te trouwen met iemand van de <b>crew</b><HR></font>
        
        </table>
      </form>

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
echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"3; URL=\">";
include ("right_column.php");
exit;
} else
if($tegenstander1 !==1 && $data->partner_trow !=""){
print <<<ENDHTML
<div class="title_bg">
			<div class="title">Kerk - Burgerlijke Stand</div>
		</div>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
		
		 
 	<table align=center border="0" cellspacing="2" cellpadding="2" class="mod_list">
    <tbody><tr> 
      
  <tr> 
            <td width="42%"><center><big><img src=images/icons_gif/information.gif>&nbsp;<font color=red>De gebruiker bestaat niet & U bent Gehuwd & De gebruiker is getrouwd !</big></font><br>Vervessen...</center>
           </td>
                  </tr>
<center><img src="http://adevar.files.wordpress.com/2007/05/casatoriesaunu.jpg" width="150" height="100" border=2><BR> <font size=2>Het huwelijk is een belangrijke rol in het spel ...
<BR>Personen die willen trouwen zullen beide <BR> <b>&euro; 250,000  </b> betalen!<BR><HR>Vergeet niet: Het is <b>niet</b> toegestaan om te trouwen iemand van de<b>crew</b><HR></font>
        </table>
      </form>

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
echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"3; URL=\">";
include ("right_column.php");
exit;
} else
if ($partner == "$data->login"){
print <<<ENDHTML
<div class="title_bg">
			<div class="title">Kerk - Burgerlijke Stand</div>
		</div>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
		
		 
 	<table align=center border="0" cellspacing="2" cellpadding="2" class="mod_list">
    <tbody><tr> 
      
  <tr> 
            <td width="42%"><center><img src=http://www.world-of-maffia.nl/v3/images/icons_gif/information.gif>&nbsp;<big><font color=red>U kunt niet trouwen met jezelf !</big></font><br>Vervessen...</center>
           </td>
                  </tr>
<center><img src="http://adevar.files.wordpress.com/2007/05/casatoriesaunu.jpg" width="150" height="100" border=2><BR> <font size=2>Het huwelijk is een belangrijke rol in het spel ...
<BR>Personen die willen trouwen zullen beide <BR> <b>&euro; 250,000  </b> betalen!<BR><HR>Vergeet niet: Het is <b>niet</b> toegestaan om te trouwen iemand van de <b>crew</b><HR></font>
        </table>
      </form>

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
echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"3; URL=\">";
include ("right_column.php");
exit;
} else
mysql_query("INSERT INTO `messages`(`date`,`to`,`from`,`ip`,`title`,`content`,`date2`,`read`,`inbox`,`reply`) values(NOW(),'$partner','$data->login','$data->IP','Aanvraag voor trouwen','Hallo $partner

He, wil je met me trouwen?

[b]Ja ik wil[/b] -> [url]http://osbanditi.v3host.nl/v3/marry.php?x=accept&p=$data->login[/url]
[b]Nee ik wil niet[/b] -> [url]http://osbanditi.v3host.nl/v3/marry.php?x=no&p=$data->login[/url]
','$date2','0','1','0')");
print "<table align=center border=0 cellspacing=2 cellpadding=2 class=mod_list>
          
  <tr> 
            <td width=42%><font color=green><big><center>U bent gevraagd voor het huwelijk {$_POST['partner']} ! Als hij / zij aanvaardt betalen jullie beide <b>&euro; 250,000 </center></b></td>
            </tr>
      </table>";
      echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"3; URL=\">";
       
       
}
print<<<ENDHTML
						<div class="title_bg">
			<div class="title">Kerk - Burgerlijke Stand</div>
		</div>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
		
		 <form name="form1" method="post" action="">
 	<table align=center border="0" cellspacing="2" cellpadding="2" class="mod_list">
    <tbody><tr> 
      
  <tr> 
            <td width="42%">Echtgenoot / Echtgenote:</td>
            <td width="58%"><input type="text" name="partner" maxlength="20"></td>
          </tr>
<center><img src="http://adevar.files.wordpress.com/2007/05/casatoriesaunu.jpg" width="150" height="100" border=2><BR> <font size=2>Het huwelijk is een belangrijke rol in het spel ...
<BR>Personen die willen trouwen V<BR><HR>Vergeet niet: Het is <b>niet</b> toegestaan om te trouwen iemand van de <b>crew</b><HR></font>
          <tr> 
            <td>Echtscheiding Hij / Zij:</td>
            <td>U bent getrouwd met <?php if($data->partner_trow == "0") { ?><font color=red><big><b>niemand</td></b></big></font> <?php } else{ ?><font color=blue><big><b><?php echo $data->partner_trow; ?></td></b></big></font><?php } ?></td>
          </tr>
          <tr> 
            <td colspan="2"><div align="center"> 
                <input type="submit" name="Submit" class="submit" value="Trouwen"> &nbsp; &nbsp; <form method=post><input type=submit class="submit" name=ja value='Scheiden'></td></tr></form>
              </div></td>
          </tr>
        </table>
      </form>
    

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
/* ------------------------- */ ?>