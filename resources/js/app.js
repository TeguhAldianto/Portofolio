import './bootstrap';
import AOS from 'aos';
import 'aos/dist/aos.css';

document.addEventListener('DOMContentLoaded', () => {
    // -----------------------------------------------------------------
    // AOS INIT
    // -----------------------------------------------------------------
    AOS.init({
        duration: 700,
        once: true,
        offset: 80,
        easing: 'ease-out-cubic',
        disable: 'mobile',
    });

    // -----------------------------------------------------------------
    // CURRENT YEAR
    // -----------------------------------------------------------------
    const yearEl = document.getElementById('year');
    if (yearEl) yearEl.textContent = new Date().getFullYear();

    // -----------------------------------------------------------------
    // THEME TOGGLE
    // -----------------------------------------------------------------
    const themeBtn = document.getElementById('theme-toggle');
    const root = document.documentElement;

    const sunIcon = `<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="5"></circle><path d="M12 1v2M12 21v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M1 12h2M21 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42"></path></svg>`;
    const moonIcon = `<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>`;

    function applyTheme(mode) {
        if (mode === 'dark' || (mode === null && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            root.classList.add('dark');
            if (themeBtn) themeBtn.innerHTML = sunIcon;
        } else {
            root.classList.remove('dark');
            if (themeBtn) themeBtn.innerHTML = moonIcon;
        }
    }

    applyTheme(localStorage.getItem('theme'));

    if (themeBtn) {
        themeBtn.addEventListener('click', () => {
            const isCurrentlyDark = root.classList.contains('dark');
            const nextMode = isCurrentlyDark ? 'light' : 'dark';
            localStorage.setItem('theme', nextMode);
            applyTheme(nextMode);
        });
    }

    // -----------------------------------------------------------------
    // MOBILE NAV
    // -----------------------------------------------------------------
    const menuBtn = document.getElementById('menu-toggle');
    const mobileNav = document.getElementById('mobile-nav');
    if (menuBtn && mobileNav) {
        menuBtn.addEventListener('click', () => {
            mobileNav.classList.toggle('hidden');
            menuBtn.classList.toggle('text-primary');
        });

        mobileNav.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                mobileNav.classList.add('hidden');
                menuBtn.classList.remove('text-primary');
            });
        });
    }

    // -----------------------------------------------------------------
    // NAVBAR SCROLL EFFECT
    // -----------------------------------------------------------------
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
        if (!navbar) return;
        const scrolled = window.scrollY > 20;
        navbar.classList.toggle('shadow-lg', scrolled);
        navbar.classList.toggle('shadow-primary/5', scrolled);
        navbar.querySelector('div')?.classList.toggle('bg-white/90', scrolled);
        navbar.querySelector('div')?.classList.toggle('dark:bg-zinc-950/90', scrolled);
    }, { passive: true });

    // -----------------------------------------------------------------
    // COUNTER ANIMATION (Angka)
    // -----------------------------------------------------------------
    const counters = document.querySelectorAll('.counter');
    const counterIO = new IntersectionObserver((entries, obs) => {
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
    }, { threshold: 0.5 });

    counters.forEach(c => counterIO.observe(c));

    // -----------------------------------------------------------------
    // SKILL BAR ANIMATION
    // -----------------------------------------------------------------
    const skillBars = document.querySelectorAll('.skill-bar-fill');
    const skillIO = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const bar = entry.target;
                const width = bar.getAttribute('data-width') || '0%';
                bar.style.width = width;
                bar.classList.add('animated');
                obs.unobserve(bar);
            }
        });
    }, { threshold: 0.3, rootMargin: '0px 0px -50px 0px' });

    skillBars.forEach(bar => skillIO.observe(bar));

    // -----------------------------------------------------------------
    // HERO MOUSE PARALLAX
    // -----------------------------------------------------------------
    const heroImage = document.querySelector('.hero-parallax');
    const heroSection = document.querySelector('#hero');

    if (heroImage && heroSection) {
        heroSection.addEventListener('mousemove', (e) => {
            const rect = heroSection.getBoundingClientRect();
            const x = (e.clientX - rect.left) / rect.width - 0.5;
            const y = (e.clientY - rect.top) / rect.height - 0.5;
            heroImage.style.transform =
                `perspective(600px) rotateY(${x * 6}deg) rotateX(${-y * 6}deg) translateY(${window.scrollY > 100 ? -4 : 0}px)`;
        });

        heroSection.addEventListener('mouseleave', () => {
            heroImage.style.transform = 'perspective(600px) rotateY(0deg) rotateX(0deg)';
        });
    }

    // -----------------------------------------------------------------
    // MAGNETIC BUTTONS
    // -----------------------------------------------------------------
    document.querySelectorAll('.magnetic-btn').forEach(btn => {
        btn.addEventListener('mousemove', (e) => {
            const rect = btn.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;
            btn.style.transform = `translate(${x * 0.25}px, ${y * 0.25}px)`;
        });

        btn.addEventListener('mouseleave', () => {
            btn.style.transform = 'translate(0, 0)';
        });
    });

    // -----------------------------------------------------------------
    // TEXT REVEAL ON SCROLL
    // -----------------------------------------------------------------
    const revealEls = document.querySelectorAll('.reveal-text');
    const revealIO = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                obs.unobserve(entry.target);
            }
        });
    }, { threshold: 0.2 });

    revealEls.forEach(el => revealIO.observe(el));

    // -----------------------------------------------------------------
    // BACKGROUND GRID MOUSE PARALLAX
    // -----------------------------------------------------------------
    const bgGrid = document.querySelector('.bg-grid-pattern');
    if (bgGrid) {
        window.addEventListener('mousemove', (e) => {
            const x = (e.clientX / window.innerWidth) * 8;
            const y = (e.clientY / window.innerHeight) * 8;
            bgGrid.style.backgroundPosition = `${x}px ${y}px`;
        });
    }

});
