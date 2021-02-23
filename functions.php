<?php

function nextjswordpress_features()
{
    register_nav_menu("main_menu", "Mainnavigation");
    register_nav_menu("footer_menu_1", "Footernavigation 1");
    register_nav_menu("footer_menu_2", "Footernavigation 2");
    register_nav_menu("footer_menu_3", "Footernavigation 3");
    register_nav_menu("footer_menu_4", "Footernavigation 4");

    add_theme_support( 'post-thumbnails' );
}

add_action("after_setup_theme", "nextjswordpress_features");


// Custom Types

function nextjswordpress_types()
{
}

add_action("init", "nextjswordpress_types");
