<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Members') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                @foreach ($members as $member)
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <div class="px-6 py-4">
                            <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">{{ $member->name }}</h2>
                            <p class="text-sm text-gray-600 dark:text-gray-400">{{ $member->temperature }}</p>
                          
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
