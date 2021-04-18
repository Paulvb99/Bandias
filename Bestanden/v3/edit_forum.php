<?
include("config.php");
if(isset($_GET['t'])){
header("Location: $sitelink/v3/posting.php?mode=edit&f={$_GET['f']}&t={$_GET['t']}");
}else{header("Location: $sitelink/v3/posting.php?mode=edit&f={$_GET['f']}&p={$_GET['p']}");}
  ?>
