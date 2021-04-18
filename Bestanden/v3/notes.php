<?
if($data->vipdays < 1){$error = 1;?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>Je moet een <b>betaald account</b> hebben om toegang te krijgen tot het kladblok					</td>
				</tr>
				<tr>
					<td>
						<br><br>
													<a href="#" onclick="history.go(-1); return false" class="error_ok">OK</a>
											</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
		</div>
	</td>
	</tr>

	</table>
	</td>
<?}else{
if(isset($_POST['submit'])){
mysql_query("UPDATE `users` SET `kladblok`='{$_POST['notes']}' WHERE `id`='$data->id'");
}?>
							<div class="title_bg">
			<div class="title">Kladblok</div>
		</div>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
		<table width="100%" class="mod_list" cellspacing="2" cellpadding="2">
<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
					<table>
			<tr>
				<td>
					Welkom op het kladblok!<br>Hier kun je dingen inzetten die je even moet onthouden, zoals mensen die brutaal waren, en je nog moet doden, of mensen die jij beschermt en je juist niet moet doden!<BR><BR><BR>				</td>
			</tr>
		</table>
			</td></tr></table>
		</div>
		<tr>
			<td>
	<form method="post">
		<textarea name="notes" cols="50" rows="15"><?if(!isset($_POST['submit'])){echo $data->kladblok;}else{echo $_POST['notes'];}?></textarea>
						</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="submit" class="mod_submit" value="Opslaan">
			</td>
		</tr>
 	</form>
</tr></td></table>
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
<?}?>
