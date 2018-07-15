<?php  $scieszka = get_template_directory_uri(); ?>

<?php get_header(); ?>



		<?php
	$args = array(
	  'cat' => array( -5, -6, -7 ),
	  'tag' => 'pierwsze'
	 ); 
	
	query_posts( $args );

	while(have_posts()): the_post();
	
			//---------------------------------------
			$categories = get_the_category();
			$nazwa = $categories[0]-> name;
			$cat = $categories[0]-> term_id;
			$opis = $categories[0]-> category_description; 
			//---------------------------------------
	
	
	?>		
    <div class="container">
    	<div class="col-md-6 tloMini<?php echo $cat;?>">
            <h3>
            	<a href="<?php the_permalink(); ?>"><?php the_title();?></a>
            </h3>
            <div class="center-block">
            	<h4>
                	<?php echo $nazwa; ?><span class="caret"></span>
                </h4>
				<?php echo $opis; ?>
            </div>
        </div>
	    </div>
        
	
	
	<?php
	endwhile;
	
	do_action('cos');
	
	?>
    
    
    <div class="container">
            <div class="col-md-3">
            
            </div>
            <div class="col-md-9">
                <?
                //get_template_part( 'category-3' );
                ?>
            </div>    
    </div>

<?php get_footer(); ?>
