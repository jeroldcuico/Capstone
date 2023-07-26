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
                    <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">
                        Change Job Post</h2>
                    <!-- Job posting update form -->
                    <form action="{{ route('jobs.update', $job) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mt-4">
                            <x-input-label for="title" :value="__('Title')" />
                            <x-text-input id="title" class="block mt-1 w-full" type="text" name="title"
                                value="{{ $job->title }}" required autofocus autocomplete="title" />
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
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Budget -->
                        <div class="mt-4">
                            <x-input-label for="budget" :value="__('Budget')" />
                            <x-text-input id="budget" class="block mt-1 w-full" type="text" name="budget"
                                value="{{ $job->budget }}" required autocomplete="budget" />
                            <x-input-error :messages="$errors->get('budget')" class="mt-2" />
                        </div>

                        <!-- Body/requrements -->
                        <div class="mt-4">
                            <x-input-label for="body" :value="__('Body')" />
                            <x-textarea id="body" class="w-full h-[15rem]" name="body" required>
                                {{ $job->body }}
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
                                <option value="part-time" {{ $job->position_type === 'part-time' ? 'selected' : '' }}>
                                    Part-Time</option>
                                <option value="full-time" {{ $job->position_type === 'full-time' ? 'selected' : '' }}>
                                    Full-Time</option>
                            </select>
                            <x-input-error :messages="$errors->get('position_type')" class="mt-2" />
                        </div>

                        <!-- Duration -->
                        <div class="mt-4">
                            <x-input-label for="project_duration" :value="__('Duration')" />
                            <select
                                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                id="project_duration" class="block mt-1 w-full" name="project_duration" required
                                autocomplete="project_duration">
                                <option value="1" {{ $job->project_duration == 1 ? 'selected' : '' }}>1 month
                                </option>
                                <option value="2" {{ $job->project_duration == 2 ? 'selected' : '' }}>2 months
                                </option>
                                <option value="3" {{ $job->project_duration == 3 ? 'selected' : '' }}>3 months
                                </option>
                                <option value="6" {{ $job->project_duration == 6 ? 'selected' : '' }}>6 months
                                </option>
                                <option value="12" {{ $job->project_duration == 12 ? 'selected' : '' }}>1 year
                                </option>
                            </select>
                        </div>


                        <div class="mt-4">
                            <x-secondary-button type="submit">Update Job Posting</x-secondary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
