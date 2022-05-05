<nav class="sticky w-full bg-green-900 shadow py-2">
    <div class="container mx-auto px-6 md:px-0">
        <div class="font-muli text-gray-200 flex flex-col justify-end items-center"> 
            <h1 class="font-bold text-3xl">{{env('APP_NAME')}}
                @if(env('ARTIST_NAME') !== '') - {{env('ARTIST_NAME')}} @endif</h1>
            <h4 class='font-medium text-lg  text-center'>{{env('APP_SUB_NAME')}}</h4>
        </div>
    </div>
</nav>