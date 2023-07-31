<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Parittran
 */
 
get_header();
?>
	<div class="single_page">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<?php
						if ( have_posts() ) :

							if ( is_home() && ! is_front_page() ) :
								?>
								<header>
									<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
								</header>
								<?php
							endif;
							
							?>
							<div class="row">
							<?php
							while ( have_posts() ) :
								the_post();
								
								get_template_part( 'template-parts/content', 'block' );							 

							endwhile;
						?>
						</div>
						<?php
							the_posts_navigation();

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif;
						?>
				</div>

				<div class="col-md-3">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div> 
<?php
get_footer();