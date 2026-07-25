<section id="contact" class="pt-16 md:pt-20 pb-16 relative overflow-hidden">
    <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,rgba(16,185,129,0.03)_0%,transparent_70%)] pointer-events-none"></div>
    <div class="site-container max-w-3xl text-center relative">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full border border-primary/20 bg-primary/5 text-xs font-medium text-primary mb-8" data-aos="fade-up">
            <span class="relative flex h-2 w-2">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
            </span>
            Hubungi Saya
        </div>

        <h2 class="text-4xl md:text-5xl font-extrabold mb-6 tracking-tight" data-aos="fade-up">
            Kerja sama? <span class="gradient-text">Yuk diskusi.</span>
        </h2>
        <p class="text-lg text-zinc-600 dark:text-zinc-400 mb-10" data-aos="fade-up" data-aos-delay="100">
            Terbuka untuk kolaborasi proyek, peluang karir (Full-time/Freelance), atau sekadar bertukar wawasan seputar teknologi.
        </p>

        @if(session('success'))
            <div class="glass-card p-6 mb-10 text-center" data-aos="fade-up">
                <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center mx-auto mb-3">
                    <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                </div>
                <p class="text-primary font-medium">{{ session('success') }}</p>
            </div>
        @endif

        <form method="POST" action="/contact" class="max-w-xl mx-auto text-left mb-16" data-aos="fade-up" data-aos-delay="100">
            @csrf
            <div class="grid sm:grid-cols-2 gap-4 mb-4">
                <div>
                    <input type="text" name="name" placeholder="Nama" required maxlength="100"
                           class="form-input w-full px-4 py-3 rounded-xl bg-white/80 dark:bg-zinc-900/40 border border-zinc-200/60 dark:border-white/10 text-zinc-900 dark:text-white placeholder-zinc-400 focus:outline-none focus:border-primary/50 focus:ring-2 focus:ring-primary/10 transition-all duration-200">
                </div>
                <div>
                    <input type="email" name="email" placeholder="Email" required maxlength="100"
                           class="form-input w-full px-4 py-3 rounded-xl bg-white/80 dark:bg-zinc-900/40 border border-zinc-200/60 dark:border-white/10 text-zinc-900 dark:text-white placeholder-zinc-400 focus:outline-none focus:border-primary/50 focus:ring-2 focus:ring-primary/10 transition-all duration-200">
                </div>
            </div>
            <div class="mb-4">
                <input type="text" name="subject" placeholder="Subjek" required maxlength="200"
                       class="form-input w-full px-4 py-3 rounded-xl bg-white/80 dark:bg-zinc-900/40 border border-zinc-200/60 dark:border-white/10 text-zinc-900 dark:text-white placeholder-zinc-400 focus:outline-none focus:border-primary/50 focus:ring-2 focus:ring-primary/10 transition-all duration-200">
            </div>
            <div class="mb-6">
                <textarea name="message" rows="5" placeholder="Pesan Anda..." required maxlength="5000"
                          class="form-input w-full px-4 py-3 rounded-xl bg-white/80 dark:bg-zinc-900/40 border border-zinc-200/60 dark:border-white/10 text-zinc-900 dark:text-white placeholder-zinc-400 focus:outline-none focus:border-primary/50 focus:ring-2 focus:ring-primary/10 transition-all duration-200 resize-none"></textarea>
            </div>
            <button type="submit" class="btn-primary w-full magnetic-btn group">
                <svg class="w-4 h-4 mr-2 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                Kirim Pesan
            </button>
        </form>
    </div>
</section>
