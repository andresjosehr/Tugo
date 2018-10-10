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

  <meta property="og:title" content="Tugo | Vive la experiencia Tugo"/>
  <meta property="og:type" content="website"/>
  <meta property="og:url" content="https://tugo.techlatam.la/"/>
  <meta property="og:image" content="<?= get_template_directory_uri() ?>/images/OG.png"/>
  <meta property="og:site_name" content="Tugo | Vive al experiencia Tugo"/>
  <meta property="og:description" content="Vive la experiancia Tugo como viajero o anfitrion con la unica app que sera capaz de ayudarte a vivir los mejores momentos de tu vida"/>

  <!--[if IE]>
  	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/ie.css" media="screen"/>
  <![endif]-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="all"/>
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <link href="<?php echo home_url(); ?>" rel="index" title="<?php bloginfo('name') ?> - <?php bloginfo('description'); ?>"/>
  <?php wp_head(); ?>

  <script
  src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
  crossorigin="anonymous"></script>
	
<script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5b72dc49940588001be3235b&product=inline-share-buttons' async='async'></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120925188-1"></script>
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


	<style>
    .button8::before {
    background-color: #fff !important;
}
.sim-button{
  line-height: 50px;
  height: 50px;
  text-align: center;
  margin-right: auto;
  margin-left: auto;
  margin-top: 125px;
  width: 60%;
  cursor: pointer;
}
.button8:hover{
  border: 3px solid #7c34f9;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  -o-transition: all 0.3s;
  transition: all 0.3s;
  color: #7c34f9 !important;
}

.button8{
  color: rgba(255,255,255,1);
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
  -o-transition: all 0.5s;
  transition: all 0.5s;
  border: 1px solid rgba(255,255,255,0.5);
  position: relative; 
}

.button8::before{
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 0%;
  height: 100%;
  z-index: 1;
  opacity: 0;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  -o-transition: all 0.3s;
  transition: all 0.3s;
  border-radius: 25px;

}
.button8:hover::before{
  opacity: 1;
  width: 100%;
}

.menu-item-181 a {
    padding: 13px 23px;
    border-radius: 25px;
    background: #7c34f9;
    background: -webkit-linear-gradient(top left, #7c34f9 0%, #460a8f 100%);
    background: -o-linear-gradient(top left, #7c34f9 0%, #460a8f 100%);
    background: linear-gradient(to bottom right, #7c34f9 0%, #460a8f 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#7c34f9', endColorstr='#460a8f',GradientType=1 );
}



		  .menu-item-181 a {
      padding: 13px 23px;
      border-radius: 25px;
      /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#7c34f9+0,460a8f+100 */
      background: #7c34f9; /* Old browsers: ; */ /* FF3.6-15 */ /* Chrome10-25,Safari5.1-6 */
      background: -webkit-linear-gradient(top left, #7c34f9 0%, #460a8f 100%);
      background: -o-linear-gradient(top left, #7c34f9 0%, #460a8f 100%);
      background: linear-gradient(to bottom right, #7c34f9 0%, #460a8f 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#7c34f9', endColorstr='#460a8f',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */


  } 
	</style>
</head>

<body <?php body_class(); ?>>
  <!-- Header Section -->
  <header class="header prin">
    <div class="container full-height container-is-gapless-table">
      <!-- Header TOP -->
      <div class="header-container full-height">
        <div class="header__logo flex-center">
         <a href="<?php echo get_site_url(); ?>"><img class="img-prin" src="<?php bloginfo('template_directory'); ?>/images/logo_header.png" alt=""></a>
        </div>
        <div class="header__menu">
          <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
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
    <!-- END Header Section -->


  <div class="header__separate"></div>
  <!-- END Header Section -->

  <!-- The overlay -->
  <div id="myNav" class="overlay" style="background-image: url('<?= get_template_directory_uri() ?>/images/menu-mobile.svg')">
    <div style="width: 100%; height: 10%;"></div>
    <!-- Button to close the overlay navigation -->
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

    <!-- Overlay content -->
    <div class="overlay-content">
      <div class="overlay-content__logo">
        <img src="<?php bloginfo('template_directory'); ?>/images/logo_header.png" alt="">
      </div>
      <div class="overlay-content__menu">
        <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
      </div>
      <div class="overlay-content__social">
        <a href="#" class="footer-new__social__link">hello@lifetugo.com</a><br>
        <a href="#" class="footer-new__social__brand"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="footer-new__social__brand"><i class="fab fa-instagram"></i></i></a>
        <a href="#" class="footer-new__social__brand"><i class="fab fa-twitter"></i></i></a>
      </div>
    </div>

  </div>
