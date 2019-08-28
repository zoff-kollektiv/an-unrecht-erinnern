<?php get_header(); ?>

<main class="main">
  <?php if (have_posts()):
      while (have_posts()):
          the_post(); ?>

  <header class="hero">
    <?php the_post_thumbnail('header', [
        'class' => 'hero__image'
    ]); ?>

    <div class="hero__content">
      <h1 class="hero__title">
        <?php the_title(); ?>
      </h1>

      <div class="hero__excerpt">
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
