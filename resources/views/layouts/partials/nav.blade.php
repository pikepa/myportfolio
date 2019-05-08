<nav class="bg-menu shadow py-2">
        <div class="container mx-auto px-6 md:px-0">
            <div class="flex  justify-end items-center">
                <a class="-mt-2" href="{{ url('/') }}"> <img  src="{{URL::asset('images/FFF-logo-RGB-Reverse.png')}}" height='40' alt="Profile Pic"></a>
                <div class="flex ">
                    <a href="{{ url('/aboutme') }}" class=" ml-6 text-white text-xl font-semibold no-underline">
                        About Me
                    </a>   
                </div>                   
                    @include('layouts.partials.dropdowns.program_menu') 
                <div>
                    <a href="{{ url('/testimonials') }}" class="ml-4 text-white text-xl font-semibold  no-underline">
                        Testimonials
                    </a>                    
                </div>

                <div class="ml-auto mr-4">
                    @guest
                        <div class="text-right">
                            <a class="no-underline hover:underline text-white font-semibold text-xl p-3" href="{{ route('login') }}">{{ __('Login') }}</a>
                            <a class="no-underline hover:underline text-pink text-lg p-3" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </div>           
                    @else
                            @include('layouts.partials.dropdowns.logged_in_menu') 
                    @endguest
                </div>
            </div>
        </div>
</nav>