							<div class="title_bg">
			<div class="title">Contact</div>
		</div>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
			<table width="100%" border="0" cellspacing="4" cellpadding="2">
	  <tr>
	    <td>
<?
 
  
  if (isset($_POST['mailing'])) 
  {

    $rMember = mysql_query("SELECT login, email FROM `users` WHERE `login`='Snake'");
    while ($aMember = mysql_fetch_assoc($rMember)) 
    {

      $sBericht = str_replace('{naam}', $aMember['login'], $_POST['mailing']);

      @mail($aMember['email'], $_POST['titel'], $sBericht, 'From: Streetgangs <contact@streetgangz.nl.tp>');
      echo 'verzonden';

    }

  }
  else
  {

?>



  <tr><td class="mainTxt">
<form method="post" action="" name="">
          <tr><td width=100><font size="2"><b>Onderwerp:</td>		<td><select name="titel" style="width: 150;">
	  			<option value="<? echo $data->login?> heeft een vraagje">Vraagje</option>
	  			<option value="<? echo $data->login?> heeft een tip">Idee/tip</option>
	  			<option value="<? echo $data->login?> meldt een cheater of hacker">Cheater/hacker melden</option>
	  			<option value="<? echo $data->login?> heeft iets te melden">Past er niet bij</option>
						</select></td></tr><br>
Bericht:<br>
<textarea cols=40 rows=10 name="mailing">

</textarea><p />

<input type="submit" value="Verstuur" name="submit">

</form>
Vergeet niet dat het een tijdje kan duren voordat je antwoord krijgt!
</table>


<?php

  }
  
  mysql_close($db);

?>
	    </td>
	  </tr>
	</table>
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
