@extends('layouts.app')

@section('title', 'Piece Details')

@section('content')

     @include('layouts.partials.pageheader') 
    <div class="container mx-auto pb-4">
        <div class="mt-12 flex justify-around items-center flex-col">
            <div class="max-w-md card mb-4 w-2/3 flex items-center justify-center">
                <img class="p-4  " src="{{URL::asset( $product->featured_img)}}">
            </div>
            <div class="card w-2/3">
                <div class="mb-4">
                    <h1 class=" font-semibold text-2xl text-center text-base-700 pb-2"> {{ $product->title }}</h1>
                    <p class="pb-4"> {!! nl2br($product->description) !!}</p>
                    <h3 class="text-gray pb-2"> Rm {{ number_format($product->price/100,2,'.', ',')}}</h3>

                </div>
                <div class="flex ">         
                    <div class="flex-1 text-sm">
                        <p><a class="no-underline"  href="{{ $url = action('ProductController@index') }}" ><i class="fas fa-backward"></i> Back</a></p>
                    </div>
                    @auth
                        <div class="text-sm mr-4">
                            <p><a class="no-underline"  href="{{ $url = action('ProductController@edit', $product->id) }}" ><i class="far fa-edit"></i> Edit</a></p>
                        </div>
                        <div class="text-sm">
                            <form method="POST" action="{{ $product->path() }}" class="text-right">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="text-sm"><i class="far fa-trash-alt"></i> Delete</button>
                            </form>
                        </div>
                    @endauth
                </div>
                 
            </div>
        </div> 

    </div>

@endsection
