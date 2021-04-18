<?
include("config.php");
if(!(@mysql_connect("$host","$user","$pass") && @mysql_select_db("$tablename"))) {echo"Geen verbinding gevonden";}
session_start();
$dbres				= mysql_query("SELECT *,UNIX_TIMESTAMP(`signup`) AS `signup`,UNIX_TIMESTAMP(`online`) AS `online` FROM `users` WHERE `login`='{$_SESSION['user']}'");
$data				= mysql_fetch_array($dbres);
if(isset($data->login) || isset($_SESSION['login'])){
if($_GET['a'] != jail){
$bajes2            = mysql_query("SELECT *,UNIX_TIMESTAMP(`baktijd`) AS `baktijd`,0 FROM `users` WHERE `login`='$data->login'");
$bajes1            = mysql_fetch_object($bajes2);
$datijd = $data->gevangenis;
$tijdverschil1        = $bajes1->baktijd-3600+$datijd-time();
if($bajes1->baktijd + $datijd > time()){
header("Location: $sitelink/v3/index.php?a=jail");
}}
if($_GET['a'] != forum){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<base href="<?=$sitelink?>/v3/" />
<title>OSBanditi | Stap in de wereld van de maffia!</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content="nl" />
<meta http-equiv="content-style-type" content="text/css" />
<meta name="description" content="Crime2Live | Next generatie maffia / criminals rpg game! Met fantastische prijzen!<" />
<meta name="keywords" content="criminals, maffia game, rpg criminals, criminals rpg, rpg game, maffia spel, mafia, criminals met prijzen, next gen criminals" />
<meta name="author" content="Aron de Haas - XIDESIGN" />
<meta name="copyright" content="(c) 2009 - XIDESIGN" />
<link href="style.css" type="text/css" rel="stylesheet" />

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

<body>
<script language="JavaScript" type="text/javascript" src="js/wz_tooltip/wz_tooltip.js"></script>
			<script language="JavaScript" type="text/javascript" src="js/wz_dragdrop/wz_dragdrop.js"></script>
		<script language="JavaScript" type="text/javascript" src="js/wz_tooltip/tip_balloon.js"></script>
        
 
       <?
	   
include("../cont_header.php");
include("../cont_left.php");
include("../cont_rechts_accountinfo.php");

?>



		<div id="contentBox">
	<div id="contentBoxHeader">&nbsp;</div>
  <div id="contentBoxContainer">

  <div id="contentHeader"><h2>Koop credits met iDeal</h2></div>
  
  	<p>U heeft het volgende bedrag gekozen:</p>         
         <p>
         <b><font color="blue">iDeal 10 EURO - 350 Call credits</font></b>
         
         <?

include ("class.ideal.php");

$rtlo = 49998;  // Replace with your TargetPay layoutcode

$description = "350 call credits $data->login";		// Description (will appear on receipt)
$amount = 1000;							// Amount in eurocents (e.g. 1000 means € 10,00)
$returnurl = 'http://'.$_SERVER['HTTP_HOST'].''.$_SERVER['REQUEST_URI'].'?checkpayment=1'; // URL to return

$myiDEAL = new iDEAL ($rtlo);

if ($_GET["checkpayment"]) { $step = 3; } else
	if ($_POST["bank"]) { $step = 2; } else
    	{ $step = 1; }

if ($step==1) {
	echo "<form name=\"bankselect\" method=\"POST\">";
	echo "Kies uw bank: ";
	echo "<select name=bank onChange=\"document.bankselect.submit();\">";
	echo "<script src=\"http://www.targetpay.nl/ideal/issuers-nl.js\"></script>";
	echo "</select>";
	echo "</form>";
    }

if ($step==2) {
    $result = $myiDEAL->GetLink ($_POST["bank"], $description, $amount, $returnurl);

    if (!$result) {
    	echo "Er kon geen verbinding gemaakt worden met de site van je bank.<br><br>";
        echo "<a href=\"javascript: history.go(-1);\">Terug naar de vorige pagina...</a>";
    	} else {
        setcookie ("trxid", $myiDEAL->trxid, time()+86400);
    	echo "<br />Je wordt nu doorverwezen naar de site van je bank.<br><br>";
        echo "<a href=\"$myiDEAL->url\">Klik hier om verder te gaan...</a>";
        echo "<br><br><font size=-2>Transactie ID: ".$myiDEAL->trxid;
        }
    }

if ($step==3) {
	$trxid = ($_COOKIE["trxid"]) ? $_COOKIE["trxid"] : $_GET["trxid"];
    $result = $myiDEAL->CheckPayment ($trxid, 1);

    if (!$result) {
    	echo "De betaling is niet voltooid, of al eerder verwerkt...<br><br>";
        echo "Foutmelding: ".$myiDEAL->error;
    	} else {
		mysql_query("UPDATE users SET callcredits=callcredits+'350' WHERE login='$data->login'");
		mysql_query("INSERT INTO betalingen (login,type,date) values('$data->login','iDeal 25',NOW())");
        echo "Je betaling is verwerkt, en je call credits zijn gestort.";

        // Put the neat stuff here!
        }
	}

}
}	
?>
	
</p>
</div>

  <div id="contentBoxfooter">&nbsp;</div>
</div>

<!-- End Right Column -->

<?
include("../cont_footer.php");

?>
		<?PHP
 mysql_free_result($query1);
 mysql_free_result($query2);
 mysql_close();
?>