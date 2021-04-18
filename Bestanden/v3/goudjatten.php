<?php 

    ################################################## 
    ### Naam:             Goudmijn                    ### 
    ### Maker:            SC-Scripting             ### 
    ### Website:        http://www.sc-scripting.nl ### 
    ### Email:            info@sc-scripting.nl     ### 
    ##################################################                 
             
?> 

<div class="title_bg"> 
            <div class="title">Goud Stelen</div> 
        </div> 


<form method="POST"> 
<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;"> 
        <table cellpadding="0" cellspacing="0" width="100%"><tr><td> 
<br>
<center><IMG src="images/crimes/gold.jpg" height="215" width="200"></center></br>
            <br>
            Hier mag je om de  <strong>5</strong> minuten proberen een goud transport te overvallen.<br>
            Je kan je gestolen goud gaan verkopen bij de <a href="index.php?a=goud_smit">goud smit</a>. <br>
<br>
            Momenteel heb je <strong><?php echo $data->goud ?></strong> kilo goud. <br>
<br>
            <center><input type='submit' name='graaf' value='Jat Goud!'> </center>
        </td> 
    </tr> 
</table> 
</div> 
</form> 

<?php 

if(isset($_POST['graaf'])) { 
   $wTijd = $data->goud_graven - time(); 
   if($data->goud_graven > time()) { 
       echo "Je moet nog <strong>".$wTijd."</strong> seconden wachten, voordat je weer een poging mag wagen."; 
   } else { 
       $Goud = rand(1,5); 
       $nTijd = time()+300; 
        
           # We updaten even de speler. 
           mysql_query("UPDATE `users` SET `goud`=`goud`+'{$Goud}', `goud_graven`='{$nTijd}' WHERE `login`='$data->login'"); 
           echo "Wat een geluk, je hebt <strong>".$Goud."</strong> kilo goud gejat!"; 
            
   } 

}

?>
</table>