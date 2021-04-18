<?
include("CONNECTIONFILE_3K45jd2DMD1.php");
if(!(@mysql_connect("$host","$user","$pass") && @mysql_select_db("$tablename"))) {?>Geen verbinding...<?}
    $dbres                              = mysql_query("SELECT * FROM `cron`");
    while($x = mysql_fetch_object($dbres))
      $update[$x->name]         = $x->time;
    if(floor($update['day']/86400) <= floor(time()/86400)) {
      $dbres                            = mysql_query("SELECT GET_LOCK('day_update',0)");
      if(mysql_result($dbres,0) == 1) {
        $cron_pass                      = "secretcronpassword";
        mysql_query("SELECT RELEASE_LOCK('day_update')");
$datum1 = (date("Y-m-"));
$datum2 = (date("d"));
$datum3 = time()+86400;
if($datum3 < 10){
$datum3 = "0$datum3";
}
$datum = time()+86400;

mysql_query("UPDATE `cron` SET `time`='$datum' WHERE `name`='day'");
mysql_query("UPDATE `users` SET `bankleft`=`bankstandard`");
mysql_query("UPDATE `users` SET `vipdays`=`vipdays`-'1' WHERE `vipdays`>'0'");
mysql_query("UPDATE `users` SET `geefeer`=`geefeer`+'1'");
mysql_query("UPDATE `users` SET `bank`=`bank`*'1.10' WHERE `dagenrente`>'0'");
mysql_query("UPDATE `users` SET `dagenrente`='0' WHERE `dagenrente`<'0'");
mysql_query("UPDATE `users` SET `bank`=`bank`*'1.05' WHERE `dagenrente`<'1' AND `vipdays`>'0'");
mysql_query("UPDATE `users` SET `bank`=`bank`*'1.03' WHERE `dagenrente`<'1' AND `vipdays`<'1'");
mysql_query("UPDATE `users` SET `dagenrente`=`dagenrente`-'1'");
mysql_query("UPDATE `users` SET `nederwiet`=`nederwiet`+`nederwietupgr`");
mysql_query("UPDATE `users` SET `paddo`=`paddo`+`paddoupgr`");
mysql_query("UPDATE `users` SET `xtc`=`xtc`+`xtcupgr`");
mysql_query("UPDATE `users` SET `lsd`=`lsd`+`lsdupgr`");
mysql_query("UPDATE `users` SET `speed`=`speed`+`speedupgr`");
mysql_query("UPDATE `users` SET `opium`=`opium`+`opiumupgr`");
mysql_query("UPDATE `users` SET `pruimtabak`=`pruimtabak`+`pruimtabakupgr`");
mysql_query("UPDATE `users` SET `vannelle`=`vannelle`+`vannelleupgr`");
mysql_query("UPDATE `users` SET `drum`=`drum`+`drumupgr`");
mysql_query("UPDATE `users` SET `lm`=`lm`+`lmupgr`");
mysql_query("UPDATE `users` SET `kent`=`kent`+`kentupgr`");
mysql_query("UPDATE `users` SET `panter`=`panter`+`panterupgr`");
mysql_query("UPDATE `users` SET `zwitsersegeld`=`zwitsersegeld`*'2'%`zwitsersegeld`");
mysql_query("UPDATE `users` SET `zwitsersehalen`='50000000'");
mysql_query("UPDATE `users` SET `zwitsersestorten`='5000000'");
mysql_query("UPDATE `users` SET `ban`='0' WHERE `ban3`='".date('d-m-Y')."'");
mysql_query("DELETE FROM `clicks`");
mysql_query("UPDATE `users` SET `vakantie`=`vakantie`-'1' WHERE `vakantie`>'0'");
mysql_query("UPDATE `users` SET `roulette`='0'");
mysql_query("UPDATE `users` SET `maffia`=`maffia`-'1'");
mysql_query("UPDATE `families` SET `attacked`=''");
mysql_query("UPDATE `families` SET `storten`='15'");
mysql_query("UPDATE `families` SET `clicks`=''");
mysql_query("DELETE FROM `chatlog`");
}}?>
