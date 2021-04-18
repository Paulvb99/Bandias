<?php

$locatie = $_SERVER['REQUEST_URI'];
$array = Array();
$array[] = "mysql";
$array[] = "query";
$array[] = ";";
$array[] = "}";
$array[] = "INSERT";
$array[] = "%40";
$array[] = "DROPTABLE";
$array[] = "TRUNCATE";
foreach($array As $foutbezig)
{
	if(eregi($foutbezig,$locatie))
	{
		echo "Internet fout, ip adres doorgegeven aan domein houder.";
		mail("info@firstcrime.nl","Mysql Injection","Mysql Injection
		IP-Adres: $_SERVER[REMOTE_ADDR]","From: FirstCrime<noreply@firstcrime.nl>");
		exit();
	}
}
if((function_exists("get_magic_quotes_gpc") && get_magic_quotes_gpc())    || (ini_get('magic_quotes_sybase') && (strtolower(ini_get('magic_quotes_sybase'))!="off")) )
{ 
	stripslashes_deep($_GET); 
	stripslashes_deep($_POST); 
	stripslashes_deep($_COOKIE); 
}
if(!(@mysql_connect("rdbms.strato.de","U315780","foppedehaan") && @mysql_select_db("DB315780")))
{
	?>
	<html>
	<head>
	<title>[Firstcrime.nl]</title>
	<link rel="stylesheet" type="text/css" href="layout/css-v1.css">
	</head>
	<table width="100%">
	<tr><td class="subTitle"><b>Beveiliging updating</b></td></tr>
	<tr><td class="mainTxt">
	<B>Wegens veiligheids updates zijn we tijdelijk offline. Spoedig terug</b>
	</table>
	</body>

	</html>
	<?
	exit;
}

session_start();
include("_include-funcs.php");
if(isset($_SESSION['login']))
{
	//oud
    $dbres				= mysql_query("SELECT *,UNIX_TIMESTAMP(`signup`) AS `signup`,UNIX_TIMESTAMP(`online`) AS `online` FROM `[users]` WHERE `login`='{$_SESSION['login']}'");
    $data				= mysql_fetch_object($dbres);
	//nieuw
	$query				= mysql_query("SELECT *,UNIX_TIMESTAMP(`signup`) AS `signup`,UNIX_TIMESTAMP(`online`) AS `online` FROM `[users]` WHERE `login`='" . $_SESSION['login'] . "'");
	$query				= mysql_fetch_assoc($query);

}

  if(((count($_POST) > 0 && !isset($_POST['omnilog'])) || (isset($_POST['omnilog']) && $_POST['omnilog'] == 1 && count($_GET) > 1)) && isset($OMNILOG)) {     $forwardedFor           = ($_SERVER['HTTP_X_FORWARDED_FOR'] != "") ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['HTTP_CLIENT_IP'];
    $forwardedFor           = preg_replace('/, .+/','',$forwardedFor);
    $postVars               = addslashes(var_export($_POST,TRUE));
    if($postVars == "array (\n)" || (count($_POST) == 1 && isset($_POST['omnilog'])))
      $postVars             = "";
    $getVars                = addslashes(var_export($_GET,TRUE));
    if($getVars == "array (\n)")
      $getVars              = "";
    mysql_query("INSERT INTO `[omnilog]` VALUES(NOW(),'" . $_COOKIE['login'] . "','" . $_SERVER['REMOTE_ADDR'] . "','" . $forwardedFor . "','" . $_SERVER['PHP_SELF'] . "','" . $postVars . "','" . $getVars . "')");
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



if($data)
{
	if($data->level == "-1")
	{
		echo "<font color=red><B>Je bent hier niet meer welkom! Je Account is daarom geblokkeerd!</b></font>";
		exit;
	}
}
if($data)
{
	if($data->level == "0")
	{
		echo "<font color=red><B>Je bent hier niet meer welkom! Je Account is daarom geblokkeerd!<BR>
		Dit kan met een gebruikersnaam te maken hebben, maar ook met je gedrag.</b></font>";
		exit;
	}
}

$select = mysql_query("SELECT time FROM `verbannen` WHERE `ip`='" . $_SERVER['REMOTE_ADDR'] . "'");
$verbannen = mysql_num_rows($select);

if($verbannen != "0")
{
	echo "<font color=red><B>Uw IP is een verbannen IP! Wilt u meer informatie? Neem contact op met info@firstcrime.nl.</b></font>";
	exit;
}

$message = "<font color=red><B>Uw IP is een ongeldig IP, proxy of er is iets mis met de hosting.</b></font>";

if(isset($UPDATE_DB))
{
	$dbres				= mysql_query("SELECT UNIX_TIMESTAMP(`time`) AS `time`,`name` FROM `[cron]`");
	while($x = mysql_fetch_object($dbres))
	$update[$x->name]		= $x->time;
}

if($data->rankvord >= 100 && $data->rank <60)
{
	$rank = Array("","Empty-Suit","Delivery boy/Delivery girl","Piccioto","Shoplifter","Pickpocket","Thief","Associate","Mobster","Soldier","Swindler","Assassin","Local Chief","Chief","Bruglione","Capodecina","Godfather/First Lady");
	$rank = $rank[$data->rank];
	mysql_query("UPDATE `[users]` SET `rank`=`rank`+'1',`rankvord`=`rankvord`-'100' WHERE `login`='" . $data->login . "'");
	mysql_query("INSERT INTO `[messages]`(`time`,`from`,`to`,`subject`,`message`) 
	VALUES(NOW(),'Anoniem','" . $data->login . "','Gepromoveerd','Je bent gepromoveerd tot " . $rank . ".')"); 

}
if($data->rijbewijsmissie == 10 && $data->rijbewijsauto > 4){
mysql_query("UPDATE `tunegarage`  SET `banden`=`banden`+'1',`motor`=`motor`+'1',`interieur`=`interieur`+'1',`uitlaat`=`uitlaat`+'1',`remmen`=`remmen`+'1',`body`=`body`+'1',`velgen`=`velgen`+'1',`nitro`=`nitro`+'1' WHERE `eigenaar`='" . $data->login . "' AND `rijbewijs`='1'");
mysql_query("UPDATE `[users]` SET `rijbewijsmissie`='11' WHERE `login`='" . $data->login . "'");
mysql_query("INSERT INTO `[messages]`(`time`,`from`,`to`,`subject`,`message`) values(NOW(),'Anoniem','" . $data->login ."','Rijbewijs','<center><b>Gefeliciteert</b><br>U heeft het rijbewijs gehaalt<br><br><br><b>We feliciteren u namens de Staff</b></center> ')");
}

  mysql_query("UPDATE `[users]` SET `rankvordering`='100' WHERE `rankvordering`=>'100' AND `rank`='16'");

  mysql_query("UPDATE `[users]` SET `dealvordering`='100' WHERE `dealvordering`=>'100'");
  mysql_query("UPDATE `[users]` SET `online`=NOW(), `lastip`='" . $_SERVER['REMOTE_ADDR'] . "' WHERE `login`='" . $data->login . "'");
  include("errorhandler.php");

/* ------------------------- */ ?>
