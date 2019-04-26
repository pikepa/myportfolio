<nav class="bg-menu shadow py-2">
        <div class="container mx-auto px-6 md:px-0">
            <div class="flex  items-center ">
                <a class="-mt-3" href="{{ url('/') }}"> <img  src="{{URL::asset('images/FFF-logo-RGB-Reverse.png')}}" height='40' alt="Profile Pic"></a>
                <div class="flex ">
                    </a>
                    <a href="{{ url('/aboutme') }}" class=" ml-6 text-white text-xl font-semibold no-underline">
                        About Me
                    </a>   
                </div>                   
                    @include('layouts.partials.program_menu') 
                <div>
                    <a href="{{ url('/testimonials') }}" class="ml-4 text-white text-xl font-semibold  no-underline">
                        Testimonials
                    </a>                    
                </div>

                <div class=" flex-1 text-right">
                    @guest
                        <a class="no-underline hover:underline text-white font-semibold text-xl p-3" href="{{ route('login') }}">{{ __('Login') }}</a>
                        <a class="no-underline hover:underline text-pink text-lg p-3" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @else
                        <a href="{{ url('/home') }}" class="mr-4 text-white text-xl font-semibold  no-underline">
                            Dashboard
                        </a>
                        <span class="text-white font-semibold text-xl pr-4">{{ Auth::user()->name }}</span>

                        <a href="{{ route('logout') }}"
                           class="no-underline hover:underline font-semibold text-pink text-xl p-3"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </div>
        </div>
    </div>
</nav>