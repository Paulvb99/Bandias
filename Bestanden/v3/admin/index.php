<?php
include "config.php";
if($data->admin != "1") {
echo "U heeft geen rechten om deze pagina te bezoeken!!";
exit;
}
if($_GET[x] == "doorgaan") {
print <<<ENDHTML
<SCRIPT LANGUAGE="JavaScript"> 
window.location="style2"; 
</script>
ENDHTML;
}
?>
<center>
<font face=Verdana size=2>Je wordt zometeen doorgestuurt naar het admin paneel!<BR>
.....: Bezig met laden :.....<BR>
</center>
<meta http-equiv="refresh" content="2;url=style2" />