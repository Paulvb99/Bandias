<?
if($data->killers/$data->tabakmax > 249 && $data->attwins/$data->tabakmax > 406 && $data->killcount/$data->tabakmax > 7){
mysql_query("UPDATE `users` SET `tabakmax`=`tabakmax`+'1' WHERE `id`='$data->id'");
$data->tabakmax += 1;
}
$pruimmax = $data->tabakmax*500;
$vanmax = $data->tabakmax*600;
$drummax = $data->tabakmax*700;
$lmmax = $data->tabakmax*800;
$kentmax = $data->tabakmax*900;
$pantermax = $data->tabakmax*1000;
if($_POST['drug'] == 1){
if($data->contant >= 7500*$_POST['number']){
if(ctype_digit($_POST['number'])){
if($_POST['number']+$data->pruimtabakupgr <= $pruimmax){
$prijs = 7500 * $_POST['number'];
$error = niks;
mysql_query("UPDATE `users` SET `contant`=`contant`-'".$prijs."',`pruimtabakupgr`=`pruimtabakupgr`+'{$_POST['number']}' WHERE `login`='$data->login'");
}
else{$error = 3;}
}
else{$error = 1;}
}
else{$error = 2;}
}
if($_POST['drug'] == 2){
if($data->contant >= 10000*$_POST['number']){
if($_POST['number'] > 0){
if($_POST['number']+$data->vannelleupgr <= $vanmax){
$prijs = 10000 * $_POST['number'];
$error = niks;
mysql_query("UPDATE `users` SET `contant`=`contant`-'".$prijs."',`vannelleupgr`=`vannelleupgr`+'{$_POST['number']}' WHERE `login`='$data->login'");
}
else{$error = 3;}
}
else{$error = 1;}
}
else{$error = 2;}
}
if($_POST['drug'] == 3){
if($data->contant >= 15000*$_POST['number']){
if($_POST['number'] > 0){
if($_POST['number']+$data->drumupgr <= $drummax){
$prijs = 15000 * $_POST['number'];
$error = niks;
mysql_query("UPDATE `users` SET `contant`=`contant`-'".$prijs."',`drumupgr`=`drumupgr`+'{$_POST['number']}' WHERE `login`='$data->login'");
}
else{$error = 3;}
}
else{$error = 1;}
}
else{$error = 2;}
}
if($_POST['drug'] == 4){
if($data->contant >= 20000*$_POST['number']){
if($_POST['number'] > 0){
if($_POST['number']+$data->lmupgr <= $lmmax){
$prijs = 20000 * $_POST['number'];
$error = niks;
mysql_query("UPDATE `users` SET `contant`=`contant`-'".$prijs."',`lmupgr`=`lmupgr`+'{$_POST['number']}' WHERE `login`='$data->login'");
}
else{$error = 3;}
}
else{$error = 1;}
}
else{$error = 2;}
}
if($_POST['drug'] == 5){
if($data->contant >= 25000*$_POST['number']){
if($_POST['number'] > 0){
if($_POST['number']+$data->kentupgr <= $kentmax){
$prijs = 25000 * $_POST['number'];
$error = niks;
mysql_query("UPDATE `users` SET `contant`=`contant`-'".$prijs."',`kentupgr`=`kentupgr`+'{$_POST['number']}' WHERE `login`='$data->login'");
}
else{$error = 3;}
}
else{$error = 1;}
}
else{$error = 2;}
}
if($_POST['drug'] == 6){
if($data->contant >= 30000*$_POST['number']){
if($_POST['number'] > 0){
if($_POST['number']+$data->panterupgr <= $pantermax){
$prijs = 30000 * $_POST['number'];
$error = niks;
mysql_query("UPDATE `users` SET `contant`=`contant`-'".$prijs."',`panterupgr`=`panterupgr`+'{$_POST['number']}' WHERE `login`='$data->login'");
}
else{$error = 3;}
}
else{$error = 1;}
}
else{$error = 2;}
}
$pruimmax = number_format($data->tabakmax*500, 0, '.' , '.');
$vanmax = number_format($data->tabakmax*600, 0, '.' , '.');
$drummax = number_format($data->tabakmax*700, 0, '.' , '.');
$lmmax = number_format($data->tabakmax*800, 0, '.' , '.');
$kentmax = number_format($data->tabakmax*900, 0, '.' , '.');
$pantermax = number_format($data->tabakmax*1000, 0, '.' , '.');
if($error == niks){
$_SESSION['mission'] = "Koop een tabak upgrade";
?>
            <table width="100%">
    <tr>
        <td align="center">
            <br><br><br><br>
            <table class="div_popup" align="center">
                <tr>
                    <td>
                        De tabaksplanten zijn aangemaakt voor je                   </td>
                </tr>
                <tr>
                    <td>
                        <br><br>
                            <a href="index.php?a=tabakupgrades" class="msg_ok">Klik hier indien je niet automatisch verder gaat.</a>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<script language="javascript">
    setTimeout("document.location.href='index.php?a=drugsupgrades'",(3000*2));
</script>
        </div>
    </td>
    </tr>

    </table>
    </td>
<?}
if($error == 1){
?>
            <table width="100%">
    <tr>
        <td align="center">
            <br><br><br><br>
            <table class="div_popup_error" align="center">
                <tr>
                    <td style="color:red">
                        <b>FOUT!</b><br><br>Er is geen aantal ingevuld                  </td>
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
<?}
if($error == 2){
?>
            <table width="100%">
    <tr>
        <td align="center">
            <br><br><br><br>
            <table class="div_popup_error" align="center">
                <tr>
                    <td style="color:red">
                        <b>FOUT!</b><br><br>Je hebt niet genoeg geld om deze tabakplant(en) te kopen                 </td>
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
<?}
if($error == 3){
?>
            <table width="100%">
    <tr>
        <td align="center">
            <br><br><br><br>
            <table class="div_popup_error" align="center">
                <tr>
                    <td style="color:red">
                        <b>FOUT!</b><br><br>Je wil meer kopen dan waar je ruimte voor hebt                  </td>
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
<?}
if($error == ""){
?>

        <div class="title_bg"><div style="font-size:17px; color:#1b1a17; margin-left:10px; padding-top:4px;">Tabaks upgrades</div></div>
        <div style="width:100%; height:auto; background:#c3b79d; font-family:arial; font-size:12px; color:#2a190e;">
            <div style="padding:5px; padding-bottom:10px;">
            Koop hier tabakplanten om je eigen tabak te kweken.           </div>
        </div>

        <script language="javascript">
            function openTab(pTabPage,pTab){
                                document.getElementById('drug_main').style.display = 'none';
                                document.getElementById('drug_explain').style.display = 'none';

                document.getElementById(pTabPage).style.display = 'block';

                                document.getElementById('tab1').style.background = '';
                document.getElementById('tab1').style.fontWeight = 'normal';
                                document.getElementById('tab2').style.background = '';
                document.getElementById('tab2').style.fontWeight = 'normal';

                document.getElementById(pTab).style.background = 'url(\'images/tab_info_arrow.gif\') bottom no-repeat';
                document.getElementById(pTab).style.fontWeight = 'bold';
            }
        </script>
        <div style="width:100%; height:25px; background:url('images/tab_info_bg.jpg') repeat-x; font-family:arial; font-size:12px; color:#2a190e;">
                                    <div id="tab1" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px; background:url('images/tab_info_arrow.gif') bottom no-repeat; font-weight:bold;"><a href="#" onclick="openTab('drug_main','tab1'); return false">Koop tabaksplanten</a></div>
                                                <div style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px;">|</div>
                                                <div id="tab2" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px;"><a href="#" onclick="openTab('drug_explain','tab2'); return false">Hoe werkt dit?</a></div>
                                </div>

        <div style="background-color:#dbd2b7; ">
        <br>
        <table cellpadding="4" cellspacing="0" width="100%" align="center"><tr><td>
            <div id="drug_main">
            <table width="100%" cellspacing="2" cellpadding="2" class="mod_list">
            <tr>
                <td colspan="3"><big><b>Pruimtabak Upgrade</b></big></td>
            </tr>
            <tr>
                <td rowspan="4" style="text-align:center;" width="165"><img src="images/drugs/pruimtabak.jpg" heigth="100" alt="Pruimtabak Upgrade" /></td>
                <td class="icon"><img src="images/icons_gif/money.gif"></td>
                <td>Prijs: <strong>&euro; 7.500,-</strong> per upgrade</td>

            </tr>
            <tr>
                <td class="icon"><img src="images/icons_gif/pill.gif" alt="Tabak" /></td>
                <td>Huidige productie: <strong><?echo$data->pruimtabakupgr;?></strong> zakje(s) per dag</td>
            </tr>
            <tr>
                <td class="icon"><img src="images/icons_gif/pill_go.gif" alt="Tabak" /></td>

                <td>

                <form method="post">
                <input type="hidden" name="drug" value="1">
                                    <input type="text" name="number" class="input" size="5">
                    <input type="submit" value="Kopen!" class="mod_submit">

                </td>   </form>
            </tr>
            <tr>
                <td class="icon" style="vertical-align:top;"><img src="images/icons_gif/information.gif" alt="Informatie" /></td>
                <td>Deze tabaksplanten zijn beschikbaar vanaf de rang <b>Groentje</b>. Je maximale haalbare productie capaciteit is momenteel <b><?echo$pruimmax;?></b> zakjes per dag.</td>
            </tr>
        </table>
    <br>
            <table width="100%" cellspacing="2" cellpadding="2" class="mod_list">
            <tr>
                <td colspan="3"><big><b>Van Nelle Upgrade</b></big></td>
            </tr>
            <tr>
                <td rowspan="4" style="text-align:center;" width="165"><img src="images/drugs/vannelle.gif" style="width:120px;" alt="Van Nelle Upgrade" /></td>
                <td class="icon"><img src="images/icons_gif/money.gif"></td>
                <td>Prijs: <strong>&euro; 10.000,-</strong> per upgrade</td>

            </tr>
            <tr>
                <td class="icon"><img src="images/icons_gif/pill.gif" alt="Tabak" /></td>
                <td>Huidige productie: <strong><?echo$data->vannelleupgr;?></strong> zakje(s) per dag</td>
            </tr>
            <tr>
                <td class="icon"><img src="images/icons_gif/pill_go.gif" alt="Tabak" /></td>

                <td>

                <form method="post">
                <input type="hidden" name="drug" value="2">
                                    <input type="text" name="number" class="input<?if($data->rank < 2){?>_disabled<?}?>" size="5"<?if($data->rank < 2){?> disabled="true"<?}?>>
                    <input type="submit" value="Kopen!" class="<?if($data->rank < 2){?>submit_disabled"  disabled="true"<?}else{?>mod_submit"<?}?>>

                </td>   </form>
            </tr>
            <tr>
                <td class="icon" style="vertical-align:top;"><img src="images/icons_gif/information.gif" alt="Informatie" /></td>
                <td>Deze tabaksplanten zijn beschikbaar vanaf de rang <b>Loopjongen</b>. Je maximale haalbare productie capaciteit is momenteel <b><?echo$vanmax;?></b> zakjes per dag.</td>
            </tr>
        </table>
    <br>
            <table width="100%" cellspacing="2" cellpadding="2" class="mod_list">
            <tr>
                <td colspan="3"><big><b>Drum Upgrade</b></big></td>
            </tr>
            <tr>
                <td rowspan="4" style="text-align:center;" width="165"><img src="images/drugs/drum.gif" style="width:120px;" alt="Drum Upgrade" /></td>
                <td class="icon"><img src="images/icons_gif/money.gif"></td>
                <td>Prijs: <strong>&euro; 15.000,-</strong> per upgrade</td>

            </tr>
            <tr>
                <td class="icon"><img src="images/icons_gif/pill.gif" alt="Tabak" /></td>
                <td>Huidige productie: <strong><?echo$data->drumupgr;?></strong> zakje(s) per dag</td>
            </tr>
            <tr>
                <td class="icon"><img src="images/icons_gif/pill_go.gif" alt="Tabak" /></td>

                <td>

                <form method="post">
                <input type="hidden" name="drug" value="3">
                                    <input type="text" name="number" class="input<?if($data->rank < 4){?>_disabled<?}?>" size="5"<?if($data->rank < 4){?> disabled="true"<?}?>>
                    <input type="submit" value="Kopen!" class="<?if($data->rank < 4){?>submit_disabled"  disabled="true"<?}else{?>mod_submit"<?}?>>

                </td>   </form>
            </tr>
            <tr>
                <td class="icon" style="vertical-align:top;"><img src="images/icons_gif/information.gif" alt="Informatie" /></td>
                <td>Deze tabaksplanten zijn beschikbaar vanaf de rang <b>Winkeldief</b>. Je maximale haalbare productie capaciteit is momenteel <b><?echo$drummax;?></b> zakjes per dag.</td>
            </tr>
        </table>
    <br>
            <table width="100%" cellspacing="2" cellpadding="2" class="mod_list">
            <tr>
                <td colspan="3"><big><b>L&M Upgrade</b></big></td>
            </tr>
            <tr>
                <td rowspan="4" style="text-align:center;" width="165"><img src="images/drugs/lm.gif" width="80" heigth="100" alt="L&M Upgrade" /></td>
                <td class="icon"><img src="images/icons_gif/money.gif"></td>
                <td>Prijs: <strong>&euro; 20.000,-</strong> per upgrade</td>

            </tr>
            <tr>
                <td class="icon"><img src="images/icons_gif/pill.gif" alt="Tabak" /></td>
                <td>Huidige productie: <strong><?echo$data->lmupgr;?></strong> doosje(s) per dag</td>
            </tr>
            <tr>
                <td class="icon"><img src="images/icons_gif/pill_go.gif" alt="Tabak" /></td>

                <td>

                <form method="post">
                <input type="hidden" name="drug" value="4">
                                    <input type="text" name="number" class="input<?if($data->rank < 6){?>_disabled<?}?>" size="5"<?if($data->rank < 6){?> disabled="true"<?}?>>
                    <input type="submit" value="Kopen!" class="<?if($data->rank < 6){?>submit_disabled"  disabled="true"<?}else{?>mod_submit"<?}?>>

                </td>   </form>
            </tr>
            <tr>
                <td class="icon" style="vertical-align:top;"><img src="images/icons_gif/information.gif" alt="Informatie" /></td>
                <td>Deze tabaksplanten zijn beschikbaar vanaf de rang <b>Mobster</b>. Je maximale haalbare productie capaciteit is momenteel <b><?echo$lmmax;?></b> zakjes per dag.</td>
            </tr>
        </table>
    <br>
            <table width="100%" cellspacing="2" cellpadding="2" class="mod_list">
            <tr>
                <td colspan="3"><big><b>Kent Upgrade</b></big></td>
            </tr>
            <tr>
                <td rowspan="4" style="text-align:center;" width="165"><img src="images/drugs/kent.gif" style="width:120px;" alt="Kent Upgrade" /></td>
                <td class="icon"><img src="images/icons_gif/money.gif"></td>
                <td>Prijs: <strong>&euro; 25.000,-</strong> per upgrade</td>

            </tr>
            <tr>
                <td class="icon"><img src="images/icons_gif/pill.gif" alt="Tabak" /></td>
                <td>Huidige productie: <strong><?echo$data->kentupgr;?></strong> doosje(s) per dag</td>
            </tr>
            <tr>
                <td class="icon"><img src="images/icons_gif/pill_go.gif" alt="Tabak" /></td>

                <td>

                <form method="post">
                <input type="hidden" name="drug" value="5">
                                    <input type="text" name="number" class="input<?if($data->rank < 8){?>_disabled<?}?>" size="5"<?if($data->rank < 8){?> disabled="true"<?}?>>
                    <input type="submit" value="Kopen!" class="<?if($data->rank < 8){?>submit_disabled"  disabled="true"<?}else{?>mod_submit"<?}?>>

                </td>   </form>
            </tr>
            <tr>
                <td class="icon" style="vertical-align:top;"><img src="images/icons_gif/information.gif" alt="Informatie" /></td>
                <td>Deze tabaksplanten zijn beschikbaar vanaf de rang <b>Locale leider</b>. Je maximale haalbare productie capaciteit is momenteel <b><?echo$kentmax;?></b> doosjes per dag.</td>
            </tr>
        </table>
    <br>
            <table width="100%" cellspacing="2" cellpadding="2" class="mod_list">
            <tr>
                <td colspan="3"><big><b>Panter Upgrade</b></big></td>
            </tr>
            <tr>
                <td rowspan="4" style="text-align:center;" width="165"><img src="images/drugs/panter.gif" style="width:120px;" alt="Panter Upgrade" /></td>
                <td class="icon"><img src="images/icons_gif/money.gif"></td>
                <td>Prijs: <strong>&euro; 30.000,-</strong> per upgrade</td>

            </tr>
            <tr>
                <td class="icon"><img src="images/icons_gif/pill.gif" alt="Tabak" /></td>
                <td>Huidige productie: <strong><?echo$data->panterupgr;?></strong> doosje(s) per dag</td>
            </tr>
            <tr>
                <td class="icon"><img src="images/icons_gif/pill_go.gif" alt="Tabak" /></td>

                <td>

                <form method="post">
                <input type="hidden" name="drug" value="6">
                                    <input type="text" name="number" class="input<?if($data->rank < 10){?>_disabled<?}?>" size="5"<?if($data->rank < 10){?> disabled="true"<?}?>>
                    <input type="submit" value="Kopen!" class="<?if($data->rank < 10){?>submit_disabled"  disabled="true"<?}else{?>mod_submit"<?}?>>

                </td>   </form>
            </tr>
            <tr>
                <td class="icon" style="vertical-align:top;"><img src="images/icons_gif/information.gif" alt="Informatie" /></td>
                <td>Deze tabaksplanten zijn beschikbaar vanaf de rang <b>Godfather</b>. Je maximale haalbare productie capaciteit is momenteel <b><?echo$pantermax;?></b> doosjes per dag.</td>
            </tr>
        </table>
    <br>
        </div>

    <div id="drug_explain" style="display:none">
        Met tabaksplanten produceer je elke nacht het aantal zakjes / doosjes tabak wat je geupgrade hebt.<br>Dit tabak kan je dan weer verkopen om geld te verdienen.<br><br>
        Je hebt nu <b><?echo$data->tabakmax;?> keer</b> de tabakcapaciteit!<br><br>
        Om de maximale tabakcapaciteit te vergroten moet je genoeg killers, gewonnen gevechten en vermoorde leden hebben. Hieronder zie je hoeveel je overal voor nodig hebt;<br><br>
        <center>
        <table width="65%" class="mod_list">
            <tr>
                <td><b>Type</b></td>
                <td width="5%"></td>
                <td align="center"><b>Huidig</b></td>
                <td width="5%"></td>
                <td align="center"><b>Nodig</b></td>
            </tr>

            <tr>
<?
$killersnodig = $data->tabakmax*250;
$attwinsnodig = $data->tabakmax*407;
$killsnodig = $data->tabakmax*8;
?>
                <td style="background:#c8ada3">Killers</td>
                <td align="center" style="background:#c8ada3"><img src="images/icons_gif/bricks.gif" alt="Killers"></td>
                <td align="center" style="background:#c8ada3"><?echo$data->killers;?></td>
                <td align="center" style="background:#c8ada3"><img src="images/icons_gif/bricks.gif" alt="Killers"></td>
                <td align="center" style="background:#c8ada3"><?echo$killersnodig;?></td>
            </tr>

            <tr>
                <td style="background:#c8ada3">Gewonnen gevechten</td>
                <td align="center" style="background:#c8ada3"><img src="images/icons_gif/brick_add.gif" alt="Gewonnen gevechten"></td>
                <td align="center" style="background:#c8ada3"><?echo$data->attwins;?></td>
                <td align="center" style="background:#c8ada3"><img src="images/icons_gif/brick_add.gif" alt="Gewonnen gevechten"></td>
                <td align="center" style="background:#c8ada3"><?echo$attwinsnodig;?></td>
            </tr>

            <tr>
                <td style="background:#c8ada3">Vermoorde Leden</td>
                <td align="center" style="background:#c8ada3"><img src="images/icons_gif/user_gray.gif" alt="Vermoorde OSBanditi"></td>
                <td align="center" style="background:#c8ada3"><?echo$data->killcount;?></td>
                <td align="center" style="background:#c8ada3"><img src="images/icons_gif/user_gray.gif" alt="Vermoorde OSBanditi"></td>
                <td align="center" style="background:#c8ada3"><?echo$killsnodig;?></td>
            </tr>
        </table>
        </center>
        <BR><BR>
    </div>

        </td></tr></table>
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
<?}?>