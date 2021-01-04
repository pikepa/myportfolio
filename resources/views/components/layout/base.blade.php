<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <!-- Fathom - beautiful, simple website analytics -->
    <script src="https://cdn.usefathom.com/script.js" data-site="UQLNUHGV" defer></script>
    <!-- / Fathom -->
    @include('layouts.partials.meta')

    <title>HellenDutch - @yield('title')</title>

    @yield('og_meta')

    @yield('addstyles')

    @livewireStyles

    @include('layouts.partials.css')

</head>

<body class="font-sans antialiased">

    <x-layout.header />

    <div>

        {{ $slot }}

    </div>

    @livewireScripts

</body>
@include('layouts.partials.scripts')

</html>