<?php
/**
 * Gaastra functions and definitions
 *
 * @package Gaastra
 * @since Gaastra 1.0
 */




/**
 * Create custom post types
 */

function create_post_type_collection(){
    register_post_type('collection',
        array(
            'labels' => array(
                'name' => __( 'Collections' ),
                'singular_name' => __( 'Collection' ),
                'add_new' => __( 'Add New' ),
                'add_new_item' => __( 'Add New Collection' ),
                'edit' => __( 'Edit' ),
                'edit_item' => __( 'Edit Collection' ),
                'new_item' => __( 'New Collection' ),
                'view' => __( 'View Collection' ),
                'view_item' => __( 'View Collection' ),
                'search_items' => __( 'Search Collection' ),
                'not_found' => __( 'No collection found' ),
                'not_found_in_trash' => __( 'No collection found in Trash' ),
                'parent' => __( 'Parent Collection' )
            ),
            'public' => true,
            'has_archive' => true,
            'taxonomies' => array('tag_collection'),
            'show_in_menu' => true,
            'menu_position' => 4,
            'publicly_queryable' => 'collection',
            'rewrite' => array(
                'slug' => 'collections'
            )
        )
    );
    add_post_type_support('collection', array('thumbnail'));
}
add_action('init', 'create_post_type_collection');


function category_collection_init() {
	// create a new taxonomy
	register_taxonomy(
		'tag_collection',
		'collection',
		array(
                    'label' => __( "Collection's tags" ),
                    'rewrite' => array( 'slug' => 'tag_collection' ),
                    'capabilities' => array(
                            'assign_terms' => 'edit_posts',
                            'edit_terms' => 'publish_posts'
                    ),
                    'show_ui' => true,
                    'show_admin_column' => true,
		)
	);
}
add_action( 'init', 'category_collection_init' );



function create_post_type_blogpost(){
    register_post_type('gaastrablog',
        array(
            'labels' => array(
                'name' => __( 'Blog Posts' ),
                'singular_name' => __( 'Blog Post' ),
                'add_new' => __( 'Add New' ),
                'add_new_item' => __( 'Add New Blog Post' ),
                'edit' => __( 'Edit' ),
                'edit_item' => __( 'Edit Blog Post' ),
                'new_item' => __( 'New Blog Post' ),
                'view' => __( 'View Blog Post' ),
                'view_item' => __( 'View Blog Post' ),
                'search_items' => __( 'Search Blog Post' ),
                'not_found' => __( 'No Blog Post found' ),
                'not_found_in_trash' => __( 'No Blog Post found in Trash' ),
                'parent' => __( 'Parent Blog Post' )
            ),
            'public' => true,
            'has_archive' => true,
            'taxonomies' => array('post_tag'),
            'show_in_menu' => true,
            'menu_position' => 4,
            'publicly_queryable' => 'blog',
            'rewrite' => array(
                'slug' => 'blog'
            )
        )
    );
    add_post_type_support('gaastrablog', array('thumbnail', 'comments'));
}
add_action('init', 'create_post_type_blogpost');


if (!function_exists('gaastra_setup')) :

function gaastra_setup() {
    register_nav_menus(array('primary' => __( 'Primary Menu', 'gaastra' )));
    add_theme_support('post-thumbnails', array('page', 'post', 'gaastrablog', 'collection'));
    //set_post_thumbnail_size(672, 372, true);
    set_post_thumbnail_size(350, 350, true);
    add_image_size('gaastra-full-width', 1900, 740, true );
    add_theme_support('html5', array( 'search-form' ));
}

endif;
add_action('after_setup_theme', 'gaastra_setup');


function special_nav_class($classes, $item){
    $classes[] = "nav-item";
    return $classes;
}
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);


function gaastra_font_url() {
    $font_url = '';
    /*
     * Translators: If there are characters in your language that are not supported
     * by Lato, translate this to 'off'. Do not translate into your own language.
     */
    if ( 'off' !== _x( 'on', 'Lato font: on or off', 'gaastra' ) ) {
	$query_args = array(
            'family' => urlencode( 'Roboto:300,400,500,700|Lora:400,400italic,700' ),
            'subset' => urlencode( 'latin,latin-ext' ),
        );
        $font_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
    }
    return $font_url;
}


function gaastra_scripts() {
    // Add fonts, used in the main stylesheet.
    wp_enqueue_style( 'gaastra-roboto', gaastra_font_url(), array(), null );

    // Add Genericons font, used in the main stylesheet.
    //wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.0.3' );

    // Load our main stylesheet.
    wp_enqueue_style( 'gaastra-style', get_stylesheet_uri() );
    /*

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

    if ( is_singular() && wp_attachment_is_image() ) {
        wp_enqueue_script( 'twentyfourteen-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20130402' );
    }

    if ( is_active_sidebar( 'sidebar-3' ) ) {
        wp_enqueue_script( 'jquery-masonry' );
    }

    if ( is_front_page() && 'slider' == get_theme_mod( 'featured_content_layout' ) ) {
        wp_enqueue_script( 'twentyfourteen-slider', get_template_directory_uri() . '/js/slider.js', array( 'jquery' ), '20131205', true );
        wp_localize_script( 'twentyfourteen-slider', 'featuredSliderDefaults', array(
            'prevText' => __( 'Previous', 'gaastra' ),
            'nextText' => __( 'Next', 'gaastra' )
        ) );
    }

    wp_enqueue_script( 'twentyfourteen-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20150315', true );

    */

}

add_action('wp_enqueue_scripts', 'gaastra_scripts');



function gaastra_post_thumbnail() {
    if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
        return;
    }

    the_post_thumbnail( 'large' );
}



function twentyfifteen_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Widget Area', 'gaastra' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'gaastra' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'twentyfifteen_widgets_init' );



function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '1');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
function readMostViewed(){
    $args = array(
        'post_type'  => 'gaastrablog',
        'meta_key' => 'post_views_count',
        'meta_query' => array(
            array(
                'key' => 'post_views_count',
                'compare' => 'EXISTS',
            ),
        ),
        'orderby' => 'meta_value',
        'order' => 'DESC',
        'posts_per_page' => 3
    );
    $mostQuery = new WP_Query($args); //var_dump($mostQuery);
    
    if($mostQuery->have_posts()){ echo 'van';
        while (have_posts()){
            the_post(); ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php
        }
    }else{
        echo 'nincs';
    }
    wp_reset_query();
}

function mostViewedBlogposts(){
    global $wpdb;
    
    $query = "SELECT p.ID, p.post_title 
                FROM wp_postmeta m
                LEFT JOIN wp_posts p
                ON p.ID = m.post_id
                WHERE m.meta_key = 'post_views_count'
                ORDER BY m.meta_value DESC
                LIMIT 0,3";
    
    $posts = $wpdb->get_results($query);
    
    $popular = '<div class="most_viewed">';
    
    foreach ($posts as $post) {
        setup_postdata($post);
        $id = $post->ID;
        $title = $post->post_title;
        $thumbnail = get_the_post_thumbnail($id, 'thumbnail');
        
            $popular .= '<div class="row">';
                $popular .= '<div class="holder clearfix">';
                $popular .= '<div class="col-lg-6 col-md-6 col-sm-6">';
                    $popular .= $thumbnail;
                $popular .= '</div>';
                $popular .= '<div class="col-lg-6 col-md-6" col-sm-6>';
                    $popular .= '<h3><a href="' . get_permalink($id) . '" title="' . $title . '">' . $title . '</a></h3>';
                $popular .= '</div>';
                $popular .= '</div>';
            $popular .= '</div>';
    }
    
    $popular .= '</div>';
    
    return $popular;
}

function blogPreview(){
    global $wpdb;
    
    $query = "SELECT p.ID, p.post_title, p.post_date 
                FROM wp_posts p
                WHERE p.post_type = 'gaastrablog'
                ORDER BY p.post_date DESC
                LIMIT 0,3";
    
    $posts = $wpdb->get_results($query);
    
    $popular = '<div class="">';
    
    foreach ($posts as $post) {
        setup_postdata($post);
        $id = $post->ID;
        $title = $post->post_title;
        $thumbnail = get_the_post_thumbnail($id, 'post-thumbnail', array('class' => 'img-responsive'));
        
            $popular .= '<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">';
                $popular .= '<div class="img-holder">';
                    $popular .= $thumbnail;
                $popular .= '</div>';
                $popular .= '<div class="holder" style="text-align: center;">';
                $popular .= '<a href="' . get_permalink($id) . '" title="' . $title . '">' . $title;
                $popular .= '<br/><span>'.mysql2date('d-m-Y', $post->post_date).'</span></a>';
                $popular .= '</div>';
            $popular .= '</div>';
    }
    
    $popular .= '</div>';
    
    return $popular;
}

