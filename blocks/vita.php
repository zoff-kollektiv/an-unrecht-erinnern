<ul class="vita">
<?php if (have_rows('entries')):
    while (have_rows('entries')):
        the_row(); ?>

<li class="vita__item">
  <p>
    <strong class="vita__year"><?php the_sub_field('year'); ?></strong>
    <?php the_sub_field('description'); ?>
  </p>
</li>

<?php
    endwhile;
endif; ?>
</ul>
