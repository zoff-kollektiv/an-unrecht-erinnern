<div class="wp-block-vita">
  <ul class="wp-block-vita__list">
  <?php if (have_rows('entries')):
      while (have_rows('entries')):
          the_row(); ?>

  <li class="wp-block-vita__item">
    <div class="wp-block-vita__item-container">
      <p class="wp-block-vita__item-description">
        <strong class="wp-block-vita__item-year"><?php the_sub_field(
            'year'
        ); ?></strong>
        <?php the_sub_field('description'); ?>
      </p>
    </div>
  </li>

  <?php
      endwhile;
  endif; ?>
  </ul>
</div>
