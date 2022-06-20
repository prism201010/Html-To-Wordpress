<?php
// style appliying
function add_css()
{

    wp_register_style('font', get_template_directory_uri() . '/assets/fontawesome/css/all.min.css', array(), 1, 'all');
    wp_enqueue_style('font');

    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), 1, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('styles', get_template_directory_uri() . '/assets/css/templatemo-xtra-blog.css', array(), 1, 'all');
    wp_enqueue_style('styles');

    wp_register_style('custom', get_template_directory_uri() . '/custom.css', array(), 1, 'all');
    wp_enqueue_style('custom');
}

add_action('wp_enqueue_scripts', 'add_css');

function nav_menus()
{
    $locations = array(
        'primary' => 'Desktop Primary Left Sidebar',

        'footer' => 'footer Menu Location',
    );
    register_nav_menus($locations);
}
add_action('init', 'nav_menus');

function header_and_theme_setup_xtrablog() {

    add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'customize-selective-refresh-widgets' );

    add_theme_support(
		'custom-logo',
		array(
			'height'      => 50,
			'width'       => 50,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'header_and_theme_setup_xtrablog' );

// menu arranging

function add_additional_class_on_li($classes, $item, $args)
{
    if (isset($args->li_class)) {
        $classes[] = $args->li_class;
    }
    if (isset($args->active_class) && in_array('current-menu-item', $classes)) {
        $classes[] = $args->active_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);
 
 
function add_anchor_class($attr, $item, $args)
{
    if (isset($args->a_class)) {
        $attr['class'] = $args->a_class;
    }
    return $attr;
}
add_filter('nav_menu_link_attributes', 'add_anchor_class', 10, 3);
