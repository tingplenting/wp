<?php 

/**
 * source : https://metabox.io/create-hidden-admin-page/
 */
add_action( 'admin_menu', function() {
	add_dashboard_page(
		__( 'Welcome', 'textdomain' ),
		__( 'Welcome', 'textdomain' ),
		'manage_options',
		'my-welcome',
		'prefix_render'
	);
} );

function prefix_render() {
	echo '<div class="wrap">';
	echo '<p>hello world</p>';
	echo '</div>';
}

add_action( 'admin_head', function() {
	remove_submenu_page( 'index.php', 'my-welcome' );
} );

?>
