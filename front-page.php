<?php
/**
 * The template for displaying the homepage (front page) for Hiraaya Luxury
 *
 * @package Hiraaya_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

get_header();
?>

    <!-- ═══ SECTION 1: HERO SECTION ═══════════════════════════════════ -->
    <section class="hero-section hero-premium-gradient" id="hero">
        <!-- Hero background image layer -->
        <div class="hero-video-bg">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero_bg.png" alt="Hiraaya Luxury Hero Background">
        </div>

        <!-- Custom Gold Arch Watermark Layer (10% Opacity) -->
        <div class="hero-watermark">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/arch-watermark.svg" alt="Gold Arch Watermark">
        </div>

        <!-- Hero Content -->
        <div class="hero-content">
            <p class="hero-eyebrow">Luxury Brand Management</p>
            <h1 class="hero-title">Where the path of refinement is illuminated by luxury</h1>
            <p class="hero-subline">A strategic luxury brand management house. India-rooted. Globally aware.</p>
            <a href="#about-us" class="btn-outline hero-cta-btn">Discover Hiraaya</a>
        </div>

        <!-- Scroll indicator -->
        <div class="hero-scroll-indicator">
            <span class="hero-scroll-text">Scroll</span>
            <div class="hero-scroll-line"></div>
        </div>
    </section>


    <!-- ═══ SECTION 2: PHILOSOPHY STRIP (DARK BAND) ═══════════════════ -->
    <section class="philosophy-strip">
        <div class="container">
            <div class="philosophy-grid">
                <!-- Column 1 -->
                <div class="reveal philosophy-col">
                    <!-- Diamond Gold Icon -->
                    <div class="philosophy-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M12 2L2 12l10 10 10-10L12 2z" />
                        </svg>
                    </div>
                    <h3 class="philosophy-title">Refinement over excess</h3>
                    <p class="philosophy-text">We believe luxury today is defined by subtlety, depth, and meaning. Not by how loud a brand speaks.</p>
                </div>
                <!-- Column 2 -->
                <div class="reveal reveal-delay-1 philosophy-col">
                    <!-- Ripple Gold Icon -->
                    <div class="philosophy-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <circle cx="12" cy="12" r="9" />
                            <circle cx="12" cy="12" r="5" />
                            <circle cx="12" cy="12" r="1" />
                        </svg>
                    </div>
                    <h3 class="philosophy-title">Experience over consumption</h3>
                    <p class="philosophy-text">Modern luxury is no longer something you buy. It is something you feel, remember, and carry with you.</p>
                </div>
                <!-- Column 3 -->
                <div class="reveal reveal-delay-2 philosophy-col">
                    <!-- Floral/Lotus Gold Icon -->
                    <div class="philosophy-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z" />
                            <path d="M12 6c-1.5 2-3 4-3 6s1.5 4 3 4 3-2 3-4-1.5-4-3-4z" />
                            <path d="M6 12c2 1.5 4 3 6 3s4-1.5 4-3-2-3-6-3-4 1.5-6 3z" />
                        </svg>
                    </div>
                    <h3 class="philosophy-title">Culture over mass attention</h3>
                    <p class="philosophy-text">The brands that endure are the ones that understand people, not just markets.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- ═══ SECTION 3: ABOUT THE FIRM (SPLIT SECTION) ═════════════════ -->
    <section class="section-padding about-section" id="about-us">
        <div class="container">
            <div class="about-grid">
                <!-- Left Content Panel (Ivory Background) -->
                <div class="reveal about-content">
                    <span class="eyebrow-label">A Strategic Luxury Brand Management House</span>
                    <h2 class="section-heading">Cultivating meaning in a world of excess</h2>
                    <p class="body-text">
                        Hiraaya Luxury was built on a simple belief: that the most valuable thing a luxury brand can own is not visibility, but perception. We work with brands that understand the difference.
                    </p>
                    <p class="body-text">
                        From strategic positioning and market orientation to hospitality-driven thinking and long-term brand relationships, we bring a considered, culturally rooted perspective to every engagement we take on.
                    </p>
                    <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="learn-more-link">
                        Learn Our Approach <span>→</span>
                    </a>
                </div>
                <!-- Right Editorial Typographic Panel -->
                <div class="editorial-quote-box reveal reveal-delay-2">
                    <img class="monogram-accent" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.png" alt="Hiraaya Monogram">
                    <p class="editorial-quote-text">"Meaningful presence is not about visibility; it is about perception, alignment, and long-term brand equity."</p>
                    <cite class="editorial-quote-attribution">Hiraaya Advisory House</cite>
                </div>
            </div>
        </div>
    </section>


    <!-- ═══ SECTION 4: SERVICES TEASER (3-CARD GRID) ══════════════════ -->
    <section class="section-padding services-teaser">
        <div class="container center-align">
            <span class="eyebrow-label reveal">What We Do</span>
            <h2 class="section-heading reveal reveal-delay-1">Strategic services for luxury brands</h2>
            
            <div class="services-grid">
                <!-- Card 1 -->
                <div class="teaser-service-card reveal">
                    <div class="service-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" />
                        </svg>
                    </div>
                    <h3 class="service-title">Luxury Brand Positioning</h3>
                    <p class="service-desc">Refining how your brand is perceived, positioned, and valued over the long term.</p>
                </div>
                <!-- Card 2 -->
                <div class="teaser-service-card reveal reveal-delay-1">
                    <div class="service-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20M2 12h20" />
                        </svg>
                    </div>
                    <h3 class="service-title">India Market Entry</h3>
                    <p class="service-desc">Helping international luxury brands understand and enter India's evolving premium landscape.</p>
                </div>
                <!-- Card 3 -->
                <div class="teaser-service-card reveal reveal-delay-2">
                    <div class="service-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M3 21h18M9 21V9a3 3 0 0 1 6 0v12M4 21V13a2 2 0 0 1 2-2h3M20 21V15a2 2 0 0 0-2-2h-3" />
                        </svg>
                    </div>
                    <h3 class="service-title">Hospitality &amp; Experiential Strategy</h3>
                    <p class="service-desc">Positioning brands through the lens of guest experience, emotional engagement, and refined environments.</p>
                </div>
            </div>

            <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="btn-outline btn-outline-navy reveal reveal-delay-3">See All Services</a>
        </div>
    </section>


    <!-- ═══ SECTION 5: SECTOR STRIP ═══════════════════════════════════ -->
    <section class="sector-strip reveal">
        <div class="container">
            <div class="sector-labels-row">
                <a href="<?php echo esc_url( home_url( '/sectors/' ) ); ?>" class="sector-label-item">Luxury Fashion</a>
                <span class="sector-divider"></span>
                <a href="<?php echo esc_url( home_url( '/sectors/' ) ); ?>" class="sector-label-item">Hospitality</a>
                <span class="sector-divider"></span>
                <a href="<?php echo esc_url( home_url( '/sectors/' ) ); ?>" class="sector-label-item">Real Estate</a>
                <span class="sector-divider"></span>
                <a href="<?php echo esc_url( home_url( '/sectors/' ) ); ?>" class="sector-label-item">Indian Brands</a>
                <span class="sector-divider"></span>
                <a href="<?php echo esc_url( home_url( '/sectors/' ) ); ?>" class="sector-label-item">International Brands</a>
            </div>
        </div>
    </section>


    <!-- ═══ SECTION 6: FOUNDER QUOTE (FULL WIDTH, DARK) ══════════════ -->
    <section class="founder-quote-section reveal">
        <div class="quote-mark">“</div>
        
        <div class="container quote-container">
            <p class="quote-text">
                "Meaningful luxury is rarely created through visibility alone. It is cultivated through perception, relationships, refinement, experience, and enduring emotional relevance."
            </p>
            <h4 class="founder-name">Parth Gupta</h4>
            <p class="founder-role">Founder, Hiraaya Luxury</p>
        </div>
    </section>


    <!-- ═══ SECTION 7: COLLABORATION CTA (IVORY) ══════════════════════ -->
    <section class="cta-section reveal">
        <div class="container cta-container">
            <h2 class="section-heading">Let us build enduring presence together</h2>
            <p class="body-text cta-desc">
                We work with a select number of brands and collaborators at any given time. If you are thinking about a conversation, we would like to hear from you.
            </p>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn-outline btn-outline-navy">Begin a Conversation</a>
        </div>
    </section>

<?php
get_footer();
