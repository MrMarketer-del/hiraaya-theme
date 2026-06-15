<?php
/**
 * Template Name: Services Page Template
 *
 * @package Hiraaya_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

get_header();
?>

    <!-- ═══ SERVICES HERO (CENTERED) ═════════════════════════════════ -->
    <header class="inner-hero">
        <!-- Gold Arch Watermark Layer (5% Opacity) -->
        <div class="hero-watermark" style="position: absolute; inset: 0; z-index: 1; display: flex; align-items: center; justify-content: center; opacity: 0.05; pointer-events: none;">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/arch-watermark.svg" alt="Gold Arch Watermark" style="height: 90%; width: auto;">
        </div>
        <div class="inner-hero-centered" style="position: relative; z-index: 2;">
            <div class="hero-content reveal">
                <p class="inner-hero-eyebrow">Services and Capabilities</p>
                <h1 class="inner-hero-title">Strategic services for luxury brands and premium sectors</h1>
                <p class="inner-hero-subline" style="margin: 0 auto;">We work across six service areas, each shaped by a multidisciplinary perspective on luxury, culture, and long-term brand value.</p>
            </div>
        </div>
    </header>

    <!-- ═══ OPENING STATEMENT ════════════════════════════════════════ -->
    <section class="section-padding" style="background: var(--color-cream); border-bottom: 1px solid rgba(184, 150, 46, 0.15);">
        <div class="container reveal" style="max-width: 900px; text-align: center;">
            <p style="font-family: var(--font-primary); font-size: clamp(1.4rem, 2.5vw, 2.2rem); font-style: italic; line-height: 1.6; color: var(--color-burgundy);">
                "Hiraaya Luxury approaches brand development through a lens that is strategic, relationship-oriented, and experience-led. We do not offer packages or standardised programmes. Every engagement is shaped by the brand, the market, and the opportunity in front of us."
            </p>
        </div>
    </section>

    <!-- ═══ SERVICES PILLARS (ALTERNATING BLOCKS) ════════════════════ -->
    <section style="background: var(--color-white);">
        
        <!-- Service 01 -->
        <div class="service-pillar-section">
            <div class="container">
                <div class="service-pillar-grid">
                    <div class="reveal">
                        <div class="service-pillar-num">01</div>
                        <h2 class="service-pillar-title">Luxury Brand Positioning and Identity Development</h2>
                        <p class="service-pillar-description">
                            A brand's position in the luxury space is rarely accidental. It is built carefully, over time, through consistent alignment between what a brand stands for and how it is experienced by the people it is meant for. We help brands find, refine, and hold that position with clarity.
                        </p>
                        <h4 class="service-pillar-focus-title">Focus Areas</h4>
                        <ul class="service-pillar-focus-list">
                            <li class="service-pillar-focus-item">Luxury positioning strategy</li>
                            <li class="service-pillar-focus-item">Brand identity refinement</li>
                            <li class="service-pillar-focus-item">Consumer perception alignment</li>
                            <li class="service-pillar-focus-item">Premium market relevance</li>
                            <li class="service-pillar-focus-item">Long-term brand value orientation</li>
                        </ul>
                    </div>
                    <div class="reveal reveal-delay-2">
                        <div class="advisory-query-card">
                            <div class="advisory-query-num">01</div>
                            <div class="advisory-query-text">"Is your brand perceived for its value, or merely its price?"</div>
                            <div>
                                <div class="advisory-query-line"></div>
                                <div class="advisory-query-label">Brand Positioning Query</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Service 02 (Reversed Order on Desktop) -->
        <div class="service-pillar-section" style="background: var(--color-cream);">
            <div class="container">
                <div class="service-pillar-grid">
                    <div class="reveal" style="order: 2;">
                        <div class="service-pillar-num">02</div>
                        <h2 class="service-pillar-title">India Market Entry and Luxury Ecosystem Development</h2>
                        <p class="service-pillar-description">
                            India's luxury market is not one market. It is several, shaped by different cities, consumer generations, cultural sensibilities, and spending behaviours. International brands that enter without understanding this often find themselves well-positioned for a consumer that does not quite exist. We help brands understand the market before they commit to it.
                        </p>
                        <h4 class="service-pillar-focus-title">Focus Areas</h4>
                        <ul class="service-pillar-focus-list">
                            <li class="service-pillar-focus-item">India luxury ecosystem understanding</li>
                            <li class="service-pillar-focus-item">Strategic city and market orientation</li>
                            <li class="service-pillar-focus-item">Consumer and cultural sensitivity</li>
                            <li class="service-pillar-focus-item">Premium retail and hospitality landscape awareness</li>
                            <li class="service-pillar-focus-item">Market development perspective</li>
                        </ul>
                    </div>
                    <div class="reveal reveal-delay-2" style="order: 1;">
                        <div class="advisory-query-card">
                            <div class="advisory-query-num">02</div>
                            <div class="advisory-query-text">"Is your global luxury playbook fluent in India's complex heritage?"</div>
                            <div>
                                <div class="advisory-query-line"></div>
                                <div class="advisory-query-label">Market Entry Query</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Service 03 -->
        <div class="service-pillar-section">
            <div class="container">
                <div class="service-pillar-grid">
                    <div class="reveal">
                        <div class="service-pillar-num">03</div>
                        <h2 class="service-pillar-title">Hospitality and Experiential Luxury Strategy</h2>
                        <p class="service-pillar-description">
                            The best luxury experiences are not designed around products. They are designed around people. Around how someone feels when they walk in, sit down, and leave. We bring hospitality-driven thinking to brand positioning because that is where we believe the future of luxury perception is being shaped.
                        </p>
                        <h4 class="service-pillar-focus-title">Focus Areas</h4>
                        <ul class="service-pillar-focus-list">
                            <li class="service-pillar-focus-item">Luxury hospitality understanding</li>
                            <li class="service-pillar-focus-item">Experience-led positioning</li>
                            <li class="service-pillar-focus-item">Guest journey sensitivity</li>
                            <li class="service-pillar-focus-item">Experiential luxury concepts</li>
                            <li class="service-pillar-focus-item">Consumer engagement environments</li>
                        </ul>
                    </div>
                    <div class="reveal reveal-delay-2">
                        <div class="advisory-query-card">
                            <div class="advisory-query-num">03</div>
                            <div class="advisory-query-text">"What does your brand feel like when the product is removed?"</div>
                            <div>
                                <div class="advisory-query-line"></div>
                                <div class="advisory-query-label">Experiential Query</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Service 04 (Reversed Order on Desktop) -->
        <div class="service-pillar-section" style="background: var(--color-cream);">
            <div class="container">
                <div class="service-pillar-grid">
                    <div class="reveal" style="order: 2;">
                        <div class="service-pillar-num">04</div>
                        <h2 class="service-pillar-title">Strategic Brand Representation and Long-Term Associations</h2>
                        <p class="service-pillar-description">
                            Representation in luxury is not about reach. It is about who you are seen with, what those associations say about you, and whether the relationships you build today will still matter in ten years. We facilitate connections that are thoughtful, selective, and built to last.
                        </p>
                        <h4 class="service-pillar-focus-title">Focus Areas</h4>
                        <ul class="service-pillar-focus-list">
                            <li class="service-pillar-focus-item">Strategic brand representation</li>
                            <li class="service-pillar-focus-item">Industry and luxury ecosystem relationships</li>
                            <li class="service-pillar-focus-item">Long-term partnership orientation</li>
                            <li class="service-pillar-focus-item">Cross-sector collaborations</li>
                            <li class="service-pillar-focus-item">Brand association development</li>
                        </ul>
                    </div>
                    <div class="reveal reveal-delay-2" style="order: 1;">
                        <div class="advisory-query-card">
                            <div class="advisory-query-num">04</div>
                            <div class="advisory-query-text">"Are your partnerships built for immediate visibility, or enduring equity?"</div>
                            <div>
                                <div class="advisory-query-line"></div>
                                <div class="advisory-query-label">Representation Query</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Service 05 -->
        <div class="service-pillar-section">
            <div class="container">
                <div class="service-pillar-grid">
                    <div class="reveal">
                        <div class="service-pillar-num">05</div>
                        <h2 class="service-pillar-title">Luxury Communication, PR and Market Presence</h2>
                        <p class="service-pillar-description">
                            How a luxury brand tells its story matters as much as the story itself. We support brands in developing a communication direction that is consistent, culturally aware, and built for the environments where their audience actually pays attention.
                        </p>
                        <h4 class="service-pillar-focus-title">Focus Areas</h4>
                        <ul class="service-pillar-focus-list">
                            <li class="service-pillar-focus-item">Luxury communication direction</li>
                            <li class="service-pillar-focus-item">Brand storytelling and perception</li>
                            <li class="service-pillar-focus-item">PR and strategic visibility</li>
                            <li class="service-pillar-focus-item">Premium consumer-facing alignment</li>
                            <li class="service-pillar-focus-item">Digital luxury presence</li>
                        </ul>
                    </div>
                    <div class="reveal reveal-delay-2">
                        <div class="advisory-query-card">
                            <div class="advisory-query-num">05</div>
                            <div class="advisory-query-text">"Is your brand speaking to be heard, or communicating to be remembered?"</div>
                            <div>
                                <div class="advisory-query-line"></div>
                                <div class="advisory-query-label">Communication Query</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Service 06 (Reversed Order on Desktop) -->
        <div class="service-pillar-section" style="background: var(--color-cream);">
            <div class="container">
                <div class="service-pillar-grid">
                    <div class="reveal" style="order: 2;">
                        <div class="service-pillar-num">06</div>
                        <h2 class="service-pillar-title">Luxury Lifestyle, Retail and Premium Real Estate Alignment</h2>
                        <p class="service-pillar-description">
                            Where a luxury brand exists physically is a statement about what it values. The retail environments, the residential projects, the hospitality spaces a brand chooses to associate with shape how it is understood as much as anything it produces. We help brands make those choices carefully.
                        </p>
                        <h4 class="service-pillar-focus-title">Focus Areas</h4>
                        <ul class="service-pillar-focus-list">
                            <li class="service-pillar-focus-item">Luxury retail understanding</li>
                            <li class="service-pillar-focus-item">Premium real estate ecosystem awareness</li>
                            <li class="service-pillar-focus-item">Lifestyle and experiential alignment</li>
                            <li class="service-pillar-focus-item">High-value consumer environment sensitivity</li>
                            <li class="service-pillar-focus-item">Luxury space positioning perspective</li>
                        </ul>
                    </div>
                    <div class="reveal reveal-delay-2" style="order: 1;">
                        <div class="advisory-query-card">
                            <div class="advisory-query-num">06</div>
                            <div class="advisory-query-text">"Does your physical space state what you value, or merely what you sell?"</div>
                            <div>
                                <div class="advisory-query-line"></div>
                                <div class="advisory-query-label">Spatial Alignment Query</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- ═══ SECTION 3: CLOSING QUOTE STRIP (DARK) ═════════════════════ -->
    <section class="reveal" style="background: var(--color-burgundy); padding: 100px 0; text-align: center; border-top: 1px solid rgba(184, 150, 46, 0.15);">
        <div class="container" style="max-width: 800px;">
            <p style="font-family: var(--font-primary); font-size: clamp(1.4rem, 2.5vw, 2.2rem); font-style: italic; line-height: 1.6; color: var(--color-gold);">
                "Meaningful luxury presence is cultivated through strategy, refinement, cultural understanding, and enduring relationships."
            </p>
        </div>
    </section>

<?php
get_footer();
