<!DOCTYPE html>
<html lang="is">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title>sundlaugar.is</title>

    <!-- <link rel="stylesheet" href="http://basehold.it/26"> -->

  </head>
  <body>
    <div class="language-selection">
      <?php do_action('wpml_add_language_selector'); ?>
    </div>

    <div class="language-selection-mobile">
      <?php do_action('wpml_add_language_selector'); ?>
    </div>
    <?php include('navigation.php'); ?>
    <div class="wrapper">
