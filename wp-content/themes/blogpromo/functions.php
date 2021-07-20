<?php



add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('title-tag');

if (function_exists( 'add_theme_support' )) {
    add_theme_support( 'post-thumbnails' );
  }

function enregistre_mon_menu() {
    register_nav_menu( 'menu_principal', __( 'Menu principal' ) );
}
add_action( 'init', 'enregistre_mon_menu' );



function capitaine_register_post_types() {

// CPT Portfolio
$labels = array(
'name' => 'Portfolio',
'all_items' => 'Tous les projets', // affiché dans le sous menu
'singular_name' => 'Projet',
'add_new_item' => 'Ajouter un projet',
'edit_item' => 'Modifier le projet',
'menu_name' => 'Portfolio'
);

$args = array(
'labels' => $labels,
'public' => true,
'show_in_rest' => true,
'has_archive' => true,
'supports' => array( 'title', 'editor','thumbnail' ),
'menu_position' => 5,
'menu_icon' => 'dashicons-admin-customizer',
);

register_post_type( 'portfolio', $args );
}
add_action( 'init', 'capitaine_register_post_types' ); // Le hook init lance la fonction
