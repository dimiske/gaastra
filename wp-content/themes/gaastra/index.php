<?php get_header(); ?>

<div class="clearfix"></div>

<?php
if(is_front_page()){
    get_template_part('content', 'front');
}else{
    if(have_posts()){ 
        // Start the Loop.
        while(have_posts()){
            the_post();
            get_template_part('content', get_post_type());
        }
    }else{
        get_template_part('content', 'front');
    }
}

get_footer();



