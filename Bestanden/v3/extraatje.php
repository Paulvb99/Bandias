<div class="title_bg">
			<div class="title">Gratis credits</div>
		</div>
<?php
$dbres2				= mysql_query("SELECT * FROM `config` WHERE `ding`='1'");
$data2				= mysql_fetch_object($dbres2);
  if($data2->extraatje == "Ja"){
?>
Voer hieronder de code "1548" in, en krijg die 10 GRATIS CallCredits!
<form method="post" action="index.php?a=extraatje2">
Code: <input type="text" size="4" maxlength="4" name="code"> <br />
<input type="submit" name="bevestig" value="Verstuur" class="mod_submit">
</form>
<?php
}
?>
</table>