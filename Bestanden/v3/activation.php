<?
  include("config.php");
?>
<html>
	<head>
		<title>
			<?php echo $sitename; ?> |  <?php echo $siteslogan; ?>
		</title>
		<base href="/v3/" />
		<meta name="description" content="$siteslogan" />
		<meta name="keywords" content="maffia, mafia, criminals, gangsters, gangster, game" />
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />	
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		
		<script language="JavaScript" src="js/display.js"></script>
		<script language="JavaScript" src="js/functions.js"></script>
		<script language="JavaScript" src="ajax/prototype-1.6.0.2.js"></script>
		<script language="JavaScript" src="js/duration_progress.js"></script>
		<script language="javascript" type="text/javascript" src="http://www.$sitename/v3/lib/tinymce/tiny_mce.js"></script>
		
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

		
				</td>
	</tr>
<?
$login = $_GET['login'];
$userselect					= mysql_query("SELECT * FROM `users` WHERE `login`='$login'");
$user = mysql_fetch_object($userselect);
if(isset($_GET['login'])){
if($_GET['login'] == $user->login){
if(isset($_GET['code'])){
if($_GET['code'] == $user->activationcode){
$login = $_GET['login'];
mysql_query("UPDATE `users` SET `activationcode`='0' WHERE `login`='$login'");
      print <<<ENDHTML
	<tr>
		<td bgcolor="#e2dacf" height="456" valign="top"><table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup" align="center">
				<tr>
					<td>
						Gefeliciteerd! Je account is bevestigd en je kan nu gebruik maken van alle onderdelen van het spel. Over enkele ogenblikken zal je automatisch naar de inlog pagina worden gestuurd					</td>
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
ENDHTML;
}
}
}
}
if($_GET['code'] != $user->activationcode || $_GET['login'] != $user->login){
print <<<ENDHTML
	<tr>
		<td bgcolor="#e2dacf" height="456" valign="top"><table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Kan je account niet bevestigen, probeer het later nog een keer					</td>
				</tr>
				<tr>
					<td>
						<br><br>
													<a href="#" onclick="history.go(-1); return false" class="error_ok">OK</a>
											</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
</td>
	</tr>
}
	<tr>
		<td>
			<img src="images/layout/pre/bottom.jpg" width="781" height="39" alt="">
		</td>
	</tr>
</table>
ENDHTML;
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
