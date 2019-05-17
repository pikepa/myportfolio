@csrf

@include ('errors')

<div class="field mb-6">
    <label class="label text-base mb-2 block" for="client_name">Display my name as</label>

    <div class="control">
        <input
                type="text"
                class="input bg-transparent border border-muted-light rounded p-2 text-base w-full"
                name="client_name"
                placeholder="My Display Name"
                required
                value="{{ $testimonial->client_name }}"
                >
                
    </div>
</div>

<div class="field mb-6">
    <label class="label text-base mb-2 block" for="country">Which Country</label>

    <div class="control">
        <input
                type="text"
                class="input bg-transparent border border-muted-light rounded p-2 text-base w-full"
                name="country"
                placeholder="Enter the country where your story took place"
                required
                value="{{ $testimonial->country }}"
                >
    </div>
</div>

<div class="field mb-6">
    <label class="label text-base mb-2 block" for="story">My Story</label>

    <div class="control">
            <textarea
                name="story"
                rows="10"
                class="textarea bg-transparent border border-muted-light rounded p-2 text-base w-full"
                placeholder="Use as much space as required for your story."
                required>{{ $testimonial->story }}
                
                    
            </textarea>
    </div>
</div>
<div class="control">
    <input
            type="hidden"
            name="img_name"
            value='null'
            >
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

        <a href="{{ $testimonial->path() }}" class="text-default">Cancel</a>
    </div>
</div>

