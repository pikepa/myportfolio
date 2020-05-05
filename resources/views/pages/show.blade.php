@extends('layouts.app')

@section('title', 'The Artist')

@section('addstyles')
<script src="{{url('js/dropzone.js')}}"></script>
<link rel="stylesheet" href="{{url('css/dropzone.css')}}">
@endsection

@section('content')

@include('layouts.partials.pageheader')

<div class="container mx-auto pb-4">

    <div class="flex flex-col md:flex-row justify-between">

        @include('dashboard.components.dash_left')

        <div class="container mx-auto pb-4">
            <div class="text-center">
                <h1 class="font-bold text-3xl m-2 ">{{$page->title}}</h1>
            </div>
            <div class="flex flex-col md:flex-row ">
                <div class="card mx-auto px-4 mx-2">
                    <img class="rounded-lg border-white border-8" src="{{URL::asset($page->featured_img)}}" width=350px alt="Profile Pic">
                </div>

                <div class="flex flex-col flex-1  items-center ml-4 ">
                    <div class="text-base p-4">
                        <div class="text-justify text-lg">
                            {{$page->main_content}}
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            @auth
            <div class="my-4 w-2/3" id="dropzone">
                <form method="post" action="/images/upload" enctype="multipart/form-data" class="dropzone card" id="addPhotosForm">
                    {{csrf_field()}}
                    <input type="hidden" name="page_id" value={{$page->id}}>

                </form>
            </div>
            @endauth
        </div>

    </div>
</div>

@endsection


@section('scripts')
<script type="text/javascript">
    Dropzone.options.addPhotosForm = {
        paramName: 'image',
        maxFilesize: 4,
        timeout: 0,
        acceptedFiles: '.jpg, .JPG, .JPEG, .jpeg, .png, .bmp',
        init: function() {
            this.on('success', function() {
                if (this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0) {
                    location.reload();
                }
            });
        }
    };
</script>


@endsection