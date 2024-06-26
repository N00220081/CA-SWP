<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Members') }}
        </h2>
        
    </x-slot>

    <div class="bg-gray-100 dark:bg-gray-900 min-h-screen flex justify-center items-top my-10">
        <div class="max-w-7xl sm:px-6 lg:px-1">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">
                @foreach ($members as $member)
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <div class="px-6 py-6">
                            <a href="{{ route('members.show', ['member' => $member]) }}" class="block text-center">
                                <img class="w-50 h-50 object-cover rounded-full mx-auto" src="{{ $member->profile_pic }}" alt="{{ $member->name }}">
                                <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200 mt-4">{{ $member->name }}</h2>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mt-8 flex justify-center">
                <a href="{{ route('members.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    {{ __('Create a new Member') }}
                </a>
            </div>
        </div>
    </div>

    

</x-app-layout>
