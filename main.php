<?php
/**
* Plugin Name: gc4c_listers_custom_metabox
* Plugin URI: www.lukemelvin.com
* Description: A custom MetaBox for golfclubs4cash listers to simplify the product creation process.
* Version: 1.0
* Author: Luke Rhys Melvin	
* Author URI: www.lukemelvin.com
**/

add_filter( 'rwmb_meta_boxes', 'prefix_register_meta_boxes' );
function prefix_register_meta_boxes( $meta_boxes ) {
    $meta_boxes[] = array(
        'title'      => 'GC4C Listers',
        'post_types' => 'post',

        'fields' => array(
            array(
                'name'  => 'SKU',
                'id'    => '_sku',
                'type'  => 'text',
            ),
            array(
                'name'  => 'Sale Price',
                'id'    => '_regular_price',
                'type'  => 'text',
            ),
        )
    );

    // Add more meta boxes if you want
    // $meta_boxes[] = ...

    return $meta_boxes;
}
