<div class="title_bg">
			<div class="title">Gratis credits</div>
		</div>
<?php
$dbres2				= mysql_query("SELECT * FROM `config` WHERE `ding`='1'");
$data2				= mysql_fetch_object($dbres2);
  if($data2->extraatje == "Ja"){
if($_POST["code"] == "1548" && $data->opgehaald == 0) {
echo 'De Voedselbonnen zijn zojuist bijgeschreven!';
mysql_query("UPDATE `users` SET `callcredits`=`callcredits`+'10' WHERE `login`='$data->login'");
mysql_query("UPDATE `users` SET `opgehaald`=`opgehaald`+'1' WHERE `login`='$data->login'");
}
else{
echo 'Je hebt deze credits er al bijgekregen, of de code die je invoerde is verkeerd!';
}
}
?>
</table>