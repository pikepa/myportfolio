@extends('layouts.app')

@section('title', 'Edit My Testimonial')

@section('content')

@include('layouts.partials.pageheader')

<div  class="container mx-auto">
    <div class="card w-2/3 mt-12 mx-auto  p-3 px-16 rounded shadow">
        <h1 class="text-2xl font-normal mb-10 text-center">
            My Testimonial
        </h1>

        <form
                method="POST"
                action="{{ $testimonial->path() }}"
        >
            @method('PATCH')

            @include ('testimonials.form', [
                'buttonText' => 'Update'
            ])
        </form>
    </div>
    </div>

@endsection