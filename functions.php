<?php

if(!function_exists('bridge_qode_child_theme_enqueue_scripts')) {
	// Child theme function
	Function bridge_qode_child_theme_enqueue_scripts() {
		wp_register_style('bridge-childstyle', get_stylesheet_directory_uri() . '/style.css');
		wp_enqueue_style('bridge-childstyle');
	}

	// Enqueue child theme info
	add_action('wp_enqueue_scripts', 'bridge_qode_child_theme_enqueue_scripts', 11);

	// Load PHP libraries
	require_once 'php/class-shortcodes.php';

	// Initialize classes
	$six_shortcodes = new Six_Shortcodes();

	// Apply actions and filters
	add_filter('init', 'Six_Shortcodes::add_shortcode'); // Add shortcode object
}