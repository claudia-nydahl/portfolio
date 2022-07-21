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
						<h1>Nicholas Whitehorn</h1>
						<p>Nicholas Whitehorn does garden design and landscaping in Cape Town, South Africa. Nicholas needs a timeless, modern website that will display his work, inform users of his company and services and get potential users in contact with him. Showing his portfolio of work is vital to gaining users' interest in his work. Each page of the website displays images of his previous gardening projects, showing users the quality and diversity of his work.</p>
						<br>
						<p>Using a content management system (in this case, Wordpress) allows Nicholas to easily add content and imagery to his website in order to keep the information and projects up to date.</p>
						<br>
					</div>

					<div class="extra-info">
						<div>
							<h2>Client</h2>
							<p>Nicholas Whitehorn</p>
						</div>
						<div>
							<h2>Involvement</h2>
							<p>Sketch | HTML | CSS | Wordpress</p>
						</div>
						<div>
							<h2>Website</h2>
							<a href="https://nicholaswhitehorn.com/" target="_blank">nicholaswhitehorn.com</a>
						</div>
					</div>
				</section>	

				<section class="col-dk-12 portfolio-item-images">
					<img src="img/nicholas-whitehorn-01.png">
					<div class="half-images">
						<img src="img/nicholas-whitehorn-02.png">
						<img src="img/nicholas-whitehorn-03.png">
					</div>
					<div class="image-text">
						<p class="subtext">Each informative page leads to a call to action, prompting users to contact Nicholas about creating their own dream garden.</p>
					</div>
					<img src="img/nicholas-whitehorn-04.png">
					<div class="half-images">
						<img src="img/nicholas-whitehorn-05.png">
						<img src="img/nicholas-whitehorn-06.png">
					</div>
					<img src="img/nicholas-whitehorn-07.png">
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