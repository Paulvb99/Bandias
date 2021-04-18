<?
$_SESSION['mission'] = "Bezoek de callcredits shop";
if(isset($_POST['first'])){
if($data->callcredits >= 10){
mysql_query("UPDATE `users` SET `callcredits`=`callcredits`-'8', `vipdays`=`vipdays`+'15' WHERE `login`='$data->login'");
mysql_query("INSERT INTO shoplogs(login,ip,date,wat,hoeveel,power,geld,bijaf) values('" . $data->login . "','" . $_SERVER['REMOTE_ADDR'] . "',NOW(),'Callcredits','1','0','8','Eraf')");
   header("Location: $sitelink/v3/buycredits.php?p=shop");
}
}
if(isset($_POST['second'])){
if($data->callcredits >= 15){
mysql_query("UPDATE `users` SET `callcredits`=`callcredits`-'20', `vipdays`=`vipdays`+'30' WHERE `login`='$data->login'");
mysql_query("INSERT INTO shoplogs(login,ip,date,wat,hoeveel,power,geld,bijaf) values('" . $data->login . "','" . $_SERVER['REMOTE_ADDR'] . "',NOW(),'Callcredits','1','0','20','Eraf')");
   header("Location: $sitelink/v3/buycredits.php?p=shop");
}
}
if(isset($_POST['third'])){
if($data->callcredits >= 8){
mysql_query("UPDATE `users` SET `callcredits`=`callcredits`-'8', `bank`=`bank`+'3000000' WHERE `login`='$data->login'");
mysql_query("INSERT INTO shoplogs(login,ip,date,wat,hoeveel,power,geld,bijaf) values('" . $data->login . "','" . $_SERVER['REMOTE_ADDR'] . "',NOW(),'Callcredits','1','0','8','Eraf')");
   header("Location: $sitelink/v3/buycredits.php?p=shop");
}
}
if(isset($_POST['fourth'])){
if($data->callcredits >= 15){
mysql_query("UPDATE `users` SET `callcredits`=`callcredits`-'15', `bank`=`bank`+'6000000' WHERE `login`='$data->login'");
mysql_query("INSERT INTO shoplogs(login,ip,date,wat,hoeveel,power,geld,bijaf) values('" . $data->login . "','" . $_SERVER['REMOTE_ADDR'] . "',NOW(),'Callcredits','1','0','15','Eraf')");
   header("Location: $sitelink/v3/buycredits.php?p=shop");
}
}
if(isset($_POST['fifth'])){
if($data->callcredits >= 4){
mysql_query("UPDATE `users` SET `callcredits`=`callcredits`-'4', `bankstandard`=`bankstandard`+'5' WHERE `login`='$data->login'");
mysql_query("INSERT INTO shoplogs(login,ip,date,wat,hoeveel,power,geld,bijaf) values('" . $data->login . "','" . $_SERVER['REMOTE_ADDR'] . "',NOW(),'Callcredits','1','0','4','Eraf')");
   header("Location: $sitelink/v3/buycredits.php?p=shop");
}
}
if(isset($_POST['fifth'])){
if($data->callcredits >= 4){
mysql_query("UPDATE `users` SET `callcredits`=`callcredits`-'7', `bankstandard`=`bankstandard`+'10' WHERE `login`='$data->login'");
mysql_query("INSERT INTO shoplogs(login,ip,date,wat,hoeveel,power,geld,bijaf) values('" . $data->login . "','" . $_SERVER['REMOTE_ADDR'] . "',NOW(),'Callcredits','1','0','7','Eraf')");
   header("Location: $sitelink/v3/buycredits.php?p=shop");
}
}
if(isset($_POST['fifth'])){
if($data->callcredits >= 4){
mysql_query("UPDATE `users` SET `callcredits`=`callcredits`-'11', `bankstandard`=`bankstandard`+'15' WHERE `login`='$data->login'");
mysql_query("INSERT INTO shoplogs(login,ip,date,wat,hoeveel,power,geld,bijaf) values('" . $data->login . "','" . $_SERVER['REMOTE_ADDR'] . "',NOW(),'Callcredits','1','0','11','Eraf')");
   header("Location: $sitelink/v3/buycredits.php?p=shop");
}
}
if(isset($_POST['sixth'])){
if($data->callcredits >= 7){
mysql_query("UPDATE `users` SET `callcredits`=`callcredits`-'7', `dagenrente`=`dagenrente`+'15' WHERE `login`='$data->login'");
mysql_query("INSERT INTO shoplogs(login,ip,date,wat,hoeveel,power,geld,bijaf) values('" . $data->login . "','" . $_SERVER['REMOTE_ADDR'] . "',NOW(),'Callcredits','1','0','7','Eraf')");
   header("Location: $sitelink/v3/buycredits.php?p=shop");
}
}
if(isset($_POST['seventh'])){
if($data->callcredits >= 9){
mysql_query("UPDATE `users` SET `callcredits`=`callcredits`-'9', `maffia`=`maffia`+'24' WHERE `login`='$data->login'");
mysql_query("INSERT INTO shoplogs(login,ip,date,wat,hoeveel,power,geld,bijaf) values('" . $data->login . "','" . $_SERVER['REMOTE_ADDR'] . "',NOW(),'Callcredits','1','0','9','Eraf')");
   header("Location: $sitelink/v3/buycredits.php?p=shop");
}
}
if(isset($_POST['eighth'])){
if($data->callcredits >= 13){
mysql_query("UPDATE `users` SET `callcredits`=`callcredits`-'13', `maffia`=`maffia`+'48' WHERE `login`='$data->login'");
mysql_query("INSERT INTO shoplogs(login,ip,date,wat,hoeveel,power,geld,bijaf) values('" . $data->login . "','" . $_SERVER['REMOTE_ADDR'] . "',NOW(),'Callcredits','1','0','13','Eraf')");
   header("Location: $sitelink/v3/buycredits.php?p=shop");
}
}
if(isset($_POST['nineth'])){
if($data->callcredits >= 8){
mysql_query("UPDATE `users` SET `callcredits`=`callcredits`-'8', `maffia`=`maffia`+'12', `power`=`power`+'1500', `bank`=`bank`+'1000000' WHERE `login`='$data->login'");
mysql_query("INSERT INTO shoplogs(login,ip,date,wat,hoeveel,power,geld,bijaf) values('" . $data->login . "','" . $_SERVER['REMOTE_ADDR'] . "',NOW(),'Callcredits','1','0','8','Eraf')");
   header("Location: $sitelink/v3/buycredits.php?p=shop");
}
}
if(isset($_POST['tenth'])){
if($data->callcredits >= 15){
mysql_query("UPDATE `users` SET `callcredits`=`callcredits`-'15', `power`=`power`+'75000' WHERE `login`='$data->login'");
mysql_query("INSERT INTO shoplogs(login,ip,date,wat,hoeveel,power,geld,bijaf) values('" . $data->login . "','" . $_SERVER['REMOTE_ADDR'] . "',NOW(),'Callcredits','1','0','15','Eraf')");
   header("Location: $sitelink/v3/buycredits.php?p=shop");
}
}
if(isset($_POST['eleventh'])){
if($data->callcredits >= 28){
mysql_query("UPDATE `users` SET `callcredits`=`callcredits`-'28', `health`='100' WHERE `login`='$data->login'");
mysql_query("INSERT INTO shoplogs(login,ip,date,wat,hoeveel,power,geld,bijaf) values('" . $data->login . "','" . $_SERVER['REMOTE_ADDR'] . "',NOW(),'Callcredits','1','0','28','Eraf')");
   header("Location: $sitelink/v3/buycredits.php?p=shop");
}
}
if(isset($_POST['twelveth'])){
if($data->callcredits >= 7){
mysql_query("UPDATE `users` SET `callcredits`=`callcredits`-'7' WHERE `login`='$data->login'");
mysql_query("INSERT INTO shoplogs(login,ip,date,wat,hoeveel,power,geld,bijaf) values('" . $data->login . "','" . $_SERVER['REMOTE_ADDR'] . "',NOW(),'Callcredits','1','0','7','Eraf')");
mysql_query("UPDATE `clicks` SET `active`='0' WHERE `login`='$data->login'");
   header("Location: $sitelink/v3/buycredits.php?p=shop");
}
}
if(isset($_POST['thirteenth'])){
if($data->callcredits >= 7){
mysql_query("UPDATE `users` SET `callcredits`=`callcredits`-'7', `killers`=`killers`+'30' WHERE `login`='$data->login'");
mysql_query("INSERT INTO shoplogs(login,ip,date,wat,hoeveel,power,geld,bijaf) values('" . $data->login . "','" . $_SERVER['REMOTE_ADDR'] . "',NOW(),'Callcredits','1','0','7','Eraf')");
   header("Location: $sitelink/v3/buycredits.php?p=shop");
}
}
if(isset($_POST['fourteenth'])){
if($data->callcredits >= 15){
mysql_query("UPDATE `registered_ip` SET `max`=`max`+'1' WHERE `ip`='$data->IP'");
mysql_query("UPDATE `users` SET `callcredits`=`callcredits`-'15' WHERE `login`='$data->login'");
mysql_query("INSERT INTO shoplogs(login,ip,date,wat,hoeveel,power,geld,bijaf) values('" . $data->login . "','" . $_SERVER['REMOTE_ADDR'] . "',NOW(),'Callcredits','1','0','15','Eraf')");
   header("Location: $sitelink/v3/buycredits.php?p=shop");
}
}
if(isset($_POST['vijftien'])){
	if($data->callcredits >= 28){
		mysql_query("UPDATE `users` SET `vermoord`='0', `health`='100', `safe`='1', `callcredits`=`callcredits`-'5' WHERE `login`='$data->login'");
mysql_query("INSERT INTO shoplogs(login,ip,date,wat,hoeveel,power,geld,bijaf) values('" . $data->login . "','" . $_SERVER['REMOTE_ADDR'] . "',NOW(),'Callcredits','1','0','5','Eraf')");
		}
}
if(isset($_POST['zestien'])){
if($data->callcredits >= 30){
mysql_query("UPDATE `users` SET `callcredits`=`callcredits`-'50', `rankvord`=`rankvord`+'50' WHERE `login`='$data->login'");
mysql_query("INSERT INTO shoplogs(login,ip,date,wat,hoeveel,power,geld,bijaf) values('" . $data->login . "','" . $_SERVER['REMOTE_ADDR'] . "',NOW(),'Callcredits','1','0','50','Eraf')");
   header("Location: $sitelink/v3/buycredits.php?p=shop");
   }
}
if(isset($_POST['zeventien'])){
if($data->callcredits >= 11){
mysql_query("UPDATE `users` SET `callcredits`=`callcredits`-'15', `kogels`=`kogels`+'150' WHERE `login`='$data->login'");
mysql_query("INSERT INTO shoplogs(login,ip,date,wat,hoeveel,power,geld,bijaf) values('" . $data->login . "','" . $_SERVER['REMOTE_ADDR'] . "',NOW(),'Callcredits','1','0','15','Eraf')");
   header("Location: $sitelink/v3/buycredits.php?p=shop");
		?> <meta http-equiv="refresh" content="0" />
<style type="text/css">
<!--
.stijl1 {color: #FF0000}
-->
</style>
); <?
	}
}
?>


  <div class="title_bg"><div class="title">Callcredits kopen</div></div>
  
  	<p>Maak hieronder een keuze hoe je callcredits wilt kopen.</p>

		<table>
        	<tr>
            	<td width="100px" style="padding-right: 45px;">
				<a href="index.php?a=buycredits&p=telefoon">
                	<img src="images/credits/telefoon.gif" align="bottom">
                    	<center><b>Telefoon</b></center>
                </a>
            	</td>
                
            	<td width="100px" style="padding-right: 45px;">
            	<a href="index.php?a=buycredits&p=ideal">
					<img src="images/credits/ideal.gif" align="bottom">
                    	<center><b>iDeal</b></center>
                </a> 
            	</td>
                
                <td width="100px" style="padding-right: 45px;">
            	<a href="index.php?a=buycredits&p=wallie">
					<img src="images/credits/wallie.gif" align="bottom">
                    	<center><b>Wallie card</b></center>
                </a>
            	</td>

            </tr>
         </table>
         
        
            

	<?if($data->vermoord > 0){?>
     <div class="title_bg"><div class="title">Vermoord</div></div>
							
                            <p>Helaas, je bent vermoord...<br />
							Om jezelf weer tot leven te wekken dien je onderstaande stappen te volgen. <br />
							Naast 100% leven krijg je ook nog eens <b><span class="Geel">28</span></b> callcredits, welke je daarna in de Callshop kunt gebruiken om jezelf nog beter en sterker te maken!<?}?>
                            
     <? if($_GET['p'] == "paypal") { ?>
    
    <div class="title_bg"><div class="title">Koop callcredits met paypal</div></div>
  
  	<p>
    <img style="float: right; margin-left: 20px; margin-right: 20px;" src="images/credits/paypal.gif" width="100px" height="100px">
    Koop nu callcredits door te betalen met <b>Paypal</b>. Het is simpel en snel en een stuk goedkoper als bellen via de telefoon.
    <br /><br />
    
    <b>Maak hieronder een keuze uit de bedragen</b></p>
			
		 <div id="contentHeader2"><h2>
         		<div style="float: left; margin-left: 20px; margin-right: 50px;">Paypal &euro; 5,-</div>
                <div style="float: left; margin-left: 20px; margin-right: 50px;">Paypal &euro; 10,-</div>
                <div style="float: left; margin-left: 20px; margin-right: 50px;">Paypal &euro; 25,-</div>
                <div style="float: left; margin-left: 20px; margin-right: 50px;">Paypal &euro; 50,-</div>
       
         </h2>
         </div>

           </p>     
      <div class="title_bg"><div class="title">Hoe betalen</div></div>
      
      		<p> Je hebt een keuze gemaakt uit 1 van de bedragen en nu wil je betalen? <br />Stort dan het bedrag op paypal adres <b>aron@xidesign.nl</b> met als omschrijving <b><? echo $data->login; ?></b>.
            <br /><br /> Zodra wij de betaling hebben ontvangen zullen de credits op je account worden bijgestort.</p>
             
          
           
           <? } ?>
                            
     <? if($_GET['p'] == "wallie") { ?>
    
    <div class="title_bg"><div class="title">Koop callcredits met wallie</div></div>
  
  	<p>
    <img style="float: right; margin-left: 20px; margin-right: 20px;" src="images/credits/wallie.gif" width="100px" height="100px">
    Koop nu callcredits door te betalen met je <b>Wallie Card</b>. Het is simpel en snel en een stuk goedkoper als bellen via de telefoon.
    <br /><br />
    
    <b>Maak hieronder een keuze uit de bedragen</b></p>
			
         		- <a href="wallie/wallie5.php"><b>Wallie &euro; 5</b>,-</a> <strong>120 callcredits</strong><br />
                - <a href="wallie/wallie10.php"><b>Wallie &euro; 10</b>,-</a> <strong>280 callcredits</strong><br />
                - <a href="wallie/wallie25.php"><b>Wallie &euro; 25</b>,-</a> <strong>700 callcredits</strong><br />
                - <a href="wallie/wallie50.php"><b>Wallie &euro; 50</b>,-</a> <strong>1500 callcredits</strong><br />

         </div>

             
          
           
           <? } ?>
           														
	<? if($_GET['p'] == "ideal") { ?>
    
    <div class="title_bg"><div class="title">Koop callcredits met iDeal</div></div>
  
  	<p>
    <img style="float: right; margin-left: 20px; margin-right: 20px;" src="images/credits/ideal.gif" width="100px" height="100px">
    Koop nu callcredits door te betalen met je <b>Bank</b> via iDeal. Het is simpel en snel en een stuk goedkoper als bellen via de telefoon.
    <br /><br />
    
    <b>Maak hieronder een keuze uit de bedragen</b></p>
			
         		- <a href="ideal/ideal10.php"><b>iDeal &euro; 10</b>,-</a> <span style="color: red;">ACTIE</span> <strong>280 callcredits</strong><br />
                - <a href="ideal/ideal25.php"><b>iDeal &euro; 25</b>,-</a> <strong>700 callcredits</strong><br />
                - <a href="ideal/ideal50.php"><b>iDeal &euro; 50</b>,-</a> <strong>1500 callcredits</strong><br />
                - <a href="ideal/ideal100.php"><b>iDeal &euro; 100</b>,-</a> <strong>3500 callcredits</strong><br />
       
         </h2>
         </div>
         
             
          
           
           <? } ?>
    
	
    <? if($_GET['p'] == "telefoon") { ?>
	<?
echo $error;
?>
				
						
							<form method="GET">
                            
                            <div class="title_bg"><div class="title">Koop credits met Telefoon</div></div>
                            	<p>
                                	<img style="float: right; margin-left: 20px; margin-right: 20px;" src="images/credits/telefoon.gif" width="100px" height="100px">
									Callcredits kosten in Nederland <span class="Geel">&euro; 0,50</span> per telefoontje.<br />
                                    In Belgie is dit <span class="Geel">&euro; 0,50</span> per minuut, en het telefoontje zal dan ook ongeveer een minuut duren.
                                    <br /><br />
                                    <b>Je betaalt <span style="color: red;">ACTIE!!</span> <strong>0,50<strong> per minuut / belletje.</b>
                                    <br /><br />
                                    Selecteer je land en volg de onderstaande instructies.
                                    <br /><br />
                                </p>
                                
                             <div id="contentHeader2"><h2>Stap 1</h2></div>
                             
                             	<p>

									Kies land voor de betaling:<br />
    <table>
    <tr>
    <td><a href="index.php?a=buycredits&p=telefoon&c=31"></a></td>
    <td><a href="index.php?a=buycredits&p=telefoon&c=31"><b>Nederland</b></a></td>
    <td width="10"> </td>
    <td><a href="index.php?a=buycredits&p=telefoon&c=32"></a></td>
    <td><a href="index.php?a=buycredits&p=telefoon&c=32"><b>Belgi&euml;</b></a></td>
    </tr>
    </table>
    							</p>
                                
                                <div id="contentHeader2"><h2>Stap 2</h2></div>
   								<p>
<?
    require('classes/class.micropayment-mollie.php');

    $m = new micropayment();

    $m->setPartnerID(109921); # Verander dit naar jouw eigen Partner ID te vinden onder de Tab Account bij Mollie
    if (isset($_GET['c']) and is_numeric($_GET['c'])) $m->setCountry($_GET['c']);
    $m->setAmount(0.50); # Hier kun je de prijs per gesprek instellen

    if (isset($_GET['action']) and $_GET['action'] == 'check' and isset($_SESSION['servicenumber']) and isset($_SESSION['paycode']) and $_SESSION['servicenumber'] and $_SESSION['paycode']) {
        /* user posted a paymentcheck, so below we'll check if the servicenumber and the paycode is fully payed */

        $m->setServicenumber($_SESSION['servicenumber']);
        $m->setPaycode($_SESSION['paycode']);
        $m->checkPayment();

        if ($m->payed) {
        mysql_query("UPDATE `users` SET `callcredits`=`callcredits`+'45' WHERE `login`='$data->login'");
		mysql_query("INSERT INTO betalingen (login,type,date) values('$data->login','Credits',NOW())");
		
		echo "<p>Je hebt nu 45 callcredits erbij!</p>
					   
					   ";
			
if($data->vermoord == 1){
mysql_query("UPDATE `users` SET `health`='100',`vermoord`='0' WHERE `login`='$data->login'");
		echo "<p>Je leven is weer naar 100% gebracht!</p>";
}
                       
         }
        else {
            # payment is not (fully) done, send the user back to the payment-screen
echo "<font color=red><b>Betaling is niet afgerond.<br>Zorg er wel voor dat je de goede code intoetst!</b></font><br /><br />";
        }
    }

    if (!$m->payed) {
        /* Below we include the payment-screen, because no payment is received (yet) */
        include('includes/include.paymentscreen.php');
    }
?>
											<!--<center><img src="ajax/loading.gif" align="middle"></center>-->
										</p>
				</form>
                
               
         <? } ?>
		
			 <? if($_GET['p'] == "shop") { ?>
               <div id="contentHeader2"><h2>callcredits shop</h2></div>
				<p>
										Je hebt nu <b><span class="Geel"><?echo $data->callcredits;?></b></span> callcredits, klik <a href="index.php?a=buycredits">hier</a> om het aantal op te laden!
							
						</p>
							<table width="80%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
								<tr bgcolor="#131313">
									<td align="center" width="3%" class="subtable">&nbsp;</td>
									<td class="subtable"><strong>Item</strong></td>
									<td class="subtable" align="center"><strong>Credits</strong></td>
									<td align="center" width="6%" class="subtable"><strong>Koop</strong></td>
								</tr>
	<form method="POST">
																<tr class="top">
									<td align="center" width="6%" class="subtable"><img width="16" src='images/icons_gif/star_big.gif' alt='15 dagen betaald account' border='0'></td>
									<td class="subtable">
										15 dagen betaald account
																				</td>
									<td class="subtable">8 Credits</td>
									<td align="center" width="6%" class="subtable">
<?if($data->callcredits < 8){?>
																					<font class="callshop_kopen_no">&nbsp;Kopen&nbsp;</font>
<?}else{?>				<input type="submit" class="mod_submit" value="&nbsp;Kopen&nbsp;" name="first"><?}?>
																			</td>
								</tr>
																<tr class="top">
									<td align="center" width="6%" class="subtable"><img width="16" src='images/icons_gif/star_big.gif' alt='30 dagen betaald account' border='0'></td>
									<td class="subtable">
										30 dagen betaald account
																				</td>
									<td class="subtable">20 Credits</td>
									<td align="center" width="6%" class="subtable">
<?if($data->callcredits < 20){?>
																					<font class="callshop_kopen_no">&nbsp;Kopen&nbsp;</font>
<?}else{?>				<input type="submit" class="mod_submit" value="&nbsp;Kopen&nbsp;" name="second"><?}?>
																			</td>
								</tr>
																<tr class="top">
									<td align="center" width="6%" class="subtable"><img width="16" src='images/icons_gif/money.gif' alt='Extra geld: &euro; 3.000.000' border='0'></td>
									<td class="subtable">
										Extra geld: € 3.000.000																				</td>
									<td class="subtable">8 Credits</td>
									<td align="center" width="6%" class="subtable">
<?if($data->callcredits < 8){?>
																					<font class="callshop_kopen_no">&nbsp;Kopen&nbsp;</font>
<?}else{?>				<input type="submit" class="mod_submit" value="&nbsp;Kopen&nbsp;" name="third"><?}?>
																			</td>
								</tr>
																<tr class="top">
									<td align="center" width="6%" class="subtable"><img width="16" src='images/icons_gif/money.gif' alt='Extra geld: &euro; 6.000.000' border='0'></td>
									<td class="subtable">
										Extra geld: € 6.000.000																				</td>
									<td class="subtable">15 Credits</td>
									<td align="center" width="6%" class="subtable">
<?if($data->callcredits < 15){?>
																					<font class="callshop_kopen_no">&nbsp;Kopen&nbsp;</font>
<?}else{?>				<input type="submit" class="mod_submit" value="&nbsp;Kopen&nbsp;" name="fourth"><?}?>
																			</td>
								</tr>
																<tr class="top">
									<td align="center" width="6%" class="subtable"><img width="16" src='images/icons_gif/money.gif' alt='5 keer vaker storten bij de bank' border='0'></td>
									<td class="subtable">
										5 keer vaker storten bij de bank																				</td>
									<td class="subtable">4 Credits</td>
									<td align="center" width="6%" class="subtable">
<?if($data->callcredits < 4){?>
																					<font class="callshop_kopen_no">&nbsp;Kopen&nbsp;</font>
<?}else{?>				<input type="submit" class="mod_submit" value="&nbsp;Kopen&nbsp;" name="fifth"><?}?>
																			</td>
								</tr>
																<tr class="top">
									<td align="center" width="6%" class="subtable"><img width="16" src='images/icons_gif/money.gif' alt='15 dagen lang 10% rente' border='0'></td>
									<td class="subtable">
										15 dagen lang 10% rente																				</td>
									<td class="subtable">7 Credits</td>
									<td align="center" width="6%" class="subtable">
<?if($data->callcredits < 7){?>
																					<font class="callshop_kopen_no">&nbsp;Kopen&nbsp;</font>
<?}else{?>				<input type="submit" class="mod_submit" value="&nbsp;Kopen&nbsp;" name="sixth"><?}?>
																			</td>
								</tr>
																<tr class="top">
									<td align="center" width="6%" class="subtable"><img width="16" src='images/icons_gif/shield.gif' alt='24 uur bescherming' border='0'></td>
									<td class="subtable">
										24 uur bescherming																				</td>
									<td class="subtable">9 Credits</td>
									<td align="center" width="6%" class="subtable">
<?if($data->callcredits < 9){?>
																					<font class="callshop_kopen_no">&nbsp;Kopen&nbsp;</font>
<?}else{?>				<input type="submit" class="mod_submit" value="&nbsp;Kopen&nbsp;" name="seventh"><?}?>
																			</td>
								</tr>
																<tr class="top">
									<td align="center" width="6%" class="subtable"><img width="16" src='images/icons_gif/shield.gif' alt='48 uur bescherming' border='0'></td>
									<td class="subtable">
										48 uur bescherming																				</td>
									<td class="subtable">13 Credits</td>
									<td align="center" width="6%" class="subtable">
<?if($data->callcredits < 13){?>
																					<font class="callshop_kopen_no">&nbsp;Kopen&nbsp;</font>
<?}else{?>				<input type="submit" class="mod_submit" value="&nbsp;Kopen&nbsp;" name="eighth"><?}?>
																			</td>
								</tr>
																<tr class="top">
									<td align="center" width="6%" class="subtable"><img width="16" src='images/icons_gif/shield.gif' alt='&euro; 1.000.000, 12 uur bescherming en 1.500 power' border='0'></td>
									<td class="subtable">
										ƒ 1.000.000, 12 uur bescherming en 1500 power																				</td>
									<td class="subtable">8 Credits</td>
									<td align="center" width="6%" class="subtable">
<?if($data->callcredits < 8){?>
																					<font class="callshop_kopen_no">&nbsp;Kopen&nbsp;</font>
<?}else{?>				<input type="submit" class="mod_submit" value="&nbsp;Kopen&nbsp;" name="nineth"><?}?>
																			</td>
								</tr>
																<tr class="top">
									<td align="center" width="6%" class="subtable"><img width="16" src='images/icons_gif/lightning.gif' alt='75000 extra power' border='0'></td>
									<td class="subtable">
										75000 extra power																				</td>
									<td class="subtable">15 Credits</td>
									<td align="center" width="6%" class="subtable">
<?if($data->callcredits < 15){?>
																					<font class="callshop_kopen_no">&nbsp;Kopen&nbsp;</font>
<?}else{?>				<input type="submit" class="mod_submit" value="&nbsp;Kopen&nbsp;" name="tenth"><?}?>
																			</td>
								</tr>
																<tr class="top">
									<td align="center" width="6%" class="subtable"><img width="16" src='images/icons_gif/heart.gif' alt='Volledige gezondheid (100%)' border='0'></td>
									<td class="subtable">
										Volledige gezondheid (100%)																				</td>
									<td class="subtable">28 Credits</td>
									<td align="center" width="6%" class="subtable">
<?if($data->callcredits < 28){?>
																					<font class="callshop_kopen_no">&nbsp;Kopen&nbsp;</font>
<?}else{?>				<input type="submit" class="mod_submit" value="&nbsp;Kopen&nbsp;" name="eleventh"><?}?>
																			</td>
								</tr>
																<tr class="top">
									<td align="center" width="6%" class="subtable"><img width="16" src='images/icons_gif/delete.gif' alt='Secret Link Cleaner' border='0'></td>
									<td class="subtable">
										Secret Link Cleaner																				</td>
									<td class="subtable">7 Credits</td>
									<td align="center" width="6%" class="subtable">
<?if($data->callcredits < 7){?>
																					<font class="callshop_kopen_no">&nbsp;Kopen&nbsp;</font>
<?}else{?>				<input type="submit" class="mod_submit" value="&nbsp;Kopen&nbsp;" name="twelveth"><?}?>
																			</td>
								</tr>
																<tr class="top">
									<td align="center" width="6%" class="subtable"><img width="16" src='images/icons_gif/lightning.gif' alt='60 Killers' border='0'></td>
									<td class="subtable">
										60 Handlangers
																				</td>
									<td class="subtable">13 Credits</td>
									<td align="center" width="6%" class="subtable">
<?if($data->callcredits < 13){?>
																					<font class="callshop_kopen_no">&nbsp;Kopen&nbsp;</font>
<?}else{?>				<input type="submit" class="mod_submit" value="&nbsp;Kopen&nbsp;" name="thirteenth"><?}?>
																			</td>
								</tr>
																<tr class="top">
									<td align="center" width="6%" class="subtable"><img width="16" src='images/icons_gif/brick.gif' alt='Maarliefst 150 attack coins' border='0'></td>
									<td class="subtable">
										Maarliefst 150 attack coins																				</td>
									<td class="subtable">15 Credits</td>
									<td align="center" width="6%" class="subtable">
<?if($data->callcredits < 15){?>
																					<font class="callshop_kopen_no">&nbsp;Kopen&nbsp;</font>
<?}else{?>				<input type="submit" class="mod_submit" value="&nbsp;Kopen&nbsp;" name="zeventien"><?}?>
																			</td>
								</tr>
																<tr class="top">
									<td align="center" width="6%" class="subtable"><img width="16" src='images/icons_gif/status_offline.gif' alt='Extra account' border='0'></td>
									<td class="subtable">
										Extra account
																				</td>
									<td class="subtable">25 Credits</td>
									<td align="center" width="6%" class="subtable">
<?if($data->callcredits < 25){?>
																					<font class="callshop_kopen_no">&nbsp;Kopen&nbsp;</font>
<?}else{?>				<input type="submit" class="mod_submit" value="&nbsp;Kopen&nbsp;" name="fourteenth"><?}?>
																			</td>
								</tr>
</table>															
        </form> 
						</td>
					</tr>
				</table>

  

		
<script language="javascript">



  setTimeout("do_nl()",10000);
  setTimeout("do_be()",11000);

	function do_nl(){
		new Ajax.PeriodicalUpdater('ajax_targetpay', 'http://www.banditi.nl/v3//ajax/targetpay.php?code=615158&country=NL',
	  		{
	    	method: 'get',
	    	frequency: 2,
	    	decay: 1,
	    	onSuccess: function(transport){
				var response = transport.responseText.split("|");
      			if(response[0] == "NL_OK"){
      				document.location.href = 'index.php?a=mod_credit_shop_new&f=done_nl&credits='+response[1];
      			}
    		}

	  		}
	  	);
	}

	function do_be(){
		new Ajax.PeriodicalUpdater('ajax_targetpay', 'http://www.banditi.nl/v3//ajax/targetpay.php?code=615083&country=BE',
	  		{
	    	method: 'get',
	    	frequency: 2,
	    	decay: 1,
	    	onSuccess: function(transport){
				var response = transport.responseText.split("|");
      			if(response[0] == "BE_OK"){
      				document.location.href = 'index.php?a=mod_credit_shop_new&f=done_be&credits='+response[1];
      			}
    		}
	  		}
	  	);
	}
</script>		
	</td>
	</tr>
    
    <? } ?>
    	
     <p><br /><br /><font color="red">* Let op, indien je onder de 16 ben dien je toestemming te hebben van je ouder/verzorger.</font></p>
<!-- End Right Column -->