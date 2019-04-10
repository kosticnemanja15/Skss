<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Ogitive
 */

get_header(); ?>

<main>

	<div class="aktuelnosti-archive">
		<div class="container">
			<div class="row">
				<div class="col-md-12">


					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<div class="aktuelnosti-box aktuelnosti-box-flex">

							<div class="aktuelnosti-box-img">

								<?php if (in_category('obavestenje')) { 
	                        		$type = 'marker-obavestenje';
	                        	 } elseif (in_category('rezultati')) { 
	                        		$type = 'marker-rezultati';
	                        	 } elseif (in_category('izvestaj')) { 
	                        		$type = 'marker-izvestaj';
	                        	 } ?>
						
								<div class="marker <?php echo $type; ?>">
		                        	<?php the_category(' '); ?>
		                        </div>

	                            <a href="<?php the_permalink(); ?>">
	                            	<?php the_post_thumbnail('cat-thumb'); ?>
	                            </a>

                            </div><!-- aktuelnosti-box-img --> 

							<div class="aktuelnosti-box-text">
								<p><?php echo get_the_date(); ?></p>
								<h3>
                              		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                              	</h3>
								<?php the_excerpt(); ?>
								<a href="<?php the_permalink(); ?>" class="btn btn-dark">Vise informacija</a>
							</div>

						</div><!-- aktuelnosti-box -->


					<?php endwhile;  ?>

				</div><!-- col-md-12 -->  

			</div><!-- row -->
			<div class='pagination'>
				<?php the_posts_pagination( array(
		            'mid_size'  => 1,
		            'prev_text' => __( 'Prethodna', 'textdomain' ),
		            'next_text' => __( 'Sledeća', 'textdomain' ),
		        ) ); ?>
			</div>
		</div><!-- container -->   
	</div><!-- aktuelnosti-archive -->


</main>


<?php get_footer(); ?>