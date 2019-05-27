<div class="font-bold flex">
            @if ( $product->status === 'For Sale')
                    <div class="mr-1">
                        <h4 class="my-4">{{ $product->status }} :-</h4>
                    </div> 
                    <div>
                        <h4 class="my-4">RM {{ number_format($product->price/100,2,'.', ',')}}</h4>
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