<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset(mix('public.css', 'assets')) }}">
    <link rel="stylesheet" href="{{ route('front.theme') }}">

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    @stack('preload')

    {{-- Scripts --}}
    <script src="{{ asset(mix('public.js', 'assets')) }}" defer></script>
    @stack('scripts')

    {!! SEO::generate(minify: true) !!}
</head>

<body class="flex flex-col min-h-screen antialiased">
    <x-site.header />

    <x-site.notice />

    <main class="flex-1">
        {{ $slot }}
    </main>

    <x-site.footer />
</body>

</html>
