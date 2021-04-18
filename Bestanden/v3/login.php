<?php /* ------------------------- */
  include("config.php");
  if(isset($_POST['login'])) {
 $dbres				= mysql_query("SELECT * FROM `users` WHERE `login`='{$_POST['login']}' AND `pass`=MD5('{$_POST['pass']}')");
$num = mysql_num_rows($dbres);
    if($num > 0) {
$naam = $_POST['login'];
$_POST['login'] = $naam;
$pass = $_POST['pass'];
$_POST['pass'] = $pass;
    setcookie("login",'',time()-24*60*60,"/","");
    setcookie("validate",'',time()-24*60*60,"/","");
      $_SESSION['IP']			= $_SERVER['REMOTE_ADDR'];
      $dbres				= mysql_query("SELECT *,UNIX_TIMESTAMP(`signup`) AS `signup` FROM `users` WHERE `login`='{$_SESSION['login']}'");
      $_SESSION['data']			= mysql_fetch_object($dbres);
if($data->vakantie > 0){
   header("Location: $sitelink/index.php?vakantie");
exit;
    }
    header("Location: inlogger.php?x={$_POST['login']}&pass={$_POST['pass']}");
    }
else{
   header("Location: $sitelink/index.php?error");
   }
  }
  else if($_GET['x'] == "logout") {
    mysql_query("UPDATE `[users]` SET `online`='0000-00-00 00:00:00' WHERE `login`='{$data->login}'");
    mysql_query("DELETE FROM `[online]` WHERE `login`='{$_COOKIE['login']}' AND `validate`='{$_COOKIE['validate']}' AND `IP`='{$_SERVER['REMOTE_ADDR']}'");
    setcookie("login",'',time()-24*60*60,"/","");
    setcookie("validate",'',time()-24*60*60,"/","");
    session_destroy();
   header("Location: $sitelink/index.php");
  }
/* ------------------------- */ ?>
