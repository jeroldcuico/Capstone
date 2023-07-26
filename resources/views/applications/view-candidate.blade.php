<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Candidates Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-between">
                        <h2
                            class="text-2xl font-bold leading-7 mb-4 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">
                            Applications from Candidates</h2>
                    </div>

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <h3>Name: {{ $user->name }}</h3>
                        <p>Email: {{ $user->email }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
