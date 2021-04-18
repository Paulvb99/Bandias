<?PHP
error_reporting(E_ALL);
// CONFIG
$cfg['php'] = true; // Het php script gedeelte weergeven? true=ja,false=nee
$cfg['opmaak'] = true; // Met opmaak of platte tekst, true=met opmaak,false= zonder
$cfg['gadoorerrors'] = array(8,2); // Met welke fouten hij niks moet doen maar alleen reporten
$cfg['sendmailerrors'] = array(256,512); // Bij welke errors hij een mail moet sturen
$cfg['regel'] = 5; // Hoeveel regels voor en bij php
$cfg['mail'] = 'info@firstcrime.nl'; // Naar welke mail?
// Newline \n
if($cfg['opmaak']==true) {
    define("NL","\n<br />");
} else {
    define("NL","\n");
}

// Hier start de functie
function error_handler($errno, $errmsg, $errfile, $errline, $vars) {

global $cfg;
    // Nummer -> Text
    $errors = array(
    1=>'E_ERROR',
    2=>'E_WARNING',
    4=>'E_PARSE',
    8=>'E_NOTICE',
    16=>'E_CORE_ERROR',
    32=>'E_CORE_WARNING',
    64=>'E_COMPILE_ERROR',
    128=>'E_COMPILE_WARNING',
    256=>'E_USER_ERROR',
    512=>'E_USER_WARNING',
    1024=>'E_USER_NOTICE');
    // Nummer(type) -> Simpele str
    $err = array(
    E_ERROR          => "Error",
    E_WARNING        => "Warning",
    E_PARSE          => "Parsing Error",
    E_NOTICE          => "Notice",
    E_CORE_ERROR      => "Core Error",
    E_CORE_WARNING    => "Core Warning",
    E_COMPILE_ERROR  => "Compile Error",
    E_COMPILE_WARNING => "Compile Warning",
    E_USER_ERROR      => "User Error",
    E_USER_WARNING    => "User Warning",
    E_USER_NOTICE    => "User Notice");
// Start bericht    
$msg = '';    
if($cfg['opmaak'] == true) {
    $msg .= '<div style="border: 1px solid #999;font-family:Verdana, Arial, Helvetica, sans-serif;font-size: 12px;"><div style="background: #999; color: #fff;">Error</div>';    
    $msg .= '<p style="padding: 5px;">';
}
$msg .= 'Error_date: '.date("m-d-Y H:i:s O").NL;
$msg .= 'Error_type: '.$errors[$errno].NL;
$msg .= 'Error_file: '.$errfile.NL;
$msg .= 'Error_line: '.$errline.NL;
$msg .= 'Error_msg: '.$errmsg.NL;
$msg .= 'Client_ip: '.$_SERVER['REMOTE_ADDR'].NL;    
$msg .= 'Client_uri: '.$_SERVER['REQUEST_URI'].NL;        
$msg .= 'Client_user-agent: '.$_SERVER['HTTP_USER_AGENT'].NL;
$msg .= 'Server_host: '.$_SERVER['HTTP_HOST'].NL;
    if(isset($_SERVER['HTTP_REFERER'])) {
    $msg .= 'Client_referer: '.$_SERVER['HTTP_REFERER'].NL;        
    }
    

// Simpele bericht, lijkt op de errors die php maakt
$msg .= 'Error_simpel: <b>'.$err[$errno].':</b>  '.$errmsg.' In <b>'.$errfile.'</b> On line <b>'.$errline.'</b>'.NL;

// De dingen voor de : dik gedrukt maken
if($cfg['opmaak'] == true) {
    $msg = preg_replace('#([A-Z]{1}[a-zA-Z_-]{2,})\:(.*?)#','<strong>$1</strong>:$2',$msg);
}
    
// Je kan alleen php doen als Opmaak ook mag. anders kan het niet
if($cfg['php'] == true && $cfg['opmaak'] == true) {    
    // Tabel voor php met lijn nummers
    $file = file($errfile);
    // Begin regel bepalen, kan geen min regels maken
    $beg = ($errline-$cfg['regel'] < 0) ? 0 : $errline-$cfg['regel'];
    // De regel mag niet boven het aantal regels uitkomen
    $eind = ($errline+$cfg['regel'] > count($file)) ? count($file) : $errline+$cfg['regel'];
    $str = '';
    // Regels uitlezen, voor en na
    for($i=$beg;$i<$eind;$i++) {
        $str .= $file[$i];
    }
    // Opmaak
    $msg .= '<br /><table style="line-height: 15px;font-size:12px;border: 1px solid #999;"cellspacing=0 cellpadding=0><tr><td colspan="2" style="text-align:center;border-bottom: 1px solid #999; background: #ececec;">Script, line: '.$errline.'</td></tr><tr><td style="border-right: 1px solid #999; background: #ececec;" valign="top">';
    
    // Regel nummers
    for($i=$beg-1;$i<$eind;$i++) {
        if($errline == $i) { // Dik maken als het de error regel is
            $msg.= '<b>'.$i.'</b>'.NL;
        } else {
            $msg.= $i.NL;
        }
    }
    // Highlighten, en de phptag weghalen, omdat het wel met kleurtjes moet
    $hig = highlight_string("<?php\n\n" .$str.' ?>',true);
    $hig = preg_replace (array ( '/.*<code>\s*<span style="color: #000000">/','#</span>\s*</code>#','#\?&gt;#s','#&lt;\?php#si','/<span[^>]*><\/span>/'),'',$hig); // Thnx someone from php.net
    
    // Weergeven
    $msg .= '</td><td valign="top" style="width: 300px;">';
    $msg .= $hig;
    $msg .= '</td></tr></table>';
}
if($cfg['opmaak'] == true) {
    $msg .= '</p></div></div>';
}

// Verder error afhandeling
    if(!in_array($errno,$cfg['gadoorerrors'])) {
        // Hier kan je wat met de berichten gaan doen, mailer of in de database pleuren, dat moet je zelf maar uitzoeken, Output is $msg
        echo $msg;
        
        // Bijvoorbeeld
        // mysql_query("INSERT INTO error (text) VALUES ('".$msg."')");
        
        if(in_array($errno,$cfg['sendmailerrors'])) {
            $subject = 'Error,'.$_SERVER['HTTP_HOST'].','.$err[$errno];
            $bericht = '<html><head><title>Errors, Error_HANdler</title></head><body>'.$msg.'</body></html>';
            $headers = "From: bug@firstcrime.nl\r\n";
            $headers .= "Return-Path: No-Reply <noreply@firstcrime.nl.nl>\r\n";
            $headers .= "Reply-To: No-repy <noreply@firstcrime.nl>\r\n";                
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
            if(!mail($cfg['mail'],$subject,$bericht,$headers)) {
                // Hier geen trigger error want dan komt het in een oneindige loop
                echo 'Mail fout, mail de webmaster';
            }
        }
    } 
    // De errors die niet boeien
}

set_error_handler('error_handler');
?> 