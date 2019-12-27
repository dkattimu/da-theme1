<?php
//Register nav walker and add...

function register_navwalker()
{
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');

// Add theme support 
function theme_setup()
{
	add_theme_support('post-thumbnails');
	register_nav_menus(array(
		'primary' => __('Primary Menu')
	));
}
add_action('after_setup_theme', 'theme_setup');

// Load Sylesheets
function load_style_files()
{
    $bootstyle = ['standard', 'cyborg', 'cerulean'];
    $choice = 2;
    wp_enqueue_style('custom-google-fonts', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('da-style', get_template_directory_uri() . '/style.css');

    switch ($bootstyle[$choice]) {
        case 'standard':
            wp_enqueue_style('bootstrapcss', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');

            break;
        case 'cyborg':
            wp_enqueue_style('bootstrap-cyborg', get_template_directory_uri() . '/cyborg/bootstrap.css');
            break;
        case 'cerulean':
            wp_enqueue_style('bootstrap-cerulean', get_template_directory_uri() . '/cerulean/bootstrap.css');
            break;
        default:
            wp_enqueue_style('bootstrapcss', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');
    }
    //register and enqueue

    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
    wp_enqueue_style('main');
}
add_action('wp_enqueue_scripts', 'load_style_files');

//Load Javascript
function load_js()
{
    /*
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js');
    wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js');
    wp_enqueue_script('bootstrapjs', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js');
    */

    wp_enqueue_script('jquery');
    wp_register_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
    wp_enqueue_script('bootstrapjs');
}
add_action('wp_enqueue_scripts', 'load_js');


/* function load_other_theme_features()
{
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'load_other_theme_features');


//Theme Options
add_theme_support('menus');

//Menus

register_nav_menus(
    array(
        'primary-menu' => 'Primary Menu Location',
        'secondary-menu' => 'Secondary Menu Location',
    )
);
*/


