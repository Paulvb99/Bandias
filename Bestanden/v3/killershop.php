<?php 
  mysql_query("UPDATE `users` SET `online`=NOW() WHERE `login`='{$data->login}'");
$dbres2				= mysql_query("SELECT * FROM `config` WHERE `ding`='1'");
$data2				= mysql_fetch_object($dbres2);
  if($data2->killershop == "Ja"){
 ?>
<div class="title_bg">
  <div class="title">Killers kopen</div>
</div>
<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">Wil je graag killers kopen omdat niemand op je SL klikt?<br>
  Hier kan je 100 killers kopen voor 10.000.000
    <table align=center width=100%>
    <tr><td class=mainTxt>

</head>
<center><?php /* ------------------------- */
    if($data->contant <= 10000000) {
echo "Sorry, je hebt niet genoeg geld!";
}; 


    if($data->contant >= 10000000) {
if (isset($_POST['submit2'])) {
Echo "U heeft 100 killers gekocht!";
mysql_query("UPDATE `users` set `contant`=`contant`-10000000 WHERE login = '{$data->login}'");
mysql_query("UPDATE `users` set `killers`=`killers`+100 WHERE login = '{$data->login}'"); };

echo "<FORM METHOD=post ACTION=\"\">
<INPUT name=\"submit2\" type=\"submit\" VALUE=\"Koop 100 killers\" class=\"mod_submit\"></center>
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