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



 
add_action( 'widgets_init' , 'socialMedia_init' );

function socialMedia_init(){

   register_widget("widgetSocialMedia");
}

class socialMedia extends WP_Widget {

   function socialMedia() {

      $widget_ops = array('classname' => 'socialMedia', 'description' => 'Affiche les icones des médias sociaux');
      $this->WP_Widget('socialMedia', 'SocialMedia', $widget_ops);
   }

   function widget($args, $instance) {

      extract($args);
      $title = apply_filters('widget_title', $instance['title']);
      $media = $instance['media'];
      $media_url = $instance['media_url'];
      $media_url_img = $instance['media_url_img'];
      $media_url_img_2 = $instance['media_url_img_2'];
      $media_url_img_3 = $instance['media_url_img_3'];
      $media_url_img_4 = $instance['media_url_img_4'];
     

      echo $before_widget;
      if ( $title )
         echo $before_title . $title . $after_title;
      ?>
      <div class="media-wrapper">
         <?php if($media_url_img != ''){ ?>
            <a href="<?php echo $media_url_img; ?>" class="media-image" target="_blank"><img src="<?php echo $media_url_img; ?>" alt="<?php echo $media_url_img; ?>" /></a>

         }
         if($media_url_img_2 != ''){ ?>
            <a href="<?php echo $media_url_img_2; ?>" class="media-image" target="_blank"><img src="<?php echo $media_url_img_2; ?>" alt="<?php echo $media_url_img_2; ?>" /></a>
         }
         if($media_url_img_3 != ''){ ?>
            <a href="<?php echo $media_url_img_3; ?>" class="media-image" target="_blank"><img src="<?php echo $media_url_img_3; ?>" alt="<?php echo $media_url_img_3; ?>" /></a>
         }
         if($media_url_img_4 != ''){ ?>
            <a href="<?php echo $media_url_img_4; ?>" class="media-image" target="_blank"><img src="<?php echo $media_url_img_4; ?>" alt="<?php echo $media_url_img_4; ?>" /></a>
         }
         ?>
      </div>
      <?php
      echo $after_widget;
   }

   function update($new_instance, $old_instance) {
      $instance = $old_instance;
      $instance['title'] = strip_tags($new_instance['title']);
      $instance['media'] = strip_tags($new_instance['media']);
      $instance['media_url'] = strip_tags($new_instance['media_url']);
      $instance['media_url_img'] = strip_tags($new_instance['media_url_img']);
      $instance['media_url_img_2'] = strip_tags($new_instance['media_url_img_2']);
      $instance['media_url_img_3'] = strip_tags($new_instance['media_url_img_3']);
      $instance['media_url_img_4'] = strip_tags($new_instance['media_url_img_4']);

      return $instance;
   }

   function form($instance) {
      $defaults = array('title' => '', 'media' => '', 'media_url' => '', 'media_url_img' => '', 'media_url_img_2' => '', 'media_url_img_3' => '', 'media_url_img_4' => '');
      $instance = wp_parse_args((array) $instance, $defaults); ?>
      <p>
         <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'tbare'); ?></label>
         <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $instance['title']; ?>" />
      </p>
      <p>
         <label for="<?php echo $this->get_field_id('media'); ?>"><?php _e('Media:', 'tbare'); ?></label>
         <select id="<?php echo $this->get_field_id('media'); ?>" name="<?php echo $this->get_field_name('media'); ?>" class="widefat">
            <option value="">Select Media</option>
            <option value="facebook" <?php if($instance['media'] == 'facebook') echo 'selected="selected"'; ?>>Facebook</option>
            <option value="twitter" <?php if($instance['media'] == 'twitter') echo 'selected="selected"'; ?>>Twitter</option>

         </select>
      </p>
      <p>
         <label for="<?php echo $this->get_field_id('media_url'); ?>"><?php _e('Media URL:', 'tbare'); ?></label>
         <input class="widefat" id="<?php echo $this->get_field_id('media_url'); ?>" name="<?php echo $this->get_field_name('media_url'); ?>" type="text" value="<?php echo $instance['media_url']; ?>" />
      </p>
      <p>
         <label for="<?php echo $this->get_field_id('media_url_img'); ?>"><?php _e('Media URL Image:', 'tbare'); ?></label>
         <input class="widefat" id="<?php echo $this->get_field_id('media_url_img'); ?>" name="<?php echo $this->get_field_name('media_url_img'); ?>" type="text" value="<?php echo $instance['media_url_img']; ?>" />
      </p>
      <p>
         <label for="<?php echo $this->get_field_id('media_url_img_2'); ?>"><?php _e('Media URL Image 2:', 'tbare'); ?></label>
         <input class="widefat" id="<?php echo $this->get_field_id('media_url_img_2'); ?>" name="<?php echo $this->get_field_name('media_url_img_2'); ?>" type="text" value="<?php echo $instance['media_url_img_2']; ?>" />
      </p>
      <p>
         <label for="<?php echo $this->get_field_id('media_url_img_3'); ?>"><?php _e('Media URL Image 3:', 'tbare'); ?></label>
         <input class="widefat" id="<?php echo $this->get_field_id('media_url_img_3'); ?>" name="<?php echo $this->get_field_name('media_url_img_3'); ?>" type="text" value="<?php echo $instance['media_url_img_3']; ?>" />
      </p>
      <p>
         <label for="<?php echo $this->get_field_id('media_url_img_4'); ?>"><?php _e('Media URL Image 4:', 'tbare'); ?></label>
         <input class="widefat" id="<?php echo $this->get_field_id('media_url_img_4'); ?>" name="<?php echo $this->get_field_name('media_url_img_4'); ?>" type="text" value="<?php echo $instance['media_url_img_4']; ?>" />
      </p>
   <?php
   }
}


