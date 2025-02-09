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
					<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi quam architecto illo aut vero deserunt consequuntur sunt commodi? Error ratione aliquam, pariatur dicta perspiciatis explicabo eaque saepe nam facere id.</p>
					<?php get_sidebar(); ?>  
				</div>				
			</div>
		</div>
	</div>
<?php
get_footer();