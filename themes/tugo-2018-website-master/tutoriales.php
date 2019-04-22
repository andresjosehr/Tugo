  <?php

  	/*
  	 * Template name: Tutoriales
  	 *
  	*/

  	get_header();



  ?>


  <style>
    .header__menu a {
      color: #7c7c7c;
    } 
    .header__menu .menu-item-181 a {
      color: white;
    	background: #fc782a; /* Old browsers */
    	background: -moz-linear-gradient(-45deg, #fc782a 0%, #fa4c4c 100%); /* FF3.6-15 */
    	background: -webkit-linear-gradient(-45deg, #fc782a 0%,#fa4c4c 100%); /* Chrome10-25,Safari5.1-6 */
    	background: linear-gradient(135deg, #fc782a 0%,#fa4c4c 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fc782a', endColorstr='#fa4c4c',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
  }
    .prin{
      display: none !important;
    }



  .tutoriales{
    padding-top: 150px;
  }
  /* Style the tab */
  .tab {
      overflow: hidden;
      text-align: center;
  }
  /* Style the buttons inside the tab */
  .tutoriales .tab button {
    float: none;
    margin: 0;
    padding: 14px 7%;
  }
  /* Change background color of buttons on hover */
  .tab button:hover {
    color: #d68251;
    font-size: 20px;
    font-weight: 700;
  }
  .active{
    color: #d68251 !important;
    font-size: 25px !important;
    font-weight: 700 !important;
  }
  /* Create an active/current tablink class */
  .tab2 button.active {
    margin-top: -5px;
    color: #d68251;
    font-size: 22px;
    font-weight: 700;
  }
  /* Style the tab content */
  .tabcontent {
      display: none;
      padding: 6px 12px;
      border-top: none;
  }
  .tuto-col1{
    margin-right: 00%;
  }
  .tuto-video{
        position: absolute;
      margin-left: 1.5%;
          width: 53%;
height: 400px;
  }
  .tuto-back{
        width: 88%
  }
  .tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
        color: #c3c3c3;
    font-size: 18px;
    font-weight: 500;
}
.com-tuto{
  color: #6a6a6a;
  font-size: 20px;
  font-weight: 600;
}
.ray-tuto{
  width: 77px;
height: 8px;
border-radius: 41px;
background-image: linear-gradient(140deg, #fc782a 0%, #fa4c4c 100%);
    margin: 7px 0 0 0;
}
.text-tuto{
border: 1px solid rgba(0, 0, 0, 0);
color: #6a6a6a;
font-size: 13px;
font-weight: 500;
}
.tuto-fondo{
  height: 434px;
      width: 91%;
  }
.tuto-tabcontent{
  margin-top: 47px;
}
.tuto-content-2{
    padding-top: 225px;
    margin: 0 33% -46% 1%;
}
@media only screen and (max-width: 769px){
  .tuto-content-3{
    display: block !important;
    margin: 125px 10% 0 10%;
  }
  .tutoriales {
    padding-top: 123px;
  }
  .col4{
    padding-top: 0px;
  }
  .tuto-content-2 {
    margin: 34px 9% 52px 13%;
    padding-top: 0px;
  }
  .tutoriales .tab button {
    padding: 14px 5%;
}
.tab{
     margin-left: 8px;
}
}
@media only screen and (max-width: 769px) and (min-width: 500px){
.tuto-video {
    width: 79%;
  }
}
@media only screen and (max-width: 500px){
    .tuto-video{
    width: 83%;
    margin-left: 27px;
    margin-top: 10px;
  }
  .tuto-fondo{
    height: 434px;
    width: 97%;
    margin-left: 12px;
  }
  .tablinks{
  color: #c3c3c3;
  font-size: 18px;
  font-weight: 500;
  }
}
  </style>
  
<header class="header sec" style="background: white">
    <div class="container full-height container-is-gapless-table">
      <!-- Header TOP -->
      <div class="header-container full-height">
        <div class="header__logo flex-center">
         <a href="<?php echo get_site_url(); ?>"><img src="<?php echo site_url(); ?>/wp-content/uploads/2018/10/logo-nan.svg" alt=""></a>
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

    <!-- The overlay -->
    <div id="myNav" class="overlay">
      <!-- Button to close the overlay navigation -->
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <!-- Overlay content -->
      <div class="overlay-content">
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Clients</a>
        <a href="#">Contact</a>
      </div>
    </div>




  <section>
    <div class="columns">
      <div class="column">

      </div>
    </div>
    <div class="columns">
        <div class="column is-8 tutoriales tuto-col1" align="center">
            <div class="tab">
              <button class="tablinks hvr-pulse-grow" onclick="openCity(event, 'London')">Viajero</button>
              <button class="tablinks active hvr-pulse-grow" onclick="openCity(event, 'Paris')">Anfitrión</button>
              <button class="tablinks hvr-pulse-grow" onclick="openCity(event, 'Tokyo')">Experiencia</button>
            </div>

            <?php

        // check if the repeater field has rows of data
        if( have_rows('videos') ):

          // loop through the rows of data
            while ( have_rows('videos') ) : the_row();


              ?>

          <div id="London" class="tabcontent">
            <div class="tuto-tabcontent">
              <iframe class="tuto-video" src="https://www.youtube.com/embed/<?php the_sub_field('viajero'); ?>?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                <img class="tuto-fondo" class="tuto-back" src="<?php echo site_url(); ?>/wp-content/uploads/2018/10/Path_813.png" alt="">
            </div>
          </div>
          <div id="Paris" class="tabcontent" style="display: block;">
            <div class="tuto-tabcontent">
              <iframe class="tuto-video" src="https://www.youtube.com/embed/<?php the_sub_field('anfitrion'); ?>?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                <img class="tuto-fondo" class="tuto-back" src="<?php echo site_url(); ?>/wp-content/uploads/2018/10/Path_813.png" alt="">
            </div>
          </div>

          <div id="Tokyo" class="tabcontent">
            <div class="tuto-tabcontent">
              <iframe class="tuto-video" src="https://www.youtube.com/embed/<?php the_sub_field('experiencia'); ?>?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                <img class="tuto-fondo" class="tuto-back" src="<?php echo site_url(); ?>/wp-content/uploads/2018/10/Path_813.png" alt="">
            </div>
          </div>
        </div>


              <?php
                

            endwhile;

        else :

            // no rows found

        endif;

        ?>
        <div class="column is-4 tutoriales col4">
            <div class="tuto-content-2" style="line-height: 1.1;">
              <span class="com-tuto"><?php the_field("subtitulo") ?></span>
              <hr class="ray-tuto"><br><br>
              <div>
              <span class="text-tuto"><?php the_field("contenido") ?></span>
              </div>
            </div>
        </div>
    </div>
  </section>



  <script>
  function openCity(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
  }



  $(document).ready(function(){
       $('.pag1').click();
    });
  </script>



  <?php Scripts(); ?>
  <?php get_footer(); ?>


