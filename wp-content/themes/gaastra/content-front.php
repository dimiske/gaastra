<article class="colectie-femei row home-item p-a-0 m-l-0  m-r-0" style="margin-bottom: 40px;">
    <?php
    $args = array(
        'name'        => 'colectia-femei',
        'post_type'   => 'post',
        'post_status' => 'publish',
        'numberposts' => 1
    );
    $my_posts = get_posts($args);
    if( $my_posts ) : $url = wp_get_attachment_url(get_post_thumbnail_id($my_posts[0]->ID)); endif;
    ?>
    <div class="intro col-lg-12 col-sm-12 col-xs-12 text-center p-a-0 m-l-0  m-r-0"><img src="<?php echo $url; ?>" class="img-responsive" style="" /></div>
    <div class="intro-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.<br/><br/><a href="<?php echo site_url(); ?>/colectia-femei">Vezi noua colectie</a></div>
</article>


<article id="despre" class="row clearfix vertical-center-row p-a-0 m-l-0  m-r-0" style="margin-bottom: 40px; text-align: center;">
    <h2 class="col-lg-12">Despre GAASTRA</h2>
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
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
    <div class="col-lg-2"></div>
</article>


<article class="colectie-barbati row home-item p-a-0 m-l-0  m-r-0" style="margin-bottom: 40px;">
    <?php
    $args = array(
        'name'        => 'colectia-barbati',
        'post_type'   => 'post',
        'post_status' => 'publish',
        'numberposts' => 1
    );
    $my_posts = get_posts($args);
    if( $my_posts ) : $url = wp_get_attachment_url(get_post_thumbnail_id($my_posts[0]->ID)); endif;
    ?>
    <div class="intro col-lg-12 col-sm-12 col-xs-12 text-center p-a-0"><img src="<?php echo $url; ?>" class="img-responsive" style="" /></div>
    <div class="intro-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.<br/><br/><a href="<?php echo site_url(); ?>/colectia-femei">Vezi noua colectie</a></div>
</article>


<article class="row p-a-0 m-l-0  m-r-0" style="margin-bottom: 40px;">
    <div class="col-lg-2"></div>
    <div class="col-lg-2"><img src="http://192.168.204.56:37000/wp-content/uploads/2015/11/Kidslook_mood-300x200.jpg" alt="" class="img-responsive" /></div>
    <div class="col-lg-2"><img src="http://192.168.204.56:37000/wp-content/uploads/2015/11/IceSailing-WOG-300x200.jpg" alt="" class="img-responsive" /></div>
    <div class="col-lg-2"><img src="http://192.168.204.56:37000/wp-content/uploads/2015/11/Kidslook_mood-300x200.jpg" alt="" class="img-responsive" /></div>
    <div class="col-lg-2"><img src="http://192.168.204.56:37000/wp-content/uploads/2015/11/Kunstfell_top-300x200.jpg" alt="" class="img-responsive" /></div>
    <div class="col-lg-2"></div>
</article>

<article class="colectie-copii row home-item p-a-0 m-l-0  m-r-0" style="margin-bottom: 50px;">
    <?php
    $args = array(
        'name'        => 'colectia-copii',
        'post_type'   => 'post',
        'post_status' => 'publish',
        'numberposts' => 1
    );
    $my_posts = get_posts($args);
    if( $my_posts ) : $url = wp_get_attachment_url(get_post_thumbnail_id($my_posts[0]->ID)); endif;
    ?>
    <div class="intro col-lg-12 col-sm-12 col-xs-12 text-center p-a-0"><img src="<?php echo $url; ?>" class="img-responsive" style="" /></div>
    <div class="intro-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.<br/><br/><a href="<?php echo site_url(); ?>/colectia-femei">Vezi noua colectie</a></div>
</article>