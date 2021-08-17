<?php
/**
 * Plugin Name: SocialMedia
 */



 
 add_action('admin_bar_menu', 'socialMedia', 0);
 function socialMedia(){
    global $wp_admin_bar;
    $wp_admin_bar->add_menu( array(
        'parent' => 'wp-logo',
        'id' => 'socialMedia',
        'title' => __('SocialMedia', 'socialMedia'),
        'href' => '#',
        'meta' => array('class' => 'socialMedia')
    ));
}