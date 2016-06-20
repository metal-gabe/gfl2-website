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
	<header class="row">
		<div id="head">
			<nav id="main">
				<ul>
					<li class="col-md-3"><a href="#">Home</a></li>
					<li class="col-md-3"><a href="#">About</a></li>
					<li class="col-md-3"><a href="#">Overview</a></li>
					<li class="col-md-3"><a href="#">Contact</a></li>
				</ul>
			</nav>
			<div id="hero"></div>
		</div>
	</header>
	<div id="CONTAINER" class="container">
		<section id="content" class="row container-fluid">
			<div id="case-study" class="row">
				<h2>Case Study</h2>
			</div>
			<div id="projects" class="row">
				<h2>Projects</h2>
				<div id="carousel" class="row">
					<div id="left-scroll" class="col-md-1"></div>
					<ul class="col-md-12">
						<li id="proj1" class="col-md-4 project"></li>
						<li id="proj2" class="col-md-4 project"></li>
						<li id="proj3" class="col-md-4 project"></li>
					</ul>
					<div id="right-scroll" class="col-md-1"></div>
				</div>
			</div>
			<div id="skills" class="row">
				<h2>Skills</h2>
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
	</div>
	<footer class="row">
		<nav id="social-media" class="col-md-4 col-md-offset-8 col-sm-12 col-sm-offset-0">
			<ul>
				<a href="https://www.linkedin.com/in/gflujan/"><li id="lnkd" class="col-md-3 social-badge"></li></a>
				<a href="behance.net/anewlevelmedia"><li id="bhnc" class="col-md-3 social-badge"></li></a>
				<a href="https://dribbble.com/ANewLevelMedia"><li id="drib" class="col-md-3 social-badge"></li></a>
				<a href="https://twitter.com/gabriel_lujan_"><li id="twit" class="col-md-3 social-badge"></li></a>
			</ul>
		</nav>
	</footer>

	<!-- VENDOR SCRIPTS -->
	<script src="<?php echo BASE_URL; ?>/scripts/vendor/jquery-1.11.2.min.js"></script>
	<script src="<?php echo BASE_URL; ?>/scripts/vendor/bootstrap.min.js"></script>

	<!-- CUSTOM SCRIPTS -->
	<script src="<?php echo BASE_URL; ?>/scripts/js/main.js"></script>

</BODY>


</HTML>