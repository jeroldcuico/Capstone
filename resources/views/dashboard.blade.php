<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            DASHBOARD
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg px-3">
                <form action="{{ route('jobs.search') }}" method="GET">
                    <div class="flex gap-3 mt-4 items-center">
                        <x-text-input type="text" id="search" name="keywords" class="form-control"
                            placeholder="Keyword" />
                        <x-primary-button type="submit">Search Jobs</x-primary-button>
                    </div>
                </form>

                <div class="p-6 text-gray-900">
                    @if (auth()->user()->isCandidate())
                    @endif
                    @if (auth()->user()->isClient())
                        JOBS POSTED <p class="text-3xl mt-2">{{ $jobCount }}</p>                    
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
