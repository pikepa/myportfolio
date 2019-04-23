<nav class="bg-menu shadow py-6">
        <div class="container mx-auto px-6 md:px-0">
            <div class="flex items-center justify-center">
                <div class="mr-6">
                    <a href="{{ url('/') }}" class="text-xl font-semibold text-pink no-underline">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <a href="{{ url('/aboutme') }}" class="ml-8 text-white text-xl font-semibold no-underline">
                        About Me
                    </a>                        
                    <a href="{{ url('/testimonials') }}" class="ml-8 text-white text-xl font-semibold  no-underline">
                        Testimonials
                    </a>
                </div>
            <div class="flex-1 text-right">
                @guest
                    <a class="no-underline hover:underline text-pink text-sm p-3" href="{{ route('login') }}">{{ __('Login') }}</a>
                    <a class="no-underline hover:underline text-pink text-sm p-3" href="{{ route('register') }}">{{ __('Register') }}</a>
                @else
                    <span class="text-white  text-sm pr-4">{{ Auth::user()->name }}</span>

                    <a href="{{ route('logout') }}"
                       class="no-underline hover:underline text-white text-sm p-3"
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