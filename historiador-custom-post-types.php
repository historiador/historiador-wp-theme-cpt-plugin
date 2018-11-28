<?php
/*
Plugin Name: Historiador Custom Post Types
Plugin URI: https://github.com/historiador/historiador-wp-theme-cpt-plugin
Description: Custom Post Types for the Historiador Theme
Version: 0.1.0
Author: Protesilaos Stavrou
Author URI: https://protesilaos.com
License: GPL3
License URI: https://www.gnu.org/licenses/gpl-3.0.html
Text Domain: historiador-cpt
*/

function historiador_create_custom_post_type() {

    // Register Blog EN (The Man from Lisbon)
    // ---------------------------------------
	$labels_blog_en = array(
		'name'                  => _x( 'The Man from Lisbon', 'Post Type General Name', 'historiador_cpt' ),
		'singular_name'         => _x( 'Post EN', 'Post Type Singular Name', 'historiador_cpt' ),
		'menu_name'             => __( 'Blog EN', 'historiador_cpt' ),
		'name_admin_bar'        => __( 'Blog EN', 'historiador_cpt' ),
		'archives'              => __( 'Blog EN Archives', 'historiador_cpt' ),
		'attributes'            => __( 'Blog EN Attributes', 'historiador_cpt' ),
		'parent_item_colon'     => __( 'Parent Item:', 'historiador_cpt' ),
		'all_items'             => __( 'All Blog EN items', 'historiador_cpt' ),
		'add_new_item'          => __( 'Add New Item', 'historiador_cpt' ),
		'add_new'               => __( 'Add New', 'historiador_cpt' ),
		'new_item'              => __( 'New Post EN', 'historiador_cpt' ),
		'edit_item'             => __( 'Edit Post EN', 'historiador_cpt' ),
		'update_item'           => __( 'Update Post EN', 'historiador_cpt' ),
		'view_item'             => __( 'View Post EN', 'historiador_cpt' ),
		'view_items'            => __( 'View Blog EN', 'historiador_cpt' ),
		'search_items'          => __( 'Search Post EN', 'historiador_cpt' ),
		'not_found'             => __( 'Not found', 'historiador_cpt' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'historiador_cpt' ),
		'featured_image'        => __( 'Featured Image', 'historiador_cpt' ),
		'set_featured_image'    => __( 'Set featured image', 'historiador_cpt' ),
		'remove_featured_image' => __( 'Remove featured image', 'historiador_cpt' ),
		'use_featured_image'    => __( 'Use as featured image', 'historiador_cpt' ),
		'insert_into_item'      => __( 'Insert into item', 'historiador_cpt' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'historiador_cpt' ),
		'items_list'            => __( 'Items list', 'historiador_cpt' ),
		'items_list_navigation' => __( 'Items list navigation', 'historiador_cpt' ),
		'filter_items_list'     => __( 'Filter items list', 'historiador_cpt' ),
	);
	$rewrite_blog_en = array(
		'slug'                  => 'blog_en',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$arguments_blog_en = array(
		'label'                 => __( 'The Man from Lisbon', 'historiador_cpt' ),
		'description'           => __( 'A description goes here', 'historiador_cpt' ),
		'labels'                => $labels_blog_en,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'menu_position'         => 100,
		'menu_icon'             => 'dashicons-format-status',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'blog_en',
		'rewrite'               => $rewrite_blog_en,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
	);
	register_post_type( 'blog_en', $arguments_blog_en );

    // Register Books
    // ---------------------------------------
	$labels_books = array(
		'name'                  => _x( 'Books', 'Post Type General Name', 'historiador_cpt' ),
		'singular_name'         => _x( 'Book', 'Post Type Singular Name', 'historiador_cpt' ),
		'menu_name'             => __( 'Books', 'historiador_cpt' ),
		'name_admin_bar'        => __( 'Books', 'historiador_cpt' ),
		'archives'              => __( 'Book Archives', 'historiador_cpt' ),
		'attributes'            => __( 'Book Attributes', 'historiador_cpt' ),
		'parent_item_colon'     => __( 'Parent Item:', 'historiador_cpt' ),
		'all_items'             => __( 'All Books', 'historiador_cpt' ),
		'add_new_item'          => __( 'Add New Item', 'historiador_cpt' ),
		'add_new'               => __( 'Add New', 'historiador_cpt' ),
		'new_item'              => __( 'New Book', 'historiador_cpt' ),
		'edit_item'             => __( 'Edit Book', 'historiador_cpt' ),
		'update_item'           => __( 'Update Book', 'historiador_cpt' ),
		'view_item'             => __( 'View Book', 'historiador_cpt' ),
		'view_items'            => __( 'View Books', 'historiador_cpt' ),
		'search_items'          => __( 'Search Book', 'historiador_cpt' ),
		'not_found'             => __( 'Not found', 'historiador_cpt' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'historiador_cpt' ),
		'featured_image'        => __( 'Featured Image', 'historiador_cpt' ),
		'set_featured_image'    => __( 'Set featured image', 'historiador_cpt' ),
		'remove_featured_image' => __( 'Remove featured image', 'historiador_cpt' ),
		'use_featured_image'    => __( 'Use as featured image', 'historiador_cpt' ),
		'insert_into_item'      => __( 'Insert into item', 'historiador_cpt' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'historiador_cpt' ),
		'items_list'            => __( 'Items list', 'historiador_cpt' ),
		'items_list_navigation' => __( 'Items list navigation', 'historiador_cpt' ),
		'filter_items_list'     => __( 'Filter items list', 'historiador_cpt' ),
	);
	$rewrite_books = array(
		'slug'                  => 'books',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$arguments_books = array(
		'label'                 => __( 'Book', 'historiador_cpt' ),
		'description'           => __( 'Books authored by Rui Tavares', 'historiador_cpt' ),
		'labels'                => $labels_books,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'menu_position'         => 100,
		'menu_icon'             => 'dashicons-book',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'books',
		'rewrite'               => $rewrite_books,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
	);
	register_post_type( 'books', $arguments_books );

    // Register Europarl blog
    // ---------------------------------------
	$labels_europarl = array(
		'name'                  => _x( 'Europarl', 'Post Type General Name', 'historiador_cpt' ),
		'singular_name'         => _x( 'Europarl', 'Post Type Singular Name', 'historiador_cpt' ),
		'menu_name'             => __( 'Europarl', 'historiador_cpt' ),
		'name_admin_bar'        => __( 'Europarl', 'historiador_cpt' ),
		'archives'              => __( 'Europarl Archives', 'historiador_cpt' ),
		'attributes'            => __( 'Europarl Attributes', 'historiador_cpt' ),
		'parent_item_colon'     => __( 'Parent Item:', 'historiador_cpt' ),
		'all_items'             => __( 'All Europarl Items', 'historiador_cpt' ),
		'add_new_item'          => __( 'Add New Europarl Item', 'historiador_cpt' ),
		'add_new'               => __( 'Add New', 'historiador_cpt' ),
		'new_item'              => __( 'New Europarl Item', 'historiador_cpt' ),
		'edit_item'             => __( 'Edit Europarl Item', 'historiador_cpt' ),
		'update_item'           => __( 'Update Europarl Item', 'historiador_cpt' ),
		'view_item'             => __( 'View Europarl Item', 'historiador_cpt' ),
		'view_items'            => __( 'View Europarl Items', 'historiador_cpt' ),
		'search_items'          => __( 'Search Europarl', 'historiador_cpt' ),
		'not_found'             => __( 'Not found', 'historiador_cpt' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'historiador_cpt' ),
		'featured_image'        => __( 'Featured Image', 'historiador_cpt' ),
		'set_featured_image'    => __( 'Set featured image', 'historiador_cpt' ),
		'remove_featured_image' => __( 'Remove featured image', 'historiador_cpt' ),
		'use_featured_image'    => __( 'Use as featured image', 'historiador_cpt' ),
		'insert_into_item'      => __( 'Insert into item', 'historiador_cpt' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'historiador_cpt' ),
		'items_list'            => __( 'Items list', 'historiador_cpt' ),
		'items_list_navigation' => __( 'Items list navigation', 'historiador_cpt' ),
		'filter_items_list'     => __( 'Filter items list', 'historiador_cpt' ),
	);
	$rewrite_europarl = array(
		'slug'                  => 'europarl',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$arguments_europarl = array(
		'label'                 => __( 'Europarl', 'historiador_cpt' ),
		'description'           => __( 'Europarls where Rui Tavares is present', 'historiador_cpt' ),
		'labels'                => $labels_europarl,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'post-formats' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'menu_position'         => 100,
		'menu_icon'             => 'dashicons-admin-multisite',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'europarl',
		'rewrite'               => $rewrite_europarl,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
	);
	register_post_type( 'europarl', $arguments_europarl );

    // Register Events
    // ---------------------------------------
	$labels_events = array(
		'name'                  => _x( 'Events', 'Post Type General Name', 'historiador_cpt' ),
		'singular_name'         => _x( 'Event', 'Post Type Singular Name', 'historiador_cpt' ),
		'menu_name'             => __( 'Events', 'historiador_cpt' ),
		'name_admin_bar'        => __( 'Events', 'historiador_cpt' ),
		'archives'              => __( 'Events Archives', 'historiador_cpt' ),
		'attributes'            => __( 'Events Attributes', 'historiador_cpt' ),
		'parent_item_colon'     => __( 'Parent Item:', 'historiador_cpt' ),
		'all_items'             => __( 'All Events', 'historiador_cpt' ),
		'add_new_item'          => __( 'Add New Event', 'historiador_cpt' ),
		'add_new'               => __( 'Add New', 'historiador_cpt' ),
		'new_item'              => __( 'New Event', 'historiador_cpt' ),
		'edit_item'             => __( 'Edit Event', 'historiador_cpt' ),
		'update_item'           => __( 'Update Event', 'historiador_cpt' ),
		'view_item'             => __( 'View Event', 'historiador_cpt' ),
		'view_items'            => __( 'View Events', 'historiador_cpt' ),
		'search_items'          => __( 'Search Event', 'historiador_cpt' ),
		'not_found'             => __( 'Not found', 'historiador_cpt' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'historiador_cpt' ),
		'featured_image'        => __( 'Featured Image', 'historiador_cpt' ),
		'set_featured_image'    => __( 'Set featured image', 'historiador_cpt' ),
		'remove_featured_image' => __( 'Remove featured image', 'historiador_cpt' ),
		'use_featured_image'    => __( 'Use as featured image', 'historiador_cpt' ),
		'insert_into_item'      => __( 'Insert into item', 'historiador_cpt' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'historiador_cpt' ),
		'items_list'            => __( 'Items list', 'historiador_cpt' ),
		'items_list_navigation' => __( 'Items list navigation', 'historiador_cpt' ),
		'filter_items_list'     => __( 'Filter items list', 'historiador_cpt' ),
	);
	$rewrite_events = array(
		'slug'                  => 'events',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$arguments_events = array(
		'label'                 => __( 'Event', 'historiador_cpt' ),
		'description'           => __( 'Events where Rui Tavares is present', 'historiador_cpt' ),
		'labels'                => $labels_events,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'menu_position'         => 100,
		'menu_icon'             => 'dashicons-calendar-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'events',
		'rewrite'               => $rewrite_events,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
	);
	register_post_type( 'events', $arguments_events );

    // Register Podcasts
    // ---------------------------------------
	$labels_podcasts = array(
		'name'                  => _x( 'Podcasts', 'Post Type General Name', 'historiador_cpt' ),
		'singular_name'         => _x( 'Podcast', 'Post Type Singular Name', 'historiador_cpt' ),
		'menu_name'             => __( 'Podcasts', 'historiador_cpt' ),
		'name_admin_bar'        => __( 'Podcasts', 'historiador_cpt' ),
		'archives'              => __( 'Podcasts Archives', 'historiador_cpt' ),
		'attributes'            => __( 'Podcasts Attributes', 'historiador_cpt' ),
		'parent_item_colon'     => __( 'Parent Item:', 'historiador_cpt' ),
		'all_items'             => __( 'All Podcasts', 'historiador_cpt' ),
		'add_new_item'          => __( 'Add New Podcast', 'historiador_cpt' ),
		'add_new'               => __( 'Add New', 'historiador_cpt' ),
		'new_item'              => __( 'New Podcast', 'historiador_cpt' ),
		'edit_item'             => __( 'Edit Podcast', 'historiador_cpt' ),
		'update_item'           => __( 'Update Podcast', 'historiador_cpt' ),
		'view_item'             => __( 'View Podcast', 'historiador_cpt' ),
		'view_items'            => __( 'View Podcasts', 'historiador_cpt' ),
		'search_items'          => __( 'Search Podcast', 'historiador_cpt' ),
		'not_found'             => __( 'Not found', 'historiador_cpt' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'historiador_cpt' ),
		'featured_image'        => __( 'Featured Image', 'historiador_cpt' ),
		'set_featured_image'    => __( 'Set featured image', 'historiador_cpt' ),
		'remove_featured_image' => __( 'Remove featured image', 'historiador_cpt' ),
		'use_featured_image'    => __( 'Use as featured image', 'historiador_cpt' ),
		'insert_into_item'      => __( 'Insert into item', 'historiador_cpt' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'historiador_cpt' ),
		'items_list'            => __( 'Items list', 'historiador_cpt' ),
		'items_list_navigation' => __( 'Items list navigation', 'historiador_cpt' ),
		'filter_items_list'     => __( 'Filter items list', 'historiador_cpt' ),
	);
	$rewrite_podcasts = array(
		'slug'                  => 'podcasts',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$arguments_podcasts = array(
		'label'                 => __( 'Podcast', 'historiador_cpt' ),
		'description'           => __( 'Podcasts where Rui Tavares is present', 'historiador_cpt' ),
		'labels'                => $labels_podcasts,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt', 'revisions', 'custom fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'menu_position'         => 100,
		'menu_icon'             => 'dashicons-playlist-audio',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'podcasts',
		'rewrite'               => $rewrite_podcasts,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
	);
	register_post_type( 'podcasts', $arguments_podcasts );

    // Register Videos
    // ---------------------------------------
	$labels_videos = array(
		'name'                  => _x( 'Videos', 'Post Type General Name', 'historiador_cpt' ),
		'singular_name'         => _x( 'Video', 'Post Type Singular Name', 'historiador_cpt' ),
		'menu_name'             => __( 'Videos', 'historiador_cpt' ),
		'name_admin_bar'        => __( 'Videos', 'historiador_cpt' ),
		'archives'              => __( 'Videos Archives', 'historiador_cpt' ),
		'attributes'            => __( 'Videos Attributes', 'historiador_cpt' ),
		'parent_item_colon'     => __( 'Parent Item:', 'historiador_cpt' ),
		'all_items'             => __( 'All Videos', 'historiador_cpt' ),
		'add_new_item'          => __( 'Add New Video', 'historiador_cpt' ),
		'add_new'               => __( 'Add New', 'historiador_cpt' ),
		'new_item'              => __( 'New Video', 'historiador_cpt' ),
		'edit_item'             => __( 'Edit Video', 'historiador_cpt' ),
		'update_item'           => __( 'Update Video', 'historiador_cpt' ),
		'view_item'             => __( 'View Video', 'historiador_cpt' ),
		'view_items'            => __( 'View Videos', 'historiador_cpt' ),
		'search_items'          => __( 'Search Video', 'historiador_cpt' ),
		'not_found'             => __( 'Not found', 'historiador_cpt' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'historiador_cpt' ),
		'featured_image'        => __( 'Featured Image', 'historiador_cpt' ),
		'set_featured_image'    => __( 'Set featured image', 'historiador_cpt' ),
		'remove_featured_image' => __( 'Remove featured image', 'historiador_cpt' ),
		'use_featured_image'    => __( 'Use as featured image', 'historiador_cpt' ),
		'insert_into_item'      => __( 'Insert into item', 'historiador_cpt' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'historiador_cpt' ),
		'items_list'            => __( 'Items list', 'historiador_cpt' ),
		'items_list_navigation' => __( 'Items list navigation', 'historiador_cpt' ),
		'filter_items_list'     => __( 'Filter items list', 'historiador_cpt' ),
	);
	$rewrite_videos = array(
		'slug'                  => 'videos',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$arguments_videos = array(
		'label'                 => __( 'Video', 'historiador_cpt' ),
		'description'           => __( 'Videos where Rui Tavares is present', 'historiador_cpt' ),
		'labels'                => $labels_videos,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'menu_position'         => 100,
		'menu_icon'             => 'dashicons-media-video',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'videos',
		'rewrite'               => $rewrite_videos,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
	);
	register_post_type( 'videos', $arguments_videos );
}
add_action( 'init', 'historiador_create_custom_post_type', 0 );
