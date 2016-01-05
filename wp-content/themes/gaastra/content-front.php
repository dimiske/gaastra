<article class="colectie-femei row banner-item p-a-0 m-l-0  m-r-0" style="margin-bottom: 40px;">
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
    <div class="intro col-lg-12 col-sm-12 col-xs-12 text-center p-a-0 m-l-0  m-r-0" style="background: url('<?php echo $url; ?>') no-repeat center top;no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; height: 500px;">
        <div class="container">
            <div class="intro-text pull-left"><?php echo apply_filters('the_content', $my_posts[0]->post_content); ?></div>
        </div>
    </div>
    
</article>


<article id="despre" class="row clearfix vertical-center-row p-a-0 m-l-0  m-r-0" style="margin-bottom: 40px; text-align: center;">
    <h2 class="col-lg-12 home-item-title">Despre GAASTRA</h2>
    <div class="col-lg-2"></div>
    <div class="col-lg-8 container">
        <div class="container">
        <div class="col-lg-6"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/despre/despre-1.jpg" class="img-fluid" alt="" /></div>
            <div class="col-lg-6 text-despre">
            
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
        <div class="container">
            <div class="col-lg-6"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/despre/despre-2.jpg" class="img-fluid" alt="" /></div>
            <div class="col-lg-6"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/despre/despre-3.jpg" class="img-fluid" alt="" /></div>
        </div>
    </div>
    <div class="col-lg-2"></div>
</article>


<article class="lookbook row banner-item p-a-0 m-l-0  m-r-0" style="padding-bottom: 40px; text-align: center; height: 600px;">
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
    <div class="col-lg-12 col-sm-12 col-xs-12 text-center" style="background: url('<?php echo $url; ?>') no-repeat center top; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; height: 450px;">
        <div class="container">
            <div class="intro-text pull-left"><?php echo apply_filters('the_content', $my_posts[0]->post_content); ?></div>
        </div>
    </div>
    <div class="clearfix" style="margin-top: 20px;"><a href="<?php echo site_url(); ?>/lookbook" class="button-link">Află mai multe</a></div>
    
    
</article>
