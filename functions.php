<?php 

/********************************************************************************************

									REJESTRACJA MENU

*********************************************************************************************/

function register_my_menus() {
	register_nav_menus(array(
		'menu-top' => 'Menu w topie',
		'footer_menu' => 'Menu w stopce',
		'Extra-menu' => 'Menu extra'
	));
}
//rejestracja menu
add_action( 'init', 'register_my_menus' );


/********************************************************************************************

									WCZYTYWANIE SKRYPTÓW I ARKUSZY

*********************************************************************************************/



function load_styles_and_scripts() {
  //wczytywanie CSS
  wp_enqueue_style (
    'bootstrap-styles',
    'https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css'
  );

  wp_enqueue_style (
    'Akord',
    get_template_directory_uri() . '/style.css'
  );

  wp_enqueue_style (
    'font-awesome-style',
    'http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'
  );

  // wczytywanie JS
  
  wp_enqueue_script (
    'jquery',
    'https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js',
	false,
    '1.12.2',
    true
  );

  wp_enqueue_script (
    'cloudflare',
    'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js',
	 array('jquery'),
	false,
    '3.2.0',
    true
  );


  wp_enqueue_script (
    'bootstrap-scripts',
    'https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js',
	array('cloudflare'),
	false,
    '3.2.0',
    true
  );




  wp_enqueue_script (
	  'menu',
	   get_template_directory_uri() . '/js/menu.js',
	   array('jquery'),
	  '1.2',
	  true
  );

	
	if ( is_single(array('wpisz-10','utwor9')) ) {
		  wp_enqueue_script (
			'audio',
			 get_template_directory_uri() . '/js/audio.js',
			 array('jquery'),
			'1.2',
			true
		  );
	}
	
}

add_action('wp_enqueue_scripts', 'load_styles_and_scripts');

/*
add_action( 'wp_footer', 'your_function' );
function your_function(){
   echo '<h1>This is inserted at the bottom</h1>';
}
*/



/********************************************************************************************

									REJESTRACJA WIGETÓW

*********************************************************************************************/

add_action('widgets_init', 'smashing_register_sidebars');
function smashing_register_sidebars(){
	register_sidebar();
	register_sidebar(array('id' => 'albumy', 'name' => 'przegląd wszystkich abumów'));
	register_sidebar(array('id' => 'footer-spolecznosci', 'name' => 'wiget footer spolecznosci'));
	register_sidebar(array('id' => 'footer-polecamy', 'name' => 'wiget footer polecamy'));
	register_sidebar(array('id' => 'o-projekcie', 'name' => 'O projekcie', 'before_widget' => '<p id="o-projekcie">', 'after_widget' => '</p>', 'before_title' => '<h1 class="tytul">', 'after_title' => '</h1>'));
	}


/********************************************************************************************

									OBRAZKI WYRÓŻNIAJĄCE

*********************************************************************************************/

add_theme_support( 'post-thumbnails');	

/********************************************************************************************

								Własny hook

*********************************************************************************************/



add_action('cos','mojeCos');

function mojeCos(){
?>

<script>
console.log("............" + window.location);
</script>

<?php
}

/********************************************************************************************

									FORMATY WPISÓW

*********************************************************************************************/

add_action( 'after_setup_theme' , 'smashingtheme_setup');

function smashingtheme_setup(){
	add_theme_support( 'post-formats' , array(
		'aside',
		'gallery',
		'video'
	));	
	}

/********************************************************************************************

								Uruchamia się wraz z stroną kontakt

*********************************************************************************************/

add_action( 'loop_start', 'your_function' );
function your_function() {
	if ( is_page('kontakt') ) {
	
	}
}





?>