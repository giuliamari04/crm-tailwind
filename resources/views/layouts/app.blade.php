<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        {{-- <script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-LMRL06STSS&amp;cx=c&amp;_slc=1"></script>
        <script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-ZF0KSVVM14&amp;cx=c&amp;_slc=1"></script>
        <script type="text/javascript" async="" src="https://analytics.tiktok.com/i18n/pixel/events.js?sdkid=CC6UAQBC77U7GVKHLC4G&amp;lib=ttq"></script>
        <script type="text/javascript" async="" src="https://snap.licdn.com/li.lms-analytics/insight.min.js"></script>
        <script type="text/javascript" async="" src="https://s.pinimg.com/ct/core.js"></script>
        <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
        <script type="text/javascript" async="" src="https://www.google-analytics.com/gtm/js?id=GTM-K9BGS8K&amp;cid=1082848774.1715696542&amp;aip=true"></script>
        <script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-NKDMSK6"></script>
        <script async="" src="https://www.google-analytics.com/analytics.js"></script> --}}


        <script defer="" data-site="demos.creative-tim.com" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
        <script type="module" crossorigin="" src="/material-tailwind-dashboard-react/assets/index-7892861d.js"></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
             @include('layouts.sidebar')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
