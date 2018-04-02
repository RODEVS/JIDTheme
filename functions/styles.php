<?php 

	/*
	*	Define the stylesheets that are going to be used in the theme.
	*/
	function JIDTheme_style() {
		wp_enqueue_style("bootstrap-css", get_template_directory_uri()."/bs/css/bootstrap.min.css");
		wp_enqueue_style("style-css", get_template_directory_uri()."/style.css");
	}

	add_action("wp_enqueue_scripts", "JIDTheme_style");
?>