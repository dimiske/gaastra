<!DOCTYPE html><html <?php language_attributes(); ?> class="no-js"><head>    <!-- Required meta tags always come first -->    <meta charset="<?php bloginfo('charset'); ?>">    <meta name="viewport" content="width=device-width, initial-scale=1">    <meta http-equiv="x-ua-compatible" content="ie=edge">    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">    <!-- Bootstrap CSS -->    <link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">    <?php wp_head(); ?></head><body><div id="page" class="hfeed site container-fluid p-a-0 m-a-0">    <header id="masthead" class="site-header row p-a-0 m-a-0">        <nav class="navbar navbar-light navbar-fixed-top">            <div>            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo( 'name' ); ?>" /></a>            <?php             $arg = array(                'theme_location' => 'primary',                 'container' => false,                'menu_class' => 'nav navbar-nav pull-right',                 'menu_id' => 'primary-menu'            );            wp_nav_menu($arg); ?>            </div>        </nav>    </header>    </diV>    