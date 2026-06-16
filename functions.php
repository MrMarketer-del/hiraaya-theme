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
 * Required pages and templates for the converted static site.
 */
function hiraaya_required_pages() {
    return array(
        'about'       => array(
            'title'    => __( 'About', 'hiraaya-theme' ),
            'template' => 'page-about.php',
            'order'    => 10,
        ),
        'services'    => array(
            'title'    => __( 'Services', 'hiraaya-theme' ),
            'template' => 'page-services.php',
            'order'    => 20,
        ),
        'sectors'     => array(
            'title'    => __( 'Sectors', 'hiraaya-theme' ),
            'template' => 'page-sectors.php',
            'order'    => 30,
        ),
        'perspective' => array(
            'title'    => __( 'The Perspective', 'hiraaya-theme' ),
            'template' => 'page-perspective.php',
            'order'    => 40,
        ),
        'work'        => array(
            'title'    => __( 'Work', 'hiraaya-theme' ),
            'template' => 'page-work.php',
            'order'    => 50,
        ),
        'contact'     => array(
            'title'    => __( 'Contact', 'hiraaya-theme' ),
            'template' => 'page-contact.php',
            'order'    => 60,
        ),
    );
}

/**
 * Create the WordPress pages that back each converted HTML page.
 */
function hiraaya_ensure_required_pages() {
    $page_ids = array();

    foreach ( hiraaya_required_pages() as $slug => $page ) {
        $existing_page = get_page_by_path( $slug, OBJECT, 'page' );

        if ( $existing_page ) {
            $page_id = $existing_page->ID;

            if ( 'publish' !== $existing_page->post_status ) {
                wp_update_post(
                    array(
                        'ID'          => $page_id,
                        'post_status' => 'publish',
                    )
                );
            }
        } else {
            $page_id = wp_insert_post(
                array(
                    'post_type'    => 'page',
                    'post_status'  => 'publish',
                    'post_title'   => $page['title'],
                    'post_name'    => $slug,
                    'post_content' => '',
                    'menu_order'   => $page['order'],
                )
            );
        }

        if ( ! is_wp_error( $page_id ) && $page_id ) {
            update_post_meta( $page_id, '_wp_page_template', $page['template'] );
            $page_ids[ $slug ] = (int) $page_id;
        }
    }

    return $page_ids;
}

/**
 * Create and assign a primary menu so header/footer navigation works immediately.
 */
function hiraaya_ensure_primary_menu( $page_ids = array() ) {
    $menu_name = 'Hiraaya Primary Menu';
    $menu      = wp_get_nav_menu_object( $menu_name );

    if ( ! $menu ) {
        $menu_id = wp_create_nav_menu( $menu_name );
    } else {
        $menu_id = $menu->term_id;
    }

    if ( is_wp_error( $menu_id ) || ! $menu_id ) {
        return;
    }

    $existing_items = wp_get_nav_menu_items( $menu_id );
    $existing_pages = array();

    if ( $existing_items ) {
        foreach ( $existing_items as $item ) {
            if ( 'page' === $item->object && $item->object_id ) {
                $existing_pages[] = (int) $item->object_id;
            }
        }
    }

    foreach ( hiraaya_required_pages() as $slug => $page ) {
        if ( empty( $page_ids[ $slug ] ) || in_array( $page_ids[ $slug ], $existing_pages, true ) ) {
            continue;
        }

        wp_update_nav_menu_item(
            $menu_id,
            0,
            array(
                'menu-item-title'     => $page['title'],
                'menu-item-object'    => 'page',
                'menu-item-object-id' => $page_ids[ $slug ],
                'menu-item-type'      => 'post_type',
                'menu-item-status'    => 'publish',
                'menu-item-position'  => $page['order'],
            )
        );
    }

    $locations = get_theme_mod( 'nav_menu_locations', array() );

    if ( empty( $locations['primary-menu'] ) ) {
        $locations['primary-menu'] = $menu_id;
    }

    if ( empty( $locations['footer-menu'] ) ) {
        $locations['footer-menu'] = $menu_id;
    }

    set_theme_mod( 'nav_menu_locations', $locations );
}

/**
 * Create converted static pages only when the theme is activated.
 */
function hiraaya_create_static_pages_on_activation() {
    $page_ids = hiraaya_ensure_required_pages();
    hiraaya_ensure_primary_menu( $page_ids );
    flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'hiraaya_create_static_pages_on_activation' );

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
