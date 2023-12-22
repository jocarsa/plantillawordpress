<?php

    function register_menus() {
        register_nav_menu('menuprincipal', __('Primary Menu'));
    }
    add_action('after_setup_theme', 'register_menus');
    add_theme_support('post-thumbnails');
?>