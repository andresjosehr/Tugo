<?php

	/*
 * Template name: Afitrion
 *
 */

get_header();
?>

  <!-- The overlay -->
  <div id="myNav" class="overlay">

    <!-- Button to close the overlay navigation -->
    <a href="javascript:void(0)" class="closexbtn" onclick="closeNav()">&times;</a>

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
		.slider button:before{
		  color: black;
		}

		  	.button8normor:hover a{
			color: white !important;
			position: relative;
    		z-index: 999;
  	}





@media only screen and (max-width: 450px){

	  	div .anima-section{
		    width: 80px!important;
		}
					.anima-section{
				    padding-top: 11%;
			}
	}

  	@media only screen and (max-width: 769px){
  		body div #cta_anfitrion {
  			height: 200px !important;
		    position: relative;
		        top: -12px;
		  }
  		  	.seccion-desktop{
				  		display: none;
				  	}
			.requisitos {
 				margin-top: 40px;
			}
			.porque-col-right{
				margin-bottom: 40px;
			}
			.resp-req{
				display: none;
			}
			.resp-pasos-sub{
				display: none;
			}
			body .info{
				background-size: 77rem !important;
			}

		}

		  	@media only screen and (min-width: 769px){
  		  	.autopla{
				  		display: none;
				  	}
		}
		.anima-lottie-anf{
			width: 22% !important;
		}



@media only screen and (min-width: 769px) and (max-width: 1200px) {

			div .caract-anf {
	    		margin-top: 130px;
			}


}

@media only screen and (max-width: 850px){
.caract-contain2 {
    margin-top: -47px;
	}
}

@media only screen and (min-width: 1000px){
.seccion-margin {
  	  margin-left: 76px;
	}
}

@media only screen and (max-width: 1000px){

	#ima0, #ima1, #ima2, #ima3{
		display: none !important;
	}
}

section{
	overflow-y: hidden;
	overflow-x: hidden;
}


	</style>
<!-- Comienzo de Header -->
<section>
	<div class="header-viajero zoom-in" style='background-image: url("<?php the_field('background_header'); ?>");'>
		<div class="container">
		<div class="hed_content">
			<div class="columns">
				<div class="column col-anf" align="center">
					<span class="anf-title"><?php the_field('titulo_del_header'); ?></span>
					<p class="anf-cont">
						<?php the_field('subtitulo_header'); ?>
					</p><br><br>
					<span class="anf-btn button8 sim-button button8normor"><a href="#" class="anf-btn-text"><?php the_field('boton_header'); ?></a></span>
				</div>
			</div>
		</div>
	</div>
	</div>
</section>
<!-- Fin de header -->

<!-- Inicio de Caracteristicas -->
<section class="caracteristicas cac-anf">
	<div class="container">
		<div class="columns caract-contain caract-anf">
			<div class="column caract-contain2" >
				<div align="center" class="tit wow fadeInUp">
					<span class="caract-title"><?php the_field('titulo_del_bloque_2'); ?></span><hr class="anf-hr ray">
				</div>
					<?php 
				$ani_bene = array();
				$url = get_template_directory_uri() . "/js/lottie/";
				$ani_bene[0] = $url . "tiro_blanco_2.json";
				$ani_bene[1] = $url . "planifica_2.json";
				$ani_bene[2] = $url . "monetiza.json";
				$ani_bene[3] = $url . "conecta.json";
				$i = 0;
				if (have_rows('contenido_del_bloque_2')) :
					while (have_rows('contenido_del_bloque_2')) : the_row();
				if ($i == 0 || $i == 2) {
					?><div class="columns caract-cols <?php if ($i==2): ?>sgnda<?php endif ?>" <?php if ($i==0): ?>style="margin-top: -10px;"<?php endif ?>><?php

																																						}
																																						?>
							<div class="column wow fadeInUp col-caract">
								<!-- <div class="anima-caract"> -->
									<div class="anima-lottie-anf" style="margin-bottom: 5px;padding-top: 31px;" id="logo<?php echo $i ?>" data-path="<?php echo $ani_bene[$i] ?>"></div>
								<!-- </div> -->
								<span class="caract-sub-t caract-sub-t cst-d"><?php the_sub_field('subtitulo'); ?></span>
								<p class="caract-sub-c"><span class="caract-sub-t cst-r"><?php the_sub_field('subtitulo'); ?></span><br><?php the_sub_field('contenido'); ?></p> 
							</div>
							<?php
						if ($i == 1 || $i == 3) {
							?></div><?php

													}
													$i++;
													endwhile;
													else :
						    // no rows found
													endif;
													?>
					<div class="llam-acc">
				<span class="des-fue"><a class="des-den como-hacer com" href="<?php echo site_url(); ?>/tutoriales"><?php the_field('llamada_a_la_accion_del_2do_bloque'); ?></a></span>
				</div>
			</div>
			<div class="column caract-img-g1" align="left">
				<img class="anf-img" src="<?php echo get_site_url() . '/wp-content/uploads/2018/10/Path_79-1.png'; ?>" alt="">
				<img class="anf-img2 wow fadeInUp" src="<?php the_field('imagen_del_bloque_2'); ?>" alt="">
			</div>
		</div>

		<div class="pasos-header pas" style="display: none" align="center"><br>
			<span class="pasos-title"><?php the_field('titulo_del_bloque_2'); ?></span><hr class="anf-hr"><br><br>
		</div>
		<div class="columns is-mobile caract-tablet" style="display: none;">
			<?php 
		$i = 0;
		if (have_rows('contenido_del_bloque_2')) :
			while (have_rows('contenido_del_bloque_2')) : the_row();
		if ($i == 0 || $i == 2) {
			?><div class="column"><?php

																							}
																							?>
						<div class="columns">
							<div class="column">
								<div class="anima-lottie-anf" style="margin-bottom: 5px;" id="respca<?php echo $i ?>" data-path="<?php echo $ani_bene[$i] ?>"></div>
								<span class="caract-sub-t2"><?php the_sub_field('subtitulo'); ?></span>
								<p class="caract-sub-c"><?php the_sub_field('contenido'); ?></p> 
							</div>
						</div>
						<?php
					if ($i == 1 || $i == 3) {
						?></div><?php

												}
												if ($i == 1) {
													?>
							<div class="column">
								<img class="anf-img-2" src="<?php echo get_site_url() . '/wp-content/uploads/2018/10/Path_79-1.png'; ?>" alt="">
								<img class="anf-img2-2" src="<?php the_field('imagen_del_bloque_2'); ?>" alt="">
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




<!-- Inicio de pasos para ser anfitrion  -->
<section class="pasos">
	<div class="container">
	<div class="pasos-header wow fadeInUp" align="center">
		<span class="pasos-title"><?php the_field('titulo_del_3er_bloque'); ?>Pasos para ser un anfitrión&nbsp;Tugo</span><hr class="anf-hr hr-pasos ext-hr"><br><br>
	</div>
	<div class="columns pasos4">
			<?php 
		$ani_bene[0] = $url . "descarga_app.json";
		$ani_bene[1] = $url . "conviertete_anfitrion.json";
		$ani_bene[2] = $url . "perfil.json";
		$ani_bene[3] = $url . "crea_experiencia_2.json";


		//aqui estan los loties nuevos para que los pruebes ya funcionan , solo descomentareas los de arriba y eliminas lo de abajo ya que los de abajo son los de prueba

		$ima_cen[0] = $url . "paso1/anfitrion_paso1.json";
		$ima_cen[1] = $url . "paso2/anfitrion_paso2.json";
		$ima_cen[2] = $url . "paso3/anfitrion_paso3.json";
		$ima_cen[3] = $url . "paso4/anfitrion_paso4.json";

		$i = 0;
		if (have_rows('contenido_del_3er_bloque')) :
			while (have_rows('contenido_del_3er_bloque')) : the_row();
		if ($i == 0 || $i == 2) {
			?><div class="column is-3 pasos-col"><?php

																																						}
																																						?>
					<div class="columns wow fadeInUp">
						<div class="column" align="center">
							<div style="width: 45% !important; height: 45% !important" id="bene<?php echo $i ?>" data-path="<?php echo $ani_bene[$i] ?>"></div>
							<span class="pasos-subti"><?php the_sub_field('ttitulo'); ?></span><br><br>
							<p class="pasos-text"><?php the_sub_field('contenido'); ?></p>
						</div>
					</div>
					<?php
				if ($i == 1 || $i == 3) {
					?></div><?php

											}
											if ($i == 1) {
												?>
						<div class="column is-6 pasos3 wow fadeInUp resp-pasos-sub" align="center">
							<div style="" id="ima0" data-path="<?php echo $ima_cen[0] ?>"></div>
							<div style="display: none" id="ima1" data-path="<?php echo $ima_cen[1] ?>"></div>
							<div style="display: none" id="ima2" data-path="<?php echo $ima_cen[2] ?>"></div>
							<div style="display: none" id="ima3" data-path="<?php echo $ima_cen[3] ?>"></div>

							
						</div>
				   		<?php

							}
							$i++;
							endwhile;
							else :
				    // no rows found
							endif;
							?>


		<div class="content">
			<div class="slider autoplay">
				<?php
			$ani_bene[0] = $url . "descarga_app.json";
			$ani_bene[1] = $url . "perfil.json";
			$ani_bene[2] = $url . "conviertete_anfitrion.json";
			$ani_bene[3] = $url . "crea_experiencia_2.json";
			$i = 0;
			if (have_rows('contenido_del_3er_bloque')) :
				while (have_rows('contenido_del_3er_bloque')) : the_row();
			?>
						<div class="columns">
							<div align="center">
								<div style="width: 37% !important;margin-top: 11px;margin-left: 10px" id="beneresp<?php echo $i ?>" data-path="<?php echo $ani_bene[$i] ?>"></div>
								<span class="pasos-subti"><?php the_sub_field('ttitulo'); ?></span><br><br>
								<p class="des"><?php the_sub_field('contenido'); ?></p>
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
		</div>
	</div>
	<div align="center" class="llam-acc2">
		<span class="des-fue pasosanf-accion"><a class="des-den como-hacer com com-unic" href="<?php echo site_url(); ?>/tutoriales"><?php the_field('llamada_a_la_accion_del_2do_bloque'); ?></a></span>
	</div>
	<br><br>
	</div>
</section>
<!-- Fin de pasos para ser anfitrion -->



<!-- Inicio de por qué ser anfitrión -->
<section class="porque">
	<div class="container">
		<div class="pasos-header pashed1 wow fadeInUp" align="center">
			<span class="pasos-title" ><?php the_field('titulo_del_4to_bloque'); ?></span><hr class="anf-hr ray3"><br><br>
		</div>
		<div class="pasos-header pashed2 wow fadeInUp" align="center"><br>
			<span class="pasos-title"><?php the_field('titulo_del_4to_bloque'); ?></span><hr class="anf-hr ray2"><br><br>
		</div>
		<div class="content">
			<div class="autoplay">
							<?php 
						$i = 0;
						if (have_rows('contenido_del_4to_bloque')) :

							while (have_rows('contenido_del_4to_bloque')) : the_row();
						?>
									    <div align="center">
												<div class="columns">
													<div class="column porq-div wow fadeInUp" align="center">
														<img class="porque-img" src="<?php the_sub_field('imagen'); ?>" alt="">
														<img class="porque-img2" src="<?php the_sub_field('imagen_resp'); ?>" alt="">
													</div>
													<div class="column col-2-anf" align="center">
														<div class="porque-col-right wow fadeInUp">
															<span class="porque-text-comi">“</span>
															<span class="porque-title"><?php the_sub_field('subtitulo'); ?></span><br><br>
															<p class="porque-text">
															<?php the_sub_field('contenido'); ?>
															<p class="porque-text"><br>
															<?php the_sub_field('ubicacion'); ?></p><br><br>
															<span class="des-fue pasosanf-accion"><a class="des-den como-hacer com com-unic" href="<?php echo site_url(); ?>/ser-anfitrion"><?php the_sub_field('llamada_a_la_accion'); ?></a></span>
														</div>
													</div>
												</div>
											</div>
											<?php
										endwhile;
										else :
										    // no rows found
										endif;
										?>
			</div>
		</div>

	</div>
</section>
<!-- Fin de por qué ser anfitrión -->

<!-- Inicio de seccion -->
<section class="info" style='background-image: url("<?php the_field('background_4to_bloque'); ?>");'>
	<div class="container">
 	<div class="columns" style="margin-left: 80px;margin-right: 80px;">
		<?php 
	$ani_bene[2] = $url . "como_en_redes.json";
	$ani_bene[1] = $url . "como__monetizas.json";
	$k = 0;
	$i = 1;
	if (have_rows('contenido_del_5to_bloque')) :
		while (have_rows('contenido_del_5to_bloque')) : the_row();
	?>
				 		<div class="column cols wow fadeInUp seccion-desktop" align="center">
				 			<div class="anima-lottie" id="como<?php echo $i ?>" data-path="<?php echo $ani_bene[$i] ?>"></div>
				 			<span class="info-title"><?php the_sub_field('titulo'); ?></span>
				 			<p class="info-text"><?php the_sub_field('contenido'); ?></p>	
				 		</div>
				<?php
			$k++;
			$i++;
			endwhile;
			else :
				endif;
			?>
		</div>



			<!-- Responsive -->
			<div class="autoplay autopla">
			<?php 
		$k = 0;
		$i = 1;
		if (have_rows('contenido_del_5to_bloque')) :
			while (have_rows('contenido_del_5to_bloque')) : the_row();
		?>
				    <div align="center">
					 		<div class="column cols wow fadeInUp" align="center" style="margin-top: 25px;">
					 			<div class="anima-lottie anima-section" id="como2<?php echo $i ?>" data-path="<?php echo $ani_bene[$i] ?>"></div>
					 			<span class="info-title"><?php the_sub_field('titulo'); ?></span>
					 			<p class="info-text" style="padding-bottom: 29px;"><?php the_sub_field('contenido'); ?></p>	
					 		</div>
					 	</div>
					<?php
				$k++;
				$i++;
				endwhile;
				else :
					endif;
				?>
			</div>
			<!-- Fin responsive -->


 	</div>
 	</div>
</section>
<!-- Fin de seccion -->



<!-- Inicio de requisitos -->
<section class="requisitos">
	<div class="container">
		<div class="req-tit wow fadeInUp">
				<span class="requisitos-title"><?php the_field('titulo_del_6to_bloque'); ?></span><hr class="anf-hr">
		</div>
			<?php 
		$i = 0;
		if (have_rows('contenido_1_del_6to_bloque')) :
			while (have_rows('contenido_1_del_6to_bloque')) : the_row();
		?>
							<div class="columns">
								<div class="column req-456 wow fadeInUp" align="left">
									<div class="req-tit2">
										<span class="requisitos-title"><?php the_field('titulo_del_6to_bloque'); ?></span><hr class="anf-hr">
									</div>
									<div class="requisitos-col1">
										<span class="requisitos-sub"><?php the_sub_field('subtitulo'); ?></span><br><br>
										<p class="requisitos-text">
											<?php the_sub_field('contenido'); ?>
										</p>
									</div>
								</div>
								<div class="column wow fadeInUp" align="center">
										<img class="requisitos-img" src="<?php the_sub_field('imagen'); ?>" alt="">
								</div>
							</div>

					<?php
				$i++;
				endwhile;
				endif;
				?>
			<?php 
		$i = 0;
		if (have_rows('contenido_2_del_6to_bloque')) :
			while (have_rows('contenido_2_del_6to_bloque')) : the_row();
		?>
				    <div class="intermed" style="display: none">
							<span class="requisitos-sub"><?php the_sub_field('subtitulo'); ?></span><br><br>
								<p class="requisitos-text">
									<?php the_sub_field('contenido'); ?>
								</p><br>
							</div>
							<div class="columns">
								<div class="column wow fadeInUp" align="center">
									<img class="requisitos-img" src="<?php the_sub_field('imagen'); ?>" alt="">
								</div>
								 <div class="column resp-req">
									<div class="requisitos-col2">
										<div class="intermed0 wow fadeInUp">
											<span class="requisitos-sub"><?php the_sub_field('subtitulo'); ?></span><br><br>
											<p class="requisitos-text">
												<?php the_sub_field('contenido'); ?>
											</p><br>
											<span class="des-fue pasosanf-accion"><a class="des-den como-hacer com com-unic" href="<?php echo site_url(); ?>/ser-anfitrion"><?php the_sub_field('llamada_a_la_accion'); ?><</a></span>
										</div>
									</div>
								</div> 
							</div>
							<br>
							<div class="columns com-2" style="display: none">
								<div class="column" align="center">

									<span class="des-fue pasosanf-accion"><a class="des-den como-hacer com com-unic" href="<?php echo site_url(); ?>/tutoriales"><?php the_sub_field('llamada_a_la_accion'); ?><</a></span>
								</div>
							</div>				
					<?php
				$i++;
				endwhile;
				endif;
				?>
			</div>
</section>
<!-- Fin de requisitos -->

<style>
	#cta_anfitrion{
		height: 480px !important;
		position: relative;
		top: -75px;
	}

		@media only screen and (max-width: 950px)  {
				div #cta_anfitrion{
					height: 594px !important;
				}
			}
</style>



<!-- Inicio de #lifetugo -->
<section class="life" style='background-image: url("<?php the_field('background_6to_bloque'); ?>");padding-top: 50px;'>
	<div class="container">
	<div class="columns seccion-margin">
			<?php 
		$i = 0;
		if (have_rows('contenido_del_7mo_bloque')) :
			while (have_rows('contenido_del_7mo_bloque')) : the_row();
		?>
							<div class="column life-col1" align="center">
									<div class="ant-foot wow fadeInUp">
										<span class="experience"><?php the_sub_field('descripcion'); ?></span><br><br><br>
										<span class="btn-des2 button8 sim-button button8normor2">
											<a class="btn-con2"  href="<?php echo site_url(); ?>/ser-anfitrion">
												<?php the_sub_field('boton'); ?>	
											</a>
										</span>
									</div>
								</div>
								<div class="column cel-anf wow fadeInUp">
									<div id="cta_anfitrion" data-path="<?php echo get_template_directory_uri() ?>/js/lottie/cuenta-anfitrion/cta_anfitrion.json"></div>
								</div>
							</div>					
					<?php
				$i++;
				endwhile;
				endif;
				?>
			</div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
<script>


$(document).ready(function() {

				var width = $(window).width();

				if (width<=769) {
					$('.anima-caract').attr('align','center');
				}



			    $('.responsive').slick({
			        // dots: true,
			        infinite: true,
			        speed: 300,
			        slidesToShow: 1,
			        slidesToScroll: 1,
			    });



				$('.autoplay').slick({
				  slidesToShow: 1,
				  slidesToScroll: 1,
				  autoplay: true,
				  autoplaySpeed: 5000,
				});

			$(".slick-prev").empty()
			$(".slick-prev").prepend("<i style='color:white' class='fas fa-angle-left'></i>");

			$(".slick-next").empty()
			$(".slick-next").prepend("<i style='color:white' class='fas fa-angle-right'></i>");
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


										if (squares){ 
										squares.addEventListener("mouseenter", function () {
										   animation.goToAndPlay(0);



										   if (id=="bene0") {
										   		$("#ima0").css("display", "block");
										   		$("#ima1").css("display", "none");
										   		$("#ima2").css("display", "none");
										   		$("#ima3").css("display", "none");

										   		lottie.goToAndPlay(0);

										   }
											if (id=="bene1") {
										   		$("#ima0").css("display", "none");
										   		$("#ima1").css("display", "block");
										   		$("#ima2").css("display", "none");
										   		$("#ima3").css("display", "none");

										   		lottie2.goToAndPlay(0);
										   }
											if (id=="bene2") {
										   		$("#ima0").css("display", "none");
										   		$("#ima1").css("display", "none");
										   		$("#ima2").css("display", "block");
										   		$("#ima3").css("display", "none");

										   		lottie3.goToAndPlay(0);
										   }
											if (id=="bene3") {
										   		$("#ima0").css("display", "none");
										   		$("#ima1").css("display", "none");
										   		$("#ima2").css("display", "none");
										   		$("#ima3").css("display", "block");

										   		lottie4.goToAndPlay(0);
										   }



										 });
									}


										if (id=="ima0" || id=="ima1" || id=="ima2" || id=="ima3" ) {
											return animation;
								    }

			}


			for (var i = 0; i <= 3; i++) {
				AnimacionCaracteristicas("logo"+i);	
				AnimacionCaracteristicas("bene"+i);	
				AnimacionCaracteristicas("beneresp"+i);
				AnimacionCaracteristicas("como"+i);	
				AnimacionCaracteristicas("como2"+i);
				// AnimacionCaracteristicas("ima"+i);
				AnimacionCaracteristicas("respca"+i);
			}

			var lottie = AnimacionCaracteristicas("ima0");
			var lottie2 = AnimacionCaracteristicas("ima1");
			var lottie3 = AnimacionCaracteristicas("ima2");
			var lottie4 = AnimacionCaracteristicas("ima3");

			AnimacionCaracteristicas("cta_anfitrion");



		</script>



<?php Scripts(); ?>


<?php get_footer(); ?>


