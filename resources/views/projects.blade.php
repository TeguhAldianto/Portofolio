@extends('layouts.app')

@section('content')
    <section class="pt-24 pb-8 md:pb-12">
        <div class="site-container">
            <div class="flex items-center gap-2 text-sm text-zinc-400 dark:text-zinc-500 mb-3" data-aos="fade-up">
                <a href="/" class="hover:text-primary transition-colors">Home</a>
                <span class="text-zinc-300 dark:text-zinc-600">/</span>
                <span class="text-primary font-medium">Projects</span>
            </div>
        </div>
    </section>
    <x-projects />
@endsection
