
<div>
    <!-- <main class=" flex flex-1  flex-wrap justify-between -mx-2 px-2 py-4"> -->
    <div class="py-2">
        {!! $products->links('pagination::tailwind')!!}
    </div>
    <main class="grid md:grid-cols-3 py-2">

        @forelse ($products as $product)
        <div class="flex flex-col card  mb-2 " >
            <span>
                <a href="{{ $url = action('ProductController@show', $product->id) }}">

                @if(isset($product->featured_img))
                <div class="mx-auto text-center">
                    <img class="rounded-lg object-cover object-centre w-full" src={{ $product->disp_featured_img() }} style="height:325px" alt="<{{ $product->title }}>">
                </div>
                @endif
                <div class=" card mt-2 text-center">
                    <h1 class="text-xl font-semibold p-2">{{ $product->title }}</h1>
                </div>
                <div class="flex flex-col justify-between ">
                    <div class="flex-1 h-auto ">
                        <p class=" mt-4">{{ substr($product->description ,0,100) }} ...
                            <br>
                            <a class="text-blue-700 font-extrabold no-underline" href="{{ $url = action('ProductController@show', $product->id) }}">More <i class="fas fa-angle-double-right"></i></a></p>
                    </div>

                    <div class="">
                        <x-dashboard.pricing :product="$product" />
                    </div>

                    <div class="flex justify-between">
                        <div>
                            <p>Published: {{ $product->published_date }}</p>
                        </div>
                        <div>
                            <livewire:product.display-likes :likes='$product->likes' :prodid='$product->id' />
                        </div>
                    </div>
                </div>
                </a>
            </span>

        </div>
        @empty
<div class="ml-48">
<div class="font-2xl font-semibold"> 
                No Pictures in this category
            </div>
</div>
        @endforelse
    </main>

</div>