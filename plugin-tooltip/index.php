<?php

class Tooltip {
  public function __construct() {
    add_action('init', [$this, 'initialize_js']);
    add_action('enqueue_block_editor_assets', [$this, 'enqueue_scripts']);
  }

  public function initialize_js() {
    $file = '/plugin-tooltip/build/index.js';

    wp_register_script(
      "tooltip-plugin",
      get_template_directory_uri() . $file,
      array( 'wp-rich-text', 'wp-blocks', 'wp-element', 'wp-editor' ),
      filemtime( get_template_directory() . $file )
    );
  }

  public function enqueue_scripts() {
    wp_enqueue_script( 'tooltip-plugin' );
  }
}

?>
