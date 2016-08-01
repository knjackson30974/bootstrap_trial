<?php

/* Add two custom menu */ 
function register_my_menus() { 
    register_nav_menus( 
        array( 'top-menu' => 'Top Menu' ) ); 
    } 
    add_action( 'after_setup_theme', 'register_my_menus' ); 