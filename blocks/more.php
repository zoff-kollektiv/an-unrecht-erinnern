<?php

$ICON = [
    'internal' => '
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 45 60">
      <path fill="#2B2B2B" d="M0 1c0-.6.4-1 1-1h43c.6 0 1 .4 1 1v3H0V1z"/>
      <path fill="#F2F2F2" d="M0 14h45v45c0 .6-.4 1-1 1H1a1 1 0 01-1-1V14z"/>
      <path fill="url(#paint0_radial)" d="M0 4h45v10H0z"/>
      <path fill="#F2F2F2" d="M9 8h27v2H9z"/>
      <path fill="#535353" d="M6 20h33v1H6zM6 24h33v1H6zM6 28h33v1H6zM6 32h22v1H6zM6 39h33v1H6zM6 43h33v1H6zM6 47h33v1H6zM6 51h22v1H6z"/>
      <circle cx="3" cy="2" r="1" fill="#C4C4C4"/>
      <circle cx="6" cy="2" r="1" fill="#C4C4C4"/>
      <circle cx="9" cy="2" r="1" fill="#C4C4C4"/>
      <defs>
        <radialGradient id="paint0_radial" cx="0" cy="0" r="1" gradientTransform="matrix(-43.0263 0 0 -1744.68 22.4 9.2)" gradientUnits="userSpaceOnUse">
          <stop stop-color="#C50000"/>
          <stop offset="1" stop-color="#750000"/>
        </radialGradient>
      </defs>
    </svg>
  ',

    'book' => '
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 45 60">
      <rect width="45" height="60" fill="#B11414" rx="1"/>
      <g filter="url(#filter0_i)">
        <path fill="url(#paint0_linear)" d="M2 52h41v6H2z"/>
      </g>
      <path fill="#F2F2F2" d="M7 19h33v5H7v-5zM13 28h20v2H13z"/>
      <path fill="#750000" d="M2 0h2v50H2zM43 52h2v6h-2zM2 58h43v.7c0 .7-.6 1.3-1.3 1.3H2v-2z"/>
      <defs>
        <linearGradient id="paint0_linear" x1="43" x2="2.1" y1="58" y2="51.5" gradientUnits="userSpaceOnUse">
          <stop stop-color="#FDFCFC"/>
          <stop offset="1" stop-color="#E0E0E0"/>
        </linearGradient>
        <filter id="filter0_i" width="41.5" height="6.5" x="2" y="52" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
          <feFlood flood-opacity="0" result="BackgroundImageFix"/>
          <feBlend in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
          <feColorMatrix in="SourceAlpha" result="hardAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
          <feOffset dx=".5" dy=".5"/>
          <feGaussianBlur stdDeviation=".4"/>
          <feComposite in2="hardAlpha" k2="-1" k3="1" operator="arithmetic"/>
          <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
          <feBlend in2="shape" result="effect1_innerShadow"/>
        </filter>
      </defs>
    </svg>
  '
]; ?>

<hr class="hr" />

<h2>weiterlesen</h2>

<?php if (have_rows('links')): ?>
  <ul class="wp-block-more">
    <?php while (have_rows('links')):

        the_row();

        if (get_row_layout() == 'book') {
            $link = get_sub_field('link');
            $icon = $ICON['book'];
            $title = get_sub_field('title');
            $description = get_sub_field('description');
        } else {
            $post_id = get_sub_field('link');
            $post = get_post($post_id);

            $title = $post->post_title;
            $description = $post->post_excerpt;
            $link = get_permalink($post_id);
            $icon = $ICON['internal'];
        }
        ?>
      <li>
        <a href="<?php echo $link; ?>" class="wp-block-more__item">
          <?php echo $icon; ?>

          <div class="wp-block-more__item-content-container">
            <h3 class="wp-block-more__item-title"><?php echo $title; ?></h3>
            <p class="wp-block-more__item-description">
              <?php echo $description; ?>
            </p>
          </div>
        </a>
      </li>
    <?php
    endwhile; ?>
  </ul>
<?php endif; ?>
