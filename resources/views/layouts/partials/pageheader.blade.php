<div class="bg-gray-200">
    <div class="container mx-auto md:px-0 px-4">
        <div class="flex text-center md:text-left  py-2  text-xl">
            @if (\Route::current()->getName() == 'bycategory')
            <div class="-mb-2 pb-2 font-bold  min-w-0 border-b-4 border-pink-600">
                    <p class="text-grey-dark"> Artwork By Category :- {{ $cat->category }}</p>
            </div>
            @else
            <div class="-mb-2 pb-2 font-bold  min-w-0 border-b-4 border-pink-600">
                    <p class="text-grey-dark">  @yield('title') </p>
            </div>
            @endif
        </div>
    </div>
</div>