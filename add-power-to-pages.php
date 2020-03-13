<?php
/**
 * Plugin Name: Power to pages
 * Plugin URI: https://github.com/antonysmal/add-power-to-pages
 * Description: Adds features like excerpt, category and tags to pages.
 * Version: 0.1
 * Author: Antony Smal | Frostigon Oy
 * Author URI: https://frostigon.com
 */

function add_power_to_pages_plugin() {  
  register_taxonomy_for_object_type('post_tag', 'page'); 
  register_taxonomy_for_object_type('category', 'page');
  add_post_type_support( 'page', 'excerpt' );
}
add_action( 'init', 'add_power_to_pages_plugin' );