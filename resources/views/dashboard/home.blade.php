@extends('layouts.app')

@section('title',  'Dashboard')

@section('content')

@include('layouts.partials.pageheader')

    <div class="container mx-auto pb-4">
         <div class="flex justify-between">
             @include('dashboard.components.dash_left')

             @include('dashboard.components.dash_main')

             @include('dashboard.components.dash_right')
         </div>
    </div>

@endsection