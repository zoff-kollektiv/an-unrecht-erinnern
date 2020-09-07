<?php
$title = get_field('title');
$type = get_field('type');
$posts = get_posts([
    'posts_per_page' => 100,
    'post_type' => $type['value'],
    'orderby' => 'menu_order',
    'order' => 'ASC',
]);

$posts = array_filter($posts, function ($post) {
    return !get_field('hide_in_navigation', $post->ID);
});
?>

<div class="cards cards--<?php echo $type['value']; ?>">
    <h2 class="cards__title">
        <?php echo $title; ?>
    </h2>

    <ul class="cards__list">
    <?php
    foreach ($posts as $post): ?>
        <li class="cards__item">
            <?php get_component('card/card', [
                'title' => $post->post_title,
                'description' =>
                    $type['value'] === 'biography' ? null : $post->post_excerpt,
                'permalink' => get_the_permalink($post->ID),
                'id' => $post->ID,
                'image_size' =>
                    $type['value'] === 'biography' ? 'card-tall' : null,
            ]); ?>
        </li>
        <?php endforeach;
    wp_reset_postdata();
    ?>

    </ul>

    <?php if ($type['value'] === 'biography') : ?>
        <?php get_component('take-part/take-part', [
            'id' => 'cards',
            'linked_page' => '/macht-mit/',
        ]); ?>
    <?php endif; ?>
</div>
