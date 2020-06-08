<?php

$image_id = get_field('image');
$image_caption = wp_get_attachment_caption($image_id);

?>

<figure class="wp-block-image wp-block-image--is-portrait">
  <?php
    echo wp_get_attachment_image(
      $image_id,
      'large',
      false,
      null
    );
  ?>

  <?php if ($image_caption) : ?>
    <figcaption>
      <?php echo $image_caption; ?>
    </figcaption>
  <?php endif; ?>
</figure>
