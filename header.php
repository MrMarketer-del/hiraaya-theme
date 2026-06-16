<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    
    <!-- Load Cormorant Garamond / Outfit fallbacks in head for text elements -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&family=Jost:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


    <!-- ═══ PRELOADER ANIMATION ════════════════════════════════════════ -->
    <?php if ( is_front_page() && ! isset( $_COOKIE['hiraaya_preloaded'] ) ) : ?>
    <div id="hiraaya-preloader">
        <div id="hiraaya-shimmer-bar" class="preloader-shimmer-bar"></div>
        <div id="hiraaya-icon-wrap">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.png" alt="Hiraaya Luxury Logo Monogram">
        </div>
    </div>
    <?php endif; ?>

    <!-- ═══ NAVIGATION BAR ════════════════════════════════════════════ -->
    <nav id="navbar" class="<?php echo ( ! is_front_page() ) ? 'nav-visible scrolled' : ''; ?>">
        <div class="nav-container">
            <!-- Left Corner: Brand Logo -->
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-brand-centered" id="nav-logo">
                <img class="brand-logo-img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.png" alt="Hiraaya Luxury Logo">
            </a>
            
            <!-- Right Corner: Hamburger Menu Button -->
            <button class="nav-burger" id="burger" aria-label="Toggle Navigation Menu">
                <span></span>
                <span></span>
            </button>
        </div>
    </nav>

    <!-- Mobile/Full-screen Menu Overlay -->
    <div class="nav-mobile-overlay" id="mobile-menu-overlay">
        <div class="nav-overlay-content" style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary-menu',
                'container'      => false,
                'menu_class'     => 'nav-mobile-menu',
                'fallback_cb'    => false,
                'depth'          => 1,
            ) );
            ?>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="nav-cta-btn" style="margin-top: 40px; font-family: var(--font-ui); font-size: 13px; letter-spacing: 3px; text-transform: uppercase; color: var(--color-white); border: 1px solid var(--color-light-blush); padding: 12px 32px;">Begin Your Journey</a>
        </div>
    </div>
