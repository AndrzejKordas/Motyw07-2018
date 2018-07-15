<?php get_header(); ?>
<div class="container tresc">
<?php
if ( has_post_format( 'gallery')){
echo " ";
}
?>
	<?php
    $categories = get_the_category();
    $cat = $categories[0]-> term_id;
    $nazwa = $categories[0]-> name;
    $slug = $categories[0]-> slug; 
    ?>

  <div class="row powrotDoKategorii">
  		<h4><a href="http://a-kord.pl/category/<?php echo $slug ?>"/><span class="glyphicon glyphicon-menu-left"> </span>&laquo; <?php echo $nazwa ?></a> </h4>
  </div> 
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
  <!-- tresc wpisu -->
  <h2 class="tytul-produktu"><?php the_title();?></h2>
  <div class="col-md-12 singel"> 
    <?php the_content(); ?>
	<?php  $scieszka = get_template_directory_uri(); ?>
    <div  class="fb-share-button" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-size="small" data-mobile-iframe="true">
    <a href="http://www.facebook.com/sharer/sharer.php?s=100&p[url]=<?php the_permalink(); ?>&p[images][2]=<?php the_permalink(); ?>&p[title]=tytuł strony&p[summary]=zajawka" target="_blank" class="fb-xfbml-parse-ignore">
    <img src="<?php echo $scieszka; ?>/images/f.png" />
    </a>
</div>
  </div>
  <!-- koniec wpisu -->
  <?php endwhile;?>
  <?php endif; ?>
</div><!-- /containert -->

<!-----------------------------------------------------------------------------------
										NASTĘPNE UTWORY 
------------------------------------------------------------------------------------>
  <?php
	  echo "<div class='tloMini".$cat." text-center align-items-center nextUtwory'>"; 
	  ?><h2 style="color:#fff"><center><?php echo $nazwa; ?></center></h2><?php
	
	//pobieramy dane z aktualnego postu funkcja get_post() ona zwraca obiekt do właściwości jego odwołujemy się poprzez -> 
	  $post = get_post();
	  $ktory = $post->ID;
	  $tytulik = $post->post_title;
	
	//ustawiamy zapytanie
	 $args = array(
	  'category_name' => $nazwa
	   );     
	
	  $reszta = new WP_Query($args);
	  while ($reszta->have_posts()): $reszta->the_post();
	  update_post_caches($posts);
		//tresci	
		if($post->post_title == $tytulik){?>
			<span class="nieaktywny"><?php the_title(); ?></span><span style="margin:1rem"> </span>
			<?php }else{?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?> "><?php the_title(); ?></a><span style="margin:1rem"> </span>
			<?php }
	  	//koniec tresci
	  endwhile;
	  wp_reset_postdata();
  ?>
</div>
<!-----------------------------------------------------------------------------------
							KONIEC NASTĘPNE UTWORY 
------------------------------------------------------------------------------------>


<?php get_footer(); ?>
