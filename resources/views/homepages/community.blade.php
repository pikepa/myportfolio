@extends('layouts.app')

@section('title', 'Challenge Information')

@section('content')

@include('layouts.partials.pageheader')

    <div class="container mx-auto pb-4">
        <div class="md:flex-row flex flex-col items-center">
            <div class="mt-8 card mx-4 md:w-1/2">
                <h1 class="pb-4 text-pink">Community</h1>    
                <div class="text-justify">
                    <p class="pb-2 text-lg">Changing habits can be hard on your own and making those changes stick is so much easier (and a lot more fun) if you have support.  Our FitFastnFab community is a huge part of each FFF member's success. Be it through our website and social media or at challenge meet ups and functions. Wherever you are, FFF have got your back!</p>
                    <p class="pb-2 text-lg">We encourage FFF'ers to get together and help each other out. FFF'ers have formed great friendships that have started through sharing a similar goal, working out together and achieving together.</p>
                    <p class="pb-2 text-lg">Many FFF'ers come together for events throughout the year – from our  FitFastnFabfunctions held in Brunei, festive themed workouts, to fun runs and organised races around the world. Climbing Malaysia's highest mountain Mt Kinabalu has been many a FFF'ers goal which they have conquered.</p>
                    <p class="pb-2 text-lg">The FFF'ers are an awesome bunch of inspiring, butt-kicking people! There are big goals that have been conquered, whether it be weight loss, running fun runs, races, marathons and climbing mountains or improving their health for themselves and their families. They’ve done it.  </p>
                    <p class="pb-2 text-lg">One of the best ways to understand the FFF community is to ask the members so grab a cup of coffee and check out what they have to say over on the Testimonials page. I know they'll inspire you as much as they do me.</p>
                </div>
            </div>

            <div class="mt-8 text-center flex-1 mx-auto px-4 ">
               <img class=" rounded-lg " src="{{URL::asset('images/community_info.jpg')}}" width=75%' alt="Profile Pic">
            </div>
            
        </div>
    </div>

@endsection
