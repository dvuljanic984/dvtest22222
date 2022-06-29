<!doctype html>
<html class="no-js" lang="<?PHP echo WLANG;?>" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="google-site-verification" content="6PzsIDdJOVaQIyToxWiRmmyqeVKIZNiIGggy85VDI6Q" />

	<base href="<?PHP echo WURL_ROOT;?>">
	<?php echo webHelper::renderPageTitle($pageParams->title);?>

	<?php echo webHelper::renderMetaTags($pageParams->meta);?>

	<link rel="shortcut icon" href="/images/favicon/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="imag/favicon/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="57x57" href="/images/favicon/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="/images/favicon/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="76x76" href="/images/favicon/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="/images/favicon/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon" sizes="120x120" href="/images/favicon/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="/images/favicon/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="/images/favicon/apple-touch-icon-152x152.png" />
	<link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-touch-icon-180x180.png" />
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="theme-color" content="#ffffff">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
	<link rel="stylesheet" href="css/vendor/motion-ui.css<?php echo webHelper::mediaVersion();?>" />
	<link rel="stylesheet" href="css/vendor/owl.carousel.css<?php echo webHelper::mediaVersion();?>" />
	<!-- build:remove -->
	<link rel="stylesheet" href="css/foundation/app.css<?php echo webHelper::mediaVersion();?>">
	<!-- /build -->
	
	<!-- build:template
		<link rel="stylesheet" href="css/foundation/app.min.css<?php echo webHelper::mediaVersion();?>">
	<!-- /build -->
	<?php webHelper::renderStyle();?>
	<link rel="stylesheet" href="css/anim_test.css<?php echo webHelper::mediaVersion();?>">
	<!-- build:remove -->
	<link rel="stylesheet" href="css/main.css<?php echo webHelper::mediaVersion();?>">
	<!-- /build -->
	
	<!-- build:template
		<link rel="stylesheet" href="css/main.min.css<?php echo webHelper::mediaVersion();?>">
	<!-- /build -->

	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script&subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=latin-ext" rel="stylesheet">


	<?php //echo webHelper::mediaVersion();?>

</head>

<body class="<?php echo $pageParams->pageClass;?>" >

<div id="loader-wrapper" style="display: none;">
	<!--<div id="loader"></div>-->
	<svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="100px" height="100px" version="1.1" style="" viewBox="0 0 696 695">
            <defs>
	            <clipPath id="clipArea">
		            <path d="M407 141l0 67c0,10 8,18 17,18l9 0c6,0 11,3 15,8 3,6 3,12 0,17l-85 158c-3,5 -9,9 -15,9 -7,0 -12,-4 -16,-9l-84 -158c-3,-5 -3,-11 0,-17 3,-5 9,-8 15,-8l8 0c10,0 18,-8 18,-18l0 -3 0 -183c0,-9 6,-16 15,-17 15,-2 29,-3 43,-3 96,0 177,34 244,102 68,67 102,148 102,243 0,96 -33,178 -102,244 0,0 0,0 0,0 -67,68 -148,102 -244,102 -95,0 -176,-34 -243,-102 -68,-67 -102,-148 -102,-244 0,-95 35,-176 102,-243 14,-15 30,-29 47,-41 5,-4 12,-4 18,-1 6,3 10,9 10,15l0 98c0,5 -2,9 -5,12 -42,45 -63,98 -63,160 0,66 23,121 70,168 46,46 101,69 166,69 66,0 121,-23 168,-69 0,-1 0,-1 0,-1 47,-45 70,-101 70,-167 0,-65 -24,-121 -70,-167 -25,-25 -53,-43 -85,-55 -5,-2 -11,-1 -16,2 -4,3 -7,9 -7,14z"/>
	            </clipPath>
            </defs>

		<g style="clip-path:url(<?php echo URL_RELATIVE_PATH;?>#clipArea)">
			<path id="innerPath" class="path" stroke-linejoin="round"
			      d="M370 418l-1 -363c81,0 150,29 207,86 57,57 86,126 86,206 0,81 -28,150 -86,207 0,0 0,0 0,0 -57,57 -126,86 -207,86 -80,0 -149,-29 -206,-86 -57,-57 -86,-126 -86,-207 0,-80 29,-149 86,-206 13,-12 23,-22 38,-32"/>
		</g>
		<g>
			<path id="outterLine" class="outline" d="M407 141l0 67c0,10 8,18 17,18l9 0c6,0 11,3 15,8 3,6 3,12 0,17l-85 158c-3,5 -9,9 -15,9 -7,0 -12,-4 -16,-9l-84 -158c-3,-5 -3,-11 0,-17 3,-5 9,-8 15,-8l8 0c10,0 18,-8 18,-18l0 -3 0 -183c0,-9 6,-16 15,-17 15,-2 29,-3 43,-3 96,0 177,34 244,102 68,67 102,148 102,243 0,96 -33,178 -102,244 0,0 0,0 0,0 -67,68 -148,102 -244,102 -95,0 -176,-34 -243,-102 -68,-67 -102,-148 -102,-244 0,-95 35,-176 102,-243 14,-15 30,-29 47,-41 5,-4 12,-4 18,-1 6,3 10,9 10,15l0 98c0,5 -2,9 -5,12 -42,45 -63,98 -63,160 0,66 23,121 70,168 46,46 101,69 166,69 66,0 121,-23 168,-69 0,-1 0,-1 0,-1 47,-45 70,-101 70,-167 0,-65 -24,-121 -70,-167 -25,-25 -53,-43 -85,-55 -5,-2 -11,-1 -16,2 -4,3 -7,9 -7,14z"/>
		</g>
        </svg>
	<div class="loader-section section-left"></div>
	<div class="loader-section section-right"></div>
</div>

<div>


	<!--[if lte IE 8]>
	<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

	<!-- Add your site or application content here -->
	<section class="wrapper" id="contentWrapper">

		<header class="header">
			<div class="title-bar" data-responsive-toggle="topBar" data-hide-for="medium">
				<div class="title-bar-logo">
					<a href="/<?php echo WLANG;?>" class="logo">
						<svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
						     viewBox="0 0 6569 1430" preserveAspectRatio="yMid xMid">
                             <g id="insoftLogo">
	                             <path class="letter"
	                                   d="M2017 804c-111,0 -206,-39 -284,-117 -78,-78 -117,-173 -117,-286 0,-109 39,-204 117,-281 77,-80 172,-120 284,-120l188 0 482 0 51 0c14,0 25,12 25,26l0 180c0,13 -11,25 -25,25l-51 0 -482 0 -188 0c-24,0 -46,4 -67,12 -22,9 -40,21 -56,37 -16,16 -28,34 -37,56 -8,21 -12,43 -12,65 0,48 16,89 49,123 33,35 74,52 123,52l73 0 0 228 -73 0zm-351 574l-25 0c-14,0 -25,-11 -25,-25l0 -180c0,-14 11,-25 25,-25l25 0 508 0 187 0c23,0 46,-4 67,-13 21,-8 40,-20 56,-35 16,-16 28,-34 36,-55 9,-21 13,-44 13,-68 0,-46 -17,-87 -51,-121 -34,-34 -74,-52 -121,-52l-43 0 0 -228 42 0c112,0 206,39 284,117 80,78 119,173 119,284 0,110 -39,205 -119,284 -78,78 -172,117 -284,117l-186 0 -508 0z"/>
	                             <path class="letter logo-symbol"
	                                   d="M3696 258l0 175c-1,20 0,30 21,30l67 0c23,0 31,15 21,34l-207 379c-6,12 -11,25 -25,25l0 0c-13,0 -18,-13 -25,-25l-206 -379c-10,-19 -3,-34 20,-34l76 0c9,0 13,-3 13,-30l0 0 0 -13c0,-126 0,-269 0,-395 0,-13 2,-17 17,-19 32,-6 71,-6 104,-6 197,0 366,71 505,211 140,138 212,307 212,504 0,198 -70,367 -212,505 -139,140 -308,210 -505,210 -197,0 -366,-70 -504,-210 -140,-139 -210,-307 -210,-505 0,-197 71,-365 210,-504 28,-29 58,-56 90,-79 74,-55 65,-53 65,28 0,50 0,100 0,150 0,69 8,49 -34,101 -71,87 -107,188 -107,304 0,136 48,251 145,346 95,97 210,145 346,145 135,0 250,-48 346,-145 98,-95 145,-210 145,-346 0,-136 -49,-250 -145,-346 -58,-58 -125,-101 -202,-124 -24,-7 -21,5 -21,13z"/>
	                             <path class="letter" d="M4865 725l410 0c14,0 25,-11 25,-25l0 -180c0,-14 -11,-25 -25,-25l-410 0c-14,0 -25,11 -25,25l0 180c0,14 11,25 25,25zm-457 653l178 0c14,0 25,-11 25,-25l0 -1122 664 0c14,0 25,-12 25,-25l0 -180c0,-14 -11,-26 -25,-26l-689 0 -6 0 -172 0c-14,0 -25,12 -25,26l0 1327c0,14 11,25 25,25z"/>
	                             <path class="letter" d="M5445 231l1099 0c14,0 25,-12 25,-25l0 -180c0,-14 -11,-26 -25,-26l-1099 0c-14,0 -25,12 -25,26l0 180c0,13 11,25 25,25zm461 226l179 0c14,0 26,11 26,25l0 871c0,14 -12,25 -26,25l-179 0c-14,0 -26,-11 -26,-25l0 -871c0,-14 12,-25 26,-25z"/>
	                             <rect class="letter" y="1" width="228" height="1378" rx="25" ry="25"/>
	                             <path class="letter" d="M1265 798l0 -773c0,-14 12,-25 25,-25l188 0c14,0 25,11 25,25l-1 1214 1 111c0,9 0,46 -19,28l-656 -603c-10,-9 -18,-32 -18,-51l0 -280c0,-18 8,-26 18,-17l413 380c17,14 24,12 24,-9zm-688 -546c0,367 0,733 0,1100 0,13 -11,25 -25,25l-178 0c-14,0 -25,-11 -25,-25l-10 -1325c0,-26 0,-36 22,-17l194 172c27,24 22,23 22,70z"/>
                             </g>
                            </svg>
					</a>
				</div>
				<div class="title-bar-menu">
					<button class="menu-icon toggle-topbar" type="button" data-toggle>
						<span> x </span>
					</button>
					<!--<div class="title-bar-title">Menu</div>-->
				</div>
			</div>
			<div class="top-bar sticky" id="topBar">
				<div class="top-bar-left logo-section">
					<a href="/<?php echo WLANG;?>" class="logo">
						<svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 6569 1430">
                             <g id="insoftLogo">
	                             <path class="letter"
	                                   d="M2017 804c-111,0 -206,-39 -284,-117 -78,-78 -117,-173 -117,-286 0,-109 39,-204 117,-281 77,-80 172,-120 284,-120l188 0 482 0 51 0c14,0 25,12 25,26l0 180c0,13 -11,25 -25,25l-51 0 -482 0 -188 0c-24,0 -46,4 -67,12 -22,9 -40,21 -56,37 -16,16 -28,34 -37,56 -8,21 -12,43 -12,65 0,48 16,89 49,123 33,35 74,52 123,52l73 0 0 228 -73 0zm-351 574l-25 0c-14,0 -25,-11 -25,-25l0 -180c0,-14 11,-25 25,-25l25 0 508 0 187 0c23,0 46,-4 67,-13 21,-8 40,-20 56,-35 16,-16 28,-34 36,-55 9,-21 13,-44 13,-68 0,-46 -17,-87 -51,-121 -34,-34 -74,-52 -121,-52l-43 0 0 -228 42 0c112,0 206,39 284,117 80,78 119,173 119,284 0,110 -39,205 -119,284 -78,78 -172,117 -284,117l-186 0 -508 0z"/>
	                             <path class="letter logo-symbol"
	                                   d="M3696 258l0 175c-1,20 0,30 21,30l67 0c23,0 31,15 21,34l-207 379c-6,12 -11,25 -25,25l0 0c-13,0 -18,-13 -25,-25l-206 -379c-10,-19 -3,-34 20,-34l76 0c9,0 13,-3 13,-30l0 0 0 -13c0,-126 0,-269 0,-395 0,-13 2,-17 17,-19 32,-6 71,-6 104,-6 197,0 366,71 505,211 140,138 212,307 212,504 0,198 -70,367 -212,505 -139,140 -308,210 -505,210 -197,0 -366,-70 -504,-210 -140,-139 -210,-307 -210,-505 0,-197 71,-365 210,-504 28,-29 58,-56 90,-79 74,-55 65,-53 65,28 0,50 0,100 0,150 0,69 8,49 -34,101 -71,87 -107,188 -107,304 0,136 48,251 145,346 95,97 210,145 346,145 135,0 250,-48 346,-145 98,-95 145,-210 145,-346 0,-136 -49,-250 -145,-346 -58,-58 -125,-101 -202,-124 -24,-7 -21,5 -21,13z"/>
	                             <path class="letter" d="M4865 725l410 0c14,0 25,-11 25,-25l0 -180c0,-14 -11,-25 -25,-25l-410 0c-14,0 -25,11 -25,25l0 180c0,14 11,25 25,25zm-457 653l178 0c14,0 25,-11 25,-25l0 -1122 664 0c14,0 25,-12 25,-25l0 -180c0,-14 -11,-26 -25,-26l-689 0 -6 0 -172 0c-14,0 -25,12 -25,26l0 1327c0,14 11,25 25,25z"/>
	                             <path class="letter" d="M5445 231l1099 0c14,0 25,-12 25,-25l0 -180c0,-14 -11,-26 -25,-26l-1099 0c-14,0 -25,12 -25,26l0 180c0,13 11,25 25,25zm461 226l179 0c14,0 26,11 26,25l0 871c0,14 -12,25 -26,25l-179 0c-14,0 -26,-11 -26,-25l0 -871c0,-14 12,-25 26,-25z"/>
	                             <rect class="letter" y="1" width="228" height="1378" rx="25" ry="25"/>
	                             <path class="letter" d="M1265 798l0 -773c0,-14 12,-25 25,-25l188 0c14,0 25,11 25,25l-1 1214 1 111c0,9 0,46 -19,28l-656 -603c-10,-9 -18,-32 -18,-51l0 -280c0,-18 8,-26 18,-17l413 380c17,14 24,12 24,-9zm-688 -546c0,367 0,733 0,1100 0,13 -11,25 -25,25l-178 0c-14,0 -25,-11 -25,-25l-10 -1325c0,-26 0,-36 22,-17l194 172c27,24 22,23 22,70z"/>
                             </g>
                            </svg>
					</a>
				</div>
				<div class="top-bar-middle align-center">

					<?php echo webHelper::renderLayout("menu_".WLANG);?>

				</div>
				<div class="top-bar-right language-bar">

					<span>
						<a href="#" class="prevent-link active" data-open="fullScreenForm" id="hireus-form-toggle" >
						<i class="fa fa-paper-plane"></i>
					</a>
					</span>

					<span class="language-switcher">
						<?php echo webHelper::renderLayout("langswitcher");?>
					</span>



				</div>
			</div>
		</header>

		<div class="reveal full hire-us-reveal" id="fullScreenForm" data-reveal data-close-on-click="true" data-animation-in="" data-animation-out="">
			<div class="fullscreen-form-wrapper">

				<?php echo webHelper::renderLayout("hireus-".WLANG);?>

			</div>

			<button class="close-button" data-close aria-label="Close reveal" type="button">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>


		<div id="main-body">

			<section id="mainContentContainer" class="content">

				<div  class="main-content" >

					<?php echo $pageContent; ?>
				</div>

			</section>

			<footer class="footer">

				<?php echo webHelper::renderLayout("footer_".WLANG);?>

			</footer>


		</div>



	</section>



</div>









<!-- build:template
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-54240097-1', 'auto');
  ga('send', 'pageview');

</script>
/build -->

<script type="application/ld+json">{"@context":"http://schema.org","@type":"Organization","name":"InSoft d.o.o.","url":"https://www.insoft.hr/","sameAs":["https://www.facebook.com/Insoftdoo","https://twitter.com/InSoftdoo"]}</script>

	<script src="js/vendor/jquery.min.js<?php echo webHelper::mediaVersion();?>"></script>
	<script src="js/vendor/what-input.js<?php echo webHelper::mediaVersion();?>"></script>
	<script src="js/vendor/foundation.min.js<?php echo webHelper::mediaVersion();?>"></script>
	<script src="js/vendor/owl.carousel.min.js<?php echo webHelper::mediaVersion();?>"></script>
    <script src="https://www.google.com/recaptcha/api.js?onload=reCaptchaCallBack&render=explicit" async defer>
    </script>
    <script>
      var reCaptchaCallBack = function() {
        grecaptcha.render('recapctcha_el', {
          'sitekey' : '6LcHO2QUAAAAAJyGIbpUYkR8Q1Yu3ySValCOMhik'
        });
      };
    </script>
	<?php webHelper::renderScripts();?>
	<script src="js/main.js<?php echo webHelper::mediaVersion();?>"></script>

	<?php webHelper::renderScriptsDeclarations();?>


</body>
</html>