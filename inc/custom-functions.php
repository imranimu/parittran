<?php

/*
## Add custom Meta box
## Post Type: Posts
## Upload Page Image for Slider
***************************************************/
function parittran_page_options( $meta_boxes ) {
    $prefix = '_cmb_'; // Prefix for all fields
    $meta_boxes['parittran_page_options'] = array(
        'id' => 'parittran_page_options',
        'title' => 'Page Optoins',
        'pages' => array('team_member'), // post type
        'fields' => array(	  
        	array(
				'name'       => __( 'Degignation', 'cmb' ),
				'desc'       => __( 'Input Degignation', 'cmb' ),
				'id'         => $prefix . 'test_text',
				'type'       => 'text',
				'show_on_cb' => 'cmb_test_text_show_on_cb', // function should return a bool value			
			),     	 
				
			array(
				'name'         => __( 'Page 1', 'parittran' ),
				'desc'         => __( 'Upload your Page 1 Image', 'parittran' ),
				'id'           => 'page_one',
				'type'         => 'file'	
			), 

			array(
				'name'         => __( 'Page 2', 'parittran' ),
				'desc'         => __( 'Upload your Page 2 Image', 'parittran' ),
				'id'           => 'page_two',
				'type'         => 'file'	
			),		 

			array(
				'name'         => __( 'Page 3', 'parittran' ),
				'desc'         => __( 'Upload your Page 3 Image', 'parittran' ),
				'id'           => 'page_three',
				'type'         => 'file'	
			), 

			array(
				'name'         => __( 'Page 4', 'parittran' ),
				'desc'         => __( 'Upload your Page 4 Image', 'parittran' ),
				'id'           => 'page_four',
				'type'         => 'file'	
			) 
	    ),
	);
	return $meta_boxes;
}
add_filter( 'cmb_meta_boxes', 'parittran_page_options' );

/*
## Custom Meta box
## Post Type: All Post Types 
## Initialize the metabox class
*************************************/
add_action( 'init', 'parittran_listing_meta_boxes', 9999 );
function parittran_listing_meta_boxes() {
    if ( !class_exists( 'cmb_Meta_Box' ) ) {
        require_once( 'meta/init.php' );
    }
} 