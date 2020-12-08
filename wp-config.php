<?php


if ( file_exists( dirname( __FILE__ ) . '/stack/local.php' ) ) {
	include dirname( __FILE__ ) . '/stack/local.php';
} else {
	include dirname( __FILE__ ) . '/stack/remote.php';
}


/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';