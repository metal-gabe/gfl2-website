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
	<div id="CONTAINER" class="container">
		<header class="row">
			<nav id="main">
				<ul>
					<li><a href="#">Link #1</a></li>
					<li><a href="#">Link #2</a></li>
					<li><a href="#">Link #3</a></li>
					<li><a href="#">Link #4</a></li>
				</ul>
			</nav>
			<div id="hero"></div>
		</header>
		<section id="content" class="row">
			<div id="case-study" class="row"><p>My Case Study Goes Here</p></div>
			<div id="projects" class="row container-fluid">
				<div id="left-scroll" class="col-md-1"></div>
				<div id="carousel" class="row col-md-10">
					<div class="col-md-4"><a href="#"><!-- <img src="<?php echo BASE_URL; ?>/pics/proj-placeholder.jpg" /> --></a></div>
					<div class="col-md-4"><a href="#"><!-- <img src="<?php echo BASE_URL; ?>/pics/proj-placeholder.jpg" /> --></a></div>
					<div class="col-md-4"><a href="#"><!-- <img src="<?php echo BASE_URL; ?>/pics/proj-placeholder.jpg" /> --></a></div>
				</div>
				<div id="right-scroll" class="col-md-1"></div>
			</div>
			<div id="skills" class="row"><p>This is a list of my skills &amp; the tools I use.</p></div>
		</section>
		<footer class="row">
			<nav id="social-media">
				<ul>
					<li class="social-badge lnkd"><a href="#">Social #1</a></li>
					<li class="social-badge beha"><a href="#">Social #2</a></li>
					<li class="social-badge drib"><a href="#">Social #3</a></li>
					<li class="social-badge twit"><a href="#">Social #4</a></li>
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