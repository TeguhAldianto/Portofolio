<section class="relative min-h-[88vh] flex items-center overflow-hidden">
    <div class="container grid lg:grid-cols-2 gap-12 items-center">
        <div class="order-2 lg:order-1" data-aos="fade-right">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-primary/30 bg-primary/10 text-primary-100 text-sm font-semibold mb-8 glass">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
                </span>
                Open to Work & Collaboration
            </div>

            <h1 class="text-5xl lg:text-7xl font-display font-extrabold tracking-tight text-white mb-6 leading-[1.05]">
                Full-Stack & <br />
                <span class="text-gradient">Android</span><br />
                Developer
            </h1>

            <p class="text-xl text-base-300/90 mb-8 max-w-xl leading-relaxed">
                Lulusan <span class="text-white font-semibold">D4 Manajemen Informatika, Universitas Negeri Surabaya</span> dengan IPK 3,81. Memiliki keahlian dalam Pengembangan Web Full-Stack dan Pengembangan Mobile.
            </p>

            <div class="flex flex-wrap gap-4 mb-12">
                <a href="#projects" class="relative inline-flex items-center justify-center px-8 py-4 text-base font-semibold text-white transition-all duration-300 bg-gradient-to-r from-primary to-accent rounded-xl hover:shadow-glow hover:-translate-y-1 group">
                    <span class="relative z-10 flex items-center gap-2">
                        Lihat Proyek
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </span>
                </a>

                <a href="{{ asset('assets/cv/CV_Teguh Aldianto.pdf') }}" download class="inline-flex items-center justify-center px-8 py-4 text-base font-semibold text-base-100 transition-all duration-300 glass rounded-xl hover:bg-white/10 hover:text-white hover:-translate-y-1 border border-white/10 group">
                    <svg class="w-5 h-5 mr-2 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    Download CV
                </a>
            </div>

            <div class="grid grid-cols-3 gap-8 border-t border-white/5 pt-8">
                <div data-aos="fade-up" data-aos-delay="200">
                    <div class="text-3xl font-bold text-white mb-2"><span class="counter" data-target="3.81">0</span></div>
                    <div class="text-sm text-base-400 font-medium">IPK Cum Laude</div>
                </div>
                <div data-aos="fade-up" data-aos-delay="400">
                    <div class="text-3xl font-bold text-white mb-2"><span class="counter" data-target="8">0</span>+</div>
                    <div class="text-sm text-base-400 font-medium">Proyek Selesai</div>
                </div>
                <div data-aos="fade-up" data-aos-delay="600">
                    <div class="text-3xl font-bold text-white mb-2">ICASVI</div>
                    <div class="text-sm text-base-400 font-medium">Publikasi 2025</div>
                </div>
            </div>
        </div>

        <div class="order-1 lg:order-2 relative" data-aos="fade-left" data-aos-delay="300">
            <div class="absolute -inset-8 -z-10 rounded-[2.5rem] bg-gradient-to-tr from-primary/20 to-accent/20 blur-3xl animate-pulse"></div>
            <div class="relative rounded-3xl p-4 md:p-6 glass border border-white/10 shadow-card animate-float">
                <div class="relative overflow-hidden rounded-2xl aspect-[4/5] md:aspect-square">
                    <img src="{{ asset('assets/images/pp.JPG') }}" alt="Teguh Aldianto - Full Stack & Android Developer"
                        loading="eager" decoding="async"
                        class="object-cover w-full h-full will-change-transform transition-transform duration-700 hover:scale-105"
                        onerror="this.src='{{ asset('assets/images/profile.jpg') }}'" />
                    <div class="absolute inset-0 bg-gradient-to-t from-base-950/80 via-transparent to-transparent"></div>
                </div>
            </div>
        </div>
    </div>
</section>
