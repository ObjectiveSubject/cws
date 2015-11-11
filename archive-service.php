<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package cws
 */

get_header(); ?>

	<div id="primary" class="content-area outer-container">
		
		<header class="page-header">
			<h1 class="page-title">Services</h1>
			<div class="cws-sticky-logo sticky">
				<img src="<?php echo get_template_directory_uri() . '/images/logo-blue@2x.png'; ?>" width="100" />
			</div>
		</header><!-- .page-header -->
		
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content-service', 'preview' ); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<section class="cta-tiles clearfix">
		<?php get_template_part( 'cta-tile', 'contact' ); ?>
		<?php get_template_part( 'cta-tile', 'case-studies' ); ?>
	</section>

<?php get_footer(); ?>
