<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Hiraaya_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

get_header();
?>

    <main id="primary" class="site-main" style="padding-top: 140px; min-height: 75vh; display: flex; align-items: center; justify-content: center; background: var(--color-cream); text-align: center;">
        <div class="container" style="max-width: 600px; padding: 48px 24px;">
            <span class="eyebrow-label" style="justify-content: center;"><?php esc_html_e( 'Error 404', 'hiraaya-theme' ); ?></span>
            <h1 style="font-family: var(--font-primary); font-size: clamp(3rem, 7vw, 5rem); color: var(--color-burgundy); margin-top: 16px; margin-bottom: 24px;">
                Page <em>Not Found</em>
            </h1>
            <p style="font-family: var(--font-ui); font-size: 15px; color: #4a5568; line-height: 1.8; margin-bottom: 40px;">
                The page you are looking for does not exist or has been moved. Let's redirect you to the beginning of our story.
            </p>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn-outline btn-outline-navy">Return Home</a>
        </div>
    </main>

<?php
get_footer();
