<!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
<div
    :class="{'block': open, 'hidden': ! open}"
    class="relative z-50 lg:hidden"
    role="dialog"
    aria-modal="true"
>

    <div
        class="fixed inset-0
            bg-gray-900/80"
        x-show="open"
        x-transition:enter="transition-opacity ease-linear duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition-opacity ease-linear duration-300"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0">
    </div>

    <div class="fixed inset-0 flex">

        <div class="relative mr-16 flex w-full max-w-xs flex-1"
             x-show="open"
             x-transition:enter="transition ease-in-out duration-300 transform"
             x-transition:enter-start="-translate-x-full"
             x-transition:enter-end="translate-x-0"
             x-transition:leave="transition ease-in-out duration-300 transform"
             x-transition:leave-start="translate-x-0"
             x-transition:leave-end="-translate-x-full">
            <div class="absolute left-full top-0 flex w-16 justify-center pt-5"
                 x-show="open"
                 x-transition:enter="ease-in-out duration-300"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 x-transition:leave="ease-in-out duration-300"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0">
                <button @click="open = ! open" type="button" class="-m-2.5 p-2.5">
                    <span class="sr-only">Close sidebar</span>
                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            <!-- Sidebar component, swap this element with another sidebar if you like -->
            <div class="flex grow flex-col gap-y-5 overflow-y-auto bg-gray-900 px-6 pb-4 ring-1 ring-white/10">
                <div class="flex h-16 shrink-0 items-center">
                    <svg id="Logo" class="h-10" viewBox="0 0 147.72 50">
                        <path id="Path_1" data-name="Path 1" d="M3.787,21.536H.35V18.76H10.864v2.776H7.456V32.06H3.787Z"
                              transform="translate(-0.35 -0.565)" fill="#fff"/>
                        <path id="Path_2" data-name="Path 2"
                              d="M16.4,26.954V32.06H12.83V18.76H18.9c2.912,0,4.514,1.544,4.514,3.65a3.068,3.068,0,0,1-2.048,3.136c1.388.534,1.8,1.65,1.8,3.184v.408a21.454,21.454,0,0,0,.155,2.912h-3.53a9.708,9.708,0,0,1-.262-2.912v-.379c0-1.388-.456-1.806-1.874-1.806Zm0-2.611h1.544c1.087,0,1.854-.408,1.854-1.534s-.7-1.446-1.621-1.446H16.4Z"
                              transform="translate(-0.714 -0.565)" fill="#fff"/>
                        <path id="Path_3" data-name="Path 3"
                              d="M29.1,29.371l-.67,2.689H24.84l3.718-13.3H33.49l3.883,13.3h-3.8l-.748-2.689Zm3.126-2.912c-.544-1.942-.971-3.883-1.281-5.281H30.9c-.272,1.466-.728,3.388-1.223,5.281Z"
                              transform="translate(-1.083 -0.565)" fill="#fff"/>
                        <path id="Path_4" data-name="Path 4" d="M42.889,18.76v13.3H39.21V18.76Z"
                              transform="translate(-1.512 -0.565)" fill="#fff"/>
                        <path id="Path_5" data-name="Path 5"
                              d="M45.67,32.06V18.76h4.437c2.806,6.737,3.378,8.271,3.543,8.825h.107c-.136-1.553-.184-3.883-.184-5.893V18.779h3.359v13.3h-4.32c-3.068-7.524-3.514-8.737-3.679-9.223h0c.116,1.67.116,3.951.116,6.252v2.971Z"
                              transform="translate(-1.707 -0.565)" fill="#fff"/>
                        <path id="Path_6" data-name="Path 6"
                              d="M69.036,26.594H63.464v2.718h6.242L69.3,32.06H59.93V18.76h9.329v2.776H63.435v2.31h5.572Z"
                              transform="translate(-2.133 -0.565)" fill="#fff"/>
                        <path id="Path_7" data-name="Path 7"
                              d="M75.3,26.954V32.06H71.73V18.76h6.087c2.912,0,4.514,1.544,4.514,3.65a3.077,3.077,0,0,1-2.048,3.136c1.379.534,1.8,1.65,1.8,3.184v.408a19.981,19.981,0,0,0,.155,2.912H78.7a9.708,9.708,0,0,1-.262-2.912v-.379c0-1.388-.456-1.806-1.874-1.806Zm0-2.611h1.544c1.087,0,1.854-.408,1.854-1.534s-.7-1.446-1.631-1.446H75.3Z"
                              transform="translate(-2.487 -0.565)" fill="#fff"/>
                        <path id="Path_8" data-name="Path 8"
                              d="M87.525,28a1.806,1.806,0,0,0,1.942,1.738c1.213,0,1.6-.515,1.6-1.243,0-.971-.631-1.388-2.446-1.893-3.31-.893-4.3-2.155-4.3-4.019,0-2.679,2.184-4.058,4.961-4.058,3.291,0,5,1.582,5.145,4.048H91a1.514,1.514,0,0,0-1.66-1.524c-.9,0-1.4.417-1.4,1.126s.592,1.068,2.369,1.573c3.514.971,4.485,2.33,4.485,4.349,0,2.524-1.883,4.194-5.407,4.194-3.281,0-5.223-1.641-5.368-4.291Z"
                              transform="translate(-2.855 -0.558)" fill="#fff"/>
                        <ellipse id="Ellipse_1" data-name="Ellipse 1" cx="25.017" cy="25" rx="25.017" ry="25"
                                 transform="translate(97.676)" fill="#ed7a1d"/>
                        <rect id="Rectangle_3" data-name="Rectangle 3" width="25.017" height="25.017"
                              transform="translate(147.72 24.983) rotate(90)" fill="#ed7a1d"/>
                        <rect id="Rectangle_4" data-name="Rectangle 4" width="25.017" height="25.415"
                              transform="translate(123.112) rotate(90)" fill="#ed7a1d"/>
                        <path id="Path_9" data-name="Path 9"
                              d="M107.76,18.76h3.67v4.961h3.679V18.76H118.8v13.3h-3.689V26.575H111.43V32.06h-3.67Z"
                              transform="translate(-3.565 -0.565)" fill="#fff"/>
                        <path id="Path_10" data-name="Path 10"
                              d="M125.231,18.76v8.621c0,1.175.311,2.243,1.874,2.243s1.825-1.019,1.825-2.243V18.76h3.738v8.494c0,3.1-1.563,5.058-5.582,5.058s-5.475-1.942-5.475-5.058V18.76Z"
                              transform="translate(-3.994 -0.565)" fill="#fff"/>
                        <path id="Path_11" data-name="Path 11"
                              d="M135.519,18.76h5.9c3.194,0,4.378,1.66,4.378,3.407a2.7,2.7,0,0,1-1.738,2.709,3.242,3.242,0,0,1,2.175,3.155c0,2.427-1.8,4.029-4.912,4.029H135.5Zm5.068,5.145c1.155,0,1.66-.379,1.66-1.34s-.621-1.349-1.582-1.349h-1.592V23.9Zm-1.514,5.767H140.7a1.553,1.553,0,0,0,1.767-1.66c0-1.107-.6-1.67-1.942-1.67H139.04Z"
                              transform="translate(-4.4 -0.565)" fill="#fff"/>
                    </svg>
                </div>
                @include('menu');
            </div>
        </div>
    </div>
</div>

<!-- Static sidebar for desktop -->
<div class="hidden lg:fixed lg:inset-y-0 lg:z-50 lg:flex lg:w-72 lg:flex-col">
    <!-- Sidebar component, swap this element with another sidebar if you like -->
    <div class="flex grow flex-col gap-y-5 overflow-y-auto bg-gray-900 px-6 pb-4">
        <div class="flex h-16 shrink-0 items-center">
            <svg id="Logo" class="h-10" viewBox="0 0 147.72 50">
                <path id="Path_1" data-name="Path 1" d="M3.787,21.536H.35V18.76H10.864v2.776H7.456V32.06H3.787Z"
                      transform="translate(-0.35 -0.565)" fill="#fff"/>
                <path id="Path_2" data-name="Path 2"
                      d="M16.4,26.954V32.06H12.83V18.76H18.9c2.912,0,4.514,1.544,4.514,3.65a3.068,3.068,0,0,1-2.048,3.136c1.388.534,1.8,1.65,1.8,3.184v.408a21.454,21.454,0,0,0,.155,2.912h-3.53a9.708,9.708,0,0,1-.262-2.912v-.379c0-1.388-.456-1.806-1.874-1.806Zm0-2.611h1.544c1.087,0,1.854-.408,1.854-1.534s-.7-1.446-1.621-1.446H16.4Z"
                      transform="translate(-0.714 -0.565)" fill="#fff"/>
                <path id="Path_3" data-name="Path 3"
                      d="M29.1,29.371l-.67,2.689H24.84l3.718-13.3H33.49l3.883,13.3h-3.8l-.748-2.689Zm3.126-2.912c-.544-1.942-.971-3.883-1.281-5.281H30.9c-.272,1.466-.728,3.388-1.223,5.281Z"
                      transform="translate(-1.083 -0.565)" fill="#fff"/>
                <path id="Path_4" data-name="Path 4" d="M42.889,18.76v13.3H39.21V18.76Z"
                      transform="translate(-1.512 -0.565)" fill="#fff"/>
                <path id="Path_5" data-name="Path 5"
                      d="M45.67,32.06V18.76h4.437c2.806,6.737,3.378,8.271,3.543,8.825h.107c-.136-1.553-.184-3.883-.184-5.893V18.779h3.359v13.3h-4.32c-3.068-7.524-3.514-8.737-3.679-9.223h0c.116,1.67.116,3.951.116,6.252v2.971Z"
                      transform="translate(-1.707 -0.565)" fill="#fff"/>
                <path id="Path_6" data-name="Path 6"
                      d="M69.036,26.594H63.464v2.718h6.242L69.3,32.06H59.93V18.76h9.329v2.776H63.435v2.31h5.572Z"
                      transform="translate(-2.133 -0.565)" fill="#fff"/>
                <path id="Path_7" data-name="Path 7"
                      d="M75.3,26.954V32.06H71.73V18.76h6.087c2.912,0,4.514,1.544,4.514,3.65a3.077,3.077,0,0,1-2.048,3.136c1.379.534,1.8,1.65,1.8,3.184v.408a19.981,19.981,0,0,0,.155,2.912H78.7a9.708,9.708,0,0,1-.262-2.912v-.379c0-1.388-.456-1.806-1.874-1.806Zm0-2.611h1.544c1.087,0,1.854-.408,1.854-1.534s-.7-1.446-1.631-1.446H75.3Z"
                      transform="translate(-2.487 -0.565)" fill="#fff"/>
                <path id="Path_8" data-name="Path 8"
                      d="M87.525,28a1.806,1.806,0,0,0,1.942,1.738c1.213,0,1.6-.515,1.6-1.243,0-.971-.631-1.388-2.446-1.893-3.31-.893-4.3-2.155-4.3-4.019,0-2.679,2.184-4.058,4.961-4.058,3.291,0,5,1.582,5.145,4.048H91a1.514,1.514,0,0,0-1.66-1.524c-.9,0-1.4.417-1.4,1.126s.592,1.068,2.369,1.573c3.514.971,4.485,2.33,4.485,4.349,0,2.524-1.883,4.194-5.407,4.194-3.281,0-5.223-1.641-5.368-4.291Z"
                      transform="translate(-2.855 -0.558)" fill="#fff"/>
                <ellipse id="Ellipse_1" data-name="Ellipse 1" cx="25.017" cy="25" rx="25.017" ry="25"
                         transform="translate(97.676)" fill="#ed7a1d"/>
                <rect id="Rectangle_3" data-name="Rectangle 3" width="25.017" height="25.017"
                      transform="translate(147.72 24.983) rotate(90)" fill="#ed7a1d"/>
                <rect id="Rectangle_4" data-name="Rectangle 4" width="25.017" height="25.415"
                      transform="translate(123.112) rotate(90)" fill="#ed7a1d"/>
                <path id="Path_9" data-name="Path 9"
                      d="M107.76,18.76h3.67v4.961h3.679V18.76H118.8v13.3h-3.689V26.575H111.43V32.06h-3.67Z"
                      transform="translate(-3.565 -0.565)" fill="#fff"/>
                <path id="Path_10" data-name="Path 10"
                      d="M125.231,18.76v8.621c0,1.175.311,2.243,1.874,2.243s1.825-1.019,1.825-2.243V18.76h3.738v8.494c0,3.1-1.563,5.058-5.582,5.058s-5.475-1.942-5.475-5.058V18.76Z"
                      transform="translate(-3.994 -0.565)" fill="#fff"/>
                <path id="Path_11" data-name="Path 11"
                      d="M135.519,18.76h5.9c3.194,0,4.378,1.66,4.378,3.407a2.7,2.7,0,0,1-1.738,2.709,3.242,3.242,0,0,1,2.175,3.155c0,2.427-1.8,4.029-4.912,4.029H135.5Zm5.068,5.145c1.155,0,1.66-.379,1.66-1.34s-.621-1.349-1.582-1.349h-1.592V23.9Zm-1.514,5.767H140.7a1.553,1.553,0,0,0,1.767-1.66c0-1.107-.6-1.67-1.942-1.67H139.04Z"
                      transform="translate(-4.4 -0.565)" fill="#fff"/>
            </svg>
        </div>
        @include('menu');
    </div>
</div>

