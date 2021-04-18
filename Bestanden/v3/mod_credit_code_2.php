<div class="title_bg">
			<div class="title">Verzilver Code</div>
		</div>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
  <?php
$dbres2				= mysql_query("SELECT * FROM `codes` WHERE `code`='{$_POST["code"]}'");
$data2				= mysql_fetch_object($dbres2);
      if($_POST["code"] == "$data2->code" && $data2->gebruikt == "0") {
      echo '<font size="4">De volgende prijs: <b>'; echo $data2->prijs; echo ' '; echo $data2->prijssoort; echo '</b> is bijgeschreven!</font><br>';	
      mysql_query("UPDATE `users` SET `$data2->prijssoort`=`$data2->prijssoort`+'$data2->prijs' WHERE `login`='$data->login'");
      mysql_query("UPDATE `codes` SET `gebruikt`=`gebruikt`+'1' WHERE `code`='{$_POST["code"]}'");
}
      else{
      echo 'Je bent hier rechtstreeks gekomen, of de code is al gebruikt!';
      }
?>
             </div>

		<table width='100%' cellspacing='2' cellpadding='2'>
			<tr>
		
				<td class='content_bottom'></td>
			</tr>
		</table>
		<br>		</div>
	</td>
	</tr>

	</table>
	</td>