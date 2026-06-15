<?php
/**
 * Template Name: About Page Template
 *
 * @package Hiraaya_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

get_header();
?>

    <!-- ═══ ABOUT HERO (SPLIT LAYOUT) ════════════════════════════════ -->
    <header class="inner-hero-split">
        <div class="hero-split-text reveal">
            <p class="inner-hero-eyebrow">About Hiraaya Luxury</p>
            <h1 class="inner-hero-title">A strategic luxury brand management house</h1>
            <p class="inner-hero-subline">Built at the intersection of culture, market insight, and refined living.</p>
        </div>
        <!-- Hero Split Image -->
        <div class="hero-split-image reveal reveal-delay-2">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/about_hero.png" alt="Hiraaya Luxury Advisory">
        </div>
    </header>

    <!-- ═══ SECTION 1: THE FIRM ═══════════════════════════════════════ -->
    <section class="section-padding" style="background: var(--color-cream);">
        <div class="container">
            <div style="display: grid; grid-template-columns: 1.15fr 0.85fr; gap: 80px; align-items: center;">
                <div class="reveal">
                    <span class="eyebrow-label">Who We Are</span>
                    <h2 style="font-family: var(--font-primary); font-size: clamp(2rem, 3.5vw, 2.8rem); font-weight: 400; color: var(--color-burgundy); line-height: 1.25; margin-bottom: 32px;">Luxury brand management with a point of view</h2>
                    <p style="font-family: var(--font-ui); font-size: 15px; line-height: 1.8; color: var(--color-text-body); margin-bottom: 24px;">
                        Hiraaya Luxury is a luxury brand management house focused on strategic positioning, brand representation, market development, and consumer experience across luxury, hospitality, lifestyle, and premium sectors.
                    </p>
                    <p style="font-family: var(--font-ui); font-size: 15px; line-height: 1.8; color: var(--color-text-body); margin-bottom: 24px;">
                        We work at the intersection of culture, business, aesthetics, and market insight. Our perspective is shaped by global luxury understanding and a genuine sensitivity toward India's evolving premium landscape, where aspiration, heritage, and contemporary living are coming together in ways that have no real precedent.
                    </p>
                    <p style="font-family: var(--font-ui); font-size: 15px; line-height: 1.8; color: var(--color-text-body); margin-bottom: 0;">
                        We do not operate like an agency. We do not pitch campaigns or build content calendars. We think carefully about how brands should be understood, positioned, and experienced. Then we work to make that happen over the long term.
                    </p>
                </div>
                <div class="editorial-quote-box reveal reveal-delay-2" style="min-height: 400px;">
                    <span style="font-family: var(--font-ui); font-size: 10px; letter-spacing: 3px; text-transform: uppercase; color: var(--color-gold); margin-bottom: 24px;">Core Focus Areas</span>
                    <h3 style="font-family: var(--font-primary); font-size: 1.8rem; color: var(--color-cream); font-weight: 400; margin-bottom: 16px;">Strategic Alignment</h3>
                    <div style="width: 30px; height: 1px; background: var(--color-muted-gold); margin-bottom: 16px;"></div>
                    <h3 style="font-family: var(--font-primary); font-size: 1.8rem; color: var(--color-cream); font-weight: 400; margin-bottom: 16px;">Experiential Depth</h3>
                    <div style="width: 30px; height: 1px; background: var(--color-muted-gold); margin-bottom: 16px;"></div>
                    <h3 style="font-family: var(--font-primary); font-size: 1.8rem; color: var(--color-cream); font-weight: 400; margin-bottom: 0;">Long-Term Equity</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══ SECTION 2: OUR APPROACH (6 VALUE CARDS) ═══════════════════ -->
    <section class="section-padding" style="background: var(--color-white); border-top: 1px solid rgba(184, 150, 46, 0.15); border-bottom: 1px solid rgba(184, 150, 46, 0.15);">
        <div class="container">
            <div class="reveal" style="text-align: center; max-width: 700px; margin: 0 auto 64px;">
                <span class="eyebrow-label" style="justify-content: center;">Our Approach</span>
                <h2 style="font-family: var(--font-primary); font-size: clamp(2rem, 3.5vw, 2.6rem); font-weight: 400; color: var(--color-burgundy); line-height: 1.25;">Six principles that shape every engagement</h2>
            </div>
            
            <div class="inner-grid-3">
                <!-- Value Card 1 -->
                <div class="value-card reveal">
                    <div class="value-card-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" />
                        </svg>
                    </div>
                    <h3 class="value-card-title">Strategic</h3>
                    <p class="value-card-body">Every decision we make is grounded in market insight, cultural intelligence, and a clear-eyed understanding of where a brand sits and where it needs to go.</p>
                </div>

                <!-- Value Card 2 -->
                <div class="value-card reveal reveal-delay-1">
                    <div class="value-card-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2M9 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm14 10v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75" />
                        </svg>
                    </div>
                    <h3 class="value-card-title">Relationship-oriented</h3>
                    <p class="value-card-body">Luxury is built on trust and discretion. We take long-term associations seriously and work only with people we genuinely believe in.</p>
                </div>

                <!-- Value Card 3 -->
                <div class="value-card reveal reveal-delay-2">
                    <div class="value-card-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <circle cx="12" cy="12" r="9" />
                            <circle cx="12" cy="12" r="5" />
                            <circle cx="12" cy="12" r="1" />
                        </svg>
                    </div>
                    <h3 class="value-card-title">Experience-led</h3>
                    <p class="value-card-body">We think about luxury the way a good host thinks about a guest. What does someone feel when they encounter this brand? What do they remember?</p>
                </div>

                <!-- Value Card 4 -->
                <div class="value-card reveal">
                    <div class="value-card-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20M2 12h20" />
                        </svg>
                    </div>
                    <h3 class="value-card-title">Globally aware</h3>
                    <p class="value-card-body">We follow luxury closely across markets, consumer generations, and cultural shifts. Our perspective is informed by what is happening globally, not just locally.</p>
                </div>

                <!-- Value Card 5 -->
                <div class="value-card reveal reveal-delay-1">
                    <div class="value-card-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z" />
                            <path d="M12 6c-1.5 2-3 4-3 6s1.5 4 3 4 3-2 3-4-1.5-4-3-4z" />
                        </svg>
                    </div>
                    <h3 class="value-card-title">Rooted in heritage</h3>
                    <p class="value-card-body">India's cultural depth is one of the most underused assets in luxury positioning. We know how to draw from it without being predictable about it.</p>
                </div>

                <!-- Value Card 6 -->
                <div class="value-card reveal reveal-delay-2">
                    <div class="value-card-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                            <polyline points="22 4 12 14.01 9 11.01" />
                        </svg>
                    </div>
                    <h3 class="value-card-title">Focused on excellence</h3>
                    <p class="value-card-body">Refinement takes patience. We are not interested in shortcuts, and we do not recommend them to the brands we work with.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══ SECTION 3: FOUNDER PARTH GUPTA ════════════════════════════ -->
    <section class="section-padding" style="background: var(--color-cream);">
        <div class="container">
            <div style="display: grid; grid-template-columns: 0.9fr 1.1fr; gap: 80px; align-items: center;">
                <div class="editorial-quote-box reveal" style="min-height: 440px;">
                    <img class="monogram-accent" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.png" alt="Hiraaya Monogram Seal" style="opacity: 0.95; width: 80px; height: 80px;">
                    <p style="font-family: var(--font-ui); font-size: 10px; letter-spacing: 4px; text-transform: uppercase; color: var(--color-gold); margin-bottom: 20px;">ESTABLISHED 2026</p>
                    <p style="font-family: var(--font-primary); font-size: 1.6rem; font-style: italic; line-height: 1.6; color: var(--color-cream); margin-bottom: 0;">"Refinement is not an addition; it is the elimination of the unnecessary."</p>
                </div>
                <div class="reveal reveal-delay-2">
                    <span class="eyebrow-label">Parth Gupta, Founder</span>
                    <h2 style="font-family: var(--font-primary); font-size: clamp(2rem, 3.5vw, 2.8rem); font-weight: 400; color: var(--color-burgundy); line-height: 1.25; margin-bottom: 32px;">A philosophy built on refinement</h2>
                    <p style="font-family: var(--font-ui); font-size: 15px; line-height: 1.8; color: var(--color-text-body); margin-bottom: 20px;">
                        Hiraaya Luxury was conceived from years of observation, study, and a genuine curiosity about what makes certain brands endure when so many others fade. The answer was almost never the product. It was almost always the perception, the relationships, and the experience built around it.
                    </p>
                    <p style="font-family: var(--font-ui); font-size: 15px; line-height: 1.8; color: var(--color-text-body); margin-bottom: 36px;">
                        I started Hiraaya because I wanted to work with brands that take the long view. Brands that care about how they are understood, not just how often they are seen. That philosophy shapes everything we do here.
                    </p>
                    
                    <div style="border-left: 2px solid var(--color-muted-gold); padding-left: 28px; margin-top: 40px;">
                        <p style="font-family: var(--font-primary); font-size: 20px; font-style: italic; line-height: 1.6; color: var(--color-burgundy); margin-bottom: 12px;">
                            "Meaningful luxury is rarely created through visibility alone. It is cultivated through perception, relationships, refinement, experience, and enduring emotional relevance."
                        </p>
                        <cite style="font-family: var(--font-ui); font-size: 11px; font-weight: 500; letter-spacing: 2px; text-transform: uppercase; color: var(--color-muted-text); font-style: normal;">
                            Parth Gupta, Founder, Hiraaya Luxury
                        </cite>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══ SECTION 4: PHILOSOPHY WHEEL ══════════════════════════════ -->
    <section class="philosophy-wheel-container">
        <div class="container">
            <span class="eyebrow-label reveal" style="justify-content: center;">Our Values</span>
            <h2 class="reveal reveal-delay-1" style="font-family: var(--font-primary); font-size: clamp(2rem, 3.5vw, 2.6rem); font-weight: 400; color: var(--color-burgundy); line-height: 1.25;">The Hiraaya philosophy</h2>
            
            <div class="philosophy-wheel-svg-wrap reveal reveal-delay-2">
                <!-- SVG Philosophy Wheel -->
                <svg viewBox="0 0 600 600" width="100%" height="100%">
                    <!-- Spokes (Lines) -->
                    <line x1="300" y1="300" x2="300" y2="105" stroke="#B8962E" stroke-width="1.5" />
                    <line x1="300" y1="300" x2="468.9" y2="202.5" stroke="#B8962E" stroke-width="1.5" />
                    <line x1="300" y1="300" x2="468.9" y2="397.5" stroke="#B8962E" stroke-width="1.5" />
                    <line x1="300" y1="300" x2="300" y2="495" stroke="#B8962E" stroke-width="1.5" />
                    <line x1="300" y1="300" x2="131.1" y2="397.5" stroke="#B8962E" stroke-width="1.5" />
                    <line x1="300" y1="300" x2="131.1" y2="202.5" stroke="#B8962E" stroke-width="1.5" />

                    <!-- Spoke 1 Circle (Refinement) -->
                    <circle cx="300" cy="105" r="48" fill="#F9F5EE" stroke="#B8962E" stroke-width="1.5" />
                    <text x="300" y="109" text-anchor="middle" font-family="var(--font-ui)" font-size="10.5" font-weight="500" fill="#3D0D17" letter-spacing="1.5">REFINEMENT</text>

                    <!-- Spoke 2 Circle (Experience) -->
                    <circle cx="468.9" cy="202.5" r="48" fill="#F9F5EE" stroke="#B8962E" stroke-width="1.5" />
                    <text x="468.9" y="206.5" text-anchor="middle" font-family="var(--font-ui)" font-size="10.5" font-weight="500" fill="#3D0D17" letter-spacing="1.5">EXPERIENCE</text>

                    <!-- Spoke 3 Circle (Culture) -->
                    <circle cx="468.9" cy="397.5" r="48" fill="#F9F5EE" stroke="#B8962E" stroke-width="1.5" />
                    <text x="468.9" y="401.5" text-anchor="middle" font-family="var(--font-ui)" font-size="10.5" font-weight="500" fill="#3D0D17" letter-spacing="1.5">CULTURE</text>

                    <!-- Spoke 4 Circle (Hospitality) -->
                    <circle cx="300" cy="495" r="48" fill="#F9F5EE" stroke="#B8962E" stroke-width="1.5" />
                    <text x="300" y="499" text-anchor="middle" font-family="var(--font-ui)" font-size="10.5" font-weight="500" fill="#3D0D17" letter-spacing="1.5">HOSPITALITY</text>

                    <!-- Spoke 5 Circle (Identity) -->
                    <circle cx="131.1" cy="397.5" r="48" fill="#F9F5EE" stroke="#B8962E" stroke-width="1.5" />
                    <text x="131.1" y="401.5" text-anchor="middle" font-family="var(--font-ui)" font-size="10.5" font-weight="500" fill="#3D0D17" letter-spacing="1.5">IDENTITY</text>

                    <!-- Spoke 6 Circle (Long-term value) -->
                    <circle cx="131.1" cy="202.5" r="48" fill="#F9F5EE" stroke="#B8962E" stroke-width="1.5" />
                    <text x="131.1" y="200" text-anchor="middle" font-family="var(--font-ui)" font-size="10" font-weight="500" fill="#3D0D17" letter-spacing="1">LONG-TERM</text>
                    <text x="131.1" y="211" text-anchor="middle" font-family="var(--font-ui)" font-size="10" font-weight="500" fill="#3D0D17" letter-spacing="1">VALUE</text>

                    <!-- Central Monogram Hub -->
                    <circle cx="300" cy="300" r="55" fill="#3D0D17" stroke="#B8962E" stroke-width="2" />
                    <image x="245" y="245" width="110" height="110" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.png" />
                </svg>

                <!-- Mobile Fallback list -->
                <ul class="philosophy-wheel-list">
                    <li class="philosophy-wheel-list-item">
                        <span class="philosophy-wheel-list-number">01</span>
                        <span class="philosophy-wheel-list-text">Refinement</span>
                    </li>
                    <li class="philosophy-wheel-list-item">
                        <span class="philosophy-wheel-list-number">02</span>
                        <span class="philosophy-wheel-list-text">Experience</span>
                    </li>
                    <li class="philosophy-wheel-list-item">
                        <span class="philosophy-wheel-list-number">03</span>
                        <span class="philosophy-wheel-list-text">Culture</span>
                    </li>
                    <li class="philosophy-wheel-list-item">
                        <span class="philosophy-wheel-list-number">04</span>
                        <span class="philosophy-wheel-list-text">Hospitality</span>
                    </li>
                    <li class="philosophy-wheel-list-item">
                        <span class="philosophy-wheel-list-number">05</span>
                        <span class="philosophy-wheel-list-text">Identity</span>
                    </li>
                    <li class="philosophy-wheel-list-item">
                        <span class="philosophy-wheel-list-number">06</span>
                        <span class="philosophy-wheel-list-text">Long-term value</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

<?php
get_footer();
