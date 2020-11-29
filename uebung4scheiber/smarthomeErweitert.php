<!DOCTYPE html>
<html lang="zxx">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<title>Smart Home Steuerung</title>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	</head>
	<body>
	<div id="home">
		<nav id="navigation" class=" nav-pills bg-dark fixed-top">
			<ul class="nav navbar justify-content-end">
				<li class="nav-item">
					<a class="nav-link ml-md-2 text-white" href="#home">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link ml-md-2 text-white" href="#schlafzimmer">Schlafzimmer</a>
				</li>
				<li class="nav nav-item">
					<a class="nav-link ml-md-2 text-white" href="#wohnzimmer">Wohnzimmer</a>
				</li>
				<li class="nav nav-item">
					<a class="nav-link ml-md-2 text-white" href="#esszimmer">Esszimmer</a>
				</li>
				<li class="nav nav-item">
					<a class="nav-link ml-md-2 text-white" href="#kueche">Küche</a>
				</li>
				<li class="nav nav-item">
					<a class="nav-link ml-md-2 text-white" href="#aussenbereich">Außenbereich</a>
				</li>
			</ul>
		</nav>
		<header>
			<div class="container">
				<h1>BSA Smart Home Controller App v1.0</h1>
				<p>BSA, 2. Semester</p>
				<p>Demo-App</p>
			</div>
		</header>
	</div>
			<main>
				<section class="container" id="welcome">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<h2>Willkommen in Ihrer virtuellen Wohnungszentrale!</h2>
							<h3>Wir ermöglichen Ihnen die volle Kontrolle über ihr Smart Home ...</h3>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<h4>Datenzugriff</h4>
							<img src="img/einstellungen.png" alt="Zahnräder">
							<p>Maecenas a dignissim lacus. Integer ac velit orci. Maecenas lobortis ligula odio, at cursus nisi pellentesque ut. Aliquam lobortis ante ut ipsum condimentum, sit amet dictum nulla malesuada. Sed ac magna sed neque fringilla vestibulum. Donec maximus dapibus lacus, non scelerisque erat efficitur at. Sed at condimentum metus.</p>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<h4>Geräte unabhängig</h4>
							<img src="img/pc_tablet_smartphone.jpg" alt="Geräte">
							<p>Praesent eget tristique ipsum. Sed tellus libero, molestie sed finibus nec, sagittis sed lectus. Suspendisse molestie, odio ac imperdiet mollis, metus sapien sagittis eros, sed suscipit purus ipsum ac arcu. Etiam urna elit, tristique placerat turpis a, dictum bibendum magna. Praesent a massa et urna consectetur luctus vel quis elit.</p>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<h4>Rund um die Uhr</h4>
							<img src="img/clock.png" alt="Uhr">
							<p>Sed nulla arcu, pellentesque vel tortor et, volutpat interdum lectus. Duis euismod ligula at arcu facilisis consectetur. Nam semper, lorem sit amet luctus auctor, justo metus rhoncus nulla, eu semper velit tellus at eros. Sed in sapien ac ex porttitor sollicitudin. Pellentesque mattis quam ipsum, sit amet volutpat sapien fringilla et.</p>
						</div>
					</div>
				</section>
				<section id="schlafzimmer">
					<div class="container">
						<h2>Schlafzimmer</h2>
						<div class="row">
							<div class="col-lg-2 offset-md-1 col-md-2 offset-md-1 col-sm-6 col-xs-12">
								<h3>Licht</h3>
								<img src="img/light_off.png" alt="Licht aus" />
								<p>Licht aus</p>
							</div>
							<div class="col-lg-2 offset-md-1 col-md-2 offset-md-1 col-sm-6 col-xs-12">
								<h3>Temperatur</h3>
								<img src="img/temp_high.jpg" alt="Temperatur hoch" />
								<p>Temperatur 22 Grad</p>
							</div>
							<div class="col-lg-4 offset-lg-1 col-md-4 offset-md-1 col-sm-6 col-xs-12">
								<h3>Details</h3>
								<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
							</div>
						</div>
					</div>
				</section>
				<section id="wohnzimmer">
					<div class="container">
						<h2>Wohnzimmer</h2>
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<h3>Licht</h3>
								<img src="img/light_on.png" alt="Licht an" />
								<p>Licht an</p>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<h3>Temperatur</h3>
								<img src="img/temp_high.jpg" alt="Temperatur hoch" />
								<p>Temperatur 23 Grad</p>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<h3>Details</h3>
								<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
							</div>
						</div>
					</div>
				</section>
				<section id="esszimmer">
					<div class="container">
						<h2>Esszimmer</h2>
						<div class="row">
							<div class="col-lg-2 offset-md-1 col-md-2 offset-md-1 col-sm-6 col-xs-12">
								<h3>Licht</h3>
								<img src="img/light_off.png" alt="Licht aus" />
								<p>Licht aus</p>
							</div>
							<div class="col-lg-2 offset-md-1 col-md-2 offset-md-1 col-sm-6 col-xs-12">
								<h3>Temperatur</h3>
								<img src="img/temp_high.jpg" alt="Temperatur hoch" />
								<p>Temperatur 22 Grad</p>
							</div>
							<div class="col-lg-4 offset-lg-1 col-md-4 offset-md-1 col-sm-6 col-xs-12">
								<h3>Details</h3>
								<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
							</div>
						</div>
					</div>
				</section>
				<section id="kueche">
					<div class="container">
						<h2>Küche</h2>
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<h3>Licht</h3>
								<img src="img/light_off.png" alt="Licht aus" />
								<p>Licht aus</p>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<h3>Temperatur</h3>
								<img src="img/temp_high.jpg" alt="Temperatur hoch" />
								<p>Temperatur 22 Grad</p>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<h3>Details</h3>
								<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
							</div>
						</div>
					</div>
				</section>
				<section id="aussenbereich">
					<div class="container">
						<h2>Außenbereich</h2>
						<div class="row">
							<div class="col-lg-2 offset-md-1 col-md-2 offset-md-1 col-sm-6 col-xs-12">
								<h3>Licht</h3>
								<img src="img/light_on.png" alt="Licht an" />
								<p>Licht an</p>
							</div>
							<div class="col-lg-2 offset-md-1 col-md-2 offset-md-1 col-sm-6 col-xs-12">
								<h3>Temperatur</h3>
								<img src="img/temp_low.jpg" alt="Temperatur niedrig" />
								<p>Temperatur 2 Grad</p>
							</div>
							<div class="col-lg-4 offset-lg-1 col-md-4 offset-md-1 col-sm-6 col-xs-12">
								<h3>Details</h3>
								<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
							</div>
						</div>
					</div>
				</section>
			</main>
	<footer></footer>
</body>
</html>