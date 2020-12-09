<?php get_header();
   require locate_template( 'inc/vars_settings.php', false, false );
?>



	<main class="post-main-content">
	 <?php
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				?>

			
			<div class="meta-box">

				<aside id="post-date" class="metabox-text" >

					<h3>Posted on:</h3>
					<p><?php print get_the_date(); ?> </p>

				</aside>


				<aside id="post-share" class="metabox-text" >

					<h3>Share</h3>
					<ul>
									<li class="share-facebook">	
											<amp-social-share
												type="facebook"
												width="27"
												height="27"
												class="icon icon-Facebook i-amphtml-element i-amphtml-layout-fixed i-amphtml-layout-size-defined amp-social-share-facebook i-amphtml-built i-amphtml-layout"
												data-param-app_id="1323239768014851"
												i-amphtml-layout="fixed"
												style="width: 27px; height: 27px;"
												role="button"
												tabindex="0"
												aria-label="Share by facebook"
											></amp-social-share>
								</li>
								<li class="share-twitter">
												<amp-social-share
														type="twitter"
														width="27"
														height="27"
														class="icon icon-Twitter i-amphtml-element i-amphtml-layout-fixed i-amphtml-layout-size-defined amp-social-share-twitter i-amphtml-built i-amphtml-layout"
														i-amphtml-layout="fixed"
														style="width: 27px; height: 27px;"
														role="button"
														tabindex="0"
														aria-label="Share by twitter"
													>
												</amp-social-share>
								</li>
								<li class="share-linkedin">
													<amp-social-share
														type="linkedin"
														width="27"
														height="27"
														class="icon icon-Linkedin i-amphtml-element i-amphtml-layout-fixed i-amphtml-layout-size-defined amp-social-share-linkedin i-amphtml-built i-amphtml-layout"
														i-amphtml-layout="fixed"
														style="width: 27px; height: 27px;"
														role="button"
														tabindex="0"
														aria-label="Share by linkedin"
													></amp-social-share>
								</li>
								<li class="share-whatsapp">
													<amp-social-share
														type="whatsapp"
														width="27"
														height="27"
														class="icon icon-Whatsapp i-amphtml-element i-amphtml-layout-fixed i-amphtml-layout-size-defined amp-social-share-whatsapp i-amphtml-built i-amphtml-layout"
														i-amphtml-layout="fixed"
														style="width: 27px; height: 27px;"
														role="button"
														tabindex="0"
														aria-label="Share by whatsapp"
													></amp-social-share>

								</li>
								<li class="share-mail"><amp-social-share
														type="email"
														width="27"
														height="27"
														class="icon icon-envelope i-amphtml-element i-amphtml-layout-fixed i-amphtml-layout-size-defined amp-social-share-email i-amphtml-built i-amphtml-layout"
														i-amphtml-layout="fixed"
														style="width: 27px; height: 27px;"
														role="button"
														tabindex="0"
														aria-label="Share by email"
													></amp-social-share>
													
								</li>
					</ul>

				</aside>


				


			</div>
			
				<div class="post-content box-shadow-section" >
						<article>
					   <?php the_content(); ?>
						</article>
				
				</div>
			
			

				<?php
			}
		}
		?>


<?php require locate_template( 'template-parts/contact-us.php', false, false ); ?>

	</main>

  <?php get_footer(); ?>
