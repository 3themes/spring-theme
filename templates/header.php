<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <title><?php wp_title('|', true, 'right'); ?></title>
    <meta name="description" content="<?php wp_title(); echo ' | '; bloginfo( 'description' ); ?>" />
    <meta charset="utf-8">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- ICONS -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
    <!-- 57x57 (precomposed) for iPhone 3GS, pre-2011 iPod Touch and older Android devices -->
    <!-- <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-precomposed.png"> -->
    <!-- 72x72 (precomposed) for 1st generation iPad, iPad 2 and iPad mini -->
    <!-- <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-72x72-precomposed.png"> -->
    <!-- 114x114 (precomposed) for iPhone 4, 4S, 5 and post-2011 iPod Touch -->
    <!-- <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-114x114-precomposed.png"> -->
    <!-- 144x144 (precomposed) for iPad 3rd and 4th generation -->
    <!-- <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-144x144-precomposed.png"> -->


    <!-- STARTUP IMAGES -->
    <!-- iPhone 3GS, pre-2011 iPod Touch -->
    <!-- <link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/images/startup/startup-320x460.png" media="screen and (max-device-width:320px)"> -->
    <!-- iPhone 4, 4S and 2011 iPod Touch-->
    <!-- <link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/images/startup/startup-640x920.png" media="(max-device-width:480px) and (-webkit-min-device-pixel-ratio:2)"> -->
    <!-- iPhone 5 and 2012 iPod Touch -->
    <!-- <link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/images/startup/startup-640x1096.png" media="(max-device-width:548px) and (-webkit-min-device-pixel-ratio:2)"> -->
    <!-- iPad landscape -->
    <!-- <link rel="apple-touch-startup-image" sizes="1024x748" href="<?php echo get_template_directory_uri(); ?>/images/startup/startup-1024x748.png" media="screen and (min-device-width:481px) and (max-device-width:1024px) and (orientation:landscape)"> -->
    <!-- iPad Portrait -->
    <!-- <link rel="apple-touch-startup-image" sizes="768x1004" href="<?php echo get_template_directory_uri(); ?>/images/startup/startup-768x1004.png" media="screen and (min-device-width:481px) and (max-device-width:1024px) and (orientation:portrait)"> -->
    <!-- iPad landscape -->
    <!-- <link rel="apple-touch-startup-image" sizes="2048x1496" href="/content/images/startup/startup-2048x1496.png" media="screen&#32;and&#32;(min-device-width:481px)&#32;and&#32;(max-device-width:1024px)&#32;and&#32;(orientation:landscape)&#32;and&#32;(-webkit-min-device-pixel-ratio:2)" /> -->
    <!-- iPad Portrait -->
    <!-- <link rel="apple-touch-startup-image" sizes="1536x2008" href="/content/images/startup/startup-1536x2008.png" media="screen&#32;and&#32;(min-device-width:481px)&#32;and&#32;(max-device-width:1024px)&#32;and&#32;(orientation:portrait)&#32;and&#32;(-webkit-min-device-pixel-ratio:2)" /> -->


    <!-- MICROSOFT/WIN8/WIN8.1 SPECIFIC -->
    <!-- 8.1: Caption of pinned tile -->
    <!-- <meta name="application-name" content="Squeaky Clean WordPress Boilerplate"> -->
    <!-- 8/8.1: Background color of the tile. If excluded, will take the prominent color from the icon -->
    <!-- <meta name="msapplication-TileColor" content="#FFFFFF"/> -->
    <!-- 8.1: 70x70 1x logo for "tiny" tile -->
    <!-- <meta name="msapplication-square70x70logo" content="<?php echo get_template_directory_uri(); ?>/images/ms/tiny.png"> -->
    <!-- 8.1: 150x150 1x logo for "small" or "square" tile -->
    <!-- <meta name="msapplication-square150x150logo" content="<?php echo get_template_directory_uri(); ?>/images/ms/square.png"> -->
    <!-- 8.1: 310x150 1x logo for "wide" tile -->
    <!-- <meta name="msapplication-wide310x150logo" content="<?php echo get_template_directory_uri(); ?>/images/ms/wide.png"> -->
    <!-- 8.1: 310x310 1x logo for "large" tile -->
    <!-- <meta name="msapplication-square310x310logo" content="<?php echo get_template_directory_uri(); ?>/images/ms/large.png"> -->
    <!-- 8.1: Frequency in minutes. URL of RSS feed to fetch content from. The second meta is for pulling from multiple RSS feeds. Only use ONE. -->
    <!-- <meta name="msapplication-notification" content="frequency=60;polling-uri=http://url.to.rss"> -->
    <!-- <meta name="msapplication-notification" content="frequency=60;polling-uri=http://url.to.rss; polling-uri2=http://url.to.second.rss; polling-uri3=http://url.to.third.rss"> -->
    <!-- 8: 144x144 icon if pinned to the start screen -->
    <!-- <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/images/ms/legacy-metro-tile.png"/> -->

    <?php wp_head(); ?>

    <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
</head>
<body <?php body_class(); ?>>
    <header class="header-main">
        <nav class="nav-quicklinks" role="navigation">
            <?php
            if (has_nav_menu('quicklink_navigation')) :
                wp_nav_menu(array('theme_location' => 'quicklink_navigation', 'menu_class' => 'quicklink-menu'));
            endif;
            ?>
        </nav>
        <section class="open-button-wrapper">
            <button id="openMainMenu" class="open-main-menu open-button">Open Main Menu</button>
            <button id="openSidebar" class="open-sidebar open-button">Open Sidebar</button>
        </section>
        <section class="search" role="search">
            <?php get_search_form(); ?>
        </section>
        <h1 class="blog-name">
            <!-- TODO: Create option in theme customizer to upload new logo -->
            <a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>
        </h1>
        <nav class="nav-main" role="navigation">
            <?php
              if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'main-menu'));
              endif;
            ?>
        </nav>
    </header>