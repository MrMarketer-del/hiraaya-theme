document.addEventListener('DOMContentLoaded', () => {
    const preloader = document.getElementById('hiraaya-preloader');
    const monogramWrap = document.getElementById('hiraaya-icon-wrap');
    const shimmerBar = document.getElementById('hiraaya-shimmer-bar');
    const navbar = document.getElementById('navbar');
    const navLogoSlot = document.querySelector('.nav-logo-slot');
    const navMonogram = document.querySelector('.nav-monogram');
    const navLogoText = document.querySelector('.nav-logo-text');

    // Check session storage to see if preloader has already played
    const hasPreloaded = sessionStorage.getItem('hiraaya_preloaded');

    if (hasPreloaded) {
        // Skip preloader on revisit
        if (preloader) preloader.remove();
        if (monogramWrap) monogramWrap.remove();
        
        document.body.classList.add('loaded');
        
        if (navbar) {
            navbar.classList.add('nav-visible');
        }
        if (navMonogram) {
            navMonogram.classList.add('visible');
        }
        if (navLogoText) {
            navLogoText.classList.add('visible');
        }
        return;
    }

    // Lock scrolling during preloader
    document.body.style.overflow = 'hidden';

    // Phase 2 & 3: Fade in monogram + start shimmer bar loading
    setTimeout(() => {
        if (monogramWrap) {
            monogramWrap.style.opacity = '1';
            monogramWrap.style.transform = 'translate(-50%, -50%) scale(1.0)';
        }
        if (shimmerBar) {
            shimmerBar.classList.add('loading');
        }
    }, 100);

    // Phase 4: Slide UP preloader overlay curtain
    setTimeout(() => {
        if (preloader) {
            preloader.classList.add('fade-out');
        }
        
        // Make body opacity visible and unlock scroll
        document.body.classList.add('loaded');
        document.body.style.overflow = '';
        
        // Show navbar and centered logo
        if (navbar) {
            navbar.classList.add('nav-visible');
        }
        if (navMonogram) {
            navMonogram.classList.add('visible');
        }
        if (navLogoText) {
            navLogoText.classList.add('visible');
        }
    }, 1800);

    // Phase 5: Settle into place, remove preloader from DOM to optimize performance
    setTimeout(() => {
        if (preloader) {
            preloader.remove();
        }
        // Save state in session storage so it doesn't replay
        sessionStorage.setItem('hiraaya_preloaded', 'true');
    }, 3000); // Allow time for 1.2s curtain slide transition to finish
});
