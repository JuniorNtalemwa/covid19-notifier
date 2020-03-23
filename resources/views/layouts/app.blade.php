<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Covid19 Notifier | Congo</title>

    <meta http-equiv="X-UA-Compatible" content="IE=11.0000">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-language" content="fr">
    <meta name="language" content="fr">
    <meta name="copyright" content="bernard@devs-cast.com">
    <meta name="author" content="bernard-ng <bernard@devs-cast.com>">
    <meta name="identifier-url" content="https://covid19notifier.devs-cast.com">
    <meta name="keywords" content="coronavirus, covid, congo, africa" lang="fr">
    <meta name="revisit-after" content="7 days">
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="Covid19"/>
    <meta name="twitter:creator" content="@BernardNgandu"/>

    <meta property="og:language" content="fr">
    <meta property="og:site_name" content="Covid19">
    <meta name="description" content="Information sur l'évolution du covid19, plateforme d'alertes et signalement">
    <meta property="og:description" content="Information sur l'évolution du covid19, plateforme d'alertes et signalement">
    <meta property="og:image" content="https://www.countryflags.io/CD/flat/64.png">
    <meta property="og:image:secure_url" content="https://www.countryflags.io/CD/flat/64.png"/>
    <meta property="og:image:type" content="image/jpeg"/>
    <meta property="og:image:width" content="400"/>
    <meta property="og:image:height" content="400"/>
    <meta property="og:image:alt" content="Covid19 - Logo"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://covid19notifier.devs-cast.com">

    <meta name="theme-color" content="#15db95">
    <meta name="msapplication-TileColor" content="#15db95">
    <meta name="msapplication-navbutton-color" content="#15db95">
    <meta name="apple-mobile-web-app-status-bar-style" content="#15db95">
    <link rel="icon" type="image/png" sizes="16x16" href="https://www.countryflags.io/CD/flat/64.png">

    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="bg-black">
        <div class="max-w-5xl mx-auto px-4 sm:px-6">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0 text-white font-bold">
                        <img style="display: inline-block" class="h-10 w-10" src="https://www.countryflags.io/CD/flat/64.png" alt="cd"/>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline">
                            <a href="{{ route('dashboard')  }}"
                               class="ml-4 px-3 py-2 rounded-md text-sm font-medium text-white hover:bg-green-700 focus:outline-none">Dashboard</a>
                            <a href="{{ route('notification.index')  }}"
                               class="ml-4 px-3 py-2 rounded-md text-sm font-medium text-white hover:bg-green-700 focus:outline-none">Notifier</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <header class="bg-white shadow">
        <div class="max-w-5xl mx-auto py-4 px-4 sm:px-6 lg:px-6">
            <h2 class="text-xl font-bold leading-tight text-gray-900">
                Covid19 Notifier
            </h2>
        </div>
    </header>

    <main class="max-w-6xl mx-auto px-4 sm:px-6 mt-10">
        @yield('content')
    </main>
    <footer class='w-full text-gray-600 text-xs text-center mt-5 mb-5'>
        Powered by <a href="https://devs-cast.com" target="_blank">devscast</a> & <a href="https://itot.africa" target="_blank">itotafrica</a>
        <br><a href="https://www.jhu.edu/">Données Provenant de Johns Hopkins University</a>
        <br><a href="#">Congo Digital Innovation</a>
    </footer>
</div>
</body>
</html>
