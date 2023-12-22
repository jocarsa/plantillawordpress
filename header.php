<?php
// Plantilla Wordpress Jose Vicente
// (c)2023 Jose Vicente Carratala
?>

<!doctype html>
<html>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">  
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php bloginfo('name'); ?></title>
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    </head>
    <body <?php body_class(); ?>>
        <header>
            <h1><?php bloginfo('name'); ?></h1>
            <h2><?php bloginfo('description'); ?></h2>
            <nav>
                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'primary',
                            'menu_class'     => 'nav-menu',
                        )
                    );
                ?>
            </nav>
        </header>
        <main>