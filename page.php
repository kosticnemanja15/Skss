<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
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



<!-- 						<button class="accordion">Section 1</button>
						<div class="panel">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						</div>

						<button class="accordion">Section 2</button>
						<div class="panel">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						</div>

						<button class="accordion">Section 3</button>
						<div class="panel">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						</div> -->

						<?php $chk = get_field('opcije');
						if ($chk == '1') { ?>

							

							<?php if ( have_rows( 'dokumenta' ) ) : ?>
								<?php while ( have_rows( 'dokumenta' ) ) : the_row(); ?>

								<div class="wide-table">

									<div class="wide-table-naslov">
										<?php

										$string = get_sub_field('naziv');
										$string2 = str_replace(' ', '', $string);
										$string2 = strtolower($string2);

										?>
										<h3 id='#<?php echo $string2; ?>'><?php echo $string; ?></h3>
									</div><!-- wide-table-naslov -->
									

									<?php if ( have_rows( 'informacije' ) ) : ?>
										<?php while ( have_rows( 'informacije' ) ) : the_row(); ?>

											<div class="wide-table-content">
												<div class="wide-table-content-text">
													<p><?php the_sub_field( 'naslov' ); ?></p>
												</div><!-- wide-table-content-text -->
												<div class="wide-table-content-link">
													<a href="<?php the_sub_field('dokument'); ?>">Preuzmite dokument</a>
												</div><!-- wide-table-content-link -->
											</div><!-- wide-table-content -->

										<?php endwhile; ?>
									<?php else : ?>
										<?php // no rows found ?>
									<?php endif; ?>

								</div><!-- wide-table -->

								<?php endwhile; ?>
							<?php else : ?>
								<?php // no rows found ?>
							<?php endif; ?>

							

						<?php } elseif ($chk == '2') { ?>


							<?php if ( have_rows( 'linkovi' ) ) : ?>
								<?php while ( have_rows( 'linkovi' ) ) : the_row(); ?>

								<div class="wide-table">

									<div class="wide-table-naslov">
										<?php

										$string = get_sub_field('naziv');
										$string2 = str_replace(' ', '', $string);
										$string2 = strtolower($string2);

										?>
										<h3 id='#<?php echo $string2; ?>'><?php echo $string; ?></h3>
									</div><!-- wide-table-naslov -->
									

									<?php if ( have_rows( 'informacije' ) ) : ?>
										<?php while ( have_rows( 'informacije' ) ) : the_row(); ?>

											<div class="wide-table-content">
												<div class="wide-table-content-text">
													<p><?php the_sub_field( 'naslov' ); ?></p>
												</div><!-- wide-table-content-text -->
												<div class="wide-table-content-link">
													<a href="<?php the_sub_field('link'); ?>">Link</a>
												</div><!-- wide-table-content-link -->
											</div><!-- wide-table-content -->

										<?php endwhile; ?>
									<?php else : ?>
										<?php // no rows found ?>
									<?php endif; ?>

								</div><!-- wide-table -->

								<?php endwhile; ?>
							<?php else : ?>
								<?php // no rows found ?>
							<?php endif; ?>


						<?php } ?>

			

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