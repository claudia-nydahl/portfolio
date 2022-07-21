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
		<section class="col-dk-12 contact-banner">
			<h1>Contact</h1>
		</section>
		<section class="contain">
			<section class="col-dk-6 col-md-6 col-sm-12 contact-section-2">
				<h1><span class="text-color">Hi there!</span> I would love to hear from you.</h1>
				<div>
					<h2><strong>Phone</strong></h2>
					<p class="contact-2"><a href="tel:0636869785">+27 63 686 9785</a></p>
				</div>
				<div>
					<h2><strong>Email</strong></h2>
					<p class="contact-2"><a href="mailto:claudia.nydahl@gmail.com">claudia.nydahl@gmail.com</a></p>
				</div>
			</section>
			<section class="col-dk-6 col-md-6 col-sm-12 contact-form">
				<form action="https://formspree.io/claudia.nydahl@gmail.com" method="post">
					<input name="name" placeholder="Name" type="text"> 
					<input name="email" placeholder="Email" type="text"> 
					<textarea name="message" type="message" placeholder="Message"></textarea> 
					<input class="form-button" type="submit" value="Submit">
				</form>
			</section>
		</section>
	</main>

	<?php include "footer.html" ?>

	<?php include "scripts.html" ?>
</body>
</html>