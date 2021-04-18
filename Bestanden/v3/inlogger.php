<?
  include("config.php");
$user1 = mysql_query("SELECT * FROM `users` WHERE `activationcode`='0' AND `login`='{$_GET['x']}' AND `pass`=MD5('{$_GET['pass']}')");
$user = mysql_num_rows($user1);
if($user > 0){
$_SESSION['login'] = $_GET['x'];
$data->login = $_GET['x'];
header("Location: index.php?a=loggedin");
}
else{
header("Location: $sitelink/index.php?error");
}
?>
