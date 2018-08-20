<?php 

add_action('admin_menu', function() {
	add_menu_page(
		'Menu Title', // <title>
		'Custom Menu Options', // sidebar label
		'manage_options', // privilege
		'custom-menu', // slug
		'my_menu_output' // page function
	);

	// Main menu page
	add_submenu_page(
		'custom-menu', // parent menu
		'AddOnContent',
		'Options',
		'manage_options',
		'custom-menu' // slug sama dengan parent
	);

	// Halaman submenu ke 2
	add_submenu_page(
		'custom-menu', // parent menu
		'Options Title 2',
		'Options 2',
		'manage_options',
		'custom-menu-options-2',
		'my_menu_option_2'
	);

	// Hidden submenu
	add_submenu_page(
		'custom-menu', // parent menu
		'Menu Welcome',
		'Menu Welcome',
		'manage_options',
		'my-menu-welcome',
		'my_menu_welcome'
	);

});

function my_menu_output() {
	echo "my_menu_output";
}

function my_menu_option_2() {
	echo "my_menu_option_2";
}

function my_menu_welcome() {
	echo "my_menu_welcome";
}

/**
 * remove_submenu_page ( [parent menu slug], [submenu slug] )
 * biar jadi hidden submenu
 */
add_action( 'admin_head', function() {
	remove_submenu_page( 'custom-menu', 'my-menu-welcome' );
} );

 ?>