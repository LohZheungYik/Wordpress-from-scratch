<?php get_header(); ?>

<div class="container pt-5 pb-5">
    <h1><?php /*echo get_bloginfo( 'name' );*/ echo single_cat_title(); ?></h1>

    <?php 
    
    if(have_posts()) :
        while(have_posts()): 
            the_post();
        ?>
            <h3><?php the_title(); ?></h3>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>">Read More</a>
        <?php
        endwhile; 
    endif; 
    
    ?>

</div>
<?php get_footer(); ?>