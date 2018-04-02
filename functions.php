<?php
	/*
	*	This file simply call to all the required files that have to be included into the functions file.
	*/
	
	require get_template_directory() . '/functions/scripts.php';
	require get_template_directory() . '/functions/styles.php';
	require get_template_directory() . '/functions/support.php';
	require_once get_template_directory() . '/functions/class-wp-bootstrap-navwalker.php';

	add_theme_support( 'post-thumbnails' );  //Enable support for post thumbnails...
?>