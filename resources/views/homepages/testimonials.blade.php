@extends('layouts.app')

@section('title', 'Test')

@section('content')

     @include('layouts.partials.pageheader') 

    <div class="container mx-auto pb-4">
        <div class="text-center text-base">
            <h1 class="p-4 uppercase">READ WHAT OUR FRIENDS SAY</h1>
            <h3 class="p-4 w-2/3 mx-auto text-pink">All of these people have either been part of our previous FFF Challenges, participated in the Group Training sessions or been Personally Trained by Philippa.</h3>
        </div>
        <div class="mt-12 flex justify-around items-center flex-col md:flex-row">
            <div class="flex items-center justify-center">
                <img class="rounded-full h-40 w-40" src="{{URL::asset('images/uploads/DaniBuckingham.png')}}">
            </div>
            <div class="card w-2/3">
                <p>I have been going to the gym on and off for about ten years and had even done some running as well, over the years. However, although I would start off full of enthusiasm, inevitably this would wane and I would be dragging myself to the gym and feeling guilt if I didn't go. My training was boring and monotonous as I didn't know what I was doing. I couldn't really see a lot of changes or even results, and while I wasn't desperately unfit, I certainly wasn't a great advert for going to the gym either. The weights section of the gym scared me and I didn’t venture into that area as I feared that I would gain enormous muscles.</p>Right Block Text
            </div>
        </div>

        <div class="mt-12 flex justify-around items-center flex-col md:flex-row">
            <div class="card w-2/3">
                <p>I have been going to the gym on and off for about ten years and had even done some running as well, over the years. However, although I would start off full of enthusiasm, inevitably this would wane and I would be dragging myself to the gym and feeling guilt if I didn't go. My training was boring and monotonous as I didn't know what I was doing. I couldn't really see a lot of changes or even results, and while I wasn't desperately unfit, I certainly wasn't a great advert for going to the gym either. The weights section of the gym scared me and I didn’t venture into that area as I feared that I would gain enormous muscles.</p>Right Block Text
            </div>
            <div>
                <img class="rounded-full h-40 w-40" src="{{URL::asset('images/uploads/DaniBuckingham.png')}}">
            </div>
        </div>

               <div class="mt-12 flex justify-around items-center flex-col md:flex-row">
            <div class="flex items-center justify-center">
                <img class="rounded-full h-40 w-40" src="{{URL::asset('images/uploads/DaniBuckingham.png')}}">
            </div>
            <div class="card w-2/3">
                <p>I have been going to the gym on and off for about ten years and had even done some running as well, over the years. However, although I would start off full of enthusiasm, inevitably this would wane and I would be dragging myself to the gym and feeling guilt if I didn't go. My training was boring and monotonous as I didn't know what I was doing. I couldn't really see a lot of changes or even results, and while I wasn't desperately unfit, I certainly wasn't a great advert for going to the gym either. The weights section of the gym scared me and I didn’t venture into that area as I feared that I would gain enormous muscles.</p>Right Block Text
            </div>
        </div>


    </div>

@endsection
