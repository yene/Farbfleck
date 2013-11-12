<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title><?php bloginfo('name'); ?><?=is_front_page() ? "":  wp_title() ; ?></title>
  <meta name="description" content="<?php bloginfo( 'description' ); ?>">
  <!-- Normalize.css is a customisable CSS file that makes browsers render all elements more consistently and in line with modern standards. -->
  <link rel="stylesheet" media="screen" href="normalize.css">
  <link rel="stylesheet" media="screen" href="<?php echo get_stylesheet_uri(); ?> ">
  <link rel="shortcut icon" type="image/png" href="/wp-content/themes/farbfleck/favicon.png">
</head>
<body>
  <header>
    <div class="logo">
      <h1>Atelier Farbfleck</h1>
      <h2><?=is_front_page() ? bloginfo('description') :  wp_title( "", true, "" ); ?> </h2>
    </div>
    <nav>
      <ul>
        <?php wp_list_pages('title_li='); ?>
      </ul>
    </nav>
  </header>
  <br style="clear: both;">