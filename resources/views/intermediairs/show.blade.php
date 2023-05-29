<x-app-layout>

    <!-- Page header -->
    <div class="bg-white shadow">
        <div class="px-4 sm:px-6 lg:mx-auto lg:max-w-8xl lg:px-8">
            <div class="py-6 md:flex md:items-center md:justify-between lg:border-t lg:border-gray-200">
                <div class="min-w-0 flex-1">
                    <!-- Profile -->
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="hidden h-16 w-16 rounded-full sm:block">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z"/>
                        </svg>

                        <div>
                            <div class="flex items-center">


                                <h1 class="ml-3 text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:leading-9">{{ $intermediair->companyname }}</h1>
                                <span class="mx-4 text-sm font-medium capitalize text-gray-500">({{ $intermediair->ext_debtor_number }})</span>

                            </div>
                            <dl class="mt-6 flex flex-col sm:ml-3 sm:mt-1 sm:flex-row sm:flex-wrap">

                                <dt class="sr-only">Adres</dt>
                                <dd class="mt-3 flex items-center text-sm font-medium capitalize text-gray-500 sm:mr-6 sm:mt-0">

                                    {{ $intermediair->address }}
                                    , {{ $intermediair->postcode }} {{ $intermediair->city }}
                                    , {{ $intermediair->country }}
                                </dd>
                                <dt class="sr-only">Account Status</dt>
                                <dd>
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $intermediair->status->colorclass }}">
                                    {{ __($intermediair->status->title)  }}
                                </span>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- Widgets -->
    <div class="my-8">
        <!-- Overview -->
        <div class="mx-auto max-w-8xl ">
            <h2 class="text-lg font-medium leading-6 text-gray-900">Overview</h2>

            <div class="infos-container mt-2 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
                <div class="info-container overflow-hidden rounded-lg bg-white shadow">
                    <div class="p-5">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <svg class="h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5"/>
                                </svg>

                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="truncate text-sm font-medium text-gray-500">Total Accountmanagers</dt>
                                    <dd>
                                        <div
                                            class="text-lg font-medium text-gray-900">{{ count($intermediair->accountmanagers)  }}</div>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>

                </div>   <!-- End info-container -->

                <div class="info-container overflow-hidden rounded-lg bg-white shadow">
                    <div class="p-5">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <svg class="h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z"/>
                                </svg>

                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="truncate text-sm font-medium text-gray-500">Total Customers</dt>
                                    <dd>
                                        <div class="text-lg font-medium text-gray-900">{{ count($intermediair->customers) }}</div>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>

                </div> <!-- End info-container -->

                <div class="info-container overflow-hidden rounded-lg bg-white shadow">
                    <div class="p-5">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <svg class="h-6 w-6 text-gray-400" x-description="Heroicon name: outline/check-circle"
                                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="truncate text-sm font-medium text-gray-500">{{ __('dashboard.done-current-year') }} {{ now()->year }}</dt>
                                    <dd>
                                        <div class="text-lg font-medium text-gray-900">500</div>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>

                </div> <!-- End info-container -->

            </div> <!-- End infos-container -->
        </div>
    </div>


    <div
        class="mx-auto max-w-8xl ">


        <!-- left-column -->
        <div
            class=" ">

            <h2 class=" flex-1 text-lg font-medium leading-6 text-gray-900">
                Trainingen for {{ $intermediair->companyname }}
            </h2>

            <div>
                <div class="filter flex items-center justify-between mx-auto mt-4 max-w-8xl  text-xs">
                    <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                        <li><a href="#" class="border-b-4 pb-3 border-orange-400">All Trainings (87)</a></li>
                        <li><a href="#"
                               class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-orange-400">Planned
                                (6)</a></li>
                        <li><a href="#"
                               class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-orange-400">In
                                Option (1)</a></li>
                        <li><a href="#"
                               class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-orange-400">On
                                Hold (0)</a></li>
                        <li><a href="#"
                               class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-orange-400">Done
                                (2)</a></li>
                        <li><a href="#"
                               class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-orange-400">On
                                Concept Invoice (2)</a></li>
                        <li><a href="#"
                               class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-orange-400">On
                                Invoice (244)</a></li>

                    </ul>

                </div><!-- end filters -->

                <!-- Activity list (smallest breakpoint only) -->
                <div class="shadow sm:hidden">
                    <ul role="list" class="mt-2 divide-y divide-gray-200 overflow-hidden shadow sm:hidden">
                        <li>
                            <a href="#" class="block bg-white px-4 py-4 hover:bg-gray-50">
                <span class="flex items-center space-x-4">
                  <span class="flex flex-1 space-x-2 truncate">

                    <svg class="h-5 w-5 flex-shrink-0 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd"
                            d="M1 4a1 1 0 011-1h16a1 1 0 011 1v8a1 1 0 01-1 1H2a1 1 0 01-1-1V4zm12 4a3 3 0 11-6 0 3 3 0 016 0zM4 9a1 1 0 100-2 1 1 0 000 2zm13-1a1 1 0 11-2 0 1 1 0 012 0zM1.75 14.5a.75.75 0 000 1.5c4.417 0 8.693.603 12.749 1.73 1.111.309 2.251-.512 2.251-1.696v-.784a.75.75 0 00-1.5 0v.784a.272.272 0 01-.35.25A49.043 49.043 0 001.75 14.5z"
                            clip-rule="evenodd"/>
                    </svg>
                    <span class="flex flex-col truncate text-sm text-gray-500">
                      <span class="truncate">Payment to Molly Sanders</span>
                      <span><span class="font-medium text-gray-900">$20,000</span> USD</span>
                      <time datetime="2020-07-11">July 11, 2020</time>
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

                        <!-- More transactions... -->
                    </ul>

                    <nav class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3"
                         aria-label="Pagination">
                        <div class="flex flex-1 justify-between">
                            <a href="#"
                               class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:text-gray-500">Previous</a>
                            <a href="#"
                               class="relative ml-3 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:text-gray-500">Next</a>
                        </div>
                    </nav>
                </div>

                <!-- Activity table (small breakpoint and up) -->
                <div class="hidden sm:block">
                    <div class="mx-auto max-w-8xl p">
                        <div class="mt-2 flex flex-col">
                            <div class="min-w-full overflow-hidden overflow-x-auto align-middle shadow sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead>
                                    <tr>
                                        <th class="bg-gray-50 px-6 py-3 text-left text-sm font-semibold text-gray-900"
                                            scope="col">Status
                                        </th>
                                        <th class="bg-gray-50 px-6 py-3 text-left text-sm font-semibold text-gray-900"
                                            scope="col">Date
                                        </th>
                                        <th class="bg-gray-50 px-6 py-3 text-left text-sm font-semibold text-gray-900"
                                            scope="col">Training
                                        </th>

                                        <th class="bg-gray-50 px-6 py-3 text-left text-sm font-semibold text-gray-900"
                                            scope="col">Client
                                        </th>
                                        <th class="bg-gray-50 px-6 py-3 text-left text-sm font-semibold text-gray-900"
                                            scope="col">Acc.
                                        </th>


                                    </tr>
                                    </thead>

                                    <tbody class="divide-y divide-gray-200 bg-white">

                                    <tr class="training-row bg-white">
                                        <td class="hidden whitespace-nowrap px-6 py-4 text-sm text-gray-500 md:block">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 capitalize">Planned</span>
                                        </td>
                                        <td class="whitespace-nowrap px-6 py-4 text-right text-sm text-gray-500">
                                            <time datetime="2023-02-07 09:00">7 feb 2023 09:00 - 12:00</time>
                                        </td>
                                        <td class="w-full max-w-0 whitespace-nowrap px-6 py-4 text-sm text-gray-900">
                                            <div class="truncate text-gray-500 group-hover:text-gray-900">Outlook tips
                                                and
                                            </div>
                                            <div class="text-xs text-gray-400">Purchase Nr.: #ORD-AAAAA-55555</div>
                                        </td>

                                        <td class="whitespace-nowrap px-6 py-4 text-right text-sm text-gray-500">
                                            <span class="font-medium text-gray-500">Gemeente Groningen</span>
                                        </td>

                                        <td class="whitespace-nowrap px-6 py-4 text-right text-sm text-gray-500">
                                            <span class="font-medium text-gray-500">Arjen Schrijvers</span>
                                        </td>

                                    </tr> <!-- End Training-row -->


                                    </tbody>
                                </table>
                                <!-- Pagination -->
                                <nav
                                    class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6"
                                    aria-label="Pagination">
                                    <div class="hidden sm:block">
                                        <p class="text-sm text-gray-700">
                                            Showing
                                            <span class="font-medium">1</span>
                                            to
                                            <span class="font-medium">10</span>
                                            of
                                            <span class="font-medium">20</span>
                                            trainings
                                        </p>
                                    </div>
                                    <div class="flex flex-1 justify-between sm:justify-end">
                                        <a href="#"
                                           class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Previous</a>
                                        <a href="#"
                                           class="relative ml-3 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Next</a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>


        <div class="mt-4 grid grid-cols-1  gap-5 sm:grid-cols-2 lg:grid-cols-2 ">


            <div class="">
                <div class="info-container overflow-hidden rounded-lg bg-white shadow">
                    <h2 class="px-6 py-4 flex-1 text-lg font-medium leading-6 text-gray-900">
                        Account managers
                    </h2>
                    <div>
                        <table class="w-full whitespace-nowrap text-left">

                            <tbody class="divide-y divide-white/5">
                            @foreach ($accountmanagers as $accountmanager)
                                <tr>
                                    <td class="py-4 pl-4 pr-8 sm:pl-6 lg:pl-8">
                                        <div class="flex items-center gap-x-4">
                                            <img class="hidden h-8 w-8 rounded-full bg-gray-800 sm:block"
                                                 @php
                                                     $hash = md5(strtolower(trim( $accountmanager->email)));
                                                 @endphp

                                                 src="https://www.gravatar.com/avatar/{{ $hash }}?d=mp"
                                                 alt="{{ $accountmanager->name }}">
                                            <div
                                                class="truncate text-sm font-medium leading-6 ">{{ $accountmanager->name }}
                                                <br/>
                                                <span
                                                    class="text-xs text-gray-400">{{ $accountmanager->email }} | {{ $accountmanager->phone }}</span>
                                            </div>
                                        </div>
                                    </td>

                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="">
                <div class=" info-container overflow-hidden rounded-lg bg-white shadow">
                    <div>
                        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                            <div class="sm:flex sm:items-center">
                                <div class="sm:flex-auto">
                                    <h2 class="pt-4 flex-1 text-lg font-medium leading-6 text-gray-900">Customers</h2>
                                    <p class="mt-2 text-sm text-gray-500">Find all customers of this intermediair below.</p>
                                </div>
                                <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                                    <button type="button" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add Customer</button>
                                </div>
                            </div>
                        </div>
                        <div class="mt-8 flow-root overflow-hidden">
                            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                                <table class="w-full text-left">
                                    <thead class="bg-white">
                                    <tr>
                                        <th scope="col" class="relative isolate py-3.5 pr-3 text-left text-sm font-semibold text-gray-900">
                                            Customer
                                            <div class="absolute inset-y-0 right-full -z-10 w-screen border-b border-b-gray-200"></div>
                                            <div class="absolute inset-y-0 left-0 -z-10 w-screen border-b border-b-gray-200"></div>
                                        </th>

                                        <th scope="col" class="relative py-3.5 pl-3">
                                            <span class="sr-only">show</span>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($customers as $customer)
                                        <tr>
                                            <td class="relative py-4 pr-3 text-sm font-medium text-gray-900">
                                                {{ $customer->customername }}<br/>
                                                <span
                                                    class="text-xs text-gray-400">client: {{ $customer->clientname }}</span>
                                                <div class="absolute bottom-0 right-full h-px w-screen bg-gray-100"></div>
                                                <div class="absolute bottom-0 left-0 h-px w-screen bg-gray-100"></div>
                                            </td>


                                            <td class="relative py-4 pl-3 text-right text-sm font-medium">
                                                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit<span class="sr-only">, {{ $customer->customername }}</span></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    <!-- More customers... -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>


</x-app-layout>>
