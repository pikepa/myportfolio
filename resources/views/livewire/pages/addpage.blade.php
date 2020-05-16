<div>
    <div class="container mx-auto mt-4">
        <div class="text-center text-semibold text-xl">Manage Pages</div>
        <div class="sm:w-1/2 pt-6 pb-6 mx-auto rounded  shadow-lg">
            <form wire:submit.prevent="add">
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
                    {{$active}}
                    <div class="flex justify-around mt-6">
                        <div>
                            <input type="submit" value="Save">
                        </div>

                    </div>
                </div>

            </form>
        </div>

        <div class="flex flex-col sm:w-2/3 mx-auto pt-4">
            <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                    <table class="min-w-full">
                        <thead class="bg-gray-200">
                            <tr>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium  uppercase tracking-wider">
                                    Name
                                </th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium uppercase tracking-wider">
                                    Title
                                </th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium uppercase tracking-wider">
                                    Status
                                </th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium uppercase tracking-wider">
                                    Role
                                </th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @foreach($pages as $page)
                            <tr>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <div class="flex items-center">
                                        <div class="">
                                            <div class="text-sm leading-5 font-medium text-gray-900">{{$page->name}}</div>
                                            <div class="text-sm leading-5 text-gray-500">{{$page->slug}}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <div class="text-sm leading-5 text-gray-900">{{$page->title}}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        Active
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                                    Owner
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>