<?
  include("config.php");
$username = $_POST['username'];
$user1 = mysql_query("SELECT * FROM `users` WHERE `login`='$username'");
$user = mysql_fetch_object($user1);
if($user->email != $_POST['email']){
$nicepost = 0;
}
else{
$nicepost = 1;
}
if(!isset($_POST['sturen'])){
$nicepost = 0;
}
?>
<html>
	<head>
		<title>
			OSBanditi - Wachtwoord opvragen
		</title>
		<base href="<?=$sitelink?>/v3/" />
		<meta name="description" content="Stap in de wereld van de maffia!" />
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
		
		

<!-- POPUP DIV -->
<div id="div_popunder_bg"></div>


<table width="782" border="0" cellpadding="0" cellspacing="0" align="center">
	<tr>
		<td align="center" valign="middle">
			<img src="images/layout/pre/logo.jpg" width="205" height="97" alt="" align="left">
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
        	<tr>
        <td bgcolor="#e2dacf" height="456" valign="top"><table width="100%">
        	</tr>
<?
if($nicepost == 1){
$username = $_POST['username'];
$user1 = mysql_query("SELECT * FROM `users` WHERE `login`='$username'");
$user = mysql_fetch_object($user1);
if($user->email == $_POST['email']){
      print <<<ENDHTML
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup" align="center">
				<tr>
					<td>
						Het nieuwe wachtwoord is naar het opgegeven e-mail adres verstuurd.					</td>
				</tr>
				<tr>
					<td>
						<br><br>
							<a href="index.php" class="msg_ok">Klik hier indien je niet automatisch verder gaat.</a>
					</td>
				</tr>
			</table>
		</td>
</table>

<script language="javascript">
	setTimeout("document.location.href='index.php'",(3000*2));
</script>
</td>
	</tr>

		
				</td>
	</tr>
ENDHTML;
}
}
if($nicepost == 0){
      print <<<ENDHTML
	<tr>
		<td bgcolor="#e2dacf" height="456" valign="top">




<script language="javascript">
	function checkError(pForm){
		var errormsg = '';
		
		if(pForm.username.value == '') errormsg += 'Er is geen gebruikersnaam ingevuld!<br>';
		if(pForm.password.value == '') errormsg += 'Er is geen wachtwoord ingevuld!<br>';
		
		if(errormsg != ''){
			showError(errormsg);
			return false;
		}
		return true;
	}
</script>
ENDHTML;
}
if($nicepost == 1){
$username = $_POST['username'];
$user1 = mysql_query("SELECT * FROM `users` WHERE `login`='$username'");
$user = mysql_fetch_object($user1);
if($user->email == $_POST['email']){
$newpass = rand(10000,99999);
$naam = $_POST['username'];
mysql_query("UPDATE `users` SET `pass`=MD5('$newpass'), `passdecoded`='$newpass' WHERE `login`='$naam'");
        mail($_POST['email'],"Je nieuwe wachtwoord voor $page->sitetitle","
Beste $naam,

We hebben zojuist een verzoek ontvangen voor een nieuw wachtwoord. Het nieuwe wachtwoord is:

$newpass

Je kan inloggen op: http://osbanditi.twfhosting.nl

Met dit nieuwe wachtwoord kan je weer op je account inloggen.

Met vriendelijke groet
Team OSBanditi","From: 'OSBanditi systeem' <osbanditi@twfhosting.nl>");
}
}
if($nicepost == 0){
      print <<<ENDHTML

<table width="782"  border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="6"><img src="images/layout/pre/top_login.gif"></td>
		<td><img src="images/layout/pre/spacer.gif" width="1" height="1" alt=""></td>
	</tr>
	<tr>
		<td rowspan="5">
			<img src="images/layout/pre/index_02.jpg" width="10" height="379" alt=""></td>
		<td colspan="2" background="images/layout/pre/nieuws.jpg" width="366" height="172" valign="top" align="center" >
		<div style="position:relative; top:-16px;  width:356px; font-size:13px; font-weight:bold">OSBanditi is een online maffia spel waarin jij de Godfather van de onderwerld kunt worden!</div>

		<form method="POST">
			<table>
ENDHTML;
if($user->email != $_POST['email']){
      print <<<ENDHTML
                                <tr>
					<td colspan="2" style="color:red">
						<b>
							Kan het wachtwoord niet bijwerken						</b>
					</td>
				</tr>
ENDHTML;
}
      print <<<ENDHTML
								<tr>
					<td>Gebruikersnaam</td>
					<td>
						<input type="text" name="username" value="" size="15">
					</td>
				</tr>
				<tr>
					<td>E-mail adres</td>
					<td>
						<input type="text" name="email" value="" size="15">
					</td>
				</tr>
				<tr>
					<td colspan="2" align="right">
						<input type="submit" name="sturen" value="Nieuw wachtwoord">
					</td>
				</tr>
			</table>
		</form>
		

		</td>
  <td colspan="2" rowspan="3">
			<img src="images/layout/pre/index_04.jpg" width="227" height="278" alt=""></td>
		<td rowspan="2" background="images/layout/pre/inloggen.jpg" width="178" height="231" valign="top" id="inloggen">
        		
		
        </td>
		<td>
			<img src="images/layout/pre/spacer.gif" width="1" height="172" alt=""></td>
	</tr>
	<tr>
		<td colspan="2" rowspan="2">

			<img src="images/layout/pre/index_06.jpg" width="366" height="106" alt=""></td>
		<td>
			<img src="images/layout/pre/spacer.gif" width="1" height="59" alt=""></td>
	</tr>
	<tr>
		<td rowspan="3">
			<img src="images/layout/pre/index_07.jpg" width="178" height="148" alt=""></td>
		<td>
			<img src="images/layout/pre/spacer.gif" width="1" height="47" alt=""></td>

	</tr>
	<tr>
		<td rowspan="2">
			<img src="images/layout/pre/index_08.jpg" width="116" height="101" alt=""></td>
		<td colspan="2">
			<a href="register.php"><img src="images/layout/pre/btn_aanmelden.jpg" width="352" height="77" border="0"></a></td>
		<td rowspan="2">
			<img src="images/layout/pre/index_10.jpg" width="125" height="101" alt=""></td>
		<td>

			<img src="images/layout/pre/spacer.gif" width="1" height="77" alt=""></td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="images/layout/pre/index_11.jpg" width="352" height="24" alt=""></td>
		<td>
			<img src="images/layout/pre/spacer.gif" width="1" height="24" alt=""></td>
	</tr>

	<tr>
		<td>
			<img src="images/layout/pre/spacer.gif" width="10" height="1" alt=""></td>
		<td>

			<img src="images/layout/pre/spacer.gif" width="116" height="1" alt=""></td>
		<td>
			<img src="images/layout/pre/spacer.gif" width="250" height="1" alt=""></td>
		<td>
			<img src="images/layout/pre/spacer.gif" width="102" height="1" alt=""></td>
		<td>
			<img src="images/layout/pre/spacer.gif" width="125" height="1" alt=""></td>
		<td>
			<img src="images/layout/pre/spacer.gif" width="178" height="1" alt=""></td>

		<td></td>
	</tr>
</table>
</td>
	</tr>
ENDHTML;
}
?>
	<tr>
		<td>
			<img src="images/layout/pre/bottom.jpg" width="781" height="39" alt="">
		</td>
	</tr>
</table>


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
