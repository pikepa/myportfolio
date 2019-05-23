<main class=" flex flex-1  flex-wrap justify-between -mx-2 px-2 py-4">
 
@foreach ($products as $product)
    <div class="flex flex-col card  mb-2 " style=" width:325px">
        <div class="flex-1 ">
            <div class="mx-auto text-center">
                 <img class="w-auto rounded-lg" src={{ $product->featured_img }} style='height:325px' alt="Sunset in the mountains">
            </div>
        </div>
        <div class=" card mt-2 text-center">
            <h1 class="text-xl font-semibold p-2">{{ $product->title }}</h1>
        </div>
        <div>
            <p class="mt-4">{{ substr($product->description ,0,150) }}  
            <a class="text-base no-underline" href="{{ $url = action('ProductController@show', ['id' => $product->id]) }}" >... more <i class="fas fa-angle-double-right"></i></a></p>
        </div>
        <div class="flex flex-row justify-between">
            @if ( $product->status === 'For Sale')
                <div>
                    <h4 class="my-4">{{ $product->status }}</h4>
                </div> 
                    <div>
                        <h4 class="my-4">Rm {{ number_format($product->price/100,2,'.', ',')}}</h4>
                    </div> 

            @elseif ($product->status === 'Sold')
                <div>
                    <h4 class="my-4">{{ $product->status }}</h4>
                </div> 
                <div>
                    <h4 class=" line-through my-4">Rm {{ number_format($product->price/100,2,'.', ',')}}</h4>
                </div>             
            @else
                <div>
                    <h4 class="my-4">{{ $product->status }}</h4>
                </div> 
            @endif
            
            
        </div>
     
    </div>
@endforeach


</main>