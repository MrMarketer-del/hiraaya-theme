<?php
/**
 * Template Name: Sectors Page Template
 *
 * @package Hiraaya_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

get_header();
?>

    <!-- ══ LINE BACKGROUND WATERMARK ══════════════════════════════════ -->
    <div style="position: fixed; inset: 0; z-index: -1; display: flex; align-items: center; justify-content: center; opacity: 0.03; pointer-events: none;">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/arch-watermark.svg" alt="Gold Arch Watermark Outline" style="height: 95%; width: auto;">
    </div>

    <!-- ═══ SECTORS HERO (CENTERED) ══════════════════════════════════ -->
    <header class="inner-hero">
        <div class="inner-hero-centered">
            <div class="hero-content reveal">
                <p class="inner-hero-eyebrow">Sectors and Strategic Focus</p>
                <h1 class="inner-hero-title">Where we work and what we understand well</h1>
                <p class="inner-hero-subline" style="margin: 0 auto;">We are selective about the sectors we operate in. Not because of limitation, but because genuine understanding takes time.</p>
            </div>
        </div>
    </header>

    <!-- ═══ OPENING STATEMENT ════════════════════════════════════════ -->
    <section class="section-padding" style="background: var(--color-cream); border-bottom: 1px solid rgba(184, 150, 46, 0.15);">
        <div class="container reveal" style="max-width: 900px; text-align: center;">
            <p style="font-family: var(--font-primary); font-size: clamp(1.4rem, 2.5vw, 2.1rem); font-style: italic; line-height: 1.6; color: var(--color-burgundy);">
                "Hiraaya Luxury seeks to operate across luxury ecosystems where culture, hospitality, experience, aesthetics, and long-term brand presence intersect. We remain oriented toward sectors that reflect refinement, experiential value, and genuine growth potential."
            </p>
        </div>
    </section>

    <!-- ═══ SECTORS ACCORDION SECTION ════════════════════════════════ -->
    <section class="section-padding" style="background: var(--color-white);">
        <div class="container">
            <div class="sectors-accordion">
                
                <!-- Accordion Item 1 -->
                <div class="accordion-item reveal">
                    <button class="accordion-header">
                        <span class="accordion-title">Luxury Fashion and Accessories</span>
                        <span class="accordion-icon">+</span>
                    </button>
                    <div class="accordion-content">
                        <div class="accordion-content-inner" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 40px; align-items: center;">
                            <div>
                                <p class="accordion-description">
                                    Fashion is the most visible face of luxury, and often the most misunderstood. The brands that endure in this space are the ones that have built a genuine identity, not just an aesthetic. We work with brands exploring refined market presence, long-term positioning, and the kind of consumer relationships that do not depend on the next season.
                                </p>
                                <h4 class="accordion-includes-title">Sectors of Focus</h4>
                                <ul class="accordion-includes-list">
                                    <li class="accordion-includes-item">Luxury fashion houses</li>
                                    <li class="accordion-includes-item">Accessories and leather goods</li>
                                    <li class="accordion-includes-item">Watches and jewellery</li>
                                    <li class="accordion-includes-item">Writing instruments</li>
                                    <li class="accordion-includes-item">Premium lifestyle brands</li>
                                </ul>
                            </div>
                            <div style="aspect-ratio: 4 / 3; overflow: hidden; border-radius: 8px; border: 1px solid rgba(184, 150, 46, 0.25);">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/sector_fashion.png" alt="Luxury Fashion" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 2 -->
                <div class="accordion-item reveal reveal-delay-1">
                    <button class="accordion-header">
                        <span class="accordion-title">Hospitality and Experiential Luxury</span>
                        <span class="accordion-icon">+</span>
                    </button>
                    <div class="accordion-content">
                        <div class="accordion-content-inner" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 40px; align-items: center;">
                            <div>
                                <p class="accordion-description">
                                    Hospitality is the sector that understands experience better than any other. Every luxury brand can learn something from a great hotel. We work with hospitality brands where guest experience, emotional engagement, and the quality of an environment are the primary levers of brand perception.
                                </p>
                                <h4 class="accordion-includes-title">Sectors of Focus</h4>
                                <ul class="accordion-includes-list">
                                    <li class="accordion-includes-item">Luxury hotels and resorts</li>
                                    <li class="accordion-includes-item">Boutique hospitality concepts</li>
                                    <li class="accordion-includes-item">Wellness and retreat experiences</li>
                                    <li class="accordion-includes-item">Experiential travel and tourism</li>
                                    <li class="accordion-includes-item">Curated guest experiences</li>
                                </ul>
                            </div>
                            <div style="aspect-ratio: 4 / 3; overflow: hidden; border-radius: 8px; border: 1px solid rgba(184, 150, 46, 0.25);">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/sector_hospitality.png" alt="Luxury Hospitality" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 3 -->
                <div class="accordion-item reveal reveal-delay-2">
                    <button class="accordion-header">
                        <span class="accordion-title">Luxury Real Estate and Premium Spaces</span>
                        <span class="accordion-icon">+</span>
                    </button>
                    <div class="accordion-content">
                        <div class="accordion-content-inner" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 40px; align-items: center;">
                            <div>
                                <p class="accordion-description">
                                    The spaces where people live, stay, and spend time are increasingly central to how luxury is perceived and desired. Architecture, spatial identity, and the lifestyle ecosystems built around premium real estate are shaping a new generation of luxury consumers. We understand this intersection and work within it thoughtfully.
                                </p>
                                <h4 class="accordion-includes-title">Sectors of Focus</h4>
                                <ul class="accordion-includes-list">
                                    <li class="accordion-includes-item">Premium real estate developments</li>
                                    <li class="accordion-includes-item">Luxury residences and lifestyle spaces</li>
                                    <li class="accordion-includes-item">Hospitality-integrated projects</li>
                                    <li class="accordion-includes-item">Experience-led environments</li>
                                    <li class="accordion-includes-item">Luxury commercial ecosystems</li>
                                </ul>
                            </div>
                            <div style="aspect-ratio: 4 / 3; overflow: hidden; border-radius: 8px; border: 1px solid rgba(184, 150, 46, 0.25);">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/sector_realestate.png" alt="Luxury Real Estate" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 4 -->
                <div class="accordion-item reveal">
                    <button class="accordion-header">
                        <span class="accordion-title">Emerging Indian Luxury Brands</span>
                        <span class="accordion-icon">+</span>
                    </button>
                    <div class="accordion-content">
                        <div class="accordion-content-inner" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 40px; align-items: center;">
                            <div>
                                <p class="accordion-description">
                                    India has always had the depth for world-class luxury. What it is building now is the vocabulary to express it on its own terms. We are particularly interested in Indian luxury concepts that are culturally rooted, globally considered, and serious about the long term.
                                </p>
                                <h4 class="accordion-includes-title">Sectors of Focus</h4>
                                <ul class="accordion-includes-list">
                                    <li class="accordion-includes-item">Heritage-inspired luxury ventures</li>
                                    <li class="accordion-includes-item">Contemporary Indian premium brands</li>
                                    <li class="accordion-includes-item">Artisanal and design-led concepts</li>
                                    <li class="accordion-includes-item">Premium lifestyle ventures</li>
                                    <li class="accordion-includes-item">Culturally rooted luxury positioning</li>
                                </ul>
                            </div>
                            <div style="aspect-ratio: 4 / 3; overflow: hidden; border-radius: 8px; border: 1px solid rgba(184, 150, 46, 0.25);">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/sector_indianbrands.png" alt="Indian Brands" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 5 -->
                <div class="accordion-item reveal reveal-delay-1">
                    <button class="accordion-header">
                        <span class="accordion-title">International Brands Exploring India</span>
                        <span class="accordion-icon">+</span>
                    </button>
                    <div class="accordion-content">
                        <div class="accordion-content-inner" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 40px; align-items: center;">
                            <div>
                                <p class="accordion-description">
                                    India is not an emerging luxury market in the way it was described five years ago. It is arriving. The consumer is younger, more globally informed, and more culturally confident than ever before. International brands that want to be part of this moment need to understand it first. We help them do that with honesty and without shortcuts.
                                </p>
                                <h4 class="accordion-includes-title">Sectors of Focus</h4>
                                <ul class="accordion-includes-list">
                                    <li class="accordion-includes-item">India market understanding</li>
                                    <li class="accordion-includes-item">Premium consumer orientation</li>
                                    <li class="accordion-includes-item">Strategic ecosystem perspective</li>
                                    <li class="accordion-includes-item">Luxury retail and hospitality awareness</li>
                                    <li class="accordion-includes-item">Long-term market positioning insight</li>
                                </ul>
                            </div>
                            <div style="aspect-ratio: 4 / 3; overflow: hidden; border-radius: 8px; border: 1px solid rgba(184, 150, 46, 0.25);">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/sector_intlbrands.png" alt="International Brands" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

<?php
get_footer();
