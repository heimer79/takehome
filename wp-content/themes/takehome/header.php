<?php
  require 'inc/vars_settings.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body>

<header class="site-header flex-flow-column">


	<div class="box box-hero">
		
			<section id="logo-nav" class="flex-flow-row">	
				<div id="logo">

					<figure class="desktop">			
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="logo">
					</figure>

					<figure class="mobile">			
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-bk.svg" alt="logo">
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
				<h1><?php print $main_title_hero_0; ?></h1>
				<h2><?php print $second_title_hero_1; ?></h2>
				<p><?php print $description_hero_2; ?> </p>

				<button class="btn btn-call-to-action">Get started</button>
				
			</section>

	</div>
</header>


