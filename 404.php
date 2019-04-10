<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package WP_Ogitive
 */

get_header(); ?>

<main>
	<div class="inside-text">
		<div class="container">
			<div class="row">




					<div class="col-md-9">				
						Stranica nije dostupna. Vratite se na <a href="<?php echo home_url(); ?>">početnu stranu</a> ili izaberite drugu stranu iz navigacije.
					</div><!-- col-md-9 -->

					<div class="col-md-3">
						<?php get_sidebar(); ?>	
					</div><!-- col-md-3 -->				




			</div><!-- row -->
		</div><!-- container -->
	</div>
</main>

<?php get_footer(); ?>