<?php
/**
 * Header template part
 *
 * Template part used globaly
 *
 * @package Prelude Plus
 * @author Malkin Creative
 * @since 0.0.1
 */
 // Variables
?>

<div class="container header">
  <div class="row row--full-width row--justify-content-center">
    <div class="col-3 md-col-2 sm-col-10 header__logo-wrap">
      <a href="<?php echo home_url(); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/logo--primary.svg" alt="4L Foundation" />
      </a>
    </div>
    <div class="col-6 md-col-6 sm-col-6 sm-hide text-right header__navigation-wrap">
      <?php // Primary Menu
        wp_nav_menu( array('theme_location' => 'primary', 'container' => 'nav', 'container_class' => 'primary-nav') );
      ?>
    </div>
    <div class="col-3 md-col-4 sm-col-2 sm-hide text-right header__utility-wrap">
      <a class="button button--primary" data-remodal-target="contact" href="#">Donate</a>
    </div>

  <?php // Small Navigation ?>
    <div class="sm-col-2 nifty-nav-wrap sm-only">
      <a href="#" id="nifty-nav-toggle"><span></span></a>
    </div>
  </div>


  <div class="nifty-panel">
    <div class="container">
      <div class="row">
        <?php // Mobile Menu
          wp_nav_menu(array('theme_location' => 'mobile', 'container' => 'nav', 'container_class' => 'mobile-nav'));
        ?>
      </div>
    </div>
  </div>

</div>
