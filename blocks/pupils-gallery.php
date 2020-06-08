<figure class="wp-block-gallery">
  <h2 class="wp-block-gallery__title">
    <svg viewBox="0 0 149 65" fill="none" xmlns="http://www.w3.org/2000/svg">
      <g filter="url(#filter0_d)">
        <path d="M40 13a3 3 0 013-3h65a3 3 0 013 3v32a3 3 0 01-3 3H43a3 3 0 01-3-3V13z" fill="#2B2B2B"/>
        <circle cx="47" cy="17" r="3.25" fill="#2B2B2B" stroke="#E0E0E0" stroke-width="1.5"/>
        <path d="M27.77 64.5H.74c-.1 0 19.58-36.42 22.24-40.97a1 1 0 01.92-.5l33.87 1.94a1 1 0 01.95 1v3.12a1 1 0 01-1 1h-15.2l21.36 1.94a1 1 0 01.9 1v2.17a1 1 0 01-.95 1l-21.3.97 21.35 1.94a1 1 0 01.9 1v3.15a1 1 0 01-1 1H42.53l17.33 1.92a1 1 0 01.89 1v2.15a1 1 0 01-1 1H37.03a1 1 0 00-.87.5L27.77 64.5zM121.23 64.5h27.03l-22.32-41.1a1 1 0 00-.69-.48L92.8 17.14a1 1 0 00-1.1.6l-1 2.37a1 1 0 00.6 1.33l18.78 6.52-.24 1.94-24.7 2.13a1 1 0 00-.92 1v2.17a1 1 0 00.96 1l21.3.97-21.35 1.94a1 1 0 00-.9 1v3.15a1 1 0 001 1h21.26l-17.33 1.92a1 1 0 00-.89 1v2.15a1 1 0 001 1h22.71c.36 0 .87.5.87.5l8.39 13.67z" fill="#E0E0E0"/>
      </g>

      <defs>
        <filter id="filter0_d" x="30" y="0" width="91" height="58" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
          <feFlood flood-opacity="0" result="BackgroundImageFix"/>
          <feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
          <feOffset/>
          <feGaussianBlur stdDeviation="5"/>
          <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.2 0"/>
          <feBlend mode="multiply" in2="BackgroundImageFix" result="effect1_dropShadow"/>
          <feBlend in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
        </filter>
      </defs>
    </svg>

    <?php the_field('title'); ?>
  </h2>

  <ul class="blocks-gallery-grid">
    <?php foreach(get_field('gallery') as $image_id) :
      $image_caption = wp_get_attachment_caption($image_id);
    ?>
      <li class="blocks-gallery-item">
        <figure>
          <?php echo wp_get_attachment_image($image_id, 'large', false, null); ?>

          <?php if ($image_caption): ?>
            <figcaption>
              <?php echo $image_caption; ?>
            </figcaption>
          <?php endif; ?>
        </figure>
      </li>
    <?php endforeach; ?>
  </ul>
</figure>
