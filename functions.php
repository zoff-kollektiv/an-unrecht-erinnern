<?php
  function create_post_types() {
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
      'supports' => [
        'title',
        'revisions',
        'editor',
        'thumbnail'
      ],
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
      'supports' => [
        'title',
        'revisions',
        'editor',
        'thumbnail'
      ],
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
      'supports' => [
        'title',
        'revisions',
        'editor',
        'thumbnail'
      ],
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

  add_action('init', function () {
    create_post_types();
  });

?>
