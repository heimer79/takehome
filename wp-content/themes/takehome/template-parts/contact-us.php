<?php 
	
    
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
				<form action="<?php echo get_template_directory_uri().'/sent-contact.php';  ?>" method="post">

					  <input type="text" name="name" value="" placeholder="Name">
						<input type="email" name="email" value="" placeholder="Email">
						 <input type="tel" name="phone" value="" placeholder="Phone">

						 <label for="">How would you like us to respond?</label>

						 <div>

							 <input type="radio" id="email" name="respond" value="email" class="box-shadow-section">
							<label for="male">Email</label>
							<input type="radio" id="phone" name="respond" value="phone" class="box-shadow-section">
							<label for="phone">Phone</label>
						

							<textarea name="message" rows="20" cols="30" >
									
							</textarea>
						</div>

							<input type="submit" value="Submit">


				</form>
				

		</div>
<hr>
	</section>