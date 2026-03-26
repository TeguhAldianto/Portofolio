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

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
    class="bg-base-950 text-base-300 antialiased selection:bg-primary/30 selection:text-white overflow-x-hidden font-sans">

    <div class="fixed inset-0 -z-10 bg-mesh noisy"></div>

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

    <a href="#main"
        class="sr-only focus:not-sr-only fixed top-3 left-3 z-9999 px-4 py-2 rounded-lg bg-base-900 text-white text-sm font-medium transition-all focus:ring-2 focus:ring-primary/50">
        Lewati ke konten
    </a>

    <x-navbar />

    <main id="main" class="pt-32 md:pt-36">
        @yield('content')
    </main>

    <x-footer />

</body>

</html>
