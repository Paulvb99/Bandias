<?php /* ------------------------- */
  include("connection.php");
function quote_smart($value) {
if (get_magic_quotes_gpc()) {
$value = stripslashes($value);
}
if(version_compare(phpversion(),"4.3.0") == "-1") {
return mysql_escape_string($value);
} else {
return mysql_real_escape_string($value);
}
}

  if(!(@mysql_connect("" . $host . "","" . $user . "","" . $pass . "") && @mysql_select_db("" . $tablename . ""))) {
?>
<html>


<head>
<title><?php echo $page->sitetitle; ?></title>
<link rel="stylesheet" type="text/css" href="<? echo $sitelink;?>/layout/layout<?php echo $page->layout; ?>/css/css.css">
<script language="javascript">
function showTxt(id) {
    document.getElementById(id).style.position		= "relative";
    document.getElementById(id).style.visibility	= "visible";
}
</script>
</head>


  <table width=50%>
    <tr><td class="subTitle"><b>FF OFFLINE</b></td></tr>
    <tr><td class="mainTxt">
<center>Offline wegens database fout!</center>
    </td></tr>
  </table>
</body>

</html>
<?
    exit;
  }
function vloeren($getal, $afronding)
   {
   // controleer of getallen een getal zijn
   if(!is_double($getal) AND !is_int($getal) AND (!is_double($afronding) AND !is_int($afronding)))
      {
      return $getal;
      }

   // controleer of de getallen geen 0 zijn
   if ($getal == 0 OR $afronding == 0)
      {
      return $getal;
      }

   // bereken getallen
   $deel_voor_komma = intval($getal / $afronding);
   $deel_na_komma = ($getal / $afronding) - intval($deel_voor_komma);
   $rest = $deel_na_komma * $afronding;

   // als $verschil groter is dan de helft van $afronding...
   if ($rest >= ($afronding / 2 ))
      {
      $afgerond = $getal + ($rest - $rest*2);
      }
   // als $verschil dus kleiner is dan de helft van $afronding...
   else
      {
      $afgerond = $deel_voor_komma * $afronding;
      }

   // geef resultaat terug
   return $afgerond;
   }

  error_reporting ( 0 );
  session_start();
  include("_include-funcs.php");
  if(isset($_SESSION['user']) || isset($_SESSION['login']) || isset($_SESSION['account']) || isset($_SESSION['thisuser'])) {
$hasdbres = 0;
  if(isset($_SESSION['user'])){
    $dbres				= mysql_query("SELECT *,UNIX_TIMESTAMP(signup) AS signup,UNIX_TIMESTAMP(online) AS online FROM users WHERE login='" . $_SESSION['user'] . "'");
$hasdbres = 1;
}
if($hasdbres == 0){
  if(!isset($_SESSION['user']) && isset($_SESSION['login'])){
    $dbres				= mysql_query("SELECT *,UNIX_TIMESTAMP(signup) AS signup,UNIX_TIMESTAMP(online) AS online FROM users WHERE login='" . $_SESSION['login'] . "'");
}
}
if($hasdbres == 0){
  if(!isset($_SESSION['login']) && isset($_SESSION['account'])){
    $dbres				= mysql_query("SELECT *,UNIX_TIMESTAMP(signup) AS signup,UNIX_TIMESTAMP(online) AS online FROM users WHERE login='" . $_SESSION['account'] . "'");
}
}
if($hasdbres == 0){
  if(!isset($_SESSION['account']) && isset($_SESSION['thisuser'])){
    $dbres				= mysql_query("SELECT *,UNIX_TIMESTAMP(signup) AS signup,UNIX_TIMESTAMP(online) AS online FROM users WHERE login='" . $_SESSION['thisuser'] . "'");
}
}
    $data				= mysql_fetch_object($dbres);
      $_SESSION['user']		= $data->login;
      $_SESSION['login']		= $data->login;
      $_SESSION['account']		= $data->login;
      $_SESSION['thisuser']		= $data->login;
      $_SESSION['user']		= $data->login;
    if($data->ip  == '')
    {
$IP = $_SERVER['REMOTE_ADDR'];    
mysql_query("UPDATE users SET IP='$IP' WHERE login='$data->login'");

}
  }
$fakedatum = (date("YmdHis"));

  
  
  foreach($_POST as $key => $value) {
    if(gettype($_POST[$key]) == "array")
      foreach($_POST[$key] as $key2 => $value2)
        $_POST[$key][$key2]		= addslashes($_POST[$key][$key2]);
    else
      $_POST[$key]			= addslashes($_POST[$key]);
  }
  foreach($_GET as $key => $value) {
    if(gettype($_GET[$key]) == "array")
      foreach($_GET[$key] as $key2 => $value2)
        $_GET[$key][$key2]		= addslashes($_GET[$key][$key2]);
    else
      $_GET[$key]			= addslashes($_GET[$key]);
  }
  foreach($_COOKIE as $key => $value) {
    if(gettype($_COOKIE[$key]) == "array")
      foreach($_COOKIE[$key] as $key2 => $value2)
        $_COOKIE[$key][$key2]		= addslashes($_COOKIE[$key][$key2]);
    else
      $_COOKIE[$key]			= addslashes($_COOKIE[$key]);
  }


  $clientIP				= $_SERVER['REMOTE_ADDR'];
  $forwardedFor				= ($_SERVER['HTTP_X_FORWARDED_FOR'] != "") ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['HTTP_CLIENT_IP'];
  $forwardedFor				= preg_replace('/, .+/','',$forwardedFor);
  $dbres				= mysql_query("SELECT `id` FROM `users` WHERE `level`='-1' AND `login`='{$data->login}'");

    mysql_query("UPDATE users SET online2='ja' WHERE UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(online) < 300");
    mysql_query("UPDATE users SET online2='nee' WHERE UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(online) >= 300");
if($data->rankvord >= 100 && $data->rank <10) {
$rank	                  	= array("","Groentje","Loopjongen","Zakkenroller","Winkeldief","Dief","Mobster","Moordenaar","Lokale leider","Leider","Godfather");
$data->rank = $data->rank+1;
$rank = $rank[$data->rank];
mysql_query("INSERT INTO messages(date,to,from,ip,title,content,date2,read,inbox,reply) values(NOW(),'$data->login','Anoniem','$data->IP','Promotie','Proficiat. Je bent gepromoveerd naar $rank!','$date2','0','1','0')");
mysql_query("UPDATE users SET rank=rank+'1',rankvord=rankvord-'100' WHERE login='".$data->login."'");
}
$gelderaf = $data->werknemers*50+$data->bewakers*50;
$rank	                  	= array("","Groentje","Loopjongen","Zakkenroller","Winkeldief","Dief","Mobster","Moordenaar","Lokale leider","Leider","Godfather");
$rank = $rank[$data->rank];
$city	                  	= array("","Turijn","Palermo","Milaan","Rome","Catania","Corleone");
$city = $city[$data->city];
$fam3 = mysql_query("SELECT * FROM families WHERE naam='$data->familie'");
$fam2 = mysql_fetch_object($fam3);
if($data->familie == "")
{
$familie = ("Geen familie");
}
if($data->famlevel == -1){
$familie = ("<a href=$sitelink/v3/index.php?a=famprofile&x=$fam2->id>Wachtlijst</a> - <a href=$sitelink/v3/leaveclan.php?x=$fam2->id>Uit wachtlijst?</a>");
}
if($data->familie != "" && $data->famlevel != -1){
$familie = ("<a href=$sitelink/v3/index.php?a=famprofile&x=$fam2->id>$data->familie</a>");
}
mysql_query("UPDATE users SET draaien='10800' WHERE vipdays<'1'");
mysql_query("UPDATE users SET draaien='7200' WHERE vipdays>'0'");
if($data->rankvord > 99){$data->rankvord = 100;}
$doden1 = mysql_query("SELECT * FROM users WHERE vermoord>'0'");
$numdood = mysql_num_rows($doden1);
$y = (date("Y"));
$m = (date("m"));
$d = (date("d"));
$nextd = $d+1;
if($nextd < 10){$nextd = "0$nextd";}
$changeveilingshow = "$nextd-$m-$y / 00:00";
$changeveiling = "$y-$m-$nextd 00:00:00";
if($numdood > 0){
while($doden = mysql_fetch_object($doden1)){
mysql_query("UPDATE vliegveld SET showtot='$changeveilingshow', tot='$changeveiling', eigenaar='', laatstebod='0', laatstebieder='' WHERE eigenaar='$doden->login'");
mysql_query("UPDATE station SET showtot='$changeveilingshow', tot='$changeveiling', eigenaar='', laatstebod='0', laatstebieder='' WHERE eigenaar='$doden->login'");
}
}
$vliegveld1 = mysql_query("SELECT * FROM vliegveld WHERE eigenaar=''");
while($vliegveld = mysql_fetch_object($vliegveld1)){
$fakedatum = (date("YmdHis"));
$overheen = $vliegveld->tot;
$overheen = str_replace(":", "",$overheen);
$overheen = str_replace("-", "",$overheen);
$overheen = str_replace(" ", "",$overheen);

if($fakedatum > $overheen){
if($vliegveld->laatstebieder != ""){
mysql_query("UPDATE vliegveld SET showtot='00-00-0000 / 00:00', tot='0000-00-00 00:00:00', eigenaar='$vliegveld->laatstebieder' WHERE stad='$vliegveld->stad'");
}else{mysql_query("UPDATE vliegveld SET showtot='$changeveilingshow', tot='$changeveiling' WHERE stad='$vliegveld->stad'");}}}
$station1 = mysql_query("SELECT * FROM station WHERE eigenaar=''");
while($station = mysql_fetch_object($station1)){
$fakedatum = (date("YmdHis"));
$overheen = $station->tot;
$overheen = str_replace(":", "",$overheen);
$overheen = str_replace("-", "",$overheen);
$overheen = str_replace(" ", "",$overheen);
if($fakedatum > $overheen){
if($station->laatstebieder != ""){
mysql_query("UPDATE station SET showtot='00-00-0000 / 00:00', tot='0000-00-00 00:00:00', eigenaar='$station->laatstebieder' WHERE stad='$station->stad'");
}else{mysql_query("UPDATE station SET showtot='$changeveilingshow', tot='$changeveiling' WHERE stad='$station->stad'");}}}

##############################
###   HIER IS GENOEG PLEK  ###
##############################

$online1 = mysql_query("SELECT * FROM chat_online");
while($online = mysql_fetch_object($online1)){
$dbres = mysql_query("SELECT * FROM users WHERE UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(online) < 300 AND login='$online->person'");
$user = mysql_fetch_object($dbres);
if($user->login != $online->person){
mysql_query("DELETE FROM chat_online WHERE person='$online->person'");
}}

$select = mysql_query("SELECT * FROM instellingen");
#
$page = mysql_fetch_object($select);
$dituur = date(H);
$verschil = $dituur-$data->aankomst;
if($data->aankomst != 25 && $data->aankomst != "" && $data->aankomst < $dituur){
mysql_query("UPDATE users SET aankomst='25',city='$data->aankomststad' WHERE login='$data->login'");
}
if($data->aankomst != 25 && $data->aankomst != "" && $dituur >= $data->aankomst){
mysql_query("UPDATE users SET aankomst='25',city='$data->aankomststad' WHERE login='$data->login'");
}

if($data->vakantie > 0){
    unset($_SESSION['login']);
    unset($_SESSION['thisuser']);
    unset($_SESSION['account']);
    unset($_SESSION['user']);
    unset($_SESSION['IP']);
    unset($_SESSION['data']);
   header("Location: $sitelink/index.php?vakantie");
exit;
}
$bank = $data->bank;
$contant = $data->contant;
$gebruikers = mysql_query("SELECT * FROM users");
$page->registered = mysql_num_rows($gebruikers);
$overheen = $data->vliegen;
$overheen = str_replace(":", "",$overheen);
$overheen = str_replace("-", "",$overheen);
$overheen = str_replace(" ", "",$overheen);
if($data->vliegen != "0000-00-00 00:00:00" && $fakedatum > $overheen){
mysql_query("UPDATE users SET vliegen='0000-00-00 00:00:00',city='$data->aankomststad' WHERE login='$data->login'");
}

if($data->vermoord > 0){
header("Location: $sitelink/v3/index.php?a=buycredits");
}

