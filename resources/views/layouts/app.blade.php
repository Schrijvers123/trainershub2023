<!DOCTYPE html>
<html class="h-full bg-gray-100" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>
<body class="h-full">
<!--
This example requires some changes to your config:

```
// tailwind.config.js
module.exports = {
// ...
plugins: [
  // ...
  require('@tailwindcss/forms'),
],
}
```
-->
<!--
  This example requires updating your template:

  ```
  <html class="h-full bg-white">
  <body class="h-full">
  ```
-->
<div>
    <div x-data="{ open: false }">
        <x-banner />
        <x-main-menu/>

        <div class="lg:pl-72">
            <x-top-menu/>

            <main class="py-10">
                <div class="px-4 sm:px-6 lg:px-8">
                    <div class="min-h-screen bg-gray-100">


                        <div class="flex flex-col ">
                            <div class="py-0">
                                @if (isset($header))
                                    <div class="mx-auto max-w-8xl px-4 sm:px-6 md:px-8">
                                        <h2 class="text-2xl font-semibold text-gray-900">
                                            {{ $header }}
                                        </h2>
                                    </div>
                                @endif

                                <div class="mx-auto max-w-8xl">
                                    <main class="flex-1">
                                        {{ $slot }}
                                    </main>
                                    <!-- /End replace -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>

@stack('modals')

@livewireScripts
</body>
</html>
