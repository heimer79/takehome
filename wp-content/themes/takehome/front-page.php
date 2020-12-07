<?php get_header();
  require 'inc/vars_settings.php'
?>

<main>

	<section id="get-ahead-section" >

		<aside id="get-ahead">
		
		</aside>

		<div id="get-ahead-text">

			<h2><?php print $title_second_section_3; ?></h2>
			<p><?php print $description_second_section_4; ?></p>
		
		</div>
	</section>

	<section id="based-data" class="box center-box" >
		<h3 class="box"><?php print $title_third_section_5; ?></h3>
		<div class="card flex-flow-row"><span class="icon icon-ticket"></span><div><h3><?php print $title_first_card_6; ?></h3><small><?php print $subtitle_first_card_7; ?></small></div></div>
		<div class="card flex-flow-row"><span class="icon icon-users"></span><div><h3><?php print $title_second_card_8; ?></h3><small><?php print $subtitle_second_card_9; ?></small></div></div>
		<div class="card flex-flow-row"><span class="icon icon-accessibility"></span><div><h3><?php print $title_third_card_10; ?></h3><small><?php print $subtitle_third_card_11; ?></small></div></div>
		<div class="card flex-flow-row"><span class="icon icon-wrench"></span><div><h3><?php print $title_fourth_card_12; ?></h3><small><?php print $subtitle_fourth_card_13; ?></small></div></div>
	</section>


	<section id="see-where" class="center-box flex-flow-column">
		<h2 class="center-text"><?php print $title_fourth_section_14; ?></h2>
		<p class="center-text"><?php print $description_fourth_section_15; ?></p>
	<label for="industry">Industry</label>
	<div class="input-container">
			<i class="icon icon-home"> </i> 
			<input class="input-field" list="industries" name="industry" id="industry" placeholder="Select">
	</div>
		<datalist id="industries">
			<option value="Gas">
			<option value="Automobile">
			<option value="Food">
			<option value="Health">
		</datalist>
		
	</section>
	<section id="research-post" class="center-box">

	<h2 class="center-text"><?php print $title_fifth_section_16; ?></h2>
		<p class="center-text"><?php print $description_fifth_section_17; ?></p>

	<?php
				$args = array(
					'post_type'     => 'research',
					'post_per_page' => 4,
					'order'         => 'DESC',
					'orderby'       => 'title',
				);

								$research = new WP_Query( $args );

				if ( $research->have_posts() ) {
					while ( $research->have_posts() ) {
						$research->the_post();
						?>


							<article class="box-shadow-section flex-flow-row">
								
								<figure>

									<?php
									if ( has_post_thumbnail() ) {
													the_post_thumbnail( 'thumbnail' );
									} else {
											echo '<img src="' . get_bloginfo( 'template_url' ) . '/assets/img/Group-1.svg" />';
									}

									?>
									
								</figure>
								<div>
									<h2><?php the_title(); ?></h2>
									<p><a href="<?php the_permalink(); ?>">Read report</a></p>
								</div>
								
						</article>



						<?php
					}
				}


				?>

	
	</section>

	<section id="see-where-you-stand" class="center-box flex-flow-column">

		<h2 class="center-text"><?php print $title_sixth_section_18; ?> </h2>
			<p class="center-text"><?php print $description_sixth_section_19; ?></p>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php print $id_you_tube_video_24; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

	</section>

	<section id="contact-us" class="center-box flex-flow-column" >
		<iframe
				width="600"
				height="450"
				frameborder="0" style="border:0"
				src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBs-ONSe2mvpxykqBE5yTyVYIgvffAfPlg
					&q=<?php print $defines_the_place_to_highlight_on_the_map_23; ?>&center=<?php print $latitude_map_20; ?>,<?php print $longitude_map_21; ?>&zoom=<?php print $zoom_map_22; ?>" allowfullscreen>
		</iframe>
		<div id="address" class="box-shadow-section flex-flow-row">
			<div id="logo">
				 <figure>
					 <img src="<?php echo get_bloginfo( 'template_url' ) . '/assets/img/Group-12.svg'; ?>" alt="">
				</figure>
			</div>
			<div id="text">
				<h3>FIELDS COURT STATION ROAD</h3>
				<p>Epworth DN9 1JZ - United Kingdom Company Reg: 8202467</p>

			</div>
		</div>
		<div id="contact-form" class="box-shadow-section">

				<h2>Contact Us</h2>
				<p>Send us a message</p>
				<form action="" method="post">

					  <input type="text" name="name" placeholder="Name">
						<input type="email" name="email" placeholder="Email">
						 <input type="tel" name="phone" placeholder="Phone">

						 <label for="">How would you like us to respond?</label>

						 <div>

							 <input type="radio" id="email" name="respond" value="email" class="box-shadow-section">
							<label for="male">Email</label>
							<input type="radio" id="phone" name="respond" value="phone" class="box-shadow-section">
							<label for="phone">Phone</label>
						

							<textarea name="message" >
									
							</textarea>
						</div>

							<input type="submit" value="Submit">


				</form>
				

		</div>

	</section>

	

</main>







<?php get_footer(); ?>
