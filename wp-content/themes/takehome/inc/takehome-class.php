<?php

/**
 * Takehome Class
 *
 * @since    1.0.0
 * @package  take_home
 */




if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


if ( ! class_exists( 'Takehome' ) ) :


	/**
	 * Takehome
	 */
	class Takehome {



		public function __construct() {
			add_action( 'after_setup_theme', array( $this, 'init_template' ) );
			add_action( 'wp_enqueue_scripts', array( $this, 'assets' ) );
			add_action( 'init', array( $this, 'research_type' ) );
			add_action('widgets_init', array( $this,'sidebar'));

		}


		public function init_template() {
			add_theme_support( 'post-thumbnails' );
			add_theme_support( 'title-tag' );
			register_nav_menus(
				array(
					'top_menu'    => 'Menú Principal',
					'mobile_menu' => 'Menú móvil',

				)
			);
		}



		public function assets() {
			// Adding reset browser styles
			wp_register_style( 'reset', get_template_directory_uri() . '/assets/css/reset.css', '', '1.0.0', 'all' );
			// Adding custom font Avenir LT Std
			wp_register_style( 'fuente', get_template_directory_uri() . '/assets/css/fuente.css', '', '1.0.0', 'all' );
			wp_register_style( 'icons', get_template_directory_uri() . '/assets/css/icon.css', '', '1.0.0', 'all' );
			// Adding global styles
			wp_register_style( 'global', get_template_directory_uri() . '/assets/css/global.css', '', '1.0.0', 'all' );
			// Adding standard styles on WordPress
			wp_register_style( 'standard', get_template_directory_uri() . '/assets/css/standard.css', '', '1.0.0', 'all' );

			wp_register_style( 'medios', get_template_directory_uri() . '/assets/css/medios.css', '', '1.0.0', 'all' );

			wp_enqueue_style( 'estilos', get_stylesheet_uri(), array( 'reset', 'fuente', 'icons', 'global', 'standard', 'medios' ), '1.0.0', 'all' );

			wp_register_script( 'jquery3.2.1', 'https://code.jquery.com/jquery-3.2.1.min.js' );

			wp_add_inline_script( 'jquery3.2.1', 'var jQuery3_2_1 = $.noConflict(true);' );

			wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js', array( 'jquery3.2.1' ), '1.0.0', true );

		}

		public function research_type() {
			$labels = array(
				'name'          => 'Research',
				'Singular_name' => 'Research',
				'menu_name'     => 'Research',
			);
			$args   = array(
				'label'              => 'research',
				'description'        => 'Research post',
				'labels'             => $labels,
				'supports'           => array( 'title', 'editor', 'thumbnail', 'revision' ),
				'public'             => true,
				'show_in_menu'       => true,
				'menu_position'      => 2,
				'menu_icon'          => 'dashicons-code-standards',
				'can_expport'        => true,
				'publicly_queryable' => true,
				'rewrite'            => true,
				'show_in_rest'       => true,

			);
			register_post_type( 'research', $args );
			
		}

		function sidebar(){
    register_sidebar( 
					array(
							'name' => 'pie de pagina',
							'id' => 'footer',
							'description' => 'zona de wigets para pie de pagina',
							'before_title' => '<p>',
							'after_title' => '</p>',
							'before_widget' => '<div id="%1$s" class="%2$s">',
							'after_widget' => '</div>',
					)

				);
		register_sidebar(		
					array(
							'name' => 'Copyright first column',
							'id' => 'copyright-first-column',
							'description' => 'Zona para copyright un menu de tres elementos max.',
							'before_title' => '<p>',
							'after_title' => '</p>',
							'before_widget' => '<div id="%1$s" class="%2$s">',
							'after_widget' => '</div>',
					)
				);
		
		register_sidebar(        
					array(
							'name' => 'Copyright second column',
							'id' => 'copyright-second-column',
							'description' => 'Zona para copyright el logo.',
							'before_title' => '<p>',
							'after_title' => '</p>',
							'before_widget' => '<div id="%1$s" class="%2$s">',
							'after_widget' => '</div>',
					)		
					);
			
		register_sidebar(
					array(
							'name' => 'Copyright third column',
							'id' => 'copyright-third-column',
							'description' => 'Zona para las redes sociales',
							'before_title' => '<p>',
							'after_title' => '</p>',
							'before_widget' => '<div id="%1$s" class="%2$s">',
							'after_widget' => '</div>',
					)
					);
		
		
		}


	}

	


	endif;


return new Takehome();
