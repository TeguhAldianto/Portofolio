<section class="min-h-[85vh] flex items-center relative pt-12">
    <div class="container grid lg:grid-cols-12 gap-12 items-center">

        <div class="lg:col-span-7 order-2 lg:order-1" data-aos="fade-up">
            <div
                class="inline-flex items-center gap-2 px-3 py-1 rounded-full border border-zinc-200 dark:border-zinc-800 bg-white dark:bg-zinc-900/50 text-xs font-medium text-zinc-600 dark:text-zinc-300 mb-8 shadow-sm">
                <span class="relative flex h-2 w-2">
                    <span
                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                </span>
                Available for Work
            </div>

            <h1 class="text-5xl md:text-6xl lg:text-7xl font-extrabold tracking-tight mb-6 leading-tight">
                Software Engineer.<br />
                <span class="text-zinc-500 dark:text-zinc-400">Builder of digital experiences.</span>
            </h1>

            <p class="text-lg md:text-xl text-zinc-600 dark:text-zinc-400 mb-10 max-w-2xl leading-relaxed">
                Saya <strong class="text-zinc-900 dark:text-white font-semibold">Teguh Aldianto</strong>. Fokus pada
                pengembangan aplikasi Web Full-Stack dan Mobile (Android) dengan arsitektur yang clean dan scalable.
            </p>

            <div class="flex flex-wrap items-center gap-4 mb-12">
                <a href="#projects" class="btn-primary group">
                    Lihat Proyek
                    <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 12h14M12 5l7 7-7 7" />
                    </svg>
                </a>
                <a href="{{ asset('assets/cv/CV_Teguh Aldianto.pdf') }}" download class="btn-secondary group">
                    <svg class="w-4 h-4 mr-2 group-hover:-translate-y-0.5 transition-transform" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                    </svg>
                    Download CV
                </a>
            </div>

            <div class="flex items-center gap-8 pt-6 border-t border-zinc-200 dark:border-white/10">
                <div>
                    <div class="text-2xl font-bold text-zinc-900 dark:text-white"><span class="counter"
                            data-target="3.81">0</span></div>
                    <div class="text-xs text-zinc-500 font-medium uppercase tracking-wider mt-1">IPK Cum Laude</div>
                </div>
                <div>
                    <div class="text-2xl font-bold text-zinc-900 dark:text-white"><span class="counter"
                            data-target="8">0</span>+</div>
                    <div class="text-xs text-zinc-500 font-medium uppercase tracking-wider mt-1">Proyek Selesai</div>
                </div>
            </div>
        </div>

        <div class="lg:col-span-5 order-1 lg:order-2 flex justify-center lg:justify-end" data-aos="fade-left"
            data-aos-delay="200">
            <div
                class="relative w-64 h-64 md:w-80 md:h-80 rounded-3xl overflow-hidden glass-card p-2 transform rotate-2 hover:rotate-0 transition-transform duration-500">
                <img src="{{ asset('assets/images/pp.JPG') }}" alt="Teguh Aldianto"
                    class="w-full h-full object-cover rounded-2xl grayscale hover:grayscale-0 transition-all duration-500"
                    onerror="this.src='{{ asset('assets/images/profile.jpg') }}'" />
            </div>
        </div>

    </div>
</section>
