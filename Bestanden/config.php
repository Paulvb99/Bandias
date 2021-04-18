<?php /* ------------------------- */
$_SESSION['check'] = "";
$file1 = "connection.php";
if(file_exists($file1)){
  include("connection.php");
  
function quote_smart($value) {
if (get_magic_quotes_gpc()) {
$value = stripslashes($value);
}
if(version_compare(phpversion(),"4.3.0") == "-1") {
return mysql_escape_string($value);
} else {
return mysql_real_escape_string($value);
}
}

  if(!(@mysql_connect("$host","$user","$pass") && @mysql_select_db("$tablename"))) {
  ?>
<html>


<head>
<title><?php echo $page->sitetitle; ?></title>
<link rel="stylesheet" type="text/css" href="<? echo $sitelink;?>/layout/layout<?php echo $page->layout; ?>/css/css.css">
<script language="javascript">
function showTxt(id) {
    document.getElementById(id).style.position		= "relative";
    document.getElementById(id).style.visibility	= "visible";
}
</script>
</head>


  <table width=50%>
    <tr><td class="subTitle"><b>FF OFFLINE</b></td></tr>
    <tr><td class="mainTxt">
<center>Offline wegens database fout!</center>
    </td></tr>
  </table>
</body>

</html>
<?
    exit;
  }
  }

  error_reporting ( 0 );
  session_start();
  include("_include-funcs.php");
  if(isset($_SESSION['user'])) {
    $dbres				= mysql_query("SELECT *,UNIX_TIMESTAMP(`signup`) AS `signup`,UNIX_TIMESTAMP(`online`) AS `online` FROM `users` WHERE `login`='{$_SESSION['user']}'");
    $data				= mysql_fetch_object($dbres);
    if($data->ip  == '')
    {
$IP = $_SERVER['REMOTE_ADDR'];    
mysql_query("UPDATE `users` SET `IP`='$IP' WHERE `login`='$data->login'");

}
  }

  
  
  foreach($_POST as $key => $value) {
    if(gettype($_POST[$key]) == "array")
      foreach($_POST[$key] as $key2 => $value2)
        $_POST[$key][$key2]		= addslashes($_POST[$key][$key2]);
    else
      $_POST[$key]			= addslashes($_POST[$key]);
  }
  foreach($_GET as $key => $value) {
    if(gettype($_GET[$key]) == "array")
      foreach($_GET[$key] as $key2 => $value2)
        $_GET[$key][$key2]		= addslashes($_GET[$key][$key2]);
    else
      $_GET[$key]			= addslashes($_GET[$key]);
  }
  foreach($_COOKIE as $key => $value) {
    if(gettype($_COOKIE[$key]) == "array")
      foreach($_COOKIE[$key] as $key2 => $value2)
        $_COOKIE[$key][$key2]		= addslashes($_COOKIE[$key][$key2]);
    else
      $_COOKIE[$key]			= addslashes($_COOKIE[$key]);
  }


  $clientIP				= $_SERVER['REMOTE_ADDR'];
  $forwardedFor				= ($_SERVER['HTTP_X_FORWARDED_FOR'] != "") ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['HTTP_CLIENT_IP'];
  $forwardedFor				= preg_replace('/, .+/','',$forwardedFor);
  $dbres				= mysql_query("SELECT `id` FROM `users` WHERE `level`='-1' AND `login`='{$data->login}'");

    mysql_query("UPDATE `users` SET `online2`='ja' WHERE UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(`online`) < 300");
    mysql_query("UPDATE `users` SET `online2`='nee' WHERE UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(`online`) >= 300");

    $dbres				= mysql_query("SELECT *,UNIX_TIMESTAMP(`signup`) AS `signup`,UNIX_TIMESTAMP(`online`) AS `online` FROM `users` WHERE `login`='{$_SESSION['user']}'");
    $data				= mysql_fetch_object($dbres);

if($data->rankvord >= 100 && $data->rank <10) {
$rank	                  	= array("","Groentje","Loopjongen","Zakkenroller","Winkeldief","Dief","Mobster","Moordenaar","Lokale leider","Leider","Godfather");
$rank = $rank[$data->rank];

mysql_query("UPDATE `users` SET `rank`=`rank`+'1',`rankvord`=`rankvord`-'100' WHERE `login`='".$data->login."'");
}
$gelderaf = $data->werknemers*50+$data->bewakers*50;
$rank	                  	= array("","Groentje","Loopjongen","Zakkenroller","Winkeldief","Dief","Mobster","Moordenaar","Lokale leider","Leider","Godfather");
$rank = $rank[$data->rank];
$city	                  	= array("","Turijn","Palermo","Milaan","Rome","Catania","Corleone");
$city = $city[$data->city];
if($data->familie == "")
{
$familie = ("Geen familie");
}
else{
$familie = ("$data->familie");
}

mysql_query("UPDATE `[users]` SET `cash`='0' WHERE `cash`<'0'"); 
mysql_query("UPDATE `[users]` SET `bank`='0' WHERE `bank`<'0'");  





#
$select = mysql_query("SELECT * FROM `instellingen`");
#
$page = mysql_fetch_object($select);





/* ------------------------- */ ?>
