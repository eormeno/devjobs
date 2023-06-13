<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
    @forelse ($vacancies as $vacant)
        <div class="p-6 bg-white border-b border-gray-200 md:flex md:justify-between md:items-center">
            <div class="space-y-3">
                <a href="#" class="text-xl font-bold">
                    {{ $vacant->title }}
                </a>
                <p class="text-sm text-gray-600 font-bold">
                    {{ $vacant->company }}
                </p>
                <p class="text-sm text-gray-500">
                    {{ __('vacancies.form_apply_deadline') }}: {{ $vacant->apply_deadline->format('d/m/Y') }}
                </p>
            </div>
            <div class="flex flex-col md:flex-row items-strech gap-3 mt-5 md:mt-0">
                <a href="#"
                    class="bg-slate-800 py-2 px-4 rounded-md text-white text-sm font-bold uppercase text-center">
                    {{ __('vacancies.list_candidates_button') }}
                </a>
                <a href="#"
                    class="bg-blue-800 py-2 px-4 rounded-md text-white text-sm font-bold uppercase text-center">
                    {{ __('vacancies.list_edit_button') }}
                </a>
                <a href="#"
                    class="bg-red-600 py-2 px-4 rounded-md text-white text-sm font-bold uppercase text-center">
                    {{ __('vacancies.list_delete_button') }}
                </a>
            </div>
        </div>
    @empty
        <p class="p-3 text-center text-sm text-gray-600">
            {{ __('vacancies.list_empty') }}
        </p>
    @endforelse
</div>
