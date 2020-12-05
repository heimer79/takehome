<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body>

<header>
	<div >
		<div >
			<div >
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="logo">
			</div>
			<div >
				<nav>
				   <?php
					wp_nav_menu(
						array(
							'theme_location'  => 'top_menu',
							'menu_class'      => 'main-navigation',
							'container_class' => 'container-menu',

						)
					);
					?>
				</nav>
			</div>
		
		</div>
	</div>
</header>
