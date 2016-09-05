<?php

function fiskeart_init() {
	register_post_type( 'fiskeart', array(
		'labels'            => array(
			'name'                => __( 'Fiskearts', 'adapt_base_theme' ),
			'singular_name'       => __( 'Fiskeart', 'adapt_base_theme' ),
			'all_items'           => __( 'All Fiskearts', 'adapt_base_theme' ),
			'new_item'            => __( 'New Fiskeart', 'adapt_base_theme' ),
			'add_new'             => __( 'Add New', 'adapt_base_theme' ),
			'add_new_item'        => __( 'Add New Fiskeart', 'adapt_base_theme' ),
			'edit_item'           => __( 'Edit Fiskeart', 'adapt_base_theme' ),
			'view_item'           => __( 'View Fiskeart', 'adapt_base_theme' ),
			'search_items'        => __( 'Search Fiskearts', 'adapt_base_theme' ),
			'not_found'           => __( 'No Fiskearts found', 'adapt_base_theme' ),
			'not_found_in_trash'  => __( 'No Fiskearts found in trash', 'adapt_base_theme' ),
			'parent_item_colon'   => __( 'Parent Fiskeart', 'adapt_base_theme' ),
			'menu_name'           => __( 'Fiskearts', 'adapt_base_theme' ),
		),
		'public'            => true,
		'hierarchical'      => false,
		'show_ui'           => true,
		'show_in_nav_menus' => true,
		'supports'          => array( 'title', 'editor' ),
		'has_archive'       => true,
		'rewrite'           => true,
		'query_var'         => true,
		'menu_icon'         => 'dashicons-admin-post',
		'show_in_rest'      => true,
		'rest_base'         => 'fiskeart',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
	) );

}
add_action( 'init', 'fiskeart_init' );

function fiskeart_updated_messages( $messages ) {
	global $post;

	$permalink = get_permalink( $post );

	$messages['fiskeart'] = array(
		0 => '', // Unused. Messages start at index 1.
		1 => sprintf( __('Fiskeart updated. <a target="_blank" href="%s">View Fiskeart</a>', 'adapt_base_theme'), esc_url( $permalink ) ),
		2 => __('Custom field updated.', 'adapt_base_theme'),
		3 => __('Custom field deleted.', 'adapt_base_theme'),
		4 => __('Fiskeart updated.', 'adapt_base_theme'),
		/* translators: %s: date and time of the revision */
		5 => isset($_GET['revision']) ? sprintf( __('Fiskeart restored to revision from %s', 'adapt_base_theme'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		6 => sprintf( __('Fiskeart published. <a href="%s">View Fiskeart</a>', 'adapt_base_theme'), esc_url( $permalink ) ),
		7 => __('Fiskeart saved.', 'adapt_base_theme'),
		8 => sprintf( __('Fiskeart submitted. <a target="_blank" href="%s">Preview Fiskeart</a>', 'adapt_base_theme'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
		9 => sprintf( __('Fiskeart scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview Fiskeart</a>', 'adapt_base_theme'),
		// translators: Publish box date format, see http://php.net/date
		date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( $permalink ) ),
		10 => sprintf( __('Fiskeart draft updated. <a target="_blank" href="%s">Preview Fiskeart</a>', 'adapt_base_theme'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
	);

	return $messages;
}
add_filter( 'post_updated_messages', 'fiskeart_updated_messages' );
