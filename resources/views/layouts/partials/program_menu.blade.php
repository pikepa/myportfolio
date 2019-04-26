{{-- This Partial forms the dropdown for the menu (nav.blade.php) item Our Program
      written using Tailwind Css. --}}
<div class="relative group">
  <div class="ml-4 flex items-center cursor-pointer py-1">
    <div class=" p-2 text-white text-xl font-semibold no-underline">
        <span>Our Program</span>
     </div>
  </div>
  <div class="items-center absolute border border-t-0 bg-white invisible group-hover:visible">
          <ul class="list-reset">
            <li><a href="{{ url('/program/how_it_works') }}" class="no-underline text-lg font-semibold px-4 py-2 block text-black hover:bg-grey-light">How it Works</a></li>
            <li><a href="{{ url('/program/nutrition') }}" class="no-underline text-lg font-semibold px-4 py-2 block text-black hover:bg-grey-light">Nutrition</a></li>
            <li><a href="{{ url('/program/motivation') }}" class="no-underline text-lg font-semibold px-4 py-2 block text-black hover:bg-grey-light">Motivation</a></li>
            <li><a href="{{ url('/program/community') }}" class="no-underline text-lg font-semibold px-4 py-2 block text-black hover:bg-grey-light">Community</a></li>
          </ul>
  </div>
</div>