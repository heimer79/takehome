<?php


if ( file_exists( dirname( __FILE__ ) . '/stack/local.php' ) ) {
	include dirname( __FILE__ ) . '/stack/local.php';
} else {
	include dirname( __FILE__ ) . '/stack/remote.php';
}


