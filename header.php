<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>
<body>
<header style="background: url(<?php header_image(); ?>); color: #<?php header_textcolor(); ?>;">
    <div class="black-background"></div>
    <h1 class="site-name"><?php bloginfo('name'); ?></h1>
    <h3 class="site-name"><?php bloginfo('description'); ?></h3>
    <?php if ( is_active_sidebar( 'header_widget_block' ) ) : ?>
        <div id="header_widget_block" class="sidebar">
            <?php dynamic_sidebar( 'header_widget_block' ); ?>
        </div>
    <?php endif; ?>
</header>
    
