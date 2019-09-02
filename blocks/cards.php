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
    foreach ($posts as $post): ?>
        <li class="cards__item">
            <?php get_component('card/card', [
                'title' => $post->post_title,
                'description' => $post->post_excerpt,
                'permalink' => get_the_permalink($post->ID),
                'id' => $post->ID
            ]); ?>
        </li>
        <?php endforeach;
    wp_reset_postdata();
    ?>

    </ul>
</section>
