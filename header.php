<!doctype html>

<html lang="de">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>
      <?php wp_title(' - ', true, 'right'); ?>
      <?php bloginfo('name'); ?>
    </title>

    <link rel="shortcut icon" href="<?php bloginfo(
        'template_directory'
    ); ?>/favicon.ico" />

    <?php wp_head(); ?>
  </head>

  <body>
    <?php wp_admin_bar_render();
?>
