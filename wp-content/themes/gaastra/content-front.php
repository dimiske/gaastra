<article class="row banner-item main-banner">
    <?php
    $args = array(
        'name'        => 'homepage-top',
        'post_type'   => 'post',
        'post_status' => 'publish',
        'numberposts' => 1
    );
    $my_posts = get_posts($args);
    if( $my_posts ) : $url = wp_get_attachment_url(get_post_thumbnail_id($my_posts[0]->ID)); endif;
    ?>
    <div class="intro col-lg-12 text-left">
        <img src="<?php echo $url; ?>" alt="" class="img-responsive"/ />
        <div class="intro-text">
            <div class="container">
                <?php echo apply_filters('the_content', $my_posts[0]->post_content); ?>
            </div>
        </div>
    </div>
    
</article>

<article class="row banner-item main-text-mobile">
    <?php
    $my_posts = get_posts($args);
    if( $my_posts ) : $url = wp_get_attachment_url(get_post_thumbnail_id($my_posts[0]->ID)); endif;
    ?>
        <div class="container text-center">
            <?php echo apply_filters('the_content', $my_posts[0]->post_content); ?>
        </div>
</article>

<article id="despre" class="row clearfix vertical-center-row">
    <div class="container">
        
        <div class="row">
            <h2 class="col-lg-12 home-item-title">Despre Gaastra</h2>
        </div>
        
        <div class="row">
            <div class="col-lg-6 col-md-6"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/despre/despre-1.jpg" class="img-responsive" alt="" /></div>

            <div class="col-lg-6 col-md-6 text-despre">

                    <?php 
                    $args = array(
                        'name'        => 'despre',
                        'post_type'   => 'page',
                        'post_status' => 'publish',
                        'numberposts' => 1
                    );
                    $my_posts = get_posts($args);
                    //$my_posts = get_post_format(2);
                    if( $my_posts ){
                        //$post = get_post($my_posts[0]->ID); var_dump($post->post_content);
                        $despre = get_post($my_posts[0]->ID);
                        $display = explode('<!--more-->', $despre->post_content);
                        //$url = wp_get_attachment_url(get_post_thumbnail_id($my_posts[0]->ID)); endif;
                    }
                    //echo $display[0];
                    echo apply_filters('the_content', $display[0]);
                    ?>

            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-6 col-md-6 text-center"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/despre/despre-2.jpg" class="img-responsive" alt="" /></div>
            <div class="col-lg-6 col-md-6 text-center"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/despre/despre-3.jpg" class="img-responsive" alt="" /></div>
        </div>
    
    </div>
</article>


<article class="lookbook row banner-item">
    <h2 class="col-lg-12 home-item-title">Lookbook</h2>
    
    <?php
    $args = array(
        'name'        => 'home-lookbook',
        'post_type'   => 'post',
        'post_status' => 'publish',
        'numberposts' => 1
    );
    $my_posts = get_posts($args);
    if( $my_posts ) : $url = wp_get_attachment_url(get_post_thumbnail_id($my_posts[0]->ID)); endif;
    ?>
    <div class="lookbook-img col-lg-12 text-left">
        <img src="<?php echo $url; ?>" alt="" class="img-responsive"/>
    </div>
    
    <div><a href="<?php echo site_url(); ?>/lookbook" class="button-link">Află mai multe</a></div>
    
    
</article>


<article class="row banner-item contact text-center blog_home">
    <h2>Blog</h2>
    <p>
        Află cele mai noi tendințe în modă, noutăți despre Gaastra și multe altele.<br/>
        Citește blogul Gaastra România!
    </p>
    <div class="intro col-lg-12 text-left">
        <div class="container">
            <?php echo blogPreview(); ?>
        </div>
    </div>
    
    <div><a href="<?php echo site_url(); ?>/blog" class="button-link">Află mai multe</a></div>
    
</article>


<article class="row banner-item contact text-center">
    <h2>Contact</h2>
    <?php
    $args = array(
        'name'        => 'homepage-contact',
        'post_type'   => 'post',
        'post_status' => 'publish',
        'numberposts' => 1
    );
    $my_posts = get_posts($args);
    if( $my_posts ) : $url = wp_get_attachment_url(get_post_thumbnail_id($my_posts[0]->ID)); endif;
    ?>
    <div class="intro col-lg-12 text-left">
        <div class="container">
            <?php echo apply_filters('the_content', $my_posts[0]->post_content); ?>
        </div>
    </div>
    
</article>

<div class="container foto-gallery">
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
		                        <div class="col-lg-4"><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/contact/map.png" rel="lightbox[roadtrip]"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/contact/map.png" class="img-responsive"></a>
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