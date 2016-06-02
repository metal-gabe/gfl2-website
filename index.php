<!-- Setting the BASE URL for the page -->
<?php include('scripts/php/base-url.php'); ?>

<!DOCTYPE html>
<HTML lang="en">

<!-- Pg. 01, Gabriel F. Lujan -->
<!-- ********************************************* HEAD: START ********************************************** -->
<HEAD>

	<meta charset="UTF-8">
	<meta name="author" content="Gabriel F. Lujan">
	<meta name="description" content="This is the portfolio site for all things pertaining to, and created by, Gabriel F. Lujan.">
	<meta name="keywords" content="gabriel, floyd, lujan, portfolio, site, ux, ui, user, experience, interface, design, creative, audio, video, editing, post, production, sublime, text, 3, transmit, git, github, iterm, firefox, chrome, mozilla, developer, experiential, programming, html5, css3, html, css, javascript, jquery, bootstrap, modernizr, initializr, boilerplate, custom, built, website, websites, mockup, sketch, app, invision, vivaldi">

	<title>Gabriel F. Lujan</title>

	<!-- VENDOR STYLES -->
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/styles/css/bootstrap.min.css">

	<!-- CUSTOM STYLES -->
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/styles/css/main.css">

</HEAD>


<!-- ********************************************* BODY: START ********************************************** -->
<BODY>

	<!-- MAIN TRUNK OF Gabriel's Portfolio -->
	<div id="CONTAINER">
		<header>
			<nav id="main">
				<ul>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
			</nav>
			<div id="hero"></div>
		</header>
		<section id="content">
			<div id="case-study"></div>
			<div id="projects">
				<div id="left-scroll"><img src="left.png" /></div>
				<div id="carousel-inner">
					<ul id="carousel-ul">
						<li><a href="#"><img src="<?php echo BASE_URL; ?>/pics/proj-placeholder.jpg" /></a></li>
						<li><a href="#"><img src="<?php echo BASE_URL; ?>/pics/proj-placeholder.jpg" /></a></li>
						<li><a href="#"><img src="<?php echo BASE_URL; ?>/pics/proj-placeholder.jpg" /></a></li>
						<li><a href="#"><img src="<?php echo BASE_URL; ?>/pics/proj-placeholder.jpg" /></a></li>
						<li><a href="#"><img src="<?php echo BASE_URL; ?>/pics/proj-placeholder.jpg" /></a></li>
					</ul>
				</div>
				<div id="right-scroll"><img src="right.png" /></div>
			</div>
			<div id="skills"></div>
		</section>
		<footer>
			<nav id="social-media">
				<ul>
					<li class="social-badge lnkd"></li>
					<li class="social-badge beha"></li>
					<li class="social-badge drib"></li>
					<li class="social-badge twit"></li>
				</ul>
			</nav>
		</footer>
	</div>

	<!-- VENDOR SCRIPTS -->
	<script src="<?php echo BASE_URL; ?>/scripts/vendor/jquery-1.11.2.min.js"></script>
	<script src="<?php echo BASE_URL; ?>/scripts/vendor/bootstrap.min.js"></script>

	<!-- CUSTOM SCRIPTS -->
	<script src="<?php echo BASE_URL; ?>/scripts/js/main.js"></script>

</BODY>


</HTML>