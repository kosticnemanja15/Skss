<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package WP_Ogitive
 */
?>



<div class="inside-banner redtop">
	<h4>Skss Baza</h4>
	<div class="inside-banner-box">
      <ul class="red-ul">
		  
		  <?php

			// check if the repeater field has rows of data
			if( have_rows('nav_skss','options') ):

				// loop through the rows of data
				while ( have_rows('nav_skss','options') ) : the_row(); 
		  
			$link = get_sub_field('link');
		  	$link_url = $link['url'];
		  	$link_title = $link['title'];
		  	$link_target = $link['target'] ? $link['target'] : '_self';
			?>

					<li><a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">» <?php the_sub_field('tekst'); ?></a></li>

				<?php endwhile;

			else :

				echo 'No link';

			endif;

			?>		  

      </ul>
	</div>
</div><!-- inside-banner-top -->



<div class="inside-banner">

	<h4>Vesti</h4>

	<div class="inside-banner-box">

		<?php 
		// WP_Query arguments
		$args = array (
			'category_name'          => 'aktuelnosti',
			'posts_per_page'         => '4',
		);

		// The Query
		$query = new WP_Query( $args );

		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post(); ?>
				

				<?php if (in_category('obavestenje')) { 
		    		$type = 'marker-obavestenje';
		    	 } elseif (in_category('rezultati')) { 
		    		$type = 'marker-rezultati';
		    	 } elseif (in_category('izvestaj')) { 
		    		$type = 'marker-izvestaj';
		    	 } else { 
					$type = '';
				} ?>

				<div class="marker <?php echo $type; ?>">
		        	<?php the_category(' '); ?>
		        </div>

				<p><?php echo get_the_date();?></p>
				<a href="<?php echo get_the_date();?>">
					<h3><?php the_title(); ?></h3>
				</a>     		


			<?php }
		} else { ?>
			
			Stranica nije dostupna. Vratite se na <a href="<?php echo home_url(); ?>">početnu stranu</a>.

		<?php }

		// Restore original Post Data
		wp_reset_postdata();
	?>

		
	</div><!-- inside-banner-box -->


</div><!-- inside-banner -->

<div class="img-banner">
	<?php if ( have_rows( 'baneri','options' ) ) : ?>

			<?php while ( have_rows( 'baneri','options' ) ) : the_row(); ?>				
				<a href="<?php the_sub_field( 'link' ); ?>" target="_blank">
					<img src="<?php the_sub_field( 'slika' ); ?>" alt="baner">
				</a>
			<?php endwhile; ?>

	<?php endif; ?>
</div><!-- img-banner -->