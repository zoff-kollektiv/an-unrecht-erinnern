<?php

$ICON = [
    'internal' => '
    <svg width="67" height="65" viewBox="0 0 67 65" fill="none" xmlns="http://www.w3.org/2000/svg"><g filter="url(#filter0_d)"><path fill="#fff" d="M10 10h47v45H10z"/><path d="M37 20l12 13-12 13-3-2 8-10-24 1v-4h24l-8-9 3-2zm20-10H10v45h47V10z" fill="#B11414"/></g><defs><filter id="filter0_d" x="0" y="0" width="67" height="65" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset/><feGaussianBlur stdDeviation="5"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.2 0"/><feBlend mode="multiply" in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter></defs></svg>
    ',

    'book' => '
    <svg width="67" height="65" viewBox="0 0 67 65" fill="none" xmlns="http://www.w3.org/2000/svg"><g filter="url(#filter0_d)"><path fill="#fff" d="M10 10h47v45H10z"/><path d="M26 21l19 1 1 18h-4l-1-13-17 18-3-3 17-17H26v-4zm31-11H10v45h47V10z" fill="#B11414"/></g><defs><filter id="filter0_d" x="0" y="0" width="67" height="65" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset/><feGaussianBlur stdDeviation="5"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.2 0"/><feBlend mode="multiply" in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter></defs></svg>
    ',

    'download' => '
    <svg width="67" height="65" viewBox="0 0 67 65" fill="none" xmlns="http://www.w3.org/2000/svg"><g filter="url(#filter0_d)"><path fill="#fff" d="M10 10h47v45H10z"/><path d="M47 36L33.7 48 19.9 36.3l2.6-3 9.4 8.3-.4-24.3h4.1l-.3 24 9.1-8.4 2.7 3zm10-26H10v45h47V10z" fill="#B11414"/></g><defs><filter id="filter0_d" x="0" y="0" width="67" height="65" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset/><feGaussianBlur stdDeviation="5"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.2 0"/><feBlend mode="multiply" in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter></defs></svg>
    ',
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

            <?php if (strlen(trim($description)) >= 1): ?>
              <p class="wp-block-more__item-description">
                <?php echo $description; ?>
              </p>
            <?php endif; ?>
          </div>
        </a>
      </li>
    <?php
    endwhile; ?>
  </ul>
<?php endif;
?>
