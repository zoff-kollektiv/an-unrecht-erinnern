<footer class="footer">
  <?php wp_nav_menu([
      'theme_location' => 'footer',
      'container' => false,
  ]); ?>

  <div class="footer__sm-container">
    <a href="https://facebook.com/" aria-label="Facebook" class="footer__sm-link">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
        <rect width="20" height="20" fill="#750000" rx="1"/>
        <path fill="#FDFCFC" d="M8.58 9H7.12V7.08h1.46V5.66c0-.88.23-1.55.68-2.02.47-.47 1.16-.7 2.05-.7h1.73v1.94h-2.03v2.2h2.03V9h-2.03v8H8.58V9z"/>
      </svg>
    </a>

    <a href="https://instagram.com/" aria-label="Instagram" class="footer__sm-link">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
        <rect width="20" height="20" fill="#750000" rx="1"/>
        <circle cx="10" cy="10" r="2.5" stroke="#FDFCFC"/>
        <circle cx="13" cy="6" r="1" fill="#FDFCFC"/>
        <rect width="13" height="13" x="3.5" y="3.5" stroke="#FDFCFC" rx="2.5"/>
      </svg>
    </a>
  </div>
</footer>

<?php wp_footer(); ?>
