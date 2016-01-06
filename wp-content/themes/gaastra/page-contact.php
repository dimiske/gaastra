<?php get_header(); ?>

<div class="row">
	<div class="intro col-sm-12 col-md-12 col-lg-12">
		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/contact/contact-banner.jpg" class="img-responsive"/>
	</div>
</div>
<div class="container">
	<div class="row padding-medium aria-section">
		<div class="col-sm-12 col-md-4 col-lg-4 text-left">
			<h3>Magazin</h3>
			<p class="emphasized">Cluj-Napoca</p>
			<p class="emphasized">Iulius Mall (parter)</p>
			<p class="emphasized">Str. Al. Vaida Voievod nr. 53B</p>
			<h3>Orar</h3>
			<p class="emphasized">Luni - Duminică: 11:00 - 22:00</p>
			<p class="emphasized"><i class="fa fa-envelope-o"></i> contact@gaastra.ro</p>
			<p class="emphasized"><i class="fa fa-phone"></i> +40 364 880 099</i></p>
		</div>
		<div class="col-sm-12 col-md-8 col-lg-8">
			<h3>Contactează-ne</h3>
			<div class="form-group">
				<input type="text" class="form-input" placeholder="Numele tău*">
			</div>
			<div class="form-group">
				<input type="email" class="form-input" placeholder="Adresa ta de email">
			</div>
			<div class="form-group">
				<input type="text" class="form-input" placeholder="Număr de telefon">
			</div>
			<textarea class="form-input" rows="6" placeholder="Comentariul tău"></textarea>
			<button type="submit" class="custom-button pull-right">Trimite</button>
		</div>
	</div>

	<div class="row padding-medium">
		<div class="col-sm-12 col-md-12 col-lg-12 text-center">
			<h3>Magazinul Gaastra România</h3>
		</div>
	</div>
	<div class="container">
		<div class="row padding-small">
		    <div class="col-lg-12">
		        <div id="contactCarousel" class="carousel slide">
		            <div class="carousel-inner">
		                <div class="item active">
		                    <div class="row">
		                        <div class="col-lg-4"><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/contact/contact-image-1.jpg" rel="lightbox[roadtrip]"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/contact/contact-image-1.jpg" class="img-responsive"></a>
		                        </div>
		                        <div class="col-lg-4"><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/contact/contact-image-2.jpg" rel="lightbox[roadtrip]"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/contact/contact-image-2.jpg" class="img-responsive"></a>
		                        </div>
		                        <div class="col-lg-4"><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/contact/contact-image-3.jpg" rel="lightbox[roadtrip]"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/contact/contact-image-3.jpg" class="img-responsive"></a>
		                        </div>
		                    </div>
		                </div>
		                <div class="item">
		                    <div class="row">
		                        <div class="col-lg-4"><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/contact/contact-image-4.jpg" rel="lightbox[roadtrip]"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/contact/contact-image-4.jpg" class="img-responsive"></a>
		                        </div>
		                        <div class="col-lg-4"><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/contact/contact-image-5.jpg" rel="lightbox[roadtrip]"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/contact/contact-image-5.jpg" class="img-responsive"></a>
		                        </div>
		                        <div class="col-lg-4"><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/contact/contact-map.png" rel="lightbox[roadtrip]"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/contact/contact-map.png" class="img-responsive"></a>
		                        </div>
		                    </div>
		                </div>
		            </div>
		            <a data-slide="prev" href="#contactCarousel" class="left carousel-control"><i class="fa fa-angle-left"></i></a>
	               	<a data-slide="next" href="#contactCarousel" class="right carousel-control"><i class="fa fa-angle-right"></i></a>
		        </div>
		   	</div>
		</div>
	</div>
	</div>


<?php get_footer(); ?>