<div class="wp-block-vita">
  <ul class="wp-block-vita__list">
  <?php if (have_rows('entries')):
      while (have_rows('entries')):
          the_row();

      $item_css_class = '';
      $description = get_sub_field('description');

      if (strlen($description) > 100) {
        $item_css_class = 'wp-block-vita__item--long';
      }

  ?>

  <li class="wp-block-vita__item <?php echo $item_css_class; ?>">
    <div class="wp-block-vita__item-container">
      <p class="wp-block-vita__item-description">
        <strong class="wp-block-vita__item-year"><?php the_sub_field(
            'year'
        ); ?></strong>
        <?php echo $description; ?>
      </p>
    </div>
  </li>

  <?php
      endwhile;
  endif; ?>
  </ul>
</div>
