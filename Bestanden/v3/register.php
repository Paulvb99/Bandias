<?
  include("config.php");
?>
<html>
	<head>
		<title>
			<?php echo $sitename; ?>  |  <?php echo $siteslogan; ?>
		</title>
		<base href="<?echo$sitelink;?>/v3/" />
		<meta name="description" content="$siteslogan" />
		<meta name="keywords" content="maffia, mafia, criminals, gangsters, gangster, game" />
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />	
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		
		<script language="JavaScript" src="js/display.js"></script>
		<script language="JavaScript" src="js/functions.js"></script>
		<script language="JavaScript" src="ajax/prototype-1.6.0.2.js"></script>
		<script language="JavaScript" src="js/duration_progress.js"></script>
		<script language="javascript" type="text/javascript" src="http://www.banditi.nl/v3/lib/tinymce/tiny_mce.js"></script>
		
	</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
			<script language="JavaScript" type="text/javascript" src="js/wz_tooltip/wz_tooltip.js"></script>
		<script language="JavaScript" type="text/javascript" src="js/wz_tooltip/tip_balloon.js"></script>
<?
  $activation = rand(0,0);
  $login					= $_POST['username'];
  $pass                                                = $_POST['password'];
  $passconfirm                                        = $_POST['password_check'];
  $email					= $_POST['email'];
  $recruiter					= $rec;
  $IP						= $_SERVER['REMOTE_ADDR'];
$regip1 = mysql_query("SELECT * FROM `registered_ip` WHERE `ip`='$IP'");
$regip2 = mysql_query("SELECT * FROM `registered_ip` WHERE `ip`='$IP' AND `max`<'1'");
  if(isset($_GET['x'])){
if($_GET['x'] == save){
if(isset($_POST['aanmelden'])){
if(mysql_num_rows($regip2) < 1){
$userselect					= mysql_query("SELECT * FROM `users` WHERE `login`='$login'");
$user = mysql_num_rows($userselect);
if($user->email != $email){
if($user < 1){
if (isset($_POST['condition'])){

$ignore = 1;




        mysql_query("UPDATE `[users]` SET `recruits`=`recruits`+'1' WHERE `login`='{$recruiter}'");
        mysql_query("UPDATE `[users]` SET `cash`=`cash`+'100000' WHERE `login`='{$recruiter}'");
if($rec != "") {
        mysql_query("INSERT INTO `[messages]`(`time`,`from`,`to`,`subject`,`message`,`outbox`) values(NOW(),'$page->sitetitle','$recruiter','Referal','Je hebt een lid laten aanmelden op $page->sitetitle! je hebt &euro;100.000 contant geld van $page->sitetitle gekregen!','0')");
}
if(mysql_num_rows($regip1) < 1){
        mysql_query("INSERT INTO `registered_ip` (ip) values('$IP')");
}
        mysql_query("INSERT INTO `users`(signup,login,pass,IP,email,activationcode) values(NOW(),'$login',MD5('$pass'),'$IP','$email',$activation)");
        mysql_query("UPDATE `registered_ip` SET `max`=`max`-'1' WHERE `ip`='$IP' AND `max`>'0'");


        $id					= mysql_insert_id();
$userselect					= mysql_query("SELECT * FROM `users` WHERE `login`='{$login}'");
$user = mysql_fetch_object($userselect);
        mail($email,"$sitename - Account","

Beste $login

Hieronder staan uw login-gegevens vermeld.
Login        = $login
E-mail adres = $email
Wachtwoord   = $pass
U kunt inloggen op $sitelink

Wij wensen je veel succes in het spel!



Met vriendelijke groet,
Het  $sitename Team.","From: $sitename <info@$sitelink>");
      }
}
}
}
}
}
}
		
		

//POPUP DIV
      print <<<ENDHTML
<div id="div_popunder_bg"></div>


<table width="782" border="0" cellpadding="0" cellspacing="0" align="center">
	<tr>
		<td align="center" valign="middle">
			<a href="../index.php"><img src="images/logo.jpg" alt="" align="left"></a>
					<div id="js_error"  style="width:500px; background:url(images/js_error/bg.gif) repeat-y; margin-top:10px; display:none; margin-left:2px;margin-right:2px;">
			<table cellpadding="0" cellspacing="0" border="0" align="center" width="500" style="border:2px solid #467cba">
				<tr>
					<td width="40px" align="center" valign="top" style="padding-top:5px"  bgcolor="#70130e">
						<img src="images/js_error/exl.gif">
					</td>
					<td width="456px" bgcolor="#70130e">
						<div id="text_shop" style="display:block; line-height:135%; font-size:12px; font-weight:bold">
					    	<font color='white' id="js_error_msg">

					    	</font>
						</div>
					</td>
				</tr>
			</table>

		</div>

		<script language="javascript">
			function showError(pMessage){
				document.getElementById('js_error_msg').innerHTML = pMessage;
				document.getElementById('js_error').style.display = 'block';
				document.getElementById('js_error').focus();

				setTimeout("opacity('js_error',100,0,1000)",2500);
				setTimeout("document.getElementById('js_error').style.display = 'none'; opacity('js_error',0,100,1)",3500);
			}
		</script>
ENDHTML;
if($ignore == 0){
      print <<<ENDHTML


				</td>
	</tr>
	<tr>
		<td bgcolor="#e2dacf" height="456" valign="top">		<div id="js_error"  style="width:600px; background:url(images/js_error/bg.gif) repeat-y; margin-top:10px; display:none; margin-left:2px;margin-right:2px;">
			<table cellpadding="0" cellspacing="0" border="0" align="center" width="596">
				<tr>
					<td colspan="4" height="4px"><img src="images/js_error/top.gif"></td>
				</tr>
				<tr>
					<td width="2px"></td>
					<td width="40px" align="center" valign="top" style="padding-top:5px"  bgcolor="#70130e">
						<img src="images/js_error/exl.gif">
					</td>
					<td width="556px" bgcolor="#70130e">
						<div id="text_shop" style="display:block; line-height:135%; font-size:12px; font-weight:bold">
					    	<font color='white' id="js_error_msg">

					    	</font>
						</div>
					</td>
					<td width="2px"></td>
				</tr>
				<tr>
					<td colspan="4" height="13px"><img src="images/js_error/bottom.gif"></td>
				</tr>
			</table>

		</div>

		<script language="javascript">
			function showError(pMessage){
				document.getElementById('js_error_msg').innerHTML = pMessage;
				document.getElementById('js_error').style.display = 'block';
				document.getElementById('js_error').focus();

				setTimeout("opacity('js_error',100,0,1000)",2500);
				setTimeout("document.getElementById('js_error').style.display = 'none'; opacity('js_error',0,100,1)",3500);
			}
		</script>
ENDHTML;
}
if($ignore == 1){
      print <<<ENDHTML

				</td>
	</tr>
	<tr>
		<td bgcolor="#e2dacf" height="456" valign="top"><table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup" align="center">
				<tr>
					<td>
						Je kunt nu inloggen op $sitename, wij wensen je veel speel plezier!					</td>
				</tr>
				<tr>
					<td>
						<br><br>
							<a href="$sitelink/index.php" class="msg_ok">Klik hier indien je niet automatisch verder gaat.</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<script language="javascript">
	setTimeout("document.location.href='$sitelink/index.php'",(3000*2));
</script>
</td>
	</tr>
	<tr>
		<td>
			<img src="images/layout/pre/bottom.jpg" width="781" height="39" alt="">
		</td>
	</tr>
</table>
ENDHTML;
}
if($ignore == 0){
      print <<<ENDHTML



<table width="100%" height="100%" cellpadding="0" cellspacing="0" border="0">
	<tr>
		<td bgcolor="#e2dacf" colspan="2">
			<img src="images/layout/pre/top.jpg" width="781" height="46" alt="">
		</td>
	</tr>
	<tr>
		<td valign="top" align="right">
			<table cellspacing="0" cellpadding="0" border="0">
				<tr>
					<td><img src="images/layout/pre/h2_aanmelden.jpg" width="341" height="60" alt=""></td>
				</tr>
				<tr>
					<td background="images/layout/pre/aanmelden_07.jpg" width="341" height="226"  valign="top">
						<form method="POST" action="$sitelink/v3/register.php?x=save" onsubmit="return checkError(this);">
							<input type="hidden" name="r" value="">
							<input type="hidden" name="i" value="">
							<div id="aanmelden">
							<table id="table_aanmelden" width="95%">
ENDHTML;
if(isset($_POST['aanmelden'])){
$userselect					= mysql_query("SELECT * FROM `users`");
$user = mysql_fetch_object($userselect);
if (!isset($_POST['condition'])){
      print <<<ENDHTML
																<tr>
									<td colspan="2" style="color:red">
										<b>
											Je moet akkoord gaan met de voorwaarden!<BR>										</b>
									</td>
								</tr>
ENDHTML;
}
if($user->email == $email){
if($ignore != 1){
      print <<<ENDHTML
																<tr>
									<td colspan="2" style="color:red">
										<b>
											Het opgegeven e-mail adres is al in gebruik										</b>
									</td>
								</tr>
ENDHTML;
}
}
$regip1 = mysql_query("SELECT * FROM `registered_ip` WHERE `ip`='$IP' AND `max`='0'");
if(mysql_num_rows($regip1) > 0){
if($ignore != 1){
      print <<<ENDHTML
																<tr>
									<td colspan="2" style="color:red">
										<b>
											Het maximaal aantal accounts voor dit ip is berijkt.										</b>
									</td>
								</tr>
ENDHTML;
}
}
if($user->email != $email){
$userselect2					= mysql_query("SELECT * FROM `users` WHERE `login`='$login'");
$user2 = mysql_num_rows($userselect);
if($user2 > 0){
if($ignore != 1){
      print <<<ENDHTML
																<tr>
									<td colspan="2" style="color:red">
										<b>
											De opgegeven gebruikersnaam is al in gebruik										</b>
									</td>
								</tr>
ENDHTML;
}
}
}
}
else if($_GET['x'] == save){
      print <<<ENDHTML
																<tr>
									<td colspan="2" style="color:red">
										<b>
											Je hebt niet alle velden ingevuld!										</b>
									</td>
								</tr>
ENDHTML;
}
      print <<<ENDHTML
								<tr>
									<td>Gebruikersnaam</td>
									<td align="right">
									<input type="text" name="username" value="" onfocus="Tip('Vul hier de gewenste gebruikersnaam in, waarmee je straks ook gaat inloggen op het spel.',FADEIN, 500, FADEOUT, 500, FOLLOWMOUSE, false, FIX, [getX(this,1),getY(this,0)+1], BALLOON, false, ABOVE, false)" onblur="UnTip()"><br/>
									</td>

								</tr>
								<tr>
									<td>Wachtwoord</td>
									<td align="right">
										<input type="password" name="password" value="$pass" onfocus="Tip('Vul hier het wachtwoord in dat je wil gebruiken om in te loggen. Hierbij zijn alleen letters en cijfers toegestaan en hij dient tussen de 5 en 25 karakters lang te zijn.',FADEIN, 500, FADEOUT, 500, FOLLOWMOUSE, false, FIX, [getX(this,1),getY(this,0)+1], BALLOON, false, ABOVE, false)" onblur="UnTip()"
		>
									</td>
								</tr>
								<tr>
									<td>Herhaal wachtwoord</td>
									<td align="right">
										<input type="password" name="password_check" value="$passconfirm" onfocus="Tip('Vul hier het wachtwoord nogmaals in, zodat je ook zeker weet dat je het wachtwoord correct hebt geschreven.',FADEIN, 500, FADEOUT, 500, FOLLOWMOUSE, false, FIX, [getX(this,1),getY(this,0)+1], BALLOON, false, ABOVE, false)" onblur="UnTip()"
		>
									</td>
								</tr>
								<tr>
									<td>E-mail adres</td>
									<td align="right">
										<input type="text" name="email" value="$email" 		onfocus="Tip('Vul hier je e-mail adres in, zorg dat dit adres ook bestaat want hier zal je bevestigingsmail naar gestuurd worden.',FADEIN, 500, FADEOUT, 500, FOLLOWMOUSE, false, FIX, [getX(this,1),getY(this,0)+1], BALLOON, false, ABOVE, false)" onblur="UnTip()"
		>

									</td>
								</tr>
								<tr>
									<td colspan="2">
										<div id="voorwaarden"><input name="condition" value="1" type="checkbox">Ik ga akkoord met de <a class="aanmelden" href="#" onclick="window.open('http://www.banditi.nl/v3/voorwaarden.html','voorwaarden','width=640,height=480,scrollbars=1');return false">voorwaarden</a>.									</td>
								</tr>
								<tr>
									<td colspan="2" align="right">
										<input type="submit" name="aanmelden" value="Aanmelden">
									</td>
								</tr>
							</table>
							</div>
						</form>
					</td>
				</tr>
			</table>
		</td>
		<td align="right" valign="bottom"><img src="images/layout/pre/illustratie.jpg"></td>
	</tr>
</table>
ENDHTML;
?>



<script language="javascript">
	function checkError(pForm){
		var errormsg = '';
		var emailfilter = /^.+@.+\..{2,4}$/;
		var validcharfilter = /^[a-zA-Z0-9]{3,25}$/;

		
		if(pForm.username.value == '') errormsg += '- Er is geen gebruikersnaam ingevuld!<br>';
		if(pForm.password.value == '') errormsg += '- Er is geen wachtwoord ingevuld!<br>';
		if(pForm.password_check.value == '') errormsg += '- Er is geen tweede wachtwoord ingevuld!<br>';
		if(pForm.email.value == '') errormsg += '- Er is geen e-mail adres ingevuld!<br>';
		
		if(errormsg == ''){
			if(pForm.password.value != pForm.password_check.value)errormsg += '- De wachtwoorden komen niet overeen!<br>';
			if(!emailfilter.test(pForm.email.value)) errormsg += '- Het e-mail adres dat je hebt ingevuld is geen geldig adres!<br>';
		}
		
		if(errormsg == ''){
			if(!validcharfilter.test(pForm.username.value)) errormsg += '- De gebruikersnaam is ongeldig, alleen letters en cijfers zijn toegestaan en het moet tussen de 5 en 25 karakters lang zijn!<br>';
			if(!validcharfilter.test(pForm.password.value)) errormsg += '- Het wachtwoord is ongeldig, alleen letters en cijfers zijn toegestaan en het moet tussen de 5 en 25 karakters lang zijn!<br>';
		}
		
		if(errormsg != ''){
			showError(errormsg);
			return false;
		}
		return true;
	}
</script></td>
	</tr>
	<tr>
		<td>
			<img src="images/layout/pre/bottom.jpg" width="781" height="39" alt="">
		</td>
	</tr>
</table>
<?
}
?>

<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-1235395-15";
urchinTracker();
</script>		<!-- TinyMCE -->
		
		<script type="text/javascript" language="javascript">

			tinyMCE.init({
				// General options
				mode : "exact",
				theme : "advanced",
				elements : "wysiwyg",
				width: "100%",
				height: "250",
				//plugins : "safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups,imagemanager,filemanager",
				plugins : "emotions,fullscreen",
		
				// Theme options

				
				theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,fontsizeselect,|,forecolor,backcolor,|,emotions,fullscreen,image",
				theme_advanced_buttons2 : "",
				theme_advanced_buttons3 : "",
				theme_advanced_buttons4 : ""

			});
		</script>
		<!-- /TinyMCE -->
</body>
</html>
