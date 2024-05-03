<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-12 bg-slate-200 rounded-md m-4">
                    <div class="flex flex-row justify-between">
                        <div class="w-full">
                            <form action="{{ route('location-store') }}" method="POST" class="max-w-sm">
                                @csrf
                                <div class="mb-5">
                                    <label for="name"
                                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                    <input type="text" name="name"
                                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                                    @error('name')
                                    <span class="text-red-600 font-bold text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-5">
                                    <label for="description"
                                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                    <input type="text" name="description"
                                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                                    @error('description')
                                    <span class="text-red-600 font-bold text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                <button type="submit"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Submit
                                </button>
                            </form>
                        </div>
                        <div class="h-1/2 overflow-auto w-full gap-12 flex flex-col">
                            <div>
                                <span class="text-xl text-blue-700 font-bold">VIETOS</span>
                                <ul class="max-w-md space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400">
                                    @foreach($locations as $location)
                                        <li>{{ $location->name }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="h-60 overflow-auto w-full">
                                <span class="text-xl text-blue-700 font-bold">LOGAI</span>
                                <ul class="max-w-md space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400">
                                    @foreach($logs as $log)
                                        <li>{{ $log->name }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
