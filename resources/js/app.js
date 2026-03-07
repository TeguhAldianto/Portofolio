import './bootstrap';
import AOS from 'aos';
import 'aos/dist/aos.css';

document.addEventListener('DOMContentLoaded', () => {
    // Initialize AOS
    AOS.init({ duration: 800, once: true, offset: 60, easing: 'ease-out-cubic' });

    // Current Year
    const yearEl = document.getElementById('year');
    if(yearEl) yearEl.textContent = new Date().getFullYear();

    // Theme Toggle
    const themeBtn = document.getElementById('theme-toggle');
    const root = document.documentElement;

    function applyTheme(mode) {
        if (mode === 'dark' || (mode === null && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            root.classList.add('dark');
            themeBtn.innerHTML = '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>';
        } else {
            root.classList.remove('dark');
            themeBtn.innerHTML = '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="5"></circle><path d="M12 1v2M12 21v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M1 12h2M21 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42"></path></svg>';
        }
    }

    applyTheme(localStorage.getItem('theme'));
    themeBtn?.addEventListener('click', () => {
        const next = root.classList.contains('dark') ? 'light' : 'dark';
        localStorage.setItem('theme', next);
        applyTheme(next);
    });

    // Spotlight effect
    window.spot = function(e) {
        const r = e.currentTarget.getBoundingClientRect();
        e.currentTarget.style.setProperty('--mx', `${e.clientX - r.left}px`);
        e.currentTarget.style.setProperty('--my', `${e.clientY - r.top}px`);
    };

    // Mobile Nav
    const menuBtn = document.getElementById('menu-toggle');
    const mobileNav = document.getElementById('mobile-nav');
    menuBtn?.addEventListener('click', () => {
        mobileNav.classList.toggle('hidden');
        menuBtn.classList.toggle('text-primary');
    });

    // Navbar scroll shadow (DIPERBAIKI: Tanpa spasi di dalam shadow-[...])
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
        navbar?.classList.toggle('shadow-[0_10px_30px_rgba(0,0,0,.25)]', window.scrollY > 10);
    });

    // Intersection Counter (Animasi Angka IPK & Proyek)
    const counters = document.querySelectorAll('.counter');
    const io = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const el = entry.target;
                const target = parseFloat(el.getAttribute('data-target'));
                const start = performance.now();
                const duration = 1600;

                function tick(now) {
                    const t = Math.min((now - start) / duration, 1);
                    const ease = 1 - Math.pow(1 - t, 4);
                    const val = target * ease;
                    el.textContent = Number.isInteger(target) ? Math.floor(val) : val.toFixed(2);
                    if (t < 1) requestAnimationFrame(tick);
                    else el.textContent = target;
                }
                requestAnimationFrame(tick);
                obs.unobserve(el);
            }
        });
    }, {
        threshold: 0.5
    });

    counters.forEach(c => io.observe(c));
});
