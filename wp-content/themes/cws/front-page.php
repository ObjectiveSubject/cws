<?php
/**
 * The Home page
 *
 * @package cws
 */

get_header(); ?>

	<section id="intro" class="intro-section home-section text-white">
		<div class="outer-container">
			<div class="section-content">
				<h1><?php the_field('intro_title', 'options'); ?></h1>
			</div>
			<div class="cws-sticky-logo sticky">
				<img src="<?php echo get_template_directory_uri() . '/images/logo-blue@2x.png'; ?>" width="100" />
			</div>
			<nav class="section-nav">
				<a href="#intro" title="Intro" class="active"><span class="dot"></span><span class="hide">Intro</span></a>
				<a href="#case-studies" title="Case Studies"><span class="dot"></span><span class="hide">Case Studies</span></a>
				<a href="#services" title="Services"><span class="dot"></span><span class="hide">Services</span></a>
				<a href="#about-us" title="About Us"><span class="dot"></span><span class="hide">About Us</span></a>
				<a href="#professionals" title="Professionals"><span class="dot"></span><span class="hide">Professionals</span></a>
			</nav>
		</div>
		<div class="scrim"></div>
	</section>

	<section id="case-studies" class="section-1 home-section bg-noise-warm_black text-white">
		<div class="outer-container">
			<div class="home-nav-container">
				<nav class="home-navigation site-nav" role="navigation">
					<?php wp_nav_menu( array( 'menu' => 'primary', 'menu_id' => 'primary-menu-header' ) ); ?>
					<?php wp_nav_menu( array( 'menu' => 'secondary', 'menu_id' => 'secondary-menu-header' ) ); ?>
				</nav><!-- #site-navigation -->
			</div>
			<div class="home-section-image ideas">
				<img src="<?php echo get_template_directory_uri() . '/images/ideas.png'; ?>" width="633" />
			</div>
			<div class="section-content">
				<?php the_field('section_1_content', 'options'); ?>
			</div>
		</div>
	</section>

	<section id="services" class="section-2 home-section bg-noise-velvet text-white">
		<div class="outer-container">
			<div class="section-content">
				<?php the_field('section_2_content', 'options'); ?>
			</div>
			<div class="home-section-image measure">
				<img src="<?php echo get_template_directory_uri() . '/images/measure.png'; ?>" width="500" />
			</div>
		</div>
	</section>

	<section id="about-us" class="section-3 home-section bg-noise-powder">
		<div class="outer-container">
			<div class="section-content">
				<?php the_field('section_3_content', 'options'); ?>
			</div>
		</div>
		<div class="home-section-image mountains">
			<img src="<?php echo get_template_directory_uri() . '/images/mountains.png'; ?>" width="1280" />
		</div>
	</section>

	<section id="professionals" class="section-4 home-section text-white">
		<div class="home-section-image rockets">
			<img src="<?php echo get_template_directory_uri() . '/images/rockets.png'; ?>" width="612" />
		</div>
		<div class="outer-container">
			<div class="section-content">
				<?php the_field('section_4_content', 'options'); ?>
			</div>
		</div>
	</section>

	<section class="cta-tiles clearfix">
		<?php get_template_part( 'cta-tile', 'case-studies' ); ?>
		<?php get_template_part( 'cta-tile', 'contact' ); ?>
	</section>

<?php get_footer(); ?>
