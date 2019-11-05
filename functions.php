<?php

require_once 'plugin-tooltip/index.php';

$BLOCKS = [
    [
        'name' => 'video',
        'title' => __('Video'),
        'render_callback' => 'acf_block_render_callback',
        'category' => 'common',
        'icon' => 'format-video',
        'keywords' => ['video', 'youtube'],
        'post_types' => ['page', 'biography', 'topic', 'place'],
        'mode' => 'auto',
        'supports' => [
            'align' => false
        ]
    ],

    [
        'name' => 'vita',
        'title' => __('Vita'),
        'render_callback' => 'acf_block_render_callback',
        'category' => 'common',
        'icon' => 'editor-ul',
        'keywords' => ['vita', 'Lebenslauf', 'cv'],
        'post_types' => ['biography'],
        'mode' => 'auto',
        'supports' => [
            'align' => false
        ]
    ],

    [
        'name' => 'cards',
        'title' => __('Cards'),
        'render_callback' => 'acf_block_render_callback',
        'category' => 'common',
        'icon' => 'excerpt-view',
        'keywords' => ['card'],
        'post_types' => ['page'],
        'mode' => 'auto',
        'supports' => [
            'align' => false
        ]
    ],

    [
        'name' => 'intro',
        'title' => __('Intro'),
        'render_callback' => 'acf_block_render_callback',
        'category' => 'common',
        'icon' => 'editor-aligncenter',
        'keywords' => ['intro'],
        'post_types' => ['page'],
        'mode' => 'auto',
        'supports' => [
            'align' => false
        ]
    ],

    [
        'name' => 'more',
        'title' => __('Read more'),
        'render_callback' => 'acf_block_render_callback',
        'category' => 'common',
        'icon' => 'editor-ul',
        'keywords' => ['more', 'read'],
        'post_types' => ['page', 'biography', 'topic', 'place'],
        'mode' => 'auto',
        'supports' => [
            'align' => false
        ]
    ]
];

new Tooltip();

function acf_block_render_callback($block)
{
    $slug = str_replace('acf/', '', $block['name']);

    if (file_exists(get_theme_file_path("blocks/{$slug}.php"))) {
        include get_theme_file_path("blocks/{$slug}.php");
    }
}

function acf_init_blocks()
{
    global $BLOCKS;

    if (function_exists('acf_register_block_type')) {
        foreach ($BLOCKS as $block) {
            acf_register_block_type($block);
        }
    }
}

function allowed_block_types()
{
    global $BLOCKS;

    $acf_blocks = array_map(function ($block) {
        return "acf/{$block['name']}";
    }, $BLOCKS);

    $allowed_core_blocks = [
        'core/heading',
        'core/paragraph',
        'core/image',
        'core/gallery',
        'core/quote'
    ];

    return array_merge($acf_blocks, $allowed_core_blocks);
}

function create_post_types()
{
    register_post_type('biography', [
        'labels' => [
            'name' => 'Biografien',
            'singular_name' => 'Biografie',
            'menu_name' => 'Biografien',
            'all_items' => 'Alle Biografien',
            'view_item' => 'Biografie ansehen',
            'add_new_item' => 'Neue Biografie',
            'add_new' => 'Biografie erstellen',
            'edit_item' => 'Biografie bearbeiten',
            'update_item' => 'Biografie aktualisieren'
        ],
        'supports' => ['title', 'excerpt', 'revisions', 'editor', 'thumbnail'],
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'show_in_rest' => true,
        'has_archive' => false,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'rewrite' => [
            'slug' => 'biografien',
            'with_front' => false,
            'feeds' => false
        ]
    ]);

    register_post_type('topic', [
        'labels' => [
            'name' => 'Themen',
            'singular_name' => 'Thema',
            'menu_name' => 'Themen',
            'all_items' => 'Alle Themen',
            'view_item' => 'Thema ansehen',
            'add_new_item' => 'Neues Thema',
            'add_new' => 'Thema erstellen',
            'edit_item' => 'Thema bearbeiten',
            'update_item' => 'Thema aktualisieren'
        ],
        'supports' => ['title', 'excerpt', 'revisions', 'editor', 'thumbnail'],
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'show_in_rest' => true,
        'has_archive' => false,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'rewrite' => [
            'slug' => 'themen',
            'with_front' => false,
            'feeds' => false
        ]
    ]);

    register_post_type('place', [
        'labels' => [
            'name' => 'Orte',
            'singular_name' => 'Ort',
            'menu_name' => 'Orte',
            'all_items' => 'Alle Orte',
            'view_item' => 'Ort ansehen',
            'add_new_item' => 'Neuer Ort',
            'add_new' => 'Ort erstellen',
            'edit_item' => 'Ort bearbeiten',
            'update_item' => 'Ort aktualisieren'
        ],
        'supports' => ['title', 'excerpt', 'revisions', 'editor', 'thumbnail'],
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'show_in_rest' => true,
        'has_archive' => false,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'rewrite' => [
            'slug' => 'orte',
            'with_front' => false,
            'feeds' => false
        ]
    ]);
}

function cleanup_admin()
{
    remove_menu_page('edit.php');
    remove_menu_page('edit-comments.php');
}

function get_component($path, array $params = [])
{
    extract($params, EXTR_SKIP);
    require get_template_directory() . '/components/' . $path . '.php';
}

function register_custom_nav_menus()
{
    register_nav_menus(array(
        'header' => 'Navigation',
        'footer' => 'Footer'
    ));
}

add_post_type_support('page', 'excerpt');
add_theme_support('post-thumbnails');
add_action('after_setup_theme', 'register_custom_nav_menus');
add_action('admin_menu', 'cleanup_admin');
add_action('acf/init', 'acf_init_blocks');
add_filter('allowed_block_types', 'allowed_block_types');
add_action(
    'wp_print_styles',
    function () {
        wp_dequeue_style('wp-block-library');
    },
    100
);

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_script(
        'styles',
        get_template_directory_uri() . '/dist/index.js',
        array(),
        filemtime(get_template_directory() . '/dist/index.js'),
        false
    );
});

add_action('init', function () {
    create_post_types();
});

?>
