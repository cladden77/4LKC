<?php // Close main ?>
</main>


<?php

// Variables


 $facebook = get_field('facebook','option');
 $instagram = get_field('instagram','option');
 $twitter = get_field('twitter','option');
 $linkedin = get_field('linkedin','option');
 $youtube = get_field('youtube','option');

 ?>

<footer>
  <section class="container footer">
    <div class="row row--align-items-top">
      <div class="col-4 sm-col-10 sm-col-centered sm-text-center">
        <!-- Footer Content and menu here -->
        <a href="<?php echo home_url(); ?>">
          <img class="footer__logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/logo--white.svg" alt="4L Foundation" />
        </a>
        <p class="sm-text-center">Paragraph Sample. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec ullamcorper nulla non metus auctor fringilla. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis mollis, est non commodo luctus.</p>
      </div>
      <div class="col-2 text-left sm-text-center sm-col-10 sm-col-centered footer-nav">
        <h3>About Us</h3>
        <hr />
        <?php // Footer Social Menu
          wp_nav_menu( array('theme_location' => 'footer-one', 'container' => 'nav', 'container_class' => 'footer-one') );
        ?>
      </div>
      <div class="col-2 text-left sm-text-center sm-col-10 sm-col-centered footer-nav">
        <h3>Shepard's Care</h3>
        <hr />
        <?php // Footer Social Menu
          wp_nav_menu( array('theme_location' => 'footer-two', 'container' => 'nav', 'container_class' => 'footer-two') );
        ?>
      </div>
      <div class="col-2 text-left sm-text-center sm-col-10 sm-col-centered footer-nav">
        <h3>Get Involved</h3>
        <hr />
        <?php // Footer Social Menu
          wp_nav_menu( array('theme_location' => 'footer-three', 'container' => 'nav', 'container_class' => 'footer-three') );
        ?>
      </div>
    </div>
  </section>
  <section class="container footer footer--copywright">
    <div class="row row--align-items-center">
      <!-- Footer Copywright and social-->
      <div class="col-6 sm-col-12 sm-text-center footer--copywright__wrap text-left">
        <h5 class="copyright">&copy; <?php echo date("Y"); ?> 4L Foundation All Rights Reserved.</h5>
      </div>
      <div class="col-6 text-right sm-col-10 sm-text-center sm-col-centered">
        <?php if($facebook) : ?>
        <a href="<?php echo $facebook; ?>" target="_blank">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook.svg" alt="4L Foundation Facebook" />
        </a>
        <?php endif; ?>
        <?php if($instagram) : ?>
        <a href="<?php echo $instagram; ?>" target="_blank">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Instagram.svg" alt="4L Foundation Instagram" />
        </a>
        <?php endif; ?>
        <?php if($twitter) : ?>
        <a href="<?php echo $twitter; ?>" target="_blank">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/twitter.svg" alt="4L Foundation Twitter" />
        </a>
        <?php endif; ?>
      </div>
    </div>
  </section>
</footer>

<?php get_template_part('parts/partials/remodal'); ?>

<?php wp_footer(); ?>
</body>
</html>
