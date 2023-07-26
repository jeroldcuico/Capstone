<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Jobs Posting') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mt-4">
                        <a href="{{ url()->previous() }}">Back</a>
                    </div>
                    <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">Post
                        a Job</h2>

                    <!-- Job posting creation form -->
                    <form action="{{ route('jobs.store') }}" method="POST">
                        @csrf

                        <div class="mt-4">
                            <x-input-label for="title" :value="__('Title')" />
                            <x-text-input id="title" class="block mt-1 w-full" type="text" name="title"
                                :value="old('title')" required autofocus autocomplete="title" />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>

                        <!--Categories-->
                        <div class="mt-4">
                            <x-input-label for="categories" :value="__('Categories')" />
                            <select
                                class="border-gray-300 w-full focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                id="categories" class="block mt-1 w-full" name="categories" required
                                autocomplete="categories">
                                @foreach ($categories as $category)
                                <option value="{{ $category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Budget -->
                        <div class="mt-4">
                            <x-input-label for="budget" :value="__('Budget')" />
                            <x-text-input id="budget" class="block mt-1 w-full" type="text" name="budget"
                                :value="old('budget')" required autocomplete="budget" />
                            <x-input-error :messages="$errors->get('budget')" class="mt-2" />
                        </div>

                        <!-- Body/requrements -->
                        <div class="mt-4">
                            <x-input-label for="body" :value="__('Body')" />
                            <x-textarea id="body" class="w-full h-[15rem]" name="body" required
                                :value="old('body')">
                            </x-textarea>
                            <x-input-error :messages="$errors->get('body')" class="mt-2" />
                        </div>

                        <!-- Position Type -->
                        <div class="mt-4">
                            <x-input-label for="position_type" :value="__('Position Type')" />
                            <select
                                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                id="position_type" class="block mt-1 w-full" name="position_type" required
                                autocomplete="position_type">
                                <option value="part-time" {{ old('position_type') === 'part-time' ? 'selected' : '' }}>
                                    Part-Time</option>
                                <option value="full-time" {{ old('position_type') === 'full-time' ? 'selected' : '' }}>
                                    Full-Time</option>
                            </select>
                            <x-input-error :messages="$errors->get('position_type')" class="mt-2" />
                        </div>

                        <!--Duration-->
                        <div class="mt-4">
                            <x-input-label for="project_duration" :value="__('Duration')" />
                            <select
                                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                id="project_duration" class="block mt-1 w-full" name="project_duration" required
                                autocomplete="project_duration">
                                <option value="1">1 month</option>
                                <option value="2">2 months</option>
                                <option value="3">3 months</option>
                                <option value="6">6 months</option>
                                <option value="12">1 year</option>
                            </select>
                        </div>

                        <!-- Add other job details input fields -->

                        <div class="mt-4">
                            <x-primary-button type="submit">Create Job Posting</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
