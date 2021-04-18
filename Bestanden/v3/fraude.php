<?php
$p=$_GET['p']; // get van pagina
$time = time();
$fraudetijd = (time() + 120); //de cijfers zijn het aantal secondes dat je moet wachten totdat je het weer kan proberen
?>
<TABLE width="70%" align=center>
  <TBODY>
<div class="title_bg">
			<div class="title">Fraude</div>
		</div>
 <?php
echo" <tr>
<td class=maintxt><center><img src=images/fraude.JPG witdh=150></td></tr>
<tr>
<TD class=subtitle><b>Opties</b></TD></TD>
      <tr>
        <td class=maintxt><center><img src=\"images/misdaad.gif\"> <A href=\"index.php?a=fraude&p=fraudeer\"><b>Pleeg Fraude</b>
        <br><center><img src=\"images/misdaad.gif\"> <A href=\"index.php?a=fraude&p=stats\"><b>Statistieken</b>
        <br><center><img src=\"images/misdaad.gif\"> <A href=\"index.php?a=fraude&p=uitkeren\"><b>Fraude Winst Uitkeren</b></tr>
  </TD></TR>
";

if($p == stats){
$timer2 = gmdate('i:s',($data->fraudetijd - time()));;
 if($data->gelukt > $data->mislukt) {
        $gesnapt = Goed;
        }
        elseif($data->gelukt < $data->mislukt) {
        $gesnapt = Slecht;
        }
        elseif($data->gelukt = $data->mislukt) {
        $gesnapt = Chill;
        }
        if($data->fraudetijd - time() < 0) {
        $pleeg = Nu;
        }
        elseif($data->fraudetijd - time() > 0) {
        $pleeg = $timer2;
        }

print <<<ENDHTML
<TR><TD class=maintxt><center>Status: <b>{$gesnapt}</b>
      <tr><TD class=maintxt><center>Fraude: <b>{$pleeg}</b>
       <tr><TD class=maintxt ><center>Winst aan Fraude: <b>€{$data->winst}</b></td></tr>

ENDHTML;
}
elseif($p == uitkeren){
mysql_query("UPDATE `users` SET `bank`= bank +'{$data->winst}' WHERE `login`='$data->login'");
mysql_query("UPDATE `users` SET `winst`='0' WHERE `login`='$data->login'");
print <<<ENDHTML

       <tr><TD class=maintxt ><center>Er is <b>€{$data->winst} bij je bank gestort</b></td></tr>


ENDHTML;


}
elseif($p == fraudeer){
if(isset($_POST['bedrijf'])) {
$data->bedrijf        = $_POST['type'];
$bedrijf        = $_POST['type'];
${"select$type"}      = "selected";
mysql_query("UPDATE `users` SET `type`='{$_POST["type"]}' WHERE `login`='{$data->login}'");
print "<tr><td class=\"mainTxt\" align=\"center\">Bedrijf dat je wilt frauderen, is aangepast naar {$_POST["type"]}!</td></tr>\n";
}

$codene = rand(100,2500);
$codee = ereg_replace("0", "gsqwq", $codene);
$codee = ereg_replace("1", "ssBjyq", $codee);
$codee = ereg_replace("2", "gHiq", $codee);
$codee = ereg_replace("3", "hWqDfA", $codee);
$codee = ereg_replace("4", "hsqerf", $codee);
$codee = ereg_replace("5", "Hwsawq", $codee);
$codee = ereg_replace("6", "hSXaq", $codee);
$codee = ereg_replace("7", "hgqYt", $codee);
$codee = ereg_replace("8", "hAsqF", $codee);
$codee = ereg_replace("9", "hxqSAw", $codee);echo" <form method=post>
   <tr><td class=maintxt align=center><b>Heej, pleeg hier je fraude!</b>
   <tr><td class=maintxt align=center><select type=type name=type style=width=150>
              <option value=Bank $select1>Bank</option>
              <option value=BelastingDienst $select2>BelastingDienst</option>
              <option value=Bedrijf $select3>Bedrijf</option>
              </select><input type=submit name=bedrijf value=Selecteer>
   <br>
   <tr><td class=maintxt align=center><b>Fraude plegen kan leiden tot Succes of Mislukking!</b>
   <input name=code2 type=hidden value=$codene>
   <input name=codecheck type=hidden value=$codechecker>
   <tr><td class=maintxt align=center><b>Code -></b></font><input type=text name=code size=2> <input type=submit name=fraude value=\"Fraudeer\" size=200>    </form>
<tr><td class=maintxt align=center><img src=coden.php?security=$codee>";

if(!empty($_POST['fraude'])) {
$rand=rand(1,100);
$winst=rand(100,500);
$timer = gmdate('i:s',($data->fraudetijd - time()));
if($_POST['code'] != $_POST['code2']) {
print "
<tr><td class=Subtitle>Foute Code</td></tr>
<tr><td class=mainTxt><font color=red><center><img src='images/icons/light_error.jpg' width='16' height='16'>Je voerde een ongeldige code in!</font></td></tr>";
}
elseif($data->fraudetijd - time() > 0) {
print " <tr><td class=\"mainTxt\"><center><b>Je moet nog $timer wachten, Je bent nog met een Fraudeer actie bezig.</b></td></tr>\n";
}
elseif($rand > 50){
mysql_query("UPDATE `users` SET `fraudetijd`='$fraudetijd' WHERE `login`='{$data->login}'");
mysql_query("UPDATE `users` SET `winst`=winst+'$winst' WHERE `login`='$data->login'");
mysql_query("UPDATE `users` SET `gelukt`=gelukt+'1' WHERE `login`='{$data->login}'");
print " <tr><td class=\"mainTxt\"><align=left><b>Gefeliciteert je hebt Gefraudeert voor <font color=green>€$winst , dit wordt opgeteld bij je huidige Fraudeer Winst!</b></font></td></tr>\n";
}
elseif($rand > 40){
mysql_query("UPDATE `users` SET `fraudetijd`='$fraudetijd' WHERE `login`='{$data->login}'");
mysql_query("UPDATE `users` SET `mislukt`=mislukt+'1' WHERE `login`='$data->login'");
print " <tr><td  class=\"mainTxt\" ><b><align=left>Les nummer 1, De <?=$data->bedrijf ?> Frauderen is mislukt,  Laat nooit een kopie achter van het fraude papiertje!</b></td></tr>\n";
}
elseif($rand > 20){
mysql_query("UPDATE `users` SET `fraudetijd`='$fraudetijd' WHERE `login`='{$data->login}'");
   mysql_query("UPDATE `users` SET `mislukt`=mislukt+'1' WHERE `login`='$data->login'");
print "  <tr><td  class=\"mainTxt\"><b><align=left>Les nummer 2,  De <?=$data->bedrijf ?> Frauderen is mislukt, Neem altijd pen en papier mee!</b></td></tr>\n";
	}
elseif($rand > 15){
mysql_query("UPDATE `users` SET `fraudetijd`='$fraudetijd' WHERE `login`='{$data->login}'");
   mysql_query("UPDATE `users` SET `mislukt`=mislukt+'1' WHERE `login`='$data->login'");
print "  <tr><td class=\"mainTxt\"><align=left><b>Les nummer 3, De <?=$data->bedrijf; ?> Frauderen is mislukt, Je hebt geen opleiding dus kon je het formulier niet eens invullen!</b></td></tr>\n";
}




}

echo"</tr></td>";
}

 ?>

</TR></TBODY></TABLE>
</table>