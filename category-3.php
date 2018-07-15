<?php get_header(); ?>
<div class="zagajnik">
<div class="container">
<h1>Zagajnik</h1>
        <?php
		
		 
		if ( have_posts() ) : while ( have_posts() ) : the_post(); 
        //get_template_part( 'content',get_post_format() );
        ?>
        
        <div class="col-md-12 przeglad">
    		<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?> "><?php the_title(); ?></a></h2>
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium_large',array( 'class' => 'img-responsive' )); ?></a>
    	</div>
        
        <?php endwhile; else: ?>
        
        <?php endif; ?>
</div>
</div>
<?php get_footer(); ?>
