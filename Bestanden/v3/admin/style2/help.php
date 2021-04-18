<?
include("config.php");
if($data->admin != "1") {
echo "Je bent geen Admin!";
exit;
}
?>

<link media="screen" href="css-v1.css" type="text/css" rel="stylesheet">

<table class=list cellpadding=3 cellspacing=1>
<tr><td class=listtitle><a class=listtitle href=help.php>Help Functie</a></td></tr>
<tr><td class=list><b>Help functie <?php echo $sitename ?>.</b><BR>
Dit is de help functie van het <?php echo $sitename ?> Admin panel. <br />
<br />
Q: <b>1) Hoe verban ik iemand?</b><br />
A: <u>Dit is heel erg simpel. Ga naar Home, (bovenaan) klik op "Algemene opties" en klik op "Straffen". Daar kan je ingeven <br />hoelang iemand verbannen moet worden en de reden. Op de opgegeven datum word de gebruiker weer "Vrij" gemaakt.<br /> Dit houd in dat de gebruiker weer in kan loggen.</u><br />
<br />
Q: <b>2) Hoe geef ik iemand Geld / Power / CallCredits?</b><br />
A: <u>Ook dit is simpel. Ga naar Home, (bovenaan) klik op "Algemene opties" en klik op "Doneren". Vul nu de gebruikersnaam, <br /> het aantal en de soort in, en het word er direct bijgeschreven.</u><br />
<br />
Q: <b>3) Hoe geef ik iemand een Strafpunt, of haal ik er 1 weg?</b><br />
A: <u>Ga naar Home, (bovenaan) en klik op "Algemene opties" en klik op "Strafpunt uitdelen". Vul nu de gebruikersnaam in, en <br /> klik op: "Uitdelen" of "Aftrekken", wat van toepassing is. Het strafpunt is nu gegeven / eraf gehaalt!</u><br />
<br />
Q: <b>4) Hoe zet ik sommige opties uit?</b><br />
A: <u>Ga naar Home, (bovenaan) en klik op "Algemene opties" en klik op "Opties aan/uitzetten". Vink nu aan wat je aan of uit <br />wilt zetten. Dit is meteen gebeurd, de links in de menus worden weggehaald, en je kan de opties zelf ook niet meer bereiken.</u><br />
<br />
Q: <b>5) Hoe verstuur ik een (massa) PB?</b><br />
A: <u>Ga naar Home, (bovenaan) en klik op "Algemene opties" en klik op "Massa PB". Vul nu niks in om het naar iedereen<br /> te sturen, of vul een gebruikersnaam in, om het naar iedereen te sturen. Typ de titel en het bericht in, en klik op <br />"Verstuur PB"!. Het bericht is nu meteen verstuurd!</u><br />
<br />
Q: <b>6) Hoe verstuur ik een Massa mail?</b><br />
A: <u>Ga naar Home, (bovenaan) en klik op "Algemene opties" en klik op "Massa mail". Vul nu het onderwerp en het bericht <br />in, en je kan het versturen. Het bericht komt meteen aan. Doe dit niet te vaak, want anders raakt je server overbelast!</u><br />
<br />
Q: <b>7) Hoe bekijk ik de login geschiedenis?</b><br />
A: <u>Ga naar Home, (bovenaan) en klik op "Login Geschiedenis". Hier staan alle namen van gebruikers in die in het Admin panel <br />zijn geweest.</u><br />
<br />
Q: <b>8) Hoe kan ik kijken of mijn Cronjobs actief zijn?</b><br />
A: <u>Ga naar Home, (bovenaan) en klik op "Cronjobs". Als er een vinkje achter staat, betekent het dat de Cron actief is.</u><br />
<br />
Q: <b>9) Hoe kan ik Logs bekijken?</b><br />
A: <u>Ga naar Home, (bovenaan) en klik op "Logs". Klik nu op een log die je wilt bekijken, en daar staat alle informatie die je <br /> nodig hebt.</u><br />
<br />
Q: <b>10) Hoe geef ik iemand rechten?</b><br />
A: <u>Ga naar Home, (bovenaan) en klik op "Algemene opties". Klik nu op "Rechten", voer de gebruikersnaam in, en klik aan <br /> wat je wilt doen. Ook dit is meteen actief.</u><br />
<br />
Q: <b>11) Hoe haal ik iemands ban (eerder) weg?</b><br />
A: <u>Normaal gesproken, word op de opgegeven datum de ban weggehaald. Indien je dit eerder wilt, ga dan naar Home, <br />(bovenaan) en klik op "Algemene opties". Klik nu op "Ban weghalen", voer de gebruikersnaam in, en klik op "Unban".<br /> Ook dit is meteen actief.</u><br />
<br />
Q: <b>12) Hoe kan ik zien wie er Admin is?</b><br />
A: <u>Ga naar Home, (bovenaan) en klik op "Algemene opties". Klik nu op "Admin info", en klik op "Wie zijn er Admin?".<br />Nu zie je een paar mensen staan, die Admin of Moderator zijn, en je ziet of ze Online of Offline zijn.</u><br />
<br />
</td></tr>