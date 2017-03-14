<?php
/**
 * Template Name: Contact
 * @package cws
 */

get_header();
$location = get_field('location');
$username = "objectivesubject";
$lon = $location['lng'];
$lat = $location['lat'];
$map_style = "cj0998mpu00652rpimpjanjio";
$overlay = "pin-l+e91048\({$lon},{$lat}\)";
$width = 1280;
$height = 720;
$access_token = "pk.eyJ1Ijoib2JqZWN0aXZlc3ViamVjdCIsImEiOiJPY25wYWRjIn0.AFZPHessR_DGefRkzPilDA";
$zoom = 17.5;
$url = "//api.mapbox.com/styles/v1/{$username}/{$map_style}/static/{$overlay}/{$lon},{$lat},{$zoom},0.00,0.00/{$width}x{$height}@2x?access_token={$access_token}"; ?>

	<div id="primary" class="content-area" style="background-image: url(<?php echo $url; ?>);">
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
