<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php wp_title(); ?></title>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/css/foundation.min.css">
  <!-- <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" /> -->
  <!-- wp_head -->
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <header>
      <nav class="top-bar" data-topbar>
        <ul class="title-area">
          <li class="name">
            <h1><a href="<?php echo bloginfo('url'); ?>"><?php echo bloginfo('title'); ?></a></h1>
          </li>
          <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
        </ul>
      <section class="top-bar-section">
      <?php wp_nav_menu( 'theme_location=main_menu' ); ?>
      </section>
    </nav>
  </header>

  <div>&nbsp;</div>