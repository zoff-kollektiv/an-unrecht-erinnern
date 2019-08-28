<?php get_header(); ?>

<main class="main">
  <div class="block-content">
    <?php
      if (have_posts()) {
        while (have_posts()) {
          the_post();
          the_title();
          the_content();
        }
      }
    ?>
  </div>
</main>

<?php get_footer(); ?>

</body>
</html>
