<?php

	/*
	 * Template name: FAQ
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


<section class="faq zoom-in" style='background-image: url("<?php the_field('background_header'); ?>");'>

  <div class="columns">
    <div class="columns" align="center" style="margin-left: 5px;">
      <div class="faq-hed">
        <span class="faq-tit"><?php the_field('titulo_header'); ?></span><br><br>
        <span class="faq-sub"><?php the_field('descripcion_header'); ?></span>
      </div>
    </div>
  </div>
</section>



<section class="faq-content">
<div class="container">
  <div class="columns">
    <div class="column is-7-desktop">
      <div class="cont-col1">  
      <div class="wow fadeInUp">
        <span class="faq-via">Viajero</span>
        </div>     
        <div class="wow fadeInUp">
          <?php 
          $i=0;
            if( have_rows('faq_viajero') ):
                while ( have_rows('faq_viajero') ) : the_row();
                ?>
                  <button class="accordion" <?php if ($i==0): ?> style="margin-top: 46px;"<?php endif ?>><?php the_sub_field('pregunta'); ?></button>
                  <div class="panel">
                    <p>
                      <?php the_sub_field('respuesta'); ?>
                    </p>
                  </div>
                  <hr class="faq-hr">        
              <?php
              $i++;
                endwhile;
            endif;
          ?>
          </div>
          <br><br>
          <div class="wow fadeInUp">
            <span class="faq-anf">Anfitrion</span>
          </div>
          <div class="wow fadeInUp">
        <?php 
          $i=0;
            if( have_rows('faq_anfitrion') ):
                while ( have_rows('faq_anfitrion') ) : the_row();
                ?>
                  <button class="accordion" <?php if ($i==0): ?> style="margin-top: 46px;"<?php endif ?>><?php the_sub_field('pregunta'); ?></button>
                  <div class="panel">
                    <p>
                      <?php the_sub_field('respuesta'); ?>
                    </p>
                  </div>
                  <hr class="faq-hr">        
              <?php
              $i++;
                endwhile;
            endif;
          ?>
        </div>
      </div>
    </div>
    <div class="column is-5-desktop faq-col2">
      <div class="cont-col2">
        <span class="dud">¿Tienes una duda?</span><br>
        <span class="dud2">Escríbenos tu pregunta</span><br><br>
  
        <div class="columns wow fadeInUp">
          <div class="column"><input type="text" name="" placeholder="Nombre" class="input in-anf"></div>
          <div class="column"><input type="text" name="" placeholder="Apellido" class="input in-anf"></div>
        </div>
        <div class="columns wow fadeInUp">
          <div class="column">
            <input type="text" name="" placeholder="Apellido" class="input in-anf">
          </div>
        </div>
        <div class="columns wow fadeInUp">
          <div class="column">
            <input type="text" name="" placeholder="Apellido" class="input in-anf">
          </div>
        </div>
        <div class="columns wow fadeInUp">
          <div class="column btx" align="right">
            <button type="submit" class="btn-enviarpre button8 button8faq">
              <span class="text-enviarpre" style="position:relative;z-index: 99">
                Enviar
              </span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>




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


