<?php
  /*-----------------------------------------------------------------------------
    Register Custom Menus
  -----------------------------------------------------------------------------*/
  function prelude_custom_menus() {
    register_nav_menus(
      array(
        'primary' => 'Primary Menu',
        'mobile' => 'Mobile Menu',
        'footer'  => 'Footer Menu',
        'social'  => 'Social Menu',
        'footer-one'  => 'Footer One Menu',
        'footer-two'  => 'Footer Two Menu',
        'footer-three'  => 'Footer Three Menu',
      )
    );
  }
  add_action( 'init', 'prelude_custom_menus' );

  // Social media icon menu as per http://justintadlock.com/archives/2013/08/14/social-nav-menus-part-2
  function prelude_social_menu() {
    if ( has_nav_menu( 'social' ) ) {
      wp_nav_menu(
        array(
          'theme_location' => 'social', 'container' => 'nav',
          'container_id'   => 'menu-social', 'container_class' => 'menu-social',
          'menu_id'        => 'menu-social-items', 'menu_class' => 'menu-items',
          'depth'          => 1,
          'link_before'    => '<span class="screen-reader-text">',
          'link_after'     => '</span>', 'fallback_cb' => '',
        )
      );
    }
  }
