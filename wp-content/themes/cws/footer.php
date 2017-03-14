<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package cws
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="outer-container">
			
			<div class="site-info">
				<div class="business-name">
					<a href="<?php echo esc_url( site_url('/') ); ?>" class="light"><strong>CWS CPA LLP</strong></a><br/>
					<?php echo bloginfo( 'description' ); ?>
				</div>
				<div class="phone">
					Phone Us<br/>
					<a href="tel://+16465047007" class="light underline">+1 646 504 7007</a>
				</div>
			</div>

			<nav class="footer-navigation site-nav clearfix" role="navigation">
				<?php wp_nav_menu( array( 'menu' => 'primary', 'menu_id' => 'primary-menu-footer' ) ); ?>
				<?php wp_nav_menu( array( 'menu' => 'secondary', 'menu_id' => 'secondary-menu-footer' ) ); ?>
			</nav><!-- #site-navigation -->

			<cite>&copy; Copyright CWS CPA LLP <?php echo date('Y'); ?></cite>

		</div>
	</footer>

</div><!-- #page -->

<?php if ( defined('WP_DEBUG') && WP_DEBUG === true ) : ?>
<div class="media-size"></div>
<?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>
