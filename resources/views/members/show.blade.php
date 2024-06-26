<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __($member->name) }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mb-4">
                        <strong>Preferred Pressure:</strong> {{ $member->pressure }}
                    </div>
                    <div class="mb-4">
                        <strong>Preferred Temperature:</strong> {{ $member->temperature }}
                    </div>
                    <div>
                        <strong>Latest Timer Set:</strong> {{ $member->timer }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
