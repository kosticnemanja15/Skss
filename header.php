<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package WP_Ogitive
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>
            <?php if(is_home()) { echo bloginfo("name"); echo " | "; echo bloginfo("description"); } 
                  else { echo wp_title(" | ", false, right);} ?>
        </title>


        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

        <?php wp_head(); ?>

    </head>

    <body <?php body_class(); ?>>

        <?php if( is_front_page() ) { ?>

            <header>
              <div class="top-menu">
                <div class="container">
                  <div class="row"> 
                    <div class="col-md-12">

                            <div class="top-menu-flex">

                                <div class="top-menu-flex-left home-flex">
                                    <a href="<?php echo home_url(); ?>">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/group-2.svg">
                                    </a>
                                </div><!-- top-menu-flex-left -->

                               <div class="top-menu-flex-right">
                                <div class="nav-holder">

                                  <nav class="menu-navigation-container">
                                        <?php get_template_part('navigation'); ?>
                                  </nav>  <!-- menu-navigation-container    -->  

                                         <div id="menu-button"><i class="fa fa-bars" aria-hidden="true"></i></div>
                                </div><!-- nav-holder -->
                               </div><!-- top-menu-flex-right -->

                               <div class="top-menu-flex-facebook">
                                 <a href="https://www.facebook.com/skssofd/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook.svg"></a>
                               </div><!-- top-menu-flex-facebook -->
                           
                            </div><!-- top-menu-flex -->



                    </div><!-- col-md-12 -->
                  </div><!-- row -->  
                </div><!-- container -->
              </div><!-- top menu -->

              <?php get_template_part('slider'); ?>

               
            </header>
		
		<?php } else { ?>

            <header>
    
            <div class="top-menu menu-small">
                <div class="container">
                  <div class="row"> 
                      <div class="col-md-12">

                        <div class="top-menu-flex">

                          <div class="top-menu-flex-left">
                            <a href="<?php echo home_url(); ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/group-2.svg">
                            </a>
                            </div><!-- top-menu-flex-left -->

                           <div class="top-menu-flex-right">
                            <div class="nav-holder">
                              <nav class="menu-navigation-container">
                                <?php get_template_part('navigation'); ?>
                              </nav>  <!-- menu-navigation-container    -->               
                                     <div id="menu-button"><i class="fa fa-bars" aria-hidden="true"></i></div>
                            </div><!-- nav-holder -->
                           </div><!-- top-menu-flex-right -->

                              <div class="top-menu-flex-facebook">
                                 <a href="https://www.facebook.com/skssofd/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook.svg"></a>
                              </div><!-- top-menu-flex-facebook -->
                       
                        </div><!-- top-menu-flex -->



                      </div><!-- col-md-12 -->
                  </div><!-- row -->    
                </div><!-- container -->
            </div><!-- top menu -->

                 <div class="gradient gradient-small"></div>
                 <div class="back-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/horse-3165771-1920@2x.jpg" alt=""></div>
                     
                  <div class="container">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="header-info-small">

                            <h1>
                                <?php if (is_archive()) {
                                    the_archive_title( '<h1>', '</h1>' );
                                } elseif (is_404()) {
									echo 'Greška 404';
					 			} else {
                                    the_title();
                                }?>
                            </h1>

                        </div><!-- header-info-small -->
                      </div>
                    </div><!-- row -->
                  </div><!-- container -->


        </header>

        <?php } ?>


       