<?php

include("../connection.php");
if(!(@mysql_connect("$host","$user","$pass") && @mysql_select_db("$tablename"))) {echo"Geen verbinding gevonden";}
session_start();
$dbres				= mysql_query("SELECT *,UNIX_TIMESTAMP(`signup`) AS `signup`,UNIX_TIMESTAMP(`online`) AS `online` FROM `users` WHERE `login`='{$_SESSION['user']}'");
$data				= mysql_fetch_array($dbres);
if(isset($data->login) || isset($_SESSION['login'])){
  include("../config.php");
  session_start();
  
/**
 * Example for using the Mollie_Wallie PHP5 class
 * The class has only a few easy public functions
 * so there is not much you can do wrong :-)
 */

require_once 'Wallie.php';

// Get an instance of the Mollie_Wallie class
// (give your Mollie Partner Id as param to the
//  class constructor)
$wallie = new Mollie_Wallie(109921);

if (!isset($_GET['transaction_id']) and !isset($_GET['amount'])) {

  // Create the payment, true on succes, false otherwise
  // $amount = the total money amount that the user has to pay (in cents!)
  // $siteReportUrl = the url where Mollie reports to when the payment is complete.
  //                  Mollie will add payment_type=wallie&transaction_id=<transactionId>&amount=<amount> to this url!
  // $siteReturnUrl = the url where Mollie returns to when the payment is complete.
  //                  Mollie will add transaction_id=<transactionId>&amount=<amount> to this url!
  
  $amount        = 500;
  $siteReportUrl = 'http://osbanditi.twfhosting.nl/v3/wallie/wallie5.php';
  $siteReturnUrl = 'http://osbanditi.twfhosting.nl/v3/wallie/wallie5.php';
  
  if ($wallie->createPayment($amount, $siteReportUrl, $siteReturnUrl)) {
    // Payment created, You could(/should) save the payment information in your database
    
    // Get the url of the chosen bank to redirect the user to,
    // to complete the payment    
    header('location: ' . $wallie->getWallieUrl());
  }
  else {
    // show message that the payment could not be created
    // the function $wallie->getStatus() returns the status
    // message that Mollie returns
  }
}

// (Background) report from Mollie
elseif (isset($_GET['payment_type']) and $_GET['payment_type'] == 'wallie' and isset($_GET['transaction_id']) and isset($_GET['amount'])) {
  // Check if payment is OK.
  $checkPayment = $wallie->checkPayment($_GET['transaction_id'], $_GET['amount']);
  // Mollie makes sure a transaction can only
  // be used one time!
  
  if ($checkPayment == true) {
    // Get the amount of money the user has payed
    $paymentAmount = $wallie->getAmount();
    
    // Set in your database the paymentstatus to OK.    
   	mysql_query("UPDATE users SET callcredits=callcredits+'500' WHERE login='$data->login'");
        mysql_query("INSERT INTO shoplogs(login,ip,date,wat,hoeveel,power,geld) values('" . $data->login . "','" . $_SERVER['REMOTE_ADDR'] . "',NOW(),'Callcredits','','0','500')");
	mysql_query("INSERT INTO betalingen (login,type,date) values('$data->login','Wallie 5',NOW())");
  }  
  else {
    echo "De betaling is niet voltooid, of al eerder verwerkt...<br><br>";
  }
}

// Return of customer
else {
  	echo "Betaling is afgerond";
  
}
}

?>
