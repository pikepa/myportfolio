@extends('layouts.app')

@section('title', 'Challenge Information')

@section('content')

@include('layouts.partials.pageheader')

    <div class="container mx-auto pb-4">
        <div class="flex flex-col md:flex-row items-center">
            <div class="mt-8 card mx-4 md:w-1/2">
                <h1 class="pb-4 text-pink">How it Works</h1>    
                <div class="text-justify">
                    <p class="pb-2 text-lg">To be Fit, Fast n Fabulous takes time, planning and organisation. Our goal is to make your life as easy as possible by doing some of the hard work for you.</p>
                    <p class="pb-2 text-lg"> We help you  identify your dreams and goals and then assist with how to make it happen; provide you with great menu plans with easy to prepare recipes that we have sourced for you, as well as giving you a shopping list each week to cut down on the preparation and planning phase. </p>
                    <p class="pb-2 text-lg"> You will get your workouts provided online, so whether you wish to do it with friends in a group, or in your lounge room once the kids are in bed... you can! The flexibility is there for you.</p>
                    <p class="pb-2 text-lg">Finally, you will receive our support the whole way through. By starting and finishing together as a family, we generate an amazing community of "Fit Fast Fabbers!" (FFF'ers).</p>
                    <p class="pb-2 text-lg">Our private Facebook group helps provide:-</p>
     
                    <ul class="text-lg">
                        <li>motivation and mindset help</li>
                        <li>access to myself and other trainers</li>
                        <li>web based progran support</li>
                        <li>mini challenges</li>
                        <li>and of course events and celebrations post challenge.</li>
                    </ul> 
                </div>
            </div>

            <div class="mt-8 text-center flex-1 mx-auto px-4 ">
               <img class=" rounded-lg " src="{{URL::asset('images/Body-Blitz-Full-Workout-300x300.jpg')}}" width='75%' alt="Profile Pic">
            </div>
            
        </div>
    </div>
                     
@endsection
