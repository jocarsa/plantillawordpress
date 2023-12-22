<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h3><?php the_title(); ?></h3>
<div class="contenido">
    <?php the_content(); ?>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>        
        
