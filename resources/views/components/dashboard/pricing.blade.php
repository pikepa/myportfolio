<div class="font-bold flex flex-row justify-left ">
    @if ( $product->status === 'For Sale')
    <div class="mr-1">
        <h4 class="my-4">{{ $product->status }} : {{config('userspec.currency')}} {{ $product->retail_price}}</h4>
    </div>
    @elseif ($product->status === 'Sold')
    <div>
        <h4 class="my-4">{{ $product->status }}</h4>
    </div>

    @else
    <div>
        <h4 class="my-4">{{ $product->status }}</h4>
    </div>
    @endif
</div>