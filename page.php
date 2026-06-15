<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Hiraaya_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

get_header();
?>

    <main id="primary" class="site-main" style="padding-top: 140px; min-height: 70vh; background: var(--color-white);">
        <div class="container" style="padding-bottom: 80px; max-width: 900px;">
            <?php
            while ( have_posts() ) : the_post();
            ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header" style="margin-bottom: 40px; text-align: center;">
                        <h1 class="entry-title" style="font-family: var(--font-primary); font-size: 3rem; color: var(--color-burgundy);"><?php the_title(); ?></h1>
                        <div style="width: 60px; height: 1px; background: var(--color-muted-gold); margin: 24px auto 0;"></div>
                    </header>

                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="entry-thumbnail" style="margin-bottom: 48px; border-radius: 12px; overflow: hidden; box-shadow: 0 16px 40px rgba(0,0,0,0.06);">
                            <?php the_post_thumbnail( 'large', array( 'style' => 'width: 100%; height: auto;' ) ); ?>
                        </div>
                    <?php endif; ?>

                    <div class="entry-content" style="font-family: var(--font-ui); font-size: 15px; color: #333333; line-height: 2.0;">
                        <?php
                        the_content();

                        wp_link_pages( array(
                            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'hiraaya-theme' ),
                            'after'  => '</div>',
                        ) );
                        ?>
                    </div>
                </article>
            <?php
            endwhile;
            ?>
        </div>
    </main>

<?php
get_footer();
