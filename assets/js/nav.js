document.addEventListener('DOMContentLoaded', () => {
    const navbar = document.getElementById('navbar');
    const burgerBtn = document.getElementById('burger');
    const mobileOverlay = document.getElementById('mobile-menu-overlay');
    const mobileLinks = document.querySelectorAll('.nav-mobile-menu a');
    
    // Scroll trigger for nav background & logo collapse
    const handleScroll = () => {
        if (window.scrollY > 80) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    };

    window.addEventListener('scroll', handleScroll, { passive: true });
    handleScroll();

    // Toggle Mobile menu
    const toggleMobileMenu = () => {
        burgerBtn.classList.toggle('open');
        mobileOverlay.classList.toggle('open');
        navbar.classList.toggle('menu-open');
        
        if (mobileOverlay.classList.contains('open')) {
            document.body.style.overflow = 'hidden';
        } else {
            document.body.style.overflow = '';
        }
    };

    if (burgerBtn && mobileOverlay) {
        burgerBtn.addEventListener('click', toggleMobileMenu);
    }

    mobileLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (mobileOverlay.classList.contains('open')) {
                toggleMobileMenu();
            }
        });
    });

    // Scroll Reveal Intersection Observer
    const revealCallback = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                observer.unobserve(entry.target); // Stop observing once it's revealed
            }
        });
    };

    const revealObserver = new IntersectionObserver(revealCallback, {
        root: null,
        rootMargin: '0px',
        threshold: 0.15
    });

    const revealElements = document.querySelectorAll('.reveal');
    revealElements.forEach(el => revealObserver.observe(el));
});
