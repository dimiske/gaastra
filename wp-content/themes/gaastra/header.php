<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <!-- Required meta tags always come first -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <?php wp_head(); ?></head>

<body>
<div class="menu-top">
    <div class="hfeed site container">
        <header id="masthead" class="site-header row">
        <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#nav-content">
            <b>☰</b>
            </button>


        <nav class="collapse navbar-toggleable-xs" id="nav-content">

            <div class="">
                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo( 'name' ); ?>" /></a>
                <?php
                $arg = array(
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => 'nav navbar-nav pull-right',
                'menu_id' => 'primary-menu'
                );
                wp_nav_menu($arg); ?>
                </div>
            </nav>
        </header>
    </div>
</div>

<div class="menu-spacer"></div>