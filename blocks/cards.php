<?php
$title = get_field('title');
$type = get_field('type');
$posts = get_posts([
    'posts_per_page' => 100,
    'post_type' => $type['value']
]);
?>

<section class="cards">
    <h2 class="cards__title">
        <?php echo $title; ?>
    </h2>

    <ul class="cards__list">
    <?php
    foreach ($posts as $post):
        setup_postdata($post); ?>
        <li class="cards__item">
            <?php get_component('card/card', [
                'title' => get_the_title(),
                'description' => get_the_excerpt(),
                'permalink' => get_the_permalink(),
                'thumbnail' => get_the_post_thumbnail(null, 'card')
            ]); ?>
        </li>
        <?php
    endforeach;
    wp_reset_postdata();
    ?>

    </ul>
</section>
