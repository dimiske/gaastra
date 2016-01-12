<article id="post-<?php the_ID(); ?>" class="container generic-page">
    <header class="entry-header">
        <?php if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) ) : ?>
        <div class="entry-meta">			
        <span class="cat-links"><?php echo get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'twentyfourteen' ) ); ?></span>		
        </div>		
        <?php			
        endif;			
        the_title( '<h1 class="entry-title">', '</h1>' );			
        ?>
        <div class="entry-meta">			
        <?php				
        edit_post_link( __( 'Edit', 'twentyfourteen' ), '<span class="edit-link">', '</span>' );			
        ?>		
        </div><!-- .entry-meta -->	
    </header><!-- .entry-header -->	
    
    <?php if ( is_search() ) : ?>	
        <div class="entry-summary">		
            <?php the_excerpt(); ?>	
        </div><!-- .entry-summary -->	
    <?php else : ?>	
    <div class="entry-content">		
    <?php			/* translators: %s: Name of current post */			
    the_content( sprintf(				__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'twentyfourteen' ),				
    the_title( '<span class="screen-reader-text">', '</span>', false )			) );        		
    wp_link_pages( array(				
        'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfourteen' ) . '</span>',				
        'after'       => '</div>',				
        'link_before' => '<span>',				
        'link_after'  => '</span>',			
    ) );		?>	
    </div><!-- .entry-content -->	
    <?php endif; ?>	
    <?php the_tags( '<footer class="entry-meta"><span class="tag-links">', '', '</span></footer>' ); ?>
    </article><!-- #post-## -->