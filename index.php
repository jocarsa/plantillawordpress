<?php
// Plantilla Wordpress Jose Vicente
// (c)2023 Jose Vicente Carratala
?>

<!doctype html>
<html>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">  
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php wp_title(); ?></title>
        
    </head>
    <body <?php body_class(); ?>>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            Hola
        <?php endwhile; endif; ?>
    </body>
</html>
