<?php
add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('title-tag');
add_theme_support(
  'post-formats',
  array(
    'link',
    'gallery',
    'image',
  )
);

if (function_exists('add_theme_support')) {
  add_theme_support('post-thumbnails');
}

function enregistre_mon_menu()
{
  register_nav_menu('menu_principal', __('Menu principal'));
}
add_action('init', 'enregistre_mon_menu');

function register_student_post_types()
{

  // CPT Apprenant
  $labels = array(
    'name' => 'Apprenants',
    'all_items' => 'Tous les apprenants',
    'view_item' => 'Voir les apprenants',
    'singular_name' => 'Apprenant',
    'add_new' => 'Ajouter un apprenant',
    'edit_item' => 'Modifier un apprenant',
    'menu_name' => 'Apprenant'
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'show_in_rest' => true,
    'has_archive' => true,
    'supports' => array('title', 'editor', 'thumbnail'),
    'taxonomies' => array('category', 'post_tag'),
    'menu_position' => 5,
    'menu_icon' => 'dashicons-admin-users',
  );

  register_post_type('apprenant', $args);
}
add_action('init', 'register_student_post_types'); // Le hook init lance la fonction

function register_presentation_post_types()
{

  // CPT Presentation
  $labels = array(
    'name' => 'Presentations',
    'all_items' => 'Toutes les presentations',
    'view_item' => 'Voir les presentations',
    'singular_name' => 'Presentation',
    'add_new' => 'Ajouter une presentation',
    'edit_item' => 'Modifier une presentation',
    'menu_name' => 'Presentation'
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'show_in_rest' => true,
    'has_archive' => true,
    'supports' => array('title', 'editor', 'thumbnail'),
    'taxonomies' => array('category', 'post_tag'),
    'menu_position' => 5,
    'menu_icon' => 'dashicons-admin-page',
  );

  register_post_type('presentation', $args);
}
add_action('init', 'register_presentation_post_types'); // Le hook init lance la fonction

// Fonction limit excerpt
function custom_excerpt_length($length)
{
  return 10;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);
