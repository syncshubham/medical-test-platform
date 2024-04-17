@extends('authenticatedviews.layout')
@section('content')
   <head>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <style>
        .header .has-arrow .dropdown-toggle:after {
            vertical-align: 20px;
        }
        .user-img{
            margin-top: 14px;
        }
        .header .header-left .logo img{
            margin-top: 10px;
        }
        .header-left .logo.logo-small{
            margin-top: 5px;
        }
    </style>
    <body class="font-sans antialiased page-wrapper">
        <div class="min-h-screen bg-gray-100">
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
@endsection