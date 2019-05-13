@extends('layouts.app')

@section('title', 'The Artist')

@section('content')

@include('layouts.partials.pageheader')

    <div class="container mx-auto pb-4">

         <div class="flex flex-col md:flex-row justify-between">

            @include('dashboard.components.dash_left')
            
            <div class="container mx-auto pb-4">
                <div class="text-center">
                    <h1 class="m-4 uppercase">Hellen Dutch</h1>
                </div>
                <div class="flex flex-col md:flex-row ">
                    <div class="card mx-auto px-4 mx-2">
                       <img class="rounded-lg border-white border-8" src="{{URL::asset('images/aboutme.jpg')}}" width=400px  alt="Profile Pic">
                    </div>

                    <div class="flex flex-col flex-1 card items-center m-4 md:m-0">
                        <div class="text-base p-4">
                            <div class="text-justify">
                                <p class="pb-2">Hellen is a Dutch lady who came to live in Borneo in early 2011. </p>
                                <p class="pb-2">Coming from a hectic job back in Holland (her home country), which consumed all her time, she finally found time in Borneo to explore her long lost hobbies making paintings & sculptures. Living in Sabah and exploring the underwater world inspired her and shows in a lot of her work that makes her “grow wings *)”.</p>
                                <p class="pb-2">With a degree in In-house Architecture she loves to make objects to show around the house. One of her projects is working with paper (like old newspapers, paper pulp and paper clay) and recycled materials to create sculptures.</p>
                                <p class="pb-2"></p>
                                <p class="pb-2">* PLEASE NOTE THAT THE WEBSITE NAME “GROWING WINGS” TO THE ARTIST NAME “HELLEN DUTCH ART</p>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

         </div>
    </div>

@endsection
