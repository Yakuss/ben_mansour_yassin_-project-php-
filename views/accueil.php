<?php 
   session_start();

   include("login/php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
    exit();
   }
?>
<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Hyperspace by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="main.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
		<noscript><link rel="stylesheet" href="noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Sidebar -->
		<section id="sidebar">
			<div class="inner">
				<nav>
					<ul>
						<li><a href="#intro">Welcome</a></li>
						<li><a href="#one">Enseignant</a></li>
						<li><a href="#two">Etudiant</a></li>
						<li><a href="#three">Matiere</a></li>
					</ul>
				</nav>
			</div>
		</section>

		<!-- Wrapper -->
		<div id="wrapper">

			<!-- Intro -->
			<section id="intro" class="wrapper style1 fullscreen fade-up">
				<div class="inner">
					<h1>Welcome !</h1>
					<ul class="actions">
						<li><a href="login/php/logout.php" class="button scrolly">Log Out</a></li>
					</ul>
					<img src="images/welcome.png" width="900" style="position: absolute; right: 0; top: -150px; margin-top: 20px; margin-right: 20px;">
				</div>
			</section>

			<!-- One -->
			<section id="one" class="wrapper style2 spotlights">
				<section>
					<a href="#" class="image"><img src="images/enseignant.png" alt="" data-position="center center" /></a>
					<div class="content">
						<div class="inner">
							<h2>Ajouter Un Enseignant</h2>
							<ul class="actions">
								<li><a href="ajouter_enseignant.php" class="button">Ajouter</a></li>
							</ul>
						</div>
					</div>
				</section>
				<section>
					<a href="#" class="image"><img src="images/liste.png" alt="" data-position="top center" width="50" /></a>
					<div class="content">
						<div class="inner">
							<h2>Liste Des Enseignants</h2>
							<ul class="actions">
								<li><a href="liste_enseignant.php" class="button">Afficher</a></li>
							</ul>
						</div>
					</div>
				</section>
			</section>

			<!-- Two -->
			<section id="two" class="wrapper style3 fade-up">
				<div class="inner">
					<h2>Etudiant</h2>
					<div class="features">
						<section>
							<span class="icon solid major fas fa-plus-circle"></span>
							<h3>Ajouter Un Etudiant</h3>
							<ul class="actions">
								<li><a href="ajout_etudiant.html" class="button">Ajouter</a></li>
							</ul>
						</section>
						<section>
							<span class="icon solid major fas fa-list-alt"></span>
							<h3>Liste Des Etudiants</h3>
							<ul class="actions">
								<li><a href="liste_etudiant.php" class="button">Afficher</a></li>
							</ul>
						</section>
						<section>
							<span class="icon solid major fas fa-check-square"></span>
							<h3>Liste Des Absences</h3>
							<ul class="actions">
								<li><a href="formulaire_absence.php" class="button">Afficher</a></li>
							</ul>
						</section>
						<section>
							<span class="icon solid major fas fa-list-ul"></span>
							<h3>Liste Des Absences Par Matiere</h3>
							<ul class="actions">
								<li><a href="formulaire_absence_par_matiere.php" class="button">Afficher</a></li>
							</ul>
						</section>
					</div>
				</div>
			</section>

			<!-- Three -->
			<section id="three" class="wrapper style1 fade-up">
				<div class="inner">
					<h2>Matiere</h2>
					<table>
						<tr>
							<td>
								<section>
									<h3>Ajouter Une Matiere</h3>
									<ul class="actions">
										<li><a href="ajout_matiere.html" class="button">Ajouter</a></li>
									</ul>
								</section>
							</td>
						</tr>
						<tr>
							<td>
								<section>
									<h3>Liste Des Matiere</h3>
									<ul class="actions">
										<li><a href="liste_matieres.php" class="button">Afficher</a></li>
									</ul>
								</section>
							</td>
						</tr>
					</table>
				</div>
			</section>

		</div>

		<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.scrollex.min.js"></script>
		<script src="assets/js/jquery.scrolly.min.js"></script>
		<script src="assets/js/browser.min.js"></script>
		<script src="assets/js/breakpoints.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>

	</body>
</html>
