<div>
    <div class="text-base p-4">
        <div class="text-justify text-lg">
            @foreach ($paras as $para)
                <p class="pb-2">{{ $para->para_content}}</p>
            @endforeach
            <br>
        </div>
    </div>
</div>