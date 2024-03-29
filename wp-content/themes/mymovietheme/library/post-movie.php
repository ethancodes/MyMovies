<?php
/* Custom Post Type Example
*/

// Flush rewrite rules for custom post types
add_action( 'after_switch_theme', 'bones_flush_rewrite_rules' );

// Flush your rewrite rules
function bones_flush_rewrite_rules() {
	flush_rewrite_rules();
}

// let's create the function for the custom type
function post_movie() { 
	// creating (registering) the custom type 
	register_post_type( 'movie', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
		// let's now add all the options for this post type
		array( 'labels' => array(
			'name' => __( 'Movies', 'bonestheme' ), /* This is the Title of the Group */
			'singular_name' => __( 'Movie', 'bonestheme' ), /* This is the individual type */
			'all_items' => __( 'All Movies', 'bonestheme' ), /* the all items menu item */
			'add_new' => __( 'Add New', 'bonestheme' ), /* The add new menu item */
			'add_new_item' => __( 'Add New Movie', 'bonestheme' ), /* Add New Display Title */
			'edit' => __( 'Edit', 'bonestheme' ), /* Edit Dialog */
			'edit_item' => __( 'Edit Movies', 'bonestheme' ), /* Edit Display Title */
			'new_item' => __( 'New Movie', 'bonestheme' ), /* New Display Title */
			'view_item' => __( 'View Movie', 'bonestheme' ), /* View Display Title */
			'search_items' => __( 'Search Movie', 'bonestheme' ), /* Search Custom Type Title */ 
			'not_found' =>  __( 'Nothing found in the Database.', 'bonestheme' ), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __( 'Nothing found in Trash', 'bonestheme' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This is a movie review', 'bonestheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 4, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => get_stylesheet_directory_uri() . '/library/images/custom-post-icon.png', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'movie', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'movie', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields' )
		) /* end of options */
	); /* end of register post type */
	
	/* this adds your post categories to your custom post type */
	register_taxonomy_for_object_type( 'category', 'movie' );
	
}

	// adding the function to the Wordpress init
	add_action( 'init', 'post_movie');
	
	/*
	for more information on taxonomies, go here:
	http://codex.wordpress.org/Function_Reference/register_taxonomy
	*/
	
	// now let's add custom categories (these act like categories)
	register_taxonomy( 'movie_cat', 
		array('movie'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
		array('hierarchical' => true,     /* if this is true, it acts like categories */
			'labels' => array(
				'name' => __( 'Movie Categories', 'bonestheme' ), /* name of the custom taxonomy */
				'singular_name' => __( 'Movie Category', 'bonestheme' ), /* single taxonomy name */
				'search_items' =>  __( 'Search Movie Categories', 'bonestheme' ), /* search title for taxomony */
				'all_items' => __( 'All Movie Categories', 'bonestheme' ), /* all title for taxonomies */
				'parent_item' => __( 'Parent Movie Category', 'bonestheme' ), /* parent title for taxonomy */
				'parent_item_colon' => __( 'Parent Movie Category:', 'bonestheme' ), /* parent taxonomy title */
				'edit_item' => __( 'Edit Movie Category', 'bonestheme' ), /* edit custom taxonomy title */
				'update_item' => __( 'Update Movie Category', 'bonestheme' ), /* update title for taxonomy */
				'add_new_item' => __( 'Add New Movie Category', 'bonestheme' ), /* add new title for taxonomy */
				'new_item_name' => __( 'New Custom Movie Name', 'bonestheme' ) /* name title for taxonomy */
			),
			'show_admin_column' => true, 
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'movie-category' ),
		)
	);
		

?>
