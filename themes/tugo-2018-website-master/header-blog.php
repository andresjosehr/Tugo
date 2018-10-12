<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <title><?php
      if (function_exists('is_tag') && is_tag()) {
         single_tag_title("Archive for tag &quot;"); echo '&quot; - '; }
      elseif (is_archive()) {
         wp_title(''); echo ' Archive - '; }
      elseif (is_search()) {
         echo 'Search &quot;'.wp_specialchars($s).'&quot; - '; }
      elseif (!(is_404()) && (is_single()) || ( !is_page('Homepage') )) {
         wp_title(''); echo ' - '; }
      elseif (is_404()) {
         echo '404 Not Found - '; }
      if (is_home() || is_page('Homepage') ) {
         bloginfo('name'); echo ' - '; bloginfo('description'); }
      else {
          bloginfo('name'); }
      if ($paged > 1) {
         echo ' - page '. $paged; }?></title>

  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="icon" type="image/png" href="<?= get_template_directory_uri() ?>/images/favicon.png" />

  <meta name="description" content=""/>
  <meta name="keywords" content=""/>
  <meta name="owner" content=""/>
  <meta name="rating" content="General"/>

  <meta property="og:title" content="CanLove | Pasea local, conecta global"/>
  <meta property="og:type" content="website"/>
  <meta property="og:url" content="https://canlove.techlatam.la/"/>
  <meta property="og:image" content="<?= get_template_directory_uri() ?>/images/OG.jpg"/>
  <meta property="og:site_name" content="CanLove | Pasea local, conecta global"/>
  <meta property="og:description" content="CanLove es una app para ayudarte a encontrar al mejor paseador, las mejores estancias y el mejor hospedaje para tu perro. Tú también puedes empezar tu carrera de CanLover con nosotros."/>

  <!--[if IE]>
  	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/ie.css" media="screen"/>
  <![endif]-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="all"/>
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <link href="<?php echo home_url(); ?>" rel="index" title="<?php bloginfo('name') ?> - <?php bloginfo('description'); ?>"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css" rel="stylesheet">
  <?php wp_head(); ?>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://kenwheeler.github.io/slick/slick/slick.js'></script>
<script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5b72dc49940588001be3235b&product=inline-share-buttons' async='async'></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120925188-1"></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-120925188-1');

  </script>

  <!-- Hotjar Tracking Code for https://www.mycanlove.com/ -->
  <script>
      (function(h,o,t,j,a,r){
          h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
          h._hjSettings={hjid:949533,hjsv:6};
          a=o.getElementsByTagName('head')[0];
          r=o.createElement('script');r.async=1;
          r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
          a.appendChild(r);
      })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
  </script>
</head>

<body <?php body_class(); ?>>
  
  <!-- Header Section -->
	<header class="header">
    <div class="container full-height container-is-gapless-table">

      <!-- Header TOP -->
      <div class="header-container full-height">
        <div class="header__logo flex-center">
         <a href="<?php echo get_site_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.svg" alt=""></a>
        </div>
        <div class="header__menu">
          <?php wp_nav_menu( array( 'theme_location' => 'blog-menu' ) ); ?>
        </div>
        <div class="flex-center">
          <div id="nav-icon3" onclick="openNav()">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
      <!-- END Header TOP -->

    </div>
  </header>
  <div class="header__separate"></div>
  <!-- END Header Section -->

  <!-- The overlay -->
  <div id="myNav" class="overlay" style="background-image: url('<?= get_template_directory_uri() ?>/images/background-menu-mobile.svg')">
    <div style="width: 100%; height: 10%;"></div>
    <!-- Button to close the overlay navigation -->
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

    <!-- Overlay content -->
    <div class="overlay-content">
      <div class="overlay-content__logo">
        <img src="<?php bloginfo('template_directory'); ?>/images/logo.svg" alt="">
      </div>
      <div class="overlay-content__menu">
        <?php wp_nav_menu( array( 'theme_location' => 'blog-menu' ) ); ?>
      </div>
      <div class="overlay-content__social">
        <a href="#" class="footer-new__social__link">hi@mycanlove.com</a>
        <a href="#" class="footer-new__social__brand"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="footer-new__social__brand"><i class="fab fa-instagram"></i></i></a>
      </div>
    </div>

  </div>






    <div id="myNav2" class="overlay" style="background-image: url('<?= get_template_directory_uri() ?>/images/background-menu-mobile.svg')">
    <div style="width: 100%; height: 10%;"></div>
    <!-- Button to close the overlay navigation -->
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav2()">&times;</a>

    <!-- Overlay content -->
    <div class="overlay-content">
      <div class="overlay-content__logo">
        <img src="<?php bloginfo('template_directory'); ?>/images/logo.svg" alt="">
      </div>
      <div align="center">
        <li class="sub-blog-li"><span class="sub-blog-a-button" style="margin-right: 0px !important;">BLOG</span></li>
      </div>
      <br>
            <?php 
                $categories = get_categories();
                  foreach($categories as $category) { 
                    echo "<a href='". get_category_link($category->term_id)."'><li class='sub-blog-li' style='text-align: center; line-height: 5px;'>";    
                    echo $category->name;
                    echo "</li></a>";    
                  }
            
              ?> 
      <div class="overlay-content__social">
        <a href="#" class="footer-new__social__link">hi@mycanlove.com</a>
        <a href="#" class="footer-new__social__brand"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="footer-new__social__brand"><i class="fab fa-instagram"></i></i></a>
      </div>
    </div>

  </div>


