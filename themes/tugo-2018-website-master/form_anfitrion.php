<?php

	/*
	 * Template name: Ser Anfitrion
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
  <!-- END The overlay -->
<section class="seranf">
	<div class="container">
	    	<div class="columns">
				<div class="column contanf">
					<div class="container">
						<span class="ser-tit">Comienza la aventura</span><br>	
						<span class="ser-sub">de ser un anfitrion Tugo</span><br><br>
						<?php echo do_shortcode('[contact-form-7 id="291" title="Sin título"]') ?>
						<!-- <div class="columns">
							<div class="column"><input type="text" name="nombre" placeholder="Nombre" class="input in-anf"></div>
							<div class="column"><input type="text" name="apellido" placeholder="Apellido" class="input in-anf"></div>
						</div>
						<div class="columns">
							<div class="column">
								<input type="text" name="" placeholder="E-mail" class="input in-anf">
							</div>
						</div>
						<div class="columns">
							<div class="column">
								<input type="text" name="" placeholder="Contraseña" class="input in-anf">
							</div>
						</div>
						<div class="columns">
							<div class="column">
								<input type="text" name="" placeholder="Confirmar contraseña" class="input in-anf">
							</div>
						</div>
						<div class="columns btn-n-check" align="right">
							<div class="column">
							 	 <input type="checkbox"><span class="terminos">Acepto términos y condiciones</span>
							</div>
						</div>
						<div class="columns btn-n-check" align="right">
							<div class="column">
								<a href="" class="btn-ser"><span class="btn-ser-text">Crear cuenta</span></a>
							</div>
						</div> -->
					</div>
				</div>
				<div class="column col-anf-2" style='background-repeat: no-repeat; background-size: cover;background-image: url("<?php echo get_site_url().'/wp-content/uploads/2018/10/Path_94.png'; ?>");'>
					<img class="anf-imgg" src="<?php echo get_site_url().'/wp-content/uploads/2018/10/iPhone_X.png'; ?>" alt="">
				</div>
	  	</div>
	</div>
</section>

<style type="text/css">
	input[type="submit"],
input[type="reset"],
input[type="button"],
button {
  background: none;
  border: 0;
  color: inherit;
  /* cursor: default; */
  font: inherit;
  line-height: normal;
  overflow: visible;
  padding: 0;
  -webkit-user-select: none; /* for button */
   -webkit-appearance: button; /* for input */
     -moz-user-select: none;
      -ms-user-select: none;
}
</style>
<script type="text/javascript">
	$(document).ready(function(){
		$("form br").remove();
	});
</script>

<?php Scripts(); ?>
<?php get_footer(); ?>


