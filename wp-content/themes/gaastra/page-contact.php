<?php get_header(); ?>

<div class="row">
	<div class="intro col-lg-12 col-sm-12 col-xs-12 p-a-0 m-l-0 m-r-0">
		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/contact/contact-banner.jpg" class="img-responsive"/>
	</div>
</div>
<div class="container">
	<div class="row padding-medium">
		<div class="col-sm-12 col-md-6 col-lg-6 p-a-0 m-r-0 m-l-0">
			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2732.677429111885!2d23.623802615844827!3d46.771254353299!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47490c6a99bf473d%3A0xa82030d598db7e31!2sIulius+Mall+Est!5e0!3m2!1sen!2sro!4v1449760738440" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 m-r-0 m-l-0">
			<h3>Contactează-ne</h3>
			<div class="form-group">
				<input type="text" class="form-input" placeholder="Numele tau*">
			</div>
			<div class="form-group">
				<input type="email" class="form-input" placeholder="Adresa ta de email">
			</div>
			<div class="form-group">
				<input type="text" class="form-input" placeholder="Numar de telefon">
			</div>
			<textarea class="form-input" rows="6" placeholder="Comentariul tau"></textarea>
			<button type="submit" class="custom-button pull-right">Trimite</button>
		</div>
	</div>
	<div class="row padding-meddium aria-section">
		<div class="col-sm-12 col-md-3 col-lg-3 m-l-0 m-r-0 text-left">
			<h3>Magazin</h3>
			<p class="emphasized">Cluj-Napoca <br>
			Iulius Mall (parter) <br>
			Str. Al. Vaida Voievod nr. 53B
			</p>
		</div>
		<div class="col-sm-12 col-md-3 col-lg-3 m-l-0 m-r-0 text-left">
			<h3>Orar</h3>
			<p class="emphasized">Luni - Duminică: 11:00 - 22:00</p>
		</div>
		<div class="col-sm-12 col-md-3 col-lg-3 m-l-0 m-r-0 text-left">
			<p class="emphasized"><i class="fa fa-envelope-o"></i> contact@gaastra.ro</p>
			<p class="emphasized"><i class="fa fa-phone"></i> +40 364 880 099</i></p>
		</div>
		<div class="col-sm-12 col-md-3 col-lg-3 m-l-0 m-r-0 text-left">
			<h3>Pentru comenzi</h3>
			<p class="emphasized"><i class="fa fa-envelope-o"></i> comenzi@gaastra.ro</p>
			<p class="emphasized"><i class="fa fa-phone"></i> +40 364 880 099</i></p>
			<p>Comenzile se onorează prin curierat, în limita stocului disponibil.</p>
		</div>
	</div>
	<div class="row padding-medium">
		<div class="col-sm-12 col-md-12 col-lg-12 p-a-0 m-l-0 m-r-0n text-center">
			<h3>Magazinul Gaastra România</h3>
		</div>
	</div>
	<div class="row padding-small">
		<div class="col-sm-12 col-md-10 col-md-push-1 col-lg-10 col-lg-push-1 p-a-0 m-l-0 m-r-0">
            <div id="Carousel" class="carousel slide" data-ride="carousel"> 
                <div class="carousel-inner" role="listbox">
	                <div class="row">
	                	<div class="item active">
	                	    <div class="col-sm-12 col-md-4 col-lg-4">
	                	    	<a href="#" class="thumbnail"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/contact/contact-image-1.jpg" class="img-responsive"/></a>
	                	    </div>
	                	</div>
	                	<div class="item">
	                		<div class="col-sm-12 col-md-4 col-lg-4">
	                			<a href="#" class="thumbnail"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/contact/contact-image-2.jpg" class="img-responsive"/></a>
	                		</div>
	                	</div>
	                	<div class="item">
							<div class="col-sm-12 col-md-4 col-lg-4">
	                			<a href="#" class="thumbnail"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/contact/contact-image-3.jpg" class="img-responsive"/></a>
	                		</div>
	                	</div>
	                </div>
                </div>
                <a data-slide="prev" href="#Carousel" class="left carousel-controller" role="button"><i class="fa fa-angle-left"></i></a>
                <a data-slide="next" href="#Carousel" class="right carousel-controller" role="button"><i class="fa fa-angle-right"></i></a>
            </div>        
		</div>
	</div>
</div>


<?php get_footer(); ?>