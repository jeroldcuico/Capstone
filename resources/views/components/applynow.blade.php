<form action=" {{ route('applications.store', $job->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="job_id" value="{{ $job->id }}">
    <div class="mt-4">
        <x-input-label for="name" :value="__('Name')" />
        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" autocomplete="name"
            value="{{ Auth::user()->name }}" />
        <x-input-error :messages="$errors->get('title')" class="mt-2" />
    </div>

    <div class="mt-4">
        <x-input-label for="email" :value="__('Email Address')" />
        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" autocomplete="email"
            value="{{ Auth::user()->email }}" />
        <x-input-error :messages="$errors->get('title')" class="mt-2" />
    </div>

    <div class="mt-4">
        <x-input-label for="resume" :value="__('Resume')" />
        <x-text-input type="file" id="resume" name="resume" required />
    </div>

    <div class="mt-4">
        <x-input-label for="cover_letter" :value="__('Cover letter')" />
        <x-textarea id="cover_letter" class="w-full h-[10rem]" name="cover_letter" required>
        </x-textarea>
    </div>

    <div class="mt-2">
        <x-primary-button type="submit">Submit Application</x-primary-button>
    </div>
</form>
