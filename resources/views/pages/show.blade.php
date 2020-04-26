@extends('layouts.app')

@section('title', 'Create a new Page')

@section('content')

@include('layouts.partials.pageheader')

<div class="container mx-auto">
    <div class="sm:w-2/3 lg:mx-auto bg-card p-6 md:py-12 md:px-16 rounded shadow">
        <h1 class="text-2xl font-normal mb-10 text-center">
            {{$page->title}}
        </h1>

    </div>
</div>

@endsection