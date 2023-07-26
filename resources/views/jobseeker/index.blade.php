<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('MY APPLICATIONS') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="w-full mx-auto">
            <div class="p-6 text-gray-900">
                <div class="flex justify-between">
                    <h2
                        class="text-2xl font-bold leading-7 mb-4 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">
                        Applications from Candidates</h2>
                </div>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                                <th scope="col" class="px-6 py-3">
                                    Job Applied
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    User
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Job Created
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Resume
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($applications as $application)
                                <tr class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $application->job->title }}

                                    </th>
                                    <td class="px-6 py-4">
                                        <a
                                            href="{{ route('applications.view-candidate', $application->candidate->id) }}">
                                            {{ $application->candidate->name }}
                                        </a>
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $application->created_at }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="{{ asset('storage/' . $application->resume) }}" download>Resume</a>
                                    </td>
                                    <td class="py-4 flex gap-2">
                                        <a href="{{ route('applications.view-candidate', $application->candidate->id) }}"
                                            class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500 active:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition ease-in-out duration-150">View
                                            Profile</a>
                                        <x-isdelete :id="$application->id" :action="route('applications.deleteConfirmed', $application->id)" />
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
