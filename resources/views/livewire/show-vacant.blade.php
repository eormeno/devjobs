<div class="p-10">
    <div class="mb-5">
        <h3 class="font-bold text-3xl text-gray-800 my-3">
            {{ $vacant->title }}
        </h3>
        <div class="grid grid-cols-2 bg-gray-50 p-4">
            <p class="font-bold text-sm uppercase text-gray-800 my-3">Empresa:
                <span class="text-gray-700 normal-case font-light">{{ $vacant->company }}</span>
            </p>
            <p class="font-bold text-sm uppercase text-gray-800 my-3">Último día para postular:
                <span
                    class="text-gray-700 normal-case font-normal">{{ $vacant->apply_deadline->toFormattedDateString() }}</span>
            </p>

            <p class="font-bold text-sm uppercase text-gray-800 my-3">Salario:
                <span class="text-gray-700 normal-case font-normal">{{ $vacant->salary->salary }}</span>
            </p>

            <p class="font-bold text-sm uppercase text-gray-800 my-3">Categoría:
                <span class="text-gray-700 normal-case font-normal">{{ $vacant->category->category }}</span>
            </p>
        </div>
    </div>

    <div class="md:grid md:grid-cols-6 gap-4">
        <div class="md:col-span-2">
            <img class="h-64 mx-auto object-cover w-64" src="{{ asset('storage/images/vacants/' . $vacant->image) }}"
                alt="{{ $vacant->title }}">
        </div>

        <div class="md:col-span-4 border rounded-xl border-slate-600 p-2">
            <h2 class="text-2xl font-bold mb-5">{{ __('vacancies.show_job_description_title') }}</h2>
            <p class="text-gray-700 text-base">
                {{ $vacant->job_description }}
            </p>
        </div>
    </div>

    @guest
        <div class="mt-5 bg-gray-50 border border-dashed p-5 text-center">
            <p>
                {{ __('vacancies.show_how_to_apply_title') }}
                <a href="{{ route('register') }}"
                    class="font-bold text-indigo-600">{{ __('vacancies.show_how_to_apply_text') }}</a>
            </p>
        </div>
    @endguest

    @can('applyToVacant', $vacant)
        <livewire:apply-vacant />
    @endcan

</div>
