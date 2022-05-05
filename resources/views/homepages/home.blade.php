<x-layout.app>

    @section('og_meta')
    <meta property="og:site_name" content="{{env('APP_NAME')}}.">
    <meta property="og:title" content="{{env('APP_NAME')}} : Home">
    <meta property="og:description" content="{{env('APP_SUB_NAME')}}">
    <meta property="og:image" content="https://d32wdolnlcperg.cloudfront.net/172/IMG_7029.JPG">
    <meta property="og:url" content="{{env('APP_URL')}}">
    <meta name="twitter:card" content="summary_large_image">
    <title>{{env('APP_NAME')}} : Home</title>
    @endsection


    @section('title', 'Home')


    <x-layout.pageheader  :cat="$cat" />

    <div class="container mx-auto pb-4">
        <div class="flex flex-col md:flex-row justify-between">
            <x-layout.dash-left />

            <x-dashboard.dash_main :products='$products' />

        </div>
    </div>
</x-layout.app>