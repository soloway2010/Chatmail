<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                    <div class="flex items-center">
                        <div class="ml-4 text-lg leading-7 font-semibold"><a href="/messages" class="underline text-gray-900 dark:text-white">Messanger</a></div>
                    </div>
                    <div class="flex items-center">
                        <div class="ml-4 text-lg leading-7 font-semibold"><a href="/mail" class="underline text-gray-900 dark:text-white">Mail</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
