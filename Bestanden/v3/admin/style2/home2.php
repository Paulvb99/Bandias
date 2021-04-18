<?php
include ("config.php");
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
