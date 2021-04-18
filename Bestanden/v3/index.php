<?
include("connection.php");
if(!(@mysql_connect("$host","$user","$pass") && @mysql_select_db("$tablename"))) {echo"Geen verbinding gevonden";}
session_start();
$dbres				= mysql_query("SELECT *,UNIX_TIMESTAMP(`signup`) AS `signup`,UNIX_TIMESTAMP(`online`) AS `online` FROM `users` WHERE `login`='{$_SESSION['user']}'");
$data				= mysql_fetch_object($dbres);
if(isset($data->login) || isset($_SESSION['login'])){
  include("config.php");
  session_start();
if($_GET['a'] != jail){
$bajes2            = mysql_query("SELECT *,UNIX_TIMESTAMP(`baktijd`) AS `baktijd`,0 FROM `users` WHERE `login`='$data->login'");
$bajes1            = mysql_fetch_object($bajes2);
$datijd = $data->gevangenis;
$tijdverschil1        = $bajes1->baktijd-3600+$datijd-time();
if($bajes1->baktijd + $datijd > time()){
header("Location: $sitelink/v3/index.php?a=jail");
}
if($data->banpunten >0 && $_GET['a'] != verbannen && $_GET['a'] != message){
header("Location: $sitelink/v3/index.php?a=verbannen");
}
}
if($_GET['a'] != forum){
?>
<html>
	<head>
		<title>
			<?php echo $sitename; ?> |  <?php echo $siteslogan ?>
		</title>
		<base href="<?=$sitelink?>/v3/" />
		<meta name="description" content="<?php $siteslogan ?>" />
		<meta name="keywords" content="maffia, mafia, criminals, gangsters, gangster, game" />
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<link rel="stylesheet" type="text/css" href="css/style.css"/>

		<script language="JavaScript" src="js/display.js"></script>
		<script language="JavaScript" src="js/functions.js"></script>
		<script language="JavaScript" src="ajax/prototype-1.6.0.2.js"></script>
		<script language="JavaScript" src="ajax/chat.js"></script>
		<script language="JavaScript" src="ajax/config.js"></script>
		<script language="JavaScript" src="ajax/shoutbox.js"></script>
		<script language="JavaScript" src="ajax/custom.js"></script>
		<script language="JavaScript" src="ajax/logs.js"></script>
		<script language="JavaScript" src="js/swfobject.js"></script>
		<script language="JavaScript" src="js/duration_progress.js"></script>
        <script language="javascript" src="lib/tinymce/tiny_mce.js"></script>

	</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
			<script language="JavaScript" type="text/javascript" src="js/wz_tooltip/wz_tooltip.js"></script>
			<script language="JavaScript" type="text/javascript" src="js/wz_dragdrop/wz_dragdrop.js"></script>
		<script language="JavaScript" type="text/javascript" src="js/wz_tooltip/tip_balloon.js"></script>


<?
}
mysql_query("UPDATE `users` SET `online`=NOW() WHERE `login`='{$data->login}'");
if($_GET['x'] == delsafemode){
mysql_query("UPDATE `users` SET `safe`='0' WHERE `login`='$data->login'");
}
if($data->vermoord > 0 && $_GET['a'] != buycredits && $_GET['a'] != message){
header("Location: $sitelink/v3/index.php?a=buycredits");
}
if($_GET['a'] == chat){
$online1 = mysql_query("SELECT * FROM `chat_online` WHERE `id`='$data->id'");
$online = mysql_fetch_object($online1);
if($online->id != $data->id){
mysql_query("INSERT INTO `chat_online`(person,id) values('$data->login','$data->id')");
}}else{mysql_query("DELETE FROM `chat_online` WHERE `id`='$data->id'");}
$contantpunt = number_format($data->contant, 0, '.' , '.');
$bankpunt = number_format($data->bank, 0, '.' , '.');
$inboxnew = mysql_num_rows(mysql_query("SELECT id FROM `messages` WHERE `read`=0 AND `inbox`=1 AND `to`='$data->login'"));
if($inboxnew >= 1 && $_GET['a'] != message){
?>
<script language="javascript">
alert('Er staat een ongelezen prive bericht in je postvak!');
</script>
<?php
}
$datum = (date("M d, Y H:i:s"));
$tijd = (date("H:i:s"));
include("left_column.php");
if($_GET['a'] != ""){
include("{$_GET['a']}.php");
}else{
echo "<h1>Pagina niet gevonden..</h1><br /><br /> De pagina die je probeerde te bereiken bestaat niet of is uitgeschakeld.<br /> Als je hierop bent gekomen via een link in een van onze menu's, stuur dan a.u.b een bericht naar een Crewlid.<br /> Bedankt!<br /><br /> - Het team van OSBanditi"; }
include("right_column.php");
}else{
include("../index.php");
}?>
