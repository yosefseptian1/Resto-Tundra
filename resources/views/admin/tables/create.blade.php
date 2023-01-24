<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex m-2 p-2">
                <a href="{{ route('admin.tables.index') }}" class="px-4 py-2 bg-gray-800 hover:bg-gray-500 text-gray-50 rounded-lg">
                    Table Index
                </a>
            </div>
            <div class="m-2 p-2">
            <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
            <form method="POST" action="{{ route('admin.tables.store') }}" enctype="multipart/form-data">
            @csrf    
            <div class="sm:col-span-6">
                <label for="name" class="block text-sm font-medium text-gray-700"> Name </label>
                <div class="mt-1">
                    <input type="text" id="name" name="name" 
                        class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name') border-red-400 @enderror" />
                </div>
                @error('name')
                    <div class="text-sm text-red-400">{{ $message }}</div>
                @enderror
                </div>
                <div class="sm:col-span-6 pt-5">
                <label for="guest_number" class="block text-sm font-medium text-gray-700">Guest Number</label>
                <div class="mt-1">
                    <input type="number" id="guest_number" name="guest_number" 
                        class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('guest_number') border-red-400 @enderror"></textarea>
                </div>
                @error('guest_number')
                    <div class="text-sm text-red-400">{{ $message }}</div>
                @enderror
                </div>
                <div class="sm:col-span-6 pt-5">
                            <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                            <div class="mt-1">
                                <select id="status" name="status" class="form-multiselect block w-full mt-1">
                                @foreach (App\Enums\TableStatus::cases() as $status)
                                    <option value="{{$status->value}}">{{$status->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                <div class="sm:col-span-6 pt-5">
                            <label for="location" class="block text-sm font-medium text-gray-700">location</label>
                            <div class="mt-1">
                                <select id="location" name="location" class="form-multiselect block w-full mt-1">
                                    @foreach (App\Enums\TableLocation::cases() as $location)
                                    <option value="{{$location->value}}">{{$location->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                <div class="mt-6">
                    <button type="submit" class="px-4 py-2 bg-gray-500 hover:bg-gray-700 rounded-lg text-white">
                        Store
                    </button>
                </div>
            </form>
            </div>

            </div>
        </div>
    </div>
</x-admin-layout>
