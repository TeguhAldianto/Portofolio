<section id="projects" class="py-32 bg-zinc-100/50 dark:bg-zinc-900/10 relative">
    <div class="container">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-12" data-aos="fade-up">
            <div>
                <h2 class="text-3xl md:text-4xl font-extrabold mb-2">
                    <span class="gradient-text">Selected Works.</span>
                </h2>
                <p class="text-zinc-500 dark:text-zinc-400">Projects I've built and contributed to.</p>
            </div>
            <a href="https://github.com/teguhaldianto" target="_blank"
               class="hidden md:inline-flex text-sm font-medium text-primary hover:text-primary-hover transition-colors items-center gap-1 mt-4 md:mt-0">
                View GitHub
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="group gradient-border-card glass-card overflow-hidden" data-aos="fade-up" data-aos-delay="100">
                <div class="h-56 bg-zinc-100 dark:bg-zinc-800 overflow-hidden relative">
                    <img src="{{ asset('assets/images/batitune.png') }}" alt="BATITUNE"
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-out" loading="lazy" />
                    <div class="absolute inset-0 bg-linear-to-t from-primary/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-6">
                        <span class="text-white text-sm font-medium">View Project →</span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-bold text-zinc-900 dark:text-white mb-2">BATITUNE</h3>
                    <p class="text-sm text-zinc-500 line-clamp-2 mb-4">E-Commerce platform khusus untuk digitalisasi pemasaran UMKM pengrajin batik tulis.</p>
                    <div class="flex gap-2 flex-wrap">
                        <span class="text-xs font-semibold px-2.5 py-1 rounded-full bg-primary/10 text-primary">Laravel</span>
                        <span class="text-xs font-semibold px-2.5 py-1 rounded-full bg-accent/10 text-accent">MySQL</span>
                    </div>
                </div>
            </div>

            <div class="group gradient-border-card glass-card overflow-hidden" data-aos="fade-up" data-aos-delay="200">
                <div class="h-56 bg-zinc-100 dark:bg-zinc-800 overflow-hidden relative p-4 flex items-center justify-center">
                    <img src="{{ asset('assets/images/nvbite-mockup.png') }}" alt="NVBite"
                         class="h-full w-auto object-contain drop-shadow-xl group-hover:scale-110 transition-transform duration-700 ease-out" loading="lazy" />
                    <div class="absolute inset-0 bg-linear-to-t from-accent/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-6">
                        <span class="text-white text-sm font-medium">View Project →</span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-bold text-zinc-900 dark:text-white mb-2">NVBite</h3>
                    <p class="text-sm text-zinc-500 line-clamp-2 mb-4">Aplikasi Android untuk deteksi emisi karbon makanan berbasis Machine Learning (Bangkit Capstone).</p>
                    <div class="flex gap-2 flex-wrap">
                        <span class="text-xs font-semibold px-2.5 py-1 rounded-full bg-accent/10 text-accent">Kotlin</span>
                        <span class="text-xs font-semibold px-2.5 py-1 rounded-full bg-primary/10 text-primary">MVVM</span>
                    </div>
                </div>
            </div>

            <div class="group gradient-border-card glass-card overflow-hidden" data-aos="fade-up" data-aos-delay="300">
                <div class="h-56 bg-zinc-100 dark:bg-zinc-800 overflow-hidden relative flex items-center justify-center p-8">
                    <img src="{{ asset('assets/images/logoedii.png') }}" alt="ERP Cash Management"
                         class="max-w-full max-h-full object-contain group-hover:scale-110 transition-transform duration-700 ease-out grayscale group-hover:grayscale-0" loading="lazy" />
                    <div class="absolute inset-0 bg-linear-to-t from-primary/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-6">
                        <span class="text-white text-sm font-medium">View Project →</span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-bold text-zinc-900 dark:text-white mb-2">ERP Cash Management</h3>
                    <p class="text-sm text-zinc-500 line-clamp-2 mb-4">Sistem manajemen kas internal perusahaan berbasis web untuk PT EDI Indonesia.</p>
                    <div class="flex gap-2 flex-wrap">
                        <span class="text-xs font-semibold px-2.5 py-1 rounded-full bg-primary/10 text-primary">Filament</span>
                        <span class="text-xs font-semibold px-2.5 py-1 rounded-full bg-accent/10 text-accent">TALL</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
