<?
include("../../config.php");
if($_GET['move'] == stop && $data->inzet >= 100 && $data->inzet <= 1000000){
$puntenpc = $data->puntencomp;
$punten = $data->puntenblackjack;
while($puntenpc < 17 && $puntenpc <= $data->puntenblackjack){
$getal = rand(2,14);
if($getal == 11){$kaart = "A"; if($punten+11 < 22){$puntenpc = $puntenpc+11;}else{$puntenpc = $puntenpc+1;}}
if($getal == 12){$kaart = "Q"; $puntenpc = $puntenpc+10;}
if($getal == 13){$kaart = "K"; $puntenpc = $puntenpc+10;}
if($getal == 14){$kaart = "J"; $puntenpc = $puntenpc+10;}
if($getal < 11){$puntenpc = $puntenpc+$getal;$kaart = $getal;}
$soort = rand(0,3);
if($soort == 0){$soort = S;}
if($soort == 1){$soort = H;}
if($soort == 2){$soort = C;}
if($soort == 3){$soort = D;}
$cardspc = "{$data->kaartencomp},{$soort}{$kaart}";
$data->kaartencomp = $cardspc;
}
if($puntenpc > $punten){
$win = "false"; $winmsg = "Je hebt verloren!";}
if($puntenpc > 21){
$win = "true"; $winmsg = "Je hebt gewonnen!";}
if($puntenpc < $punten){
$win = "true"; $winmsg = "Je hebt gewonnen!";}
if($puntenpc == $punten){
$win = "draw"; $winmsg = "Je hebt gelijkgespeeld!";}
if($win == "true"){mysql_query("UPDATE `users` SET `contant`=`contant`+`inzet` WHERE `id`='$data->id'");}
mysql_query("UPDATE `users` SET `inzet`='0', `puntenblackjack`='0',`puntencomp`='0',`kaarten`='',`kaartencomp`='' WHERE `id`='$data->id'");
}
if($_GET['move'] == start && $_GET['money'] >= 100 && $_GET['money'] <= 1000000){
if($data->inzet > 0){
if($data->inzet <= $data->contant){
$cards = $data->kaarten;
$punten = $data->puntenblackjack;
$puntenpc = $data->puntencomp;
$cardspc = $data->kaartencomp;
}else{$errormsg = "Je inzet van je vorige sessie ({$data->inzet} euro) was meer dan het bedrag dat je nu contant hebt!";}}else{
if($data->contant < $_GET['money']){
$errormsg = "Je hebt niet genoeg geld!";
}else{
$getal = rand(2,14);
if($getal == 11){$kaart = "A"; if($punten+11 < 22){$punten = $punten+11;}else{$punten = $punten+1;}}
if($getal == 12){$kaart = "Q"; $punten = 10;}
if($getal == 13){$kaart = "K"; $punten = 10;}
if($getal == 14){$kaart = "J"; $punten = 10;}
if($getal < 11){$punten = $getal;$kaart = $getal;}
$soort = rand(0,3);
if($soort == 0){$soort = S;}
if($soort == 1){$soort = H;}
if($soort == 2){$soort = C;}
if($soort == 3){$soort = D;}
$cards = "{$soort}{$kaart}";
$extra = "$cards,";
$getal = rand(2,14);
if($getal == 11){$kaart = "A"; if($punten+11 < 22){$punten = $punten+11;}else{$punten = $punten+1;}}
if($getal == 12){$kaart = "Q"; $punten = $punten+10;}
if($getal == 13){$kaart = "K"; $punten = $punten+10;}
if($getal == 14){$kaart = "J"; $punten = $punten+10;}
if($getal < 11){$punten = $punten+$getal;$kaart = $getal;}
$soort = rand(0,3);
if($soort == 0){$soort = S;}
if($soort == 1){$soort = H;}
if($soort == 2){$soort = C;}
if($soort == 3){$soort = D;}
$cards = "{$extra}{$soort}{$kaart}";
$extra = "$cards,";

if($punten == 21){$win = "blackjack"; $winmsg = "BLACKJACK! Je inzet is 1.5 keer verdubbeld!";}
$erbij = $data->inzet*1.5;
if($win == "blackjack"){if($_GET['money'] == 1000000){$_SESSION['mission'] = "Krijg meteen blackjack bij een inzet van &euro;1.000.000,-";}mysql_query("UPDATE `users` SET `contant`=`contant`+'$erbij' WHERE `id`='$data->id'");}

$getal = rand(2,14);
if($getal == 11){$kaart = "A"; if($punten+11 < 22){$puntenpc = $puntenpc+11;}else{$puntenpc = $puntenpc+1;}}
if($getal == 12){$kaart = "Q"; $puntenpc = $puntenpc+10;}
if($getal == 13){$kaart = "K"; $puntenpc = $puntenpc+10;}
if($getal == 14){$kaart = "J"; $puntenpc = $puntenpc+10;}
if($getal < 11){$puntenpc = $puntenpc+$getal;$kaart = $getal;}
$soort = rand(0,3);
if($soort == 0){$soort = S;}
if($soort == 1){$soort = H;}
if($soort == 2){$soort = C;}
if($soort == 3){$soort = D;}
$cardspc = "{$soort}{$kaart}";
mysql_query("UPDATE `users` SET `inzet`='{$_GET['money']}', `puntenblackjack`='$punten',`puntencomp`='$puntenpc',`kaarten`='$cards',`kaartencomp`='$cardspc' WHERE `id`='$data->id'");
}}}
if($_GET['move'] == hit){
$getal = rand(2,14);
if($getal == 11){$kaart = "A"; if($data->puntenblackjack+11 < 22){$punten = $data->puntenblackjack+11;}else{$punten = $data->puntenblackjack+1;}}
if($getal == 12){$kaart = "Q"; $punten = $data->puntenblackjack+10;}
if($getal == 13){$kaart = "K"; $punten = $data->puntenblackjack+10;}
if($getal == 14){$kaart = "J"; $punten = $data->puntenblackjack+10;}
if($getal < 11){$punten = $data->puntenblackjack+$getal;$kaart = $getal;}
$soort = rand(0,3);
if($soort == 0){$soort = S;}
if($soort == 1){$soort = H;}
if($soort == 2){$soort = C;}
if($soort == 3){$soort = D;}
$cards = "{$extra}{$soort}{$kaart}";
$puntenpc = $data->puntencomp;
$cardspc = $data->kaartencomp;
$extra = "$data->kaarten,";
$cards = "{$extra}{$soort}{$kaart}";
mysql_query("UPDATE `users` SET `puntenblackjack`='$punten',`puntencomp`='$puntenpc',`kaarten`='$cards',`kaartencomp`='$cardspc' WHERE `id`='$data->id'");
}
if($punten > 21){$win = "false"; $winmsg = "Je hebt verloren!";}
if($win != ""){mysql_query("UPDATE `users` SET `inzet`='0' WHERE `id`='$data->id'");}
if($win == "false"){mysql_query("UPDATE `users` SET `contant`=`contant`-'$data->inzet' WHERE `id`='$data->id'");}
?>win=<?echo$win;?>&errormsg=<?echo$errormsg;?>&winmsg=<?echo$winmsg;?>&cards_user=<?echo$cards;?>&cards_pc=<?echo$cardspc;?>&points_user=<?echo$punten;?>&points_pc=<?echo$puntenpc;

if($win == "true"){$_SESSION['mission'] = "Win met Blackjack";}
if($win == "blackjack" && $_GET['money'] == 1000000){$_SESSION['mission'] = "Krijg meteen blackjack bij een inzet van &euro;1.000.000,-";}

?>
