<template>
	<div id="app">
		<div><!-- spacer --></div>
		<div class="title">
			<img alt="Exoworlds" src="./assets/exoworlds-512x.svg">
			<div class="subtitle">Simulating the void since 1998</div>
		</div>
<!--
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
		05.2021 New title logo and finally an abstract-ish icon, yeah!

		"Space is Desease and Danger out in Darkness and Silence"
			Dr. Lennard McCoy (Star Trek 11)
-->
		<div class="footer">
			<a class="image" href="https://www.sgrottel.de"><img src="./assets/sgrottel.svg" alt="SGrottel" height="64"></a>
			<div>
				The content of this website has been<br />
				created by SGrottel (<a href="https://www.sgrottel.de">SGrottel.de</a>).<br />
				<a href="https://www.sgrottel.de/imprint/en">Imprint</a> &mdash; <a href="https://www.sgrottel.de/dataprivacy/en">Data Privacy</a><br/>
				This webside does not use cookies.
			</div>
		</div>
	</div>
</template>

<script>
export default {
	name: 'App'
}
</script>

<style>
@font-face {
  font-family: 'Fira Sans';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(/ttf/FiraSans-Regular.ttf) format("truetype");
}

@font-face {
  font-family: 'Alegreya Sans SC';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(/ttf/AlegreyaSansSC-Regular.ttf) format("truetype");
}

html, body {
	margin: 0px;
	padding: 0px;
	height: 100%;
	min-height: 100%;
}

html {
	color: #98a0a8;
	background-color: #101820;
	font-family: 'Fira Sans', sans-serif;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}

#app {
	height: 100%;
	min-height: 100%;

	display: grid;
	grid-template-columns: auto;
	align-content: space-between;

	background-image: url(./assets/bkgnd.jpg);
	background-position: 0px 0px;
	background-attachment: fixed;

	animation: backgroundmove 240s infinite linear;
}
@keyframes backgroundmove {
	100% { background-position: 4800px 600px; }
}

a {
	color: #98a0a8;
	text-decoration: none;
	font-family: 'Alegreya Sans SC', sans-serif;
}
a:hover {
	color: #a0a8b0;
	text-decoration: underline;
}

.title {
	place-self: center stretch;
}

.title img {
	width: 90%;
	margin-left: 5%;
}

.subtitle {
	text-align: center;
	font-family: 'Alegreya Sans SC', sans-serif;
}

.footer {
	place-self: bottom center;
	font-size: 75%;
	text-align: left;
	display: grid;
	grid-template-columns: auto auto;
	align-content: space-between;
}

.footer .image {
	place-self: center right;
}

.footer img {
	width: 3rem;
	height: 3rem;
}

.footer div {
	place-self: center left;
}
</style>
