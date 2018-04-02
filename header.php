<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Required metatags are always required first. -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>
		<?php 
			echo bloginfo('name');
		?>
	</title>
	<?php wp_head(); ?>
</head>
<body>
	<div class="container">
		<div class="row container-header">
			<div class="col-md-9">
				<?php
					if (function_exists('the_custom_logo')) {
						$custom_logo_id = get_theme_mod('custom_logo');
						$logo = wp_get_attachment_image_src($custom_logo_id, 'full');
						if (has_custom_logo()) {
							echo '<img src="'.esc_url($logo[0]).'">';
						} else {
							echo '<h1>'.bloginfo('name').'</h1>';
						}
					}
				?>
			</div>
			<div class="col-md-3">
				<?php if ( is_active_sidebar( 'header-side-bar' ) ) : ?>
    				<?php dynamic_sidebar( 'header-side-bar' ); ?>
				<?php endif; ?>
			</div>
		</div>
	</div> <!-- End Header (logo) container  -->
	<nav class="navbar navbar-expand-md navbar-light bg-gray" role="navigation">
		<div class="container">
    		<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar navbar-expand-md navbar-light container-secondary">
        		<?php
					wp_nav_menu( array(
  						'theme_location' => 'primary',
  						'depth' => 2,
  						'container' => false,
  						'menu_class' => 'nav navbar-nav navbar-items',
				  		'walker' => new wp_bootstrap_navwalker())
					);
        		?>
        	</div>
       	</div>
	</nav>