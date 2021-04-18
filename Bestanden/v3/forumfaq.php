<?
  include("config.php");
  session_start();
  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="nl-nl" xml:lang="nl-nl">
<head>

<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta http-equiv="content-language" content="nl-nl" />
<meta http-equiv="content-style-type" content="text/css" />
<meta http-equiv="imagetoolbar" content="no" />
<meta name="resource-type" content="document" />
<meta name="distribution" content="global" />
<meta name="copyright" content="2002-2006 phpBB Group" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<title>Banditi &bull; Veel gestelde vragen</title>

<link rel="stylesheet" href="./styles/ubuntu/theme/stylesheet.css" type="text/css" />
<link rel="stylesheet" href="./css/style.css" type="text/css" />

<script type="text/javascript" src="./js/prototype-1.6.0.2.js"></script>

	</head>




<script language="javascript">
// <![CDATA[

function popup(url, width, height, name)
      {
       if (!name)
       {
          name = '_popup';
       }

       window.open(url.replace(/&amp;/g, '&'), name, 'height=' + height + ',resizable=yes,scrollbars=yes,width=' + width);
         return false;
      }


function jumpto()
{
<?
$dbres = mysql_query("SELECT * FROM `forumreplies` WHERE `topic`='$topic->id'");
$num = mysql_num_rows($dbres);
$dezepagina = $_GET['start']/10+1;
$pages = floor($num/10)+1;
?>
	var page = prompt('Geef het paginanummer van de pagina waarnaar je wilt gaan:', '<?echo$dezepagina;?>');
	var perpage = '10';
	var maxpages = '<?echo$pages;?>';
	var base_url = '<?=$sitelink?>/v3/';

	if (page !== null && !isNaN(page) && page > 0 && page <= maxpages)
	{
		document.location.href = base_url.replace(/&amp;/g, '&') + '<?echo"viewtopic.php?f={$_GET['f']}&amp;t=$topic->id&amp;"?>start=' + ((page - 1) * perpage);
	}
}

/**
* Find a member
*/
function find_username()
      {
       popup(url, 760, 570, '_usersearch');
         return false;
      }

/**
* Mark/unmark checklist
* id = ID of parent container, name = name prefix, state = state [true/false]
*/
function marklist(id, name, state)
{
	var parent = document.getElementById(id);
	if (!parent)
	{
		eval('parent = document.' + id);
	}

	if (!parent)
	{
		return;
	}

	var rb = parent.getElementsByTagName('input');

	for (var r = 0; r < rb.length; r++)
	{
		if (rb[r].name.substr(0, name.length) == name)
		{
			rb[r].checked = state;
		}
	}
}
// ]]>
</script>
<body class="ltr">



<div align="center">

<table border=0px border-color=yellow cellspacing=0px cellpadding=0px width=1000px>

<tr>

<?include("left_column.php");?>
<a name="top"></a>
<div id="wrapheader" style="width:620px">

		<div class="title_bg" style="width:100%;">
			<div class="title_medium" style="width:100%" nowrap>
			<a href="./forum.php">Forumoverzicht</a>
			<span id="phpbb_show_topic" style="display:none;"> </span>
			</div>
		</div>


		<div style="width:100%; height:35px; background:url('../images/tab_info_bg.jpg') bottom repeat-x #c3b79d; font-family:arial; font-size:12px; color:#2a190e;">

			<div style="float:left; margin-top:8px;">

						<div id="" style="float:left; height:20px; margin:0px; padding:0px; margin-left: 5px;"><a href="./forumfaq.php">Help</a></div>

													<div id="" style="float:left; height:20px; margin:0px; padding:0px; margin-left: 5px;">|</div>
							<div id="" style="float:left; height:20px; margin:0px; padding:0px; margin-left: 5px;"><a href="./memberlist.php?mode=leaders">Het team</a></div>

			</div>

		</div>



</div>

<div id="wrapcentre" style="width:590px;">
<a name="faqtop"></a>

<div id="pagecontent">

	<table class="tablebg" width="100%" cellspacing="1">
	<tr>
		<th>Veel gestelde vragen</th>
	</tr>
	<tr>
		<td class="row1">
					<span class="gen"><b>Login en registratie vragen</b></span><br />
							<span class="gen"><a class="postlink" href="#f00">Waarom kan ik niet inloggen?</a></span><br />
							<span class="gen"><a class="postlink" href="#f01">Waarom moet ik me registreren?</a></span><br />
							<span class="gen"><a class="postlink" href="#f02">Waarom word ik automatisch uitgelogd?</a></span><br />
							<span class="gen"><a class="postlink" href="#f03">Hoe kan ik onzichtbaar zijn in de online gebruikers lijst?</a></span><br />
							<span class="gen"><a class="postlink" href="#f04">Ik weet mijn wachtwoord niet meer!</a></span><br />
							<span class="gen"><a class="postlink" href="#f05">Ik ben geregistreerd maar kan niet inloggen!</a></span><br />
							<span class="gen"><a class="postlink" href="#f06">Ik heb me ooit geregistreerd maar kan nu niet meer inloggen!?</a></span><br />
							<span class="gen"><a class="postlink" href="#f07">Wat is COPPA?</a></span><br />
							<span class="gen"><a class="postlink" href="#f08">Waarom kan ik niet registreren?</a></span><br />
							<span class="gen"><a class="postlink" href="#f09">Wat doet &quot;verwijder alle forum cookies&quot;?</a></span><br />
						<br />
					<span class="gen"><b>Gebruikers voorkeuren en instellingen</b></span><br />
							<span class="gen"><a class="postlink" href="#f10">Hoe verander ik mijn instellingen?</a></span><br />
							<span class="gen"><a class="postlink" href="#f11">De tijden zijn niet correct!</a></span><br />
							<span class="gen"><a class="postlink" href="#f12">Ik wijzigde de tijdzone, maar de tijd is nog steeds verkeerd!</a></span><br />
							<span class="gen"><a class="postlink" href="#f13">Mijn taal zit niet in de lijst!</a></span><br />
							<span class="gen"><a class="postlink" href="#f14">Hoe kan ik een afbeelding onder mijn gebruikersnaam plaatsen?</a></span><br />
							<span class="gen"><a class="postlink" href="#f15">Hoe verander ik mijn rang?</a></span><br />
							<span class="gen"><a class="postlink" href="#f16">Wanneer ik op de e-mail link van een gebruiker klik, moet ik inloggen?</a></span><br />
						<br />
					<span class="gen"><b>Vragen in verband met het plaatsen van berichten</b></span><br />
							<span class="gen"><a class="postlink" href="#f20">Hoe plaats ik een onderwerp in een forum?</a></span><br />
							<span class="gen"><a class="postlink" href="#f21">Hoe wijzig of verwijder ik een bericht?</a></span><br />
							<span class="gen"><a class="postlink" href="#f22">Hoe voeg ik een onderschrift toe aan mijn bericht?</a></span><br />
							<span class="gen"><a class="postlink" href="#f23">Hoe maak ik een poll?</a></span><br />
							<span class="gen"><a class="postlink" href="#f24">Hoe wijzig of verwijder ik een poll?</a></span><br />
							<span class="gen"><a class="postlink" href="#f25">Waarom kan ik een bepaald forum niet openen?</a></span><br />
							<span class="gen"><a class="postlink" href="#f26">Waarom kan ik geen bijlagen toevoegen?</a></span><br />
							<span class="gen"><a class="postlink" href="#f27">Waarom ontving ik een waarschuwing?</a></span><br />
							<span class="gen"><a class="postlink" href="#f28">Hoe kan ik berichten aan een moderator melden?</a></span><br />
							<span class="gen"><a class="postlink" href="#f29">Waarvoor dient de &quot;opslaan&quot; knop bij het plaatsen van een bericht?</a></span><br />
							<span class="gen"><a class="postlink" href="#f210">Waarom moet mijn bericht goedgekeurd worden?</a></span><br />
							<span class="gen"><a class="postlink" href="#f211">Hoe bump ik mijn onderwerp?</a></span><br />
						<br />
					<span class="gen"><b>Tekstopmaak en onderwerp soorten</b></span><br />
							<span class="gen"><a class="postlink" href="#f30">Wat is BBCode?</a></span><br />
							<span class="gen"><a class="postlink" href="#f31">Kan ik HTML gebruiken?</a></span><br />
							<span class="gen"><a class="postlink" href="#f32">Wat zijn smilies?</a></span><br />
							<span class="gen"><a class="postlink" href="#f33">Kan ik afbeeldingen plaatsen?</a></span><br />
							<span class="gen"><a class="postlink" href="#f34">Wat zijn globale mededelingen?</a></span><br />
							<span class="gen"><a class="postlink" href="#f35">Wat zijn mededelingen?</a></span><br />
							<span class="gen"><a class="postlink" href="#f36">Wat zijn sticky onderwerpen?</a></span><br />
							<span class="gen"><a class="postlink" href="#f37">Wat zijn gesloten onderwerpen?</a></span><br />
							<span class="gen"><a class="postlink" href="#f38">Wat zijn onderwerp iconen?</a></span><br />
						<br />
					<span class="gen"><b>Type gebruikers en gebruikersgroepen</b></span><br />
							<span class="gen"><a class="postlink" href="#f40">Wat zijn beheerders?</a></span><br />
							<span class="gen"><a class="postlink" href="#f41">Wat zijn moderators?</a></span><br />
							<span class="gen"><a class="postlink" href="#f42">Wat zijn gebruikersgroepen?</a></span><br />
							<span class="gen"><a class="postlink" href="#f43">Hoe word ik lid van een gebruikersgroep?</a></span><br />
							<span class="gen"><a class="postlink" href="#f44">Hoe word ik een groepsleider?</a></span><br />
							<span class="gen"><a class="postlink" href="#f45">Waarom staan verscheidene gebruikersgroepen in een andere kleur?</a></span><br />
							<span class="gen"><a class="postlink" href="#f46">Wat is de &quot;standaard gebruikersgroep&quot;?</a></span><br />
							<span class="gen"><a class="postlink" href="#f47">Waarvoor dient de &quot;het team&quot; link?</a></span><br />
						<br />
					<span class="gen"><b>Priv&eacute;berichten</b></span><br />
							<span class="gen"><a class="postlink" href="#f50">Ik kan geen priv&eacute;berichten sturen!</a></span><br />
							<span class="gen"><a class="postlink" href="#f51">Ik blijf ongewenste priv&eacute;berichten ontvangen!</a></span><br />
							<span class="gen"><a class="postlink" href="#f52">Ik heb spam of een e-mail met ongepaste inhoud van iemand op dit forum ontvangen!</a></span><br />
						<br />
					<span class="gen"><b>Vrienden en vijanden</b></span><br />
							<span class="gen"><a class="postlink" href="#f60">Waarvoor dient mijn vrienden en vijanden lijst?</a></span><br />
							<span class="gen"><a class="postlink" href="#f61">Hoe verwijder of voeg ik gebruikers toe aan mijn vrienden en/of vijanden lijst?</a></span><br />
						<br />
					<span class="gen"><b>Forums doorzoeken</b></span><br />
							<span class="gen"><a class="postlink" href="#f70">Hoe doorzoek ik het forum?</a></span><br />
							<span class="gen"><a class="postlink" href="#f71">Waarom levert mijn zoekopdracht geen resultaten op?</a></span><br />
							<span class="gen"><a class="postlink" href="#f72">Waarom resulteert mijn zoekopdracht in een lege pagina?</a></span><br />
							<span class="gen"><a class="postlink" href="#f73">Hoe zoek ik een gebruiker?</a></span><br />
							<span class="gen"><a class="postlink" href="#f74">Hoe kan ik mijn eigen berichten en onderwerpen vinden?</a></span><br />
						<br />
					<span class="gen"><b>Onderwerp abonnementen en bladwijzers</b></span><br />
							<span class="gen"><a class="postlink" href="#f80">Wat is het verschil tussen een bladwijzer en abonnement?</a></span><br />
							<span class="gen"><a class="postlink" href="#f81">Hoe abonneer ik me op specifieke forums of onderwerpen?</a></span><br />
							<span class="gen"><a class="postlink" href="#f82">Hoe zeg ik mijn abonnement op?</a></span><br />
						<br />
					<span class="gen"><b>bijlagen</b></span><br />
							<span class="gen"><a class="postlink" href="#f90">Welke bijlagen worden toegestaan op dit forum?</a></span><br />
							<span class="gen"><a class="postlink" href="#f91">Hoe vind ik al mijn bijlagen?</a></span><br />
						<br />
					<span class="gen"><b>phpBB 3 vragen</b></span><br />
							<span class="gen"><a class="postlink" href="#f100">Wie heeft dit forum geschreven?</a></span><br />
							<span class="gen"><a class="postlink" href="#f101">Waarom is de optie X niet beschikbaar?</a></span><br />
							<span class="gen"><a class="postlink" href="#f102">Wie contacteer ik omtrent misbruik en/of wettelijke kwesties in verband met dit forum?</a></span><br />
						<br />
				</td>
	</tr>
	<tr>
		<td class="cat">&nbsp;</td>
	</tr>
	</table>

	<br clear="all" />

			<table class="tablebg" width="100%" cellspacing="1">
		<tr>
			<td class="cat" align="center"><h4>Login en registratie vragen</h4></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f00"></a><b>&#187; Waarom kan ik niet inloggen?</b></div>
				<div class="postbody">Er zijn verschillende redenen mogelijk waarom je dit probleem hebt. Controleer eerst of je gebruikersnaam en wachtwoord kloppen. Indien ze correct zijn kun je de beheerder contacteren om zeker te zijn dat je niet verbannen bent. Het is ook mogelijk dat de forum configuratie fout is, dan moet dit door de beheerder opgelost worden.</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f01"></a><b>&#187; Waarom moet ik me registreren?</b></div>
				<div class="postbody">De beheerder heeft bepaald of je al dan niet geregistreerd moet zijn om berichten te plaatsen. Hoe dan ook, als je geregistreerd bent, kun je meer functies gebruiken. Zo kan je bijvoorbeeld een avatar opgeven, priv&eacute;berichten sturen, andere gebruikers e-mailen, lid worden van gebruikersgroepen, enz. Het registreren duurt maar even, dus we raden het zeker aan!</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f02"></a><b>&#187; Waarom word ik automatisch uitgelogd?</b></div>
				<div class="postbody">Als je de optie <em>log mij automatisch in bij ieder bezoek</em> niet aanvinkt, blijf je maar voor een bepaalde tijd ingelogd. Zo wordt vermeden dat anderen je account misbruiken. Om ingelogd te blijven, moet je bij het inloggen de optie aanvinken. We raden dit echter af als je het gebruik maakt van een openbare computer, bijvoorbeeld op school, in de bibliotheek, in een internet caf&eacute;, enz. Als deze optie niet beschikbaar is, heeft de beheerder deze uitgeschakeld.</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f03"></a><b>&#187; Hoe kan ik onzichtbaar zijn in de online gebruikers lijst?</b></div>
				<div class="postbody">In het gebruikerspaneel onder &quot;forum instellingen&quot;, vind je de optie <em>onzichtbaar als ik online ben</em>. Als je deze optie activeert door <samp>ja</samp> aan te duiden, zal je onzichtbaar zijn voor iedereen, behalve voor beheerders, moderators en jezelf.</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f04"></a><b>&#187; Ik weet mijn wachtwoord niet meer!</b></div>
				<div class="postbody">Geen paniek! Je kan je huidige wachtwoord niet terug krijgen, maar er is wel een mogelijk om het te resetten. Hiervoor moet je naar de login pagina gaan en klikken op <em>wachtwoord vergeten?</em>. Volg de instructies op het scherm en wat later kan je weer inloggen.</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f05"></a><b>&#187; Ik ben geregistreerd maar kan niet inloggen!</b></div>
				<div class="postbody">Controleer eerst of je gebruikersnaam en wachtwoord kloppen. Indien ze correct zijn kan &eacute;&eacute;n of meerdere zaken hiervan de oorzaak zijn. Indien COPPA geactiveerd is en je tijdens het registratieproces opgaf dat je jonger bent dan 13 jaar, moet je de ontvangen instructies opvolgen. Als dit niet het geval is, moet je account dan geactiveerd worden? Sommige forums vereisen dat iedere nieuwe account geactiveerd wordt, ofwel door jezelf of door een beheerder. Wanneer je je geregistreerd hebt werd ook medegedeeld of dit al dan niet nodig is. Indien je een e-mail ontvangen hebt, moet je de daarin opgegeven instructies volgen. Als je nooit een e-mail ontvangen hebt, was het opgegeven e-mailadres dan wel juist? &Eacute;&eacute;n van de redenen van activatie is om het aantal valse accounts te doen dalen. Als je zeker bent dat je e-mailadres correct was, neem dan contact op met de beheerder.</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f06"></a><b>&#187; Ik heb me ooit geregistreerd maar kan nu niet meer inloggen!?</b></div>
				<div class="postbody">De meest voorkomende oorzaken hiervoor zijn je gaf een verkeerde gebruikersnaam of wachtwoord op (controleer de e-mail met je registratie gegevens) of de beheerder verwijderde je account om &eacute;&eacute;n of andere reden. Indien dit laatste het geval is, heb je dan ooit een bericht geplaatst? Het is normaal dat forums om de zoveel tijd gebruikers, die nog geen berichten geplaatst hebben, verwijderen. Dit doen ze om de database qua omvang te verkleinen. Probeer je opnieuw te registreren en vermeng je in de discussies.</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f07"></a><b>&#187; Wat is COPPA?</b></div>
				<div class="postbody">COPPA is de afkorting voor het Engelse &quot;Child Online Privacy and Protection Act&quot;. Dit is een Amerikaanse wet van 1998 die vereist dat iedere website die mogelijk gegevens van jongeren onder de 13 jaar verzameld, hiervoor de toestemming heeft van de ouders. Deze toestemming moet schrijftelijk of op een andere wijze gegeven worden, zodat de ouders waten dat de website persoonlijke gegevens van hun kind, jonger dan 13, heeft. Indien je niet zeker bent of deze wet al dan niet op jouw of de website waarop je wilt registreren van toepassing is, neem dan contact op met een juridisch raadgever voor meer informatie. Houdt er rekening mee dat het phpBB team geen wettelijke informatie kan verschaffen en ook niet het aanspreekpunt is voor deze wetgeving, tenzij dit hieronder vermeldt wordt.</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f08"></a><b>&#187; Waarom kan ik niet registreren?</b></div>
				<div class="postbody">Mogelijk heeft de beheerder je IP-adres verbannen, of de gebruikersnaam die je opgeeft verboden. Tevens is het mogelijk dat de beheerder de registratie mogelijkheid heeft uitgeschakeld om zo de registratie van nieuwe gebruikers te voorkomen. Contacteer de beheerder voor verdere hulp.</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f09"></a><b>&#187; Wat doet &quot;verwijder alle forum cookies&quot;?</b></div>
				<div class="postbody">Verwijder alle forum cookies zorgt dat alle cookies die door phpBB3 aangemaakt werden, verwijdert worden. Deze cookies zorgen ervoor dat je ingelogd bent en geven ook de mogelijkheid, indien de beheerder dit inschakelde, om te zien welke onderwerpen je al gelezen hebt.</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
				</table>

		<br clear="all" />
			<table class="tablebg" width="100%" cellspacing="1">
		<tr>
			<td class="cat" align="center"><h4>Gebruikers voorkeuren en instellingen</h4></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f10"></a><b>&#187; Hoe verander ik mijn instellingen?</b></div>
				<div class="postbody">Als je geregistreerd bent, worden al je gegevens opgeslagen in de database. Om ze te wijzigen moet je op de <em>gebruikerspaneel</em> link klikken (deze staat meestal bovenaan op de pagina, maar dit kan verschillen), daarna kan je je instellingen wijzigen.</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f11"></a><b>&#187; De tijden zijn niet correct!</b></div>
				<div class="postbody">Het is mogelijk dat de tijd die gegeven wordt van een andere tijdzone is dan waarin jij woont. Als dit het geval is, moet je naar het gebruikerspaneel gaan en je tijdzone veranderen in een bepaald gebied (vb: Amsterdam, New York, Sydney, enz.). Wees er bewust van dat het veranderen van de tijdzone, zoals de meeste instellingen, alleen gedaan kunnen worden door geregistreerde gebruikers. Als je nog niet geregistreerd bent is dit een goed moment om dit te doen.</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f12"></a><b>&#187; Ik wijzigde de tijdzone, maar de tijd is nog steeds verkeerd!</b></div>
				<div class="postbody">Als je zeker bent dat je de correcte tijdzone en zomertijd goed hebt ingevuld en de tijd is nog steeds anders, is waarschijnlijk de tijd op de server verkeerd ingesteld en zullen de beheerders een correctie moeten maken.</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f13"></a><b>&#187; Mijn taal zit niet in de lijst!</b></div>
				<div class="postbody">De meest voorkomende reden hiervoor is dat de beheerder jouw taal niet ge&iuml;nstalleerd heeft, of dat nog niemand het forum in je taal vertaald heeft. Je kan altijd aan de beheerder vragen of hij het talen pakket dat jij nodig hebt wil installeren. Indien het nog niet bestaat, mag je gerust de vertaling maken. Meer informatie hieromtrent kan gevonden worden op de website van de phpBB groep (de link staat onderaan iedere pagina).</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f14"></a><b>&#187; Hoe kan ik een afbeelding onder mijn gebruikersnaam plaatsen?</b></div>
				<div class="postbody">Er kunnen 2 afbeeldingen onder een gebruikersnaam staan als je berichten leest. De eerste afbeelding geeft aan welke rang je hebt, meestal zijn dit sterretjes of blokjes die aangeven hoeveel berichten je geplaatst hebt of wat je status is. Hieronder kan nog een tweede afbeelding staan, beter bekend als een avatar. Deze afbeelding is meestal uniek of persoonlijk voor iedere gebruiker. De beheerder heeft de keuze om avatars al dan niet in te schakelen. Tevens beslist deze ook over de manier waarop iemand een avatar kan kiezen. Als je dus geen gebruik kan maken van avatars, heeft de beheerder dat zo ingesteld en moet je dus hem/haar contacteren met je vragen hieromtrent.</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f15"></a><b>&#187; Hoe verander ik mijn rang?</b></div>
				<div class="postbody">Over het algemeen kan je je rang niet wijzigen (deze staat onder je gebruikersnaam bij je berichten en op je profiel, maar dit is afhankelijk van de gebruikte stijl). De meeste forums gebruiken rangs om aan te geven hoeveel berichten je geplaatst hebt, maar bepaalde gebruikers zoals bijvoorbeeld moderators en beheerders hebben ook een aparte rang. Nu moet je natuurlijk het forum niet beginnen spammen met onzinnig veel berichten, gewoon voor een hogere rang. Dit heeft zelfs mogelijk het tegenovergestelde effect, een beheerder of moderator kan je berichten aantal doen dalen.</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f16"></a><b>&#187; Wanneer ik op de e-mail link van een gebruiker klik, moet ik inloggen?</b></div>
				<div class="postbody">Alleen geregistreerde gebruikers kunnen gebruik maken van het ingebouwde e-mail formulier (indien de beheerder dit heeft ingeschakeld). Dit om misbruik van het e-mail systeem door anonieme gebruikers te voorkomen.</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
				</table>

		<br clear="all" />
			<table class="tablebg" width="100%" cellspacing="1">
		<tr>
			<td class="cat" align="center"><h4>Vragen in verband met het plaatsen van berichten</h4></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f20"></a><b>&#187; Hoe plaats ik een onderwerp in een forum?</b></div>
				<div class="postbody">Om een nieuw onderwerp in &eacute;&eacute;n van de forums te plaatsen, klik je op de bijhorende knop op ofwel de pagina met onderwerpen of in een bepaald onderwerp. Mogelijk moet je je registreren voor je een nieuw onderwerp kan aanmaken, de permissies die je al dan niet hebt in het forum staan onderaan de pagina met onderwerpen of in een onderwerp (de lijst met <em>je mag geen nieuwe onderwerpen in dit forum plaatsen, je mag niet antwoorden op een onderwerp in dit forum, enz.</em>).</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f21"></a><b>&#187; Hoe wijzig of verwijder ik een bericht?</b></div>
				<div class="postbody">Tenzij je de beheerder of een moderator bent, kan je alleen je eigen berichten wijzigen en verwijderen. Je kan een bericht wijzigen (soms maar voor een beperkte tijd nadat het geplaatst is) door te klikken op de <em>wijzig</em> knop van het desbetreffende bericht. Als er al iemand op je bericht gereageerd heeft, komt er onderaan je bericht een klein tekstje dat zegt hoeveel keer en wanneer je het bericht voor het laatst je gewijzigd hebt. Dit zal niet verschijnen als nog niemand gereageerd heeft, evenmin als een beheerder of moderator je bericht gewijzigd heeft. Zij kunnen wel een mededeling toevoegen, waarom ze je bericht gewijzigd hebben. Het verwijderen van een bericht is niet meer mogelijk van zodra er iemand gereageerd heeft.</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f22"></a><b>&#187; Hoe voeg ik een onderschrift toe aan mijn bericht?</b></div>
				<div class="postbody">Om een onderschrift aan je bericht toe te voegen, moet je er eerst &eacute;&eacute;n maken. Dit kan je via het gebruikerspaneel doen. Vanaf je dit gedaan hebt, kan je de optie <em>voeg mijn onderschrift toe</em> aanvinken als je een bericht plaatst. Je kan er ook voor zorgen dat je onderschrift automatisch aan ieder nieuw bericht wordt toegevoegd. Dit doe je door de bijhorende optie te activeren in het gebruikerspaneel (het is nog altijd mogelijk om het onderschrift uit te schakelen als je het bericht plaatst).</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f23"></a><b>&#187; Hoe maak ik een poll?</b></div>
				<div class="postbody">Een poll aanmaken is heel gemakkelijk, als je een nieuw onderwerp aanmaakt (of het eerste bericht in een onderwerp bewerkt, als je daar permissie voor hebt) zou je een &quot;voeg poll toe&quot; tabblad moeten zijn onderaan het posting-gedeelte (als je dit tabblad niet kunt zien heb je niet de juiste permissies om polls aan te maken). Je moet een titel voor de poll invullen bij &quot;poll vraag&quot; en dan minstens 2 mogelijkheden invullen in het &quot;poll opties&quot;-tekstgedeelte (limiet is ingesteld door de beheerder), met elke optie gescheiden door middel van een nieuwe regel. Je kunt ook instellen hoeveel opties een gebruiker mag kiezen onder &quot;opties per gebruiker&quot; en een tijdslimiet in dagen voor de poll (0 is een poll van oneindige duur).</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f24"></a><b>&#187; Hoe wijzig of verwijder ik een poll?</b></div>
				<div class="postbody">Net zoals bij de berichten kan een poll alleen gewijzigd worden door degene die hem gemaakt heeft, een moderator of beheerder. Om de poll te wijzigen moet je het allereerste bericht van het onderwerp wijzigen (hieraan is de poll gekoppeld). Als er nog geen stmmen zijn uitgebracht kunnen gebruikers de poll verwijderen of iedere poll optie wijzigen. Maar, als er reeds gestemd is kunnen alleen moderators of beheerders hem wijzigen of verwijderen. Dit om te verkomen dat gebruikers een poll maken en deze daarna vervalsen door de opties te wijzigen.</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f25"></a><b>&#187; Waarom kan ik een bepaald forum niet openen?</b></div>
				<div class="postbody">Sommige forums zijn mogelijk alleen toegankelijk voor bepaalde gebruikers of gebruikersgroepen. Om berichten te zien, lezen, plaatsen, enz. heb je speciale permissies nodig. Deze permissies kan je alleen van moderators of beheerders krijgen, zij zijn dus ook degene die je hierover moet contacteren.</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f26"></a><b>&#187; Waarom kan ik geen bijlagen toevoegen?</b></div>
				<div class="postbody">De mogelijkheid om bijlagen toe te voegen, kan per forum, per gebruikersgroep of per gebruiker ingesteld worden. De beheerder kan het bijvoorbeeld zo ingesteld hebben dat je in een bepaald forum helemaal geen bijlagen mag toevoegen, of dat alleen de beheerders groep dit mag. Neem contact op met de beheerder als je niet zeker weet waarom je geen bijlagen kan toevoegen.</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f27"></a><b>&#187; Waarom ontving ik een waarschuwing?</b></div>
				<div class="postbody">Op ieder forum gelden specifieke regels, als je &eacute;&eacute;n van deze regels (volgens de beheerder) overtreedt, kun je een waarschuwing ontvangen. Het sturen van een waarschuwing naar jouw is een beslissing van de beheerder, de phpBB groep heeft hier dus in geen geval iets mee te maken.</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f28"></a><b>&#187; Hoe kan ik berichten aan een moderator melden?</b></div>
				<div class="postbody">Als de beheerder het toelaat, kun je op de hiervoor dienende knop klikken bij het bericht. Als je hierop geklikt hebt, moet je een paar nodige stappen volgen om de melding te versturen.</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f29"></a><b>&#187; Waarvoor dient de &quot;opslaan&quot; knop bij het plaatsen van een bericht?</b></div>
				<div class="postbody">Hiermee kun je berichten opslaan om ze dan later af te werken en te plaatsen. Een opgeslagen bericht kan je, via de bijhorende optie, in het gebruikerspaneel weer laden.</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f210"></a><b>&#187; Waarom moet mijn bericht goedgekeurd worden?</b></div>
				<div class="postbody">De beheerder kan beslist hebben dat geplaatste berichten eerst nagekeken moeten worden. Het is tevens ook mogelijk dat de beheerder je in een gebruikersgroep geplaatst heeft waarvan de berichten altijd nagelezen moeten worden. Contacteer de beheerder voor verdere informatie.</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f211"></a><b>&#187; Hoe bump ik mijn onderwerp?</b></div>
				<div class="postbody">Als je een een onderwep aan het bekijken bent, kan je klikken op de &quot;bump onderwerp&quot; link. Hierdoor &quot;bump&quot; je het onderwerp naar boven op de eerste pagina van de onderwerpenlijst. Als deze link er niet staat, kunnen onderwerpen niet gebumpt worden. Een onderwerp kan ook gebumpt worden door een antwoord te plaatsen, maar hou hierbij wel rekening met de regels van het forum.</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
				</table>

		<br clear="all" />
			<table class="tablebg" width="100%" cellspacing="1">
		<tr>
			<td class="cat" align="center"><h4>Tekstopmaak en onderwerp soorten</h4></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f30"></a><b>&#187; Wat is BBCode?</b></div>
				<div class="postbody">BBCode is een vereenvoudigde versie van html, het gebruik ervan is al dan niet toegestaan door de beheerder (je kan de BBCode ook per bericht uitschakelen, dit is een optie bij het plaatsen van je bericht). De syntax van BBCode is quasi gelijk aan die van HTML, tags worden tussen vierkante haakjes [ en ] geplaatst, dus niet &lt; en &gt;. Daarnaast geeft het ook een grotere controle over hoe iets wordt weergegeven. Meer informatie omtrent BBCode is te vinden in de handleiding die je kan openen als je een bericht plaatst.</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f31"></a><b>&#187; Kan ik HTML gebruiken?</b></div>
				<div class="postbody">Nee, het is niet mogelijk om je bericht op te maken met HTML code. De meeste opmaak die je via HTML kan toepassen is ook via BBCode mogelijk.</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f32"></a><b>&#187; Wat zijn smilies?</b></div>
				<div class="postbody">Smilies zijn kleine afbeeldingen die gebruikt kunnen worden om een gevoelstoestand uit te drukken, bijvoorbeeld :) betekent blij, :( betekent ongelukkig. Alle beschikbare smilies worden weergegeven als je een bericht plaatst. Maak geen overdadig gebruik van smilies, ze maken een bericht snel onleesbaar, wat er toe kan leiden dat een moderator je bericht aanpast of heel je bericht verwijdert. De beheerder kan ook een maximum aantal smilies, dat in een bericht gebruikt mag worden, bepaalt hebben.</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f33"></a><b>&#187; Kan ik afbeeldingen plaatsen?</b></div>
				<div class="postbody">Ja, je kan afbeeldingen in je bericht weergeven. Als de beeheerder bijlagen toelaat, kan je een afbeelding naar het forum uploaden. Anders moet je er voor zorgen dat de afbeelding op een andere publieke server beschikbaar is, bijvoorbeeld http://www.voorbeeld.com/mijn_afbeelding.gif. Linken naar een afbeelding op je eigen computer is onmogelijk (tenzij het een publieke server is). Ook afbeeldingen die een authentificatie vereisen zoals in: Hotmail of Yahoo mailboxen, een wachtwoord beschermde website, enz. kunnen niet worden weergegeven. Om een afbeelding weer te geven, moet je de BBCode tag [img] gebruiken.</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f34"></a><b>&#187; Wat zijn globale mededelingen?</b></div>
				<div class="postbody">Globale mededelingen zijn berichten die belangrijke informatie bevatten, je komt ze dan ook op verschillende plaatsen tegen zoals bovenaan ieder forum en in het gebruikerspaneel. Of je al dan niet globale mededelingen kan plaatsen hangt af van de vereiste permissies, deze zijn ingesteld door de beheerder.</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f35"></a><b>&#187; Wat zijn mededelingen?</b></div>
				<div class="postbody">Mededelingen bevatten vaak belangrijke informatie over het forum dat je aan het lezen bent, je kan deze berichten dan ook het best zo snel mogelijk lezen. Mededelingen verschijnen bovenaan iedere pagina van het forum waarin ze geplaatst zijn. Zoals bij globale mededelingen, hangt het van de vereiste permissies af of je al dan niet mededelingen kan plaatsen. De nodige permissies zijn bepaald door de beheerder.</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f36"></a><b>&#187; Wat zijn sticky onderwerpen?</b></div>
				<div class="postbody">Sticky onderwerpen staan onder de mededelingen in het forum en alleen op de eerste pagina. Meestal zijn deze berichten vrij belangrijk, dus het lezen ervan is aangeraden. Net zoals bij mededelingen bepaalt de beheerder welke permissies je moet hebben om een sticky onderwerp te plaatsen.</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f37"></a><b>&#187; Wat zijn gesloten onderwerpen?</b></div>
				<div class="postbody">Zowel moderators als beerders kunnen onderwerpen sluiten. Je kan niet langer antwoorden op deze berichten en als ze een poll bevatte, eindigd deze automatisch. Onderwerpen kunnen om eender welke reden gesloten worden.</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f38"></a><b>&#187; Wat zijn onderwerp iconen?</b></div>
				<div class="postbody">Onderwerp iconen zijn kleine afbeeldingen die met berichten geassocieerd kunnen worden, om zo hun inhoud aan te tonen. Of je al dan niet gebruik kan maken van onderwerp iconen hangt af van de door de beheerder ingestelde permissies.</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
				</table>

		<br clear="all" />
			<table class="tablebg" width="100%" cellspacing="1">
		<tr>
			<td class="cat" align="center"><h4>Type gebruikers en gebruikersgroepen</h4></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f40"></a><b>&#187; Wat zijn beheerders?</b></div>
				<div class="postbody">Beheerders zijn gebruikers die alle permissies hebben over het gehele forum. Zij beheren alles in verband met het forum, zoals: permissies, het verbannen van gebruikers, gebruikersgroepen of moderators cre&euml;ren, enz. Hun permissies zijn natuurlijk afhankelijk van welke de eigenaar hun heeft toegewezen. Ook afhankelijk van de beslissing van de eigenaar, hebben ze mogelijk alle moderator permissies in de forums.</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f41"></a><b>&#187; Wat zijn moderators?</b></div>
				<div class="postbody">Moderators zijn gebruikers of gebruikersgroepen die in staan voor de dagelijkse werking van het forum. Ze kunnen, in de forums die ze modereren, berichten wijzigen en verwijderen; onderwerpen sluiten, openen, verplaatsen, splitsen en verwijderen. In het algemeen moeten ze er gewoon op toe zien dat mensen niet van het onderwerp afwijken (<em>off-topic</em>) gaan of ongepaste inhoud plaatsen.</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f42"></a><b>&#187; Wat zijn gebruikersgroepen?</b></div>
				<div class="postbody">Als de beheerder gebruikers wil groeperen, kan hij/zij dit doen door middel van gebruikersgroepen. Gebruikers kunnen van meerdere groepen lid zijn (dit verschilt per forum), deze groepen kunnen verschillende permissies/toegangsrechten toegewezen zijn. Op deze manier is het voor de beheerder een stuk gemakkelijker meerdere moderators aan een forum toe te wijzen, bepaalde gebruikers toegang tot een priv&eacute; forum te verlenen, enz.</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f43"></a><b>&#187; Hoe word ik lid van een gebruikersgroep?</b></div>
				<div class="postbody">Om lid van een gebruikersgroep te worden, moet je op de bijhorende link kliken in het gebruikerspaneel, waarna je een overzicht van alle gebruikersgroepen krijgt. Niet alle groepen zijn vrij toegankelijk, ze vereisen een goedkeuring van je lidmaatschap en hebben soms zelf verborgen gebruikers. Als het een open groep is, kan je lid worden door op de hiervoor dienende knop te klikken. Als het een gesloten groep is, kun je je lidmaatschap aanvragen door op de bijhorende knop te klikken. De groepsleider moet je aanvraag dan goedkeuren, hij of zij vraagt mogelijk waarom je lid wil worden. Indien je niet tot een groep toegelaten word, moet je de groepsleider niet lastig vallen, hij of zij heeft een reden om je te weigeren.</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f44"></a><b>&#187; Hoe word ik een groepsleider?</b></div>
				<div class="postbody">Gebruikersgroepen worden door de beheerder gemaakt, deze beslist dus ook wie de groepsleider is. Als je een gebruikersgroep wilt starten, moet je de beheerder contacteren, dit kan door hem/haar een priv&eacute;bericht te sturen.</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f45"></a><b>&#187; Waarom staan verscheidene gebruikersgroepen in een andere kleur?</b></div>
				<div class="postbody">De beheerder kan een kleur aan een gebruikersgroep toegewezen hebben, dit is om de leden gemakkelijk te herkennen.</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f46"></a><b>&#187; Wat is de &quot;standaard gebruikersgroep&quot;?</b></div>
				<div class="postbody">Als je lid bent van meerdere gebruikersgroepen, word je standaard gebruikersgroep gebruikt om je groeps kleur en groeps rang te bepalen. De beheerder kan je de permissies geven om je standaard gebruikersgroep te wijzigen via het gebruikerspaneel.</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f47"></a><b>&#187; Waarvoor dient de &quot;het team&quot; link?</b></div>
				<div class="postbody">Als je op deze link klikt, kom je op een pagina die een overzicht geeft van de mensen die het forum beheren. Deze lijst bevat alle beheerders en de moderators, met bijhorende details omtrent welke forums ze modereren.</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
				</table>

		<br clear="all" />
			<table class="tablebg" width="100%" cellspacing="1">
		<tr>
			<td class="cat" align="center"><h4>Priv&eacute;berichten</h4></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f50"></a><b>&#187; Ik kan geen priv&eacute;berichten sturen!</b></div>
				<div class="postbody">Hiervoor zijn drie redenen mogelijk: ofwel ben je niet geregistreerd en/of ingelogd, de beheerder schakelde de priv&eacute;berichten functie uit, of de beheerder heeft ingesteld dat jij geen priv&eacute;berichten kan sturen. Indien dit laatste het geval is, tracht dan de beheerder te contacteren.</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f51"></a><b>&#187; Ik blijf ongewenste priv&eacute;berichten ontvangen!</b></div>
				<div class="postbody">Je kan gebruikers blokeren zodat ze je geen priv&eacute;berichten meer kunnen sturen, dit gebeurt via het gebruikerspaneel. Als je ongepaste priv&eacute;berichten ontvangt van een bepaalde gebruiker, contacteer dan de beheerder, deze kan ervoor zorgen dat hij of zij niet langer priv&eacute;berichten kan sturen.</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f52"></a><b>&#187; Ik heb spam of een e-mail met ongepaste inhoud van iemand op dit forum ontvangen!</b></div>
				<div class="postbody">Jammer dat we dit moeten horen. Het e-mail formulier van dit forum werkt met een aantal technieken om zenders van zulke berichten te traceren. Het beste wat je kan doen is de beheerder een kopie van het bericht e-mailen, inclusief de hoofding (hierin staan de details van de gebruiker die de e-mail stuurde). Deze zal dan de nodige stappen ondernemen.</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
				</table>

		<br clear="all" />
			<table class="tablebg" width="100%" cellspacing="1">
		<tr>
			<td class="cat" align="center"><h4>Vrienden en vijanden</h4></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f60"></a><b>&#187; Waarvoor dient mijn vrienden en vijanden lijst?</b></div>
				<div class="postbody">Hiermee kun je andere gebruikers op het forum sorteren. Gebruikers die in je vrienden lijst staan, worden in het gebruikerspaneel weergegeven zodat je snel kan controleren of ze online zijn, of een priv&eacute;bericht kan sturen. Tevens is het mogelijk dat hun berichten, in je huidige template, gemarkeerd worden. Als je een gebruiker aan je vijanden lijst toevoegd, worden zijn of haar berichten standaard verborgen.</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f61"></a><b>&#187; Hoe verwijder of voeg ik gebruikers toe aan mijn vrienden en/of vijanden lijst?</b></div>
				<div class="postbody">Het toevoegen van gebruikers kan op 2 manieren. In het profiel van iedere gebruiker staat er een link om de gebruiker aan je vrienden of vijanden lijst toe te voegen. De tweede manier is via het gebruikerspaneel, dan moet je een gebruikersnaam opgeven. Op dezelfde pagina kan je gebruikers weer van de lijst verwijderen.</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
				</table>

		<br clear="all" />
			<table class="tablebg" width="100%" cellspacing="1">
		<tr>
			<td class="cat" align="center"><h4>Forums doorzoeken</h4></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f70"></a><b>&#187; Hoe doorzoek ik het forum?</b></div>
				<div class="postbody">Door een zoekterm op te geven in het zoekveld, dat je vindt op de index, forum en onderwerp pagina. Uitgebreid zoeken is mogelijk door op de &quot;zoeken&quot; link te klikken, deze vind je op iedere pagina.</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f71"></a><b>&#187; Waarom levert mijn zoekopdracht geen resultaten op?</b></div>
				<div class="postbody">Je zoekterm was hoogstwaarschijnlijk niet specifiek genoeg en bevatte mogelijk teveel termen die niet door phpBB3 ge&iuml;ndexeerd worden. Wees specifieker en gebruik, bij uitgebreid zoeken, de beschikbare opties.</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f72"></a><b>&#187; Waarom resulteert mijn zoekopdracht in een lege pagina?</b></div>
				<div class="postbody">Je zoekopdracht gaf meer resultaten dan de webserver kon verwerken. Gebruik de geavanceerde zoekfunctie en wees specifieker met zowel je zoektermen als de te doorzoeken forums. </div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f73"></a><b>&#187; Hoe zoek ik een gebruiker?</b></div>
				<div class="postbody">Ga naar de &quot;leden&quot; pagina en klik op de &quot;zoek een lid&quot; link. Eens op die pagina, vul je de voor zichzelf sprekende opties in.</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f74"></a><b>&#187; Hoe kan ik mijn eigen berichten en onderwerpen vinden?</b></div>
				<div class="postbody">Je kan je eigen berichten vinden door ofwel op de &quot;toon je eigen berichten&quot; link in het gebruikerspaneel te klikken, of via je eigen profiel. Om je eigen onderwerpen te zoeken, moet je de geavanceerde zoekfunctie gebruiken en de nodige opties invullen.</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
				</table>

		<br clear="all" />
			<table class="tablebg" width="100%" cellspacing="1">
		<tr>
			<td class="cat" align="center"><h4>Onderwerp abonnementen en bladwijzers</h4></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f80"></a><b>&#187; Wat is het verschil tussen een bladwijzer en abonnement?</b></div>
				<div class="postbody">Bladwijzers in phpBB3 zijn zoals bladwijzers (of favorieten) in je browser. Je wordt niet op de hoogte gebracht van updates, maar je kan altijd snel terugkeren. Het verschil met abonnementen ligt hem in het feit dat je hierbij automatisch op de hoogte gebracht word van updates, dit gebeurd via de door jou gekozen wijze.</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f81"></a><b>&#187; Hoe abonneer ik me op specifieke forums of onderwerpen?</b></div>
				<div class="postbody">Je abonneren op en forum gaat door op de &quot;abonneer je op dit forum&quot; link te klikken zodra je het forum geopend hebt. Een forum en onderwerp abonnement werken op dezelfde wijze. Om je op een onderwerp te abonneren, kan ofwel een antwoord plaatsen en de abonnements optie aanvinken, of je kan op de hiervoor dienende link in het onderwep klikken.</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f82"></a><b>&#187; Hoe zeg ik mijn abonnement op?</b></div>
				<div class="postbody">Om je abonnement op te zeggen, ga je naar het gebruikerspaneel en klik je op de hier voor dienende links.</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
				</table>

		<br clear="all" />
			<table class="tablebg" width="100%" cellspacing="1">
		<tr>
			<td class="cat" align="center"><h4>bijlagen</h4></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f90"></a><b>&#187; Welke bijlagen worden toegestaan op dit forum?</b></div>
				<div class="postbody">De beheerder bepaalt welke bestandstypes al dan niet toegestaan worden. Als je niet zeker bent welke bestanden ge&uuml;pload mogen worden, contacteer dan de beheerder voor verdere informatie.</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f91"></a><b>&#187; Hoe vind ik al mijn bijlagen?</b></div>
				<div class="postbody">Je vindt een lijst met al je ge&uuml;ploade bijlagen via het gebruikerspaneel, volg hier de links naar het gedeelte omtrent bijlagen.</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
				</table>

		<br clear="all" />
			<table class="tablebg" width="100%" cellspacing="1">
		<tr>
			<td class="cat" align="center"><h4>phpBB 3 vragen</h4></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f100"></a><b>&#187; Wie heeft dit forum geschreven?</b></div>
				<div class="postbody">Deze software (in zijn originele vorm) is geschreven, vrijgegeven en met een copyright beschermd door de <a href="http://www.phpbb.com">phpBB groep</a>. De applicatie is beschikbaar onder de GNU General Public Licence en mag vrij verspreid worden, raadpleeg de link voor verdere informatie.</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f101"></a><b>&#187; Waarom is de optie X niet beschikbaar?</b></div>
				<div class="postbody">Deze software is geschreven door en eigendom van de phpBB Groep. Als je denkt dat een bepaalde optie toegevoegd moet worden, bezoek dan de phpbb.com website en kijk wat de phpBB Groep hierop antwoord. Plaats je verzoeken alstublieft niet in het phpBB.com forum, de phpBB groep gebruikt sourceforge om nieuwe opties te verwerken. Doorlees alle forums om te controleren of je optie niet reeds vorkomt en wat de positie ervan dan is, volg de daar gegeven procedure.</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f102"></a><b>&#187; Wie contacteer ik omtrent misbruik en/of wettelijke kwesties in verband met dit forum?</b></div>
				<div class="postbody">Alle beheerders die op de &quot;het team&quot;-pagina vermeld worden, staan open voor je klachten. Als je geen reactie hebt gekregen kun je de eigenaar van het domein contacteren (dmv een <a href="http://www.google.com/search?q=whois">whois zoekopdracht</a>) of, als dit forum op een gratis host staat (bijvoorbeeld xsbb.nl, nl.forums.cc, dotbb.be, enz.), het beheer of misbruik-afdeling van de gratis host. Wees je er bewust van dat de phpBB groep <strong>geen inspraak</strong> heeft en dus in geen enkel geval aansprakelijk gehouden worden over hoe, waar en door wie dit forum gebruikt wordt. Contacteer de phpBB groep niet met vragen met betrekking tot wettelijke kwesties (zoals aanspreekbaarheid, ongepaste commentaar, enz.) die <strong>niet direct verband</strong> houden met de phpBB.com-website of de phpBB-software. Als je de phpBB groep toch e-mailt over deze software die <strong>gebruikt wordt door derden</strong> kun je een korte of helemaal geen reactie verwachten.</div>
				<p class="gensmall"><a href="#faqtop">Omhoog</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
				</table>

		<br clear="all" />

</div>


<br clear="all" />

<div align="right"></div>

</div>
	<table width='100%' cellspacing='2' cellpadding='2'>
		<tr>
			<td class='content_bottom'></td>
		</tr>
	</table>
<br/>

		</div>
	</td>
	</tr>

	</table>
	</td>
<?include("right_column.php");?>
