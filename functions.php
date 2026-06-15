<?php
/**
 * Hiraaya Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Hiraaya_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function hiraaya_theme_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title.
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support( 'post-thumbnails' );

    // Register navigation menus
    register_nav_menus( array(
        'primary-menu' => esc_html__( 'Primary Menu (Header)', 'hiraaya-theme' ),
        'footer-menu'  => esc_html__( 'Footer Navigation Menu', 'hiraaya-theme' ),
    ) );

    // Switch default core markup for search form, comment form, and comments to output valid HTML5.
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );

    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );
}
add_action( 'after_setup_theme', 'hiraaya_theme_setup' );

/**
 * Enqueue scripts and styles.
 */
function hiraaya_enqueue_scripts() {
    // Theme version
    $version = '1.0.0';

    // Global theme stylesheet
    wp_enqueue_style( 'hiraaya-global-style', get_stylesheet_uri(), array(), $version );

    // Enqueue preloader, navbar, and homepage specific stylesheets
    wp_enqueue_style( 'hiraaya-preloader-style', get_template_directory_uri() . '/assets/css/preloader.css', array('hiraaya-global-style'), $version );
    wp_enqueue_style( 'hiraaya-nav-style', get_template_directory_uri() . '/assets/css/nav.css', array('hiraaya-global-style'), $version );
    
    if ( is_front_page() || is_home() ) {
        wp_enqueue_style( 'hiraaya-homepage-style', get_template_directory_uri() . '/assets/css/homepage.css', array('hiraaya-global-style'), $version );
    } else {
        wp_enqueue_style( 'hiraaya-inner-style', get_template_directory_uri() . '/assets/css/inner.css', array('hiraaya-global-style'), $version );
    }

    // Enqueue Javascript modules
    wp_enqueue_script( 'hiraaya-preloader-script', get_template_directory_uri() . '/assets/js/preloader.js', array(), $version, true );
    wp_enqueue_script( 'hiraaya-nav-script', get_template_directory_uri() . '/assets/js/nav.js', array(), $version, true );
    
    if ( is_page_template( 'page-sectors.php' ) ) {
        wp_enqueue_script( 'hiraaya-sectors-script', get_template_directory_uri() . '/assets/js/sectors.js', array(), $version, true );
    }

    if ( is_page_template( 'page-contact.php' ) ) {
        wp_enqueue_script( 'hiraaya-contact-script', get_template_directory_uri() . '/assets/js/contact.js', array(), $version, true );
    }
}
add_action( 'wp_enqueue_scripts', 'hiraaya_enqueue_scripts' );

