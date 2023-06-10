<section class="bg-white border-b py-8">
    < class="container mx-auto flex flex-wrap pt-4 pb-12">
        <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
            FEATURED JOBS
        </h1>
        <div class="w-full mb-4">
            <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        @foreach ($featuredjobList as $job)
            <!--<div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
                    <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                        <img src="{{ asset('storage/' . $job->image) }}" alt="{{ $job->name }}"
                            class="h-full w-full object-fill lg:h-full lg:w-full">
                        <div class="w-full font-bold text-xl text-gray-800 px-6">
                            {{ $job->name }}
                        </div>
                        <p class="w-full text-gray-600 text-xs md:text-sm px-6">
                            {{ $job->description }}
                        </p>
                        <p class="text-gray-800 text-base px-6 mb-5">
                            Php{{ $job->price }}
                        </p>
                    </a>
                </div>
                <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
                    <div class="flex items-center justify-start">
                        <button
                            class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                            Apply
                        </button>
                    </div>
                </div>
            </div>-->
            <div class="container mx-auto px-6 my-8">
                <ul role="list" class="md:grid md:grid-cols-1 md:gap-y-5">
                    <li class="flex py-3 first:pt-0 last:pb-0">

                        <!--cards box-->
                        <div class="md:container md:mx-auto bg-gray-100 rounded-lg overflow-hidden shadow hover:bg-sky-400">
                            <div class="text-black md:flex">
                            <!--Image of client-->
                            <div class="gap-2 inline-block snap-center my-5 mx-3">
                                <img src="{{ asset('storage/' . $job->image) }}" alt="{{ $job->name }}"
                                class="h-11 w-11 rounded-full md:shrink-0">
                            </div>
                            <!--Details of jobs-->
                            <div>
                                <div class="w-full text-black px-6 mt-3">Client</div>
                                <div class="w-full font-bold text-xl text-gray-800 px-6">
                                    {{ $job->name }}
                                </div>
                                    <div class="mb-3 px-6">
                                        <span class="w-full md:container mx-auto text-gray-500 text-xs px-3 mb-5 bg-gray-300 rounded-lg mr-2">
                                            Php{{ $job->price }}
                                        </span>
                                        <span class=" w-full md:container mx-auto text-gray-500 text-xs px-3 mb-5 bg-gray-300 rounded-lg ml-2">
                                            Location
                                        </span>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <!--date created-->
                            <div class="gap-2 inline-block align-middle my-5 mx-3">
                                {{ $job->created_at }}
                            </div>

                        </div><!--closing tag cards-->
                    </li>
                </ul>
            </div>
        @endforeach
    </div>
</section>
