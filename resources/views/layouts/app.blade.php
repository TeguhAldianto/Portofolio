<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Teguh Aldianto | Software Engineer</title>
    <meta name="description" content="Portfolio Teguh Aldianto - Software Engineer spesialis Full-Stack Web dan Android Development." />
    <meta property="og:title" content="Teguh Aldianto | Software Engineer">
    <meta property="og:description" content="Portfolio Teguh Aldianto - Software Engineer spesialis Full-Stack Web dan Android Development.">
    <meta property="og:image" content="{{ asset('assets/images/profile.jpg') }}">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <script>
        if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>
    <noscript><style>.reveal-text{opacity:1!important;transform:none!important}</style></noscript>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="relative min-h-screen flex flex-col selection:bg-primary/20 selection:text-primary">

    <div class="fixed inset-0 -z-10 bg-grid-pattern pointer-events-none"></div>
    <div class="fixed top-0 inset-x-0 h-96 bg-linear-to-b from-white via-white/80 to-transparent dark:from-zinc-950 dark:via-zinc-950/80 dark:to-transparent -z-10 pointer-events-none"></div>
    <div class="fixed inset-x-0 top-1/3 h-96 bg-[radial-gradient(ellipse_at_center,rgba(16,185,129,0.08)_0%,transparent_70%)] dark:bg-[radial-gradient(ellipse_at_center,rgba(16,185,129,0.05)_0%,transparent_70%)] -z-10 pointer-events-none"></div>

    <x-navbar />

    <main id="main" class="grow pt-28 pb-16 page-enter">
        @yield('content')
    </main>

    <x-footer />

</body>
</html>
