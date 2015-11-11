<?php
/**
 * Template Name: Contact
 * @package cws
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main outer-container" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<section class="cta-tiles clearfix">
		<?php get_template_part( 'cta-tile', 'case-studies' ); ?>
		<?php if ( is_page('contact') ) {
			get_template_part( 'cta-tile', 'services' ); 
		} else {
			get_template_part( 'cta-tile', 'contact' ); 
		} ?>
	</section>

<?php get_footer(); ?>
