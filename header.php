<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <div class="container-wrapper">

        <div class="side-menu">
            <div class="hamburder-menu">
                <a href="#">
                    <img src="http://localhost/winterchiropractor_wp/wp-content/uploads/2021/02/burger.svg" alt="Menu Burger">
                    <span>Menu</span>
                </a>
            </div>
        </div>

        <nav id="primary-menu">
            <div class="close">X</div>
            <?php
                wp_nav_menu( array( 
                    'theme_location' => 'primary', 
                    'container_class' => 'primary-menu'
                ) ); 
            ?>
        </nav>

        <div class="content-wrapper">

            <div id="header">
                <div class="container">
                    <div class="header-row">
                        <?php echo get_template_part( 'template-parts/header/site' , 'branding'); ?>
                        <div class="phone-number">
                            <a href="tel: 406-339-2225">Call today 406-339-2225</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="main-content">
                <main id="content">