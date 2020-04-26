@csrf

@include ('errors')

<div class="field mb-6">
    <label class="block">
      <span class="text-gray-700">Title</span>
        <input  type="text" class="form-input mt-1 block w-full"
                name='title'
                placeholder="Enter the Page title."
                value="{{old('title', $page->title)}}">
    </label>
</div>


<div class="field mb-6">
     <label class="block">
      <span class="text-gray-700">Main Content</span>
      <textarea class="form-textarea mt-1 block w-full"
      name='content2'
      rows="5"
      placeholder="Enter the content of the page.">{{old('main_content', $page->main_content) }}
      </textarea>
    </label>
</div>

<div class="field mb-6">
     <label class="block">
      <span class="text-gray-700">Bottom Content</span>
      <textarea class="form-textarea mt-1 block w-full"
      name='content'
      rows="5"
      placeholder="Enter the content of the page.">{{old('bottom_content', $page->bottom_content) }}
      </textarea>
    </label>
</div>

<div class="field mb-6">
    <label class="block">
      <span class="text-gray-700">Published </span>
      <input  type="date"
              name="publish_at"
              value="{{ old('publish_at', ($page->publish_at? $page->publish_at->format('Y-m-j') : date('Y-m-j'))) }}"
              class="form-input mt-1 block w-full">
    </label>
</div>

<input type=hidden name='discount' value=0 />
<div class="field">
    <div class="control">
        <button type="submit" class="btn btn-blue is-link mr-2">{{ $buttonText }}</button>

        <a href="{{ $page->path() }}" class="text-default">Cancel</a>
    </div>
</div>
