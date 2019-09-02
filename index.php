<?php

$header_css_class = 'header';

if (has_post_thumbnail()) {
    $header_css_class = 'hero';
}
?>

<?php get_header(); ?>

<main class="main">
  <?php if (have_posts()):
      while (have_posts()):
          the_post(); ?>

  <header class="<?php echo $header_css_class; ?>">
    <?php the_post_thumbnail('header', [
        'class' => $header_css_class . '__image'
    ]); ?>

    <div class="<?php echo $header_css_class; ?>__content">
      <h1 class="<?php echo $header_css_class; ?>__title">
        <?php the_title(); ?>
      </h1>

      <div class="<?php echo $header_css_class; ?>__excerpt">
        <?php the_excerpt(); ?>
      </div>
    </div>
  </header>

  <div class="block-content">
    <?php the_content();
      endwhile;
  endif; ?>
  </div>
</main>

<?php get_footer(); ?>

</body>
</html>
