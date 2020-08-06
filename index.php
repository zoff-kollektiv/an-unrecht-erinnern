<?php

$header_css_class = 'header';

if (has_post_thumbnail() && !is_front_page()) {
    $header_css_class = 'hero';
}
?>

<?php get_header(); ?>

<div class="main">
  <?php if (have_posts()):
      while (have_posts()):
          the_post(); ?>

  <header class="<?php echo $header_css_class; ?>">
    <?php if (!is_front_page()): ?>
      <?php if (has_post_thumbnail()): ?>
          <div class="<?php echo $header_css_class; ?>__image-container">
            <?php
            $header_image = get_field('header_image');
            $image_attrs = [
                'class' => $header_css_class . '__image',
            ];

            if ($header_image) {
                echo wp_get_attachment_image(
                    $header_image,
                    'header',
                    false,
                    $image_attrs
                );
            } else {
                the_post_thumbnail('header', $image_attrs);
            }
            ?>
          </div>
      <?php endif; ?>
    <?php endif; ?>

    <?php get_component('menu/menu', [
        'location' => 'header',
    ]); ?>

    <div class="<?php echo $header_css_class; ?>__language-switch-container">
      <?php get_component('menu/languages'); ?>
    </div>

    <div class="<?php echo $header_css_class; ?>__content">
      <h1 class="<?php echo $header_css_class; ?>__title">
        <?php the_title(); ?>
      </h1>

      <div class="<?php echo $header_css_class; ?>__excerpt">
        <?php the_excerpt(); ?>
      </div>
    </div>
  </header>

  <?php if (is_front_page()): ?>
    <img src="<?php bloginfo(
        'template_directory'
    ); ?>/static/images/camp-empty.png" class="camp-image" />
  <?php endif; ?>

  <main class="block-content">
    <?php the_content();
      endwhile;
  endif; ?>
  </main>
</div>

<?php get_footer(); ?>

</body>
</html>
