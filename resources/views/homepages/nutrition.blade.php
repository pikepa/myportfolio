@extends('layouts.app')

@section('title', 'Challenge Information')

@section('content')

@include('layouts.partials.pageheader')

    <div class="container mx-auto pb-4">
        <div class="md:flex-row flex flex-col items-center">
            <div class="mt-8 card mx-4 md:w-1/2">
                <h1 class="pb-4 text-pink">Nutrition</h1>    
                <div class="text-justify">
                    <p class="pb-2 text-lg">Flustered as to where to start with your nutrition needs?&nbsp;&nbsp;FFF is here to help!&nbsp;&nbsp;We have done the hard work for you.&nbsp;&nbsp;We have scoured recipe books and online sites as well as created some FFF specific meals and put them together in a menu plan for you to follow.</p>
                    <p class="pb-2 text-lg">The daily menu plan is calorie controlled to help you achieve your weight loss goals.&nbsp;&nbsp;There's no secret.&nbsp;&nbsp;Successful weight loss comes down to consuming less calories than you are expending.</p>
                    <p class="pb-2 text-lg">At FitFastnFab we don't believe in fad diets, nor completely cutting out food groups, eveything can be enjoyed in moderation.&nbsp;&nbsp;That being said, chips, soft drinks & sodas, cakes and cookies are NOT whole food groups, they can be cut!</p>
                    <p class="pb-2 text-lg">Cut the crap and enjoy good food all in moderation to achieve your health and fitness goals.</p>
                    <p class="pb-2 text-center text-lg"><strong>"If I can do it,  you can too!"</strong></p><br>
                    <p class="text-justified" style="font-size:80%;">*I am not a registered dietitian nor nutritionist.&nbsp;&nbsp;All information provided is based on what I have used for myself as well as many other FFF'ers.&nbsp;&nbsp;These menu plans are of a general nature and NOT specific so if you have any special requirements or dietary needs, I do recommend seeing a specialist.</p>
                </div>
            </div>

            <div class="mt-8 text-center flex-1 mx-auto px-4 ">
               <img class=" rounded-lg " src="{{URL::asset('images/nutrition_info.jpg')}}" width='75%' alt="Profile Pic">
            </div>
            
        </div>
    </div>

@endsection
