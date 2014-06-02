<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Manga World</title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
</head>
<body>
<header>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="css/bootstrap-theme.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="css/bootstrap.min.js"></script>

    <?php if (is_single()) : ?>
        <p><a href="<?php bloginfo('home'); ?>"><?php bloginfo('name'); ?></a></p>
        <p><?php bloginfo('description'); ?></p>
    <?php else : ?>
        <h1><a href="<?php bloginfo('home'); ?>"><?php bloginfo('name'); ?></a></h1>
        <h2><?php bloginfo('description'); ?></h2>
    <?php endif; ?>
</header>