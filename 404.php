<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Parittran 404 Page
 */

get_header();
?>
	<div class="single_page">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<section class="error-404 not-found">
						<header class="page-header">
							<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', '_parittran' ); ?></h1>
						</header><!-- .page-header -->

						<div class="page-content"> 
 
							<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', '_parittran' ); ?></p>	
 
								<?php
								get_search_form();

								the_widget( 'WP_Widget_Recent_Posts' );
								?>

								<div class="widget widget_categories">
									<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', '_parittran' ); ?></h2>
									<ul>
										<?php
										wp_list_categories(
											array(
												'orderby'    => 'count',
												'order'      => 'DESC',
												'show_count' => 1,
												'title_li'   => '',
												'number'     => 45,
											)
										);
										?>
									</ul>
								</div>

								<?php
								
								$_parittran_archive_content = '<h1>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', '_parittran' ), convert_smilies( ':)' ) ) . '</h3>';
								the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$_parittran_archive_content" );

								the_widget( 'WP_Widget_Tag_Cloud' );
								?> 								
						</div><!-- .page-content -->
					</section><!-- .error-404 -->
				</div> 
			</div>
		</div>
	</div>
<?php
get_footer();
