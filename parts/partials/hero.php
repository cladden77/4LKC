<?php

  // variables
  $bg_img_id = get_field('background_image');
  $bg_img = wp_get_attachment_image_src($bg_img_id, 'full');
  $bg_img_position = get_field('background_position');
  $header = get_field('header');
  $link = get_field('cta_button');


?>


<section class="container hero" style="background:url('<?php echo $bg_img[0]; ?>') center <?php echo $bg_img_position; ?>/cover no-repeat;">
  <div class="row hero__row">
    <div class="col-8 md-col-11 lg-col-left md-col-centered md-text-center hero__row__content">
      <?php if($header) : ?>
        <h1 class="hero__header">
          <?php echo $header; ?>
        </h1>
      <?php endif; ?>
      <div>
        <?php if($link) : ?>
        <a class="button button--outline hero-button" href="<?php echo $link['url']; ?>">
          <?php echo $link['title']; ?>
        </a>
      </div>
      <?php endif; ?>
    </div>
  </div>
</section>
