<x-guest-layout>
    <x-hero-section />   
    <section class="bg-[#BBE1FA]">
        <div class="mx-auto max-w-screen-xl  px-4 py-10">
            <h1 class="text-2xl font-bold text-[#1B262C] sm:text-3xl">Categories</h1>
            <div class="h-1 bg-blue-900 w-64 opacity-25 my-0 py-0 rounded-t mb-3"></div>
            <div class="flex flex-wrap gap-3  md:flex-nowrap ">
                <!-- Card 1 -->
                @foreach ($categoryList as $category)
                <div class="bg-gradient-to-b from-[#0F4C75] to-[#115481] text-white shadow-lg rounded">
                    <a href="{{ route('jobs.index', 'category=' . $category->slug) }}">
                    <img src="https://source.unsplash.com/y0_vFxOHayg" class="rounded-t" alt="" width="300"
                        srcset="">
                    <div class="px-5 py-2">
                        <div class="font-bold text-xl mb-2">{{ $category->name }}</div>
                    </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <x-featuredjobs />
</x-guest-layout>
