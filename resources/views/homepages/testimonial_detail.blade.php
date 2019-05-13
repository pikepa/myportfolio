@extends('layouts.app')

@section('title', 'Testimonials')

@section('content')

     @include('layouts.partials.pageheader') 
    <div class="container mx-auto pb-4">
        <div class="mt-12 flex justify-around items-center flex-col md:flex-row">
            <div class="flex items-center justify-center">
                <img class="p-4 rounded-full h-40 w-40" width=140px src="{{URL::asset('images/uploads/'. $testimonial->img_name)}}">
            </div>
            <div class="card w-2/3">
                <div class="mb-4">
                    <p class="text-pink uppercase text-xl pb-2"> {{ $testimonial->client_name }}</p>
                    <p class="text-grey pb-2"> {{ $testimonial->country }}</p>
                    <p> {!! nl2br($testimonial->story) !!}</p>
                </div>
                <div class="flex ">         
                    <div class="flex-1 text-sm">
                        <p><a class="no-underline"  href="{{ $url = action('TestimonialController@index') }}" ><i class="fas fa-backward"></i> Back</a></p>
                    </div>
                    @auth
                        <div class="text-sm mr-4">
                            <p><a class="no-underline"  href="{{ $url = action('TestimonialController@edit', $testimonial->id) }}" ><i class="far fa-edit"></i> Edit</a></p>
                        </div>
                        <div class="text-sm">
                            <form method="POST" action="{{ $testimonial->path() }}" class="text-right">
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
