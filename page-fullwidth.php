<?php
/*
*
* Template Name: Full Width
*
*/

get_header(); ?>


<!-- start the loop -->
<?php while ( have_posts() ) : the_post(); ?>

    
    <h1><?php the_title();?></h1>
    <?php the_post_thumbnail(); ?>
    <div class='page-content'>
        <?php the_content(); ?>
    </div>

<?php endwhile; ?>
<!-- end the loop -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>