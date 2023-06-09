<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-navbararea />
    <div class="pt-24">
        <div class="flex">
            <div class="border-r w-1/5">
                <div>
                    <div class="text-white text-center bg-cyan-700 py-4">
                        <p>Shop By Category</p>
                    </div>
                    <div class="flex flex-col divide-y">
                        @foreach ($categories as $category)
                            {{ $category->name }}
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="border-l w-4/5">
                <div class="container flex flex-wrap mx-auto">
                    @if (count($jobs) === 0)
                        <h1>No Jobs List Found</h1>
                    @else
                        @foreach ($jobs as $job)
                            <a href={{ route('jobs.index', $job->name) }} class="p-2">
                                <img src="{{ asset($job->image) }}" alt="{{ $job->name }}"
                                    class="object-cover" />
                                <div class="flex justify-around bg-cyan-700 py-2">
                                    <span class="text-black">{{ $job->name }}</span>
                                    <span class="text-white">Php{{ $job->price }}</span>
                                </div>
                            </a>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
    <x-footer />
</body>

</html>
