<?php 

	/*
	*	Define the scripts that are going to be used in the theme.
	*/
	function JIDTheme_scripts() {
		wp_enqueue_script("bootstrap-js",
						  get_template_directory_uri()."/bs/js/bootstrap.min.js",
						  array(), 
						  "4.9.4", 
						  true);
	}

	add_action("wp_enqueue_scripts", "JIDTheme_scripts");
?>