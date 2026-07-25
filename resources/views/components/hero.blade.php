<section id="hero" class="min-h-[90vh] flex items-center relative pt-12 overflow-hidden">
    <div class="site-container grid lg:grid-cols-12 gap-10 lg:gap-12 items-center">

        <div class="lg:col-span-7 order-2 lg:order-1" data-aos="fade-up" data-aos-duration="800">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full border border-primary/20 bg-primary/5 text-xs font-medium text-primary mb-8 shadow-sm">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
                </span>
                Available for Work
            </div>

            <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-extrabold tracking-tight mb-6 leading-tight">
                <span class="gradient-text bg-size-[200%_auto] animate-gradient">Software Engineer.</span><br />
                <span class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl text-zinc-500 dark:text-zinc-400 font-medium">Full-Stack Web & Android Mobile.</span>
            </h1>

            <p class="text-lg md:text-xl text-zinc-600 dark:text-zinc-400 mb-10 max-w-2xl leading-relaxed reveal-text">
                Saya <strong class="text-zinc-900 dark:text-white">Teguh Aldianto</strong> — membangun aplikasi web dengan Laravel dan mobile dengan Kotlin, menerapkan Clean Architecture & MVVM.
            </p>

            <div class="flex flex-wrap items-center gap-4 mb-12">
                <a href="/projects" class="btn-primary group magnetic-btn">
                    Lihat Proyek
                    <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 12h14M12 5l7 7-7 7" />
                    </svg>
                </a>
                <a href="{{ str_replace(' ', '%20', asset('assets/cv/CV_Teguh Aldianto.pdf')) }}" download
                   class="btn-secondary group magnetic-btn">
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
                    <div class="text-2xl font-bold gradient-text"><span class="counter"
                            data-target="3">0</span>+</div>
                    <div class="text-xs text-zinc-500 font-medium uppercase tracking-wider mt-1">Tahun Coding</div>
                </div>
                <div>
                    <div class="text-2xl font-bold gradient-text"><span class="counter"
                            data-target="8">0</span>+</div>
                    <div class="text-xs text-zinc-500 font-medium uppercase tracking-wider mt-1">Proyek Selesai</div>
                </div>
            </div>
        </div>

        <div class="lg:col-span-5 order-1 lg:order-2 flex justify-center lg:justify-end" data-aos="fade-left"
             data-aos-delay="200">
            <div class="hero-parallax hero-glow relative w-64 h-64 md:w-80 md:h-80 rounded-3xl overflow-hidden p-1.5 animate-float"
                 style="background: linear-gradient(135deg, #10B981, #059669);">
                <div class="w-full h-full rounded-[inherit] overflow-hidden bg-zinc-100 dark:bg-zinc-900">
                    <img src="{{ asset('assets/images/profile.jpg') }}" alt="Teguh Aldianto"
                         class="w-full h-full object-cover transition-all duration-700 hover:scale-105"
                         onerror="this.onerror=null;this.src='{{ asset('assets/images/profile.jpg') }}'" />
                </div>
            </div>
        </div>

    </div>
</section>
