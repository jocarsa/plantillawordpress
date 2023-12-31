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
            <div id="identidad">
                <h1><?php bloginfo('name'); ?></h1>
                <h2><?php bloginfo('description'); ?></h2>
            </div>
            <nav>
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'menuprincipal', // This should match the registered menu location in your theme.
                        'menu_class'     => 'mimenu', // Add a custom CSS class for styling (optional).
                        // You can add more parameters as needed.
                    ));
                ?>
            </nav>
            <div style="clear:both;"></div>
        </header>
        <main>