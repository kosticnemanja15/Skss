<?php
/**
 * The slider for our theme.
 *
 * @package WP_Ogitive
 */
?>

<div class="gradient"></div>

     <div class="slider-home">
        <div class="swipe">

        	<?php 

			$images = get_field('s1-slideshow');
			$size = 'full'; // (thumbnail, medium, large, full or custom size)

			if( $images ): ?>
			        <?php foreach( $images as $image ): ?>

			        		<div>
			        			<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
			        		</div>			            	

			        <?php endforeach; ?>
			<?php endif; ?>

        </div><!-- swipe -->
     </div><!-- slider-home -->


<div class="home-info-box">
     <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="home-logo">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="logo">                  
                </div><!-- home logo -->
                <h1><?php the_field('s1-naslov'); ?></h1>
                <p><?php the_field('s1-opis'); ?></p>
            </div><!-- col-md-12 -->
        </div><!-- row -->

        <div class="home-options">

        	<?php if ( have_rows( 's1-ikonice' ) ) : ?>
        			<?php while ( have_rows( 's1-ikonice' ) ) : the_row(); ?>

        			<a href="<?php the_sub_field('link'); ?>" target="_blank">
                        <div class="home-options-box">
	                    <div class="home-options-box-img">
	                        
	                        	<img src="<?php the_sub_field('ikonica') ?>" alt="<?php the_sub_field('naziv'); ?>">

	                        <p><?php the_sub_field('naziv'); ?></p>
	                    </div>
            		    </div><!-- home options box -->
                    </a>
        			
        			<?php endwhile; ?>
        	<?php endif; ?>

            
            
            
                       
        </div><!-- home-options -->

     <div class="row">
         <div class="col-md-12">
             <a href="<?php the_field('s1-link'); ?>" class="btn btn-orange" target="_blank">Prijavi se</a>
         </div>
     </div>
     </div><!-- container -->

</div><!-- home-info-box -->