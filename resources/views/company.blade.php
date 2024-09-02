<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('companies') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-between mb-4">
                        <h3 class="text-3xl mb-4 text-pink-600">My companies</h3>
                        <x-primary-button href="/company-form" class="py-1" wire:navigate>
                            {{ __('New company') }}
                        </x-primary-button>
                    </div>
                    {{-- Component List Company --}}
                    <livewire:company.list-company />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
