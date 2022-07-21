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
						<h1>GrowPro app UI</h1>
						<p class="subtext"><i>GrowPro is designed to help urban farmers control their farms from anywhere and at the click of a button, using a smartphone app.</i></p>
						<br>
						<p><strong>Design thinking</strong> was at the core of this app UI project. In order to find where our users' problems exist, all 6 team members began to conduct research in the form of interviews and questionnaires. We approached company stakeholders ( our 'investors'), local urban farmers and consumers (people who buy fresh, local food). The research helped us to understand pain points involved for urban farmers, the main ones being struggles of time, location, water restrictions (drought) and lack of education and communication. The problem was defined as: both current and potential urban farmers living in cities need access to farming technology in order to produce crops in a more convenient and efficient manner, regardless of their skill level.</p>
						<br>
						<p>From here, we began to ideate and come up with possible solutions to the struggles of urban farmers. We created personas and user stories to define the user's needs and goals, which the solution would be based on. In the end, our solution was to offer three different smart farming products that would all connect to an app. The prototypes of the app can be seen below.</p>
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
				
				<div class="clearfix"></div>

				<section class="extra-project-info">
					<div class="block-one-third">
						<h2>The Device</h2>
						<p>A device that can be placed in the soil of crops. The device reads important data and reports it to the user via the app, letting them know what the soil or crops need. This data includes soil moisture levels, light and mineral levels and PH levels.</p>
					</div>
					<div class="block-one-third">
						<h2>The Kit</h2>
						<p>An easy to assemble kit including shelving, lighting, irrigation control and data reading technology connecting to the app. The user can use the app to control aspects of their farm, such as light, moisture and PH levels. The kits can be easily moved and connected.</p>
					</div>
					<div class="block-one-third">
						<h2>The Container</h2>
						<p>A container that's set up with shelving, lighting, irrigation control, temperature control and data reading technology connecting to the app. Using the app, users have the additional control of temperature. The container uses a hydroponic setup, reducing water consumption.</p>
					</div>
				</section>

				<section class="col-dk-12 portfolio-item-images">
					<img src="img/growpro-01.png">
					<div class="half-images">
						<img src="img/growpro-02.png">
						<img src="img/growpro-03.png">
					</div>
					<div class="image-text">
						<p class="subtext"> The app connects to the device, kit or container. At setup, the user can specify what they will be growing in order for the app to provide the right recommendations.</p>
					</div>
					<img src="img/growpro-04.png">
					<div class="image-text">
						<p class="subtext">The app notifies the user of adjustments that should be made based on data collected from the device, kit or container. With the kit or container, adjustments can be made directly from the app.</p>
					</div>
					<div class="half-images">
						<img src="img/growpro-05.png">
						<img src="img/growpro-06.png">
					</div>
					<div class="image-text">
						<p class="subtext">The app gives users the ability to find and network with other farmers. Through networking, users can connect with and learn from other farmers.</p>
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