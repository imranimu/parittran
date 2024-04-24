<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Parittran
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

	<style>
        .owl-carousel .item {
            display: flex;
            align-items: center;
        }

        .owl-carousel .item img {
            width: 100%;
        }

        .slider-content {
            padding: 15px;
			color: #333;
            background-color: rgba(255, 255, 255, 0.7);
            width: 50%;
            text-align: center;
			margin-bottom: 10px;
        }

        .owl-nav.disabled{
            display: none;
			bacground: black;
        }

    </style>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="boxed_wrapper">
	<!-- preloader -->
	<div class="loader-wrap">
		<div class="preloader">
			<div class="preloader-close">x</div>
			<div id="handle-preloader" class="handle-preloader">
				<div class="animation-preloader">
					<div class="spinner"></div>
					<div class="txt-loading">
						<span data-text-preloader="p" class="letters-loading">
							p
						</span>
						<span data-text-preloader="a" class="letters-loading">
							a
						</span>
						<span data-text-preloader="r" class="letters-loading">
							r
						</span>
						<span data-text-preloader="i" class="letters-loading">
							i
						</span>
						<span data-text-preloader="t" class="letters-loading">
							t
						</span>
						<span data-text-preloader="t" class="letters-loading">
							t
						</span>
						<span data-text-preloader="r" class="letters-loading">
							r
						</span>
						<span data-text-preloader="a" class="letters-loading">
							a
						</span>
						<span data-text-preloader="n" class="letters-loading">
							n
						</span>
					</div>
				</div>  
			</div>
		</div>
	</div>
	<!-- preloader end --> 

	<!-- main header -->
	<header class="main-header"> 
		<div class="header-lower">
			<div class="outer-box">
				<div class="logo-box">
					<figure class="logo"><a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" alt=""></a></figure>
					<span style="position: absolute; bottom: -2px; font-size: 20px;">Since 1993</span>
				</div>
				<div class="menu-area clearfix"> 
					<div class="mobile-nav-toggler">
						<i class="icon-bar"></i>
						<i class="icon-bar"></i>
						<i class="icon-bar"></i>
					</div>
					<nav class="main-menu navbar-expand-md navbar-light">                   
						<div class="collapse navbar-collapse show clearfix">
							<?php
								if ( function_exists( 'register_nav_menu' ) ) {
									wp_nav_menu( array( 'theme_location' => 'primary','container' => 'ul', 'menu_class'=>'navigation clearfix') );
								}
							?>
							<!-- <ul class="navigation clearfix">
								<li class="current"><a href="index.html">Home</a></li>
								<li class="dropdown"><a href="#">About Us</a>
									<ul>
										<li><a href="#">At a Glance</a></li>
										<li><a href="#">Our Expertise</a></li>
										<li><a href="#">Past & Present Donors</a></li>
										<li lass="dropdown"><a href="#">Membership & Network</a>
											<ul>
												<li><a href="#">Membership with international Network</a></li>
												<li><a href="#">Membershi with Natinal Network</a></li>
												<li><a href="#">Network organized by parittran</a></li> 
											</ul>
										</li>
										<li class="dropdown"><a href="#">Working area</a>
											<ul>
												<li><a href="#">Division 1</a></li>
												<li><a href="#">District 4 </a></li>
												<li><a href="#"> Upazila 15 </a></li>
												<li><a href="#">Union 75 </a></li>
												<li><a href="#">Villages 300 </a></li>
												<li><a href="#">Family 33444 </a></li>
												<li><a href="#">Participants- More than 150498</a></li>
											</ul>
										</li>
										<li><a href="#sdrm">Target Group</a></li>                                     
									</ul>
								</li>                             
								<li class="dropdown"><a href="#">Governance System</a>
									<ul>
										<li class="dropdown"><a href="#" aria-current="page">Board</a>
											<ul>
												<li><a href="#">Advisor committee</a></li>
												<li><a href="#">Executive Committee</a></li>
												<li><a href="#">General Committee</a></li>
											</ul>
										</li>
										<li class="dropdown"><a href="#">Our team</a>
											<ul>
												<li><a href="#">Biography of SMT & Program focal</a></li>
												<li><a href="#">Staff List</a></li>
											</ul>
										</li>
										<li><a href="#">Sub Committee</a></li>
										<li><a href="#">Legal Status</a></li>
										<li><a href="#">Policy and Guideline</a></li>  
									</ul>
								</li>
								<li class="dropdown"><a href="#">What we do</a>
									<ul>
										<li>
											<a href="#">Our Development approach </a>
										</li>
										<li>
											<a href="#">On Going Projects</a>
										</li>
										<li>
											<a href="#">Completed Projects</a>
										</li>
										<li>
											<a href="#">Strategic  & Sustainable Development Plan</a>
										</li>
										<li>
											<a href="#">Referal System</a>
										</li>
										<li>
											<a href="#">Networking &amp; Linkage Building</a>
										</li>
										<li>
											<a href="#">Our Achievement</a>
										</li>
										<li>
											<a href="#">SISTER CONCERN </a>
										</li>
									</ul>
								</li> 
								<li class="dropdown"><a href="#">Knowledge Management</a>
									<ul>
										<li>
											<a href="#dalits-in-bangladesh/">Atrocities</a>
										</li>
										<li>
											<a href="#women-in-bangladesh/">Research Report</a>
										</li>
										<li>
											<a href="#child-in-bangladesh/">Evaluation Report</a>
										</li>
										<li>
											<a href="#indigenous-rights-in-bangladesh/">Annual Report</a>
										</li>
										<li class="dropdown"><a href="#">Publication</a>
											<ul>
												<li><a href="#">BOOKS</a></li>
												<li><a href="#">Sticar</a></li>
												<li><a href="#">Poster</a></li>
												<li><a href="#">Lieflet</a></li>
												<li><a href="#">Success Case study</a></li>
											</ul>
										</li>
										<li class="dropdown"><a href="#">Gallery/Photo</a>
											<ul>
												<li><a href="#">Disaster</a></li>
												<li><a href="#">Water Logging</a></li>
												<li><a href="#">Relief</a></li>
												<li><a href="#">Rally Seminar Training</a></li>
												<li><a href="#">Land Rights</a></li>
												<li><a href="#">Food Securities and Livelihood</a></li>
												<li><a href="#">Education</a></li>
												<li><a href="#">Beneficiries</a></li>
												<li><a href="#">Policy and Advocacy.</a></li>
											</ul>
										</li>
										<li class="dropdown"><a href="#">Documentaries</a>
											<ul>
												<li><a href="#">Uddog</a></li>
												<li><a href="#">NTV</a></li>
												<li><a href="#">TV71</a></li>
												<li><a href="#">Dalit</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="dropdown"><a href="#">Donate</a>
									<ul>
										<li><a href="https://www.karuna.org/projects" target="_blank">Donate </a></li>
										<li><a href="#">Project 1</a></li>
										<li><a href="#">Project 2</a></li>
										<li><a href="#">Project 3</a></li>
										<li><a href="#">Project 4</a></li>
										<li><a href="#">Project 5</a></li>
									</ul>
								</li> 
							</ul> -->
						</div>
					</nav> 
				</div>
			</div>
		</div>

		<!--sticky Header-->
		<div class="sticky-header">
			<div class="outer-container">
				<div class="outer-box">
					<div class="logo-box">
						<figure class="logo"><a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" alt=""></a></figure>
					</div>
					<div class="menu-area clearfix">
						<nav class="main-menu clearfix"></nav>
						<!-- <ul class="nav-right">                        
							<li class="btn-box">
								<button class="donate-box-btn theme-btn-one"><span>Donate Now</span></button>
							</li> 
						</ul> -->
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- main-header end -->

	<!-- Mobile Menu  -->
	<div class="mobile-menu">
		
		<div class="menu-backdrop"></div>

		<div class="close-btn"><i class="fas fa-times"></i></div>
		
		<nav class="menu-box">
			<div class="nav-logo"><a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" alt="" title=""></a></div>
			<div class="menu-outer GlobalMenu">
				<!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
			</div>
			<div class="contact-info">
				<h4>Contact Info</h4>
				<ul>
					<li>Village: Lakshmanpur, P.O: Subhashini-9420, P.S.: Tala, District: Satkhira, Bangladesh.</li>
					<li><a href="mailto:parittran@yahoo.com">parittran@yahoo.com</a></li>
					<li><a href="mailto:parittran@gmail.com">parittran@gmail.com</a></li>
					<li><a href="tel:+8801713425610">+8801713425610</a></li>
				</ul>                   
			</div>
			<div class="social-links">
				<ul class="clearfix">
					<li><a href="#"><span class="fab fa-twitter"></span></a></li>
					<li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
					<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
					<li><a href="#"><span class="fab fa-instagram"></span></a></li>
					<li><a href="#"><span class="fab fa-youtube"></span></a></li>
				</ul>
			</div>
		</nav>
	</div><!-- End Mobile Menu -->