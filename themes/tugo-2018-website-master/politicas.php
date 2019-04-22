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


<style>
.accordion {
    background-color: rgba(249, 120, 42, 2);
    color: #fff;
    cursor: pointer;
    padding: 11px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

div .panel:not(:last-child) {
    margin-bottom: -7px;
}


.politicas .accordion:after {
    content: '\002B';
    color: #fff;
    font-weight: bold;
    float: right;
    margin-left: 5px;
}

.politicas .active:after {
    content: "\2212";
}

.panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
}
</style>




<header class="header sec" style="background: white;height: 125px;">
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
    padding-top: 123px;
}
.global-pol {
    padding-top: 58px;
    margin: 50px 12%;
}
.col-left{
      padding-right: 0;
    padding-left: 4%;

}

.politicas .active:after {
    content: '\00a0';
    color: #777;
    width: 6px;
    margin-right: -6px;
    height: 20px;
    float: right;
    border-radius: 41px;
    background-image: linear-gradient(177deg, #fc782a 0%, #fa4c4c 100%);
}

@media only screen and (max-width: 769px){
  .col-left{
    display: none;
  }
  .politicas{
    padding-top: 0px;
  }
  .global-pol {
     padding-top: 0px; 
  }
  .pol {
    font-size: 27px;
  }
}

@media only screen and (min-width: 769px){
  .menu-resp{
    display: none
  }
}

.acor-tit{
  padding-left: 30px;
}

.con-pa{
  padding-top: 5px;
}

.menu-resp a{
  color: #003d56;
}



</style>




<div style="padding-top: 127px;" class="menu-resp">
  <button class="accordion acor-tit">Politicas de Privacidad</button>
  <div class="panel">
    <div class="con-pa">

              <?php

          $i=1;
          // check if the repeater field has rows of data
          if( have_rows('menu_lateral') ):

            // loop through the rows of data
              while ( have_rows('menu_lateral') ) : the_row();

                ?>
                  <a class="tat<?php echo $i ?>" onclick="openCity(event, 'politicas<?php echo $i; ?>')" id="politica<?php echo $i ?>"><li style="font-weight: 600;list-style: none; padding-bottom: 2.5px;padding-top: 2.5px"><?php the_sub_field('nombre'); ?></li></a><hr style="margin: .1em 0;width: 114%;margin-left: -20px;">
                <?php
                
                $i++;
              endwhile;
          endif;

        ?>
      <br>
    </div>
  </div>

  <!-- <button class="accordion acor-tit">Terminos y condiciones</button> -->
<!--   <div class="panel">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
  </div> -->

</div>
 


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

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>

<?php Scripts(); ?>
<?php get_footer(); ?>


