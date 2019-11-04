<?php

$url = get_field('url');
$title = get_field('title');
$description = get_field('description');
$length = get_field('length');
$image_id = get_field('image');
?>

<a href="<?php echo $url; ?>" class="video">
  <div class="video__inner-container">
    <div class="video__image-container">
      <?php echo wp_get_attachment_image($image_id, 'video', false, [
          'class' => 'video__image',
          'loading' => 'lazy'
      ]); ?>
    </div>

    <div class="video__content">
      <div class="video__play-container">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 70" class="video__play">
          <rect width="105" height="70" x="-5px" y="0" fill="currentColor" />
          <path fill="#fff" d="M36.8257 48.8762V22.1238L58.795 35.6783 36.8257 48.8762z"/>
        </svg>

        <span class="video__length">
          <?php echo $length; ?>
        </span>
      </div>

      <h3 class="video__title">
        <?php echo $title; ?>
      </h3>
      <p class="video__description">
        <?php echo $description; ?>
      </p>
    </div>
  </div>
</a>
