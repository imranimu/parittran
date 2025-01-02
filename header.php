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
            padding: 25px;
			color: #333;
            background-color: rgba(255, 255, 255, 0.6);
            width: 50%;
            text-align: center; 
        }

        .owl-nav.disabled{
            display: none;
			bacground: #000;
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
					<span style="position: absolute; bottom: -2px; font-size: 20px;">Since 1880</span>
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
			</div>
			<div class="contact-info">
				<h4>Contact Info</h4> 
				<ul>
					<li>Village: Lakshmanpur, P.O: Subhashini-9420, P.S.: Tala, District: Satkhira, Bangladesh.</li>
					<li><a href="mailto:parittran@yahoo.com">parittran@yahoo.com</a></li>
					<li><a href="mailto:parittran@gmail.com">parittran@gmail.com</a></li>
					<li><a href="tel:+8801713425610">++880 01732 25 25 63</a></li>
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