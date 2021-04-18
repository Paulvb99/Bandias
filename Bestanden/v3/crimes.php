<?   session_start();

$code         = str_replace(" ", "",$code); 
$vordering1 = floor($data->vordering/9);
$vordering2 = floor($data->vordering/15);
$vordering3 = floor($data->vordering/30);
$vordering4 = floor($data->vordering/37);                                      
$vordering5 = floor($data->vordering/48);
$vordering6 = floor($data->vordering/64);
$vordering7 = floor($data->vordering/80);
$vordering8 = floor($data->vordering/110);
$vordering9 = floor($data->vordering/140);
$vordering10 = floor($data->vordering/170);
$vordering11 = floor($data->vordering/178);
$vordering12 = floor($data->vordering/192);
$vordering13 = floor($data->vordering/200);
$vordering14 = floor($data->vordering/204);
$vordering15 = floor($data->vordering/206);

if($_POST['captcha'] != ""){
if($_POST['captcha'] != $_SESSION['captcha']){
$error = 3;
}  
}
$data2            = mysql_query("SELECT *,UNIX_TIMESTAMP(`steel`) AS `steel`,0 FROM `users` WHERE `login`='$data->login'");
$data1            = mysql_fetch_object($data2);
$datijd = $data->steeltijd;
$tijdverschil1        = $data1->steel-3600+$datijd-time();
if($data1->steel + $datijd < time()){
if($error != 3){
if($_POST['crime'] == 1){
$vord = rand(1,5);
$rang = rand(0,2);
$kans = rand(0,100);
$bakkans = rand(0,3);
if($kans <= $vordering1){
$winst = rand(500,800);
mysql_query("UPDATE `users` SET `contant`=`contant`+'$winst',`vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang',`steel`=NOW(),`steeltijd`='60' WHERE `login`='$data->login'");
mysql_query("INSERT INTO shoplogs(login,ip,date,wat,hoeveel,power,geld,bijaf) values('" . $data->login . "','" . $_SERVER['REMOTE_ADDR'] . "',NOW(),'Misdaad','','0','$winst','Erbij')");
$error = niks;
}
if($kans > $vordering1){
if($bakkans == 3){
$error = 2;
mysql_query("UPDATE `users` SET `vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang',`steel`=NOW(),`steeltijd`='60' WHERE `login`='$data->login'");
$tijd = rand(2,5);
}
else{
$error = 1;
mysql_query("UPDATE `users` SET `vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang',`steel`=NOW(),`steeltijd`='60' WHERE `login`='$data->login'");
}
}
}
if($_POST['crime'] == 2){
$vord = rand(1,6);
$rang = rand(0,2);
$kans = rand(0,100);
$bakkans = rand(0,3);
if($kans <= $vordering2){
$winst = rand(800,1000);
mysql_query("UPDATE `users` SET `contant`=`contant`+'$winst',`vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang',`steel`=NOW(),`steeltijd`='60' WHERE `login`='$data->login'");
mysql_query("INSERT INTO shoplogs(login,ip,date,wat,hoeveel,power,geld,bijaf) values('" . $data->login . "','" . $_SERVER['REMOTE_ADDR'] . "',NOW(),'Misdaad','','0','$winst','Erbij')");
$error = niks;
}
if($kans > $vordering2){
if($bakkans == 3){
$error = 2;
$vord = rand(1,5);
mysql_query("UPDATE `users` SET `vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang',`steel`=NOW(),`steeltijd`='60' WHERE `login`='$data->login'");
$tijd = rand(2,5);
}
else{
$error = 1;
$vord = rand(1,5);
mysql_query("UPDATE `users` SET `vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang',`steel`=NOW(),`steeltijd`='60' WHERE `login`='$data->login'");
}
}
}
if($_POST['crime'] == 3){
$vord = rand(2,7);
$rang = rand(0,2);
$kans = rand(0,100);
$bakkans = rand(0,3);
if($kans <= $vordering3){
$winst = rand(1000,5000);
mysql_query("UPDATE `users` SET `contant`=`contant`+'$winst',`vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang',`steel`=NOW(),`steeltijd`='60' WHERE `login`='$data->login'");
mysql_query("INSERT INTO shoplogs(login,ip,date,wat,hoeveel,power,geld,bijaf) values('" . $data->login . "','" . $_SERVER['REMOTE_ADDR'] . "',NOW(),'Misdaad','','0','$winst','Erbij')");
$error = niks;
}
if($kans > $vordering3){
if($bakkans == 3){
$error = 2;
$vord = rand(1,5);
mysql_query("UPDATE `users` SET `vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang',`steel`=NOW(),`steeltijd`='60' WHERE `login`='$data->login'");
$tijd = rand(2,5);
}
else{
$error = 1;
$vord = rand(1,5);
mysql_query("UPDATE `users` SET `vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang',`steel`=NOW(),`steeltijd`='60' WHERE `login`='$data->login'");
}
}
}
if($_POST['crime'] == 4){
$vord = rand(6,9);
$rang = rand(0,2);
$kans = rand(0,100);
$bakkans = rand(0,3);
if($kans <= $vordering4){
$winst = rand(5000,10000);
mysql_query("UPDATE `users` SET `contant`=`contant`+'$winst',`vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang',`steel`=NOW(),`steeltijd`='60' WHERE `login`='$data->login'");
mysql_query("INSERT INTO shoplogs(login,ip,date,wat,hoeveel,power,geld,bijaf) values('" . $data->login . "','" . $_SERVER['REMOTE_ADDR'] . "',NOW(),'Misdaad','','0','$winst','Erbij')");
$error = niks;
}
if($kans > $vordering4){
if($bakkans == 3){
$error = 2;
$vord = rand(1,5);
mysql_query("UPDATE `users` SET `vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang',`steel`=NOW(),`steeltijd`='60' WHERE `login`='$data->login'");
$tijd = rand(2,5);
}
else{
$error = 1;
$vord = rand(1,5);
mysql_query("UPDATE `users` SET `vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang',`steel`=NOW(),`steeltijd`='60' WHERE `login`='$data->login'");
}
}
}
if($_POST['crime'] == 5){
$vord = rand(7,10);
$rang = rand(0,2);
$kans = rand(0,100);
$bakkans = rand(0,3);
if($kans <= $vordering5){
$winst = rand(10000,20000);
mysql_query("UPDATE `users` SET `contant`=`contant`+'$winst',`vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang',`steel`=NOW(),`steeltijd`='60' WHERE `login`='$data->login'");
mysql_query("INSERT INTO shoplogs(login,ip,date,wat,hoeveel,power,geld,bijaf) values('" . $data->login . "','" . $_SERVER['REMOTE_ADDR'] . "',NOW(),'Misdaad','','0','$winst','Erbij')");
$error = niks;
}
if($kans > $vordering5){
if($bakkans == 3){
$error = 2;
$vord = rand(1,5);
mysql_query("UPDATE `users` SET `vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang',`steel`=NOW(),`steeltijd`='60' WHERE `login`='$data->login'");
$tijd = rand(2,5);
}
else{
$error = 1;
$vord = rand(1,5);
mysql_query("UPDATE `users` SET `vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang',`steel`=NOW(),`steeltijd`='60' WHERE `login`='$data->login'");
}
}
}
if($_POST['crime'] == 6){
$vord = rand(8,10);
$rang = rand(0,2);
$kans = rand(0,100);
$bakkans = rand(0,3);
if($kans <= $vordering6){
$winst = rand(60000,120000);
mysql_query("UPDATE `users` SET `contant`=`contant`+'$winst',`vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang',`steel`=NOW(),`steeltijd`='120' WHERE `login`='$data->login'");
mysql_query("INSERT INTO shoplogs(login,ip,date,wat,hoeveel,power,geld,bijaf) values('" . $data->login . "','" . $_SERVER['REMOTE_ADDR'] . "',NOW(),'Misdaad','','0','$winst','Erbij')");
$error = niks;
}
if($kans > $vordering6){
if($bakkans == 3){
$error = 2;
$vord = rand(1,5);
mysql_query("UPDATE `users` SET `vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang',`steel`=NOW(),`steeltijd`='120' WHERE `login`='$data->login'");
$tijd = rand(2,5);
}
else{
$error = 1;
$vord = rand(1,5);
mysql_query("UPDATE `users` SET `vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang',`steel`=NOW(),`steeltijd`='120' WHERE `login`='$data->login'");
}
}
}
if($_POST['crime'] == 7){
$vord = rand(8,10);
$rang = rand(0,2);
$kans = rand(0,100);
$bakkans = rand(0,3);
if($kans <= $vordering7){
$winst = rand(100000,130000);
mysql_query("UPDATE `users` SET `contant`=`contant`+'$winst',`vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang',`steel`=NOW(),`steeltijd`='120' WHERE `login`='$data->login'");
mysql_query("INSERT INTO shoplogs(login,ip,date,wat,hoeveel,power,geld,bijaf) values('" . $data->login . "','" . $_SERVER['REMOTE_ADDR'] . "',NOW(),'Misdaad','','0','$winst','Erbij')");
$error = niks;
}
if($kans > $vordering7){
if($bakkans == 3){
$error = 2;
$vord = rand(1,5);
mysql_query("UPDATE `users` SET `vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang',`steel`=NOW(),`steeltijd`='120' WHERE `login`='$data->login'");
$tijd = rand(2,5);
}
else{
$error = 1;
$vord = rand(1,5);
mysql_query("UPDATE `users` SET `vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang',`steel`=NOW(),`steeltijd`='120' WHERE `login`='$data->login'");
}
}
}
if($_POST['crime'] == 8){
$vord = rand(8,10);
$rang = rand(0,2);
$kans = rand(0,100);
$bakkans = rand(0,3);
if($kans <= $vordering8){
$winst = rand(160000,200000);
mysql_query("UPDATE `users` SET `contant`=`contant`+'$winst',`vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang',`steel`=NOW(),`steeltijd`='120' WHERE `login`='$data->login'");
mysql_query("INSERT INTO shoplogs(login,ip,date,wat,hoeveel,power,geld,bijaf) values('" . $data->login . "','" . $_SERVER['REMOTE_ADDR'] . "',NOW(),'Misdaad','','0','$winst','Erbij')");
$error = niks;
}
if($kans > $vordering8){
if($bakkans == 3){
$error = 2;
$vord = rand(1,5);
mysql_query("UPDATE `users` SET `vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang',`steel`=NOW(),`steeltijd`='120' WHERE `login`='$data->login'");
$tijd = rand(2,5);
}
else{
$error = 1;
$vord = rand(1,5);
mysql_query("UPDATE `users` SET `vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang',`steel`=NOW(),`steeltijd`='120' WHERE `login`='$data->login'");
}
}
}
if($_POST['crime'] == 9){
$vord = rand(8,10);
$rang = rand(0,2);
$kans = rand(0,100);
$bakkans = rand(0,3);
if($kans <= $vordering9){
$winst = rand(250000,400000);
mysql_query("UPDATE `users` SET `contant`=`contant`+'$winst',`vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang',`steel`=NOW(),`steeltijd`='120' WHERE `login`='$data->login'");
mysql_query("INSERT INTO shoplogs(login,ip,date,wat,hoeveel,power,geld,bijaf) values('" . $data->login . "','" . $_SERVER['REMOTE_ADDR'] . "',NOW(),'Misdaad','','0','$winst','Erbij')");
$error = niks;
}
if($kans > $vordering9){
if($bakkans == 3){
$error = 2;
$vord = rand(1,5);
mysql_query("UPDATE `users` SET `vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang',`steel`=NOW(),`steeltijd`='120' WHERE `login`='$data->login'");
$tijd = rand(2,5);
}
else{
$error = 1;
$vord = rand(1,5);
mysql_query("UPDATE `users` SET `vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang',`steel`=NOW(),`steeltijd`='120' WHERE `login`='$data->login'");
}
}
}
if($_POST['crime'] == 10){
$vord = rand(9,11);
$rang = rand(0,2);
$kans = rand(0,100);
$bakkans = rand(0,3);
if($kans <= $vordering10){
$winst = rand(400000,560000);
mysql_query("UPDATE `users` SET `contant`=`contant`+'$winst',`vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang',`steel`=NOW(),`steeltijd`='180' WHERE `login`='$data->login'");
mysql_query("INSERT INTO shoplogs(login,ip,date,wat,hoeveel,power,geld,bijaf) values('" . $data->login . "','" . $_SERVER['REMOTE_ADDR'] . "',NOW(),'Misdaad','','0','$winst','Erbij')");
$error = niks;
}
if($kans > $vordering10){
if($bakkans == 3){
$error = 2;
$vord = rand(1,5);
mysql_query("UPDATE `users` SET `vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang',`steel`=NOW(),`steeltijd`='180' WHERE `login`='$data->login'");
$tijd = rand(2,5);
}
else{
$error = 1;
$vord = rand(1,5);
mysql_query("UPDATE `users` SET `vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang',`steel`=NOW(),`steeltijd`='180' WHERE `login`='$data->login'");
}
}
}
if($_POST['crime'] == 11){
$vord = rand(10,12);
$rang = rand(0,2);
$kans = rand(0,100);
$bakkans = rand(0,3);
if($kans <= $vordering11){
$winst = rand(500000,590000);
mysql_query("UPDATE `users` SET `contant`=`contant`+'$winst',`vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang',`steel`=NOW(),`steeltijd`='300' WHERE `login`='$data->login'");
mysql_query("INSERT INTO shoplogs(login,ip,date,wat,hoeveel,power,geld,bijaf) values('" . $data->login . "','" . $_SERVER['REMOTE_ADDR'] . "',NOW(),'Misdaad','','0','$winst','Erbij')");
$error = niks;
}
if($kans > $vordering11){
if($bakkans == 3){
$error = 2;
$vord = rand(1,5);
mysql_query("UPDATE `users` SET `vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang',`steel`=NOW(),`steeltijd`='180' WHERE `login`='$data->login'");
$tijd = rand(2,5);
}
else{
$error = 1;
$vord = rand(1,5);
mysql_query("UPDATE `users` SET `vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang',`steel`=NOW(),`steeltijd`='180' WHERE `login`='$data->login'");
}
}
}
if($_POST['crime'] == 12){
$vord = rand(12,14);
$rang = rand(0,2);
$kans = rand(0,100);
$bakkans = rand(0,3);
if($kans <= $vordering12){
$winst = rand(560000,640000);
mysql_query("UPDATE `users` SET `contant`=`contant`+'$winst',`vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang',`steel`=NOW(),`steeltijd`='300' WHERE `login`='$data->login'");
mysql_query("INSERT INTO shoplogs(login,ip,date,wat,hoeveel,power,geld,bijaf) values('" . $data->login . "','" . $_SERVER['REMOTE_ADDR'] . "',NOW(),'Misdaad','','0','$winst','Erbij')");
$error = niks;
}
if($kans > $vordering12){
if($bakkans == 3){
$error = 2;
$vord = rand(1,5);
mysql_query("UPDATE `users` SET `vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang',`steel`=NOW(),`steeltijd`='300' WHERE `login`='$data->login'");
$tijd = rand(2,5);
}
else{
$error = 1;
$vord = rand(1,5);
mysql_query("UPDATE `users` SET `vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang',`steel`=NOW(),`steeltijd`='300' WHERE `login`='$data->login'");
}
}
}
if($_POST['crime'] == 13){
$vord = rand(15,18);
$rang = rand(0,2);
$kans = rand(0,100);
$bakkans = rand(0,3);
if($kans <= $vordering13){
$winst = rand(600000,700000);
mysql_query("UPDATE `users` SET `contant`=`contant`+'$winst',`vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang',`steel`=NOW(),`steeltijd`='480' WHERE `login`='$data->login'");
mysql_query("INSERT INTO shoplogs(login,ip,date,wat,hoeveel,power,geld,bijaf) values('" . $data->login . "','" . $_SERVER['REMOTE_ADDR'] . "',NOW(),'Misdaad','','0','$winst','Erbij')");
$error = niks;
}
if($kans > $vordering13){
if($bakkans == 3){
$error = 2;
$vord = rand(1,5);
mysql_query("UPDATE `users` SET `vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang',`steel`=NOW(),`steeltijd`='480' WHERE `login`='$data->login'");
$tijd = rand(2,5);
}
else{
$error = 1;
$vord = rand(1,5);
mysql_query("UPDATE `users` SET `vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang',`steel`=NOW(),`steeltijd`='480' WHERE `login`='$data->login'");
}
}
}
if($_POST['crime'] == 14){
$vord = rand(16,18);
$rang = rand(0,2);
$kans = rand(0,100);
$bakkans = rand(0,3);
if($kans <= $vordering14){
$winst = rand(700000,1000000);
mysql_query("UPDATE `users` SET `contant`=`contant`+'$winst',`vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang',`steel`=NOW(),`steeltijd`='480' WHERE `login`='$data->login'");
mysql_query("INSERT INTO shoplogs(login,ip,date,wat,hoeveel,power,geld,bijaf) values('" . $data->login . "','" . $_SERVER['REMOTE_ADDR'] . "',NOW(),'Misdaad','','0','$winst','Erbij')");
$error = niks;
}
if($kans > $vordering14){
if($bakkans == 3){
$error = 2;
$vord = rand(1,5);
mysql_query("UPDATE `users` SET `vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang',`steel`=NOW(),`steeltijd`='480' WHERE `login`='$data->login'");
$tijd = rand(2,5);
}
else{
$error = 1;
$vord = rand(1,5);
mysql_query("UPDATE `users` SET `vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang',`steel`=NOW(),`steeltijd`='480' WHERE `login`='$data->login'");
}
}
}
if($_POST['crime'] == 15){
$vord = rand(18,21);
$rang = rand(0,2);
$kans = rand(0,100);
$bakkans = rand(0,3);
if($kans <= $vordering15){
$winst = rand(1000000,2000000);
mysql_query("UPDATE `users` SET `fbibom`=`fbibom`+'1',`contant`=`contant`+'$winst',`vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang',`steel`=NOW(),`steeltijd`='600' WHERE `login`='$data->login'");
mysql_query("INSERT INTO shoplogs(login,ip,date,wat,hoeveel,power,geld,bijaf) values('" . $data->login . "','" . $_SERVER['REMOTE_ADDR'] . "',NOW(),'Misdaad','','0','$winst','Erbij')");
$error = niks;
}
if($kans > $vordering15){
if($bakkans == 3){
$error = 2;
$vord = rand(1,5);
mysql_query("UPDATE `users` SET `vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang',`steel`=NOW(),`steeltijd`='600' WHERE `login`='$data->login'");
$tijd = rand(2,5);
}
else{
$error = 1;
$vord = rand(1,5);
mysql_query("UPDATE `users` SET `vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang',`steel`=NOW(),`steeltijd`='600' WHERE `login`='$data->login'");
}
}
}
}
}else{$error = misdaad;}
if($error != niks){
if($bakkans == 3){
$time = $tijd*60;
mysql_query("UPDATE `users` SET `gevangenis`='$time',`baktijd`=NOW() WHERE `id`='$data->id'");
}
}
if($_SERVER['REQUEST_METHOD'] != "POST") {


    $data2            = mysql_query("SELECT *,UNIX_TIMESTAMP(`steel`) AS `steel`,0 FROM `users` WHERE `login`='$data->login'");
      $data1            = mysql_fetch_object($data2);
$datijd = $data->steeltijd;
    $tijdverschil1        = $data1->steel-3600+$datijd-time();
    if($data1->steel + $datijd > time()){
   list($uur,$min,$sec)=explode(":",date("H:i:s",$tijdverschil1));
$error = misdaden;
$countdown = $data1->steel+$datijd-time();
?>
            <table width="100%">
    <tr>
        <td align="center">
            <br><br><br><br>
            <table class="div_popup_error" align="center">
                <tr>
                    <td style="color:red">
                        De politie is nog naar je op zoek, over <font id="count_timer"></font>&nbsp; is de kust weer veilig                    </td>

                </tr>
                <tr>
                    <td style="color:red">
                        <br><br>
                        <a href="#" onclick="history.go(-1); return false" class="error_ok">OK</a>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<script language="javascript">
    countdown('<?echo$countdown;?>','count_timer','index.php?a=crimes');
</script>        </div>
    </td>
    </tr>

    </table>
    </td>

<?}}
if($error == ""){?>
        <div class="title_bg"><div style="font-size:17px; color:#1b1a17; margin-left:10px; padding-top:4px;">Misdaden</div></div>
        <div style="width:100%; height:auto; background:#c3b79d; font-family:arial; font-size:12px; color:#2a190e;">
            <div style="padding:5px; padding-bottom:10px;">
            Door het plegen van misdaden kun je flink geld verdienen. Maar denk er aan, de politie is er niet voor niets! Het aantal procenten geeft aan wat de kans is of een actie wel of niet lukt. Hoe vaker je een misdaad pleegt, hoe hoger de kans zal zijn.    <br /><br />
            </div>
        </div>
<?}?>

        <script language="javascript">
            function openTab(pTabPage,pTab){
                                document.getElementById('crime_1').style.display = 'none';
                                document.getElementById('crime_2').style.display = 'none';
                                document.getElementById('crime_3').style.display = 'none';

                document.getElementById(pTabPage).style.display = 'block';

                                document.getElementById('tab1').style.background = '';
                document.getElementById('tab1').style.fontWeight = 'normal';
                                document.getElementById('tab2').style.background = '';
                document.getElementById('tab2').style.fontWeight = 'normal';
                                document.getElementById('tab3').style.background = '';
                document.getElementById('tab3').style.fontWeight = 'normal';

                document.getElementById(pTab).style.background = 'url(\'images/tab_info_arrow.gif\') bottom no-repeat';
                document.getElementById(pTab).style.fontWeight = 'bold';
            }
        </script>
<?
if($error == 1){
?>
            <table width="100%">
    <tr>
        <td align="center">
            <br><br><br><br>
            <table class="div_popup" align="center">
                <tr>
                    <td>
                        Het is mislukt maar je kon de politie ontlopen. Dat ging nog maar net goed!                    </td>
                </tr>
                <tr>
                    <td>
                        <br><br>
                            <a href="index.php?a=news" class="msg_ok">Klik hier indien je niet automatisch verder gaat.</a>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<script language="javascript">
    setTimeout("document.location.href='index.php?a=news'",(3000*2));
</script>
        </div>
    </td>
    </tr>

    </table>
    </td>
<?}
if($error == 2){
?>

            <table width="100%">
    <tr>
        <td align="center">
            <br><br><br><br>
            <table class="div_popup" align="center">
                <tr>
                    <td>
                        Het is mislukt, en je bent gepakt door de politie!                </td>
                </tr>
                <tr>
                    <td>
                        <br><br>
                            <a href="index.php?a=news" class="msg_ok">Klik hier indien je niet automatisch verder gaat.</a>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<script language="javascript">
    setTimeout("document.location.href='index.php?a=news'",(3000*2));
</script>
        </div>
    </td>
    </tr>

    </table>
    </td>
<?}
if($error == niks){
?>

            <table width="100%">
    <tr>
        <td align="center">
            <br><br><br><br>
            <table class="div_popup" align="center">
                <tr>
                    <td>
                        Het is gelukt, en je hebt €<?echo$winst;?>,- gekregen!                </td>
                </tr>
                <tr>
                    <td>
                        <br><br>
                            <a href="index.php?a=news" class="msg_ok">Klik hier indien je niet automatisch verder gaat.</a>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<script language="javascript">
    setTimeout("document.location.href='index.php?a=news'",(3000*2));
</script>
        </div>
    </td>
    </tr>

    </table>
    </td>
<?}
if($error == 3){
?>
<table width="100%">
    <tr>
        <td align="center">
            <br><br><br><br>
            <table class="div_popup_error" align="center">
                <tr>
                    <td style="color:red">
                        <b>FOUT!</b><br><br>De code was onjuist!                    </td>
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
        </div>
    </td>
    </tr>

    </table>
    </td>
<?
}
if($error == ""){
?>
        <div style="width:100%; height:25px; background:url('images/tab_info_bg.jpg') repeat-x; font-family:arial; font-size:12px; color:#2a190e;">
                                    <div id="tab1" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px; background:url('images/tab_info_arrow.gif') bottom no-repeat; font-weight:bold;"><a href="#" onclick="openTab('crime_1','tab1'); return false">Kleine misdaden</a></div>
                                                <div style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px;">|</div>
                                                <div id="tab2" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px;"><a href="#" onclick="openTab('crime_2','tab2'); return false">Grote misdaden</a></div>
                                                <div style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px;">|</div>
                                                <div id="tab3" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px;"><a href="#" onclick="openTab('crime_3','tab3'); return false">Hele grote misdaden</a></div>
                                </div>

        <div style="background-color:#dbd2b7; ">
        <br>
        <table cellpadding="4" cellspacing="0" width="100%" align="center"><tr><td>

<form method="POST">
    <input type="hidden" name="sel" id="sel" value="">
    <input type="hidden" name="captcha">

<div id="crime_1" style="display:table">
    <table align="center" width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list"> 
                    <tr> 
                <td rowspan="4" width="10"> 
                    <input type="radio" name="crime" value="1" id="1" onclick="document.getElementById('sel').value = 'true'"> 
                </td> 
                <td rowspan="4" width="100"> 
                    <label for="1"> 
                        <img src="images/crimes/snoep_stelen.jpg" alt="Snoep stelen van een kind" title="Snoep stelen van een kind"> 
                    </label> 
                </td> 
                <td colspan="2"> 
                    <label for="1"> 
                        <b>Snoep stelen van een kind</b> 
                    </label> 
                </td> 
            </tr> 
            <tr> 
                <td width="16"> 
                    <label for="1"> 
                        <img src="images/icons_gif/chart_bar.gif" alt="Kans dat je de misdaad haalt" title="Kans dat je de misdaad haalt" border=0px/> 
                    </label> 
                </td> 
                <td> 
                    <label for="1"> 
                        <b><?
if($vordering1 > 100){
$vordering1 = 100;
}
$vordering1 = floor($vordering1);
                    echo $vordering1;?>%</b> kans op succes                    </label> 
                </td> 
            </tr> 
            <tr> 
                <td> 
                    <label for="1"> 
                        <img src="images/icons_gif/money.gif" alt="Maximale beloning" title="Maximale beloning" border=0px/> 
                    </label> 
                </td> 
                <td> 
                    <label for="1"> 
                        <b>&euro; 800,-</b> is de maximale beloning                    </label> 
                </td> 
            </tr> 
            <tr> 
                <td> 
                    <label for="1"> 
                        <img src="images/icons_gif/clock.gif" alt="Straf op deze misdaad" title="Straf op deze misdaad" border=0px/> 
                    </label> 
                </td> 
                <td> 
                    <label for="1"> 
                        <b>1 Minuut</b> gevangenis tijd als je gepakt wordt                    </label> 
                </td> 
            </tr> 
            <tr height="5px"> 
            
            </tr> 
                    
                    <tr> 
                <td rowspan="4" width="10"> 
                    <input type="radio" name="crime" value="2" id="2" onclick="document.getElementById('sel').value = 'true'"> 
                </td> 
                <td rowspan="4" width="100"> 
                    <label for="5"> 
                        <img src="images/crimes/fiets_stelen.jpg" alt="Fiets stelen" title="Fiets stelen"> 
                    </label> 
                </td> 
                <td colspan="2"> 
                    <label for="5"> 
                        <b>Fiets stelen</b> 
                    </label> 
                </td> 
            </tr> 
            <tr> 
                <td width="16"> 
                    <label for="5"> 
                        <img src="images/icons_gif/chart_bar.gif" alt="Kans dat je de misdaad haalt" title="Kans dat je de misdaad haalt" border=0px/> 
                    </label> 
                </td> 
                <td> 
                    <label for="5"> 
                        <b><?
if($vordering2 > 100){
$vordering2 = 100;
}
$vordering2 = floor($vordering2);
                    echo $vordering2;?>%</b> kans op succes                    </label> 
                </td> 
            </tr> 
            <tr> 
                <td> 
                    <label for="5"> 
                        <img src="images/icons_gif/money.gif" alt="Maximale beloning" title="Maximale beloning" border=0px/> 
                    </label> 
                </td> 
                <td> 
                    <label for="5"> 
                        <b>&euro; 1000,-</b> is de maximale beloning                    </label> 
                </td> 
            </tr> 
            <tr> 
                <td> 
                    <label for="5"> 
                        <img src="images/icons_gif/clock.gif" alt="Straf op deze misdaad" title="Straf op deze misdaad" border=0px/> 
                    </label> 
                </td> 
                <td> 
                    <label for="5"> 
                        <b>1 Minuut</b> gevangenis tijd als je gepakt wordt                    </label> 
                </td> 
            </tr> 
            <tr height="5px"> 
            
            </tr> 
                    
                    <tr> 
                <td rowspan="4" width="10"> 
                    <input type="radio" name="crime" value="3" id="3" onclick="document.getElementById('sel').value = 'true'"> 
                </td> 
                <td rowspan="4" width="100"> 
                    <label for="2"> 
                        <img src="images/crimes/zakkenrollen.jpg" alt="Zakkenrollen in de stad" title="Zakkenrollen in de stad"> 
                    </label> 
                </td> 
                <td colspan="2"> 
                    <label for="2"> 
                        <b>Zakkenrollen in de stad</b> 
                    </label> 
                </td> 
            </tr> 
            <tr> 
                <td width="16"> 
                    <label for="2"> 
                        <img src="images/icons_gif/chart_bar.gif" alt="Kans dat je de misdaad haalt" title="Kans dat je de misdaad haalt" border=0px/> 
                    </label> 
                </td> 
                <td> 
                    <label for="2"> 
                        <b><?
if($vordering3 > 100){
$vordering3 = 100;
}
$vordering3 = floor($vordering3);
                    echo $vordering3;?>%</b> kans op succes                    </label> 
                </td> 
            </tr> 
            <tr> 
                <td> 
                    <label for="2"> 
                        <img src="images/icons_gif/money.gif" alt="Maximale beloning" title="Maximale beloning" border=0px/> 
                    </label> 
                </td> 
                <td> 
                    <label for="2"> 
                        <b>&euro; 5000,-</b> is de maximale beloning                    </label> 
                </td> 
            </tr> 
            <tr> 
                <td> 
                    <label for="2"> 
                        <img src="images/icons_gif/clock.gif" alt="Straf op deze misdaad" title="Straf op deze misdaad" border=0px/> 
                    </label> 
                </td> 
                <td> 
                    <label for="2"> 
                        <b>1 Minuut</b> gevangenis tijd als je gepakt wordt                    </label> 
                </td> 
            </tr> 
            <tr height="5px"> 
            
            </tr> 
                    
                    <tr> 
                <td rowspan="4" width="10"> 
                    <input type="radio" name="crime" value="4" id="4" onclick="document.getElementById('sel').value = 'true'"> 
                </td> 
                <td rowspan="4" width="100"> 
                    <label for="4"> 
                        <img src="images/crimes/auto_inbreken.jpg" alt="Inbreken in een auto" title="Inbreken in een auto"> 
                    </label> 
                </td> 
                <td colspan="2"> 
                    <label for="4"> 
                        <b>Inbreken in een auto</b> 
                    </label> 
                </td> 
            </tr> 
            <tr> 
                <td width="16"> 
                    <label for="4"> 
                        <img src="images/icons_gif/chart_bar.gif" alt="Kans dat je de misdaad haalt" title="Kans dat je de misdaad haalt" border=0px/> 
                    </label> 
                </td> 
                <td> 
                    <label for="4"> 
                        <b><?
if($vordering4 > 100){
$vordering4 = 100;
}
$vordering4 = floor($vordering4);
                    echo $vordering4;?>%</b> kans op succes                    </label> 
                </td> 
            </tr> 
            <tr> 
                <td> 
                    <label for="4"> 
                        <img src="images/icons_gif/money.gif" alt="Maximale beloning" title="Maximale beloning" border=0px/> 
                    </label> 
                </td> 
                <td> 
                    <label for="4"> 
                        <b>&euro; 10000,-</b> is de maximale beloning                    </label> 
                </td> 
            </tr> 
            <tr> 
                <td> 
                    <label for="4"> 
                        <img src="images/icons_gif/clock.gif" alt="Straf op deze misdaad" title="Straf op deze misdaad" border=0px/> 
                    </label> 
                </td> 
                <td> 
                    <label for="4"> 
                        <b>1 Minuut</b> gevangenis tijd als je gepakt wordt                    </label> 
                </td> 
            </tr> 
            <tr height="5px"> 
            
            </tr> 
                    
                    <tr> 
                <td rowspan="4" width="10"> 
                    <input type="radio" name="crime" value="5" id="5" onclick="document.getElementById('sel').value = 'true'"> 
                </td>
                <td rowspan="4" width="100"> 
                    <label for="3"> 
                        <img src="images/crimes/lokale_warenhuis_stelen.jpg" alt="Spullen uit het lokale warenhuis stelen" title="Spullen uit het lokale warenhuis stelen">
                    </label> 
                </td> 
                <td colspan="2"> 
                    <label for="3"> 
                        <b>Spullen uit het lokale warenhuis stelen</b>
                    </label> 
                </td> 
            </tr> 
            <tr> 
                <td width="16"> 
                    <label for="3"> 
                        <img src="images/icons_gif/chart_bar.gif" alt="Kans dat je de misdaad haalt" title="Kans dat je de misdaad haalt" border=0px/>
                    </label> 
                </td> 
                <td> 
                    <label for="3"> 
                        <b><?
if($vordering5 > 100){
$vordering5 = 100;
}
$vordering5 = floor($vordering5);
                    echo $vordering5;?>%</b> kans op succes                    </label>
                </td> 
            </tr> 
            <tr> 
                <td> 
                    <label for="3"> 
                        <img src="images/icons_gif/money.gif" alt="Maximale beloning" title="Maximale beloning" border=0px/>
                    </label>
                </td>
                <td>
                    <label for="3">
                        <b>&euro; 20000,-</b> is de maximale beloning                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="3">
                        <img src="images/icons_gif/clock.gif" alt="Straf op deze misdaad" title="Straf op deze misdaad" border=0px/>
                    </label>
                </td>
                <td>
                    <label for="3">
                        <b>1 Minuut</b> gevangenis tijd als je gepakt wordt                    </label>
                </td>
            </tr>
            <tr height="5px">

            </tr>

                <tr height="20px">

        </tr>
    </table>
</div>

<div id="crime_2" style="display:none">
    <table align="center" width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list"> 
                    <tr> 
                <td rowspan="4" width="10"> 
                    <input type="radio" name="crime" value="6" id="6" onclick="document.getElementById('sel').value = 'true'"> 
                </td> 
                <td rowspan="4" width="100"> 
                    <label for="6"> 
                        <img src="images/crimes/groot_warenhuis_overvallen.jpg" alt="Groot warenhuis overvallen" title="Groot warenhuis overvallen"> 
                    </label> 
                </td> 
                <td colspan="2"> 
                    <label for="6"> 
                        <b>Groot warenhuis overvallen</b> 
                    </label> 
                </td> 
            </tr> 
            <tr> 
                <td width="16"> 
                    <label for="6"> 
                        <img src="images/icons_gif/chart_bar.gif" alt="Kans dat je de misdaad haalt" title="Kans dat je de misdaad haalt" border=0px/> 
                    </label> 
                </td> 
                <td> 
                    <label for="6"> 
                        <b><?
if($vordering6 > 100){
$vordering6 = 100;
}
$vordering6 = floor($vordering6);
                    echo $vordering6;?>%</b> kans op succes                    </label> 
                </td> 
            </tr> 
            <tr> 
                <td> 
                    <label for="6"> 
                        <img src="images/icons_gif/money.gif" alt="Maximale beloning" title="Maximale beloning" border=0px/> 
                    </label> 
                </td> 
                <td> 
                    <label for="6"> 
                        <b>&euro; 120000,-</b> is de maximale beloning                    </label> 
                </td> 
            </tr> 
            <tr> 
                <td> 
                    <label for="6"> 
                        <img src="images/icons_gif/clock.gif" alt="Straf op deze misdaad" title="Straf op deze misdaad" border=0px/> 
                    </label> 
                </td> 
                <td> 
                    <label for="6"> 
                        <b>2 Minuten</b> gevangenis tijd als je gepakt wordt                    </label> 
                </td> 
            </tr> 
            <tr height="5px"> 
            
            </tr> 
                    
                    <tr> 
                <td rowspan="4" width="10"> 
                    <input type="radio" name="crime" value="7" id="7" onclick="document.getElementById('sel').value = 'true'"> 
                </td> 
                <td rowspan="4" width="100"> 
                    <label for="7"> 
                        <img src="images/crimes/vrachtwagen_kapen.jpg" alt="Vrachtwagen kapen" title="Vrachtwagen kapen"> 
                    </label> 
                </td> 
                <td colspan="2"> 
                    <label for="7"> 
                        <b>Vrachtwagen kapen</b> 
                    </label> 
                </td> 
            </tr> 
            <tr> 
                <td width="16"> 
                    <label for="7"> 
                        <img src="images/icons_gif/chart_bar.gif" alt="Kans dat je de misdaad haalt" title="Kans dat je de misdaad haalt" border=0px/> 
                    </label> 
                </td> 
                <td> 
                    <label for="7"> 
                        <b><?
if($vordering7 > 100){
$vordering7 = 100;
}
$vordering7 = floor($vordering7);
                    echo $vordering7;?>%</b> kans op succes                    </label> 
                </td> 
            </tr> 
            <tr> 
                <td> 
                    <label for="7"> 
                        <img src="images/icons_gif/money.gif" alt="Maximale beloning" title="Maximale beloning" border=0px/> 
                    </label> 
                </td> 
                <td> 
                    <label for="7"> 
                        <b>&euro; 130000,-</b> is de maximale beloning                    </label> 
                </td> 
            </tr> 
            <tr> 
                <td> 
                    <label for="7"> 
                        <img src="images/icons_gif/clock.gif" alt="Straf op deze misdaad" title="Straf op deze misdaad" border=0px/> 
                    </label> 
                </td> 
                <td> 
                    <label for="7"> 
                        <b>2 Minuten</b> gevangenis tijd als je gepakt wordt                    </label> 
                </td> 
            </tr> 
            <tr height="5px"> 
            
            </tr> 
                    
                    <tr> 
                <td rowspan="4" width="10"> 
                    <input type="radio" name="crime" value="8" id="8" onclick="document.getElementById('sel').value = 'true'"> 
                </td> 
                <td rowspan="4" width="100"> 
                    <label for="8"> 
                        <img src="images/crimes/juwelier_overvallen.jpg" alt="Overval een juwelier" title="Overval een juwelier"> 
                    </label> 
                </td> 
                <td colspan="2"> 
                    <label for="8"> 
                        <b>Overval een juwelier</b> 
                    </label> 
                </td> 
            </tr> 
            <tr> 
                <td width="16"> 
                    <label for="8"> 
                        <img src="images/icons_gif/chart_bar.gif" alt="Kans dat je de misdaad haalt" title="Kans dat je de misdaad haalt" border=0px/> 
                    </label> 
                </td> 
                <td> 
                    <label for="8"> 
                        <b><?
if($vordering8 > 100){
$vordering8 = 100;
}
$vordering8 = floor($vordering8);
                    echo $vordering8;?>%</b> kans op succes                    </label> 
                </td> 
            </tr> 
            <tr> 
                <td> 
                    <label for="8"> 
                        <img src="images/icons_gif/money.gif" alt="Maximale beloning" title="Maximale beloning" border=0px/> 
                    </label> 
                </td> 
                <td> 
                    <label for="8"> 
                        <b>&euro; 200000,-</b> is de maximale beloning                    </label> 
                </td> 
            </tr> 
            <tr> 
                <td> 
                    <label for="8"> 
                        <img src="images/icons_gif/clock.gif" alt="Straf op deze misdaad" title="Straf op deze misdaad" border=0px/> 
                    </label> 
                </td> 
                <td> 
                    <label for="8"> 
                        <b>2 Minuten</b> gevangenis tijd als je gepakt wordt                    </label> 
                </td> 
            </tr> 
            <tr height="5px"> 
            
            </tr> 
                    
                    <tr> 
                <td rowspan="4" width="10"> 
                    <input type="radio" name="crime" value="9" id="9" onclick="document.getElementById('sel').value = 'true'"> 
                </td> 
                <td rowspan="4" width="100"> 
                    <label for="9"> 
                        <img src="images/crimes/loods_leegroven.jpg" alt="Een grote loods leegroven" title="Een grote loods leegroven"> 
                    </label> 
                </td> 
                <td colspan="2"> 
                    <label for="9"> 
                        <b>Een grote loods leegroven</b> 
                    </label> 
                </td> 
            </tr> 
            <tr> 
                <td width="16"> 
                    <label for="9"> 
                        <img src="images/icons_gif/chart_bar.gif" alt="Kans dat je de misdaad haalt" title="Kans dat je de misdaad haalt" border=0px/> 
                    </label> 
                </td> 
                <td> 
                    <label for="9"> 
                        <b><?
if($vordering9 > 100){
$vordering9 = 100;
}
$vordering9 = floor($vordering9);
                    echo $vordering9;?>%</b> kans op succes                    </label> 
                </td> 
            </tr> 
            <tr> 
                <td> 
                    <label for="9"> 
                        <img src="images/icons_gif/money.gif" alt="Maximale beloning" title="Maximale beloning" border=0px/> 
                    </label> 
                </td> 
                <td> 
                    <label for="9"> 
                        <b>&euro; 400000,-</b> is de maximale beloning                    </label> 
                </td> 
            </tr> 
            <tr> 
                <td> 
                    <label for="9"> 
                        <img src="images/icons_gif/clock.gif" alt="Straf op deze misdaad" title="Straf op deze misdaad" border=0px/> 
                    </label> 
                </td> 
                <td> 
                    <label for="9"> 
                        <b>2 Minuten</b> gevangenis tijd als je gepakt wordt                    </label> 
                </td> 
            </tr> 
            <tr height="5px"> 
            
            </tr> 
                    
                    <tr> 
                <td rowspan="4" width="10"> 
                    <input type="radio" name="crime" value="10" id="10" onclick="document.getElementById('sel').value = 'true'"> 
                </td> 
                <td rowspan="4" width="100"> 
                    <label for="10"> 
                        <img src="images/crimes/drugs_vervoeren.jpg" alt="Drugs vervoeren" title="Drugs vervoeren"> 
                    </label> 
                </td> 
                <td colspan="2"> 
                    <label for="10"> 
                        <b>Drugs vervoeren</b> 
                    </label> 
                </td> 
            </tr> 
            <tr> 
                <td width="16"> 
                    <label for="10"> 
                        <img src="images/icons_gif/chart_bar.gif" alt="Kans dat je de misdaad haalt" title="Kans dat je de misdaad haalt" border=0px/> 
                    </label> 
                </td> 
                <td> 
                    <label for="10"> 
                        <b><?
if($vordering10 > 100){
$vordering10 = 100;
}
$vordering10 = floor($vordering10);
                    echo $vordering10;?>%</b> kans op succes                    </label> 
                </td> 
            </tr> 
            <tr> 
                <td> 
                    <label for="10"> 
                        <img src="images/icons_gif/money.gif" alt="Maximale beloning" title="Maximale beloning" border=0px/> 
                    </label> 
                </td> 
                <td> 
                    <label for="10"> 
                        <b>&euro; 560000,-</b> is de maximale beloning                    </label> 
                </td> 
            </tr> 
            <tr> 
                <td> 
                    <label for="10"> 
                        <img src="images/icons_gif/clock.gif" alt="Straf op deze misdaad" title="Straf op deze misdaad" border=0px/> 
                    </label> 
                </td> 
                <td> 
                    <label for="10"> 
                        <b>2 Minuten</b> gevangenis tijd als je gepakt wordt                    </label> 
                </td> 
            </tr> 
            <tr height="5px"> 
            
            </tr> 
                    
                <tr height="20px"> 
            
        </tr>
    </table>
</div>


<div id="crime_3" style="display:none">
    <table align="center" width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list"> 
                    <tr> 
                <td rowspan="4" width="10"> 
                    <input type="radio" name="crime" value="11" id="11" onclick="document.getElementById('sel').value = 'true'"> 
                </td> 
                <td rowspan="4" width="100"> 
                    <label for="11"> 
                        <img src="images/crimes/museum_inbreken.jpg" alt="Inbreken in een Museum" title="Inbreken in een Museum"> 
                    </label> 
                </td> 
                <td colspan="2"> 
                    <label for="11"> 
                        <b>Inbreken in een Museum</b> 
                    </label> 
                </td> 
            </tr> 
            <tr> 
                <td width="16"> 
                    <label for="11"> 
                        <img src="images/icons_gif/chart_bar.gif" alt="Kans dat je de misdaad haalt" title="Kans dat je de misdaad haalt" border=0px/> 
                    </label> 
                </td> 
                <td> 
                    <label for="11"> 
                        <b><?
if($vordering11 > 100){
$vordering11 = 100;
}
$vordering11 = floor($vordering11);
                    echo $vordering11;?>%</b> kans op succes                    </label> 
                </td> 
            </tr> 
            <tr> 
                <td> 
                    <label for="11"> 
                        <img src="images/icons_gif/money.gif" alt="Maximale beloning" title="Maximale beloning" border=0px/> 
                    </label> 
                </td> 
                <td> 
                    <label for="11"> 
                        <b>&euro; 590000,-</b> is de maximale beloning                    </label> 
                </td> 
            </tr> 
            <tr> 
                <td> 
                    <label for="11"> 
                        <img src="images/icons_gif/clock.gif" alt="Straf op deze misdaad" title="Straf op deze misdaad" border=0px/> 
                    </label> 
                </td> 
                <td> 
                    <label for="11"> 
                        <b>5 Minuten</b> gevangenis tijd als je gepakt wordt                    </label> 
                </td> 
            </tr> 
            <tr height="5px"> 
            
            </tr> 
                    
                    <tr> 
                <td rowspan="4" width="10"> 
                    <input type="radio" name="crime" value="12" id="12" onclick="document.getElementById('sel').value = 'true'"> 
                </td> 
                <td rowspan="4" width="100"> 
                    <label for="12"> 
                        <img src="images/crimes/waardetransport_overvallen.jpg" alt="Geldtransport overvallen" title="Geldtransport overvallen"> 
                    </label> 
                </td> 
                <td colspan="2"> 
                    <label for="12"> 
                        <b>Geldtransport overvallen</b> 
                    </label> 
                </td> 
            </tr> 
            <tr> 
                <td width="16"> 
                    <label for="12"> 
                        <img src="images/icons_gif/chart_bar.gif" alt="Kans dat je de misdaad haalt" title="Kans dat je de misdaad haalt" border=0px/> 
                    </label> 
                </td> 
                <td> 
                    <label for="12"> 
                        <b><?
if($vordering12 > 100){
$vordering12 = 100;
}
$vordering12 = floor($vordering12);
                    echo $vordering12;?>%</b> kans op succes                    </label> 
                </td> 
            </tr> 
            <tr> 
                <td> 
                    <label for="12"> 
                        <img src="images/icons_gif/money.gif" alt="Maximale beloning" title="Maximale beloning" border=0px/> 
                    </label> 
                </td> 
                <td> 
                    <label for="12"> 
                        <b>&euro; 640000,-</b> is de maximale beloning                    </label> 
                </td> 
            </tr> 
            <tr> 
                <td> 
                    <label for="12"> 
                        <img src="images/icons_gif/clock.gif" alt="Straf op deze misdaad" title="Straf op deze misdaad" border=0px/> 
                    </label> 
                </td> 
                <td> 
                    <label for="12"> 
                        <b>6 Minuten</b> gevangenis tijd als je gepakt wordt                    </label> 
                </td> 
            </tr> 
            <tr height="5px"> 
            
            </tr> 
                    
                    <tr> 
                <td rowspan="4" width="10"> 
                    <input type="radio" name="crime" value="13" id="13" onclick="document.getElementById('sel').value = 'true'"> 
                </td> 
                <td rowspan="4" width="100"> 
                    <label for="13"> 
                        <img src="images/crimes/bank_overvallen.jpg" alt="De bank overvallen" title="De bank overvallen"> 
                    </label> 
                </td> 
                <td colspan="2"> 
                    <label for="13"> 
                        <b>De bank overvallen</b> 
                    </label> 
                </td> 
            </tr> 
            <tr> 
                <td width="16"> 
                    <label for="13"> 
                        <img src="images/icons_gif/chart_bar.gif" alt="Kans dat je de misdaad haalt" title="Kans dat je de misdaad haalt" border=0px/> 
                    </label> 
                </td> 
                <td> 
                    <label for="13"> 
                        <b><?
if($vordering13 > 100){
$vordering13 = 100;
}
$vordering13 = floor($vordering13);
                    echo $vordering13;?>%</b> kans op succes                    </label> 
                </td> 
            </tr> 
            <tr> 
                <td> 
                    <label for="13"> 
                        <img src="images/icons_gif/money.gif" alt="Maximale beloning" title="Maximale beloning" border=0px/> 
                    </label> 
                </td> 
                <td> 
                    <label for="13"> 
                        <b>&euro; 700000,-</b> is de maximale beloning                    </label> 
                </td> 
            </tr> 
            <tr> 
                <td> 
                    <label for="13"> 
                        <img src="images/icons_gif/clock.gif" alt="Straf op deze misdaad" title="Straf op deze misdaad" border=0px/> 
                    </label> 
                </td> 
                <td> 
                    <label for="13"> 
                        <b>8 Minuten</b> gevangenis tijd als je gepakt wordt                    </label> 
                </td> 
            </tr> 
            <tr height="5px"> 
            
            </tr> 
                    
                    <tr> 
                <td rowspan="4" width="10"> 
                    <input type="radio" name="crime" value="14" id="14" onclick="document.getElementById('sel').value = 'true'"> 
                </td> 
                <td rowspan="4" width="100"> 
                    <label for="14"> 
                        <img src="images/crimes/president_blackmailen.jpg" alt="De president blackmailen" title="De president blackmailen"> 
                    </label> 
                </td> 
                <td colspan="2"> 
                    <label for="14"> 
                        <b>De president blackmailen</b> 
                    </label> 
                </td> 
            </tr> 
            <tr> 
                <td width="16"> 
                    <label for="14"> 
                        <img src="images/icons_gif/chart_bar.gif" alt="Kans dat je de misdaad haalt" title="Kans dat je de misdaad haalt" border=0px/> 
                    </label> 
                </td> 
                <td> 
                    <label for="14"> 
                        <b><?
if($vordering14 > 100){
$vordering14 = 100;
}
$vordering14 = floor($vordering14);
                    echo $vordering14;?>%</b> kans op succes                    </label> 
                </td> 
            </tr> 
            <tr> 
                <td> 
                    <label for="14"> 
                        <img src="images/icons_gif/money.gif" alt="Maximale beloning" title="Maximale beloning" border=0px/> 
                    </label> 
                </td> 
                <td> 
                    <label for="14"> 
                        <b>&euro; 1000000,-</b> is de maximale beloning                    </label> 
                </td> 
            </tr> 
            <tr> 
                <td> 
                    <label for="14"> 
                        <img src="images/icons_gif/clock.gif" alt="Straf op deze misdaad" title="Straf op deze misdaad" border=0px/> 
                    </label> 
                </td> 
                <td> 
                    <label for="14"> 
                        <b>9 Minuten</b> gevangenis tijd als je gepakt wordt                    </label> 
                </td> 
            </tr> 
            <tr height="5px"> 
            
            </tr> 
                    
                    <tr> 
                <td rowspan="4" width="10"> 
                    <input type="radio" name="crime" value="15" id="15" onclick="document.getElementById('sel').value = 'true'"> 
                </td> 
                <td rowspan="4" width="100"> 
                    <label for="15"> 
                        <img src="images/crimes/fbi_opblazen.jpg" alt="Het hoofdkantoor van de FBI opblazen" title="Het hoofdkantoor van de FBI opblazen"> 
                    </label> 
                </td> 
                <td colspan="2"> 
                    <label for="15"> 
                        <b>Het hoofdkantoor van de FBI opblazen</b> 
                    </label> 
                </td> 
            </tr> 
            <tr> 
                <td width="16"> 
                    <label for="15"> 
                        <img src="images/icons_gif/chart_bar.gif" alt="Kans dat je de misdaad haalt" title="Kans dat je de misdaad haalt" border=0px/> 
                    </label> 
                </td> 
                <td> 
                    <label for="15"> 
                        <b><?
if($vordering15 > 100){
$vordering15 = 100;
}
$vordering15 = floor($vordering15);
                    echo $vordering15;?>%</b> kans op succes                    </label> 
                </td> 
            </tr> 
            <tr> 
                <td> 
                    <label for="15"> 
                        <img src="images/icons_gif/money.gif" alt="Maximale beloning" title="Maximale beloning" border=0px/> 
                    </label> 
                </td> 
                <td> 
                    <label for="15"> 
                        <b>&euro; 2000000,-</b> is de maximale beloning                    </label> 
                </td> 
            </tr> 
            <tr> 
                <td> 
                    <label for="15"> 
                        <img src="images/icons_gif/clock.gif" alt="Straf op deze misdaad" title="Straf op deze misdaad" border=0px/> 
                    </label> 
                </td> 
                <td> 
                    <label for="15"> 
                        <b>10 Minuten</b> gevangenis tijd als je gepakt wordt                    </label> 
                </td> 
            </tr> 
            <tr height="5px"> 
            
            </tr> 
                    
                <tr height="20px"> 
            
        </tr> 
    </table> 
</div>

<table align="center" width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
        <tr>
            <td >
                <table width="100%">
                    <tr>
                        <td>
                        <?
function rand_str($length = 32, $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890')
{
    // Length of character list
    $chars_length = (strlen($chars) - 1);

    // Start our string
    $string = $chars{rand(0, $chars_length)};
   
    // Generate random string
    for ($i = 1; $i < $length; $i = strlen($string))
    {
        // Grab a random character from our list
        $r = $chars{rand(0, $chars_length)};
       
        // Make sure the same two characters don't appear next to each other
        if ($r != $string{$i - 1}) $string .=  $r;
    }
   
    // Return the string
    return $string;
}
$aantal_codes = 5;
$codes = array();
for($x = 0;$x < $aantal_codes;$x++)
{
    $codes[$x] = md5(rand_str(60));        
}
$code_id = rand(0, 4);
$juiste_code = $codes[ $code_id ];
$_SESSION['captcha'] = $juiste_code;

echo "<tr><td><b>Klik op dit plaatje:</b> <img src='images/$code_id.gif'></td></tr>";
echo"<tr><td>";
for($x = 0;$x < $aantal_codes;$x++)
{   
    ?> 
|<img src="images/<?=$x;?>.gif" border="0" style="cursor: pointer" onclick="forms[0].captcha.value='<?=$codes[$x];?>';forms[0].submit();" value="<?=$x?>">
    
    <?php    

}
?>
</form>
 </td></tr>
                        
    </tr>
</table>
        </td></tr></table>
        </div>

        <table width='100%' cellspacing='2' cellpadding='2'>
            <tr>
        
                <td class='content_bottom'></td>
            </tr>
        </table>
        <br>        </div>
    </td>
    </tr>

    </table>
    </td>



<script language="javascript">
    function checkError(pForm){
        var errormsg = '';

        if(pForm.captcha.value.length != 4) errormsg += 'Je hebt geen geldige code ingevuld!<br>';
        if(pForm.sel.value != 'true') errormsg += 'Je hebt geen activiteit gekozen!<br>';

        if(errormsg != ''){
            showError(errormsg);
            return false;
        }
        return true;
    }
</script>        </div>
    </td>
    </tr>

    </table>
    </td>
<?}
if($_POST['crime'] < 6 && $error == niks){
$_SESSION['mission'] = "Voer een kleine misdaad met succes uit";
}
if($_POST['crime'] > 5 && $_POST['crime'] < 11 && $error == niks){
$_SESSION['mission'] = "Voer een grote misdaad met succes uit";
}
?>