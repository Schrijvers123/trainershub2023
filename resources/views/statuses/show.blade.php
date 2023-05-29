<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Show Status') }}
        </h2>
    </x-slot>

    <div class="overflow-hidden bg-white shadow sm:rounded-lg">
        <div class="px-4 py-6 sm:px-6">
            <h3 class="text-base font-semibold leading-7 text-gray-900">{{ __('status.header') }}</h3>
            <p class="mt-1 max-w-3xl text-sm leading-6 text-gray-500">{{ __('status.subtitle') }}</p>
        </div>
        <div class="px-4 py-6 sm:px-6">
            <div class="w-0 h-0 text-red-700 bg-red-50 ring-red-600/10"></div>
            <div class="w-0 h-0 text-green-700 bg-green-50 ring-green-600/20"></div>
            <div class="w-0 h-0 text-yellow-800 bg-yellow-50 ring-yellow-600/20"></div>
            <p class="mt-1 max-w-3xl text-sm leading-6 text-gray-500 font-medium">{{ __('status.example') }}: <span class="inline-flex items-center rounded-md px-2 py-1 text-xs font-medium ring-1 ring-inset {{ $status->colorclass }}">{{ __( $status->title ) }}</span></p>
        </div>
        <div class="border-t border-gray-100">
            <dl class="divide-y divide-gray-100">
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-900">{{ __('status.title') }}</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ __( $status->title ) }}</dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-900">{{ __('status.colorclass') }}</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ __( $status->colorclass )}}</dd>
                </div>

                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-900">{{ __('status.category') }}</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ __( $status->category )}}</dd>
                </div>

            </dl>
        </div>
    </div>

</x-app-layout>
