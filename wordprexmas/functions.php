<?php
function theme_options() {

	// Active le support des miniatures (thumbnails) pour les articles et les pages
	add_theme_support('post-thumbnails');

	// Définis les emplacements (locations) pour les menus
	register_nav_menus(array('primary' => 'Position principale', 'top' => 'Position sommitale', 'footer'=> 'Position en pied de page'));

}

add_action('after_setup_theme', 'theme_options');