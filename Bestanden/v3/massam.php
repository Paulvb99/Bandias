<?php
if($data->admin == 0) {
echo "Je bent geen Admin!";
}
?>
<link media="screen" href="css-v1.css" type="text/css" rel="stylesheet">
<div style="width:100%; height:auto; font-family:arial; font-size:12px; color:#2a190e;">
    <div style="padding:5px; padding-bottom:10px;">
    <form method="post" action="admin5.php" name="masspb">
<tr><td class=listtitle colspan=2>&nbsp;</td></tr>
   <?php
    if(isset($_POST['verstuur'])) {
        
        if($_POST['naar'] != "") {
            
            //Controles voor query tabel
            $date    = (date('m/d H:i'));
            
            
            $_POST['titel']    = mysql_real_escape_string($_POST['titel']);
            $_POST['messa']    = mysql_real_escape_string($_POST['messa']);
            
            mysql_query("INSERT INTO `messages`(`date`,`to`,`from`,`ip`,`title`,`content`,`date2`,`read`,`inbox`,`reply`) 
                                                values(NOW(),
                                                       '".$_POST['naar']."',
                                                       'Notificatie',
                                                       '".$_SERVER['REMOTE_ADDR']."',
                                                       '".$_POST['titel']."',
                                                       '".$_POST['messa']."',
                                                       '".$date."',
                                                       '0',
                                                       '2',
                                                       '".$_GET['reply']."')") or die(mysql_error());
            print "PB is succesvol verzonden!";
        }
        else {
            
            $Query    = mysql_query("SELECT `login` FROM `users` WHERE `vermoord`='0' AND `activationcode`='0'");
            
            while($Usr = mysql_fetch_object($Query)) {
                
                //Controles voor query tabel
                $date    = (date('m/d H:i'));
                
                $_POST['titel']    = mysql_real_escape_string($_POST['titel']);
                $_POST['messa']    = mysql_real_escape_string($_POST['messa']);
                
                mysql_query("INSERT INTO `messages`(`date`,`to`,`from`,`ip`,`title`,`content`,`date2`,`read`,`inbox`,`reply`) 
                                                values(NOW(),
                                                       '".$Usr->login."',
                                                       'Notificatie',
                                                       '".$_SERVER['REMOTE_ADDR']."',
                                                       '".$_POST['titel']."',
                                                       '".$_POST['messa']."',
                                                       '".$date."',
                                                       '0',
                                                       '2',
                                                       '".$_GET['reply']."')") or die(mysql_error());
            }
            print "PB is succesvol verzonden!";
        }
    }        
    ?>
    <table width="100%" border="0" cellspacing="3" cellpadding="0">
        <tr>
            <td>Onvanger:</td>
            <td><input type="text" name="naar" maxlength="16">(leeg is alle leden)</td>
        </tr>
          <tr>
            <td>Titel Bericht:</td>
            <td><input type="text" name="titel" maxlength="16"></td>
          </tr>
          <tr>
            <td valign="top">Bericht:</td>
            <td><textarea name="messa" cols="50" rows="10"></textarea></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
                <td>&nbsp;</td>
            <tr><td class=listtitle align=right colspan=2><input type="submit" name="verstuur" value="Verstuur PB!"></td></tr>
          </tr>
    </table>
    </form>
    </div>
<table width="100%">
    <tr>
        <td class="content_bottom"></td>
    </tr>
</table>
</div>
</div>
    </td>
    </tr>

    </table>
    </td>