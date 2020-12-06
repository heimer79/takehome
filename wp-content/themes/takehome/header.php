<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body>

<header class="site-header">
	
	<section id="logo-nav">	
		<div>

			<figure>			
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="logo">
			</figure>
		</div>
		<div >
			<nav id="desktop-menu">
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
			
			<nav id="mobile-menu">
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'mobile_menu',
						'menu_class'      => 'menu-toggle',
						'container_class' => 'main-small-navigation',

					)
				);
				?>
			</nav>
		</div>
	</section>
	
	<section>
		
	</section>
		
		
	
</header>


