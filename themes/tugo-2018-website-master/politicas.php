<?php

	/*
	 * Template name: Politicas de uso
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
      display: none;
    }
  </style>
  
<header class="header" style="background: white">
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


  <style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}



/* Style the buttons inside the tab */
.tab a {
    width: 100%;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    border: 1px solid rgba(0, 0, 0, 0);
    color: #6a6a6a;
    font-size: 16px;
    font-weight: 600;
    line-height: 0.4;
        background: white;
}

/* Create an active/current "tab button" class */
.tab a.active {
	color: #fc782a;
	font-weight: 700;
}

/* Style the tab content */
.tabcontent {

}
.tablinks{

}
.pol-hr{
    width: 8px;
    height: 36px;
    border-radius: 41px;
    background-image: linear-gradient(177deg, #fc782a 0%, #fa4c4c 100%);
    display: inline-grid;
    position: absolute;
}
.tablinks{
	border: 1px solid rgba(0, 0, 0, 0);
	color: #6a6a6a;
	font-size: 16px;
	font-weight: 400;
}

.pol{
    color: #fc782a;
    font-size: 40px;
    font-weight: 700;
}
.pol-text{
    margin-top: 26px;
    color: #6a6a6a;
    font-size: 16px;
    font-weight: 500;
}
.pol-right{
        background-color: #e0e0e026;
}
 .tab-pol{
          padding-top: 80px;
}
.global-pol {
    padding-top: 58px;
    margin: 0 12%;
}
.col-left{
      padding-right: 0;
    padding-left: 4%;

}

.active:after {
    content: '\00a0';
    color: #777;
    width: 8px;
    height: 24px;
    float: right;
    border-radius: 41px;
    background-image: linear-gradient(177deg, #fc782a 0%, #fa4c4c 100%);
}

@media only screen and (max-width: 769px){
  .col-left{
    display: none;
  }
}



</style>
 
 <section class="politicas">
	<div class="columns">
		<div class="column is-3 col-left" align="left">
			<div class="tab tab-pol">




        <?php

          $i=1;
          // check if the repeater field has rows of data
          if( have_rows('menu_lateral') ):

            // loop through the rows of data
              while ( have_rows('menu_lateral') ) : the_row();

                ?>
                  <a class="tablinks tat<?php echo $i ?>" onclick="openCity(event, 'politicas<?php echo $i; ?>')" id="politica<?php echo $i ?>"><?php the_sub_field('nombre'); ?></a><br>
                <?php
                
                $i++;
              endwhile;
          endif;

        ?>


			</div>
		</div>
		<div class="column is-9 pol-right">


      <?php

          $i=1;
          // check if the repeater field has rows of data
          if( have_rows('menu_lateral') ):

            // loop through the rows of data
              while ( have_rows('menu_lateral') ) : the_row();

                ?>
                  <div id="politicas<?php echo $i; ?>" class="tabcontent">
                    <div class="global-pol">
                      <span class="pol"><?php the_sub_field('nombre'); ?></span>
                      <div class="pol-text">
                          <?php the_sub_field('contenido'); ?>
                      </div>                  
                    </div>
                  </div>
                <?php
                
                $i++;
              endwhile;
          endif;

        ?>


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

// Get the element with id="defaultOpen" and click on it
document.getElementById("politica1").click();
</script>

<?php Scripts(); ?>
<?php get_footer(); ?>


