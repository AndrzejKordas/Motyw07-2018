<?php  $scieszka = get_template_directory_uri(); ?>

<?php get_header(); ?>



		<?php
	  /*------------------------------------------------------------------
	  
					  p i e r w s z a    p ę t l a
	  
	  -------------------------------------------------------------------*/
	
	//$duplikat = null;
	
	$args = array(
	  'category__not_in' => array( -5, -6, -7 ),
	  'order' => 'DESC'
	 ); 
	
	query_posts( $args );

	while(have_posts()): the_post();
			
			//$duplikat = $post->ID; 
			
			//---------------------------------------
			$categories = get_the_category();
			$cat = $categories[0]-> term_id;
			$opis = $categories[0]-> category_description; 
			//---------------------------------------

		if ( $cat !== $nowy[$cat] ){
			//-----------------------------------
			$nowy[$cat] = $cat;
			//-----------------------------------
			echo "<div class='tloMini".$cat."'>";
			echo "<div class='container'>";
			echo '<header class="col-md-4">';
			//echo "<img src='".$scieszka."/images/ekran".$cat.".jpg' class='img-responsive ikonkiProjektow'>";
			echo "<h1>". the_category() ."</h1>";
			echo '</header>';
			echo "<article class='col-md-4'>";
			//echo $cat;
			echo $opis;
			echo '</article>';
			echo "</div>";
			echo "</div>";
		}
	
	endwhile;
	wp_reset_postdata();
	?>

<?php get_footer(); ?>
