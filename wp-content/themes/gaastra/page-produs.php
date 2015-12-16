<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-lg-12 p-a-0 m-l-0 m-r-0 text-left">
			<a href="#">Acasa <i class="fa fa-angle-right"></i></a>
			<a href="#">Colectii <i class="fa fa-angle-right"></i></a>
			<a href="#">Femei <i class="fa fa-angle-right"></i></a>
			<a href="#">Jachete <i class="fa fa-angle-right"></i></a>
		</div>
	</div>
	<div class="row padding-medium">
		<div class="col-lg-5">
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

		<div class="col-lg-6 col-lg-offset-1">
			<h2>Hoodie Gibraltar</h2>
			<h3>350 Ron <span class="smaller-text">TVA inclus</span></h3>
			<ul class="properties-list">
				<li><p>Material fin tricotat cu continut de lana</p></li>
				<li><p>Model complex</p></li>
				<li><p>Fir lucios Lurex in model</p></li>
			</ul>
			<a href="" class="gray-link">Vezi mai mult <i class="fa fa-angle-double-right"></i></a>
			<div class="product-colors padding-small">
				<p>Culoare: Navy</p>
				<ul>
					<li class="active-color"><div class="colored-box blue"></div></li>
					<li><div class="colored-box white"></div></li>
					<li><div class="colored-box black"></div></li>
				</ul>
			</div>
			<div class="product-measures">
				<p>Marimi disponibile</p>
				<ul>
					<li><div class="measure-box">S</div></li>
					<li><div class="measure-box ">M</div></li>
					<li><div class="measure-box">L</div></li>
					<li><div class="measure-box">XL</div></li>
				</ul>
			</div>
			<div class="padding-small">
				<p class="emphasized">Produs disponibil in magazin sau prin comanda</p>
				<p class="emphasized"><i class="fa fa-envelope-o"></i> comenzi@gaastra.ro</p>
				<p class="emphasized"><i class="fa fa-phone"></i> +40 364 880 099</i></p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12 text-center">
			<h2>Caracteristici</h2>
			<p>Esarfa mare, delicata, cu un model complex, fire Lurex si lana - perfecta pentru lunile mai reci.</p>
		</div>
	</div>
	<div class="row padding-small">
		<div class="col-lg-6 text-left">
			<ul class="properties-list">
				<li><p>Material fin tricotat cu continut de lana</p></li>
				<li><p>Model complex</p></li>
				<li><p>Fir lucios Lurex in model</p></li>
				<li><p>Forma dreptunghiulara mare</p></li>
				<li><p>Broderie la un capat</p></li>
			</ul>
		</div>
		<div class="col-lg-6 text-left">
			<ul class="properties-list">
				<li><p>Masuri (lungime x latime): 180cm x 80cm</p></li>
				<li><p>Codul produsului: 36842052-F40</p></li>
				<li><p>Material: 70% acril / 15% lana / 15% naylon</p></li>
			</ul>
		</div>
	</div>
</div>


<?php get_footer(); ?>
