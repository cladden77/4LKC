<?php

//vars
$header = get_sub_field('header');
$content = get_sub_field('content');
$btnToggle = get_sub_field('button_toggle');
$btn = get_sub_field('button');

// Conditional classes/styles

?>

<section class="container one-col">
  <div class="row">
    <div class="sm-col-11 col-12 columns col-centered">
      <?php if($header) : ?>
        <h2 class="text-center" data-aos="fade-up">
          <?php echo $header; ?>
        </h2>
      <?php endif; ?>
      <?php if($content) : ?>
        <div class="one-col__content">
          <?php echo $content; ?>
        </div>
      <?php endif; ?>

      <?php if( $btnToggle ) : ?>
        <div class="text-center sm-text-center">
          <a href="<?php echo esc_url($btn['url']); ?>" class="button button--primary" role="link" title="<?php echo $btn['title']; ?>">
            <?php echo $btn['title']; ?>
          </a>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>
