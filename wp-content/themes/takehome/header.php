<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body>

<header class="site-header">


	<div class="box box-hero">
		
			<section id="logo-nav">	
				<div id="logo">

					<figure>			
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="logo">
					</figure>
				</div>
				<div id="menu" >
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
			
			<section id="hero-description">
				<h1>HR software</h1>
				<h2>that really matters</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ullamcorper, leo dapibus dictum tempor, urna arcu blandit risus, faucibus ornare sapien nulla sit amet est. Proin maximus rhoncus pretium. Sed a blandit est. Proin volutpat tempus dolor eget hendrerit. Vestibulum blandit neque a luctus ultrices. Aliquam id rhoncus libero, eget lobortis quam. </p>

				<button class="btn btn-call-to-action">Get started</button>
				
			</section>

	</div>
</header>


