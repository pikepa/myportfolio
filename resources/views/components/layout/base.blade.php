<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>

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