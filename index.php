<?php get_header(); ?>
<div class="contenido">
    <?php
        if (is_front_page()) {
    ?>
        <div id="banner">
            <h3>Desarrrollo personalizado de aplicaciones</h3>
            <h4>Convertimos tus proyectos en realidad</h4>
        </div>
    <?php
        } 
    ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="<?php if (is_page()) {
                            echo "pagina";
                        }else{
                            echo "entrada";
                        } ?>">
            <?php
            if (has_post_thumbnail()) {
                // Display the featured image
                the_post_thumbnail();
            }
            ?>
            <h3>
                <?php the_title(); ?>
            </h3>
                
            <div class="contenido">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>