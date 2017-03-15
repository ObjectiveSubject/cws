<?php
/**
 * @package cws
 */

$email = get_field( 'prof_email' ); 
$phone = get_field( 'prof_phone' ); 
$fax   = get_field( 'prof_fax' ); 
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('professional-preview archive-tile clearfix'); ?>>
	<?php if ( has_post_thumbnail() ) : ?>
	<div class="entry-image hug">
		<?php the_post_thumbnail( 'preview' ) ?>
	</div>
	<?php endif; ?>

	<header class="entry-header">
		<h2 class="entry-title"><?php the_title(); ?></h2>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_content(); ?>
		<p>
			<?php if ( $email ) : ?>
				<span><strong>Email:</strong> <a href="<?php echo esc_url( 'mailto:' . $email ); ?>"><?php echo $email; ?></a></span><br>
			<?php endif; ?>
			<?php if ( $phone ) : ?>
				<span><strong>Phone:</strong> <?php echo $phone; ?></span><br>
			<?php endif; ?>
			<?php if ( $fax ) : ?>
				<span><strong>Fax:</strong> <?php echo $fax; ?></span>
			<?php endif; ?>
		</p>
	</div><!-- .entry-content -->
</article><!-- #post-## -->