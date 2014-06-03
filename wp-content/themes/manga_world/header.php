<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet/less" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.less">
    <!-- Optional theme -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-theme.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/less-1.7.0.min.js" type="text/javascript"></script>
</head>
<body>
<header>
    <?php if (is_single()) : ?>
        <p><a href="<?php bloginfo('home'); ?>"><?php bloginfo('name'); ?></a></p>
        <p><?php bloginfo('description'); ?></p>
    <?php else : ?>
        <h1><a href="<?php bloginfo('home'); ?>"><?php bloginfo('name'); ?></a></h1>
        <h2><?php bloginfo('description'); ?></h2>
    <?php endif; ?>

    <?php wp_nav_menu(array(
        'theme_location'    => 'header_nav',
        'menu_class'        => 'main_menu',
        'container'         => false,
    )); ?>

</header>