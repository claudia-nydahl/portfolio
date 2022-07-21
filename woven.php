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
						<h1>Woven Kitwear</h1>
						<p>Woven is an example of a responsive knitwear website that has been built using a column grid structure. This project is an online store design only and doesn't include functionality (such as the ability to add products to cart or checkout).</p>
						<br>
						<p>The design of this website is clean and uses minimal colour. The focus is on the imagery and display of knitwear. The minimalism of the site creates a clearer focus for each section and allows for easier use and navigation of the online store.</p>
					</div>

					<div class="extra-info">
						<div>
							<h2>Project</h2>
							<p>Friends of Design</p>
						</div>
						<div>
							<h2>Involvement</h2>
							<p>HTML | CSS</p>
						</div>	
						<div>
							<h2>Website</h2>
							<a href="https://claudia-nydahl.github.io/woven-knitwear" target="_blank">claudia-nydahl.github.io/woven-knitwear</a>
						</div>
					</div>
				</section>	

				<section class="col-dk-12 portfolio-item-images">
					<img src="img/woven-1.png">
					<img src="img/woven-2.png">
					<div class="half-images">
						<img src="img/woven-3.png">
						<img src="img/woven-4.png">
					</div>
					<img src="img/woven-7.png">
				</section>

				<section class="col-dk-12 portfolio-buttons">
					<div>
						<a class="button" href="https://claudia-nydahl.github.io/woven-knitwear" target="_blank">Link to website</a>
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