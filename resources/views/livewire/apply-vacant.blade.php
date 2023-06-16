<div class="bg-gray-300 p-5 mt-10 flex flex-col justify-center items-center">
    <h3 class="text-center text-2xl font-bold my-4">{{ __('vacancies.apply_to_vacant_title') }}</h3>
    <form class="w-96 mt-5">
        <div class="mb-4">
            <x-input-label for="cv" :value="__('vacancies.apply_to_vacant_cv_file')" />
            <x-text-input id="cv" type="file" accept=".pdf" class="block mt-1 w-full" wire:model="cv" />
        </div>

        <x-primary-button class="my-5">
            {{ __('vacancies.apply_to_vacant_button') }}
        </x-primary-button>
    </form>
</div>
