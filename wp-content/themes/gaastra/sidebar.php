            <div class="gaastra_blog_sidebar">
            
                <div class="sidebar_item clearfix"><?php get_search_form(); ?></div>
                
                <div class="sidebar_item clearfix">
                    <h4>Urmărește-ne</h4>
                    <div class="logos">
                        <a href="https://www.facebook.com/gaastra.ro" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/facebook-blue-icon.png" alt="" /></a>&nbsp;&nbsp;&nbsp;
                        <a href="https://www.pinterest.com/gaastraromania/" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/pinterest-blue-icon.png" alt="" /></a>&nbsp;&nbsp;&nbsp;
                        <a href="https://www.instagram.com/gaastra_romania/" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/instagram-blue-icon.png" alt="" /></a>
                    </div>
                    <div class="gaastra_logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo( 'name' ); ?>" />
                    </div>
                    <div class="tagcloud"><?php
                    $args = array( "title" => "Etichete", "size_from" => "14px", "separator" => ", ", "prefix" => "#" );

                    do_utcw( $args );
                    ?>
                    </div>
                </div>
                
                <div class="sidebar_item clearfix">
                    <h4>Cele mai citite</h4>
                    <?php echo mostViewedBlogposts(); ?>
                </div>
                
            </div>