@extends('layouts.app')

@section('og_meta')
<meta property="og:site_name" content="Hellen Dutch Art.">
    <meta property="og:title" content="Hellen Dutch Art : Home">
    <meta property="og:description" content="Contemporary expressionist: Paintings, mixed media & paper Sculptures from Borneo">
    <meta property="og:image" content="https://d32wdolnlcperg.cloudfront.net/172/IMG_7029.JPG">
    <meta property="og:url" content="https://hellendutch.art">
    <meta name="twitter:card" content="summary_large_image">
@endsection

@section('title', 'Home')

@section('content')
@include('layouts.partials.pageheader')

<div class="container mx-auto pb-4">
    <div class="flex flex-col md:flex-row justify-between">
        <x-layout.dash_left />

        @include('dashboard.components.dash_main')

    </div>

</div>

@endsection