<?php get_header(); ?>



<?php
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		?>

					<h1 class='my-3'> <?php the_title(); ?></h1>
			<?php the_content(); ?>

				<?php
	}
}
?>

hello





<?php get_footer(); ?>
