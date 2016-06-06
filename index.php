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
					<li class="col-md-3"><a href="#">Link #1</a></li>
					<li class="col-md-3"><a href="#">Link #2</a></li>
					<li class="col-md-3"><a href="#">Link #3</a></li>
					<li class="col-md-3"><a href="#">Link #4</a></li>
				</ul>
			</nav>
			<div id="hero"></div>
		</header>
		<section id="content">
			<div id="case-study" class="row"><p>My Case Study Goes Here</p></div>
			<div id="projects" class="row">
				<div id="carousel" class="col-md-12">
					<div class="row">
						<div id="left-scroll" class="col-md-1"></div>
						<div class="col-md-3 project"><a href="#"></a></div>
						<div class="col-md-4 project"><a href="#"></a></div>
						<div class="col-md-3 project"><a href="#"></a></div>
						<div id="right-scroll" class="col-md-1"></div>
					</div>
				</div>
			</div>
			<div id="skills" class="row">
				<ul class="col-md-4">
					<li>Skill 1</li>
					<li>Skill 2</li>
					<li>Skill 3</li>
				</ul>
				<ul class="col-md-4">
					<li>Skill 1</li>
					<li>Skill 2</li>
					<li>Skill 3</li>
				</ul>
				<ul class="col-md-4">
					<li>Skill 1</li>
					<li>Skill 2</li>
					<li>Skill 3</li>
				</ul>
			</div>
		</section>
		<footer class="row">
			<nav id="social-media" class="col-md-4 col-md-offset-8 col-sm-12 col-sm-offset-0">
				<ul>
					<li class="col-md-3 social-badge lnkd"><a href="#">Social #1</a></li>
					<li class="col-md-3 social-badge beha"><a href="#">Social #2</a></li>
					<li class="col-md-3 social-badge drib"><a href="#">Social #3</a></li>
					<li class="col-md-3 social-badge twit"><a href="#">Social #4</a></li>
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