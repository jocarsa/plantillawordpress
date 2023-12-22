<?php

    function register_menus() {
        register_nav_menu('menuprincipal', __('Primary Menu'));
        register_nav_menu('redessociales', 'Navegación secundaria');
    }

    add_action('after_setup_theme', 'register_menus');
    add_theme_support('post-thumbnails');

    
?>