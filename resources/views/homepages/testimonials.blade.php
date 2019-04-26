@extends('layouts.app')

@section('title', 'Testimonials')

@section('content')

     @include('layouts.partials.pageheader') 
    <div class="container mx-auto pb-4">
        <div class="text-center text-base">
            <h1 class="p-4 uppercase">READ WHAT OUR FRIENDS SAY</h1>
            <h3 class="p-4 w-2/3 mx-auto text-pink">All of these people have either been part of our previous FFF Challenges, participated in the Group Training sessions or been Personally Trained by Philippa.</h3>
        </div>
        @foreach($testimonials as $testimonial)
            @if($loop->iteration  % 2 !== 0)
                <div class="mt-12 flex justify-around items-center flex-col md:flex-row">
                    <div class="flex items-center justify-center">
                        <img class="p-4 rounded-full h-40 w-40" width=140px src="{{URL::asset('images/uploads/DaniBuckingham.png')}}">
                    </div>
                    <div class="card w-2/3">
                        <p class="text-pink uppercase text-xl pb-2"> {{ $testimonial->client_name }}</p>
                        <p class="text-grey pb-2"> {{ $testimonial->country }}</p>
                        <p> {{ substr(nl2br($testimonial->story), 0, 420) }}
                            <a class="no-underline" href="{{ $url = action('TestimonialController@show', ['id' => $testimonial->id]) }}" >...more...</a></p>
                    </div>
                </div> 
            @else
                    <div class="mt-12 flex justify-around items-center flex-col md:flex-row">
                    <div class="card w-2/3">
                        <p class="text-pink  text-right uppercase text-xl pb-2"> {{ $testimonial->client_name }}</p>
                        <p class="text-grey text-right pb-2"> {{ $testimonial->country }}</p>
                        <p> {{ substr(nl2br($testimonial->story), 0, 420) }}
                            <a class="no-underline" href="{{ $url = action('TestimonialController@show', ['id' => $testimonial->id]) }}" >...more...</a></p>
                    </div>
                    <div class="flex items-center justify-center">
                        <img class="rounded-full h-40 w-40" width=140px src="{{URL::asset('images/uploads/TimBuckingham.png')}}">
                    </div>
                </div> 
            @endif

        @endforeach

    </div>

@endsection
