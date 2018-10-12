<?php

	/*
	 * Template name: Homepage
	 *
	*/

	get_header();



?>

<style>
	.slick-prev:before {
		color: black !important;
	}
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

<!-- Comienzo de Header -->
<section class="header-viajero" style='background-image: url("<?php the_field('background_header'); ?>);");'>
	<div class="container">
		<div class="hed_content">
			<div class="columns">
				<div class="column is-6">
					<div class="hed_row column-head-1">
					<p class="hed_title">
						<?php the_field('titulo_del_header'); ?>
					</p>
					<p class="hed_text"><?php the_field('descripcion_del_header'); ?></p>
					<span class="btn-general button8 sim-button button8nor"><a href="#" style="position:relative;z-index: 99"><?php the_field('boton_del_header'); ?></a></span>
					</div>
				</div>
				<div class="column is-6 header-col2">
					<div class="hed_row2 column-head-2">
					<img src="<?php the_field('imagen_del_header'); ?>" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Fin de header -->

<!-- Inicio de Caracteristicas -->
<section class="caracteristicas">
	<div class="container">
	<div class="columns caract-contain wow zoomIn">
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
				$i=0;
				if( have_rows('contenido_del_2do_bloque') ):
				    while ( have_rows('contenido_del_2do_bloque') ) : the_row();
				   		if ($i==0 || $i==2) {
				   			?><div class="columns col-caract2" style="margin-top: -40px;"><?php
				   		}
				    ?>
					<div class="column col-caract">
						<img src="<?php the_sub_field('imagen'); ?>"><br>
						<span class="caract-sub-t"><?php the_sub_field('titulo'); ?></span>
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
				 <div align="center">
				<a class="como-hacer com hvr-pulse-grow" style="padding-top: 40px;" href="<?php echo site_url(); ?>/tutoriales"><?php the_field('llamada_a_la_accion_del_2do_bloque'); ?></a>
				</div>
			</div>
		</div>
	</div>




	<div align="center" class="tit-tab" style="display: none;">
		<span class="caract-tab"><?php the_field('titulo_del_2do_bloque'); ?></span>
		<hr class="hr-tab">
	</div>
	<div class="columns tab-tab" style="display: none;">
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
<section class="como-funciona" style='background-position-x: -10px;background-position-y: 303px;background-repeat: no-repeat;background-size: cover;background-image: url("<?php the_field('background_del_3er_bloque'); ?>");'>
	<div class="container">
		<div align="center" style="margin-bottom: 18%;padding-top: 47px;" class="wow zoomInUp">
			<span class="caract-title com-fun"><?php the_field('titulo_del_3er_bloque'); ?></span>
			<hr class="caract-hr caract-hr-com">
		</div>
	<div class="como-container" class="wow hinge">
		<div class="wow fadeInLeft">
			<img class="como-img" src="<?php echo get_site_url().'/wp-content/uploads/2018/10/iPad_Mockup.png'; ?>" alt="">
		</div>
		<div class="columns com-cont wow fadeInRight">
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
			<div class="slider responsive">
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
				<a class="como-hacer2 hvr-pulse-grow" href="<?php echo site_url(); ?>/tutoriales">¿Cómo lo hago? >></a>
			</div>
		</div>
		</div>
</section>
<!-- Fin de como funciona Tugo -->





<!-- Inicio de Beneficios -->
<section class="beneficios">
	<div class="container">
		<div align="center" class="wow bounceInDown" style="padding-top: 37px;">
			<span class="caract-title"><?php the_field('titulo_del_4to_bloque'); ?></span>
			<hr class="caract-hr hr-bene">
		</div>
		<div class="columns bene-con">
				<?php 
					if( have_rows('contenido_del_4to_bloque') ):
					    while ( have_rows('contenido_del_4to_bloque') ) : the_row();
					    ?>
						<div class="column bene-cols" align="center">
							<div align="center" class="wow slideInLeft">
								<img class="bene-img" class="como-img" src="<?php the_sub_field('imagen'); ?>" alt=""><br>
								<span class="bene-ti"><?php the_sub_field('titulo'); ?></span>
							</div><br>
							<div class="wow slideInRight">
								<span class="bene-te"><?php the_sub_field('contenido'); ?></span>
							</div>
						</div>
						<?php
					    endwhile;
					else :
					    // no rows found
					endif;
				?>
		</div>
		<div align="center" style="padding-bottom: 36px;padding-top: 20px;" class="wow fadeIn">
			<a class="como-hacer hvr-pulse-grow" style="padding-top: 50px;" href="<?php echo site_url(); ?>/tutoriales"><?php the_field('llamada_a_la_accion_del_4to_bloque'); ?></a>
		</div>
	</div>
</section>
<!-- Fin de beneficios -->

<!-- Inicio de Socios -->
<section class="socios" style='height: 352px;background-image: url("<?php the_field('background_del_5to_bloque'); ?>");'>
	<div class="container">
	<div align="center" class="soc-tit fadeInUp" style="padding-top: 74px;">
		<span class="soc-title"><?php the_field('titulo_del_5to_bloque'); ?></span>
		</div>
		<div class="columns soc-log wow flipInY">
			<?php 
				if( have_rows('contenido_del_5to_bloque') ):
				    while ( have_rows('contenido_del_5to_bloque') ) : the_row();
				    ?>
					<div class="column" align="center">
						<img src="<?php the_sub_field('logo_socio'); ?>" alt="">
					</div>
					<?php
				    endwhile;
				else :
				endif;
			?>
		</div>
	</div>
</section>
<!-- Fin de socios -->

<!-- Inicio de #lifetugo -->

<section class="life" style='background-image: url("<?php the_field('background_del_6to_bloque'); ?>");'>
	<div class="container">
		<div class="columns">
			<div class="column life-col1" align="center">
				<div class="life-col3 wow lightSpeedIn">
				<?php 
					if( have_rows('contenido_del_6to_bloque') ):
					    while ( have_rows('contenido_del_6to_bloque') ) : the_row();
					    ?>
							<span class="experience"><?php the_sub_field('titulo'); ?></span><br>
							<span class="hash"><?php the_sub_field('subtitulo'); ?></span><br>
							<div style="margin-top: 31px;">
							<span class="btn-general button8 sim-button button8nor"><a class="btn-con" style="position:relative;z-index: 99" href=""><?php the_sub_field('boton'); ?></a></span>
							</div>
						<?php
					    endwhile;
					else :
					endif;
				?>
				</div>
			</div>
			<div class="column life-col2 wow rotateIn">
				<img class="life-img" src="<?php echo get_site_url().'/wp-content/uploads/2018/10/cta_v.png'; ?>" alt="">
			</div>
		</div>
	</div>
</section>


			


		<script>
			$(document).ready(function() {

			    $('.responsive').slick({
				  slidesToShow: 1,
				  slidesToScroll: 1,
				  autoplay: true,
				  autoplaySpeed: 2000,
			    });


			});
		</script>



<?php Scripts(); ?>


<?php get_footer(); ?>


