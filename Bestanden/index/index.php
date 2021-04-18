<?
  include("config.php"); 	
  $dbres                = mysql_query("SELECT `id` FROM `users` WHERE UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(`online`) < 300");
  $online                = mysql_num_rows($dbres);
  $dbres                = mysql_query("SELECT * FROM `users`");
  $registered           = mysql_num_rows($dbres);
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=7"/>
<meta name="XAR jpegs" content="1"/>
<meta name="XAR pngs" content="2"/>
<title>OSBanditi</title>
<meta http-equiv="Content-Type" content="text/html; charset=Windows-1252"/>
<meta name="Generator" content="OSBanditi"/>
<script language="JavaScript" type="text/javascript">
<!--
 function xr_rx(){var ww=document.documentElement.clientWidth;
xr_dx=(ww-parseInt(xr_xr.style.width))/2;var i=-parseInt(xr_xr.style.width)/2;if(xr_dx<0){i-=xr_dx;xr_dx=0;};xr_xr.style.marginLeft=i+"px";document.body.style.backgroundPosition=xr_dx+"px 0px";};
function xr_nn() {return(true);};
window.onresize=xr_rx;
--> </script>
<link rel="stylesheet" type="text/css" href="img/default.css" />
</head>
<body style="">
<!--[if IE]><div class="xr_ap" id="xr_xr" style="width: 1023px; height: 555px; top:0px; left:50%; margin-left: -511px; clip: rect(0px 1023px 555px 0px);"><![endif]-->
<!--[if !IE]>--><div class="xr_ap" id="xr_xr" style="width: 1023px; height: 555px; top:0px; left:50%; margin-left: -511px; clip: rect(0px, 1023px, 555px, 0px);"><!--<![endif]-->
<script type="text/javascript">var xr_xr=document.getElementById("xr_xr")</script>
 <img class="xr_ap" src="img/0.jpg" alt="" style="left: 23px; top: -1px; width: 979px; height: 148px;"/>
 <img class="xr_ap" src="img/0.png" alt="" style="left: 22px; top: 153px; width: 981px; height: 401px;"/>
 <img class="xr_ap" src="img/1.png" alt="" style="left: 0px; top: 138px; width: 1023px; height: 32px;"/>
 <div style="left: 342px; position: absolute; font-size: 32pt; font-family: Arial; text-align: left; font-weight: bold; top: 88px;">
  <div style="">
   <div class="xr_tl" style="left: 0px; top: -39px;">OSBanditi</div>
  </div>
 </div>
 <div style="left: 119px; position: absolute; font-size: 10pt; font-family: Arial; text-align: left; top: 159px;">
  <div style="">
   <div class="xr_tl" style="left: 0px; top: -13px;"><a  href=index.php onClick="javascript:ajaxpage('ajax.php', '');">Link 1</a></div>
  </div>
 </div>
 <div style="left: 336px; position: absolute; font-size: 10pt; font-family: Arial; text-align: left; top: 159px;">
  <div style="">
   <div class="xr_tl" style="left: 0px; top: -13px;"><a  href=index.php onClick="javascript:ajaxpage('ajax.php', '');">Link 2</a></div>
  </div>
 </div>
 <div style="left: 588px; position: absolute; font-size: 13px; font-family: Arial; text-align: left; top: 159px;">
  <div style="">
   <div class="xr_tl" style="left: 0px; top: -13px;"><a  href=index.php onClick="javascript:ajaxpage('ajax.php', '');">Link 3</a></div>
  </div>
 </div>
 <div style="left: 863px; position: absolute; font-size: 13px; font-family: Arial; text-align: left; top: 159px;">
  <div style="">
   <div class="xr_tl" style="left: 0px; top: -13px;"><a  href=index.php onClick="javascript:ajaxpage('ajax.php', '');">Link 4</a></div>
  </div>
 </div>
 <div style="left: 62px; width: 926px; position: absolute; font-size: 10pt; font-family: Arial; text-align: left; top: 189px;">
  <div style="">
   <div class="xr_tl" style="left: 0px; top: -13px;"><h1>Het begin...</h1><br /> Het begon allemaal met een kleine buurtruzie tegen een andere groep.. <br />Dit liep erg uit de hand, leider Erozio vluchtte vanuit Catania naar Corleone. Daar werd hij minder gerespecteerd. Hij richtte daar een nieuwe straatgroep op, <br />OSBanditi. Hij had niet genoeg leden, dus ging hij een website maken, waarop men zich kon aanmelden, en een spelletje spelen, om de machtigste <br />speler van het spel te worden. In dit spel zit je nu. <b><?echo$registered;?></b> mensen zijn al bezig.. Maar JIJ kan je nog aanmelden!!!. Doe dit en help Erozio.</div>
   <div class="xr_tl" style="left: 0px; top: -84px;"><h2><font link="red"><a href="http://osbanditi.twfhosting.nl/v3/register.php">Meld je aan!</a></font></h2></div>
   <div class="xr_tl" style="left: 0px; top: 150px;"><div align="right"><form method="POST" action="http://osbanditi.twfhosting.nl/v3/login.php" onsubmit="return checkError(this);">
<?if(isset($_GET['vakantie'])){?>
										
						<td  style="color:red">
							<b>
								Je account staat op vakantie ingesteld							</b>
<?}if(isset($_GET['error'])){?>
										
						<td  style="color:red">
							<b>
								De ingevulde account gegevens zijn niet correct of je account is nog niet geactiveerd							</b>
<?}?>
<h2>Inloggen</h2>
							Gebruikersnaam:
							<input type="text" name="login" value="" 		onfocus="Tip('Vul hier de gebruikersnaam in die je hebt ingevuld bij je registratie.',FADEIN, 500, FADEOUT, 500, FOLLOWMOUSE, false, FIX, [getX(this,1),getY(this,0)+1], BALLOON, false, ABOVE, false)" onblur="UnTip()">
							Wachtwoord:
							<input type="password" name="pass" value="" 		onfocus="Tip('Vul hier het wachtwoord in dat je hebt ingevuld bij je registratie.',FADEIN, 500, FADEOUT, 500, FOLLOWMOUSE, false, FIX, [getX(this,1),getY(this,0)+1], BALLOON, false, ABOVE, false)" onblur="UnTip()">
<input type="submit" name="inloggen" value=" Inloggen " class="mod_submit">
			</form>
   </div>
</div>
 </div>
 <div style="left: 400px; position: absolute; font-size: 10pt; font-family: Arial; text-align: left; top: 530px;">
  <div style="">
   <div class="xr_tl" style="left: 0px; top: -13px;">Copy &#169; http://sitenaam.nl 2009 - 2010</div>
  </div>
 </div>
</div>
<!--[if lt IE 7]><script type="text/javascript" src="img/png.js"></script><![endif]-->
<script type="text/javascript">xr_rx()</script>
</body>
</html>