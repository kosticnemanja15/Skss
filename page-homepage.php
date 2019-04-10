<?php
/*
*
* Template Name: Homepage
*
*/

get_header(); ?>


<!-- start the loop -->
<?php while ( have_posts() ) : the_post(); ?>

    
<main>
    <div class="aktuelnosti">
        <div class="container">
            <h2><?php the_field('s2-naslov');?></h2>
            <div class="row">

            	<?php 
				// WP_Query arguments
				$args = array (
					'category_name'          => 'aktuelnosti',
					'posts_per_page'         => '3',
				);

				// The Query
				$query = new WP_Query( $args );

				// The Loop
				if ( $query->have_posts() ) {
					while ( $query->have_posts() ) {
						$query->the_post(); ?>
						

						
                <div class="col-md-4">
                    <div class="aktuelnosti-box">
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
                        </div><!-- aktuelnosti-box-img  --> 

                             <div class="aktuelnosti-box-text">
                              	<p><?php echo get_the_date();?></p>
                              	<h3>
                              	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                              	</h3>
                              	<?php the_excerpt(); ?>
                             </div>

                            <a href="<?php the_permalink(); ?>" class="btn btn-dark">Više informacija</a>

                    </div><!-- aktuelnosti-box -->
                </div><!-- col-md-4 -->		


					<?php }
				} else { ?>
					
					Stranica nije dostupna. Vratite se na <a href="<?php echo home_url(); ?>">početnu stranu</a>.

				<?php }

				// Restore original Post Data
				wp_reset_postdata();
				?>


            </div><!-- row -->
        </div><!-- container -->
    </div><!-- aktuelnosti -->
</main>

<section class="discipline">

    <img src="<?php the_field('s3-pozadina');?>" alt="background" class="discipline-img">

     <div class="discipline-info">
       <div class="container">
         <div class="row">
           <div class="col-md-5">
             <div class="discipline-info-text">
               <h2><?php the_field('s3-naslov');?></h2>
                <p><?php the_field('s3-opis');?></p>
                <a href="<?php the_field('s3-link');?>" class="btn btn-empty">Vise informacija</a>
             </div><!-- discipline-info-text -->
           </div><!-- col-md-5 -->

           <div class="col-md-7">
             <div class="discipline-boxes">               

             		<?php if ( have_rows( 's3-ikonice' ) ) : ?>             			
             				<?php while ( have_rows( 's3-ikonice' ) ) : the_row(); ?>             					
             					<div class="discipline-box">
				                      <a href="<?php the_sub_field('link'); ?>">
				                      	<img src="<?php the_sub_field('ikonica'); ?>" alt='icon'>
				                      </a>
			                    </div><!-- discipline-box -->
             				<?php endwhile; ?>             			
             		<?php endif; ?>             

               
             </div><!-- discipline boxes -->
           </div><!-- col-md-7 -->

         </div><!-- row -->
       </div><!-- container -->
     </div><!-- discipline-info -->


</section><!-- discipline -->


<section class="partneri">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2><?php the_field('s4-naslov'); ?></h2>
        <p><?php the_field('s4-opis'); ?></p>

        		<div class="partneri-images">
                    <?php if ( have_rows( 's4-logotipi' ) ) : ?>             			
             				<?php while ( have_rows( 's4-logotipi' ) ) : the_row(); ?>             					
             					
				                  <div class="partneri-images-box">
							              <a href="<?php the_sub_field('link'); ?>">
							              	<img src="<?php the_sub_field('logotip'); ?>" alt="icon">
							              </a>
							            </div><!-- partneri-images-box -->
			               
             				<?php endwhile; ?>             			
             		<?php endif; ?>   
             	</div><!-- partneri-images -->           
          

      </div><!-- col-md-12 -->
    </div><!-- row -->
  </div><!-- container -->
</section><!-- partneri -->



<?php endwhile; ?>
<!-- end the loop -->


<?php get_footer(); ?>