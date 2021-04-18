<?
include("config.php");
if($data->admin == "1" && isset($data->login) && isset($_SESSION['login'])){
mysql_query("INSERT INTO `adminpanel` (`time`,`ip`,`login`) VALUES (NOW(),'$_SERVER[REMOTE_ADDR]','$data->login')");

$select = mysql_query("SELECT id FROM `emails` WHERE `login`='$data->login'");
$hoeveel = mysql_num_rows($select);

if($hoeveel == "0") {
$hoeveel1 = 0;
}

if($hoeveel == "4") {
$a = "USED2";
$a1 = "USED2";
$a2 = "USED2";
$a3 = "USED2";
$a4 = "USED2";
$a5 = "USED2";
$a6 = "USED2";
$a7 = "USED2";
$a8 = "USED2";
$a9 = "USED2";
$a10 = "USED2";
$a11 = "USED2";
$a12 = "USED2";
$a13 = "USED2";
$a14 = "USED2";
$a15 = "USED2";
$a16 = "USED2";
$a17 = "USED2";
$a18 = "USED2";
$a19 = "USED2";
$a20 = "USED2";
$a21 = "USED2";
$a22 = "USED2";
$a23 = "USED2";
$a24 = "USED2";
$a25 = "USED2";
$a26 = "USED2";
$a27 = "USED2";
$a28 = "USED2";
$a29 = "USED2";
$a30 = "USED2";
$a31 = "USED2";
$a32 = "USED2";
$a33 = "USED2";
$a34 = "USED2";
$a35 = "USED2";
$a36 = "USED2";
$a37 = "USED2";
$a38 = "USED2";
$a39 = "USED2";
$a40 = "USED2";
$hoeveel1 = 100;
} else {
if($hoeveel == "1" OR $hoeveel == "2" OR $hoeveel == "3" OR $hoeveel == "4") {
$a = "USED";
$a1 = "USED";
$a2 = "USED";
$a3 = "USED";
$a4 = "USED";
$a5 = "USED";
$a6 = "USED";
$a7 = "USED";
$a8 = "USED";
$a9 = "USED";
$a10 = "USED";
$hoeveel1 = 25;
} else if($hoeveel == "0") {
$a = "FREE";
$a1 = "FREE";
$a2 = "FREE";
$a3 = "FREE";
$a4 = "FREE";
$a5 = "FREE";
$a6 = "FREE";
$a7 = "FREE";
$a8 = "FREE";
$a9 = "FREE";
$a10 = "FREE";
}

if($hoeveel == "2" OR $hoeveel == "3" OR $hoeveel == "4") {
$a11 = "USED";
$a12 = "USED";
$a13 = "USED";
$a14 = "USED";
$a15 = "USED";
$a16 = "USED";
$a17 = "USED";
$a18 = "USED";
$a19 = "USED";
$a20 = "USED";
$hoeveel1 = 50;
} else if($hoeveel == "0" OR $hoeveel == "1") {
$a11 = "FREE";
$a12 = "FREE";
$a13 = "FREE";
$a14 = "FREE";
$a15 = "FREE";
$a16 = "FREE";
$a17 = "FREE";
$a18 = "FREE";
$a19 = "FREE";
$a20 = "FREE";
}

if($hoeveel == "3" OR $hoeveel == "4") {
$a21 = "USED";
$a22 = "USED";
$a23 = "USED";
$a24 = "USED";
$a25 = "USED";
$a26 = "USED";
$a27 = "USED";
$a28 = "USED";
$a29 = "USED";
$a30 = "USED";
$hoeveel1 = 75;
} else if($hoeveel == "0" OR $hoeveel == "1" OR $hoeveel == "2") {
$a21 = "FREE";
$a22 = "FREE";
$a23 = "FREE";
$a24 = "FREE";
$a25 = "FREE";
$a26 = "FREE";
$a27 = "FREE";
$a28 = "FREE";
$a29 = "FREE";
$a30 = "FREE";
}

if($hoeveel == "0" OR $hoeveel == "1" OR $hoeveel == "2" OR $hoeveel == "3") {
$a31 = "FREE";
$a32 = "FREE";
$a33 = "FREE";
$a34 = "FREE";
$a35 = "FREE";
$a36 = "FREE";
$a37 = "FREE";
$a38 = "FREE";
$a39 = "FREE";
$a40 = "FREE";
}
}
?>

<html>
<head>
<script type="text/javascript" src="http://jquery.com/src/jquery-latest.pack.js"></script>
<link media="screen" href="css-v1.css" type="text/css" rel="stylesheet">
</head>
<body  bgcolor="#FFFFFF" leftMargin="0" rightMargin="0" topMargin="0" bottomMargin="0" onLoad="javascript:$('#pageloading').slideUp('slow');" onBeforeUnLoad="javascript:$('#pageloading').show();">
<iframe src="/HTM_LOADER_FRAME" id="MARINA_loader_iframe" name="MARINA_loader_iframe" frameBorder="0" scrolling="no" style="z-index: 99; border-width: 0px; left:0px;top:0px;width:309px;height:74px; position: absolute; display: none;"></iframe>
<table id="MARINA_loader_table" cellpadding="0" cellspacing="0" border="0" width="100%" height="100%" style="z-index: 98; position: absolute; display: none;left:0px;top:0px;width:100%;height:100%;"><tr><td style="background: #ffffff; filter: alpha(opacity=50); -moz-opacity: 0.50;"></td></tr></table>
<div id="pageloading" style="position:absolute;left:0px;top:0px;width:100%;height:19px;z-index:100;">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="100%"></td>
      <td align="center" bgcolor="#FA4B01" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color:#FFFFFF; padding: 2px 20px; white-space:nowrap;"><b>Loading Page</b></td>
      <td><img src="/IMG_SPACER" width="30" height="1" /></td>
    </tr>
  </table>
</div>
<table height="100%" cellpadding="0" cellspacing="0" width="775" align="center">
  <tr>
    <td height="100%" width="6" background="IMG_SKIN_MLEFT_SHADOW.gif"><img src="IMG_SKIN_MLEFT_SHADOW.gif"></td>
    <td height="100%" valign="top" width="100%">
      <table height="100%" width="100%" cellpadding="0" cellspacing="0">
        <tr>
          <td width="100%" background="IMG_SKIN_MHEADER_BG.jpg" align="center"></td>
        </tr>
        <tr>

<td height=100% valign=top background=/IMG_INNER_BG>
  <table width=100% height=100% cellspacing="0" cellpadding="0">
    <tr>
      <td width="586" valign=top>
        <table width="100%" cellspacing="0" cellpadding="0" background="IMG_SKIN_MNAV_BG.gif">
  <tr>
    <td><a href="home.php" target=mainframe><img name="navhome" border="0" src="IMG_MNAV_HOME.png"></a></td>
    <td><a href="password.php" target=mainframe><img name="navpass" border="0" src="IMG_MNAV_PASSWORD.png"></a></td>
    <td><a href="help.php" target=mainframe><img name="navhelp" border="0" src="IMG_MNAV_HELP_EN.png"></a></td>
    <td width="100%" align="right"><a href="../../login.php?x=logout"><img name="navlogout" border="0" src="IMG_MNAV_LOGOUT_EN.png"></a></td>
  </tr>
        </table>
<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#EFEDE9">
  <tr>
    <td width="1%">&nbsp;</td>
    <td width="2%"><img src="IMG_RIGHT_ARROW.gif" width="11" height="11"></td>
    <td width="71%" style="padding-left: 10px;white-space: nowrap;"><font color="#666666" size="1" face="Arial, Helvetica, sans-serif">&raquo; <a class=tree href="home.php" target=mainframe>Admin Panel</a></font></td>
    <td width="26%" align="right" style="padding-right: 10px;white-space: nowrap;"><span class="style2"><strong>Ingelogd als:</strong> <span class="style3"><? echo $data->login ?></span></span></td>
  </tr>
</table><br>
        <table width=100% height=100% align=center cellpadding=0 cellspacing=0>
        <tr><td height=60% align=center valign=top style="padding-bottom: 35px;">
        
<iframe src=home.php name=mainframe frameborder=0 height=600 width=100%></iframe>

                  </td></tr>        
                  </table>
                </td>
        </tr>
        <tr>
          <td height=34 align=center class=white style="BACKGROUND: #3D4750; background-image: url('IMG_FOOTER_BAR.gif'); background-repeat:repeat-x;">
            <?php echo "Dit admin paneel is gemaakt door GioNet & rapifia"; ?>
          </td>
        </tr>
      </table>

    </td>
    <td height="100%" width="6" background="IMG_SKIN_MRIGHT_SHADOW.gif"><img src="IMG_SKIN_MRIGHT_SHADOW.gif"></td>
  </tr>
</table>
</body>
</html>
<?php
}else {
echo "Wil je ons belazeren? Dit lukt lekker niet meer. Zonder Admin rechten, en/of een gebruikersnaam kom je hier niet in!";
}
?>
<?php
if($_GET["p"] == "home2.php")
{
    echo "Dit is geen geldige verwijzing naar deze pagina!";
}
else
{
    if(!file_exists($_GET["a"].".php"))
    {
        include("home2.php");
    }
    else
    {
        include("".$_GET["a"].".php");
    }
}
?>
