<?php
/**
 * Plugin Name: réseaux sociaux
 * * Plugin URI: 
 * Description: plugin pour ajouté icone média sociaux depuis l'admin board
 * Version: 0.1
 * Text Domain: tbare-wordpress-plugin-demo
 * Author: MaGueulle
 * Author URI:
 */

//lier css et js
function socialmedia_enqueue_style() {
    wp_enqueue_style('my_custom_style', plugin_dir_url( __FILE__) . 'custom/style.css');
    }
    add_action('admin_print_styles', 'socialmedia_enqueue_style');

//création  widget affichant les icones de réseaux sociaux  dans le footer
function socialMedia_widget() {
    register_widget( 'socialMedia_widget' );
}
add_action( 'widgets_init', 'socialMedia_widget' );


class socialmedia_widget extends WP_Widget {

    function __construct() {
        parent::__construct(
            'socialmedia_widget', // Base ID
            __( 'réseaux sociaux', 'text_domain' ), // Name
            array( 'description' => __( 'Widget pour afficher les icones de réseaux sociaux', 'text_domain' ), ) // Args
        );
    }

    public function widget( $args, $instance ) {
        echo $args['before_widget'];
        if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ). $args['after_title'];
        }
        echo '<div class="socialmedia">';
        echo '<a href="'.$instance['facebook'].'"><img src="'.plugins_url( 'media/facebook.png', __FILE__ ).'"class="iconesoc" alt="facebook"></a>';
        echo '<a href="'.$instance['twitter'].'"><img src="'.plugins_url( 'media/twitter.png', __FILE__ ).'"class="iconesoc" alt="twitter"></a>';
        echo '<a href="'.$instance['instagram'].'"><img src="'.plugins_url( 'media/instagram.png', __FILE__ ).'"class="iconesoc" alt="instagram"></a>';
        echo '<a href="'.$instance['linkedin'].'"><img src="'.plugins_url( 'media/linkedin.png', __FILE__ ).'"class="iconesoc" alt="linkedin"></a>';
        echo '</div>';
        echo $args['after_widget'];
    }

    public function form( $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : __( 'New title', 'text_domain' );
        $facebook = ! empty( $instance['facebook'] ) ? $instance['facebook'] : __( '', 'text_domain' );
        $twitter = ! empty( $instance['twitter'] ) ? $instance['twitter'] : __( '', 'text_domain' );
        $instagram = ! empty( $instance['instagram'] ) ? $instance['instagram'] : __( '', 'text_domain' );
        $linkedin = ! empty( $instance['linkedin'] ) ? $instance['linkedin'] : __( '', 'text_domain' );
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'facebook' ); ?>"><?php _e( 'Facebook:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'facebook' ); ?>" name="<?php echo $this->get_field_name( 'facebook' ); ?>" type="text" value="<?php echo esc_attr( $facebook ); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'twitter' ); ?>"><?php _e( 'Twitter:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'twitter' ); ?>" name="<?php echo $this->get_field_name( 'twitter' ); ?>" type="text" value="<?php echo esc_attr( $twitter ); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'instagram' ); ?>"><?php _e( 'Instagram:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'instagram' ); ?>" name="<?php echo $this->get_field_name( 'instagram' ); ?>" type="text" value="<?php echo esc_attr( $instagram ); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'linkedin' ); ?>"><?php _e( 'linkedin:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'linkedin' ); ?>" name="<?php echo $this->get_field_name( 'linkedin' ); ?>" type="text" value="<?php echo esc_attr( $linkedin ); ?>">
        </p>
        <?php


    }
    
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['facebook'] = ( ! empty( $new_instance['facebook'] ) ) ? strip_tags( $new_instance['facebook'] ) : '';
        $instance['twitter'] = ( ! empty( $new_instance['twitter'] ) ) ? strip_tags( $new_instance['twitter'] ) : '';
        $instance['instagram'] = ( ! empty( $new_instance['instagram'] ) ) ? strip_tags( $new_instance['instagram'] ) : '';
        $instance['linkedin'] = ( ! empty( $new_instance['linkedin'] ) ) ? strip_tags( $new_instance['linkedin'] ) : '';
        return $instance;
    }
}
//créer redirection page admin si on clique sur le lien vide
    





