<?php 
if(isset($_POST['submit'])){ ?>
					<div class="title_bg">
			<div class="title">Woning verkocht</div>
		</div>
	
<center><img src="images/verkocht.gif"><br>
<br><br>Je woning is verkocht, klik <a href=index.php?a=woning><b>hier</b></a> om een nieuwe woning te kopen.</center>

<?php
$ran = array("0","10000","30000","50000","90000","100000","150000","200000","250000","300000","400000","500000","700000","900000","1100000");
$contantd = $ran[$data->woning];
$contant = $contantd/100*75;
$ba         = number_format($contant,0,",",".");
mysql_query("UPDATE `users` SET `woning`='0', `contant`=`contant`+'$contant' WHERE `login`='$data->login'");
?>
		
		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
		<table width="100%" class="mod_list" cellspacing="2" cellpadding="2">
	</table>
		</td></tr></table>
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
<?php
} else{
?>
							<div class="title_bg">
			<div class="title">Zeker?</div>
<br><br>Weet je zeker dat je je woning wilt verkopen?</ br>
<form method="post" action="">
<input type="submit" name="submit" class="mod_submit" value="Ja, ik ben dit huis zat"> <font size="4"><a href="index.php?a=landgoed">Nee</a></font>
<?php
}
?>
</table>