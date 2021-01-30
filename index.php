<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Exoworlds&trade;</title>
	<link rel="icon" sizes="192x192" href="/favicon192x.png" />
	<link rel="icon" sizes="194x194" href="/favicon194x.png" />
	<link rel="icon" sizes="32x32" href="/favicon32x.png" />
	<link rel="icon" sizes="16x16" href="/favicon16x.png" />
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
	<link href="https://fonts.googleapis.com/css?family=Fira+Sans:300" rel="stylesheet" />
	<style type="text/css" media="screen">
html body {
	font-family: 'Fira Sans', sans-serif;
	height:100%;
	min-height:100%;
	padding:0px;
	margin:0px;
}
body {
	background-color:#000000;
	background-image:url(bkgnd.jpg);
	background-attachment:fixed;
	background-position:0px 0px;
	color:#778899;
}
.image {
	width:100%;
	text-align:center;
	position:absolute;
	top:45%;
}
.footer {
	position:absolute;
	bottom:1em;
	width:100%;
	font-size:x-small;
}
.footer a {
	color:#778899;
}
.footer img {
	border-width:0;
}
.footer table {
	text-align:center;
	margin-left:auto;
	margin-right:auto;
}
	</style>
	<script type="text/javascript">
var timer;
var x = 0;
var maxX = 600;
function moveBkgnd() {
	document.body.style.backgroundPosition = "0px "+x+"px";
	x += 1;
	while (x >= maxX) x -= maxX;
	/* x -= 1;
	if (x < 0) x = maxX - 1; */
	timer = setTimeout("moveBkgnd()", 50);
}
	</script>
</head>
<body>
	<div class="image">
		<p><img src="exoworlds.png" alt="Exoworlds" /></p>
		<p><?php 
		echo "Simulating the void since 1998";
	/*
		10.1998 Space Age Graphics
		02.2001 Space Age Empires Icon
		12.2001 Space Age Empires Demo
		05.2002 Space Age Empires Code
		01.2003 Exoworlds Fighter Sim
		03.2003 Exoworlds Story 01 rtf (Buch)
		12.2003 Exoworlds Storyline txt (Video)
		12.2004 Exo Network test
		02.2005 Website Spacer
		07.2005 ExoSWAT prototype
		03.2006 Exoworlds Battleships (Minigame)
		11.2006 Exoworlds Title Logo Design
		08.2007 Exoworlds Icons
		03.2008 ExoSWAT
		07.2008 Exoworlds Mini (Minigame)
		05.2019 Exoworlds Title redesign
		03.2020 ExoSWAT renamed to just Exoworlds -- Exoworlds Fleets discontinued

		"Space is Desease and Danger out in Darkness and Silence"
			Dr. Lennard McCoy (Star Trek 11)

	*/
		?></p>
	</div>
	<div class="footer">
		<table border="0" cellspacing="5" cellpadding="0">
			<tr>
				<td><a href="https://www.sgrottel.de"><img src="sgsign.gif" alt="www.sgrottel.de" width="76" height="30" /></a></td>
				<td align="left"><?php 
				if (strncasecmp($_SERVER["HTTP_ACCEPT_LANGUAGE"], "de", 2) === 0) { // Language check
					/* de */
					echo "F&uuml;r den Inhalt dieser Webseite ist<br />\n";
					echo "SGrottel (<a href=\"https://www.sgrottel.de\">www.sgrottel.de</a>) verantwortlich.<br />\n";
					echo "<a href=\"https://www.sgrottel.de/imprint/de\">Impressum</a> &mdash; <a href=\"https://www.sgrottel.de/dataprivacy/de\">Datenschutz</a>\n";
				} else {
					/* en */
					echo "The content of this website has been<br />\n";
					echo "created by SGrottel (<a href=\"https://www.sgrottel.com\">www.sgrottel.com</a>).<br />\n";
					echo "<a href=\"https://www.sgrottel.de/imprint/en\">Imprint</a> &mdash; <a href=\"https://www.sgrottel.de/dataprivacy/en\">Data Privacy</a>\n";
				}
				?></td>
				<!--<td><p><a href="https://validator.w3.org/check?uri=referer"><img
			src="https://www.w3.org/Icons/valid-xhtml11-blue"
			alt="Valid XHTML 1.1" height="31" width="88" /></a></p></td>
				<td><p><a href="https://jigsaw.w3.org/css-validator/check/referer"> <img style="border:0;width:88px;height:31px"
			src="https://jigsaw.w3.org/css-validator/images/vcss-blue"
			alt="CSS is valide!" /></a></p></td>-->
			</tr>
		</table>
	</div>
	<script type="text/javascript">
	timer = setTimeout("moveBkgnd()", 100);
	</script>
</body>
</html>
