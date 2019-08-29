<?php

$url = get_field('url');
$title = get_field('title');
$description = get_field('description');
$length = get_field('length');
$image_id = get_field('image');
?>

<a href="<?php echo $url; ?>" class="video">
  <?php echo wp_get_attachment_image($image_id, 'video', false, [
      'class' => 'video__image',
      'loading' => 'lazy'
  ]); ?>

  <div class="video__content">
    <span class="video__length">
      <?php echo $length; ?>
    </span>

    <h3 class="video__title">
      <?php echo $title; ?>
    </h3>
    <p class="video__description">
      <?php echo $description; ?>
    </p>
  </div>
</a>
