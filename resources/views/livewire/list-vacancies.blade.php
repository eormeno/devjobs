<div>
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        @forelse ($vacancies as $vacant)
            <div class="p-6 bg-white border-b border-gray-200 md:flex md:justify-between md:items-center">
                <div class="space-y-3">
                    <a href="{{ route('vacancies.show', $vacant->id) }}" class="text-xl font-bold">
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
                    <a href="{{ route('vacancies.edit', $vacant) }}"
                        class="bg-blue-800 py-2 px-4 rounded-md text-white text-sm font-bold uppercase text-center">
                        {{ __('vacancies.list_edit_button') }}
                    </a>
                    <button wire:click="$emit('showDeleteAlert', {{ $vacant->id }})"
                        class="bg-red-600 py-2 px-4 rounded-md text-white text-sm font-bold uppercase text-center">
                        {{ __('vacancies.list_delete_button') }}
                    </button>
                </div>
            </div>
        @empty
            <p class="p-3 text-center text-sm text-gray-600">
                {{ __('vacancies.list_empty') }}
            </p>
        @endforelse
    </div>

    <div class="mt-5">
        {{ $vacancies->links() }}
    </div>
</div>

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Livewire.on('showDeleteAlert', (id) => {
            Swal.fire({
                title: "{{ __('vacancies.list_delete_dialog_title') }}",
                text: "{{ __('vacancies.list_delete_dialog_text') }}",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: "{{ __('vacancies.list_delete_dialog_confirm') }}",
                cancelButtonText: "{{ __('vacancies.list_delete_dialog_cancel') }}",
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emit('deleteVacant', id)
                    Swal.fire(
                        "{{ __('vacancies.list_delete_dialog_success') }}",
                        "{{ __('vacancies.list_delete_dialog_success_text') }}",
                        'success'
                    )
                }
            })
        })
    </script>
@endpush
