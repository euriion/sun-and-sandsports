<!doctype html>
<html ng-app="SunAndSandSports" class="" lang="en" data-state="above-the-fold-state landing-page bg-whitetogray bg-graytowhite bg-graywhitelight darkgraywhitelight bg-graytowhite-alt">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Football Boot History - Interactive Timeline By SSS</title>
		<meta name="description" content="Sun and Sands Sports presents an interactive timeline this football season to pay tribute to the shoe that has helped make football the sport it is today.">

		<meta property="og:description" content="Sun and Sands Sports presents an interactive timeline this football season to pay tribute to the shoe that has helped make football the sport it is today.">
		<meta property="og:title" content="Football Boot History - Interactive Timeline By SSS">
		<meta property="og:image" content="http://development.imanila.ph/caliber/images/sss-medium.png">
		<meta property="og:type" content="website">
		<meta property="og:url" content="http://development.imanila.ph/caliber/#/" />
		<meta property="fb:app_id" content="966242223397117">

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
		<link rel="stylesheet" href="css/reveal.css">
		<link rel="stylesheet" href="https://sssdesktop.s3.amazonaws.com/fonts/font.css">

		<link href="css/animate.css" rel="stylesheet">

		<link rel="stylesheet" href="css/caliber.css">
		<?php
			function isMobile() {
			    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
			}
		?>
	</head>
	<body class="" ng-controller="mainController as main">
		<div class="reveal jumbotron">
			<header id="header-container" class="header-container">
				<div class="container">
					<div class="col-6"><a href="http://en-ae.sssports.com/" class="brand-logo-anchor"><img src="images/sun-sand-sports.png" alt="Sun & Sand Sports" title="Sun & Sand Sports" class="brand-logo"></a></div>
					<div class="col-6 text-right">
						<ul class="social-icons">
							<li><a href="https://www.facebook.com/SunSandSports" title="Facebook" target="_blank"><img src="images/icon-facebook.png" alt="SSS Facebook"></a></li>
							<li><a href="https://twitter.com/sunsandsport" target="_blank" title="Twitter"><img src="images/icon-twitter.png" alt="SSS Twitter"></a></li>
							<li><a href="https://plus.google.com/+sunsandsports/posts" target="_blank" title="Google+"><img src="images/icon-googleplus.png" alt="SSS GooglePlus"></a></li>
							<li><a href="https://instagram.com/sunsandsports/" target="_blank" title="Instagram"><img src="images/icon-instagram.png" alt="SSS Instagram"></a></li>
							<li><a href="https://plus.google.com/+sunsandsports/posts" target="_blank" title="Google+"><img src="images/icon-googleplus.png" alt="SSS GooglePlus"></a></li>
						</ul>
					</div>
				</div>
			</header>

			<div class="main-container">
				<div class="container interactive-timeline-container">
					<div class="col-1 directional-arrows"><a onclick="Reveal.left();"><img src="images/left-arrow.png"></a></div>
					<div class="col-10">
						<div class="interactive-timeline">
							<div class="it-0 it-li circularpro-book font-14"><a href="#/">INTRO</a></div>
							<div class="it-1 it-li circularpro-book font-14"><a href="#/1">1500s</a></div>
							<div class="it-2 it-li circularpro-book font-14"><a href="#/2">1800s</a></div>
							<div class="it-3 it-li circularpro-book font-14"><a href="#/3">1940s</a></div>
							<div class="it-4 it-li circularpro-book font-14"><a href="#/4">1960s</a></div>
							<div class="it-5 it-li circularpro-book font-14"><a href="#/5">1970s</a></div>
							<div class="it-6 it-li circularpro-book font-14"><a href="#/6">1980s</a></div>
							<div class="it-7 it-li circularpro-book font-14"><a href="#/7">1990s</a></div>
							<div class="it-8 it-li circularpro-book font-14"><a href="#/8">2000s</a></div>
							<div class="it-9 it-li circularpro-book font-14"><a href="#/9">FUTURE</a></div>
						</div>
					</div>
					<div class="col-1 directional-arrows"><a onclick="Reveal.right();"><img src="images/right-arrow.png"></a></div>
				</div>
				<div class="slides">
					<?php /**

					*/ ?>
					<section class="" id="first-slide">
						<section data-transition="zoom" data-state="above-the-fold-state bg-whitetogray landing-page" class="above-the-fold color-gray slide-1">
							<div class="container">
								<h2 class="font-65">History <br /><span class="font-45 line-1-125">of the</span><br />Football Boot</h2>
								<img class="separator" src="images/banner-separator.png">
								<p class="font-25">An Interactive Timeline</p>
								<div class="col-container color-white">
									<div class="row arrow-swipe">
										<div class="col-6">
											<img src="images/banner-arrows.png">
											<p class="circularpro-book font-17">arrow keys</p>
										</div>
										<div class="col-6">
											<img src="images/header-swipe.png">
											<p class="circularpro-book font-17">swipe</p>
										</div>
									</div>
									<div class="row follow-the-yellow">
										<p class="circularpro-book font-17">follow the yellow</p>
										<img src="images/header-arrow-down.png">
									</div>
								</div>
							</div>
						</section>
						<section data-transition="slide" class="color-white slide-2" data-background-image="" data-background-position="100% 50%" data-background-size="100%" data-background-repeat="no-repeat" data-background="#868686" >
							<div class="inner-content">
								<div class="container ">
									<p class="font-25 margin-top-20">There’s a common dispute that comes up in the football world and it revolves around one simple<br /> statement;</p>
									<p id="force" class="font-25 margin-top-20 text-shadow-42">“the <span class="sss-yellow">shoes</span> you <span class="sss-yellow">wear</span> do not make you<br /><span class="sss-yellow">a better player</span>.”</p>
								</div>
							</div>
						</section>
						<section data-transition="slide" class="color-white slide-3" data-background-image="" data-background-position="100% 45%" data-background-size="100% 86px" data-background-repeat="no-repeat" data-background="#868686" >
							<div class="inner-content">
								<p class="font-25 " data--index="1">Though there is some truth to that statement,</p>
								<div class="text-background">
									<p class="font-25 text-shadow-42 sss-yellow" data--index="2">every player knows</p>
								</div>
								<p class="font-25  line-1-215" data--index="1">that without the proper footwear,<br />you’re putting yourself at a huge disadvantage.</p>
							</div>
						</section>
						<section data-transition="slide" class="color-gray slide-4" data-background="#00000" >
							<div class="inner-content ">
								<div class="container">
									<p class="font-25 line-1-215">Over the past century there have been <br /><span class='sss-yellow'>countless versions</span> of the <span class='sss-yellow'>football boot</span>,</p>
									<div class="row">
										<div class="col-6">
											<div class="shoe-item"><img class="" src="images/slide-1-4-shoe-left.png" alt="Shoe"></div>
										</div>
										<div class="col-6">
											<div class="shoe-item"><img class=""  src="images/slide-1-4-shoe-right.png" alt="Shoe"></div>
										</div>
									</div>
									<p class="font-25">each offering <span class='sss-yellow'>unique styles</span> and <span class='sss-yellow'>evolving features</span>. </p>
									<img class="shoe-center" src="images/slide-1-4-shoe-center.png" alt="Shoe">
									<p class="font-25 line-1-125">Some focused on <span class='sss-yellow'>cutting edge technology</span><br />while others relied on <span class='sss-yellow'>comfort and simplicity</span>. </p>
								</div>
							</div>
						</section>
						<section data-transition="slide" data-state="bg-graytowhite" class="color-white slide-5" data-background="#00000" >
							<div class="inner-content ">
								<div class="container">
									<p class="font-25 line-1-275">
										With football season well underway,<br />
										we thought we’d pay tribute <br />
										to the shoe that has helped <br />
										make football the sport it is today.<br />
									</p>
									<div class="guide-button-container">
										<div class="guide-button">
											<p class="circularpro-book font-13"><a href="#/1">Use the arrow<br> to learn more</a></p>
										</div>
									</div>
								</div>
							</div>

						</section>
						<div class="to-top-scroller">
							<a href="#/"><img src="images/to-top.png"></a>
						</div>
					</section>
					<?php /**

					*/ ?>
					<section class="" id="second-slide" data-transition="zoom">
						<section data-transition="zoom" data-state="bg-whitetogray above-the-fold-state" class="above-the-fold color-white slide-1">
							<div class="">
								<h2 class="font-55 text-shadow-lighter-new tradegothic sss-yellow">Prelude - Year 1526:</h2>
								<img class="separator" src="images/banner-separator.png">
								<p class="font-30 circularpro-book text-shadow-light line-0-915">The start of the Football Boot</p>
							</div>
						</section>
						<section data-transition="slide" class="color-white slide-2" data-background-image="" data-background-position="100% 67%" data-background-size="100%" data-background-repeat="no-repeat" data-background="#868686" >
							<div class="inner-content  ">
								<p class="font-25 margin-top-20">While no images of the shoe survived, </p>
								<img class="henry-viii" src="images/henry-viii.jpg" alt="Henry VIII">
								<div>
									<p class="font-25">
										<span class="sss-yellow">“football boots”</span><br/>
										are clearly listed on King Henry the VIII’s <br/>
										<span class="sss-yellow">‘Great Wardrobe of 1526’</span>
									</p>
								</div>
							</div>
						</section>
						<section data-transition="slide" class="color-white slide-3"data-background-image="" data-background-position="100% 75%" data-background-size="100% 86px" data-background-repeat="no-repeat" data-background="#868686" >
							<div class="container ">
								<div class="col-7">
									<div class="inner-content text-left ">
										<p class="font-25 margin-top-20 text-center">
											THIS DOCUMENT SERVED<br/>
											<span class="sss-yellow">AS A MEDIEVAL WISHLIST OF SORTS</span>,<br/>
											AND ALTHOUGH HENRY WOULD LATER<br/>
											<span class="sss-yellow">TRY TO BAN FOOTBALL IN 1540</span>,<br/>
											HIS BOOTS REMAIN<br/>
											<span class="sss-yellow">THE EARLIEST EXAMPLE<br/>
											OF THE MODERN DAY SHOES</span>.<br/>
										</p>
									</div>
								</div>
								<div class="col-5">
									<div class="medieval-wishlist-div">
										<img class="medieval-wishlist" src="images/medieval-wishlist.jpg" alt="Medieval Wishlist">
									</div>
								</div>
							</div>
							<div class="clear"></div>
							<div class="guide-button-container">
								<div class="guide-button">
									<p class="circularpro-book font-11"><a href="https://en-ae.sssports.com/about-us" target="_blank">CLICK HERE TO KNOW <br>
ABOUT OUR HISTORY </a></p>
								</div>
							</div>

						</section>
						<div class="to-top-scroller">
							<a href="#/1"><img src="images/to-top.png"></a>
						</div>
					</section>
					<?php /**

					*/ ?>
					<section class="" id="third-slide" data-transition="zoom">
						<section data-transition="zoom" data-state="bg-whitetogray above-the-fold-state" class="above-the-fold color-white slide-1">
							<h2 class="font-55 text-shadow-lighter-new tradegothic sss-yellow">Year 1800’s and early 1900’s:</h2>
							<img class="separator" src="images/banner-separator.png">
							<p class="font-30 circularpro-book text-shadow-light line-0-915">‘A slow Evolution’</p>
						</section>
						<section data-transition="slide" class="color-white slide-2" data-background-image="" data-background-position="100% 67%" data-background-size="100%" data-background-repeat="no-repeat" data-background="#868686" >
							<div class="inner-content ">
								<p class="font-25 margin-top-20 text-shadow-lighter">
									As football evolved <br/>
								  it became clear that <br/>
									<span class="sss-yellow">regulation was required</span> <br/>
									for footware.
								</p>
							</div>
						</section>
						<section data-transition="slide" class="color-gray slide-3" data-background="#00000" >
							<div class="inner-content ">
								<p class="font-25 line-1-215">One of the first rules introduced required <br/>
								<span class="sss-yellow">the metal studs</span> of the boots to be <span class="sss-yellow">rounded.</span>
								</p>
								<img class="" src="images/boots.png" alt="boots">
								<p class="font-25 line-1-215">
									This helped <span class="sss-yellow">prevent injuries</span> and is one <br/>
									of the first evolutions in design.
								</p>
							</div>
						</section>
						<section data-transition="slide" class="color-white slide-4" data-background-image="" data-background-position="100% 50%" data-background-size="100% 242px" data-background-repeat="no-repeat" data-background="#868686" >
							<div class="inner-content ">
								<p class="font-25 line-1-215">These early boots can be seen</p>
								<p class="font-25 line-1-215">in the <span class="sss-yellow">1934 World Cup quarter match</span> between <span class="sss-yellow">Italy and Spain.</span></p>
								<div class="bg-container"><iframe width="405" height="228" src="http://www.youtube.com/embed/Vastjd5PFMw" frameborder="0" allowfullscreen></iframe></div>
								<p class="font-18 line-1-215">
									The match is notorious for Italy’s aggressive play and some questionable<br/>
									officiating. In the end Italy would bully Spain out of contention after<br />
									Spanish goals were disallowed in both matches.
								</p>
							</div>
							<div class="clear"></div>
							<div class="guide-button-container">
								<div class="guide-button">
									<p class="circularpro-book font-11"><a href="https://become.sssports.com/football-shooting-tips-and-techniques/" target="_blank">FOOTBALL SHOOTING TECHNIQUES <br>
CLICK HERE</a></p>
								</div>
							</div>
						</section>
						<div class="to-top-scroller">
							<a href="#/2"><img src="images/to-top.png"></a>
						</div>
					</section>
					<?php /**

					*/ ?>
					<section class="" id="fourth-slide" data-transition="zoom">
						<section data-transition="zoom" data-state="bg-whitetogray above-the-fold-state" class="above-the-fold color-white slide-1">
							<h2 class="font-55 text-shadow-lighter-new tradegothic sss-yellow">Year 1940’s and 1950’s:</h2>
							<img class="separator separator-235" src="images/banner-separator.png">
							<p class="font-30 circularpro-book text-shadow-light line-0-915">‘the huge football leap’</p>
						</section>
						<section data-transition="slide" class="color-white slide-2" data-background-image="" data-background-position="100% 67%" data-background-size="100%" data-background-repeat="no-repeat" data-background="#fff" >
							<div class="inner-content text-left ">
								<div class="container">
									<div class="margin-div">
										<p class="font-25 margin-top-20 display-flex color-gray">After the&nbsp;<span class="sss-yellow">Second World War</span></p>
										<p class="font-25 margin-top-20 color-gray">the design of the football boot</p>
										<p class="font-25 margin-top-20 display-flex color-gray">took a huge&nbsp;<span class="sss-yellow">leap forward.</span></p>
									</div>
								</div>
								<div class="bg-container">
									<div class="container">
										<p class="font-25 margin-top-5">For the first time since studded boots,</p>
										<p class="font-25 margin-top-20 display-flex ">the shoes started to <span class="sss-yellow text-shadow-new">&nbsp;impact the game.</span></p>
										<img class="football-boots" src="images/football-boots.jpg" alt="Football boots">
									</div>
								</div>
							</div>
						</section>
						<section data-transition="slide" class="color-white slide-3" data-background-image="" data-background-position="100% 50%" data-background-size="100% 302px" data-background-repeat="no-repeat" data-background="#868686" >
							<div class="inner-content ">
								<div class="bg-container">
									<div class="container">
										<div class="text-right">
											<p class="circularpro-book font-18 animated slideInLeft" data-effect="slideInLeft">These new boots were on display</p>
											<p class="circularpro-book font-18 text-shadow-new animated slideInLeft sss-yellow" data-effect="slideInLeft">across Europe throughout the 1940s. </p>
										</div>
										<iframe width="341" height="192" src="http://www.youtube.com/embed/S0-3_APWA_Y" frameborder="0" type="text/html" allowfullscreen></iframe>
										<div class="text-left">
											<div>
												<p class="circularpro-book font-18 line-1-275">
													In Italy an exceptional Torino team<br />
													claimed four successive titles <br />
													wearing this style of shoe <br />
													and they are still responsible <br />
													for one of the<span class="sss-yellow">&nbsp;biggest</span> <br />
													upsets in football history; <br />
												</p>
												<p class="circularpro-book font-18 line-1-275 text-shadow-new">
													<span class="sss-yellow ">
														scoring 6 goals<br />
														in just 19 minutes<br />
														</span>
														against Rome.

												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<section data-transition="slide" class="color-white slide-4" data-background-image="" data-background-position="100% 56%" data-background-size="100% 202px" data-background-repeat="no-repeat" data-background="#868686" >
							<div class="inner-content ">
								<div class="upper-write-up">
									<p class="circularpro-book font-25 line-1-275">In the early 1950's</p>
									<p class="circularpro-book font-25 line-1-275"><span class="sss-yellow">Puma&nbsp;</span>and<span class="sss-yellow">&nbsp;adidas</span></p>
									<p class="circularpro-book font-25 line-1-275">introduced their</p>
									<p class="circularpro-book font-25 line-1-275"><span class="sss-yellow">screw-in studs shoes</span></p>
								</div>
								<div class="bg-container">
									<img class="puma-adidas" src="images/slide-4-3-boots.png" alt="Puma & Adidas">
								</div>
								<p class="circularpro-book font-25 line-1-275">
									allowing players to adjust their boots based on changing weather conditions.
								</p>
							</div>
						</section>
						<section data-transition="slide" data-state="bg-graywhitelight" class="color-white slide-5" data-background-image="" data-background-position="100% 56%" data-background-size="100% 297px" data-background-repeat="no-repeat" >
							<div class="inner-content text-shadow ">
								<div class="bg-container">
									<div class="container">
										<div class="text-holder">
											<p class="circularpro-book font-25 text-center text-shadow-new">
												The Adidas ARGENTINIA, worn by<span class="sss-yellow">&nbsp;Fritz Walter</span>, <br/>
												used this<span class="sss-yellow">&nbsp;new technology&nbsp;</span>and gave the Mannschaft <br/>
												a<span class="sss-yellow">&nbsp;noticeable advantage&nbsp;</span>during a rain-lashed <br/>
											<span class="sss-yellow">	World Cup in 1954.</span>
											</p>
										</div>
										<iframe width="434" height="245" src="http://www.youtube.com/embed/qPfhoox5HdI" frameborder="0" allowfullscreen></iframe>
									</div>
								</div>
							</div>
							<div class="clear"></div>
							<div class="guide-button-container">
								<div class="guide-button">
									<p class="circularpro-book font-11"><a href="https://en-ae.sssports.com/brands/adidas" target="_blank">SHOP FOR ADIDAS<br> FOOTBALL BOOTS </a></p>
								</div>
							</div>
						</section>
						<div class="to-top-scroller">
							<a href="#/3"><img src="images/to-top.png"></a>
						</div>
					</section>
					<?php /**

					*/ ?>
					<section class="" id="fifth-slide" data-transition="zoom">

						<section data-transition="zoom" data-state="bg-whitetogray above-the-fold-state" class="above-the-fold color-white slide-1">
							<h2 class="font-55 text-shadow-lighter-new tradegothic sss-yellow">Year 1960’s:</h2>
							<img class="separator separator-235" src="images/banner-separator.png">
							<p class="font-30 circularpro-book text-shadow-light line-0-915">‘Internation competition drives innovation’</p>
						</section>
						<section data-transition="slide" class="slide-2" data-background-image="" data-background-position="100% 72.5%" data-background-size="100%" data-background-repeat="no-repeat" data-background="#ffffff" >
							<div class="inner-content ">
								<div class="container">
									<img src="images/slide-5-2-shoes.png" alt="shoes">
									<div class="write-up-holder">
										<p class="circularpro-book font-25 margin-top-20 color-gray-313131">
											IN THE<span class="sss-yellow">&nbsp;1960s&nbsp;</span>FOOTBALL BOOT TECHNOLOGY CONTINUED TO<span class="sss-yellow">&nbsp;EVOLVE RAPIDLY</span>,<br/>
											MANUFACTURERS<span class="sss-yellow">&nbsp;MOVED AWAY&nbsp;</span>FROM THE HIGH CUT BOOTS OF THE PAST,<br/>
											<span class="sss-yellow">OPTING&nbsp;</span>FOR NEW, LIGHTER LOW CUT DESIGNS.
										</p>
									</div>
								</div>
								<div class="bg-container">
									<div class="container">
										<div class="lower-content">
											<p class="circularpro-book font-25 margin-top-20 color-white">
												THE BOOTS ENABLED PLAYERS TO MOVE<span class="sss-yellow">&nbsp;FASTER&nbsp;</span>AND<br/>
												CHANGE DIRECTION<span class="sss-yellow">&nbsp;QUICKER</span>.
											</p>
										</div>
									</div>
								</div>
							</div>
						</section>
						<section data-transition="slide" class="color-white slide-3" data-background-image="" data-background-position="100% 56%" data-background-size="100% 297px" data-background-repeat="no-repeat" data-background="#868686" >
							<div class="inner-content text-shadow ">
								<div class="bg-container">
									<div class="container">
										<div class="col-container text-shadow">
											<div class="col-6">
												<img src="images/pele.png" alt="Pele">
												<p class="circularpro-book font-18 margin-top-20 text-shadow">
													IN 1962<span class="sss-yellow">&nbsp;PELÉ LEAD BRAZIL&nbsp;</span>TO THEIR <br/>
													<span class="sss-yellow">SECOND WORLD CUP TITLE</span><br/>
													IN AS MANY TOURNAMENTS WEARING <br/>
													<span class="sss-yellow">PUMA BOOTS</span>. <br/>
												</p>
											</div>
											<div class="col-6">
												<iframe width="434" height="245" src="http://www.youtube.com/embed/UdKs_eQvalc" frameborder="0" allowfullscreen></iframe>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<section data-transition="slide" class="color-white slide-4" data-background-image="" data-background-position="100% 56%" data-background-size="100% 202px" data-background-repeat="no-repeat" data-background="#868686" >
							<div class="inner-content ">
								<div class="container">
									<div class="upper-write-up">
										<p class="circularpro-book font-25 line-1-215 text-center">
											IN FEBRUARY 1965, <span class="sss-yellow">UWE SEELER</span> TORE HIS <span class="sss-yellow">ACHILLES TENDON</span>,<br/>
											AN INJURY THAT WOULD USUALLY BE <span class="sss-yellow">CAREER ENDING</span>.
										</p>
									</div>
								</div>
								<div class="bg-container"><img class="margin-bottom-10" src="images/slide-5-4-shoes.png" alt="shoe"></div>
								<p class="circularpro-book font-25 line-1-215">
									To help, <span class="sss-yellow">Adi Dassler</span> designed the <span class="sss-yellow">Adidas Achilles</span>, <br/>
									a <span class="sss-yellow">special orthopedic shoe</span> which enabled seeler to play again.
								</p>
							</div>
						</section>
						<section data-transition="slide" data-state="bg-graytowhite" class="color-white slide-5" data-background-image="" data-background-position="100% 73%" data-background-size="100% 89px" data-background-repeat="repeat-x" >
							<div class="inner-content ">
								<iframe width="445" height="251" src="http://www.youtube.com/embed/YsQtuJXnxOY" frameborder="0" allowfullscreen></iframe>
								<div class="bg-container">
									<p class="circularpro-book font-25 text-shadow-new">
										Wearing the <span class="sss-yellow">Achilles</span>, Uwe Seeler scored the <span class="sss-yellow">deciding goal</span><br/>
										at the <span class="sss-yellow">world cup qualifying match</span><br/>
										against Sweden on <span class="sss-yellow">26 September</span>.
									</p>
								</div>
							</div>
							<div class="clear"></div>
							<div class="guide-button-container">
								<div class="guide-button">
									<p class="circularpro-book font-11"><a href="https://en-ae.sssports.com/brands/nike" target="_blank">SHOP FOR NIKE<br> FOOTBALL BOOTS </a></p>
								</div>
							</div>
						</section>
						<div class="to-top-scroller">
							<a href="#/4"><img src="images/to-top.png"></a>
						</div>
					</section>
					<?php /**

					*/ ?>
					<section class="" id="sixth-slide" data-transition="zoom">

						<section data-transition="zoom" data-state="bg-whitetogray above-the-fold-state" class="above-the-fold color-white slide-1">
							<h2 class="font-55 text-shadow-lighter-new tradegothic sss-yellow">Year 1970’s:</h2>
							<img class="separator separator-235" src="images/banner-separator.png">
							<p class="font-30 circularpro-book text-shadow-light line-0-915">The Era of Sponsorship Begins</p>
						</section>
						<section data-transition="slide" class="color-white slide-2" data-background-image="" data-background-position="100% 56%" data-background-size="100% 292px" data-background-repeat="no-repeat" data-background="#868686" >
							<div class="inner-content ">
								<p class="circularpro-book font-25">
									<span class="sss-yellow lowercase">1970s</span> USHERED IN A NEW AGE OF <span class="sss-yellow">WORLD OF SOCCER</span>.
								</p>
								<div class="bg-container">
									<img src="images/pan.png" alt="Puma Adidas Nike">
									<p class="circularpro-book font-25 text-center">
										FOR THE <span class="sss-yellow">FIRST TIME EVER</span>,<br/>
										BRANDS BEGAN TO <span class="sss-yellow">SPONSOR</span> INDIVIDUAL ATHELETES.<br/>
										PLAYERS WERE PAID BY MANUFACTURERS TO SPORT THEIR <br/>
										SOCCER BOOTS WHILE PLAYING.
									</p>
								</div>
							</div>
						</section>
						<section data-transition="slide" class="color-white slide-3" data-background-image="images/bg-dark-gray-302.png" data-background-position="100% 50%" data-background-size="100% 302px" data-background-repeat="no-repeat" data-background="#868686" >
							<div class="container">
								<div class="inner-content ">
									<div class="col-container color-white">
										<div class="col-6">
											<iframe width="489" height="276" src="http://www.youtube.com/embed/JVqK4_R17Fo" frameborder="0" allowfullscreen></iframe>
										</div>
										<div class="col-6 last-child">
											<p class="circularpro-book font-25 text-center line-1-215">
												<span class="sss-yellow">ADIDAS</span> INTRODUCES THE <span class="sss-yellow">COSMOS</span><br/>
												IN 1970. THE SHOE WAS ONE OF THE <br/>
												<span class="sss-yellow">FIRST DESIGNED</span> TO MATCH <br/>
												A UNIQUE ATHELETES FOOT, <br/>
												THAT FOOT BELONGED TO <br/>
												<span class="sss-yellow">FRANZ BECKENBAUER</span>.
											</p>
										</div>
									</div>
								</div>
							</div>
						</section>
						<section data-transition="slide" class="color-white slide-4" data-background-image="images/bg-black-279.jpg" data-background-position="100% 50%" data-background-size="100% 279px" data-background-repeat="no-repeat" data-background="#868686" >
							<div class="container">
								<div class="inner-content ">
									<div class="col-container color-white">
										<div class="col-7">
											<p class="circularpro-book font-25 line-1-215">
												Pelé  <br/>
												– again <span class="sss-yellow">“Player of the Tournament”</span> – <br/>
												wears <span class="sss-yellow">PUMA KING boots</span> <br/>
												and helps Brazil to win his and his country’s third <br/>
												World Cup title by beating Italy in the Mexico finals.
											</p>
										</div>
										<div class="col-5">
											<iframe width="495" height="277" src="http://www.youtube.com/embed/k85liXbZiao" frameborder="0" allowfullscreen></iframe>
										</div>
									</div>
								</div>
							</div>
						</section>
						<section data-transition="slide"  class="color-white slide-5" data-state="bg-whitetogray" data-background-image="images/bg-gray-black-330.jpg" data-background-position="100% 50%" data-background-size="100% 330px" data-background-repeat="no-repeat">
							<div class="container">
								<div class="inner-content ">
									<div class="col-container color-white text-shadow">
										<div class="col-6">
											<iframe width="431" height="241" src="http://www.youtube.com/embed/NZkR5Wb2KQs" frameborder="0" allowfullscreen></iframe>
										</div>
										<div class="col-6">
											<iframe width="431" height="241" src="http://www.youtube.com/embed/jQRIxEQAkX8" frameborder="0" allowfullscreen></iframe>
										</div>
									</div>
									<p class="circularpro-book font-18 text-shadow-new line-1">
										<span class="sss-yellow">Nike</span> enters the football market developing their <span class="sss-yellow">first football boots</span> and partnering with <br/>
										several <span class="sss-yellow">North American Soccer League associations</span>.
									</p>
								</div>
							</div>
							<div class="clear"></div>
							<div class="guide-button-container">
								<div class="guide-button">
									<p class="circularpro-book font-11"><a href="https://en-ae.sssports.com/brands/puma" target="_blank">SHOP FOR PUMA<br> FOOTBALL BOOTS </a></p>
								</div>
							</div>
						</section>
						<div class="to-top-scroller">
							<a href="#/5"><img src="images/to-top.png"></a>
						</div>
					</section>
					<?php /**

					*/ ?>
					<section class="" id="seventh-slide" data-transition="zoom">

						<section data-transition="zoom" data-state="bg-whitetogray above-the-fold-state" class="above-the-fold color-white slide-1">
							<h2 class="font-55 text-shadow-lighter-new tradegothic sss-yellow">Year 1980’s:</h2>
							<img class="separator separator-235" src="images/banner-separator.png">
							<p class="font-30 circularpro-book text-shadow-light line-0-915">greater power and control </p>
						</section>
						<section data-transition="slide" class="color-white slide-2" data-background-image="" data-background-position="100% 45%" data-background-size="100% 330px" data-background-repeat="no-repeat" data-background="#868686" >
							<div class="inner-content ">
								<div class="bg-container">
									<div class="container">
										<p class="font-25 circularpro-book line-1-215">
											<span class="sss-yellow">80’s</span> brought more technologies into the realm of <span class="sss-yellow">boot <br/>
											design</span>. More thought was given on <span class="sss-yellow">Studs Placement</span>, <br/>
 											improving <span class="sss-yellow">traction</span> between the boot and the ground.
										</p>
										<img src="images/80s-boots-design.png" alt="80s Boots Design">
										<p class="circularpro-book font-18 line-1-215">
											Manufacturers began to place power & swerve zones on soccer shoes,
											“Sweet Spots” that when struck properly would provide greater power and control on a shot. </p>
									</div>
								</div>
							</div>
						</section>
						<section data-transition="slide" class="color-white slide-3" data-background-image="images/bg-dark-gray-242.png" data-background-position="100% 50%" data-background-size="100% 238px" data-background-repeat="no-repeat" data-background="#868686" >
							<div class="container">
								<div class="inner-content ">
									<div class="col-container color-white">
										<div class="col-6">
											<p class="circularpro-book font-25 line-1-215 text-left">
												<span class="sss-yellow">Aston Villa</span> clinches Europe’s <br/>
												top club prize with the entire <br/>
												team wearing <span class="sss-yellow">Nike Boots</span>.
											</p>
										</div>
										<div class="col-6">
											<iframe width="421" height="231" src="http://www.youtube.com/embed/m6xSbPjybok" frameborder="0" allowfullscreen></iframe>
										</div>
									</div>
								</div>
							</div>
						</section>
						<section data-transition="slide" class="color-white slide-4" data-background-image="images/bg-black-279.jpg" data-background-position="100% 50%" data-background-size="100% 279px" data-background-repeat="no-repeat" data-background="#868686" >
							<div class="container">
								<div class="inner-content ">
									<div class="col-container color-white">
										<div class="col-6">
											<iframe width="473" height="266" src="http://www.youtube.com/embed/-ZrdMQKo4Zw" frameborder="0" allowfullscreen></iframe>
										</div>
										<div class="col-6 last-child">
											<p class="circularpro-book font-25 line-1-215">
												ARGENTINEAN FOOTBALL PLAYER <br/>
												<span class="sss-yellow">DIEGO MARADONA</span> LEADS HIS <br/>
												COUNTRY TO THE WORLD CUP <br/>
												TITLE, WEARING <span class="sss-yellow">PUMA FOOTBALL <br/>
												BOOTS</span>. HE IS VOTED <br/>
												<span class="sss-yellow">“PLAYER OF THE TOURNAMENT”</span>. <br/>
											</p>
										</div>
									</div>
								</div>
							</div>
						</section>
						<section data-transition="slide" class="color-white slide-5" data-background-image="" data-background-position="100% 30%" data-background-size="100% 423px" data-background-repeat="no-repeat" >
							<div class="bg-container">
								<div class="container">
									<div class="inner-content ">
										<div class="col-container color-white">
											<div class="col-6">
												<iframe width="248" height="140" src="http://www.youtube.com/embed/e4Q1oA8-2oQ" frameborder="0" allowfullscreen></iframe>
											</div>
											<div class="col-6 last-child">
												<iframe width="248" height="140" src="http://www.youtube.com/embed/zTfPOzUc1JI" frameborder="0" allowfullscreen></iframe>
											</div>
										</div>
										<div class="copa-mundial">
											<p class="circularpro-book font-25 text-shadow-new line-1-215">
												the <span class="sss-yellow">Copa Mundial</span>, <br/>
												Adidas <span class="sss-yellow">most successful</span> football boot,<br/>
												is introduced for the <span class="sss-yellow">1982 world cup</span> in Spain.
											</p>
										</div>
										<div class="col-container color-white">
											<div class="col-6">
												<iframe width="248" height="140" src="http://www.youtube.com/embed/ccNkksrfls" frameborder="0" allowfullscreen></iframe>
											</div>
											<div class="col-6 last-child">
												<iframe width="248" height="140" src="http://www.youtube.com/embed/RiYYSradplU" frameborder="0" allowfullscreen></iframe>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="clear"></div>
							<div class="guide-button-container">
								<div class="guide-button">
									<p class="circularpro-book font-11"><a href="https://en-ae.sssports.com/sports/football?cat=587" target="_blank">SHOP FOR <br>FOOTBALL ACCESSORIES </a></p>
								</div>
							</div>
						</section>
						<div class="to-top-scroller">
							<a href="#/6"><img src="images/to-top.png"></a>
						</div>
					</section>
					<?php /**

					*/ ?>
					<section class="" id="eighth-slide" data-transition="zoom">

						<section data-transition="zoom" data-state="bg-whitetogray above-the-fold-state" class="above-the-fold color-white slide-1">
							<h2 class="font-55 text-shadow-lighter-new tradegothic sss-yellow">Year 1990’s:</h2>
							<img class="separator separator-235" src="images/banner-separator.png">
							<p class="font-30 circularpro-book text-shadow-light line-0-915">‘soles and studs’</p>
						</section>
						<section data-transition="slide" class="color-white slide-2" data-background-image="" data-background-position="100% 45%" data-background-size="100% 330px" data-background-repeat="no-repeat" data-background="#868686" >
							<div class="inner-content ">
								<div class="container">
									<p class="circularpro-book font-25 line-1-215">
										THIS PERIOD SAW A DIFFERENCE NOT IN ONLY <span class="sss-yellow">COLOUR</span>, <span class="sss-yellow">SIZE</span>, AND <span class="sss-yellow">SHAPE</span>, <br/>
										BUT ALSO IN <span class="sss-yellow">THE STUDS THAT WERE USED</span> ON THE UNDER SIDE OF THE BOOT.
									</p>
									<img src="images/boots-5-images.png" alt="Boots">
									<p class="circularpro-book font-18 line-1-215 margin-top-15">
										THE SOLE OF THE SHOES ALSO BECAME A KEY FOCUS, DESIGNED TO BE MORE FLEXIBLE,<br/>
										IMPROVING PLAYER BALANCE AND ALLOWING FOR MORE NATURAL MOVEMENT WITHIN THE BOOT.
									</p>
								</div>
							</div>
						</section>
						<section data-transition="slide" class="color-white slide-3" data-background-image="" data-background-position="100% 3%" data-background-size="100%" data-background-repeat="no-repeat" data-background="#fff" >
							<div class="inner-content ">
								<div class="bg-container">
									<div class="container">
										<p class="circularpro-book font-25 line-1-215">
											<span class="sss-yellow">PUMA</span> SPONSORED FOOTBALL TEAM, <span class="sss-yellow">WERDER BREMEN</span>, <br/>
											WIN THE <span class="sss-yellow">‘1992 EUROPEAN CUP WINNERS'</span> CUP FINAL IN LISBON.
										</p>
									</div>
								</div>
								<iframe width="524" height="296" src="https://www.youtube.com/embed/AumYyRB_1Ak" frameborder="0" allowfullscreen></iframe>
							</div>
						</section>
						<section data-transition="slide" class="color-white slide-4" data-background-image="" data-background-position="100% 50%" data-background-size="100% 238px" data-background-repeat="no-repeat" data-background="#868686" >
							<div class="bg-container">
								<div class="container">
									<div class="inner-content ">
										<div class="col-container color-white">
											<div class="col-6">
												<p class="circularpro-book font-18 line-1-215 first-child">
													<span class="sss-yellow">THOMAS (ICKE) HÄSSLER</span> WORE <br>
													THE <span class="sss-yellow">PREDATOR TOUCH</span> WHEN HE <br>
													WAS PART OF THE GERMAN <br>
													TEAM WHO BECAME EUROPEAN <br>
													<span class="sss-yellow">CHAMPIONS</span> AT EURO 1996 <br>
													IN ENGLAND.
												</p>
												<img src="images/thomas-shoes.png" class="float-left" alt="Thomas">
											</div>
											<div class="col-6">
												<iframe width="421" height="231" src="https://www.youtube.com/embed/nAdCWfCDSGo" frameborder="0" allowfullscreen></iframe>
											</div>
											<div class="clear"></div>
											<div class="col-12">
												<p class="circularpro-book font-18 second-child">He was one of the first top players to prefer wearing the Predator.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<section data-transition="slide" data-state="bg-graywhitelight" class="color-white slide-5" data-background-image="" data-background-position="100% 50%" data-background-size="100% 330px" data-background-repeat="no-repeat" >
							<div class="inner-content ">
								<div class="bg-container">
									<div class="container">
										<p class="circularpro-book font-25 text-shadow line-1-215">
											<span class="sss-yellow">Nike</span> debuts the new <span class="sss-yellow">Mercurial boot</span> <br/>
											on <span class="sss-yellow">Ronaldo’s feet</span> in France at the <span class="sss-yellow">1998 world cup</span>.
										</p>
									</div>
								</div>
								<iframe width="443" height="246" src="https://www.youtube.com/embed/_hiH6w4LFLo" frameborder="0" allowfullscreen></iframe>
							</div>
							<div class="clear"></div>
							<div class="guide-button-container">
								<div class="guide-button">
									<p class="circularpro-book font-11"><a href="https://become.sssports.com/pick-of-the-week-adidas-messi-15-1-fgag-football-shoe/" target="_blank">FOOTBALL BOOTS <br>PICK OF THE WEEK </a></p>
								</div>
							</div>
						</section>
						<div class="to-top-scroller">
							<a href="#/7"><img src="images/to-top.png"></a>
						</div>
					</section>
					<?php /**

					*/ ?>
					<section class="" id="ninth-slide" data-transition="zoom">

						<section data-transition="zoom" data-state="bg-whitetogray above-the-fold-state" class="above-the-fold color-white slide-1">
							<h2 class="font-55 text-shadow-lighter-new tradegothic sss-yellow">Year 2000’s:</h2>
							<img class="separator separator-235" src="images/banner-separator.png">
							<p class="font-30 circularpro-book text-shadow-light line-0-915">The 21st century football boots</p>
						</section>
						<section data-transition="slide" class="color-white slide-2" data-background-image="" data-background-position="100% 50%" data-background-size="100% 238px" data-background-repeat="no-repeat" data-background="#868686" >
							<div class="inner-content ">
								<p class="circularpro-book font-18 line-1-215">In the first decade of the 21st century a range of new technologies <br /> such as rapid prototyping and laser cutting became more affordable. </p>
								<div class="bg-container">
									<img src="images/ninth-boots-5-images.png" alt="boots">
									<p class="circularpro-book font-25 first-child text-center">
										AS A RESULT, THEY BEGAN TO <span class="sss-yellow">FIND THEIR WAY</span> INTO FOOTBALL <br/>
										BOOT DESIGN. THIS <span class="sss-yellow">LEAP</span> ALLOWED MANUFACTURERS TO <span class="sss-yellow">BEGIN</span> PRODUCING <br/>
										SOME OF THE <span class="sss-yellow">FIRST FULLY CUSTOMISED FOOTBALL BOOTS</span>.
									</p>
								</div>
							</div>
						</section>
						<section data-transition="slide" class="color-white slide-3" data-background-position="100% 50%" data-background-size="100% 279px" data-background-repeat="no-repeat" data-background="#868686" >
							<div class="inner-content bg-gradient-white-gray ">
								<div class="container">
									<div class="col-container color-white">
										<div class="col-6">
											<img src="images/adidas.jpg" alt="adidas">
										</div>
										<div class="col-6 last-child">
											<p class="circularpro-book font-25">
												IN 2001,<br/>
												<span class="sss-yellow">ADIDAS PREDATOR TRX SG</span> <br/>
												WAS PRODUCED FOR THE <br/>
												ENGLISH NATIONAL FOOTBALL <br>
												PLAYER  <span class="sss-yellow">DAVID BECKHAM</span>. <br/>
											</p>
											<br/>
											<p class="circularpro-book font-18">A personalized lace was used and the<br />name of his first son Brooklyn Beckham<br />was stitched on the boot. </p>
										</div>
									</div>
								</div>
							</div>
						</section>
						<section data-transition="slide" class="color-white slide-4" data-background-image="images/bg-black-279.jpg" data-background-position="100% 50%" data-background-size="100% 279px" data-background-repeat="no-repeat" data-background="#868686" >
							<div class="container">
								<div class="inner-content ">
									<div class="col-container color-white">
										<div class="col-6">
											<p class="circularpro-book font-25">
												NIKE’S LIMITED EDITION <br/>
												- <span class="sss-yellow">TIEMPO TOUCH OF GOLD BOOTS</span> - <br/>
												ARE LAUNCHED IN 2006 WITH AN ICONIC VIDEO OF <span class="sss-yellow">RONALDINHO</span>  <br/>
												FIRING A BALL OFF A CROSSBAR FOUR TIMES IN A ROW <br/>
												WITHOUT THE BALL HITTING THE GROUND. <br/>
											</p>
										</div>
										<div class="col-6 last-child">
											<iframe width="473" height="266" src="http://www.youtube.com/embed/Z6JdxaDDzb8" frameborder="0" allowfullscreen></iframe>
										</div>
									</div>
								</div>
							</div>
						</section>
						<section data-transition="slide" data-state="bg-graywhitelight" class="color-white slide-5" data-background-image="" data-background-position="100% 50%" data-background-size="100% 330px" data-background-repeat="no-repeat" >
							<div class="inner-content ">
								<div class="bg-container">
									<div class="video-container">
										<iframe width="302" height="164" src="http://www.youtube.com/embed/88KREDmBWeQ" frameborder="0" allowfullscreen></iframe>
										<iframe width="302" height="164" src="http://www.youtube.com/embed/QryFUtRtUiM" frameborder="0" allowfullscreen></iframe>
										<iframe width="302" height="164" src="http://www.youtube.com/embed/f6_eVBz72t0" frameborder="0" allowfullscreen></iframe>
									</div>
									<p class="circularpro-book font-25 text-shadow-new">
										With twelve teams, <span class="sss-yellow">PUMA</span> is the dominant kit supplier at the World <br/>Cup in Germany: Italy would go on to win wearing the <span class="sss-yellow">Puma KIT</span>.
									</p>
								</div>
							</div>
							<div class="clear"></div>
							<div class="guide-button-container">
								<div class="guide-button">
									<p class="circularpro-book font-11"><a href="https://become.sssports.com/2016s-smartest-football-boot-technologies-and-trends/" target="_blank">MORE FOOTBALL<br> TRENDS HERE</a></p>
								</div>
							</div>
						</section>
						<div class="to-top-scroller">
							<a href="#/8"><img src="images/to-top.png"></a>
						</div>
					</section>
					<?php /**

					*/ ?>
					<section class="" id="tenth-slide" data-transition="zoom">

						<section data-transition="zoom" data-state="bg-whitetogray above-the-fold-state" class="above-the-fold color-white slide-1">
							<h2 class="font-55 text-shadow-lighter-new tradegothic sss-yellow">Year 2010’s and the Future</h2>
							<img class="separator separator-386" src="images/banner-separator.png">
						</section>
						<section data-transition="slide" class="slide-2" data-background-image="" data-background-position="100% 3%" data-background-size="100%" data-background-repeat="no-repeat" data-background="#fff" >
							<div class="inner-content ">
								<div class="container">
									<img src="images/better-technologies.png" alt="shoes" class="margin-bottom-5">
									<p class="circularpro-book font-18 color-gray-4a4b4b line-1-215">
										The modern game of football has become faster, 	with players more technically<br />
									  inclined than ever before. To support this new generation of athletes,<br />
										manufacturers are now investing substancial resources into<br />
									</p>
								</div>
								<div class="bg-container">
									<div class="container">
										<p class="circularbook-pro font-25 text-shadow-new line-0-965 third-child sss-yellow" data-effect="slideInLeft">better technologies and novel materials </p>
									</div>
								</div>
								<img src="images/novel-materials.png" alt="shoes">
							</div>
						</section>
						<section data-transition="slide" class="color-white slide-3" data-background-position="100% 50%" data-background-size="100% 279px" data-background-repeat="no-repeat" data-background="#868686" >
							<div class="inner-content bg-gradient-black-white ">
								<div class="container">
									<div class="col-container color-white">
										<div class="col-6">
											<p class="circularpro-book font-25 ">
												<span class="sss-yellow">PUMA</span> CONTINUES TO PUSH <br>
												THE DESIGN OF BOOTS WITH <br>
												<span class="sss-yellow">EVOPOWER</span> AND <span class="sss-yellow">EVOSPEED</span>.
											</p>
										</div>
										<div class="col-6 last-child">
											<img src="images/puma-evo.png" alt="adidas">
										</div>
									</div>
								</div>
							</div>
						</section>
						<section data-transition="slide" class="slide-4" data-background-position="100% 50%" data-background-size="100% 279px" data-background-repeat="no-repeat" data-background="#868686" >
							<div class="inner-content bg-gradient-white-black ">
								<div class="container">
									<div class="col-container color-gray-292a2a">
										<div class="col-6">
											<p class="circularpro-book font-25">
												IN 2015 THE <span class="sss-yellow">ADIDAS MESSI 10/10</span> <br/>
												WAS RELEASED IN CELEBRATION OF <br/>
												<span class="sss-yellow">LEO MESSI'S</span> ASTONISHING 2014-15 SEASON.
											</p>
											<p class="circularpro-book font-18 line-1-215">
												The boots represent some of the
												cutting edge <br> technology we see in
												today’s football shoes.
											</p>
										</div>
										<div class="col-6 last-child">
											<img src="images/adidas-messi.jpg" alt="adidas">
										</div>
									</div>
								</div>
							</div>
						</section>
						<section data-transition="slide" class="slide-5" data-state="bg-darkgraywhitelight" data-background-position="100% 50%" data-background-size="100% 279px" data-background-repeat="no-repeat" >
							<div class="inner-content bg-gradient-black-white ">
								<div class="container">
									<div class="col-container color-white">
										<div class="col-6">
											<p class="circularpro-book font-25 first-child line-1-215 text-center">
												<span class="sss-yellow">NIKE</span> INTRODUCED THEIR <br>
												MID-CUT BOOTS WITH NIKE FLY <br>
												KNIT UPPERS : THE <span class="sss-yellow">MAGISTA</span> <br>
												AND <span class="sss-yellow">MERCURIAL SUPERFLY</span>. <br>
											</p>
											<p class="circularpro-book font-18 line-1-215 last-child text-center">
												THE DESIGN RESPONDS TO NEW FASTER PACE <br>
												OF FOOTBALL, WITH THE MAGISTA CREATED <br>
												FOR PLAYMAKERS AND THE MERCURIAL SUPERFLY <br>
												CREATED TO HELP THE QUICKEST PLAYERS <br>
											</p>
										</div>
										<div class="col-6">
											<img src="images/magista-mercurial.jpg" alt="magista-mercurial">
										</div>
									</div>
								</div>
							</div>
						</section>
						<section data-transition="slide" data-state="" class="slide-6" data-background-image="" data-background-position="100% 50%" data-background-size="100% 330px" data-background-repeat="no-repeat" >
							<div class="inner-content">
								<div class="bg-container">
									<div class="container">
										<p class="circularpro-book font-25 color-gray">
											MANUFACTURERS ARE NO LONGER REQUIRED TO CHOOSE BETWEEN <br>
											<span class="sss-yellow">PROTECTION</span>, <span class="sss-yellow">PERFORMANCE</span>, OR <span class="sss-yellow">STYLE</span>. <br>
											– ALL THREE CAN BE COMBINED AND DELIVERED IN THE SAME DESIGN. <br>
											<span class="sss-yellow">AS LONG AS THERE IS FOOTBALL</span>, <br>
											THERE WILL ALWAYS BE A NEED FOR <br>
											<span class="sss-yellow">FOOTBALL BOOTS</span>.
										</p>

										<div class="guide-button-container">
											<div class="guide-button">
												<p class="circularpro-book font-11"><a href="http://en-ae.sssports.com/sports/football" target="_blank">click here for more <br>
football boots </a></p>
											</div>
										</div>
									</div>
								</div>
							</div>

						</section>
						<div class="to-top-scroller">
							<a href="#/9"><img src="images/to-top.png"></a>
						</div>
					</section>
				</div>
				<div class="bullet-lists-container" id="blc-0">
					<div class="helper">
						<ul class='bullet-lists intro-list'>
							<li id="slide-0-0" class='slider-bullets'><a href="#/"></a></li>
							<li id="slide-0-1" class='slider-bullets'><a href="#/0/1"></a></li>
							<li id="slide-0-2" class='slider-bullets'><a href="#/0/2"></a></li>
							<li id="slide-0-3" class='slider-bullets'><a href="#/0/3"></a></li>
							<li id="slide-0-4" class='slider-bullets'><a href="#/0/4"></a></li>
						</ul>
					</div>
				</div>

				<div class="bullet-lists-container" id="blc-1">
					<div class="helper">
						<ul class='bullet-lists intro-list'>
							<li id="slide-1-0" class='slider-bullets'><a href="#/1"></a></li>
							<li id="slide-1-1" class='slider-bullets'><a href="#/1/1"></a></li>
							<li id="slide-1-2" class='slider-bullets'><a href="#/1/2"></a></li>
						</ul>
					</div>
				</div>

				<div class="bullet-lists-container" id="blc-2">
					<div class="helper">
						<ul class='bullet-lists intro-list'>
							<li id="slide-2-0" class='slider-bullets'><a href="#/2"></a></li>
							<li id="slide-2-1" class='slider-bullets'><a href="#/2/1"></a></li>
							<li id="slide-2-2" class='slider-bullets'><a href="#/2/2"></a></li>
							<li id="slide-2-3" class='slider-bullets'><a href="#/2/3"></a></li>
						</ul>
					</div>
				</div>

				<div class="bullet-lists-container" id="blc-3">
					<div class="helper">
						<ul class='bullet-lists intro-list'>
							<li id="slide-3-0" class='slider-bullets'><a href="#/3"></a></li>
							<li id="slide-3-1" class='slider-bullets'><a href="#/3/1"></a></li>
							<li id="slide-3-2" class='slider-bullets'><a href="#/3/2"></a></li>
							<li id="slide-3-3" class='slider-bullets'><a href="#/3/3"></a></li>
							<li id="slide-3-4" class='slider-bullets'><a href="#/3/4"></a></li>
						</ul>
					</div>
				</div>

				<div class="bullet-lists-container" id="blc-4">
					<div class="helper">
						<ul class='bullet-lists intro-list'>
							<li id="slide-4-0" class='slider-bullets'><a href="#/4"></a></li>
							<li id="slide-4-1" class='slider-bullets'><a href="#/4/1"></a></li>
							<li id="slide-4-2" class='slider-bullets'><a href="#/4/2"></a></li>
							<li id="slide-4-3" class='slider-bullets'><a href="#/4/3"></a></li>
							<li id="slide-4-4" class='slider-bullets'><a href="#/4/4"></a></li>
						</ul>
					</div>
				</div>

				<div class="bullet-lists-container" id="blc-5">
					<div class="helper">
						<ul class='bullet-lists intro-list'>
							<li id="slide-5-0" class='slider-bullets'><a href="#/5"></a></li>
							<li id="slide-5-1" class='slider-bullets'><a href="#/5/1"></a></li>
							<li id="slide-5-2" class='slider-bullets'><a href="#/5/2"></a></li>
							<li id="slide-5-3" class='slider-bullets'><a href="#/5/3"></a></li>
							<li id="slide-5-4" class='slider-bullets'><a href="#/5/4"></a></li>
						</ul>
					</div>
				</div>

				<div class="bullet-lists-container" id="blc-6">
					<div class="helper">
						<ul class='bullet-lists intro-list'>
							<li id="slide-6-0" class='slider-bullets'><a href="#/6"></a></li>
							<li id="slide-6-1" class='slider-bullets'><a href="#/6/1"></a></li>
							<li id="slide-6-2" class='slider-bullets'><a href="#/6/2"></a></li>
							<li id="slide-6-3" class='slider-bullets'><a href="#/6/3"></a></li>
							<li id="slide-6-4" class='slider-bullets'><a href="#/6/4"></a></li>
						</ul>
					</div>
				</div>

				<div class="bullet-lists-container" id="blc-7">
					<div class="helper">
						<ul class='bullet-lists intro-list'>
							<li id="slide-7-0" class='slider-bullets'><a href="#/7"></a></li>
							<li id="slide-7-1" class='slider-bullets'><a href="#/7/1"></a></li>
							<li id="slide-7-2" class='slider-bullets'><a href="#/7/2"></a></li>
							<li id="slide-7-3" class='slider-bullets'><a href="#/7/3"></a></li>
							<li id="slide-7-4" class='slider-bullets'><a href="#/7/4"></a></li>
						</ul>
					</div>
				</div>

				<div class="bullet-lists-container" id="blc-8">
					<div class="helper">
						<ul class='bullet-lists intro-list'>
							<li id="slide-8-0" class='slider-bullets'><a href="#/8"></a></li>
							<li id="slide-8-1" class='slider-bullets'><a href="#/8/1"></a></li>
							<li id="slide-8-2" class='slider-bullets'><a href="#/8/2"></a></li>
							<li id="slide-8-3" class='slider-bullets'><a href="#/8/3"></a></li>
							<li id="slide-8-4" class='slider-bullets'><a href="#/8/4"></a></li>
						</ul>
					</div>
				</div>

				<div class="bullet-lists-container" id="blc-9">
					<div class="helper">
						<ul class='bullet-lists intro-list'>
							<li id="slide-9-0" class='slider-bullets'><a href="#/9"></a></li>
							<li id="slide-9-1" class='slider-bullets'><a href="#/9/1"></a></li>
							<li id="slide-9-2" class='slider-bullets'><a href="#/9/2"></a></li>
							<li id="slide-9-3" class='slider-bullets'><a href="#/9/3"></a></li>
							<li id="slide-9-4" class='slider-bullets'><a href="#/9/4"></a></li>
							<li id="slide-9-5" class='slider-bullets'><a href="#/9/5"></a></li>
						</ul>
					</div>
				</div>

			</div>
			<div class="timeline-container">
				<div class="container">
				    <div class='timeline-title'>&nbsp;</div>
				    <div class='timeline-title tt-1'><img src="images/years/1500.png" alt="1500"></div>
				    <div class='timeline-title tt-2'><img src="images/years/1800_1990.png" alt="1800_1990"></div>
				    <div class='timeline-title tt-3'><img src="images/years/1940_1950.png" alt="1940_1950"></div>
				    <div class='timeline-title tt-4'><img src="images/years/1960.png" alt="1960"></div>
				    <div class='timeline-title tt-5'><img src="images/years/1970.png" alt="1970"></div>
				    <div class='timeline-title tt-6'><img src="images/years/1980.png" alt="1980"></div>
				    <div class='timeline-title tt-7'><img src="images/years/1990.png" alt="1990"></div>
				    <div class='timeline-title tt-8'><img src="images/years/2000.png" alt="2000"></div>
				    <div class='timeline-title tt-9'>
							<img src="images/years/2010_future.png" alt="2010_future" id="tt9default">
							<a href="#/" id="tt9tostart"><img src="images/years/back-to-start.png" alt="Back To Start"></a>
						</div>
			    </div>
			</div>
		</div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <!-- <script src="lib/js/head.min.js"></script> -->
    <script src="js/reveal.js"></script>
    <script>

    </script>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script src="js/jquery.fittext.js"></script>
	<script src="js/jquery.lettering.js"></script>
	<!-- Script for appear.js -->
	<script src="js/jquery.appear.js"></script>
	<!-- Script for appear.js -->
	<script src="http://yandex.st/highlightjs/7.3/highlight.min.js"></script>
	<script src="js/jquery.textillate.js"></script>
	<script>hljs.initHighlightingOnLoad();</script>
	<script type="text/javascript" src="js/caliber.js"></script>
	<script>
	window.twttr=(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],t=window.twttr||{};if(d.getElementById(id))return t;js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);t._e=[];t.ready=function(f){t._e.push(f);};return t;}(document,"script","twitter-wjs"));
	</script>
	<script type="text/javascript" src="js/angular.min.js"></script>
	<script type="text/javascript" src="js/angular.router.min.js"></script>
	<script type="text/javascript" src="js/angular-caliber.js"></script>
	</body>
</html>
