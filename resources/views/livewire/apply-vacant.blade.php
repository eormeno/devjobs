<div class="bg-gray-300 p-5 mt-10 flex flex-col justify-center items-center">
    <h3 class="text-center text-2xl font-bold my-4">{{ __('vacancies.apply_to_vacant_title') }}</h3>
    @if (session()->has('success'))
        <div class="bg-green-500 uppercase p-3 rounded-lg text-white text-center my-5">
            {{ session('success') }}
        </div>
    @else
        <form wire:submit.prevent="apply" class="w-96 mt-5">
            <div class="mb-4">
                <x-input-label for="cv" :value="__('vacancies.apply_to_vacant_cv_file')" />
                <x-text-input id="cv" wire:model="cv" type="file" accept=".pdf" class="block mt-1 w-full"
                    wire:model="cv" />
            </div>

            @error('cv')
                <livewire:show-alert message="{{ $message }}" />
            @enderror

            <x-primary-button class="my-5">
                {{ __('vacancies.apply_to_vacant_button') }}
            </x-primary-button>
        </form>
    @endif
</div>
