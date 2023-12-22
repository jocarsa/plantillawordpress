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
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h3>
                
            <div class="contenido">
                <?php the_content(); ?>
                
            </div>
        </article>
    <?php endwhile; endif; ?>
    <?php
    // Specify the category ID or slug you want to display
    $category_to_display = '6';

    $args = array(
        'post_type' => 'post',
        'posts_per_page' => -1,
        'category_name' => $category_to_display,
    );

    $custom_query = new WP_Query($args);

    if ($custom_query->have_posts()) :
        while ($custom_query->have_posts()) :
            $custom_query->the_post();
            ?>
            <article class="entrada">
                <?php
                if (has_post_thumbnail()) {
                    // Display the featured image
                    the_post_thumbnail();
                }
                ?>
                <h3>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h3>

                <div class="contenido">
                    <?php the_content(); ?>
                </div>
            </article>
            <?php
        endwhile;
    endif;

    wp_reset_postdata(); // Reset the custom query
    ?>
</div>
<?php get_footer(); ?>