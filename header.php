<!DOCTYPE html>
<!--[if IEMobile 7 ]><html class="no-js iem7"><![endif]-->
<!--[if lt IE 9]><html class="no-js lte-ie8"><![endif]-->
<!--[if (gt IE 8)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!-->
<html class="js video maskImage placeholder" <?php language_attributes(); ?>><!--<![endif]-->
<head>
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <title><?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?></title>
    
    <script src="<?php bloginfo('template_url'); ?>/javascripts/modernizr-2.0.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_url'); ?>/javascripts/ender.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_url'); ?>/javascripts/octopress.js" type="text/javascript"></script>

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <link href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href="http://fonts.googleapis.com/css?family=PT+Serif:regular,italic,bold,bolditalic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=PT+Sans:regular,italic,bold,bolditalic" rel="stylesheet" type="text/css">

    <?php wp_head(); ?>
</head>

<body>
    <header role="banner">
        <hgroup>
            <h1>
                <a href="<?php echo home_url() ?>/" title="<?php bloginfo( 'name' ) ?>" rel="home"><?php bloginfo( 'name' ) ?></a> 
            </h1>
            <h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
            <div class="clear"></div>
        </hgroup>
    </header>
    <nav role="navigation">
        <ul class="subscription" data-subscription="rss">
            <li><a href="/feed/" rel="subscribe-rss" title="subscribe via RSS">RSS</a></li>
        </ul>
        <?php get_search_form(); ?>
        <?php
            wp_nav_menu( array(
                'container' => false,
                'menu_class' => 'main-navigation',
                'menu' => 'Main'
            ));
        ?>
        <fieldset class="mobile-nav"><select><option value="">Navigate…</option><option value="http://melandri.net/">» Home</option><option value="http://melandri.net/about">» About</option><option value="http://melandri.net/projects">» Projects</option><option value="http://melandri.net/archives">» Archives</option><option value="http://photo.melandri.net/">» Photography</option><option value="http://melandri.net/contact">» Contact</option><option value="http://melandri.net/atom.xml">» RSS</option></select></fieldset>
    </nav>