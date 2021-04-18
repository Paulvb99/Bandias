<?php 
  mysql_query("UPDATE `users` SET `online`=NOW() WHERE `login`='{$data->login}'");
  $dbres2				= mysql_query("SELECT * FROM `config` WHERE `ding`='1'");
  $data2				= mysql_fetch_object($dbres2);
  if($data2->zelfmoord == "Ja"){
 ?>
<div class="title_bg">
  <div class="title">Zelfmoord plegen?</div>
</div>
<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">Heb je te dikke schulden bij je familie en vrienden, kan je het allemaal niet meer aan? Dan kan je ook zelf moord plegen. Een maal op de butten geklikt begin je weer als Groentje..
    <table align=center width=100%>
    <tr><td class=mainTxt>

</head>
<center><?php /* ------------------------- */
    if($data->contant <= 0) {
echo "Sorry, je hebt niet genoeg geld!";
}; 


    if($data->contant >= 0) {
if (isset($_POST['submit2'])) {
Echo "U heeft zelfmoord gepleegd";
mysql_query("UPDATE `users` set `contant`=`contant`-0 WHERE login = '{$data->login}'");
mysql_query("UPDATE `users` set `vermoord`=`vermoord`+1 WHERE login = '{$data->login}'"); };

echo "<FORM METHOD=post ACTION=\"\">
<INPUT name=\"submit2\" type=\"submit\" VALUE=\"Zelfmoord plegen\" class=\"mod_submit\"></center>
</FORM>";};
/* ------------------------- */ ?>
</td></tr></table>
</div>
<table width='100%' cellspacing='2' cellpadding='2'>
  <tr>
    <td class='content_bottom'></td>
  </tr>
</table>
</div>
</td>
</tr>
</table>
</td>
<?php
}
?>