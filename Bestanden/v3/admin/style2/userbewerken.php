<?


if($data->admin != "1") {
echo "Je bent geen Admin!";
exit;
}

?>

<?
$id = $_GET['x'];

$user1 = mysql_query("SELECT * FROM `users` WHERE `id`='$id'");
$user = mysql_fetch_object($user1);

if($_POST['submit']){
	mysql_query("UPDATE `users` SET `login`='".$_POST['login']."' where `id`='$id'");
	mysql_query("UPDATE `users` SET `hoermissie`='".$_POST['hoermissie']."' where `id`='$id'");
	mysql_query("UPDATE `users` SET `pimpdiploma`='".$_POST['pimpdiploma']."' where `id`='$id'");
	mysql_query("UPDATE `users` SET `email`='".$_POST['email']."' where `id`='$id'");
	mysql_query("UPDATE `users` SET `contant`='".$_POST['contant']."' where `id`='$id'");
	mysql_query("UPDATE `users` SET `bank`='".$_POST['bank']."' where `id`='$id'");
	mysql_query("UPDATE `users` SET `killers`='".$_POST['killers']."' where `id`='$id'");
	mysql_query("UPDATE `users` SET `rank`='".$_POST['rank']."' where `id`='$id'");
	mysql_query("UPDATE `users` SET `health`='".$_POST['health']."' where `id`='$id'");
	mysql_query("UPDATE `users` SET `bankleft`='".$_POST['bankleft']."' where `id`='$id'");
	mysql_query("UPDATE `users` SET `power`='".$_POST['power']."' where `id`='$id'");
	mysql_query("UPDATE `users` SET `callcredits`='".$_POST['callcredits']."' where `id`='$id'");
	mysql_query("UPDATE `users` SET `vipdays`='".$_POST['vipdays']."' where `id`='$id'");
	mysql_query("UPDATE `users` SET `familie`='".$_POST['familie']."' where `id`='$id'");
	mysql_query("UPDATE `users` SET `IP`='".$_POST['IP']."' where `id`='$id'");
	mysql_query("UPDATE `users` SET `online2`='".$_POST['online2']."' where `id`='$id'");
	mysql_query("UPDATE `users` SET `rankvord`='".$_POST['rankvord']."' where `id`='$id'");
	mysql_query("UPDATE `users` SET `geefeer`='".$_POST['geefeer']."' where `id`='$id'");
	mysql_query("UPDATE `users` SET `kogels`='".$_POST['kogels']."' where `id`='$id'");
	mysql_query("UPDATE `users` SET `vakantie`='".$_POST['vakantie']."' where `id`='$id'");
	mysql_query("UPDATE `users` SET `strafpunten`='".$_POST['strafpunten']."' where `id`='$id'");
	mysql_query("UPDATE `users` SET `klikdl`='".$_POST['klikdl']."' where `id`='$id'");
	echo"<table width=\"100%\"><tr><td style=\"background: #befb95; border: 1px solid #000000; width: 100%;\">De gegevens van <b>$user->login</b> zijn nu veranderd</td></tr></table>";
}
?>
<div class="headings alt">
                <h5 class="left">Gebruiker bewerken (<font color=red><?php echo"$user->login";?></font>)</h5>
                </div>
                 <div class="contentbox">
<table width=100%>

<form method="post" name="submit">


<tr><td class=list>Inlognaam:</td><td><input type="text" name="login" value=<?php echo"$user->login"; ?> /></td></tr>
<tr><td class=list>Hoermissie:</td><td><input type="text" name="hoermissie" value=<?php echo"$user->hoermissie"; ?> /></td><tr>
<tr><td class=list>Pimpdiploma:</td><td><input type="text" name="pimpdiploma" value=<?php echo"$user->pimpdiploma"; ?> /></td><tr>
<tr><td class=list>Email:</td><td><input type="text" name="email" value=<?php echo"$user->email"; ?> /></td><tr>
<tr><td class=list>Contant:</td><td><input type="text" name="contant" value=<?php echo"$user->contant"; ?> /></td><tr>
<tr><td class=list>Bank:</td><td><input type="text" name="bank" value=<?php echo"$user->bank"; ?> /></td><tr>
<tr><td class=list>Killers:</td><td><input type="text" name="killers" value=<?php echo"$user->killers"; ?> /></td><tr>
<tr><td class=list>Rank:</td><td><input type="text" name="rank" value=<?php echo"$user->rank"; ?> /></td><tr>
<tr><td class=list>Health:</td><td><input type="text" name="health" value=<?php echo"$user->health"; ?> /></td><tr>
<tr><td class=list>Power:</td><td><input type="text" name="power" value=<?php echo"$user->power"; ?> /></td><tr>
<tr><td class=list>Callcredits:</td><td><input type="text" name="callcredits" value=<?php echo"$user->callcredits"; ?> /></td><tr>
<tr><td class=list>Vip dagen:</td><td><input type="text" name="vipdays" value=<?php echo"$user->vipdays"; ?> /></td><tr>
<tr><td class=list>Familie:</td><td><input type="text" name="familie" value=<?php echo"$user->familie"; ?> /></td><tr>
<tr><td class=list>IP adres:</td><td><input type="text" name="IP" value=<?php echo"$user->IP"; ?> /></td><tr>
<tr><td class=list>Rankvordering:</td><td><input type="text" name="rankvord" value=<?php echo"$user->rankvord"; ?> /></td><tr>
<tr><td class=list>Eer om weg te geven:</td><td><input type="text" name="geefeer" value=<?php echo"$user->geefeer"; ?> /></td><tr>
<tr><td class=list>Kogels:</td><td><input type="text" name="kogels" value=<?php echo"$user->kogels"; ?> /></td><tr>
<tr><td class=list>Vakantie:</td><td><input type="text" name="vakantie" value=<?php echo"$user->vakantie"; ?> /></td><tr>
</td><tr>






<tr><td class=list><input type="submit" name="submit" value="aanpassen!" class="mod_submit"/></td></tr>


</form>



</table>
</div>