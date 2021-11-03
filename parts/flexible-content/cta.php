<?php

//vars
$bg_img_id = get_sub_field('background_img');
$bg_img = wp_get_attachment_image_src($bg_img_id, 'full');
$header = get_sub_field('header');
$content_img_id = get_sub_field('content_image');
$content_image = wp_get_attachment_image_src($content_img_id, 'full');
$alt_text = get_post_meta($content_img_id , '_wp_attachment_image_alt', true);
$link = get_sub_field('link');

?>

<section class="container cta" style="background:url('<?php echo $bg_img[0]; ?>') center center/cover no-repeat;">
  <div class="row">
    <div class="col-6 md-col-11 md-text-center col-centered">
      <?php if($header) : ?>
        <h2 class="cta__header">
          <?php echo $header; ?>
        </h2>
      <?php endif; ?>

      <?php if($link) : ?>
        <a class="button button--outline" href="<?php echo $link['url']; ?>">
          <?php echo $link['title']; ?>
        </a>
      <?php endif; ?>
    </div>

    <div class="col-6 md-hide sm-hide text-center cta__content-img">
      <?php if($content_image) : ?>
          <img src="<?php echo $content_image[0]; ?>" alt="<?php echo $alt_text; ?>" />
      <?php endif; ?>
    </div>
  </div>
</section>
