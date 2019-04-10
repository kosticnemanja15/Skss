<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WP_Ogitive
 */
?>

<footer>
  <div class="container">
    <div class="footer-info">

      <div class="footer-info-logo">
        <div class="footer-info-logo-img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer-logo.svg" alt="">
        </div><!-- footer-info-logo-img -->
      </div><!-- footer-info-logo -->

      <div class="footer-info-adresa">
        <p>Paštrovićeva 2, 11000 Beograd<br>
           +381 11 357 1994, +381 64 825 96 50; skssofd@gmail.com</p>
            <p>Copyright © 2019. Savez za Konjički sport Srbije. All Rights Reserved.</p>
      </div><!-- footer-info-adresa -->

    </div><!-- footer-info -->
  </div><!-- container -->
  
</footer>



<?php wp_footer(); ?>


</body>
</html>