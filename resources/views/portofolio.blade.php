<!DOCTYPE html>
<html lang="id" class="scroll-smooth" data-theme>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Portofolio | Teguh Aldianto - Full Stack & Android Developer</title>
    <meta name="description"
        content="Teguh Aldianto - Full Stack & Android Developer dengan pengalaman dalam Laravel, Kotlin, dan pengembangan aplikasi berbasis web dan Android." />
    <meta name="theme-color" content="#0f172a" />
    <meta name="color-scheme" content="dark light" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                container: {
                    center: true,
                    padding: {
                        DEFAULT: '1.25rem',
                        lg: '2rem',
                        xl: '3rem'
                    }
                },
                extend: {
                    fontFamily: {
                        sans: ['"Inter"', 'ui-sans-serif', 'system-ui'],
                        display: ['"Plus Jakarta Sans"', 'sans-serif']
                    },
                    colors: {
                        base: {
                            50: '#f8fafc',
                            100: '#f1f5f9',
                            200: '#e2e8f0',
                            300: '#cbd5e1',
                            400: '#94a3b8',
                            500: '#64748b',
                            600: '#475569',
                            700: '#334155',
                            800: '#1e293b',
                            900: '#0f172a',
                            950: '#020617'
                        },
                        primary: {
                            DEFAULT: '#3b82f6',
                            50: '#eff6ff',
                            100: '#dbeafe',
                            200: '#bfdbfe',
                            300: '#93c5fd',
                            400: '#60a5fa',
                            500: '#3b82f6',
                            600: '#2563eb',
                            700: '#1d4ed8'
                        },
                        accent: {
                            DEFAULT: '#8b5cf6',
                            400: '#a78bfa',
                            500: '#8b5cf6',
                            600: '#7c3aed'
                        },
                        success: {
                            DEFAULT: '#10b981',
                            400: '#34d399'
                        }
                    },
                    boxShadow: {
                        'glow': '0 0 50px -12px rgba(59, 130, 246, 0.25)',
                        'glow-accent': '0 0 50px -12px rgba(139, 92, 246, 0.25)',
                        'soft': '0 4px 24px -6px rgba(0, 0, 0, 0.1)',
                        'card': '0 8px 40px -12px rgba(0, 0, 0, 0.25)'
                    },
                    borderRadius: {
                        '4xl': '2rem',
                        '5xl': '2.5rem'
                    },
                    backdropBlur: {
                        '20': '20px',
                    },
                    backgroundImage: {
                        'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
                        'gradient-conic': 'conic-gradient(from 180deg at 50% 50%, var(--tw-gradient-stops))',
                        'mesh': 'radial-gradient(60% 60% at 80% 0%, rgba(59, 130, 246, 0.15) 0%, rgba(15, 23, 42, 0) 60%), radial-gradient(50% 50% at 0% 20%, rgba(139, 92, 246, 0.1) 0%, rgba(15, 23, 42, 0) 60%)',
                        'noise': "url('data:image/svg+xml,%3Csvg viewBox=%220 0 200 200%22 xmlns=%22http://www.w3.org/2000/svg%22%3E%3Cfilter id=%22noiseFilter%22%3E%3CfeTurbulence type=%22fractalNoise%22 baseFrequency=%220.65%22 numOctaves=%223%22 stitchTiles=%22stitch%22/%3E%3C/filter%3E%3Crect width=%22100%25%22 height=%22100%25%22 filter=%22url(%23noiseFilter)%22 opacity=%220.03%22/%3E%3C/svg%3E')"
                    },
                    animation: {
                        'blob': 'blob 8s infinite',
                        'float': 'float 6s ease-in-out infinite',
                        'marq': 'marq 30s linear infinite',
                        'shimmer': 'shimmer 3s ease-in-out infinite',
                        'fade-in': 'fadeIn 0.8s ease-out',
                        'slide-up': 'slideUp 0.6s ease-out'
                    },
                    keyframes: {
                        blob: {
                            '0%': {
                                transform: 'translate(0, 0) scale(1)'
                            },
                            '33%': {
                                transform: 'translate(40px, -60px) scale(1.1)'
                            },
                            '66%': {
                                transform: 'translate(-30px, 40px) scale(0.9)'
                            },
                            '100%': {
                                transform: 'translate(0, 0) scale(1)'
                            }
                        },
                        float: {
                            '0%, 100%': {
                                transform: 'translateY(0)'
                            },
                            '50%': {
                                transform: 'translateY(-12px)'
                            }
                        },
                        marq: {
                            '0%': {
                                transform: 'translateX(0)'
                            },
                            '100%': {
                                transform: 'translateX(-50%)'
                            }
                        },
                        shimmer: {
                            '0%': {
                                backgroundPosition: '-1000px 0'
                            },
                            '100%': {
                                backgroundPosition: '1000px 0'
                            }
                        },
                        fadeIn: {
                            '0%': {
                                opacity: '0'
                            },
                            '100%': {
                                opacity: '1'
                            }
                        },
                        slideUp: {
                            '0%': {
                                transform: 'translateY(30px)',
                                opacity: '0'
                            },
                            '100%': {
                                transform: 'translateY(0)',
                                opacity: '1'
                            }
                        }
                    }
                }
            }
        }
    </script>

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <style>
        :root {
            --ring: 0 0% 100%;
        }

        html {
            color-scheme: dark;
            scroll-behavior: smooth;
        }

        body {
            font-feature-settings: 'rlig' 1, 'calt' 1;
        }

        .supports-[backdrop-filter]:backdrop-blur-20 {
            backdrop-filter: blur(20px);
        }

        .noisy::after {
            content: '';
            position: absolute;
            inset: 0;
            background-image: var(--noise, url('data:image/svg+xml,%3Csvg viewBox=%220 0 200 200%22 xmlns=%22http://www.w3.org/2000/svg%22%3E%3Cfilter id=%22noiseFilter%22%3E%3CfeTurbulence type=%22fractalNoise%22 baseFrequency=%220.65%22 numOctaves=%223%22 stitchTiles=%22stitch%22/%3E%3C/filter%3E%3Crect width=%22100%25%22 height=%22100%25%22 filter=%22url(%23noiseFilter)%22 opacity=%220.03%22/%3E%3C/svg%3E'));
            opacity: .03;
            pointer-events: none;
            z-index: -1;
        }

        /* Glass morphism effect */
        .glass {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
        }

        .glass-nav {
            background: rgba(15, 23, 42, 0.8);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        /* Text gradients */
        .text-gradient {
            background: linear-gradient(135deg, #3b82f6 0%, #8b5cf6 50%, #ec4899 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .text-gradient-primary {
            background: linear-gradient(135deg, #3b82f6 0%, #8b5cf6 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Spotlight Card Effect */
        .spotlight-card {
            position: relative;
            overflow: hidden;
        }

        .spotlight-card::before {
            content: '';
            position: absolute;
            inset: -1px;
            background: radial-gradient(600px circle at var(--mx) var(--my), rgba(59, 130, 246, 0.15), rgba(0, 0, 0, 0) 45%);
            transition: opacity .4s;
            opacity: 0;
            pointer-events: none;
            z-index: 1;
        }

        .spotlight-card:hover::before {
            opacity: 1;
        }

        /* Focus styles for accessibility */
        :focus-visible {
            outline: none;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.5);
            border-radius: 0.75rem;
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #0f172a;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb {
            background: #334155;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #475569;
        }

        /* Selection styles */
        ::selection {
            background: rgba(59, 130, 246, 0.3);
            color: white;
        }

        ::-moz-selection {
            background: rgba(59, 130, 246, 0.3);
            color: white;
        }

        /* Hover lift effect */
        .hover-lift {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .hover-lift:hover {
            transform: translateY(-8px);
        }

        /* Gradient border */
        .gradient-border {
            position: relative;
            background: linear-gradient(135deg, #0f172a, #0f172a),
                linear-gradient(135deg, #3b82f6, #8b5cf6);
            background-clip: padding-box, border-box;
            background-origin: padding-box, border-box;
            border: 1px solid transparent;
        }
    </style>
</head>

<body
    class="bg-base-950 text-base-300 antialiased selection:bg-primary/30 selection:text-white overflow-x-hidden font-sans">
    <!-- Background Scene -->
    <div class="fixed inset-0 -z-10 bg-mesh noisy"></div>

    <!-- Animated Blobs -->
    <div class="fixed inset-0 -z-10 overflow-hidden pointer-events-none">
        <div
            class="absolute top-1/4 left-1/4 w-96 h-96 bg-primary/10 rounded-full mix-blend-screen filter blur-[120px] animate-blob">
        </div>
        <div
            class="absolute top-1/3 right-1/4 w-96 h-96 bg-accent/10 rounded-full mix-blend-screen filter blur-[120px] animate-blob animation-delay-2000">
        </div>
        <div
            class="absolute bottom-1/4 left-1/3 w-96 h-96 bg-purple-500/5 rounded-full mix-blend-screen filter blur-[120px] animate-blob animation-delay-4000">
        </div>
    </div>

    <!-- Skip link for accessibility -->
    <a href="#main"
        class="sr-only focus:not-sr-only fixed top-3 left-3 z-[9999] px-4 py-2 rounded-lg bg-base-900 text-white text-sm font-medium transition-all focus:ring-2 focus:ring-primary/50">
        Lewati ke konten
    </a>

    <!-- Navigation -->
    <header id="navbar" class="fixed top-0 inset-x-0 z-50 transition-all duration-500 glass-nav">
        <div class="container">
            <div
                class="mt-4 flex items-center justify-between rounded-2xl border border-white/10 bg-base-900/70 supports-[backdrop-filter]:backdrop-blur-20 shadow-soft px-4 md:px-6 py-3">
                <a href="#" class="flex items-center gap-3 group" data-aos="fade-down">
                    <img src="assets/images/profile.jpg" alt="Foto profil Teguh Aldianto"
                        class="h-10 w-10 rounded-xl object-cover shadow-glow" width="40" height="40"
                        loading="eager" decoding="async" />
                    <span
                        class="font-semibold text-white tracking-tight group-hover:text-primary transition-colors duration-300">
                        Teguh Aldianto
                    </span>
                </a>

                <nav class="hidden md:flex items-center gap-1 rounded-full border border-white/10 bg-white/5 p-1"
                    data-aos="fade-down" data-aos-delay="100">
                    <a href="#about"
                        class="px-4 py-2 text-sm font-medium rounded-full hover:bg-white/10 hover:text-white transition-all duration-300 relative overflow-hidden group">
                        <span class="relative z-10">Tentang</span>
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-primary/20 to-accent/20 transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-300">
                        </div>
                    </a>
                    <a href="#experience"
                        class="px-4 py-2 text-sm font-medium rounded-full hover:bg-white/10 hover:text-white transition-all duration-300 relative overflow-hidden group">
                        <span class="relative z-10">Pengalaman</span>
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-primary/20 to-accent/20 transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-300">
                        </div>
                    </a>
                    <a href="#skills"
                        class="px-4 py-2 text-sm font-medium rounded-full hover:bg-white/10 hover:text-white transition-all duration-300 relative overflow-hidden group">
                        <span class="relative z-10">Keahlian</span>
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-primary/20 to-accent/20 transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-300">
                        </div>
                    </a>
                    <a href="#projects"
                        class="px-4 py-2 text-sm font-medium rounded-full hover:bg-white/10 hover:text-white transition-all duration-300 relative overflow-hidden group">
                        <span class="relative z-10">Proyek</span>
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-primary/20 to-accent/20 transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-300">
                        </div>
                    </a>
                    <a href="#contact"
                        class="px-4 py-2 text-sm font-medium rounded-full hover:bg-white/10 hover:text-white transition-all duration-300 relative overflow-hidden group">
                        <span class="relative z-10">Kontak</span>
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-primary/20 to-accent/20 transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-300">
                        </div>
                    </a>
                </nav>

                <div class="flex items-center gap-2">
                    <button id="theme-toggle" aria-label="Ubah tema"
                        class="p-2 rounded-lg hover:bg-white/10 text-base-200 hover:text-white transition duration-300"
                        title="Theme">
                        <!-- icon injected by JS -->
                    </button>
                    <button id="menu-toggle" class="md:hidden p-2 rounded-lg hover:bg-white/10 transition duration-300"
                        aria-label="Buka menu">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="4" x2="20" y1="12" y2="12" />
                            <line x1="4" x2="20" y1="6" y2="6" />
                            <line x1="4" x2="20" y1="18" y2="18" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Navigation -->
            <div id="mobile-nav"
                class="hidden mt-2 rounded-2xl border border-white/10 bg-base-900/90 supports-[backdrop-filter]:backdrop-blur-20 md:hidden"
                data-aos="fade-down">
                <nav class="flex flex-col py-2">
                    <a href="#about"
                        class="px-5 py-3 hover:bg-white/5 transition duration-300 text-base-200 hover:text-white">Tentang</a>
                    <a href="#experience"
                        class="px-5 py-3 hover:bg-white/5 transition duration-300 text-base-200 hover:text-white">Pengalaman</a>
                    <a href="#skills"
                        class="px-5 py-3 hover:bg-white/5 transition duration-300 text-base-200 hover:text-white">Keahlian</a>
                    <a href="#projects"
                        class="px-5 py-3 hover:bg-white/5 transition duration-300 text-base-200 hover:text-white">Proyek</a>
                    <a href="#contact"
                        class="px-5 py-3 hover:bg-white/5 transition duration-300 text-base-200 hover:text-white">Kontak</a>
                </nav>
            </div>
        </div>
    </header>

    <main id="main" class="pt-32 md:pt-36">
        <!-- HERO SECTION -->
        <section class="relative min-h-[88vh] flex items-center overflow-hidden">
            <div class="container grid lg:grid-cols-2 gap-12 items-center">
                <div class="order-2 lg:order-1" data-aos="fade-right">
                    <div
                        class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-primary/30 bg-primary/10 text-primary-100 text-sm font-semibold mb-8 glass">
                        <span class="relative flex h-2 w-2">
                            <span
                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
                        </span>
                        Open to Work & Collaboration
                    </div>

                    <h1
                        class="text-5xl lg:text-7xl font-display font-extrabold tracking-tight text-white mb-6 leading-[1.05]">
                        Full-Stack & <br />
                        <span class="text-gradient">Android</span><br />
                        Developer
                    </h1>

                    <p class="text-xl text-base-300/90 mb-8 max-w-xl leading-relaxed">
                        Lulusan <span class="text-white font-semibold">D4 Manajemen Informatika, Universitas Negeri
                            Surabaya</span> dengan IPK 3,81. Memiliki keahlian dalam Pengembangan Web Full-Stack
                        (PHP, Laravel, MySQL) dan Pengembangan Mobile (Kotlin, Android). Berpengalaman mengembangkan
                        aplikasi web untuk manajemen keuangan selama magang 6 bulan di <span
                            class="text-white font-semibold">PT EDI Indonesia</span> dan menjadi
                        <span class="text-white font-semibold">Cohort Mobile Development Bangkit Academy 2024</span>.
                    </p>

                    <div class="flex flex-wrap gap-4 mb-12">
                        <a href="#projects"
                            class="relative inline-flex items-center justify-center px-8 py-4 text-base font-semibold text-white transition-all duration-300 bg-gradient-to-r from-primary to-accent rounded-xl hover:shadow-glow hover:-translate-y-1 group">
                            <span class="relative z-10 flex items-center gap-2">
                                Lihat Proyek
                                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                </svg>
                            </span>
                        </a>

                        <a href="assets/cv/CV_Teguh Aldianto.pdf" download
                            class="inline-flex items-center justify-center px-8 py-4 text-base font-semibold text-base-100 transition-all duration-300 glass rounded-xl hover:bg-white/10 hover:text-white hover:-translate-y-1 border border-white/10 group">
                            <svg class="w-5 h-5 mr-2 group-hover:scale-110 transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                </path>
                            </svg>
                            Download CV
                        </a>
                    </div>

                    <div class="grid grid-cols-3 gap-8 border-t border-white/5 pt-8">
                        <div data-aos="fade-up" data-aos-delay="200">
                            <div class="text-3xl font-bold text-white mb-2"><span class="counter"
                                    data-target="3.81">0</span></div>
                            <div class="text-sm text-base-400 font-medium">IPK Cum Laude</div>
                        </div>
                        <div data-aos="fade-up" data-aos-delay="400">
                            <div class="text-3xl font-bold text-white mb-2"><span class="counter"
                                    data-target="8">0</span>+</div>
                            <div class="text-sm text-base-400 font-medium">Proyek Selesai</div>
                        </div>
                        <div data-aos="fade-up" data-aos-delay="600">
                            <div class="text-3xl font-bold text-white mb-2">ICASVI</div>
                            <div class="text-sm text-base-400 font-medium">Publikasi 2025</div>
                        </div>
                    </div>
                </div>

                <!-- Profile Image -->
                <div class="order-1 lg:order-2 relative" data-aos="fade-left" data-aos-delay="300">
                    <div
                        class="absolute -inset-8 -z-10 rounded-[2.5rem] bg-gradient-to-tr from-primary/20 to-accent/20 blur-3xl animate-pulse">
                    </div>

                    <div
                        class="relative rounded-3xl p-4 md:p-6 glass border border-white/10 shadow-card animate-float">
                        <div class="relative overflow-hidden rounded-2xl aspect-[4/5] md:aspect-square">
                            <img src="assets/images/profile.JPG" alt="Teguh Aldianto - Full Stack & Android Developer"
                                loading="eager" decoding="async"
                                class="object-cover w-full h-full will-change-transform transition-transform duration-700 hover:scale-105"
                                onerror="this.src='https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'" />

                            <div
                                class="absolute inset-0 bg-gradient-to-t from-base-950/80 via-transparent to-transparent">
                            </div>

                            <!-- Status Badge -->
                            <div class="absolute bottom-6 left-6 right-6">
                                <div class="glass rounded-2xl p-4 border border-white/10 backdrop-blur-20">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="h-12 w-12 rounded-xl bg-primary/20 grid place-items-center text-primary-200">
                                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                            </svg>
                                        </div>
                                        <div>
                                            <div class="text-xs text-base-400 font-medium">Status</div>
                                            <div class="text-sm font-semibold text-white">Lulusan & Bangkit 2024
                                                Cohort</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Elements -->
                    <div
                        class="absolute -top-4 -right-4 w-24 h-24 bg-accent/20 rounded-full blur-xl animate-float animation-delay-2000">
                    </div>
                    <div
                        class="absolute -bottom-4 -left-4 w-32 h-32 bg-primary/20 rounded-full blur-xl animate-float animation-delay-4000">
                    </div>
                </div>
            </div>
        </section>

        <!-- ABOUT SECTION -->
        <section id="about" class="py-24 relative">
            <div class="container">
                <div class="relative rounded-3xl p-8 md:p-12 glass border border-white/10" data-aos="fade-up">
                    <!-- Background Elements -->
                    <div class="absolute -top-10 -right-10 w-64 h-64 bg-primary/15 rounded-full blur-3xl"></div>
                    <div class="absolute -bottom-10 -left-10 w-64 h-64 bg-accent/10 rounded-full blur-3xl"></div>

                    <div class="relative z-10">
                        <h2 class="text-4xl md:text-5xl font-display font-extrabold text-white mb-8">Profil
                            <span class="text-gradient-primary">Singkat</span>
                        </h2>

                        <div class="space-y-6 text-lg leading-relaxed text-base-200 max-w-4xl">
                            <p>
                                Saya adalah lulusan <span class="text-white font-semibold">D4 Manajemen Informatika,
                                    Universitas Negeri Surabaya</span> dengan IPK 3,81. Fokus utama saya adalah
                                <span class="text-primary-200 font-semibold">pengembangan aplikasi berbasis web dan
                                    mobile</span>, khususnya menggunakan PHP (Laravel, Filament, MySQL) dan Kotlin
                                untuk Android.
                            </p>

                            <p>
                                Selama studi, saya mengikuti program <span class="text-white font-semibold">Studi
                                    Independen Bangkit Academy 2024 (Mobile Development)</span> dan terlibat dalam
                                pengembangan proyek capstone bernama <span
                                    class="text-white font-semibold">NVBite</span>
                                yang berfokus pada deteksi emisi karbon makanan. Saya juga menjalani magang sebagai
                                <span class="text-white font-semibold">Pengembang Web di PT EDI Indonesia Cabang
                                    Surabaya</span> selama 6 bulan, dengan tanggung jawab merancang dan membangun
                                aplikasi web manajemen kas perusahaan.
                            </p>

                            <p>
                                Saya memiliki ketertarikan pada pengembangan sistem yang terstruktur, mudah dipelihara,
                                serta pemanfaatan <span class="text-white font-semibold">Artificial Intelligence
                                    (AI)</span> untuk mendukung fungsionalitas aplikasi. Saat ini saya sedang mencari
                                kesempatan untuk berkontribusi dalam pengembangan perangkat lunak yang inovatif dan
                                berdampak.
                            </p>
                        </div>

                        <div class="mt-8 flex flex-wrap gap-3">
                            <span
                                class="px-4 py-2 rounded-xl bg-primary/10 border border-primary/20 text-primary-200 text-sm font-medium">
                                Pengembangan Web Full-Stack
                            </span>
                            <span
                                class="px-4 py-2 rounded-xl bg-accent/10 border border-accent/20 text-accent-400 text-sm font-medium">
                                Pengembangan Aplikasi Android
                            </span>
                            <span
                                class="px-4 py-2 rounded-xl bg-success/10 border border-success/20 text-success-400 text-sm font-medium">
                                Front-End & Back-End Development
                            </span>
                            <span
                                class="px-4 py-2 rounded-xl bg-success/10 border border-success/20 text-success-400 text-sm font-medium">
                                Artificial Intelligence (AI)
                            </span>
                        </div>

                        <!-- Education & Achievements -->
                        <div class="mt-10 grid grid-cols-1 md:grid-cols-3 gap-6 text-sm text-base-200">
                            <div class="glass rounded-2xl p-5 border border-white/10">
                                <h3 class="text-white font-semibold mb-3 text-base">Pendidikan</h3>
                                <p class="font-medium text-base-100">
                                    D4 Manajemen Informatika
                                </p>
                                <p class="text-base-300">
                                    Universitas Negeri Surabaya
                                </p>
                                <p class="mt-2 text-base-300">
                                    IPK: <span class="font-semibold text-white">3,81</span>
                                </p>
                            </div>

                            <div class="glass rounded-2xl p-5 border border-white/10">
                                <h3 class="text-white font-semibold mb-3 text-base">Penghargaan</h3>
                                <ul class="space-y-1 list-disc list-inside">
                                    <li>Penulis terpilih pada The 2nd International Conference on Aligning
                                        Sustainability with Vocational Innovations (ICASVI 2025).</li>
                                    <li>Terlibat dalam pengembangan proyek akhir e-commerce
                                        <span class="text-base-100 font-medium">"BATITUNE"</span> untuk digitalisasi
                                        UMKM batik tulis.
                                    </li>
                                </ul>
                            </div>

                            <div class="glass rounded-2xl p-5 border border-white/10">
                                <h3 class="text-white font-semibold mb-3 text-base">Sertifikat</h3>
                                <ul class="space-y-1 list-disc list-inside">
                                    <li>Belajar Membuat Aplikasi Android untuk Pemula</li>
                                    <li>Memulai Pemrograman dengan Kotlin</li>
                                    <li>Belajar Dasar AI</li>
                                    <li>Belajar Dasar Pemrograman Web</li>
                                    <li>Belajar Dasar Git dengan GitHub</li>
                                    <li>Pengenalan ke Logika Pemrograman (Programming Logic 101)</li>
                                    <li>ITBox Certificate</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- EXPERIENCE SECTION -->
        <section id="experience" class="py-24">
            <div class="container">
                <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-16"
                    data-aos="fade-up">
                    <div>
                        <h2 class="text-4xl md:text-6xl font-display font-extrabold text-white mb-4">
                            Pengalaman <br />
                            <span class="text-gradient-primary">Profesional</span>
                        </h2>
                        <p class="text-base-300 max-w-md text-lg">Ringkasan pengalaman akademik, magang, dan program
                            pengembangan kompetensi yang telah saya ikuti.</p>
                    </div>
                </div>

                <div class="relative">
                    <!-- Timeline Line -->
                    <div
                        class="absolute left-8 top-4 bottom-4 w-0.5 bg-gradient-to-b from-primary/60 via-base-700 to-transparent md:left-1/2 md:-ml-px">
                    </div>

                    <!-- Timeline Items -->
                    <div class="space-y-12">
                        <!-- Item 1 -->
                        <div class="relative grid md:grid-cols-2 gap-8 items-center group" data-aos="fade-up">
                            <div class="md:text-right md:pr-12">
                                <div
                                    class="glass rounded-2xl p-6 border border-white/10 group-hover:border-primary/30 transition-all duration-300 hover-lift">
                                    <h3 class="text-2xl font-bold text-white mb-2">Pengembang Proyek Akhir</h3>
                                    <p class="text-primary-200 font-semibold mb-3">Universitas Negeri Surabaya</p>
                                    <p class="text-base-300 leading-relaxed">
                                        Merancang dan mengembangkan aplikasi e-commerce <span
                                            class="text-white font-medium">"BATITUNE"</span> untuk digitalisasi UMKM
                                        batik tulis. Proses pengembangan mencakup desain UI/UX, pengembangan front-end
                                        dan back-end, hingga aplikasi siap digunakan oleh pengguna.
                                    </p>
                                </div>
                            </div>

                            <div
                                class="absolute left-8 -translate-x-1/2 md:left-1/2 w-4 h-4 rounded-full bg-primary ring-4 ring-base-950 shadow-lg shadow-primary/25 group-hover:scale-125 transition-transform duration-300">
                            </div>

                            <div class="pl-16 md:pl-12">
                                <span
                                    class="inline-flex items-center gap-2 px-4 py-2 rounded-full glass border border-white/10 text-base-300 text-sm font-medium">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                    Mar 2025 – Jul 2025
                                </span>
                            </div>
                        </div>

                        <!-- Item 2 -->
                        <div class="relative grid md:grid-cols-2 gap-8 items-center group" data-aos="fade-up"
                            data-aos-delay="100">
                            <div class="md:order-2 md:pl-12">
                                <div
                                    class="glass rounded-2xl p-6 border border-white/10 group-hover:border-accent/30 transition-all duration-300 hover-lift">
                                    <h3 class="text-2xl font-bold text-white mb-2">Cohort Mobile Development</h3>
                                    <p class="text-accent-400 font-semibold mb-3">Bangkit Academy 2024</p>
                                    <p class="text-base-300 leading-relaxed">
                                        Mengikuti program studi independen intensif dengan fokus pada pengembangan
                                        aplikasi Android menggunakan <span
                                            class="text-white font-medium">Kotlin</span>.
                                        Berkolaborasi dalam tim lintas fungsi untuk mengembangkan <span
                                            class="text-white font-medium">"NVBite"</span>, aplikasi capstone yang
                                        berfokus pada deteksi emisi karbon makanan. Mengimplementasikan clean
                                        architecture dan kontrol versi dengan Git untuk meningkatkan efisiensi
                                        kolaborasi dan keterbacaan kode.
                                    </p>
                                </div>
                            </div>

                            <div
                                class="absolute left-8 -translate-x-1/2 md:left-1/2 w-4 h-4 rounded-full bg-accent ring-4 ring-base-950 shadow-lg shadow-accent/25 group-hover:scale-125 transition-transform duration-300">
                            </div>

                            <div class="pl-16 md:text-right md:pr-12 md:order-1">
                                <span
                                    class="inline-flex items-center gap-2 px-4 py-2 rounded-full glass border border-white/10 text-base-300 text-sm font-medium">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                    Sep 2024 – Jan 2025
                                </span>
                            </div>
                        </div>

                        <!-- Item 3 -->
                        <div class="relative grid md:grid-cols-2 gap-8 items-center group" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="md:text-right md:pr-12">
                                <div
                                    class="glass rounded-2xl p-6 border border-white/10 group-hover:border-primary/30 transition-all duration-300 hover-lift">
                                    <h3 class="text-2xl font-bold text-white mb-2">Magang Pengembang Web</h3>
                                    <p class="text-primary-200 font-semibold mb-3">PT EDI Indonesia Cabang Surabaya</p>
                                    <p class="text-base-300 leading-relaxed">
                                        Merancang, mengembangkan, dan mengelola aplikasi web full-stack untuk manajemen
                                        kas perusahaan menggunakan <span class="text-white font-medium">PHP, Laravel,
                                            MySQL, HTML, CSS, dan JavaScript</span>. Membangun panel admin dan fitur
                                        input data dinamis dengan Laravel Filament untuk merampingkan proses pelaporan
                                        dan mengurangi waktu kerja manual tim keuangan. Merancang skema basis data
                                        serta mengimplementasikan fungsionalitas CRUD untuk memastikan pelacakan dan
                                        pelaporan data keuangan yang akurat.
                                    </p>
                                </div>
                            </div>

                            <div
                                class="absolute left-8 -translate-x-1/2 md:left-1/2 w-4 h-4 rounded-full bg-primary ring-4 ring-base-950 shadow-lg shadow-primary/25 group-hover:scale-125 transition-transform duration-300">
                            </div>

                            <div class="pl-16 md:pl-12">
                                <span
                                    class="inline-flex items-center gap-2 px-4 py-2 rounded-full glass border border-white/10 text-base-300 text-sm font-medium">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                    Feb 2024 – Jul 2024
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SKILLS SECTION -->
        <section id="skills" class="py-24 bg-white/[0.03] relative overflow-hidden">
            <div class="container">
                <h2 class="text-4xl md:text-5xl font-display font-extrabold text-white mb-4 text-center"
                    data-aos="fade-up">
                    Keahlian <span class="text-gradient-primary">Teknis</span>
                </h2>
                <p class="text-base-300 text-center max-w-2xl mx-auto mb-12 text-lg" data-aos="fade-up"
                    data-aos-delay="100">
                    Keahlian utama yang saya kuasai dalam pengembangan aplikasi berbasis web dan Android, serta
                    teknologi pendukung lainnya.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Backend Card -->
                    <div class="spotlight-card group rounded-2xl glass p-8 border border-white/10 hover-lift"
                        onmousemove="spot(event)" data-aos="fade-up" data-aos-delay="200">
                        <div class="relative z-10">
                            <div
                                class="w-14 h-14 rounded-2xl bg-primary/20 grid place-items-center text-primary-300 mb-6 group-hover:scale-110 transition-transform duration-300">
                                <svg width="28" height="28" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <polyline points="16 18 22 12 16 6"></polyline>
                                    <polyline points="8 6 2 12 8 18"></polyline>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-white mb-3">Full-Stack Web</h3>
                            <p class="text-base-300 mb-6 leading-relaxed">Mengembangkan aplikasi web full-stack dengan
                                fokus pada pemodelan basis data, fungsionalitas backend, serta tampilan yang responsif
                                dan mudah digunakan.</p>
                            <div class="flex flex-wrap gap-2">
                                <span
                                    class="px-3 py-1.5 bg-white/5 rounded-lg text-sm text-base-300 border border-white/10">PHP</span>
                                <span
                                    class="px-3 py-1.5 bg-white/5 rounded-lg text-sm text-base-300 border border-white/10">Laravel</span>
                                <span
                                    class="px-3 py-1.5 bg-white/5 rounded-lg text-sm text-base-300 border border-white/10">Filament</span>
                                <span
                                    class="px-3 py-1.5 bg-white/5 rounded-lg text-sm text-base-300 border border-white/10">MySQL</span>
                                <span
                                    class="px-3 py-1.5 bg-white/5 rounded-lg text-sm text-base-300 border border-white/10">HTML</span>
                                <span
                                    class="px-3 py-1.5 bg-white/5 rounded-lg text-sm text-base-300 border border-white/10">CSS</span>
                                <span
                                    class="px-3 py-1.5 bg-white/5 rounded-lg text-sm text-base-300 border border-white/10">JavaScript</span>
                            </div>
                        </div>
                    </div>

                    <!-- Mobile Card -->
                    <div class="spotlight-card group rounded-2xl glass p-8 border border-white/10 hover-lift"
                        onmousemove="spot(event)" data-aos="fade-up" data-aos-delay="300">
                        <div class="relative z-10">
                            <div
                                class="w-14 h-14 rounded-2xl bg-accent/20 grid place-items-center text-accent-300 mb-6 group-hover:scale-110 transition-transform duration-300">
                                <svg width="28" height="28" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <rect x="5" y="2" width="14" height="20" rx="2" ry="2">
                                    </rect>
                                    <line x1="12" y1="18" x2="12.01" y2="18"></line>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-white mb-3">Pengembangan Android</h3>
                            <p class="text-base-300 mb-6 leading-relaxed">Membangun aplikasi Android menggunakan Kotlin
                                dengan mengikuti pola arsitektur modern serta praktik pengembangan yang baik.</p>
                            <div class="flex flex-wrap gap-2">
                                <span
                                    class="px-3 py-1.5 bg-white/5 rounded-lg text-sm text-base-300 border border-white/10">Kotlin</span>
                                <span
                                    class="px-3 py-1.5 bg-white/5 rounded-lg text-sm text-base-300 border border-white/10">Android
                                    Development</span>
                            </div>
                        </div>
                    </div>

                    <!-- Tools Card -->
                    <div class="spotlight-card group rounded-2xl glass p-8 border border-white/10 hover-lift"
                        onmousemove="spot(event)" data-aos="fade-up" data-aos-delay="400">
                        <div class="relative z-10">
                            <div
                                class="w-14 h-14 rounded-2xl bg-success/20 grid place-items-center text-success-300 mb-6 group-hover:scale-110 transition-transform duration-300">
                                <svg width="28" height="28" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="2" y1="12" x2="22" y2="12"></line>
                                    <path
                                        d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-white mb-3">Tools & Pendukung</h3>
                            <p class="text-base-300 mb-6 leading-relaxed">Menggunakan berbagai tools untuk
                                kolaborasi, pengujian, serta pengelolaan kode sumber.</p>
                            <div class="flex flex-wrap gap-2">
                                <span
                                    class="px-3 py-1.5 bg-white/5 rounded-lg text-sm text-base-300 border border-white/10">Git
                                    & GitHub</span>
                                <span
                                    class="px-3 py-1.5 bg-white/5 rounded-lg text-sm text-base-300 border border-white/10">Postman</span>
                                <span
                                    class="px-3 py-1.5 bg-white/5 rounded-lg text-sm text-base-300 border border-white/10">AI
                                    Tools</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tech Marquee -->
                <div class="mt-16 overflow-hidden rounded-2xl border border-white/10 bg-white/5">
                    <div
                        class="flex gap-14 whitespace-nowrap animate-marq px-8 py-5 text-base-300 text-lg font-medium">
                        <span class="text-primary-300">Laravel</span>
                        <span class="text-accent-300">PHP</span>
                        <span class="text-primary-300">Kotlin</span>
                        <span class="text-accent-300">MySQL</span>
                        <span class="text-primary-300">HTML</span>
                        <span class="text-accent-300">CSS</span>
                        <span class="text-primary-300">JavaScript</span>
                        <span class="text-accent-300">GitHub</span>
                        <span class="text-primary-300">Postman</span>
                        <span class="text-accent-300">AI</span>

                        <span class="text-primary-300">Laravel</span>
                        <span class="text-accent-300">PHP</span>
                        <span class="text-primary-300">Kotlin</span>
                        <span class="text-accent-300">MySQL</span>
                        <span class="text-primary-300">HTML</span>
                        <span class="text-accent-300">CSS</span>
                        <span class="text-primary-300">JavaScript</span>
                        <span class="text-accent-300">GitHub</span>
                        <span class="text-primary-300">Postman</span>
                        <span class="text-accent-300">AI</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- PROJECTS SECTION -->
        <section id="projects" class="py-24">
            <div class="container">
                <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-16"
                    data-aos="fade-up">
                    <div>
                        <h2 class="text-4xl md:text-6xl font-display font-extrabold text-white mb-4">
                            Proyek <br />
                            <span class="text-gradient-primary">Terpilih</span>
                        </h2>
                        <p class="text-base-300 max-w-md text-lg">Beberapa proyek yang saya kerjakan sebagai bagian
                            dari tugas akhir, program studi independen, dan magang.</p>
                    </div>
                    <a href="https://github.com/aldinamanya?tab=repositories" target="_blank"
                        class="inline-flex items-center gap-3 text-base-300 hover:text-white transition-colors mt-6 md:mt-0 group"
                        data-aos="fade-up" data-aos-delay="100">
                        <span>Lihat Repositori GitHub</span>
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="7" y1="17" x2="17" y2="7"></line>
                            <polyline points="7 7 17 7 17 17"></polyline>
                        </svg>
                    </a>
                </div>

                <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                    <!-- Project 1 -->
                    <article
                        class="group rounded-2xl glass border border-white/10 overflow-hidden transition-all duration-300 hover-lift hover:shadow-card"
                        data-aos="fade-up" data-aos-delay="200">
                        <div class="relative h-48 overflow-hidden">
                            <img src="assets/images/batitune.png" alt="BATITUNE E-Commerce Platform"
                                class="w-full h-full object-cover opacity-90 group-hover:scale-105 transition-transform duration-700"
                                loading="lazy" decoding="async"
                                onerror="this.src='https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80'" />
                            <div class="absolute inset-0 bg-gradient-to-t from-base-950 to-transparent"></div>
                            <div
                                class="absolute top-4 right-4 glass border border-white/10 px-3 py-1 rounded-full text-xs text-white backdrop-blur-20">
                                Proyek Akhir
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-white group-hover:text-primary transition-colors mb-2">
                                BATITUNE - E-Commerce UMKM Batik</h3>
                            <p class="text-base-300 text-sm leading-relaxed mb-4">
                                Aplikasi e-commerce yang dikembangkan sebagai proyek akhir untuk mendukung digitalisasi
                                UMKM batik tulis. Mencakup fitur pengelolaan produk, katalog, dan alur transaksi yang
                                dapat dikembangkan lebih lanjut.
                            </p>
                            <div class="flex gap-3 text-xs text-base-400">
                                <span class="bg-white/5 px-2 py-1 rounded">Laravel</span>
                                <span class="bg-white/5 px-2 py-1 rounded">Filament</span>
                                <span class="bg-white/5 px-2 py-1 rounded">MySQL</span>
                            </div>
                        </div>
                    </article>

                    <!-- Project 2 -->
                    <article
                        class="group rounded-2xl glass border border-white/10 overflow-hidden transition-all duration-300 hover-lift hover:shadow-card"
                        data-aos="fade-up" data-aos-delay="300">
                        <div class="relative h-48 overflow-hidden">
                            <img src="https://github.com/NV-Bite/.github/raw/main/assets/frame%20mockups.png"
                                alt="NVBite Carbon Detection App"
                                class="w-full h-full object-cover opacity-90 group-hover:scale-105 transition-transform duration-700"
                                loading="lazy" decoding="async"
                                onerror="this.src='https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80'" />
                            <div class="absolute inset-0 bg-gradient-to-t from-base-950 to-transparent"></div>
                            <div
                                class="absolute top-4 right-4 glass border border-white/10 px-3 py-1 rounded-full text-xs text-white backdrop-blur-20">
                                Capstone
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-white group-hover:text-accent transition-colors mb-2">
                                NVBite – Deteksi Emisi Karbon</h3>
                            <p class="text-base-300 text-sm leading-relaxed mb-4">
                                Aplikasi Android yang dikembangkan sebagai proyek capstone Bangkit Academy 2024 untuk
                                mendeteksi emisi karbon makanan. Dibangun dalam tim lintas fungsi dengan penerapan
                                arsitektur yang terstruktur dan kolaborasi menggunakan Git.
                            </p>
                            <div class="flex gap-3 text-xs text-base-400">
                                <span class="bg-white/5 px-2 py-1 rounded">Kotlin</span>
                                <span class="bg-white/5 px-2 py-1 rounded">Android</span>
                                <span class="bg-white/5 px-2 py-1 rounded">Capstone Project</span>
                            </div>
                        </div>
                    </article>

                    <!-- Project 3 -->
                    <article
                        class="group rounded-2xl glass border border-white/10 overflow-hidden transition-all duration-300 hover-lift hover:shadow-card"
                        data-aos="fade-up" data-aos-delay="400">
                        <div class="relative h-48 overflow-hidden">
                            <img src="assets/images/logoedii.png" alt="Finance Management System"
                                class="w-full h-full object-cover opacity-90 group-hover:scale-105 transition-transform duration-700"
                                loading="lazy" decoding="async"
                                onerror="this.src='https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80'" />
                            <div class="absolute inset-0 bg-gradient-to-t from-base-950 to-transparent"></div>
                            <div
                                class="absolute top-4 right-4 glass border border-white/10 px-3 py-1 rounded-full text-xs text-white backdrop-blur-20">
                                Magang
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-white group-hover:text-primary transition-colors mb-2">
                                Sistem Manajemen Kas Perusahaan</h3>
                            <p class="text-base-300 text-sm leading-relaxed mb-4">
                                Aplikasi web untuk manajemen kas internal perusahaan yang dikembangkan selama magang di
                                PT EDI Indonesia Cabang Surabaya. Mendukung pencatatan transaksi, pelaporan, dan
                                pengelolaan data keuangan dengan basis data terstruktur.
                            </p>
                            <div class="flex gap-3 text-xs text-base-400">
                                <span class="bg-white/5 px-2 py-1 rounded">Laravel</span>
                                <span class="bg-white/5 px-2 py-1 rounded">Filament</span>
                                <span class="bg-white/5 px-2 py-1 rounded">MySQL</span>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- CONTACT SECTION -->
        <section id="contact" class="py-24 relative overflow-hidden">
            <div
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-primary/5 rounded-full blur-[140px] pointer-events-none">
            </div>

            <div class="container relative z-10 text-center">
                <h2 class="text-5xl md:text-6xl font-display font-extrabold text-white mb-6" data-aos="zoom-in">
                    Hubungi <span class="text-gradient-primary">Saya</span>
                </h2>
                <p class="text-xl text-base-300 max-w-2xl mx-auto mb-12" data-aos="zoom-in" data-aos-delay="100">
                    Jika tertarik untuk berdiskusi, berkolaborasi, atau menawarkan kesempatan kerja,
                    silakan menghubungi saya melalui email, WhatsApp, atau LinkedIn.
                </p>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-4 flex-wrap" data-aos="zoom-in"
                    data-aos-delay="200">
                    <!-- Gmail -->
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&to=aldinamanya08@gmail.com&su=Halo%20Teguh%20—%20Inquiry&body=Hai%20Teguh,%0A%0ASaya%20tertarik%20berkolaborasi%20dengan%20Anda.%0A%0ATerima%20kasih."
                        target="_blank" rel="noopener noreferrer"
                        class="w-full sm:w-auto px-8 py-4 bg-gradient-to-r from-primary to-accent text-white font-bold rounded-xl shadow-glow hover:shadow-[0_12px_40px_rgba(99,102,241,.35)] transition-all flex items-center justify-center gap-2 hover:-translate-y-1 focus-visible:scale-[.99]">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                        </svg>
                        Kirim Email
                    </a>

                    <!-- WhatsApp -->
                    <a href="https://wa.me/62895331170400?text=Halo%20Teguh%2C%20saya%20tertarik%20berkolaborasi"
                        target="_blank" rel="noopener noreferrer"
                        class="w-full sm:w-auto px-8 py-4 bg-white text-base-900 font-bold rounded-xl hover:bg-base-100 transition-colors flex items-center justify-center gap-2 border border-white/10 hover:-translate-y-1">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"
                            aria-hidden="true">
                            <path
                                d="M12 2a10 10 0 0 0-8.94 14.5L2 22l5.67-1.49A10 10 0 1 0 12 2Zm0 2a8 8 0 0 1 6.86 12.2l-.22.34a1 1 0 0 1-.63.44l-2.7.71a.5.5 0 0 1-.49-.17l-.2-.25a8.6 8.6 0 0 1-3.2-1.79 8.49 8.49 0 0 1-2.05-2.59l-.12-.26a.5.5 0 0 1 .11-.57l1.07-1.03a1 1 0 0 0 .2-1.18l-1.02-2a1 1 0 0 0-1.53-.34A8 8 0 0 1 12 4Z" />
                        </svg>
                        WhatsApp
                    </a>

                    <!-- LinkedIn -->
                    <a href="https://www.linkedin.com/in/teguh-aldianto-705b53298/" target="_blank"
                        rel="noopener noreferrer"
                        class="w-full sm:w-auto px-8 py-4 glass border border-white/10 text-white font-semibold rounded-xl hover:bg-white/10 transition-colors flex items-center justify-center gap-2 hover:-translate-y-1">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
                            <rect x="2" y="9" width="4" height="12" />
                            <circle cx="4" cy="4" r="2" />
                        </svg>
                        LinkedIn
                    </a>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="border-t border-white/10 py-12 bg-base-950 relative z-10">
        <div class="container">
            <div class="flex flex-col md:flex-row justify-between items-center gap-6 mb-8">
                <a href="#" class="group flex items-center gap-3">
                    <span class="relative inline-grid h-10 w-10 place-items-center rounded-xl overflow-hidden">
                        <img src="assets/images/profile.jpg" alt="Foto profil Teguh Aldianto"
                            class="h-full w-full object-cover" width="40" height="40" loading="eager"
                            decoding="async" />
                        <span class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-white/10"></span>
                    </span>
                    <span
                        class="font-semibold text-white tracking-tight group-hover:text-primary transition-colors duration-300">
                        Teguh Aldianto
                    </span>
                </a>
            </div>

            <div class="flex gap-6 text-base-400">
                <a href="https://github.com/aldinamanya" target="_blank"
                    class="hover:text-white transition-colors duration-300" aria-label="GitHub">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                    </svg>
                </a>
                <a href="https://www.linkedin.com/in/teguh-aldianto-705b53298/" target="_blank"
                    class="hover:text-white transition-colors duration-300" aria-label="LinkedIn">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M20.447 20.452h-3.554v-5.569c0-1.328-.27-3.037-2.095-3.037-1.851 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.564v1.561h.046c.488-.9 1.654-1.85 3.402-1.85 3.63 0 4.262 2.37 4.262 5.455v6.286zM5.337 7.433C4.2 7.433 3.28 6.507 3.28 5.368c0-1.138.92-2.063 2.057-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zM7.119 20.452H3.555V9h3.564v11.452z" />
                    </svg>
                </a>
            </div>
        </div>

        <p class="text-sm text-base-400 text-center">
            © <span id="year"></span> Teguh Aldianto. Portofolio ini disusun berdasarkan pengalaman dan
            kualifikasi yang
            tercantum dalam CV.
        </p>
    </footer>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            once: true,
            offset: 60,
            easing: 'ease-out-cubic',
            disable: () => window.matchMedia('(prefers-reduced-motion: reduce)').matches
        });

        // Set current year
        document.getElementById('year').textContent = new Date().getFullYear();

        // Theme toggle with persistence
        const themeBtn = document.getElementById('theme-toggle');
        const userPref = localStorage.getItem('theme');
        const systemDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
        const root = document.documentElement;

        function applyTheme(mode) {
            if (mode === 'dark' || (mode === null && systemDark)) {
                root.classList.add('dark');
                themeBtn.innerHTML =
                    '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>';
            } else {
                root.classList.remove('dark');
                themeBtn.innerHTML =
                    '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="5"></circle><path d="M12 1v2M12 21v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M1 12h2M21 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42"></path></svg>';
            }
        }

        applyTheme(userPref);

        themeBtn.addEventListener('click', () => {
            const isDark = document.documentElement.classList.contains('dark');
            const next = isDark ? 'light' : 'dark';
            localStorage.setItem('theme', next);
            applyTheme(next);
        });

        // Spotlight mouse position
        function spot(e) {
            const r = e.currentTarget.getBoundingClientRect();
            e.currentTarget.style.setProperty('--mx', `${e.clientX - r.left}px`);
            e.currentTarget.style.setProperty('--my', `${e.clientX - r.left}px`);
        }
        window.spot = spot;

        // Intersection Counter
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

        // Mobile nav
        const menuBtn = document.getElementById('menu-toggle');
        const mobileNav = document.getElementById('mobile-nav');

        menuBtn.addEventListener('click', () => {
            mobileNav.classList.toggle('hidden');
            menuBtn.classList.toggle('text-primary');
        });

        document.querySelectorAll('#mobile-nav a').forEach(a => {
            a.addEventListener('click', () => {
                mobileNav.classList.add('hidden');
                menuBtn.classList.remove('text-primary');
            });
        });

        // Navbar shadow on scroll
        const navbar = document.getElementById('navbar');
        addEventListener('scroll', () => {
            navbar.classList.toggle('shadow-[0_10px_30px_rgba(0,0,0,.25)]', scrollY > 10);
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>

</html>
