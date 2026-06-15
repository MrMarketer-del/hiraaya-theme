<?php
/**
 * Template Name: Work Page Template
 *
 * @package Hiraaya_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

get_header();
?>

    <!-- ═══ WORK HERO (CENTERED) ═════════════════════════════════════ -->
    <header class="inner-hero">
        <div class="inner-hero-centered">
            <div class="hero-content">
                <p class="inner-hero-eyebrow reveal">Selected Engagements</p>
                <h1 class="inner-hero-title reveal reveal-delay-1">Work built on long-term thinking</h1>
                <p class="inner-hero-subline reveal reveal-delay-2" style="margin: 0 auto;">We do not take on a large number of engagements at any given time. The ones we do take on, we take seriously.</p>
            </div>
        </div>
    </header>

    <!-- ═══ OPENING STATEMENT ════════════════════════════════════════ -->
    <section class="section-padding" style="background: var(--color-cream); border-bottom: 1px solid rgba(184, 150, 46, 0.15);">
        <div class="container" style="max-width: 900px; text-align: center;">
            <p class="reveal" style="font-family: var(--font-primary); font-size: clamp(1.4rem, 2.5vw, 2.1rem); font-style: italic; line-height: 1.6; color: var(--color-burgundy);">
                "Every engagement at Hiraaya begins with a genuine question: what does this brand need to believe about itself before it can ask the market to believe it? The work we share here reflects that process."
            </p>
        </div>
    </section>

    <!-- ═══ ENGAGEMENT CARDS ══════════════════════════════════════════ -->
    <section class="section-padding" style="background: var(--color-white);">
        <div class="container" style="max-width: 1000px;">
            
            <!-- Engagement Card 1 -->
            <div class="engagement-card reveal">
                <div class="engagement-header">
                    <span class="engagement-tag">Luxury Hospitality</span>
                    <span class="engagement-market">Udaipur / Pan-India</span>
                </div>
                <h3 class="engagement-title">Positioning a heritage hospitality concept for a new generation of Indian luxury travellers.</h3>
                <p class="engagement-summary">
                    Reorienting a prominent regional palace hotel's market presence to appeal to younger, design-sensitive travellers. Developed experiential concepts, guest journey mapping, and a redesigned communication narrative.
                </p>
                <div>
                    <h5 class="engagement-outcome-title">Outcome</h5>
                    <p class="engagement-outcome">Shifted brand perception from a traditional heritage estate to an exclusive cultural hospitality destination, increasing direct room bookings by 35% in 12 months.</p>
                </div>
            </div>

            <!-- Engagement Card 2 -->
            <div class="engagement-card reveal">
                <div class="engagement-header">
                    <span class="engagement-tag">International Brand, India Entry</span>
                    <span class="engagement-market">Delhi NCR / Mumbai</span>
                </div>
                <h3 class="engagement-title">Developing market entry and retail ecosystem strategy for a European fine writing instrument brand.</h3>
                <p class="engagement-summary">
                    Supported a heritage European brand in evaluating key Indian metro cities, identifying aligned retail real estate partners, and tailoring their global storytelling for high-net-worth Indian consumers.
                </p>
                <div>
                    <h5 class="engagement-outcome-title">Outcome</h5>
                    <p class="engagement-outcome">Established local ecosystem connections and defined a multi-city rollout plan aligned with premium shopping avenues.</p>
                </div>
            </div>

            <!-- Engagement Card 3 -->
            <div class="engagement-card reveal">
                <div class="engagement-header">
                    <span class="engagement-tag">Indian Premium Brand</span>
                    <span class="engagement-market">Noida / Delhi NCR / London</span>
                </div>
                <h3 class="engagement-title">Scaling and positioning an artisanal luxury apparel brand for international audiences.</h3>
                <p class="engagement-summary">
                    Structured a comprehensive repositioning plan emphasizing the brand's sustainable local sourcing, architectural design sensibilities, and legacy techniques while building a global digital presence.
                </p>
                <div>
                    <h5 class="engagement-outcome-title">Outcome</h5>
                    <p class="engagement-outcome">Refined brand communication and digital identity, leading to successful representation in European showrooms.</p>
                </div>
            </div>

        </div>
    </section>

    <!-- ═══ CLOSING CTA ═══════════════════════════════════════════════ -->
    <section style="background: var(--color-cream); padding: 120px 0; border-top: 1px solid rgba(184, 150, 46, 0.15); text-align: center;">
        <div class="container" style="max-width: 700px;">
            <h2 class="reveal" style="font-family: var(--font-primary); font-size: clamp(2rem, 3.5vw, 2.6rem); font-weight: 400; color: var(--color-burgundy); line-height: 1.3; margin-bottom: 20px;">Interested in working together?</h2>
            <p class="reveal reveal-delay-1" style="font-family: var(--font-ui); font-size: 15px; line-height: 1.8; color: var(--color-text-body); margin-bottom: 40px; opacity: 0.85;">
                We welcome conversations from brands that are thinking carefully about their next step.
            </p>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn-outline btn-outline-navy reveal reveal-delay-2" style="padding: 14px 44px;">Get in Touch</a>
        </div>
    </section>

<?php
get_footer();
