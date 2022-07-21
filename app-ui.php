<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-115899073-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-115899073-2');
    </script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PWBKV35');</script>
    <!-- End Google Tag Manager -->
	<meta charset="utf-8">
	<meta name="description" content="digital-portfolio">
	<meta name="keywords" content="design, digital, portfolio">
	<meta name="author" content="Claudia Nydahl">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Claudia Nydahl</title>
	<link rel="icon" type="image/png" href="img/logo.png">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PWBKV35"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

	<?php include "header.html" ?>

	<main>
		<section class="contain">
			<section class="col-dk-12 project-section main-section">
				<section class="col-dk-12 portfolio-item">
					<div class="project-info">
						<h1>Boxing app UI</h1>
						<p>The goal of this project was to re-design the existing True Muay Thai boxing app. This included re-branding (the logo, fonts and colours) and then applying the new corporate identity to the new app UI. The colour palette consists of an elegant blue, paired with a vibrant and energetic pink-red. The app UI shows examples of how the app would look when viewing a user profile, booking classes, checking in, tracking goals, joining challenges and communicating with class instructors. Note: This is just a UI and the app was not built.</p>
					</div>

					<div class="extra-info">
						<div>
							<h2>Project</h2>
							<p>Innogy Design Academy</p>
						</div>
						<div>
							<h2>Involvement</h2>
							<p>Sketch | Invision</p>
						</div>	
					</div>
				</section>	

				<section class="col-dk-12 portfolio-item-images">
					<img src="img/app-ui-01.png">
					<img src="img/app-ui-02.png">
					<div class="half-images">
						<img src="img/app-ui-03.png">
						<img src="img/app-ui-04.png">
					</div>
					<div class="image-text">
						<p class="subtext">Users can book or check into classes using the app. The user schedule and calendar enables them to easily keep track of past and upcoming classes.</p>
					</div>
					<img src="img/app-ui-05.png">
					<div class="image-text">
						<p class="subtext">The app links to users' smart devices in order to track their progress and goals.</p>
					</div>
					<div class="half-images">
						<img src="img/app-ui-06.png">
						<img src="img/app-ui-07.png">
					</div>
					<div class="image-text">
						<p class="subtext">Users can compete with others by taking part in monthly challenges. For any queries, users can directly connect with their class instructors.</p>
					</div>
				</section>

				<section class="col-dk-12 portfolio-buttons">
					<div>
						<a class="button" href="/portfolio">Back to Portfolio</a>
					</div>
				</section>

				<?php include "portfolio-prev-next.php" ?>
			</section>
		</section>
	</main>

	<?php include "footer.html" ?>

	<?php include "scripts.html" ?>
</body>
</html>