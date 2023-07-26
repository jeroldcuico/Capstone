@php
    use Carbon\Carbon;
    $timestamp = Carbon::parse($job->created_at);
    $timeDiff = $timestamp->diffForHumans();
@endphp
<x-guest-layout>
    <!-- Breadcrumb -->
    <nav class="flex px-5 py-2 mb-3 text-gray-700 border border-gray-200 bg-gray-50 dark:bg-gray-800 dark:border-gray-700"
        aria-label="Breadcrumb">
        <section class="mx-auto max-w-screen-xl">
            <ol class="inline-flex space-x-1 md:space-x-3">
                <li class="inline-flex">
                    <a href="/"
                        class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                        <svg aria-hidden="true" class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                            </path>
                        </svg>
                        Home
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <a href="#"
                            class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">{{ $job->title }}</a>
                    </div>
                </li>
            </ol>
        </section>
    </nav>
    <main class="main bg-white px-6 md:px-16 py-6">
        <div class="flex flex-wrap justify-between max-w-6xl mx-auto">
            <!--     Job Post   -->
            <div class="job-post w-full md:w-8/12">
                <div class="job-meta mb-4">
                    <div class="image-area">
                        <img src="{{ asset('storage/' . $job->image) }}" alt="">
                    </div>
                    <div>
                        <div class="mt-4">
                            <h1
                                class="text-3xl font-bold leading-7 text-blue-900 sm:truncate sm:text-3xl sm:tracking-tight">
                                {{ $job->title }} </h1>
                            <div class="mt-2">
                                <span class="text-m text-gray-900">
                                    Posted: {{ $timeDiff }}
                                </span>
                            </div>
                            <div class="mt-2">
                                <span class="text-l">Expected Salary</span>
                                <span class="bg-[#0F4C75] text-white p-1 text-l rounded-sm mr-4">Php
                                    {{ $job->budget }}</span>
                            </div>
                            <div class="mt-4">
                                Job Description : {{ $job->body }}
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 mb-5">
                        @if (Auth::check())
                            <!-- Only show the form if the user is authenticated -->
                            <h2
                                class="text-xl font-bold leading-7 text-red-500 sm:truncate sm:text-xl sm:tracking-tight">
                                Apply for this Job</h2>
                            <x-applynow :job="$job" />
                        @else
                            <a href="{{ route('login') }}"
                                class="bg-[#0F4C75] hover:bg-[#3282B8] text-white text-center block rounded-full py-2">Apply
                                for
                                this
                                job</a>
                        @endif
                    </div>
                </div>
            </div> <!-- end job-post -->

            <div class="w-full hidden md:block md:w-3/12">
                <div class="employer-info mb-4 text-center ">
                    <div class="flex items-center">
                        <div class="bg-gray-300 rounded-full h-12 w-12 flex items-center justify-center">
                            <span class="text-gray-600 text-2xl">{{ substr($client->name, 0, 1) }}</span>
                        </div>
                        <span class="ml-2 text-gray-800 text-lg">{{ $client->name}}</span>
                    </div>
                </div>
            </div> <!-- end w-3/12 -->
        </div>
    </main>

    </x-app-layout>
