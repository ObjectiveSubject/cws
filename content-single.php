<?php
/**
 * @package cws
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title page-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php if ( has_post_thumbnail() ) : ?>
	<div class="entry-image">
		<?php the_post_thumbnail( 'full' ); ?>
	</div>
	<?php endif; ?>

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php cws_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
