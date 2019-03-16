<?php
/**
 * Theme Header File
 * This is the tempalte that displays all of the <head> section and everything up until `<div id="content">`.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * ### ACTIONS ###
 * theme_name_header_before - First action that is a child of <body>. Useful for Google Tag Manager's `noscript` snippet.
 * theme_name_masthead_before - Before any content in the masthead. Useful for a temporary site-wide message or promotional offer.
 * theme_name_masthead_after - After any content in the masthead. Useful for user feedback and alerts.
 *
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'theme-name' ); ?></a>
    <?php do_action('theme_name_header_before'); ?>
    <header class="site-header" id="masthead">
        <?php do_action( 'theme_name_masthead_before' ); ?>
        <div class="site-branding">
            <?php
                the_custom_logo();
                if( is_front_page() && is_home() ):
            ?>
            <h1 class="site-title">
                <a href="<?php esc_url( home_url( '/' ) ); ?>" rel="home">
                    <?php bloginfo( 'name' ); ?>
                </a>
            </h1>
            <?php else: ?>
            <p class="site-title">
                <a href="<?php esc_url( home_url( '/' ) ); ?>" rel="home">
                    <?php bloginfo( 'name' ); ?>
                </a>
            </p>
            <?php endif; ?>
        </div><!-- .site-branding -->
        <nav id="site-navigation" class="main-navigation">
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'brando-theme' ); ?></button>
            <?php
            wp_nav_menu( array(
                'theme_location' => 'menu-1',
                'menu_id'        => 'primary-menu',
            ) );
            ?>
        </nav><!-- #site-navigation -->
        <?php do_action( 'theme_name_masthead_after' ); ?>
    </header><!-- #masthead -->
    <div id="content" class="site-content">
