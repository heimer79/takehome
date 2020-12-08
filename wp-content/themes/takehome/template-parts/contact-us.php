<?php 
  //response generation function
  $response = "";
 
  //function to generate response
  function my_contact_form_generate_response($type, $message){
 
    global $response;
 
    if($type == "success") $response = "<div class='success'>{$message}</div>";
    else $response = "<div class='error'>{$message}</div>";
 
	}
	//response messages
	$missing_content = "Please supply all information.";
	$email_invalid   = "Email Address Invalid.";
	$message_unsent  = "Message was not sent. Try Again.";
	$message_sent    = "Thanks! Your message has been sent.";
	
	//user posted variables
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message_text'];
	$phone = $_POST['phone'];
	$radio_email = $_POST['respond_email'];
	$radio_phone = $_POST['respond_phone'];
	
	//php mailer variables
	$to = get_option('admin_email');
	$subject = "Someone sent a message from ".get_bloginfo('name');
	$headers = 'From: '. $email . "\r\n" .
		'Reply-To: ' . $email . "\r\n";

	
    

      //validate email
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        my_contact_form_generate_response("error", $email_invalid);
			 } else //email is valid
        {
        //validate presence of name and message
						if(empty($name) || empty($message)){
							my_contact_form_generate_response("error", $missing_content);
						}
						else //ready to go!
						{
							$sent = wp_mail($to, $subject, strip_tags($message), $headers);
							if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
							else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
						}
       }
    
 
  //elseif ($_POST['submitted']) my_contact_form_generate_response("error", $missing_content);

?>


	<section id="contact-us" class="center-box flex-flow-column" >
		<iframe
				width="600"
				height="450"
				frameborder="0" style="border:0"
				src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBs-ONSe2mvpxykqBE5yTyVYIgvffAfPlg
					&q=<?php print $defines_the_place_to_highlight_on_the_map_23; ?>&center=<?php print $latitude_map_20; ?>,<?php print $longitude_map_21; ?>&zoom=<?php print $zoom_map_22; ?>" allowfullscreen>
		</iframe>
		
		<div id="contact-form" class="box-shadow-section">

				<h2>Contact Us</h2>
				<p>Send us a message</p>
				<form action="<?php get_site_url(); ?>" method="get">

					  <input type="text" name="name" value="<?php echo esc_attr($_POST['name']); ?>" placeholder="Name">
						<input type="email" name="email" value="<?php echo esc_attr($_POST['email']); ?>" placeholder="Email">
						 <input type="tel" name="phone" value="<?php echo esc_attr($_POST['phone']); ?>" placeholder="Phone">

						 <label for="">How would you like us to respond?</label>

						 <div>

							 <input type="radio" id="email" name="respond" value="<?php echo esc_attr($_POST['respond_email']); ?>" class="box-shadow-section">
							<label for="male">Email</label>
							<input type="radio" id="phone" name="respond" value="<?php echo esc_attr($_POST['respond_phone']); ?>" class="box-shadow-section">
							<label for="phone">Phone</label>
						

							<textarea name="message" rows="20" cols="30" >
									<?php echo esc_textarea($_POST['message_text']); ?>
							</textarea>
						</div>

							<input type="submit" value="Submit">


				</form>
				

		</div>
<hr>
	</section>