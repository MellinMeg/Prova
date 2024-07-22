<?php $content = view(app('sage.view'), app('sage.data'))->render(); ?>
<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ojuju:wght@200..800&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(WP_ENV); ?>>
    <?php wp_body_open(); ?>
    <?php do_action('get_header'); ?>

    <div id="app">
      <?php echo $content ?>
    </div>

    <div id="footer">
      <?php do_action('get_footer'); ?>
      <?php wp_footer(); ?>
    </div>
  </body>
</html>
