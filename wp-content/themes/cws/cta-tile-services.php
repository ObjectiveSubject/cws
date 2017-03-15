
<?php
$image_id = get_field( 'services_tile_image', 'options' );
$image = wp_get_attachment_image_src( $image_id, 'large' );
$image_url = ( $image ) ? $image[0] : '';
?>

<a class="light" href="<?php echo esc_url( site_url( '/services/' ) ); ?>">
	<div class="cta-tile" style="background-image:url(<?php echo esc_url( $image_url ); ?>)">
		<h2 class="hug cta-tile-title"><?php the_field( 'services_tile_text', 'options' ); ?></h2>
	</div>
</a>