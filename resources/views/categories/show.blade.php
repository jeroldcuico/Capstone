@php
    use Carbon\Carbon;
@endphp
<x-guest-layout>
    <div class="container mx-auto py-8">
        <section class="mt-3">
            <div class="mx-auto max-w-screen-xl  px-4 py-10">
                <h1 class="text-2xl font-bold text-[#1B262C] sm:text-3xl">{{ $category->name }}</h1>
                <div class="h-1 bg-blue-900 w-64 opacity-25 my-0 py-0 rounded-t mb-3"></div>
                <div class="mt-4"> {{ $jobs->links() }}</div>
                <div>
                    <ul>
                        @foreach ($jobs as $job)
                            @php
                                $timestamp = Carbon::parse($job->created_at);
                                $timeDiff = $timestamp->diffForHumans();
                            @endphp
                            <li class="list-none w-full mb-3">
                                <a href="{{ route('jobs.show', $job->id) }}" class="flex bg-gray-100 rounded-md ">
                                    <div class="relative w-full px-4 py-4 sm:px-6">
                                        <!-- HEADER -->
                                        <div class="flex items-center justify-between w-full ">
                                            <p class="truncate text-sm font-medium text-teal-500 lg:mt-1 lg:text-lg ">
                                                {{ $job->title }}</p>
                                            <div class="ml-2 flex flex-shrink-0 lg:ml-0 lg:translate-x-[5px]">
                                                <p
                                                    class="inline-flex rounded-full bg-green-100 px-2 text-xs font-semibold leading-5 text-green-800">
                                                    Salary Php {{ $job->budget }}</p>
                                            </div>
                                        </div>

                                        <div class="mt-2">
                                            <!-- ROW -->
                                            <div
                                                class=" 
                                  flex items-center justify-between 
                                  text-sm text-gray-500 
                                  mt-2">
                                                <!-- CLOSING -->
                                                <div class="flex ">

                                                    <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-700"
                                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                            d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>

                                                    <p>
                                                    </p>
                                                    <div class="hidden sm:flex">Created: </div>
                                                    <time datetime="2020-01-07"
                                                        class="hidden md:flex">{{ $timeDiff }}</time>
                                                    <time datetime="2020-01-07" class="flex md:hidden">01/07/20</time>
                                                    <p></p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    <div class="mt-4"> {{ $jobs->links() }}</div>
                </div>
            </div>
        </section>
    </div>
</x-guest-layout>
