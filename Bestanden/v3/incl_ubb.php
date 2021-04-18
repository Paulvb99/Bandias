<?

$replace 		= str_replace("[u]", "<u>",$replace);
$replace 		= str_replace("[/u]", "</u>",$replace);
$replace 		= str_replace("[b]", "<b>",$replace);
$replace 		= str_replace("[/b]", "</b>",$replace);
$replace 		= str_replace("[i]", "<i>",$replace);
$replace 		= str_replace("[/i]", "</i>",$replace);
$replace 		= str_replace("[naam]", "$data->login",$replace);
$replace 		= str_replace("[list]", "<ul>",$replace);
$replace 		= str_replace("[/list]", "</ul>",$replace);
$replace 		= str_replace("•", "&amp;bull;",$replace);
$replace 		= str_replace("[*]", "&bull;",$replace);
$replace 		= str_replace("http://", "",$replace);
$replace 		= eregi_replace("\\[img]([^\\[]*)\\[/img\\]","<img src=\"http://\\1\" alt=\"Afbeelding\">",$replace);
$replace	 	= eregi_replace("\\[color=([^\\[]*)\\]([^\\[]*)\\[/color\\]","<font color=\"\\1\">\\2</font>",$replace);
$replace 		= eregi_replace("\\[url]([^\\[]*)\\[/url\\]","<a href=\"http://\\1\">\\1</a>",$replace);
$replace 		= eregi_replace("\\[quote=([^\\[]*)\\]([^\\[]*)\\[/quote\\]","<div class=\"quotetitle\"><b>\\1 schreef:</b></div><div class=\"quotecontent\">\\2</div>",$replace);
$replace 		= eregi_replace("\\[quote]([^\\[]*)\\[/quote\\]","<div class=\"quotetitle\"><b>Citaat:</b></div><div class=\"quotecontent\">\\1</div>",$replace);
$replace 		= eregi_replace("\\[code]([^\\[]*)\\[/code\\]","<div class=\"codetitle\"><b>Code:</b></div><div class=\"codecontent\">\\1</div>",$replace);
$replace 		= eregi_replace("\\[size=([^\\[]*)\\]([^\\[]*)\\[/size\\]","<span style=\"font-size: \\1%; line-height: normal\">\\2</span>",$replace);
$replace 		= eregi_replace("\\[quote=([^\\[]*)\\]([^\\[]*)\\[/quote\\]","<div class=\"quotetitle\"><b>\\1 schreef:</b></div><div class=\"quotecontent\">\\2</div>",$replace);
$replace 		= eregi_replace("\\[quote]([^\\[]*)\\[/quote\\]","<div class=\"quotetitle\"><b>Citaat:</b></div><div class=\"quotecontent\">\\1</div>",$replace);
$replace 		= eregi_replace("\\[code]([^\\[]*)\\[/code\\]","<div class=\"codetitle\"><b>Code:</b></div><div class=\"codecontent\">\\1</div>",$replace);
?>
