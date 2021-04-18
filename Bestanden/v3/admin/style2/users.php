<?
include ("config.php");
if($data->admin != "1") {
echo "Je bent geen Admin!";
exit;
}

?>
 <div class="headings alt">
                <h2 class="left">Leden</h2>
                </div>
                 <div class="contentbox">
<table width=100%>
<thead>
                    	<tr>
                        	<th>Gebruikersnaam</th>
                            <th>Email adres</th>
                        </tr>
                    </thead>
                    <tbody>



 <?php
$users2				= mysql_query("SELECT * FROM `users` ORDER BY `login` ASC");
while($users = mysql_fetch_object($users2))
{
$naam				= $users->login;


?>






<tr class=alt><td><a href="home2.php?a=userbewerken&x=<?echo$users->id;?>"><?php echo"$naam"; ?></a></td><td><?php echo"$users->email"; ?></td></tr> 
<?

}
 
  
?>

</table>
</div>