<?php
//vars
$header = get_sub_field('header');

$fifty_fifty_toggle = get_sub_field('fifty-fifty_toggle');
$link_one = get_sub_field('link_one');
$img_id = get_sub_field('image_one');
$image_one = wp_get_attachment_image_src($img_id, 'fifty-fifty-cards');
$alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true);
$content_header_one = get_sub_field('content_header_one');

$link_two = get_sub_field('link_two');
$img_id_two = get_sub_field('image_two');
$image_two = wp_get_attachment_image_src($img_id_two, 'fifty-fifty-cards');
$alt_text_two = get_post_meta($img_id_two , '_wp_attachment_image_alt', true);
$content_header_two = get_sub_field('content_header_two');


// Conditional classes/styles

?>

<section class="container fifty-fifty-cards">
  <div class="row row--align-items-center">
    <div class="sm-col-11 col-10 col-centered">
        <?php if($header) : ?>
          <div class="col-12">
            <h2 class="text-center">
              <?php echo $header; ?>
            </h2>
          </div>
        <?php endif; ?>
    </div>
  </div>


    <div class="row row--align-items-center">
        <div class="col-5 sm-col-8 sm-col-centered text-center col-centered fifty-fifty-cards__content" style="background:url('<?php echo $image_one[0]; ?>') center center/cover no-repeat;">
          <a href="<?php echo esc_url($link_one['url']); ?>" title="<?php echo $link_one['title']; ?>">
          <?php if($content_header_one) : ?>
            <h3><?php echo $content_header_one; ?></h3>
          <?php endif; ?>
          </a>
        </div>
    </div>

    <?php if( $fifty_fifty_toggle ) : ?>
      <div class="row row--align-items-center">
          <div class="col-5 sm-col-8 sm-col-centered text-center col-centered fifty-fifty-cards__content stretch" style="background:url('<?php echo $image_one[0]; ?>') center center/cover no-repeat;">
            <a href="<?php echo esc_url($link_one['url']); ?>" title="<?php echo $link_one['title']; ?>">
            <?php if($content_header_one) : ?>
              <h3><?php echo $content_header_one; ?></h3>
            <?php endif; ?>
            </a>
          </div>

          <div class="col-5 sm-col-8 sm-col-centered text-center col-centered fifty-fifty-cards__content stretch" style="background:url('<?php echo $image_two[0]; ?>') center center/cover no-repeat;">
            <a href="<?php echo esc_url($link_two['url']); ?>" title="<?php echo $link_two['title']; ?>">
              <?php if($content_header_two) : ?>
                <h3><?php echo $content_header_two; ?></h3>
              <?php endif; ?>
            </a>
          </div>
        </div>

      <?php endif; ?>

</section>
