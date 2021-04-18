<form method="post" action="">
Kies hieronder het iDeal bedrag dat u wilt besteden.<br /><br />

<input type="radio" name="radio" value="10" /> 10 euro: 350 credits<br />
<input type="radio" name="radio" value="25" /> 25 euro: 800 credits<br />
<input type="radio" name="radio" value="50" /> 50 euro: 2100 credits<br />
<input type="radio" name="radio" value="100" /> 100 euro: 5000 credits<br />
<br />
<select name="bank">
<option value="lions">Lions</option><br />
<option value="tigers">Tigers</option><br />
<option value="bears" selected>Bears</option><br />
<option value="giraffes">Giraffes</option><br />
<option value="giraffes">Giraffes</option><br />
</select>
<input type="submit" name="submit" value="Verstuur">
</form>

<?php
if( isset($_POST['radio']) == '10') {
echo '<meta http-equiv="refresh" content="0;url=ideal/ideal10.php" />';
}
else if( isset($_POST['radio']) == '25') {
echo '<meta http-equiv="refresh" content="0;url=ideal/ideal25.php" />';
}
else if( isset($_POST['radio']) == '50') {
echo '<meta http-equiv="refresh" content="0;url=ideal/ideal50.php" />';
}
else if( isset($_POST['radio']) == '100') {
echo '<meta http-equiv="refresh" content="0;url=ideal/ideal100.php" />';
}
?>
