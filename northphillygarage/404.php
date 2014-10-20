<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since North Philly Parking Garage 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<div class="page-wrapper">
				<div class="page-content">
					<h2><?php _e( 'Error Four Oh Four.', 'northphillygarage' ); ?></h2>
					<p><?php _e( 'The file or page you&rsquo;re looking for isn&rsquo;t here. You were never ever supposed to see this page. I&rsquo;m blushing. Try a search:', 'northphillygarage' ); ?></p>

					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</div><!-- .page-wrapper -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
