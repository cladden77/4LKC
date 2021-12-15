<?php

//vars

$quote = get_sub_field('quote');
$name = get_sub_field('quote_name');

?>

<section class="container block-quote">
  <div class="row">
    <div class="col-12 text-center col-centered">
      <?php if($quote) : ?>
        <h2>
          <?php echo $quote; ?>
        </h2>
      <?php endif; ?>

      <?php if($name) : ?>
        <h3>
          - <?php echo $name; ?>
        </h3>
      <?php endif; ?>
    </div>
  </div>
</section>
