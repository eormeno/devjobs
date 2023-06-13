<form class="md:w-1/2 space-y-5" wire:submit.prevent='createVacant' novalidate>
    @csrf
    <!-- title -->
    <div>
        <x-input-label for="title" :value="__('vacancies.form_title')" />
        <x-text-input id="title" wire:model='title' class="block mt-1 w-full" type="text" :value="old('title')"
            :placeholder="__('vacancies.form_title_placeholder')" />
        @error('title')
            <livewire:show-alert :message="$message" />
        @enderror
    </div>
    <!-- salary -->
    <div>
        <x-input-label for="salary" :value="__('vacancies.form_salary')" />
        <select id="salary" wire:model="salary"
            class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full">
            <option>{{ __('vacancies.form_salary_placeholder') }}</option>
            @foreach ($salaries as $salary)
                <option value="{{ $salary->id }}">{{ $salary->salary }}</option>
            @endforeach
        </select>
        @error('salary')
            <livewire:show-alert :message="$message" />
        @enderror
    </div>
    <!-- category -->
    <div>
        <x-input-label for="category" :value="__('vacancies.form_category')" />
        <select id="category" wire:model="category"
            class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full">
            <option>{{ __('vacancies.form_category_placeholder') }}</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->category }}</option>
            @endforeach
        </select>
        @error('category')
            <livewire:show-alert :message="$message" />
        @enderror
    </div>
    <!-- company -->
    <div>
        <x-input-label for="company" :value="__('vacancies.form_company')" />
        <x-text-input id="company" class="block mt-1 w-full" type="text" wire:model="company" :value="old('company')"
            :placeholder="__('vacancies.form_company_placeholder')" />
        @error('company')
            <livewire:show-alert :message="$message" />
        @enderror
    </div>
    <!-- apply_deadline -->
    <div>
        <x-input-label for="apply_deadline" :value="__('vacancies.form_apply_deadline')" />
        <x-text-input id="apply_deadline" class="block mt-1 w-full" type="date" wire:model="apply_deadline"
            :value="old('apply_deadline')" />
        @error('apply_deadline')
            <livewire:show-alert :message="$message" />
        @enderror
    </div>
    <!-- job_description -->
    <div>
        <x-input-label for="job_description" :value="__('vacancies.form_job_description')" />
        <textarea id="job_description"
            class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full h-48"
            wire:model="job_description" :value="old('job_description')"></textarea>
        @error('job_description')
            <livewire:show-alert :message="$message" />
        @enderror
    </div>
    <!-- image -->
    <div>
        <x-input-label for="image" :value="__('vacancies.form_image')" />
        <x-text-input id="image" class="block mt-1 w-full" type="file" wire:model="image" accept="image/*" />
        <div class="my-5 w-32">
            @if ($image)
                <img src="{{ $image->temporaryUrl() }}" alt="image" class="w-full">
            @endif
        </div>
        @error('image')
            <livewire:show-alert :message="$message" />
        @enderror
    </div>
    <!-- submit -->
    <x-primary-button>
        {{ __('vacancies.form_submit') }}
    </x-primary-button>
</form>
