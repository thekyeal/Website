<?php
    function ktech_post_types()
    {
        register_post_type('brand',array(
        'capability_type' => 'brand',
	'map_meta_cap'=> true,
            'public' => true,
            'supports' => array('title','excerpt','editor','thumbnail'),
            'rewrite'=> array('slug' => 'brands'),
             'has_archive' => true,
            'labels' => array(
                'name' => "Brand",
                'add_new_item' => 'Add New Brand',
                'edit_item' => 'Edit Brand',
                'all_items' => 'All Brands',
                'view_item' =>  'View all Brands',
                'singular_name' => "Brand"
                ),           
            'menu_icon' => 'dashicons-awards'
        ));


	register_post_type('convention',array(
	'capability_type' => 'convention',
	'map_meta_cap'=> true,
            'public' => true,
            'supports' => array('title','excerpt','editor','thumbnail'),
            'rewrite'=> array('slug' => 'conventions'),
             'has_archive' => true,
            'labels' => array(
                'name' => "Convention",
                'add_new_item' => 'Add New Convention',
                'edit_item' => 'Edit Convention',
                'all_items' => 'All Conventions',
                'view_item' =>  'View all Conventions',
                'singular_name' => "Convention"
                ),           
            'menu_icon' => 'dashicons-tickets-alt'
        ));
                
    }

    add_action('init', 'ktech_post_types');
    
?>