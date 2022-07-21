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
		<section class="section">
			<ul id="selectors">
				<li><a href="#" class="all-btn selected">All</a></li>
				<li><a href="#" class="category-1-btn">Web Design</a></li>
				<li><a href="#" class="category-2-btn">Graphic Design</a></li>
			</ul>

			<section class="category-1">
				<h3 class="category-heading">Web Design</h3>
				<div class="grid">
					<div class="item2 item--large reveal" data-aos="fade-up" onclick="window.location = '/wine-cellar';">
						<div class="item-details">
							<h2>Web Design</h2>
							<p>Wine Cellar</p>
						</div>
					</div>

					<div class="item2 item--large reveal" data-aos="fade-up" onclick="window.location = '/nicholas-whitehorn';">
						<div class="item-details">
							<h2>Web Design</h2>
							<p>Nicholas Whitehorn</p>
						</div>
					</div>

					<div class="item2 item--large reveal" data-aos="fade-up" onclick="window.location = '/sledgehammer-studio';">
						<div class="item-details">
							<h2>Web Design</h2>
							<p>Sledgehammer Studio</p>
						</div>
					</div>

					<div class="item2 item--large reveal" data-aos="fade-up" onclick="window.location = '/growpro';">
						<div class="item-details">
							<h2>Web Design</h2>
							<p>GrowPro app UI</p>
						</div>
					</div>

					<div class="item2 item--large reveal" data-aos="fade-up" onclick="window.location = '/woven';">
						<div class="item-details">
							<h2>Web Design</h2>
							<p>Woven Knitwear</p>
						</div>
					</div>

					<div class="item2 item--large reveal" data-aos="fade-up" onclick="window.location = '/yayoi-kusama';">
						<div class="item-details">
							<h2>Web Design</h2>
							<p>Yayoi Kusama</p>
						</div>
					</div>

					<div class="item2 item--large reveal" data-aos="fade-up" onclick="window.location = '/app-ui';">
						<div class="item-details">
							<h2>Web Design</h2>
							<p>Boxing app UI</p>
						</div>
					</div>

					<div class="item2 item--large reveal" data-aos="fade-up" onclick="window.location = '/yuschav-arly';">
						<div class="item-details">
							<h2>Web Design</h2>
							<p>Yuschav Arly</p>
						</div>
					</div>

					<div class="item2 item--large reveal" data-aos="fade-up" onclick="window.location = '/woolworths-ui';">
						<div class="item-details">
							<h2>Web Design</h2>
							<p>Woolworths Website Re-Design</p>
						</div>
					</div>
				</div>
			</section>

			<section class="category-2">
				<h3 class="category-heading">Graphic Design</h3>
				<div class="grid">
					<div class="item item--large" data-aos="fade-in" onclick="window.location = '/sir-magazine';">
						<div class="item-details">
							<h2>Graphic Design</h2>
							<p>Sir Magazine</p>
						</div>
					</div>

					<div class="item item--large" data-aos="fade-in" onclick="window.location = '/infographic';">
						<div class="item-details">
							<h2>Graphic Design</h2>
							<p>Infographic</p>
						</div>
					</div>

					<div class="item item--large" data-aos="fade-in" onclick="window.location = '/corporate-design';">
						<div class="item-details">
							<h2>Graphic Design</h2>
							<p>Corporate Design: Bay Union</p>
						</div>
					</div>

				</div>
			</section>			
		</section>
	</main>

	<?php include "footer.html" ?>

	<?php include "scripts.html" ?>
</body>