<?php

require_once '../../../wp-load.php';

require locate_template( 'inc/vars_settings.php', false, false );




get_header(); ?>



<?php

if ( $_POST ) {
	$name          = '';
	$email         = '';
	$phone         = '';
	$respond_radio = '';
	$message       = '';

	if ( isset( $_POST['name'] ) ) {
		$name = filter_var( $_POST['name'], FILTER_SANITIZE_STRING );
	}

	if ( isset( $_POST['email'] ) ) {
		$email = str_replace( array( "\r", "\n", '%0a', '%0d' ), '', $_POST['email'] );
		$email = filter_var( $email, FILTER_VALIDATE_EMAIL );
	}

	if ( isset( $_POST['phone'] ) ) {
		$phone = filter_var( $_POST['phone'], FILTER_SANITIZE_STRING );
	}


	if ( isset( $_POST['message'] ) ) {
		$message = htmlspecialchars( $_POST['message'] );
	}

	$respond_radio = $_POST['respond'];


	$recipient = $email_recipient_contact_form_25;

	$subject = 'Message from: ' . $name;


	$headers = 'MIME-Version: 1.0' . "\r\n"
	. 'Content-type: text/html; charset=utf-8' . "\r\n"
	. 'From: ' . $email . "\r\n";

	$message1  = "<p><strong>Name:</strong> $name</p>";
	$message1 .= "<p><strong>The phone number:</strong> $phone </p>";
	$message1 .= "<p><strong>The email address:</strong> $email </p>";
	$message1 .= "<p><strong>How would you like us to respond?</strong> $respond_radio </p>";
	$message1 .= "<p><strong>The message:</strong> <br> $message </p>";

	$message_final = $message1;

	if ( wp_mail( $recipient, $subject, $message_final, $headers ) ) {
		echo "<p class=\" respond-form \">Thank you for contacting us, $visitor_name. You will get a reply within 24 hours.</p>";
	} else {
		echo '<p class=" respond-form " >We are sorry but the email did not go through.</p>';
	}
} else {
	echo '<p class=" respond-form " >Something went wrong</p>';
}



?>

	


  <?php
	get_footer();
