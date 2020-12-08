<?php get_header(); 
   include( locate_template( 'inc/vars_settings.php', false, false ) );
?>



	<main>
	 <?php
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				?>

			
			<div>
				<div >

					   <?php the_post_thumbnail( 'large' ); ?>
				
				
				</div>
				<div >
					   <?php the_content(); ?>
				
				</div>
			
			</div>

				<?php
			}
		}
		?>


<?php  include( locate_template( 'template-parts/contact-us.php', false, false ) ); ?>

	</main>

  <?php get_footer(); ?>
