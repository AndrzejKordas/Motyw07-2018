<?php get_header(); ?>

	<?php
    $categories = get_the_category();
    $cat = $categories[0]-> term_id;
    $nazwa = $categories[0]-> name; 
  
	
	if( $cat == 5 || $cat == 6 || $cat == 7 ){
		$podzial = "col-md-4 text-center";
		}else{
			$podzial = "col-md-12";
			}
	
	
	?>

<div class="tlo<?php echo $cat; ?>">
    <div class="container">
    <h1 class="naglZwykly" style="margin-bottom:3.3rem" id="nagl<?php echo $cat; ?>"><?php echo $nazwa; ?></h1>
            
			<?php 
            if ( have_posts() ) : while ( have_posts() ) : the_post(); 
            ?>
            
            <div class="<?php echo $podzial; ?> przeglad">
                
                
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium_large',array( 'class' => 'img-responsive' )); ?></a>
                <h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?> "><?php the_title(); ?></a></h3>
                
            </div>
            
            <?php endwhile; else: ?>
            
            <?php endif; ?>
    </div>
   
</div>
<?php get_footer(); ?>
