<?php get_header(); ?>
<div class="container tresc">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <!-- pętla strony -->
    <h2><?php the_title(); ?></h2>
    <?php the_post_thumbnail('thumbnail'); ?>
    <?php the_content(); ?>
	<?php
	if ( is_page('kontakt') ) {
		echo '<div class="g-recaptcha" data-sitekey="6LeNBBoUAAAAAO362vsM86gQ9dnug1F6p_WLyewe"></div>';
		get_template_part('mapa');
	}
	?>
  <!-- koniec pętli strony -->
  <?php endwhile;?>
  <?php endif; ?>
</div><!-- /containert tresci-->
<?php get_footer(); ?>

