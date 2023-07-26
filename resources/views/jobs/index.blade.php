<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('JOB BOARD') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class=" max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-between">
                        <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">
                            {{ $title }} </h2>

                        <!-- Add a link to create a new job posting -->
                        <a href="{{ route('jobs.create') }}"
                            class="text-white bg-blue-700 
                                hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 
                                font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2
                                 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Create
                            Job Posting</a>
                    </div>                    
                    <!-- Display a table or list of job postings -->
                    {{-- <table>
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Categories</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jobs as $job)
                                <tr>
                                    <td>{{ $job->title }}</td>
                                    <td>
                                        <ul>
                                            @foreach ($job->categories as $category)
                                                <li>{{ $category->name }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table> --}}
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="col" class="px-6 py-3">
                                        Title
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Category
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Budget
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Position
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Project Duration
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jobs as $job)
                                    <tr class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            <a href="{{ route('jobs.show', $job->id) }}">
                                                {{ $job->title }}
                                            </a>
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $job->category_id }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $job->budget }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $job->position_type }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $job->project_duration }}
                                        </td>
                                        <td class="py-4 flex gap-2">
                                            @if (auth()->user()->isCandidate())
                                                <a href="{{ route('jobs.show', $job->id) }}"
                                                    class="inline-flex items-center px-4 py-2 bg-blue-600 border
                                                     border-transparent rounded-md font-semibold text-xs 
                                                     text-white uppercase tracking-widest hover:bg-blue-500
                                                      active:bg-blue-700 focus:outline-none focus:ring-2 
                                                      focus:ring-blue-500 focus:ring-offset-2 transition 
                                                      ease-in-out duration-150">
                                                    View Job Details</a>
                                            @endif
                                            @if (auth()->user()->isClient() && Auth::user()->id === $job->user_id)
                                                <a href="{{ route('jobs.edit', $job->id) }}"
                                                    class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500 active:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition ease-in-out duration-150">Edit
                                                    Job</a>
                                                <x-isdelete :id="$job->id" :action="route('jobs.deleteConfirmed', $job->id)" />
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">
                        <!--Pagination -->
                        {{ $jobs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
