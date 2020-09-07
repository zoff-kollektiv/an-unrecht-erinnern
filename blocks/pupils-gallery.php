<figure class="wp-block-gallery">
  <h2 class="wp-block-gallery__title">

  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 160 68">
    <defs>
      <filter id="pupils_a" x="0" y="0">
        <feOffset result="offOut" in="SourceAlpha"/>
        <feGaussianBlur result="blurOut" in="offOut" stdDeviation="2"/>
        <feBlend in="SourceGraphic" in2="blurOut"/>
      </filter>
    </defs>
    <path d="M45.4 9.6a3 3 0 013-3h65a3 3 0 013 3v32a3 3 0 01-3 3h-65a3 3 0 01-3-3v-32z" fill="#2b2b2b" filter="url(#pupils_a)"/>
    <circle cx="52.4" cy="13.6" r="3.2" fill="#2b2b2b" stroke="#e0e0e0" stroke-width="1.5"/>
    <path d="M33.1 61.1h-27l22.2-41c.2-.3.5-.5.9-.5l33.9 1.9c.5 0 .9.5.9 1v3.1c0 .6-.4 1-1 1H47.9l21.4 1.9c.5 0 .9.5.9 1v2.2c0 .5-.4 1-1 1l-21.3 1 21.4 1.9c.5 0 .9.5.9 1v3.1c0 .6-.4 1-1 1H47.9l17.3 1.9c.5.1.9.5.9 1v2.2c0 .6-.4 1-1 1H42.4a1 1 0 00-.9.5l-8.4 13.8zm93.5 0h27L131.3 20c-.1-.3-.4-.4-.7-.5l-32.5-5.8c-.5-.1-.9.2-1.1.6l-1 2.4a1 1 0 00.6 1.3l18.8 6.5-.2 1.9-24.7 2.1c-.5 0-.9.5-.9 1v2.2c0 .5.4 1 1 1l21.3 1-21.4 1.9c-.5 0-.9.5-.9 1v3.1c0 .6.4 1 1 1h21.3l-17.3 1.9c-.5.1-.9.5-.9 1v2.2c0 .6.4 1 1 1h22.7c.4 0 .9.5.9.5l8.3 13.8z" filter="url(#pupils_a)" fill="#e0e0e0"/>
  </svg>

    <?php
    $title = get_field('title');

    if ($title) {
        echo $title;
    } else {
        echo 'Beiträge';
    }
    ?>
  </h2>

  <ul class="blocks-gallery-grid">
    <?php foreach (get_field('gallery') as $image_id):
        $image_caption = wp_get_attachment_caption($image_id); ?>
      <li class="blocks-gallery-item">
        <figure>
          <?php echo wp_get_attachment_image(
              $image_id,
              'large',
              false,
              null
          ); ?>

          <?php if ($image_caption): ?>
            <figcaption>
              <?php echo $image_caption; ?>
            </figcaption>
          <?php endif; ?>
        </figure>
      </li>
    <?php
    endforeach; ?>
  </ul>
</figure>
