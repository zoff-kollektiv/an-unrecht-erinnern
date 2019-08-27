<?php
$BLOCKS = [
    [
        'name' => 'video',
        'title' => __('Video'),
        'render_callback' => 'acf_block_render_callback',
        'category' => 'common',
        'icon' => 'format-video',
        'keywords' => ['video', 'youtube'],
        'post_types' => ['page', 'biographies', 'topics', 'places'],
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
        'post_types' => ['biographies'],
        'mode' => 'auto',
        'supports' => [
            'align' => false
        ]
    ]
];

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
    register_post_type('biographies', [
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

    register_post_type('topics', [
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

    register_post_type('places', [
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

add_theme_support('post-thumbnails');

add_action('acf/init', 'acf_init_blocks');
add_filter('allowed_block_types', 'allowed_block_types');

add_action('init', function () {
    create_post_types();
});

?>
