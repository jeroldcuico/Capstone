<x-guest-layout>
    <section style="height:70vh">
        <div class="mx-auto max-w-screen-xl px-4 py-10">
            <h1 class="text-2xl font-bold text-[#1B262C] sm:text-3xl">Categories</h1>
            <div class="h-1 bg-blue-900 w-64 opacity-25 my-0 py-0 rounded-t mb-3"></div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 mx-auto gap-2">
                <!-- Adjust the number of columns and gap value as needed -->
                <!-- Card 1 -->
                @foreach ($categories as $category)
                    <div class="max-w-xl rounded overflow-hidden shadow-lg bg-gray-100 mb-4 p-4">
                        <div class="px-6 py-4">
                            <h2 class="font-bold mb-2 text-xl text-[#0F4C75] flex flex-wrap">{{ $category->name }}</h2>
                            <a href="{{ route('categories.show', $category->slug) }}"
                                class="bg-[#1B262C] text-white hover:bg-[#BBE1FA] hover:text-black px-3 py-1 rounded-md ">View
                                Category</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </section>
</x-guest-layout>
