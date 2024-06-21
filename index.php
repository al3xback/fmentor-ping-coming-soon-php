<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Frontend Mentor | Ping Coming Soon Page | PHP</title>

	<!-- Core Meta Data -->
	<meta name="description" content="Frontend Mentor - Ping coming soon page solution." />
	<meta name="keywords" content="Frontend Mentor, Ping coming soon page" />

	<!-- Behavioral Meta Data -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="favicon.png" />

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Libre+Franklin:ital,wght@0,300;0,600;0,700;1,300&display=swap" />

	<!-- Styles -->
	<link rel="stylesheet" href="css/main.css" />

	<!-- Scripts -->
	<script src="js/main.js" defer></script>
</head>

<body>
	<?php
	define('TITLE', 'Ping coming soon');
	define('SECTION', array(
		'title' => array('first' => 'We are launching', 'last' => 'soon!'),
		'subtitle' => 'Subscribe and get notified',
		'image' => array('src' => 'images/illustration-dashboard.png', 'alt' => 'Illustration dashboard')
	));
	?>

	<div class="wrapper">
		<div class="container">
			<div class="wrapper__content">
				<header>
					<h1>
						<a href="#" id="logo"><?php echo TITLE; ?></a>
					</h1>
				</header>

				<main>
					<section class="section">
						<div class="section__head">
							<div class="card-intro">
								<h2 class="card-intro__title">
									<span class="light"><?php echo SECTION['title']['first']; ?></span>
									<?php echo SECTION['title']['last']; ?>
								</h2>
								<p class="card-intro__subtitle"><?php echo SECTION['subtitle']; ?></p>
								<form class="form" novalidate>
									<div class="form__group">
										<input class="form__control form__control--email" type="email" placeholder="Your email address..." />
										<div class="form__error-message"></div>
										<button type="submit" class="btn btn--primary">
											Notify Me
										</button>
									</div>
								</form>
							</div>
						</div>
						<div class="section__body">
							<div class="card-content">
								<div class="card-content__image">
									<img src="<?php echo SECTION['image']['src']; ?>" width="278" height="170" alt="<?php echo SECTION['image']['alt']; ?>" />
								</div>
							</div>
						</div>
					</section>
				</main>
			</div>
		</div>
	</div>

	<footer class="footer">
		<div class="container">
			<div class="footer__content">
				<ul class="socmed-links">
					<li class="socmed-link">
						<a href="#" class="btn btn--icon">
							<svg aria-hidden="true" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
								<!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
								<path d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" />
							</svg>
						</a>
					</li>
					<li class="socmed-link">
						<a href="#" class="btn btn--icon">
							<svg aria-hidden="true" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
								<!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
								<path d="M459.4 151.7c.3 4.5 .3 9.1 .3 13.6 0 138.7-105.6 298.6-298.6 298.6-59.5 0-114.7-17.2-161.1-47.1 8.4 1 16.6 1.3 25.3 1.3 49.1 0 94.2-16.6 130.3-44.8-46.1-1-84.8-31.2-98.1-72.8 6.5 1 13 1.6 19.8 1.6 9.4 0 18.8-1.3 27.6-3.6-48.1-9.7-84.1-52-84.1-103v-1.3c14 7.8 30.2 12.7 47.4 13.3-28.3-18.8-46.8-51-46.8-87.4 0-19.5 5.2-37.4 14.3-53 51.7 63.7 129.3 105.3 216.4 109.8-1.6-7.8-2.6-15.9-2.6-24 0-57.8 46.8-104.9 104.9-104.9 30.2 0 57.5 12.7 76.7 33.1 23.7-4.5 46.5-13.3 66.6-25.3-7.8 24.4-24.4 44.8-46.1 57.8 21.1-2.3 41.6-8.1 60.4-16.2-14.3 20.8-32.2 39.3-52.6 54.3z" />
							</svg>
						</a>
					</li>
					<li class="socmed-link">
						<a href="#" class="btn btn--icon">
							<svg aria-hidden="true" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
								<!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
								<path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
							</svg>
						</a>
					</li>
				</ul>
				<p class="copyright">
					&copy; Copyright Ping. All rights reserved.
				</p>
			</div>
			<p>
				Challenge by
				<a href="https://www.frontendmentor.io?ref=challenge" class="btn btn--link" rel="noopener" target="_blank">Frontend Mentor</a>. Coded by
				<a href="https://github.com/al3xback" class="btn btn--link" rel="noopener" target="_blank">al3xback</a>.
			</p>
		</div>
	</footer>
</body>

</html>
