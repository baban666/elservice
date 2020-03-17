<?php
/**
 * Created by PhpStorm.
 * User: veraksoff
 * Date: 30.09.2019
 * Time: 10:28
 */

add_action( 'widgets_init', 'mfc_init' );

function mfc_init() {
    register_widget( 'mfc_widget' );
}

class mfc_widget extends WP_Widget
{

    public function __construct()
    {
        $widget_details = array(
            'classname' => 'mfc_widget',
            'description' => 'Creates a featured item consisting of a title, image, description and link.'
        );

        parent::__construct( 'mfc_widget', 'Featured Item Widget', $widget_details );

    }


    public function widget( $args, $instance )
    {
        echo $args['before_widget'];
        if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . $instance['title'] . $args['after_title'];
        }

        ?>
        <div class="footer-log">
            <img src="<?php echo $instance['image_url']; ?>" width="207" height="45"  alt="">
        </div>
            <span class="about-text-footer">
                 <p><?php echo wpautop( esc_html( $instance['description'] ) ); ?></p>
            </span>
        <div class="footer-info">
        <div class="contact-info">
            <span class="item">
               <i class="fas fa-clock"></i><p><?php echo esc_html( $instance['address'] ) ?></p>
            </span>
        </div>
        <div class="phone">
            <span class="item">
               <i class="fas fa-phone"></i><p><?php echo esc_html( $instance['phone'] ) ?></p>
            </span>
        </div>
        <div class="email">
            <span class="item">
               <a href="mailto:<?php echo $instance['email']; ?>"><i class="fas fa-paper-plane"></i><?php echo $instance['email'] ; ?></a>
            </span>
        </div>
        </div>

        <?php

        echo $args['after_widget'];
    }

    public function update( $new_instance, $old_instance ) {
        return $new_instance;
    }

    public function form( $instance )
    {

        $title = '';
        if( !empty( $instance['title'] ) ) {
            $title = $instance['title'];
        }

        $description = '';
        if( !empty( $instance['description'] ) ) {
            $description = $instance['description'];
        }

        $email = '';
        if( !empty( $instance['email'] ) ) {
            $email = $instance['email'];
        }

        $phone = '';
        if( !empty( $instance['phone'] ) ) {
            $phone = $instance['phone'];
        }

        $address = '';
        if( !empty( $instance['address'] ) ) {
            $address = $instance['address'];
        }

        $image_url = '';
        if(isset($instance['image_url']))
        {
            $image_url = $instance['image_url'];
        }
        ?>
        <p>
            <label for="<?php echo $this->get_field_name( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>

        <p>
            <label for="<?php echo $this->get_field_name( 'description' ); ?>"><?php _e( 'Description:' ); ?></label>
            <textarea class="widefat" id="<?php echo $this->get_field_id( 'description' ); ?>" name="<?php echo $this->get_field_name( 'description' ); ?>" type="text" ><?php echo esc_attr( $description ); ?></textarea>
        </p>

        <p>
            <label for="<?php echo $this->get_field_name( 'email' ); ?>"><?php _e( 'Email:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'email' ); ?>" name="<?php echo $this->get_field_name( 'email' ); ?>" type="text" value="<?php echo esc_attr( $email ); ?>" />
        </p>

        <p>
            <label for="<?php echo $this->get_field_name( 'phone' ); ?>"><?php _e( 'Phone:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'phone' ); ?>" name="<?php echo $this->get_field_name( 'phone' ); ?>" type="text" value="<?php echo esc_attr( $phone ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_name( 'address' ); ?>"><?php _e( 'Address:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'address' ); ?>" name="<?php echo $this->get_field_name( 'address' ); ?>" type="text" value="<?php echo esc_attr( $address ); ?>" />
        </p>

        <p>
            <label for="<?php echo $this->get_field_name( 'image_url' ); ?>"><?php _e( 'Image Link:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'image_url' ); ?>" name="<?php echo $this->get_field_name( 'image_url' ); ?>" type="text" value="<?php echo esc_attr( $image_url ); ?>" />
        </p>
        <?php
    }
}