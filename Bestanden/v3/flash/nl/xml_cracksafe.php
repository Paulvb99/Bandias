<?
include("../../config.php");
$win = "false";
if($data->callcredits < 20){$error = "Je hebt onvoldoende credits om een poging te wagen";}
else{
$win2 = rand(0,4);
if($win2 == 0){$win = "true";}
if($win == "true"){$_SESSION['mission'] = "Kraak de kluis met success";mysql_query("UPDATE `users` SET `contant`=`contant`+'100000', `callcredits`=`callcredits`+'40', `kogels`=`kogels`+'40', `killers`=`killers`+'10', `respect`=`respect`+'10' WHERE `id`='$data->id'");}if($win == "false"){mysql_query("UPDATE `users` SET `callcredits`=`callcredits`-'20' WHERE `id`='$data->id'");}
}?>win=<?echo$win;?>&errormsg=<?echo$error;?>
