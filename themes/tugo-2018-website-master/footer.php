
<footer class="footer">
	<div class="columns">
		<div class="column osc">
			<img src="<?php bloginfo('template_directory'); ?>/images/logo_header.png" alt="">
		</div>
	</div>
	<div class="columns">
	  <div class="column is-6">
	  	<div class="foot-col1">
		  	<p class="foot-des">
		  		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium repudiandae explicabo minima eligendi asperiores.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium repudiandae explicabo minima eligendi asperiores.
		 	</p>
	  	</div>
	  </div>
	  <div class="column menu-foot">
	  	<a class="foot-des" style="font-size: 13px;" href="<?php echo site_url(); ?>/politicas">Politicas de privacidad</a><br>
	  	<a class="foot-des" style="font-size: 13px;" href="<?php echo site_url(); ?>/politicas">Términos y condiciones</a><br>
	  	<a class="foot-des" style="font-size: 13px;" href="<?php echo site_url(); ?>/tutoriales">Tutoriales</a>
	  </div>
	  <div class="column row-net">
	  	<div class="columns social-foot">



	  		<?php

				// check if the repeater field has rows of data
				if( have_rows('redes_social') ):

				 	// loop through the rows of data
				    while ( have_rows('redes_social') ) : the_row();


				    	?>

							<a href="<?php the_sub_field('facebook'); ?>"><div class="column is-3" align="center"><i class="fab fa-facebook-f fa-2x" style="color: #5c5c5c;"></i></div></a>
					  		<a href="<?php the_sub_field('instagram'); ?>"><div class="column is-3" align="center"><i class="fab fa-instagram fa-2x" style="color: #5c5c5c;"></i></div></a>
					  		<a href="<?php the_sub_field('twitter'); ?>"><div class="column is-3" align="center"><i class="fab fa-twitter fa-2x" style="color: #5c5c5c;"></i></div></a>


					  	<?php
				        

				    endwhile;

				else :

				    // no rows found

				endif;

				?>
	  
	  </div>
	  </div>
	</div>
</footer>
<div style="background-color: #363636;height: 38px;">
	<div class="container">
		<p class="foot-fil" align="center">2018 Experiencias únicas</p>
	</div>
</div>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.2/dist/jquery.fancybox.min.js"></script>
<script src='https://kenwheeler.github.io/slick/slick/slick.js'></script>


<style>

.foot-fil{
		/* Style for "2018 Exper" */
	border: 1px solid rgba(0, 0, 0, 0);
	color: #ffffff;
	font-size: 10px;
	font-weight: 300;
	line-height: 20px;
	padding-top: 9px;
}

.fab{
	font-size: 24px;
}

.row-net{
	margin-right: 6%;
}


.foot2{
        text-align: center;
        font-family: sans-serif;
        color: whitesmoke;
        width: 100%;
        bottom: 0;
        background-color: #363636;
}

.footer{
	position: relative;
}
.osc{
	    margin-left: 3%;
}
.foot-col1{
	margin-left: 6%; 
	margin-right: 60%;
}
	.footer{
		background-color: #141414;
		font-family: Montserrat;
		padding: 3rem 3.5rem 3rem;
	}
	.foot-des{
    width: 326px;
		color: #5c5c5c;
		font-family: Montserrat;
		font-size: 10px;
		font-weight: 800;
	}

@media only screen and (max-width: 769px) {

				.row-net{
				margin-right: 0%;
			}

			.osc {
			    margin-left: 0%;
			    text-align: center;
			}

			.foot-col1 {
			    margin-left: 0px; 
			    margin-right: 0px; 
			    text-align: center;
			}

			.menu-foot{
				text-align: center;
			}

			.social-foot{
				display: flex;
    			text-align: center;
			}
			.foot-des {
			    width: 100%;
			}

}

			
</style>


<?php wp_footer(); ?>
	</body>
<html>

