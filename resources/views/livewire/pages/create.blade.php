    <div class="rounded-md shadow-sm">

        <label class="block mx-4 pt-2 ">
            <span class="text-gray-700">Page Name</span>
            <input wire:model='name' id='name' type="text" class="form-input mt-1 block w-full" placeholder="Enter the Page name">
            @error('name') <span class="mt-2"> {{ $message }}</span> @enderror

        </label>

        <label class="block mx-4 pt-2">
            <span class="text-gray-700">Page Title</span>
            <input wire:model='title' id='title' type="text" class="form-input mt-1 block w-full" placeholder="Page Title goes here">

            @error('title') <span class="mt-2"> {{ $message }}</span> @enderror
        </label>

        <label class="block mx-4 pt-2">
            <span class="text-gray-700">Featured Image</span>
            <input wire:model='featured_img' id='featured_img' type="text" class="form-input mt-1 block w-full" placeholder="Featured Image Url">

            @error('featured_img') <span class="mt-2"> {{ $message }}</span> @enderror
        </label>

        <label class="block mx-4 pt-2">
            <input wire:model='active' value='unchecked' class="mr-2 leading-tight" type="checkbox">
            <span class="text-sm">
                Active
            </span>
            @error('active') <span class="mt-2"> {{ $message }}</span> @enderror
        </label>

        <div class=" ">
            <button wire:click="add()" class="btn btn-primary">Submit</button>
        </div>

    </div>
