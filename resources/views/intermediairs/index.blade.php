<x-app-layout>
{{--    <x-slot name="header">--}}
{{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
{{--            {{ __('intermediairs.Intermediairs') }}--}}
{{--        </h2>--}}
{{--    </x-slot>--}}


    <!-- Activity list (smallest breakpoint only) -->
    <div class="shadow sm:hidden">
        <ul role="list" class="mt-2 divide-y divide-gray-200 overflow-hidden shadow sm:hidden">
            @foreach ($intermediairs as $intermediair)
            <li>
                <a href="{{ $intermediair->path()  }}" class="block bg-white px-4 py-4 hover:bg-gray-50">
                <span class="flex items-center space-x-4">
                  <span class="flex flex-1 space-x-2 truncate">

                    <span class="flex flex-col truncate text-sm text-gray-500">
                      <span class="truncate">{{ $intermediair->ext_debtor_number }} - {{ $intermediair->companyname }} </span>
                    </span>
                  </span>
                    <!-- Heroicon name: mini/chevron-right -->
                  <svg class="h-5 w-5 flex-shrink-0 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                       viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd"
                          d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                          clip-rule="evenodd"/>
                  </svg>
                </span>
                </a>
            </li>
            @endforeach
            <!-- More transactions... -->
        </ul>

        <!-- Pagination -->
        {{ $intermediairs->onEachSide(2)->links('intermediairs.pagination') }}
    </div>

    <!-- Activity table (small breakpoint and up) -->
    <div class="hidden sm:block">
        <div class="mx-auto max-w-8xl px-4 sm:px-6 lg:px-8">
            <div class="mt-2 flex flex-col">
                <div class="min-w-full overflow-hidden overflow-x-auto align-middle shadow sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                        <tr class="bg-gray-50">
                            <td colspan=4 class="px-6">
                                <div class="flex justify-between border-b-2 border-gray-0 py-3">
                                <h2 class="font-semibold text-xl text-gray-900 leading-tight  ">
                                {{ __('intermediairs.Intermediairs') }}
                                </h2>
                                    <span class="text-blue-600">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                 stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                      d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                        </a>
                                    </span>
                                </div>
                            </td>
                        </tr>
                        <tr >
                            <th class="bg-gray-50 px-6 py-3 text-left text-sm font-semibold text-gray-900"
                                scope="col">{{ __('intermediairs.debtornumber') }}
                            </th>
                            <th class="bg-gray-50 px-6 py-3 text-left text-sm font-semibold text-gray-900"
                                scope="col">
                                {{ __('intermediairs.companyname') }}
                            </th>
                            <th class="bg-gray-50 px-6 py-3 text-left text-sm font-semibold text-gray-900"
                                scope="col">{{ __('intermediairs.totalcustomers') }}

                            </th>

                            <th class="bg-gray-50 px-6 py-3 text-right text-sm font-semibold text-gray-900"
                                scope="col">
                            </th>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
                        @foreach ($intermediairs as $intermediair)

                            <tr class="training-row bg-white even:bg-gray-50">
                                <td class="whitespace-nowrap px-6 py-4 text-right text-sm text-gray-500">
                                    <div
                                        class="truncate text-gray-500 group-hover:text-gray-900">{{ $intermediair->ext_debtor_number }}</div>
                                </td>
                                <td class="w-full max-w-0 whitespace-nowrap px-6 py-4 text-sm text-gray-900">
                                    <div class="truncate text-gray-500 group-hover:text-gray-900">

                                        <a href="{{ $intermediair->path()  }}" class="truncate hover:text-gray-600">
                                            {{ $intermediair->companyname }}
                                        </a>
                                    </div>
                                </td>

                                <td class="w-full max-w-0 whitespace-nowrap px-6 py-4 text-sm text-gray-900">
                                    <div class="truncate text-gray-500 group-hover:text-gray-900">

                                        <a href="{{ $intermediair->path()  }}" class="truncate hover:text-gray-600">
                                            {{ count($intermediair->customers) }}
                                        </a>
                                    </div>
                                </td>

                                <td class="hidden whitespace-nowrap px-6 py-4 text-sm text-gray-500 text-right sm:block">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $intermediair->status->colorclass }}">{{ __($intermediair->status->title)  }}</span>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                    <!-- Pagination -->
                    {{ $intermediairs->onEachSide(2)->links('intermediairs.pagination') }}


                </div>
            </div>
        </div>
    </div>

</x-app-layout>
