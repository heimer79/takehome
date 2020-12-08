<?php

require_once("../../../wp-load.php");




get_header(); ?>



<?php

	 if($_POST) {
    $name = "";
    $email = "";
    $phone = "";
    $respond_radio = "";
    $message = "";
     
    if(isset($_POST['name'])) {
      $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    }
     
    if(isset($_POST['email'])) {
        $email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['email']);
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    }
     
    if(isset($_POST['phone'])) {
        $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
    }
     
       
    if(isset($_POST['message'])) {
        $message = htmlspecialchars($_POST['message']);
    }
     
    
		$recipient = "heimer79@gmail.com";
		
		$subject = "Message from: ".$name;
    
     
    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $email . "\r\n";
     
    if(wp_mail($recipient, $subject, $message, $headers)) {
        echo "<p>Thank you for contacting us, $visitor_name. You will get a reply within 24 hours.</p>";
    } else {
        echo '<p>We are sorry but the email did not go through.</p>';
    }
     
} else {
    echo '<p>Something went wrong</p>';
}



?>

	


  <?php get_footer(); ?>
