import"./nav-Bp9mCfZY.js";/* empty css              */document.addEventListener("DOMContentLoaded",()=>{const e=document.getElementById("inquiry-form");e&&e.addEventListener("submit",a=>{a.preventDefault();const n=document.getElementById("input-name"),o=document.getElementById("input-org"),i=n?n.value.trim():"Guest",r=o&&o.value.trim()?o.value.trim():"",s=r?`Thank you, <strong>${i}</strong>. We have enqueued your request regarding <strong>${r}</strong>.`:`Thank you, <strong>${i}</strong>. We have enqueued your request.`,t=e.parentElement;t.style.transition="opacity 0.5s cubic-bezier(0.16, 1, 0.3, 1)",t.style.opacity="0",setTimeout(()=>{t.innerHTML=`
                <div class="contact-success-message" style="text-align: center; padding: 40px 10px; animation: fadeInSuccess 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;">
                    <div class="success-seal-wrap" style="width: 80px; height: 80px; margin: 0 auto 32px; border-radius: 50%; border: 1.5px solid var(--color-muted-gold); display: flex; align-items: center; justify-content: center; background: var(--color-cream); position: relative; overflow: hidden;">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="var(--color-muted-gold)" stroke-width="1.5" class="checkmark-svg">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                    </div>
                    
                    <h3 style="font-family: var(--font-primary); font-size: 2.2rem; color: var(--color-burgundy); font-weight: 400; margin-bottom: 16px; font-style: italic; letter-spacing: 0.05em;">Enquiry Received</h3>
                    
                    <div style="width: 40px; height: 1px; background: var(--color-gold); margin: 0 auto 28px;"></div>
                    
                    <p style="font-family: var(--font-ui); font-size: 15px; color: var(--color-text-body); line-height: 1.8; margin-bottom: 24px; max-width: 460px; margin-left: auto; margin-right: auto; letter-spacing: 0.02em;">
                        ${s}
                    </p>
                    
                    <p style="font-family: var(--font-ui); font-size: 14px; color: var(--color-muted-text); line-height: 1.8; margin-bottom: 40px; max-width: 460px; margin-left: auto; margin-right: auto; font-style: italic; letter-spacing: 0.02em;">
                        Parth Gupta or our senior advisory team will contact you directly within 24 hours to coordinate a private conversation.
                    </p>
                    
                    <a href="/" class="btn-outline btn-outline-navy" style="padding: 12px 36px; font-size: 11px; letter-spacing: 2px;">Return to Hiraaya</a>
                </div>
            `,t.style.opacity="1"},500)})});
