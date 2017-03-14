<?php
/**
 * @package cws
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('service-preview archive-row clearfix'); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title hug"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header><!-- .entry-header -->

	<?php if ( has_post_thumbnail() ) : ?>
	<div class="entry-image">
		<?php the_post_thumbnail( 'preview' ) ?>
	</div>
	<?php endif; ?>

	<div class="entry-summary">
		<?php the_excerpt(); ?>
		<p><a href="<?php the_permalink(); ?>" class="read-more underline">View Case Study</a></p>
	</div><!-- .entry-content -->
</article><!-- #post-## -->