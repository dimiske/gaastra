<?php

get_header();

// Start the Loop.
while ( have_posts() ) : the_post(); ?>
    <article class="blogpost-item row p-a-0 m-l-0  m-r-0" style="margin-bottom: 40px;">
        
        <?php 
        
        if ( is_single() ) :
            the_title( '<h1 class="entry-title">', '</h1>' );
        else :
            the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
        endif;
        ?>
        
        <<?php gaastra_post_thumbnail(); ?>
        
        <?php
        $my_post = get_post(get_the_ID());
        if( $my_post ) : $url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); endif;
        ?>
        <?php
            the_excerpt( sprintf(__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'twentyfourteen' ),
        ?>
        <?php echo apply_filters('the_content', $my_post->post_content); ?>
        
    </article>
    <?php
endwhile;

get_footer();
