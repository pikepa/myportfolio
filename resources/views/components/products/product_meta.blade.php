<meta property="og:site_name" content="{{env('APP_NAME')}}.">
<meta property="og:title" content="{{env('APP_NAME')}}: {{$product->title}}">
<meta property="og:description" content="{!! nl2br($product->description) !!}">
<meta property="og:image" content="{{URL::asset( $product->featured_img)}}">
<meta property="og:url" content="{{ env('APP_URL') }}{{$product->path()}}">
<meta name="twitter:card" content="summary_large_image">
<title>{{env('APP_NAME')}} :{{$product->title}}</title>