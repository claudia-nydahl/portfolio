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
                        <h1>Wine Cellar</h1>
                        <p>Wine Cellar is an online store, offering both South African and international fine wines and other wine-related services such as cellaring, tastings and wine investment. The website was designed and developed using Magento 2.</p>
                        <br> 
                        <p>The look and feel of the website follows Wine Cellar's corporate identity, which consists of greys and a subtle use of gold. The layout and design of the website was kept as minimal, clean and uncluttered as possible, to ensure a clearer focus on the vast range of products and services. Each page aims to help navigate the user to the many different types of wine and services available and narrow down the options according to the users' interests, helping them to find what they're looking for. There are also extensive informative pages on main wine regions, food and wine pairing and the different grape varieties.</p>
                    </div>

                    <div class="extra-info">
                        <div>
                            <h2>Employer</h2>
                            <p>Wine Cellar</p>
                        </div>
                        <div>
                            <h2>Involvement</h2>
                            <p>Sketch | Magento 2 | HTML | CSS | JQuery</p>
                        </div>	
                        <div>
							<h2>Website</h2>
							<a href="https://www.winecellar.co.za/" target="_blank">winecellar.co.za</a>
						</div>
                    </div>
                </section>	

                <section class="col-dk-12 portfolio-item-images">
                    <img src="img/wine-cellar-01.png">
                    <div class="image-text">
                        <p class="subtext">The home page shows lists of recommended wines and navigates the user to different wines and services available.</p>
                    </div>
                    <img src="img/wine-cellar-09.png">
                    <img src="img/wine-cellar-05.png">
                    <div class="image-text">
                        <p class="subtext">Each product in grid or list view displays basic information about the wine. The user can select the quantity of wine that they would like to purchase and add to cart, without having to first navigate to the product page.</p>
                    </div>
                    <img src="img/wine-cellar-02.png">
                    <div class="image-text">
                        <p class="subtext">The product pages contain detailed notes about the wine and producer. Here, users can also read or write reviews about the wine.</p>
                    </div>
                    <div class="half-images">
                        <img src="img/wine-cellar-03.png">
                        <img src="img/wine-cellar-04.png">
                    </div>
                    <div class="image-text">
                        <p class="subtext">At checkout, the user has the option of delivering or cellaring their wines. With cellaring, the user then has access to their cellar dashboard, where they can view a list of their wines, withdraw wines and keep their cellaring account up to date.</p>
                    </div>
                    <img src="img/wine-cellar-06.png">
                    <div class="image-text">
                        <p class="subtext">The user has access to delivery charges and time frames, so that they know when to expect their delivery. The delivery charge is calculated at checkout.</p>
                    </div>
                    <div class="half-images">
                        <img src="img/wine-cellar-07.png">
                        <img src="img/wine-cellar-08.png">
                    </div>
                    <div class="image-text">
                        <p class="subtext">Wine Cellar offers packages of investable wines. Users can track the increase in the value of their wines as they mature with age.</p>
                    </div>
                    
                    
                </section>

                <section class="col-dk-12 portfolio-buttons">
                    <div>
                        <a class="button" href="https://www.winecellar.co.za/" target="_blank">Link to website</a>
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