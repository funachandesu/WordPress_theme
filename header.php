<!DOCTYPE html>
<html lang="ja">
  <head>
	<script data-ad-client="ca-pub-5865642493477528" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	  <!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-T2DDHH4');</script>
		<!-- End Google Tag Manager -->

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      href="https://fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap"
      rel="stylesheet"
    />
    <?php wp_head();?>
    <title><?php bloginfo(‘name’); ?></title>
  </head>
  <body>
	  <!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T2DDHH4"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
    <header>
      <div class="header-logo">
        <a href="<?php echo esc_url(home_url('')); ?>">
          <img src="<?php echo get_template_directory_uri() ?>/img/header/logo.svg" alt="山口県宇部市を拠点にしたWeb制作「Fhase」のロゴ" >
        </a>
      </div>
      <!--header-logo-->

      <ul class="pc-header">
      <?php
    $args = array(
      'menu' => 'Menu 1',
      'container' => 'nav',
    );
    wp_nav_menu( $args );
   ?>
        </ul>
      <!--pc-header-->

      <div id="nav-drawer">
        <input id="nav-input" type="checkbox" class="nav-unshown" />
        <label id="nav-open" for="nav-input"><span></span></label>
        <label class="nav-unshown" id="nav-close" for="nav-input"></label>
        <div id="nav-content">
          <ul>
          <?php
            $args = array(
              'menu' => 'Menu 1',
              'container' => 'nav',
            );
            wp_nav_menu( $args );
          ?>
           </ul>
        </div>
        <!--nav-drawer-->
      </div>
      <!--nav-content-->
    </header>