<em>content-gallery</em>
    <div class="col-md-4 przeglad">
    	<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?> "><?php the_title(); ?></a></h2>
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium_large',array( 'class' => 'img-responsive' )); ?></a>
    </div>
    

