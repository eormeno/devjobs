<form class="md:w-1/2 space-y-5" method="POST" novalidate>
    @csrf
    <div>
        <x-input-label for="title" :value="__('vacancies.form_title')" />
        <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')"
            :placeholder="__('vacancies.form_title_placeholder')" />
        <x-input-error :messages="$errors->get('title')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="salary" :value="__('vacancies.form_salary')" />
        <select id="salary" name="salary"
            class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full">
            <option value="0" selected>{{ __('vacancies.form_salary_placeholder') }}</option>
            @foreach ($salaries as $salary)
                <option value="{{ $salary->id }}">{{ $salary->salary }}</option>
            @endforeach
        </select>
        <x-input-error :messages="$errors->get('salary')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="category" :value="__('vacancies.form_category')" />
        <select id="category" name="category"
            class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full">
        </select>
        <x-input-error :messages="$errors->get('category')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="company" :value="__('vacancies.form_company')" />
        <x-text-input id="company" class="block mt-1 w-full" type="text" name="company" :value="old('company')"
            :placeholder="__('vacancies.form_company_placeholder')" />
        <x-input-error :messages="$errors->get('company')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="apply_deadline" :value="__('vacancies.form_apply_deadline')" />
        <x-text-input id="apply_deadline" class="block mt-1 w-full" type="date" name="apply_deadline"
            :value="old('apply_deadline')" />
        <x-input-error :messages="$errors->get('apply_deadline')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="job_description" :value="__('vacancies.form_job_description')" />
        <textarea id="job_description"
            class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full h-48"
            name="job_description" :value="old('job_description')"></textarea>
        <x-input-error :messages="$errors->get('job_description')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="image" :value="__('vacancies.form_image')" />
        <x-text-input id="image" class="block mt-1 w-full" type="file" name="image" />
        <x-input-error :messages="$errors->get('image')" class="mt-2" />
    </div>
    <x-primary-button>
        {{ __('vacancies.form_submit') }}
    </x-primary-button>
</form>
