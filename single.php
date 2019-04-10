<?php
/**
 * The template for displaying all single posts.
 *
 * @package WP_Ogitive
 */
get_header(); ?>

<main>
  <div class="inside-text">
	<div class="container">
		<div class="row">

			<!-- start the loop -->
			<?php while ( have_posts() ) : the_post(); ?>

						<div class="col-md-9">		
							<?php the_content(); ?>
						</div><!-- col-md-9 -->

						<div class="col-md-3">
							<?php get_sidebar(); ?>	
						</div><!-- col-md-3 -->		

			<?php endwhile; ?>
			<!-- end the loop -->

		</div><!-- row -->
	</div><!-- container -->
  </div>
</main>


<?php get_footer(); ?>