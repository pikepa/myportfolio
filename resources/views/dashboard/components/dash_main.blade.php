<main class=" font-moli flex flex-1  flex-wrap justify-between -mx-2 px-2 py-4">
 
@for ($i=1;$i<=10;$i++)
    <div class="card mb-2" style=" width:325px">
        <div>
            <img class="w-full rounded-lg" src="images/uploads/Baja_3393.jpg" alt="Sunset in the mountains">

        </div>
        <div class=" text-center">
            <h4 class="p-2">Baja</h4>
        </div>
        <div>
            <p class="mt-4">{{ substr('Worked on this for few months using old newspapers and other recycling stuff. Inspired on a Black Boxfish (Ostracion Meleagris).
                Painted with acrylics and glossy varnish (brand: Amsterdam from Royal Talens).',0,150) }}</p>
        </div>
        <div>
            <h4 class="my-4">Price: Rm 1233.00</h4>
        </div>
    </div>
@endfor
</div>
