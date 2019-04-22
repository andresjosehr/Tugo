<?php

	/*
	 * Template name: Contactanos
	 *
	*/

	get_header();



?>

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



<section class="header-viajero hed-cont zoom-in" style='background-image: url("<?php echo get_site_url().'/wp-content/uploads/2018/10/jakob-owens-224352-unsplash.png'; ?>");'>
	<div class="container">
	<div class="columns">
		<div class="column">
			<div class="form-prins">
				<span class="form-title">Contáctanos,</span><br>
				<span class="form-sub">sé parte de la experiencia Tugo</span><br><br>
				<?php echo do_shortcode('[contact-form-7 id="201" title="Formulario de contacto 1"]') ?>
					<!-- <div class="columns">
						<div class="column">
							<div class="field">
							    <input class="input in-form" type="text" placeholder="Nombre">
							</div>
						</div>
						<div class="column">
							<div class="field">
							    <input class="input in-form" type="text" placeholder="Apellido">
							</div>
						</div>
					</div>
					<div class="columns">
						<div class="column">
							<div class="field">
							    <input class="input in-form" type="email" placeholder="E-mail">
							</div>
						</div>
					</div>
					<div class="columns">
						<div class="column">
							<div class="field">
							    <textarea class="input in-form textarea" placeholder="Mensaje" size="50"></textarea>
							</div>
						</div>
					</div>
					<div class="sect-btn" align="right">
						<a href="#" class="btn-general">
						    <span class="btn-text"> 
						      Enviar
						    </span>
					    </a>
					</div> -->
			</div>
		</div>
	</div>
	</div>
</section>

<script>
		var width = $(window).width();

		if (width<=769) {
			$('.textarea').attr('rows','3');
		}else{
			$('.textarea').attr('rows','5');
		}

		$('.wpcf7-submit').attr('value','Enviar');

</script>

<style type="text/css">

input[type="text"], textarea{

	font-family: "Montserrat";

}
.in-email{
	margin-top: -10px;
}

@media only screen and (min-width: 1000px){
	.enviar-cont{
		    padding-left: 9%;
	}
}

@media only screen and (max-width: 469px){
	.enviar-cont{
		    padding-left: 14%;
	}
}

@media only screen and (min-width: 769px) and (max-width: 1000px){
	.enviar-cont{
		    padding-left: 17%;
	}
}


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


input:focus, textarea:focus { 
    background-color: rgba(255, 255, 255, .6);
}
.wpcf7-form-control{
    color: white !important;

}
</style>
<script type="text/javascript">
	$(document).ready(function(){
		$(" form br").remove();
	});
</script>


<?php Scripts(); ?>
<?php get_footer(); ?>


