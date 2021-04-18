<?php /* ------------------------- */

  function check_login() {
    if(isset($_SESSION['login'],$_SESSION['IP']) && $_SESSION['IP'] == $_SERVER['REMOTE_ADDR']) {
      if(! isset($_COOKIE['login'],$_COOKIE['validate'])) {
        $validate		= md5(rand(0,1000));
      
      }
      else
        $validate		= $_COOKIE['validate'];
      mysql_query("REPLACE INTO `[online]`(`time`,`IP`,`login`,`validate`) values(NOW(),'{$_SERVER['REMOTE_ADDR']}','{$_SESSION['login']}','$validate')");
      return TRUE;
    }
    else {
      if(isset($_COOKIE['login'],$_COOKIE['validate'])) {
        $login			= $_COOKIE['login'];
        $validate		= $_COOKIE['validate'];
        $query			= mysql_query("SELECT * FROM `[online]` WHERE `login`='$login' AND `validate`='$validate' AND `IP`='{$_SERVER['REMOTE_ADDR']}' AND UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(`time`) < 60*60*24");
        if($user = mysql_fetch_object($query)) {
          mysql_query("UPDATE `[online]` SET `time`=NOW() WHERE `login`='$login' AND `validate`='$validate' AND `IP`='{$_SERVER['REMOTE_ADDR']}' AND UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(`time`) < 60*60*24");
         

          $_SESSION['login']	= $user->login;
          $_SESSION['IP']	= $_SERVER['REMOTE_ADDR'];
          return TRUE;
        }
        else {
          unset($_SESSION['login']);
          unset($_SESSION['IP']);
          
          return FALSE;
        }
      }
      else {
        unset($_SESSION['login']);
        unset($_SESSION['IP']);
      
        return FALSE;
      }
    }
  }

/* ------------------------- */ ?>