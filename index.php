<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
        <div class="container" style="padding-bottom: 80px;">
            <header class="page-header" style="margin-bottom: 56px;">
                <span class="eyebrow-label"><?php esc_html_e( 'Journal', 'hiraaya-theme' ); ?></span>
                <h1 class="page-title" style="font-family: var(--font-primary); font-size: 3rem; color: var(--color-burgundy);"><?php esc_html_e( 'Recent Editorial Stories', 'hiraaya-theme' ); ?></h1>
            </header>

            <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(350px, 1fr)); gap: 40px;">
                <?php
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post();
                ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="display: flex; flex-direction: column; gap: 20px;">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <div style="aspect-ratio: 16/10; overflow: hidden; border-radius: 8px;">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail( 'large', array( 'style' => 'width: 100%; height: 100%; object-fit: cover;' ) ); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                            
                            <div>
                                <span style="font-family: var(--font-ui); font-size: 11px; letter-spacing: 2px; text-transform: uppercase; color: var(--color-muted-gold);"><?php echo get_the_date(); ?></span>
                                <h2 style="font-family: var(--font-primary); font-size: 1.6rem; color: var(--color-burgundy); margin-top: 8px; margin-bottom: 12px;">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                                <p style="font-family: var(--font-ui); font-size: 14px; color: #4a5568; line-height: 1.8; margin-bottom: 20px;">
                                    <?php echo wp_trim_words( get_the_excerpt(), 20 ); ?>
                                </p>
                                <a href="<?php the_permalink(); ?>" class="text-link" style="color: var(--color-burgundy); font-size: 12px; letter-spacing: 1px;">Read Story</a>
                            </div>
                        </article>
                <?php
                    endwhile;
                    the_posts_navigation();
                else :
                    echo '<p>' . esc_html__( 'No posts found.', 'hiraaya-theme' ) . '</p>';
                endif;
                ?>
            </div>
        </div>
    </main>

<?php
get_footer();
