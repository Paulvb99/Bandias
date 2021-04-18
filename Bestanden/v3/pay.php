<?php
session_start();
?>
<form method="post" action="">
Kies hieronder het iDeal bedrag dat u wilt besteden.<br /><br />

<input type="radio" name="radio" value="10" /> 10 euro: 350 credits<br />
<input type="radio" name="radio" value="25" /> 25 euro: 800 credits<br />
<input type="radio" name="radio" value="50" /> 50 euro: 2100 credits<br />
<input type="radio" name="radio" value="100" /> 100 euro: 5000 credits<br />
<br />
<select name="bank">
<option values="Abn Amro">ABN AMRO</option><br />
<option value="Fortis">Fortis</option><br />
<option value="ING" selected>ING</option><br />
<option value="Rabobank">Rabobank</option><br />
<option value="SNSBank">SNS Bank</option><br />
</select>
<input type="submit" name="submit" value="Betaal"><br />
</form>

<?php
if($_POST['radio'] == 10) {
echo '<meta http-equiv="refresh" content="0;url=ideal/ideal10.php" />';
$_SESSION['bank'] = $_POST["bank"];
}
else if($_POST['radio'] == 25) {
echo '<meta http-equiv="refresh
" content="0;url=ideal/ideal25.php" />';
setcookie("Bank", $_POST["bank"]);
}
else if($_POST['radio'] == 50) {
echo '<meta http-equiv="refresh" content="0;url=ideal/ideal50.php" />';
setcookie("Bank", $_POST["bank"]);
}
else if($_POST['radio'] == 100) {
echo '<meta http-equiv="refresh" content="0;url=ideal/ideal100.php" />';
setcookie("Bank", $_POST["bank"]);
}
?>
