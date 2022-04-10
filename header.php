<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>


</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'coolmat'); ?></a>

    <header id="masthead" class="site-header">
      <div class="header-inner container">

        <div class="site-branding">
          <img class="logo" src="<?php bloginfo('template_url') ?>/assets/coolmat_logo.svg" alt="Cool Matt logo">
        </div><!-- .site-branding -->

        <nav id="site-navigation" class="main-navigation">
          <?php
          wp_nav_menu(
            array(
              'theme_location' => 'menu-1',
              'menu_id'        => 'primary-me+nu',
            )
          );
          ?>
        </nav>


        <div class="language-select" id="language-selector"><a lang="ko-KR" hreflang="ko-KR" href="<?php echo site_url('/ko') ?>" id='kor'>KOR</a>| <a id='eng' lang="en-US" hreflang="en-US" href="<?php echo site_url() ?>">ENG</a></div>
      </div>

    </header>
