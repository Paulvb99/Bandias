							<div class="title_bg">
			<div class="title">Landgoed</div>
		</div>
	 <?

  $land1               = array("","Nederland","Frankrijk","Spanje","Turkije","Griekenland","Australie","Amerika","Ierland","Afrika","Polen","Zwitserland","Rusland","Hawai","Marokko","Suriname","Japan","Duitsland","Taiwan","Aruba","China","Groenland","GoldTown","Kings","Ghana","Dutchtown","Dragonvalley","Jamaica","MaffiaCity","Corleone","Zambla","");
  $land                = $land1[$data->land];
$rank = Array("Geen","Caravan","Houten Huis","Luxe Berg Villa","Villa","Boshuis","Luxe Bunker","Luxe Strand Villa","Gangster Paradise","Japanse Villa","Mediteraanse Villa","Pool Paradise","Landgoed","Tropische Villa","Fantasy Home");
$rank = $rank[$data->woning];
$ran = Array("0","10000","30000","50000","90000","100000","150000","200000","250000","300000","400000","500000","700000","900000","1100000");
$contantd = $ran[$data->woning];
 $contant = $contantd/100*75;
$ba         = number_format($contant,0,",",".");
if($data->woning <= 0){
print <<<ENDHTML

<body style="margin: 0px;">
<table width="70%" align="center">
<tr><td class="subTitle"><div align="center"><b>Geen Woning</b></div></td></tr>
<tr><td class="mainTxt" align="center"><img src='images/items/Geen.jpg'></td></tr>
<tr><td class="mainTxt" align="center">Je bezit geen woning, koop er <a href="index.php?a=woning"><b>hier</b></a> een!</td></tr>
</table>
</body>
</html>
ENDHTML;
} else{

/* ------------------------- */ ?>
<center>
<body style="margin: 0px;">
<?php
if(isset($_POST['info'])) {
    $data->woningtekst				= preg_replace('/\</','&#60;',$_POST['info']);
    mysql_query("UPDATE `users` SET `woningtekst`='{$data->woningtekst}' WHERE `login`='{$data->login}'");
    print "  <table width=\"100%\"><tr><td class=\"mainTxt\" colspan=\"2\" align=\"center\">Je hebt je info veranderd naar <b>$data->woningtekst</b></td></tr></table>\n";
  }
  elseif(isset($_POST['huisnaam'])) {
    $data->huisnaam				= preg_replace('/\</','&#60;',$_POST['huisnaam']);
    mysql_query("UPDATE `users` SET `huisnaam`='{$data->huisnaam}' WHERE `login`='{$data->login}'");
    print "  <table width=\"100%\"><tr><td class=\"mainTxt\" colspan=\"2\" align=\"center\">Je hebt je woning hernoemd naar <b>$data->huisnaam</b></td></tr></table>\n";
  }


  $data->huisnaam				= stripslashes($data->huisnaam);

?>
<table width="50%" align="left">
<tr><td class="subTitle"><b><?php echo $data->huisnaam ?></b></td></tr>
<tr><td class="mainTxt"><img style="1px dotted;"  src="images/items/<? echo $rank ?>.jpg"></td></tr>
              <form method="post">
<tr><td class="mainTxt" align="center">Naam van je Woning:</td></tr>
<tr><td class="mainTxt" align="center"><input name="huisnaam" maxlength="30" type="text" value="<? echo $data->huisnaam ?>"> <input type="submit" name="achter" value="Verander" class="mod_submit"></td></tr>
  </form>
<form method="post">
<tr><td class="mainTxt" align="center"><textarea name="info" cols=30 rows=10><? echo $data->woningtekst ?></textarea></td></tr>
<tr><td class="mainTxt" align="center"><input type="submit" name="update" value="Verander" class="mod_submit"></td></tr>
  </form>
</table>
<table width="50%" style="position: relative;">
   <tr><td class="subTitle" colspan=2><b>Jouw info</b></td></tr>
    <tr><td class=mainTxt colspan=1 width=50%>Woning Naam: </td><td class=mainTxt colspan=1 width=50%><font color=green><? echo $data->huisnaam ?></font>
   <tr><td class=mainTxt colspan=1 width=50%>Kosten zijn: </td><td class=mainTxt colspan=1 width=50%>€<font color=green><? echo $contantd ?></font>
   <tr><td class=mainTxt colspan=1 width=50%>Verkoop Prijs: </td><td class=mainTxt colspan=1 width=50%>€<font color=green><? echo $ba ?></font>
<tr><td class=mainTxt colspan=1 width=50%>Verkoop je woning <a href="index.php?a=woning"><b>>>HIER<<</b></a> </td></tr>
</table>
<table width=49%>




		
		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
		<table width="100%" class="mod_list" cellspacing="2" cellpadding="2">
	</table>
		</td></tr></table>
		</div>

		<table width='100%' cellspacing='2' cellpadding='2'>
			<tr>
		
				<td class='content_bottom'></td>
			</tr>
		</table>
		<br>		</div>
	</td>
	</tr>

	</table>
	</td>
<?php
    }
?>