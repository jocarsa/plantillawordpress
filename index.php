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
                if (is_front_page()) {
                    $args = array(
                        'post_type' => 'post', // Specify the post type you want to display (e.g., 'post' for standard posts).
                        'posts_per_page' => -1, // Display all posts on the front page.
                    );
                    $front_page_query = new WP_Query($args);

                    if ($front_page_query->have_posts()) {
                        echo 'Categories: ';

                        while ($front_page_query->have_posts()) {
                            $front_page_query->the_post();
                            $categories = get_the_category();

                            if ($categories) {
                                foreach ($categories as $category) {
                                    echo '<a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a>';

                                    // Add a comma and space for multiple categories, except for the last one
                                    if ($category !== end($categories)) {
                                        echo ', ';
                                    }
                                }
                            }
                        }

                        wp_reset_postdata(); // Reset the post data query
                    }
                }
                ?>
            </div>
        </article>
    <?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>