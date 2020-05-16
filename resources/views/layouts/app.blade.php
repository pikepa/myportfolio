<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>

    @include('layouts.partials.meta')

    @yield('addstyles')

    @livewireStyles

    @include('layouts.partials.css')

</head>

<body class="font-sans antialiased">
    @include('layouts.partials.nav')

    <div id="app">

        @yield('content')

    </div>

    @livewireScripts

</body>
@include('layouts.partials.scripts')

</html>