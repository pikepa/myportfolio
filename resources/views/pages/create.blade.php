@extends('layouts.app')

@section('title', 'Create a new Page')

@section('addstyles')
<script src="https://cdn.tiny.cloud/1/jcnwexsl181n0a4hulpm8cvokvvjn83ixz3l9u9yvk65jpw0/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
@endsection

@section('content')

@include('layouts.partials.pageheader')

<div class="container mx-auto">
    <div class="sm:w-2/3 lg:mx-auto bg-card p-6 md:py-12 md:px-16 rounded shadow">
        <h1 class="text-2xl font-normal mb-10 text-center">
            New Page
        </h1>

        <form method="POST" action="/product">
            @include ('pages.form', [
<<<<<<< HEAD
            'page' => new App\Page,
            'buttonText' => 'Save'
=======
                'page' => new App\Models\Page,
                'buttonText' => 'Save'
>>>>>>> 178130564c2a037117bf87ba33025a3ed27edbb6
            ])
        </form>
    </div>
</div>

@endsection
@section('scripts')
<script type="text/javascript">
    tinymce.init({
        selector: 'textarea',
        height: 200,
        toolbar_items_size: 'small',
        plugins: "lists, advlist",

        branding: false
    });
</script>
@endsection