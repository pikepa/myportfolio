<div>
    <div>
        <div class="container mx-auto mt-4">
            <div class="sm:w-1/2 pt-2  mx-auto rounded rounded-b-none text-center rounded text-semibold bg-gray-200 text-xl">Manage Paragraphs</div>

            <div class="sm:w-1/2 pt-2 pb-6 mx-auto rounded  shadow-lg">
                <div class="rounded-md shadow-sm">
                    <label class="block mx-4 ">
                        <select name="select" wire:model="select" class="border shadow p-2 bg-white">
                            <option value=''>Choose a page</option>
                            @foreach($pagenames as $pagename)
                            <option value={{$pagename->id}}>{{ $pagename->name }}</option>
                            @endforeach
                        </select> @error('select') <span class="mt-1 text-red-500 text-sm"> {{ $message }}</span> @enderror
                    </label>
                </div>
            </div>

            <div class="flex flex-col sm:w-2/3 mx-auto pt-4">
                <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                    <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                        <table class="min-w-full">
                            <thead class="bg-gray-200">
                                <tr>
                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium  uppercase tracking-wider">
                                        Para
                                    </th>
                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium uppercase tracking-wider">
                                        Content
                                    </th>
                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium uppercase tracking-wider">
                                        Last Edit
                                    </th>
                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                @foreach($paras as $item)
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <div class="flex items-center">
                                            <div class="">
                                                <div class="text-sm leading-5 font-medium text-gray-900">{{$item->id}}</div>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="px-6 py-4  border-b border-gray-200">
                                        <div class="text-sm leading-5 text-gray-900">{{$item->para_content}}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            Author
                                        </span>

                                    <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                        <button wire:click="edit($item->id)" class="mr-4 text-indigo-600 hover:text-indigo-900">Edit</button>
                                        <button wire:click="destroy($item->id)" class="text-red-600 hover:text-red-900">Delete</button>
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
</div>