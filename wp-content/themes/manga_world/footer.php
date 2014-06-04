<footer>
    <div class="content_footer container-fluid">
        <div class="row">
            <div class="col-md-2 col-md-offset-2">
            <?php wp_nav_menu(array(
                'theme_location'    => 'footer_nav_left',
                'menu_class'        => 'menu_footer_left',
                'container'         => false,
            )); ?>
            </div>
            <div class="col-md-2 col-md-offset-1">
            <?php wp_nav_menu(array(
                'theme_location'    => 'footer_nav_right',
                'menu_class'        => 'menu_footer_right',
                'container'         => false,
            )); ?>
            </div>
            <div class="col-md-offset-3 col-md-2 sociaux">
                <ul>
                    <li><a href=""><img src="<?php bloginfo('template_directory'); ?>/images/facebook.jpg" alt="" width="100px" height="27px"/></a></li>
                    <li><a href=""><img src="<?php bloginfo('template_directory'); ?>/images/twitter.jpg" alt="" width="100px" height="27px"/></a></li>
                </ul>
            </div>

        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4 copyright">
                <p>&#169; 2014 - Manga World</p>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
