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
		.slider button:before{
		  color: black;
		}
	</style>
<!-- Comienzo de Header -->
<section>
	<div class="header-viajero" style='background-image: url("<?php the_field('background_header'); ?>");'>
		<div class="hed_content">
			<div class="columns">
				<div class="column col-anf" align="center">
					<span class="anf-title"><?php the_field('titulo_del_header'); ?></span>
					<p class="anf-cont">
						<?php the_field('subtitulo_header'); ?>
					</p><br><br>
					<span class="anf-btn button8 sim-button button8normor"><a href="#" class="anf-btn-text" style="position:relative;z-index: 99"><?php the_field('boton_header'); ?></a></span>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Fin de header -->

<!-- Inicio de Caracteristicas -->
<section class="caracteristicas cac-anf">
	<div class="container">
		<div class="columns caract-contain">
			<div class="column caract-contain2" style="margin-top: 50px;">
				<div align="center" class="tit wow fadeInUp">
					<span class="caract-title"><?php the_field('titulo_del_bloque_2'); ?></span><hr class="anf-hr ray"><br><br>
				</div>
					<?php 
									$ani_bene = array();
									$url=get_template_directory_uri()."/js/lottie/";
									$ani_bene[0] = $url."tiro_blanco_2.json";
									$ani_bene[1] = $url."planifica_2.json";
									$ani_bene[2] = $url."monetiza.json";
									$ani_bene[3] = $url."conecta.json";
						$i=0;
						if( have_rows('contenido_del_bloque_2') ):
						    while ( have_rows('contenido_del_bloque_2') ) : the_row();
						    	if ($i==0 || $i==2) {
						    		?><div class="columns caract-cols" style="margin-top: -65px;"><?php
						    	}
						    ?>
							<div class="column wow fadeInUp">
								<div class="anima-lottie" id="logo<?php echo $i ?>" data-path="<?php echo $ani_bene[$i] ?>"></div>
								<span class="caract-sub-t"><?php the_sub_field('subtitulo'); ?></span>
								<p class="caract-sub-c"><?php the_sub_field('contenido'); ?></p> 
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
					<div style="    margin-top: -40px;">
				<span class="des-fue"><a class="des-den como-hacer com" href="<?php echo site_url(); ?>/tutoriales"><?php the_field('llamada_a_la_accion_del_2do_bloque'); ?></a></span>
				</div>
			</div>
			<div class="column caract-img-g1" align="left">
				<img class="anf-img" src="<?php echo get_site_url().'/wp-content/uploads/2018/10/Path_79-1.png'; ?>" alt="">
				<img class="anf-img2 wow fadeInUp" src="<?php the_field('imagen_del_bloque_2'); ?>" alt="">
			</div>
		</div>

		<div class="pasos-header pas" style="display: none" align="center"><br>
			<span class="pasos-title"><?php the_field('titulo_del_bloque_2'); ?></span><hr class="anf-hr"><br><br>
		</div>
		<div class="columns is-mobile caract-tablet" style="display: none;">
			<?php 
					$i=0;
					if( have_rows('contenido_del_bloque_2') ):
					    while ( have_rows('contenido_del_bloque_2')): the_row();
					   		if ($i==0 || $i==2) {
					   			?><div class="column"><?php
					   		}
					    ?>
						<div class="columns">
							<div class="column">
								<span class="caract-sub-t2"><?php the_sub_field('subtitulo'); ?></span>
								<p class="caract-sub-c"><?php the_sub_field('contenido'); ?></p> 
							</div>
						</div>
						<?php
						if ($i==1 || $i==3) {
					   		?></div><?php
					   	}
					   	if ($i==1) {
							?>
							<div class="column">
								<img class="anf-img-2" src="<?php echo get_site_url().'/wp-content/uploads/2018/10/Path_79-1.png'; ?>" alt="">
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
	<div class="pasos-header wow fadeInUp" style="padding-top: 53px;" align="center">
		<span class="pasos-title"><?php the_field('titulo_del_3er_bloque'); ?>Pasos para ser un anfitrión&nbsp;Tugo</span><hr class="anf-hr hr-pasos ext-hr"><br><br>
	</div>
	<div class="columns pasos4">
			<?php 
									$ani_bene[0] = $url."descarga_app.json";
									$ani_bene[1] = $url."conviertete_anfitrion.json";
									$ani_bene[2] = $url."perfil.json";
									$ani_bene[3] = $url."crea_experiencia_2.json";
			$i=0;
				if( have_rows('contenido_del_3er_bloque') ):
				    while ( have_rows('contenido_del_3er_bloque') ) : the_row();
				   		if ($i==0 || $i==2) {
				   			?><div class="column is-3 pasos-col"><?php
				   		}
				    ?>
					<div class="columns wow fadeInUp">
						<div class="column" align="center">
							<div class="anima-lottie" id="bene<?php echo $i ?>" data-path="<?php echo $ani_bene[$i] ?>"></div>
							<span class="pasos-subti"><?php the_sub_field('ttitulo'); ?></span><br><br>
							<p class="pasos-text"><?php the_sub_field('contenido'); ?></p>
						</div>
					</div>
					<?php
					if ($i==1 || $i==3) {
				   		?></div><?php
				   	}
				   	if ($i==1) {
				   		?>
						<div class="column is-6 pasos3 wow fadeInUp" align="center">
							<img class="pasos-col" style="margin-top: -100px;" src="<?php echo get_site_url().'/wp-content/uploads/2018/10/mageee.png'; ?>" alt="">
							<img class="pasos-col2" style="display: none;" src="<?php echo get_site_url().'/wp-content/uploads/2018/10/cta_anfitriooon.png'; ?>" alt=""><br><br>
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
				$i=0;
					if( have_rows('contenido_del_3er_bloque') ):
					    while ( have_rows('contenido_del_3er_bloque') ) : the_row();
					    ?>
						<div class="columns">
							<div align="center">
								<span class="pasos-num2"><?php the_sub_field('paso_nº'); ?></span>
								<img class="pasos-img2" src="<?php the_sub_field('imagen'); ?>" alt="">
								<span class="pasos-subti"><?php the_sub_field('ttitulo'); ?></span><br><br>
								<p class="des"><?php the_sub_field('contenido'); ?></p>
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
	<div align="center" style="padding-bottom: 10px;">

	<span class="des-fue"><a class="des-den como-hacer com" href="<?php echo site_url(); ?>/tutoriales"><?php the_field('llamada_a_la_accion_del_2do_bloque'); ?></a></span>

	</div>
	<br><br>
	</div>
</section>
<!-- Fin de pasos para ser anfitrion -->



<!-- Inicio de por qué ser anfitrión -->
<section class="porque">
	<div class="container">
		<div class="pasos-header pashed1 wow fadeInUp" style="padding-top: 50px;" align="center">
			<span class="pasos-title" ><?php the_field('titulo_del_4to_bloque'); ?></span><hr class="anf-hr ray3"><br><br>
		</div>
		<div class="pasos-header pashed2 wow fadeInUp" align="center"><br>
			<span class="pasos-title"><?php the_field('titulo_del_4to_bloque'); ?></span><hr class="anf-hr ray2"><br><br>
		</div>
		<div class="content">
			<div class="autoplay">
				<div align="center">
					<div class="columns">
						<div class="column porq-div wow fadeInUp" align="center">
							<img class="porque-img" src="<?php echo get_site_url().'/wp-content/uploads/2018/10/lorena.png'; ?>" alt="">
							<img class="porque-img2" src="<?php echo get_site_url().'/wp-content/uploads/2018/10/lorenarend.png'; ?>" alt="">
						</div>
						<div class="column col-2-anf" align="center">
							<div class="porque-col-right wow fadeInUp">
								<?php 
								$i=0;
									if( have_rows('contenido_del_4to_bloque') ):

									    while ( have_rows('contenido_del_4to_bloque') ) : the_row();
									    ?>
											<span class="porque-text-comi">“</span>
											<span class="porque-title"><?php the_sub_field('subtitulo'); ?></span><br><br>
											<p class="porque-text">
											<?php the_sub_field('contenido'); ?>
											<p class="porque-text"><br>
											<?php the_sub_field('ubicacion'); ?></p><br><br>

											<span class="des-fue"><a class="des-den como-hacer com" href="<?php echo site_url(); ?>/ser-anfitrion"><?php the_sub_field('llamada_a_la_accion'); ?></a></span>
										<?php
									    endwhile;
									else :
									    // no rows found
									endif;
					 			?>
							</div>
						</div>
					</div>
				</div>
				<div align="center">
					<div class="columns">
						<div class="column porq-div wobble" align="center">
							<img class="porque-img" src="<?php echo get_site_url().'/wp-content/uploads/2018/10/lorena.png'; ?>" alt="">
							<img class="porque-img2" src="<?php echo get_site_url().'/wp-content/uploads/2018/10/lorenarend.png'; ?>" alt="">
						</div>
						<div class="column col-2-anf" align="center">
							<div class="porque-col-right wow fadeInUp">
								<?php 
								$i=0;
									if( have_rows('contenido_del_4to_bloque') ):
									    while ( have_rows('contenido_del_4to_bloque') ) : the_row();
									    ?>
											<span class="porque-text-comi">“</span>
											<span class="porque-title"><?php the_sub_field('subtitulo'); ?></span><br><br>
											<p class="porque-text">
											<?php the_sub_field('contenido'); ?>
											<p class="porque-text"><br>
											<?php the_sub_field('ubicacion'); ?></p><br><br>
											<span class="des-fue"><a class="des-den como-hacer com" href="<?php echo site_url(); ?>/ser-anfitrion"><?php the_sub_field('llamada_a_la_accion'); ?></a></span>
										<?php
									    endwhile;
									else :
									    // no rows found
									endif;
					 			?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>
<!-- Fin de por qué ser anfitrión -->

<!-- Inicio de seccion -->
<section class="info" style='background-image: url("<?php the_field('background_4to_bloque'); ?>");'>
	<div class="container">
 	<div class="columns">
		<?php 
			$ani_bene[0] = $url."experiencias_tuyas.json";
			$ani_bene[1] = $url."como_monetizas.json";
			$k=0;
		$i=1;
			if( have_rows('contenido_del_5to_bloque') ):
			    while ( have_rows('contenido_del_5to_bloque') ) : the_row();
			    ?>
				 		<div class="column cols wow fadeInUp" align="center">
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
 	</div>
</section>
<!-- Fin de seccion -->



<!-- Inicio de requisitos -->
<section class="requisitos">
	<div class="container">
		<div class="req-tit wow fadeInUp">
				<span class="requisitos-title"><?php the_field('contenido_del_6to_bloque'); ?></span><hr class="anf-hr">
		</div>
			<?php 
			$i=0;
				if( have_rows('contenido_1_del_6to_bloque') ):
				    while ( have_rows('contenido_1_del_6to_bloque') ) : the_row();
				    ?>
							<div class="columns">
								<div class="column req-456 wow fadeInUp" align="left">
									<div class="req-tit2">
										<span class="requisitos-title"><?php the_field('titulo_del_6to_bloque'); ?></span><hr class="anf-hr">
									</div>
										<span class="requisitos-sub"><?php the_sub_field('subtitulo'); ?></span><br><br>
										<p class="requisitos-text">
											<?php the_sub_field('contenido'); ?>
										</p>
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
			$i=0;
				if( have_rows('contenido_2_del_6to_bloque') ):
				    while ( have_rows('contenido_2_del_6to_bloque') ) : the_row();
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
								<div class="column">
									<div class="requisitos-col2">
										<div class="intermed0 wow fadeInUp">
											<span class="requisitos-sub"><?php the_sub_field('subtitulo'); ?></span><br><br>
											<p class="requisitos-text">
												<?php the_sub_field('contenido'); ?>
											</p><br>
											<span class="des-fue"><a class="des-den como-hacer com" href="<?php echo site_url(); ?>/ser-anfitrion"><?php the_sub_field('llamada_a_la_accion'); ?><</a></span>
										</div>
									</div>
								</div>
							</div>
							<br>
							<div class="columns com-2" style="display: none">
								<div class="column" align="center">

									<span class="des-fue"><a class="des-den como-hacer com" href="<?php echo site_url(); ?>/tutoriales"><?php the_sub_field('llamada_a_la_accion'); ?><</a></span>
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




<!-- Inicio de #lifetugo -->
<section class="life" style='background-image: url("<?php the_field('background_6to_bloque'); ?>");margin-top: 50px;'>
	<div class="container">
	<div class="columns">
			<?php 
			$i=0;
				if( have_rows('contenido_del_7mo_bloque') ):
				    while ( have_rows('contenido_del_7mo_bloque') ) : the_row();
				    ?>
							<div class="column life-col1" align="center">
									<div class="ant-foot wow fadeInUp">
										<span class="experience"><?php the_sub_field('descripcion'); ?></span><br><br><br>
										<span class="btn-des2 button8 sim-button button8normor2">
											<a class="btn-con2" style="position:relative;z-index: 99" href="<?php echo site_url(); ?>/ser-anfitrion">
												<?php the_sub_field('boton'); ?>	
											</a>
										</span>
									</div>
								</div>
								<div class="column cel-anf wow fadeInUp">
									<img class="life-img2" src="<?php echo get_site_url().'/wp-content/uploads/2018/10/cta_anfitrion.png'; ?>" alt="">
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
				  autoplaySpeed: 2000,
				});

			$(".slick-prev").empty()
			$(".slick-prev").prepend("<i style='color:white' class='fas fa-angle-left'></i>");

			$(".slick-next").empty()
			$(".slick-next").prepend("<i style='color:white' class='fas fa-angle-right'></i>");
			});







						function AnimacionCaracteristicas(id) {	

				$('#'+id).waypoint(function(direction){
				    jQuery(document).ready(function() {
						    setTimeout(function() {
									var animation = bodymovin.loadAnimation({
								      container: document.getElementById(id),
								      renderer: 'svg',
								      loop: false,
								      autoplay: true,
								      path: $("#"+id).data("path")
								    })
						    }, 300);
						});
				    this.destroy()
				  },  
				{ 
				  offset: '75%'
				});
			}


			for (var i = 0; i <= 3; i++) {
				AnimacionCaracteristicas("logo"+i);	
				AnimacionCaracteristicas("bene"+i);	
				AnimacionCaracteristicas("como"+i);	
			}


		</script>



<?php Scripts(); ?>


<?php get_footer(); ?>


