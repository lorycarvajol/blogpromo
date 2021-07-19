<?php

function blogpromo_support()
{
add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('title-tag');
register_nav_menu('header', 'En tête du menu');
register_nav_menu('footer', 'Pied de page');
}

function enregistre_mon_menu() {
    register_nav_menu( 'menu_principal', __( 'Menu principal' ) );
}
add_action( 'init', 'enregistre_mon_menu' );