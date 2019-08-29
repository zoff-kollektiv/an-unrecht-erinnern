<ul class="vita">
<?php if (have_rows('entries')):
    while (have_rows('entries')):
        the_row(); ?>

<li class="vita__item">
  <div class="vita__item-container">
    <p class="vita__item-description">
      <strong class="vita__item-year"><?php the_sub_field('year'); ?></strong>
      <?php the_sub_field('description'); ?>
    </p>
  </div>
</li>

<?php
    endwhile;
endif; ?>
</ul>
