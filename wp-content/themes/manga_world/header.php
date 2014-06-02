<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Manga World</title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
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
</header>