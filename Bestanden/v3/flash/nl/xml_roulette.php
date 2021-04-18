<?
include("../../config.php");
if($data->roulette < 10){
if($_GET['money'] <= $contant){
if($_GET['money'] >= 1000 && $_GET['money'] <= 1000000){
if($_GET['number'] >= 0 && $_GET['number'] <= 36){
$bedrag1 = 0;
$bedrag2 = 0;
$win = "false";
$kleur = array("0","2","1","2","1","2","1","2","1","2","1","1","2","1","2","1","2","1","2","2","1","2","1","2","1","2","1","2","1","1","2","1","2","1","2","1","2");
$getal = rand(0,36);
if($getal == 20){$getal = 21;}
if($_GET['number'] == $getal){$win = "true"; $bedrag1 = $_GET['money']*10;}
$eigenkleur = $kleur[$_GET['number']];
$gegooidekleur = $kleur[$getal];
if($eigenkleur == $gegooidekleur && $gegooidekleur != 0){$win = "true"; $bedrag2 = $_GET['money']*2;}
if($eigenkleur == $gegooidekleur && $gegooidekleur == 0){$win = "true"; $bedrag2 = $_GET['money']*10;}
$bedrag = $bedrag1+$bedrag2;
$geldkrijgen = $bedrag-$_GET['money'];
$eraf = $_GET['money'];
$kleurnaam = array("Groen","Zwart","Rood");
$kleurnaam = $kleurnaam[$gegooidekleur];
if($win == "true"){$_SESSION['mission'] = "Win met Roulette";mysql_query("UPDATE `users` SET `roulette`=`roulette`+'1',`contant`=`contant`+'$geldkrijgen' WHERE `id`='$data->id'");$winmsg = "Gefeleciteerd+het+balletje+is+op+$kleurnaam+$getal+gevallen%2C+je+hebt+%5B%23EURO%5D$bedrag%2C-+gewonnen%21";}if($win == "false"){mysql_query("UPDATE `users` SET `roulette`=`roulette`+'1',`contant`=`contant`-'$eraf' WHERE `id`='$data->id'");$winmsg = "Helaas.+Het+balletje+is+niet+op+de+door+jou+gekozen+kleur+of+nummer+gevallen.+Volgende+keer+beter%21";}
?>&winnumber=<?echo$getal;?>&win=<?echo$win;?>&errormsg=&winmsg=<?echo$winmsg;?>&choice=<?echo$_GET['number'];?>&aapje=dood<?}
else{?>&winnumber=&win=&errormsg=Je+hebt+geen+geldig+getal+ingevuld%2C+het+dient+tussen+de+0+en+36+te+liggen&winmsg=&choice=&aapje=dood<?}}
else{?>&winnumber=&win=&errormsg=Je+hebt+geen+geldig+bedrag+ingevuld%2C+het+dient+tussen+de+1000+en+10000+euro+te+liggen&winmsg=&choice=&aapje=dood<?}}
else{?>&winnumber=&win=&errormsg=Je+hebt+niet+zo+veel+geld%21&winmsg=&choice=&aapje=dood<?}}
else{?>&winnumber=&win=&errormsg=Je+hebt+vandaag+al+10+keer+roulette+gespeeld%21&winmsg=&choice=&aapje=dood<?}?>
