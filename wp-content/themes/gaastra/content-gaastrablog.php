<?php

get_header();

?>
<div class="container gaastra-blog">
    <div class="row">
        <div class="col-lg-8">
            
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <?php if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) ) : ?>
                    <div class="entry-meta">			
                        <span class="cat-links">
                            <?php echo get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'twentyfourteen' ) ); ?>
                        </span>		
                    </div>
                    <?php endif;
                    if ( is_single() ) : 
                        the_title( '<h1 class="entry_title">', '</h1>' ); 
                    else : the_title( '<h1 class="entry_title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
                    endif; ?>
                    
                    <?php
                    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
                    ?>
                    <div class="intro-image"><img src="<?php echo $large_image_url[0]; ?>" alt="" class="img-responsive"/></div>
                    
                    <div class="entry-meta">			<?php				edit_post_link( __( 'Edit', 'twentyfourteen' ), '<span class="edit-link">', '</span>' );			?>		</div><!-- .entry-meta -->	</header><!-- .entry-header -->	<?php if ( is_search() ) : ?>	<div class="entry-summary">		<?php the_excerpt(); ?>	</div>	<?php else : ?>	<div class="entry_content">		<?php			/* translators: %s: Name of current post */			the_content( sprintf(				__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'twentyfourteen' ),				the_title( '<span class="screen-reader-text">', '</span>', false )			) );        		wp_link_pages( array(				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfourteen' ) . '</span>',				'after'       => '</div>',				'link_before' => '<span>',				'link_after'  => '</span>',			) );		?>	</div><!-- .entry-content -->	<?php endif; ?>	<?php the_tags( '<footer class="entry-meta"><span class="tag-links">', '', '</span></footer>' ); ?>
            </article>
            
            <div class="gaastra_comments">
                <div class="comments_template"><?php comments_template(); ?></div>
            </div>

        </div>
        
        <?php setPostViews(get_the_ID()); ?>
        
        
        
        <div class="col-lg-4">
            <?php get_sidebar(); ?>
        </div>
    </div>
    
</div>
<?php







get_footer();