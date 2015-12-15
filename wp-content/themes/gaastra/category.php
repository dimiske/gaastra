<?php

get_header(); ?>

<?php 

if(have_posts()){ ?>
    <header class="archive-header">
        <h1 class="archive-title"><?php printf( __( '%s', 'gaastra' ), single_cat_title( '', false ) ); ?></h1>
    </header>

    <?php
    while(have_posts()){
        the_post();
        get_template_part('content', get_post_format());
    }
}else{
    get_template_part('content', 'none');
}

get_footer();

