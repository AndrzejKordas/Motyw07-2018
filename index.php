<?php get_header(); ?>
    <div class="container tresc">
	    <?php while ( have_posts() ) : the_post();  //get_template_part( 'content',get_post_format() ); ?>
        <div class="col-md-4 przeglad">
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail',array( 'class' => 'img-fluid' )); ?></a>
        <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?> "><?php the_title(); ?></a></h2>...
		</div>
        <?php endwhile;?>
    </div>
<?php get_footer(); ?>
