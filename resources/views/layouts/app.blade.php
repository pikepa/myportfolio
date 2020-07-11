<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>

    @include('layouts.partials.meta')

    @yield('og_meta')
    <meta property="og:site_name" content="Hellen Dutch Art.">
    <meta property="og:title" content="Hellen Dutch Art : Home">
    <meta property="og:description" content="Contemporary expressionist: Paintings, mixed media & paper Sculptures from Borneo">
    <meta property="og:image" content="https://hellendutch7.test/images/172">
    <meta property="og:url" content="https://hellendutch.art">
    <meta name="twitter:card" content="summary_large_image">
    @yield('addstyles')

    @livewireStyles

    @include('layouts.partials.css')

</head>

<body class="font-sans antialiased">

    <x-layout.header />

    <div id="app">

        @yield('content')

    </div>

    @livewireScripts

</body>
@include('layouts.partials.scripts')

</html>