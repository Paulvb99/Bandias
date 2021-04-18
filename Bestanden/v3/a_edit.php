<?php
include ("connection.php");
include ("config.php");
if($data->admin < 1){
	if(isset($_POST['submit']) && ctype_digit($_POST['geld'])){
		mysql_query("UPDATE users SET geld=".$_POST['geld']." WHERE login=".$_POST['username']."");
	} else{
		echo '
		<form method="post">
			Gebruiker:<br />
			<input type="text" name="username" /><br />
			Geld:<br />
			<input type="text" name="geld" /><br />
			<br />
			<input type="submit" name="submit" value="Verstuur" />
		</form>
		';
	}
}
?>