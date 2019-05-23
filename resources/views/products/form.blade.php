@csrf

@include ('errors')

<div class="field mb-6">
    <label class="label text-base mb-2 block" for="title">Display Name</label>

    <div class="control">
        <input
                type="text"
                class="input bg-transparent border border-muted-light rounded p-2 text-base w-full"
                name="title"
                placeholder="Enter the name of the piece."
                required
                value="{{ $product->title }}"
                >
                
    </div>
</div>

<div class="field mb-6">
    <label class="label text-base mb-2 block" for="description">Artwork Description</label>

    <div class="control">
            <textarea
                name="description"
                rows="10"
                class="textarea bg-transparent border border-muted-light rounded p-2 text-base w-full"
                placeholder="Use as much space as required for the description. The first 200 characters will appear on the front screen."
                required>{{ $product->description }}
            </textarea>
    </div>
</div>

<div class="field mb-6">
    <label class="label text-base mb-2 block" for="price">Price</label>

    <div class="control">
        <input
                type="text"
                class="input bg-transparent border border-muted-light rounded p-2 text-base w-full"
                name="price"
                placeholder="Enter the price of the piece, if for sale."
                required
                value="{{ $product->price }}"
                >
    </div>
</div>

<div class="field mb-6">
    <label class="label text-base mb-2 block" for="status">Status</label>

    <div class="control">
        <input
                type="text"
                class="input bg-transparent border border-muted-light rounded p-2 text-base w-full"
                name="status"
                placeholder="Enter the status of this piece"
                required
                value="{{ $product->status }}"
                >
    </div>
</div>

<div class="field mb-6">
    <label class="label text-base mb-2 block" for="status">Status</label>
    <div class="flex">
        <div class="inline-block relative">
          <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
            <option>For Sale</option>
            <option>Sold</option>
            <option>Not for Sale</option>
          </select>
          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
          </div>
        </div>
    </div>
</div>

    
<div class="flex w-full items-center ">
    <label class="w-64 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-white">
        <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
        </svg>
        <span class="mt-2 text-base leading-normal">Select a file</span>
        <input type='file' class="hidden" />
    </label>
</div>
<div class="control">
    <input
            type="hidden"
            name="approved"
            value='no'
            >
</div>
<div class="field">
    <div class="control">
        <button type="submit" class="button is-link mr-2">{{ $buttonText }}</button>

        <a href="{{ $product->path() }}" class="text-default">Cancel</a>
    </div>
</div>

