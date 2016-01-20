<?php

/**
 * Template Name: Landing page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */


get_header(); ?>

<div class="row">
	<div class="landing-intro col-lg-12">
		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/landing-page/landing-image-1.jpg" class="img-responsive"/>
		<div class="landing-intro-text">
			<h2 class="text-center">Colectia Toamna - Iarna</h2>
			<h2 class="text-center">'15/'16</h2>
			<h5 class="italic text-center">Femei</h5>
			<p class="text-center banner-item"><a href="">Vezi colectia</a></p>
		</div>
	</div>
</div>

<div class="row">
	<div class="landing-intro col-lg-12">
		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/landing-page/landing-image-2.jpg" class="img-responsive"/>
		<div class="landing-intro-text text-center">
			<h2>Colectia Toamna - Iarna</h2>
			<h2>'15/'16</h2>
			<h5 class="italic">Barbati</h5>
			<form action="">
				<input type="text" placeholder="Adresa de email">
				<input type="submit" value="Trimite">
			</form>
			<p class="text-on-landing-banner smaller-width">Lorem ipsum dolor sit amet, consectetur adipisicing elit
sed do eiusmod tempor incididunt ut labore et duium.
</p>
		</div>
	</div>
</div>

<div class="row">
	<div class="landing-intro col-lg-12">
		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/landing-page/landing-image-3.jpg" class="img-responsive"/>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-lg-12 text-center">
			<h4 class="padding-small">Lorem Ipsum</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nunc ligula, pretium eu tempor vitae, tempor sit amet erat. Donec eu augue orci. Duis mollis libero tortor, a ornare nibh auctor vitae. Sed sit amet nibh lacinia, facilisis sem non, volutpat nisi. Maecenas dignissim a enim a vulputate. Sed malesuada elit lacus, nec aliquam est vestibulum ac. In eget ante tellus. Suspendisse sit amet rhoncus sem.</p>
			<p>Quisque faucibus egestas varius. Pellentesque quis euismod arcu. Vivamus imperdiet, velit sed elementum luctus, est dui lacinia lorem, ac pharetra leo tortor eu risus. Etiam vulputate, diam sed semper venenatis, lorem elit congue est, at egestas diam ante eget nisi. Aliquam erat volutpat. Etiam luctus arcu nec orci hendrerit fringilla. Aliquam eu tempor ex. Pellentesque egestas ligula in sapien elementum lobortis.</p>
		</div>
	</div>
</div>

<?php get_footer(); ?>