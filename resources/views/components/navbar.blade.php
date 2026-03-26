<header id="navbar" class="fixed top-0 inset-x-0 z-50 transition-all duration-500 glass-nav">
    <div class="container">
        <div
            class="mt-4 flex items-center justify-between rounded-2xl border border-white/10 bg-base-900/70 supports-backdrop-filter:backdrop-blur-[20px] shadow-soft px-4 md:px-6 py-3">
            <a href="#" class="flex items-center gap-3 group" data-aos="fade-down">
                <img src="{{ asset('assets/images/profile.jpg') }}" alt="Foto profil Teguh Aldianto"
                    class="h-10 w-10 rounded-xl object-cover shadow-glow" width="40" height="40" loading="eager"
                    decoding="async" />
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
                </a>
                <a href="#experience"
                    class="px-4 py-2 text-sm font-medium rounded-full hover:bg-white/10 hover:text-white transition-all duration-300 relative overflow-hidden group">
                    <span class="relative z-10">Pengalaman</span>
                </a>
                <a href="#skills"
                    class="px-4 py-2 text-sm font-medium rounded-full hover:bg-white/10 hover:text-white transition-all duration-300 relative overflow-hidden group">
                    <span class="relative z-10">Keahlian</span>
                </a>
                <a href="#projects"
                    class="px-4 py-2 text-sm font-medium rounded-full hover:bg-white/10 hover:text-white transition-all duration-300 relative overflow-hidden group">
                    <span class="relative z-10">Proyek</span>
                </a>
                <a href="#contact"
                    class="px-4 py-2 text-sm font-medium rounded-full hover:bg-white/10 hover:text-white transition-all duration-300 relative overflow-hidden group">
                    <span class="relative z-10">Kontak</span>
                </a>
            </nav>

            <div class="flex items-center gap-2">
                <button id="theme-toggle" aria-label="Ubah tema"
                    class="p-2 rounded-lg hover:bg-white/10 text-base-200 hover:text-white transition duration-300"
                    title="Theme">
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

        <div id="mobile-nav"
            class="hidden mt-2 rounded-2xl border border-white/10 bg-base-900/90 supports-backdrop-filter:backdrop-blur-[20px] md:hidden"
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
