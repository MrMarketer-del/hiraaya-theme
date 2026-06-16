<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hiraaya_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
?>

    <!-- ═══ FOOTER ════════════════════════════════════════════════════ -->
    <footer style="background: var(--color-burgundy); padding: 100px 0 40px; color: rgba(255, 255, 255, 0.7); position: relative; overflow: hidden;">
        <!-- Background Gold Arch Watermark Layer -->
        <div class="footer-watermark" style="position: absolute; bottom: -40px; right: 8%; width: 380px; opacity: 0.08; pointer-events: none; z-index: 1;">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/arch-watermark.svg" alt="Hiraaya Arch Watermark" style="width: 100%; height: auto; filter: none;">
        </div>

        <div class="container" style="position: relative; z-index: 2;">
            <div style="display: grid; grid-template-columns: 2fr 1fr 1.2fr; gap: 64px; padding-bottom: 64px; border-bottom: 1px solid rgba(184, 150, 46, 0.15);">
                <div>
                    <h4 style="color: var(--color-white); font-family: var(--font-primary); font-size: 2rem; letter-spacing: 0.15em; text-transform: uppercase; margin-bottom: 8px;">Hiraaya</h4>
                    <p style="font-family: var(--font-ui); font-size: 11px; letter-spacing: 3px; text-transform: uppercase; color: var(--color-gold); margin-bottom: 24px;">Luxury · Brand Management House</p>
                    <p style="font-family: var(--font-ui); font-size: 14px; line-height: 1.8; color: rgba(255,255,255,0.45); max-width: 380px; font-style: italic;">
                        "Where the path of refinement is illuminated by luxury"
                    </p>
                </div>
                <div>
                    <h5 style="color: var(--color-white); font-family: var(--font-ui); font-size: 11px; letter-spacing: 3px; text-transform: uppercase; margin-bottom: 24px;">Navigate</h5>
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'footer-menu',
                        'container'      => false,
                        'menu_class'     => 'footer-links-list',
                        'fallback_cb'    => false,
                        'depth'          => 1,
                    ) );
                    ?>
                </div>
                <div>
                    <h5 style="color: var(--color-white); font-family: var(--font-ui); font-size: 11px; letter-spacing: 3px; text-transform: uppercase; margin-bottom: 24px;">Connect</h5>
                    <p style="font-family: var(--font-ui); font-size: 13px; line-height: 1.6; color: rgba(255,255,255,0.55); margin-bottom: 16px;">
                        MZ 02, Ansals Fortune Arcade, Sector 18, Noida, Uttar Pradesh, India
                    </p>
                    <ul style="list-style: none; display: flex; flex-direction: column; gap: 10px; font-size: 13px; padding: 0;">
                        <li><a href="mailto:parth@hiraayaluxury.com" style="color: var(--color-gold); transition: opacity 0.3s;">parth@hiraayaluxury.com</a></li>
                        <li><a href="https://www.hiraayaluxury.com" style="color: var(--color-gold); transition: opacity 0.3s;">www.hiraayaluxury.com</a></li>
                        <li><a href="https://www.instagram.com/hiraayaluxury/" style="color: rgba(255,255,255,0.55); transition: opacity 0.3s;" target="_blank" rel="noopener">@hiraayaluxury</a></li>
                    </ul>
                </div>
            </div>
            
            <div style="display: flex; justify-content: space-between; align-items: center; padding-top: 36px; font-size: 12px; color: rgba(255, 255, 255, 0.25); font-family: var(--font-ui);">
                <p>© <?php echo date('Y'); ?> Hiraaya Luxury. All rights reserved.</p>
                <div style="display: flex; gap: 24px;">
                    <a href="https://www.instagram.com/hiraayaluxury/" target="_blank" rel="noopener">Instagram</a>
                    <a href="#">LinkedIn</a>
                </div>
            </div>
        </div>
    </footer>

<?php wp_footer(); ?>

</body>
</html>
