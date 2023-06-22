<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('notifications.title') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-2xl font-bold text-center mb-5">{{ __('notifications.list') }}</h1>
                    @forelse ($unreadNotifications as $notification)
                        <div class="p-5 border border-gray-200 lg:flex lg:justify-between lg:items-center">
                            <div>
                                <p>{{ __('notifications.new_candidate_for') }}:
                                    <span class="font-bold">{{ $notification->data['title'] }}</span>
                                </p>
                                <p>
                                    <span class="font-bold text-gray-700 text-sm">{{ $notification->created_at->diffForHumans() }}</span>
                                </p>
                            </div>
                            <div class="mt-5 lg:mt-0">
                                <a href="#"
                                    class="bg-indigo-500 p-3 text-sm uppercase font-bold text-white rounded-lg">{{ __('notifications.view_candidates') }}</a>
                            </div>
                        </div>
                    @empty
                        <p class="text-center text-gray-700">{{ __('notifications.empty') }}</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
