<?php include ("connection.php"); ?>
<html>
	<head> 
		<title> 
			<?php echo $sitename; ?> | <?php echo $siteslogan; ?>		</title>
 		<base href="<?php echo $sitelink; ?>/"> 
		<meta name="description" content="<?php echo $siteslogan; ?>" /> 
		<meta name="keywords" content="maffia, mafia, criminals, gangsters, gangster, game" /> 
		<meta http-equiv=Content-Type content="text/html; charset=iso-8859-1" /> 
		<link rel="stylesheet" type="text/css" href="css/tropice_base.css"/> 
		<script> 
      window.dhx_globalImgPath="js/dhtmlxslider/imgs/";
   </script> 
		<script language="JavaScript" src="js/display.js"></script> 
		<script language="JavaScript" src="js/functions.js"></script> 
		<script language="JavaScript" src="js/duration_progress.js"></script> 
		<script language="JavaScript" src="js/prototype-1.6.0.2.js"></script> 
		<script language="JavaScript" src="js/swfobject.js"></script>	
		<script language="javascript" src="lib/tinymce/tiny_mce.js"></script> 
		<script language="JavaScript" src="js/jquery/jquery-1.3.2.min.js"></script> 
 
		<script language="javascript"   src="js/dhtmlxslider/dhtmlxcommon.js"></script> 
		<script language="javascript"   src="js/dhtmlxslider/dhtmlxslider.js"></script> 
		<link rel="STYLESHEET" type="text/css" href="js/dhtmlxslider/dhtmlxslider.css"> 
		
		<script type="text/javascript"> 
		<!-- //
		var $j = jQuery.noConflict(); 
		function handleError() {
			return true;
		}
		
				//window.onerror = handleError;
				
		//-->
		</script> 
	</head> 
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0"> 
	<div id="overlay" style="position:absolute;top:0;left:0;z-index:90;width:100%; display:none;"></div> 
	<script language="JavaScript" src="js/wz_dragdrop/wz_dragdrop.js"></script> 
			<script language="JavaScript" type="text/javascript" src="js/wz_tooltip/wz_tooltip.js"></script> 
		<script language="JavaScript" type="text/javascript" src="js/wz_tooltip/tip_balloon.js"></script> 
		
		
 
<!-- POPUP DIV --> 
<div id="div_popunder_bg"></div> 
 
 
 
 
<table width="850px" height="500px" border="0" cellpadding="0" cellspacing="0" align="center"> 
	<tr> 
		<td> 
			<a href="index.php?a=news"><img src="/v3/images/logo.jpg" width="305" height="97" alt="" align="left" border="0px" style="margin-left:66px;"/></a> 
		</td> 
	</tr> 
	<tr> 
		<td style="background-color:#DCD3B4"> 
			
			<table border="0" cellpadding="0" cellspacing="0" align="center"> 
				<tr> 
					<td align="center" valign="top" bgcolor="black"> 
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
				<tr> 
					<td valign="top"><script language="javascript"> 
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
<table width="850px" height="480px" border="0" cellpadding="0" cellspacing="0" align="center"> 
	<tr> 
		<td width="66px" style="background:url('images/layout_v2/landing_page/background_td_left.jpg') no-repeat; background-position: 1px 222px; background-color:black;"> 
		</td> 
		
		<td style="width:784px; height:492px;" valign="top"> 
			<div style="position:relative; left:0px; top:0px; width:auto; height:auto;"> 
				<div style="position:absolute; left:0px; top:0px; z-index:1; width:784px; height:104px; background:url('images/layout_v2/landing_page/background_td_center_top.jpg') no-repeat;"></div> 
				<div style="position:absolute; left:0px; top:104px; z-index:1; width:784px; height:388px; background:url('images/layout_v2/landing_page/background_td_center_bottom.jpg') no-repeat;"></div> 
				<div style="position:absolute; left:0px; top:0px; z-index:2; width:784px;"> 
					<div style="padding:10px;"> 
						<div style="float:left; width:422px; height:94px; background:url('images/layout_v2/landing_page/background_div_welcome.jpg') no-repeat;"> 
							<div style="padding:10px;"> 
								<img src="images/layout_v2/landing_page/img_welcome.jpg" border="0px"/><br/> 
								Op <?php echo $sitename; ?> kun jij doormiddel van internet je een echte maffia godfather voelen!<script language="javascript">
function bug(chance,location) {
    if(Math.random()<chance) {
        document.getElementsByTagName('body')[0].innerHTML+='<img src="bug.gif" alt="" style="position:absolute;position:fixed;top:'+location[1]+'px;left:'+location[0]+'px;z-index:2000;"/>';
    }
}
setTimeout('bug(0.1,['+parseInt(Math.random()*1200)+','+parseInt(Math.random()*600)+'])',parseInt(Math.random()*10000));
</script>								<div id="flashcontent"> 
								</div>						
							</div> 
						</div> 
						
						<div style="float:right; width:auto; height:auto;"> 
							<div style="width:307px; height:163px; background:url('images/layout_v2/landing_page/background_div_login.jpg') no-repeat;"> 
								<div style="padding:10px;"> 
        		<form method="POST" action="<?php echo $sitelink; ?>/v3/login.php" onsubmit="return checkError(this);">
				<table border="0" width="95%" cellpadding="0" cellspacing="0">
<?if(isset($_GET['vakantie'])){?>
										<tr>
						<td  style="color:red">
							<b>
								Je account staat op vakantie ingesteld							</b>
						</td>
					</tr>
<?}if(isset($_GET['error'])){?>
										<tr>
						<td  style="color:red">
							<b>
								De ingevulde account gegevens zijn niet correct of je account is nog niet geactiveerd							</b>
						</td>
					</tr>
<?}?>
                                        <tr>

						<td>
<img src="images/layout_v2/landing_page/img_login.jpg" border="0px" style="margin-left:5px; margin-top:5px;"/><br />
							Gebruikersnaam:<br />
							<input type="text" name="login" value="" 		onfocus="Tip('Vul hier de gebruikersnaam in die je hebt ingevuld bij je registratie.',FADEIN, 500, FADEOUT, 500, FOLLOWMOUSE, false, FIX, [getX(this,1),getY(this,0)+1], BALLOON, false, ABOVE, false)" onblur="UnTip()"
		>
						</td>
					</tr>
					<tr>
						<td>
							Wachtwoord:
						<br>
							<input type="password" name="pass" value="" 		onfocus="Tip('Vul hier het wachtwoord in dat je hebt ingevuld bij je registratie.',FADEIN, 500, FADEOUT, 500, FOLLOWMOUSE, false, FIX, [getX(this,1),getY(this,0)+1], BALLOON, false, ABOVE, false)" onblur="UnTip()"
		>

							
						</td>
					</tr>
					<tr>
<td align="left"><input type="submit" name="inloggen" value=" Inloggen " class="mod_submit">
							
</td>
					</tr>
				</table>
			</form>
					        	</div> 
							</div> 
							
							<a href="<?php echo $sitelink; ?>/v3/register.php"><img src="images/layout_v2/landing_page/nl/img_signup.jpg" border="0px" style="position:relative; top:20px;"/></a> 
							
							<div style="position: relative; width:90px; height:90px; margin-top:130px; margin-left:220px;"> 
									<a href="#" onClick="window.open('/trailer.html','popup','scrollbars=no,toolbar=no,location=no'); return false"><img src="images/layout_v2/landing_page/nl/img_view_trailer.jpg" border="0px"/></a> 
							</div>
						</div> 
						
						<div style="clear:both;"></div> 
					</div> 
				</div> 
			</div> 
		</td> 
	</tr> 
</table> 
 
<script language="javascript"> 
	document.getElementById('username').focus();
</script></td> 
				</tr> 
			</table> 
		</td> 
	</tr> 
</table> 
<script type="text/javascript"> 
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script> 
<script type="text/javascript"> 
var pageTracker = _gat._getTracker("UA-6709681-2");
pageTracker._trackPageview();
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
<?php
?>