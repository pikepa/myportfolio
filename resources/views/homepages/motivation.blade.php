@extends('layouts.app')

@section('title', 'Challenge Information')

@section('content')

@include('layouts.partials.pageheader')

    <div class="container mx-auto pb-4">
        <div class="md:flex-row flex flex-col items-center">
            <div class="mt-8 card mx-4 md:w-1/2">
                <h1 class="pb-4 text-pink">Motivation</h1>    
                <div class="text-justify">
                    <p class="pb-2 text-lg">There's no excuse!&nbsp;&nbsp;We start and finish each and every challenge together.&nbsp;&nbsp;By doing this we create a <strong><em>FitFastnFab (FFF)  </em></strong> &nbsp;family and generate an amazing community of "Fit Fast Fabbers!" (FFF'ers).&nbsp;&nbsp;You become accountable not only to yourself but your other FFF'ers. </p>
                    <p class="pb-2 text-lg">You will have access to a private Facebook group available only to challenge participants; motivation and mindset help along the way; access to myself and other trainers; web support; mini challenges and of course different <strong><em>FFF</em></strong> &nbsp;events and celebrations.</p>
                    <p class="pb-2 text-lg">We believe by working together and assisting each other along the way it will lead to every FFF'er not only setting big goals, but conquering them.&nbsp;&nbsp;These wins and accomplishments need to be celebrated and are a big part of <strong><em>FFF</em></strong> &nbsp; culture.</p>
                </div>
            </div>

            <div class="mt-8 text-center flex-1 mx-auto px-4 ">
               <img class=" rounded-lg " src="{{URL::asset('images/motivation_info.jpg')}}" width=50%' alt="Profile Pic">
            </div>
            
        </div>
    </div>

@endsection
