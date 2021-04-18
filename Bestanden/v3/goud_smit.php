<?php 

    ################################################## 
    ### Naam:           Goud Smit                  ### 
    ### Maker:          SC-Scripting               ### 
    ### Website:        http://www.sc-scripting.nl ### 
    ### Email:          info@sc-scripting.nl       ### 
    ################################################## 


?> 

<div class="title_bg"> 
            <div class="title">Goud Smit</div> 
        </div> 

<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;"> 
        <table cellpadding="0" cellspacing="0" width="100%"><tr><td> 
            Welkom bij de goud smit. 
            Hier heb je de mogelijkheid je gegraven goud te verkopen. 
            Wij betalen <strong>&euro;1.250,-</strong> per kilo goud. 
            Momenteel heb heb je <strong><?php echo $data->goud ?></strong> kilo goud om te verkopen. 
               <form method="POST"><strong>Aantal:</strong>&nbsp;<input type="text" name="aantal" size="6" /> 
               <input type="submit" name="omzet" value="Zet mijn goud om in geld!" /></form> 
        </td> 
    </tr> 
</table> 
</div> 

<?php 

if (isset($_POST['omzet'])) 
{ 
    $geld = 1250 * $_POST['aantal']; 
     
    if (!isset($_POST['aantal']) or empty($_POST['aantal'])) 
    { 
        echo "Als je goud wilt verkopen, dan moet je ook en aantal opgeven."; 
    } 
    else 
        if ($_POST['aantal'] > $data->goud) 
        { 
            echo "Zoveel goud heb je helemaal niet!"; 
        } 
        else 
            if (!ctype_digit($_POST['aantal'])) 
            { 
                echo "Een aantal bestaat alleen uit getallen!"; 
            } 
            else 
            { 

                # We halen nog even een scan door het aantal heen, je weet maar nooit! 
                $aantalGoud = addslashes(htmlspecialchars(mysql_real_escape_string($_POST['aantal']))); 

                # We updaten even de speler. 
                mysql_query("UPDATE `users` SET `contant`=`contant`+'".$geld."', `goud`=`goud`-'".$aantalGoud."' WHERE `login`='".$data->login."'"); 
                echo "Je hebt succesvol <strong>". $_POST['aantal'] ."</strong> kilo goud verkocht  
                    voor <strong>&euro;" . number_format($geld, 0, ',','.') . ",-</strong>"; 
            } 

} 

?>
</table>