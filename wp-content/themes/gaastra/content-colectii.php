<article class="row banner-item p-a-0 m-l-0  m-r-0" style="margin-bottom: 40px;">
    <?php
    $my_post = get_post(get_the_ID());
    if( $my_post ) : $url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); endif;
    ?>
    <div class="intro col-lg-12 col-sm-12 col-xs-12 text-center p-a-0 m-l-0  m-r-0" style="background: url('<?php echo $url; ?>') no-repeat center top;no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; height: 500px;">
        <div class="container">
            <div class="intro-text pull-left"><?php echo apply_filters('the_content', $my_post->post_content); ?></div>
        </div>
    </div>
    
</article>

<article class="row m-l-0 m-r-0">
    <h2 style="text-align: center;">Favoritele sezonului</h2>
    &nbsp;<br/>
</article>