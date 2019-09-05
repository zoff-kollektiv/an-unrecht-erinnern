<a href="<?php echo $permalink; ?>" class="card">
  <?php echo get_the_post_thumbnail($id, 'card', [
      'class' => 'card__image'
  ]); ?>

  <div class="card__content">
    <h2 class="card__title"><?php echo $title; ?></h2>
    <?php if (isset($description) && $description != null) : ?>
      <p class="card__description"><?php echo $description; ?></p>
    <?php endif; ?>
  </div>
</a>
