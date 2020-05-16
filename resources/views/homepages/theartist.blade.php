@extends('layouts.app')

@section('title', 'The Artist')

@section('content')

@include('layouts.partials.pageheader')

<div class="container mx-auto pb-4">

    <div class="flex flex-col md:flex-row justify-between">

        @include('dashboard.components.dash_left')

        <div class="container mx-auto pb-4">
            <div class="text-center">
                <h1 class="font-bold text-3xl m-2 ">Hellen Dutch</h1>
            </div>
            <div class="flex flex-col md:flex-row ">
                <div class="card mx-auto px-4 mx-2">
                    <img class="rounded-lg border-white border-8" src="{{URL::asset('images/8_tijger_met_mij.JPG')}}" width=350px alt="Profile Pic">
                </div>

                <div class="flex flex-col flex-1  items-center ml-4 ">

                    @livewire('abouttext')

                </div>

            </div>
        </div>

    </div>
</div>

@endsection