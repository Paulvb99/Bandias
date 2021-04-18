<?php
$dbres2				= mysql_query("SELECT * FROM `config` WHERE `ding`='1'");
$data2				= mysql_fetch_object($dbres2);
if($data2->extraatje != "Ja" && $data2->mac != "Ja" && $data2->killershop != "Ja"){
echo '<div class="title_bg">
			<div class="title">Overige opties</div>
		</div>
		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
<font color="red">Er zijn geen opties beschikbaar, of je bent niet gemachtigd om dit te lezen!
</table>
';
} else{
?>
<div class="title_bg">
			<div class="title">Overige opties</div>
		</div>
		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<div align="center"><img src="images/overig.jpg"><br /><br />
		<font size="3"> Overige Opties:</font><br /><br />
		<?php   if($data2->mac == "Ja"){ echo '<img src="images/coins.gif">  <a href="index.php?a=mac"><b>Eten</b></a><br />'; } ?>
		<?php   if($data2->killershop == "Ja"){ echo '<img src="images/coins.gif">  <a href="index.php?a=killershop"><b>Killershop</b></a><br />'; } ?>
		<?php   if($data2->extraatje == "Ja"){ echo '<img src="images/coins.gif">  <a href="index.php?a=extraatje"><b>Gratis credits</b></a><br />'; } ?>
</div>
</div>
</table>
<?php
}
?>