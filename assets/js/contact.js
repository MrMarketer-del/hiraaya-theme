document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('inquiry-form');
    if (!form) return;

    form.addEventListener('submit', (e) => {
        e.preventDefault();
        
        // Retrieve input fields for personalization
        const nameInput = document.getElementById('input-name');
        const orgInput = document.getElementById('input-org');
        
        const name = nameInput ? nameInput.value.trim() : 'Guest';
        const org = orgInput && orgInput.value.trim() ? orgInput.value.trim() : '';
        
        const welcomeMessage = org 
            ? `Thank you, <strong>${name}</strong>. We have enqueued your request regarding <strong>${org}</strong>.`
            : `Thank you, <strong>${name}</strong>. We have enqueued your request.`;

        // Smoothly fade out the form elements
        const container = form.parentElement;
        container.style.transition = 'opacity 0.5s cubic-bezier(0.16, 1, 0.3, 1)';
        container.style.opacity = '0';
        
        setTimeout(() => {
            // Populate the container with a luxury custom success panel
            container.innerHTML = `
                <div class="contact-success-message" style="text-align: center; padding: 40px 10px; animation: fadeInSuccess 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;">
                    <div class="success-seal-wrap" style="width: 80px; height: 80px; margin: 0 auto 32px; border-radius: 50%; border: 1.5px solid var(--color-muted-gold); display: flex; align-items: center; justify-content: center; background: var(--color-cream); position: relative; overflow: hidden;">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="var(--color-muted-gold)" stroke-width="1.5" class="checkmark-svg">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                    </div>
                    
                    <h3 style="font-family: var(--font-primary); font-size: 2.2rem; color: var(--color-burgundy); font-weight: 400; margin-bottom: 16px; font-style: italic; letter-spacing: 0.05em;">Enquiry Received</h3>
                    
                    <div style="width: 40px; height: 1px; background: var(--color-gold); margin: 0 auto 28px;"></div>
                    
                    <p style="font-family: var(--font-ui); font-size: 15px; color: var(--color-text-body); line-height: 1.8; margin-bottom: 24px; max-width: 460px; margin-left: auto; margin-right: auto; letter-spacing: 0.02em;">
                        ${welcomeMessage}
                    </p>
                    
                    <p style="font-family: var(--font-ui); font-size: 14px; color: var(--color-muted-text); line-height: 1.8; margin-bottom: 40px; max-width: 460px; margin-left: auto; margin-right: auto; font-style: italic; letter-spacing: 0.02em;">
                        Parth Gupta or our senior advisory team will contact you directly within 24 hours to coordinate a private conversation.
                    </p>
                    
                    <a href="/" class="btn-outline btn-outline-navy" style="padding: 12px 36px; font-size: 11px; letter-spacing: 2px;">Return to Hiraaya</a>
                </div>
            `;
            
            // Fade the container back in with the success message
            container.style.opacity = '1';
        }, 500);
    });
});
