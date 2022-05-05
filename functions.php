<?php 

function cidw_4w4_enqueue(){
    //wp_enqueue_style('style_css', get_stylesheet_uri());
    wp_enqueue_style('4w4-le-style', get_template_directory_uri() . '/style.css', array(), filemtime(get_template_directory() . '/style.css'), false);

	wp_enqueue_style('cidw-4w4-google-font',"https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Poppins:wght@300;400;500&family=Roboto&display=swap", false);
	
	wp_register_script('cidw-4w4-boite-modale',
					  get_template_directory_uri() . '/javascript/boite-modale.js',
					  array(), filemtime(get_template_directory() . '/javascript/boite-modale.js'),
					  true); // true pour intégrer le js en bas du document

	wp_register_script('cidw-4w4-carrousel',
					  get_template_directory_uri() . '/javascript/carrousel.js',
					  array(), filemtime(get_template_directory() . '/javascript/carrousel.js'),
					  true); // true pour intégrer le js en bas du document


	// Si la catégorie actuelle est un cours,
	if (is_category('cours'))
	{
		// Activer le script de la boite modale
		wp_enqueue_script('cidw-4w4-boite-modale');
	}

	// Si l'on est à la page d'accueil,
	if (is_front_page())
	{
		// Activer le script du carrousel
		wp_enqueue_script('cidw-4w4-carrousel');
	}
}

add_action("wp_enqueue_scripts", "cidw_4w4_enqueue");

/* -------------------------------------------------- Enregistrer le menu */
function cidw_4w4_register_nav_menu(){
    register_nav_menus( array(
        'menu_principal' => __( 'Menu principal', 'cidw_4w4' ),
        'menu_footer'  => __( 'Menu footer', 'cidw_4w4' ),
        'footer_colonne'  => __( 'Menu footer colonne', 'cidw_4w4' ),
		'menu_cours'  => __( 'Menu cours', 'cidw_4w4' ),
		'menu_accueil' => __( 'Menu accueil', 'cidw_4w4' )
    ) );
}
add_action( 'after_setup_theme', 'cidw_4w4_register_nav_menu', 0 );

/* ---------------------------------------------------------------------- filtrer les choix du menu principal */
function cidw_4w4_filtre_choix_menu($obj_menu){
    //var_dump($obj_menu);
    foreach($obj_menu as $cle => $value)
    {
       // print_r($value);
       //$value->title = substr($value->title,0,7);
       $value->title = wp_trim_words($value->title,3,"...");
       // echo $value->title . '<br>';
    }
    return $obj_menu;
}
add_filter("wp_nav_menu_objects","cidw_4w4_filtre_choix_menu");

/* --------------------------------------------------------------------------------------- */
/* --------------------------------- add_theme_support() --------------------------------- */
/* --------------------------------------------------------------------------------------- */
add_theme_support( 'post-thumbnails' );

add_theme_support( 'custom-logo', array(
    'height' => 120,
    'width'  => 180,
) );



/* --------------------------------------------------------------------------------------- */
/* --------------------------- Enregistrement des Sidebars ------------------------------- */
/* --------------------------------------------------------------------------------------- */
add_action( 'widgets_init', 'my_register_sidebars' );

function my_register_sidebars()
{
	register_sidebar (
        
		array (
			'id' => 'footer_colonne_1',
			'name' => __( 'Footer colonne 1' ),
            'description' => __( 'Ce sidebar s\'affiche dans une colonne du pied de page'),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);

    register_sidebar (
        
		array (
			'id' => 'footer_colonne_2',
			'name' => __( 'Footer colonne 2' ),
            'description' => __( 'Ce sidebar s\'affiche dans une colonne du pied de page'),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);

    register_sidebar (
        
		array (
			'id' => 'footer_colonne_3',
			'name' => __( 'Footer colonne 3' ),
            'description' => __( 'Ce sidebar s\'affiche dans une colonne du pied de page'),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);

    register_sidebar (
        
		array (
			'id' => 'footer_ligne_1',
			'name' => __( 'Footer ligne 1' ),
            'description' => __( 'Ce sidebar s\'affiche dans une ligne du pied de page'),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);
}


/* ---------------------------------------------------- afficher une description de choix de menu */
/* Cette nouvelle version permet de ne pas avoir de warning */
function prefix_nav_description( $item_output, $item)
{
    if ( !empty( $item->description ) )
	{
        $item_output = str_replace( '</a>',
        '<hr><span class="menu-item-description">' . $item->description . '</span><div class="menu-item-icone"></div>' .  '</a>',
              $item_output );
    }

    return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'prefix_nav_description', 10, 2 );


/* --------------------------------------------------------------------  add_theme_support() 
https://developer.wordpress.org/reference/functions/add_theme_support/
*/
function cidw_4w4_add_theme_support(){
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo', array(
        'height' => 100,
        'width'  => 100,
    ) );
    add_image_size( 'annonce', 2000, 350,array( 'center', 'center' ) ); // (cropped)
}
add_action( 'after_setup_theme', 'cidw_4w4_add_theme_support' );


/**
 * $query contient la requête "mysql" qui permet d'extraire le contenu de la nouvelle page que l'on tente d'accéder
 * @param : WP_Query $query
 * @return l'objet WP_query $query
 */
function cidw_4w4_pre_get_posts(WP_Query $query)
{
	// $ordre = get_query_var()
	// ...

	if (is_admin()
		|| !$query->is_main_query()
		|| !$query->is_category(array('cours', 'web', 'jeu', 'design', 'video', '3d', 'utilitaire')))
	{	
		$query->set('posts_per_page', -1);
		$query->set('orderby', 'title');
		$query->set('order', 'DESC');
		
		// 	var_dump($query);
		// 	die();
		
		return $query;
	}

	else
	{

	}

//   if (!is_admin() && is_main_query() && is_category(array('web','cours','design','video','utilitaire','creation-3d','jeu'))) 
//     {
//     //$ordre = get_query_var('ordre');
//     $query->set('posts_per_page', -1);
//     // $query->set('orderby', $cle);
//     $query->set('orderby', 'title');
//     // $query->set('order',  $ordre);
//     $query->set('order',  'ASC');
//     // var_dump($query);
//     // die();
//    }
}
function cidw_4w4_query_vars($params){
    $params[] = "cletri";
    $params[] = "ordre";
    //$params["cletri"] = "title";
    //var_dump($params); die();
    return $params;
}
add_action('pre_get_posts', 'cidw_4w4_pre_get_posts');
add_filter('query_vars', 'cidw_4w4_query_vars' );

function trouve_la_categorie($tableau)
{
	foreach ($tableau as $cle)
	{
		if (is_category($cle)) return ($cle);
	}
}

require_once("options/apparence.php");

?>