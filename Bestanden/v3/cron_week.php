<?
include("CONNECTIONFILE_3K45jd2DMD1.php");
if(!(@mysql_connect("$host","$user","$pass") && @mysql_select_db("$tablename"))) {?>Geen verbinding...<?}
$dbres                              = mysql_query("SELECT * FROM `cron`");
while($x = mysql_fetch_object($dbres))
$update[$x->name]         = $x->time;
    if(floor($update['week']/604800) <= floor(time()/604800)) {
      $dbres                            = mysql_query("SELECT GET_LOCK('week_update',0)");
      if(mysql_result($dbres,0) == 1) {
        $cron_pass                      = "secretcronpassword";
        mysql_query("SELECT RELEASE_LOCK('week_update')");
$datum1 = (date("Y-m"));
$day = (date("d"+7));
$dis = $d;
$datum = time()+604800;
mysql_query("UPDATE `cron` SET `time`='$datum' WHERE `name`='week'");
$loterij1 = mysql_query("SELECT * FROM `loterij`");
$loterij = mysql_fetch_object($loterij1);
$prijs1 = $loterij->lotenverkoop*750;
$prijs2 = $loterij->lotenverkoop*200;
$prijs3 = $loterij->lotenverkoop*50;
$stop1 = 0;
$stop2 = 0;
$stop3 = 0;
$user1 = mysql_query("SELECT * FROM `users` ORDER BY `loten` DESC");
while($user = mysql_fetch_object($user1)){
if($stop1 != 1){
$stop1++;
mysql_query("UPDATE `users` SET `bank`=`bank`+'$prijs1' WHERE `id`='$user->id'");
mysql_query("UPDATE `loterij` SET `winnaar1`='$user->login'");
}}
while($user2 = mysql_fetch_object($user1)){
if($stop2 != 2){
$stop2++;
if($stop2 == 2){
mysql_query("UPDATE `users` SET `bank`=`bank`+'$prijs2' WHERE `id`='$user2->id'");
mysql_query("UPDATE `loterij` SET `winnaar2`='$user2->login'");
}}}
while($user3 = mysql_fetch_object($user1)){
if($stop3 != 3){
$stop3++;
if($stop3 == 3){
mysql_query("UPDATE `users` SET `bank`=`bank`+'$prijs3' WHERE `id`='$user3->id'");
mysql_query("UPDATE `loterij` SET `winnaar3`='$user3->login'");
}}}
mysql_query("UPDATE `loterij` SET `lotenverkoop`='0'");
mysql_query("UPDATE `users` SET `loten`='0'");
mysql_query("UPDATE `users` SET `callcredits`=`callcredits`+'2'");
mysql_query("UPDATE `users` SET `callcredits`=`callcredits`-'2' WHERE `login`='arnootie'");
}}
?>
