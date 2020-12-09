<?php

class social_buttons extends WP_Widget {

	public function __construct() {

		parent::__construct(
			'social-buttons',
			__( 'Social Buttons', 'social-button' ),
			array(
				'description' => __( 'Social Buttons on footer in order', 'social-button' ),
				'classname'   => 'icon social-buttons-footer',
			)
		);

	}

	public function widget( $args, $instance ) {

		echo '<ul>
						 <li><a href=' . $instance['sb_one'] . ' ><span class="icon icon-facebook2"></a></li>
						 <li><a href=' . $instance['sb_two'] . ' ><span class="icon icon-twitter"></a></li>
						 <li><a href=' . $instance['sb_three'] . ' ><span class="icon icon-youtube"></a></li>
						 <li><a href=' . $instance['sb_four'] . ' ><span class="icon icon-pinterest"></a></li>
						 <li><a href=' . $instance['sb_five'] . ' ><span class="icon icon-linkedin"></a></li>
		     </ul>
		';

	}

	public function form( $instance ) {

		// Set default values
		$instance = wp_parse_args(
			(array) $instance,
			array(
				'sb_one'   => '#',
				'sb_two'   => '#',
				'sb_three' => '#',
				'sb_four'  => '#',
				'sb_five'  => '#',
			)
		);

		// Retrieve an existing value from the database
		$sb_one   = ! empty( $instance['sb_one'] ) ? $instance['sb_one'] : '';
		$sb_two   = ! empty( $instance['sb_two'] ) ? $instance['sb_two'] : '';
		$sb_three = ! empty( $instance['sb_three'] ) ? $instance['sb_three'] : '';
		$sb_four  = ! empty( $instance['sb_four'] ) ? $instance['sb_four'] : '';
		$sb_five  = ! empty( $instance['sb_five'] ) ? $instance['sb_five'] : '';

		// Form fields
		echo '<p>';
		echo '	<label for="' . $this->get_field_id( 'sb_one' ) . '" class="sb_one_label">' . __( 'Facebook url', 'social-button' ) . '</label>';
		echo '	<input type="url" id="' . $this->get_field_id( 'sb_one' ) . '" name="' . $this->get_field_name( 'sb_one' ) . '" class="widefat" placeholder="' . esc_attr__( '', 'social-button' ) . '" value="' . esc_attr( $sb_one ) . '">';
		echo '</p>';

		echo '<p>';
		echo '	<label for="' . $this->get_field_id( 'sb_two' ) . '" class="sb_two_label">' . __( 'Twitter url', 'social-button' ) . '</label>';
		echo '	<input type="url" id="' . $this->get_field_id( 'sb_two' ) . '" name="' . $this->get_field_name( 'sb_two' ) . '" class="widefat" placeholder="' . esc_attr__( '', 'social-button' ) . '" value="' . esc_attr( $sb_two ) . '">';
		echo '</p>';

		echo '<p>';
		echo '	<label for="' . $this->get_field_id( 'sb_three' ) . '" class="sb_three_label">' . __( 'Youtube url', 'social-button' ) . '</label>';
		echo '	<input type="url" id="' . $this->get_field_id( 'sb_three' ) . '" name="' . $this->get_field_name( 'sb_three' ) . '" class="widefat" placeholder="' . esc_attr__( '', 'social-button' ) . '" value="' . esc_attr( $sb_three ) . '">';
		echo '</p>';

		echo '<p>';
		echo '	<label for="' . $this->get_field_id( 'sb_four' ) . '" class="sb_four_label">' . __( 'Pinteres url', 'social-button' ) . '</label>';
		echo '	<input type="url" id="' . $this->get_field_id( 'sb_four' ) . '" name="' . $this->get_field_name( 'sb_four' ) . '" class="widefat" placeholder="' . esc_attr__( '', 'social-button' ) . '" value="' . esc_attr( $sb_four ) . '">';
		echo '</p>';

		echo '<p>';
		echo '	<label for="' . $this->get_field_id( 'sb_five' ) . '" class="sb_five_label">' . __( 'Linkedin url', 'social-button' ) . '</label>';
		echo '	<input type="url" id="' . $this->get_field_id( 'sb_five' ) . '" name="' . $this->get_field_name( 'sb_five' ) . '" class="widefat" placeholder="' . esc_attr__( '', 'social-button' ) . '" value="' . esc_attr( $sb_five ) . '">';
		echo '</p>';

	}

	public function update( $new_instance, $old_instance ) {

		$instance = $old_instance;

		$instance['sb_one']   = ! empty( $new_instance['sb_one'] ) ? strip_tags( $new_instance['sb_one'] ) : '';
		$instance['sb_two']   = ! empty( $new_instance['sb_two'] ) ? strip_tags( $new_instance['sb_two'] ) : '';
		$instance['sb_three'] = ! empty( $new_instance['sb_three'] ) ? strip_tags( $new_instance['sb_three'] ) : '';
		$instance['sb_four']  = ! empty( $new_instance['sb_four'] ) ? strip_tags( $new_instance['sb_four'] ) : '';
		$instance['sb_five']  = ! empty( $new_instance['sb_five'] ) ? strip_tags( $new_instance['sb_five'] ) : '';

		return $instance;

	}

}

function sb_register_widgets() {
	register_widget( 'social_buttons' );
}
add_action( 'widgets_init', 'sb_register_widgets' );
