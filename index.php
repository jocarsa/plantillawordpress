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
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => -1,
                    'category_name' => 'portafolio', // Specify the category slug you want to display
                );
                $portafolio_query = new WP_Query($args);

                if ($portafolio_query->have_posts()) {
                    while ($portafolio_query->have_posts()) {
                        $portafolio_query->the_post();
                        ?>
                        <article class="entrada">
                            <?php
                            if (has_post_thumbnail()) {
                                // Display the featured image with a link to the post
                                echo '<a href="' . esc_url(get_permalink()) . '">';
                                the_post_thumbnail();
                                echo '</a>';
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
                    }

                    wp_reset_postdata(); // Reset the post data query
                }
            
            ?>
            </div>
        </article>
    <?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>