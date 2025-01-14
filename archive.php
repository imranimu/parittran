<?php
/**
 * The template for displaying archive pages
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
					<?php if ( have_posts() ) : ?>
						<header class="page-header">
							<?php
							the_archive_title( '<h1 class="page-title">', '</h1>' );
							the_archive_description( '<div class="archive-description">', '</div>' );
							?>							
						</header>

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
				<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi, esse. Voluptas, a nulla labore architecto ratione iure ex nisi qui ea fuga alias iste maxime velit temporibus! Sit, eligendi repellendus?</p>
			</div>
		</div>
	</div>
<?php
get_footer();