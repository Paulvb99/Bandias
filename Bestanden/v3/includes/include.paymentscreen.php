<?php
/*
=======================================================================
 File      : belsysteem3.php
 Author    : Mollie B.V.
 Version   : 1.1 (Oct 2007)
 More information? Go to www.mollie.nl
========================================================================
*/


/* below we'll fetch the payment information to present it to the user

   in case user is sent back to this payment-screen because payment failed,
   we don't need to refetch a new servicenumber and paycode, how smart ;-) */

if ($m->servicenumber and $m->paycode) {
    $gotpayinfo = true;
} else {
    $gotpayinfo = $m->getPayInfo();
}

if ($gotpayinfo) {
    $cur = '';
    if ($m->currency == 'eur') {
        $cur = '&euro;'; #  €;
    } elseif ($m->currency == 'dollar') {
        $cur = '$';
    } elseif ($m->currency == 'gbp') {
        $cur = '&pound;'; #  £;
    }
    
    $_SESSION['servicenumber'] = $m->servicenumber;
    $_SESSION['paycode'] = $m->paycode;
    
    # landen keuze
    ?>

    <?
    echo '<font size="4"><b>Bel ' . $m->servicenumber . '</b></font><br />';
    

    
    echo '<br />';
    echo 'De code is: <font size="4"><b>' . $m->paycode . '</b></font><br>Vul deze code in op je telefoon.<br><br /><br />';
    echo '<form method="get" action="./buycredits.php">
            <input type="hidden" name="a" value="buycredits" />
            <input type="hidden" name="action" value="check" />
            <input type="submit" value="Klik hier na het betalen!">
          </form>';
} else {
    echo 'Kon betaalinformatie niet ophalen.';
}

?>
