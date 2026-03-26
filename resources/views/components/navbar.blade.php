<header id="navbar" class="fixed top-6 inset-x-0 z-50 flex justify-center px-4 transition-all duration-300">
    <div class="glass-card rounded-full px-4 py-2 flex items-center gap-6 md:gap-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] dark:shadow-[0_8px_30px_rgb(0,0,0,0.1)]">

        <a href="#" class="flex items-center gap-2 group">
            <div class="w-8 h-8 rounded-full bg-zinc-900 dark:bg-white text-white dark:text-zinc-900 flex items-center justify-center font-display font-bold text-sm transition-transform group-hover:scale-105">
                TA
            </div>
        </a>

        <nav class="hidden md:flex items-center gap-6 text-sm font-medium">
            <a href="#about" class="text-zinc-500 hover:text-zinc-900 dark:text-zinc-400 dark:hover:text-white transition-colors">About</a>
            <a href="#experience" class="text-zinc-500 hover:text-zinc-900 dark:text-zinc-400 dark:hover:text-white transition-colors">Experience</a>
            <a href="#skills" class="text-zinc-500 hover:text-zinc-900 dark:text-zinc-400 dark:hover:text-white transition-colors">Skills</a>
            <a href="#projects" class="text-zinc-500 hover:text-zinc-900 dark:text-zinc-400 dark:hover:text-white transition-colors">Projects</a>
        </nav>

        <div class="flex items-center gap-3 border-l border-zinc-200 dark:border-zinc-800 pl-4">
            <button id="theme-toggle" aria-label="Toggle Theme" class="text-zinc-500 hover:text-zinc-900 dark:text-zinc-400 dark:hover:text-white transition-colors">
                </button>
            <a href="#contact" class="hidden md:block btn-primary py-1.5 px-4 text-xs">
                Let's Talk
            </a>

            <button id="menu-toggle" class="md:hidden text-zinc-500 hover:text-zinc-900 dark:text-zinc-400 dark:hover:text-white">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><line x1="4" y1="12" x2="20" y2="12"></line><line x1="4" y1="6" x2="20" y2="6"></line><line x1="4" y1="18" x2="20" y2="18"></line></svg>
            </button>
        </div>
    </div>
</header>

<div id="mobile-nav" class="hidden fixed inset-x-4 top-24 z-40 glass-card p-4">
    <nav class="flex flex-col gap-4">
        <a href="#about" class="p-2 font-medium text-zinc-600 dark:text-zinc-300 hover:text-primary dark:hover:text-primary transition-colors">About</a>
        <a href="#experience" class="p-2 font-medium text-zinc-600 dark:text-zinc-300 hover:text-primary dark:hover:text-primary transition-colors">Experience</a>
        <a href="#skills" class="p-2 font-medium text-zinc-600 dark:text-zinc-300 hover:text-primary dark:hover:text-primary transition-colors">Skills</a>
        <a href="#projects" class="p-2 font-medium text-zinc-600 dark:text-zinc-300 hover:text-primary dark:hover:text-primary transition-colors">Projects</a>
        <a href="#contact" class="p-2 font-medium text-primary">Contact</a>
    </nav>
</div>
