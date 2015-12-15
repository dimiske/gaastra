<?php

get_header(); ?>

<?php 

if(have_posts()){ ?>
    <?php
    while(have_posts()){
        the_post();
        get_template_part('content', 'colectii');
    }
}else{
    get_template_part('content', 'front');
}

get_footer();

