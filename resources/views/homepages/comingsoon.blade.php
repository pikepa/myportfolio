<x-layout.app>

    @section('title', 'Why Borneo')

    <x-layout.pageheader />

    <div class="container mx-auto pb-4">

        <div class="flex flex-col md:flex-row justify-between">

            @include('dashboard.components.dash_left')

            <div class="flex flex-col container mx-auto pb-4">
                <div class="text-center">
                    <h1 class="font-bold text-3xl m-2 ">New Feature Coming Soon</h1>
                </div>
                <div class=" mb-4  mx-auto ">
                    <img class="  " src="{{URL::asset( '/images/smiley.jpg')}}">
                </div>
            </div>

        </div>
    </div>

</x-layout.app>