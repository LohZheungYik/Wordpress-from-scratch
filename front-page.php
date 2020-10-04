<?php get_header();
?>

<div class = 'container'>
<h1><?php //echo get_bloginfo( 'name' );
/*the_title();
*/?></h1>

<?php

// if ( have_posts() ) :
//     while( have_posts() ):
//         the_post();
//         the_content();
//     endwhile;
// endif;

?>

<!-- <div class="d-flex align-items-center">
    <div>Hello</div>
</div>

<div class="d-flex justify-content-center bg-secondary mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div> -->

  <!-- <div class="widget-section">
    <?php //the_widget( 'WPShout_Favorite_Song_Widget' ); ?>
</div> -->

<div class="row">
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<div class="col-md-4" style="padding-bottom: 70px;">
            <div class="card card-body h-100">

    <h3><?php the_title(); ?></h3>
    <?php the_excerpt(); ?>
    
    
    
    </div>
    <div class="card-footer">
    <a href="<?php the_permalink();?>">Read More</a>
    </div>
    </div>
<?php endwhile; ?> 
</div>

<?php
    //previous_posts_link();
    echo paginate_links();
    //next_posts_link();
?>
<?php endif; ?>
</div>
<?php get_footer(); ?>