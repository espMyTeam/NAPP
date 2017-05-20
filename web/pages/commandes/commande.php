<!DOCTYPE html>
<!--
	Interphase by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Plateforme NAPP</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<h1><a href="index.php">NAPP</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.php">Acceuil</a></li>
						<li><a href="commande.php">Controle Manuelle</a></li>
						<li><a href="statistiques.php">Statistiques</a></li>
					</ul>
				</nav>
			</header>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major">
						<h2>Contrôle Manuelle des Panneaux Solaires</h2>
						<p>Envoyer une instruction de nettoyage à un panneau solaire distant</p>
					</header>

					<form method="post" action="traitement.php">
								<div class="row uniform 50%">
									<div class="12u$">
										<div class="select-wrapper">
											<select name="choix" id="category">
												<option value="">- Action à faire -</option>
												<option value="1">Nettoyer</option>
												<option value="0">Arrêter nettoyage</option>
												
											</select>
										</div>
									</div>
									<div class="12u$(small)">
										<input type="radio" id="0min" value="0" name="temps">
										<label for="0min">Tout de suite</label>
									
										<input type="radio" id="10min"  value="10" name="temps">
										<label for="10min">Dans 10 min</label>
									
										<input type="radio" id="30min"  value="30" name="temps">
										<label for="30min">Dans 30 min</label>
									
										<input type="radio" id="1heure"  value="60" name="temps">
										<label for="1heure">Dans 1 Heure</label>
									</div>
									
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" value="Envoyer" class="special" /></li>
											<li><input type="reset" value="Reset" /></li>
										</ul>
									</div>
								</div>
							</form>

				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<div class="row">
						<section class="4u 6u(medium) 12u$(small)">
							<h3>Membres de l'equipe</h3>
							<p>Ceci est la liste des membres ayant initialement travaillé sur le projet NAPP</p>
							<ul class="alt">
								<li><a href="#">Ibrahima BA 	&nbsp;| Genie Informatique </a></li>
								<li><a href="#">Simon Pierre DIOUF&nbsp;| Genie Informatique </a></li>
								<li><a href="#">Cheikh GUEYE	&nbsp;| Genie Mecanique </a></li>
								<li><a href="#">Bassirou NGOM	&nbsp;| Genie Informatique </a></li>
							</ul>
						</section>
						<section class="4u 6u$(medium) 12u$(small)">
							<h3>Fonctionnalités Napp</h3>
							<p>Quelques fonctionnalités du dispositif </p>
							<ul class="alt">
								<li><a href="#">Detection & Nettoyage automatique</a></li>
								<li><a href="#">Visualisation statistiques</a></li>
								<li><a href="#">Envoi d'alerte à l'administrateur.</a></li>
								<li><a href="#">Contrôle à distance des panneaux.</a></li>
							</ul>
						</section>
						<section class="4u$ 12u$(medium) 12u$(small)">
							<h3>Nous Contacters</h3>
							<ul class="icons">
								<li><a href="#" class="icon rounded fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon rounded fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon rounded fa-pinterest"><span class="label">Pinterest</span></a></li>
								<li><a href="#" class="icon rounded fa-google-plus"><span class="label">Google+</span></a></li>
								<li><a href="#" class="icon rounded fa-linkedin"><span class="label">LinkedIn</span></a></li>
							</ul>
							<ul class="tabular">
								<li>
									<h3>Addresse</h3>
									Corniche, Route de l'UCAD <br>
									Campus ESP / Pavillon C N°69
								</li>
								<li>
									<h3>Email</h3>
									<a href="#">napp@gmail.com</a>
								</li>
								<li>
									<h3>Telephone</h3>
									(+221) 77-373-60-93<br>
									(+221) 77-278-02-84
								</li>
							</ul>
						</section>
					</div>
					<ul class="copyright">
						<li>&copy; Copiryght 2017. Tous droits réservés.</li>
						<li>Design: <a href="#">Team NAPP</a></li>
					</ul>
				</div>
			</footer>
	</body>
</html>