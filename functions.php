<?php
function ruizarch_files() { 
    wp_enqueue_script('js_jquery', get_theme_file_uri('/js/plugins/jquery.min.js'));
    wp_enqueue_script('js_swiper', get_theme_file_uri('/js/plugins/swiper.min.js'));
    wp_enqueue_script('js_gsap', get_theme_file_uri('/js/plugins/gsap.min.js'));
    wp_enqueue_script('js_imagesloaded', get_theme_file_uri('/js/plugins/imagesloaded.pkgd.js'));
    wp_enqueue_script('js_isotope', get_theme_file_uri('/js/plugins/isotope.min.js'));
    wp_enqueue_script('js_smooth', get_theme_file_uri('/js/plugins/smooth-scroll.js'));
    wp_enqueue_script('js_ScrollTrigger', get_theme_file_uri('/js/plugins/ScrollTrigger.min.js'));
    wp_enqueue_script('js_magnific', get_theme_file_uri('/js/plugins/magnific-popup.js'));
    wp_enqueue_script('js_main', get_theme_file_uri('/js/main.js'), array('jquery'));
    wp_enqueue_style('ruizarch_grid', get_theme_file_uri('/css/plugins/bootstrap-grid.css'));
    wp_enqueue_style('font_awesome', get_theme_file_uri('/css/plugins/font-awesome.min.css'));
    wp_enqueue_style('swiper', get_theme_file_uri('/css/plugins/swiper.min.css'));
    wp_enqueue_style('style_css', get_theme_file_uri('/css/style.css'));

}
add_action('wp_enqueue_scripts', 'ruizarch_files');

function ruizarch_boda(){
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');

}
add_action('after_setup_theme', 'ruizarch_boda');

// Register Custom Post Type
function ruizarch_post_types() {
	//projects post type
register_post_type('project', array(
	'has_archive' => true,
	'public' => true,
	'show_in_rest' => true,
	'taxonomies'=> array( 'project_categories' ),
	'supports' => array('title', 'editor', 'thumbnail'),
	'menu_icon' => 'dashicons-welcome-learn-more',
	'labels' => array(
		'name' => 'Projects',
		'edit_item' => 'Edit Project',
		'all_items' => 'All Projects',
		'add_new_item' => 'Add new project',
		'singular_name' => 'Project'
	)
	));

	//services post type
	register_post_type('services', array(
		'has_archive' => true,
		'public' => true,
		'show_in_rest' => true,
		'supports' => array('title', 'editor', 'thumbnail'),
		'menu_icon' => 'dashicons-screenoptions',
		'labels' => array(
			'name' => 'Services',
			'edit_item' => 'Edit service',
			'all_items' => 'All services',
			'add_new_item' => 'Add new service',
			'singular_name' => 'service'
		)
		));
        
	//partners post type
	register_post_type('partners', array(
		'has_archive' => true,
		'public' => true,
		'show_in_rest' => true,
		'supports' => array('title', 'editor', 'thumbnail'),
		'menu_icon' => 'dashicons-admin-users',
		'labels' => array(
			'name' => 'Partners',
			'edit_item' => 'Edit service',
			'all_items' => 'All partners',
			'add_new_item' => 'Add new partner',
			'singular_name' => 'partner'
		)
		));

	//help center post type
	register_post_type('help center', array(
		'has_archive' => true,
		'public' => true,
		'show_in_rest' => true,
		'supports' => array('title', 'editor', 'thumbnail'),
		'menu_icon' => 'dashicons-editor-help',
		'labels' => array(
			'name' => 'Help Center',
			'edit_item' => 'Edit service',
			'all_items' => 'All help center',
			'add_new_item' => 'Add new help center',
			'singular_name' => 'help center'
		)
		));	

	//Banners post type
	register_post_type('banner', array(
		'has_archive' => true,
		'public' => true,
		'show_in_rest' => true,
		'supports' => array('title', 'editor', 'thumbnail'),
		'menu_icon' => 'dashicons-images-alt',
		'labels' => array(
			'name' => 'Banners',
			'edit_item' => 'Edit Banner',
			'all_items' => 'All Banners',
			'add_new_item' => 'Add new Banner',
			'singular_name' => 'banner'
		)
		));
        

	//Team post type
	register_post_type('team', array(
		'has_archive' => true,
		'public' => true,
		'show_in_rest' => true,
		'supports' => array('title', 'editor', 'thumbnail'),
		'menu_icon' => 'dashicons-groups',
		'labels' => array(
			'name' => 'Team',
			'edit_item' => 'Edit Team',
			'all_items' => 'All Team',
			'add_new_item' => 'Add New Team',
			'singular_name' => 'team'
		)
		));
        

	//Our Process post type
	register_post_type('our process', array(
		'has_archive' => true,
		'public' => true,
		'show_in_rest' => true,
		'supports' => array('title', 'editor', 'thumbnail'),
		'menu_icon' => 'dashicons-info',
		'labels' => array(
			'name' => 'Process',
			'edit_item' => 'Edit Process',
			'all_items' => 'All Processes',
			'add_new_item' => 'Add New Process',
			'singular_name' => 'Process'
		)
		));
        
	};
	add_action('init' , 'ruizarch_post_types'); 

function ruizarch_taxonomy() {
    register_taxonomy('project_categories', 'project', array(
        'hierarchical' => true,
        'show_in_rest' => true,

        'labels' => array(
            'name' => 'Project Categories',
            'singluar_name' => 'Project Category'
        ),
        'puplic' => true,
        'rewrite' => array(
            'slug' => 'Project Category'
        )
    ) );
	register_taxonomy('project_categories', 'post', array(
        'hierarchical' => true,
        'show_in_rest' => true,

        'labels' => array(
            'name' => 'Posts Categories',
            'singluar_name' => 'post Category'
        ),
        'puplic' => true,
        'rewrite' => array(
            'slug' => 'post Category'
        )
    ) );
}
add_action('init', 'ruizarch_taxonomy');

function ruizarch_adjust_queries($query){
    if(!is_admin() AND is_post_type_archive('project') AND $query->is_main_query()) {
        $query->set('posts_per_page', 4);
    }
    if(!is_admin() AND is_post_type_archive('team') AND $query->is_main_query()) {
        $query->set('posts_per_page', 12);
    }
}
add_action('pre_get_posts' , 'ruizarch_adjust_queries');
?>