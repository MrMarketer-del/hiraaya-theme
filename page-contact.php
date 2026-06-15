<?php
/**
 * Template Name: Contact Page Template
 *
 * @package Hiraaya_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

get_header();
?>

    <!-- ══ LINE BACKGROUND WATERMARK ══════════════════════════════════ -->
    <div style="position: fixed; inset: 0; z-index: -1; display: flex; align-items: center; justify-content: center; opacity: 0.02; pointer-events: none;">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/arch-watermark.svg" alt="Gold Arch Watermark Outline" style="height: 95%; width: auto;">
    </div>

    <!-- ═══ CONTACT HERO (CENTERED) ══════════════════════════════════ -->
    <header class="inner-hero">
        <div class="inner-hero-centered">
            <div class="hero-content">
                <p class="inner-hero-eyebrow reveal">Contact</p>
                <h1 class="inner-hero-title reveal reveal-delay-1">Begin a conversation</h1>
                <p class="inner-hero-subline reveal reveal-delay-2" style="margin: 0 auto;">We welcome thoughtful enquiries about luxury, brand strategy, and long-term collaboration. There is no standard intake process here. Just a conversation.</p>
            </div>
        </div>
    </header>

    <!-- ═══ CONTACT FORM & DETAILS ═══════════════════════════════════ -->
    <section class="section-padding" style="background: var(--color-cream);">
        <div class="container">
            <div class="contact-grid">
                
                <!-- Left Panel: Form -->
                <div class="contact-form-container reveal">
                    <h3 class="form-intro-text">Tell us a little about what you are thinking.</h3>
                    
                    <form action="#" method="POST" id="inquiry-form">
                        <!-- Field 1: Name -->
                        <div class="form-group">
                            <label for="input-name" class="form-label">Your Name</label>
                            <input type="text" id="input-name" class="form-control" required autocomplete="name">
                        </div>

                        <!-- Field 2: Organisation -->
                        <div class="form-group">
                            <label for="input-org" class="form-label">Organisation or Brand</label>
                            <input type="text" id="input-org" class="form-control" autocomplete="organization">
                        </div>

                        <!-- Field 3: Dropdown -->
                        <div class="form-group">
                            <label for="input-nature" class="form-label">Nature of Enquiry</label>
                            <select id="input-nature" class="form-control">
                                <option value="strategy">Brand Strategy</option>
                                <option value="entry">India Market Entry</option>
                                <option value="hospitality">Hospitality Positioning</option>
                                <option value="realestate">Real Estate</option>
                                <option value="media">Press or Media</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <!-- Field 4: Textarea -->
                        <div class="form-group">
                            <label for="input-message" class="form-label">What are you thinking about?</label>
                            <textarea id="input-message" class="form-control" rows="4" required placeholder="A short note about what you are exploring is enough to get us started."></textarea>
                        </div>

                        <!-- Field 5: Email -->
                        <div class="form-group">
                            <label for="input-email" class="form-label">Your Email</label>
                            <input type="email" id="input-email" class="form-control" required autocomplete="email">
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn-outline btn-outline-navy" style="width: 100%; padding: 16px; margin-top: 10px;">Begin the Conversation</button>

                        <p class="form-privacy-note">We do not share your information with anyone. We respond to every serious enquiry personally.</p>
                    </form>
                </div>

                <!-- Right Panel: Address details -->
                <div class="contact-details-block reveal reveal-delay-1" style="padding-left: 20px;">
                    
                    <!-- Company Profile -->
                    <div style="margin-bottom: 48px;">
                        <h4 style="font-family: var(--font-primary); font-size: 2.2rem; color: var(--color-burgundy); text-transform: uppercase; letter-spacing: 0.1em; line-height: 1.1; margin-bottom: 8px;">Hiraaya</h4>
                        <p style="font-family: var(--font-ui); font-size: 11px; letter-spacing: 3px; text-transform: uppercase; color: var(--color-muted-gold); margin-bottom: 24px;">Luxury · Brand Management House</p>
                    </div>

                    <!-- Address -->
                    <div class="contact-details-item">
                        <h5 class="contact-details-label">Office Coordinates</h5>
                        <p class="contact-details-value">
                            MZ 02, Ansals Fortune Arcade,<br>
                            Sector 18, Noida, Uttar Pradesh, India
                        </p>
                    </div>

                    <!-- Email -->
                    <div class="contact-details-item">
                        <h5 class="contact-details-label">Direct Email</h5>
                        <p class="contact-details-value">
                            <a href="mailto:parth@hiraayaluxury.com" style="color: var(--color-light-blush); font-weight: 500;">parth@hiraayaluxury.com</a>
                        </p>
                    </div>

                    <!-- Connect -->
                    <div class="contact-details-item">
                        <h5 class="contact-details-label">Digital Presence</h5>
                        <p class="contact-details-value">
                            <a href="https://www.hiraayaluxury.com" style="display: block; margin-bottom: 4px;">www.hiraayaluxury.com</a>
                            <a href="https://www.instagram.com/hiraayaluxury/" target="_blank" rel="noopener">@hiraayaluxury</a>
                        </p>
                    </div>

                    <!-- Closing Statement -->
                    <div style="border-top: 1px solid rgba(184, 150, 46, 0.25); padding-top: 36px; margin-top: 48px;">
                        <p style="font-family: var(--font-primary); font-size: 1.4rem; font-style: italic; color: var(--color-burgundy); line-height: 1.5;">
                            "We cultivate presence, foster relationships, and build legacies of enduring luxury."
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

<?php
get_footer();
