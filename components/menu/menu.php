<div class="header-menu-container js-menu">
  <details class="<?php echo $location; ?>-menu">
    <summary class="<?php echo $location; ?>-menu__toggle">
      <div>
        <svg aria-hidden="true" focusable="false" role="img" class="<?php echo $location; ?>-menu__bars" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
          <path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path>
        </svg>

        <svg aria-hidden="true" focusable="false" role="img" class="<?php echo $location; ?>-menu__close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 18">
          <path fill="#828282" d="M14.8491.1875l2.1213 2.1213L2.1212 17.1581l-2.1213-2.1214z" />
          <path fill="#828282" d="M.0002 2.3088L2.1215.1875l14.8492 14.8493-2.1213 2.1213z" />
        </svg>

        <span class="<?php echo $location; ?>-menu__toggle-label">Menü</span>
      </div>
    </summary>

    <ul class="<?php echo $location; ?>-menu__inner" data-scroll-lock-scrollable>
      <li class="<?php echo $location; ?>-menu__block">
        <div class="cards">
          <h2 class="cards__title">
            Biografien
          </h2>

          <ul class="cards__list">
            <?php
            $biographies = get_posts([
                'posts_per_page' => 100,
                'post_type' => 'biography',
                'orderby' => 'menu_order',
                'order' => 'ASC',
            ]);

            foreach ($biographies as $biography): ?>
              <li class="cards__item">
                <?php get_component('card/card', [
                    'title' => $biography->post_title,
                    'permalink' => get_the_permalink($biography->ID),
                    'id' => $biography->ID,
                    'image_size' => 'card-tall',
                ]); ?>
              </li>

            <?php endforeach;
            ?>
          </ul>

          <?php get_component('take-part/take-part', [
              'id' => 'menu',
              'linked_page' => '/macht-mit/',
          ]); ?>
        </div>
      </li>

      <li>
        <div class="cards">
          <h2 class="cards__title">
            Orte
          </h2>

          <ul class="cards__list">
            <?php
            $places = get_posts([
                'posts_per_page' => 100,
                'post_type' => 'place',
                'orderby' => 'menu_order',
                'order' => 'ASC',
            ]);

            $places = array_filter($places, function ($place) {
                return !get_field('hide_in_navigation', $place->ID);
            });

            foreach ($places as $place): ?>
              <li class="cards__item">
              <?php get_component('card/card', [
                  'title' => $place->post_title,
                  'description' => $place->post_excerpt,
                  'permalink' => get_the_permalink($place->ID),
                  'id' => $place->ID,
              ]); ?>
              </li>
            <?php endforeach;
            ?>
          </ul>
        </div>
      </li>

      <li>
        <div class="cards cards--topic">
          <h2 class="cards__title">
            Themen
          </h2>

          <ul class="cards__list">
            <?php
            $topics = get_posts([
                'posts_per_page' => 100,
                'post_type' => 'topic',
                'orderby' => 'menu_order',
                'order' => 'ASC',
            ]);

            $topics = array_filter($topics, function ($topic) {
                return !get_field('hide_in_navigation', $topic->ID);
            });

            foreach ($topics as $topic): ?>
              <li class="cards__item">
              <?php get_component('card/card', [
                  'title' => $topic->post_title,
                  'description' => $topic->post_excerpt,
                  'permalink' => get_the_permalink($topic->ID),
                  'id' => $topic->ID,
              ]); ?>
              </li>
            <?php endforeach;
            ?>
          </ul>
        </div>
      </li>
    </ul>
  </details>

  <?php if (!is_front_page()): ?>
    <a href="/" class="header-menu-container__home-link">Startseite</a>
  <?php endif; ?>
</div>
