<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12 text-left">
			<a href="#">Acasă <i class="fa fa-angle-right"></i></a>
			<a href="#">Colecţii <i class="fa fa-angle-right"></i></a>
			<a href="#">Femei <i class="fa fa-angle-right"></i></a>
			<a href="#">Jachete <i class="fa fa-angle-right"></i></a>
		</div>
	</div>
	<div class="row padding-medium">
		<div class="col-sm-12 col-md-5 col-lg-5">
			<div id="productCarousel" class="carousel slide" data-ride="carousel">
  				<ol class="carousel-indicators">
    				<li data-target="#productCarousel" data-slide-to="0" class="active"></li>
    				<li data-target="#productCarousel" data-slide-to="1"></li>
  				</ol>
  				<div class="carousel-inner" role="listbox">
    				<div class="item active">
      					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/product-1.jpg" >
      				</div>
    				<div class="item">
      					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/product-2.jpg" >
    				</div>
  				</div>
  				<a class="left carousel-control" href="#productCarousel" role="button" data-slide="prev">
    			<i class="fa fa-angle-left"></i>
  				</a>
  				<a class="right carousel-control" href="#productCarousel" role="button" data-slide="next">
    			<i class="fa fa-angle-right"></i>	
  				</a>
			</div>
		</div>

		<div class="col-sm-12 col-md-6 col-md-offset-1 col-lg-6 col-lg-offset-1">
			<h2>Hoodie Gibraltar</h2>
			<h3>350 Ron <span class="smaller-text">TVA inclus</span></h3>
			<ul class="properties-list">
				<li><p>Material fin tricotat cu conţinut de lână</p></li>
				<li><p>Model complex</p></li>
				<li><p>Fir lucios Lurex în model</p></li>
			</ul>
			<a href="#characteristics-section" class="gray-link">Vezi mai mult <i class="fa fa-angle-double-right"></i></a>
			<div class="product-colors padding-small">
				<p>Culoare: Navy</p>
				<ul>
					<li class="active-color"><div class="colored-box blue"></div></li>
					<li><div class="colored-box white"></div></li>
					<li><div class="colored-box black"></div></li>
				</ul>
			</div>
			<div class="product-measures">
				<p>Mărimi disponibile</p>
				<ul>
					<li><div class="measure-box">S</div></li>
					<li><div class="measure-box ">M</div></li>
					<li><div class="measure-box">L</div></li>
					<li><div class="measure-box">XL</div></li>
				</ul>
			</div>
			<div class="padding-small">
				<p class="emphasized">Produs disponibil în magazin sau prin comandă</p>
				<p class="emphasized"><i class="fa fa-envelope-o"></i> comenzi@gaastra.ro</p>
				<p class="emphasized"><i class="fa fa-phone"></i> +40 364 880 099</i></p>
			</div>
		</div>
	</div>
	<div class="row" id="characteristics-section">
		<div class="col-sm-12 col-md-12 col-lg-12 text-center">
			<h2>Caracteristici</h2>
			<p>Eşarfă mare, delicată, cu un model complex, fire Lurex şi lână - perfectă pentru lunile mai reci.</p>
		</div>
	</div>
	<div class="row padding-small">
		<div class="col-sm-12 col-md-4 col-md-offset-2 col-lg-4 col-lg-offset-2 text-left">
			<ul class="properties-list">
				<li><p>Material fin tricotat cu conţinut de lână</p></li>
				<li><p>Model complex</p></li>
				<li><p>Fir lucios Lurex în model</p></li>
				<li><p>Formă dreptunghiulară mare</p></li>
				<li><p>Broderie la un capăt</p></li>
			</ul>
		</div>
		<div class="col-sm-12 col-md-4 col-lg-4 text-left">
			<ul class="properties-list">
				<li><p>Măsuri (lungime x lăţime): 180cm x 80cm</p></li>
				<li><p>Codul produsului: 36842052-F40</p></li>
				<li><p>Material: 70% acril / 15% lână / 15% naylon</p></li>
			</ul>
		</div>
	</div>
	<div class="row padding-medium">
		<div class="col-sm-12 col-md-12 col-lg-12 text-center">
			<h2>Îţi mai recomandăm</h2>
		</div>
	</div>
	<div class="row">
	    <div class="col-sm-12 col-md-12 col-lg-12">
	        <div id="recomandationCarousel" class="carousel slide">
	            <div class="carousel-inner">
	                <div class="item active">
	                    <div class="row">
	                        <div class="col-lg-3 text-center"><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/produs/product-image-1.jpg" class="img-responsive"></a>
	                        <p class="emphasized margin-top">Bluză albastră</p>
	                        <p class="emphasized">213.99 Ron</p>
	                        </div>
	                        <div class="col-lg-3 text-center"><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/produs/product-image-2.jpg" class="img-responsive"></a>
	                        <p class="emphasized margin-top">Jachetă albă</p>
	                        <p class="emphasized">213.99 Ron</p>
	                        </div>
	                        <div class="col-lg-3 text-center"><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/produs/product-image-3.jpg" class="img-responsive"></a>
	                        <p class="emphasized margin-top">Bluză albastră</p>
	                        <p class="emphasized">213.99 Ron</p>
	                        </div>
	                        <div class="col-lg-3 text-center"><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/produs/product-image-4.jpg" class="img-responsive"></a>
	                        <p class="emphasized margin-top">Jachetă roz</p>
	                        <p class="emphasized">213.99 Ron</p>
	                        </div>
	                    </div>
	                </div>
	                <div class="item">
	                    <div class="row">
	                        <div class="col-lg-3 text-center"><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/produs/product-image-4.jpg" class="img-responsive"></a>
	                        <p class="emphasized margin-top">Jachetă roz</p>
	                        <p class="emphasized">213.99 Ron</p>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <a data-slide="prev" href="#recomandationCarousel" class="left carousel-control"><i class="fa fa-angle-left"></i></a>
               	<a data-slide="next" href="#recomandationCarousel" class="right carousel-control"><i class="fa fa-angle-right"></i></a>
	        </div>
	   	</div>
	</div>
	</div>
</div>


<?php get_footer(); ?>
