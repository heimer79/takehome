<?php

/**
 * ThemeSettingsIdeaware
 */


class ThemeSettingsIdeaware {
	public $theme_settings_ideaware_options;

	public function __construct() {
		add_action( 'admin_menu', array( $this, 'theme_settings_ideaware_add_plugin_page' ) );
		add_action( 'admin_init', array( $this, 'theme_settings_ideaware_page_init' ) );
	}

	public function theme_settings_ideaware_add_plugin_page() {
		add_theme_page(
			'Theme settings ideaware', // page_title
			'Theme settings ideaware', // menu_title
			'manage_options', // capability
			'theme-settings-ideaware', // menu_slug
			array( $this, 'theme_settings_ideaware_create_admin_page' ) // function
		);
	}

	public function theme_settings_ideaware_create_admin_page() {
		$this->theme_settings_ideaware_options = get_option( 'theme_settings_ideaware_option_name' ); ?>

		<div class="wrap">
			<h2>Theme settings ideaware</h2>
			<p>Theme settings ideaware</p>
			<?php settings_errors(); ?>

			<form method="post" action="options.php">
				<?php
					settings_fields( 'theme_settings_ideaware_option_group' );
					do_settings_sections( 'theme-settings-ideaware-admin' );
					submit_button();
				?>
			</form>
		</div>
	<?php }

	public function theme_settings_ideaware_page_init() {
		register_setting(
			'theme_settings_ideaware_option_group', // option_group
			'theme_settings_ideaware_option_name', // option_name
			array( $this, 'theme_settings_ideaware_sanitize' ) // sanitize_callback
		);

		add_settings_section(
			'theme_settings_ideaware_setting_section', // id
			'Settings', // title
			array( $this, 'theme_settings_ideaware_section_info' ), // callback
			'theme-settings-ideaware-admin' // page
		);

		add_settings_field(
			'main_title_hero_0', // id
			'Main title hero', // title
			array( $this, 'main_title_hero_0_callback' ), // callback
			'theme-settings-ideaware-admin', // page
			'theme_settings_ideaware_setting_section' // section
		);

		add_settings_field(
			'second_title_hero_1', // id
			'Second title hero', // title
			array( $this, 'second_title_hero_1_callback' ), // callback
			'theme-settings-ideaware-admin', // page
			'theme_settings_ideaware_setting_section' // section
		);

		add_settings_field(
			'description_hero_2', // id
			'Description hero', // title
			array( $this, 'description_hero_2_callback' ), // callback
			'theme-settings-ideaware-admin', // page
			'theme_settings_ideaware_setting_section' // section
		);

		add_settings_field(
			'title_second_section_3', // id
			'Title second section', // title
			array( $this, 'title_second_section_3_callback' ), // callback
			'theme-settings-ideaware-admin', // page
			'theme_settings_ideaware_setting_section' // section
		);

		add_settings_field(
			'description_second_section_4', // id
			'Description second section', // title
			array( $this, 'description_second_section_4_callback' ), // callback
			'theme-settings-ideaware-admin', // page
			'theme_settings_ideaware_setting_section' // section
		);

		add_settings_field(
			'title_third_section_5', // id
			'Title third section', // title
			array( $this, 'title_third_section_5_callback' ), // callback
			'theme-settings-ideaware-admin', // page
			'theme_settings_ideaware_setting_section' // section
		);

		add_settings_field(
			'title_first_card_6', // id
			'Title first card', // title
			array( $this, 'title_first_card_6_callback' ), // callback
			'theme-settings-ideaware-admin', // page
			'theme_settings_ideaware_setting_section' // section
		);

		add_settings_field(
			'subtitle_first_card_7', // id
			'Subtitle first card', // title
			array( $this, 'subtitle_first_card_7_callback' ), // callback
			'theme-settings-ideaware-admin', // page
			'theme_settings_ideaware_setting_section' // section
		);

		add_settings_field(
			'title_second_card_8', // id
			'Title second card', // title
			array( $this, 'title_second_card_8_callback' ), // callback
			'theme-settings-ideaware-admin', // page
			'theme_settings_ideaware_setting_section' // section
		);

		add_settings_field(
			'subtitle_second_card_9', // id
			'Subtitle second card', // title
			array( $this, 'subtitle_second_card_9_callback' ), // callback
			'theme-settings-ideaware-admin', // page
			'theme_settings_ideaware_setting_section' // section
		);

		add_settings_field(
			'title_third_card_10', // id
			'Title third card', // title
			array( $this, 'title_third_card_10_callback' ), // callback
			'theme-settings-ideaware-admin', // page
			'theme_settings_ideaware_setting_section' // section
		);

		add_settings_field(
			'subtitle_third_card_11', // id
			'Subtitle third card', // title
			array( $this, 'subtitle_third_card_11_callback' ), // callback
			'theme-settings-ideaware-admin', // page
			'theme_settings_ideaware_setting_section' // section
		);

		add_settings_field(
			'title_fourth_card_12', // id
			'Title fourth card', // title
			array( $this, 'title_fourth_card_12_callback' ), // callback
			'theme-settings-ideaware-admin', // page
			'theme_settings_ideaware_setting_section' // section
		);

		add_settings_field(
			'subtitle_fourth_card_13', // id
			'Subtitle fourth card', // title
			array( $this, 'subtitle_fourth_card_13_callback' ), // callback
			'theme-settings-ideaware-admin', // page
			'theme_settings_ideaware_setting_section' // section
		);

		add_settings_field(
			'title_fourth_section_14', // id
			'Title fourth section', // title
			array( $this, 'title_fourth_section_14_callback' ), // callback
			'theme-settings-ideaware-admin', // page
			'theme_settings_ideaware_setting_section' // section
		);

		add_settings_field(
			'description_fourth_section_15', // id
			'Description fourth section', // title
			array( $this, 'description_fourth_section_15_callback' ), // callback
			'theme-settings-ideaware-admin', // page
			'theme_settings_ideaware_setting_section' // section
		);

		add_settings_field(
			'title_fifth_section_16', // id
			'Title fifth section', // title
			array( $this, 'title_fifth_section_16_callback' ), // callback
			'theme-settings-ideaware-admin', // page
			'theme_settings_ideaware_setting_section' // section
		);

		add_settings_field(
			'description_fifth_section_17', // id
			'Description fifth section', // title
			array( $this, 'description_fifth_section_17_callback' ), // callback
			'theme-settings-ideaware-admin', // page
			'theme_settings_ideaware_setting_section' // section
		);

		add_settings_field(
			'title_sixth_section_18', // id
			'Title sixth section', // title
			array( $this, 'title_sixth_section_18_callback' ), // callback
			'theme-settings-ideaware-admin', // page
			'theme_settings_ideaware_setting_section' // section
		);

		add_settings_field(
			'description_sixth_section_19', // id
			'Description sixth section', // title
			array( $this, 'description_sixth_section_19_callback' ), // callback
			'theme-settings-ideaware-admin', // page
			'theme_settings_ideaware_setting_section' // section
		);

		add_settings_field(
			'latitude_map_20', // id
			'Latitude map', // title
			array( $this, 'latitude_map_20_callback' ), // callback
			'theme-settings-ideaware-admin', // page
			'theme_settings_ideaware_setting_section' // section
		);

		add_settings_field(
			'longitude_map_21', // id
			'Longitude map', // title
			array( $this, 'longitude_map_21_callback' ), // callback
			'theme-settings-ideaware-admin', // page
			'theme_settings_ideaware_setting_section' // section
		);

		add_settings_field(
			'zoom_map_22', // id
			'Zoom map', // title
			array( $this, 'zoom_map_22_callback' ), // callback
			'theme-settings-ideaware-admin', // page
			'theme_settings_ideaware_setting_section' // section
		);

		add_settings_field(
			'defines_the_place_to_highlight_on_the_map_23', // id
			'Defines the place to highlight on the map', // title
			array( $this, 'defines_the_place_to_highlight_on_the_map_23_callback' ), // callback
			'theme-settings-ideaware-admin', // page
			'theme_settings_ideaware_setting_section' // section
		);

		add_settings_field(
			'id_you_tube_video_24', // id
			'id  You Tube Video', // title
			array( $this, 'id_you_tube_video_24_callback' ), // callback
			'theme-settings-ideaware-admin', // page
			'theme_settings_ideaware_setting_section' // section
		);
	}

	public function theme_settings_ideaware_sanitize($input) {
		$sanitary_values = array();
		if ( isset( $input['main_title_hero_0'] ) ) {
			$sanitary_values['main_title_hero_0'] = sanitize_text_field( $input['main_title_hero_0'] );
		}

		if ( isset( $input['second_title_hero_1'] ) ) {
			$sanitary_values['second_title_hero_1'] = sanitize_text_field( $input['second_title_hero_1'] );
		}

		if ( isset( $input['description_hero_2'] ) ) {
			$sanitary_values['description_hero_2'] = esc_textarea( $input['description_hero_2'] );
		}

		if ( isset( $input['title_second_section_3'] ) ) {
			$sanitary_values['title_second_section_3'] = sanitize_text_field( $input['title_second_section_3'] );
		}

		if ( isset( $input['description_second_section_4'] ) ) {
			$sanitary_values['description_second_section_4'] = esc_textarea( $input['description_second_section_4'] );
		}

		if ( isset( $input['title_third_section_5'] ) ) {
			$sanitary_values['title_third_section_5'] = sanitize_text_field( $input['title_third_section_5'] );
		}

		if ( isset( $input['title_first_card_6'] ) ) {
			$sanitary_values['title_first_card_6'] = sanitize_text_field( $input['title_first_card_6'] );
		}

		if ( isset( $input['subtitle_first_card_7'] ) ) {
			$sanitary_values['subtitle_first_card_7'] = sanitize_text_field( $input['subtitle_first_card_7'] );
		}

		if ( isset( $input['title_second_card_8'] ) ) {
			$sanitary_values['title_second_card_8'] = sanitize_text_field( $input['title_second_card_8'] );
		}

		if ( isset( $input['subtitle_second_card_9'] ) ) {
			$sanitary_values['subtitle_second_card_9'] = sanitize_text_field( $input['subtitle_second_card_9'] );
		}

		if ( isset( $input['title_third_card_10'] ) ) {
			$sanitary_values['title_third_card_10'] = sanitize_text_field( $input['title_third_card_10'] );
		}

		if ( isset( $input['subtitle_third_card_11'] ) ) {
			$sanitary_values['subtitle_third_card_11'] = sanitize_text_field( $input['subtitle_third_card_11'] );
		}

		if ( isset( $input['title_fourth_card_12'] ) ) {
			$sanitary_values['title_fourth_card_12'] = sanitize_text_field( $input['title_fourth_card_12'] );
		}

		if ( isset( $input['subtitle_fourth_card_13'] ) ) {
			$sanitary_values['subtitle_fourth_card_13'] = sanitize_text_field( $input['subtitle_fourth_card_13'] );
		}

		if ( isset( $input['title_fourth_section_14'] ) ) {
			$sanitary_values['title_fourth_section_14'] = sanitize_text_field( $input['title_fourth_section_14'] );
		}

		if ( isset( $input['description_fourth_section_15'] ) ) {
			$sanitary_values['description_fourth_section_15'] = esc_textarea( $input['description_fourth_section_15'] );
		}

		if ( isset( $input['title_fifth_section_16'] ) ) {
			$sanitary_values['title_fifth_section_16'] = sanitize_text_field( $input['title_fifth_section_16'] );
		}

		if ( isset( $input['description_fifth_section_17'] ) ) {
			$sanitary_values['description_fifth_section_17'] = esc_textarea( $input['description_fifth_section_17'] );
		}

		if ( isset( $input['title_sixth_section_18'] ) ) {
			$sanitary_values['title_sixth_section_18'] = sanitize_text_field( $input['title_sixth_section_18'] );
		}

		if ( isset( $input['description_sixth_section_19'] ) ) {
			$sanitary_values['description_sixth_section_19'] = esc_textarea( $input['description_sixth_section_19'] );
		}

		if ( isset( $input['latitude_map_20'] ) ) {
			$sanitary_values['latitude_map_20'] = sanitize_text_field( $input['latitude_map_20'] );
		}

		if ( isset( $input['longitude_map_21'] ) ) {
			$sanitary_values['longitude_map_21'] = sanitize_text_field( $input['longitude_map_21'] );
		}

		if ( isset( $input['zoom_map_22'] ) ) {
			$sanitary_values['zoom_map_22'] = sanitize_text_field( $input['zoom_map_22'] );
		}

		if ( isset( $input['defines_the_place_to_highlight_on_the_map_23'] ) ) {
			$sanitary_values['defines_the_place_to_highlight_on_the_map_23'] = sanitize_text_field( $input['defines_the_place_to_highlight_on_the_map_23'] );
		}

		if ( isset( $input['id_you_tube_video_24'] ) ) {
			$sanitary_values['id_you_tube_video_24'] = sanitize_text_field( $input['id_you_tube_video_24'] );
		}

		return $sanitary_values;
	}

	public function theme_settings_ideaware_section_info() {
		
	}

	public function main_title_hero_0_callback() {
		printf(
			'<input class="regular-text" type="text" name="theme_settings_ideaware_option_name[main_title_hero_0]" id="main_title_hero_0" value="%s">',
			isset( $this->theme_settings_ideaware_options['main_title_hero_0'] ) ? esc_attr( $this->theme_settings_ideaware_options['main_title_hero_0']) : ''
		);
	}

	public function second_title_hero_1_callback() {
		printf(
			'<input class="regular-text" type="text" name="theme_settings_ideaware_option_name[second_title_hero_1]" id="second_title_hero_1" value="%s">',
			isset( $this->theme_settings_ideaware_options['second_title_hero_1'] ) ? esc_attr( $this->theme_settings_ideaware_options['second_title_hero_1']) : ''
		);
	}

	public function description_hero_2_callback() {
		printf(
			'<textarea class="large-text" rows="5" name="theme_settings_ideaware_option_name[description_hero_2]" id="description_hero_2">%s</textarea>',
			isset( $this->theme_settings_ideaware_options['description_hero_2'] ) ? esc_attr( $this->theme_settings_ideaware_options['description_hero_2']) : ''
		);
	}

	public function title_second_section_3_callback() {
		printf(
			'<input class="regular-text" type="text" name="theme_settings_ideaware_option_name[title_second_section_3]" id="title_second_section_3" value="%s">',
			isset( $this->theme_settings_ideaware_options['title_second_section_3'] ) ? esc_attr( $this->theme_settings_ideaware_options['title_second_section_3']) : ''
		);
	}

	public function description_second_section_4_callback() {
		printf(
			'<textarea class="large-text" rows="5" name="theme_settings_ideaware_option_name[description_second_section_4]" id="description_second_section_4">%s</textarea>',
			isset( $this->theme_settings_ideaware_options['description_second_section_4'] ) ? esc_attr( $this->theme_settings_ideaware_options['description_second_section_4']) : ''
		);
	}

	public function title_third_section_5_callback() {
		printf(
			'<input class="regular-text" type="text" name="theme_settings_ideaware_option_name[title_third_section_5]" id="title_third_section_5" value="%s">',
			isset( $this->theme_settings_ideaware_options['title_third_section_5'] ) ? esc_attr( $this->theme_settings_ideaware_options['title_third_section_5']) : ''
		);
	}

	public function title_first_card_6_callback() {
		printf(
			'<input class="regular-text" type="text" name="theme_settings_ideaware_option_name[title_first_card_6]" id="title_first_card_6" value="%s">',
			isset( $this->theme_settings_ideaware_options['title_first_card_6'] ) ? esc_attr( $this->theme_settings_ideaware_options['title_first_card_6']) : ''
		);
	}

	public function subtitle_first_card_7_callback() {
		printf(
			'<input class="regular-text" type="text" name="theme_settings_ideaware_option_name[subtitle_first_card_7]" id="subtitle_first_card_7" value="%s">',
			isset( $this->theme_settings_ideaware_options['subtitle_first_card_7'] ) ? esc_attr( $this->theme_settings_ideaware_options['subtitle_first_card_7']) : ''
		);
	}

	public function title_second_card_8_callback() {
		printf(
			'<input class="regular-text" type="text" name="theme_settings_ideaware_option_name[title_second_card_8]" id="title_second_card_8" value="%s">',
			isset( $this->theme_settings_ideaware_options['title_second_card_8'] ) ? esc_attr( $this->theme_settings_ideaware_options['title_second_card_8']) : ''
		);
	}

	public function subtitle_second_card_9_callback() {
		printf(
			'<input class="regular-text" type="text" name="theme_settings_ideaware_option_name[subtitle_second_card_9]" id="subtitle_second_card_9" value="%s">',
			isset( $this->theme_settings_ideaware_options['subtitle_second_card_9'] ) ? esc_attr( $this->theme_settings_ideaware_options['subtitle_second_card_9']) : ''
		);
	}

	public function title_third_card_10_callback() {
		printf(
			'<input class="regular-text" type="text" name="theme_settings_ideaware_option_name[title_third_card_10]" id="title_third_card_10" value="%s">',
			isset( $this->theme_settings_ideaware_options['title_third_card_10'] ) ? esc_attr( $this->theme_settings_ideaware_options['title_third_card_10']) : ''
		);
	}

	public function subtitle_third_card_11_callback() {
		printf(
			'<input class="regular-text" type="text" name="theme_settings_ideaware_option_name[subtitle_third_card_11]" id="subtitle_third_card_11" value="%s">',
			isset( $this->theme_settings_ideaware_options['subtitle_third_card_11'] ) ? esc_attr( $this->theme_settings_ideaware_options['subtitle_third_card_11']) : ''
		);
	}

	public function title_fourth_card_12_callback() {
		printf(
			'<input class="regular-text" type="text" name="theme_settings_ideaware_option_name[title_fourth_card_12]" id="title_fourth_card_12" value="%s">',
			isset( $this->theme_settings_ideaware_options['title_fourth_card_12'] ) ? esc_attr( $this->theme_settings_ideaware_options['title_fourth_card_12']) : ''
		);
	}

	public function subtitle_fourth_card_13_callback() {
		printf(
			'<input class="regular-text" type="text" name="theme_settings_ideaware_option_name[subtitle_fourth_card_13]" id="subtitle_fourth_card_13" value="%s">',
			isset( $this->theme_settings_ideaware_options['subtitle_fourth_card_13'] ) ? esc_attr( $this->theme_settings_ideaware_options['subtitle_fourth_card_13']) : ''
		);
	}

	public function title_fourth_section_14_callback() {
		printf(
			'<input class="regular-text" type="text" name="theme_settings_ideaware_option_name[title_fourth_section_14]" id="title_fourth_section_14" value="%s">',
			isset( $this->theme_settings_ideaware_options['title_fourth_section_14'] ) ? esc_attr( $this->theme_settings_ideaware_options['title_fourth_section_14']) : ''
		);
	}

	public function description_fourth_section_15_callback() {
		printf(
			'<textarea class="large-text" rows="5" name="theme_settings_ideaware_option_name[description_fourth_section_15]" id="description_fourth_section_15">%s</textarea>',
			isset( $this->theme_settings_ideaware_options['description_fourth_section_15'] ) ? esc_attr( $this->theme_settings_ideaware_options['description_fourth_section_15']) : ''
		);
	}

	public function title_fifth_section_16_callback() {
		printf(
			'<input class="regular-text" type="text" name="theme_settings_ideaware_option_name[title_fifth_section_16]" id="title_fifth_section_16" value="%s">',
			isset( $this->theme_settings_ideaware_options['title_fifth_section_16'] ) ? esc_attr( $this->theme_settings_ideaware_options['title_fifth_section_16']) : ''
		);
	}

	public function description_fifth_section_17_callback() {
		printf(
			'<textarea class="large-text" rows="5" name="theme_settings_ideaware_option_name[description_fifth_section_17]" id="description_fifth_section_17">%s</textarea>',
			isset( $this->theme_settings_ideaware_options['description_fifth_section_17'] ) ? esc_attr( $this->theme_settings_ideaware_options['description_fifth_section_17']) : ''
		);
	}

	public function title_sixth_section_18_callback() {
		printf(
			'<input class="regular-text" type="text" name="theme_settings_ideaware_option_name[title_sixth_section_18]" id="title_sixth_section_18" value="%s">',
			isset( $this->theme_settings_ideaware_options['title_sixth_section_18'] ) ? esc_attr( $this->theme_settings_ideaware_options['title_sixth_section_18']) : ''
		);
	}

	public function description_sixth_section_19_callback() {
		printf(
			'<textarea class="large-text" rows="5" name="theme_settings_ideaware_option_name[description_sixth_section_19]" id="description_sixth_section_19">%s</textarea>',
			isset( $this->theme_settings_ideaware_options['description_sixth_section_19'] ) ? esc_attr( $this->theme_settings_ideaware_options['description_sixth_section_19']) : ''
		);
	}

	public function latitude_map_20_callback() {
		printf(
			'<input class="regular-text" type="text" name="theme_settings_ideaware_option_name[latitude_map_20]" id="latitude_map_20" value="%s">',
			isset( $this->theme_settings_ideaware_options['latitude_map_20'] ) ? esc_attr( $this->theme_settings_ideaware_options['latitude_map_20']) : ''
		);
	}

	public function longitude_map_21_callback() {
		printf(
			'<input class="regular-text" type="text" name="theme_settings_ideaware_option_name[longitude_map_21]" id="longitude_map_21" value="%s">',
			isset( $this->theme_settings_ideaware_options['longitude_map_21'] ) ? esc_attr( $this->theme_settings_ideaware_options['longitude_map_21']) : ''
		);
	}

	public function zoom_map_22_callback() {
		printf(
			'<input class="regular-text" type="text" name="theme_settings_ideaware_option_name[zoom_map_22]" id="zoom_map_22" value="%s">',
			isset( $this->theme_settings_ideaware_options['zoom_map_22'] ) ? esc_attr( $this->theme_settings_ideaware_options['zoom_map_22']) : ''
		);
	}

	public function defines_the_place_to_highlight_on_the_map_23_callback() {
		printf(
			'<input class="regular-text" type="text" name="theme_settings_ideaware_option_name[defines_the_place_to_highlight_on_the_map_23]" id="defines_the_place_to_highlight_on_the_map_23" value="%s">',
			isset( $this->theme_settings_ideaware_options['defines_the_place_to_highlight_on_the_map_23'] ) ? esc_attr( $this->theme_settings_ideaware_options['defines_the_place_to_highlight_on_the_map_23']) : ''
		);
	}

	public function id_you_tube_video_24_callback() {
		printf(
			'<input class="regular-text" type="text" name="theme_settings_ideaware_option_name[id_you_tube_video_24]" id="id_you_tube_video_24" value="%s">',
			isset( $this->theme_settings_ideaware_options['id_you_tube_video_24'] ) ? esc_attr( $this->theme_settings_ideaware_options['id_you_tube_video_24']) : ''
		);
	}

}
if ( is_admin() )
	$theme_settings_ideaware = new ThemeSettingsIdeaware();

