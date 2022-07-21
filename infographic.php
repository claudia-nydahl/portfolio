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
						<h1>Infographic - Urban Farming</h1>
						<p>One of the major projects done at Innogy Design Academy was to design an app for a product that would inspire people in cities to embrace urban farming. This infographic is a visualisation of a lot of the data that was collected from interviews for this project. Here, the visualisation is useful for seeing which of the users farm vs don't farm, and what they have to say about what influences them when purchasing food eg. freshness vs price of food. Infographics are an easier way for users to absorb a lot of information and to notice important trends.</p>
					</div>

					<div class="extra-info">
						<div>
							<h2>Project</h2>
							<p>Innogy Design Academy</p>
						</div>
						<div>
							<h2>Involvement</h2>
							<p>Adobe Illustrator</p>
						</div>	
					</div>
				</section>	

				<section class="col-dk-12 portfolio-item-images">
					<img src="img/infographic-01.png">
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