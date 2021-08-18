<?php
/**
 * Plugin Name: SocialMedia
 * * Plugin URI: 
 * Description: plugin pour ajouté icone média sociaux depuis l'admin board
 * Version: 0.1
 * Text Domain: tbare-wordpress-plugin-demo
 * Author: MaGueulle
 * Author URI:
 */



 
// créer widget qui permet de récuper l'url de medias sociaux et générer le shortcode pour aficher l'icone  
class SocialMedia_Widget extends WP_Widget {

   // constructeur
   function SocialMedia_Widget() {
      // on définit le nom et l'identifiant du widget
      $this->widget_name = 'SocialMedia';
      $this->widget_id = 'SocialMedia';
      // on définit la description du widget
      $this->widget_description = 'Widget permettant d\'afficher les icones de médias sociaux';
      // on définit le nom de la classe de l'widget
      $this->widget_class = 'SocialMedia_Widget';
      // on définit le nom de la classe CSS de l'widget
      $this->widget_cssclass = 'socialMedia_widget';
      // on définit le nom de l'attribut id du widget
      $this->widget_attribute_id = 'socialMedia_widget';
      // on définit le nom de la classe CSS de l'affichage du widget
      $this->widget_cssclass_instance = 'socialMedia_widget_instance';
      
      $this->widget_cssclass_title = 'socialMedia_widget_title';
     
      $this->widget_cssclass_content = 'socialMedia_widget_content';
      
      $this->widget_cssclass_footer = 'socialMedia_widget_footer';
      
      $this->widget_cssclass_footer_content = 'socialMedia_widget_footer_content';
      
      $this->widget_cssclass_footer_title = 'socialMedia_widget_footer_title';
    
      $this->widget_cssclass_footer_icon = 'socialMedia_widget_footer_icon';
      
      $this->widget_cssclass_footer_icon_facebook = 'socialMedia_widget_footer_icon_facebook';
     
      $this->widget_cssclass_footer_icon_twitter = 'socialMedia_widget_footer_icon_twitter';
      
      $this->widget_cssclass_footer_icon_google = 'socialMedia_widget_footer_icon_google';
      
      $this->widget_cssclass_footer_icon_linkedin = 'socialMedia_widget_footer_icon_linkedin';
      
      $this->widget_cssclass_footer_icon_youtube = 'socialMedia_widget_footer_icon_youtube';
      
      $this->widget_cssclass_footer_icon_instagram = 'socialMedia_widget_footer_icon_instagram';
    

   }

   // on définit le nom de la classe CSS de l'affichage du widget
   function widget($args, $instance) {
      // on définit le titre du widget
      $title = apply_filters('widget_title', $instance['title']);
      // on définit le contenu du widget
      $content = apply_filters('widget_content', $instance['content']);
      // on définit le footer du widget
      $footer = apply_filters('widget_footer', $instance['footer']);
     
      $footer_content = apply_filters('widget_footer_content', $instance['footer_content']);
      
      $footer_title = apply_filters('widget_footer_title', $instance['footer_title']);
      
      $footer_icon = apply_filters('widget_footer_icon', $instance['footer_icon']);
      
      $footer_icon_facebook = apply_filters('widget_footer_icon_facebook', $instance['footer_icon_facebook']);
   
      $footer_icon_twitter = apply_filters('widget_footer_icon_twitter', $instance['footer_icon_twitter']);
      
      $footer_icon_google = apply_filters('widget_footer_icon_google', $instance['footer_icon_google']);
      
      $footer_icon_linkedin = apply_filters('widget_footer_icon_linkedin', $instance['footer_icon_linkedin']);
      
      $footer_icon_youtube = apply_filters('widget_footer_icon_youtube', $instance['footer_icon_youtube']);
      
      $footer_icon_instagram = apply_filters('widget_footer_icon_instagram', $instance['footer_icon_instagram']);

      echo $args['before_widget'];
      if ($title) {
         echo $args['before_title'] . $title . $args['after_title'];
      }
      echo '<div class="socialMedia_widget_container">';
      echo '<div class="socialMedia_widget_content">';
      echo $content;
      echo '</div>';
      echo '<div class="socialMedia_widget_footer">';
      echo '<div class="socialMedia_widget_footer_content">';
      echo $footer_content;
      echo '</div>';
      echo '<div class="socialMedia_widget_footer_title">';
      echo $footer_title;
      echo '</div>';
      echo '<div class="socialMedia_widget_footer_icon">';
      echo '<a href="'.$footer_icon_facebook.'" target="_blank"><i class="fa fa-facebook"></i></a>';
      echo '<a href="'.$footer_icon_twitter.'" target="_blank"><i class="fa fa-twitter"></i></a>';
      echo '<a href="'.$footer_icon_google.'" target="_blank"><i class="fa fa-google-plus"></i></a>';
      echo '<a href="'.$footer_icon_linkedin.'" target="_blank"><i class="fa fa-linkedin"></i></a>';
      echo '<a href="'.$footer_icon_youtube.'" target="_blank"><i class="fa fa-youtube-play"></i></a>';
      echo '<a href="'.$footer_icon_instagram.'" target="_blank"><i class="fa fa-instagram"></i></a>';

      echo '</div>';
      echo '</div>';
      echo $args['after_widget'];
   }
}


// on définit le nom de la classe CSS de l'affichage du widget
function socialMedia_register_widgets() {
   register_widget('socialMedia_widgets');
}

