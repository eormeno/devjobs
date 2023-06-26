<div>
    
    <livewire:vacancies-filter />

    <div class="py-12">
        <div class="max-w-7xl mx-auto">
            <h3 class="font-extrabold text-4xl text-gray-900 mb-12">{{ __('home.vacancies_title') }}</h3>
            <div class="bg-white shadow-sm rounded-lg p-6 divide-y divide-gray-200">
                @forelse ($vacancies as $vacant)
                    <div class="md:flex md:justify-between md:items-center py-5">
                        <div class="md:flex-1">
                            <a class="text-3xl font-extrabold text-gray-600"
                                href="{{ route('vacancies.show', $vacant->id) }}">
                                {{ $vacant->title }}
                            </a>
                            <p class="text-base text-gray-600 mb-1">{{ $vacant->company }}</p>
                            <p class="font-bold text-xs text-gray-600">
                                {{ __('home.apply_deadline') }}: <span class="font-normal">
                                    {{ $vacant->apply_deadline->format('d/m/Y') }}</span>
                            </p>
                        </div>
                        <div class="mt-5 md:mt-0">
                            <a href="{{ route('vacancies.show', $vacant->id) }}"
                                class="bg-indigo-500 p-3 text-sm uppercase font-bold text-white rounded-lg block text-center">{{ __('home.vacancy_show') }}</a>
                        </div>
                    </div>
                @empty
                    <p class="p-3 text-center text-sm text-gray-600">{{ __('home.vacancies_empty') }}</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
