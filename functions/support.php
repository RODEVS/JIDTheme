<?php

   /*
   * Enable the support for custom logo so, you can modify the logo by choosing it on the Admin Panel.
   */

	function JIDTheme_custom_logo_setup() {
		add_theme_support('custom-logo', array(
					  'height'	  => 320,
					  'width' 	  => 200,
					  'flex-height' => true, 
					  'flex-width'  => true,
					  'header-text' => array('site-title', 'site-description'),
				));	
	}

    /*
    * This function enable the main manu located in the header of the website.
    */

	function register_header_menu() {
  		register_nav_menus( array(
								'primary' => __( 'Primary Menu', 'Main_Menu' ),
						   ) );
	}

    /*
    * This is a custom sidebar which is used in the header for add basic stuff like the contact image
    * or a search box.
    */

	function my_custom_sidebar() {
    	register_sidebar(
        	array (
            	'name' => __( 'Header Sidebar', 'Header Sidebar' ),
            	'id' => 'header-side-bar',
            	'description' => __( 'Custom Sidebar', 'Sidebar for header widgets' ),
            	'before_widget' => '<div class="header-widget-content">',
            	'after_widget' => "</div>",
            	'before_title' => '<h3 class="header-widget-title">',
            	'after_title' => '</h3>',
        	)
    	);
	}

    /*
    *   This is for the support of the main sidebar located in the left side of the website.navbar-link
    *   this is used in the home.php and index.php
    */
	function main_custom_sidebar() {
    	register_sidebar(
        	array (
            	'name' => __( 'Main Sidebar', 'Main Sidebar' ),
            	'id' => 'main-side-bar',
            	'description' => __( 'Custom Sidebar', 'Main custom sidebar' ),
            	'before_widget' => '<div class="main-widget-content">',
            	'after_widget' => "</div>",
            	'before_title' => '<h3 class="main-widget-title">',
            	'after_title' => '</h3>',
        	)
    	);
    }

    /*
    * The next 3 functions are to define the three footer sidebars, sidebar_1 is on the left side, sidebar_2 is on the middle and sidebar_3 is on the right side.
    */

    function footer_custom_sidebar_1() {
        register_sidebar(
            array (
                'name'          => __('Footer Sidebar 1', 'Footer Sidebar 1'),
                'id'            => 'footer-side-bar-1',
                'description'   => __('Custom Sidebar 1', 'Footer Sidebar 1'),
                'before_widget' => '<div class="footer-widget-content">',
                'after_widget'  => "</div>",
                'before_title'  => '<h3 class="footer-widget-title">', 
                'after_title'   => '</h3>',
            )
        );
    }

    function footer_custom_sidebar_2() {
        register_sidebar(
            array (
                'name'          => __('Footer Sidebar 2', 'Footer Sidebar 2'),
                'id'            => 'footer-side-bar-2',
                'description'   => __('Custom Sidebar 2', 'Footer Sidebar 2'),
                'before_widget' => '<div class="footer-widget-content">',
                'after_widget'  => "</div>",
                'before_title'  => '<h3 class="footer-widget-title">', 
                'after_title'   => '</h3>',
            )
        );
    }

    function footer_custom_sidebar_3() {
        register_sidebar(
            array (
                'name'          => __('Footer Sidebar 3', 'Footer Sidebar 3'),
                'id'            => 'footer-side-bar-3',
                'description'   => __('Custom Sidebar 3', 'Footer Sidebar 3'),
                'before_widget' => '<div class="footer-widget-content">',
                'after_widget'  => "</div>",
                'before_title'  => '<h3 class="footer-widget-title">', 
                'after_title'   => '</h3>',
            )
        );
    }

    /* 
    *   In order to can recognize and use the functions defined before, we have to add these by using
    *   the function add_action.
    */
    add_action('widgets_init', 'footer_custom_sidebar_1');
    add_action('widgets_init', 'footer_custom_sidebar_2');
    add_action('widgets_init', 'footer_custom_sidebar_3');
    add_action('widgets_init', 'my_custom_sidebar');
	add_action('widgets_init', 'main_custom_sidebar');

	add_action('init', 'register_header_menu');
	add_action('after_setup_theme', 'JIDTheme_custom_logo_setup');

?>