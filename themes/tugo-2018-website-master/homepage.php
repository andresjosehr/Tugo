<?php

	/*
	 * Template name: Homepage
	 *
	*/

	get_header();



?>

<style>
body{
	overflow-x: hidden;
}
	.slick-prev:before {
		color: black !important;
	}
/*	.button8:hover .btn-header {
    	color: #fff !important;
	}*/
</style>


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

  <style>
  	.button8nor:hover a{
			color: #fc6f31!important;
			position: relative;
    		z-index: 999;
  	}
  </style>

<!-- Comienzo de Header -->
<section class="header-viajero zoom-in" style='background-image: url("<?php the_field('background_header'); ?>");'>
	<div class="container">
		<div class="hed_content">
			<div class="columns">
				<div class="column is-6">
					<div class="hed_row column-head-1">
					<p class="hed_title">
						<?php the_field('titulo_del_header'); ?>
					</p>
					<p class="hed_text"><?php the_field('descripcion_del_header'); ?></p>
					<span class="btn-general button8 sim-button button8nor"><a class="btn-header" href="#"><?php the_field('boton_del_header'); ?></a></span>
					</div>
				</div>
				<div class="column is-6 header-col2">
					<div class="hed_row2 column-head-2">
					<div style="height: 45% !important" id="Op2" data-path="<?php echo get_template_directory_uri() ?>/js/lottie/viajero/Op2.json"></div>
					<!-- <img src="<?php the_field('imagen_del_header'); ?>" alt=""> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Fin de header -->

<style>
	


</style>

<!-- Inicio de Caracteristicas -->
<section class="caracteristicas">
	<div class="container">
		<div class="columns caract-contain wow fadeInUp">
		<div class="column cols2" align="left">		
				<img class="caract-img" src="<?php echo get_site_url().'/wp-content/uploads/2018/10/Path_78.png'; ?>" alt="">
				<img class="caract-img2" src="<?php the_field('imagen_del_2do_bloque'); ?>" alt="">
		</div>
		<div class="column is-5 caract-col1">
			<div class="caract-cont-img">
				<div class="title-caract">
					<span class="caract-title"><?php the_field('titulo_del_2do_bloque'); ?></span>
					<div align="center">
					<hr class="caract-hr car-hr">
					</div>
				</div>
				<?php 
					$ani_bene = array();
					$url=get_template_directory_uri()."/js/lottie/";
					$ani_bene[0] = $url."seguridad.json";
					$ani_bene[1] = $url."seguridad.json";
					$ani_bene[2] = $url."tus_reglas.json";
					$ani_bene[3] = $url."anfitrion.json";
					
					$i=0;
				if( have_rows('contenido_del_2do_bloque') ):
				    while ( have_rows('contenido_del_2do_bloque') ) : the_row();
				   		if ($i==0 || $i==2) {
				   			?><div class="columns col-caract2"><?php
				   		}
				    ?>
					<div class="column col-caract">
						<!-- <div class="anima-caract"> -->
							<div style="margin-top: 10px;margin-left: -15px;margin-right: 24px;" class="anima-lottie <?php if ($i==3): ?> anima-lottie3 <?php endif ?>" id="logo<?php echo $i ?>" data-path="<?php echo $ani_bene[$i] ?>"></div>
						<!-- </div> -->
						<span class="caract-sub-t cst-d"><?php the_sub_field('titulo'); ?></span>
						
						<p class="caract-sub-c"><span class="caract-sub-t cst-r"><?php the_sub_field('titulo'); ?></span><br><?php the_sub_field('contenido'); ?></p> 
					</div>
					<?php
					if ($i==1 || $i==3) {
				   		?></div><?php
				   	}
					$i++;
				    endwhile;
				else :
				    // no rows found
				endif;
				 ?>
				 <div align="left" class="accion-caract">
					<span class="des-fue"><a class="des-den como-hacer com" href="#"><?php the_field('llamada_a_la_accion_del_2do_bloque'); ?></a></span>
				</div>
			</div>
		</div>
	</div>




	<div align="center" class="tit-tab">
		<span class="caract-tab"><?php the_field('titulo_del_2do_bloque'); ?></span>
		<hr class="hr-tab">
	</div>
	<div class="columns tab-tab" style="display: none">
		<?php 
				$i=0;
				if( have_rows('contenido_del_2do_bloque') ):
				    while ( have_rows('contenido_del_2do_bloque') ) : the_row();
				   		if ($i==0) {
				   			?><div class="column col-tab-1"><?php
				   		}

				   		if ($i==2) {
				   			?><div class="column col-tab-2"><?php
				   		}
				    ?>
					<div class="columns">
						<div class="column">
							<div class="anima-lottie" id="logores<?php echo $i ?>" data-path="<?php echo $ani_bene[$i] ?>"></div>
							<span class="caract-sub-t2"><?php the_sub_field('titulo'); ?></span>
							<p class="caract-sub-c"><?php the_sub_field('contenido'); ?></p> 
						</div>
					</div>
					<?php
					if ($i==1 || $i==3) {
				   		?></div><?php
				   	}
				   	if ($i==1) {
						?>
						<div class="column img-tab">
							<img class="caract-img4" src="<?php echo get_site_url().'/wp-content/uploads/2018/10/Path_78.png'; ?>" alt="">
							<img class="caract-img3" src="<?php the_field('imagen_del_2do_bloque'); ?>" alt="">
						</div>
						<?php
					}
					$i++;
				    endwhile;
				else :
				    // no rows found
				endif;
				?>
				
	</div>
	</div>
</section>

<!-- Fin de Caracteristicas -->

<!-- Inicio de Como funciona Tugo -->
<section class="como-funciona" style='background-image: url("<?php the_field('background_del_3er_bloque'); ?>");'>
	<div class="container">
		<div align="center" class="wow fadeInUp tit-como">
			<span class="caract-title com-fun"><?php the_field('titulo_del_3er_bloque'); ?></span>
			<hr class="caract-hr caract-hr-com">
		</div>
	<div class="como-container" class="wow fadeInUp">
		<div class="wow fadeInUp">
		  <a href="https://www.youtube.com/watch?v=qDyJrNtSDJQ" data-fancybox>
		    <img class="como-img" src="<?php the_field('imagen_del_3er_bloque'); ?>" />
		  </a>
		</div>
		<div class="columns com-cont wow fadeInUp" style="padding-top: 10px;">
			<?php 
			if( have_rows('contenido_de_3er_bloque') ):
			    while ( have_rows('contenido_de_3er_bloque') ) : the_row();
			    ?>
				<div class="column" align="center">
					<span class="como-ti"><?php the_sub_field('Titulo'); ?></span>
					<p class="como-te"><?php the_sub_field('contenido'); ?></p>
				</div>
				<?php
			    endwhile;
			else :
			    // no rows found
			endif;
			 ?>
		</div>
		<div class="content">
			<div class="slider responsive resp-bene">
			<?php 
			if( have_rows('contenido_de_3er_bloque') ):
				  while ( have_rows('contenido_de_3er_bloque') ) : the_row();
				  ?>
					<div align="center">
						<span class="como-ti"><?php the_sub_field('Titulo'); ?></span>
						<p class="como-te"><?php the_sub_field('contenido'); ?></p>
					</div>
					<?php
				    endwhile;
				else :
				    // no rows found
				endif;
				 ?>			
				</div>
			</div>
			<div align="center" class="com-btn wow fadeInUp">
				<span class="des-fue como-fun-acc"><a class="des-den como-hacer2 com-accion" href="<?php echo site_url(); ?>/tutoriales">¿Cómo lo hago? >></a></span>
			</div>
		</div>
		</div>
</section>
<!-- Fin de como funciona Tugo -->





<!-- Inicio de Beneficios -->
<section class="beneficios">
	<div class="container">
		<div align="center" class="wow fadeInUp tit-bene">
			<span class="caract-title"><?php the_field('titulo_del_4to_bloque'); ?></span>
			<hr class="caract-hr hr-bene">
		</div>
		<div class="columns bene-con">
				<?php 
					$ani_bene[0] = $url."economiza.json";
					$ani_bene[1] = $url."mensajeria_2.json";
					$ani_bene[2] = $url."descubre.json";
					$i=0;
					if( have_rows('contenido_del_4to_bloque') ):
					    while ( have_rows('contenido_del_4to_bloque') ) : the_row();
					    ?>
						<div class="column bene-cols" align="center">
							<div align="center" class="wow fadeInUp text-bene">
								<div class="anima-lottie3 anima-lottie-bene <?php if ($i==1): ?> anima-lottie-bene <?php endif ?>" id="bene<?php echo $i ?>" data-path="<?php echo $ani_bene[$i] ?>"></div>
							</div>
							<div class="wow fadeInUp">
								<span class="bene-ti"><?php the_sub_field('titulo'); ?></span>
								<br>
								<p class="bene-te"><?php the_sub_field('contenido'); ?></p>
							</div>
						</div>
						<?php
							$i++;
					    endwhile;
					else :
					    // no rows found
					endif;
				?>
		</div>
		<div align="center" class="wow fadeInUp accion-bene">
			<span class="des-fue"><a class="des-den como-hacer com" href="<?php echo site_url(); ?>/tutoriales"><?php the_field('llamada_a_la_accion_del_4to_bloque'); ?></a></span>
		</div>
	</div>
</section>
<!-- Fin de beneficios -->

<!-- Inicio de Socios -->
<section class="socios" style='background-image: url("<?php the_field('background_del_5to_bloque'); ?>");'>
	<div class="container">
	<div align="center" class="soc-tit fadeInUp">
		<span class="soc-title"><?php the_field('titulo_del_5to_bloque'); ?></span>
		</div>
		<div class="columns soc-log wow fadeInUp">
			<?php 
			$i=0;
				if( have_rows('contenido_del_5to_bloque') ):
				    while ( have_rows('contenido_del_5to_bloque') ) : the_row();
				    ?>
				    <?php if ($i!=2): ?>
					<div class="column" align="center">
						<img src="<?php the_sub_field('logo_socio'); ?>" alt="">
					</div>
					<?php endif ?>
					<?php
					$i++;
				    endwhile;
				else :
				endif;
			?>
		</div>
	</div>
</section>
<!-- Fin de socios -->
<style>
	#cta_principal{
		height: 480px !important;
		position: relative;
		top: -75px;
	}

		@media only screen and (max-width: 950px)  {
				div #cta_principal{
					height: 594px !important;
				}
			}
</style>

<!-- Inicio de #lifetugo -->

<section class="life" style='background-image: url("<?php the_field('background_del_6to_bloque'); ?>");'>
	<div class="container">
		<div class="columns">
			<div class="column life-col1 life-col1-anf" align="center">
				<div class="life-col3 wow fadeInUp">
				<?php 
					if( have_rows('contenido_del_6to_bloque') ):
					    while ( have_rows('contenido_del_6to_bloque') ) : the_row();
					    ?>
							<span class="experience"><?php the_sub_field('titulo'); ?></span><br>
							<span class="hash"><?php the_sub_field('subtitulo'); ?></span><br>
							<div class="accion-descarga">
								<span class="btn-general button8 sim-button button8nor"><a class="btn-con" href=""><?php the_sub_field('boton'); ?></a></span>
							</div>
						<?php
					    endwhile;
					else :
					endif;
				?>
				</div>
			</div>
			<div class="column life-col2 wow fadeInUp">
				<div id="cta_principal" data-path="<?php echo get_template_directory_uri() ?>/js/lottie//cta_principal.json"></div>
			</div>
		</div>
	</div>
</section>


<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>

		<style>
			@media only screen and (min-width: 769px)  {
				.resp-bene{
					display: none
				}
			}
		</style>

		<script>



			$(document).ready(function() {
			

				var width = $(window).width();

				if (width<=769) {
					$('.anima-caract').attr('align','center');
				}

			    $('.responsive').slick({
				  slidesToShow: 1,
				  slidesToScroll: 1,
				  autoplay: true,
				  autoplaySpeed: 2000,
			    });
			});

								





			function AnimacionCaracteristicas(id) {	

									var squares = document.getElementById(id);
									var animation = bodymovin.loadAnimation({
								      container: squares,
								      renderer: 'svg',
								      loop: false,
								      autoplay: true,
								      path: $("#"+id).data("path")
								    })

										squares.addEventListener("mouseenter", function () {
										   animation.goToAndPlay(0);
										 });
			}


			AnimacionCaracteristicas("Op2");
			AnimacionCaracteristicas("cta_principal");

			for (var i = 0; i <= 3; i++) {
				AnimacionCaracteristicas("logo"+i);	
				AnimacionCaracteristicas("logores"+i);
				AnimacionCaracteristicas("bene"+i);
			}

										// var squares = document.getElementById("logo0");
										// var animation = bodymovin.loadAnimation({
								  //     container: squares,
								  //     renderer: 'svg',
								  //     loop: false,
								  //     autoplay: true,
								  //     path: $("#logo0").data("path")
								  //   })

										// squares.addEventListener("mouseenter", function () {
										//   animation.goToAndPlay(0);
										// });




// jQuery(document).ready(function() {
//     setTimeout(function() {
// 			var animation = bodymovin.loadAnimation({
// 		      container: document.getElementById('logo0'),
// 		      renderer: 'svg',
// 		      loop: true,
// 		      autoplay: false,
// 		      path: $("#logo0").data("path")
// 		    })
//     }, 2000);
// });


    // var animation = bodymovin.loadAnimation({
    //   container: document.getElementById('logo1'),
    //   renderer: 'svg',
    //   loop: true,
    //   autoplay: true,
    //   path: $("#logo1").data("path")
    // })

    // var animation = bodymovin.loadAnimation({
    //   container: document.getElementById('logo2'),
    //   renderer: 'svg',
    //   loop: true,
    //   autoplay: true,
    //   path: $("#logo2").data("path")
    // })

   	// var animation = bodymovin.loadAnimation({
    //   container: document.getElementById('logo3'),
    //   renderer: 'svg',
    //   loop: true,
    //   autoplay: true,
    //   path: $("#logo3").data("path")
    // })
		</script>



<?php Scripts(); ?>


<?php get_footer(); ?>


