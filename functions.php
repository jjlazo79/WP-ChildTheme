<?php 
function sngular_xr_scripts() {
	
	$parent_style = 'parent-style';
	// enqueue parent styles
    wp_enqueue_style( $parent_style,
    	get_template_directory_uri() . '/style.css',
    	array(), '0.1', 'all'
    );
    // enqueue child styles
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
	
}
add_action('wp_enqueue_scripts', 'sngular_xr_scripts');
 ?>