<!--header!-->

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Entrepreneurship Cell | KIIT University</title>
	<meta name="keywords" content="@yield('keywords')" />
	<meta name="description" content="@yield('description')">
	<meta name="author" content="ecell.org.in">
	<link rel="shortcut icon" href="KIITEcell/assets/icons/favicon.ico" type="image/x-icon" />

	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="dns-prefetch" href="//fonts.googleapis.com">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

	<link rel="stylesheet" href="KIITEcell/libs/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="KIITEcell/libs/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="KIITEcell/libs/animate/animate.min.css')}}">
	<link rel="stylesheet" href="KIITEcell/libs/simple-line-icons/css/simple-line-icons.min.css">
	<link rel="stylesheet" href="KIITEcell/libs/owl.carousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="KIITEcell/libs/owl.carousel/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="KIITEcell/libs/magnific-popup/magnific-popup.min.css">

	<link rel="stylesheet" href="KIITEcell/css/theme.css">
	<link rel="stylesheet" href="KIITEcell/css/theme-elements.css">
	<link rel="stylesheet" href="KIITEcell/css/theme-blog.css">
	<link rel="stylesheet" href="KIITEcell/libs/circle-flip-slideshow/css/component.css">

	<link rel="stylesheet" href="KIITEcell/libs/rs-plugin/css/settings.css">
	<link rel="stylesheet" href="KIITEcell/libs/rs-plugin/css/layers.css">
	<link rel="stylesheet" href="KIITEcell/libs/rs-plugin/css/navigation.css">

	<!-- Skin CSS -->
	<link rel="stylesheet" href="KIITEcell/css/skins/default.css">

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="KIITEcell/css/custom.css">
	

	<!-- Head Libs -->

	<script src="KIITEcell/js/jquery-3.3.0.min.js"></script>
	<script src="KIITEcell/libs/modernizr/modernizr.min.js"></script>
	<script type="text/javascript"> //<![CDATA[ 
	var tlJsHost = ((window.location.protocol == "https:") ? "https://secure.comodo.com/" : "http://www.trustlogo.com/");
	document.write(unescape("%3Cscript src='" + tlJsHost + "trustlogo/javascript/trustlogo.js' type='text/javascript'%3E%3C/script%3E"));
//]]>
</script>

</head>
<body>

	<div class="body">
		<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 57, 'stickySetTop': '-57px', 'stickyChangeLogo': true, 'stickyChangeLogo': true}" style="min-height: 125px; ">
			<div class="header-body">
				<div class="header-container container">
					<div class="header-row">
						<div class="header-column">
							<div class="header-logo">
								<a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>">
									<img alt="KIIT Ecell" class="logo-sticky" width="200" height="100" data-sticky-width="100" data-sticky-height="45" data-sticky-top="20" src="KIITEcell/assets/logosmall.png">
									<img alt="KIIT Ecell" class="logo-normal" width="200" height="100" src="KIITEcell/assets/images/logotest.png">
								</a>
							</div>
						</div>
						<div class="header-column">
							<div class="header-row">
								<div class="header-search hidden-xs">
									<form id="searchForm" action="page-search-results.html" method="get">
										<div class="input-group">
											<input type="text" class="form-control" name="q" id="q" placeholder="Search..." required>
											<span class="input-group-btn">
												<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
											</span>
										</div>
									</form>
								</div>
								<nav class="header-nav-top">
									<ul class="nav nav-pills">
										<li>
											<a href="mailto:pcr@ecell.org.in"> <span class="ws-nowrap"><i class="fa fa-envelope"></i> pcr@ecell.org.in</span></a>
										</li>
										<li>
											<span class="ws-nowrap"><i class="fa fa-phone"></i> +91-9583785500</span>
										</li>
									</ul>
								</nav>
							</div>
							<div class="header-row">
								<div class="header-nav header-nav-top-line">
									<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main" >
										<i class="fa fa-bars"></i>
									</button>
									<ul class="header-social-icons social-icons hidden-xs">
										<li class="social-icons-facebook"><a href="https://www.facebook.com/kiitecell" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
										<li class="social-icons-twitter"><a href="https://twitter.com/kiit_ecell" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
										<li class="social-icons-linkedin"><a href="https://www.linkedin.com/company/13346906/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
										<li class="social-icons-instagram"><a href="https://www.instagram.com/ecell_kiit/" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>
									</ul>
									<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
										<nav>
											<ul class="nav nav-pills" id="mainNav">
												<li class="active">
													<a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>">Home</a>
												</li>
												<li class="notice">
													<a href="noticeboard.php">NoticeBoard</a>
												</li>
												<li class="dropdown">
													<a data-hash class="dropdown-toggle" href="#home">
														Register
													</a>
													<ul class="dropdown-menu" id="drop">
														<li><a href="register_student.php">As an Individual</a></li>
														<li><a href="register_startup.php">As a Startup</a></li>
													</ul>
												</li>	
												<li class="dropdown">
													<a href="startup.php">Startups</a>
												</li>
												<li class="dropdown">
													<a data-hash class="dropdown-toggle" href="#home">
														About Us
													</a>
													<ul class="dropdown-menu">
														<li><a href="about-us.php#whoweare">Who We Are?</a></li>
														<li><a href="about-us.php#mentors">Our Mentors</a></li>
														<li><a href="team.php#bod">The Ecell Team</a></li>
														<li><a href="gallery.php">Gallery</a></li>
														<li><a href="partners.php">Partners</a></li>
													</ul>
												</li>
												<li class="dropdown">
													<a data-hash class="dropdown-toggle" href="initiatives">
														Initiatives
													</a>
													<ul class="dropdown-menu">
														<li><a href="initiatives.php#ml">Makers Lab</a></li>
														<li><a href="initiatives.php#eac">EAC</a></li>
														<li><a href="initiatives.php#internship_camp">Internship Camp</a></li>
														<li><a href="initiatives.php#cl">Community Learning</a></li>
														<li><a href="initiatives.php#wow">Women on Web (WoW)</a></li>
														<li><a href="initiatives.php#campuspreneur">Campuspreneur</a></li>														
														<li><a href="tbi-initiatives.php">TBI Initiatives</a></li>
													</ul>
												</li>																											
												<li>
													<a href="blogs.php">Blog</a>
												</li>
												<li class="{{ Request::is('contact') ? 'active' : '' }}">
													<a href="contact.php">Contact Us</a>
												</li>
											</ul>
										</nav>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>


<!--/header!-->






<style type="text/css">
    .box-content{
        transition: all 0.2s linear;
    }
    .box-content:hover{
       -webkit-box-shadow: 10px 10px 13px 3px rgba(150,144,150,1);
-moz-box-shadow: 10px 10px 13px 3px rgba(150,144,150,1);
box-shadow: 10px 10px 13px 3px rgba(150,144,150,1);
    }

</style>
<div role="main" class="main">
		 
		     <!-- <section>
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
							<figure>
							    <img src="KIITEcell/assets/startup-yatra/startupyatra.jpg" alt="" style="height:350px;min-width:100%;margin:0px auto;border:3px solid black" class="img-responsive"><br>
							    <figcaption>
							       <center>
							       <h2 class="heading-secondary">
							       <strong>Startup India Yatra</strong>&nbsp;&nbsp;&nbsp;&nbsp;<span class="alternative-font">Odisha Edition</span>
							       <br>
							      
							       </h2>
							        <a href="startupyatra" class="btn btn-lg btn-secondary">Know More</a>
							       </center>
							    </figcaption>
							</figure>
							 
						
							</div>
							
						</div>
					</div>
				</section> -->

				<div class="featured-boxes featured-boxes-style-8">
						<div class="row">
						<div class="col-md-4"></div>
							<div class="col-md-4">
								<div class="featured-box featured-box-primary featured-box-text-left">
									<div class="box-content">
										<div class="row">
											<div class="col-md-9">
												<h2>Internship Camp 2018</h2>
<!--												<h6><strong>Open to all</strong></h6>-->
											</div>
											<div class="col-md-3">
												<div class="align-right">
													<img src="KIITEcell/logo/logo.png" style="width: 50px;height: 24px;">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<p>The Internship Camp, which was held from 23rd to 25th of March 2018, is an initiative of KIIT Entrepreneurship Cell which aims to provide internship opportunities to undergraduate and postgraduate students from the field of technology, biotechnology, management, designing and law from Bhubaneswar and our home university. KIIT Entrepreneurship Cell takes pride to provide this platform for the second time in a row. Keeping in mind the last year’s success we have targeted to bring in 60 plus corporate and starts-ups from different regions and create 500 plus internship opportunities for the students.</p>
												 <h6><strong>Date: 23rd to 25th March' 18</strong></h6>
												<!--<a href="https://interncamp.ecell.org.in" class="btn btn-lg btn-primary mr-xs mb-lg btn-block" type="button" target="_blank">Register</a>!-->
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4"></div>
<!--
							<div class="col-md-4">
								<div class="featured-box featured-box-secondary featured-box-text-left">
									<div class="box-content">
										<div class="row">
											<div class="col-md-12">
												<img src="https://esummit.org.in/logo_small" style="width:35px;height: 30px">
												 <h2>KIIT ESummit'18</h2>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<p>The main goal that KIIT Entrepreneurship Cell aims to achieve with KIIT Entrepreneurship Summit 2018 is to bring people having different interests from all over university and all over India, on a common platform, create an open dialogue, engage them and in this process, instill the spirit of Entrepreneurship which will ultimately add greater workforce in KIIT Startup Community.

                                                 The main event will comprise of four tracks- Technology, Innovation, Marketing and Startup Planet. 
                                                </p>
												<a href="https://esummit.org.in" class="btn btn-lg btn-secondary mr-xs mb-lg" type="button" target="_blank">Register</a>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-4">
								<div class="featured-box featured-box-primary featured-box-text-left">
									<div class="box-content">
										<div class="row">
											<div class="col-md-9">
												<h2>Makovation</h2>
												<h6><strong>Open to all Branches with no coding required </strong></h6>
											</div>
											<div class="col-md-3">
												<div class="align-right">
													<img src="KIITEcell/assets/images/makovation.png" style=" width:60px; height: auto;">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<p>Makovation is a unique platform where people from across different branches and domain will come together, collaborate, have productive exchange and build some innovative products. Makovation will be a theme based 24-hours rigorous product building session being coordinated by mentors and team members of E-cell.</p>
                                                <h6><strong>Prizes worth 15K</strong></h6>
                                                <h6><strong>Date: 24th Feb' 18</strong></h6>
                                                 
												<a href="https://ecell.org.in/makovation" class="btn btn-lg btn-primary mr-xs mb-lg" type="button">Register</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
			
					</div>
-->
                    </div>
    </div>

							    
							
		 <br>
		
			<div class="slider-container rev_slider_wrapper">
				<div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider data-plugin-options='{"gridwidth": 1170, "gridheight": 500}'>
					<ul>
						<li data-transition="fade">
							<img src="KIITEcell/assets/images/slides/slide-bg.jpg"
							alt=""
							data-bgposition="center center"
							data-bgfit="cover"
							data-bgrepeat="no-repeat"
							class="rev-slidebg">
							<div class="tp-caption"
							data-x="177"
							data-y="180"
							data-start="1000"
							data-transform_in="x:[-300%];opacity:0;s:500;"><img src="KIITEcell/assets/images/slides/slide-title-border.png" alt=""></div>
							<div class="tp-caption top-label"
							data-x="250"
							data-y="180"
							data-start="500"
							data-transform_in="y:[-300%];opacity:0;s:500;">For those who are</div>
							<div class="tp-caption"
							data-x="480"
							data-y="180"
							data-start="1000"
							data-transform_in="x:[300%];opacity:0;s:500;"><img src="KIITEcell/assets/images/slides/slide-title-border.png" alt=""></div>
							<div class="tp-caption main-label"
							data-x="135"
							data-y="210"
							data-start="1500"
							data-whitespace="nowrap"
							data-transform_in="y:[100%];s:500;"
							data-transform_out="opacity:0;s:500;"
							data-mask_in="x:0px;y:0px;">Risk takers</div>
							<div class="tp-caption bottom-label"
							data-x="185"
							data-y="280"
							data-start="2000"
							data-transform_in="y:[100%];opacity:0;s:500;">We are there to help you.</div>
							<div class="tp-caption"
							data-x="910"
							data-y="248"
							data-start="2500"
							data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1300;"><img src="KIITEcell/assets/images/slides/slide-concept-2-1.png" alt=""></div>
							<div class="tp-caption"
							data-x="960"
							data-y="200"
							data-start="3500"
							data-transform_in="y:[300%];opacity:0;s:300;"><img src="KIITEcell/assets/images/slides/slide-concept-2-2.png" alt=""></div>
							<div class="tp-caption"
							data-x="930"
							data-y="170"
							data-start="3650"
							data-transform_in="y:[300%];opacity:0;s:300;"><img src="KIITEcell/assets/images/slides/slide-concept-2-3.png" alt=""></div>
							<div class="tp-caption"
							data-x="880"
							data-y="130"
							data-start="3750"
							data-transform_in="y:[300%];opacity:0;s:300;"><img src="KIITEcell/assets/images/slides/slide-concept-2-4.png" alt=""></div>
							<div class="tp-caption"
							data-x="610"
							data-y="80"
							data-start="3950"
							data-transform_in="y:[300%];opacity:0;s:300;"><img src="KIITEcell/assets/images/slides/slide-concept-2-5.png" alt=""></div>
							<div class="tp-caption blackboard-text"
							data-x="640"
							data-y="300"
							data-start="3950"
							style="font-size: 37px;"
							data-transform_in="y:[300%];opacity:0;s:300;">Think</div>
							<div class="tp-caption blackboard-text"
							data-x="665"
							data-y="350"
							data-start="4150"
							style="font-size: 47px;"
							data-transform_in="y:[300%];opacity:0;s:300;">Outside</div>
							<div class="tp-caption blackboard-text"
							data-x="690"
							data-y="400"
							data-start="4350"
							style="font-size: 32px;"
							data-transform_in="y:[300%];opacity:0;s:300;">The box :)</div>
						</li>

						<li data-transition="fade">
							<img src="KIITEcell/assets/images/slides/slide-bg.jpg"
							alt=""
							data-bgposition="center center"
							data-bgfit="cover"
							data-bgrepeat="no-repeat"
							class="rev-slidebg">
							<div class="tp-caption"
							data-x="177"
							data-y="180"
							data-start="1000"
							data-transform_in="x:[-300%];opacity:0;s:500;"><img src="KIITEcell/assets/images/slides/slide-title-border.png" alt=""></div>
							<div class="tp-caption top-label"
							data-x="250"
							data-y="180"
							data-start="500"
							data-transform_in="y:[-300%];opacity:0;s:500;">For those who are</div>
							<div class="tp-caption"
							data-x="480"
							data-y="180"
							data-start="1000"
							data-transform_in="x:[300%];opacity:0;s:500;"><img src="KIITEcell/assets/images/slides/slide-title-border.png" alt=""></div>
							<div class="tp-caption main-label"
							data-x="135"
							data-y="210"
							data-start="1500"
							data-whitespace="nowrap"
							data-transform_in="y:[100%];s:500;"
							data-transform_out="opacity:0;s:500;"
							data-mask_in="x:0px;y:0px;">Risk takers</div>
							<div class="tp-caption bottom-label"
							data-x="185"
							data-y="280"
							data-start="2000"
							data-transform_in="y:[100%];opacity:0;s:500;">We are there to help you.</div>
							<div class="tp-caption"
							data-x="910"
							data-y="248"
							data-start="2500"
							data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1300;"><img src="KIITEcell/assets/images/slides/slide-concept-2-1.png" alt=""></div>
							<div class="tp-caption"
							data-x="960"
							data-y="200"
							data-start="3500"
							data-transform_in="y:[300%];opacity:0;s:300;"><img src="KIITEcell/assets/images/slides/slide-concept-2-2.png" alt=""></div>
							<div class="tp-caption"
							data-x="930"
							data-y="170"
							data-start="3650"
							data-transform_in="y:[300%];opacity:0;s:300;"><img src="KIITEcell/assets/images/slides/slide-concept-2-3.png" alt=""></div>
							<div class="tp-caption"
							data-x="880"
							data-y="130"
							data-start="3750"
							data-transform_in="y:[300%];opacity:0;s:300;"><img src="KIITEcell/assets/images/slides/slide-concept-2-4.png" alt=""></div>
							<div class="tp-caption"
							data-x="610"
							data-y="80"
							data-start="3950"
							data-transform_in="y:[300%];opacity:0;s:300;"><img src="KIITEcell/assets/images/slides/slide-concept-2-5.png" alt=""></div>
							<div class="tp-caption blackboard-text"
							data-x="640"
							data-y="300"
							data-start="3950"
							style="font-size: 37px;"
							data-transform_in="y:[300%];opacity:0;s:300;">Think</div>
							<div class="tp-caption blackboard-text"
							data-x="665"
							data-y="350"
							data-start="4150"
							style="font-size: 47px;"
							data-transform_in="y:[300%];opacity:0;s:300;">Outside</div>
							<div class="tp-caption blackboard-text"
							data-x="690"
							data-y="400"
							data-start="4350"
							style="font-size: 32px;"
							data-transform_in="y:[300%];opacity:0;s:300;">The box :)</div>
						</li>
					</ul>
				</div>
			</div>



			<div class="home-intro" id="home-intro">
				<div class="container">

					<div class="row">
						<div class="col-md-8">
							<p>
								The fastest way to grow your startup with the most experienced mentors in the <em>Startup</em> community.								
							</p>
						</div>
						<div class="col-md-4">
							<div class="get-started">
								<a href="register_startup.php" class="btn btn-lg btn-primary">Get Started Now!</a>
								<div class="learn-more">or <a href="about-us.php">learn more.</a></div>
							</div>
						</div>
					</div>					
				</div>
			</div>


			<div class="row center">
				<div class="col-md-12">
					<h1 class="mb-sm word-rotator-title">
						<strong>
							<span class="word-rotate" data-plugin-options='{"delay": 2000, "animDelay": 300}'>
								<span class="word-rotate-items">
									<span>Imagine</span>
									<span>Innovate</span>
									<span>Implement</span>
								</strong>

							</h1>
							<p class="lead">
								The Entrepreneurship Cell, KIIT firmly believes that emerging economies like India need the drive and innovation of young entrepreneurs.
							</p>
						</div>
					</div>

				</div>


				<section class="section section-default mt-none mb-xl">

					<div class="home-concept appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">
						<svg class="home-concept-bg" x="0px" y="0px" width="345px" height="93px" viewBox="0 0 345 83" enable-background="new 0 0 345 93" xml:space="preserve">
							<image overflow="visible" width="26" height="39" xlink:href="KIITEcell/assets/images/home-concept-pin.png" transform="matrix(0.169 0.1308 -0.1308 0.169 339.8496 0.6826)" class="final-pin appear-animation" data-appear-animation="animated-pin" data-appear-animation-delay="3650">
							</image>
							<path class="line appear-animation" fill="none" stroke="#6f6f6f" stroke-width="0.25" stroke-miterlimit="0" stroke-dasharray="0" data-appear-animation="animated-line" data-appear-animation-duration="4s" d="M7.086,87.455c8.133-8.646,54.247-51.634,155.173-36.766C268.762,66.38,327.34,17.642,337.992,10.241"/>
							<path fill="none" stroke="#FFF" stroke-width="0.50" stroke-miterlimit="10" stroke-dasharray="1,2.5" d="M7.086,87.455c8.133-8.646,54.247-51.634,155.173-36.766C268.762,66.38,327.34,17.642,337.992,10.241"/>
							<image overflow="visible" width="26" height="39" xlink:href="KIITEcell/assets/images/home-concept-pin.png" transform="matrix(0.2137 0 0 0.2137 1 81.5898)" class="initial-pin appear-animation" data-appear-animation="animated-pin">
							</image>
						</svg>
						<div class="container">

							<div class="row center">
								<span class="sun"></span>
								<span class="cloud"></span>
								<div class="col-md-2 col-md-offset-1">
									<div class="process-image">
										<div class="box-image">
											<svg class="small-circle" x="0px" y="0px" width="39px" height="39px" viewBox="0 0 39 39" enable-background="new 0 0 39 39" xml:space="preserve">
												<circle class="line appear-animation" fill="#FFF" stroke="#6f6f6f" stroke-width="0.25" stroke-miterlimit="0" stroke-dasharray="0" data-appear-animation="animated-line" data-appear-animation-delay="800" cx="19.5" cy="19.5" r="19.063"/>
												<circle fill="none" stroke="#FFF" stroke-width="0.50" stroke-miterlimit="10" stroke-dasharray="1,2.5" cx="19.5" cy="19.5" r="19.063"/>
											</svg>
											<img src="KIITEcell/assets/images/imagine-concept.png" alt="" class="appear-animation" data-appear-animation="zoomIn" data-appear-animation-duration="300" data-appear-animation-delay="1400" />
										</div>
										<strong class="appear-animation" data-appear-animation="fadeInDown" data-appear-animation-delay="1150" data-plugin-options="{'accY': 200}">Imagine</strong>
									</div>
								</div>
								<div class="col-md-2">
									<div class="process-image">
										<div class="box-image">
											<svg class="small-circle" x="0px" y="0px" width="39px" height="39px" viewBox="0 0 39 39" enable-background="new 0 0 39 39" xml:space="preserve">
												<circle class="line appear-animation" fill="#FFF" stroke="#6f6f6f" stroke-width="0.25" stroke-miterlimit="0" stroke-dasharray="0" data-appear-animation="animated-line" data-appear-animation-delay="1200" cx="19.5" cy="19.5" r="19.063"/>
												<circle fill="none" stroke="#FFF" stroke-width="0.50" stroke-miterlimit="10" stroke-dasharray="1,2.5" cx="19.5" cy="19.5" r="19.063"/>
											</svg>
											<img src="KIITEcell/assets/images/innovate-concept.png" alt="" class="appear-animation" data-appear-animation="zoomIn" data-appear-animation-duration="300" data-appear-animation-delay="1900" />
										</div>
										<strong class="appear-animation" data-appear-animation="fadeInDown" data-appear-animation-delay="2150" data-plugin-options="{'accY': 200}">Innovate</strong>
									</div>
								</div>
								<div class="col-md-2">
									<div class="process-image">
										<div class="box-image">
											<svg class="small-circle" x="0px" y="0px" width="39px" height="39px" viewBox="0 0 39 39" enable-background="new 0 0 39 39" xml:space="preserve">
												<circle class="line appear-animation" fill="#FFF" stroke="#6f6f6f" stroke-width="0.25" stroke-miterlimit="0" stroke-dasharray="0" data-appear-animation="animated-line" data-appear-animation-delay="1700" cx="19.5" cy="19.5" r="19.063"/>
												<circle fill="none" stroke="#FFF" stroke-width="0.50" stroke-miterlimit="10" stroke-dasharray="1,2.5" cx="19.5" cy="19.5" r="19.063"/>
											</svg>
											<img src="KIITEcell/assets/images/implement-concept.png" alt="" class="appear-animation" data-appear-animation="zoomIn" data-appear-animation-duration="300" data-appear-animation-delay="2400" />
										</div>
										<strong class="appear-animation" data-appear-animation="fadeInDown" data-appear-animation-delay="2650" data-plugin-options="{'accY': 200}">Implement</strong>

									</div>
								</div>
								<div class="col-md-4 col-md-offset-1">
									<div class="project-image">
										<div class="box-image">
											<svg class="big-circle" x="0px" y="0px" width="85px" height="85px" viewBox="0 0 85 85" enable-background="new 0 0 85 85" xml:space="preserve">
												<circle class="line appear-animation" fill="#FFF" stroke="#6f6f6f" stroke-width="0.25" stroke-miterlimit="0" stroke-dasharray="0" data-appear-animation="animated-line" data-appear-animation-delay="2250" cx="42.5" cy="42.5" r="42.063"/>
												<circle fill="none" stroke="#FFF" stroke-width="0.50" stroke-miterlimit="10" stroke-dasharray="1,2.5" cx="42.5" cy="42.5" r="42.063"/>
											</svg>
											<div id="fcSlideshow" class="fc-slideshow appear-animation" data-appear-animation="zoomIn" data-appear-animation-duration="300" data-appear-animation-delay="2900">
												<ul class="fc-slides">
													<li><img class="img-responsive" src="KIITEcell/assets/images/logo.png" alt="" /></li>
													<li><img class="img-responsive" src="KIITEcell/assets/images/logo.png" alt="" /></li>
													<li><img class="img-responsive" src="KIITEcell/assets/images/logo.png" alt="" /></li>
												</ul>
											</div>
										</div>
										<strong class="our-work appear-animation" data-appear-animation="fadeInDown" data-appear-animation-delay="3150" data-plugin-options="{'accY': 300}">Ecell</strong>
									</div>
								</div>
							</div>

						</div>
					</div>

				</section>				
				
				<hr class="tall">

				<div class="container">
					<div class="row">

						<div class="col-md-8">
							<h2>Our <strong>Organization</strong></h2>
							<div class="row">
								<div class="col-sm-6">
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fa fa-group"></i>
										</div>
										
										<div class="feature-box-info">
											<a href="team#bod">
											<h4 class="heading-primary mb-none">Director's Wing</h4>
											</a>
											<p class="tall">&nbsp;</p>
										</div>									
									</div>
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fa fa-file"></i>
										</div>
										<div class="feature-box-info">
											<a href="team#tech">
											<h4 class="heading-primary mb-none">Tech Labs</h4>
										</a>
											<p class="tall">&nbsp;</p>
										</div>
									</div>
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fa fa-google-plus"></i>
										</div>
										<div class="feature-box-info">
											<a href="team#rnd">
											<h4 class="heading-primary mb-none">Research and Development </h4>
										</a>
											<p class="tall">&nbsp;</p>
										</div>
									</div>

								</div>
								<div class="col-sm-6">
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fa fa-adjust"></i>
										</div>
										<div class="feature-box-info">
											<a href="team#pcr">
											<h4 class="heading-primary mb-none">Corporate Relations</h4>
										</a>
											<p class="tall">&nbsp;</p>
										</div>
									</div>
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fa fa-film"></i>
										</div>
										<div class="feature-box-info">
											<a href="team#pcr">
											<h4 class="heading-primary mb-none">Public Relations</h4>
										</a>
											<p class="tall">&nbsp;</p>
										</div>
									</div>
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fa fa-user"></i>
										</div>
										<div class="feature-box-info">
											<a href="team#content">
											<h4 class="heading-primary mb-none">Content</h4>
										</a>
											<p class="tall">&nbsp;</p>
										</div>
									</div>

								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="featured-box featured-box-primary">
								<div class="box-content">
									<table>  <tr>
										<th align="left" class="tg-yw4l">Dr. Achyuta Samanta</th>
										<th class="tg-yw4l" rowspan="3"><img class="img-responsive" src="KIITEcell/assets/images/founder.png"></th>
									</tr>  
									<td align="left" class="tg-yw4l">Founder, KIIT & KISS</td>
								</tr> 
								<tr>
									<td align="left" class="tg-yw4l">
										<a href="http://archive.kiit.ac.in/aboutus/message.html">Message</a> &nbsp; &bull; &nbsp; <a href="http://achyutasamanta.com/">Webpages &nbsp; &nbsp; &nbsp;</a>
									</td>
								</tr>   
								<tr>
								</table>
							</div>
						</div>

						<div class="featured-box featured-box-quaternary featured-box-effect-3">
							<div class="box-content">
								<table class="tg">
									<tr>
										<th class="tg-031e" rowspan="2"><img class="img-responsive" src="KIITEcell/assets/images/artofgiving.jpg"></th>
										<th class="tg-031e" colspan="2">&nbsp; &nbsp; &nbsp;Know the wonders of</th>
									</tr>
									<tr>
										<td class="tg-031e" colspan="2">“Art of Giving”</td>
									</tr>
								</table>
							</div>
						</div>

					</div>


				</div></div>

				<hr class="tall">

				<div class="container">
					<div class="row center">
						<h2 class="mb-sm word-rotator-title">
							<strong>
								<span class="word-rotate" data-plugin-options='{"delay": 3500, "animDelay": 400}'>
									<span class="col-md-12">
										<span>Do not be embarrassed by your failures, learn from them and start again.</span>
										<span>Innovation distinguishes between a leader and a follower.</span>
									</span>
								</span>
							</strong>
						</h2>
					</div>
				</div>

				<section class="section section-custom-map">
					<section class="section section-default section-footer">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<div class="recent-posts mb-xl">
										<h2>Latest <strong>Blog</strong> Posts</h2>
										<div class="row">
											<div class="owl-carousel owl-theme mb-none" data-plugin-options="{'items': 1}">

												<div>
													<div class="col-md-6">
														<article>
															<div class="date">
																<span class="day">25</span>
																<span class="month">Sep</span>
															</div>
															<h4 class="heading-primary"><a href="http://blog.ecell.org.in/2017/09/cryptocurrency-blockchain-new-kids-block/">Cryptocurrency And Blockchain</a></h4>
															<p>Cryptocurrency is a virtual currency acting as a means to exchange or transact using cryptography so as to make it secure and to control the creation, the use of the creation and the limit up-till which the currency could be made available ... <a href="http://blog.ecell.org.in/2017/09/cryptocurrency-blockchain-new-kids-block/" class="read-more">read more <i class="fa fa-angle-right"></i></a></p>
														</article>
													</div>
													<div class="col-md-6">
														<article>
															<div class="date">
																<span class="day">25</span>
																<span class="month">Sep</span>
															</div>
															<h4 class="heading-primary"><a href="http://blog.ecell.org.in/2017/09/top-ten-women-entrepreneurs-world/">Top Ten Women Entrepreneurs Of The World </a></h4>
															<p>Entrepreneurship is a lot about taking risks and identifying opportunities. Much like in every other aspect of life, women, tend to be good at perceiving new opportunities and making the most out of them... <a href="http://blog.ecell.org.in/2017/09/top-ten-women-entrepreneurs-world/" class="read-more">read more <i class="fa fa-angle-right"></i></a></p>
														</article>
													</div>
												</div>

												<div>
													<div class="col-md-6">
														<article>
															<div class="date">
																<span class="day">22</span>
																<span class="month">Sep</span>
															</div>
															<h4 class="heading-primary"><a href="http://blog.ecell.org.in/2017/09/makes-entrepreneurs-think-differently/">What Makes Entrepreneurs Think Differently?</a></h4>
															<p>An entrepreneur is commonly seen as a business leader and innovator of new ideas and business processes. Actually, entrepreneurs are a unique breed of people. While some people sit and fantasize about the glamor of being their own boss and... <a href="http://blog.ecell.org.in/2017/09/makes-entrepreneurs-think-differently/" class="read-more">read more <i class="fa fa-angle-right"></i></a></p>
														</article>
													</div>
													<div class="col-md-6">
														<article>
															<div class="date">
																<span class="day">22</span>
																<span class="month">Sep</span>
															</div>
															<h4 class="heading-primary"><a href="http://blog.ecell.org.in/2017/09/why-you-can-take-leaf-two-elon-musks-entrepreneurial-journey/">Why YOU Should Take A Leaf Or Two Out Of Elon Musk’s Entrepreneurial Journey?</a></h4>
															<p>We have all heard of Elon Musk, right? He is the brain behind few of the most outlandish business ideas of our generation... <a href="http://blog.ecell.org.in/2017/09/why-you-can-take-leaf-two-elon-musks-entrepreneurial-journey/" class="read-more">read more <i class="fa fa-angle-right"></i></a></p>
														</article>
													</div>
												</div>

												<div>
													<div class="col-md-6">
														<article>
															<div class="date">
																<span class="day">11</span>
																<span class="month">Sep</span>
															</div>
															<h4 class="heading-primary"><a href="http://blog.ecell.org.in/2017/09/5-reasons-startup-fails/">5 Reasons Why Startups Fail</a></h4>
															<p>A new buzz among the youths is the word ‘startup’. Every youth desires to be a boss, not be under anyone. With hope, determination and an idea, people move a step closer becoming an entrepreneur.Even with so many budding startups in our nation,... <a href="http://blog.ecell.org.in/2017/09/5-reasons-startup-fails/" class="read-more">read more <i class="fa fa-angle-right"></i></a></p>
														</article>
													</div>
													<div class="col-md-6">
														<article>
															<div class="date">
																<span class="day">09</span>
																<span class="month">Aug</span>
															</div>
															<h4 class="heading-primary"><a href="http://blog.ecell.org.in/2017/08/becoming-entrepreneurs/">Getting Rid Of The Fears And Becoming An Entrepreneur</a></h4>
															<p>The definition of entrepreneur is all about a person who organises and operates a business taking on greater than normal financial risks. Fear can be helpful, even necessary. Fear is the mind’s way of telling us that danger-or, at least, a bumpy road lurks ahead...   <a href="http://blog.ecell.org.in/2017/08/becoming-entrepreneurs/" class="read-more">read more <i class="fa fa-angle-right"></i></a></p>
														</article>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-md-6">
									<h2>What Our<strong>Alumni</strong> Say</h2>
									<div class="row">
										<div class="row">
											<div class="owl-carousel owl-theme mb-none" data-plugin-options='{"items": 1}'>
												<div>
													<div class="col-md-12">
														<div class="testimonial testimonial-primary">
															<blockquote>
																<p>E-cell is a platform which explores the corporate behavior within you. It doesn't only make you imagine innovation but also makes you a good crisis manager and a good show maker.Being the alumnus I proudly look forward to cater all sort of help and assistance at any point to this very entrepreneurship cell</p>
															</blockquote>
															<div class="testimonial-arrow-down"></div>
															<div class="testimonial-author">
																<div class="testimonial-author-thumbnail img-thumbnail">
																	<img src="https://graph.facebook.com/100000493504226/picture?width=50&height=50" alt="tutu">
																</div>
																<p><strong>Ashesh Das</strong><span>CEO,2015</span></p>
															</div>
														</div>
													</div>
												</div>
												<div>
													<div class="col-md-12">
														<div class="testimonial testimonial-primary">
															<blockquote>
																<p>We at KIIT E-Cell have developed and deployed the best of the methods to inculcate the habit of community learning which enhances self development. E-Cell is an institution where you get complete resources environment and motivation to have a test run of your startup or either being a part of one. We believe in inculcating skills for life. </p>
															</blockquote>
															<div class="testimonial-arrow-down"></div>
															<div class="testimonial-author">
																<div class="testimonial-author-thumbnail img-thumbnail">
																	<img src="https://graph.facebook.com/1014040806/picture?width=50&height=50" alt="tutu">
																</div>
																<p><strong>Aayush Tuteja</strong><span>CEO,2016</span></p>
															</div>
														</div>
													</div>
												</div>
												<div>
													<div class="col-md-12">
														<div class="testimonial testimonial-primary">
															<blockquote>
																<p>The concept of community learning in Entrepreneurship Cell, KIIT is behind its people's success. Not only students but startups and mentors from diverse dominion have been a part of the organization working towards that one emotion of problem-solving and hence making the entrepreneurial ecosystem better. At an individual level, this organization has provided me with a broader aspect to problem-solving and taught me how to look at a problem with all possible perspectives. I'm glad to be a part of it.</p>
															</blockquote>
															<div class="testimonial-arrow-down"></div>
															<div class="testimonial-author">
																<div class="testimonial-author-thumbnail img-thumbnail">
																	<img src="https://graph.facebook.com/100000772382696/picture?width=50&height=50" alt="GD">
																</div>
																<p><strong>Gaurab Das</strong><span>Program Head,2016</span></p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
					</section>


					


<!--footer!-->

					<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="footer-ribbon">
				<span>Get in Touch</span>
			</div>
			<div class="col-md-3">
				<div class="newsletter">
					<h4>Newsletter</h4>
					<p>Keep up on our always evolving startup culture. Enter your e-mail and subscribe to our newsletter.</p>

					<div class="alert alert-success hidden" id="newsletterSuccess">
						<strong>Success!</strong> You've been added to our email list.
					</div>

					<div class="alert alert-danger hidden" id="newsletterError"></div>

					<form id="newsletterForm" action="javascript:" method="POST">
						<div class="input-group">
							<input class="form-control" placeholder="Email Address" name="email" id="email" type="text">
							<span class="input-group-btn">
								<button class="btn btn-default" type="submit">Go!</button>
								<!--img class="spinner" src="/KIITEcell/assets/images/spinner_white.gif"-->
							</span>
						</div>
						<input type="hidden" name="_token" value="{{ csrf_token() }}" >
					</form>
				</div>
			</div>
			<div class="col-md-3">
				<h4>Latest Tweets</h4>
				<div id="tweet" class="twitter" data-plugin-tweets data-plugin-options='{"username": "kiit_ecell", "count": 2}'">
					<p>Please wait...</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="contact-details">
					<h4>Contact Us</h4>
					<ul class="contact">
						<li><p><i class="fa fa-map-marker"></i> <strong>Address:</strong> 7B,Second Floor, TBI Biotech Campus,KIIT University, Bhubaneshwar.</p></li>
						<li><p><i class="fa fa-phone"></i> <strong>Phone:</strong> +91-9583785500, +91-9861658537</p></li>
						<li><p><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:pcr@ecell.org.in">pcr@ecell.org.in</a></p></li>
					</ul>
				</div>
			</div>
			<div class="col-md-2">
				<h4>Follow Us</h4>
				<ul class="social-icons">
					<li class="social-icons-facebook"><a href="https://www.facebook.com/kiitecell" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
					<li class="social-icons-twitter"><a href="https://twitter.com/kiit_ecell" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
					<li class="social-icons-linkedin"><a href="https://www.linkedin.com/company/13346906/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
					<li class="social-icons-instagram"><a href="https://www.instagram.com/ecell_kiit/" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>
				</ul>
				<a href="https://play.google.com/store/apps/details?id=com.kodexlabs.sparrow">
					<h5>Get Sparrow <img src="KIITEcell/assets/images/sparrow_logo.png" width="50px" height="auto"><br /> Official E-Cell App</h5>
					<img src="KIITEcell/assets/images/playstore.png" width="170px" height="auto"></a>
					<br /><br />
					<script async language="JavaScript" type="text/javascript">
						TrustLogo("KIITEcell/comodo_secure_seal_113x59_transp.png", "CL1", "none");
					</script>
					<a  href="https://ssl.comodo.com" id="comodoTL">SSL Certificates</a>										
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container">
				<div class="row">
					<div class="col-md-1">
						<a href="/" class="logo">
							<img alt="KIIT Ecell" class="img-responsive" style="width:30px; height:30px;" src="KIITEcell/assets/images/logo_alt.png">
						</a>
					</div>
					<div class="col-md-7">
						<p>© Copyright 2017. All Rights Reserved. KIIT E-Cell, KIIT University</p> 
					</div>
					<div class="col-md-4">
						<nav id="sub-menu">
							<ul>
								<li><a href="faq">FAQ's</a></li>
								<li><a href="sitemap.xml">Sitemap</a></li>
								<li><a href="contact-us">Contact</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<!-- Third party Libs -->
<script src="KIITEcell/js/theme.js"></script>
<script src="KIITEcell/js/theme.init.js"></script>
<script async src="KIITEcell/js/views/view.home.js"></script>
<script async src="KIITEcell/libs/jquery.appear/jquery.appear.min.js"></script>
<script async src="KIITEcell/libs/jquery.easing/jquery.easing.min.js"></script>
<script async src="KIITEcell/libs/jquery-cookie/jquery-cookie.min.js"></script>
<script src="KIITEcell/libs/bootstrap/js/bootstrap.min.js"></script>
<script async src="KIITEcell/libs/common/common.min.js"></script>
<script async src="KIITEcell/libs/jquery.validate/jquery.validate.min.js"></script>
<script async src="KIITEcell/libs/isotope/jquery.isotope.min.js"></script>
<script src="KIITEcell/libs/owl.carousel/owl.carousel.min.js"></script>
<script src="KIITEcell/js/sweetalert2.all.js"></script>
<script src="KIITEcell/libs/jquery.gmap/jquery.gmap.js"></script>
<script async src="KIITEcell/libs/owl.carousel/owl.carousel.min.js"></script>
<script async src="KIITEcell/libs/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Theme Base, Components and Settings -->

<script async src="KIITEcell/js/add_newsletter.js"></script>

<!-- Current Page Vendor and Views -->
<!--<?php //if(Request::is('/')){ ?>!-->
<script src="KIITEcell/libs/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="KIITEcell/libs/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="KIITEcell/libs/circle-flip-slideshow/js/jquery.flipshow.min.js"></script>
<!--<?php //} ?>

 <!-- Theme Custom -->
<script src="KIITEcell/js/custom.js"></script> 


       



</body>
</html>