<?php
/**
 * @package cws
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('professional-preview archive-tile clearfix'); ?>>
	<?php if ( has_post_thumbnail() ) : ?>
	<div class="entry-image hug">
		<?php the_post_thumbnail( 'preview' ) ?>
	</div>
	<?php endif; ?>

	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<p><?php the_excerpt(); ?></p>
		<p><a href="<?php the_permalink(); ?>" class="read-more underline">View Case Study</a></p>
	</div><!-- .entry-content -->
</article><!-- #post-## -->