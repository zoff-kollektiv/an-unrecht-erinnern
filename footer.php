<footer class="footer">
  <?php wp_nav_menu([
      'theme_location' => 'footer',
      'container' => false,
  ]); ?>

  <div class="footer__sm-container">
    <a href="https://www.facebook.com/hausderwannseekonferenz/" aria-label="Folge dem Haus der Wannsee-Konferenz auf Facebook" class="footer__sm-link">
      <svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
        <rect width="20" height="20" rx="1" fill="#750000"/><path d="M8.58 17H11V9h2.03V7.08h-2.03v-2.2h2.03V2.94h-1.73c-1.78 0-2.73.97-2.73 2.72v1.42H7.12V9h1.46v8z" fill="#FDFCFC"/>
      </svg>
    </a>

    <a href="https://twitter.com/hausderwannsee1" aria-label="Folge dem Haus der Wannsee-Konferenz auf Twitter" class="footer__sm-link">
      <svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
        <rect width="20" height="20" rx="1" fill="#750000"/><path d="M7.69 15.9a8.56 8.56 0 008.69-8.94c.6-.42 1.11-.95 1.52-1.55-.55.24-1.14.4-1.76.47a3.03 3.03 0 001.35-1.66c-.6.34-1.25.6-1.94.73A3.08 3.08 0 0010.25 7c0 .24.04.47.09.69a8.73 8.73 0 01-6.3-3.14 2.96 2.96 0 00.94 4.01c-.5-.01-.97-.15-1.38-.37v.03a3.02 3.02 0 002.45 2.95 3.1 3.1 0 01-1.38.05 3.05 3.05 0 002.86 2.09A6.2 6.2 0 013 14.55a8.76 8.76 0 004.69 1.35" fill="#fff"/>
      </svg>
    </a>
  </div>
</footer>

<?php wp_footer();
?>
