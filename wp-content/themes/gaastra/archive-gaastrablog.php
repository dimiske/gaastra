<?php

get_header();

?>
<div class="container gaastra-blog">
    <div class="row">
        <div class="col-lg-8">
            
            <h1 class="entry_title">Blog Gaastra România</h1>
            
            <?php
            $i = 1;
            // Start the Loop.
            while ( have_posts() ) : the_post(); 
                if($i == 1 || $i == 2 || $i == 4){
                    echo '<div class="row">';
                    $class = ($i == 2) ? 'item-'.$i.' col-lg-6 col-md-6' : 'item-'.$i.' col-lg-12 col-md-12';
                    $classimg = ($i == 2) ? 'item-'.$i.' col-lg-12 col-md-12' : 'item-'.$i.' col-lg-6 col-md-6';
                    $classtxt = ($i == 2) ? 'item-'.$i.' col-lg-12 col-md-12' : 'item-'.$i.' col-lg-6 col-md-6';
                }else{
                    $class = 'item-'.$i.' col-lg-6 col-md-6';
                    $classimg = 'item-'.$i.' col-lg-12 col-md-12';
                    $classtxt = 'item-'.$i.' col-lg-12 col-md-12';
                }
            
                ?>
                
                <div class="blogpost-item <?php echo $class; ?>">
                
                    <div class="holder clearfix">

                        <div class="<?php echo $classimg; ?> blog-img">
                            <?php gaastra_post_thumbnail(); ?>
                        </div>
                        
                        <div class="<?php echo $classtxt; ?> blog-txt">
                            <?php 

                            if ( is_single() ) :
                                the_title( '<h1>', '</h1>' );
                            else :
                                the_title( '<h3><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
                            endif;
                            ?>
                        

                        
                            <?php
                            $my_post = get_post(get_the_ID());
                            if( $my_post ) : $url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); endif;
                            ?>
                            <?php 
                                the_excerpt();
                                //echo apply_filters('the_content', $my_post->post_content); 
                            ?>
                        </div>
                        <?php echo '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark" class="button-link">Citeste mai mult &raquo;</a>'; ?>
                    </div>

                </div>
                
                
                <?php
                if($i == 1 || $i == 3 || $i == 4){
                    echo '</div>';
                }
                $i += 1;
            endwhile;
            ?>
            
            <div class="blogpost-item col-lg-12 pagination">
                    <?php 
                    $args = array(
                        'base'               => '%_%',
                        'format'             => '?page=%#%',
                        'total'              => 1,
                        'current'            => 0,
                        'show_all'           => False,
                        'end_size'           => 1,
                        'mid_size'           => 2,
                        'prev_next'          => True,
                        'prev_text'          => __('Previous'),
                        'next_text'          => __('Next'),
                        'type'               => 'plain',
                        'add_args'           => False,
                        'add_fragment'       => '',
                        'before_page_number' => '',
                        'after_page_number'  => ''
                    );
                    $arg = array(
                        'prev_text'          => __('&laquo;'),
                        'next_text'          => __('&raquo;'),);
                    ?>
                <?php echo paginate_links($arg); ?>
            </div>
        </div>
        
        
        
        <div class="col-lg-4">
            <?php get_sidebar(); ?>
        </div>
    </div>
    
</div>
<?php







get_footer();
